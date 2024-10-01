@extends('web.layouts.app')

@section('web-head')
    <title>Pi AI CoE | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/about/new-pi-ai-coe-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="lg:px-10 md:px-10 sm:px-8 lg:py-[3.5rem] md:pt-32 sm:py-8 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Pi AI CoE</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-[4.5rem] md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            The Pi GEN Ai CoE
                            (Center
                            of
                            Excellence)
                            is
                            dedicated to empowering businesses by initiating their journey into the era of Artificial
                            Intelligence. With a focus on practicality and real-world application, we leverage a diverse
                            array of business use cases to kickstart this transformative process. We understand that AI
                            adoption can be daunting, which is why we offer tailored solutions and guidance to help
                            organizations navigate this landscape effectively. By showcasing tangible examples of AI's
                            impact on various facets of business operations, we aim to inspire confidence and facilitate the
                            seamless integration of AI technologies into business workflows. </p>
                        <div class="lg:pt-4 md:pt-3 sm:pt-0 space-x-3">
                            {{-- <a href="#" class="btn-primary-md">Know more</a> --}}
                            <a href="{{ route('web.view.contact') }}"
                                class="btn-primary-md lg:leading-none md:leading-none sm:leading-[3.5rem]"
                                target="_blank">Reach Us</a>
                            <a
                                class="btn-primary-md cursor-pointer show_form lg:leading-none md:leading-none sm:leading-[3.5rem]">Brochure</a>
                            <a href="https://picloud.ai/public/gpucloud" target="_blank"
                                class="btn-primary-md cursor-pointer lg:leading-none md:leading-none sm:leading-[3.5rem]">
                                GPU&nbsp;Cloud</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- popup starts --}}
    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto popup_form popup-overlay">
        <div class="container">
            <div class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16">
                <form action="{{ route('handle.brochure.form.enquiry') }}" method="POST" id="emailForm"
                    class="md:px-10 sm:px-5 py-3 text-center space-y-3">

                    @csrf
                    <input type="hidden" name="form_subject" id="form_subject" value="Brochure From Enquiry" required>
                    <input type="hidden" name="download_file" id="download_file"
                        value="{{ asset('web/pdf/pi-ai-coe.pdf') }}" required>

                    <div class="text-right">
                        <span class="text-3xl cursor-pointer close_form">&times;</span>
                    </div>
                    <div>
                        <h1 class="font-semibold text-3xl mb-2">Download Brochure</h1>
                    </div>

                    <div class="flex flex-col">
                        <label for="name" class="input-label">Name</label>
                        <input type="text" name="name" id="name" class="input-box-md" placeholder="Enter Name"
                            required minlength="1" maxlength="250">
                    </div>

                    <div class="flex flex-col">
                        <label for="phone" class="input-label">Mobile</label>
                        <input type="tel" pattern="[0-9]{10}" name="phone" id="phone" class="input-box-md"
                            placeholder="Enter Phone" required minlength="10" maxlength="10">
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="input-label">Work Email</label>
                        <input type="email" name="email" id="email" class="input-box-md" placeholder="Enter Email"
                            required min="1" maxlength="250">
                        <p id="error-message" class="text-red-600"></p>
                    </div>

                    <div class="flex flex-col">
                        <label for="company" class="input-label">Company / Website</label>
                        <input type="text" name="message" id="company" class="input-box-md" placeholder="Enter company"
                            required min="1" maxlength="250">
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

    {{-- pi-ai-coe Section (Start) --}}
    <section>
        <div class="container lg:py-10 md:py-10 sm:py-10">

            <div class="space-y-5">
                <h2 class="lg:text-3xl md:text-3xl sm:text-2xl font-bold text-center"> Pi STORM (Strategic Technology and
                    Operation Road Map) </h2>
                <p class="text-center">A GEN AI Framework,
                    pioneered by Pi, stands as a comprehensive tool tailored for businesses venturing into the age of AI.
                    Its core mission is to facilitate the initiation of the Generative AI journey by furnishing a strategic
                    roadmap, pinpointing real-world business use cases, and driving value generation through seamless
                    implementation. We understand that each business operates within its own context, facing specific
                    challenges and opportunities. Therefore, we work closely with them to identify specific needs and
                    objectives, ensuring that the Generative AI solutions we propose are perfectly aligned with their
                    overall strategic vision. </p>

                {{-- blogs button starts --}}
                <div class="py-3 space-x-3 text-center">
                    <a href="{{ route('view.ai-resources') }}#blogs"
                        class="bg-web-ascent-1 text-xl text-white py-3 px-10 rounded-lg cursor-pointer">Discover
                        Our Blogs</a>
                </div>
                {{-- blogs button ends --}}

                <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-9 lg:py-14 md:py-16 sm:my-10">
                    <div>
                        <ul>
                            <li class="py-2 flex">
                                <img src="{{ asset('web/images/about/Tick.svg') }}" class="w-5"><span
                                    class="pl-4">Industry expertise, innovative
                                    technology insights,
                                    and
                                    understanding of business operations</span>
                            </li>
                            <li class="py-2 flex"><img src="{{ asset('web/images/about/Tick.svg') }}"
                                    class="w-5"><span class="pl-4">Assist businesses in integrating
                                    Generative AI into
                                    workflows effectively.</span>
                            </li>
                            <li class="py-2 flex"><img src="{{ asset('web/images/about/Tick.svg') }}"
                                    class="w-5"><span class="pl-4">Formulate actionable plans tailored
                                    to enhancing
                                    customer
                                    experiences,
                                    optimizing
                                    internal
                                    processes, or unlocking new revenue streams.</span> </li>
                            <li class="py-2 flex"><img src="{{ asset('web/images/about/Tick.svg') }}"
                                    class="w-5"><span class="pl-4">Provide strategic roadmaps for
                                    successful
                                    implementation
                                    and long-term
                                    business
                                    growth.</span> </li>
                            <li class="py-2 flex"><img src="{{ asset('web/images/about/Tick.svg') }}"
                                    class="w-5"><span class="pl-4">Utilize the Pi STORM framework for
                                    navigating the
                                    complexities of Generative
                                    AI
                                    adoption.</span> </li>
                            <li class="py-2 flex"><img src="{{ asset('web/images/about/Tick.svg') }}"
                                    class="w-5"><span class="pl-4">Ensure strategies are backed by
                                    thorough planning and
                                    alignment with core
                                    business objectives.</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div
                            class="relative before:absolute before:content-['_'] before:w-40 before:h-32 lg:before:-top-8 before:-z-[1] before:bg-web-ascent-1 lg:before:right-14 md:before:-right-8 md:before:-top-8 sm:before:-right-2 sm:before:-top-2">
                        </div>
                        <img src="{{ asset('web/images/about/pi-ai-coe-points.webp') }}"
                            alt="Strategic Technology and Operation Road Map for businesses entering the era of AI"
                            class="w-96 mx-auto my-0 lg:border-8 md:border-8 sm:border-2 border-white">
                        <div
                            class="relative after:absolute after:content-['_'] after:w-40 after:h-32 lg:after:-bottom-8 after:-z-[1] after:bg-web-ascent-1 lg:after:left-14 md:after:-left-8 md:after:-bottom-8 sm:after:-left-2 sm:after:-bottom-2">
                        </div>
                    </div>
                </div>
            </div>
            {{-- brochure --}}
            <div class="lg:pt-3 md:pt-0 sm:pt-14 space-x-3 text-center">
                <a class="bg-web-ascent-1 text-xl text-white py-3 px-10 rounded-lg cursor-pointer show_form">Download
                    Brochure</a>
            </div>

        </div>
    </section>
    {{-- pi-ai-coe Section (End) --}}

    {{-- services Section (Start) --}}
    <section>
        <div class="container lg:pb-28 md:pb-28 sm:pb-16 space-y-10">

            <div class="space-y-5 text-center">
                <h2 class="lg:text-3xl md:text-3xl sm:text-2xl font-bold text-center text-web-ascent-1"> GEN AI Service
                    Offerings </h2>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 justify-center gap-8">
                <div class="p-5 rounded-tr-3xl rounded-br-3xl cursor-pointer bg-white card-box">
                    <h3 class="font-bold text-2xl py-5 text-center">Strategy and Advisory</h3>
                    <p class="text-center"> Benefit from our strategic advisory services for tailored adoption of
                        Generative
                        AI. Our experienced advisors collaborate with your team to define comprehensive strategies aligned
                        with your goals. We identify areas for AI value, assess risks and opportunities, and develop
                        implementation roadmaps. With our expertise, navigate AI adoption confidently, maximizing its
                        benefits for your organization.</p>
                </div>
                <div class="p-5 rounded-tr-3xl rounded-br-3xl cursor-pointer bg-white card-box">
                    <h3 class="font-bold text-2xl py-5 text-center">Readiness Assessment</h3>
                    <p class="text-center">Our GEN AI Readiness Assessment service offers a comprehensive evaluation of
                        your
                        organization's readiness to adopt Generative AI technologies. By understanding and examining your
                        business challenges, goals, current capabilities, and infrastructure, we pinpoint areas for
                        enhancement. With this insight, we collaboratively construct a tailored roadmap for effective
                        Generative AI adoption. This strategic plan ensures alignment with your business objectives,
                        empowering you to tap into the full potential of AI. </p>
                </div>
                <div class="p-5 rounded-tr-3xl rounded-br-3xl cursor-pointer bg-white card-box">
                    <h3 class="font-bold text-2xl py-5 text-center">Workshops</h3>
                    <p class="text-center">Facilitate use case identification, ideation, and design thinking sessions
                        tailored to your business objectives. Through these collaborative workshops, we aim to uncover
                        innovative solutions that drive tangible value and transformation within your business. From
                        ideation to implementation, we foster creativity and strategic thinking, empowering you to leverage
                        generative AI effectively for impactful business use cases. </p>
                </div>
                <div class="p-5 rounded-tr-3xl rounded-br-3xl cursor-pointer bg-white card-box">
                    <h3 class="font-bold text-2xl py-5 text-center">Build POCs and MVPs</h3>
                    <p class="text-center"> Create Proof of Concepts (PoCs) and Minimum Viable Products (MVPs) to validate
                        the technical feasibility of your Generative AI ideas across various use cases. Pi AI CoE will guide
                        you through the development process, assisting in building, testing, and refining your solutions to
                        ensure they effectively address specific use cases aligned with your organization’s business goals.
                        We work closely with you, leveraging our expertise to streamline development and accelerate
                        time-to-market. Through iterative testing and feedback loops, we ensure that the final product meets
                        both technical requirements and user expectations, setting the stage for successful deployment and
                        adoption within your organization.</p>
                </div>
                <div class="p-5 rounded-tr-3xl rounded-br-3xl cursor-pointer bg-white card-box">
                    <h3 class="font-bold text-2xl py-5 text-center">Roadmap Development</h3>
                    <p class="text-center">After successful use case identification and PoC implementation, we craft a
                        detailed roadmap for Generative AI solution integration. This roadmap includes project outlines,
                        generated value, necessary technologies, GPU infrastructure, and resource requirements. Following a
                        thorough stakeholder review, we provide a tailored roadmap to guide seamless integration within your
                        organization. It simplifies complexities and ensures optimal outcomes by directing technology and
                        talent selection. Additionally, we carefully assess GPU alternatives based on computing needs,
                        memory capacity, CUDA cores, and tensor cores for optimal performance.</p>
                </div>
                <div class="p-5 rounded-tr-3xl rounded-br-3xl cursor-pointer bg-white card-box">
                    <h3 class="font-bold text-2xl py-5 text-center">Implementation and Monitoring</h3>
                    <p class="text-center">After roadmap approval, we focus on implementing Generative AI within your
                        organization. This involves deploying solutions, monitoring performance, and making adjustments to
                        ensure value delivery. Strategies outlined in the roadmap are translated into actionable steps,
                        including solution deployment, workflow integration, and performance tracking against predefined
                        metrics. Proactive measures address challenges like fine-tuning algorithms or optimizing data
                        pipelines. Continuous adaptation and iteration ensure the responsiveness and effectiveness of
                        Generative AI initiatives over time.</p>
                </div>
            </div>

        </div>
    </section>
    {{-- services Section (End) --}}


    {{-- webinar popup starts --}}
    {{-- <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto form-link popup-overlay"
        style="display:none;">
        <div class="container">
            <div class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16 p-3">
                <div>
                    <button class="float-right px-2 close-link"><span class="text-2xl">&times;</span></button>
                    <h3 class="text-center pt-3 pb-2 font-bold text-2xl">Join For Our Webinar</h3>
                    <img src="{{ asset('web/images/webinar-3.webp') }}" class="py-4 link cursor-pointer">
                </div>
                <div class="link cursor-pointer">
                    <p>Register for our upcoming webinar </p>
                    <p><b>"Transform Your BFSI Operations with AI"</b></p>
                    <p>Boost efficiency and innovation in association with AI</p>
                    <p><b>Date: 29th August 2024 | Time: 3:30–4:30 PM</b></p>
                    <p>Don't miss this opportunity to stay ahead of the curve and propel your BFSI success!
                        <strong class="font-normal text-sm">(The webinar link will be shared upon registration.)</strong>
                    </p>
                </div>
                <div class="text-center py-2 link cursor-pointer">
                    <button class="bg-web-ascent-1 text-white p-2 rounded-lg" class="link">Resgister Now</button>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- webinar popup Ends --}}

    {{-- form button starts --}}
    {{-- <div class="pt-4 fixed bottom-20 right-10 web-link hidden">
        <button class="btn-primary-md">Webinar</button>
    </div> --}}
    {{-- form button ends --}}
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

    {{-- webinar popup script starts --}}
    {{-- <script>
        $(document).ready(function() {
            $(window).on('load', function() {
                $(".form-link").show();
            });

            $('.close-link').on('click', function() {
                $('.form-link').hide();
                // $('.web-link').show();
            });

            $('.web-link').on('click', function() {
                $(".form-link").show();
                // $('.web-link').hide();
            });

            $('.link').on('click', function() {
                window.open('https://forms.office.com/r/uFh2LEtxxR', '_blank');
            });
        });
    </script> --}}
    {{-- webinar popup script ends --}}
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
    <script>
        document.getElementById('emailForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var email = document.getElementById('email').value;
            var errorMessage = document.getElementById('error-message');

            // List of domains to disallow
            var disallowedDomains = ['gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com'];

            // Extract domain from email
            var domain = email.substring(email.lastIndexOf("@") + 1);

            // Check if domain is in the disallowed list
            if (disallowedDomains.includes(domain)) {

                errorMessage.textContent = 'Email domain not allowed.';
                return false;
            } else {
                document.getElementById("emailForm").submit();
            }


            errorMessage.textContent = '';
            // alert('Email is valid and allowed.');
        });
    </script>
@endsection
