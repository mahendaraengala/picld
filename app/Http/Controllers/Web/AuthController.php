<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Jobs\Web\SendPasswordResetMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

interface AuthInterface
{
    public function viewLogin();
    public function handleLogin(Request $request);
    public function viewRegister();
    public function handleRegister(Request $request);
    public function viewForgotPassword();
    public function handleForgotPassword(Request $request);
    public function viewResetPassword($token);
    public function handleResetPassword(Request $request, $token);
}

class AuthController extends Controller implements AuthInterface
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    /**
     * View Login
     *
     * @return mixed
     */
    public function viewLogin(): mixed
    {
        try {

            $previous_url = url()->previous();
            $base_url = url()->to('/');

            if (($previous_url != $base_url . '/login') && (substr($previous_url, 0, strlen($base_url)) === $base_url)) {
                session()->put('redirect_url', $previous_url);
            }

            return view('web.pages.auth.login');
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Handle Login
     *
     * @return mixed
     */
    public function handleLogin(Request $request): mixed
    {
        try {

            $validator = Validator::make($request->all(), [
                'email' => ['required', 'string', 'email', 'min:10', 'max:100', 'exists:users'],
                'password' => ['required', 'string', 'min:1', 'max:20']
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if (Auth::guard()->attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ], $request->get('remember'))) {
                if (session('redirect_url'))
                    return redirect()->to(session('redirect_url'));
                else
                    return redirect(RouteServiceProvider::USER_DASHBOARD);
            }

            return redirect()->back()->withErrors([
                'password' => [
                    'Wrong password'
                ]
            ])->withInput($request->only('email', 'remember'));
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * View Register
     *
     * @return mixed
     */
    public function viewRegister(): mixed
    {
        try {
            
            return view('web.pages.auth.register');
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Handle Register
     *
     * @return mixed
     */
    public function handleRegister(Request $request): mixed
    {
        try {

            $validation = Validator::make($request->all(), [
                'name' => ['required', 'string', 'min:1', 'max:250'],
                'email' => ['required', 'string', 'email', 'unique:users', 'min:1', 'max:250'],
                'phone' => ['required', 'numeric', 'unique:users', 'digits:10'],
                'password' => ['required', 'string', 'min:6', 'max:20', 'confirmed'],
            ]);

            if ($validation->fails()) {
                return redirect()->back()->withErrors($validation)->withInput();
            }

            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->password = Hash::make($request->input('password'));
            $user->generateUserProfile();
            $user->save();

            Auth::login($user);

            if (session('redirect_url')) {
                return redirect()->to(session('redirect_url'));
            } else {
                return redirect(RouteServiceProvider::USER_DASHBOARD);
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
     * View Forgot Password
     *
     * @return mixed
     */
    public function viewForgotPassword(): mixed
    {
        try {

            return view('web.pages.auth.forgot-password');
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Handle Forgot Password
     *
     * @return RedirectResponse
     */
    public function handleForgotPassword(Request $request): RedirectResponse
    {
        try {

            $validator = Validator::make($request->all(), [
                'email' => ['required', 'string', 'email', 'exists:users', 'min:6', 'max:100'],
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $token = Str::random(64);

            DB::table('password_reset_tokens')->where('email',  $request->input('email'))->delete();

            DB::table('password_reset_tokens')->insert([
                'email' => $request->input('email'),
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            $url = route('web.view.reset.password', ['token' => $token]);

            dispatch(new SendPasswordResetMail($request->input('email'), $url));

            return redirect()->back()->with('message', [
                'status' => 'success',
                'title' => 'Link sent',
                'description' => 'The password reset link sent to your email'
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
     * View Reset Password
     *
     * @return mixed
     */
    public function viewResetPassword($token): mixed
    {
        try {

            if (DB::table('password_reset_tokens')->where('token', $token)->exists()) {

                $email = DB::table('password_reset_tokens')->where('token', $token)->first()->email;

                return view('web.pages.auth.reset-password', [
                    'token' => $token,
                    'email' => $email
                ]);
            }

            return abort(404);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Handle Reset Password
     *
     * @return mixed
     */
    public function handleResetPassword(Request $request, $token): mixed
    {
        try {

            $validator = Validator::make($request->all(), [
                'email' => ['required', 'string', 'email', 'exists:users', 'exists:password_reset_tokens', 'min:6', 'max:100'],
                'password' => ['required', 'string', 'confirmed', 'min:6', 'max:20']
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if (DB::table('password_reset_tokens')->where(['email' => $request->email, 'token' => $token])->exists()) {

                $user = User::where('email', $request->input('email'))->first();
                $user->password = Hash::make($request->input('password'));
                $user->password_updated_at = Carbon::now();
                $user->update();

                DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

                return redirect()->route('web.view.login')->with('message', [
                    'status' => 'success',
                    'title' => 'Password set',
                    'description' => 'Your account password is successfully set.'
                ]);
            }

            return abort(404);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * View Email Verified
     *
     * @return mixed
     */
    public function viewEmailVerified($token): mixed
    {
        try {

            if (DB::table('password_reset_tokens')->where('token', $token)->exists()) {

                $email = DB::table('password_reset_tokens')->where('token', $token)->first()->email;
                $user = User::where('email', $email)->first();

                if (!is_null($user->email_verified_at)) {
                    return abort(404);
                }

                $user->email_verified_at = Carbon::now();
                $user->update();

                return view('web.pages.email-verified');
            }

            return abort(404);
        } catch (Exception $exception) {
            return abort(404);
        }
    }
}