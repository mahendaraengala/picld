@extends('admin.layouts.app')

@section('panel-header')
    <div>
        <ul class="breadcrumb">
            <li><a href="{{route('admin.view.dashboard')}}">Admin</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{route('admin.view.order.list')}}">Orders</a></li>
        </ul>
        <h1 class="panel-title">Orders</h1>
    </div>
@endsection


@section('panel-body')
<figure class="panel-card">
    <div class="panel-card-header">
        <div>
            <h1 class="panel-card-title">Orders</h1>
            <p class="panel-card-description">List of all Orders in the system</p>
        </div>
    </div>
    <div class="panel-card-body">
        <div class="panel-card-table">
        
            <table class="data-table">
                <thead>
                    <th>Select</th>
                    <th>ID</th>
                    <th>Ref. No.</th>
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
                            <td><input type="checkbox" class="order-checkbox" value="<?php echo $order->id;?>"></td>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->ref_no }}</td>
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
                                            <li><a href="javascript:handleDelete({{$order->id}});" class="dropdown-link-danger"><i data-feather="trash-2" class="mr-1"></i> Delete Order</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <button style="float:right;" onclick="handleSelection()"><i data-feather="trash-2" class="mr-1"></i>Delete</button>
                </tbody>
            </table>
        </div>
    </div>
</figure>

@endsection

@section('panel-script')

<script>
    document.getElementById('order-tab').classList.add('active');

        const handleDelete = (id) => {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this order!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = `{{ url('admin/order/delete') }}/${id}`;
                    }
                });
        }

</script>
<script>
    function handleSelection() {
        // Array to store selected order IDs
        var selectedOrders = [];

        // Get all checkboxes with the class 'order-checkbox'
        var checkboxes = document.querySelectorAll('.order-checkbox');

        // Loop through each checkbox
        checkboxes.forEach(function(checkbox) {
            // If the checkbox is checked, add its value to the selectedOrders array
            if (checkbox.checked) {
                selectedOrders.push(checkbox.value);
            }
        });

        // Now selectedOrders contains all the selected order IDs
        // console.log(selectedOrders);

         // Call handleDelete function with the selected order IDs
         handleDelete1(selectedOrders);
    }
    function handleDelete1(orderIds) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover these orders!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            // Prepare the data to be sent
            const data = {
            order_ids: orderIds
        };
        // Send AJAX request using fetch API
        fetch('{{ route('admin.handle.order.delete1') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(data)
        })
        .then(response => {
            if (response.ok) {
                // Reload the page if the request is successful
                location.reload();
            } else {
                console.error('Failed to handle service request:', response.statusText);
            }
        })
        .then(data => {
            // Handle response data
            console.log(data);
        })
        .catch(error => {
            // Handle errors
            console.error('There was a problem with the fetch operation:', error);
        });
        }
    });
}
</script>
@endsection