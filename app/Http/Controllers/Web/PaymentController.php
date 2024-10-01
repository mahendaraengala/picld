<?php

namespace App\Http\Controllers\Web;

use App\Enums\PaymentGateway;
use App\Enums\PaymentStatus;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\PaymentTransaction;
use App\Models\User;
use App\Notifications\Web\OrderDetails;
use Auth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth')->except('logout');
    // }

    /**
     * Handle Payment Request
     *
     * @return mixed
     */
    public static function handleGeneratePaymentRequest($order_id): mixed
    {
        try {

            $order = Order::find($order_id);

            $payment_transaction = new PaymentTransaction();
            $payment_transaction->user_id = $order->user_id;
            $payment_transaction->referable()->associate($order);
            $payment_transaction->gateway = PaymentGateway::CCAVENUE;
            $payment_transaction->token = Str::random(64);
            $payment_transaction->status = PaymentStatus::PENDING;
            $payment_transaction->amount = $order->total_amount;
            $payment_transaction->save();

            $data = array(
                'tid' => strtotime(date('Y-m-d H:i:s')),
                'merchant_id' => '2888514',
                'currency' => 'INR',
                'redirect_url' => route('web.handle.payment.response',['token' => $payment_transaction->token]),
                'cancel_url' => route('web.handle.payment.response',['token' => $payment_transaction->token]),
                'language' => 'en',
                'integration_type' => 'iframe_normal',
                'order_id' => $payment_transaction->id,
                'amount' => $payment_transaction->amount,
                'billing_name' => $order->name,
                'billing_address' => 'NA',
                'billing_city' => 'NA',
                'billing_state' => 'NA',
                'billing_zip' => 'NA',
                'billing_country' => 'NA',
                'billing_tel' => $order->phone,
                'billing_email' => $order->email
            );

            $working_key = 'F50AE7F2195094EAFACFA067799F533A';
            $access_code = 'AVBP27KK54AB60PBBA';
            $merchant_data = '';

            foreach ($data as $key => $value) {
                $merchant_data .= $key . '=' . $value . '&';
            }

            $encrypted_data = ccavenueencrypt($merchant_data, $working_key);

            $production_url = 'https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest=' . $encrypted_data . '&access_code=' . $access_code;
            return $production_url;
            
        } catch (Exception $exception) {
            return false;
        }
    }

    /**
     * Handle Payment Request
     *
     * @return mixed
     */
    public static function handleReGeneratePaymentRequest($order_id): mixed
    {
        try {

            $order = Order::find($order_id);

            if ($order->payment_status != PaymentStatus::PENDING->value) {
                return abort(404);
            }
            
            return redirect(PaymentController::handleGeneratePaymentRequest($order->id));
            
        } catch (Exception $exception) {
            return false;
        }
    }

     /**
     * Handle Payment Request
     *
     * @return mixed
     */
    public function handlePaymentRequest($order_id): mixed
    {
        try {

            $order = Order::find($order_id);

            $payment_transaction = new PaymentTransaction();
            $payment_transaction->user_id = $order->user_id;
            $payment_transaction->referable()->associate($order);
            $payment_transaction->gateway = PaymentGateway::CCAVENUE;
            $payment_transaction->token = Str::random(64);
            $payment_transaction->status = PaymentStatus::PENDING;
            $payment_transaction->amount = $order->total_amount;
            $payment_transaction->save();

            $data = array(
                'tid' => strtotime(date('Y-m-d H:i:s')),
                'merchant_id' => '2888514',
                'currency' => 'INR',
                'redirect_url' => route('web.handle.payment.response',['token' => $payment_transaction->token]),
                'cancel_url' => route('web.handle.payment.response',['token' => $payment_transaction->token]),
                'language' => 'en',
                'integration_type' => 'iframe_normal',
                'order_id' => $payment_transaction->id,
                'amount' => $payment_transaction->amount,
                'billing_name' => $order->name,
                'billing_address' => 'NA',
                'billing_city' => 'NA',
                'billing_state' => 'NA',
                'billing_zip' => 'NA',
                'billing_country' => 'NA',
                'billing_tel' => $order->phone,
                'billing_email' => $order->email
            );

            $working_key = 'F50AE7F2195094EAFACFA067799F533A';
            $access_code = 'AVBP27KK54AB60PBBA';
            $merchant_data = '';

            foreach ($data as $key => $value) {
                $merchant_data .= $key . '=' . $value . '&';
            }

            $encrypted_data = ccavenueencrypt($merchant_data, $working_key);

            $production_url = 'https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest=' . $encrypted_data . '&access_code=' . $access_code;
            return $production_url;
            
        } catch (Exception $exception) {
            return false;
        }
    }

     /**
     * Handle Payment Response
     *
     * @return mixed
     */
    public function handlePaymentResponse(Request $request, $token): mixed
    {
        try {

            
            $working_key = 'F50AE7F2195094EAFACFA067799F533A';
            $access_code = 'AVBP27KK54AB60PBBA';
            $merchant_data = '';

            $rcvdString = ccavenuedecrypt($request['encResp'], $working_key);

            $decryptValues = explode('&', $rcvdString);
            $dataSize = sizeof($decryptValues);

            $response = [];

            for ($i = 0; $i < $dataSize; $i++) {
                $information = explode('=', $decryptValues[$i]);
                $response[$information[0]] = $information[1];
            }

            $status = "";
            $title = "";

            $payment_transaction = PaymentTransaction::find($response['order_id']);
            switch ($response['order_status']) {
                case "Aborted":
                    $status = "error";
                    $title = "Payment Aborted";
                    $payment_transaction->status = PaymentStatus::FAILED;
                    break;
                case "Success":
                    $status = "success";
                    $title = "Payment Success";
                    $payment_transaction->status = PaymentStatus::SUCCESS;
                    break;
                case "Failure":
                    $status = "error";
                    $title = "Payment Failure";
                    $payment_transaction->status = PaymentStatus::FAILED;
                    break;
                default:
                    $status = "error";
                    $title = "Payment Failure";
                    $payment_transaction->status = PaymentStatus::FAILED;
                    break;
            }
            $payment_transaction->transaction_id = $response['tracking_id'];
            $payment_transaction->meta_data = json_encode($response);
            $payment_transaction->save();

            $order = Order::find($payment_transaction->referable_id);
            switch ($response['order_status']) {
                case "Aborted":
                    $order->payment_status = PaymentStatus::PENDING->value;
                    break;
                case "Success":
                    $order->payment_status = PaymentStatus::COMPLETED->value;
                    break;
                case "Failure":
                    $order->payment_status = PaymentStatus::PENDING->value;
                    break;
                default:
                    $order->payment_status = PaymentStatus::PENDING->value;
                    break;
            }
            $order->update();

            $user = User::find($payment_transaction->user_id);
            
            Notification::route('mail', env('MAIL_TO'))->notify(new OrderDetails($order));
            Notification::route('mail', 'bidmanagement@pidatacenters.com')->notify(new OrderDetails($order));
            Notification::route('mail', 'operations@pidatacenters.com')->notify(new OrderDetails($order));
            Notification::route('mail', 'pifinance@pidatacenters.com')->notify(new OrderDetails($order));

            Auth::login($user);
            
            return redirect()->route('web.view.order.details',['uuid' => $order->uuid])->with('message', [
                'status' => $status,
                'title' => $title,
                'description' => "Reason : ". $response['status_message']
            ]);
            
        } catch (Exception $exception) {
            return redirect()->route('web.view.dashboard')->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }
}
