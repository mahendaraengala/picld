@extends('web.layouts.app')

@section('web-head')
    <title>Multi Cloud | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/managed-services/new-multi-cloud-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">
                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Multi Cloud</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-10 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Simplify your cloud
                            operations with Pi
                            Multi-Cloud
                            Managed Services. Our expertise ensures seamless integration, management, and security across
                            all your cloud platforms. Enhance efficiency, reduce complexity, and drive innovation with Pi by
                            your side.
                        </p>
                        <div class="pt-4 space-x-3">
                            {{-- <a href="#" class="btn-primary-md">Know more</a> --}}
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                            {{-- <a class="btn-primary-md cursor-pointer show_form">Brochure</a> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- intro cont starts --}}
    <section class="py-3">
        <div class="container">
            <div>
                <p class="py-5 text-justify">Pi
                    Datacenters takes pride in offering comprehensive <a
                        href="https://pidatacenters.com/knowledge-hub/how-do-multi-cloud-solutions-transform-business-agility-and-innovation"
                        class="hover:underline underline-offset-2 text-blue-600" target="_blank">Multi Cloud</a> Managed
                    Services that empower your
                    organization with unparalleled control, security, and efficiency in the digital realm. Pi represents the
                    foundation upon which your organization's digital dreams are realized. We don't just offer services; we
                    offer solutions that redefine the very essence of cloud management. Our team of experienced experts is
                    committed to your digital journey's success. We understand that in the digital world, control is not
                    just an option; it's imperative. With Pi Datacenters, you gain the ability to harness unparalleled
                    control over your cloud infrastructure.</p>
            </div>
        </div>
    </section>
    {{-- intro cont ends --}}

    {{-- our range of services starts --}}
    <section class="py-3">
        <div class="container">
            <div class="pb-6">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Our Range Of Services</h2>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-6 pb-5">
                {{-- shadow-[2px_4px_4px_rgb(34,63,151,59%)] --}}
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/CM.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Compute Management</h3>
                    </div>
                    <p class="pt-3 text-center">Efficiently manage the availability, performance, and fine-tuning of your
                        cloud
                        resources. We
                        specialize in setting up high availability, managing licensing, monitoring, alerting, reporting,
                        logging, analysis, dashboarding, health checks, and more.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/SM.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Security Management</h3>
                    </div>
                    <p class="pt-3 text-center">Rest easy with our robust security management services. We identify and
                        mitigate
                        unsanctioned apps,
                        enforce policies, and monitor your cloud data. Our services include anti-virus and anti-malware
                        updates to keep your infrastructure secure.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/BM.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Backup Management</h3>
                    </div>
                    <p class="pt-3 text-center">Protect your critical assets with our comprehensive backup solutions. We
                        ensure
                        backups for all your
                        applications, workloads, and data. Our self-serve and on-demand restore options come with robust
                        SLAs.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/NM.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Network Management</h3>
                    </div>
                    <p class="pt-3 text-center">Optimize your virtual network for seamless communication among VMs and the
                        internet.
                        We handle subnet
                        management, NSG (Network Security Group) management, and firewall management.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/IM.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Identity Management</h3>
                    </div>
                    <p class="pt-3 text-center">Effortlessly manage user accounts, federate identities across your
                        organization's LOB
                        (Line of
                        Business) apps, and implement role-based access controls.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/STORAGE-M.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Storage Management</h3>
                    </div>
                    <p class="pt-3 text-center">Optimize data usage and access patterns to maximize cost savings. Identify
                        and move
                        stale data to
                        more economical storage areas, helping you manage your storage budget effectively.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/SOM.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Server OS Management</h3>
                    </div>
                    <p class="pt-3 text-center">Ensure the continuous updating and troubleshooting of server operating
                        systems for
                        peak performance.
                    </p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/MM.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Monitoring Management</h3>
                    </div>
                    <p class="pt-3 text-center">Gain insights into your VMs with complete monitoring of CPU utilization,
                        memory usage,
                        storage IOPS,
                        and OS performance.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/CONFIG-M.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Configuration Management</h3>
                    </div>
                    <p class="pt-3 text-center">Keep your software up-to-date, enforce configuration and security policies,
                        and manage
                        patching,
                        updates, password resets, and resource right-sizing.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/Support-M.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Basic Support Availability</h3>
                    </div>
                    <p class="pt-3 text-center">Benefit from our 8x5 support for billing and invoicing inquiries, as well as
                        24x7
                        L1/L2 support for
                        break-fix issues. Reach out through phone, email, or web support tickets.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/CHANGE-M.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Change Management</h3>
                    </div>
                    <p class="pt-3 text-center">We ensure that proposed changes are scheduled based on business priorities,
                        infrastructure impact,
                        and service risk, minimizing disruptions to your IT services.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/BR.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Basic Response/Resolution</h3>
                    </div>
                    <p class="pt-3 text-center">Expect swift responses and resolutions with our support services. We offer
                        PIL1/L2
                        support for
                        break-fix issues with prompt initial responses based on severity levels.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/PM.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Problem Management</h3>
                    </div>
                    <p class="pt-3 text-center">Our incident management process includes root cause analysis, allowing us
                        to identify
                        and address
                        problems in your IT infrastructure efficiently.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/BSL.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Basic Support Level</h3>
                    </div>
                    <p class="pt-3 text-center">We provide L1 customer support services and advanced L2 troubleshooting,
                        escalating
                        to L3 for
                        break-fix issues when necessary.</p>
                </div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/INCIDENT-M.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Incident Management</h3>
                    </div>
                    <p class="pt-3 text-center">Our incident management encompasses reporting, initial response,
                        categorization,
                        service impact
                        analysis, affected services, resolution/fix, and thorough root cause analysis.</p>
                </div>
                <div class="lg:block md:block sm:hidden"></div>
                <div class="shadow-[2px_4px_4px_rgb(0,0,0,55%)] p-5">
                    <div class="flex justify-start items-center gap-5">
                        <img src="{{ asset('web/images/managed-services/GOVERNANCE.webp') }}" class="w-16 h-16">
                        <h3 class="font-bold text-xl">Governance</h3>
                    </div>
                    <p class="pt-3 text-center">Stay informed with monthly reports and account reviews. For added support,
                        our
                        Technical Account
                        Managers (TAMs) are available for monthly account reviews and consultations.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- our range of services ends --}}

    {{-- managed services models starts --}}
    <section class="py-2">
        <div class="container">
            <div class="pb-5">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Managed Services Models</h2>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 items-center gap-6">
                <div>
                    <img src="{{ asset('web/images/managed-services/Managed-Services-Models-New.webp') }}"
                        class="w-full">
                </div>
                <div>
                    <p class="text-justify">Our <a
                            href="https://pidatacenters.com/knowledge-hub/what-is-managed-services-provider-important-factors-to-consider-when-selecting-the-ideal-msp"
                            class="hover:underline underline-offset-2 text-blue-600" target="_blank">Managed Services</a>
                        offer
                        varied models to cater to unique business needs of enterprises. These include the A La Carte,
                        Dedicated Resource, Tiered, Elastic (Pay-Per-Use), and Monitoring Only models. This is to ensure
                        that businesses could focus on their core activities while our managed services ecosystem takes care
                        of the smooth operations and service availability of the IT infrastructure landscape.</p>
                    <div class="pt-7 space-x-3">
                        <a class="btn-primary-md cursor-pointer show_form">Download Brochure</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- managed services models ends --}}


    {{-- models starts --}}
    <section class="py-8">
        <div class="container">
            <ul
                class="lg:flex md:flex sm:block justify-center items-center sm:text-center lg:space-x-5 md:space-x-5 border-b-4 border-black tabs-btns">
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-2 sm:w-[90%] active">
                    <button>Tiered Model</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-2 sm:w-[90%]">
                    <button>Elastic Model</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-2 sm:w-[90%]">
                    <button>Dedicated Model</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-2 sm:w-[90%]">
                    <button>A La Carte Model</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:my-0 sm:w-[90%]">
                    <button>Monitoring Only Model</button>
                </li>
            </ul>

            {{-- tab 1 starts --}}
            <div class="space-y-5 py-4 tabs-content">
                <p class="text-center">Provides
                    different tiers of service levels based on the business's needs, ensuring that you pay only for
                    the services you require.</p>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6 items-center pb-6">
                    <div class="relative group shadow-[0px_0px_12px_rgba(0,0,0,0.5)] rounded-lg cursor-pointer">
                        <div>
                            <h2
                                class="font-bold text-center text-2xl py-1 uppercase bg-slate-400 rounded-tl-lg rounded-tr-lg">
                                Essentials
                            </h2>
                            <img src="{{ asset('web/images/managed-services/essesntials-new.webp') }}" class="w-96 h-96">
                            <div class="text-center py-1 bg-slate-300">
                                <a class="text-web-ascent-1 font-bold">Know More</a>
                            </div>
                        </div>
                        <div
                            class="bg-web-ascent-1 absolute left-0 top-0 overflow-hidden rounded-lg lg:w-96 md:w-96 sm:w-full h-0 transition-all duration-700 group-hover:h-full z-[11] invisible group-hover:visible flex justify-center flex-cols items-center px-3">
                            <ul class="pl-5 text-white">
                                <li class="list-disc pb-1"> 24 X 7 support with 2 hours critical response</li>
                                <li class="list-disc pb-1"> Basic IT support (OS Patching, OS Updates, OS Management,
                                    Virtual
                                    Machines, Disks,
                                    Basic Configuration Management, &amp;Incident Management)
                                </li>
                                <li class="list-disc pb-1"> 30 days backup</li>
                                <li class="list-disc pb-1"> Proactive infrastructure monitoring and alerting</li>
                                <li class="list-disc pb-1"> Monthly health reports and dashboards</li>

                                <li class="list-disc pb-1"> Basic anti-virus and anti-malware support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative group shadow-[0px_0px_12px_rgba(0,0,0,0.5)] rounded-lg cursor-pointer">
                        <div>
                            <h2
                                class="font-bold text-center text-2xl py-1 uppercase bg-slate-400 rounded-tl-lg rounded-tr-lg">
                                Advanced
                            </h2>
                            <img src="{{ asset('web/images/managed-services/Advanced-new.webp') }}" class="w-96 h-96">
                            <div class="text-center py-1 bg-slate-300">
                                <a class="text-web-ascent-1 font-bold">Know More</a>
                            </div>
                        </div>
                        <div
                            class="bg-web-ascent-1 absolute left-0 top-0 overflow-hidden rounded-lg lg:w-96 md:w-96 sm:w-full h-0 transition-all duration-700 group-hover:h-full z-[11] invisible group-hover:visible flex justify-center flex-cols items-center px-3">
                            <ul class="pl-5 text-white">
                                <li class="list-disc pb-1"> 24 X 7 support with 1 hour critical response</li>
                                <li class="list-disc pb-1"> Advanced IT Support [OS Management (incl.Patching &amp;
                                    Updates), VM Support,
                                    Availability Sets, Disks, Virtual Networks, WAF, Identity Management, Configuration
                                    Management, Incident Management, Problem Management, and Change Management]</li>
                                <li class="list-disc pb-1"> Shared TAM and architect support</li>
                                <li class="list-disc pb-1"> Unlimited backup, self-serve point-in-time restore</li>
                                <li class="list-disc pb-1"> Proactive infrastructure monitoring and alerting</li>
                                <li class="list-disc pb-1"> Monthly health reports and dashboards.</li>
                                <li class="list-disc pb-1"> Advanced anti-virus and anti-malware support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative group shadow-[0px_0px_12px_rgba(0,0,0,0.5)] rounded-lg cursor-pointer">
                        <div>
                            <h2
                                class="font-bold text-center text-2xl py-1 uppercase bg-slate-400 rounded-tl-lg rounded-tr-lg">
                                Premium
                            </h2>
                            <img src="{{ asset('web/images/managed-services/Premium-New.webp') }}" class="w-96 h-96">
                            <div class="text-center py-1 bg-slate-300">
                                <a class="text-web-ascent-1 font-bold">Know More</a>
                            </div>
                        </div>
                        <div
                            class="bg-web-ascent-1 absolute left-0 top-0 overflow-hidden rounded-lg lg:w-96 md:w-96 sm:w-full h-0 transition-all duration-700 lg:group-hover:h-full md:group-hover:h-full sm:group-hover:h-[106%] z-[11] invisible group-hover:visible flex justify-center flex-cols items-center px-3">
                            <ul class="pl-5 text-white">
                                <li class="list-disc pb-1"> 24 X 7 support with 30 minutes critical response</li>
                                <li class="list-disc pb-1"> Level-3 escalation advanced support</li>
                                <li class="list-disc pb-1"> Proactive capacity planning, performance and cost optimization
                                </li>
                                <li class="list-disc pb-1"> Shared TAM and architect support</li>
                                <li class="list-disc pb-1"> Unbrmited backup, self-serve point-in-time restore</li>
                                <li class="list-disc pb-1"> Proactive infrastructure monitoring and alerting</li>
                                <li class="list-disc pb-1"> Monthly health reports and dashboards</li>
                                <li class="list-disc pb-1"> Deep security (WAF, DDoS, Threat analytics, anti-virus,
                                    anti-malware, email and web
                                    protection)</li>
                                <li class="list-disc pb-1"> Proactive run book authoring</li>
                                <li class="list-disc pb-1"> Advanced operational intelligence and custom dashboard on
                                    usage, performance,
                                    governance, and cost</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tab 1 Ends --}}

            {{-- tab 2 starts --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <p class="text-center">Allows businesses
                    to pay only for what they use, making it a cost-effective model.</p>
                <div class="flex lg:flex md:flex sm:block justify-center items-center gap-16 pb-12">
                    <div></div>
                    <div class="relative">
                        <div
                            class="lg:w-96 md:w-96 sm:w-full lg:mb-0 md:mb-0 sm:mb-20 shadow-[0px_0px_12px_rgb(34,63,151)] p-5 min-h-[10rem] rounded-tl-full rounded-bl-full rounded-tr-[140rem] rounded-br-[140rem]">
                            <h2 class="font-bold text-center text-xl py-1">Subscription Fee</h2>
                            <p>Subscribe to the elastic model with a nominal monthly fee that provides access to all kinds
                                of
                                cloud services</p>
                        </div>
                        <div class="p-4 bg-web-ascent-1 rounded-full mx-auto my-0 w-[5.5rem] absolute -bottom-14 left-5">
                            <img src="{{ asset('web/images/managed-services/subscribe.webp') }}" class="w-14 h-14">
                        </div>
                    </div>
                    <div class="relative">
                        <div
                            class="lg:w-96 md:w-96 sm:w-full shadow-[0px_0px_12px_rgba(128,128,128)] p-5 min-h-[10rem] rounded-tr-full rounded-br-full rounded-tl-[140rem] rounded-bl-[140rem]">
                            <h2 class="font-bold text-center text-xl py-1">Pay-Per-Use</h2>
                            <p>Pay only for the services used, and the billing is done only for the number of hours used</p>
                        </div>
                        <div class="p-4 bg-[gray] rounded-full mx-auto my-0 w-[5.5rem] absolute -bottom-14 right-5">
                            <img src="{{ asset('web/images/managed-services/hand.webp') }}" class="w-14 h-14">
                        </div>
                    </div>
                    <div></div>
                </div>
            </div>
            {{-- tab 2 Ends --}}

            {{-- tab 3 starts --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <p class="text-center">This model
                    provides businesses with devoted resources for managing their workloads, ensuring they receive the
                    necessary attention.</p>
                <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-12 pb-10">
                    <div class="flip-box sm:w-full">
                        <div
                            class="text-center border-2 border-web-ascent-1 p-3 shadow-[0px_0px_10px_rgba(0,0,0,0.5)] min-h-[15rem] rotates-1 z-[1] bg-white flip-box-inner">
                            <div class="flip-box-front">
                                <img src="{{ asset('web/images/managed-services/dm-sm.webp') }}"
                                    class="w-24 mx-auto my-0">
                                <h2 class="font-bold lg:text-2xl md:text-xl sm:text-xl py-3">Service
                                    Monitoring</h2>
                                <a class="bg-web-ascent-1 text-white rounded-xl py-1 px-2">Know More</a>
                            </div>
                            <div
                                class="bg-web-ascent-1 text-white p-2 flip-box-back flex justify-center items-start flex-col">
                                <ul class="list-disc pl-4">
                                    <li>Numerous dashboards and logs, records the status of resources.</li>
                                    <li>In daily work, a consolidated monitoring of the systems and services operated is
                                        achieved by means of service monitoring.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="flip-box sm:w-full">
                        <div
                            class="text-center border-2 border-web-ascent-1 p-3 shadow-[0px_0px_10px_rgba(0,0,0,0.5)] min-h-[15rem] rotates-1 z-[1] bg-white flip-box-inner">
                            <div class="flip-box-front">
                                <img src="{{ asset('web/images/managed-services/dm-hs.webp') }}"
                                    class="w-24 mx-auto my-0">
                                <h2 class="font-bold lg:text-2xl md:text-xl sm:text-xl py-3">Hourly
                                    Support</h2>
                                <a class="bg-web-ascent-1 text-white rounded-xl py-1 px-2">Know More</a>
                            </div>
                            <div
                                class="bg-web-ascent-1 text-white p-2 flip-box-back flex justify-center items-start flex-col">
                                <p>Monitoring has three models of support:</p>
                                <ul class="list-disc pl-4">
                                    <li>24/7</li>
                                    <li>16/7</li>
                                    <li>8/7</li>
                            </div>
                        </div>
                    </div>

                    <div class="flip-box sm:w-full">
                        <div
                            class="text-center border-2 border-web-ascent-1 p-3 shadow-[0px_0px_10px_rgba(0,0,0,0.5)] min-h-[15rem] rotates-1 z-[1] bg-white flip-box-inner">
                            <div class="flip-box-front">
                                <img src="{{ asset('web/images/managed-services/dm-tpi.webp') }}"
                                    class="w-24 mx-auto my-0">
                                <h2 class="font-bold lg:text-2xl md:text-xl sm:text-xl py-3">Third
                                    Party Integration</h2>
                                <a class="bg-web-ascent-1 text-white rounded-xl py-1 px-2">Know More</a>
                            </div>
                            <div
                                class="bg-web-ascent-1 text-white p-2 flip-box-back flex justify-center items-start flex-col">
                                <ul class="list-disc pl-4">
                                    <li>Monitoring includes three unique parameters around Performance Metrics, Log
                                        Analytics,
                                        and Application Insights.</li>
                                    <li>Provide powerful end-to-end monitoring of applications and other crucial components.
                                    </li>
                                    <li>Third party applications can also be integrated for monitoring.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tab 3 Ends --}}

            {{-- tab 4 starts --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <p class="text-center">Allows businesses
                    to select specific services they require, providing flexibility in the services chosen.</p>
                <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-9">
                    <div class="shadow-[0px_0px_20px_rgba(0,0,0,0.6)] rounded-[2rem]">
                        <div
                            class="bg-web-ascent-1 rounded-tr-[2rem] rounded-tl-[2rem] min-h-[9rem] p-5 text-center text-white flex justify-center items-center flex-col">
                            <h2 class="font-bold text-xl pb-2">Application & DB Migration</h2>
                            <h3>Depending on business requirements, a fully customized app and database migration model is
                                available.</h3>
                        </div>
                        <ul class="pl-9 py-3 list-disc">
                            <li>Add-On Service <span class="text-gray-500 text-sm">(Service Type)</span></li>
                            <li>PER VM/NODE <span class="text-gray-500 text-sm">(Pricing Model)</span></li>
                            <li>Monthly <span class="text-gray-500 text-sm">(Pricing Type)</span></li>
                        </ul>
                    </div>

                    <div class="shadow-[0px_0px_20px_rgba(0,0,0,0.6)] rounded-[2rem]">
                        <div
                            class="bg-web-ascent-1 rounded-tr-[2rem] rounded-tl-[2rem] min-h-[9rem] p-5 text-center text-white flex justify-center items-center flex-col">
                            <h2 class="font-bold text-xl pb-2">Database Services</h2>
                            <h3>Cosmos DB, MySQL, MS-SQL, Maria DB, PostgreSQL, Redies, Data Factories</h3>
                        </div>
                        <ul class="pl-9 py-3 list-disc">
                            <li>Add-On Service <span class="text-gray-500 text-sm">(Service Type)</span></li>
                            <li>PER Service/NODE <span class="text-gray-500 text-sm">(Pricing Model)</span></li>
                            <li>Monthly <span class="text-gray-500 text-sm">(Pricing Type)</span></li>
                        </ul>
                    </div>

                    <div class="shadow-[0px_0px_20px_rgba(0,0,0,0.6)] rounded-[2rem]">
                        <div
                            class="bg-web-ascent-1 rounded-tr-[2rem] rounded-tl-[2rem] min-h-[9rem] p-5 text-center text-white flex justify-center items-center flex-col">
                            <h2 class="font-bold text-xl pb-2">Container Services</h2>
                        </div>
                        <ul class="pl-9 py-3 list-disc">
                            <li>Add-On Service <span class="text-gray-500 text-sm">(Service Type)</span></li>
                            <li>PER Service/NODE <span class="text-gray-500 text-sm">(Pricing Model)</span></li>
                            <li>Monthly <span class="text-gray-500 text-sm">(Pricing Type)</span></li>
                        </ul>
                    </div>

                    <div class="shadow-[0px_0px_20px_rgba(0,0,0,0.6)] rounded-[2rem]">
                        <div
                            class="bg-web-ascent-1 rounded-tr-[2rem] rounded-tl-[2rem] min-h-[9rem] p-5 text-center text-white flex justify-center items-center flex-col">
                            <h2 class="font-bold text-xl pb-2">Analytics</h2>
                            <h3>(Data Engineering Services)</h3>
                        </div>
                        <ul class="pl-9 py-3 list-disc">
                            <li>Add-On Service <span class="text-gray-500 text-sm">(Service Type)</span></li>
                            <li>PER Service/NODE <span class="text-gray-500 text-sm">(Pricing Model)</span></li>
                            <li>Monthly <span class="text-gray-500 text-sm">(Pricing Type)</span></li>
                        </ul>
                    </div>

                    <div class="shadow-[0px_0px_20px_rgba(0,0,0,0.6)] rounded-[2rem]">
                        <div
                            class="bg-web-ascent-1 rounded-tr-[2rem] rounded-tl-[2rem] min-h-[9rem] p-5 text-center text-white flex justify-center items-center flex-col">
                            <h2 class="font-bold text-xl pb-2">DevOps Services</h2>
                        </div>
                        <ul class="pl-9 py-3 list-disc">
                            <li>Add-On Service <span class="text-gray-500 text-sm">(Service Type)</span></li>
                            <li>PER Project/APP <span class="text-gray-500 text-sm">(Pricing Model)</span></li>
                            <li>Monthly <span class="text-gray-500 text-sm">(Pricing Type)</span></li>
                        </ul>
                    </div>

                    <div class="shadow-[0px_0px_20px_rgba(0,0,0,0.6)] rounded-[2rem]">
                        <div
                            class="bg-web-ascent-1 rounded-tr-[2rem] rounded-tl-[2rem] min-h-[9rem] p-5 text-center text-white flex justify-center items-center flex-col">
                            <h2 class="font-bold text-xl pb-2">Managed Application Services</h2>
                        </div>
                        <ul class="pl-9 py-3 list-disc">
                            <li>Add-On Service <span class="text-gray-500 text-sm">(Service Type)</span></li>
                            <li>PER VM/NODE <span class="text-gray-500 text-sm">(Pricing Model)</span></li>
                            <li>Monthly <span class="text-gray-500 text-sm">(Pricing Type)</span></li>
                        </ul>
                    </div>

                    <div class="lg:block md:block sm:hidden"></div>

                    <div class="shadow-[0px_0px_20px_rgba(0,0,0,0.6)] rounded-[2rem]">
                        <div
                            class="bg-web-ascent-1 rounded-tr-[2rem] rounded-tl-[2rem] min-h-[9rem] p-5 text-center text-white flex justify-center items-center flex-col">
                            <h2 class="font-bold text-xl pb-2">Disaster Recovery Services</h2>
                        </div>
                        <ul class="pl-9 py-3 list-disc">
                            <li>Add-On Service <span class="text-gray-500 text-sm">(Service Type)</span></li>
                            <li>PER VM/NODE <span class="text-gray-500 text-sm">(Pricing Model)</span></li>
                            <li>Monthly <span class="text-gray-500 text-sm">(Pricing Type)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- tab 4 Ends --}}

            {{-- tab 5 starts --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <p class="text-center">This model
                    provides businesses with devoted resources for managing their workloads, ensuring they receive the
                    necessary attention.</p>
                <div class="text-center p-5 shadow-[0px_0px_12px_rgb(34,63,151)]">
                    <p>Offers IT professionals/engineers that will fully concentrate on the client's needs. Client has full
                        management control over the project and IT professionals / engineers. These resources come at a
                        fixed cost based on the level of experience.</p>
                    <p class="pb-2">These resources can be aligned for all three models of support:</p>
                    <span class="bg-web-ascent-1 text-white p-1 shadow-[0px_0px_10px_rgba(0,0,0,0.5)] mx-1">24/7</span>
                    <span class="bg-[#808080] text-white p-1 shadow-[0px_0px_10px_rgba(0,0,0,0.5)] mx-1">16/7</span>
                    <span class="bg-web-ascent-1 text-white p-1 shadow-[0px_0px_10px_rgba(0,0,0,0.5)] mx-1">8/7</span>
                </div>
                <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 lg:gap-12 md:gap-12 sm:gap-0">
                    <div class="relative group">
                        <div
                            class="text-center shadow-[0px_0px_10px_rgba(0,0,0,0.5)] p-5 translate-y-[75px] group-hover:translate-y-0 transition-all duration-700 relative z-[1] bg-white group-hover:bg-web-ascent-1 min-h-[14rem]">
                            <img src="{{ asset('web/images/managed-services/mom-sm.webp') }}"
                                class="w-auto mx-auto my-0 group-hover:hidden">
                            <img src="{{ asset('web/images/managed-services/mom-sm-2.webp') }}"
                                class="hidden w-auto mx-auto my-0 group-hover:block">
                            <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-2xl py-3 group-hover:text-white">Service
                                Monitoring</h2>
                            <a class="bg-web-ascent-1 text-white rounded-xl py-1 px-2 group-hover:hidden">Read More</a>
                        </div>
                        <div
                            class="relative shadow-[0px_0px_10px_rgba(0,0,0,0.5)] lg:p-7 md:p-7 sm:py-2 sm:px-7 -translate-y-[150px] min-h-[14rem] group-hover:translate-y-0 transition-all duration-700">
                            <ul class="list-disc">
                                <li>Numerous dashboards and logs, records the status of resources.</li>
                                <li>In daily work, a consolidated monitoring of the systems and services operated is
                                    achieved by means of service monitoring.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="relative group">
                        <div
                            class="text-center shadow-[0px_0px_10px_rgba(0,0,0,0.5)] p-5 translate-y-[75px] group-hover:translate-y-0 transition-all duration-700 relative z-[1] bg-white group-hover:bg-web-ascent-1 min-h-[14rem]">
                            <img src="{{ asset('web/images/managed-services/mom-hs.webp') }}"
                                class="w-auto mx-auto my-0 group-hover:hidden">
                            <img src="{{ asset('web/images/managed-services/mom-hs-2.webp') }}"
                                class="hidden w-auto mx-auto my-0 group-hover:block">
                            <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-2xl py-3 group-hover:text-white">Hourly
                                Support</h2>
                            <a class="bg-web-ascent-1 text-white rounded-xl py-1 px-2 group-hover:hidden">Read More</a>
                        </div>
                        <div
                            class="relative shadow-[0px_0px_10px_rgba(0,0,0,0.5)] lg:p-7 md:p-7 sm:py-2 sm:px-7 -translate-y-[150px] min-h-[14rem] group-hover:translate-y-0 transition-all duration-700">
                            <p>Monitoring has three models of support:</p>
                            <ul class="list-disc">
                                <li>24/7</li>
                                <li>16/7</li>
                                <li>8/7</li>
                            </ul>
                        </div>
                    </div>

                    <div class="relative group">
                        <div
                            class="text-center shadow-[0px_0px_10px_rgba(0,0,0,0.5)] p-5 translate-y-[75px] group-hover:translate-y-0 transition-all duration-700 relative z-[1] bg-white group-hover:bg-web-ascent-1 min-h-[14rem]">
                            <img src="{{ asset('web/images/managed-services/mom-tpi.webp') }}"
                                class="w-auto mx-auto my-0 group-hover:hidden">
                            <img src="{{ asset('web/images/managed-services/mom-tpi-2.webp') }}"
                                class="hidden w-auto mx-auto my-0 group-hover:block">
                            <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-2xl py-3 group-hover:text-white">Third
                                Party Integration</h2>
                            <a class="bg-web-ascent-1 text-white rounded-xl py-1 px-2 group-hover:hidden">Read More</a>
                        </div>
                        <div
                            class="relative shadow-[0px_0px_10px_rgba(0,0,0,0.5)] lg:p-7 md:p-7 sm:py-2 sm:px-7 -translate-y-[150px] min-h-[14rem] group-hover:translate-y-0 transition-all duration-700">
                            <ul class="list-disc">
                                <li>Monitoring includes three unique parameters around Performance Metrics, Log Analytics,
                                    and Application Insights.</li>
                                <li>Provide powerful end-to-end monitoring of applications and other crucial components.
                                </li>
                                <li>Third party applications can also be integrated for monitoring.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tab 5 Ends --}}

            <p class="text-justify pb-2">With Pi
                Datacenters,
                your data remains impervious to ever-evolving challenges, ensuring that your business
                operations are uninterrupted. We recognize the critical role that security plays in maintaining your online
                fortress, and hence, we employ advanced security protocols to safeguard your data against the myriad threats
                that loom in the digital world. Your cloud infrastructure's performance directly influences your business's
                success. Hence, our team, well-versed in the intricate world of <a
                    href="https://picloud.ai/blog/what-is-cloud-computing-a-comprehensive-exploration"
                    class="hover:underline underline-offset-2 text-blue-600" target="_blank">cloud computing</a>,
                meticulously fine-tunes
                your setup. With Pi, you can expect nothing less than unparalleled performance, ensuring a seamless user
                experience and the ability to meet your customers' demands effectively.</p>

            <p class="text-justify pb-2">In a world
                fueled by
                data and connectivity, Pi Datacenters is not just a service provider; we are your
                strategic partner in achieving digital excellence. Our Multi Cloud Managed Services are meticulously crafted
                to not only meet your requirements but to exceed them. We are dedicated to your success, and our expertise
                is your competitive edge in the digital arena. Welcome to a new era of cloud management with Pi Datacenters.
                Your journey to digital greatness begins here.</p>
        </div>
    </section>
    {{-- models ends --}}




    {{-- popup starts --}}
    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto popup_form popup-overlay">
        <div class="container">
            <div class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16">
                <form action="{{ route('handle.brochure.form.enquiry') }}" method="POST"
                    class="md:px-10 sm:px-5 py-3 text-center space-y-3">

                    @csrf
                    <input type="hidden" name="form_subject" id="form_subject" value="Brochure From Enquiry" required>
                    <input type="hidden" name="download_file" id="download_file"
                        value="{{ asset('web/pdf/multi-cloud-brochure.pdf') }}" required>

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
