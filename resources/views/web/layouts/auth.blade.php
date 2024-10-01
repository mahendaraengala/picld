<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('web/images/logo/favicon.png') }}">

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('web/css/app.css') }}?v=4">

    @yield('web-head')

    <title>Dashboard</title>

</head>

<body>

    <main>
        @yield('web-section')
    </main>

    <script src="{{ asset('web/js/app.js') }}"></script>

    @auth
        <script>
            const handleLogout = () => {
                swal({
                    title: "Are you sure?",
                    text: "Once clicked ok you will logged out",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        document.getElementById('logout-form').submit();
                    }
                });
            }
        </script>
        <form action="{{ route('web.handle.logout') }}" hidden method="POST" id="logout-form">@csrf</form>
    @endauth

    @yield('web-script')

    @if (session('message'))
        <script defer>
            swal({
                icon: "{{ session('message')['status'] }}",
                title: "{{ session('message')['title'] }}",
                text: "{{ session('message')['description'] }}",
            });
        </script>
    @endif

</body>

</html>
