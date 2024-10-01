@extends('web.layouts.app')

@section('web-head')
    <title>About us | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/about/new-about-us-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">
                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">About Us</h1>
                        <p class="text-gray-300 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]">Pi,
                            where the
                            horizon meets innovation, nestled in the heart of Hyderabad, Telangana, redefines the landscape
                            of cloud
                            technology and transcends the singular, evolving into a Multi Cloud Ecosystem that ushers in a
                            new era
                            of seamless integration with its Multi-locale Resilient Infrastructure. By harnessing the
                            potential of connectivity and scalability, we pave the path for a smooth digital transformation
                            where
                            your business aspirations soar to new heights. Enhance your
                            digital journey with a hint of Pi. </p>
                        <div class="pt-4 space-x-3">
                            {{-- <a href="#" class="btn-primary-md">Know more</a> --}}
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                            <a class="btn-primary-md cursor-pointer show_form">Brochure</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- About Pi-Cloud Section (Start) --}}
    <section>
        <div class="container lg:pt-8 lg:pb-3 md:pt-7 md:pb-3 sm:py-10">

            <div class="space-y-5">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">About Pi Cloud.ai </h2>
                <p class="text-center">Pi Cloud.ai is a
                    pivotal offering at the intersection of AI and Cloud Computing. This platform represents a paradigm
                    shift in the world of digital technology. In the industry of
                    high-end computing and advanced technology, Pi Cloud.ai leads the charge in transforming possibilities.
                    We simplify the complex, reshape the computing landscape through integrated and high-performance
                    infrastructure. This includes GPU powered superior computing capabilities. Launching businesses into a
                    future where innovation meets the required dynamic digital workloads. </p>
                <p class="text-center">By harnessing the
                    vast potential of AI, we aim to redefine the boundaries of cloud computing, offering not just advanced
                    solutions but also integrating them with every digital ecosystem that enables seamless collaboration
                    across various business domains. Our continuous pursuit of pushing the technological envelope, coupled
                    with an unwavering dedication to providing premier service, positions Pi Cloud.ai squarely at the
                    leading edge of the digital revolution. As technology continues its steady march forward, so does our
                    vision. By leveraging AI, we offer personalized and intelligent solutions that cater to the unique needs
                    of each digital requirement. Here, the future is not an abstract concept but a tangible reality. Prepare
                    to embark on a journey of discovery as you uncover the future of cloud computing with Pi Cloud.ai. </p>

            </div>

        </div>
    </section>
    {{-- About Pi-Cloud Section (End) --}}

    {{-- Locations Section (Start) --}}
    <section>
        <div class="container pt-5 pb-14 space-y-12">

            <div class="space-y-5 text-center">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-web-ascent-1">Our Pi Cloud Point Of Presence
                </h2>
            </div>

            <div class="lg:w-10/12 md:w-10/12 sm:w-full mx-auto">
                <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 items-center">

                    <div class="location-card">
                        <div class="top-line"></div>
                        <div class="card-content cursor-pointer">
                            <div
                                style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('/web/images/about/locations/vijayawada-1.webp')">
                                <div class="text-div">
                                    <span>V</span>
                                    <span>I</span>
                                    <span>J</span>
                                    <span>A</span>
                                    <span>Y</span>
                                    <span>A</span>
                                    <span>W</span>
                                    <span>A</span>
                                    <span>D</span>
                                    <span>A</span>
                                </div>
                            </div>
                            <button class="info-button">
                                <div>
                                    <span>></span>
                                </div>
                            </button>
                        </div>
                        <div class="location-info information">
                            <div class="flex flex-col space-y-3 p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-bold">Vijayawada Cloud Zone</h3>
                                        <p class="text-sm">(Vijayawada, Andhra Pradesh)</p>
                                    </div>
                                    <button><i data-feather="x" class="h-5 w-5 close-location-button"></i></button>
                                </div>
                                <ul class="flex flex-col gap-3 font-semibold text-sm">

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-1.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Uptime Institute Tier IV Certified</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-2.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Built on 10 acres datacenter campus (1st and only in India)</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-3.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>No of Racks : Upto 5000</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-4.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Built Up Area : 50,00,00 Sq.ft</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-5.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Power Capacity : Upto 60 MW (dedicated in campus substation)</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-6.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Security Levels : Eight Levels Of Stringent Security Layers</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom-line"></div>
                    </div>

                    <div class="location-card">
                        <div class="top-line"></div>
                        <div class="card-content cursor-pointer">
                            <div
                                style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('/web/images/about/locations/charminar.webp')">
                                <div class="text-div">
                                    <span>H</span>
                                    <span>Y</span>
                                    <span>D</span>
                                    <span>E</span>
                                    <span>R</span>
                                    <span>A</span>
                                    <span>B</span>
                                    <span>A</span>
                                    <span>D</span>
                                </div>
                            </div>
                            <button class="info-button">
                                <div>
                                    <span>></span>
                                </div>
                            </button>
                        </div>
                        <div class="location-info">
                            <div class="flex flex-col space-y-3 p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-bold">Hyderabad Cloud Zone</h3>
                                        <p class="text-sm">(Financial District)</p>
                                    </div>
                                    <button><i data-feather="x" class="h-5 w-5 close-location-button"></i></button>
                                </div>
                                <ul class="flex flex-col gap-3 font-semibold text-sm">

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-1.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Uptime Institute Tier III Design Compliant (Build To Suit)</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-2.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>No. of Racks: 83</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-3.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>White Tile Area: 2,100 sq. Ft.</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-4.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Expandable Rack Capacity: 200 (Additional)</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-5.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Expandable White Tile Area: 5000 sq. Ft. (Additional Capacity)</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-8.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Power Capacity: 3 MW</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-6.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Security Levels: Four Levels of Stringent Security Layers</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-7.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Rated Power Density per Rack: 6 - 10 KVA</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom-line"></div>
                    </div>

                    <div class="location-card">
                        <div class="top-line"></div>
                        <div class="card-content cursor-pointer">
                            <div
                                style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('/web/images/about/locations/kochi-2.webp')">
                                <div class="text-div">
                                    <span>K</span>
                                    <span>O</span>
                                    <span>C</span>
                                    <span>H</span>
                                    <span id="why-picloud">I</span>
                                </div>
                            </div>
                            <button class="info-button">
                                <div>
                                    <span>></span>
                                </div>
                            </button>
                        </div>
                        <div class="location-info">
                            <div class="flex flex-col space-y-3 p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-bold">Kochi Cloud Zone</h3>
                                        <p class="text-sm">(Kottapuram Road, Aroor)</p>
                                    </div>
                                    <button><i data-feather="x" class="h-5 w-5 close-location-button"></i></button>
                                </div>
                                <ul class="flex flex-col gap-3 font-semibold text-sm">

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-1.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Uptime Institute Tier 3 Design Compliant</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-2.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>No of Racks 200</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-3.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Built-Up Area 20,000 Sq.ft</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-4.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Power Capacity: 3MW</span>
                                    </li>

                                    <li class="flex items-center gap-3">
                                        <img src="{{ asset('web/images/about/location-icons/dc-icon-5.png') }}"
                                            alt="icon" class="h-8 w-8">
                                        <span>Security Levels: Eight Levels Of Stringent Security Layers</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom-line"></div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    {{-- Locations Section (End) --}}

    {{-- Introduction Section (Start) --}}
    <section id="picloud-cont">
        <div class="container pb-10">

            <div class="space-y-5 text-center">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl">Why Pi Cloud.ai? </h2>
                <p>Businesses often encounter the
                    challenges of staying ahead in a rapidly evolving world. The environment being dynamic, combined power
                    of Artificial Intelligence (AI), Cloud Computing, and Graphics Processing Units (GPUs) emerges as the
                    driving force behind innovating efficiently. Cloud Computing has transformed the way we manage and
                    deploy technology, offering unparalleled scalability and accessibility to everyone. </p>
            </div>

        </div>
    </section>
    {{-- Introduction Section (End) --}}

    {{-- Introduction Section (Start) --}}
    <section class="relative">
        <div class="container pb-20 lg:space-y-7 md:space-y-7 sm:space-y-4">

            <div class="text-center">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl">Key Differentiators</h2>
            </div>
            <div>
                {{-- <div onclick="$('#carousel-prev').click()" class="button-next relative arr-btn"><i
                        data-feather="chevron-down" class="h-8 w-8 absolute arr1"></i></div> --}}
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">Parallel Processing</h3>
                                    <p> Pi Cloud.AI leverages Graphics Processing Units
                                        (GPUs)
                                        to
                                        excel in
                                        parallel processing. This capability enables the concurrent execution of multiple
                                        threads,
                                        drastically reducing AI model training time and pushing the boundaries of what's
                                        possible.
                                    </p>
                                </div>
                            </figure>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">Distributed Computing</h3>
                                    <p>The cloud infrastructure underpinning Pi Cloud.AI
                                        facilitates
                                        distributed computing, enabling the seamless deployment of AI workloads across
                                        multiple
                                        nodes.
                                        This not only enhances performance but also fortifies fault tolerance.</p>
                                </div>
                            </figure>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">TPUs Availability</h3>
                                    <p> For tasks that demand exceptional performance in
                                        deep
                                        learning, Pi Cloud.ai harnesses Tensor Processing Units (TPUs). These specialized
                                        hardware
                                        accelerators are the driving force behind unmatched AI performance.</p>
                                </div>
                            </figure>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">Hybrid Cloud Strategy</h3>
                                    <p>Understands the need for data security. By leveraging
                                        a
                                        hybrid
                                        cloud strategy, organizations can safeguard sensitive AI data on-premises while
                                        enjoying the
                                        scalability of the cloud for AI model training and deployment.</p>
                                </div>
                            </figure>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">Data Lakes / Data Warehouse Facility</h3>
                                    <p>With Pi Cloud.AI, you have access to cost-effective
                                        data lakes
                                        and
                                        data warehouse for storing vast amounts of unstructured and structured data
                                        respectively.
                                        These
                                        data reservoirs are the ideal breeding ground for AI inference.</p>
                                </div>
                            </figure>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">AI Framework Integration</h3>
                                    <p>Leading cloud platforms offer an extensive array of AI
                                        libraries
                                        and frameworks, and Pi Cloud.AI is no exception. This integration simplifies AI
                                        development
                                        and
                                        harmonizes it with existing workflows. </p>
                                </div>
                            </figure>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">Hardware Acceleration</h3>
                                    <p>Pi Cloud.AI allows you to deploy hardware accelerators
                                        as
                                        required
                                        for AI-specific tasks. </p>
                                </div>
                            </figure>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">Infrastructure As Code Prowess</h3>
                                    <p>Achieve consistency, version control, and rapid
                                        deployment by
                                        provisioning AI infrastructure using Infrastructure as Code (IaC) tools. Pi Cloud.AI
                                        ensures
                                        that your AI projects move at the speed of thought. </p>
                                </div>
                            </figure>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">Edge AI Revolution</h3>
                                    <p>Pi Cloud.AI extends AI capabilities to the edge,
                                        seamlessly
                                        integrating with the Internet of Things (IoT). This opens the door to real-time
                                        decision-making
                                        and local processing, vital for low-latency applications. </p>
                                </div>
                            </figure>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">AI Ethical Governance</h3>
                                    <p>Pi Cloud.AI prioritizes ethical AI practices. It comes
                                        equipped
                                        with AI governance tools to ensure compliance with regulations and responsible data
                                        handling,
                                        building trust in your AI endeavors. </p>
                                </div>
                            </figure>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">Quantifiable ROI</h3>
                                    <p>What's the point of investing in AI without
                                        quantifiable
                                        results?
                                        Pi Cloud.AI provides the means to quantify your return on investment through
                                        detailed usage
                                        and
                                        cost analytics, giving you a clear picture of your AI's impact. </p>
                                </div>
                            </figure>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <figure
                                class="shadow-sm border-4 border-white bg-web-complement hover:border-[#223f97] my-5 scale-95 hover:scale-100 transition duration-700">
                                <div class="lg:p-8 md:p-3 sm:p-5 text-center space-y-3 lg:h-96 md:h-[26rem] sm:h-[16rem]">
                                    <h3 class="font-bold text-2xl">Real-time Data Accessibility</h3>
                                    <p>For applications that demand real-time
                                        decision-making, Pi
                                        Cloud.AI delivers inference capabilities that are second to none. </p>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="swiper-pagination key"></div>
                    <!-- Add Arrows -->
                </div>
                {{-- <div onclick="$('#carousel-next').click()" class="button-prev relative arr-btn"><i
                        data-feather="chevron-down" class="h-8 w-8 absolute arr2"></i>
                </div> --}}
                <div>
                    <div class="swiper-button-next w-9 h-9 lg:block md:hidden sm:hidden top-[40%]"></div>
                    <div class="swiper-button-prev w-9 h-9 lg:block md:hidden sm:hidden top-[40%]"></div>
                </div>
            </div>

            <div class="pt-4 space-x-3 text-center">
                <a href="https://picloud.ai/public/gpucloud/"
                    class="bg-web-ascent-1 text-xl text-white py-3 px-10 rounded-lg cursor-pointer" target="_blank">Learn
                    More</a>
            </div>

        </div>
    </section>
    {{-- Introduction Section (End) --}}


    {{-- popup starts --}}
    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto popup_form popup-overlay">
        <div class="container">
            <div class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16">
                <form action="{{ route('handle.brochure.form.enquiry') }}" id="emailForm" method="POST"
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
                        <label for="email" class="input-label">Work Email</label>
                        <input type="email" name="email" id="email" class="input-box-md"
                            placeholder="Enter Email" required min="1" maxlength="250">
                        <p id="error-message" class="text-red-600"></p>
                    </div>

                    <div class="flex flex-col">
                        <label for="company" class="input-label">Company / Website</label>
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

            $('.info-button').click(function() {
                $('.location-info').hide();
                $(this).parent().parent().find('.location-info').show();
            });

            $('.location-info').click(function() {
                $('.location-info').hide();
                $(this).show();
            });

            $('.location-card .card-content').click(function() {
                $('.location-info').hide();
                $(this).parent().find('.location-info').show();
            });

            $(window).click(function() {
                $('.location-card').click(function(event) {
                    event.stopPropagation();
                });
                $('.location-info').hide();
            });

            $('.close-location-button').click(function() {
                $('.location-info').fadeOut();
            });


        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            arrow: false,
            // autoplay: true,
            // autoplaySpeed: 3000,
            slidesPerView: 4,
            slidesPerGroup: 4,
            spaceBetween: 30,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
                480: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
                640: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 30,
                },
                991: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 30,
                }
            }
        });
    </script>
    {{-- popup script --}}
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
        document.getElementById('emailForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var email = document.getElementById('email').value;
            var errorMessage = document.getElementById('error-message');

            // List of domains to disallow
            var disallowedDomains = ['gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com'];

            // Extract domain from email
            var domain = email.substring(email.lastIndexOf("@") + 1);

            // Check if domain is in the disallowed list
            if (disallowedDomains.includes(domain)) {

                errorMessage.textContent = 'Email domain not allowed.';
                return false;
            } else {
                document.getElementById("emailForm").submit();
            }


            errorMessage.textContent = '';
            // alert('Email is valid and allowed.');
        });
    </script>
@endsection
