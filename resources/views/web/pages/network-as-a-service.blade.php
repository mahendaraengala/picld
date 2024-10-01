@extends('web.layouts.app')

@section('web-head')
    <title>Network as a Service | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/xaas/new-network-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Network as a Service</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-24 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Network as a Service
                            (NaaS) is a cloud-based solution that delivers scalable and flexible network connectivity on
                            demand. It allows businesses to manage, customize, and optimize their networks without extensive
                            on-premise infrastructure. NaaS simplifies network operations, reduces costs, and enhances
                            security, empowering organizations to adapt quickly to changing business needs.
                        </p>
                        <div class="pt-4 space-x-3">
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}


    {{-- intro cont starts --}}
    <section class="py-4 space-y-5">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Bridge The Gap Between Your
                    Business & IT
                </h2>
                <p class="text-center py-5">In the recent years there has been acceleration in the frequency,
                    diversity, and impact of disruptions. Let us plan, build and manage your networks to help your
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
                    <li id="network-tab-1" class="network-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                        onclick="handleToggleNetworkTab(1)">
                        <button>Scale</button>
                    </li>
                    <li id="network-tab-2" class="network-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                        onclick="handleToggleNetworkTab(2)">
                        <button>Connect</button>
                    </li>
                    <li id="network-tab-3" class="network-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:my-0 sm:w-[90%]"
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
                        <h4 class="text-slate-900 font-bold py-2">Improved network speed, enhanced security</h4>
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
                        <h4 class="text-slate-900 font-bold py-2">Reliable connectivity for real-time applications</h4>
                        <p>MPLS on Pi Cloud enables enterprises to build advanced and intelligent networks that
                            deliver a wide variety of services over a single infrastructure. This solution can be
                            utilized for bandwidth adjustment, to reduce network congestion and increase quality of
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
                        <h4 class="text-slate-900 font-bold py-2">Dedicated connection from your premises to Pi Cloud</h4>
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
                        <h4 class="text-slate-900 font-bold py-2">Centralized and managed wifi solution</h4>
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
                        <h4 class="text-slate-900 font-bold py-2">Deliver content fast, efficiently and securely</h4>
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
                        <h4 class="text-slate-900 font-bold py-2">Increased performance and high availability</h4>
                        <p>Enterprises can leverage Pi Cloud to distribute workloads and compute resources on hybrid
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
                        <h4 class="text-slate-900 font-bold py-2">Securely access your network resources</h4>
                        <p>VPN on Pi Cloud provides anonymity by creating a private network over open internet. It
                            enables enterprises to access their workloads on cloud from anywhere, any time, and
                            through any device, without compromising the security. Masking of internet protocol (IP)
                            address keeps your transactions at bay from intrusion. Network admins can use VPN to
                            gain visibility into network, certificate pinning, and encrypting data

                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Firewall As A Service (FWaaS)</h3>
                        <h4 class="text-slate-900 font-bold py-2">Monitor and control network traffic, basis pre-defined
                            rules
                        </h4>
                        <p>FWaaS on Pi Cloud is the first layer of defence for enterprise workloads and eliminates
                            the need for appliance form factor. Our fwaas ensures perimter level security for
                            enterprises at their hub offices,branch locations and end-points. All of these without
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
    </section>
    {{-- intro cont ends --}}

    {{-- naas by pi cont starts --}}
    <section class="py-4">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-xl text-center">Network as a Service (NaaS) by Pi
                    DATACENTERS®: Revolutionizing Enterprise Connectivity </h2>
                <p class="pt-3">In today's fast-paced
                    digital landscape, businesses need flexible, scalable, and secure networking solutions to meet the
                    demands of their growing operations. Pi DATACENTERS® introduces Network as a Service (NaaS), a fully
                    managed, on-demand solution that allows enterprises to adapt their network infrastructure seamlessly
                    while focusing on core business functions. With Pi’s NaaS, businesses can avoid the complexities of
                    traditional networking, benefit from cloud-native agility, and optimize performance with unparalleled
                    reliability and security. </p>
            </div>
            <div>
                <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-xl text-center pt-3">Why Businesses Should Opt for Pi
                    NaaS
                </h2>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 py-7">
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">Scalability at Its Core </h3>
                        <p class="text-center">Pi NaaS is built for enterprises looking to scale their network resources as
                            their operations
                            grow. Whether expanding to new locations, onboarding remote teams, or integrating new
                            technologies, Pi’s network adapts effortlessly to your evolving needs without significant
                            capital investments. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">Reduced Complexity, Increased
                            Agility </h3>
                        <p class="text-center">Managing traditional networking infrastructure can be complex, expensive,
                            and time-consuming. Pi
                            NaaS simplifies this by offering a cloud-based, automated network, eliminating the need for
                            heavy on-premises hardware. This translates into faster deployments, fewer maintenance worries,
                            and greater agility. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">Enhanced Security and Compliance
                        </h3>
                        <p class="text-center">Security is at the heart of Pi’s NaaS. With end-to-end encryption, network
                            segmentation, and
                            multi-layered defense mechanisms, Pi ensures that your network is secure from external threats.
                            Pi is compliant with global security standards, including ISO 27001, PCI-DSS, and SOC2 Type I,
                            giving businesses confidence that their data is well-protected and compliant with industry
                            regulations. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">Cost-Efficiency and Flexibility
                        </h3>
                        <p class="text-center">Traditional networks require upfront investments in hardware, software, and
                            maintenance. Pi NaaS
                            operates on a pay-as-you-go model, allowing businesses to pay only for the resources they use.
                            This cost-efficient approach reduces capital expenditure, freeing up resources to invest in
                            other critical areas of the business. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">High Performance with Low
                            Latency </h3>
                        <p class="text-center">Pi’s NaaS delivers high-performance networking with ultra-low latency,
                            ensuring that critical
                            applications run smoothly. Powered by Pi’s TIER IV Certified Hyperscale Data Centers, your
                            network enjoys unparalleled uptime, ensuring that your business operates without interruptions.
                        </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">Global Reach with Local
                            Expertise </h3>
                        <p class="text-center">With a global presence across India (Vijayawada, Hyderabad, Kochi, Mumbai)
                            and the US
                            (California, Pennsylvania), Pi NaaS provides global connectivity while maintaining local
                            compliance. Pi’s network infrastructure is optimized for businesses with both local and
                            international operations, ensuring that your network performance remains consistent regardless
                            of geography. </p>
                    </div>
                    <div class="lg:block md:hidden sm:hidden"></div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">End-to-End Managed Services
                        </h3>
                        <p class="text-center">Pi’s NaaS includes 24/7 network monitoring, support, and management,
                            ensuring that your network
                            operates optimally at all times. By partnering with Pi, businesses can offload the complexities
                            of network management and rely on Pi’s team of experts to handle network performance, security,
                            and troubleshooting. </p>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-2xl text-center pt-3">Unique Selling Propositions
                    (USPs) of Pi NaaS
                </h2>

                <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-4 pt-8 pb-5">
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[5rem]">
                            TIER IV Certified Infrastructure</h4>
                        <p class="text-center"> Pi’s NaaS is backed by India’s first and the world’s fourth-largest Uptime
                            Institute TIER IV Certified Greenfield Data Center, offering the highest levels of network
                            reliability, security, and uptime. </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[5rem]">
                            AI-Powered Network Optimization</h4>
                        <p class="text-center">With AI-powered self-healing networks, Pi’s NaaS detects and resolves issues
                            before they impact performance. This results in smoother, uninterrupted operations for your
                            business-critical applications. </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[5rem]">
                            Integrated Multi-Cloud Networking</h4>
                        <p class="text-center">Pi NaaS seamlessly integrates with multi-cloud environments like AWS, Azure,
                            and GCP, providing businesses with a cohesive, flexible, and secure cloud networking experience.
                            This makes managing hybrid cloud environments simpler and more efficient. </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[5rem]">
                            Data Sovereignty & Localization</h4>
                        <p class="text-center">For businesses operating in sectors that demand strict data sovereignty, Pi
                            ensures that your data stays within India’s borders, complying with regulations and safeguarding
                            sensitive information. </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[5rem]">
                            Zero Downtime Network Deployments </h4>
                        <p class="text-center">Pi’s NaaS allows businesses to implement network upgrades and changes with
                            zero downtime, ensuring uninterrupted operations during transitions, expansions, or technology
                            upgrades.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- naas by pi cont ends --}}
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

        const handleToggleNetworkTab = (id) => {
            $(`.network-tab`).removeClass('active');
            $(`#network-tab-${id}`).addClass('active');
            $(`.network-subtab-panel`).addClass('hidden');
            $(`#network-subtab-panel-${id}`).removeClass('hidden');
        }
        handleToggleNetworkTab(1);
    </script>
@endsection
