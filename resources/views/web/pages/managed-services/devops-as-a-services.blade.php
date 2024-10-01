@extends('web.layouts.app')

@section('web-head')
    <title>DevOps | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/managed-services/new-devops-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">
                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">DevOps</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-24 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Accelerate your software
                            development with Pi DevOps as a Service. We streamline your
                            development pipeline, automate processes, and enhance collaboration, ensuring faster
                            delivery and improved quality. Partner with Pi to drive innovation and efficiency in
                            every deployment. </p>
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
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center py-4">Why DevOps?</h2>
                <p class="text-justify">In the dynamic
                    landscape of contemporary business, organizations face constant demands to swiftly deliver
                    value to their customers, a challenge particularly pronounced in the field of software development with
                    its perpetual demand for new features and updates. Enter DevOps, a strategy that has garnered
                    significant traction. DevOps is more than a mere methodology; it represents a software engineering
                    culture that harmonizes the disciplines of software development (Dev) and IT operations (Ops). The
                    overarching objective of DevOps is to enhance efficiency and truncate the time required to introduce new
                    software features and updates to the market.</p>
            </div>
            <div class="grid lg:grid-cols-2 ,d:grid-cols-2 sm:grid-cols-1 gap-5 pt-5 pb-3">
                <div>
                    <img src="{{ asset('web/images/managed-services/devops-2.webp') }}"
                        class="w-5/6 mx-auto my-0 rounded-lg">
                </div>
                <div>
                    <p class="text-justify pb-3">At the
                        core of
                        DevOps lies the pivotal principle of leveraging automation and continuous integration
                        (CI) to streamline the development process. Through the automation of repetitive tasks and frequent
                        integration of code changes, teams can swiftly detect and rectify errors, expediting the software
                        delivery process. DevOps also advocates for agile and lean methodologies, prioritizing flexibility
                        and rapid iteration, enabling organizations to promptly respond to evolving business needs and
                        customer expectations.</p>
                    <p class="text-justify pb-3">Beyond
                        the
                        expeditious delivery of software, DevOps is committed to enhancing software quality. Automated
                        testing and continuous integration enable teams to identify and address issues early in the
                        development cycle, resulting in more robust and reliable software.</p>
                    <p class="text-justify pb-3">
                        Collaboration
                        and communication are cornerstones of DevOps, fostering a culture where development and operations
                        teams work seamlessly toward common goals. By dismantling silos and nurturing a collaborative
                        environment, organizations can effectively strive for shared objectives and deliver enhanced value
                        to customers.</p>
                </div>
            </div>
            <p class="text-justify pb-3">In the grand
                scheme, DevOps emerges as a potent approach, empowering organizations to deliver value more rapidly
                and efficiently while simultaneously elevating the quality and stability of their software. It
                stands as an indispensable facet of the software development process, a consideration vital for any
                organization aiming to remain competitive in the fast-paced realm of modern business.</p>
        </div>
    </section>
    {{-- intro cont ends --}}

    {{-- propoition starts --}}
    <section class="pb-5">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center py-4">Pi Value Proposition</h2>
            </div>
            <div class="grid ;g:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-3 pt-4">
                <div class="border-2 border-slate-200 hover:border-web-ascent-1 p-2 rounded-lg group">
                    <img src="{{ asset('web/images/managed-services/ap-dev-black.webp') }}"
                        class="w-16 h-16 group-hover:hidden">
                    <img src="{{ asset('web/images/managed-services/ap-dev-blue.webp') }}"
                        class="w-16 h-16 hidden group-hover:block">
                    <h3 class="font-bold text-lg py-2">Automated Delivery Pipeline</h3>
                    <p>Pi automates the entire delivery pipeline for efficient software delivery.</p>
                </div>
                <div class="border-2 border-slate-200 hover:border-web-ascent-1 p-2 rounded-lg group">
                    <img src="{{ asset('web/images/managed-services/cid-dev-black.webp') }}"
                        class="w-16 h-16 group-hover:hidden">
                    <img src="{{ asset('web/images/managed-services/cid-dev-blue.webp') }}"
                        class="w-16 h-16 hidden group-hover:block">
                    <h3 class="font-bold text-lg py-2">Continuous Integration and Development</h3>
                    <p>Enables continuous integration and development to streamline processes.</p>
                </div>
                <div class="border-2 border-slate-200 hover:border-web-ascent-1 p-2 rounded-lg group">
                    <img src="{{ asset('web/images/managed-services/ee-dev-black.webp') }}"
                        class="w-16 h-16 group-hover:hidden">
                    <img src="{{ asset('web/images/managed-services/ee-dev-blue.webp') }}"
                        class="w-16 h-16 hidden group-hover:block">
                    <h3 class="font-bold text-lg py-2">Efficiency Enhancement</h3>
                    <p>This enhances efficiency and reduces time-to-value for organizations.</p>
                </div>
                <div class="border-2 border-slate-200 hover:border-web-ascent-1 p-2 rounded-lg group">
                    <img src="{{ asset('web/images/managed-services/sqi-dev-black.webp') }}"
                        class="w-16 h-16 group-hover:hidden">
                    <img src="{{ asset('web/images/managed-services/sqi-dev-blue.webp') }}"
                        class="w-16 h-16 hidden group-hover:block">
                    <h3 class="font-bold text-lg py-2">Software Quality Improvement</h3>
                    <p>Improves software quality through automated testing and integration.</p>
                </div>
                <div class="border-2 border-slate-200 hover:border-web-ascent-1 p-2 rounded-lg group">
                    <img src="{{ asset('web/images/managed-services/cr-dev-black.webp') }}"
                        class="w-16 h-16 group-hover:hidden">
                    <img src="{{ asset('web/images/managed-services/cr-dev-blue.webp') }}"
                        class="w-16 h-16 hidden group-hover:block">
                    <h3 class="font-bold text-lg py-2">Cost Reduction</h3>
                    <p>Reduces the cost of software delivery through streamlined processes.</p>
                </div>
                <div class="border-2 border-slate-200 hover:border-web-ascent-1 p-2 rounded-lg group">
                    <img src="{{ asset('web/images/managed-services/cts-dev-black.webp') }}"
                        class="w-16 h-16 group-hover:hidden">
                    <img src="{{ asset('web/images/managed-services/cts-dev-blue.webp') }}"
                        class="w-16 h-16 hidden group-hover:block">
                    <h3 class="font-bold text-lg py-2">Comprehensive Tools and Services</h3>
                    <p>Offers a comprehensive suite of tools and services for an integrated solution.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- propoition ends --}}

    {{-- daas starts --}}
    <section class="pb-10">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-3xl md:text-2xl sm:text-xl text-center py-4 text-web-ascent-1">DevOps as a
                    Service: Elevating Your Software Delivery Process</h2>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 py-5">
                <div
                    class="text-center p-3 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-lg scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/dev-1-1.webp') }}" class="w-40 mx-auto my-0">
                    <h3 class="font-bold text-lg py-3">Pi DevOps as a Service Overview</h3>
                    <p>Empowers organizations to onboard applications swiftly through end-to-end delivery pipeline
                        automation.</p>
                </div>
                <div
                    class="text-center p-3 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-lg scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/dev-1-2.webp') }}" class="w-40 mx-auto my-0">
                    <h3 class="font-bold text-lg py-3">Automation Components</h3>
                    <p>This includes automation of build, test, and deployment processes, ensuring efficiency. </p>
                </div>
                <div
                    class="text-center p-3 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-lg scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/dev-1-3.webp') }}" class="w-40 mx-auto my-0">
                    <h3 class="font-bold text-lg py-3">Code Changes Integration</h3>
                    <p>Seamless integration of code changes into a shared repository for early error detection.</p>
                </div>
                <div
                    class="text-center p-3 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-lg scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/dev-1-4.webp') }}" class="w-40 mx-auto my-0">
                    <h3 class="font-bold text-lg py-3">Efficiency and Cost Reduction</h3>
                    <p>This reduces the time and resources required for software delivery, enhancing efficiency.</p>
                </div>
                <div
                    class="text-center p-3 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-lg scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/dev-1-5.webp') }}" class="w-40 mx-auto my-0">
                    <h3 class="font-bold text-lg py-3">Quality Assurance</h3>
                    <p>Emphasizes continuous integration and development to meet high-quality standards.</p>
                </div>
                <div
                    class="text-center p-3 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-lg scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/dev-1-6.webp') }}" class="w-40 mx-auto my-0">
                    <h3 class="font-bold text-lg py-3">Comprehensive Solution</h3>
                    <p>Pi stands as a comprehensive solution with a suite of tools and services for enhanced efficiency and
                        quality.</p>
                </div>
                <div></div>
                <div
                    class="text-center p-3 shadow-[0px_0px_8px_rgba(0,0,0,0.5)] rounded-lg scale-95 hover:scale-100 transition-all duration-700">
                    <img src="{{ asset('web/images/managed-services/dev-1-7.webp') }}" class="w-40 mx-auto my-0">
                    <h3 class="font-bold text-lg py-3">DevOps as a Service Benefits</h3>
                    <p>Trim delivery time and costs while enhancing software quality by embracing Pi's DevOps as a Service.
                    </p>
                </div>
            </div>
            <p class="text-justify pb-3">The adoption of
                DevOps principles and leveraging Pi's comprehensive suite of tools and services emerge as essential
                components for organizations aiming to thrive in the modern business ecosystem. DevOps, with its emphasis on
                collaboration, automation, and continuous integration, not only accelerates the delivery of software but
                also elevates its quality. Pi, with its value proposition of automating the entire delivery pipeline,
                continuous integration, and efficiency enhancement, stands as a strategic partner in this journey.</p>
            <p class="text-justify pb-3">As organizations
                navigate the challenges of delivering software in a dynamic market, Pi's DevOps as a Service becomes a
                beacon, offering end-to-end automation and streamlined processes. The result is not just a reduction in time
                and costs, but a significant improvement in the reliability and robustness of the software delivered. By
                embracing Pi's DevOps solutions, organizations position themselves not only to meet the demands of the
                present but also to adapt and innovate for the challenges that lie ahead.</p>
            <p class="text-justify pb-3">In the era of
                rapid technological evolution, the synergy of DevOps principles and Pi's advanced offerings paves the way
                for a future where software delivery is not just a process but a strategic advantage.</p>
        </div>
    </section>
    {{-- daas ends --}}
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
