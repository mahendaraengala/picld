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
                            <h1 class="font-semibold mb-1">My Orders</h1>
                            <p class="text-xs text-gray-500">List of all your orders</p>
                            @csrf
                        </div>
                        <div class="p-0">
                            @foreach ($orders as $order)
                                <div class="border-b">
                                    <div class="p-5 space-y-1">
                                        <h1 class="text-sm">Ref. No = {{ $order->ref_no }}</h1>
                                        <div class="space-x-1 flex items-center text-sm">
                                            <i data-feather="user" class="h-3.5 w-3.5"></i>
                                            <span>{{ $order->name }}</span>
                                        </div>
                                        <div class="space-x-1 flex items-center text-sm">
                                            <i data-feather="phone" class="h-3.5 w-3.5"></i>
                                            <span>{{ $order->phone }}</span>
                                        </div>
                                        <div class="space-x-1 flex items-center text-sm">
                                            <i data-feather="mail" class="h-3.5 w-3.5"></i>
                                            <span>{{ $order->email }}</span>
                                        </div>
                                        <h1 class="">Amount =
                                            {{ config('app.currency.symbol') . number_format($order->total_amount, 2) }}
                                        </h1>
                                        <div>
                                            <a href="{{ route('web.view.order.details', ['uuid' => $order->uuid]) }}"
                                                class="text-web-ascent-1 font-medium text-sm flex items-center space-x-1 w-fit">
                                                <span>View Order Details</span>
                                                <i data-feather="external-link" class="h-3.5 w-3.5"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
