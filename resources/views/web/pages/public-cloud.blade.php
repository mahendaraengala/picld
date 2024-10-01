@extends('web.layouts.app')

@section('web-head')
    <title>Public Cloud | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/public-cloud/new-public-cloud-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Public Cloud</h1>
                        <p class="text-gray-300 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]">The
                            Pi Public Cloud Services helps
                            businesses
                            devise strategies & appropriate planning for building a technology-proficient environment by
                            fostering Flexibility, Scalability, Multi-Tiered Security, and High Redundancy. It brings the
                            best of both worlds for businesses to co-leverage the flexibility of Public Clouds across Oracle
                            (OCI), Azure, AWS, Google (GCP), along with Pi’s seamless integration and comprehensive
                            management suite. It's all about gaining the trust of customers through the safekeeping of their
                            data across agnostic cloud platforms with a fully integrated products and services stack under
                            one umbrella.</p>
                        {{-- <div class="flex lg:justify-start md:justify-start sm:justify-center items-center gap-2">
                            <img src="{{ asset('web/images/cloud-and-sap/oracle-306.webp') }}" alt="Pi’s technology partners"
                                class="w-36 h-16 bg-white rounded-lg">
                            <img src="{{ asset('web/images/cloud-and-sap/l-19.webp') }}" alt="Pi’s technology partners"
                                class="w-16 h-16 bg-white rounded-lg">
                            <img src="{{ asset('web/images/cloud-and-sap/l-21.webp') }}" alt="Pi’s technology partners"
                                class="w-16 h-16 bg-white rounded-lg">
                            <img src="{{ asset('web/images/cloud-and-sap/l-20.webp') }}" alt="Pi’s technology partners"
                                class="w-16 h-16 bg-white rounded-lg">
                        </div> --}}
                        <div class="pt-4 space-x-3">
                            {{-- <a href="#" class="btn-primary-md">Know more</a> --}}
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                            <a class="btn-primary-md cursor-pointer show_form">Brochure</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}


    {{-- Public Cloud Services and Offerings --}}
    <section class="py-6">
        <div class="container">
            <diV>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Why Choose Pi Public Cloud Services ?
                </h2>
            </diV>

            <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 pt-5 pb-2 lg:gap-4 md:gap-4 sm:gap-0">

                <div class="relative h-full z-[1] my-4">
                    <a onclick="$('#card-body1').slideToggle();" class="cursor-pointer">
                        <div class="group w-62 h-48 relative bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] p-5 text-center">
                            <img src="{{ asset('web/images/public-cloud/GRA.webp') }}"
                                alt="Our public cloud empowers you to scale globally with low-latency datacenters."
                                class="w-16 h-16 mx-auto my-0 transition duration-700">
                            <h3
                                class="font-bold lg:text-lg md:text-lg sm:text-xl lg:leading-tight md:leading-6 sm:leading-tight py-2">
                                Global Reach and
                                Accessibility</h3>
                            <div class="mt-3 absolute bottom-4 lg:left-[5.5rem] md:left-[5.5rem] sm:left-[9.5rem]"><a
                                    class="mx-auto py-1 px-2 cursor-pointer bg-gray-400 text-white rounded-sm text-sm hover:bg-web-ascent-1"
                                    onclick="$('#card-body1').slideToggle();">More</a>
                            </div>
                        </div>
                    </a>
                    <div class="hide-div-2 w-full lg:h-72 md:h-72 sm:h-44 p-3 relative transition duration-700 bg-slate-200 text-center content-body"
                        id="card-body1" style="display: none">
                        <p>Our public cloud services offer a vast global network of data centers,
                            ensuring low-latency access to
                            your applications and data from anywhere in the world. Enjoy the freedom to reach a broader
                            audience
                            and expand your business on a global scale.</p>
                    </div>
                </div>

                <div class="relative h-full z-[1] my-4">
                    <a onclick="$('#card-body2').slideToggle();" class="cursor-pointer">
                        <div class="group w-62 h-48 relative bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] p-5 text-center">
                            <img src="{{ asset('web/images/public-cloud/US.webp') }}"
                                alt="Public cloud solutions offer unmatched scalability ensuring infrastructure adapts to growing workloads keeping business agile and responsive."
                                class="w-16 h-16 mx-auto my-0 transition duration-700">
                            <h3
                                class="font-bold lg:text-lg md:text-lg sm:text-xl lg:leading-tight md:leading-6 sm:leading-tight py-2">
                                Unmatched Scalability
                            </h3>
                            <div class="mt-3 absolute bottom-4 lg:left-[5.5rem] md:left-[5.5rem] sm:left-[9.5rem]"><a
                                    class="mx-auto py-1 px-2 cursor-pointer bg-gray-400 text-white rounded-sm text-sm hover:bg-web-ascent-1"
                                    onclick="$('#card-body2').slideToggle();">More</a>
                            </div>
                        </div>
                    </a>
                    <div class="hide-div-2 w-full lg:h-72 md:h-72 sm:h-44 p-3 relative transition duration-700 bg-slate-200 text-center content-body"
                        id="card-body2" style="display: none">
                        <p>Experience unparalleled scalability with our public cloud solutions. As your
                            business grows, our
                            cloud infrastructure seamlessly adapts to handle increasing workloads and user demands, allowing
                            you
                            to stay agile and responsive.</p>
                    </div>
                </div>

                <div class="relative h-full z-[1] my-4">
                    <a onclick="$('#card-body3').slideToggle();" class="cursor-pointer">
                        <div class="group w-62 h-48 relative bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] p-5 text-center">
                            <img src="{{ asset('web/images/public-cloud/CE.webp') }}"
                                alt="Skip upfront costs, pay for only what you use with our public cloud’s flexible pricing."
                                class="w-16 mx-auto my-0 transition duration-700">
                            <h3
                                class="font-bold lg:text-lg md:text-lg sm:text-xl lg:leading-tight md:leading-6 sm:leading-tight py-2">
                                Cost-Efficiency</h3>
                            <div class="mt-3 absolute bottom-4 lg:left-[5.5rem] md:left-[5.5rem] sm:left-[9.5rem]"><a
                                    class="mx-auto py-1 px-2 cursor-pointer bg-gray-400 text-white rounded-sm text-sm hover:bg-web-ascent-1"
                                    onclick="$('#card-body3').slideToggle();">More</a>
                            </div>
                        </div>
                    </a>
                    <div class="hide-div-2 w-full lg:h-72 md:h-72 sm:h-44 p-3 relative transition duration-700 bg-slate-200 text-center content-body"
                        id="card-body3" style="display: none">
                        <p>Eliminate the need for expensive hardware and infrastructure investments. With
                            our pay-as-you-go
                            pricing model, you only pay for the resources you consume, optimizing your IT budget and
                            reducing
                            operational costs.</p>
                    </div>
                </div>

                <div class="relative h-full z-[1] my-4">
                    <a onclick="$('#card-body4').slideToggle();" class="cursor-pointer">
                        <div class="group w-62 h-48 relative bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] p-5 text-center">
                            <img src="{{ asset('web/images/public-cloud/HP.webp') }}"
                                alt="Public cloud delivers the speed and reliability to keep your applications run smoothly"
                                class="w-16 mx-auto my-0 transition duration-700">
                            <h3
                                class="font-bold lg:text-lg md:text-lg sm:text-xl lg:leading-tight md:leading-6 sm:leading-tight py-2">
                                High Performance</h3>
                            <div class="mt-3 absolute bottom-4 lg:left-[5.5rem] md:left-[5.5rem] sm:left-[9.5rem]"><a
                                    class="mx-auto py-1 px-2 cursor-pointer bg-gray-400 text-white rounded-sm text-sm hover:bg-web-ascent-1"
                                    onclick="$('#card-body4').slideToggle();">More</a>
                            </div>
                        </div>
                    </a>
                    <div class="hide-div-2 w-full lg:h-72 md:h-72 sm:h-44 p-3 relative transition duration-700 bg-slate-200 text-center content-body"
                        id="card-body4" style="display: none">
                        <p>Enjoy blazing-fast performance and reliability with our state-of-the-art public
                            cloud infrastructure.
                            Our cutting-edge technologies and robust data centers ensure that your applications and services
                            perform at their best.</p>
                    </div>
                </div>


                <div class="relative h-full z-[1] my-4">
                    <a onclick="$('#card-body5').slideToggle();" class="cursor-pointer">
                        <div class="group w-62 h-48 relative bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] p-5 text-center">
                            <img src="{{ asset('web/images/public-cloud/SAC.webp') }}"
                                alt="Public cloud prioritizes security with encryption, multi-layered controls, and compliance."
                                class="w-16 mx-auto my-0 transition duration-700">
                            <h3
                                class="font-bold lg:text-lg md:text-lg sm:text-xl lg:leading-tight md:leading-6 sm:leading-tight py-2">
                                Security and
                                Compliance</h3>
                            <div class="mt-3 absolute bottom-4 lg:left-[5.5rem] md:left-[5.5rem] sm:left-[9.5rem]"><a
                                    class="mx-auto py-1 px-2 cursor-pointer bg-gray-400 text-white rounded-sm text-sm hover:bg-web-ascent-1"
                                    onclick="$('#card-body5').slideToggle();">More</a>
                            </div>
                        </div>
                    </a>
                    <div class="hide-div-2 w-full lg:h-72 md:h-72 sm:h-44 p-3 relative transition duration-700 bg-slate-200 text-center content-body"
                        id="card-body5" style="display: none">
                        <p>Security is our top priority. Rest assured that your data and applications are
                            protected by multiple
                            layers of security controls, encryption, and regular security updates. We comply with industry
                            standards and regulations to keep your data safe.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Public Cloud Services and Offerings Ends --}}

    {{-- reach us starts --}}
    <section class="pt-2 pb-8">
        <div class="container">
            <div class="pt-0 space-x-3 text-center">
                <a href="{{ route('web.view.contact') }}" class="bg-web-ascent-1 text-xl text-white py-3 px-10 rounded-lg"
                    target="_blank">Reach
                    Us</a>
            </div>
        </div>
    </section>
    {{-- reach us ends --}}


    {{-- service offerings starts --}}
    <section>
        <div class="container">
            <diV>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Service Offerings</h2>
            </diV>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 py-5">

                <div class="relative h-full z-[1] my-4 mx-3 hide-on-scroll">
                    <div class="group w-62 h-72 relative shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center">
                        <img src="{{ asset('web/images/public-cloud/infrastructure.webp') }}"
                            alt="Run your apps, websites, and databases on our secure, scalable public cloud."
                            class="w-full h-full mx-auto my-0 transition duration-700 rounded-md">
                        <div class="absolute bottom-0 bg-[#000000ba] w-full pb-3">
                            <h3
                                class="font-bold lg:text-lg md:text-lg sm:text-xl lg:leading-tight md:leading-6 sm:leading-tight py-2 text-white">
                                Infrastructure</h3>
                            <a class="btn mx-auto py-1 px-2 cursor-pointer bg-web-ascent-1 text-white rounded-md text-sm hover:bg-gray-400 font-medium"
                                onclick="$('#card-body6').slideToggle();">Read More</a>
                        </div>
                    </div>
                    <div class="w-full lg:h-44 md:h-52 sm:40 p-5 relative transition duration-700 bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center hide-div rounded-bl-xl rounded-br-xl"
                        id="card-body6" style="display: none">
                        <p>Leverage our secure and scalable public cloud infrastructure to deploy and manage your
                            applications, websites, and databases. Experience the flexibility and power of the cloud with a
                            wide range of computing, storage, and networking options.</p>
                    </div>
                </div>

                <div class="relative h-full z-[1] my-4 mx-3">
                    <div class="group w-62 h-72 relative shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center">
                        <img src="{{ asset('web/images/public-cloud/storage.webp') }}"
                            alt="Store, backup, and share your data with ease using public cloud solutions."
                            class="w-full h-full mx-auto my-0 transition duration-700 rounded-md">
                        <div class="absolute bottom-0 bg-[#000000ba] w-full pb-3">
                            <h3
                                class="font-bold lg:text-lg md:text-lg sm:text-xl lg:leading-tight md:leading-6 sm:leading-tight py-2 text-white">
                                Storage
                            </h3>
                            <a class="btn mx-auto py-1 px-2 cursor-pointer bg-web-ascent-1 text-white rounded-md text-sm hover:bg-gray-400 font-medium"
                                onclick="$('#card-body7').slideToggle();">Read More</a>
                        </div>
                    </div>
                    <div class="w-full lg:h-44 md:h-52 sm:40 p-5 relative transition duration-700 bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center hide-div rounded-bl-xl rounded-br-xl"
                        id="card-body7" style="display: none">
                        <p>Store, backup, and easily share your data using our reliable public cloud storage solutions.
                            Enjoy high availability, data redundancy, and automatic backups to safeguard critical
                            information.</p>
                    </div>
                </div>

                <div class="relative h-full z-[1] my-4 mx-3">
                    <div class="group w-62 h-72 relative shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center">
                        <img src="{{ asset('web/images/public-cloud/computing.webp') }}"
                            alt="Public cloud infrastructure offers a flexible and cost-effective solution for running your applications and workloads."
                            class="w-full h-full mx-auto my-0 transition duration-700 rounded-md">
                        <div class="absolute bottom-0 bg-[#000000ba] w-full pb-3">
                            <h3
                                class="font-bold lg:text-lg md:text-lg sm:text-xl lg:leading-tight md:leading-6 sm:leading-tight py-2 text-white">
                                Computing
                            </h3>
                            <a class="btn mx-auto py-1 px-2 cursor-pointer bg-web-ascent-1 text-white rounded-md text-sm hover:bg-gray-400 font-medium"
                                onclick="$('#card-body8').slideToggle();">Read More</a>
                        </div>
                    </div>
                    <div class="w-full lg:h-44 md:h-52 sm:40 p-5 relative transition duration-700 bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center hide-div rounded-bl-xl rounded-br-xl"
                        id="card-body8" style="display: none">
                        <p>Take advantage of our on-demand computing resources to run applications and workloads without
                            physical servers. Our public cloud computing services offer flexibility and cost-effectiveness
                            for your business.</p>
                    </div>
                </div>

                <div class="relative h-full z-[1] my-4 mx-3">
                    <div class="group w-62 h-72 relative shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center">
                        <img src="{{ asset('web/images/public-cloud/analytics.webp') }}"
                            alt="Empowers data driven decision making to unlock valuable insights from your data to fuel business growth."
                            class="w-full h-full mx-auto my-0 transition duration-700 rounded-md">
                        <div class="absolute bottom-0 bg-[#000000ba] w-full pb-3">
                            <h3
                                class="font-bold lg:text-lg md:text-lg sm:text-xl lg:leading-tight md:leading-6 sm:leading-tight py-2 text-white">
                                Analytics
                            </h3>
                            <a class="btn mx-auto py-1 px-2 cursor-pointer bg-web-ascent-1 text-white rounded-md text-sm hover:bg-gray-400 font-medium"
                                onclick="$('#card-body9').slideToggle();">Read More</a>
                        </div>
                    </div>
                    <div class="w-full lg:h-44 md:h-52 sm:40 p-5 relative transition duration-700 bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center hide-div rounded-bl-xl rounded-br-xl"
                        id="card-body9" style="display: none">
                        <p>Unlock valuable insights from your data with our public cloud analytics services. Analyze large
                            datasets, gain actionable intelligence, and make data-driven decisions to fuel your business
                            growth.</p>
                    </div>
                </div>


                <div class="relative h-full z-[1] my-4 mx-3">
                    <div class="group w-62 h-72 relative shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center">
                        <img src="{{ asset('web/images/public-cloud/machine-learning.webp') }}"
                            alt="Our public cloud AI empowers intelligent applications, automated workflows, and elevated user experience."
                            class="w-full h-full mx-auto my-0 transition duration-700 rounded-md">
                        <div class="absolute bottom-0 bg-[#000000ba] w-full pb-3">
                            <h3
                                class="font-bold lg:text-lg md:text-lg sm:text-xl lg:leading-tight md:leading-6 sm:leading-tight py-2 text-white">
                                AI and
                                Machine Learning</h3>
                            <a class="btn mx-auto py-1 px-2 cursor-pointer bg-web-ascent-1 text-white rounded-md text-sm hover:bg-gray-400 font-medium"
                                onclick="$('#card-body10').slideToggle();">Read More</a>
                        </div>
                    </div>
                    <div class="w-full lg:h-44 md:h-52 sm:40 p-5 relative transition duration-700 bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center hide-div rounded-bl-xl rounded-br-xl"
                        id="card-body10" style="display: none">
                        <p>Embrace the power of artificial intelligence and machine learning with our public cloud AI
                            services. Build smart applications, automate processes, and enhance user experiences using
                            cutting-edge AI technologies.</p>
                    </div>
                </div>
                <div class="relative h-full z-[1] my-4 mx-3">
                    <div class="group w-62 h-72 relative shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center">
                        <img src="{{ asset('web/images/public-cloud/security.webp') }}"
                            alt="Prioritizes security with threat detection, compliance solutions ensuring your data is protected."
                            class="w-full h-full mx-auto my-0 transition duration-700 rounded-md">
                        <div class="absolute bottom-0 bg-[#000000ba] w-full pb-3">
                            <h3
                                class="font-bold lg:text-lg md:text-lg sm:text-xl lg:leading-tight md:leading-6 sm:leading-tight py-2 text-white">
                                Security
                                and Compliance</h3>
                            <a class="btn mx-auto py-1 px-2 cursor-pointer bg-web-ascent-1 text-white rounded-md text-sm hover:bg-gray-400 font-medium"
                                onclick="$('#card-body11').slideToggle();">Read More</a>
                        </div>
                    </div>
                    <div class="w-full lg:h-44 md:h-52 sm:40 p-5 relative transition duration-700 bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] text-center hide-div rounded-bl-xl rounded-br-xl"
                        id="card-body11" style="display: none">
                        <p>Trust in our robust security measures to protect your data and applications. Our public cloud
                            security services include identity and access management, threat detection, and compliance
                            support.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- service offerings ends --}}

    {{-- Block 2 --}}
    <section class="pt-7" id="managed-services">
        <div class="container">
            <ul
                class="lg:flex md:flex sm:block justify-center items-center sm:text-center lg:space-x-5 md:space-x-5 border-b-4 border-black tabs-btns">
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-2 sm:w-[90%] active">
                    <button>Managed Public
                        Cloud
                        Services</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:mt-0 sm:mb-2 sm:w-[90%]">
                    <button>One Stop
                        Shop</button>
                </li>
                <li
                    class="bg-[gray] py-1 px-4 text-white font-semibold rounded-tl-xl rounded-tr-xl relative after:content-['_'] after:absolute after:bg-[gray] hover:after:bg-web-ascent-1 after:h-full after:w-5 after:bottom-0 after:-left-3 after:-skew-x-[22deg] after:skew-y-0 after:rounded-tl-xl before:content-['_'] before:absolute before:bg-[gray] hover:before:bg-web-ascent-1 before:h-full before:w-5 before:bottom-0 before:-right-3 before:skew-x-[22deg] before:skew-y-0 before:rounded-tr-xl hover:bg-web-ascent-1 lg:w-auto md:w-auto lg:m-0 md:m-0 sm:mx-auto sm:my-0 sm:w-[90%]">
                    <button>Why Public Cloud
                        @Pi</button>
                </li>
            </ul>

            {{-- tab 1 --}}
            <div class="space-y-5 py-4 tabs-content">
                <p>Pi Managed Public Cloud Services offer businesses the flexibility to choose from multiple cloud
                    providers, including AWS, Azure, Google Cloud, and Oracle, while ensuring seamless integration and
                    efficient management of all cloud services.</p>
                <p>These services are designed to meet the growing demand for scalable, secure, and high-performance
                    <a href="https://picloud.ai/blog/what-is-cloud-computing-a-comprehensive-exploration"
                        class="hover:underline underline-offset-2 text-blue-600" target="_blank">cloud
                        computing</a> solutions. Our team of cloud specialists has extensive expertise
                    in designing,
                    implementing, and managing Public Cloud environments, helping businesses optimize their cloud
                    infrastructure to achieve their desired outcomes.
                </p>
                <p>Our services offer businesses the peace of mind they need to focus on their core activities while we
                    manage their cloud environment. If you're looking for a reliable and efficiently managed Public
                    <a href="https://picloud.ai/blog/cloud-service-providers-in-india-driving-growth-in-the-digital-landscape"
                        class="hover:underline underline-offset-2 text-blue-600" target="_blank">Cloud service
                        provider</a>, Pi Cloud is the perfect partner for your business.
                </p>


                {{-- dots --}}
                <div class="swiper mySwiper dots">
                    <div class="swiper-pagination private-cloud-dots"></div>
                    <div class="swiper-wrapper sm:pt-6">
                        <div class="swiper-slide">
                            <img src="{{ asset('web/images/public-cloud/Sliders-05-multi.svg') }}"
                                alt="It offers a unified platform seamlessly managing hybrid and public cloud resources enabling flexible and scalable IT infrastructure."
                                class="w-auto mx-auto my-0">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('web/images/public-cloud/Sliders-04-g.svg') }}"
                                alt="Empowering data centers with scalability, security, and innovation."
                                class="w-auto mx-auto my-0">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('web/images/public-cloud/Sliders-03-oracle.svg') }}"
                                alt="Scalable cloud solutions for modern data centers" class="w-auto mx-auto my-0">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('web/images/public-cloud/Sliders-01-azure.svg') }}"
                                alt="Cloud computing platform empowering data center agility and scalability"
                                class="w-auto mx-auto my-0">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('web/images/public-cloud/Sliders-02-aws.svg') }}"
                                alt="Empowering data centers with scalability, agility, and cost-efficiency"
                                class="w-auto mx-auto my-0">
                        </div>
                    </div>
                    {{-- <div class="swiper-pagination private-cloud-dots"></div> --}}
                </div>
            </div>
            {{-- dots Ends --}}
            {{-- tab 1 Ends --}}

            {{-- tab 2 --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <p>The Pi Public Cloud Ecosystem simplifies the management of cloud environments by providing a
                    centralized view of your workloads across multiple clouds. This platform allows you to monitor
                    performance and optimize your environment for cost control.</p>
                <p>By streamlining cloud management and reducing complexity, it enhances operational efficiency, freeing
                    up valuable resources for innovation and growth. With a unified view of your cloud environments, you
                    can focus on achieving your business objectives without getting bogged down in day-to-day tasks.</p>
                <p>Whether you're migrating to the cloud, optimizing your existing cloud infrastructure, or managing
                    multiple clouds, it provides the tools and a unified view you need to succeed in today's digital
                    landscape. With Pi Cloud, you can simplify cloud management, improve ROI, and achieve business
                    objectives with ease.</p>

                <div class="py-3">
                    <img src="{{ asset('web/images/public-cloud/one-stop-shop.svg') }}"
                        alt="Pi Cloud centralizes management and visibility of your workloads across different cloud platforms."
                        class="lg:w-96 md:w-96 sm:w-full mx-auto my-0">
                </div>

            </div>
            {{-- tab 2 Ends --}}

            {{-- tab 3 --}}
            <div class="space-y-5 py-4 tabs-content hidden">
                <p>In today's fast-paced business landscape, it's critical for organizations to be able to quickly adapt
                    and scale to keep up with changing market demands. That's where Pi Public Cloud Ecosystem comes in:
                    by providing a unified view for workload management across various cloud environments, businesses
                    can streamline their operations, improve data sovereignty and compliance, and optimize their costs.
                </p>
                <p>With Pi Cloud's platform-agnostic approach, businesses have the flexibility to choose the best cloud
                    environment for each workload while still maintaining complete control and visibility. The seamless
                    integration of <a
                        href="https://pidatacenters.com/knowledge-hub/an-overview-of-private-and-public-clouds-what-they-are-and-how-they-differ"
                        class="hover:underline underline-offset-2 text-blue-600" target="_blank">private and public
                        clouds</a> means there's no need to sacrifice security or privacy for
                    affordability.</p>
                <p>The Pi Public Cloud Ecosystem offers a comprehensive platform for efficient workload management,
                    giving businesses the tools they need to stay agile and competitive in today's digital age. Choose
                    Pi Cloud and experience the benefits of a single pane of glass view for your business.</p>

                <div class="py-3">
                    <img src="{{ asset('web/images/public-cloud/why-multi-cloud.svg') }}"
                        alt="Pi cloud’s platform empowers businesses to manage workloads, optimize costs, and achieve data sovereignty with a single pane of view."
                        class="lg:w-96 md:w-96 sm:w-full mx-auto my-0">
                </div>

            </div>
            {{-- tab 3 Ends --}}
            {{-- </div> --}}
        </div>
    </section>
    {{-- Block 2 Ends --}}

    {{-- Key Features --}}
    <section class="pt-5 pb-1">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Key Features </h2>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 py-10">
                <div
                    class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer">
                    <div class="flex py-7">
                        <img src="{{ asset('web/images/public-cloud/combination.webp') }}"
                            alt="Pi cloud’s hybrid approach offers public cloud flexibility, private cloud security all under one view."
                            class="w-16 h-16">
                        <h3 class="font-bold text-xl text-center">Combination Of Private and Public
                            Cloud</h3>
                    </div>
                    <p class="text-center">Our approach to cloud computing consists of both private and public clouds,
                        allowing clients to
                        simultaneously leverage the flexibility of the public cloud and the robustness of the private
                        cloud for their diverse workloads in a fully managed environment with a single pane of glass
                        view.</p>
                </div>
                <div
                    class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer">
                    <div class="flex py-7">
                        <img src="{{ asset('web/images/public-cloud/diverse.webp') }}"
                            alt="Pi cloud empowers workload diversification for flexibility and scalability."
                            class="w-16 h-16">
                        <h3 class="font-bold text-xl text-center">Diverse Workload Hosting Locations</h3>
                    </div>
                    <p class="text-center">Our platform enables customers to diversify their workload hosting locations,
                        providing them with
                        the flexibility and scalability necessary to succeed in today's competitive market.</p>

                </div>
                <div
                    class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer">
                    <div class="flex py-7">
                        <img src="{{ asset('web/images/public-cloud/cross-geographical.webp') }}"
                            alt="Leveraging multi-region cloud capabilities enabling efficient workload execution across disparate locations."
                            class="w-16 h-16">
                        <h3 class="font-bold text-xl text-center">Cross-Geographical Cloud Integration</h3>
                    </div>
                    <p class="text-center">We provide cross-geographical cloud integration to enable seamless workload
                        management for our
                        customers across various locations.</p>
                </div>
                <div
                    class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer">
                    <div class="flex py-7">
                        <img src="{{ asset('web/images/public-cloud/self-service-provision.webp') }}"
                            alt="Customers can independently provide, scale, and manage workloads, giving them complete control over resources."
                            class="w-16 h-16">
                        <h3 class="font-bold text-xl text-center">Self-Service Provision</h3>
                    </div>
                    <p class="text-center">Our self-service provision enables customers to scale and manage their workloads
                        via
                        self-service, granting them complete control over their resources.</p>
                </div>
                <div
                    class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer">
                    <div class="flex py-7">
                        <img src="{{ asset('web/images/public-cloud/cost-optimization.webp') }}"
                            alt="Pi prioritizes cost optimization and competitive pricing, ensuring top value without compromising quality."
                            class="w-16 h-16">
                        <h3 class="font-bold text-xl text-center">Cost Optimization and Competitive Pricing</h3>
                    </div>
                    <p class="text-center">At Pi Cloud, we understand the importance of cost optimization and competitive
                        pricing. We work
                        closely with our customers to ensure that they are getting the best value for their investment
                        without sacrificing the quality of our services.</p>
                </div>
                <div
                    class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-gray-500  hover:border-web-ascent-1 hover:-translate-y-2 transition duration-500 cursor-pointer">
                    <div class="flex py-7">
                        <img src="{{ asset('web/images/public-cloud/multiple-cloud-platforms.webp') }}"
                            alt="Get the perfect cloud fit for your business, without overspending by cutting through cloud complexity"
                            class="w-16 h-16">
                        <h3 class="font-bold text-xl text-center">Optimal Mix Of Services From Multiple Cloud
                            Platforms</h3>
                    </div>
                    <p class="text-center">Our team is well-versed in the latest technologies and can help you find the
                        optimal mix of
                        services from across cloud platforms to meet your specific business needs. This strategy ensures
                        that you do not overspend on unnecessary services while still having access to the tools and
                        resources you need to succeed in the current digital landscape.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Key Features Ends --}}

    {{-- Partners --}}
    <section class="py-3">
        <div class="conatiner">
            <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center"> Technology Partners</h2>
            <div class="swiper technology-partner-carousel py-10">
                <div class="swiper-wrapper z-0">

                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-1.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-2.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-3.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-4.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-5.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-6.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-7.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/firewall-balancer/palo-alto-logo.webp') }}"
                                alt="Pi’s technology partners" class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-9.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-10.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-11.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-12.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-13.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-14.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-15.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-16.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-17.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-18.webp') }}" alt="Pi’s technology partners"
                                class="w-40">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-19.webp') }}" alt="Pi’s technology partners"
                                class="w-20">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-20.webp') }}" alt="Pi’s technology partners"
                                class="w-20">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('web/images/cloud-and-sap/l-21.webp') }}" alt="Pi’s technology partners"
                                class="w-20">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="swiper-button-next w-9 h-9 next-btn"></div>
                    <div class="swiper-button-prev w-9 h-9 prev-btn"></div>
                </div>
            </div>
        </div>

    </section>
    {{-- Partners Ends --}}


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
                if ($(window).scrollTop() > 100) {
                    $('#desktop-header').addClass('active');
                } else {
                    $('#desktop-header').removeClass('active');
                }
            });
        });
    </script>
    <script>
        let technologyCarousel = new Swiper(".technology-partner-carousel", {
            loop: true,
            speed: 1000,
            // autoplay: true,
            // autoplaySpeed: 2000,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 4
                },
                1024: {
                    slidesPerView: 5
                },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
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
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            // autoplay: true,
            // autoplaySpeed: 5000,
            slidesPerView: 1,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 2000) {
                    $('.hide-div').fadeOut();
                }
            });
            $(window).scroll(function() {
                if ($(window).scrollTop() > 1000) {
                    $('.hide-div-2').fadeOut();
                }
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
