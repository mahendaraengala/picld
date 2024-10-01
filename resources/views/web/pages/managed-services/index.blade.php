@extends('web.layouts.app')

@section('web-head')
    <title>Managed Services | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/managed-services/new-managed-services-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">
                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Managed Services</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-24 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Optimize your IT
                            operations with Pi Managed
                            Services. Our expert team delivers end-to end solutions, from infrastructure management to 24/7
                            support, ensuring your business runs smoothly and efficiently. Partner with us for a seamless,
                            worry-free IT experience. </p>
                        <div class="pt-4 space-x-3">
                            {{-- <a href="#" class="btn-primary-md">Know more</a> --}}
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                            {{-- <a class="btn-primary-md cursor-pointer show_form">Brochure</a> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- managed services cont starts --}}
    <section class="py-12">
        <div class="container">
            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-5">
                <div
                    class="text-center shadow-[0px_0px_10px_rgba(0,0,0,0.3)] rounded-lg p-5 scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/ms-1.webp') }}" class="w-48 h-48 mx-auto my-0">
                    <h2 class="font-bold text-xl py-4">Multi Cloud</h2>
                    <div>
                        <a href="{{ route('view.multicloud-managed-services') }}"
                            class="bg-gray-600 text-white py-2 px-3 font-medium rounded-md hover:bg-web-ascent-1">Explore</a>
                    </div>
                </div>
                <div
                    class="text-center shadow-[0px_0px_10px_rgba(0,0,0,0.3)] rounded-lg p-5 scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/ms-2.webp') }}" class="w-48 h-48 mx-auto my-0">
                    <h2 class="font-bold text-xl py-4">Remote Infrastructure Management</h2>
                    <div>
                        <a href="{{ route('view.remote-infrastructure-management') }}"
                            class="bg-gray-600 text-white py-2 px-3 font-medium rounded-md hover:bg-web-ascent-1">Explore</a>
                    </div>
                </div>
                <div
                    class="text-center shadow-[0px_0px_10px_rgba(0,0,0,0.3)] rounded-lg p-5 scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/ms-3.webp') }}" class="w-48 h-48 mx-auto my-0">
                    <h2 class="font-bold text-xl py-4">Network Operating Center</h2>
                    <div>
                        <a href="{{ route('view.network-operating-center') }}"
                            class="bg-gray-600 text-white py-2 px-3 font-medium rounded-md hover:bg-web-ascent-1">Explore</a>
                    </div>
                </div>
                <div
                    class="text-center shadow-[0px_0px_10px_rgba(0,0,0,0.3)] rounded-lg p-5 scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/ms-4.webp') }}" class="w-48 h-48 mx-auto my-0">
                    <h2 class="font-bold text-xl py-4">Security Operations Center</h2>
                    <div>
                        <a href="{{ route('view.security-operations-center') }}"
                            class="bg-gray-600 text-white py-2 px-3 font-medium rounded-md hover:bg-web-ascent-1">Explore</a>
                    </div>
                </div>
                <div
                    class="text-center shadow-[0px_0px_10px_rgba(0,0,0,0.3)] rounded-lg p-5 scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/ms-5.webp') }}" class="w-48 h-48 mx-auto my-0">
                    <h2 class="font-bold text-xl py-4">DevOps</h2>
                    <div>
                        <a href="{{ route('view.devops-as-a-services') }}"
                            class="bg-gray-600 text-white py-2 px-3 font-medium rounded-md hover:bg-web-ascent-1">Explore</a>
                    </div>
                </div>
                <div
                    class="text-center shadow-[0px_0px_10px_rgba(0,0,0,0.3)] rounded-lg p-5 scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/ms-6.webp') }}" class="w-48 h-48 mx-auto my-0">
                    <h2 class="font-bold text-xl py-4">AI Managed Services</h2>
                    <div>
                        <a href="{{ route('view.ai-managed-services') }}"
                            class="bg-gray-600 text-white py-2 px-3 font-medium rounded-md hover:bg-web-ascent-1">Explore</a>
                    </div>
                </div>
                <div></div>
                <div
                    class="text-center shadow-[0px_0px_10px_rgba(0,0,0,0.3)] rounded-lg p-5 scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/ms-7.webp') }}" class="w-48 h-48 mx-auto my-0">
                    <h2 class="font-bold text-xl py-4">Professional Services</h2>
                    <div>
                        <a href="{{ route('view.professional-services') }}"
                            class="bg-gray-600 text-white py-2 px-3 font-medium rounded-md hover:bg-web-ascent-1">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- managed services cont ends --}}
@endsection

@section('web-script')
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrol > 100) {
                    $('#desktop-header').addClass('active');
                } else {
                    $('#desktop-header').removeClass('active');
                }
            });
        });
    </script>
@endsection
