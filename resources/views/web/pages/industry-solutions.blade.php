@extends('web.layouts.app')

@section('web-head')
    <title>Industry Solutions | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/industry-solutions/new-industry-solutions-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Industry Solutions</h1>
                        <p class="text-gray-300 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]">Pi
                            Cloud's industry-specific solutions can
                            revolutionize your operations. Our tailored offerings cater to diverse sectors, including
                            healthcare, finance, manufacturing, and more. With deep expertise in each domain, we understand
                            the intricacies of your industry and provide customized solutions to address your challenges
                            effectively. No matter your industry, Pi Cloud is committed to delivering tailored solutions
                            that drive success.</p>
                        <div class="pt-4 space-x-3">
                            {{-- <a href="#" class="btn-primary-md">Know more</a> --}}
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                            {{-- <a href="#" class="btn-primary-md">Brochures</a> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- Industry Solutions --}}
    <section class="lg:py-20 sm:py-10">
        <div class="container" data-aos="fade-up" data-aos-duration="1500">

            <div class="grid lg:grid-cols-6 md:grid-cols-1 sm:grid-cols-1 gap-5">

                {{-- Title Content Section (Start) --}}
                <div class="lg:col-span-2 md:col-span-1 sm:col-span-1">
                    <div class="flex flex-col space-y-5 relative text-left">
                        <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl">Explore Industry Solutions</h2>
                        <p class="bg-web-ascent-1  border-2 border-web-ascent-1 w-[100px]"></p>
                        <p>Solve your toughest enterprise challenges, irrespective of your industry, organization type, and
                            location. Our diverse team of experts is equipped with the knowledge and experience necessary to
                            develop custom solutions tailored specifically to your needs. With a track record of success
                            across a wide range of industries, we are confident in our ability to help you overcome any
                            obstacle. Our proven methodologies and innovative approach ensure that we deliver results that
                            exceed expectations. Trust us to provide you with the industry solutions you need to thrive in
                            today's competitive market.</p>
                    </div>
                </div>
                {{-- Title Content Section (End) --}}

                {{-- Boxes Section (Start) --}}
                <div class="lg:col-span-4 md:col-span-1 sm:col-span-1">
                    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-2">

                        {{-- BSIF Box (Start) --}}
                        <div onclick="handleToggleContentBox('bsif', event)" class="industry-solution-box" id="bsif-box">
                            <div class="shadow-[0px_0px_5px_rgba(0,0,0,0.3)] border p-6 group">
                                <div class="flex justify-between">
                                    <img src="{{ asset('web/images/industry-solutions/BFSI.webp') }}"
                                        alt="Pi Cloud offers BFSI solutions with PCI DSS compliance, Cyber SOC monitoring, penetration testing, & data loss prevention"
                                        class="w-16 h-auto">
                                    <i data-feather="chevron-down" class="h-7 w-7 dropdown-arrow"></i>
                                </div>
                                <h3 class="pt-8 pb-2 font-bold lg:text-2xl md:text-2xl sm:text-xl">BFSI
                                </h3>
                            </div>
                        </div>
                        {{-- BSIF Box (Start) --}}

                        {{-- Ecommerce Box (Start) --}}
                        <div onclick="handleToggleContentBox('ecommerce', event)" class="industry-solution-box"
                            id="ecommerce-box">
                            <div class="shadow-[0px_0px_5px_rgba(0,0,0,0.3)] border p-6 group">
                                <div class="flex justify-between">
                                    <img src="{{ asset('web/images/industry-solutions/E-Commerce.webp') }}"
                                        alt=" Offers scalable, secure e-commerce hosting for peak traffic, cost savings, & DDoS protection"
                                        class="w-16 h-auto">
                                    <i data-feather="chevron-down" class="h-7 w-7 dropdown-arrow"></i>
                                </div>
                                <h3 class="pt-8 pb-2 font-bold lg:text-2xl md:text-2xl sm:text-xl">
                                    E-Commerce
                                </h3>
                            </div>
                        </div>
                        {{-- Ecommerce Box (Start) --}}

                        {{-- ITES Box (Start) --}}
                        <div onclick="handleToggleContentBox('ites', event)" class="industry-solution-box" id="ites-box">
                            <div class="shadow-[0px_0px_5px_rgba(0,0,0,0.3)] border p-6 group">
                                <div class="flex justify-between">
                                    <img src="{{ asset('web/images/industry-solutions/IT_IES.webp') }}" class="w-16 h-auto">
                                    <i data-feather="chevron-down" class="h-7 w-7 dropdown-arrow"></i>
                                </div>
                                <h3 class="pt-8 pb-2 font-bold lg:text-2xl md:text-2xl sm:text-xl">IT /
                                    ITES
                                </h3>
                            </div>
                        </div>
                        {{-- ITES Box (Start) --}}

                        {{-- First Three Boxes Content (Start) --}}
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-1">

                            {{-- BSIF Box Content (Start) --}}
                            <div id="bsif-content" class="industry-solution-content-box">
                                <div class="bg-[#223f97] w-full p-10 text-white">
                                    <div class="group relative">
                                        <h4
                                            class="pt-8 pb-2 font-bold lg:text-5xl md:text-3xl sm:text-xl group-hover:text-white">
                                            BFSI
                                        </h4>
                                        {{-- tooltip starts --}}
                                        <a href="https://pidatacenters.com/knowledge-hub/from-limits-to-liberation-the-rise-of-remote-infrastructure-management-in-the-banking-world"
                                            class="font-bold text-center bg-white text-web-ascent-1 absolute top-0 lg:left-[20%] md:left-[15%] sm:left-[28%] lg:mt-5 md:mt-5 sm:mt-3 p-3 rounded-md text-sm z-[1] before:absolute before:content-[''] before:w-6 before:h-6 before:bg-white before:top-5 before:-left-3 before:rotate-45 before:-z-[1] hover:underline underline-offset-2 hidden group-hover:block"
                                            target="_blank">
                                            Also Read <br> From Limits to Liberation
                                        </a>
                                        {{-- tooltip ends --}}
                                    </div>
                                    <p class="py-5">Cloud solutions focused on compliance, innovation & cyber security</p>
                                    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-5 py-5">
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Comply
                                                With RBI Guidelines</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">RBI has mandated payment system data to
                                                be stored
                                                within the geographical boundaries
                                                of India only</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Advanced
                                                Threat Prevention</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Pi Cloud is PCI DSS certified to ensure
                                                robust
                                                defence against internal & external
                                                threats</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Cyber SOC
                                            </h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Monitor, analyze using SIEM tools and
                                                escalate
                                                security incidents</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Offensive
                                                Measures</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Periodically conduct vulnerability
                                                assessment and
                                                penetration testing exercises</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Data Loss
                                                Prevention Strategy</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Comprehensive DLP strategy to safeguard
                                                sensitive
                                                business and customer data</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- BSIF Box Content (End) --}}

                            {{-- Ecommerce Box Content (Start) --}}
                            <div id="ecommerce-content" class="industry-solution-content-box">
                                <div class="bg-[#223f97] w-full text-white p-10">
                                    <div class="group relative">
                                        <h4
                                            class="pt-8 pb-2 font-bold lg:text-5xl md:text-3xl sm:text-xl group-hover:text-white">
                                            E-Commerce
                                        </h4>
                                        {{-- tooltip starts --}}
                                        <a href="https://pidatacenters.com/knowledge-hub/the-convenience-of-online-shopping"
                                            class="font-bold text-center bg-white text-web-ascent-1 absolute top-0 lg:left-[45%] md:left-[35%] sm:left-[52%] lg:mt-7 md:mt-5 sm:mt-2 p-3 rounded-md text-sm z-[1] before:absolute before:content-[''] before:w-6 before:h-6 before:bg-white lg:before:top-5 md:before:top-5 sm:before:top-7 before:-left-3 before:rotate-45 before:-z-[1] hover:underline underline-offset-2 hidden group-hover:block"
                                            target="_blank">
                                            Also Read <br> Convenience of Online Shopping
                                        </a>
                                        {{-- tooltip ends --}}
                                    </div>
                                    <p class="py-5">Scalable and secured resources to beat the peak with enhanced user
                                        experience
                                        and customer satisfaction</p>
                                    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-5 py-5">
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Scalable &
                                                Stable</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Prepare for those traffic spikes by
                                                hosting in
                                                state-of-the-art data centres for peace of mind</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Fast Load
                                                Times</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">By hosting on Pi Cloud, enterprises will
                                                benefit
                                                from speeds that no on-site infrastructure could promise</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Savings On
                                                TCO
                                            </h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">You only pay for what you need and use
                                                with
                                                Pi Cloud, profits can be reinvested into creative ways to grow your business
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Cyber
                                                Security</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Protection from DDoS attacks, which can
                                                cause
                                                customers to lose confidence in the reliability of your website</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Ecommerce Box Content (End) --}}

                            {{-- ITES Box Content (Start) --}}
                            <div id="ites-content" class="industry-solution-content-box">
                                <div class="bg-[#223f97] w-full text-white p-10">
                                    <div class="group relative">
                                        <h4
                                            class="pt-8 pb-2 font-bold lg:text-5xl md:text-3xl sm:text-xl group-hover:text-white">
                                            IT /
                                            ITES</h4>
                                        {{-- tooltip starts --}}
                                        <a href="https://pidatacenters.com/knowledge-hub/can-it-ites-overcome-these-hurdles"
                                            class="font-bold text-center bg-white text-web-ascent-1 absolute top-0 lg:left-[30%] md:left-[24%] sm:left-[38%] lg:mt-7 md:mt-5 sm:mt-3 p-3 rounded-md text-sm z-[1] before:absolute before:content-[''] before:w-6 before:h-6 before:bg-white before:top-5 before:-left-3 before:rotate-45 before:-z-[1] hover:underline underline-offset-2 hidden group-hover:block"
                                            target="_blank">
                                            Also Read <br> Data-Centric Solutions
                                        </a>
                                        {{-- tooltip ends --}}
                                    </div>
                                    <p class="py-5">Adopt more agile development processes, including decentralized
                                        development
                                        teams</p>
                                    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-5 py-5">
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Ease Of
                                                Provisioning And Manageability</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">With self service provisioning and
                                                management,
                                                enterprises can manage their environment with minimal friction</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Collaboration & Remote Work</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">End User <a
                                                    href="https://pidatacenters.com/knowledge-hub/the-evolution-of-computing-a-guide-to-cloud-hosting"
                                                    class="underline underline-offset-2 hover:text-blue-600"
                                                    target="_blank">Computing</a> services on Pi Cloud
                                                gives
                                                your employees mobility and remote work options</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Virtual
                                                Private Network
                                            </h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Encrypted IPsec connections between a
                                                local data
                                                center and Pi Cloud VPC</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Security
                                            </h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">We ensure your mission critical data and
                                                workloads are secure from ever evolving cyber threat</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Strategic
                                                Partnerships</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Pi Cloud Partner Program enables
                                                enterprises to
                                                collaborate with us in their journey to cloud transformation</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- ITES Box Content (End) --}}

                        </div>
                        {{-- First Three Boxes Content (End) --}}

                        {{-- Manufacturing Box (Start) --}}
                        <div onclick="handleToggleContentBox('manufacturing', event)" class="industry-solution-box"
                            id="manufacturing-box">
                            <div class="shadow-[0px_0px_5px_rgba(0,0,0,0.3)] border p-6 group">
                                <div class="flex justify-between">
                                    <img src="{{ asset('web/images/industry-solutions/Manufacturing.webp') }}"
                                        alt="Empowers manufacturers to optimize production, reduce IT costs, and enhance security"
                                        class="w-16 h-auto">
                                    <i data-feather="chevron-down" class="h-7 w-7 dropdown-arrow"></i>
                                </div>
                                <h3 class="pt-8 pb-2 font-bold lg:text-2xl md:text-2xl sm:text-xl">
                                    Manufacturing</h3>
                            </div>
                        </div>
                        {{-- Manufacturing Box (End) --}}

                        {{-- Education Box (Start) --}}
                        <div onclick="handleToggleContentBox('education', event)" class="industry-solution-box"
                            id="education-box">
                            <div class="shadow-[0px_0px_5px_rgba(0,0,0,0.3)] border p-6 group">
                                <div class="flex justify-between">
                                    <img src="{{ asset('web/images/industry-solutions/Education.webp') }}"
                                        alt=" Pi helps education transformation with e-learning, virtual labs, remote access, and scalability"
                                        class="w-16 h-auto">
                                    <i data-feather="chevron-down" class="h-7 w-7 dropdown-arrow"></i>
                                </div>
                                <h3 class="pt-8 pb-2 font-bold lg:text-2xl md:text-2xl sm:text-xl">
                                    Education
                                </h3>
                            </div>
                        </div>
                        {{-- Education Box (End) --}}

                        {{-- Healthcare Box (Start) --}}
                        <div onclick="handleToggleContentBox('healthcare', event)" class="industry-solution-box"
                            id="healthcare-box">
                            <div class="shadow-[0px_0px_5px_rgba(0,0,0,0.3)] border p-6 group">
                                <div class="flex justify-between">
                                    <img src="{{ asset('web/images/industry-solutions/Healthcare.webp') }}"
                                        alt="Pi Cloud offers HIPAA-compliant healthcare solutions for data security, business continuity, and remote collaboration"
                                        class="w-16 h-auto">
                                    <i data-feather="chevron-down" class="h-7 w-7 dropdown-arrow"></i>
                                </div>
                                <h3 class="pt-8 pb-2 font-bold lg:text-2xl md:text-2xl sm:text-xl">
                                    Healthcare
                                </h3>
                            </div>
                        </div>
                        {{-- Healthcare Box (End) --}}

                        {{-- Last Three Boxes Content (Start) --}}
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-1">

                            {{-- Manufacturing Box Content (Start) --}}
                            <div id="manufacturing-content" class="industry-solution-content-box">
                                <div class="bg-[#223f97] w-full p-10 text-white">
                                    <div class="group relative">
                                        <h4
                                            class="pt-8 pb-2 font-bold lg:text-5xl md:text-3xl sm:text-xl group-hover:text-white">
                                            Manufacturing
                                        </h4>
                                        {{-- tooltip starts --}}
                                        <a href="https://pidatacenters.com/knowledge-hub/discover-how-data-centers-simplify-everything"
                                            class="font-bold text-center bg-white text-web-ascent-1 absolute top-0 lg:left-[50%] md:left-[37%] sm:left-[60%] lg:mt-7 md:mt-5 sm:mt-3 p-3 rounded-md text-sm z-[1] before:absolute before:content-[''] before:w-6 before:h-6 before:bg-white lg:before:top-5 md:before:top-5 sm:before:top-5 before:-left-3 before:rotate-45 before:-z-[1] hover:underline underline-offset-2 hidden group-hover:block"
                                            target="_blank">
                                            Also Read <br> Industry 4.0
                                        </a>
                                        {{-- tooltip ends --}}
                                    </div>
                                    <p class="py-5">Optimize your production and achieve faster go to market with
                                        Pi Cloud</p>
                                    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-5 py-5">
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Industry
                                                4.0</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Take advantage of IoT by building smart
                                                factories
                                                and faster production lines</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Improve
                                                Your Operations</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Add a wide variety of cost effective and
                                                powerful
                                                analytics to process, analyze, and visualize data</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Innovate
                                                Faster With SAP On Pi Cloud
                                            </h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Pi Cloud allows engineers to solve
                                                complex
                                                problems quickly enabling enterprises to reduce time-to-results</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Lower Your
                                                IT Costs</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Focus on improving business operations
                                                and
                                                innovation, not IT infrastructure</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Enhanced
                                                Security</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm"><a
                                                    href="https://pidatacenters.com/knowledge-hub/what-is-data-center-security-why-is-it-important"
                                                    class="underline underline-offset-2 hover:text-blue-600"
                                                    target="_blank">Data center</a> and network architecture
                                                built to
                                                meet the requirements of the most security-sensitive organizations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Manufacturing Box Content (End) --}}

                            {{-- Education Box Content (Start) --}}
                            <div id="education-content" class="industry-solution-content-box">
                                <div class="bg-[#223f97] w-full text-white p-10">
                                    <div class="group relative">
                                        <h4
                                            class="pt-8 pb-2 font-bold lg:text-5xl md:text-3xl sm:text-xl group-hover:text-white">
                                            Education
                                        </h4>
                                        {{-- tooltip starts --}}
                                        <a href="https://pidatacenters.com/knowledge-hub/revolutionizing-education-the-importance-of-a-reliable-data-center"
                                            class="font-bold text-center bg-white text-web-ascent-1 absolute top-0 lg:left-[35%] md:left-[27%] sm:left-[45%] lg:mt-7 md:mt-5 sm:mt-1 p-3 rounded-md text-sm z-[1] before:absolute before:content-[''] before:w-6 before:h-6 before:bg-white lg:before:top-5 md:before:top-5 sm:before:top-7  before:-left-3 before:rotate-45 before:-z-[1] hover:underline underline-offset-2 hidden group-hover:block"
                                            target="_blank">
                                            Also Read <br> Revolutionizing Education
                                        </a>
                                        {{-- tooltip ends --}}
                                    </div>
                                    <p class="py-5">Migrate from legacy systems and as you transform into e-learning with
                                        enhanced
                                        research and innovation</p>
                                    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-5 py-5">
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Virtualize Your Labs</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">With app streaming on Pi Cloud,
                                                institutions and
                                                schools can centrally manage thousands of applications</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Access
                                                Desktop From Any Device</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Support remote work and remote learning
                                                with
                                                Workspace on Pi cloud</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Security
                                                & Compliance
                                            </h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Pi Cloud is built to help even the most
                                                security-sensitive institutions meet student data privacy and security
                                                requirements
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Scalability</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Quickly and easily scale up during peak
                                                usage
                                                times, including enrollment and scale down over vacations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Education Box Content (End) --}}

                            {{-- Healthcare Box Content (Start) --}}
                            <div id="healthcare-content" class="industry-solution-content-box">
                                <div class="bg-[#223f97] w-full text-white p-10">
                                    <div class="group relative">
                                        <h4
                                            class="pt-8 pb-2 font-bold lg:text-5xl md:text-3xl sm:text-xl group-hover:text-white">
                                            Healthcare
                                        </h4>
                                        {{-- tooltip starts --}}
                                        <a href="https://pidatacenters.com/knowledge-hub/cure-all-for-pharmas-toughest-challenges"
                                            class="font-bold text-center bg-white text-web-ascent-1 absolute top-0 lg:left-[39%] md:left-[30%] sm:left-[47%] lg:mt-7 md:mt-5 sm:mt-1 p-3 rounded-md text-sm z-[1] before:absolute before:content-[''] before:w-6 before:h-6 before:bg-white lg:before:top-5 md:before:top-5 sm:before:top-7 before:-left-3 before:rotate-45 before:-z-[1] hover:underline underline-offset-2 hidden group-hover:block"
                                            target="_blank">
                                            Also Read <br> Cure-All for Pharma's
                                        </a>
                                        {{-- tooltip ends --}}
                                    </div>
                                    <p class="py-5">Improve your compliance and safeguard your workloads, research &
                                        customer
                                        data</p>
                                    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-5 py-5">
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Support
                                                Regulatory Compliance</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Pi Cloud being HIPAA certified ensures
                                                effective
                                                data security, protecting from unauthorized access and breaches</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Connect
                                                Your Infrastructure</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Achieve best performance by transferring
                                                data
                                                within branches, headquarters and availability zones efficiently</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Business
                                                Continuity
                                            </h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">High data availability, robust backup
                                                and
                                                disaster recovery capabilities, supporting minimal RTOs and RPOs</p>
                                        </div>
                                        <div>
                                            <h5 class="font-bold lg:text-lg md:text-lg sm:text-md group-hover:text-white">
                                                Facilitate Collaboration</h5>
                                            <p class="text-[#c5c5c5] py-2 text-sm">Pi Cloud can help your employees to work
                                                from
                                                remote locations in a secure and compliant manner</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Healthcare Box Content (End) --}}

                        </div>
                        {{-- First Three Boxes Content (End) --}}

                    </div>
                </div>
                {{-- Boxes Section (End) --}}

            </div>

        </div>
    </section>
    {{-- Industry Solutions Ends --}}
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

        const handleToggleContentBox = (id) => {
            // $('.dropdown-arrow').removeClass("rotate-180");
            $(`#${id}-box`).find('.dropdown-arrow').toggleClass("rotate-180");
            $(`.industry-solution-content-box:not(#${id}-content)`).hide();
            $(`#${id}-content`).toggle();
            // $('.industry-solution-box').removeClass('active');
            // $(`#${id}-box`).addClass('active');


        }
    </script>
@endsection
