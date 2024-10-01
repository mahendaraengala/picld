<!DOCTYPE html>
<html lang="en">

<head>

    {{-- Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('admin/css/app.css?v=5') }}">

    {{-- Title --}}
    <title>Admin Panel </title>

    @yield('panel-head')

</head>

<body>

    @if (auth()->user()->status)

        {{-- Main (Start) --}}
        <main>

            {{-- Sidebar --}}
            @include('admin.common.sidebar')

            {{-- Panel (Start) --}}
            <section id="panel-section">
                <div class="panel-container">
                    <header class="panel-header">
                        <div class="lg:px-0 md:px-0 sm:px-2">
                            @yield('panel-header')
                        </div>
                        <div>
                            @include('admin.common.header-menu')
                        </div>
                    </header>
                    <section class="panel-body">
                        @yield('panel-body')
                    </section>
                </div>
            </section>
            {{-- Panel (End) --}}

        </main>
        {{-- Main (End) --}}

        {{-- Logout Form --}}
        <form action="{{ route('admin.handle.logout') }}" id="logout-form" method="POST">@csrf</form>

        {{-- Script --}}
        <script src="{{ asset('admin/js/app.js') }}"></script>
        <script>
            AOS.init({
                once: true,
            });
        </script>
        @yield('panel-script')

        @if (session('message'))
            <script defer>
                swal({
                    icon: "{{ session('message')['status'] }}",
                    title: "{{ session('message')['title'] }}",
                    text: "{{ session('message')['description'] }}",
                });
            </script>
        @endif
    @else
        <main class="h-screen w-full flex items-center justify-center">
            <h1 class="text-2xl font-semibold text-admin-ascent">Your Access is Blocked</h1>
        </main>
    @endif

</body>

</html>
