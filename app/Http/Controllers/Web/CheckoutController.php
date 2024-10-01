<?php

namespace App\Http\Controllers\Web;

use App\Enums\OrderItemType;
use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Enum;
use Barryvdh\DomPDF\Facade\Pdf;

class CheckoutController extends Controller
{
    public function viewCheckout(Request $request) 
    {
        try {

            $validation = Validator::make($request->all(),[
                'item_type' => ['required','string', new Enum(OrderItemType::class)],
                'gross_amount' => ['required', 'numeric', 'min:1'],
                'convenience_amount' => ['required', 'numeric'],
                'gst_amount' => ['required', 'numeric'],
                'total_amount' => ['required', 'numeric', 'min:1'],
            ]);

            if ($validation->fails()) {
                return redirect()->back()->with('message', [
                    'status' => 'error',
                    'title' => 'Invalid Data',
                    'description' => $validation->errors()->first()
                ]);
            }

            if ($request->input('download_pdf')) {
                
                $pdf = Pdf::loadView('web.documents.configuration', [
                    'data' => $request->all()
                ]);

                return $pdf->download('Configuration Document.pdf');
            }
            
            return view('web.pages.checkout',[
                'configuration' => $request->all()
            ]);
 
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    public function handleCheckout(Request $request): RedirectResponse 
    {
        try {

            $validation = Validator::make($request->all(),[
                'name' => ['required', 'string', 'min:1', 'max:250'],
                'email' => ['required', 'string', 'min:1', 'max:250'],
                'phone' => ['required', 'numeric', 'digits:10'],
                'company_name' => ['required', 'string', 'min:1', 'max:250'],
                'company_website' => ['required', 'string', 'min:1', 'max:250'],
                'item_type' => ['required', 'string', new Enum(OrderItemType::class)],
                'gross_amount' => ['required', 'numeric'],
                'otc_amount' => ['nullable', 'numeric'],
                'convenience_amount' => ['required', 'numeric'],
                'gst_amount' => ['required', 'numeric'],
                'total_amount' => ['required', 'numeric'],
            ]);
            
            if ($validation->fails()) {
                return redirect()->back()->with('message', [
                    'status' => 'error',
                    'title' => 'Invalid Data',
                    'description' => $validation->errors()->first()
                ]);
            }

            $order = new Order();
            $order->ref_no = random_int(999999,10000000);
            $order->user_id = auth()->user()->id;
            $order->name = $request->input('name');
            $order->email = $request->input('email');
            $order->phone = $request->input('phone');
            $order->company_name = $request->input('company_name');
            $order->company_website = $request->input('company_website');
            $order->gross_amount = $request->input('gross_amount');
            $order->otc_amount = $request->input('otc_amount');
            $order->convenience_amount = $request->input('convenience_amount');
            $order->gst_amount = $request->input('gst_amount');
            $order->total_amount = $request->input('total_amount');
            $order->status = OrderStatus::PLACED;
            $order->payment_type = "PREPAID";
            $order->payment_status = PaymentStatus::PENDING;
            $order->save();

            $order_item = new OrderItem();
            $order_item->type = $request->input('item_type');
            $order_item->user_id = auth()->user()->id;
            $order_item->order_id = $order->id;
            $order_item->configuration = $request->input('configuration');
            $order_item->total = $request->input('total_amount');
            $order_item->save();

            $payment_link = PaymentController::handleGeneratePaymentRequest($order->id);

            if ($payment_link) {
                return redirect($payment_link);
            }
            else {
                return redirect()->route('web.view.dashboard')->with('message', [
                    'status' => 'error',
                    'title' => 'An error occured',
                    'description' => 'There is an internal server while creating payment'
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
}
