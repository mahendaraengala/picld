@extends('web.layouts.app')

@section('web-head')
    <title>Firewall as a Service | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="bg-cover bg-center bg-no-repeat"
        style="background-image: linear-gradient(to right, rgba(4, 9, 30, 0.95) 12%, rgba(4, 9, 30, 0.2) 60%) ,url('/web/images/firewall-balancer/firewall-banner.webp');">
        <div class="px-10 py-20">

            <div class="pt-32 pb-12 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white py-1 px-2">Firewall as a Service
                        </h1>
                        <p class="text-gray-300 leading-loose font-medium px-2">Firewall as a Service (FWaaS) is a
                            cloud-based firewall solution that provides network security services to businesses without the
                            need for physical hardware. Instead of deploying and managing on-premises firewall appliances,
                            users can leverage FWaaS to secure their network traffic and applications in the cloud.</p>
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
    <section class="pt-7">
        <div class="container bg-[#223f970a] p-5 rounded-xl">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Technology Partners</h2>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 mt-10 p-2 lg:gap-0 md:gap-8 sm:gap-5">
                <div
                    class="bg-white shadow-[4px_4px_3px_rgba(0,0,0,0.5)] flex justify-center items-center p-2 lg:w-64 md:w-52 sm:w-64 mx-auto my-0 rounded-lg">
                    <img src="{{ asset('web/images/firewall-balancer/fortinet.webp') }}"
                        alt="Delivering secure & scalable networking solutions across cloud, on-premises, and hybrid environments."
                        class="w-44 rounded-xl">
                </div>
                <div
                    class="bg-white shadow-[4px_4px_3px_rgba(0,0,0,0.5)] flex justify-center items-center p-2 lg:w-64 md:w-52 sm:w-64 mx-auto my-0 rounded-lg">
                    <img src="{{ asset('web/images/cloud-and-sap/l-8.webp') }}"
                        alt="Industry leader in cybersecurity, offering next-generation firewalls, cloud security, & endpoint protection."
                        class="w-44 rounded-xl">
                </div>
                <div
                    class="bg-white shadow-[4px_4px_3px_rgba(0,0,0,0.5)] flex justify-center items-center p-2 lg:w-64 md:w-52 sm:w-64 mx-auto my-0 rounded-lg">
                    <img src="{{ asset('web/images/cloud-and-sap/l-2.webp') }}"
                        alt="Tech giant providing a vast range of hardware, software, and IT services, from PCs to enterprise solutions."
                        class="w-44 rounded-xl">
                </div>
            </div>
        </div>
    </section>
    {{-- Technology partners ends --}}

    {{-- FWaaS offerings starts --}}
    <section class="lg:py-3 md:py-3 sm:py-5">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Pi FWaaS offerings
                    include:</h2>
            </div>

            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4 pt-7">
                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Firewall Protection</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">Stateful
                                Packet Inspection (SPI): Examines the state of active connections to make decisions about
                                the legitimacy of packets based on the context of the traffic.</span> </li>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">
                                Proxy-based Filtering: Acts as an intermediary between users and the internet, inspecting
                                and filtering traffic at the application layer.</span></li>
                    </ul>
                </div>
                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Intrusion Prevention System (IPS)</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span
                                class="pl-4">Signature-based Detection: Identifies known patterns or signatures
                                associated with known threats.</span></li>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span
                                class="pl-4">Behavioral Analysis: Analyzes the behavior of network traffic to detect
                                anomalies that may indicate new or unknown threats.</span></li>
                    </ul>
                </div>

                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Virtual Private Network (VPN) Services</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span
                                class="pl-4">Site-to-Site VPN: Securely connects different physical locations or cloud
                                environments.</span>
                        </li>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">Remote
                                Access VPN: Provides secure access for remote users connecting to the
                                corporate network.</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Web Security</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">URL
                                Filtering: Blocks or allows access to specific websites based on predefined policies.</span>
                        </li>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">Content
                                Filtering: Filters web content based on categories or criteria to
                                prevent access to inappropriate or malicious content.</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Secure Web Gateway (SWG)</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">
                                Protection Against Web Threats: Guards against web-based threats such as malware, phishing,
                                and other malicious activities.</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Application Control</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span
                                class="pl-4">Identification and Control: Identifies and controls the use of specific
                                applications or application categories on the network.</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Distributed Denial of Service (DDoS) Protection</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">Traffic
                                Scrubbing: Mitigates DDoS attacks by filtering and scrubbing
                                malicious traffic before it reaches the target network.</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Logging and Monitoring</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span
                                class="pl-4">Real-time Monitoring: Provides real-time visibility into network traffic,
                                security events, and anomalies.</span>
                        </li>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">Logging
                                and Reporting: Generates logs and reports for compliance, auditing,
                                and analysis purposes.</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Identity-Based Access Control</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">User
                                Authentication: Enforces access controls based on user identity, ensuring that only
                                authorized users can access specific resources.</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Policy Management</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">
                                Centralized Policy Configuration: Allows administrators to define and enforce security
                                policies across the entire network through a centralized management interface.</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Scalability and Load Balancing</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span
                                class="pl-4">Scalable Architecture: Enables the solution to scale dynamically to
                                accommodate changes in network traffic.</span>
                        </li>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">Load
                                Balancing: Distributes network traffic across multiple servers or resources to optimize
                                performance and reliability.</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="p-5 bg-gradient-to-l from-gray-400 to-gray-200 hover:bg-gradient-to-r rounded-lg flex justify-center flex-col items-center">
                    <h3 class="font-bold text-xl text-center">Compliance Features</h3>
                    <ul>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span class="pl-4">Audit
                                Trails: Maintains detailed logs of network activities for compliance purposes.</span>
                        </li>
                        <li class="py-2 flex text-gray-800 leading-relaxed font-medium"><img
                                src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span
                                class="pl-4">Regulatory Compliance: Helps organizations adhere to industry-specific or
                                regional regulatory requirements.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- FWaaS offerings ends --}}

    {{-- what FWaaS as a Service brings starts --}}
    <section class="lg:pt-3 lg:pb-3 md:pt-4 md:pb-1 sm:py-6">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">What Firewall as a Service Brings To
                    You</h2>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-1 gap-5 pt-8 text-center">
                <div class="border-2 border-[#00000017] p-5 rounded-tr-[50px] rounded-bl-[50px] hover:border-web-ascent-1">
                    <img src="{{ asset('web/images/firewall-balancer/cloud.webp') }}"
                        alt="Managed firewall service eliminates hardware, accessed via internet."
                        class="w-16 h-16 my-0 mx-auto">
                    <h3 class="font-bold text-xl text-center py-3">Cloud-based Security</h3>
                    <p>FWaaS is hosted and managed in the cloud by a third-party provider. Users access the firewall
                        services over the internet, eliminating the need for physical infrastructure.</p>
                </div>
                <div class="border-2 border-[#00000017] p-5 rounded-tr-[50px] rounded-bl-[50px] hover:border-web-ascent-1">
                    <img src="{{ asset('web/images/firewall-balancer/scalable.webp') }}"
                        alt="FWaaS adapts to your network traffic fluctuations for seamless protection."
                        class="w-16 h-16 my-0 mx-auto">
                    <h3 class="font-bold text-xl text-center py-3">Scalability</h3>
                    <p>FWaaS is designed to be scalable, allowing users to easily adjust the level of security based on
                        their needs. As network traffic fluctuates, the service can dynamically adapt to handle varying
                        workloads.</p>
                </div>
                <div class="border-2 border-[#00000017] p-5 rounded-tr-[50px] rounded-bl-[50px] hover:border-web-ascent-1">
                    <img src="{{ asset('web/images/firewall-balancer/central.webp') }}"
                        alt="Easy policy control through a web interface for consistent network security."
                        class="w-16 h-16 my-0 mx-auto">
                    <h3 class="font-bold text-xl text-center py-3">Centralized Management</h3>
                    <p>Users can typically manage and configure firewall policies through a centralized web-based interface.
                        This simplifies the administration of security rules and allows for consistent policy enforcement
                        across the entire network.</p>
                </div>
                <div class="border-2 border-[#00000017] p-5 rounded-tr-[50px] rounded-bl-[50px] hover:border-web-ascent-1">
                    <img src="{{ asset('web/images/firewall-balancer/multi.webp') }}"
                        alt="Securely share FWaaS infrastructure with isolated environments for different teams/organizations."
                        class="w-16 h-16 my-0 mx-auto">
                    <h3 class="font-bold text-xl text-center py-3">Multi-Tenancy</h3>
                    <p>FWaaS providers often support multi-tenancy, enabling different organizations or departments to use
                        the same infrastructure while maintaining isolation and security for each tenant.</p>
                </div>
                <div class="border-2 border-[#00000017] p-5 rounded-tr-[50px] rounded-bl-[50px] hover:border-web-ascent-1">
                    <img src="{{ asset('web/images/firewall-balancer/threat.webp') }}"
                        alt="FWaaS leverages threat intelligence and updates to stay ahead of threats."
                        class="w-16 h-16 my-0 mx-auto">
                    <h3 class="font-bold text-xl text-center py-3">Threat Intelligence and Updates</h3>
                    <p>FWaaS providers frequently update their security protocols to defend against emerging threats. They
                        may incorporate threat intelligence feeds, machine learning, and other advanced techniques to
                        enhance security.</p>
                </div>
                <div class="border-2 border-[#00000017] p-5 rounded-tr-[50px] rounded-bl-[50px] hover:border-web-ascent-1">
                    <img src="{{ asset('web/images/firewall-balancer/remote.webp') }}"
                        alt="FWaaS ensures secure connections for users accessing your network from anywhere."
                        class="w-16 h-16 my-0 mx-auto">
                    <h3 class="font-bold text-xl text-center py-3">Remote Access Security</h3>
                    <p>Many FWaaS solutions provide secure remote access capabilities, ensuring that users connecting to the
                        network from different locations can do so in a secure manner.</p>
                </div>
                <div class="border-2 border-[#00000017] p-5 rounded-tr-[50px] rounded-bl-[50px] hover:border-web-ascent-1">
                    <img src="{{ asset('web/images/firewall-balancer/report.webp') }}"
                        alt="Track activity, identify threats, and generate reports for compliance with FWaaS monitoring."
                        class="w-16 h-16 my-0 mx-auto">
                    <h3 class="font-bold text-xl text-center py-3">Monitoring and Reporting</h3>
                    <p>FWaaS typically includes monitoring and reporting features, allowing users to track network activity,
                        identify potential security incidents, and generate reports for compliance and auditing purposes.
                    </p>
                </div>
                <div class="border-2 border-[#00000017] p-5 rounded-tr-[50px] rounded-bl-[50px] hover:border-web-ascent-1">
                    <img src="{{ asset('web/images/firewall-balancer/integration.webp') }}"
                        alt="FWaaS integrates smoothly with other cloud services for a unified security approach."
                        class="w-16 h-16 my-0 mx-auto">
                    <h3 class="font-bold text-xl text-center py-3">Integration with Cloud Services</h3>
                    <p>FWaaS is often designed to integrate seamlessly with other cloud services and platforms. This is
                        especially beneficial for organizations with a significant presence in cloud environments.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- what FWaaS as a Service brings ends --}}

    {{-- businesses should take FWaaS starts --}}
    {{-- <section class="lg:py-3 md:py-3 sm:py-7">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-xl text-center pb-1">Why Businesses Should Take
                    Firewall as
                    a Service (FWaaS)</h2>
            </div>

            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 px-3 py-1 lg:gap-0 md:gap-0 sm:gap-5 lg:mt-4 md:mt-4 sm:mt-0">
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/ease-of-management.webp') }}"
                        class="lg:w-3/5 md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#0000000f] p-5 rounded-sm flex justify-center items-center flex-col rounded-tl-[40px] rounded-bl-[40px]">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Ease of Management</h3>
                        <p class="py-1 font-medium"><b>Centralized Control: </b> FWaaS typically provides a centralized
                            management
                            interface, making it
                            easier to configure and enforce security policies across the entire network.</p>
                        <p class="py-1 font-medium"><b>Automated Updates: </b> Security updates and patches are often
                            handled
                            by
                            the
                            FWaaS
                            provider,
                            ensuring that your firewall remains up-to-date with the latest threat intelligence.</p>
                    </div>
                </div>
            </div>

            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 px-3 py-1 lg:gap-0 md:gap-0 sm:gap-5 lg:mt-4 md:mt-4 sm:mt-0">
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#0000000f] p-5 rounded-sm flex justify-center items-center flex-col rounded-tr-[40px] rounded-br-[40px]">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Flexibility and Agility
                        </h3>
                        <p class="py-1 font-medium"><b>Adaptability to Changing Environments: </b> FWaaS is well-suited for
                            dynamic
                            and
                            cloud-centric environments, providing flexibility as your organization's infrastructure evolves.
                        </p>
                        <p class="py-1 font-medium"><b>Remote Access Security: </b> Many FWaaS solutions offer secure
                            remote
                            access
                            capabilities, facilitating a mobile and remote workforce.</p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/flexibility-and-agility.webp') }}"
                        class="lg:w-3/5 md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
            </div>

            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 px-3 py-1 lg:gap-0 md:gap-0 sm:gap-5 lg:mt-4 md:mt-4 sm:mt-0">
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/scalability-and-performance.webp') }}"
                        class="lg:w-3/5 md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#0000000f] p-5 rounded-sm flex justify-center items-center flex-col rounded-tl-[40px] rounded-bl-[40px]">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Scalability and
                            Performance
                        </h3>
                        <p class="py-1 font-medium"><b>Dynamic Scalability: </b> FWaaS is designed to scale dynamically to
                            accommodate
                            varying workloads, ensuring optimal performance during peak usage.</p>
                        <p class="py-1 font-medium"><b>Global Reach: </b> Some FWaaS providers have a global presence,
                            allowing
                            for
                            consistent security enforcement across geographically dispersed locations.</p>
                    </div>
                </div>
            </div>

            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 px-3 py-1 lg:gap-0 md:gap-0 sm:gap-5 lg:mt-4 md:mt-4 sm:mt-0">
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#0000000f] p-5 rounded-sm flex justify-center items-center flex-col rounded-tr-[40px] rounded-br-[40px]">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Security Effectiveness
                        </h3>
                        <p class="py-1 font-medium"><b>Advanced Threat Protection: </b> FWaaS often integrates advanced
                            security
                            features,
                            such as intrusion detection and prevention, threat intelligence, and malware detection,
                            providing
                            robust protection against evolving cyber threats.</p>
                        <p class="py-1 font-medium"><b>Real-time Monitoring: </b> The service typically includes real-time
                            monitoring and
                            reporting, allowing organizations to identify and respond to security incidents promptly.</p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/security-effectiveness.webp') }}"
                        class="lg:w-3/5 md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
            </div>

            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 px-3 py-1 lg:gap-0 md:gap-0 sm:gap-5 lg:mt-4 md:mt-4 sm:mt-0">
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/compliance-and-reporting.webp') }}"
                        class="lg:w-3/5 md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#0000000f] p-5 rounded-sm flex justify-center items-center flex-col rounded-tl-[40px] rounded-bl-[40px]">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Compliance and
                            Reporting
                        </h3>
                        <p class="py-1 font-medium"><b>Audit Trails and Reporting: </b> FWaaS can generate detailed logs
                            and
                            reports,
                            aiding in compliance efforts and providing valuable information for audits.</p>
                        <p class="py-1 font-medium"><b>Consistent Policy Enforcement: </b> Ensures that security policies
                            are
                            consistently
                            applied across the entire network, helping to meet regulatory requirements.</p>
                    </div>
                </div>
            </div>

            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 px-3 py-1 lg:gap-0 md:gap-0 sm:gap-5 lg:mt-4 md:mt-4 sm:mt-0">
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#0000000f] p-5 rounded-sm flex justify-center items-center flex-col rounded-tr-[40px] rounded-br-[40px]">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Integration with Cloud
                            Services</h3>
                        <p class="py-1 font-medium"><b>Seamless Cloud Integration: </b> FWaaS is often designed to
                            integrate
                            with
                            various
                            cloud services and platforms, supporting organizations with a significant presence in the cloud.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/integration-with-cloud-services.webp') }}"
                        class="lg:w-3/5 md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
            </div>

            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 px-3 py-1 lg:gap-0 md:gap-0 sm:gap-5 lg:mt-4 md:mt-4 sm:mt-0">
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/focus-on-core-competencies.webp') }}"
                        class="lg:w-3/5 md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#0000000f] p-5 rounded-sm flex justify-center items-center flex-col rounded-tl-[40px] rounded-bl-[40px]">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Focus on Core
                            Competencies
                        </h3>
                        <p class="py-1 font-medium"><b>Outsourced Security Management: </b> By leveraging FWaaS,
                            organizations
                            can
                            offload
                            the management of security infrastructure to experts, allowing internal teams to focus on core
                            business activities.</p>
                    </div>
                </div>
            </div>

            <div
                class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 px-3 py-1 lg:gap-0 md:gap-0 sm:gap-5 lg:mt-4 md:mt-4 sm:mt-0">
                <div class="flex justify-center items-center">
                    <div
                        class="bg-[#0000000f] p-5 rounded-sm flex justify-center items-center flex-col rounded-tr-[40px] rounded-br-[40px]">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Cost Efficiency</h3>
                        <p class="py-1 font-medium"><b>No Physical Hardware Costs: </b> FWaaS eliminates the need for
                            purchasing,
                            installing, and maintaining physical firewall appliances, reducing upfront capital expenditures.
                        </p>
                        <p class="py-1 font-medium"><b>Scalability: </b> Pay-as-you-go models allow for cost scaling based
                            on
                            your
                            organization's actual
                            usage, avoiding overprovisioning.</p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('web/images/firewall-balancer/cost-efficiency.webp') }}"
                        class="lg:w-3/5 md:w-11/12 sm:w-full h-full my-0 mx-auto rounded-xl">
                </div>
            </div>
        </div>
    </section> --}}
    {{-- businesses should take FWaaS ends --}}

    {{-- --}}
    <section class="py-6">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-xl text-center pb-1">Why Businesses Should Take
                    Firewall as
                    a Service (FWaaS)</h2>
            </div>
            <div
                class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 px-3 py-1 lg:gap-8 md:gap-8 sm:gap-5 lg:mt-4 md:mt-4 sm:mt-0">
                <div
                    class="group relative before:absolute before:content-['_'] lg:before:w-full lg:before:h-80 md:before:w-full md:before:h-72 sm:before:w-full sm:before:h-96 before:bg-web-ascent-1 before:-z-[1]">
                    <div
                        class="group-hover:bg-white bg-gray-200 p-5 flex items-center flex-col rounded-xl my-0 group-hover:translate-x-3 transition-all duration-700 group-hover:shadow-xl translate-x-0 lg:w-full lg:h-80 md:w-full md:h-72 sm:w-full sm:h-96">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Ease of Management
                        </h3>
                        <p class="py-1 font-medium"><b>Centralized Control: </b> FWaaS typically provides a centralized
                            management
                            interface, making it
                            easier to configure and enforce security policies across the entire network.</p>
                        <p class="py-1 font-medium"><b>Automated Updates: </b> Security updates and patches are often
                            handled
                            by
                            the
                            FWaaS
                            provider,
                            ensuring that your firewall remains up-to-date with the latest threat intelligence.</p>
                    </div>
                </div>



                <div
                    class="group relative before:absolute before:content-['_'] lg:before:w-full lg:before:h-80 md:before:w-full md:before:h-72 sm:before:w-full sm:before:h-96 before:bg-web-ascent-1 before:-z-[1]">
                    <div
                        class="group-hover:bg-white bg-gray-200 p-5 flex items-center flex-col rounded-xl my-0 group-hover:translate-x-3 transition-all duration-700 group-hover:shadow-xl translate-x-0 lg:w-full lg:h-80 md:w-full md:h-72 sm:w-full sm:h-96">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Flexibility and Agility
                        </h3>
                        <p class="py-1 font-medium"><b>Adaptability to Changing Environments: </b> FWaaS is well-suited for
                            dynamic
                            and
                            cloud-centric environments, providing flexibility as your organization's infrastructure evolves.
                        </p>
                        <p class="py-1 font-medium"><b>Remote Access Security: </b> Many FWaaS solutions offer secure
                            remote
                            access
                            capabilities, facilitating a mobile and remote workforce.</p>
                    </div>
                </div>
                <div
                    class="group relative before:absolute before:content-['_'] lg:before:w-full lg:before:h-80 md:before:w-full md:before:h-72 sm:before:w-full sm:before:h-96 before:bg-web-ascent-1 before:-z-[1]">
                    <div
                        class="group-hover:bg-white bg-gray-200 p-5 flex items-center flex-col rounded-xl my-0 group-hover:translate-x-3 transition-all duration-700 group-hover:shadow-xl translate-x-0 lg:w-full lg:h-80 md:w-full md:h-72 sm:w-full sm:h-96">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Scalability and
                            Performance
                        </h3>
                        <p class="py-1 font-medium"><b>Dynamic Scalability: </b> FWaaS is designed to scale
                            dynamically to
                            accommodate
                            varying workloads, ensuring optimal performance during peak usage.</p>
                        <p class="py-1 font-medium"><b>Global Reach: </b> Some FWaaS providers have a global
                            presence,
                            allowing
                            for
                            consistent security enforcement across geographically dispersed locations.</p>
                    </div>
                </div>
                <div
                    class="group relative before:absolute before:content-['_'] lg:before:w-full lg:before:h-80 md:before:w-full md:before:h-72 sm:before:w-full sm:before:h-96 before:bg-web-ascent-1 before:-z-[1]">
                    <div
                        class="group-hover:bg-white bg-gray-200 p-5 flex items-center flex-col rounded-xl my-0 group-hover:translate-x-3 transition-all duration-700 group-hover:shadow-xl translate-x-0 lg:w-full lg:h-80 md:w-full md:h-72 sm:w-full sm:h-96">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Security
                            Effectiveness
                        </h3>
                        <p class="py-1 font-medium"><b>Advanced Threat Protection: </b> FWaaS often integrates
                            advanced
                            security
                            features,
                            such as intrusion detection and prevention, threat intelligence, and malware detection,
                            providing
                            robust protection against evolving cyber threats.</p>
                        <p class="py-1 font-medium"><b>Real-time Monitoring: </b> The service typically includes
                            real-time
                            monitoring and
                            reporting, allowing organizations to identify and respond to security incidents
                            promptly.</p>
                    </div>
                </div>
                <div
                    class="group relative before:absolute before:content-['_'] lg:before:w-full lg:before:h-80 md:before:w-full md:before:h-72 sm:before:w-full sm:before:h-96 before:bg-web-ascent-1 before:-z-[1]">
                    <div
                        class="group-hover:bg-white bg-gray-200 p-5 flex items-center flex-col rounded-xl my-0 group-hover:translate-x-3 transition-all duration-700 group-hover:shadow-xl translate-x-0 lg:w-full lg:h-80 md:w-full md:h-72 sm:w-full sm:h-96">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Compliance and
                            Reporting
                        </h3>
                        <p class="py-1 font-medium"><b>Audit Trails and Reporting: </b> FWaaS can generate detailed
                            logs
                            and
                            reports,
                            aiding in compliance efforts and providing valuable information for audits.</p>
                        <p class="py-1 font-medium"><b>Consistent Policy Enforcement: </b> Ensures that security
                            policies
                            are
                            consistently
                            applied across the entire network, helping to meet regulatory requirements.</p>
                    </div>
                </div>
                <div
                    class="group relative before:absolute before:content-['_'] lg:before:w-full lg:before:h-80 md:before:w-full md:before:h-72 sm:before:w-full sm:before:h-96 before:bg-web-ascent-1 before:-z-[1]">
                    <div
                        class="group-hover:bg-white bg-gray-200 p-5 flex items-center flex-col rounded-xl my-0 group-hover:translate-x-3 transition-all duration-700 group-hover:shadow-xl translate-x-0 lg:w-full lg:h-80 md:w-full md:h-72 sm:w-full sm:h-96">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Integration
                            with Cloud
                            Services</h3>
                        <p class="py-1 font-medium"><b>Seamless Cloud Integration: </b> FWaaS is often designed to
                            integrate
                            with
                            various
                            cloud services and platforms, supporting organizations with a significant presence in
                            the cloud.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="lg:flex md:flex sm:block justify-center items-center p-3 lg:gap-8 md:gap-8 sm:gap-5 lg:mt-4 md:mt-4 sm:mt-0">
                <div
                    class="group relative before:absolute before:content-['_'] lg:before:w-full lg:before:h-80 md:before:w-full md:before:h-72 sm:before:w-full sm:before:h-96 before:bg-web-ascent-1 before:-z-[1] lg:mb-0 md:mb-0 sm:mb-6">
                    <div
                        class="group-hover:bg-white bg-gray-200 p-5 flex items-center flex-col rounded-xl my-0 group-hover:translate-x-3 transition-all duration-700 group-hover:shadow-xl translate-x-0 lg:w-96 lg:h-80 md:w-full md:h-72 sm:w-full sm:h-96">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Focus on Core
                            Competencies
                        </h3>
                        <p class="py-1 font-medium"><b>Outsourced Security Management: </b> By leveraging FWaaS,
                            organizations
                            can
                            offload
                            the management of security infrastructure to experts, allowing internal teams to focus on core
                            business activities.
                    </div>
                </div>
                <div
                    class="group relative before:absolute before:content-['_'] lg:before:w-full lg:before:h-80 md:before:w-full md:before:h-72 sm:before:w-full sm:before:h-96 before:bg-web-ascent-1 before:-z-[1]">
                    <div
                        class="group-hover:bg-white bg-gray-200 p-5 flex items-center flex-col rounded-xl my-0 group-hover:translate-x-3 transition-all duration-700 group-hover:shadow-xl translate-x-0 lg:w-96 lg:h-80 md:w-full md:h-72 sm:w-full sm:h-96">
                        <h3 class="font-bold text-2xl text-center leading-6 pb-2 text-web-ascent-1">Cost Efficiency
                        </h3>
                        <p class="py-1 font-medium"><b>No Physical Hardware Costs: </b> FWaaS eliminates the need
                            for
                            purchasing,
                            installing, and maintaining physical firewall appliances, reducing upfront capital
                            expenditures.
                        </p>
                        <p class="py-1 font-medium"><b>Scalability: </b> Pay-as-you-go models allow for cost
                            scaling based
                            on
                            your
                            organization's actual
                            usage, avoiding overprovisioning.</p>
                    </div>
                </div>
            </div>
    </section>
    {{-- --}}

    {{-- reach us starts --}}
    <section class="pt-5 pb-2">
        <div class="container">
            <div class="pt-0 space-x-3 text-center">
                <a href="{{ route('web.view.contact') }}"
                    class="bg-web-ascent-1 text-xl text-white py-3 px-10 rounded-lg" target="_blank">Reach
                    Us</a>
            </div>
        </div>
    </section>
    {{-- reach us ends --}}

    {{-- Architecture FWaaS starts --}}
    <section class="pt-5 pb-3 relative">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Elements of Pi Firewall as a Service
                    (FWaaS) Architecture</h2>
            </div>
            <div class="pt-8 pb-3">
                {{-- <div onclick="$('#carousel-prev').click()" class="button-next relative arr-btn"><i
                        data-feather="chevron-down" class="h-8 w-8 absolute arr1"></i></div> --}}
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/cloud-infrastructure.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Cloud
                                        Infrastructure
                                    </h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Data
                                            Centers</b>
                                        <b>:</b> FWaaS is hosted in secure and redundant cloud data centers, which may be
                                        distributed
                                        globally for improved performance and resilience.
                                    </p>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Virtualized
                                            Resources</b> <b>:</b> The infrastructure is
                                        based on
                                        virtualized resources, allowing for scalability and efficient resource utilization.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/centralized-management-plane.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Centralized
                                        Management
                                        Plane</h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Web-Based
                                            Interface</b>
                                        <b>:</b> Administrators use a centralized
                                        web-based
                                        interface to
                                        configure and manage security policies across the entire network.
                                    </p>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Policy
                                            Configuration</b> <b>:</b> Security policies, access
                                        controls, and other
                                        configurations are defined and enforced through this management plane.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/firewall-services.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Firewall Services
                                    </h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Stateful
                                            Packet
                                            Inspection (SPI)</b> <b>:</b> Examines the state of
                                        active
                                        connections
                                        and makes decisions based on the context of the traffic.</p>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Proxy-based
                                            Filtering</b> <b>:</b> Inspects and filters traffic at
                                        the
                                        application
                                        layer
                                        by acting as an intermediary between users and the internet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">

                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/intrusion-prevention-system.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Intrusion
                                        Prevention
                                        System
                                        (IPS)</h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Signature-based
                                            Detection</b> <b>:</b> Identifies known patterns or
                                        signatures
                                        associated
                                        with known threats</p>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Behavioral Analysis</b>
                                        <b>:</b> Analyzes the behavior of network
                                        traffic to
                                        detect
                                        anomalies that may indicate new or unknown threats.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/virtual-private-network.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Virtual Private
                                        Network
                                        (VPN) Services</h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Site-to-Site VPN</b>
                                        <b>:</b> Securely connects different physical
                                        locations or
                                        cloud
                                        environments.
                                    </p>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Remote
                                            Access VPN</b>
                                        <b>:</b> Provides secure access for remote
                                        users
                                        connecting
                                        to the
                                        corporate network.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/web-security-and-filtering.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Web Security and
                                        Filtering
                                    </h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>URL
                                            Filtering</b>
                                        <b>:</b> Blocks
                                        or allows access to specific websites based
                                        on
                                        predefined policies.
                                    </p>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Content
                                            Filtering</b>
                                        <b>:</b>
                                        Filters web content based on categories or
                                        criteria
                                        to
                                        prevent access to inappropriate or malicious content.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/secure-web-gateway.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Secure Web Gateway
                                        (SWG)
                                    </h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Protection Against Web
                                            Threats</b>
                                        <b>:</b> Guards against web-based threats
                                        such
                                        as
                                        malware, phishing, and other malicious activities.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/application-control.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Application Control
                                    </h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Identification and
                                            Control</b>
                                        <b>:</b> Identifies and controls the use of
                                        specific
                                        applications or application categories on the network.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/logging-and-monitoring.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Logging and
                                        Monitoring
                                    </h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Real-time
                                            Monitoring</b> <b>:</b>
                                        Provides real-time visibility into network
                                        traffic,
                                        security events, and anomalies.</p>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Logging
                                            and
                                            Reporting</b> <b>:</b>
                                        Generates logs and reports for compliance,
                                        auditing,
                                        and analysis purposes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">

                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/identity-based-access-control.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Identity-Based
                                        Access
                                        Control</h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>User
                                            Authentication</b>
                                        <b>:</b>
                                        Enforces access controls based on user
                                        identity,
                                        ensuring that only authorized users can access specific resources.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/scalability-and-load-balancing.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Scalability and
                                        Load
                                        Balancing</h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Scalable
                                            Architecture</b> <b>:</b>
                                        Enables the solution to scale dynamically to
                                        accommodate changes in network traffic.</p>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Load
                                            Balancing</b>
                                        <b>:</b>
                                        Distributes network traffic across multiple servers
                                        or
                                        resources to optimize performance and reliability.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/distributed-denial-of-service.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Distributed Denial
                                        of
                                        Service (DDoS) Protection</h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Traffic
                                            Scrubbing</b>
                                        <b>:</b>
                                        Mitigates DDoS attacks by filtering and
                                        scrubbing
                                        malicious traffic before it reaches the target network.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/security-intelligence-and-updates.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Security
                                        Intelligence
                                        and
                                        Updates</h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Threat
                                            Intelligence
                                            Feeds</b>
                                        <b>:</b> Integrates threat intelligence feeds to
                                        stay
                                        updated on the latest cybersecurity threats.
                                    </p>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Automated
                                            Updates</b>
                                        <b>:</b>
                                        Ensures that the FWaaS solution is regularly
                                        updated
                                        with
                                        the latest security patches and signatures.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/compliance-features.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        Compliance Features
                                    </h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Audit
                                            Trails</b>
                                        <b>:</b>
                                        Maintains detailed logs of network activities for
                                        compliance
                                        purposes.
                                    </p>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Regulatory
                                            Compliance</b> <b>:</b>
                                        Helps organizations adhere to
                                        industry-specific
                                        or
                                        regional regulatory requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer key-slider">
                            <div class="relative group shadow-xl">
                                <div>
                                    <img src="{{ asset('web/images/firewall-balancer/APIs-and-integration.webp') }}"
                                        class="w-full h-64 mx-auto my-0">
                                </div>
                                <div
                                    class="lg:p-3 md:p-3 sm:p-2 flex items-center flex-col w-full lg:h-64 md:h-[23rem] sm:h-64">
                                    <h3
                                        class="font-bold lg:text-xl md:text-xl sm:text-xl text-center lg:leading-6 md:leading-5 sm:leading-5 lg:pb-1 md:py-3 sm:py-3 text-web-ascent-1">
                                        APIs and
                                        Integration
                                    </h3>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>API
                                            Access</b> <b>:</b>
                                        Allows
                                        integration with other security tools,
                                        applications,
                                        and
                                        third-party services.</p>
                                    <p class="lg:py-1 md:py-1 sm:py-1"><b>Automation</b> <b>:</b>
                                        Supports
                                        automation through APIs for streamlined
                                        operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination key pt-4"></div>
                    <!-- Add Arrows -->
                </div>
                {{-- <div onclick="$('#carousel-next').click()" class="button-prev relative arr-btn"><i
                        data-feather="chevron-down" class="h-8 w-8 absolute arr2"></i>
                </div> --}}
                <div>
                    <div class="swiper-button-next w-9 h-9 lg:block md:hidden sm:hidden"></div>
                    <div class="swiper-button-prev w-9 h-9 lg:block md:hidden sm:hidden"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- Architecture FWaaS ends --}}

    {{-- FWaaS content starts --}}
    <section class="py-2">
        <div class="container">
            <div class="pb-10">
                <p class="text-gray-800 leading-relaxed lg:text-lg sm:text-base font-medium">Pi FWaaS
                    architecture provides a foundation for delivering scalable, flexible, and
                    centrally managed firewall services, making it well-suited for cloud-centric and hybrid environments.
                    It's important for organizations to choose FWaaS providers whose architectures align with their specific
                    security and
                    operational requirements. When considering FWaaS, it's essential to evaluate the specific features and
                    capabilities
                    offered by different providers to ensure they align with your organization's security requirements and
                    compliance
                    needs. By utilizing FWaaS, organizations can enhance their network security without the need for
                    extensive hardware investments and maintenance.</p>
            </div>
        </div>
    </section>
    {{-- FWaaS content ends --}}
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
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            arrow: false,
            // autoplay: true,
            // autoplaySpeed: 3000,
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 30,
            // autoplay: {
            //     delay: 2000,
            //     disableOnInteraction: false,
            // },
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
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 30,
                }
            }
        });
    </script>
@endsection
