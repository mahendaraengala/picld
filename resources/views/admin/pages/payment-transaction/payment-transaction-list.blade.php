
@extends('admin.layouts.app')

@section('panel-header')
    <div>
        <ul class="breadcrumb">
            <li><a href="{{route('admin.view.dashboard')}}">Admin</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{route('admin.view.payment.transaction.list')}}">Payment Transactions</a></li>
        </ul>
        <h1 class="panel-title">Payment Transactions</h1>
    </div>
@endsection


@section('panel-body')
<figure class="panel-card">
    <div class="panel-card-header">
        <div>
            <h1 class="panel-card-title">Payment Transactions</h1>
            <p class="panel-card-description">List of all payment transactions in the system</p>
        </div>
    </div>
    <div class="panel-card-body">
        <div class="panel-card-table">
            <table class="data-table">
                <thead>
                    <th>ID</th>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Date & Time</th>
                    <th>Traking ID</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach ($payment_transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->referable_id }}</td>
                            <td>{{ \App\Models\User::find($transaction->user_id)?->name }}</td>
                            <td>{{ config('app.currency.symbol') . number_format($transaction->amount, 2) }}</td>
                            <td>{{ date('D d M Y h:i A', strtotime($transaction->created_at)) }}</td>
                            <td>{{ $transaction->transaction_id }}</td>
                            <td>
                                @switch($transaction->status)
                                    @case($payment_status::PENDING->value)
                                        <div class="table-status-warning">{{ $payment_status::PENDING->label() }}</div>
                                        @break
                                    @case($payment_status::FAILED->value)
                                        <div class="table-status-danger">{{ $payment_status::FAILED->label() }}</div>
                                        @break
                                    @case($payment_status::SUCCESS->value)
                                        <div class="table-status-success">{{ $payment_status::SUCCESS->label() }}</div>
                                        @break
                                @endswitch
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</figure>

@endsection

@section('panel-script')
<script>
    document.getElementById('payment-transaction-tab').classList.add('active');
</script>
@endsection