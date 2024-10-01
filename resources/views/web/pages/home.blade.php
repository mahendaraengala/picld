@extends('web.layouts.app')

@section('web-head')
    <title>Pi Cloud</title>
@endsection

@section('web-section')
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/home/new-pi-cloud-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Pi Cloud</h1>
                        <p class="text-gray-300 leading-loose lg:text-[14px] md:text-[12px] sm:text-[13px] font-medium">As
                            one of the nation's
                            leading Enterprise Cloud Platform, Pi Cloud transforms into a versatile Multi Cloud Ecosystem,
                            revolutionizing seamless integration. Beyond mere connectivity, it embraces a platform-agnostic
                            approach, uniting private and public platforms. Pi Cloud stands out by becoming a fully managed
                            harbor for your cloud environments, providing a holistic perspective through a single,
                            comprehensive view. This panoramic window into your digital infrastructure ensures swift
                            time-to-market, giving enterprises a competitive edge. In your operational journey, Pi Cloud
                            stands as a steadfast companion, showcasing powerful results when vision meets innovation. </p>
                        <div class="pt-4 space-x-3">
                            <a href="{{ route('view.cloud') }}" class="btn-primary-md sm:leading-[3.5rem]"
                                target="_blank">Know
                                More</a>
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md sm:leading-[3.5rem]"
                                target="_blank">Reach
                                Us</a>
                            <a class="btn-primary-md cursor-pointer show_form sm:leading-[3.5rem]">Brochure</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- GPU Cloud Section (Start) --}}
    <section class="py-12">
        <div class="container lg:space-y-14 md:space-y-12 sm:space-y-6">
            <div class="flex items-center justify-center space-x-5">
                <hr class="w-full border-2 border-gray-400">
                <h2 class="whitespace-nowrap font-bold lg:text-4xl md:text-3xl sm:text-3xl">GPU Cloud</h2>
                <hr class="w-full border-2 border-gray-400">
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-10 items-center">
                <figure class="lg:text-left md:text-left sm:text-center space-y-2">
                    <p>In an environment where data is
                        everywhere and connectivity is essential, Pi Cloud stands out as the forefront of technical
                        innovation. By harnessing the vast potential of AI and GPU Cloud, we aim to redefine the parameters
                        of cloud computing, offering not just advanced solutions but also integrating them with unparalleled
                        intuitiveness. Our team of experts is dedicated to pushing the boundaries of what is possible in the
                        cloud computing space. Through continuous research and development, we strive to stay ahead of the
                        curve and anticipate the needs of our clients.</p>
                    <br>
                    <div class="space-x-3">
                        <a href="{{ route('web.view.pricing') }}" class="btn-primary-md" target="_blank">Buy Now</a>
                        <a href="{{ route('view.about') }}#why-picloud" class="btn-primary-md" target="_blank">Know More</a>
                    </div>
                </figure>
                <figure>
                    <img src="{{ asset('web/images/home/gpu-cloud.webp') }}"
                        alt="A detailed view of a graphics processing unit (GPU) chip"
                        class="w-full h-auto rounded-bl-[40px] shadow-lg">
                </figure>
            </div>
        </div>
    </section>
    {{-- GPU Cloud Section (End) --}}


    {{-- Public Cloud Section (Start) --}}
    <section class="py-12 bg-web-complement">
        <div class="container lg:space-y-14 md:space-y-12 sm:space-y-10">
            <div class="flex items-center justify-center space-x-5">
                <hr class="w-full border-2 border-gray-400">
                <h2 class="whitespace-nowrap font-bold lg:text-4xl md:text-3xl sm:text-3xl">Public Cloud</h2>
                <hr class="w-full border-2 border-gray-400">
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-10 items-center">
                <figure>
                    <img src="{{ asset('web/images/home/public-cloud.webp') }}"
                        alt="Depiction of public cloud infrastructure" class="w-full h-auto rounded-tr-[40px] shadow-lg">
                </figure>
                <figure class="lg:text-left md:text-left sm:text-center space-y-3">
                    {{-- <h1 class="font-bold text-3xl">Lorem, ipsum dolor</h1> --}}
                    <p>The Pi Public Cloud Services helps
                        businesses devise strategies & appropriate planning for building a technology-proficient environment
                        by fostering Flexibility, Scalability, Multi-Tiered Security, and High Redundancy. It brings the
                        best of both worlds for businesses to co-leverage the flexibility of Public Clouds across Oracle
                        (OCI), Azure, AWS, Google (GCP), along with Pi’s seamless integration and comprehensive management
                        suite. It's all about gaining the trust of customers through the safekeeping of their data across
                        agnostic cloud platforms with a fully integrated products and services stack under one umbrella.
                    </p>
                    <div class="space-x-3 pt-4">
                        <a href="{{ route('web.view.pricing') }}" class="btn-primary-md" target="_blank">Buy Now</a>
                        <a href="{{ route('view.public-cloud') }}" class="btn-primary-md" target="_blank">Read More</a>
                    </div>
                </figure>
            </div>
        </div>
    </section>
    {{-- Public Cloud Section (End) --}}


    {{-- Private Cloud Section (Start) --}}
    <section class="lg:pt-16 md:pt-16 sm:pt-12">
        <div class="container lg:space-y-14 md:space-y-12 sm:space-y-6">
            <div class="flex items-center justify-center space-x-5">
                <hr class="w-full border-2 border-gray-400">
                <h2 class="whitespace-nowrap font-bold lg:text-4xl md:text-3xl sm:text-3xl">Private Cloud</h2>
                <hr class="w-full border-2 border-gray-400">
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-10 items-center">
                <figure class="lg:text-left md:text-left sm:text-center space-y-2">
                    <p>Our platform offers a diverse array of
                        compute products and services, designed with a platform-agnostic approach to address the unique
                        challenges confronted by enterprises. Businesses can seamlessly choose from our carefully crafted
                        product stack, enabling them to scale, grow, and effortlessly meet industry demands with enhanced
                        efficiency and optimized TCO. It's a strategic leap towards a future where technology empowers
                        without burdening, providing the agility needed for sustained success. </p>
                    <div class="space-x-3 pt-4">
                        <a href="{{ route('web.view.pricing') }}" class="btn-primary-md" target="_blank">Buy Now</a>
                        <a href="{{ route('view.private-cloud') }}" class="btn-primary-md" target="_blank">Read More</a>
                    </div>
                </figure>
                <figure>
                    <img src="{{ asset('web/images/home/private-cloud.webp') }}"
                        alt="Abstract representations illustrating private cloud infrastructure"
                        class="w-full h-auto rounded-bl-[40px] shadow-lg">
                </figure>
            </div>
        </div>
    </section>
    {{-- Private Cloud Section (End) --}}

    {{-- High On Demand (Start) --}}
    <section class="pt-20">
        <div class="container">
            <fieldset class="border-4 border-solid border-blue-800 p-3 max-w-6xl mt-0 mx-auto">
                <legend class="text-3xl text-blue-800 px-4 font-bold mx-5">High On Demand</legend>
                <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-10 items-center">
                    <figure>
                        <img src="{{ asset('web/images/home/high-on-demand.webp') }}" alt="Close-up view of a GPU chip"
                            class="w-full h-auto shadow-lg max-w-lg p-4">
                    </figure>
                    <figure class="lg:text-left md:text-left sm:text-center space-y-5 px-7">
                        <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">NVIDIA A100</h2>
                        {{-- <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-lg text-center">
                            Cent OS 7
                        </h3> --}}
                        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2">
                            <div class="flex items-center flex-col">
                                <h4 class="font-bold text-lg">GPU Memory</h4>
                                <img src="{{ asset('web/images/home/gpu-memory.webp') }}" alt="Gpu Memory icon"
                                    class="w-16 py-2">
                                <p>80</p>
                            </div>
                            <div class="flex items-center flex-col">
                                <h4 class="font-bold text-lg">VCPU</h4>
                                <img src="{{ asset('web/images/home/vcpu.webp') }}" alt="vcpu icon" class="w-16 py-2">
                                <p>32</p>
                            </div>
                            <div class="flex items-center flex-col">
                                <h4 class="font-bold text-lg">RAM</h4>
                                <img src="{{ asset('web/images/home/ram.webp') }}" alt="Ram icon" class="w-16 py-2">
                                <p>256 </p>
                            </div>

                            <div class="flex items-center flex-col">
                                <h4 class="font-bold text-lg">Storage</h4>
                                <img src="{{ asset('web/images/home/storage.webp') }}" alt="Storage Icon"
                                    class="w-16 py-2">
                                <p>1 TB </p>
                            </div>
                        </div>

                        {{-- <p class="font-bold text-center text-lg">GDC.A10080-16.115GB</p> --}}
                        <p class="font-bold text-center text-3xl">&#8377;11,0000/Month</p>
                        <div class="space-x-12 text-center pb-5">
                            <a href="https://picloud.ai/public/gpucloud/" class="btn-primary-md" target="_blank">Buy
                                Now</a>
                        </div>
                    </figure>
                </div>
            </fieldset>
        </div>
    </section>
    {{-- High On Demand (End) --}}

    {{-- Managed Services Section (Start) --}}
    <section class="py-20">
        <div class="container">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-10 items-center">
                <figure>
                    <img src="{{ asset('web/images/home/managed-services.webp') }}"
                        alt="Suite of managed services, showcasing efficient and professional management of IT infrastructure"
                        class="w-full h-auto rounded-r-[40px] shadow-lg">
                </figure>
                <figure class="lg:text-left md:text-left sm:text-center space-y-4">
                    <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl">Managed Services</h2>
                    <p>Pi Managed Services (Pi Care)
                        streamlines
                        IT infrastructure management, offering a comprehensive support service with monthly price certainty
                        for efficient IT environment control and emphasizing reduced TCO. Our systematic and proactive
                        approach ensures the currency of your IT setup, enabling quick responses to user needs with a clear
                        accountability point. Access the expertise of our qualified engineers, service desk, and 24*7
                        monitoring services, backed by strict SLAs. Choose Pi Care for enhanced visibility and transparency,
                        benefiting from user-friendly management and reporting systems that surpass industry standards. </p>
                    <div class="space-x-3 pt-4">
                        <a class="btn-primary-md cursor-pointer show_form_two">Brochure</a>
                        <a href="{{ route('view.public-cloud') }}#managed-services" class="btn-primary-md"
                            target="_blank">Read More</a>
                    </div>
                </figure>
            </div>
        </div>
    </section>

    {{-- popup for banner brochure starts --}}
    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto popup_form popup-overlay">
        <div class="container">
            <div class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16">
                <form action="{{ route('handle.brochure.form.enquiry') }}" method="POST"
                    class="md:px-10 sm:px-5 py-3 text-center space-y-3">

                    @csrf
                    <input type="hidden" name="form_subject" id="form_subject" value="Brochure From Enquiry" required>
                    <input type="hidden" name="download_file" id="download_file"
                        value="{{ asset('web/pdf/pi-cLoud-brochure.pdf') }}" required>

                    <div class="text-right">
                        <span class="text-3xl cursor-pointer close_form">&times;</span>
                    </div>
                    <div>
                        <h1 class="font-semibold text-3xl mb-2">Download Brochure</h1>
                    </div>

                    <div class="flex flex-col">
                        <label for="name" class="input-label">Name</label>
                        <input type="text" name="name" id="name" class="input-box-md"
                            placeholder="Enter Name" required minlength="1" maxlength="250">
                    </div>

                    <div class="flex flex-col">
                        <label for="phone" class="input-label">Mobile</label>
                        <input type="tel" pattern="[0-9]{10}" name="phone" id="phone" class="input-box-md"
                            placeholder="Enter Phone" required minlength="10" maxlength="10">
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="input-label">Email</label>
                        <input type="email" name="email" id="email" class="input-box-md"
                            placeholder="Enter Email" required min="1" maxlength="250">
                    </div>

                    <div class="flex flex-col">
                        <label for="company" class="input-label">Company</label>
                        <input type="text" name="message" id="company" class="input-box-md"
                            placeholder="Enter company" required min="1" maxlength="250">
                    </div>

                    {{-- <div class="flex flex-col">
                        <label for="message" class="input-label">Message</label>
                        <textarea name="message" id="message" rows="3" class="input-box-md" placeholder="Message" required
                            minlength="1" maxlength="500"></textarea>
                    </div> --}}

                    <div class="flex items-center">
                        <input type="checkbox" name="checkbox" id="checkbox" class="brochure_check" required>
                        <label>I Agree with The <a href="{{ route('view.policy') }}" target="_blank"
                                class="text-red-600">Terms and Conditions</a></label>
                    </div>

                    <div>
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_CLIENT_KEY') }}"></div>
                    </div>

                    <div>
                        <button type="submit" class="btn-primary-md w-full">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- popup Ends --}}

    {{-- popup for managed services block starts --}}
    <section
        class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto popup_form_two popup-overlay"
        style="display: none;">
        <div class="container">
            <div class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16">
                <form action="{{ route('handle.brochure.form.enquiry') }}" method="POST"
                    class="md:px-10 sm:px-5 py-3 text-center space-y-3">

                    @csrf
                    <input type="hidden" name="form_subject" id="form_subject" value="Brochure From Enquiry" required>
                    <input type="hidden" name="download_file" id="download_file"
                        value="{{ asset('web/pdf/it-managed-services.pdf') }}" required>

                    <div class="text-right">
                        <span class="text-3xl cursor-pointer close_form">&times;</span>
                    </div>
                    <div>
                        <h1 class="font-semibold text-3xl mb-2">Download Brochure</h1>
                    </div>

                    <div class="flex flex-col">
                        <label for="name" class="input-label">Name</label>
                        <input type="text" name="name" id="name" class="input-box-md"
                            placeholder="Enter Name" required minlength="1" maxlength="250">
                    </div>

                    <div class="flex flex-col">
                        <label for="phone" class="input-label">Mobile</label>
                        <input type="tel" pattern="[0-9]{10}" name="phone" id="phone" class="input-box-md"
                            placeholder="Enter Phone" required minlength="10" maxlength="10">
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="input-label">Email</label>
                        <input type="email" name="email" id="email" class="input-box-md"
                            placeholder="Enter Email" required min="1" maxlength="250">
                    </div>

                    <div class="flex flex-col">
                        <label for="company" class="input-label">Company</label>
                        <input type="text" name="message" id="company" class="input-box-md"
                            placeholder="Enter company" required min="1" maxlength="250">
                    </div>

                    {{-- <div class="flex flex-col">
                        <label for="message" class="input-label">Message</label>
                        <textarea name="message" id="message" rows="3" class="input-box-md" placeholder="Message" required
                            minlength="1" maxlength="500"></textarea>
                    </div> --}}

                    <div class="flex items-center">
                        <input type="checkbox" name="checkbox" id="checkbox" class="brochure_check" required>
                        <label>I Agree with The <a href="{{ route('view.policy') }}" target="_blank"
                                class="text-red-600">Terms and Conditions</a></label>
                    </div>

                    <div>
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_CLIENT_KEY') }}"></div>
                    </div>

                    <div>
                        <button type="submit" class="btn-primary-md w-full">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- popup Ends --}}

    {{-- Managed Services Section (End) --}}

    {{-- Use Cases Section (Start) --}}
    {{-- <section class="py-20">
        <div class="container">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-10 items-center" data-aos="fade-up"
                data-aos-duration="1500">
                <figure class="lg:text-left md:text-left sm:text-center space-y-4">
                    <h2 class="font-bold text-3xl">Use Cases</h2>
                    <p class="lg:text-lg sm:text-base font-medium leading-relaxed">Explore practical success stories with
                        our "Used Cases." See how businesses, like yours, leverage the cloud for flexibility, scalability,
                        and security. These real-world examples highlight the impact of smart, cloud-centric strategies.
                        Discover how embracing cloud solutions can reshape your business for the better. </p>
                </figure>
                <figure>
                    <img src="{{ asset('web/images/home/use-cases.webp') }}" alt="managed-services"
                        class="w-full h-auto shadow-lg">
                </figure>
            </div>
        </div>
    </section> --}}
    {{-- Use Cases Section (End) --}}
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

    <script>
        $(document).ready(function() {
            $('.popup_form').hide()
            $('.show_form').click(function() {
                $('.popup_form').show()
            });
            $('.close_form').click(function() {
                $('.popup_form').hide()
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.popup_form_two').hide()
            $('.show_form_two').click(function() {
                $('.popup_form_two').show()
            });
            $('.close_form').click(function() {
                $('.popup_form_two').hide()
            });
        });
    </script>
@endsection
