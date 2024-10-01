@extends('admin.layouts.app')

@section('panel-header')
    <div>
        <ul class="breadcrumb">
            <li><a href="{{route('admin.view.dashboard')}}">Admin</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{route('admin.view.user.list')}}">Users</a></li>
        </ul>
        <h1 class="panel-title">Users</h1>
    </div>
@endsection


@section('panel-body')
<figure class="panel-card">
    <div class="panel-card-header">
        <div>
            <h1 class="panel-card-title">Users</h1>
            <p class="panel-card-description">List of all user in the system</p>
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
                    <th>Registred</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ date('D d M Y', strtotime($user->created_at)) }}</td>
                            <td>
                                <div class="table-dropdown">
                                    <button>Options<i data-feather="chevron-down" class="ml-1 toggler-icon"></i></button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a href="{{route('admin.view.user.preview',['uuid' => $user->uuid])}}" class="dropdown-link-primary"><i data-feather="external-link" class="mr-1"></i> Preview User</a></li>
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

@endsection

@section('panel-script')
<script>
    document.getElementById('user-tab').classList.add('active')
</script>
@endsection