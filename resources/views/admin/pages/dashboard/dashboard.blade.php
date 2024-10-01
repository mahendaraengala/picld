@extends('admin.layouts.app')

@section('panel-header')
    <div>
        <ul class="breadcrumb">
            <li><a href="{{route('admin.view.dashboard')}}">Admin</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{route('admin.view.dashboard')}}">Dashboard</a></li>
        </ul>
        <h1 class="panel-title">Dashboard</h1>
    </div>
@endsection


@section('panel-body')
<div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-7">

    <figure class="panel-card">
        <div class="panel-card-body">
            <div class="flex items-center justify-between">
                <div class="h-[70px] w-[70px] bg-admin-compliment rounded-full flex items-center justify-center">
                    <svg class="stroke-admin-ascent" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M12 11h4"></path><path d="M12 16h4"></path><path d="M8 11h.01"></path><path d="M8 16h.01"></path></svg>
                </div>
                <div class="text-right space-y-1">
                    <p class="text-sm font-medium text-gray-400">Todays Orders</p>
                    <h1 class="font-semibold text-admin-ascent text-2xl">{{$todays_orders_count}}</h1>
                </div>
            </div>
        </div>
    </figure>

    <figure class="panel-card">
        <div class="panel-card-body">
            <div class="flex items-center justify-between">
                <div class="h-[70px] w-[70px] bg-admin-compliment rounded-full flex items-center justify-center">
                    <svg class="stroke-admin-ascent stroke-[5px]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path></svg>
                </div>
                <div class="text-right space-y-1">
                    <p class="text-sm font-medium text-gray-400">Total Users</p>
                    <h1 class="font-semibold text-admin-ascent text-2xl">{{$total_registred_user_count}}</h1>
                </div>
            </div>
        </div>
    </figure>

    <figure class="panel-card">
        <div class="panel-card-body">
            <div class="flex items-center justify-between">
                <div class="h-[70px] w-[70px] bg-admin-compliment rounded-full flex items-center justify-center">
                    <svg class="fill-admin-ascent" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><path d="M20 2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3v3.767L13.277 18H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14h-7.277L9 18.233V16H4V4h16v12z"></path><path d="M7 7h10v2H7zm0 4h7v2H7z"></path></svg>
                </div>
                <div class="text-right space-y-1">
                    <p class="text-sm font-medium text-gray-400">Todays Contact Enquiries</p>
                    <h1 class="font-semibold text-admin-ascent text-2xl">{{$todays_contact_enquiries_count}}</h1>
                </div>
            </div>
        </div>
    </figure>

    <figure class="panel-card lg:col-span-3 md:col-span-2 sm:col-span-1">
        <div class="panel-card-header">
            <div>
                <h1 class="panel-card-title">Placed Orders</h1>
                <p class="panel-card-description">List of all placed orders in the system</p>
            </div>
        </div>
        <div class="panel-card-body">
            <div class="panel-card-table">
                <table class="data-table">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ date('D d M Y', strtotime($order->created_at)) }}</td>
                                <td>
                                    @switch($order->payment_status)
                                         @case($payment_status::PENDING->value)
                                            <div class="table-status-warning">{{ $payment_status::PENDING->label() }}</div>
                                            @break
                                        @case($payment_status::COMPLETED->value)
                                            <div class="table-status-success">{{ $payment_status::COMPLETED->label() }}</div>
                                            @break
                                    @endswitch
                                </td>
                                <td>
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
                                <td>
                                    <div class="table-dropdown">
                                        <button>Options<i data-feather="chevron-down" class="ml-1 toggler-icon"></i></button>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="{{route('admin.view.order.preview',['id' => $order->id])}}" class="dropdown-link-primary"><i data-feather="external-link" class="mr-1"></i> Preview Order</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </figure>

</div>
@endsection

@section('panel-script')
<script>
    document.getElementById('dashboard-tab').classList.add('active');
</script>
@endsection