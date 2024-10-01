@extends('web.layouts.auth')

@section('web-section')
    <section class="py-6 border-b shadow-sm relative bg-white lg:px-0 sm:px-7">
        <div class="lg:container">
            <ul class="flex items-center justify-start space-x-3">
                {{-- <li><a href="{{ route('web.view.home') }}" class="link">Home</a></li> --}}
                <li><a href="{{ route('web.view.pi-ai-coe') }}" class="link">Home</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="{{ route('web.view.dashboard') }}" class="link">Dashboard</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="{{ route('web.view.order.list') }}" class="link">My Orders</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="{{ route('web.view.order.details', ['uuid' => $order->uuid]) }}" class="link">Details</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="relative">
        <div class="lg:container lg:py-20">
            <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-10">
                <div class="md:col-span-3 md:block sm:hidden">
                    @include('web.components.dashboard-sidebar')
                </div>
                <div class="md:col-span-9 md:space-y-10">

                    {{-- Dashboard (Start) --}}
                    <div class="bg-white lg:shadow-lg lg:rounded-lg overflow-clip relative lg:border border-b-0">
                        <div class="p-5 border-b">
                            <h1 class="font-semibold mb-1">Order Details</h1>
                            <p class="text-xs text-gray-500">Check your order information</p>
                            @csrf
                        </div>
                        <div class="p-5 space-y-5">

                            <div class="space-y-5">
                                <div>
                                    <h1 class="title">General Information</h1>
                                </div>
                                <div>
                                    <table class="font-medium text-sm">
                                        <tr>
                                            <td class="pr-7 pb-3 text-gray-600">Order Ref. No.</td>
                                            <td class="pr-7 pb-3">{{ $order->ref_no }}</td>
                                        </tr>
                                        <tr>
                                            <td class="pr-7 pb-3 text-gray-600">Name</td>
                                            <td class="pr-7 pb-3">{{ $order->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="pr-7 pb-3 text-gray-600">Email</td>
                                            <td class="pr-7 pb-3">{{ $order->email }}</td>
                                        </tr>
                                        <tr>
                                            <td class="pr-7 pb-3 text-gray-600">Phone</td>
                                            <td class="pr-7 pb-3">{{ $order->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td class="pr-7 pb-3 text-gray-600">Company Name</td>
                                            <td class="pr-7 pb-3">{{ $order->company_name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="pr-7 pb-3 text-gray-600">Company Website</td>
                                            <td class="pr-7 pb-3">{{ $order->company_website }}</td>
                                        </tr>
                                        <tr>
                                            <td class="pr-7 pb-3 text-gray-600">Date & Time</td>
                                            <td class="pr-7 pb-3">
                                                {{ date('D d M Y', strtotime($order->created_at)) . ' at ' . date('h:i A', strtotime($order->created_at)) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pr-7 pb-3 text-gray-600 align-top">Payment Status</td>
                                            <td class="pr-7 pb-3">
                                                @switch($order->payment_status)
                                                    @case($payment_status::PENDING->value)
                                                        <div class="text-red-500">{{ $payment_status::PENDING->label() }}</div>
                                                        <div>
                                                            <a href="{{ route('web.handle.payment.request.regenerate', ['order_id' => $order->id]) }}"
                                                                class="text-web-ascent-1-dark mt-2">Retry Payment</a>
                                                        </div>
                                                    @break

                                                    @case($payment_status::COMPLETED->value)
                                                        <div class="text-green-600">{{ $payment_status::COMPLETED->label() }}</div>
                                                    @break
                                                @endswitch
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pr-7 pb-3 text-gray-600">Order Status</td>
                                            <td class="pr-7 pb-3">
                                                @switch($order->status)
                                                    @case($order_status::PLACED->value)
                                                        <div class="table-status-warning">{{ $order_status::PLACED->label() }}
                                                        </div>
                                                    @break

                                                    @case($order_status::CONFIRMED->value)
                                                        <div class="table-status-success">{{ $order_status::CONFIRMED->label() }}
                                                        </div>
                                                    @break

                                                    @case($order_status::CANCELLED->value)
                                                        <div class="table-status-danger">{{ $order_status::CANCELLED->label() }}
                                                        </div>
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
                                                $array = [
                                                    'gross_amount',
                                                    'submit',
                                                    'download_pdf',
                                                    'otc_amount',
                                                    'convenience_amount',
                                                    'gst_amount',
                                                    'total_amount',
                                                ];
                                            @endphp
                                            @if (!in_array($key, $array))
                                                <tr>
                                                    <td class="px-3 py-2 border text-sm">
                                                        {{ ucwords(str_replace('_', ' ', strtolower($key))) }}
                                                    </td>
                                                    <td class="px-3 py-2 border text-sm">
                                                        {{ $configuration }}
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
                                                {{ config('app.currency.symbol') . number_format($order->gross_amount, 2) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pr-3 pb-2 font-medium text-sm">
                                                Convenience Fees
                                            </td>
                                            <td class="pr-3 pb-2 font-semibold text-sm">
                                                {{ config('app.currency.symbol') . number_format($order->convenience_amount, 2) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pr-3 pb-2 font-medium text-sm">
                                                GST
                                            </td>
                                            <td class="pr-3 pb-2 font-semibold text-sm">
                                                {{ config('app.currency.symbol') . number_format($order->gst_amount, 2) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pr-3 pb-2 font-medium text-base">
                                                Total Amount
                                            </td>
                                            <td class="pr-3 pb-2 font-semibold text-base">
                                                {{ config('app.currency.symbol') . number_format($order->total_amount, 2) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div>
                                <a href="{{ route('web.handle.download.order.invoice', ['uuid' => $order->uuid]) }}">
                                    <button class="btn-primary-sm">Download Invoice</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- Dashboard (End) --}}

                </div>
            </div>
        </div>
    </section>
@endsection

@section('web-script')
    <script>
        document.getElementById('order-tab').classList.add('active');
    </script>
@endsection
