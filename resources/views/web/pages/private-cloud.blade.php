@extends('web.layouts.app')

@section('web-head')
    <title>Private Cloud | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/private-cloud/new-private-cloud-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Private Cloud</h1>
                        <p class="text-gray-300 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]">Our
                            platform offers a diverse array of computing products and services, designed with a
                            platform-agnostic approach to address the unique challenges confronted by enterprises.
                            Businesses can seamlessly choose from our carefully
                            crafted
                            product stack, enabling them to scale, grow, and effortlessly meet industry demands with
                            enhanced
                            efficiency and optimized TCO. It's a strategic leap towards a future where technology empowers
                            without burdening, providing the agility needed for sustained success. </p>
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

    {{-- Intro --}}
    <section class="py-9">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Focus On Your Business, Not IT
                </h2>
                <p class="text-center py-5">Let us manage your IT infrastructure
                    while you manage your business. Instead of
                    investing in building
                    your IT infrastructure and hassling through its maintenance, accelerate your digital transformation with
                    high-performance Compute on Pi Cloud.</p>
            </div>
            <div>
                <h2 class="font-bold lg:text-2xl md:text-xl sm:text-lg text-center text-[#545454]">Explore A Wide Range Of
                    Compute Products & Services
                </h2>
                <p class="text-center pt-5">Platform agnostic product stack on
                    Pi Cloud is designed and developed keeping in
                    mind
                    the business
                    challenges faced by enterprises. Now businesses can pick suitable products to scale, grow and meet
                    industry demands with ease, efficiency and optimized TCO.</p>
            </div>

        </div>
    </section>
    {{-- Intro Ends --}}

    {{-- Tabs --}}
    <section class="py-4 scroll-m-32" id="pislider">
        <div class="container" data-aos="fade-up" data-aos-duration="1500">
            <ul
                class="flex justify-start items-center sm:text-center space-x-5 border-b-4 border-black tabs-btns lg:overflow-x-hidden md:overscroll-x-scroll sm:overflow-x-scroll w-screen px-5">
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 active">
                    <button class="whitespace-nowrap">Virtual Machines(VMs)</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1">
                    <button class="whitespace-nowrap">Containers</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1">
                    <button class="whitespace-nowrap">Network</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1">
                    <button class="whitespace-nowrap">Storage</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1">
                    <button class="whitespace-nowrap">Cyber Security</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1">
                    <button class="whitespace-nowrap">Business Continuity</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1">
                    <button class="whitespace-nowrap">DevOps</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1">
                    <button class="whitespace-nowrap">End User Computing</button>
                </li>
            </ul>

            {{-- Virtual Machines Tab --}}
            <div class="space-y-5 py-4 tabs-content">
                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <img src="{{ asset('web/images/private-cloud/vm_img.webp') }}"
                        alt="Pi's virtual servers boost the digital journey with secure, easy-to-use environments."
                        class="w-96 mx-auto my-0">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Virtual Machines</h3>
                        <p>Accelerate your digital transformation with virtual servers that offer stable, secure, highly
                            available, and easy-to-deploy environments for your data and applications. Multiple operating
                            systems (OS) environments can co-exist on the same machine. Pick a hypervisor of your choice and
                            integrate your multi cloud environments with Pi Cloud. VMs on Pi Cloud, ensure enterprise
                            application provisioning, continuous availability, near zero maintenance and ease of data
                            recovery. It delivers seamless availability of services withstanding demand spikes.</p>
                    </div>
                </div>


                {{-- Key Features --}}
                <section class="py-2">
                    <div class="container">
                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                        </div>

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/scale-3.webp') }}"
                                        alt="Adjust your resources to meet the needs." class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">Auto
                                        Scaling</h4>
                                </div>
                                <p class="text-center">Upscale and downsize your resources with a click</p>
                            </div>
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/Economics.webp') }}"
                                        alt="Optimum TCO - High quality, low cost." class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">Scale Of
                                        Economics</h4>
                                </div>
                                <p class="text-center">Optimal TCO without compromising on quality and availability</p>

                            </div>
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/Self.webp') }}"
                                        alt="Optimize your interface capacity with minimal friction" class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">Simple
                                        Service Interface
                                    </h4>
                                </div>
                                <p class="text-center">Configure and optimise your capacity with minimal friction</p>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Key Features Ends --}}

                <div>
                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases </h3>
                    <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 py-5 gap-3">
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Running cloud-native applications</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Web hosting</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Developing & testing workloads</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Databases & other apps requiring faster I/O</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Virtual Machines Tab Ends --}}

            {{-- Containers --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Containers</h3>
                        <p>Pi Cloud offers a robust container orchestration and management technology to deploy and manage
                            containers at scale. The environment provisioned on Pi Cloud enables developers to use
                            abstraction and isolation technology to package an application, and all the files needed to run
                            it, in a way that isolates the application from the underlying host OS.</p>
                    </div>
                    <img src="{{ asset('web/images/private-cloud/containers_img.webp') }}"
                        alt="Streamlines container management with its robust technology." class="w-96 mx-auto my-0">
                </div>


                {{-- Key Features --}}
                <section class="py-2">
                    <div class="container">
                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                        </div>

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/scale-3.webp') }}"
                                        alt="Maximize server utilization and optimize licensing expense"
                                        class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                        Lightweight</h4>
                                </div>
                                <p class="text-center">Achieve high server efficiency and optimize investment in server and
                                    licensing costs</p>
                            </div>
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/Economics.webp') }}"
                                        alt="On-premises or hybrid cloud environments" class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">Run
                                        Anywhere</h4>
                                </div>
                                <p class="text-center">On the developer's machine, on-premise, or in hybrid cloud
                                    environments
                                </p>

                            </div>

                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/Self.webp') }}"
                                        alt="Predictable, application-private environments" class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">Secure
                                        & Consistent</h4>
                                </div>
                                <p class="text-center">Predictable environments that are isolated from other applications
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Key Features Ends --}}

                <div>
                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases</h3>
                    <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 gap-3 py-5">
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Isolating workloads with Microservices</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Application packaging format for DevOps</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Packaging applications for cloud migration</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Hybrid applications & Platform as a Service</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Containers Ends --}}

            {{-- Network --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <div class="container">
                    <div>
                        <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Bridge The Gap Between Your
                            Business & IT
                        </h2>
                        <p class="text-center py-5">In recent years, there has been an acceleration in the frequency,
                            diversity, and impact of disruptions. Let us plan, build, and manage your networks to help your
                            enterprise respond to the unexpected. Our software-defined network services makes it possible to
                            create, provision and manage networks flawlessly. It continues to leverage while continuing to
                            leverage the underlying physical network as the packet-forwarding backplane. Pi Cloud also
                            enables enterprises to gain end-to-end visibility and analysis of applications, users, and
                            devices across the network.</p>
                    </div>
                    <div>
                        <h2 class="font-bold lg:text-2xl md:text-xl sm:text-lg text-center text-[#545454]">Cloud Networking
                            Products & Solutions</h2>
                        <p class="text-center pt-5">Address your growing infrastructure needs, regional expansions, and
                            redundancy plans</p>
                    </div>

                    <div class="py-5">
                        <ul
                            class="lg:flex md:flex sm:block justify-center items-center sm:text-center lg:space-x-5 md:space-x-5 border-b-4 border-black">
                            <li id="network-tab-1"
                                class="network-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                                onclick="handleToggleNetworkTab(1)">
                                <button>Scale</button>
                            </li>
                            <li id="network-tab-2"
                                class="network-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                                onclick="handleToggleNetworkTab(2)">
                                <button>Connect</button>
                            </li>
                            <li id="network-tab-3"
                                class="network-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:my-0 sm:w-[90%]"
                                onclick="handleToggleNetworkTab(3)">
                                <button>Secure</button>
                            </li>
                        </ul>
                    </div>

                    {{-- network sub-tab-1 --}}
                    <div class="space-y-5 py-4 network-subtab-panel hidden" id="network-subtab-panel-1">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/sdwan_img.webp') }}"
                                alt="Pi Cloud optimizes bandwidth and security with SD-WAN." class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Software Defined WAN (SD-WAN)</h3>
                                <h4 class="text-[#545454] py-2">Improved network speed, enhanced security</h4>
                                <p>Pi Cloud, with its underlying Software Defined infrastructure has integrated SD-WAN to
                                    its architecture. It has enabled network admins to use bandwidth more efficiently,
                                    ensuring high performance for critical applications without compromising on security or
                                    data privacy. The unified WAN backbone delivers comprehensive analytics across the
                                    enterprise backbone.</p>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Multiprotocol Label Switching (MPLS)</h3>
                                <h4 class="text-[#545454] py-2">Reliable connectivity for real-time applications</h4>
                                <p>MPLS on Pi Cloud enables enterprises to build advanced and intelligent networks that
                                    deliver a wide variety of services over a single infrastructure. This solution can be
                                    utilized for bandwidth adjustment to reduce network congestion and increase quality of
                                    service. Enterprises with diverse access links can be added on an MPLS edge without
                                    changing their current environments.</p>
                            </div>
                            <img src="{{ asset('web/images/private-cloud/mpls_img.webp') }}"
                                alt="Reliable connections for real-time apps." class="w-96 mx-auto my-0">
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/directconnect_img.webp') }}"
                                alt="Dedicated high throughput point-to-point ethernet" class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Direct Connect (P2P)</h3>
                                <h4 class="text-[#545454] py-2">Dedicated connection from your premises to Pi Cloud</h4>
                                <p>Seamless and secure Point to Point ethernet connection ensures your premise is directly
                                    connected to Pi Cloud. Enterprises can also establish private connectivity between Pi
                                    Cloud and their multi cloud environments. This ensures increased bandwidth throughput up
                                    to hundreds of Gigs to meet real-time spikes and eases the transfer of large data sets
                                    over the wire.</p>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Wifi On Cloud</h3>
                                <h4 class="text-[#545454] py-2">Centralized and managed wifi solution</h4>
                                <p>Pi Cloud allows enterprises to operate its multi-locale wifi environment on cloud.
                                    Managing the entire wifi network on cloud is equally seamless. It eliminates the need of
                                    having on-premise wireless controller hardware, thereby ensuring swift scalability. It
                                    also offers users, an enhanced experience through location-based and context-aware
                                    applications, while reducing capex and operational expense with a pay-as-you-go model.
                                </p>
                            </div>
                            <img src="{{ asset('web/images/private-cloud/wifioncloud_img.webp') }}"
                                alt="With cloud-managed Wi-Fi, scale effortlessly and simplify operations"
                                class="w-96 mx-auto my-0">
                        </div>
                    </div>

                    {{-- network sub-tab-1 Ends --}}

                    {{-- network sub-tab-2 --}}
                    <div class="space-y-5 py-4 network-subtab-panel hidden" id="network-subtab-panel-2">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/cdn_img.webp') }}"
                                alt="India’s secure CDN speeds up content delivery nationwide" class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">HarbourFront&#174;(CDN)</h3>
                                <h4 class="text-[#545454] py-2">Deliver content fast, efficiently and securely</h4>
                                <p>HarbourfrontTM(CDN), India's first indigenous content service ensures high availability
                                    and performace. By geographically distributing a network of proxy servers and caching
                                    data spatially relative to end users, HarbourfrontTM(CDN) ensures ensures high
                                    availability and performance. It can be used for content storage and delivery service
                                    for web acceleration, file download optimization, transcoding, video on demand and live
                                    streaming.</p>
                                {{-- <div class="pt-4 space-x-3">
                                    <a href="#" class="btn-primary-md">Learn more</a>
                                </div> --}}
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Load Balancer (LB)</h3>
                                <h4 class="text-[#545454] py-2">Increased performance and high availability</h4>
                                <p>Enterprises can leverage Pi Cloud to distribute workloads and compute resources in hybrid
                                    and heterogeneous cloud environments. This service is adopted by enterprises to
                                    dynamically manage resource allocation and workload demands. Lower cost of ownership,
                                    ease of scale and manageability, are some of its key advantages over conventional
                                    on-premise load balancing .</p>
                            </div>
                            <img src="{{ asset('web/images/private-cloud/lb_img.webp') }}"
                                alt="Balance workloads & resources across hybrid clouds for high performance"
                                class="w-96 mx-auto my-0">
                        </div>


                    </div>
                    {{-- network sub-tab-2 Ends --}}

                    {{-- network sub-tab-3 --}}
                    <div class="space-y-5 py-4 network-subtab-panel hidden" id="network-subtab-panel-3">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/vpn_img.webp') }}"
                                alt="Enables enterprises by creating a private network to access their workloads across the globe"
                                class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Virtual Private Network (VPN)</h3>
                                <h4 class="text-[#545454] py-2">Securely access your network resources</h4>
                                <p>VPN on Pi Cloud provides anonymity by creating a private network over the open internet.
                                    It enables enterprises to access their workloads on the cloud from anywhere, at any
                                    time, and through any device without compromising security. Masking of internet protocol
                                    (IP) addresses keeps your transactions at bay from intrusion. Network admins can use VPN
                                    to gain visibility into the network, certificate pinning, and encrypting data.</p>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Firewall As A Service (FWaaS)</h3>
                                <h4 class="text-[#545454] py-2">Monitor and control network traffic, basis pre-defined
                                    rules
                                </h4>
                                <p>FWaaS on Pi Cloud is the first layer of defense for enterprise workloads and eliminates
                                    the need for an appliance form factor. Our FWaaS ensures perimeter-level security for
                                    enterprises at their hub offices, branch locations, and end points. All of these without
                                    the need to install additional hardware.</p>
                                <br>
                                <p>Features: URL filtering | Intrusion Prevention | Intrusion Detection | Global Connect</p>
                            </div>
                            <img src="{{ asset('web/images/private-cloud/firewall_img.webp') }}"
                                alt="Secure your network traffic with pre-defined rules, eliminating hardware needs"
                                class="w-96 mx-auto my-0">
                        </div>

                    </div>
                    {{-- network sub-tab-3 Ends --}}
                </div>
            </div>
            {{-- Network Ends --}}

            {{-- Storage --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <div class="container">
                    <div>
                        <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Go Practically Limitless
                            Capacity With Pi Cloud</h2>
                        <p class="text-center py-5">Data is the lifeline of any business and it is important to consider
                            how enterprises store data, based on enterprise business needs. Pi Cloud allows enterprises to
                            select storage of choice that meets business objectives. Pi Cloud presents varied storage
                            formats to hold, organize and present data with objective driven distinct features and
                            capabilities.</p>
                    </div>
                    <div>
                        <h2 class="font-bold lg:text-2xl md:text-xl sm:text-lg text-center text-[#545454]">Storage
                            Solutions</h2>
                    </div>

                    <div class="py-5">
                        <ul
                            class="lg:flex md:flex sm:block justify-center items-center sm:text-center lg:space-x-5 md:space-x-5 border-b-4 border-black">
                            <li id="storage-tab-1"
                                class="storage-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                                onclick="handleToggleStorageTab(1)">
                                <button>Block Storage</button>
                            </li>
                            <li id="storage-tab-2"
                                class="storage-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                                onclick="handleToggleStorageTab(2)">
                                <button>Object Storage</button>
                            </li>
                            <li id="storage-tab-3"
                                class="storage-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:my-0 sm:w-[90%]"
                                onclick="handleToggleStorageTab(3)">
                                <button>File Storage</button>
                            </li>
                        </ul>
                    </div>

                    {{-- Storage sub-tab-1 --}}
                    <div class="space-y-5 py-4 storage-subtab-panel hidden" id="storage-subtab-panel-1">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/block_img.webp') }}"
                                alt="Break data into secure, managed chunks. Ultimate flexibility for virtual servers"
                                class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Block Storage</h3>
                                <p>This allows enterprises to store data in blocks and then store them with unique
                                    identifiers. Block storage on Pi Cloud offers durable, customizable block volumes,
                                    attached to virtual servers. Ease of manageability and customization makes them stand
                                    out.</p>
                            </div>
                        </div>


                        {{-- Key Features --}}
                        <section class="py-2">
                            <div class="container">
                                <div>
                                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                                </div>

                                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/hp.webp') }}"
                                                alt="Built for speed & reliability – Ideal for critical applications"
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                High Performance</h4>
                                        </div>
                                        <p class="text-center">Ideal for high-performing, mission-critical applications
                                            that require consistent input/output (I/O) performance</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/dr.webp') }}"
                                                alt="Data is retrieved even after deletion in virtual server"
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Data Retention</h4>
                                        </div>
                                        <p class="text-center">Retains data even after deletion of virtual server</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/snap.webp') }}"
                                                alt="Pi cloud block storage with snapshots & resizing for on-demand control"
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Snapshot and Resizing
                                            </h4>
                                        </div>
                                        <p class="text-center">Features such as snapshot and resizing, are available for
                                            block volumes </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- Key Features Ends --}}

                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases</h3>
                            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 py-5 gap-3">
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Critical business applications</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Transactional Databases</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Workloads that require low-latency</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Storage-area network (SAN) environments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Storage sub-tab-1 Ends --}}

                    {{-- Storage sub-tab-2 --}}
                    <div class="space-y-5 py-4 storage-subtab-panel hidden" id="storage-subtab-panel-2">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Object Storage</h3>
                                <p>Today’s digital world requires data archiving and backing-up of unstructured data. Media
                                    and web contents like email, videos, image files, web pages and sensor data produced by
                                    IoT has taken the center stage. Object storage on Pi Cloud is ideal for archiving data
                                    that does not change frequently.</p>
                            </div>
                            <img src="{{ asset('web/images/private-cloud/object_img.webp') }}"
                                alt="Effortless archiving for massive unstructured data (media, web content, IoT)"
                                class="w-96 mx-auto my-0">
                        </div>


                        {{-- Key Features --}}
                        <section class="py-2">
                            <div class="container">
                                <div>
                                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                                </div>

                                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/dt.webp') }}"
                                                alt="Flexible transfer of data" class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Data Transfer</h4>
                                        </div>
                                        <p class="text-center">Simple and flexible transfer of data</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/sc.webp') }}"
                                                alt="Scales to petabytes with on-demand access" class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Scalability</h4>
                                        </div>
                                        <p class="text-center">Scalability (upto PBs) and distributed access</p>

                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/md.webp') }}"
                                                alt="Customize with metadata and attributes for easy retrieval"
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Supports Metadata</h4>
                                        </div>
                                        <p class="text-center">Supports custom Metadata and various attributes</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- Key Features Ends --}}

                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases</h3>
                            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 py-5 gap-3">
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Petabyte-scale data volumes</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Highly distributed systems</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Static Websites</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Distributed Storage systems</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Storage sub-tab-2 Ends --}}


                    {{-- Storage sub-tab-3 --}}
                    <div class="space-y-5 py-4 storage-subtab-panel hidden" id="storage-subtab-panel-3">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/file_img.webp') }}"
                                alt="Easy access to the familiar file folders in the cloud" class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">File Storage</h3>
                                <p>A hierarchical storage methodology is used to organize and store data on an incomputer
                                    storage or network-attached storage. File storage on Pi Cloud is a Linux file system,
                                    and is the predominant human-readable storage format. </p>
                            </div>
                        </div>

                        {{-- Key Features --}}
                        <section class="py-2">
                            <div class="container">
                                <div>
                                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                                </div>

                                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/os.webp') }}"
                                                alt="Structured data thrives in a hierarchical organization."
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Organised Storage</h4>
                                        </div>
                                        <p class="text-center">Hierarchical file storage works well with easily organized
                                            structured data</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/mas.webp') }}"
                                                alt="Collaborate on files from anywhere." class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Multi Access and Sharing
                                            </h4>
                                        </div>
                                        <p class="text-center">Allows multiple user access to the same file data parked at
                                            distinct locations
                                        </p>

                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/snap.webp') }}"
                                                alt="Cloud eliminates hardware costs." class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Cost Effective
                                            </h4>
                                        </div>
                                        <p class="text-center">Eliminates the cost of maintaining in-house hardware
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- Key Features Ends --}}

                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases</h3>
                            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 py-5 gap-3">
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Local file sharing</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Centralized file collaboration</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Hot & Cold Backup</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Newtwork-attached storage systems</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Storage sub-tab-3 Ends --}}
                </div>
            </div>
            {{-- Storage Ends --}}


            {{-- Security --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <div class="container">
                    <div>
                        <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Modern Day Battlefield Is On
                            The Web </h2>
                        <p class="text-center py-5">In today's connected world, cyber-attacks occur once every 14 seconds.
                            With more connected devices in this world than people on Earth, there is an increased reliance
                            on the internet, wireless network standards, smart devices, and IoT. This has increased the
                            threat vector of enterprises, making them vulnerable to a wide range of risks stemming from
                            cyber threats, disrupting operations, and damaging the reputation of any enterprise. It won't be
                            an exaggeration to say that <a
                                href="https://pidatacenters.com/knowledge-hub/why-cybersecurity-is-a-buzz-word-across-industries"
                                class="hover:underline underline-offset-2 text-blue-600" target="_blank">multi layered
                                cyber security</a> mechanisms and skilled experts are the last lines of defense for the
                            digital data assets of enterprises. It makes the difference between digital harmony and digital
                            chaos.</p>
                    </div>
                    <div>
                        <h2 class="font-bold lg:text-2xl md:text-xl sm:text-lg text-center text-[#545454]">Enterprise-Grade
                            Cyber Security Products</h2>
                        <p class="text-center pt-5">Multiple layers of protection spread across the systems, users, and
                            operations.</p>
                    </div>

                    <div class="py-5">
                        <ul
                            class="lg:flex md:flex sm:block justify-center items-center sm:text-center lg:space-x-5 md:space-x-5 border-b-4 border-black">
                            <li id="cyber-security-tab-1"
                                class="cyber-security-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                                onclick="handleToggleCyberSecurityTab(1)">
                                <button>Infrastructure</button>
                            </li>
                            <li id="cyber-security-tab-2"
                                class="cyber-security-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                                onclick="handleToggleCyberSecurityTab(2)">
                                <button>Application</button>
                            </li>
                            <li id="cyber-security-tab-3"
                                class="cyber-security-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                                onclick="handleToggleCyberSecurityTab(3)">
                                <button>End-point</button>
                            </li>
                            <li id="cyber-security-tab-4"
                                class="cyber-security-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:my-0 sm:w-[90%]"
                                onclick="handleToggleCyberSecurityTab(4)">
                                <button>Management</button>
                            </li>
                        </ul>
                    </div>

                    {{-- Security sub-tab-1 --}}
                    <div class="space-y-5 py-4 cyber-security-subtab-panel hidden" id="cyber-security-subtab-panel-1">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/firewall_img.webp') }}"
                                alt="Security everywhere simplified. Monitor and control network traffic from a central hub."
                                class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Firewall As A Service (FWaaS)</h3>
                                <h4 class="text-[#545454] py-2">Monitor and control network traffic based on pre-defined
                                    rules.
                                </h4>
                                <p>FWaaS on Pi Cloud is the first layer of defense for enterprise workloads and eliminates
                                    the need for an appliance form factor. Network admins can ensure a virtual firewall is
                                    available at the hub office, branch locations, and endpoints without installing
                                    additional hardware.</p>
                                <br>
                                <p>Features: URL filtering | Intrusion Prevention | Intrusion Detection | Global Connect</p>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Anti-DDoS</h3>
                                <h4 class="text-[#545454] py-2">Mitigation from Distributed Denial of Service(DDoS) attacks
                                </h4>
                                <p>Anti-DDoS on Pi Cloud, secures websites, applications, and entire network while ensuring
                                    the performance of legitimate traffic is not compromised. It is designed to protect
                                    enterprise network, transport and application Layer</p>
                                <p>DDoS Protection for: Network infrastructure, web assets (HTTP/HTTPs), and for any
                                    application such as FTP, SSH, VoIP, gaming, or any application running over a TCP/UDP
                                    protocol, on enterprise cloud and on-premise networks</p>
                            </div>
                            <img src="{{ asset('web/images/private-cloud/ddos_img.webp') }}"
                                alt="Safeguard websites, apps, and entire networks from DDoS attacks without impacting legitimate traffic."
                                class="w-96 mx-auto my-0">
                        </div>
                    </div>
                    {{-- Security sub-tab-1 Ends --}}

                    {{-- Security sub-tab-2 --}}
                    <div>
                        <div class="space-y-5 py-4 cyber-security-subtab-panel hidden" id="cyber-security-subtab-panel-2">
                            <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                                <img src="{{ asset('web/images/private-cloud/av_img.webp') }}"
                                    alt="Protect your systems and data from malware and zero-day threats with Pi-cloud antivirus"
                                    class="w-96 mx-auto my-0">
                                <div class="flex flex-col justify-center">
                                    <h3 class="font-bold text-xl py-2">Antivirus Software</h3>
                                    <h4 class="text-[#545454] py-2">Prevent, detect, and remove malware.</h4>
                                    <p>Being connected to the Internet also opens up avenues for increased threat vectors.
                                        Pi Cloud antivirus software scans for security and performance issues and ensures
                                        enterprise systems, data, and end-users are malware-safe and immune to zero-day
                                        vulnerabilities.</p>
                                    <br>
                                    <p>Protection against: Browser hijackers | Ransomware | Keyloggers | Backdoors |
                                        Rootkits |
                                        Trojan horses | Worms | Malicious LSPs | Adware and spyware</p>
                                </div>
                            </div>

                            <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                                <div class="flex flex-col justify-center">
                                    <h3 class="font-bold text-xl py-2">Web Application Firewall (WAF)</h3>
                                    <h4 class="text-[#545454] py-2">Filter, monitor, and block unsolicited HTTP traffic.
                                    </h4>
                                    <p>WAF service on Pi Cloud monitors, logs, and analyses the HTTP traffic between the
                                        enterprise applications and the Internet. It aims to protect against vulnerabilities
                                        in the application
                                        by filtering out malicious traffic. WAF on Pi Cloud protects web applications from
                                        cross-site forgery, cross-site-scripting (XSS), file inclusion, and SQL injection,
                                        among others that may sabotage important transactions and steal sensitive data.</p>
                                </div>
                                <img src="{{ asset('web/images/private-cloud/waf_img.webp') }}"
                                    alt="Monitors, filters, and blocks malicious HTTP traffic to protect web apps from XSS, SQL injection, and other threats."
                                    class="w-96 mx-auto my-0">
                            </div>
                        </div>
                    </div>

                    {{-- Security sub-tab-2 Ends --}}

                    {{-- Security sub-tab-3 --}}
                    <div class="space-y-5 py-4 cyber-security-subtab-panel hidden" id="cyber-security-subtab-panel-3">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/epp_img.webp') }}"
                                alt="For better endpoint security, EPP on Pi cloud integrates antivirus, encryption, intrusion prevention, and data loss prevention."
                                class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Endpoint Protection Platform (EPP)</h3>
                                <h4 class="text-[#545454] py-2">Integrated suite of endpoint protection technologies</h4>
                                <p>EPP on Pi Cloud provides essential security for many endpoints, from smartphones to
                                    printers. It is an integrated suite of technologies, such as antivirus, data encryption,
                                    intrusion prevention, and data loss prevention. The EPP framework includes data sharing
                                    between endpoint protection technologies, which provides a more effective approach than
                                    a collection of siloed security products that lack the ability to communicate.</p>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Endpoint Detection and Response (EDR)</h3>
                                <h4 class="text-[#545454] py-2">Securely access Enterprise network resources</h4>
                                <p>EDR on Pi-cloud reduces the time it takes to detect and respond to threats. It provides
                                    additional tools to hunt for threats, forensically analyze intrusions, and respond
                                    swiftly and effectively to attacks.</p>
                                <br>
                                <p>Features: Simplify deployment | Incident response | Gain visibility into emerging threats
                                    | AI-guided investigations | Automated processes</p>
                            </div>
                            <img src="{{ asset('web/images/private-cloud/edr_img.webp') }}"
                                alt="Pi-Cloud ensures secure access to enterprise resources with EDR for fast threat detection and response."
                                class="w-96 mx-auto my-0">
                        </div>
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/iam_img.webp') }}"
                                alt="Grant granular access control - admins manage users, groups, and permissions for a compliant and secure environment."
                                class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Identity & Access Management (IAM)</h3>
                                <h4 class="text-[#545454] py-2">Securely manage access across enterprise IT resources</h4>
                                <p>IAM on Pi Cloud is a periphery security to the cloud. It acts as a foundation to a
                                    secured and fully compliant cloud architecture. Admins can create and manage end-users,
                                    groups, relative policies and use permissions to allow or deny their access.</p>
                                <br>
                                <p>Use Cases: Multi-factor Authentication(MFA) | Granular access controls | Monitor &
                                    analyze access | Privileged-user file & resources access</p>
                            </div>
                        </div>

                    </div>
                    {{-- Security sub-tab-3 Ends --}}

                    {{-- Security sub-tab-4 --}}
                    <div class="space-y-5 py-4 cyber-security-subtab-panel hidden" id="cyber-security-subtab-panel-4">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/soc_img.webp') }}"
                                alt="Continuously monitors, detects threats, and helps you respond to security incidents – all in one place."
                                class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Security Operations Center (SOC)</h3>
                                <h4 class="text-[#545454] py-2">Detect, analyze, and respond to cybersecurity incidents
                                </h4>
                                <p>Security Information and Event Management (SIEM) enabled SOC on Pi Cloud is a centralized
                                    24x7 function that continuously monitors and enhances the enterprise security posture
                                    for an organization, while preventing, detecting, analyzing, and responding to
                                    cybersecurity incidents.</p>
                                <br>
                                <p>Features: Monitoring & assessment | Advanced intelligence gathering | Forensics |
                                    Contingency planning | Malware protection</p>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Vulnerability Assessment(VA) & Penetration Testing(PT)
                                </h3>
                                <h4 class="text-[#545454] py-2">Comprehensive evaluation of cyber-threat readiness</h4>
                                <p>VA allows enterprises to scan, identify and prioritize vulnerabilities and threats early
                                    on, to ensure, most critical vulnerabilities are fixed first. Pen Test or ethical
                                    hacking, is an authorized simulated cyberattack on a computer system, performed to
                                    evaluate the security of the enterprise infrastructure and end-users.</p>
                            </div>
                            <img src="{{ asset('web/images/private-cloud/vapt_img.webp') }}"
                                alt="VA identifies and prioritizes system weaknesses, while Pen Test evaluates cybersecurity through simulated attacks."
                                class="w-96 mx-auto my-0">
                        </div>
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/vault_img.webp') }}"
                                alt="Creates a secure vault for sensitive data & processes. It locks down user access & movement, preventing unauthorized actions."
                                class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">MicroVault (MV) & DataVault (DV)</h3>
                                <h4 class="text-[#545454] py-2">Eliminate exposure of servers, data and processes</h4>
                                <p>Protect data and processes from tampering, unauthorized access and destruction.
                                    Movement
                                    is restrained by containerizing the user into a secure shell/vault, while zero trust
                                    segmentation prevents lateral movement and elevation of user accounts. In contrast
                                    to
                                    MV, which is built for servers, DV is designed as a secure file repository for the
                                    executive teams, vital business functions, IP protection, and critical backups.
                                </p>
                            </div>
                        </div>

                    </div>
                    {{-- Security sub-tab-4 Ends --}}
                </div>
            </div>
            {{-- Security Ends --}}

            {{-- Business --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <div class="container">
                    <div>
                        <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Prevention Is Better Than
                            Cure
                        </h2>
                        <p class="text-center py-5">IT disasters can be natural or inflicted by human error. Any such
                            threat, causing a <a
                                href="https://pidatacenters.com/knowledge-hub/discover-how-data-centers-simplify-everything"
                                class="hover:underline underline-offset-2 text-blue-600" target="_blank">data center</a>
                            failure, server corruption, or cyber attacks can be expensive for
                            your business. They not only disrupt your operations, but also cause permanent data loss, damage
                            your reputation and impact your revenue. With business continuity on Pi Cloud, enterprises can
                            ensure that adverse effect on their business runtime is minimalistic and they get to return to
                            full operational state in no time.</p>
                    </div>
                    <div>
                        <h2 class="font-bold lg:text-2xl md:text-xl sm:text-lg text-center text-[#545454]">Business
                            Continuity Products</h2>
                    </div>

                    <div class="py-5">
                        <ul
                            class="lg:flex md:flex sm:block justify-center items-center sm:text-center lg:space-x-5 md:space-x-5 border-b-4 border-black">
                            <li id="business-continuity-tab-1"
                                class="business-continuity-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                                onclick="handleToggleBusinessContinuityTab(1)">
                                <button>Disaster Recovery</button>
                            </li>
                            <li id="business-continuity-tab-2"
                                class="business-continuity-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                                onclick="handleToggleBusinessContinuityTab(2)">
                                <button>Backup</button>
                            </li>
                            <li id="business-continuity-tab-3"
                                class="business-continuity-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:my-0 sm:w-[90%]"
                                onclick="handleToggleBusinessContinuityTab(3)">
                                <button>High Availability (HA)</button>
                            </li>
                        </ul>
                    </div>

                    {{-- Business sub-tab-1 --}}
                    <div class="space-y-5 business-continuity-subtab-panel hidden"
                        id="business-continuity-subtab-panel-1">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/dr_img.webp') }}"
                                alt="Choose the right DR plan for your business needs to minimize downtime"
                                class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Disaster Recovery</h3>
                                <p>Pi Cloud offers Disaster Recovery as a Service(DRaaS), ensuring near-zero business
                                    disruption in case of an outage. DRaaS provides rapid failover and failback for your IT
                                    environment across infrastructure, applications, and processes. Choose from
                                    active-active, active-passive, or cold DR to balance business needs and TCO. Enterprises
                                    get to leverage the multi-availability zones of Pi Cloud to design an effective Near and
                                    Far DR policy. </p>
                            </div>
                        </div>


                        {{-- Key Features --}}
                        <section class="py-2">
                            <div class="container">
                                <div>
                                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                                </div>

                                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/cd.webp') }}"
                                                alt="Fast recovery of critical apps & data meeting your RPO & RTO for business"
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Custom Deployment</h4>
                                        </div>
                                        <p class="text-center">Recovery of business-critical applications and data within
                                            prescribed RPO and RTO your business needs</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/rf.webp') }}"
                                                alt="Optimize your TCO with Pi Cloud" class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Low Business Risk</h4>
                                        </div>
                                        <p class="text-center">Optimal TCO without compromising on quality and availability
                                        </p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/drd.webp') }}"
                                                alt="Regular drills boost readiness" class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                DR Drills</h4>
                                        </div>
                                        <p class="text-center">Periodic drills enable operational readiness and Use Cases
                                            to improve resiliency and recovery time</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- Key Features Ends --}}

                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center">Use Cases</h3>
                            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 py-5 gap-3">
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Protection from various cyber attacks and threats</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Regulatory compliance for running mission critical workloads</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Safeguard your data against natural calamitiess</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Databases & other apps requiring faster I/O</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Business sub-tab-1 Ends --}}

                    {{-- Business sub-tab-2 --}}
                    <div class="space-y-5 py-4 business-continuity-subtab-panel hidden"
                        id="business-continuity-subtab-panel-2">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Backup</h3>
                                <p>Pi Cloud backup service offers a cost-effective way to protect mission-critical data and
                                    applications from unplanned downtime. By copying and storing a wide range of workloads
                                    across different zones, enterprises are assured of reinstating the files in case of a
                                    disruption. The benefit of regular data backup is its reliability. Automated backup on
                                    Pi Cloud takes any possibility of human error or backup missing out on the equation.
                                    This assures enterprises of the steadiness of data availability and being up-to-date.
                                </p>
                            </div>
                            <img src="{{ asset('web/images/private-cloud/backup_img.webp') }}"
                                alt="Secure your data & apps automatically." class="w-96 mx-auto my-0">
                        </div>


                        {{-- Key Features --}}
                        <section class="py-2">
                            <div class="container">
                                <div>
                                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                                </div>

                                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/eou.webp') }}"
                                                alt="Manage and secure your data centrally from one interface"
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Ease Of Use</h4>
                                        </div>
                                        <p class="text-center">Schedule, manage and restore centrally from one interface
                                        </p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/hcb.webp') }}"
                                                alt="Single workload management for seamless on-cloud and on-premises"
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Hybrid Backup Solution
                                            </h4>
                                        </div>
                                        <p class="text-center">Single point solution for your workloads running on cloud
                                            and on-premise</p>

                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/fdb.webp') }}"
                                                alt="Restore entire workloads or specific files within a specified time window."
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Flexible Backup Options
                                            </h4>
                                        </div>
                                        <p class="text-center">Restore your entire workloads or specific files and
                                            folders for a given duration window</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- Key Features Ends --}}

                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases</h3>
                            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 py-5 gap-3">
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Protection from ransomware</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>In-house server breakdown</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Cold storage of data</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Protection from ransomware</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Business sub-tab-2 Ends --}}


                    {{-- Business sub-tab-3 --}}
                    <div class="space-y-5 py-4 business-continuity-subtab-panel hidden"
                        id="business-continuity-subtab-panel-3">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/ha_img.webp') }}"
                                alt="Redundant systems & load balancing ensures seamless app access for peak performance."
                                class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">High Availability (HA)</h3>
                                <p>High Availability on Pi Cloud uses specific components and methods to ensure the best
                                    possible performance of the system during high traffic, power outages, or equipment
                                    failure. It ensures the redundancy of systems and data through multiple machines on
                                    clusters, as well as load balancing of workloads. This ensured no server within the
                                    cluster ever got overloaded. Users are assured of seamless access to applications
                                    deployed on HA, even in times of high load, ensuring maximum stability and availability.
                                    All elements of HA on Pi Cloud go through rigorous testing of components and services to
                                    ensure high performance and security.</p>
                            </div>
                        </div>

                        {{-- Key Features --}}
                        <section class="py-2">
                            <div class="container">
                                <div>
                                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                                </div>

                                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/onesize.webp') }}"
                                                alt="Workload optimized servers with zero or minimal downtime"
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                HA Clustering</h4>
                                        </div>
                                        <p class="text-center">Cloud servers customized and grouped to support workloads
                                            with zero or minimal downtime</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/onesize.webp') }}"
                                                alt="Enterprise-grade HA software safeguards service continuity with redundant clusters."
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                No Single Point Of
                                                Failure</h4>
                                        </div>
                                        <p class="text-center">The redundancy built in by enterprise grade HA softwares
                                            provides clusters, ensuring service continuity</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/onesize.webp') }}"
                                                alt="Global monitoring pinpoints server & workload issues before they hit."
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Monitoring & Detection
                                            </h4>
                                        </div>
                                        <p class="text-center">Follow the sun monitoring of all servers, resource pools and
                                            workloads for preventive detection of possible failures</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- Key Features Ends --}}

                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases</h3>
                            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 py-5 gap-3">
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>100% availability of mission-critical workloads</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Maximum productivity and reliability
                                    </p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Updates and fixes with zero downtime</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Updates and fixes with zero downtime (repeated twice, delete one).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Business sub-tab-3 Ends --}}
                </div>
            </div>
            {{-- Business Ends --}}

            {{-- DevOps --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <div class="container">
                    <div>
                        <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">End-To-End DevOps Solution On
                            Pi Cloud</h2>
                        <p class="text-center py-5">DevOps is a portmanteau of “development & operations”; it is also a
                            union of best practices and tools that are put in place to improve enterprise performance to
                            deliver applications, products, and services faster. This agility empowers enterprises to serve
                            their clients better and be competitive in the market. DevOps practice on Pi Cloud eliminates
                            the barriers between development and operations team. Under its unified model, development and
                            operations team work collectively all through the software application life cycle, starting from
                            testing an application to launching it.</p>
                    </div>

                    <div>
                        <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-xl text-center text-[#545454]">Practices</h2>
                    </div>
                    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-5 py-10">
                        <div
                            class="lg:flex md:block sm:block items-top justify-center flex-row gap-10 border-2 border-[#ccc] p-3 hover:bg-[#223f974f] rounded-xl">
                            <div>
                                <img src="{{ asset('web/images/private-cloud/ci.webp') }}"
                                    alt="Frequent code integration & testing for faster, bug-free releases."
                                    class="lg:w-80 md:w-[7rem] md:mx-auto md:my-0 sm:w-20 bg-web-ascent-1 p-2 rounded-lg">
                            </div>
                            <div>
                                <h3
                                    class="font-bold lg:text-xl md:text-xl sm:text-lg lg:pb-2 md:py-4 sm:pb-2 lg:text-left md:text-center sm:text-left">
                                    Continuous
                                    Integration (CI)
                                </h3>
                                <p class="lg:text-left md:text-center sm:text-left">CI is a DevOps software development
                                    best practice, enabling developers to intertwine code
                                    changes into a common repository, for testing. The whole purpose of the integration is
                                    to
                                    address the bugs quickly thus enhancing quality of the software, by reducing the time to
                                    check and release new updates.</p>
                            </div>
                        </div>

                        <div
                            class="lg:flex md:block sm:block items-top justify-center flex-row gap-10 border-2 border-[#ccc] p-3 hover:bg-[#223f974f] rounded-xl">
                            <div>
                                <img src="{{ asset('web/images/private-cloud/cd-one.webp') }}"
                                    alt=" Automates deployments after testing, enabling faster releases to production."
                                    class="lg:w-80 md:w-[7rem] md:mx-auto md:my-0 sm:w-20 bg-web-ascent-1 p-2 rounded-lg">
                            </div>
                            <div>
                                <h3
                                    class="font-bold lg:text-xl md:text-xl sm:text-lg lg:pb-2 md:py-4 sm:pb-2 lg:text-left md:text-center sm:text-left">
                                    Continuous Delivery (CD)</h3>
                                <p class="lg:text-left md:text-center sm:text-left">CD is a software development practice
                                    where changes in application are automatically
                                    built, tested, and prepared for a release to production. It expands upon continuous
                                    integration by deploying all code changes to a testing environment and/or a production
                                    environment after the build stage.</p>
                            </div>
                        </div>

                        <div
                            class="lg:flex md:block sm:block items-top justify-center flex-row gap-10 border-2 border-[#ccc] p-3 hover:bg-[#223f974f] rounded-xl">
                            <div>
                                <img src="{{ asset('web/images/private-cloud/micro.webp') }}"
                                    alt=" Build flexible apps with independent, business-focused services that communicate via APIs"
                                    class="lg:w-80 md:w-[7rem] md:mx-auto md:my-0 sm:w-20 bg-web-ascent-1 p-2 rounded-lg">
                            </div>
                            <div>
                                <h3
                                    class="font-bold lg:text-xl md:text-xl sm:text-lg lg:pb-2 md:py-4 sm:pb-2 lg:text-left md:text-center sm:text-left">
                                    Microservices</h3>
                                <p class="lg:text-left md:text-center sm:text-left">Each service runs in its own process
                                    and communicates with other services through a
                                    HTTP-based API. Microservices are built around business capabilities and enterprises can
                                    use different frameworks or programming languages to package microservices.</p>
                            </div>
                        </div>

                        <div
                            class="lg:flex md:block sm:block items-top justify-center flex-row gap-10 border-2 border-[#ccc] p-3 hover:bg-[#223f974f] rounded-xl">
                            <div>
                                <img src="{{ asset('web/images/private-cloud/iac.webp') }}"
                                    alt="Code-driven provisioning & management for scalable, automated deployment."
                                    class="lg:w-80 md:w-[7rem] md:mx-auto md:my-0 sm:w-20 bg-web-ascent-1 p-2 rounded-lg">
                            </div>
                            <div>
                                <h3
                                    class="font-bold lg:text-xl md:text-xl sm:text-lg lg:pb-2 md:py-4 sm:pb-2 lg:text-left md:text-center sm:text-left">
                                    Infrastructure As Code</h3>
                                <p class="lg:text-left md:text-center sm:text-left">Provision and manage infrastructure
                                    using code, version control and continuous
                                    integration. Cloud-native API-driven model enables developers and system administrators
                                    to interact with infrastructure programmatically, and at scale, instead of needing to
                                    manually set up and configure resources.</p>
                            </div>
                        </div>

                        <div
                            class="lg:flex md:block sm:block items-top justify-center flex-row gap-10 border-2 border-[#ccc] p-3 hover:bg-[#223f974f] rounded-xl">
                            <div>
                                <img src="{{ asset('web/images/private-cloud/mon.webp') }}"
                                    alt="Gain insights into user impact, troubleshoot issues & proactively monitor services."
                                    class="lg:w-80 md:w-[7rem] md:mx-auto md:my-0 sm:w-20 bg-web-ascent-1 p-2 rounded-lg">
                            </div>
                            <div>
                                <h3
                                    class="font-bold lg:text-xl md:text-xl sm:text-lg lg:pb-2 md:py-4 sm:pb-2 lg:text-left md:text-center sm:text-left">
                                    Monitoring and Logging</h3>
                                <p class="lg:text-left md:text-center sm:text-left">With monitoring & logging in place,
                                    enterprises understand how changes or updates impact
                                    end-users. It helps shedding insights into the root causes of problems or unexpected
                                    changes. Creating alerts or performing real-time analysis of this data also helps
                                    enterprises to monitor their services proactively.</p>
                            </div>
                        </div>

                        <div
                            class="lg:flex md:block sm:block items-top justify-center flex-row gap-10 border-2 border-[#ccc] p-3 hover:bg-[#223f974f] rounded-xl">
                            <div>
                                <img src="{{ asset('web/images/private-cloud/cola.webp') }}"
                                    alt="Streamlines communication across teams for faster collaboration & goal alignment."
                                    class="lg:w-80 md:w-[7rem] md:mx-auto md:my-0 sm:w-20 bg-web-ascent-1 p-2 rounded-lg">
                            </div>
                            <div>
                                <h3
                                    class="font-bold lg:text-xl md:text-xl sm:text-lg lg:pb-2 md:py-4 sm:pb-2 lg:text-left md:text-center sm:text-left">
                                    Communication and Collaboration
                                </h3>
                                <p class="lg:text-left md:text-center sm:text-left">Development teams can share information
                                    and facilitate communications around project
                                    tracking systems through chat. This helps speed up communication across developers,
                                    operations, and even other teams like marketing or sales, allowing all stakeholders in
                                    an enterprise to closely on goals</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- DevOps Ends --}}

            {{-- Computing --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <div class="container">
                    <div>
                        <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Digital Workplace Is The New
                            Normal
                        </h2>
                        <p class="text-center py-5">Teams today are working remotely and on the go. Without proper
                            visibility into the complex multi-vendor work environments, it's a daunting task to figure out
                            what's wrong and who's responsible. End User <a
                                href="https://pidatacenters.com/knowledge-hub/the-evolution-of-computing-a-guide-to-cloud-hosting"
                                class="hover:underline underline-offset-2 text-blue-600" target="_blank">Computing</a>
                            services on Pi Cloud offer a managed Virtual Desktop Infrastructure(VDI) environment on the
                            cloud, enabling users to access anytime, anywhere, and from any device operation.</p>
                    </div>
                    <div>
                        <h2 class="font-bold lg:text-2xl md:text-xl sm:text-lg text-center text-[#545454]">End User
                            Computing Products & Services</h2>
                    </div>

                    <div class="py-5">
                        <ul
                            class="lg:flex md:flex sm:block justify-center items-center sm:text-center lg:space-x-5 md:space-x-5 border-b-4 border-black">
                            <li id="user-computing-tab-1"
                                class="user-computing-tab  lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                                onclick="handleToggleEndUserComputingTab(1)">
                                <button>Workspace</button>
                            </li>
                            <li id="user-computing-tab-2"
                                class="user-computing-tab  lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                                onclick="handleToggleEndUserComputingTab(2)">
                                <button>App Streaming</button>
                            </li>
                            <li id="user-computing-tab-3"
                                class="user-computing-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:my-0 sm:w-[90%]"
                                onclick="handleToggleEndUserComputingTab(3)">
                                <button>Remote Access</button>
                            </li>
                        </ul>
                    </div>

                    {{-- Computing sub-tab-1 --}}
                    <div class="space-y-5 py-4 user-computing-subtab-panel hidden" id="user-computing-subtab-panel-1">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/workspace_img.webp') }}"
                                alt="Streamline global workforces with secure, self-service virtual desktops"
                                class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Workspace</h3>
                                <p>Workspace is a Desktop-as-a-Service solution for provisioning virtual desktops with the
                                    choice of OS configuration for workforces across the globe to operate seamlessly.
                                    Enterprise admins can manage users, applications, images, and policies. Enterprises no
                                    longer need to negotiate complicated hardware deployments.</p>
                            </div>
                        </div>


                        {{-- Key Features --}}
                        <section class="py-2">
                            <div class="container">
                                <div>
                                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                                </div>

                                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/cm.webp') }}"
                                                alt="Configure, patch, and enforce policies for all devices."
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Centralised Management
                                            </h4>
                                        </div>
                                        <p class="text-center">Configure, apply software patches and enforce policies
                                            centrally</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/e2ev.webp') }}"
                                                alt="Identify & isolate threats as they happen" class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                End to End
                                                Visibility</h4>
                                        </div>
                                        <p class="text-center">Find out the root cause of incidents and isolate threats in
                                            real-time</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/ce.webp') }}"
                                                alt="Access your workspace seamlessly with PC’s, tablets, smartphones, and thin clients"
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Consistent Experience
                                            </h4>
                                        </div>
                                        <p class="text-center">Run environment of your choice on PCs, tablets, smartphones
                                            and thin clients, alike.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- Key Features Ends --}}

                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases</h3>
                            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 py-5 gap-3">
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Enable Bring Your Own Device (BYOD)</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Vendor & partner access</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Task or shift workforce</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Thin-client computing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Computing sub-tab-1 Ends --}}

                    {{-- Computing sub-tab-2 --}}
                    <div class="space-y-5 py-4 user-computing-subtab-panel hidden" id="user-computing-subtab-panel-2">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">App Streaming</h3>
                                <p>App streaming is a non-persistent virtualization solution that enables enterprises to
                                    centrally manage desktop applications and deliver them to users across the globe,
                                    irrespective of the device they are using. </p>
                            </div>
                            <img src="{{ asset('web/images/private-cloud/appstreaming_img.webp') }}"
                                alt="Deliver centrally managed apps to any device anywhere" class="w-96 mx-auto my-0">
                        </div>


                        {{-- Key Features --}}
                        <section class="py-2">
                            <div class="container">
                                <div>
                                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                                </div>

                                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/simple.webp') }}"
                                                alt="Centrally configure, patch, and enforce policies." class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Ease Of Operation</h4>
                                        </div>
                                        <p class="text-center">Configure, apply software patches and enforce policies
                                            centrally</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/ux.webp') }}"
                                                alt="Seamless workflow for peak productivity" class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Enhanced User Experience
                                            </h4>
                                        </div>
                                        <p class="text-center">Apps are highly responsive to provide a frictionless
                                            workspace</p>

                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/secure.webp') }}"
                                                alt="Encrypted data travels across any network" class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Secure Apps and Data
                                            </h4>
                                        </div>
                                        <p class="text-center">Encryption while streaming ensures data travels secured over
                                            the wire across networks</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- Key Features Ends --}}

                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center">Use Cases</h3>
                            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 py-5 gap-3">
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Deliver Software as a Service (SaaS)</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Run 3D design and Research software without investing on a expensive workstation</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Trials, demos, and training of your applications with zero installations.</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Deliver Software as a Service (SaaS)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Computing sub-tab-2 Ends --}}


                    {{-- Computing sub-tab-3 --}}
                    <div class="space-y-5 py-4 user-computing-subtab-panel hidden" id="user-computing-subtab-panel-3">
                        <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                            <img src="{{ asset('web/images/private-cloud/remoteaccess_img.webp') }}"
                                alt="Seamless mobility, easy switching, and unified admin control from anywhere."
                                class="w-96 mx-auto my-0">
                            <div class="flex flex-col justify-center">
                                <h3 class="font-bold text-xl py-2">Remote Access</h3>
                                <p>Zero trust-based gateway to access your workspaces & applications, irrespective of your
                                    location. It enhances enterprise mobility by allowing end users to log in securely and
                                    switch devices if needed. Admins can monitor the environment seamlessly and identify
                                    malicious activity from in-house or external users.</p>
                            </div>
                        </div>

                        {{-- Key Features --}}
                        <section class="py-2">
                            <div class="container">
                                <div>
                                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                                </div>

                                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/zt.webp') }}"
                                                alt="Access to apps and network anywhere anytime" class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Zero Trust Access</h4>
                                        </div>
                                        <p class="text-center">Secure access to desktops, apps and network anywhere,
                                            anytime.</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/sso.webp') }}"
                                                alt="Ensure robust endpoint control for virtual desktops and apps."
                                                class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Single Sign On</h4>
                                        </div>
                                        <p class="text-center">For virtual desktops and apps to ensure strong end point
                                            control</p>
                                    </div>
                                    <div
                                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                        <div class="flex py-3">
                                            <img src="{{ asset('web/images/private-cloud/sa.webp') }}"
                                                alt="Enable authentication for identity management" class="w-12 h-12">
                                            <h4
                                                class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                                Strong Authentication
                                            </h4>
                                        </div>
                                        <p class="text-center">Enabling Multi Factor Authentication for Identity management
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- Key Features Ends --}}

                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center">Use Cases </h3>
                            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 py-5 gap-3">
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Remote & mobile workforce</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Regulatory Compliance</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Secure Access to Workspace</p>
                                </div>
                                <div
                                    class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                                    <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                                    <p>Updates and fixes with zero downtime</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Computing sub-tab-3 Ends --}}
                </div>
            </div>
            {{-- Computing Ends --}}
        </div>
    </section>
    {{-- Tabs Ends --}}


    {{-- popup starts --}}
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
        const handleToggleNetworkTab = (id) => {
            $(`.network-tab`).removeClass('active');
            $(`#network-tab-${id}`).addClass('active');
            $(`.network-subtab-panel`).addClass('hidden');
            $(`#network-subtab-panel-${id}`).removeClass('hidden');
        }
        handleToggleNetworkTab(1);

        const handleToggleStorageTab = (id) => {
            $(`.storage-tab`).removeClass('active');
            $(`#storage-tab-${id}`).addClass('active');
            $(`.storage-subtab-panel`).addClass('hidden');
            $(`#storage-subtab-panel-${id}`).removeClass('hidden');
        }
        handleToggleStorageTab(1);

        const handleToggleCyberSecurityTab = (id) => {
            $(`.cyber-security-tab`).removeClass('active');
            $(`#cyber-security-tab-${id}`).addClass('active');
            $(`.cyber-security-subtab-panel`).addClass('hidden');
            $(`#cyber-security-subtab-panel-${id}`).removeClass('hidden');
        }
        handleToggleCyberSecurityTab(1);

        const handleToggleBusinessContinuityTab = (id) => {
            $(`.business-continuity-tab`).removeClass('active');
            $(`#business-continuity-tab-${id}`).addClass('active');
            $(`.business-continuity-subtab-panel`).addClass('hidden');
            $(`#business-continuity-subtab-panel-${id}`).removeClass('hidden');
        }
        handleToggleBusinessContinuityTab(1);

        const handleToggleEndUserComputingTab = (id) => {
            $(`.user-computing-tab`).removeClass('active');
            $(`#user-computing-tab-${id}`).addClass('active');
            $(`.user-computing-subtab-panel`).addClass('hidden');
            $(`#user-computing-subtab-panel-${id}`).removeClass('hidden');
        }
        handleToggleEndUserComputingTab(1);

        $(document).ready(function() {
            $('.tabs-content:first').show();
            $('.tabs-btns li:first').addClass('active');
            $('.tabs-btns li').click(function(event) {
                index = $(this).index();
                $('.tabs-btns li').removeClass('active');
                $(this).addClass('active')
                $('.tabs-content').hide();
                $('.tabs-content').eq(index).show();
            });
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
@endsection
