<?php

namespace App\Http\Controllers\Web;

use App\Enums\Gender;
use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use App\Http\Controllers\Controller;
use App\Jobs\Web\SendEmailVerificationLink;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\QuoteEnquiry;
use App\Models\User;
use App\Models\UserSubscription;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Support\Str;

interface DashboardInterface 
{
    public function viewDashboard();
    public function viewDashboardSetting();
    public function handleAccountInformationUpdate(Request $request);
    public function handleAccountPasswordUpdate(Request $request);
}

class DashboardController extends Controller implements DashboardInterface
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    /**
     * View Dashboard
     *
     * @return mixed
     */
    public function viewDashboard(): mixed
    {
        try {
            return view('web.pages.dashboard.dashboard');
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * View Dashboard Setting
     *
     * @return mixed
     */
    public function viewDashboardSetting(): mixed
    {
        try {

            return view('web.pages.dashboard.account-setting');
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * View Orders List
     *
     * @return mixed
     */
    public function viewOrderList(): mixed
    {
        try {

            $order_status = OrderStatus::class;
            $payment_status = PaymentStatus::class;

            $orders = Order::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();

            return view('web.pages.dashboard.order-list',[
                'orders' => $orders,
                'order_status' => $order_status,
                'payment_status' => $payment_status
            ]);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * View Orders Details
     *
     * @return mixed
     */
    public function viewOrderDetails($uuid): mixed
    {
        try {


            $order = Order::where('user_id', auth()->user()->id)
                ->where('uuid', $uuid)
                ->first();
            
            if (is_null($order)) {
                return abort(404);
            }

            $order_status = OrderStatus::class;
            $payment_status = PaymentStatus::class;

            $order_item = OrderItem::where('order_id', $order->id)->first();

            return view('web.pages.dashboard.order-details',[
                'order' => $order,
                'payment_status' => $payment_status,
                'order_status' => $order_status,
                'order_item' => $order_item
            ]);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Handle Account Information Update
     *
     * @return RedirectResponse
     */
    public function handleAccountInformationUpdate(Request $request): RedirectResponse
    {
        try {

            $validation = Validator::make($request->all(), [
                'name' => ['required', 'string', 'min:1', 'max:250'],
                'email' => ['required', 'string', 'min:1', 'max:250', Rule::unique('users')->ignore(auth()->user()->id, 'id')],
                'phone' => ['required', 'numeric', 'digits:10', Rule::unique('users')->ignore(auth()->user()->id, 'id')],
                'profile_image' => ['nullable', 'file', 'mimes:jpg,jpeg,png,webp'],
                'gender' => ['required', 'string', new Enum(Gender::class)],
                'date_of_birth' => ['nullable', 'string'],
                'account_password' => ['required', 'string', 'min:1', 'max:250'],
            ]);

            if ($validation->fails()) {
                return redirect()->back()->withErrors($validation)->withInput();
            }

            if (Hash::check($request->input('account_password'), auth()->user()->password)) {

                $user = User::find(auth()->user()->id);
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->phone = $request->input('phone');
                $user->gender = $request->input('gender');
                $user->date_of_birth = $request->input('date_of_birth');
                if ($request->hasFile('profile_image')) {
                    if (!is_null(auth()->user()->profile_image))
                        Storage::delete(auth()->user()->profile_image);
                    $user->profile_image = $request->file('profile_image')->store('users');
                }
                $user->update();

                return redirect()->back()->with('message', [
                    'status' => 'success',
                    'title' => 'Changes Saved',
                    'description' => 'The changes are successfully saved'
                ]);
            } else {
                return redirect()->back()->withErrors(['account_password' => 'Incorrect password']);
            }
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Handle Account Password Update
     *
     * @return RedirectResponse
     */
    public function handleAccountPasswordUpdate(Request $request): RedirectResponse
    {
        try {

            $validation = Validator::make($request->all(), [
                'current_password' => ['required', 'string', 'min:1', 'max:250'],
                'password' => ['required', 'string', 'min:6', 'max:20', 'confirmed'],
            ]);

            if ($validation->fails()) {
                return redirect()->back()->withErrors($validation)->withInput();
            }

            if (Hash::check($request->input('current_password'), auth()->user()->password)) {

                $user = User::find(auth()->user()->id);
                $user->password = Hash::make($request->input('password'));
                $user->update();

                return redirect()->back()->with('message', [
                    'status' => 'success',
                    'title' => 'Password Updated',
                    'description' => 'The password is successfully updated'
                ]);
            } else {
                return redirect()->back()->withErrors([
                    'current_password' => 'Incorrect password'
                ]);
            }
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Handle Send Email Verification Link
     *
     * @return RedirectResponse
     */
    public function handleSendEmailVerificationLink(Request $request): RedirectResponse
    {
        try {
            
            $token = Str::random(64);

            DB::table('password_reset_tokens')->where('email',  auth()->user()->email)->delete();

            DB::table('password_reset_tokens')->insert([
                'email' => auth()->user()->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            $url = route('web.view.verify.email', ['token' => $token]);

            dispatch(new SendEmailVerificationLink(auth()->user()->email, $url));

            return redirect()->back()->with('message', [
                'status' => 'success',
                'title' => 'Link sent',
                'description' => 'The verification link sent to your email'
            ]);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Handle Download Invoice
     *
     * @return mixed
     */
    public function handleDownloadInvoice($uuid): mixed
    {
        try {
            
            $order = Order::where('uuid', $uuid)->where('user_id', auth()->user()->id)->first();

            $order_item = OrderItem::where('order_id', $order->id)->first();

            $pdf = Pdf::loadView('web.documents.invoice', [
                'order' => $order,
                'order_item' => $order_item
            ]);

            // return $pdf->stream();

            return $pdf->download('Order Invoice.pdf');
            
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }
}