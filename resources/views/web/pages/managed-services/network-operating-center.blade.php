@extends('web.layouts.app')

@section('web-head')
    <title>NOC | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/managed-services/new-noc-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">
                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">NOC</h1>
                        <p class="text-gray-300 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Monitor, manage, and
                            secure your network with Pi Network Operating Center Services. Our
                            24/7 expert support ensures seamless operations, quick issue resolution, and enhanced
                            network performance. Trust Pi to keep your network running smoothly around the clock.
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
    <section>
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center py-4">Why NOC?</h2>
                <p class="text-justify">NOC services are
                    essential to any modern business's IT infrastructure. As a service, Pi's Network Operating Center (NOC)
                    aims to ensure that your business's networks are continuously supervised, monitored, and maintained to
                    minimize disruptions and downtime. It is designed to help organizations strengthen their networks'
                    optimal performance and perform other business-critical tasks like network troubleshooting, software
                    distribution & updating, coordination with interconnected networks, and more.</p>
            </div>
        </div>
    </section>
    {{-- intro cont ends --}}

    {{-- trained noc starts --}}
    <section class="py-3">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-xl md:text-lg sm:text-md text-center text-web-ascent-1">Our team of highly
                    trained NOC engineers is available around the clock and carries out activities like:</h2>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2  sm:grid-cols-1 justify-center items-center gap-8 py-7">
                <div>
                    <ul>
                        <li class="shadow-[0px_0px_4px_rgba(0,0,0,0.5)] text-center my-2 p-2 rounded-lg">Network Monitoring
                            and
                            Updates
                        </li>
                        <li class="shadow-[0px_0px_4px_rgba(0,0,0,0.5)] text-center my-2 p-2 rounded-lg">Communications
                            Management
                        </li>
                        <li class="shadow-[0px_0px_4px_rgba(0,0,0,0.5)] text-center my-2 p-2 rounded-lg">Firewall
                            Management</li>
                        <li class="shadow-[0px_0px_4px_rgba(0,0,0,0.5)] text-center my-2 p-2 rounded-lg">Performance and
                            Quality
                            Reporting
                        </li>
                        <li class="shadow-[0px_0px_4px_rgba(0,0,0,0.5)] text-center my-2 p-2 rounded-lg">Security Alerts
                        </li>
                        <li class="shadow-[0px_0px_4px_rgba(0,0,0,0.5)] text-center my-2 p-2 rounded-lg">Threat Analysis
                        </li>
                    </ul>
                </div>
                <div>
                    <img src="{{ asset('web/images/managed-services/new-noc-1.webp') }}" class="rounded-lg">
                </div>
                <div>
                    <ul>
                        <li class="shadow-[0px_0px_4px_rgba(0,0,0,0.5)] text-center my-2 p-2 rounded-lg">Intrusion
                            Prevention Systems
                        </li>
                        <li class="shadow-[0px_0px_4px_rgba(0,0,0,0.5)] text-center my-2 p-2 rounded-lg">Incident Response
                        </li>
                        <li class="shadow-[0px_0px_4px_rgba(0,0,0,0.5)] text-center my-2 p-2 rounded-lg">Policy
                            Enforcement<br>
                            (As Per User Guidelines)</li>
                        <li class="shadow-[0px_0px_4px_rgba(0,0,0,0.5)] text-center my-2 p-2 rounded-lg">Quality Control
                            and Assurance
                            (in terms of the NOC)</li>
                        <li class="shadow-[0px_0px_4px_rgba(0,0,0,0.5)] text-center my-2 p-2 rounded-lg">Data and Storage
                            Compliance
                        </li>
                    </ul>
                </div>
            </div>
            <p class="text-justify">The key benefit of our
                NOC service is real-time responses and quick resolution. A prompt response reduces
                disruptions and prevents major business losses. NOC as a service lets businesses analyze complex network
                infrastructure, identify disruption causes, and prevent future incidents. A proactive approach can protect
                sensitive data, avoid costly downtime, and ensure smooth operations.</p>
        </div>
    </section>
    {{-- trained noc ends --}}

    {{-- why noc starts --}}
    <section class="py-3">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center py-4">Why NOC &commat; Pi?</h2>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2  sm:grid-cols-1 justify-center items-center gap-8 py-7">
                <div>
                    <img src="{{ asset('web/images/managed-services/new-noc-2.webp') }}"
                        class="w-full mx-auto my-0 rounded-lg">
                </div>
                <div>
                    <p class="text-justify">Our Network
                        Operations Center is not just a reactionary force; it's a proactive ally in optimizing your
                        network's performance and ensuring its security. This extends beyond the scope of simply monitoring
                        for potential issues; it also encompasses implementing best practices to ensure that the network
                        operates optimally and furnishing regular updates and reports on its status.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- why noc ends --}}

    {{-- advantages starts --}}
    <section>
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center pt-4">Advantages of Pi NOC</h2>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-5 py-8">
                <div
                    class="p-3 shadow-[10px_10px_10px_rgb(0,0,0,17%)] rounded-lg relative before:absolute before:content-[''] before:w-8 before:h-8 before:bg-web-ascent-1 before:bottom-0 before:right-0 before:-z-[1] before:rounded-bl-lg before:rounded-tr-lg hover:before:w-full hover:before:h-full before:transition-all before:duration-150 hover:before:rounded-lg group">
                    <h3 class="font-bold text-xl py-2 group-hover:text-white">Installing, Troubleshooting, and Patching</h3>
                    <p class="group-hover:text-slate-200">Our dedicated NOC team handles critical network software, ensuring
                        seamless operations.</p>
                </div>
                <div
                    class="p-3 shadow-[10px_10px_10px_rgb(0,0,0,17%)] rounded-lg relative before:absolute before:content-[''] before:w-8 before:h-8 before:bg-web-ascent-1 before:bottom-0 before:right-0 before:-z-[1] before:rounded-bl-lg before:rounded-tr-lg hover:before:w-full hover:before:h-full before:transition-all before:duration-150 hover:before:rounded-lg group">
                    <h3 class="font-bold text-xl py-2 group-hover:text-white">Security Alerts and Reporting</h3>
                    <p class="group-hover:text-slate-200">Collaborating with your security team, we provide alerts and
                        detailed
                        reports to prevent potential
                        incidents.</p>
                </div>
                <div
                    class="p-3 shadow-[10px_10px_10px_rgb(0,0,0,17%)] rounded-lg relative before:absolute before:content-[''] before:w-8 before:h-8 before:bg-web-ascent-1 before:bottom-0 before:right-0 before:-z-[1] before:rounded-bl-lg before:rounded-tr-lg hover:before:w-full hover:before:h-full before:transition-all before:duration-150 hover:before:rounded-lg group">
                    <h3 class="font-bold text-xl py-2 group-hover:text-white">Firewall<br> Management</h3>
                    <p class="group-hover:text-slate-200">Monitor and manage firewalls to fortify ongoing network and
                        business
                        security.</p>
                </div>
                <div
                    class="p-3 shadow-[10px_10px_10px_rgb(0,0,0,17%)] rounded-lg relative before:absolute before:content-[''] before:w-8 before:h-8 before:bg-web-ascent-1 before:bottom-0 before:right-0 before:-z-[1] before:rounded-bl-lg before:rounded-tr-lg hover:before:w-full hover:before:h-full before:transition-all before:duration-150 hover:before:rounded-lg group">
                    <h3 class="font-bold text-xl py-2 group-hover:text-white">Threat Identification and Mitigation</h3>
                    <p class="group-hover:text-slate-200">Adept at spotting and mitigating security issues, minimizing
                        potential
                        damage.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- advantages ends --}}

    {{-- proposition starts --}}
    <section class="pb-12">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center pt-4">Pi Value Proposition</h2>
            </div>
            <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-7 py-8">
                <div class="relative group">
                    <div
                        class="bg-[#223f9714] shadow-[-6px_6px_15px_rgba(0,0,0,0.1)] p-3 text-center rounded-lg group-hover:invisible">
                        <img src="{{ asset('web/images/managed-services/monitoring-and-mentainance.webp') }}"
                            class="w-20 mx-auto my-0">
                        <h3 class="font-medium text-web-ascent-1 text-lg pt-1">Continued Monitoring and Maintenance</h3>
                    </div>
                    <div
                        class="absolute bg-black top-0 left-0 w-full h-full rounded-lg text-white text-center flex justify-center items-center invisible group-hover:visible p-3">
                        <p> Ensuring your network operates at its peak performance. </p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="bg-[#223f9714] shadow-[-6px_6px_15px_rgba(0,0,0,0.1)] p-3 text-center rounded-lg">
                        <img src="{{ asset('web/images/managed-services/zero-disruptions-and-downtime.webp') }}"
                            class="w-20 mx-auto my-0">
                        <h3 class="font-medium text-web-ascent-1 text-lg pt-1">Zero Disruptions and Downtime</h3>
                    </div>
                    <div
                        class="absolute bg-black top-0 left-0 w-full h-full rounded-lg text-white text-center flex justify-center items-center invisible group-hover:visible p-3">
                        <p>Minimizing interruptions for uninterrupted business operations. </p>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="bg-[#223f9714] shadow-[-6px_6px_15px_rgba(0,0,0,0.1)] p-3 text-center rounded-lg w-full h-full">
                        <img src="{{ asset('web/images/managed-services/availability-24-7.webp') }}"
                            class="w-20 mx-auto my-0">
                        <h3 class="font-medium text-web-ascent-1 text-lg pt-1">24/7 Availability</h3>
                    </div>
                    <div
                        class="absolute bg-black top-0 left-0 w-full h-full rounded-lg text-white text-center flex justify-center items-center invisible group-hover:visible p-3">
                        <p> Our NOC resources are at your service round the clock. </p>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="bg-[#223f9714] shadow-[-6px_6px_15px_rgba(0,0,0,0.1)] p-3 text-center rounded-lg w-full h-full">
                        <img src="{{ asset('web/images/managed-services/trained-noc-resources.webp') }}"
                            class="w-20 mx-auto my-0">
                        <h3 class="font-medium text-web-ascent-1 text-lg pt-1">Trained NOC Resources</h3>
                    </div>
                    <div
                        class="absolute bg-black top-0 left-0 w-full h-full rounded-lg text-white text-center flex justify-center items-center invisible group-hover:visible p-3">
                        <p>A team of highly skilled professionals dedicated to safeguarding your network. </p>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="bg-[#223f9714] shadow-[-6px_6px_15px_rgba(0,0,0,0.1)] p-3 text-center rounded-lg w-full h-full">
                        <img src="{{ asset('web/images/managed-services/real-time-response-to-incidents.webp') }}"
                            class="w-20 mx-auto my-0">
                        <h3 class="font-medium text-web-ascent-1 text-lg pt-1">Real-time Response to Incidents</h3>
                    </div>
                    <div
                        class="absolute bg-black top-0 left-0 w-full h-full rounded-lg text-white text-center flex justify-center items-center invisible group-hover:visible p-3">
                        <p>Swift action to mitigate the impact of disruptions. </p>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="bg-[#223f9714] shadow-[-6px_6px_15px_rgba(0,0,0,0.1)] p-3 text-center rounded-lg w-full h-full">
                        <img src="{{ asset('web/images/managed-services/prevent-issues.webp') }}" class="w-20 mx-auto my-0">
                        <h3 class="font-medium text-web-ascent-1 text-lg pt-1">Prevent Issues</h3>
                    </div>
                    <div
                        class="absolute bg-black top-0 left-0 w-full h-full rounded-lg text-white text-center flex justify-center items-center invisible group-hover:visible p-3">
                        <p>Proactive measures to avoid severe business losses. </p>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="bg-[#223f9714] shadow-[-6px_6px_15px_rgba(0,0,0,0.1)] p-3 text-center rounded-lg w-full h-full">
                        <img src="{{ asset('web/images/managed-services/identification-and-resolution-of-the-root-cause.webp') }}"
                            class="w-20 mx-auto my-0">
                        <h3 class="font-medium text-web-ascent-1 text-lg pt-1">Identification and Resolution of the Root
                            Cause</h3>
                    </div>
                    <div
                        class="absolute bg-black top-0 left-0 w-full h-full rounded-lg text-white text-center flex justify-center items-center invisible group-hover:visible p-3">
                        <p> Analyzing disruptions at their source for long-term solutions. </p>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="bg-[#223f9714] shadow-[-6px_6px_15px_rgba(0,0,0,0.1)] p-3 text-center rounded-lg w-full h-full">
                        <img src="{{ asset('web/images/managed-services/ongoing-support.webp') }}"
                            class="w-20 mx-auto my-0">
                        <h3 class="font-medium text-web-ascent-1 text-lg pt-1">Ongoing Support</h3>
                    </div>
                    <div
                        class="absolute bg-black top-0 left-0 w-full h-full rounded-lg text-white text-center flex justify-center items-center invisible group-hover:visible p-3">
                        <p> Beyond monitoring, we provide continuous support for your network. </p>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="bg-[#223f9714] shadow-[-6px_6px_15px_rgba(0,0,0,0.1)] p-3 text-center rounded-lg w-full h-full">
                        <img src="{{ asset('web/images/managed-services/network-optimization.webp') }}"
                            class="w-20 mx-auto my-0">
                        <h3 class="font-medium text-web-ascent-1 text-lg pt-1">Network Optimization</h3>
                    </div>
                    <div
                        class="absolute bg-black top-0 left-0 w-full h-full rounded-lg text-white text-center flex justify-center items-center invisible group-hover:visible p-3">
                        <p> Implementing best practices to ensure your network operates optimally. </p>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="bg-[#223f9714] shadow-[-6px_6px_15px_rgba(0,0,0,0.1)] p-3 text-center rounded-lg w-full h-full">
                        <img src="{{ asset('web/images/managed-services/regular-updates-and-reports.webp') }}"
                            class="w-20 mx-auto my-0">
                        <h3 class="font-medium text-web-ascent-1 text-lg pt-1">Regular Updates and Reports</h3>
                    </div>
                    <div
                        class="absolute bg-black top-0 left-0 w-full h-full rounded-lg text-white text-center flex justify-center items-center invisible group-hover:visible p-3">
                        <p> Furnishing detailed insights to keep you informed. </p>
                    </div>
                </div>
                <div class="lg:block md:block sm:hidden"></div>
                <div class="lg:block md:block sm:hidden"></div>
                <div class="relative group">
                    <div
                        class="bg-[#223f9714] shadow-[-6px_6px_15px_rgba(0,0,0,0.1)] p-3 text-center rounded-lg w-full h-full">
                        <img src="{{ asset('web/images/managed-services/dedicated-service-and-support.webp') }}"
                            class="w-20 mx-auto my-0">
                        <h3 class="font-medium text-web-ascent-1 text-lg pt-1">Dedicated Service and Support</h3>
                    </div>
                    <div
                        class="absolute bg-black top-0 left-0 w-full h-full rounded-lg text-white text-center flex justify-center items-center invisible group-hover:visible p-3">
                        <p> Tailored support to meet your specific business needs. </p>
                    </div>
                </div>
            </div>
            <p class="text-center">Choose Pi for a
                partnership that goes beyond mere surveillance, offering proactive support and optimization
                to propel your business forward.</p>
        </div>
    </section>
    {{-- proposition ends --}}
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
