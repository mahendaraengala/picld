@extends('web.layouts.app')

@section('web-head')
    <title>AI Managed Services | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/ai-managed/new-ai-managed-services-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">AI Managed Services</h1>
                        <p class="text-gray-100 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Managed Services
                            for AI Solutions is a service model that takes responsibility for the ongoing operation,
                            maintenance, and support of an organization's AI systems. This includes tasks such as model
                            deployment, data management, infrastructure management, and model performance monitoring.</p>
                        <div class="pt-4 space-x-3">
                            {{-- <a href="#" class="btn-primary-md">Know more</a> --}}
                            <a href="{{ route('web.view.contact') }}"
                                class="btn-primary-md lg:leading-none md:leading-none sm:leading-[3.5rem]"
                                target="_blank">Reach Us</a>
                            {{-- <a
                                class="btn-primary-md cursor-pointer show_form lg:leading-none md:leading-none sm:leading-[3.5rem]">Brochure</a> --}}
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
                <form action="{{ route('handle.brochure.form.enquiry') }}" method="POST"
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
                        <label for="email" class="input-label">Email</label>
                        <input type="email" name="email" id="email" class="input-box-md" placeholder="Enter Email"
                            required min="1" maxlength="250">
                    </div>

                    <div class="flex flex-col">
                        <label for="company" class="input-label">Company</label>
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

    {{-- Intro content (Start) --}}
    <section class="pt-8 pb-2">
        <div class="container">

            <div class="space-y-5">
                <h2 class="lg:text-3xl md:text-3xl sm:text-2xl font-bold text-center"> Pi AI Managed Services Offerings</h2>
                <p class="text-center">Pi AI Managed
                    Services, where we bring together cutting-edge AI technologies and expert management to help your
                    business thrive in the digital era. Our comprehensive suite of services is designed to streamline your
                    operations, enhance decision-making, and drive innovation.</p>
                <p class="font-bold text-center">Explore how Pi AI
                    Managed Services can transform your business.</p>
            </div>

        </div>
    </section>
    {{-- Intro content (End) --}}

    {{-- Why Choose (Start) --}}
    <section class="relative py-2">
        <div class="container">

            <div class="space-y-5 text-center">
                <h2 class="lg:text-3xl md:text-3xl sm:text-2xl font-bold text-center"> Why Choose Pi AI
                    Managed Services?</h2>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-7 pt-10">
                <div>
                    <div class="p-5 box-gradient lg:h-[20rem] md:h-[13rem] sm:h-[17rem] relative">
                        <span class="one"></span>
                        <span class="two"></span>
                        <h3 class="text-center font-bold text-xl py-1">Enhanced Efficiency and Productivity</h3>
                        <p class="text-center">Pi AI Managed Services streamline and automate various business processes,
                            significantly improving efficiency and productivity. By automating routine tasks and providing
                            intelligent insights, your team can focus on more strategic and value-added activities.</p>
                        <span class="three"></span>
                        <span class="four"></span>
                    </div>
                </div>
                <div>
                    <div
                        class="p-5 box-gradient lg:h-[20rem] md:h-[13rem] sm:h-[17rem] relative shadow-[0px_0px_10px_rgba(0,0,0,0.5)]">
                        <span class="one"></span>
                        <span class="two"></span>
                        <h3 class="text-center font-bold text-xl py-1">Cost Savings</h3>
                        <p class="text-center">Implementing AI solutions can lead to substantial cost savings. AI Managed
                            Services helps reduce operational costs by automating repetitive tasks, optimizing resource
                            utilization, and minimizing errors. This allows your business to achieve more with less.</p>
                        <span class="three"></span>
                        <span class="four"></span>
                    </div>
                </div>
                <div>
                    <div
                        class="p-5 box-gradient lg:h-[20rem] md:h-[13rem] sm:h-[17rem] relative shadow-[0px_0px_10px_rgba(0,0,0,0.5)]">
                        <span class="one"></span>
                        <span class="two"></span>
                        <h3 class="text-center font-bold text-xl py-1">Scalability and Flexibility</h3>
                        <p class="text-center">Pi AI Managed Services provides the scalability and flexibility needed to
                            adapt to changing business needs. Whether you need to scale up during peak times or adjust your
                            resources during slower periods, AI solutions can be easily adjusted to match your requirements.
                        </p>
                        <span class="three"></span>
                        <span class="four"></span>
                    </div>
                </div>
                <div>
                    <div
                        class="p-5 box-gradient lg:h-[20rem] md:h-[13rem] sm:h-[17rem] relative shadow-[0px_0px_10px_rgba(0,0,0,0.5)]">
                        <span class="one"></span>
                        <span class="two"></span>
                        <h3 class="text-center font-bold text-xl py-1">Access to Expertise</h3>
                        <p class="text-center">Partnering with Pi gives you access to a team of AI experts and
                            professionals. These specialists bring in-depth knowledge and experience, ensuring that your AI
                            initiatives are implemented effectively and aligned with industry best practices.</p>
                        <span class="three"></span>
                        <span class="four"></span>
                    </div>
                </div>
                <div>
                    <div class="p-5 box-gradient lg:h-[20rem] md:h-[13rem] sm:h-[17rem] relative">
                        <span class="one"></span>
                        <span class="two"></span>
                        <h3 class="text-center font-bold text-xl py-1">Data-Driven Decision Making</h3>
                        <p class="text-center">AI Managed Services enable data-driven decision-making by providing
                            real-time insights and analytics. Access to accurate and actionable data allows your business to
                            make informed decisions, improve forecasting, and stay ahead of the competition.</p>
                        <span class="three"></span>
                        <span class="four"></span>
                    </div>
                </div>
                <div>
                    <div
                        class="p-5 box-gradient lg:h-[20rem] md:h-[13rem] sm:h-[17rem] relative shadow-[0px_0px_10px_rgba(0,0,0,0.5)]">
                        <span class="one"></span>
                        <span class="two"></span>
                        <h3 class="text-center font-bold text-xl py-1">Improved Customer Experience</h3>
                        <p class="text-center">AI can enhance customer interactions through personalized experiences and
                            faster response times. AI-powered chatbots, recommendation engines, and customer analytics help
                            create a more engaging and satisfying customer journey, fostering loyalty and retention.</p>
                        <span class="three"></span>
                        <span class="four"></span>
                    </div>
                </div>
                <div>
                    <div
                        class="p-5 box-gradient lg:h-[20rem] md:h-[13rem] sm:h-[17rem] relative shadow-[0px_0px_10px_rgba(0,0,0,0.5)]">
                        <span class="one"></span>
                        <span class="two"></span>
                        <h3 class="text-center font-bold text-xl py-1">Competitive Advantage</h3>
                        <p class="text-center">Adopting AI Managed Services positions your business at the forefront of
                            technological innovation. By leveraging advanced AI capabilities, you can differentiate your
                            offerings, enter new markets, and stay ahead of competitors who may still be relying on
                            traditional methods.</p>
                        <span class="three"></span>
                        <span class="four"></span>
                    </div>
                </div>
                <div>
                    <div
                        class="p-5 box-gradient lg:h-[20rem] md:h-[13rem] sm:h-[17rem] relative shadow-[0px_0px_10px_rgba(0,0,0,0.5)]">
                        <span class="one"></span>
                        <span class="two"></span>
                        <h3 class="text-center font-bold text-xl py-1">Risk Management and Compliance</h3>
                        <p class="text-center">AI Managed Services helps mitigate risks and ensure compliance with
                            regulatory requirements. AI solutions can detect anomalies, predict potential issues, and
                            enforce compliance measures, safeguarding your business from threats.</p>
                        <span class="three"></span>
                        <span class="four"></span>
                    </div>
                </div>
                <div class="lg:block md:hidden sm:hidden"></div>
                <div>
                    <div
                        class="p-5 box-gradient lg:h-[20rem] md:h-[13rem] sm:h-[17rem] relative shadow-[0px_0px_10px_rgba(0,0,0,0.5)]">
                        <span class="one"></span>
                        <span class="two"></span>
                        <h3 class="text-center font-bold text-xl py-1">Focus on Core Competencies</h3>
                        <p class="text-center">Outsourcing AI management allows your business to focus on its core
                            competencies while leaving the complexities of AI implementation and maintenance to the experts.
                            This ensures that your team can concentrate on what they do best, driving growth and innovation.
                        </p>
                        <span class="three"></span>
                        <span class="four"></span>
                    </div>
                </div>
                <div>
                    <div
                        class="p-5 box-gradient lg:h-[20rem] md:h-[13rem] sm:h-[17rem] relative shadow-[0px_0px_10px_rgba(0,0,0,0.5)]">
                        <span class="one"></span>
                        <span class="two"></span>
                        <h3 class="text-center font-bold text-xl py-1">Continuous Improvement and Innovation</h3>
                        <p class="text-center">AI Managed Services provide continuous monitoring, optimization, and updates
                            to AI models, ensuring they remain effective and up-to-date with the latest advancements. This
                            fosters a culture of continuous improvement and innovation within your organization.</p>
                        <span class="three"></span>
                        <span class="four"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Why Choose (End) --}}


    {{-- Case Studies Starts --}}
    <section class="pt-7 pb-2">
        <div class="container">
            <div>
                {{-- <h2 class="font-bold text-xl">Case Studies/Used Cases</h2>
                <p class="py-1">Explore real-world examples of how Pi AI Managed Services have helped businesses achieve
                    their goals.</p>
                <ul class="list-disc pl-4">
                    <li class="pb-2"><b>Case Study 1: Retail:</b> Improved customer experience and sales forecasting.
                    </li>
                    <li class="pb-2"><b>Case Study 2: Healthcare:</b> Enhanced patient care through predictive analytics.
                    </li>
                    <li class="pb-2"><b>Case Study 3: Finance:</b> Streamlined fraud detection and risk management.</li>
                </ul> --}}

                {{-- <h2 class="font-bold text-xl pt-4">Get Started</h2> --}}
                <p class="py-3 font-bold text-center text-xl text-gray-700">
                    Ready to transform your business with Pi AI Managed Services?
                </p>
                <div class="pt-4 space-x-3 text-center">
                    <a href="{{ route('web.view.contact') }}"
                        class="btn-primary-md lg:leading-none md:leading-none sm:leading-[3.5rem]" target="_blank">Get
                        Started</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Case Studies Ends --}}

    {{-- Our Services Starts --}}
    <section class="pt-4 pb-10">
        <div class="container">
            <div class="space-y-5 text-center">
                <h2 class="lg:text-3xl md:text-3xl sm:text-2xl font-bold text-center"> Our Services</h2>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 lg:gap-6 md:gap-14 sm:gap-12 pt-16 pb-3">
                <div class="shadow-[0px_0px_3px_rgba(0,0,0,0.5)] p-3 relative bg-slate-300">
                    <div
                        class="w-24 h-24 mx-auto my-0 absolute -top-[13%] lg:left-[30%] md:left-[40%] sm:left-[35%] p-3 rounded-lg bg-white">
                        <img src='{{ asset('web/images/ai-managed/ai-strategy-blue.webp') }}'
                            class="w-16 h-16 mx-auto my-0 drop-shadow-xl">
                    </div>
                    <div class="pt-12">
                        <h3
                            class="font-bold text-center text-xl lg:h-14 md:h-10 sm:h-10 lg:leading-6 md:leading-8 sm:leading-9 pb-3">
                            Strategy and <br class="lg:block md:hidden sm:hidden">
                            Consulting</h3>
                        <h4 class="font-bold">AI Readiness Assessment:</h4>
                        <p>Evaluate your organization's readiness for AI integration.</p>
                        <h4 class="font-bold">Strategic Planning</h4>
                        <p> Develop a comprehensive AI strategy aligned with your business goals.</p>
                        <h4 class="font-bold">Use Case Identification:</h4>
                        <p>Identify and prioritize AI use cases with the highest impact potential.</p>
                    </div>
                </div>
                <div class="shadow-[0px_0px_3px_rgba(0,0,0,0.5)] p-3 relative bg-slate-300">
                    <div
                        class="w-24 h-24 mx-auto my-0 absolute -top-[13%] lg:left-[30%] md:left-[40%] sm:left-[35%] p-3 rounded-lg bg-white">
                        <img src='{{ asset('web/images/ai-managed/ai-integration-blue.webp') }}'
                            class="w-16 h-16 mx-auto my-0 drop-shadow-xl">
                    </div>
                    <div class="pt-12">
                        <h3
                            class="font-bold text-center text-xl lg:h-14 md:h-10 sm:h-10 lg:leading-6 md:leading-8 sm:leading-9 pb-3">
                            Implementation
                            and Integration
                        </h3>
                        <h4 class="font-bold">Custom AI Solutions:</h4>
                        <p>Design and develop AI models tailored to your needs.</p>
                        <h4 class="font-bold">System Integration: </h4>
                        <p>Seamlessly integrate AI solutions with your existing IT infrastructure.</p>
                        <h4 class="font-bold">Data Management: </h4>
                        <p>Ensure effective data collection, storage, and management for AI initiatives.</p>
                    </div>
                </div>
                <div class="shadow-[0px_0px_3px_rgba(0,0,0,0.5)] p-3 relative bg-slate-300">
                    <div
                        class="w-24 h-24 mx-auto my-0 absolute -top-[13%] lg:left-[30%] md:left-[40%] sm:left-[35%] p-3 rounded-lg bg-white">
                        <img src='{{ asset('web/images/ai-managed/ai-operations-blue.webp') }}'
                            class="w-16 h-16 mx-auto my-0 drop-shadow-xl">
                    </div>
                    <div class="pt-12">
                        <h3
                            class="font-bold text-center text-xl lg:h-14 md:h-10 sm:h-10 lg:leading-6 md:leading-8 sm:leading-9 pb-3">
                            Operations and
                            Management</h3>
                        <h4 class="font-bold">AI Model Monitoring: </h4>
                        <p>Continuous monitoring and optimization of AI models.</p>
                        <h4 class="font-bold">Performance Analytics: </h4>
                        <p>Analyze the performance of AI solutions and make data-driven improvements.</p>
                        <h4 class="font-bold">Incident Management: </h4>
                        <p>Proactive identification and resolution of potential issues.</p>
                    </div>
                </div>
                <div class="shadow-[0px_0px_3px_rgba(0,0,0,0.5)] p-3 relative bg-slate-300">
                    <div
                        class="w-24 h-24 mx-auto my-0 absolute -top-[13%] lg:left-[30%] md:left-[40%] sm:left-[35%] p-3 rounded-lg bg-white">
                        <img src='{{ asset('web/images/ai-managed/ai-training-blue.webp') }}'
                            class="w-16 h-16 mx-auto my-0 drop-shadow-xl">
                    </div>
                    <div class="pt-12">
                        <h3
                            class="font-bold text-center text-xl lg:h-14 md:h-10 sm:h-10 lg:leading-6 md:leading-8 sm:leading-9 pb-3">
                            Training and <br class="lg:block md:hidden sm:hidden">
                            Support</h3>
                        <h4 class="font-bold">Employee Training: </h4>
                        <p>Equip your team with the skills to work effectively with AI technologies.</p>
                        <h4 class="font-bold">Documentation and Resources:</h4>
                        <p>Provide comprehensive documentation and resources for AI solutions.</p>
                        <h4 class="font-bold">Technical Support:</h4>
                        <p>24/7 technical support to address any AI-related queries or issues.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Our Services Ends --}}
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

    {{-- popup script ends --}}
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
