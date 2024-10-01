@extends('admin.layouts.app')

@section('panel-header')
    <div>
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.view.dashboard') }}">Admin</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{ route('admin.view.order.list') }}">Orders</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{ route('admin.view.order.preview', ['id' => $order->id]) }}">Preview Order</a></li>
        </ul>
        <h1 class="panel-title">Preview Order</h1>
    </div>
@endsection

@section('panel-body')
    <figure class="panel-card">
        <div class="panel-card-header">
            <div>
                <h1 class="panel-card-title">Preview Information</h1>
                <p class="panel-card-description">Please check all the information</p>
            </div>
            <div>
                <button type="button" class="btn-danger-sm flex items-center justify-center" onclick="handleDelete()">
                    <span class="lg:block md:block sm:hidden mr-2">Delete</span>
                    <i data-feather="trash"></i>
                </button>
            </div>
        </div>
        <div class="panel-card-body space-y-5">
            <div class="space-y-5">
                <div>
                    <h1 class="title">General Information</h1>
                </div>
                <div>
                    <table class="font-medium text-sm">
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Name</td>
                            <td class="pr-7 pb-3">{{ $order->name }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Email</td>
                            <td class="pr-7 pb-3">{{ $order->email }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Phone</td>
                            <td class="pr-7 pb-3">{{ $order->phone }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Company Name</td>
                            <td class="pr-7 pb-3">{{ $order->company_name }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Company Website</td>
                            <td class="pr-7 pb-3">{{ $order->company_website }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Date</td>
                            <td class="pr-7 pb-3">{{ date('D d M Y', strtotime($order->created_at)) . "at ". date('h:i A', strtotime($order->created_at)) }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Payment Status</td>
                            <td class="pr-7 pb-3">
                                @switch($order->payment_status)
                                     @case($payment_status::PENDING->value)
                                        <div class="table-status-warning">{{ $payment_status::PENDING->label() }}</div>
                                        @break
                                    @case($payment_status::COMPLETED->value)
                                        <div class="table-status-success">{{ $payment_status::COMPLETED->label() }}</div>
                                        @break
                                @endswitch
                            </td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Order Status</td>
                            <td class="pr-7 pb-3">
                                @switch($order->status)
                                    @case($order_status::PLACED->value)
                                        <div class="table-status-warning">{{ $order_status::PLACED->label() }}</div>
                                        @break
                                    @case($order_status::CONFIRMED->value)
                                        <div class="table-status-success">{{ $order_status::CONFIRMED->label() }}</div>
                                        @break
                                    @case($order_status::CANCELLED->value)
                                        <div class="table-status-danger">{{ $order_status::CANCELLED->label() }}</div>
                                        @break
                                @endswitch
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            

            <div class="space-y-5">
                <div>
                    <h1 class="title">Configuration Information</h1>
                </div>
                <div>
                    <table class="border">
                        @foreach (json_decode($order_item->configuration) as $key => $configuration)
                            @php
                                $array = ['gross_amount', 'submit','download_pdf', 'otc_amount','convenience_amount','gst_amount','total_amount']
                            @endphp
                            @if (!in_array($key, $array))
                            <tr>
                                <td class="px-3 py-2 border text-sm">
                                    {{ucwords(str_replace('_',' ',strtolower($key)))}}
                                </td>
                                <td class="px-3 py-2 border text-sm">
                                    {{$configuration}}
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="space-y-5">
                <div>
                    <h1 class="title">Billing Information</h1>
                </div>
                <div>
                    <table>
                        <tr>
                            <td class="pr-3 pb-2 font-medium text-sm">
                                Gross Amount
                            </td>
                            <td class="pr-3 pb-2 font-semibold text-sm">
                                {{ config('app.currency.symbol') . number_format($order->gross_amount, 2)}}
                            </td>
                        </tr>
                        <tr>
                            <td class="pr-3 pb-2 font-medium text-sm">
                                Convenience Fees
                            </td>
                            <td class="pr-3 pb-2 font-semibold text-sm">
                                {{ config('app.currency.symbol') . number_format($order->convenience_amount, 2)}}
                            </td>
                        </tr>
                        <tr>
                            <td class="pr-3 pb-2 font-medium text-sm">
                                GST
                            </td>
                            <td class="pr-3 pb-2 font-semibold text-sm">
                                {{ config('app.currency.symbol') . number_format($order->gst_amount, 2)}}
                            </td>
                        </tr>
                        <tr>
                            <td class="pr-3 pb-2 font-medium text-base">
                                Total Amount
                            </td>
                            <td class="pr-3 pb-2 font-semibold text-base">
                                {{ config('app.currency.symbol') . number_format($order->total_amount, 2)}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        @if ($order->status == $order_status::PLACED->value)
        <div class="panel-card-footer">
            <button class="btn-primary-md" onclick="handleOrderConfirmed()">Confirm Order</button>
            <a href="{{route('admin.handle.download.order.invoice', ['id' => $order->id])}}">
                <button class="btn-primary-md">Download Invoice</button>
            </a>
        </div>
        @endif
    </figure>
@endsection

@section('panel-script')
    <script>
        document.getElementById('order-tab').classList.add('active');

        const handleDelete = () => {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this order!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location =
                            "{{ route('admin.handle.order.delete', ['id' => $order->id]) }}";
                    }
                });
        }

        const handleOrderConfirmed = () => {
            swal({
                    title: "Confirm Order ?",
                    text: "Are you sure to confirm this order",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location =
                            "{{ route('admin.handle.order.confirm', ['id' => $order->id]) }}";
                    }
                });
        }
    </script>
@endsection