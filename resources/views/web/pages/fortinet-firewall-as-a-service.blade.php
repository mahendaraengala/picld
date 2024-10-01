@extends('web.layouts.app')

@section('web-head')
    <title>Palo Alto Firewall as a Service | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/firewall-balancer/new-fwaas-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">
                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white py-1">Firewall as a Service
                        </h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-8 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Firewall as a Service
                            (FWaaS) is a
                            cloud-based firewall solution that provides network security services to businesses without the
                            need for physical hardware. Instead of deploying and managing on-premises firewall appliances,
                            users can leverage FWaaS to secure their network traffic and applications in the cloud.</p>
                        <div
                            class="flex lg:justify-start md:justify-start sm:justify-center items-center lg:gap-2 md:gap-2 sm:gap-4 sm:flex-wrap">
                            <a href="{{ route('view.fortinet-firewall-as-a-service') }}#managed-services"><img
                                    src="{{ asset('web/images/firewall-balancer/fortinet.webp') }}"
                                    class="w-36 h-14 bg-white rounded-lg"></a>
                            <a href="{{ route('view.palo-alto-firewall-as-a-service') }}#managed-services"><img
                                    src="{{ asset('web/images/firewall-balancer/palo-alto-logo.webp') }}"
                                    class="w-36 h-14 bg-white rounded-lg"></a>
                            <a href="{{ route('web.view.contact') }}" class="bg-web-ascent-1 text-white rounded-lg p-[1rem]"
                                target="_blank">Reach Us</a>
                        </div>
                        {{-- <div class="pt-5 pb-5 space-x-3">
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- Intro Content Starts --}}
    <section class="pt-7" id="managed-services">
        <div class="container">
            <ul
                class="lg:flex md:flex sm:block justify-center items-center sm:text-center lg:space-x-5 md:space-x-5 border-b-4 border-black tabs-btns">
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-2 sm:w-[90%]">
                    <button>Palo Alto Firewall as a Service</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-0 sm:w-[90%] active">
                    <button>Fortinet Firewall as a Service</button>
                </li>
            </ul>

            {{-- tab 1 --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <p class="text-center"><b>Pi Cloud</b>
                    offers a
                    comprehensive Firewall as a Service (FWaaS) powered by Palo Alto Networks, a leader in cybersecurity.
                    This service provides advanced security features to protect your digital assets and ensure robust
                    defence against cyber threats. It is a cloud-based security solution that provides firewall
                    functionality. It enables customers to protect their networks from unauthorized access and cyber threats
                    while leveraging the scalability and flexibility of services.</p>

                {{-- Key Features starts --}}
                <div>
                    <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Key Features </h2>
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-5">
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/threat-protection.webp') }}"
                                alt="Pi cloud’s hybrid approach offers public cloud flexibility, private cloud security all under one view."
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Advanced Real Time Threat Protection</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Advanced Threat Detection to identify and mitigate potential threats in real time.
                            </li>
                            <li>Prevention of malware, ransomware, and phishing attacks.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/application-control.webp') }}"
                                alt="Pi cloud empowers workload diversification for flexibility and scalability."
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Application Control</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Detailed visibility and control over applications, users, and content.</li>
                            <li>Granular policies to manage and restrict application usage.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/prevention-system.webp') }}"
                                alt="Leveraging multi-region cloud capabilities enabling efficient workload execution across disparate locations."
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Intrusion Detection & Prevention System
                                (IPS/IDS)</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Proactive detection and prevention of network-based threats.</li>
                            <li>Signature-based and anomaly-based threat detection.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/filtering.webp') }}"
                                alt="Customers can independently provide, scale, and manage workloads, giving them complete control over resources."
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">URL Filtering</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Blocking of malicious websites and phishing sites.</li>
                            <li>Customizable URL filtering policies to control web access.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/vpn.webp') }}"
                                alt="Pi prioritizes cost optimization and competitive pricing, ensuring top value without compromising quality."
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Virtual Private Network (VPN)</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Secure remote access for employees through IPsec and SSL VPNs.</li>
                            <li>Ensuring data confidentiality and integrity over public networks.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/high-availability.webp') }}"
                                alt="Get the perfect cloud fit for your business, without overspending by cutting through cloud complexity"
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">High Availability</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Redundant infrastructure to ensure continuous security operations.</li>
                            <li>Automatic failover capabilities to minimize downtime.</li>
                        </ul>
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-5">
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/scalability.webp') }}"
                                alt="Get the perfect cloud fit for your business, without overspending by cutting through cloud complexity"
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Scalability</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Flexible scaling options to accommodate customers business growth.</li>
                            <li>Easily adjusts to the changing needs of an organization.</li>
                            <li>Pay-as-you-grow model to optimize costs.</li>
                            <li>Can handle varying amounts of traffic without performance degradation.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/management.webp') }}"
                                alt="Get the perfect cloud fit for your business, without overspending by cutting through cloud complexity"
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Centralized Management</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Unified management console for streamlined security operations.</li>
                            <li>Simplified policy management and reporting.</li>
                            <li>It operates in the cloud, allowing for remote management and monitoring.</li>
                            <li>Eliminates the need for on-premises hardware firewall.</li>
                        </ul>
                    </div>
                </div>
                {{-- Key Features Ends --}}

                {{-- benefits starts --}}
                <div>
                    <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Benefits </h2>
                </div>
                <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-4 pt-2 pb-5">
                    <div class="shadow-[0px_0px_10px_rgba(0,0,0,0.5)] rounded-lg group">
                        <h3
                            class="bg-web-ascent-1 font-bold text-lg text-center text-white rounded-tl-lg rounded-tr-lg py-2 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            Enhanced Security</h3>
                        <p
                            class="p-3 group-hover:bg-web-ascent-1 group-hover:text-white lg:min-h-[10rem] md:min-h-0 sm:min-h-0 group-hover:rounded-bl-lg group-hover:rounded-br-lg text-center">
                            Protects against
                            sophisticated
                            cyber threats, ensuring sensitive data and network
                            security.</p>
                    </div>
                    <div class="shadow-[0px_0px_10px_rgba(0,0,0,0.5)] rounded-lg group">
                        <h3
                            class="bg-web-ascent-1 font-bold text-lg text-center text-white rounded-tl-lg rounded-tr-lg py-2 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            Operational Efficiency</h3>
                        <p
                            class="p-3 group-hover:bg-web-ascent-1 group-hover:text-white lg:min-h-[10rem] md:min-h-0 sm:min-h-0 group-hover:rounded-bl-lg group-hover:rounded-br-lg text-center">
                            Minimizes the
                            operational burden
                            on IT teams by automating many security
                            processes.</p>
                    </div>
                    <div class="shadow-[0px_0px_10px_rgba(0,0,0,0.5)] rounded-lg group">
                        <h3
                            class="bg-web-ascent-1 font-bold text-lg text-center text-white rounded-tl-lg rounded-tr-lg py-2 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            Flexibility</h3>
                        <p
                            class="p-3 group-hover:bg-web-ascent-1 group-hover:text-white lg:min-h-[10rem] md:min-h-0 sm:min-h-0 group-hover:rounded-bl-lg group-hover:rounded-br-lg text-center">
                            Adapts to various
                            business sizes
                            and needs, making it suitable for both small
                            businesses and
                            large enterprises.</p>
                    </div>
                    <div class="shadow-[0px_0px_10px_rgba(0,0,0,0.5)] rounded-lg group">
                        <h3
                            class="bg-web-ascent-1 font-bold text-lg text-center text-white rounded-tl-lg rounded-tr-lg py-2 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            Cost-Effective</h3>
                        <p
                            class="p-3 group-hover:bg-web-ascent-1 group-hover:text-white lg:min-h-[10rem] md:min-h-0 sm:min-h-0 group-hover:rounded-bl-lg group-hover:rounded-br-lg text-center">
                            Reduces significant
                            upfront
                            capital expenditure to customers on physical hardware
                            and yearly
                            maintenance.</p>
                    </div>
                    <div class="shadow-[0px_0px_10px_rgba(0,0,0,0.5)] rounded-lg group">
                        <h3
                            class="bg-web-ascent-1 font-bold text-lg text-center text-white rounded-tl-lg rounded-tr-lg py-2 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            Compliance</h3>
                        <p
                            class="p-3 group-hover:bg-web-ascent-1 group-hover:text-white lg:min-h-[10rem] md:min-h-0 sm:min-h-0 group-hover:rounded-bl-lg group-hover:rounded-br-lg text-center">
                            Helps meet
                            regulatory
                            requirements
                            and industry standards for data protection.</p>
                    </div>
                </div>
                {{-- benefits ends --}}

                {{-- get started cont starts --}}
                <section class="pt-2 pb-12">
                    <div class="container">
                        <div class="space-x-3 text-center">
                            <a href="{{ route('web.view.contact') }}"
                                class="btn-primary-md lg:leading-none md:leading-none sm:leading-[3.5rem]"
                                target="_blank">Get
                                Started</a>
                        </div>
                        <div class="pt-8">
                            <p class="pb-2">
                                FWaaS is an effective, scalable, and cost-efficient solution for
                                organizations looking
                                to enhance their network security without the complexities of traditional firewall
                                management. By
                                leveraging the power of the cloud based solution, businesses can protect their assets from
                                evolving
                                cyber threats while focusing on their core business operations. </p>
                            <p class="pb-2">
                                Contact Pi Cloud to learn
                                more about how
                                Palo Alto Firewall as a Service can enhance your organization's security posture. Our team
                                of experts is
                                ready to assist you in customizing a solution that meets your specific needs.</p>
                        </div>
                    </div>
                </section>
                {{-- get started cont ends --}}
            </div>
            {{-- tab 1 Ends --}}


            {{-- tab 2 starts --}}
            <div class="space-y-5 py-4 tabs-content">
                <div class="py-2">
                    <p class="text-center"><b>Pi
                            Cloud</b> offers a robust fortinet Firewall as a Service (FWaaS) powered by Fortinet, a leading
                        network security product. This cloud-based solution delivers comprehensive network security,
                        safeguarding your digital assets from a wide range of cyber threats.</p>
                </div>

                {{-- Key Features starts --}}
                <div>
                    <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Key Features </h2>
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-5">
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/threat-protection.webp') }}"
                                alt="Pi cloud’s hybrid approach offers public cloud flexibility, private cloud security all under one view."
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Advanced Threat Protection</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Advanced threat detection and prevention to combat sophisticated attacks.</li>
                            <li>Real-time protection against malware, ransomware, and zero-day exploits.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/application-control.webp') }}"
                                alt="Pi cloud empowers workload diversification for flexibility and scalability."
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Application Control</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Granular visibility and control over applications, users, and content.</li>
                            <li>Enforce security policies to protect sensitive data.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/prevention-system.webp') }}"
                                alt="Leveraging multi-region cloud capabilities enabling efficient workload execution across disparate locations."
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Intrusion Detection and Prevention System (IDS/IPS)
                            </h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Proactive detection and blocking of network-based attacks.</li>
                            <li>Protects against a variety of threats, including exploits and vulnerabilities.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/filtering.webp') }}"
                                alt="Customers can independently provide, scale, and manage workloads, giving them complete control over resources."
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Web Filtering</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Prevents access to malicious websites and phishing attempts.</li>
                            <li>Enhances user productivity and reduces security risks.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/vpn.webp') }}"
                                alt="Pi prioritizes cost optimization and competitive pricing, ensuring top value without compromising quality."
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Virtual Private Network (VPN)</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Secure remote access for employees with robust encryption.</li>
                            <li>Protects sensitive data while enabling remote work.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/high-availability.webp') }}"
                                alt="Get the perfect cloud fit for your business, without overspending by cutting through cloud complexity"
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">High Availability</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Redundant systems and failover mechanisms for uninterrupted protection.</li>
                            <li>Ensures business continuity and minimal downtime.</li>
                        </ul>
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-5">
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/scalability.webp') }}"
                                alt="Get the perfect cloud fit for your business, without overspending by cutting through cloud complexity"
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Scalability</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Easily adapt to changing network needs and traffic volumes.</li>
                            <li>Flexible pricing models to optimize costs.</li>
                        </ul>
                    </div>
                    <div
                        class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer embrace">
                        <div class="flex justify-center items-center py-3">
                            <img src="{{ asset('web/images/firewall-balancer/management.webp') }}"
                                alt="Get the perfect cloud fit for your business, without overspending by cutting through cloud complexity"
                                class="w-16 h-16 mr-2">
                            <h3 class="font-bold text-xl text-center">Centralized Management</h3>
                        </div>
                        <ul class="list-disc pl-7">
                            <li>Simplified management and monitoring through a centralized console.</li>
                            <li>Streamlined security operations and policy enforcement.</li>
                        </ul>
                    </div>
                </div>
                {{-- Key Features Ends --}}

                {{-- benefits starts --}}
                <div>
                    <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Benefits </h2>
                </div>
                <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-4 pt-2 pb-5">
                    <div class="shadow-[0px_0px_10px_rgba(0,0,0,0.5)] rounded-lg group">
                        <h3
                            class="bg-web-ascent-1 font-bold text-lg text-center text-white rounded-tl-lg rounded-tr-lg py-2 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            Enhanced Security</h3>
                        <p
                            class="p-3 group-hover:bg-web-ascent-1 group-hover:text-white lg:min-h-[9rem] md:min-h-0 sm:min-h-0 group-hover:rounded-bl-lg group-hover:rounded-br-lg text-center">
                            Strong in intrusion prevention. Protects against advanced threats and data breaches.</p>
                    </div>
                    <div class="shadow-[0px_0px_10px_rgba(0,0,0,0.5)] rounded-lg group">
                        <h3
                            class="bg-web-ascent-1 font-bold text-lg text-center text-white rounded-tl-lg rounded-tr-lg py-2 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            High Performance</h3>
                        <p
                            class="p-3 group-hover:bg-web-ascent-1 group-hover:text-white lg:min-h-[9rem] md:min-h-0 sm:min-h-0 group-hover:rounded-bl-lg group-hover:rounded-br-lg text-center">
                            Optimizes network performance with advanced traffic management.</p>
                    </div>
                    <div class="shadow-[0px_0px_10px_rgba(0,0,0,0.5)] rounded-lg group">
                        <h3
                            class="bg-web-ascent-1 font-bold text-lg text-center text-white rounded-tl-lg rounded-tr-lg py-2 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            Cost-Effective</h3>
                        <p
                            class="p-3 group-hover:bg-web-ascent-1 group-hover:text-white lg:min-h-[9rem] md:min-h-0 sm:min-h-0 group-hover:rounded-bl-lg group-hover:rounded-br-lg text-center">
                            Eliminates your upfront hardware costs (CAPEX) and also reduces operational expenses.</p>
                    </div>
                    <div class="shadow-[0px_0px_10px_rgba(0,0,0,0.5)] rounded-lg group">
                        <h3
                            class="bg-web-ascent-1 font-bold text-lg text-center text-white rounded-tl-lg rounded-tr-lg py-2 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            Simplified Management</h3>
                        <p
                            class="p-3 group-hover:bg-web-ascent-1 group-hover:text-white lg:min-h-[9rem] md:min-h-0 sm:min-h-0 group-hover:rounded-bl-lg group-hover:rounded-br-lg text-center">
                            Centralized control for efficient security operations.</p>
                    </div>
                    <div class="shadow-[0px_0px_10px_rgba(0,0,0,0.5)] rounded-lg group">
                        <h3
                            class="bg-web-ascent-1 font-bold text-lg text-center text-white rounded-tl-lg rounded-tr-lg py-2 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            Business Continuity</h3>
                        <p
                            class="p-3 group-hover:bg-web-ascent-1 group-hover:text-white lg:min-h-[9rem] md:min-h-0 sm:min-h-0 group-hover:rounded-bl-lg group-hover:rounded-br-lg text-center">
                            Ensures uninterrupted network access and protection and comprehensive feature set.</p>
                    </div>
                </div>
                {{-- benefits ends --}}

                {{-- get started cont starts --}}
                <section class="pt-2 pb-12">
                    <div class="container">
                        <div class="space-x-3 text-center">
                            <a href="{{ route('web.view.contact') }}"
                                class="btn-primary-md lg:leading-none md:leading-none sm:leading-[3.5rem]"
                                target="_blank">Get Started</a>
                        </div>
                        <div class="pt-8">
                            <p class="pb-2">
                                Fortinet Firewall as a Service (FWaaS) is an ideal solution for
                                organizations seeking robust, scalable, and cost-effective network security for
                                organizations looking to enhance their network security without the complexities of
                                traditional firewall management. By leveraging the power of the cloud based solution,
                                businesses can protect their assets and data from evolving cyber threats while focusing on
                                their core business operations.</p>
                            <p class="pb-2">
                                Contact Pi Cloud to learn how our fortinet FWaaS can
                                strengthen your organization's security posture. Our team of network experts is ready to
                                assist you in customizing a solution that meets your specific security requirements and
                                organization preferences. Pi Cloud service offering can help you assess your business needs
                                and recommend the most suitable solution.</p>
                        </div>
                    </div>
                </section>
                {{-- get started cont ends --}}

            </div>
            {{-- tab 2 Ends --}}
        </div>
    </section>
    {{-- Intro Content Ends --}}
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
            $('.tabs-content:first').hide();
            $('.tabs-btns li:nth-child(2)').addClass('active');
            $('.tabs-btns li').click(function(event) {
                index = $(this).index();
                $('.tabs-btns li').removeClass('active');
                $(this).addClass('active')
                $('.tabs-content').hide();
                $('.tabs-content').eq(index).show();
            });
        });

        window.addEventListener('hashchange', _ => {
            history.replaceState(null, "", location.href.replace('#managed-services', ''));
        });
    </script>
@endsection
