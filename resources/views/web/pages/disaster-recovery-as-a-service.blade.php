@extends('web.layouts.app')

@section('web-head')
    <title>Disaster Recovery as a Service | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/xaas/new-disaster-recovery-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Disaster Recovery as a Service
                        </h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-24 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Disaster Recovery as a
                            Service (DRaaS) is a cloud-based solution that protects your critical systems and data and
                            ensures they are quickly recoverable during an outage or disaster. By replicating and hosting
                            your IT infrastructure in a secure off-site location, DRaaS not only minimizes downtime but also
                            offers rapid recovery capabilities, providing you with a sense of security and reassurance
                            tailored to your needs.
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
    <section class="py-4">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Disaster Recovery </h2>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 items-center gap-10 pt-5">
                <div>
                    <img src="{{ asset('web/images/private-cloud/dr_img.webp') }}" class="w-96 mx-auto my-0">
                </div>
                <div>
                    <p>Pi Cloud offers Disaster Recovery as a Service(DRaaS) ensuring near zero business
                        disruption in case of an outage. DRaaS provides rapid failover and failback for your IT
                        environment across infrastructure , applications and processes. Choose from
                        active-active, active-passive or cold DR to balance business needs and TCO. Enterprises
                        get to leverage multi availability zones of Pi Cloud to design an effective Near and Far
                        DR policy.</p>
                </div>
            </div>

            {{-- Key Features --}}
            <div class="py-5">
                <div class="container">
                    <div>
                        <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                    </div>

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-7 pb-1">
                        <div
                            class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                            <div class="flex py-3">
                                <img src="{{ asset('web/images/private-cloud/cd.webp') }}"
                                    alt="Fast recovery of critical apps & data meeting your RPO & RTO for business"
                                    class="w-12 h-12">
                                <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
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
                                <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
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
                                <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                    DR Drills</h4>
                            </div>
                            <p class="text-center">Periodic drills enable operational readiness and Use Cases
                                to improve resiliency and recovery time</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Key Features Ends --}}

            {{-- use cases starts --}}
            <div class="pb-7">
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
            {{-- use cases ends --}}

        </div>
    </section>
    {{-- intro cont ends --}}

    {{-- resilience cont starts --}}
    <section class="py-4">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Safeguard Your Business with Unmatched
                    Resilience </h2>
                <p class="pt-3">In the current
                    unpredictable digital market, it is imperative for businesses to quickly bounce back from setbacks.
                    Whether it's natural disasters, cyberattacks, or unexpected system failures, your data and applications
                    must be protected with a robust disaster recovery plan. </p>
                <p class="pt-3">Pi Disaster Recovery as a
                    Service (DRaaS) is a comprehensive, cloud-based solution designed to ensure that your business remains
                    operational, no matter what. With our cutting-edge technology and expert support, we provide seamless,
                    automated recovery of your critical IT infrastructure, minimizing downtime and safeguarding your data
                    integrity. </p>
            </div>
            <div>
                <h3 class="font-bold lg:text-3xl md:text-2xl sm:text-2xl text-center pt-5">How It Works </h3>
                <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-5 py-7">
                    <div
                        class="shadow-[0px_0px_5px_rgba(0,0,0,0.2)] p-3 hover:-translate-y-2 hover:translate-x-2 transition-all duration-700 cursor-pointer">
                        <h4 class="font-bold lg:text-lg md:text-lg sm:text-lg text-web-ascent-1">Assessment</h4>
                        <p>We begin by understanding your business requirements and critical systems to develop a custom
                            disaster recovery plan.</p>
                    </div>
                    <div
                        class="shadow-[0px_0px_5px_rgba(0,0,0,0.2)] p-3 hover:-translate-y-2 hover:translate-x-2 transition-all duration-700 cursor-pointer">
                        <h4 class="font-bold lg:text-lg md:text-lg sm:text-lg text-web-ascent-1">Implementation</h4>
                        <p>Our team sets up your DRaaS environment, ensuring seamless integration with your IT
                            infrastructure.</p>
                    </div>
                    <div
                        class="shadow-[0px_0px_5px_rgba(0,0,0,0.2)] p-3 hover:-translate-y-2 hover:translate-x-2 transition-all duration-700 cursor-pointer">
                        <h4 class="font-bold lg:text-lg md:text-lg sm:text-lg text-web-ascent-1">Testing</h4>
                        <p>Regular testing and drills are conducted to ensure your recovery plan is effective and reliable.
                        </p>
                    </div>
                    <div
                        class="shadow-[0px_0px_5px_rgba(0,0,0,0.2)] p-3 hover:-translate-y-2 hover:translate-x-2 transition-all duration-700 cursor-pointer">
                        <h4 class="font-bold lg:text-lg md:text-lg sm:text-lg text-web-ascent-1">Activation</h4>
                        <p>In the event of a disaster, our automated system triggers the recovery process, bringing your
                            operations back online swiftly and securely.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- resilience cont ends --}}

    {{--  DRaaS cont starts --}}
    <section class="py-4 bg-[#223f973b]">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Why You should Think About DRaaS </h2>
                <p class="pt-3">Disaster Recovery as a
                    Service (DRaaS) offers several key benefits for businesses, ensuring continuity and resilience in the
                    face of unexpected disruptions. Here are some of the primary advantages: </p>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 py-12">
                <div class="relative bg-white pt-12 px-5 pb-8 my-5 rounded-tr-3xl rounded-br-3xl">
                    <img src="{{ asset('web/images/xaas/rapid-recovery.webp') }}"
                        class="w-20 h-20 p-3 mx-auto my-0 absolute -top-10 left-0 bg-white rounded-full">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1">Rapid Recovery</h3>
                    <p>DRaaS gives you Faster Recovery Times as it often comes with built-in recovery point objectives (RPO)
                        and recovery time objectives (RTO), allowing for quick service restoration. Also, the Automatic
                        switching to backup systems reduces downtime and accelerates recovery. </p>
                </div>
                <div class="relative bg-white pt-12 px-5 pb-8 my-5 rounded-tr-3xl rounded-br-3xl">
                    <img src="{{ asset('web/images/xaas/improved-reliability.webp') }}"
                        class="w-20 h-20 p-3 mx-auto my-0 absolute -top-10 left-0 bg-white rounded-full">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1">Improved Reliability</h3>
                    <p>Cloud-based DRaaS providers typically offer geographically dispersed data centers, enhancing system
                        reliability and data protection. Besides that, DRaaS Providers often conduct regular tests and
                        updates to ensure that recovery procedures are effective and up to date.</p>
                </div>
                <div class="relative bg-white pt-12 px-5 pb-8 my-5 rounded-tr-3xl rounded-br-3xl">
                    <img src="{{ asset('web/images/xaas/enhanced-security.webp') }}"
                        class="w-20 h-20 p-3 mx-auto my-0 absolute -top-10 left-0 bg-white rounded-full">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1">Enhanced Security</h3>
                    <p>DRaaS solutions include robust security measures, such as encryption and multi-factor authentication,
                        to safeguard data and help meet regulatory compliance requirements by ensuring data is protected and
                        recovery processes are in place.</p>
                </div>
                <div class="relative bg-white pt-12 px-5 pb-8 my-5 rounded-tr-3xl rounded-br-3xl">
                    <img src="{{ asset('web/images/xaas/cost-efficiency.webp') }}"
                        class="w-20 h-20 p-3 mx-auto my-0 absolute -top-10 left-0 bg-white rounded-full">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1">Cost Efficiency</h3>
                    <p>It Eliminates the need for investing in and maintaining redundant hardware and infrastructure.
                        Businesses can also opt for Pay-as-You-Go where you only pay for the resources and services you use,
                        which can be more cost-effective than maintaining a physical DR site.</p>
                </div>
                <div class="relative bg-white pt-12 px-5 pb-8 my-5 rounded-tr-3xl rounded-br-3xl">
                    <img src="{{ asset('web/images/xaas/simplified-management.webp') }}"
                        class="w-20 h-20 p-3 mx-auto my-0 absolute -top-10 left-0 bg-white rounded-full">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1">Simplified Management</h3>
                    <p>DRaaS providers handle the complexities of disaster recovery, including infrastructure management,
                        updates, and testing. They also manage and monitor disaster recovery processes through a single,
                        user-friendly interface.</p>
                </div>
                <div class="relative bg-white pt-12 px-5 pb-8 my-5 rounded-tr-3xl rounded-br-3xl">
                    <img src="{{ asset('web/images/xaas/business-continuity.webp') }}"
                        class="w-20 h-20 p-3 mx-auto my-0 absolute -top-10 left-0 bg-white rounded-full">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1">Business Continuity</h3>
                    <p> It minimizes downtime and ensures critical business operations can continue with minimal
                        interruption, even in a disaster. DRaaS can be integrated with existing IT systems and processes,
                        providing a cohesive recovery strategy.</p>
                </div>
                <div class="relative bg-white pt-12 px-5 pb-8 my-5 rounded-tr-3xl rounded-br-3xl">
                    <img src="{{ asset('web/images/xaas/focus-on-core-business.webp') }}"
                        class="w-20 h-20 p-3 mx-auto my-0 absolute -top-10 left-0 bg-white rounded-full">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1">Focus on Core Business</h3>
                    <p>It Reduced IT Burden: Outsourcing disaster recovery allows IT teams to focus on core business
                        activities rather than managing complex recovery infrastructure. </p>
                </div>
                <div class="relative bg-white pt-12 px-5 pb-8 my-5 rounded-tr-3xl rounded-br-3xl">
                    <img src="{{ asset('web/images/xaas/geographic-flexibility.webp') }}"
                        class="w-20 h-20 p-3 mx-auto my-0 absolute -top-10 left-0 bg-white rounded-full">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1">Geographic Flexibility</h3>
                    <p>It facilitates global reach, and leverages cloud infrastructure to provide disaster recovery
                        capabilities across multiple geographic locations, improving resilience against regional disasters.
                    </p>
                </div>
                <div class="relative bg-white pt-12 px-5 pb-8 my-5 rounded-tr-3xl rounded-br-3xl">
                    <img src="{{ asset('web/images/xaas/continuous-improvement.webp') }}"
                        class="w-20 h-20 p-3 mx-auto my-0 absolute -top-10 left-0 bg-white rounded-full">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1">Continuous Improvement</h3>
                    <p>DRaaS service providers continually update their DRaaS offerings with the latest technologies and
                        best practices, ensuring your recovery strategy evolves with industry standards.</p>
                </div>
            </div>
        </div>
    </section>
    {{--  DRaaS cont ends --}}

    {{-- Why Choose Pi DRaaS cont starts --}}
    <section class="py-4">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Why Choose Pi DRaaS ? </h2>
                <p class="pt-3">When it comes to Disaster
                    Recovery as a Service (DRaaS), Pi DATACENTERS® offers unique, industry-leading features that set it
                    apart from other providers. Here’s why choosing Pi DRaaS can be a game-changer for your business: </p>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-5 py-8">
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]">TIER IV
                        Certified Hyperscale
                        Infrastructure
                    </h3>
                    <p>Pi DATACENTERS® operates India’s first
                        Greenfield
                        Uptime Institute TIER IV
                        Certified data center,
                        ensuring the highest levels of reliability, uptime, and redundancy. This certification ensures that
                        your disaster recovery solution is hosted in a state-of-the-art facility that minimizes the risk of
                        downtime during any event. </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]">100%
                        Automated, SCADA-Enabled
                        Data Centers
                    </h3>
                    <p>Pi's data centers are fully automated with Supervisory Control and Data Acquisition (SCADA) systems.
                        This unique feature allows for real-time monitoring and control over the infrastructure, ensuring
                        predictive and preventive measures for any impending issues, which enhances disaster recovery
                        responsiveness. </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]">
                        Self-Healing, AI-Powered
                        Infrastructure
                    </h3>
                    <p>Pi’s infrastructure is designed with AI-powered self-healing capabilities, meaning the system can
                        automatically detect potential failures and take corrective action without human intervention. This
                        intelligent system reduces recovery time and ensures smooth business continuity during disasters.
                    </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]">Global
                        Presence with Local
                        Expertise</h3>
                    <p>Pi provides global DRaaS coverage with cloud points of presence across multiple locations including
                        India (Vijayawada, Hyderabad, Kochi, Mumbai) and internationally (California, Pennsylvania). This
                        geographic redundancy ensures your critical data is always available, no matter where a disaster
                        occurs. </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]">
                        Comprehensive Cloud and DR
                        Integration
                    </h3>
                    <p>Pi’s DRaaS seamlessly integrates with its multi-cloud offerings, including AWS, Azure, GCP, and
                        Oracle Cloud. Whether you are operating in a hybrid environment or purely on the cloud, Pi ensures
                        that your disaster recovery solution is tailored to your specific architecture, enabling quick and
                        reliable recovery across platforms. </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]"> MeiTY
                        Empaneled &
                        Government-Ready
                        Solutions</h3>
                    <p>Pi is MeiTY-empaneled to offer disaster recovery solutions for government bodies, ensuring high
                        levels of compliance and security for public sector organizations. Pi provides public cloud,
                        government virtual private cloud, and government community cloud modalities, all certified for
                        handling sensitive data. </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]">
                        Pay-Per-Use,
                        Cost-Optimized
                        Solutions</h3>
                    <p>Pi offers a highly flexible pay-as-you-go model, ensuring that you only pay for the DR resources you
                        use. This cost-effective approach allows businesses to optimize their disaster recovery budgets
                        without compromising on performance or scalability. </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]">
                        Compliance
                        with Global Security
                        Standards
                    </h3>
                    <p>Pi DRaaS is fully compliant with the strictest international security standards including ISO 27001,
                        PCI-DSS, SOC2 Type I, HIPAA, ensuring that your data is always protected, no matter the industry you
                        operate in. Pi’s data localization policies further ensure that sensitive data remains within Indian
                        borders, aligning with national regulations. </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]">
                        Proactive
                        Monitoring and 24/7
                        Support</h3>
                    <p>Pi provides 24/7 proactive monitoring and support, ensuring that any potential issues are detected
                        early, and corrective actions are taken immediately. With dedicated support teams, Pi ensures your
                        business can recover from disruptions swiftly, minimizing downtime. </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]">
                        Customizable
                        DR Plans and
                        Testing </h3>
                    <p> With Pi, you can customize your disaster recovery plans according to your business needs. Regular DR
                        drills and testing are conducted to ensure your DR plan is effective and always up to date, giving
                        you peace of mind in the face of unforeseen disasters. </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]">Data
                        Sovereignty and
                        Localization</h3>
                    <p>Pi DRaaS supports data sovereignty by hosting your data within India’s borders, complying with
                        government regulations around data localization. This is crucial for industries with strict data
                        governance and compliance requirements. </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
                <div
                    class="shadow-[0px_0px_9px_rgba(0,0,0,0.5)] p-5 relative rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                    <span class="absolute top-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-br-3xl"></span>
                    <span class="absolute top-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-bl-3xl"></span>
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg py-1 lg:h-[4rem]">
                        End-to-End
                        Managed DR Services
                    </h3>
                    <p>Pi offers a complete end-to-end DR solution, managing everything from planning to execution and
                        recovery. With Pi’s DRaaS, businesses can leverage Pi’s expertise without the need to manage complex
                        recovery infrastructure, reducing the burden on in-house IT teams. </p>
                    <span class="absolute bottom-0 left-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tr-3xl"></span>
                    <span class="absolute bottom-0 right-0 content-['_'] w-4 h-4 bg-web-ascent-1 rounded-tl-3xl"></span>
                </div>
            </div>
            <p class="pt-3">Choose Pi DRaaS for a
                disaster recovery solution that combines Global Reach, High Performance, AI-driven
                Innovation, and Top-tier Security to ensure your business continuity. Powered by India's leading hyperscale
                data center, Pi guarantees that your critical operations remain protected, no matter the challenge. </p>

            <div class="py-3">
                <h2 class="font-bold lg:text-xl md:text-lg sm:text-lg">Don't Leave Your Business at Risk </h2>
                <p class="pt-3">Downtime can be
                    catastrophic for any business. Protect your operations with a disaster recovery solution
                    that guarantees peace of mind and business continuity. </p>

                <div class="py-4 space-x-3">
                    <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Get Started
                        Today!</a>
                </div>
                <p class="pt-3">Don't wait for disaster to strike.
                    Protect your business with our DRaaS solution today. <a href="{{ route('web.view.contact') }}"
                        target="_blank" class="text-web-ascent-1"><b>Contact Us
                            Now</b></a>
                    to schedule a free consultation and discover how we can safeguard your future. </p>
            </div>
        </div>
    </section>
    {{-- Why Choose Pi DRaaS cont ends --}}
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
