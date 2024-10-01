<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PaymentStatus;
use App\Http\Controllers\Controller;
use App\Models\PaymentTransaction;
use Exception;
use Illuminate\Http\Request;

interface PaymentTransactionInterface
{
    public function viewPaymentTransactionList();
    public function viewPaymentTransactionPreview($id);
}

class PaymentTransactionController extends Controller implements PaymentTransactionInterface
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
     * View Payment Transaction List
     *
     * @return mixed
     */
    public function viewPaymentTransactionList(): mixed
    {
        try {

            $payment_transactions = PaymentTransaction::all();

            $payment_status = PaymentStatus::class;

            return view('admin.pages.payment-transaction.payment-transaction-list', [
                'payment_transactions' => $payment_transactions,
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
     * View Payment Transaction Preview
     *
     * @return mixed
     */
    public function viewPaymentTransactionPreview($id): mixed
    {
        try {

            $payment_transaction = PaymentTransaction::find($id);

            if (!$payment_transaction) {
                return redirect()->back()->with('message', [
                    'status' => 'warning',
                    'title' => 'Payment transaction not found',
                    'description' => 'Payment transaction not found with specified ID'
                ]);
            }

            $payment_status = PaymentTransaction::class;

            return view('admin.pages.contact-enquiry.contact-enquiry-preview', [
                'payment_transaction' => $payment_transaction,
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
}
