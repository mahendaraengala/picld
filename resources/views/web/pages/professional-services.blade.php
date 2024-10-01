@extends('web.layouts.app')

@section('web-head')
    <title>Professional Services | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/professional-services/new-professional-services-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-left">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Professional Services</h1>
                        <p class="text-gray-300 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]">Pi
                            Cloud offers a
                            comprehensive suite of
                            professional services to optimize businesses' cloud infrastructure and operations. Our managed
                            multi-cloud services provide peace of mind, allowing businesses to focus on core operations
                            while we manage their cloud environments. With a unified interface, our multi-cloud ecosystem
                            simplifies management and enables effective cost control. Our flexible models cater to unique
                            business needs, ensuring cost optimization, enhanced security, efficient workload management,
                            and access to innovative AI technologies.</p>
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

    {{-- Intro part --}}
    <section class="pt-10 pb-5 bg-[#f8f7f7]">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Let Us Manage Cloud On Your Behalf
                </h2>
                <p class="text-center py-5">In the age of expansive cloud
                    adoption, enterprises are faced with the intricate
                    task of managing the complexities inherent in the new ecosystem. This challenge spans critical domains,
                    necessitating substantial investments in time, resources, skill enhancement, and process
                    reconfiguration. The intricacies of navigating this multifaceted landscape are undeniable. However, Pi
                    Cloud's robust Cloud Enablement Services, augmented by Professional Services, redefine this narrative.
                    Our technical expertise encompasses the entire spectrum of cloud adoption, migration, and continuous
                    management. Through the meticulous application of professional expertise, we not only streamline these
                    processes but also empower enterprises to refocus on their core objectives, ensuring a seamless and
                    transformative journey into the cloud era.</p>
            </div>
        </div>
    </section>

    <section
        class="bg-[#f8f7f7] relative after:absolute after:content-['_'] after:bg-web-ascent-1 after:w-full lg:after:h-72 lg:after:bottom-0 md:after:-bottom-1 sm:after:bottom-0 pt-3 lg:pb-10 md:pb-9 sm:pb-1 lg:after:rounded-t-full sm:after:rounded-none sm:after:h-full">
        <div class="container">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-5 text-center relative z-10">
                <div
                    class="bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.1)] rounded-lg p-5 hover:-translate-y-3 transition duration-700">
                    <img src="{{ asset('web/images/professional-services/foundation_ico-2.webp') }}"
                        alt="Our expert architects assess your digital transformation journey with readiness, best practices, migration plans, and tech tools all in one place."
                        class="w-24 my-0 mx-auto">
                    <h3 class="font-bold text-2xl pt-6 pb-2">Foundation</h3>
                    <p>Our expert architects assess your readiness, best practices, migration plan, tools, and
                        technologies related to your enterprise's digital transformation goals.</p>

                </div>
                <div
                    class="bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.1)] rounded-lg p-5  hover:-translate-y-3 transition duration-700">
                    <img src="{{ asset('web/images/professional-services/migration_ico -2.webp') }}"
                        alt="Accelerates technology adoption and enhances security and compliance for enterprises."
                        class="w-24 my-0 mx-auto">
                    <h3 class="font-bold text-2xl pt-6 pb-2">Migration</h3>
                    <p>Migrating workloads to the cloud allows enterprises to adopt new technologies faster while
                        improving security & compliance.</p>

                </div>
                <div
                    class="bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.1)] rounded-lg p-5  hover:-translate-y-3 transition duration-700">
                    <img src="{{ asset('web/images/professional-services/optimize_ico -2.webp') }}"
                        alt="Continuous assessment and audits drive effective gap analysis, process optimization, cost control implementation, and adoption of industry best practices."
                        class="w-24 my-0 mx-auto">
                    <h3 class="font-bold text-2xl pt-6 pb-2">Optimization</h3>
                    <p>Continuous assessment and dipstick audits lead to effective gap analysis, process optimization,
                        the implementation of cost control mechanisms, and industry best practices.</p>

                </div>
                <div
                    class="bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.1)] rounded-lg p-5  hover:-translate-y-3 transition duration-700">
                    <img src="{{ asset('web/images/professional-services/operate_ico -2.webp') }}"
                        alt="Automation & Multi-Cloud: Uninterrupted uptime for your IT environment."
                        class="w-24 my-0 mx-auto">
                    <h3 class="font-bold text-2xl pt-6 pb-2">Operate</h3>
                    <p>Time-tested and proven expertise in infrastructure automation and Multi Cloud environments ensure
                        uninterrupted availability of a federated environment for enterprises.</p>

                </div>
            </div>
        </div>
    </section>
    {{-- Intro part Ends --}}

    {{-- Journey With Pi Cloud --}}
    <section class="bg-[#223f97] text-white pt-2">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-2xl sm:text-xl leading-3 text-center">Journey With Pi Cloud
                    Professional And
                    Managed Services
                </h2>
                <p class="text-center lg:py-4 md:py-4 sm:py-2 lg:text-xl md:text-md sm:text-sm">Streamline your critical IT
                    processes and simplify management of your cloud ecosystem</p>
            </div>
            <div>
                <img src="{{ asset('web/images/professional-services/journey-with-pi-cloud.svg') }}" class="w-full h-auto">
            </div>
        </div>

    </section>
    {{-- Journey With Pi Cloud Ends --}}

    {{-- Professional Services --}}
    <section class="py-10">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center underline underline-offset-1">What's In
                    For You?</h2>
            </div>

            <div class="py-10">
                <div
                    class="inline-block lg:w-[35%] md:w-[35%] sm:w-full relative align-top lg:border-r-2 md:border-r-2 sm:border-r-2 border-[#000] p-3">
                    <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-xl"> Professional Services</h3>
                    <p class="py-4">Integrating Professional Services and Purpose-Aligned <a
                            href="https://pidatacenters.com/knowledge-hub/how-to-overcome-industry-obstacles-and-realize-managed-services-full-potential-for-your-business"
                            class="hover:underline underline-offset-2 text-blue-600" target="_blank">Managed Services</a>,
                        Pi Cloud
                        offers a
                        comprehensive suite of expertise encompassing applications, data architectures, and innovative
                        technologies.This holistic approach extends beyond managing enterprise workloads on Pi Cloud,
                        extending
                        to overseeing third-party cloud installations and in-house infrastructure. Our Managed Services
                        ensure a
                        secure and industry-compliant ecosystem while providing day-to-day infrastructure management and
                        continual cost optimization. All aspects are meticulously measured against SLA-driven business
                        objectives, reinforcing our commitment to delivering unparalleled solutions across global cloud
                        platforms.</p>
                </div>

                <div
                    class="inline-block lg:w-[60%] md:w-[60%] sm:w-full lg:ml-5 md:ml-5 sm:ml-0 relative align-top lg:h-[500px] md:h-[683px] sm:h-auto lg:overflow-y-scroll md:overflow-y-scroll space-y-5">
                    <div class="py-1 flex items-center">
                        <div class="bg-gray-500 rounded-lg lg:w-fit md:w-fit sm:w-fit align-top p-3">
                            <img src="{{ asset('web/images/professional-services/p1.webp') }}"
                                alt="Public, private, hybrid? We guide your cloud journey (IaaS, PaaS, SaaS)."
                                class="w-[3rem] h-auto">
                        </div>
                        <div class="px-5 w-fit">
                            <h4 class="font-semibold text-xl">Advisory & Consulting</h4>
                            <p>Public private, and hybrid cloud approaches, cloud deployment models <a
                                    href="https://pidatacenters.com/knowledge-hub/breaking-down-iaas-paas-and-saas-how-to-understand-cloud-computing"
                                    class="hover:underline underline-offset-2 text-blue-600" target="_blank">(IaaS, PaaS,
                                    and
                                    SaaS)</a>,
                                reference architectures, security policy and cloud management platform,</p>
                        </div>
                    </div>

                    <div class="py-1 flex items-center">
                        <div class="bg-gray-500 rounded-lg lg:w-fit md:w-fit sm:w-fit align-top p-3">
                            <img src="{{ asset('web/images/professional-services/p2.webp') }}"
                                alt="Automate & accelerate large-scale app migration to Pi Cloud." class="w-[3rem] h-auto">
                        </div>
                        <div class="px-5 w-fit">
                            <h4 class="font-semibold text-xl">Large-Scale Migration</h4>
                            <p>Automate and accelerate the migration of large numbers of applications on Pi Cloud</p>
                        </div>
                    </div>

                    <div class="py-1 flex items-center">
                        <div class="bg-gray-500 rounded-lg lg:w-fit md:w-fit sm:w-fit align-top p-3">
                            <img src="{{ asset('web/images/professional-services/p3.webp') }}"
                                alt="Design, build, & commission best-in-class global NOC & CSOC for your cloud."
                                class="w-[3rem] h-auto">
                        </div>
                        <div class="px-5 w-fit">
                            <h4 class="font-semibold text-xl">G-NOC, C-SOC Setup</h4>
                            <p>Get best in class global noc and csoc designed, built and commissioned</p>
                        </div>
                    </div>

                    <div class="py-1 flex items-center">
                        <div class="bg-gray-500 rounded-lg lg:w-fit md:w-fit sm:w-fit align-top p-3">
                            <img src="{{ asset('web/images/professional-services/p4.webp') }}"
                                alt="Eliminate waste, optimize spending with Pi Cloud's cost optimization."
                                class="w-[3rem] h-auto">
                        </div>
                        <div class="px-5 w-fit">
                            <h4 class="font-semibold text-xl">Cost Optimization</h4>
                            <p>Assessing and implementing cost optimization mechanisms to eliminate resource mismanagement,
                                fund leakage and cost escalation.</p>
                        </div>
                    </div>

                    <div class="py-1 flex items-center">
                        <div class="bg-gray-500 rounded-lg lg:w-fit md:w-fit sm:w-fit align-top p-3">
                            <img src="{{ asset('web/images/professional-services/p5.webp') }}"
                                alt="Develop a plan for seamless, secure migration of sensitive data across platforms."
                                class="w-[3rem] h-auto">
                        </div>
                        <div class="px-5 w-fit">
                            <h4 class="font-semibold text-xl">
                                Security, Risk and Compliance</h4>
                            <p>Develop an integrated risk management and mitigation plan to ensure seamless cross platform
                                migration of sensitive workloads</p>
                        </div>
                    </div>

                    <div class="py-1 flex items-center">
                        <div class="bg-gray-500 rounded-lg lg:w-fit md:w-fit sm:w-fit align-top p-3">
                            <img src="{{ asset('web/images/professional-services/p6.webp') }}"
                                alt="Expertly architect, migrate, & manage your database services."
                                class="w-[3rem] h-auto">
                        </div>
                        <div class="px-5 w-fit">
                            <h4 class="font-semibold text-xl">Databases</h4>
                            <p>Architect, migrate, and administer wide range of managed database services in line with
                                specific
                                requirements</p>
                        </div>
                    </div>

                    <div class="py-1 flex items-center">
                        <div class="bg-gray-500 rounded-lg lg:w-fit md:w-fit sm:w-fit align-top p-3">
                            <img src="{{ asset('web/images/professional-services/p7.webp') }}"
                                alt="Leverage automation & best practices to fast-track your DevOps journey."
                                class="w-[3rem] h-auto">
                        </div>
                        <div class="px-5 w-fit">
                            <h4 class="font-semibold text-xl">DevOps</h4>
                            <p>Accelerate your path to DevOps by leveraging automation, Continuous Integration and
                                Continuous
                                Delivery, and engineering best practices</p>
                        </div>
                    </div>

                    <div class="py-1 flex items-center">
                        <div class="bg-gray-500 rounded-lg lg:w-fit md:w-fit sm:w-fit align-top p-3">
                            <img src="{{ asset('web/images/professional-services/p8.webp') }}"
                                alt="Deploy, monitor, & optimize infrastructure. We handle OS issues & licenses."
                                class="w-[3rem] h-auto">
                        </div>
                        <div class="px-5 w-fit">
                            <h4 class="font-semibold text-xl">
                                Deployment & Provisioning</h4>
                            <p>Infrastructure deployment, monitoring and optimisation | OS issues troubleshooting and
                                resolving | Providing OS licenses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Professional Services Ends --}}


    {{-- popup starts --}}
    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto popup_form popup-overlay">
        <div class="container">
            <div class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16">
                <form action="{{ route('handle.brochure.form.enquiry') }}" method="POST"
                    class="md:px-10 sm:px-5 py-3 text-center space-y-3">

                    @csrf
                    <input type="hidden" name="form_subject" id="form_subject" value="Brochure From Enquiry" required>
                    <input type="hidden" name="download_file" id="download_file"
                        value="{{ asset('web/pdf/it-managed-services.pdf') }}" required>

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
