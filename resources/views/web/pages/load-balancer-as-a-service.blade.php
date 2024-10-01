@extends('web.layouts.app')

@section('web-head')
    <title>Load Balancer as a Service | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/firewall-balancer/new-load-balancer-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white py-1 px-2">Load Balancer as a
                            Service
                        </h1>
                        <p class="text-gray-300 leading-loose font-medium px-2 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            A load balancer is a crucial component in
                            computer networking that efficiently distributes incoming network traffic or workload across
                            multiple servers or resources. Its primary purpose is to ensure that no single server becomes
                            overwhelmed with requests, thus preventing any one point in the system from being a bottleneck.
                            Load balancers can be implemented in hardware or software and are commonly used in large-scale
                            web applications, cloud computing environments, and content delivery networks (CDNs). </p>
                        <div class="pt-4 pb-5 px-2 space-x-3">
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- Technology partners starts --}}
    <section class="pt-7 pb-2">
        <div class="container bg-[#223f970a] p-5 rounded-xl">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Technology Partners</h2>
            </div>
            <div
                class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 lg:mt-10 md:mt-6 sm:mt-5 p-2 lg:gap-0 md:gap-8 sm:gap-5">
                <div class="lg:block md:block sm:hidden"></div>
                <div
                    class="bg-white shadow-[4px_4px_3px_rgba(0,0,0,0.5)] flex justify-center items-center p-2 lg:w-64 md:w-44 sm:w-64 mx-auto my-0 rounded-lg">
                    <img src="{{ asset('web/images/firewall-balancer/citrix.webp') }}" class="w-44 rounded-xl">
                </div>
                <div
                    class="bg-white shadow-[4px_4px_3px_rgba(0,0,0,0.5)] flex justify-center items-center p-2 lg:w-64 md:w-44 sm:w-64 mx-auto my-0 rounded-lg">
                    <img src="{{ asset('web/images/cloud-and-sap/l-6.webp') }}" class="w-44 rounded-xl">
                </div>
                <div class="lg:block md:block sm:hidden"></div>
            </div>
        </div>
    </section>
    {{-- Technology partners ends --}}

    {{-- small paragraph starts --}}
    <section>
        <div class="container">
            <p class="pt-2 text-center">Load Balancer as a
                Service (LBaaS) at Pi is a <a
                    href="https://picloud.ai/blog/what-is-cloud-computing-a-comprehensive-exploration"
                    class="hover:underline underline-offset-2 text-blue-600" target="_blank">cloud computing</a> service
                model that provides load
                balancing functionality without requiring users to manage the underlying infrastructure. In Pi LBaaS, the
                load balancer is offered as a scalable and <a
                    href="https://pidatacenters.com/knowledge-hub/what-is-managed-services-their-role-in-enabling-peace-of-mind-for-businesses"
                    class="hover:underline underline-offset-2 text-blue-600" target="_blank">managed service</a> by a <a
                    href="https://picloud.ai/blog/cloud-service-providers-in-india-driving-growth-in-the-digital-landscape"
                    class="hover:underline underline-offset-2 text-blue-600" target="_blank">cloud
                    service provider</a>, typically as part of
                their broader cloud platform offerings.</p>
        </div>
    </section>
    {{-- small paragraph ends --}}

    {{-- how it works starts --}}
    <section class="lg:pt-8 lg:pb-3 md:pt-8 md:pb-5 sm:py-5">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">How It Works</h2>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-10 pt-7 pb-0">
                <div class="text-center bg-[#223f9714] p-5 hover:bg-gray-300 group rounded-lg">
                    <img src="{{ asset('web/images/firewall-balancer/incoming-requests.webp') }}"
                        alt="Client sends request to load balancer"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_10px_rgba(0,0,0,0.2)] p-2 rounded-2xl bg-white group-hover:hidden">
                    <img src="{{ asset('web/images/firewall-balancer/incoming-requests-white.webp') }}"
                        alt="Client sends request to load balancer"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_10px_rgba(0,0,0,0.2)] p-2 rounded-2xl bg-white group-hover:bg-web-ascent-1 hidden group-hover:block">
                    <h3 class="font-bold text-xl py-3">Incoming Requests</h3>
                    <p>When a client sends a request to access a service or application, it first reaches the load balancer.
                    </p>
                </div>
                <div class="text-center bg-[#223f9714] p-5 hover:bg-gray-300 group rounded-lg">
                    <img src="{{ asset('web/images/firewall-balancer/distribution.webp') }}"
                        alt="Load balancer distributes request to servers based on algorithms"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_10px_rgba(0,0,0,0.2)] p-2 rounded-2xl bg-white group-hover:hidden">
                    <img src="{{ asset('web/images/firewall-balancer/distribution-white.webp') }}"
                        alt="Load balancer distributes request to servers based on algorithms"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_10px_rgba(0,0,0,0.2)] p-2 rounded-2xl bg-white group-hover:bg-web-ascent-1 hidden group-hover:block">
                    <h3 class="font-bold text-xl py-3">Distribution</h3>
                    <p>The load balancer assesses the incoming requests and decides how to distribute them among the
                        available servers based on various algorithms. These algorithms can consider factors like server
                        health, current server load, geographic location of the client, or predefined rules.</p>
                </div>
                <div class="text-center bg-[#223f9714] p-5 hover:bg-gray-300 group rounded-lg">
                    <img src="{{ asset('web/images/firewall-balancer/forwarding.webp') }}"
                        alt="Load balancer forwards request to chosen server"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_10px_rgba(0,0,0,0.2)] p-2 rounded-2xl bg-white group-hover:hidden">
                    <img src="{{ asset('web/images/firewall-balancer/forwarding-white.webp') }}"
                        alt="Load balancer forwards request to chosen server"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_10px_rgba(0,0,0,0.2)] p-2 rounded-2xl bg-white group-hover:bg-web-ascent-1 hidden group-hover:block">
                    <h3 class="font-bold text-xl py-3">Forwarding</h3>
                    <p>Once the load balancer determines the appropriate destination, it forwards the request to the
                        selected server. This server then processes the request and sends back the response directly to the
                        client through the load balancer.</p>
                </div>
                <div class="text-center bg-[#223f9714] p-5 hover:bg-gray-300 group rounded-lg">
                    <img src="{{ asset('web/images/firewall-balancer/monitoring.webp') }}"
                        alt="Load balancer monitors servers and adapts traffic flow"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_10px_rgba(0,0,0,0.2)] p-2 rounded-2xl bg-white group-hover:hidden">
                    <img src="{{ asset('web/images/firewall-balancer/monitoring-white.webp') }}"
                        alt="Load balancer monitors servers and adapts traffic flow"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_10px_rgba(0,0,0,0.2)] p-2 rounded-2xl bg-white group-hover:bg-web-ascent-1 hidden group-hover:block">
                    <h3 class="font-bold text-xl py-3">Monitoring and Adaptation</h3>
                    <p>Load balancers often continuously monitor the health and performance of the servers in the pool. If a
                        server becomes unavailable or starts to perform poorly, the load balancer can automatically reroute
                        traffic away from that server to ensure optimal performance and reliability.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- how it works ends --}}

    {{-- Aspects of pi LBaaS starts --}}
    <section class="lg:py-3 md:py-7 sm:py-3">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Key Aspects of Pi Load Balancer as a
                    Service (LBaaS)</h2>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10 pt-10 text-center">
                <div class="p-5 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-2xl hover:bg-web-ascent-1 group">
                    <h3 class="font-bold text-xl text-center py-3 group-hover:text-white">Integration with Cloud Ecosystem
                    </h3>
                    <p class="group-hover:text-gray-200"> Pi LBaaS can be seamlessly integrated with other cloud services
                        and
                        resources offered by the
                        provider, such as virtual machines, containers, databases, and storage services. This
                        integration simplifies the deployment and management of applications hosted in the cloud.</p>
                </div>
                <div class="p-5 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-2xl hover:bg-web-ascent-1 group">
                    <h3 class="font-bold text-xl text-center py-3 group-hover:text-white">API Access</h3>
                    <p class="group-hover:text-gray-200">Pi LBaaS platforms provide APIs (Application Programming
                        Interfaces) that allow users to programmatically manage load balancer configurations, automate
                        deployment processes, and integrate load balancing functionality into their applications or
                        infrastructure-as-code workflows.</p>

                </div>
                <div class="p-5 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-2xl hover:bg-web-ascent-1 group">
                    <h3 class="font-bold text-xl text-center py-3 group-hover:text-white">Scalability</h3>
                    <p class="group-hover:text-gray-200"> Pi LBaaS is designed to automatically scale resources based on
                        demand. This ensures that load
                        balancers can handle varying levels of traffic without manual intervention.</p>

                </div>
                <div class="p-5 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-2xl hover:bg-web-ascent-1 group">
                    <h3 class="font-bold text-xl text-center py-3 group-hover:text-white">High Availability</h3>
                    <p class="group-hover:text-gray-200"> Pi LBaaS offers high availability configurations by distributing
                        load - balancer instances across multiple availability zones or data centers. This helps ensure the
                        continuous availability of load-balancing services even in the event of hardware failures or
                        maintenance activities.</p>

                </div>
                <div class="p-5 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-2xl hover:bg-web-ascent-1 group">
                    <h3 class="font-bold text-xl text-center py-3 group-hover:text-white">Pay-Per-Use Model</h3>
                    <p class="group-hover:text-gray-200"> Pi LBaaS follows a pay-as-you-go pricing model, where users are
                        charged based on their actual usage of the load-balancing service. This can be more cost-effective
                        than investing in and maintaining a dedicated load balancer infrastructure. </p>

                </div>
                <div class="p-5 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-2xl hover:bg-web-ascent-1 group">
                    <h3 class="font-bold text-xl text-center py-3 group-hover:text-white">Managed Service</h3>
                    <p class="group-hover:text-gray-200"> With Pi LBaaS, the cloud service provider manages the
                        provisioning,
                        configuration, scaling, and
                        maintenance of the load balancer infrastructure. Users are relieved from the burden of managing
                        hardware or virtual instances dedicated to load balancing.</p>

                </div>
            </div>
        </div>
    </section>
    {{-- Aspects of pi LBaaS ends --}}
    {{-- reach us starts --}}
    <section class="pt-5 pb-2">
        <div class="container">
            <div class="pt-0 space-x-3 text-center">
                <a href="{{ route('web.view.contact') }}" class="bg-web-ascent-1 text-xl text-white py-3 px-10 rounded-lg"
                    target="_blank">Reach
                    Us</a>
            </div>
        </div>
    </section>
    {{-- reach us ends --}}

    {{-- Why You Should Opt For Pi LBaaS starts --}}
    <section class="lg:py-9 md:py-9 sm:py-6">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Why You Should Opt For Pi LBaaS</h2>
                <p class="pt-6 pb-3">Pi LBaaS enables businesses to focus on developing and running their applications
                    without
                    worrying about
                    the complexities of managing load balancer infrastructure. Opting for Load Balancer as a Service (LBaaS)
                    offers several advantages for businesses and organizations:</p>
            </div>

            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 lg:gap-0 md:gap-0 sm:gap-5 p-3 lg:mt-0 md:mt-4 sm:mt-0">
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/scalability-2.webp') }}"
                        alt="Pi’s services automatically scale resources to handle traffic fluctuations."
                        class="lg:w-[70%] md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#8080800d] p-5 rounded-sm border-2 border-gray-200 rounded-tl-[40px] rounded-bl-[40px] flex justify-center items-center flex-col text-center">
                        <h3 class="font-bold text-2xl leading-6 pb-2 text-web-ascent-1">Scalability</h3>
                        <p class="py-1">Pi LBaaS platforms are designed to automatically scale resources based
                            on
                            demand. This ensures that your load balancer can handle varying levels of traffic without manual
                            intervention. As your application grows, the LBaaS solution can seamlessly accommodate increased
                            traffic volumes.</p>
                    </div>
                </div>
            </div>
            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 lg:gap-0 md:gap-0 sm:gap-5 p-3 lg:mt-0 md:mt-4 sm:mt-0">
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#8080800d] p-5 rounded-sm border-2 border-gray-200 rounded-tr-[40px] rounded-br-[40px] flex justify-center items-center flex-col text-center">
                        <h3 class="font-bold text-2xl leading-6 pb-2 text-web-ascent-1">High Availability</h3>
                        <p class="py-1">Pi LBaaS providers typically offer high availability configurations by
                            distributing load balancer instances across multiple availability zones or data centers. This
                            helps ensure the continuous availability of load-balancing services even in the event of
                            hardware failures or maintenance activities. </p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/high-availability-2.webp') }}"
                        alt="Pi LBaaS offers high availability by distributing instances across zones/data centers."
                        class="lg:w-[70%] md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
            </div>
            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 lg:gap-0 md:gap-0 sm:gap-5 p-3 lg:mt-0 md:mt-4 sm:mt-0">
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/cost-efficiency-a.webp') }}"
                        alt="Pi uses the pay-per-use model for cost-efficiency."
                        class="lg:w-[70%] md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#8080800d] p-5 rounded-sm border-2 border-gray-200 rounded-tl-[40px] rounded-bl-[40px] flex justify-center items-center flex-col text-center">
                        <h3 class="font-bold text-2xl leading-6 pb-2 text-web-ascent-1">Cost-Efficiency</h3>
                        <p class="py-1">Pi LBaaS allows you to go for pay-as-you-go pricing model, which means
                            you
                            only
                            pay for the load balancing resources you use. This can be more cost-effective than investing in
                            and
                            maintaining dedicated load balancer hardware or virtual instances.</p>
                    </div>
                </div>
            </div>
            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 lg:gap-0 md:gap-0 sm:gap-5 p-3 lg:mt-0 md:mt-4 sm:mt-0">
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#8080800d] p-5 rounded-sm border-2 border-gray-200 rounded-tr-[40px] rounded-br-[40px] flex justify-center items-center flex-col text-center">
                        <h3 class="font-bold text-2xl leading-6 pb-2 text-web-ascent-1">Managed Service</h3>
                        <p class="py-1">With Pi LBaaS, the cloud service provider manages the provisioning,
                            configuration, scaling, and maintenance of the load balancer infrastructure. This frees your
                            team
                            from the burden of managing hardware or virtual instances dedicated to load balancing, allowing
                            them
                            to focus on other critical tasks.</p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/managed-service.webp') }}"
                        alt="Pi LBaaS is a managed service for reduced complexity."
                        class="lg:w-[70%] md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
            </div>
            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 lg:gap-0 md:gap-0 sm:gap-5 p-3 lg:mt-0 md:mt-4 sm:mt-0">
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/reduced-complexity.webp') }}"
                        class="lg:w-[70%] md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#8080800d] p-5 rounded-sm border-2 border-gray-200 rounded-tl-[40px] rounded-bl-[40px] flex justify-center items-center flex-col text-center">
                        <h3 class="font-bold text-2xl leading-6 pb-2 text-web-ascent-1">Reduced Complexity</h3>
                        <p class="py-1">Pi LBaaS abstracts away the complexities of setting up and configuring
                            load
                            balancers, making it easier to deploy and manage applications in the cloud. This is particularly
                            beneficial for organizations with limited expertise in networking or infrastructure management.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 lg:gap-0 md:gap-0 sm:gap-5 p-3 lg:mt-0 md:mt-4 sm:mt-0">
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#8080800d] p-5 rounded-sm border-2 border-gray-200 rounded-tr-[40px] rounded-br-[40px] flex justify-center items-center flex-col text-center">
                        <h3 class="font-bold text-2xl leading-6 pb-2 text-web-ascent-1">Integration with Cloud
                            Ecosystem</h3>
                        <p class="py-1">Pi LBaaS solutions are seamlessly integrated with other cloud services
                            and
                            resources offered by the provider, such as virtual machines, containers, databases, and storage
                            services. This integration simplifies the deployment and management of applications hosted in
                            the
                            cloud.</p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/cloud-ecosystem.webp') }}"
                        alt="Integrates with cloud VMs, containers, databases, and storage."
                        class="lg:w-[70%] md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
            </div>
            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 lg:gap-0 md:gap-0 sm:gap-5 p-3 lg:mt-0 md:mt-4 sm:mt-0">
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/automation.webp') }}"
                        alt="Pi offers APIs for automation and application integration"
                        class="lg:w-[70%] md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#8080800d] p-5 rounded-sm border-2 border-gray-200 rounded-tl-[40px] rounded-bl-[40px] flex justify-center items-center flex-col text-center">
                        <h3 class="font-bold text-2xl leading-6 pb-2 text-web-ascent-1">API Access and Automation
                        </h3>
                        <p class="py-1">LBaaS platforms typically provide APIs (Application Programming
                            Interfaces) that allow you to programmatically manage load-balancer configurations, automate
                            deployment processes, and integrate load-balancing functionality into your applications or
                            infrastructure-as-code workflows. This enables greater flexibility and efficiency in managing
                            your cloud infrastructure. </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- Why You Should Opt For Pi LBaaS ends --}}
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
