@extends('admin.layouts.app')

@section('panel-header')
    <div>
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.view.dashboard') }}">Admin</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{ route('admin.view.user.list') }}">Users</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{ route('admin.view.user.preview', ['uuid' => $user->uuid]) }}">Preview
                User</a></li>
        </ul>
        <h1 class="panel-title">Preview User</h1>
    </div>
@endsection

@section('panel-body')
    <figure class="panel-card">
        <div class="panel-card-header">
            <div>
                <h1 class="panel-card-title">Preview Information</h1>
                <p class="panel-card-description">Please check all the information</p>
            </div>
        </div>
        <div class="panel-card-body">


            <div class="space-y-5">
                <div>
                    <h1 class="title">User Information</h1>
                </div>
                <div>
                    <table class="font-medium text-sm">
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Name</td>
                            <td class="pr-7 pb-3">{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Email</td>
                            <td class="pr-7 pb-3">{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Phone</td>
                            <td class="pr-7 pb-3">{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Registred on</td>
                            <td class="pr-7 pb-3">{{ date('D d M Y', strtotime($user->created_at)) }}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </figure>
@endsection

@section('panel-script')
    <script>
        document.getElementById('user-tab').classList.add('active');
    </script>
@endsection