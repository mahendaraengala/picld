@extends('web.layouts.app')

@section('web-head')
    <title>RIM | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/managed-services/new-rims-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">
                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">RIMS</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-24 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Ensure your IT
                            infrastructure runs flawlessly with Pi Remote Infrastructure Management
                            Services. We monitor, manage, and optimize your systems 24/7, ensuring maximum
                            uptime and performance. Let Pi handle the complexities, so you can focus on growth.
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
            <div class="pb-5">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">What is RIMS?</h2>
                <p class="text-justify pt-4"> <a
                        href="https://pidatacenters.com/knowledge-hub/remote-infrastructure-management-services-a-comprehensive-guide"
                        class="hover:underline underline-offset-2 text-blue-600" target="_blank">Remote
                        Infrastructure Management (RIM)</a> is the process of managing the IT infrastructure of an
                    organization entirely, or in parts, from a geographically separated location. The location from where
                    the services are carried out is often at a different geographic area and thus remote from the actual
                    physical location of the IT infrastructure being managed. The IT infrastructure that forms the base of
                    these operations is also scattered across geographies to support the various functional areas.</p>
            </div>
        </div>
    </section>
    {{-- intro cont ends --}}

    {{-- why rims starts --}}
    <section>
        <div class="container">
            <div class="pb-5">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Why RIMS?</h2>
            </div>
            <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-8 py-7">
                <div class="group cursor-pointer hover:shadow-[4px_-4px_10px_rgba(0,0,0,0.3)] p-3 rounded-lg">
                    <img src="{{ asset('web/images/managed-services/cost-savings-blue.svg') }}"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_8px_rgba(0,0,0,0.3)] rounded-[1.3rem] p-2 group-hover:hidden">
                    <img src="{{ asset('web/images/managed-services/cost-savings-white.svg') }}"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_8px_rgba(0,0,0,0.3)] rounded-[1.3rem] p-2 bg-web-ascent-1 hidden group-hover:block">
                    <h3 class="font-bold text-center text-xl pt-4">Cost Savings</h3>
                </div>
                <div class="group cursor-pointer hover:shadow-[4px_-4px_10px_rgba(0,0,0,0.3)] p-3 rounded-lg">
                    <img src="{{ asset('web/images/managed-services/core-business-blue.svg') }}"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_8px_rgba(0,0,0,0.3)] rounded-[1.3rem] p-2 group-hover:hidden">
                    <img src="{{ asset('web/images/managed-services/core-business-white.svg') }}"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_8px_rgba(0,0,0,0.3)] rounded-[1.3rem] p-2 bg-web-ascent-1 hidden group-hover:block">
                    <h3 class="font-bold text-center text-xl pt-4">Focus on Core Business</h3>
                </div>
                <div class="group cursor-pointer hover:shadow-[4px_-4px_10px_rgba(0,0,0,0.3)] p-3 rounded-lg">
                    <img src="{{ asset('web/images/managed-services/central-management-blue.svg') }}"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_8px_rgba(0,0,0,0.3)] rounded-[1.3rem] p-2 group-hover:hidden">
                    <img src="{{ asset('web/images/managed-services/central-management-white.svg') }}"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_8px_rgba(0,0,0,0.3)] rounded-[1.3rem] p-2 bg-web-ascent-1 hidden group-hover:block">
                    <h3 class="font-bold text-center text-xl pt-4">Central Management</h3>
                </div>
                <div class="group cursor-pointer hover:shadow-[4px_-4px_10px_rgba(0,0,0,0.3)] p-3 rounded-lg">
                    <img src="{{ asset('web/images/managed-services/low-risk-blue.svg') }}"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_8px_rgba(0,0,0,0.3)] rounded-[1.3rem] p-2 group-hover:hidden">
                    <img src="{{ asset('web/images/managed-services/low-risk-white.svg') }}"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_8px_rgba(0,0,0,0.3)] rounded-[1.3rem] p-2 bg-web-ascent-1 hidden group-hover:block">
                    <h3 class="font-bold text-center text-xl pt-4">Low Risk</h3>
                </div>
                <div class="group cursor-pointer hover:shadow-[4px_-4px_10px_rgba(0,0,0,0.3)] p-3 rounded-lg">
                    <img src="{{ asset('web/images/managed-services/high-productivity-blue.svg') }}"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_8px_rgba(0,0,0,0.3)] rounded-[1.3rem] p-2 group-hover:hidden">
                    <img src="{{ asset('web/images/managed-services/high-productivity-white.svg') }}"
                        class="w-20 mx-auto my-0 shadow-[0px_0px_8px_rgba(0,0,0,0.3)] rounded-[1.3rem] p-2 bg-web-ascent-1 hidden group-hover:block">
                    <h3 class="font-bold text-center text-xl pt-4">High Productivity</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="py-8">
        <div class="container">
            <ul
                class="lg:flex md:flex sm:block justify-center items-center sm:text-center lg:space-x-5 md:space-x-5 border-b-4 border-black tabs-btns">
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-2 sm:w-[90%] active">
                    <button>Services</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-2 sm:w-[90%]">
                    <button>Process</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-2 sm:w-[90%]">
                    <button>People</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-2 sm:w-[90%]">
                    <button>Parameters</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:my-0 sm:w-[90%]">
                    <button>Benefits</button>
                </li>
            </ul>

            {{-- tab 1 starts --}}
            <div class="space-y-5 py-4 tabs-content">
                <div>
                    <div class="pb-5">
                        <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Our RIM Services</h2>
                    </div>
                    <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grd-cols-1 gap-7 py-7 anim-services">
                        <div class="border-2 group p-4 shadow-[0px_0px_2px_rgba(0,0,0,0.3)]">
                            <img src="{{ asset('web/images/managed-services/rims-service-1.webp') }}"
                                class="w-16 mx-auto my-0">
                            <h3 class="font-bold text-center pt-4 text-xl">Computer</h3>
                        </div>
                        <div class="border-2 group p-4 shadow-[0px_0px_2px_rgba(0,0,0,0.3)]">
                            <img src="{{ asset('web/images/managed-services/rims-service-2.webp') }}"
                                class="w-16 mx-auto my-0">
                            <h3 class="font-bold text-center pt-4 text-xl">Network</h3>
                        </div>
                        <div class="border-2 group p-4 shadow-[0px_0px_2px_rgba(0,0,0,0.3)]">
                            <img src="{{ asset('web/images/managed-services/rims-service-3.webp') }}"
                                class="w-16 mx-auto my-0">
                            <h3 class="font-bold text-center pt-4 text-xl">Security</h3>
                        </div>
                        <div class="border-2 group p-4 shadow-[0px_0px_2px_rgba(0,0,0,0.3)]">
                            <img src="{{ asset('web/images/managed-services/rims-service-4.webp') }}"
                                class="w-16 mx-auto my-0">
                            <h3 class="font-bold text-center pt-4 text-xl">Storage</h3>
                        </div>
                        <div class="border-2 group p-4 shadow-[0px_0px_2px_rgba(0,0,0,0.3)]">
                            <img src="{{ asset('web/images/managed-services/rims-service-5.webp') }}"
                                class="w-16 mx-auto my-0">
                            <h3 class="font-bold text-center pt-4 text-xl">Database</h3>
                        </div>
                        <div class="border-2 group p-4 shadow-[0px_0px_2px_rgba(0,0,0,0.3)]">
                            <img src="{{ asset('web/images/managed-services/rims-service-6.webp') }}"
                                class="w-16 mx-auto my-0">
                            <h3 class="font-bold text-center pt-4 text-xl">ERP</h3>
                        </div>
                        <div class="border-2 group p-4 shadow-[0px_0px_2px_rgba(0,0,0,0.3)]">
                            <img src="{{ asset('web/images/managed-services/rims-service-7.webp') }}"
                                class="w-16 mx-auto my-0">
                            <h3 class="font-bold text-center pt-4 text-xl">Business Continuity</h3>
                        </div>
                        <div class="border-2 group p-4 shadow-[0px_0px_2px_rgba(0,0,0,0.3)]">
                            <img src="{{ asset('web/images/managed-services/rims-service-8.webp') }}"
                                class="w-16 mx-auto my-0">
                            <h3 class="font-bold text-center pt-4 text-xl">Vendors & Assets</h3>
                        </div>
                    </div>


                    <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 lg:gap-12 md:gap-12 sm:gap-0 pt-5">
                        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-9 bg-gray-100 p-5">
                            <div>
                                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl pb-1">Computer</h2>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">OS, Physical Servers, VMs, Containers
                                </h3>
                                <p>Best Practice Guidelines | General Consultations | Planning | Service Documentation |
                                    Vendor & Asset management | Tools & techniques</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Administration</h3>
                                <p>Configuring | Patch Management | Installations | Inventory Management (Physical &
                                    Virtual) | Hardening | Document & Maintain SOPs | Backups</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Monitoring</h3>
                                <p>24/7 Alert Monitoring | Resource utilization | Events & Error capturing | Performance
                                    Monitoring | Infrastructure Health | Scheduled reporting</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Support</h3>
                                <p>Incident Management | Major Incident management | Problem management | Change Management
                                    | Service Requests | Performance Optimization</p>
                            </div>
                            <div>
                                <img src="{{ asset('web/images/managed-services/computer.webp') }}"
                                    class="w-full mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-9">
                            <div>
                                <img src="{{ asset('web/images/managed-services/network.webp') }}"
                                    class="w-full mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                            </div>
                            <div>
                                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl pb-1">Network</h2>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Network Devices, Network Operations
                                    Center & Content Delivery</h3>
                                <p>Best Practice Guidelines | General Consultations | Planning | Service Documentation |
                                    Vendor & Asset management | Tools & techniques</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Administration</h3>
                                <p>Switches, Routers, Firewalls, MPLS, Wireless Access Points | Inventory Mapping | Testing
                                    drills | Network Restrictions | Access controls | VPN management | Backups | Wireless
                                    Network Management</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Monitoring</h3>
                                <p>24/7 Alert Monitoring | Resource utilization | Events & Error capturing | Performance
                                    Monitoring | Infrastructure Health | Scheduled reporting</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Support</h3>
                                <p>Incident Management | Major Incident management | Problem management | Change Management
                                    | Service Requests | Performance Optimization</p>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-9 bg-gray-100 p-5">
                            <div>
                                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl pb-1">Security</h2>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Security Operations Center with SIEM |
                                    App, User, Data & Infrastructure Security</h3>
                                <p>Best Practice Guidelines | General Consultations | Planning | Service Documentation |
                                    Vendor & Asset management | Tools & techniques</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Administration</h3>
                                <p>Vulnerability Assessment & Penetration Testing | DDoS Protection | Advanced Threat
                                    Prevention | Web Filtering | Antivirus & Patch Management | Firewall Management | WAF
                                    management</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Monitoring</h3>
                                <p>24/7 Monitoring for External and Internal threats | Detailed Reporting</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Support</h3>
                                <p>Incident Management | Major Incident management | Problem management | Change Management
                                    | Service Requests</p>
                            </div>
                            <div>
                                <img src="{{ asset('web/images/managed-services/security.webp') }}"
                                    class="w-full mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-9">
                            <div>
                                <img src="{{ asset('web/images/managed-services/storage.webp') }}"
                                    class="w-full mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                            </div>
                            <div>
                                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl pb-1">Storage</h2>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Object Storage, Block Storage, Files
                                    Storage & Archival</h3>
                                <p>Best Practice Guidelines | General Consultations | Planning | Service Documentation |
                                    Vendor & Asset management | Tools & techniques</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Administration</h3>
                                <p>Vulnerability Assessment & Penetration Testing | DDoS Protection | Advanced Threat
                                    Prevention | Web Filtering | Antivirus & Patch Management | Firewall Management | WAF
                                    management</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Monitoring</h3>
                                <p>SAN Availability Monitoring | Storage event Log Monitoring | Monitoring Storage Boxes |
                                    Software Monitoring | Capacity Management | provisioning | Scheduled Reporting</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Support</h3>
                                <p>Incident Management | Major Incident management | Service Requests | Change Management |
                                    Problem Management | Performance Optimization | Firmware Maintenance</p>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-9 bg-gray-100 p-5">
                            <div>
                                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl pb-1">Databases</h2>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">HANA, Ms SQL Server, DB2, Sybase,
                                    MySQL, Oracle, MongoDB etc</h3>
                                <p>Best Practice Guidelines | General Consultations | Planning | Service Documentation |
                                    Vendor & Asset management | Tools & techniques</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Administration</h3>
                                <p>Database Instances | DB Export and Import | Event Management | Periodic Report Generation
                                    | Objects Creation / Review</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Monitoring</h3>
                                <p>24/7 Alert Monitoring | Activity / Log segment monitoring | Session Monitoring | Space
                                    usage /growth of Database objects/Creation of Logical devices Monitoring | Query or
                                    Transaction monitoring</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Data Resiliency</h3>
                                <p>DBSetup and Configuration | Backup, Failover management, Recovery | Cluster Setup and
                                    Configuratio | Mirroring and Log Shipping | Migrations</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Support</h3>
                                <p>Incident Management | Major Incident management | Problem management | Change Management
                                    | Service Requests | Performance Optimization</p>
                            </div>
                            <div>
                                <img src="{{ asset('web/images/managed-services/database.webp') }}"
                                    class="w-full mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-9">
                            <div>
                                <img src="{{ asset('web/images/managed-services/erp.webp') }}"
                                    class="w-full mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                            </div>
                            <div>
                                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl pb-1">ERP</h2>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">SAP</h3>
                                <p>Best Practice Guidelines | Service Documentation | General Consultations | Vendor & Asset
                                    management | Planning | Tools & techniques</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Service Portfolio</h3>
                                <p>Enterprise application management | Technical/Functional Consultation & Manage services |
                                    S4HANA Implementation & Services | Application upgrade services | Capacity planning |
                                    Performance Optimization | Data Center migration services | Solman setup and
                                    Integrationservices</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Support</h3>
                                <p>Incident Management | Major Incident management | Problem Management| Change Management |
                                    Service Requests</p>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-9 bg-gray-100 p-5">
                            <div>
                                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl pb-1">Business Continuity</h2>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Backups, Disaster Recovery & High
                                    Availability</h3>
                                <p>Best Practice Guidelines | Service Documentation | General Consultations | Vendor & Asset
                                    management | Planning | Tools & techniques</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Administration</h3>
                                <p>Scheduling Backups | Setting RTO & RPO for Failover | Deleting Obsolete backups |
                                    Migrations | Recovery Processes | DR Drills</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Monitoring</h3>
                                <p>24/7 Alert Monitoring | Infrastructure Health | Tools & Techniques | Proactive & reactive
                                    alert notifications</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Support</h3>
                                <p>Incident Management | Major Incident management | Problem management | Change Management
                                    | Service Requests | Performance Optimization</p>
                            </div>
                            <div>
                                <img src="{{ asset('web/images/managed-services/business-continuity.webp') }}"
                                    class="w-full mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-9">
                            <div>
                                <img src="{{ asset('web/images/managed-services/vendor.webp') }}"
                                    class="w-full mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                            </div>
                            <div>
                                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl pb-1">Vendor & Asset Management
                                </h2>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">IT Vendor Databases</h3>
                                <p>Database of your various IT Vendors with all necessary details is maintained</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">Communication Logging</h3>
                                <p>Vendor communication is logged for reference</p>
                                <h3 class="font-bold text-xl text-web-ascent-1 py-1">SLA Compliance</h3>
                                <p>Vendors are closely monitored on their SLA adherence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tab 1 Ends --}}

            {{-- tab 2 starts --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 lg:gap-10 md:gap-10 sm:gap-0">
                    <div class="grid lg:grid-cols-2 md:griid-cols-2 sm:grid-cols-1 items-center gap-12 p-5">
                        <div>
                            <img src="{{ asset('web/images/managed-services/incident-management.webp') }}">
                        </div>
                        <div>
                            <h2 class="font-bold text-center lg:text-2xl md:text-xl sm:text-xl pb-3">Incident
                                Management</h2>
                            <table class="w-full">
                                <tr>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Priority Level</th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Response Time</th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Response Time</th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Guaranteed SLA</th>
                                </tr>
                                <tr>
                                    <td class="border-2 border-black px-2 py-1 text-center">P1</td>
                                    <td class="border-2 border-black px-2 py-1 text-center"> 15 mins</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">4 hrs</td>
                                    <td class="border-2 border-black px-2 py-1 text-center"> 99%</td>
                                </tr>
                                <tr>
                                    <td class="border-2 border-black px-2 py-1 text-center">P2</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">30 mins</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">8 hrs</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">99%</td>
                                </tr>
                                <tr>
                                    <td class="border-2 border-black px-2 py-1 text-center">P3</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">2 hrs</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">48 hr</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">99%</td>
                                </tr>
                                <tr>
                                    <td class="border-2 border-black px-2 py-1 text-center">P4</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">2 hrs</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">48 hr</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">99%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 md:griid-cols-2 sm:grid-cols-1 items-center gap-12 bg-gray-100 p-5">
                        <div>
                            <h2 class="font-bold text-center lg:text-2xl md:text-xl sm:text-xl pb-3">Major Incident
                                Management</h2>
                            <table class="w-full">
                                <tr>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Priority Level
                                    </th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Response Time</th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Response Time</th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Guaranteed SLA
                                    </th>
                                </tr>
                                <tr>
                                    <td class="border-2 border-black px-2 py-1 text-center">P0</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">15 mins</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">3 hrs</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">99%</td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <img src="{{ asset('web/images/managed-services/major-incident.webp') }}">
                        </div>
                    </div>


                    <div class="grid lg:grid-cols-2 md:griid-cols-2 sm:grid-cols-1 items-center gap-12 p-5">
                        <div>
                            <img src="{{ asset('web/images/managed-services/problem-management.webp') }}">
                        </div>
                        <div>
                            <h2 class="font-bold text-center lg:text-2xl md:text-xl sm:text-xl pb-3">Problem
                                Management<br>
                                (Underlying Cause of One or More Incidents)</h2>
                            <table class="w-full">
                                <tr>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Priority Level
                                    </th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Response Time</th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">SLA
                                    </th>
                                </tr>
                                <tr>
                                    <td class="border-2 border-black px-2 py-1 text-center">P5</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">4 hrs</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">98%</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 md:griid-cols-2 sm:grid-cols-1 items-center gap-12 bg-gray-100 p-5">
                        <div>
                            <h2 class="font-bold text-center lg:text-2xl md:text-xl sm:text-xl pb-3">Change
                                Management<br>
                                (Elimination of Problem)</h2>
                            <table class="w-full">
                                <tr>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Priority Level
                                    </th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Response Time</th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">SLA
                                    </th>
                                </tr>
                                <tr>
                                    <td class="border-2 border-black px-2 py-1 text-center">P5</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">4 hrs</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">98%</td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <img src="{{ asset('web/images/managed-services/change-management.webp') }}">
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 md:griid-cols-2 sm:grid-cols-1 items-center gap-12 p-5">
                        <div>
                            <img src="{{ asset('web/images/managed-services/service-requests.webp') }}">
                        </div>
                        <div>
                            <h2 class="font-bold text-center lg:text-2xl md:text-xl sm:text-xl pb-3">Service
                                Requests<br>
                                (Request Full filment)</h2>
                            <table class="w-full">
                                <tr>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Priority Level
                                    </th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">
                                        Response Time</th>
                                    <th class="border-2 border-black lg:p-2 md:p-2 sm:p-0 bg-web-ascent-1 text-white">SLA
                                    </th>
                                </tr>
                                <tr>
                                    <td class="border-2 border-black px-2 py-1 text-center">P3</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">4 hrs</td>
                                    <td class="border-2 border-black px-2 py-1 text-center">98%</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-9 bg-gray-100 p-5">
                        <div>
                            <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl pb-1">Custom Scheduled Reporting
                            </h2>
                            <h3 class="font-bold text-xl text-web-ascent-1 py-1">List of Assets</h3>
                            <p>List of Assets managed by Pi | List of Assets discovered but not managed by Pi | List of
                                Assets managed under each domain</p>
                            <h3 class="font-bold text-xl text-web-ascent-1 py-1">Service Metrics</h3>
                            <p>Service Maps | Availability & Performance metrics under each domain</p>
                            <h3 class="font-bold text-xl text-web-ascent-1 py-1">People Metrics</h3>
                            <p>Productivity | Quality</p>
                            <h3 class="font-bold text-xl text-web-ascent-1 py-1">Alerts</h3>
                            <p>Classifying genuine and false alerts | Number of self-heals | Total tickets generated
                                priority wise | | Alert to Ticket ratio, etc..</p>
                            <h3 class="font-bold text-xl text-web-ascent-1 py-1">Management Reporting</h3>
                            <p>Incidents by priority level handled during time period | Problem & Change management
                                activities taken up with results obtained</p>
                            <h3 class="font-bold text-xl text-web-ascent-1 py-1">Upcoming tasks</h3>
                            <p>Proactive CSI (Continual Service Improvement) Plans | Projection of planned upgrades or
                                Changes to the Environment</p>
                        </div>
                        <div>
                            <img src="{{ asset('web/images/managed-services/custom-schedule.webp') }}"
                                class="w-full mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                        </div>
                    </div>


                </div>
            </div>
            {{-- tab 2 Ends --}}

            {{-- tab 3 starts --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 lg:gap-10 md:gap-10 sm:gap-5">
                    <div
                        class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 items-center lg:gap-12 md:gap-12 sm:gap-0">
                        <div>
                            <img src="{{ asset('web/images/managed-services/resolution-distribution.webp') }}"
                                class="w-96 mx-auto my-0">
                        </div>
                        <div>
                            <h2 class="font-bold text-center lg:text-4xl md:text-3xl sm:text-3xl pb-3">Resource
                                Distribution
                            </h2>
                            <div class="flex justify-center items-center gap-10 py-3">
                                <ul>
                                    <li><span class="text-lg pr-3 text-[#42D0DC]">&#9632;</span>Computer</li>
                                    <li><span class="text-lg pr-3 text-[#49C6F7]">&#9632;</span>Network</li>
                                    <li><span class="text-lg pr-3 text-[#89A2EC]">&#9632;</span>Databases</li>
                                    <li><span class="text-lg pr-3 text-[#A4DCF8]">&#9632;</span>ERP</li>
                                </ul>
                                <ul>
                                    <li><span class="text-lg pr-3 text-[#457D7F]">&#9632;</span>Security</li>
                                    <li><span class="text-lg pr-3 text-[#2F4485]">&#9632;</span>Storage</li>
                                    <li><span class="text-lg pr-3 text-[#3862E1]">&#9632;</span>Business Continuity</li>
                                    <li><span class="text-lg pr-3 text-[#206781]">&#9632;</span>Vendors & Assets</li>
                                </ul>
                            </div>
                            <p class="text-center">* Subject to vary on case to case basis as per Client’s IT layout</p>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 items-center gap-12 bg-gray-100 p-5">
                        <div>
                            <h2 class="font-bold text-center lg:text-4xl md:text-3xl sm:text-3xl pb-3">Resource
                                Distribution</h2>
                            <div class="flex justify-center items-center gap-6">
                                <div>
                                    <img src="{{ asset('web/images/managed-services/rd-1.webp') }}"
                                        class="w-auto mx-auto my-0">
                                    <h3 class="font-medium text-center">Client Relationship Manager(On-site)</h3>
                                </div>
                                <div>
                                    <img src="{{ asset('web/images/managed-services/rd-2.webp') }}"
                                        class="w-auto mx-auto my-0">
                                    <h3 class="font-medium text-center">Pi Service Delivery Manager(Remote)</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('web/images/managed-services/rd-table.webp') }}"
                                class="w-auto mx-auto my-0">
                            <p class="text-center">* Subject to vary on case to case basis as per Client’s IT layout</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tab 3 Ends --}}

            {{-- tab 4 starts --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 lg:gap-10 md:gap-10 sm:gap-0">
                    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 items-center gap-12 p-5">
                        <div>
                            <img src="{{ asset('web/images/managed-services/ap-1.webp') }}"
                                class="w-96 mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                        </div>
                        <div>
                            <h2 class="font-bold text-center lg:text-3xl md:text-2xl sm:text-2xl pb-3">Avg Productivity
                            </h2>
                            <img src="{{ asset('web/images/managed-services/avg-1.webp') }}" class="py-3 mx-auto my-0">
                            <p class="text-center">* Number of Tickets Handled Per Person Per Month (160hrs)</p>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 items-center gap-12 bg-gray-100 p-5">
                        <div>
                            <h2 class="font-bold text-center lg:text-3xl md:text-2xl sm:text-2xl pb-3">Avg Quality</h2>
                            <img src="{{ asset('web/images/managed-services/avg-2.webp') }}" class="py-3 mx-auto my-0">
                            <p class="text-center">* 100 (-) %age of Tickets Delayed Per Month</p>
                        </div>
                        <div>
                            <img src="{{ asset('web/images/managed-services/ap-2.webp') }}"
                                class="w-96 mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 items-center gap-12 p-5">
                        <div>
                            <img src="{{ asset('web/images/managed-services/ap-3.webp') }}"
                                class="w-96 mx-auto my-0 rounded-tl-[5rem] rounded-br-[5rem]">
                        </div>
                        <div>
                            <h2 class="font-bold text-center lg:text-3xl md:text-2xl sm:text-2xl pb-3">Avg Customer
                                Satisfaction</h2>
                            <img src="{{ asset('web/images/managed-services/avg-3.webp') }}" class="py-3 mx-auto my-0">
                            <p class="text-center">* Based on Parameters (n = 14) Related to People, Project Management,
                                Responsiveness, Resolutions, Value, Differentiation etc.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tab 4 Ends --}}

            {{-- tab 5 starts --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-10">
                    <div class="relative group">
                        <img src="{{ asset('web/images/managed-services/bene-1.webp') }}"
                            class="rounded-tl-[5rem] rounded-br-[5rem]">
                        <div>
                            <p
                                class="absolute top-0 left-0 bg-[#223f97d9] rounded-tl-[5rem] rounded-br-[5rem] w-full h-full flex justify-center items-center text-white font-medium text-center p-5 text-xl invisible group-hover:visible">
                                Significant
                                savings of customer's IT spend due to low-cost model</p>
                        </div>
                    </div>
                    <div class="relative group">
                        <img src="{{ asset('web/images/managed-services/bene-2.webp') }}"
                            class="rounded-tl-[5rem] rounded-br-[5rem]">
                        <div>
                            <p
                                class="absolute top-0 left-0 bg-[#223f97d9] rounded-tl-[5rem] rounded-br-[5rem] w-full h-full flex justify-center items-center text-white font-medium text-center p-5 text-xl invisible group-hover:visible">
                                Guarantee of
                                99.995% Uptime for business-critical service availability</p>
                        </div>
                    </div>
                    <div class="relative group">
                        <img src="{{ asset('web/images/managed-services/bene-3.webp') }}"
                            class="rounded-tl-[5rem] rounded-br-[5rem]">
                        <div>
                            <p
                                class="absolute top-0 left-0 bg-[#223f97d9] rounded-tl-[5rem] rounded-br-[5rem] w-full h-full flex justify-center items-center text-white font-medium text-center p-5 text-xl invisible group-hover:visible">
                                Follow-the-Sun
                                model for monitoring & support based on global best practices</p>
                        </div>
                    </div>
                    <div class="relative group">
                        <img src="{{ asset('web/images/managed-services/bene-4.webp') }}"
                            class="rounded-tl-[5rem] rounded-br-[5rem]">
                        <div>
                            <p
                                class="absolute top-0 left-0 bg-[#223f97d9] rounded-tl-[5rem] rounded-br-[5rem] w-full h-full flex justify-center items-center text-white font-medium text-center p-5 text-xl invisible group-hover:visible">
                                Integrated
                                governance and service management for improved process excellence</p>
                        </div>
                    </div>
                    <div class="relative group">
                        <img src="{{ asset('web/images/managed-services/bene-5.webp') }}"
                            class="rounded-tl-[5rem] rounded-br-[5rem]">
                        <div>
                            <p
                                class="absolute top-0 left-0 bg-[#223f97d9] rounded-tl-[5rem] rounded-br-[5rem] w-full h-full flex justify-center items-center text-white font-medium text-center p-5 text-xl invisible group-hover:visible">
                                Multi-layer
                                physical, online and digital security assuring zero breach of customer's data</p>
                        </div>
                    </div>
                    <div class="relative group">
                        <img src="{{ asset('web/images/managed-services/bene-6.webp') }}"
                            class="rounded-tl-[5rem] rounded-br-[5rem]">
                        <div>
                            <p
                                class="absolute top-0 left-0 bg-[#223f97d9] rounded-tl-[5rem] rounded-br-[5rem] w-full h-full flex justify-center items-center text-white font-medium text-center p-5 text-xl invisible group-hover:visible">
                                Rapid delivery
                                of services as per defined SLA owing to 100% automated facility</p>
                        </div>
                    </div>
                    <div class="lg:block md:block sm:hidden"></div>
                    <div class="relative group">
                        <img src="{{ asset('web/images/managed-services/bene-7.webp') }}"
                            class="rounded-tl-[5rem] rounded-br-[5rem]">
                        <div>
                            <p
                                class="absolute top-0 left-0 bg-[#223f97d9] rounded-tl-[5rem] rounded-br-[5rem] w-full h-full flex justify-center items-center text-white font-medium text-center p-5 text-xl invisible group-hover:visible">
                                Buyer-convenient
                                contracts with flexible pricing aimed at boosting customer's ROI</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tab 5 Ends --}}
        </div>
    </section>


    {{-- why rims ends --}}
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
@endsection
