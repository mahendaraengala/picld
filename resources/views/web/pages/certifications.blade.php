@extends('web.layouts.app')

@section('web-head')
    <title>Certifications | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/certifications/new-certifications-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Certifications</h1>
                        <p class="text-gray-300 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]"> Pi
                            Cloud is a revolutionary platform where trust
                            seamlessly converges with excellence, offering a comprehensive solution for all your cloud
                            computing needs. At Pi, we recognize the critical significance of safeguarding our clients' data
                            and streamlining their operations, and we are committed to delivering a secure, efficient, and
                            scalable environment. Our unwavering dedication to maintaining the highest standards of
                            excellence in cloud infrastructure, security protocols, and management practices is underscored
                            by a series of certifications. These certifications serve as a testament to our relentless
                            pursuit of excellence and our unwavering commitment to ensuring the utmost protection and
                            reliability of your valuable data.</p>
                        <div class="pt-4 space-x-3">
                            {{-- <a href="#" class="btn-primary-md">Know more</a> --}}
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                            {{-- <a href="#" class="btn-primary-md" target="_blank">Brochure</a> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- Certifications Section (Start) --}}
    <section class="py-10">
        <div class="container">

            <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1">
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/meity.webp') }}" alt="certification" class="p-5">
                </div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/tia.webp') }}" alt="certification" class="p-5">
                </div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/tier-iv.webp') }}" alt="certification" class="p-5">
                </div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/iso_1.webp') }}" alt="certification" class="p-5">
                </div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/iso_2.webp') }}" alt="certification" class="p-5">
                </div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/iso_3.webp') }}" alt="certification" class="p-5">
                </div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/iso_4.webp') }}" alt="certification" class="p-5">
                </div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/iso_5.webp') }}" alt="certification" class="p-5">
                </div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/iso_6.webp') }}" alt="certification" class="p-5">
                </div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/pci.webp') }}" alt="certification" class="p-5">
                </div>
                <div class="lg:block md:hidden sm:hidden"></div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/soc.webp') }}" alt="certification" class="p-5">
                </div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/hippa.webp') }}" alt="certification" class="p-5">
                </div>
                <div
                    class="bg-white shadow-[0px_0px_12px_rgba(0,0,0,0.2)] rounded-[2rem] scale-75 hover:scale-90 transition duration-700">
                    <img src="{{ asset('web/images/certifications/stqc.webp') }}" alt="certification" class="p-5">
                </div>
            </div>

        </div>
    </section>
    {{-- Certifications Section (End) --}}
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
