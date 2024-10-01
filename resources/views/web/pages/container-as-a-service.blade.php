@extends('web.layouts.app')

@section('web-head')
    <title>Container as a Service | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/xaas/new-container-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Container as a Service</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-24 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Pi Container as a Service
                            (CaaS) offers businesses a streamlined solution for quickly deploying, managing, and scaling
                            containerized applications. Organizations leveraging CaaS can accelerate development cycles,
                            enhance portability, and reduce infrastructure overhead. It empowers you to focus on innovation
                            while the underlying infrastructure handles scalability and security.
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
    <section class="py-4">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Container </h2>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 items-center gap-10 pt-5">
                <div>
                    <p>Pi Cloud offers a robust container orchestration and management technology to deploy and manage
                        containers at scale. The environment provisioned on Pi Cloud enables developers to use
                        abstraction and isolation technology to package an application, and all the files needed to run
                        it, in a way that isolates the application from the underlying host OS.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('web/images/private-cloud/containers_img.webp') }}"
                        alt="Streamlines container management with its robust technology." class="w-96 mx-auto my-0">
                </div>
            </div>
            {{-- Key Features --}}
            <section class="py-5">
                <div class="container">
                    <div>
                        <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Features</h3>
                    </div>

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-7 pb-1">
                        <div
                            class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                            <div class="flex py-3">
                                <img src="{{ asset('web/images/private-cloud/scale-3.webp') }}"
                                    alt="Maximize server utilization and optimize licensing expense" class="w-12 h-12">
                                <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                    Lightweight</h4>
                            </div>
                            <p class="text-center">Achieve high server efficiency and optimize investment on server and
                                licencing costs </p>
                        </div>
                        <div
                            class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                            <div class="flex py-3">
                                <img src="{{ asset('web/images/private-cloud/Economics.webp') }}"
                                    alt="On-premises or hybrid cloud environments" class="w-12 h-12">
                                <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">Run
                                    Anywhere</h4>
                            </div>
                            <p class="text-center">On developers machine, on- premise or on hybrid cloud environments
                            </p>

                        </div>

                        <div
                            class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                            <div class="flex py-3">
                                <img src="{{ asset('web/images/private-cloud/Self.webp') }}"
                                    alt="Predictable, application-private environments" class="w-12 h-12">
                                <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">Secure
                                    & Consistent</h4>
                            </div>
                            <p class="text-center">Predictable environments that are isolated from other applications
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Key Features Ends --}}

            <div class="pb-2">
                <h3 class="lg:text-2xl md:text-2xl sm:text-xl font-bold text-center"> Use Cases</h3>
                <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 gap-3 py-5">
                    <div
                        class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                        <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                        <p>Isolating workloads with Microservices</p>
                    </div>
                    <div
                        class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                        <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                        <p>Application packaging format for DevOps</p>
                    </div>
                    <div
                        class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                        <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                        <p>Packaging applications for cloud migration</p>
                    </div>
                    <div
                        class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                        <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                        <p>Hybrid applications & Platform as a Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- intro cont ends --}}

    {{-- caas by pi cont starts --}}
    <section class="py-4">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-xl text-center">Container as a Service (CaaS) by Pi
                    DATACENTERS®: Simplify and Accelerate Your Containerized Workloads </h2>
                <p class="pt-3">In today’s dynamic digital
                    landscape, businesses are increasingly turning to container technology to streamline their development
                    and deployment processes. Pi DATACENTERS® offers a powerful, scalable, and secure Container as a Service
                    (CaaS) platform designed to help enterprises effortlessly manage containerized applications with speed,
                    flexibility, and cost-efficiency. Whether you're a startup, SMB, or a large enterprise, Pi’s CaaS
                    platform delivers an unmatched solution for your containerized workloads. </p>
            </div>
            <div>
                <h3 class="font-bold lg:text-3xl md:text-2xl sm:text-2xl text-center pt-3">What is Container as a Service
                    (CaaS)?
                </h3>
                <p class="pt-3">CaaS is a cloud service
                    model that allows businesses to manage and deploy containerized applications. Containers encapsulate
                    everything needed for an application to run, including the code, runtime, libraries, and dependencies,
                    making them portable and lightweight. CaaS enables you to automate the deployment, scaling, and
                    management of these containers, offering seamless orchestration through platforms like Kubernetes. </p>
            </div>
            <div>
                <h3 class="font-bold lg:text-3xl md:text-2xl sm:text-2xl text-center pt-3">Why Businesses Should Opt for Pi
                    CaaS
                </h3>
                <p class="pt-3">Pi DATACENTERS® provides a
                    robust CaaS solution tailored to the specific needs of modern enterprises, delivering flexibility,
                    control, and high performance. Here's why you should opt for Pi CaaS: </p>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 py-6">
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">Ease of Deployment and Management
                        </h4>
                        <p class="text-center">Pi’s CaaS simplifies the container orchestration process, enabling businesses
                            to
                            quickly deploy,
                            manage, and scale containerized applications. With Pi CaaS, developers can focus on building and
                            innovating, while Pi manages the complex infrastructure behind the scenes. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center"> Scalable and Secure
                            Infrastructure
                        </h4>
                        <p class="text-center">Powered by Pi's Hyperscale, TIER IV certified data centers, Pi CaaS offers a
                            highly reliable and scalable infrastructure. The platform supports automated scaling of
                            containerized workloads, ensuring your applications can handle fluctuating demand while
                            maintaining
                            peak performance and security. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">Kubernetes and Docker Integration
                        </h4>
                        <p class="text-center">Pi CaaS provides full integration with popular container orchestration
                            platforms
                            like Kubernetes and container runtimes like Docker. This gives businesses the ability to harness
                            the
                            full potential of containerization, ensuring seamless orchestration, load balancing, and
                            continuous
                            deployment pipelines. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">High Availability and Resilience
                        </h4>
                        <p class="text-center">With multi-cloud and multi-region redundancy, Pi CaaS ensures high
                            availability
                            of your containerized workloads. Whether you're deploying microservices or full-scale
                            applications,
                            Pi’s infrastructure is designed to provide zero downtime, ensuring business continuity in any
                            situation. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center"> Optimized Performance with
                            GPU-Powered Infrastructure </h4>
                        <p class="text-center">For computer-intensive applications like AI, Machine Learning, or data
                            analytics,
                            Pi CaaS offers GPU-powered infrastructure. This delivers unparalleled performance for businesses
                            requiring high-end computing resources, enabling faster processing times and superior
                            application
                            performance. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">Security and Compliance</h4>
                        <p class="text-center">Pi’s container platform comes with enterprise-grade security features,
                            including
                            network segmentation, encryption, and role-based access controls (RBAC). Also, Pi CaaS is fully
                            compliant with global standards such as ISO 27001, PCI-DSS, HIPAA, and SOC2 Type I, ensuring
                            your
                            data and applications are always protected. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">Cost Efficiency with
                            Pay-as-You-Go
                        </h4>
                        <p class="text-center">Pi’s pay-as-you-go model allows businesses to scale their container usage
                            based
                            on current needs without over-provisioning. This optimizes costs and allows organizations to
                            maximize ROI while minimizing operational expenses. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center"> Hybrid and Multi-Cloud Support
                        </h4>
                        <p class="text-center">Pi CaaS offers hybrid cloud and multi-cloud capabilities, allowing
                            businesses to
                            deploy and manage containerized workloads across AWS, Azure, GCP, and on-premises environments.
                            This
                            flexibility ensures that businesses can choose the best deployment model based on their specific
                            use
                            cases, while maintaining seamless integration across platforms. </p>
                    </div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center">Intelligent Automation and
                            Monitoring</h4>
                        <p class="text-center">With real-time monitoring, AI-driven analytics, and automated updates, Pi’s
                            CaaS
                            ensures that your container workloads are always optimized for performance, security, and
                            availability. Automated patching, scaling, and management reduce human error and operational
                            overhead, giving your team the tools they need to focus on innovation. </p>
                    </div>
                    <div class="lg:block md:hidden sm:hidden"></div>
                    <div class="relative p-3 space-y-2 group">
                        <span
                            class="absolute top-0 left-0 content-['_'] w-full h-full bg-[#8080803d] rounded-lg group-hover:h-1 transition-all duration-700 -z-[1] shadow-[0px_0px_7px_rgba(0,0,0,0.5)]"></span>
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-center"> Developer-Friendly Ecosystem
                        </h4>
                        <p class="text-center">Pi CaaS is designed with developers in mind. It offers seamless integration
                            with
                            CI/CD pipelines, supports microservices architecture, and is fully compatible with popular
                            DevOps
                            tools. This reduces friction in the development process, allowing your team to deploy, update,
                            and
                            scale applications faster. </p>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="font-bold lg:text-3xl md:text-2xl sm:text-2xl text-center pt-3">Unique Selling Points of Pi CaaS
                </h3>

                <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-4 pt-8 pb-5">
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[5rem]">
                            TIER IV Certified Hyperscale
                            Data Centers</h4>
                        <p class="text-center">Pi is home to India’s first Greenfield Uptime Institute TIER IV Certified
                            data center,
                            guaranteeing 99.995% uptime and ensuring that your containerized workloads are running on the
                            most reliable and secure infrastructure in the country. </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[5rem]">
                            Green and Energy-Efficient
                            Operations</h4>
                        <p class="text-center">Pi DATACENTERS® is committed to sustainability. Its data centers are
                            energy-efficient and
                            designed with green initiatives, making your CaaS deployments not only powerful but also
                            environmentally responsible. </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[5rem]">
                            End-to-End Managed Services</h4>
                        <p class="text-center">Pi offers end-to-end managed CaaS solutions, from infrastructure management
                            to container
                            orchestration, allowing businesses to offload operational complexities to Pi’s expert team while
                            focusing on core business objectives. </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[5rem]">
                            Data Sovereignty and
                            Localization</h4>
                        <p class="text-center">Pi’s CaaS platform is MeitY-empanelled and compliant with India's stringent
                            data sovereignty
                            laws, ensuring that your sensitive data stays within the country, adhering to all government
                            mandates. </p>
                    </div>
                    <div
                        class="space-y-2 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] p-3 rounded-lg scale-90 hover:scale-100 transition-all duration-700">
                        <h4 class="font-bold lg:text-xl md:text-lg sm:text-lg text-web-ascent-1 text-center lg:h-[5rem]">
                            24/7 Expert <br class="lg:block md:hidden sm:hidden">Support </h4>
                        <p class="text-center">With Pi’s 24/7 expert support, you get access to a team of specialists who
                            can assist with
                            everything from container deployment to troubleshooting and optimization, ensuring your
                            applications are always up and running smoothly. </p>
                    </div>
                </div>
            </div>
            <div class="pt-3 pb-9 space-x-3 text-center">
                <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank"> Get In Touch with Us
                </a>
            </div>
        </div>
    </section>
    {{-- caas by pi cont ends --}}
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
