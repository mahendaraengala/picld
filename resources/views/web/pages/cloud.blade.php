@extends('web.layouts.app')

@section('web-head')
    <title>Cloud | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/cloud-and-sap/new-cloud-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Cloud</h1>
                        <p class="text-gray-300 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]">In
                            today's digitally driven economy, cloud
                            services have assumed significance for the right reasons. Enterprises, in their pursuit of
                            streamlined operations and accelerated time-to-market, recognize the indispensable value that
                            cloud solutions bring. The imperatives of access flexibility, capacity scalability, performance
                            agility, unwavering business continuity, and prudent cost-effectiveness find their optimal
                            resolution through the strategic adoption of cloud-native approaches.</p>
                        <div class="pt-4 space-x-3">
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                            <a class="btn-primary-md cursor-pointer show_form">Brochure</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- Cloud Intro --}}
    <section class="py-5 bg-[#f8f7f7 !important]">
        <div class="container">
            <div>
                <p class="py-5 text-justify">Introducing
                    "Pi Cloud," the embodiment of these ideals. As the nation's premier Enterprise Cloud
                    Platform, Pi Cloud transcends the singular, evolving into a <a
                        href="https://pidatacenters.com/knowledge-hub/how-do-multi-cloud-solutions-transform-business-agility-and-innovation"
                        class="hover:underline underline-offset-2 text-blue-600" target="_blank">Multi Cloud</a> Ecosystem
                    that ushers in a new era of seamless integration. This ecosystem successfully converges diverse
                    platforms, both <a
                        href="https://pidatacenters.com/knowledge-hub/an-overview-of-private-and-public-clouds-what-they-are-and-how-they-differ"
                        class="hover:underline underline-offset-2 text-blue-600" target="_blank">private and public</a>,
                    with a platform-agnostic approach. Pi Cloud is not merely content
                    with integration; it goes further, assuming the role of a fully managed sanctuary for your cloud
                    environments. Pi Cloud's holistic view is its hallmark, effortlessly attainable through a single pane of
                    glass. This vantage point offers more than just a snapshot; it's a panoramic window into your
                    digital infrastructure. Swift time-to-market is the anthem here, offering enterprises the competitive
                    edge they seek. As you march ahead in your operational journey, Pi Cloud is your steadfast companion, a
                    testament to what happens when vision meets innovation.</p>

            </div>

            <div
                class="grid
                        lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10 items-center lg:pt-7 lg:pb-5 md:pt-8 md:pb-5
                        sm:py-4">
                <div class="text-center text-[#0b5a84;]">
                    <h2 class="font-bold lg:text-5xl md:text-4xl sm:text-4xl pb-3">
                        <span class="counter">14800</span><span>+</span>
                    </h2>
                    <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-xl">Mission Critical Workloads </h3>
                    <p>Hosted on Pi Cloud, across three Availability Zones in India</p>
                </div>
                <div class="text-center text-[#108174;]">
                    <h2 class="font-bold lg:text-5xl md:text-4xl sm:text-4xl pb-3">
                        <span class="counter">20</span><span>+</span>
                    </h2>
                    <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-xl">Banks & NBFCs</h3>
                    <p>Develop, deploy workloads on Pi Cloud in a complaint environment</p>
                </div>
                <div class="text-center text-[#43721a;]">
                    <h2 class="font-bold lg:text-5xl md:text-4xl sm:text-4xl pb-3">
                        <span class="counter">4</span>
                    </h2>
                    <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-xl">Payment Gateways</h3>
                    <p>Are processing thousands of transactions every second on Pi Cloud</p>
                </div>

                <div class="text-center text-[#2f1dac;]">
                    <h2 class="font-bold lg:text-5xl md:text-4xl sm:text-4xl pb-3">
                        <span class="counter">4</span>
                    </h2>
                    <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-xl">Smart Cities</h3>
                    <p>With integrated IT, IoT and data on Pi Cloud, delivering operational and service
                        efficiency to citizens</p>
                </div>
                <div class="text-center text-[#0b5a84;]">
                    <h2 class="font-bold lg:text-5xl md:text-4xl sm:text-4xl pb-3">
                        <span class="counter">5</span>
                    </h2>
                    <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-xl">A-listed Indian Universities</h3>
                    <p>Leveraging Pi Cloud to deliver enhanced digital learning experience</p>
                </div>
                <div class="text-center text-[#108174;]">
                    <h2 class="font-bold lg:text-5xl md:text-4xl sm:text-4xl pb-3">
                        <span class="counter">30</span><span>%</span>
                    </h2>
                    <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-xl">TCO Optimal</h3>
                    <p>Compared to any major cloud service provider across the globe</p>
                </div>



            </div>
        </div>
    </section>

    {{-- Cloud Intro Ends --}}

    {{-- Interested In --}}
    <section class="py-2 bg-[#f8f7f7 !important]">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Interested In</h2>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 py-9">
                <div
                    class="bg-white text-center mx-2 sm:my-2 p-5 shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-full scale-95 hover:scale-100 hover:bg-web-ascent-1 transition duration-700 group">
                    <a href="{{ route('view.public-cloud') }}" target="_blank">
                        <h3 class="font-bold text-2xl group-hover:hidden">Public Cloud</h3>
                        <h3 class="font-bold text-xl hidden group-hover:block group-hover:text-white">Click Here</h3>
                    </a>
                </div>
                <div
                    class="bg-white text-center mx-2 sm:my-2 p-5 shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-full scale-95 hover:scale-100 hover:bg-web-ascent-1 transition duration-700 group">
                    <a href="{{ route('view.private-cloud') }}" target="_blank">
                        <h3 class="font-bold text-2xl group-hover:hidden">Private Cloud</h3>
                        <h3 class="font-bold text-xl hidden group-hover:block group-hover:text-white">Click Here</h3>
                    </a>
                </div>
                <div
                    class="bg-white text-center mx-2 sm:my-2 p-5 shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-full scale-95 hover:scale-100 hover:bg-web-ascent-1 transition duration-700 group">
                    <a href="{{ route('view.sap') }}" target="_blank">
                        <h3 class="font-bold text-2xl group-hover:hidden">SAP on Cloud</h3>
                        <h3 class="font-bold text-xl hidden group-hover:block group-hover:text-white">Click Here</h3>
                    </a>
                </div>
                <div
                    class="bg-white text-center mx-2 sm:my-2 p-5 shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-full scale-95 hover:scale-100 hover:bg-web-ascent-1 transition duration-700 group">
                    <a href="{{ route('view.professional-services') }}" target="_blank">
                        <h3 class="font-bold text-2xl group-hover:hidden">Professional Services</h3>
                        <h3 class="font-bold text-xl hidden group-hover:block group-hover:text-white">Click Here</h3>
                    </a>
                </div>
            </div>

        </div>

    </section>
    {{-- Interested In Ends --}}


    {{-- Cloud Service Offerings --}}
    <section class="lg:py-4 md:py-4 sm:py-1 bg-[#f8f7f7 !important]">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Service Offerings</h2>
            </div>

            <div class="swiper mySwiper offerings">
                <div class="swiper-wrapper lg:pt-10 lg:pb-4 md:pt-10 md:pb-4 sm:py-7">
                    <div class="swiper-slide">
                        <li class="flex justify-center items-center flex-col p-5">
                            <div class="box-back bg-[#223f97] rounded-full w-fit p-2.5 icon-shadow">
                                <img src="{{ asset('web/images/cloud-and-sap/CIE.webp') }}"
                                    alt="Hosts apps, websites, and databases seamlessly in Pi Cloud."
                                    class="w-20 h-20 p-2.5">
                            </div>
                            <h3 class="font-bold text-xl pt-5 pb-2 text-center">Infrastructure Excellence</h3>
                            <p class="text-center leading-tight">Immerse your applications, websites, and databases in our
                                dependable and
                                scalable cloud
                                infrastructure. Revel in high availability, automatic backups, and effortless resource
                                management. </p>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="flex justify-center items-center flex-col p-5">
                            <div class="box-back bg-[#223f97] rounded-full w-fit p-2.5 icon-shadow"><img
                                    src="{{ asset('web/images/cloud-and-sap/CSB.webp') }}"
                                    alt="Pi Cloud’s flexible storage offers easy access, file sharing, data redundancy, and compliance"
                                    class="w-20 h-20 p-2.5">
                            </div>
                            <h3 class="font-bold text-xl pt-5 pb-2 text-center">Storage Brilliance </h3>
                            <p class="text-center leading-tight">Entrust your data to the cloud's secure integration. Our
                                flexible storage
                                solutions grant
                                seamless access and file sharing while upholding data redundancy and compliance. </p>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="flex justify-center items-center flex-col p-5">
                            <div class="box-back bg-[#223f97] rounded-full w-fit p-2.5 icon-shadow"><img
                                    src="{{ asset('web/images/cloud-and-sap/CBR.webp') }}"
                                    alt="Pi Cloud safeguards your data from data loss and disaster recovery solutions"
                                    class="w-20 h-20 p-2.5">
                            </div>
                            <h3 class="font-bold text-xl pt-5 pb-2 text-center">Backup and Resilience</h3>
                            <p class="text-center leading-tight">Fortify your business against data loss and downtime
                                through
                                our cloud
                                backup and disaster
                                recovery prowess. Bounce back swiftly from unexpected incidents, minimizing operational
                                disruptions. </p>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="flex justify-center items-center flex-col p-5">
                            <div class="box-back bg-[#223f97] rounded-full w-fit p-2.5 icon-shadow"><img
                                    src="{{ asset('web/images/cloud-and-sap/SCM.webp') }}"
                                    alt="Ensures smooth migration of your current system to Pi cloud"
                                    class="w-20 h-20 p-2.5">
                            </div>
                            <h3 class="font-bold text-xl pt-5 pb-2 text-center">Seamless Migration</h3>
                            <p class="text-center leading-tight">Delegate the seamless migration of your current systems
                                and
                                applications
                                to our cloud
                                experts.
                                Transition gracefully, minimizing business hiccups.</p>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="flex justify-center items-center flex-col p-5">
                            <div class="box-back bg-[#223f97] rounded-full w-fit p-2.5 icon-shadow"><img
                                    src="{{ asset('web/images/cloud-and-sap/CSM.webp') }}"
                                    alt="Protect cloud infrastructure" class="w-20 h-20 p-2.5">
                            </div>
                            <h3 class="font-bold text-xl pt-5 pb-2 text-center">Security Mastery</h3>
                            <p class="text-center leading-tight">Shield your cloud infrastructure and data with our
                                holistic
                                security
                                services. From identity
                                and
                                access management to threat vigilance and compliance assurance, we're your comprehensive
                                guardians. </p>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="flex justify-center items-center flex-col p-5">
                            <div class="box-back bg-[#223f97] rounded-full w-fit p-2.5 icon-shadow"><img
                                    src="{{ asset('web/images/cloud-and-sap/PCCS.webp') }}"
                                    alt="Pi’s cloud provides customized cloud expedition guidance and support."
                                    class="w-20 h-20 p-2.5">
                            </div>
                            <h3 class="font-bold text-xl pt-5 pb-2 text-center">Personalized Consulting and Support</h3>
                            <p class="text-center leading-tight">Our cloud connoisseurs stand by, ready to offer tailored
                                guidance and
                                consistent support for
                                your
                                cloud expedition. Expert assistance is just a step away. </p>
                        </li>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    {{-- Cloud Service Offerings Ends --}}

    {{-- reach us starts --}}
    <section class="lg:py-3 md:py-3 sm:pt-8 sm:pb-3 bg-[#f8f7f7 !important]">
        <div class="container">
            <div class="pt-0 space-x-3 text-center">
                <a href="{{ route('web.view.contact') }}"
                    class="bg-web-ascent-1 text-xl text-white py-3 px-10 rounded-lg" target="_blank">Reach
                    Us</a>
            </div>
        </div>
    </section>
    {{-- reach us ends --}}

    {{-- Pi Cloud Services --}}
    <section class="py-5 bg-[#f8f7f7 !important]">
        <div class="container">
            <div class="group relative">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Embark On Tomorrow's
                    Computing
                    With Pi Cloud Services </h2>
                {{-- tooltip starts --}}
                <a href="https://pidatacenters.com/evolution-of-computing.php"
                    class="font-bold text-center bg-black text-white absolute top-0 lg:left-[44%] md:left-[37%] sm:left-[28%] lg:mt-14 md:mt-20 sm:mt-32 p-3 rounded-md text-sm z-[1] before:absolute before:content-[''] before:w-5 before:h-5 before:bg-black before:-top-2 before:left-[45%] before:rotate-45 before:-z-[1] hover:underline underline-offset-2 group-hover:block hidden"
                    target="_blank">
                    Also Read <br> Evolution Of Computing
                </a>
                {{-- tooltip ends --}}
                <p class="text-center">Ditch conventional IT constraints and embrace cloud agility and innovation. Let's
                    propel your
                    enterprise
                    to unprecedented altitudes through the cloud's prowess!</p>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-col-1 lg:gap-10 md:gap-7 sm:gap-0 items-center py-5">
                <div
                    class="flex flex-col items-center p-5 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] rounded-3xl h-full scale-95 hover:scale-100 duration-700 cursor-pointer bg-white">
                    <img src="{{ asset('web/images/cloud-and-sap/new-localization-01.webp') }}"
                        alt="Digital data protection ensures regulatory compliance." class="w-40">
                    <h3 class="font-bold py-2 text-xl lg:text-center md:text-center sm:text-center">Data Localisation</h3>
                    <p class="text-center">Absolute regulatory compliance to the digital data protection laws of
                        land, of
                        India!!</p>
                </div>
                <div
                    class="flex flex-col items-center p-5 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] rounded-3xl h-full  scale-95 hover:scale-100 duration-700 cursor-pointer bg-white">
                    <img src="{{ asset('web/images/cloud-and-sap/new-flexibility-01.webp') }}"
                        alt="Public cloud flexibility and private cloud security optimize cost, agility, and control in Pi cloud’s hybrid cloud."
                        class="w-40">
                    <h3 class="font-bold py-2 text-xl lg:text-center md:text-center sm:text-center">Flexibility @ Core</h3>
                    <p class="text-center">Get the built-in flexibility of a public cloud, while being on board a
                        secured
                        private cloud</p>
                </div>
                <div
                    class="flex flex-col items-center p-5 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] rounded-3xl h-full  scale-95 hover:scale-100 duration-700 cursor-pointer bg-white">
                    <img src="{{ asset('web/images/cloud-and-sap/new-hypervisor-of-choice-01.webp') }}"
                        alt="Pi lets businesses choose their hypervisor to run their programs on." class="w-40">
                    <h3 class="font-bold py-2 text-xl lg:text-center md:text-center sm:text-center">Hypervisor Of Choice
                    </h3>
                    <p class="text-center">Enterprises get to pick the hypervisor of choice for their workloads</p>
                </div>
                <div
                    class="flex flex-col items-center p-5 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] rounded-3xl h-full  scale-95 hover:scale-100 duration-700 cursor-pointer bg-white">
                    <img src="{{ asset('web/images/cloud-and-sap/new-scalability-01.webp') }}"
                        alt="Real-time, multi-dimensional resource scaling tailored to enterprise business needs."
                        class="w-40">
                    <h3 class="font-bold py-2 text-xl lg:text-center md:text-center sm:text-center">Scale @ Will</h3>
                    <p class="text-center">Multi-dimensional and real-time scaling of resources aligned to
                        Enterprise
                        business needs</p>
                </div>
                <div
                    class="flex flex-col items-center p-5 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] rounded-3xl h-full  scale-95 hover:scale-100 duration-700 cursor-pointer bg-white">
                    <img src="{{ asset('web/images/cloud-and-sap/new-multi-tiered-security-01.webp') }}"
                        alt="Zonal security layers safeguard data from threats." class="w-40">
                    <h3 class="font-bold py-2 text-xl lg:text-center md:text-center sm:text-center">Multi-Tiered Security
                    </h3>
                    <p class="text-center">Zoned security layers protecting data from vulnerabilities and threats
                    </p>
                </div>
                <div
                    class="flex flex-col items-center p-5 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] rounded-3xl h-full  scale-95 hover:scale-100 duration-700 cursor-pointer bg-white">
                    <img src="{{ asset('web/images/cloud-and-sap/new-uptime-01.webp') }}"
                        alt="Offers top tier reliability with self-owned, global data centers for maximum uptime"
                        class="w-40">
                    <h3 class="font-bold py-2 text-xl lg:text-center md:text-center sm:text-center">99.995% Uptime
                        Availability</h3>
                    <p class="text-center">Delivered out of self-owned, multi locale Uptime Institute TIER IV data
                        centers
                    </p>
                </div>
            </div>

        </div>

    </section>
    {{-- Pi Cloud Services Ends --}}

    {{-- Journey With Pi Cloud --}}
    <section class="lg:py-4 md:py-4 sm:py-2 bg-[#f8f7f7 !important]">
        <div class="container hover:shadow-[0px_0px_7px_rgba(0,0,0,0.3)] p-5 group">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center group-hover:text-web-ascent-1">
                    Journey With Pi Cloud</h2>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 py-6 lg:pl-10 md:pl-10 sm:pl-0">
                <div
                    class="py-5 lg:inline-block md:flex md:justify-center md:items-center md:flex-col md:gap-4 sm:flex sm:justify-center sm:items-center sm:flex-col sm:gap-4">
                    <div
                        class="bg-[#223f97] group-hover:bg-gray-600 rounded-lg lg:inline-block md:inline-block sm:block lg:w-fit md:w-fit sm:w-fit align-top">
                        <img src="{{ asset('web/images/cloud-and-sap/1.webp') }}" class="w-20 p-3"
                            alt="Start enterprise customer journey with Pi cloud adoption framework">
                    </div>
                    <div
                        class="lg:inline-block md:inline-block sm:block lg:w-[80%] md:w-[80%] sm:w-fit px-5 lg:text-left md:text-center sm:text-center">
                        <h3 class="font-bold text-xl text-[#535353;] group-hover:text-black">One Size Doesn't Fit All</h3>
                        <p>Start Enterprise custom journey with a unique cloud adoption framework </p>
                    </div>

                </div>

                <div
                    class="py-5 lg:inline-block md:flex md:justify-center md:items-center md:flex-col md:gap-4 sm:flex sm:justify-center sm:items-center sm:flex-col sm:gap-4">
                    <div
                        class="bg-[#223f97] group-hover:bg-gray-600 rounded-lg lg:inline-block md:inline-block sm:block lg:w-fit md:w-fit sm:w-fit align-top">
                        <img src="{{ asset('web/images/cloud-and-sap/2.webp') }}" class="w-20 p-3"
                            alt="Offers smooth operation to cloud environments by providing various tools and methods to migrate servers, apps.">
                    </div>
                    <div
                        class="lg:inline-block md:inline-block sm:block lg:w-[80%] md:w-[80%] sm:w-fit px-5  lg:text-left md:text-center sm:text-center">
                        <h3 class="font-bold text-xl text-[#535353;] group-hover:text-black">Any To Any Migration</h3>
                        <p>Migration of servers, apps, databases & other workloads with diverse tools, techniques &
                            technologies </p>
                    </div>
                </div>


                <div
                    class="py-5 lg:inline-block md:flex md:justify-center md:items-center md:flex-col md:gap-4 sm:flex sm:justify-center sm:items-center sm:flex-col sm:gap-4">
                    <div
                        class="bg-[#223f97] group-hover:bg-gray-600 rounded-lg lg:inline-block md:inline-block sm:block lg:w-fit md:w-fit sm:w-fit align-top">
                        <img src="{{ asset('web/images/cloud-and-sap/3.webp') }}" class="w-20 p-3"
                            alt="Manage business workloads through self service">
                    </div>
                    <div
                        class="lg:inline-block md:inline-block sm:block lg:w-[80%] md:w-[80%] sm:w-fit px-5  lg:text-left md:text-center sm:text-center">
                        <h3 class="font-bold text-xl text-[#535353;] group-hover:text-black">Self Service</h3>
                        <p>Provision, scale and manage Enterprise workloads through a self service </p>
                    </div>

                </div>

                <div
                    class="py-5 lg:inline-block md:flex md:justify-center md:items-center md:flex-col md:gap-4 sm:flex sm:justify-center sm:items-center sm:flex-col sm:gap-4">
                    <div
                        class="bg-[#223f97] group-hover:bg-gray-600 rounded-lg lg:inline-block md:inline-block sm:block lg:w-fit md:w-fit sm:w-fit align-top">
                        <img src="{{ asset('web/images/cloud-and-sap/4.webp') }}" class="w-20 p-3"
                            alt="Implementation of emerging technologies like AI, ML">
                    </div>
                    <div
                        class="lg:inline-block md:inline-block sm:block lg:w-[80%] md:w-[80%] sm:w-fit px-5  lg:text-left md:text-center sm:text-center">
                        <h3 class="font-bold text-xl text-[#535353;] group-hover:text-black">Future Ready</h3>
                        <p>Take advantage of emerging technologies like AI & ML, Cloud computing, IoT and Data
                            Analytics </p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    {{-- Journey With Pi Cloud Ends --}}

    {{-- Why Embrace --}}
    <section class="lg:py-4 md:py-4 sm:py-2 bg-[#f8f7f7 !important]">
        <div class="container">
            <div class="lg:pb-8 md:pb-10 sm:pb-5">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center"> Why Embrace Pi Cloud Services?</h2>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1">
                <div class="m-5 flex items-center flex-col rounded-3xl p-4 embrace cursor-pointer">
                    <div class="bg-gradient-to-t from-black to-gray-400 w-fit mb-5 p-3 rounded-full">
                        <img src="{{ asset('web/images/cloud-and-sap/scalability-(2).webp') }}"
                            alt="Pi cloud solutions eliminate the need for you to buy and maintain physical servers"
                            class="w-20 p-3">
                    </div>
                    <h3 class="font-bold text-xl py-2 text-center">Scalability</h3>
                    <p class="text-center">Bid farewell to hardware restraints and costly upgrades. Our cloud
                        solutions
                        provide scalable
                        infrastructure that grows hand in hand with your business, be it through seasonal surges or
                        exponential expansion. </p>
                </div>

                <div class="m-5 flex items-center flex-col rounded-3xl p-4 embrace cursor-pointer">
                    <div class="bg-gradient-to-t from-black to-gray-400 w-fit  mb-5 p-3 rounded-full">
                        <img src="{{ asset('web/images/cloud-and-sap/BF.webp') }}"
                            alt="Grants seamless access to your data, apps, and resources from any device."
                            class="w-20 p-2">
                    </div>
                    <h3 class="font-bold text-xl py-2 text-center">Boundless Flexibility </h3>
                    <p class="text-center">Unleash the liberty to work anytime, anywhere. Our cloud services grant
                        seamless
                        access to your data,
                        apps, and resources from any device with an internet tether. Be productive and
                        collaborative,
                        regardless of your team's location. </p>
                </div>

                <div class="m-5 flex items-center flex-col rounded-3xl p-4 embrace cursor-pointer">
                    <div class="bg-gradient-to-t from-black to-gray-400 w-fit  mb-5 p-3 rounded-full">
                        <img src="{{ asset('web/images/cloud-and-sap/CEI.webp') }}"
                            alt="Pay for what you use model maximizes investment’s growth" class="w-20 p-2">
                    </div>
                    <h3 class="font-bold text-xl py-2 text-center">Cost-Effective Ingenuity</h3>
                    <p class="text-center">Sharpen your IT budget with our budget-friendly cloud solutions. Pay for
                        what
                        you use and dodge
                        upfront hardware expenses. The pay-as-you-go model maximizes your investment's worth. </p>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
                <div class="m-5 flex items-center flex-col rounded-3xl p-4 embrace cursor-pointer">
                    <div class="bg-gradient-to-t from-black to-gray-400 w-fit  mb-5 p-3 rounded-full">
                        <img src="{{ asset('web/images/cloud-and-sap/RFLS.webp') }}"
                            alt="Protects your data with strong security, backup, disaster recovery for business."
                            class="w-20 p-2">
                    </div>
                    <h3 class="font-bold text-xl py-2 text-center">Reliability and Fortress-Level Security</h3>
                    <p class="text-center">Trust in the safety of your data within our cloud realm. Our potent security
                        protocols, routine backups, and disaster recovery plan shield your critical data from potential
                        threats, ensuring unceasing business flow.</p>
                </div>

                <div class="m-5 flex items-center flex-col rounded-3xl p-4 embrace cursor-pointer">
                    <div class="bg-gradient-to-t from-black to-gray-400 w-fit  mb-5 p-3 rounded-full">
                        <img src="{{ asset('web/images/cloud-and-sap/TTP.webp') }}"
                            alt="High-speed infrastructure delivers low latency and top-tier performance for user experience."
                            class="w-20 p-2">
                    </div>
                    <h3 class="font-bold text-xl py-2 text-center">Top-Tier Performance</h3>
                    <p class="text-center"> Immerse yourself in top-notch performance and diminished latency
                        through our
                        high-speed cloud
                        infrastructure. Our cutting-edge data centers and advanced technology ensure a prime user
                        experience
                        for your services and applications. </p>
                </div>

            </div>

        </div>
    </section>
    {{-- Why Embrace Ends --}}

    {{-- Certifications --}}
    <section class="pt-8 pb-3">
        <div class="container">
            <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center"> Our Certifications</h2>
            <div
                class="grid lg:grid-cols-6 md:grid-cols-3 sm:grid-cols-1 lg:gap-7 md:gap-5 sm:gap-3 lg:py-10 md:py-10 sm:py-5">
                <div
                    class="p-3 rounded-3xl scale-95 hover:scale-100 duration-700 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] cursor-pointer">
                    <img src="{{ asset('web/images/cloud-and-sap/c-1.webp') }}"
                        alt="A global standard for quality, environmental, IT service management, business continuity, cloud security, and personal data protection."
                        class="p-0 w-44 my-0 mx-auto">
                </div>
                <div
                    class="p-3 rounded-3xl scale-95 hover:scale-100 duration-700 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] cursor-pointer">
                    <img src="{{ asset('web/images/cloud-and-sap/c-2.webp') }}"
                        alt="Payment Card Industry Data Security Standard handles credit cards from major brands"
                        class="p-0 w-44 my-0 mx-auto">
                </div>
                <div
                    class="p-3 rounded-3xl scale-95 hover:scale-100 duration-700 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] cursor-pointer">
                    <img src="{{ asset('web/images/cloud-and-sap/c-3.webp') }}"
                        alt="Health Insurance Portability & Accountability Act" class="p-0 w-44 my-0 mx-auto">
                </div>
                <div
                    class="p-3 rounded-3xl scale-95 hover:scale-100 duration-700 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] cursor-pointer">
                    <img src="{{ asset('web/images/cloud-and-sap/c-4.webp') }}"
                        alt="A fault-tolerant infrastructure ensuring maximum IT system reliability and uptime"
                        class="p-0 w-44 my-0 mx-auto">
                </div>
                <div
                    class="p-3 rounded-3xl scale-95 hover:scale-100 duration-700 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] cursor-pointer">
                    <img src="{{ asset('web/images/cloud-and-sap/c-5.webp') }}"
                        alt="Standardization Testing and Quality Certification" class="p-0 w-44 my-0 mx-auto">
                </div>
                <div
                    class="p-3 rounded-3xl scale-95 hover:scale-100 duration-700 shadow-[0px_0px_20px_rgba(0,0,0,0.2)] cursor-pointer">
                    <img src="{{ asset('web/images/cloud-and-sap/c-6.webp') }}"
                        alt="Systems and Organization Controls defined by the American Institute of Certified Public Accountants"
                        class="p-0 w-44 my-0 mx-auto">
                </div>
            </div>

        </div>

    </section>

    {{-- Certifications Ends --}}

    {{-- Partners --}}
    <section class="pt-2 pb-8">
        <div class="conatiner">
            <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center"> Technology Partners </h2>

            <div class="swiper technology-partner-carousel py-10">
                <div class="swiper-wrapper z-0">

                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-1.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-2.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-3.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-4.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-5.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-6.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-7.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/firewall-balancer/palo-alto-logo.webp') }}"
                                alt="Pi’s technology partners" class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-9.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-10.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-11.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-12.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-13.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-14.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-15.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-16.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-17.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-18.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-19.webp') }}" alt="Pi’s technology partners"
                                class="w-20">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-20.webp') }}" alt="Pi’s technology partners"
                                class="w-20">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-21.webp') }}" alt="Pi’s technology partners"
                                class="w-20">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="swiper-button-next w-9 h-9 next-btn"></div>
                    <div class="swiper-button-prev w-9 h-9 prev-btn"></div>
                </div>
            </div>
        </div>

    </section>
    {{-- Partners Ends --}}

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
                if ($(window).scrol > 100) {
                    $('#desktop-header').addClass('active');
                } else {
                    $('#desktop-header').removeClass('active');
                }
            });
        });
    </script>

    <script>
        let technologyCarousel = new Swiper(".technology-partner-carousel", {
            loop: true,
            speed: 1000,
            // autoplay: true,
            // autoplaySpeed: 2000,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 4
                },
                1024: {
                    slidesPerView: 5
                },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            speed: 300,
            // autoplay: true,
            // autoplaySpeed: 3000,
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
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
