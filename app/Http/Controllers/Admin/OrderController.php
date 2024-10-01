<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
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
     * View Order List
     *
     * @return mixed
     */
    public function viewOrderList(): mixed
    {
        try {

            $orders = Order::all();

            $payment_status = PaymentStatus::class;
            $order_status = OrderStatus::class;

            return view('admin.pages.order.order-list', [
                'orders' => $orders,
                'payment_status' => $payment_status,
                'order_status' => $order_status
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
     * View Order Preview
     *
     * @return mixed
     */
    public function viewOrderPreview($id): mixed
    {
        try {

            $order = Order::find($id);

            if (!$order) {
                return redirect()->back()->with('message', [
                    'status' => 'warning',
                    'title' => 'Order not found',
                    'description' => 'Order not found with specified ID'
                ]);
            }

            $order_item = OrderItem::where('order_id', $order->id)->first();

            $payment_status = PaymentStatus::class;
            $order_status = OrderStatus::class;

            return view('admin.pages.order.order-preview', [
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
     * View Order Confirm
     *
     * @return mixed
     */
    function handleOrderConfirm($id): RedirectResponse 
    {
        try {

            $order = Order::find($id);

            if (!$order) {
                return redirect()->back()->with('message', [
                    'status' => 'warning',
                    'title' => 'Order not found',
                    'description' => 'Order not found with specified ID'
                ]);
            }

            $order->status = OrderStatus::CONFIRMED;
            $order->save();

            return redirect()->back()->with('message', [
                'status' => 'success',
                'title' => 'Order Confirmed',
                'description' => "Order is successfully confirmed"
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
     * Handle Delete Order
     *
     * @return mixed
     */
    public function handleOrderDelete($id): RedirectResponse 
    {
        try {

            $order = Order::find($id);

            if (!$order) {
                return redirect()->back()->with('message', [
                    'status' => 'warning',
                    'title' => 'Order not found',
                    'description' => 'Order not found with specified ID'
                ]);
            }

            $order->delete();

            return redirect()->back()->with('message', [
                'status' => 'success',
                'title' => 'Order Delete',
                'description' => "Order is successfully delete"
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
     * Handle Delete Order
     *
     * @return mixed
     */
    public function handleOrderDelete1(Request $request)
    {
        $orderIds = $request->input('order_ids');
        // dd($orderIds);
        try {
            
            $orderIds = $request->input('order_ids');
            // Order::whereIn('id', $orderIds)
            $order = Order::whereIn('id', $orderIds);

            if (!$order) {
                return redirect()->back()->with('message', [
                    'status' => 'warning',
                    'title' => 'Order not found',
                    'description' => 'Order not found with specified IDs'
                ]);
            }

            Order::whereIn('id', $orderIds)->delete();

            return redirect()->back()->with('message', [
                'status' => 'success',
                'title' => 'Order Delete',
                'description' => "Order is successfully delete"
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
    public function handleDownloadInvoice($id): mixed
    {
        try {
            
            $order = Order::find($id);

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
