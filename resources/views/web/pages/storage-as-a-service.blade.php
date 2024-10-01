@extends('web.layouts.app')

@section('web-head')
    <title>Storage as a Service | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/xaas/new-storage-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Storage as a Service</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-24 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Storage as a Service
                            (STaaS) offers businesses a scalable, cost-effective solution for managing their data storage
                            needs. By leveraging cloud-based infrastructure, STaaS provides flexible storage options with
                            robust security, ensuring data is always accessible and protected. It allows organizations to
                            efficiently handle large volumes of data without significant upfront investments in hardware,
                            making it an ideal choice for dynamic, data-driven environments.
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
    <section class="py-4 space-y-5">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Go Practically Limitless
                    Capacity With Pi Cloud</h2>
                <p class="text-center py-5">Data is the lifeline of any business and it is important to consider
                    how enterprises store data, based on enterprise business needs. Pi Cloud allows enterprises to
                    select storage of choice that meets business objectives. Pi Cloud presents varied storage
                    formats to hold, organize and present data with objective driven distinct features and
                    capabilities.</p>
            </div>
            <div>
                <h2 class="font-bold lg:text-2xl md:text-xl sm:text-lg text-center text-[#545454]">Storage
                    Solutions</h2>
            </div>

            <div class="py-5">
                <ul
                    class="lg:flex md:flex sm:block justify-center items-center sm:text-center lg:space-x-5 md:space-x-5 border-b-4 border-black">
                    <li id="storage-tab-1" class="storage-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                        onclick="handleToggleStorageTab(1)">
                        <button>Block Storage</button>
                    </li>
                    <li id="storage-tab-2" class="storage-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                        onclick="handleToggleStorageTab(2)">
                        <button>Object Storage</button>
                    </li>
                    <li id="storage-tab-3" class="storage-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:my-0 sm:w-[90%]"
                        onclick="handleToggleStorageTab(3)">
                        <button>File Storage</button>
                    </li>
                </ul>
            </div>

            {{-- Storage sub-tab-1 --}}
            <div class="space-y-5 py-2 storage-subtab-panel hidden" id="storage-subtab-panel-1">
                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <img src="{{ asset('web/images/private-cloud/block_img.webp') }}"
                        alt="Break data into secure, managed chunks. Ultimate flexibility for virtual servers"
                        class="w-96 mx-auto my-0">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Block Storage</h3>
                        <p>This allows enterprises to store data into blocks and then store them with unique
                            identifiers. Block storage on Pi Cloud offers durable, customizable block volumes,
                            attached to virtual servers. Ease of manageability and customization makes them stand
                            out.</p>
                    </div>
                </div>


                {{-- Key Features --}}
                <section class="py-2">
                    <div class="container">
                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                        </div>

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/hp.webp') }}"
                                        alt="Built for speed & reliability – Ideal for critical applications"
                                        class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                        High Performance</h4>
                                </div>
                                <p class="text-center">Ideal for high-performing, mission-critical applications
                                    that require consistent input/output (I/O) performance</p>
                            </div>
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/dr.webp') }}"
                                        alt="Data is retrieved even after deletion in virtual server" class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                        Data Retention</h4>
                                </div>
                                <p class="text-center">Retains data even after deletion of virtual server</p>
                            </div>
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/snap.webp') }}"
                                        alt="Pi cloud block storage with snapshots & resizing for on-demand control"
                                        class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                        Snapshot and Resizing
                                    </h4>
                                </div>
                                <p class="text-center">Features such as snapshot and resizing, are available for
                                    block volumes </p>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Key Features Ends --}}

                <div>
                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases</h3>
                    <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 pt-5 gap-3">
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Critical business applications</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Transactional Databases</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Workloads that require low-latency</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Storage-area network (SAN) environments</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Storage sub-tab-1 Ends --}}

            {{-- Storage sub-tab-2 --}}
            <div class="space-y-5 py-2 storage-subtab-panel hidden" id="storage-subtab-panel-2">
                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Object Storage</h3>
                        <p>Today’s digital world requires data archiving and backing-up of unstructured data. Media
                            and web contents like email, videos, image files, web pages and sensor data produced by
                            IoT has taken the center stage. Object storage on Pi Cloud is ideal for archiving data
                            that does not change frequently.</p>
                    </div>
                    <img src="{{ asset('web/images/private-cloud/object_img.webp') }}"
                        alt="Effortless archiving for massive unstructured data (media, web content, IoT)"
                        class="w-96 mx-auto my-0">
                </div>


                {{-- Key Features --}}
                <section class="py-2">
                    <div class="container">
                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                        </div>

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/dt.webp') }}"
                                        alt="Flexible transfer of data" class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                        Data Transfer</h4>
                                </div>
                                <p class="text-center">Simple and flexible transfer of data</p>
                            </div>
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/sc.webp') }}"
                                        alt="Scales to petabytes with on-demand access" class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                        Scalability</h4>
                                </div>
                                <p class="text-center">Scalability (upto PBs) and distributed access</p>

                            </div>
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/md.webp') }}"
                                        alt="Customize with metadata and attributes for easy retrieval" class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                        Supports Metadata</h4>
                                </div>
                                <p class="text-center">Supports custom Metadata and various attributes</p>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Key Features Ends --}}

                <div>
                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases</h3>
                    <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 pt-5 gap-3">
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Petabyte-scale data volumes</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Highly distributed systems</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Static Websites</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Distributed Storage systems</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Storage sub-tab-2 Ends --}}


            {{-- Storage sub-tab-3 --}}
            <div class="space-y-5 py-2 storage-subtab-panel hidden" id="storage-subtab-panel-3">
                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <img src="{{ asset('web/images/private-cloud/file_img.webp') }}"
                        alt="Easy access to the familiar file folders in the cloud" class="w-96 mx-auto my-0">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">File Storage</h3>
                        <p>A hierarchical storage methodology used to organize and store data on a incompute storage
                            or network-attached storage. File storage on Pi Cloud is a Linux file system, and is the
                            predominant human-readable storage format.</p>
                    </div>
                </div>

                {{-- Key Features --}}
                <section class="py-2">
                    <div class="container">
                        <div>
                            <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                        </div>

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-10 pb-1">
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/os.webp') }}"
                                        alt="Structured data thrives in a hierarchical organization." class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                        Organised Storage</h4>
                                </div>
                                <p class="text-center">Hierarchical file storage works well with easily organized
                                    structured data</p>
                            </div>
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/mas.webp') }}"
                                        alt="Collaborate on files from anywhere." class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                        Multi Access and Sharing
                                    </h4>
                                </div>
                                <p class="text-center">Allows multiple user access to the same file data parked at
                                    distinct locations
                                </p>

                            </div>
                            <div
                                class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                                <div class="flex py-3">
                                    <img src="{{ asset('web/images/private-cloud/snap.webp') }}"
                                        alt="Cloud eliminates hardware costs." class="w-12 h-12">
                                    <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                        Cost Effective
                                    </h4>
                                </div>
                                <p class="text-center">Eliminates the cost of maintaining in-house hardware
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Key Features Ends --}}

                <div>
                    <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases</h3>
                    <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 pt-5 gap-3">
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Local file sharing</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Centralized file collaboration</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Hot & Cold Backup</p>
                        </div>
                        <div
                            class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                            <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                            <p>Newtwork-attached storage systems</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Storage sub-tab-3 Ends --}}
        </div>
    </section>
    {{-- intro cont ends --}}

    {{-- staas cont starts --}}
    <section class="py-4">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-xl text-center">Pi Storage as a Service (STaaS) </h2>
                <p class="pt-3">In today’s data-driven
                    world, managing and storing vast amounts of data efficiently is crucial for business growth and success.
                    <b>Pi DATACENTERS®</b> introduces <b>Storage as a Service (STaaS)</b>—a flexible, scalable, and secure
                    solution
                    designed to meet the diverse storage needs of businesses of all sizes. Whether you need to store
                    business-critical data or large volumes of unstructured data, Pi STaaS ensures your data is always
                    accessible, secure, and optimized for performance.
                </p>
            </div>
            <div>
                <h3 class="font-bold lg:text-3xl md:text-2xl sm:text-2xl text-center pt-3">Why Choose Pi Storage as a
                    Service (STaaS)? </h3>
                <p class="pt-3">With Pi Storage Services,
                    businesses can enjoy a wide range of benefits that go beyond traditional storage solutions. Here's why
                    Pi STaaS stands out: </p>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 py-7">
                    <div class="space-y-2 bg-[#223f9717] p-5 rounded-tl-3xl rounded-br-3xl">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg lg:h-[3.5rem]"> Scalable Storage for Every
                            Need
                        </h4>
                        <ul>
                            <li><b>Elastic Scaling:</b> With Pi STaaS, your storage infrastructure grows with your business.
                                Whether
                                you need extra capacity during peak times or want to be downscale, our services offer
                                seamless
                                scalability. You can increase or decrease your storage usage based on your current needs
                                without
                                investing in additional hardware. </li>

                            <li><b>Multi-Tiered Storage:</b> Choose between hot, warm, or cold storage options, depending on
                                your
                                data's access frequency and requirements. Pi ensures optimized storage for frequently
                                accessed
                                data, while archived data is cost-effectively managed.</li>
                        </ul>
                    </div>
                    <div class="space-y-2 bg-[#223f9717] p-5 rounded-tl-3xl rounded-br-3xl">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg lg:h-[3.5rem]">Cost Efficiency with
                            Pay-As-You-Go Model</h4>
                        <ul>
                            <li><b>No Upfront Investments: </b> goodbye to capital expenditure on costly hardware. Pi STaaS
                                follows
                                a pay-per-use model, ensuring that you only pay for the storage you use. This allows
                                businesses
                                to optimize costs while benefiting from enterprise-grade storage solutions.</li>

                            <li><b>Predictable Pricing: </b> With transparent pricing models, you can manage your budget
                                effectively
                                without unexpected expenses.</li>
                        </ul>
                    </div>
                    <div class="space-y-2 bg-[#223f9717] p-5 rounded-tl-3xl rounded-br-3xl">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg lg:h-[3.5rem]">Unmatched Performance </h4>
                        <ul>
                            <li><b>High-Speed Access: </b> Pi's storage infrastructure is powered by NVMe SSDs, delivering
                                superior IOPS
                                (Input/Output Operations per Second) and ultra-low latency for faster data retrieval and
                                processing.</li>

                            <li><b>Multi-Cloud Compatibility: </b> Whether you're operating on AWS, Azure, GCP, or Oracle
                                Cloud, Pi’s
                                STaaS integrates smoothly with your existing cloud environments, allowing seamless data
                                movement
                                across platforms.</li>
                        </ul>
                    </div>
                    <div class="space-y-2 bg-[#223f9717] p-5 rounded-tl-3xl rounded-br-3xl">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg lg:h-[3.5rem]">Industry-Leading Security</h4>
                        <ul>
                            <li><b>Enterprise-Grade Security:</b> Your data is safeguarded with end-to-end encryption,
                                ensuring it
                                remains secure in transit and at rest. Pi's storage infrastructure complies with the highest
                                security standards such as ISO 27001, PCI-DSS, and SOC2 Type I, giving you peace of mind.
                            </li>

                            <li><b>Data Sovereignty & Compliance:</b> Pi’s STaaS adheres to Indian and global data residency
                                regulations, ensuring that your sensitive data is stored within designated geographic
                                regions,
                                meeting data localization and sovereignty mandates.</li>
                        </ul>
                    </div>
                    <div class="space-y-2 bg-[#223f9717] p-5 rounded-tl-3xl rounded-br-3xl">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg lg:h-[3.5rem]">24/7 Proactive Monitoring and
                            Support</h4>
                        <ul>
                            <li><b>Always-On Support:</b> Pi provides round-the-clock monitoring and support to ensure that
                                your
                                storage infrastructure runs smoothly. Our proactive support teams detect potential issues
                                before
                                they become critical, ensuring that your data is always available.</li>

                            <li><b>Data Backup and Recovery:</b> With built-in backup and disaster recovery solutions, Pi
                                ensures that
                                your data is protected from unexpected events, giving you a comprehensive solution that
                                covers
                                all your storage needs.</li>
                        </ul>
                    </div>
                    <div class="space-y-2 bg-[#223f9717] p-5 rounded-tl-3xl rounded-br-3xl">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg lg:h-[3.5rem]"> AI-Enhanced Storage
                            Optimization</h4>
                        <ul>
                            <li><b>Smart Data Management:</b> Leveraging AI and machine learning, Pi’s storage solutions
                                automatically optimize data placement and access, reducing latency and improving storage
                                efficiency. This intelligence allows businesses to improve performance while minimizing
                                operational complexity. </li>
                        </ul>
                    </div>
                    <div class="space-y-2 bg-[#223f9717] p-5 rounded-tl-3xl rounded-br-3xl">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg lg:h-[3.5rem]">Tier IV Certified Data Centers
                        </h4>
                        <ul>
                            <li><b>TIER IV Infrastructure:</b> Your storage needs are hosted on Pi’s Uptime Institute TIER
                                IV Certified data centers, guaranteeing 99.995% uptime and ensuring continuous availability.
                                Our hyperscale facilities provide a stable environment for mission-critical data. </li>
                        </ul>
                    </div>
                    <div class="space-y-2 bg-[#223f9717] p-5 rounded-tl-3xl rounded-br-3xl">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg lg:h-[3.5rem]">Compliance-Ready for
                            Enterprises
                        </h4>
                        <ul>
                            <li><b>Regulatory Adherence:</b> Pi STaaS is designed to meet the regulatory needs of industries
                                like
                                BFSI, healthcare, government, and e-commerce, ensuring that data storage policies align with
                                industry-specific compliance requirements. </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="font-bold lg:text-3xl md:text-2xl sm:text-2xl text-center pt-3">Unique Selling Proposition (USP)
                    of Pi STaaS </h3>

                <p class="pt-3">Pi Storage as a Service
                    offers scalability, security, and performance unmatched in the industry. Here’s
                    what makes Pi’s STaaS stand out: </p>

                <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-4 pt-8 pb-5">
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[3.5rem]">
                            TIER IV Certified Data Centers</h4>
                        <p class="text-center">The highest reliability and uptime in the industry. </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[3.5rem]">
                            End-to-End Data Encryption</h4>
                        <p class="text-center">Full encryption for data at rest and in transit, ensuring data safety. </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[3.5rem]">
                            AI-Driven Optimization</h4>
                        <p class="text-center">Enhance storage performance through automated, intelligent data management.
                        </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[3.5rem]">
                            Pay-As-You-Go</h4>
                        <p class="text-center">A flexible pricing model that allows businesses to optimize costs. </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[3.5rem]">
                            Multi-Cloud Integration </h4>
                        <p class="text-center">Seamless compatibility with popular cloud platforms like AWS, Azure, and
                            GCP. </p>
                    </div>
                </div>
            </div>
            <div class="pb-3">
                <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-xl text-center">Why Businesses Should Opt for Pi STaaS
                </h2>
                <p class="pt-3">Choosing <b>Pi Storage as
                        a
                        Service</b> means opting for an <b>innovative, scalable, and secure</b> storage solution that grows
                    with your
                    business. Pi empowers enterprises by removing the complexity of managing storage infrastructure while
                    providing enterprise-grade performance, global standards, and cost-effective pricing. </p>
                <p class="pt-3">For businesses that
                    prioritize <b>data security, performance, and flexibility</b>, Pi STaaS is the ideal choice. Whether
                    you’re a
                    fast-growing startup or a large enterprise, Pi’s storage solutions provide the peace of mind you need to
                    focus on innovation and growth while leaving your storage needs in trusted hands. </p>
                <p class="pt-3">Ready to transform your
                    storage infrastructure? <b>Explore Pi Storage as a Service today!</b> </p>

                <div class="py-5">
                    <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>
    {{-- staas cont ends --}}
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

        const handleToggleStorageTab = (id) => {
            $(`.storage-tab`).removeClass('active');
            $(`#storage-tab-${id}`).addClass('active');
            $(`.storage-subtab-panel`).addClass('hidden');
            $(`#storage-subtab-panel-${id}`).removeClass('hidden');
        }
        handleToggleStorageTab(1);
    </script>
@endsection
