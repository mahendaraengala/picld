<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

interface DashboardInterface
{
    public function viewDashboard();
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
        $this->middleware('auth:admin')->except('logout');
    }

    /**
     * View Dashboard
     *
     * @return mixed
     */
    public function viewDashboard(): mixed
    {
        try {

            $todays_orders_count = Order::whereRaw('date(created_at) = curdate()')->count();
            $total_registred_user_count = User::where('status', true)->count();
            $todays_contact_enquiries_count = ContactEnquiry::whereRaw('date(created_at) = curdate()')->count();

            $orders = Order::where('status', OrderStatus::PLACED->value)->get();

            $payment_status = PaymentStatus::class;
            $order_status = OrderStatus::class;

            return view('admin.pages.dashboard.dashboard',[
                'orders' => $orders,
                'payment_status' => $payment_status,
                'order_status' => $order_status,
                'todays_orders_count' => $todays_orders_count,
                'total_registred_user_count' => $total_registred_user_count,
                'todays_contact_enquiries_count' => $todays_contact_enquiries_count
            ]);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }
}