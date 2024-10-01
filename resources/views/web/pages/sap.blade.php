@extends('web.layouts.app')

@section('web-head')
    <title>SAP on Cloud | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/cloud-and-sap/new-sap-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">SAP on Cloud</h1>
                        <p class="text-gray-300 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]">Our
                            expertise in SAP
                            solutions combined with our
                            robust cloud infrastructure ensures seamless integration, enhanced performance, and
                            cost-effective operations. Whether you're migrating existing SAP systems to the cloud or
                            implementing new SAP solutions, our team provides end-to-end support. From initial planning and
                            architecture design to deployment and ongoing management, we streamline the process and maximize
                            the benefits of SAP on the cloud.</p>
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

    {{-- SAP Content --}}
    <section class="py-8">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">End-to-end SAP Hosting On the Cloud
                </h2>
                <p class="pt-5 text-center">Enable digital transformation across your enterprise, for smooth and secured
                    operation of business-critical processes. Pi Cloud offers end to end SAP solution to assess, migrate,
                    run & optimize SAP workloads. Enterprises can also leverage SAP-based skillsets to solve complex
                    business process challenges. Pi Cloud is certified by SAP to host and operate critical enterprise
                    workloads at scale.</p>
            </div>

            <div
                class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 lg:gap-10 md:gap-5 sm:gap-3 lg:py-7 md:py-5 sm:py-3">
                <div>
                    <img src="{{ asset('web/images/cloud-and-sap/sap1.webp') }}" class="w-full h-auto p-4">
                </div>
                <div>
                    <img src="{{ asset('web/images/cloud-and-sap/sap2.webp') }}" class="w-full h-auto p-4">
                </div>
                <div>
                    <img src="{{ asset('web/images/cloud-and-sap/sap3.webp') }}" class="w-full h-auto p-4">
                </div>
            </div>

            <div class="pt-3 space-x-3 text-center">
                <a class="bg-web-ascent-1 text-xl text-white py-3 px-10 rounded-lg cursor-pointer show_form">Download
                    Brochure</a>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 lg:gap-10 md:gap-7 sm:gap-3 py-14">
                <div
                    class="shadow-[0px_0px_15px_rgba(0,0,0,0.3)] p-10 space-y-4 hover:bg-[#223f97] hover:shadow-[#3708b357] hover:text-[#d5cef7] rounded-lg group">
                    <h3 class="font-bold text-center text-[#223f97] text-xl group-hover:text-white">SAP HANA</h3>
                    <p class="text-center">Run mission critical SAP HANA workloads on Pi Cloud with underlying SAP
                        certified infrastructure.
                        Handle transactions and analytics in-memory on a single data copy to accelerate your business
                        processes, gain business intelligence, and simplify your IT environment. Our SAP basis
                        consultants take care of undifferentiated heavy lifting of your SAP environment.</p>

                </div>
                <div
                    class="shadow-[0px_0px_15px_rgba(0,0,0,0.3)] p-10 space-y-4 hover:bg-[#223f97] hover:shadow-[#3708b357] hover:text-[#d5cef7] rounded-lg group">
                    <h3 class="font-bold text-center text-[#223f97] text-xl group-hover:text-white">SAP S/4HANA</h3>
                    <p class="text-center">Improve decision-making and increase productivity with a digital core that
                        supports all mission-critical processes. This intelligent ERP suite is designed specifically for
                        in-memory computing. Run SAP S/4HANA in a new implementation or migrate from SAP Business Suite to
                        SAP S/4HANA on Pi Cloud.</p>

                </div>
                <div
                    class="shadow-[0px_0px_15px_rgba(0,0,0,0.3)] p-10 space-y-4 hover:bg-[#223f97] hover:shadow-[#3708b357] hover:text-[#d5cef7] rounded-lg group">
                    <h3 class="font-bold text-center text-[#223f97] text-xl group-hover:text-white">SAP BW/4HANA</h3>
                    <p class="text-center">Data warehouse to consolidate data across the enterprise to get a consistent,
                        agreed-upon view of enterprise data. Based on SAP HANA, data warehouse solutions can help
                        enterprises capitalize on the full value of all data from SAP applications or third-party solutions,
                        as well as unstructured, geospatial, or Hadoop-based. </p>

                </div>

                <div
                    class="shadow-[0px_0px_15px_rgba(0,0,0,0.3)] p-10 space-y-4 hover:bg-[#223f97] hover:shadow-[#3708b357] hover:text-[#d5cef7] rounded-lg group">
                    <h3 class="font-bold text-center text-[#223f97] text-xl group-hover:text-white">ERP Central
                        Component (ECC)</h3>
                    <p class="text-center">Optimize ERP processes with SAP ECC or transition to the modern ERP system of SAP
                        S/4HANA. Take full advantage of technologies like cloud, machine learning, advanced analytics, and
                        the SAP HANA in-memory database. Pi Cloud can be the cloud platform of choice for enterprises
                        transitioning from SAP ECC to the next-generation SAP ERP system.</p>

                </div>
                <div
                    class="shadow-[0px_0px_15px_rgba(0,0,0,0.3)] p-10 space-y-4 hover:bg-[#223f97] hover:shadow-[#3708b357] hover:text-[#d5cef7] rounded-lg group">
                    <h3 class="font-bold text-center text-[#223f97] text-xl group-hover:text-white">SAP Fiori</h3>
                    <p class="text-center"> The SAP Fiori user experience has redefined the way enterprise users work. Fiori
                        designers and developers with Pi Cloud can build applications for any platform faster than ever, “
                        providing a consistent, innovative experience for creators and users.” </p>

                </div>
                <div
                    class="shadow-[0px_0px_15px_rgba(0,0,0,0.3)] hover:bg-[#223f97] hover:shadow-[#3708b357] hover:text-[#d5cef7] rounded-lg group p-10 space-y-4">
                    <h3 class="font-bold text-center text-[#223f97] text-xl group-hover:text-white">Solution Manager
                    </h3>
                    <p class="text-center">SAP Solutions Manager on Pi Cloud streamlines processes, discovers improvement
                        options, increases operational efficiency, and minimizes risk within the purview of the maintenance
                        agreement using SAP's flagship application lifecycle management tools.</p>

                </div>

                <div></div>
                <div
                    class="shadow-[0px_0px_15px_rgba(0,0,0,0.3)] p-10 space-y-4 hover:bg-[#223f97] hover:shadow-[#3708b357] hover:text-[#d5cef7] rounded-lg group">
                    <h3 class="font-bold text-center text-[#223f97] text-xl group-hover:text-white">SAP Business
                        One
                    </h3>
                    <p class="text-center">Increased visibility for small and medium-sized enterprises by capturing data in
                        an integrated ERP system. Enterprises can now be agile by spinning up VMs on Pi Cloud in minutes.
                        End-to-end support for Business One on SQL/HANA for data center migration and/or application
                        upgrades.
                    </p>
                </div>
            </div>
        </div>

    </section>
    {{-- SAP Content Ends --}}

    {{-- popup starts --}}
    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto popup_form popup-overlay">
        <div class="container">
            <div class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16">
                <form action="{{ route('handle.brochure.form.enquiry') }}" method="POST"
                    class="md:px-10 sm:px-5 py-3 text-center space-y-3">

                    @csrf
                    <input type="hidden" name="form_subject" id="form_subject" value="Brochure From Enquiry" required>
                    <input type="hidden" name="download_file" id="download_file" value="{{ asset('web/pdf/pi-sap.pdf') }}"
                        required>

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
