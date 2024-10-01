@extends('web.layouts.app')

@section('web-head')
    <title>Thank You | Pi Cloud</title>
@endsection

@section('web-section')
    <section class="py-20">
        <div class="container">
            <div>
                <h1 class="font-bold text-4xl text-center text-web-ascent-1">Thanks for submitting your information</h1>
                <p class="text-gray-800 leading-loose font-normal text-center pt-1 text-2xl">
                    Our team will get in touch at the earliest</p>
            </div>
        </div>
    </section>
@endsection

@section('web-script')
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 100) {
                    $('#desktop-header').addClass('active');
                } else {
                    $('#desktop-header').removeClass('active');
                }
            });
        });
    </script>
@endsection
