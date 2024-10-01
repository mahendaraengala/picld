<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Google tag (gtag.js) --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D85NQC5LGJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-D85NQC5LGJ');
    </script>

    {{-- Microsoft Clarity --}}
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "m536yo7mso");
    </script>

    {{-- Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('web/images/logo/favicon.png') }}">

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('web/css/app.css') }}?v=12">
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}

    {{-- Recaptcha Script --}}
    <script src='https://www.google.com/recaptcha/api.js'></script>

    {{-- lordicon --}}
    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>

    @yield('web-head')

</head>

<body>

    @include('web.common.header')

    
    <main class="relative lg:pt-[8.8rem] md:pt-[3.8rem] sm:pt-[5rem]">
        @yield('web-section')
    </main>

    @include('web.common.footer')

    <script src="{{ asset('web/js/app.js') }}"></script>
    <script src="{{ asset('web/js/swiper.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('web/js/counterup.min.js') }}"></script>
    <script src="{{ asset('web/js/roundslider.js') }}"></script>
    {{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script> --}}

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
    <script>
        $(document).ready(function() {
            window.history.replaceState({}, document.title, window.location.pathname + window.location.search);
        });
    </script>

</body>

</html>
