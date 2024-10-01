@extends('web.layouts.app')

@section('web-head')
    <title>Backup as a Service | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/xaas/new-backup-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Backup as a Service</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-52 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Ensure your critical data
                            is always protected with our Backup as a Service. Offering automated, secure, and scalable
                            cloud-based backup solutions, BaaS guarantees seamless recovery and peace of mind. Our robust
                            security measures safeguard your business against data loss, providing you with reliable backups
                            tailored to your needs.
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
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Backup </h2>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 items-center gap-10 pt-5">
                <div>
                    <p class="pt-3">Pi Cloud backup
                        service offers a cost-effective way to protect mission critical data and applications
                        from unplanned downtime. By copying and storing wide range of workloads across different zones,
                        enterprises are assured of reinstating the files in case of a disruption. The benefit of regular
                        data backup is its reliability. Automated backup on Pi Cloud takes any possibility of human error or
                        backup misses, out of the equation. This assures enterprises of the steadiness of data availability
                        and being up-to-date.</p>
                </div>
                <div>
                    <img src="{{ asset('web/images/private-cloud/backup_img.webp') }}" class="w-96 mx-auto my-0">
                </div>
            </div>

            {{-- Key Features --}}
            <div class="py-5">
                <div class="container">
                    <div>
                        <h2 class="lg:text-3xl md:text-2xl sm:text-2xl font-bold text-center"> Features</h2>
                    </div>

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-7 pb-1">
                        <div
                            class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                            <div class="flex py-3">
                                <img src="{{ asset('web/images/private-cloud/eou.webp') }}"
                                    alt="Manage and secure your data centrally from one interface" class="w-12 h-12">
                                <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                    Ease Of Use</h4>
                            </div>
                            <p class="text-center">Schedule, manage and restore centrally from one interface
                            </p>
                        </div>
                        <div
                            class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                            <div class="flex py-3">
                                <img src="{{ asset('web/images/private-cloud/hcb.webp') }}"
                                    alt="Single workload management for seamless on-cloud and on-premises"
                                    class="w-12 h-12">
                                <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                    Hybrid Backup Solution
                                </h4>
                            </div>
                            <p class="text-center">Single point solution for your workloads running on cloud
                                and on-premise</p>

                        </div>
                        <div
                            class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer relative lg:left-0 md:left-[55%] sm:left-0">
                            <div class="flex py-3">
                                <img src="{{ asset('web/images/private-cloud/fdb.webp') }}"
                                    alt="Restore entire workloads or specific files within a specified time window."
                                    class="w-12 h-12">
                                <h4 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                    Flexible Backup Options
                                </h4>
                            </div>
                            <p class="text-center">Restore your entire workloads or specific files and
                                folders for a given duration window</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Key Features Ends --}}

            {{-- use cases starts --}}
            <div class="pb-3">
                <h2 class="lg:text-3xl md:text-2xl sm:text-2xl font-bold text-center"> Use Cases</h2>
                <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 lg:py-5 md:py-5 gap-3">
                    <div
                        class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                        <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                        <p>Protection from
                            ransomware</p>
                    </div>
                    <div
                        class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                        <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                        <p>In-house server
                            breakdown</p>
                    </div>
                    <div
                        class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                        <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                        <p>Cold storage of
                            data</p>
                    </div>
                    <div
                        class="flex lg:justify-center lg:items-center lg:flex-row md:justify-center md:items-center md:flex-row gap-3">
                        <img src="{{ asset('web/images/private-cloud/Tick.webp') }}" class="w-5 h-5">
                        <p>Protection from
                            ransomware</p>
                    </div>
                </div>
            </div>
            {{-- use cases ends --}}

        </div>
    </section>
    {{-- intro cont ends --}}

    {{-- secure your data cont starts --}}
    <section class="py-1">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Secure Your Data, Ensure Business
                    Continuity </h2>
                <p class="pt-3">Data is the vitality of
                    every firm in the challenging digital landscape of today. Ensuring regulatory
                    compliance and preserving company continuity depend on protecting this priceless asset. You may protect
                    your data with our Backup as a Service (BaaS) solution with simplicity, dependability, and the assurance
                    that comes from knowing it is safe. </p>
            </div>
            <div>
                <h3 class="font-bold lg:text-3xl md:text-2xl sm:text-2xl text-center pt-5">How It Operates </h3>

                <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-5 py-6">
                    <div class="shadow-[3px_3px_0px_rgba(0,0,0,0.5)] p-3 rounded-tr-3xl rounded-bl-3xl">
                        <h4 class="text-web-ascent-1 font-bold lg:text-lg md:text-lg sm:text-lg text-center py-1">Evaluation
                            and Planning</h4>
                        <p class="text-center"> Our experienced staff, with a deep understanding of data security, works
                            with you to comprehend
                            your data security requirements and creates a tailored backup plan that complements your
                            corporate goals.</p>
                    </div>
                    <div class="shadow-[3px_3px_0px_rgba(0,0,0,0.5)] p-3 rounded-tr-3xl rounded-bl-3xl">
                        <h4 class="text-web-ascent-1 font-bold lg:text-lg md:text-lg sm:text-lg text-center py-1">
                            Implementation</h4>
                        <p class="text-center">We guarantee hassle-free and flawless implementation by seamlessly
                            integrating our BaaS solution
                            with your current infrastructure.</p>
                    </div>
                    <div class="shadow-[3px_3px_0px_rgba(0,0,0,0.5)] p-3 rounded-tr-3xl rounded-bl-3xl">
                        <h4 class="text-web-ascent-1 font-bold lg:text-lg md:text-lg sm:text-lg text-center py-1">Ongoing
                            Support & Monitoring
                        </h4>
                        <p class="text-center">We provide proactive assistance after deployment. Our team offers frequent
                            backups and
                            round-the-clock monitoring to guarantee the security and accessibility of your data, giving you
                            the peace of mind that your data is always in safe hands.</p>
                    </div>
                    <div class="shadow-[3px_3px_0px_rgba(0,0,0,0.5)] p-3 rounded-tr-3xl rounded-bl-3xl">
                        <h4 class="text-web-ascent-1 font-bold lg:text-lg md:text-lg sm:text-lg text-center py-1">Recovery &
                            Restoration</h4>
                        <p class="text-center">Our effective recovery procedure ensures that your business activities can be
                            quickly and
                            minimally disrupted in the case of a data loss, giving you the confidence that your business can
                            quickly bounce back from any data-related incident.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- secure your data cont ends --}}

    {{-- benefits conts starts --}}
    <section class="py-4">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Why Select Pi Backup as a Service?
                    Benefits of Selecting Pi BaaS</h2>
                <p class="pt-3">Choosing Backup as a
                    Service (BaaS) has many essential advantages that assist companies in preserving operational continuity,
                    safeguarding their data, and simplifying backup management. The following are the main </p>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 py-6">
                <div class="relative">
                    <div class="group relative bg-web-ascent-1 text-center p-3 rounded-tl-xl rounded-tr-xl">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg pb-2 text-white h-[3rem]">Economic Data
                            Protection</h3>
                    </div>
                    <div
                        class="bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-bl-xl rounded-br-xl p-3 lg:h-[14.5rem]">
                        <p class="pb-1 text-[15px]"><b>Reduced Initial Expense:</b> BaaS does not require expensive
                            on-premises backup
                            infrastructure. Rather,
                            a membership charge is paid, which makes it more cost-effective, particularly for small and
                            medium-sized enterprises.</p>

                        <p class="pb-1 text-[15px]"><b>Predictable Costs:</b> Having a clear understanding of your spending
                            with BaaS
                            enables better
                            financial
                            planning and helps you avoid unforeseen charges.</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="group relative bg-web-ascent-1 text-center p-3 rounded-tl-xl rounded-tr-xl">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg pb-2 text-white h-[3rem]">Ability to scale
                        </h3>
                    </div>
                    <div
                        class="bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-bl-xl rounded-br-xl p-3 lg:h-[14.5rem]">
                        <p class="pb-1 text-[15px]"><b>Simple Storage Scaling:</b> As your data increases, BaaS solutions
                            may easily
                            scale to meet
                            your needs
                            for more storage without requiring complex updates or additional hardware.</p>

                        <p class="pb-1 text-[15px]"><b>Flexible Options:</b> BaaS gives you the freedom to select the
                            backup service
                            level that best
                            suits your
                            needs right now, and you can easily adjust it as your company grows or your data storage needs
                            change.</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="group relative bg-web-ascent-1 text-center p-3 rounded-tl-xl rounded-tr-xl">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg pb-2 text-white h-[3rem]">Dependable and
                            automated
                            backups </h3>
                    </div>
                    <div
                        class="bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-bl-xl rounded-br-xl p-3 lg:h-[14.5rem] md:h-[13.5rem]">
                        <p class="pb-1 text-[15px]"><b>No Human Intervention:</b> BaaS systems automate the backup
                            procedure,
                            guaranteeing that your
                            data is routinely and reliably backed up without the need for human intervention. </p>

                        <p class="pb-1 text-[15px]"><b>Minimized Human Error:</b> Automatic backups make sure that your
                            important
                            data is always safe
                            by lowering the possibility of data loss from human error. </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="group relative bg-web-ascent-1 text-center p-3 rounded-tl-xl rounded-tr-xl">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg pb-2 text-white h-[3rem]">Improved
                            Information
                            Security </h3>
                    </div>
                    <div
                        class="bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-bl-xl rounded-br-xl p-3 lg:h-[14.5rem]">
                        <p class="pb-1 text-[15px]"><b>Advanced Encryption:</b> BaaS providers safeguard your data against
                            breaches
                            and unwanted
                            access by utilizing strong encryption techniques both in transit and at rest, ensuring the
                            highest level of data security. </p>

                        <p class="pb-1 text-[15px]"><b>Support for Compliance:</b> A lot of BaaS services are made to
                            satisfy
                            industry-specific
                            compliance standards, assisting your company in abiding by data protection laws like GDPR,
                            HIPAA, or SOC 2. </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="group relative bg-web-ascent-1 text-center p-3 rounded-tl-xl rounded-tr-xl">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg pb-2 text-white h-[3rem]">Recovery from
                            Disasters and
                            Business Continuity </h3>
                    </div>
                    <div
                        class="bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-bl-xl rounded-br-xl p-3 lg:h-[14.5rem]">
                        <p class="pb-1 text-[15px]"><b>Fast Data Restoration: </b> enables quick data recovery in the event
                            of a
                            disaster, reducing
                            downtime and guaranteeing that your company can carry on with the least amount of interruption.
                        </p>

                        <p class="pb-1 text-[15px]"><b>Offsite Storage: </b> protects against local disasters (such fires
                            and floods)
                            that can
                            jeopardize
                            on-premises backups by keeping backups offsite in the cloud.</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="group relative bg-web-ascent-1 text-center p-3 rounded-tl-xl rounded-tr-xl">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg pb-2 text-white h-[3rem]">Decreased
                            Information
                            Technology Stress </h3>
                    </div>
                    <div
                        class="bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-bl-xl rounded-br-xl p-3 lg:h-[14.5rem]">
                        <p class="pb-1 text-[15px]"><b>Outsourced Management:</b> By taking on the management of backups,
                            BaaS frees
                            up your IT staff
                            to concentrate on other important duties and long-term goals. </p>

                        <p class="pb-1 text-[15px]"><b>Professional Assistance:</b> BaaS providers guarantee that your
                            backup
                            solutions are always up
                            to date and operating as intended by providing technical assistance and upkeep. </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="group relative bg-web-ascent-1 text-center p-3 rounded-tl-xl rounded-tr-xl">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg pb-2 text-white h-[3rem]">Simple Control and
                            Access
                        </h3>
                    </div>
                    <div
                        class="bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-bl-xl rounded-br-xl p-3 lg:h-[20rem]">
                        <p class="pb-1 text-[15px]"><b>Centralized Management:</b> BaaS systems frequently come with
                            easy-to-use
                            dashboards that make
                            it simple
                            to keep an eye on and control your backups from a single interface.</p>

                        <p class="pb-1 text-[15px]"><b>Accessibility:</b> Cloud-based Backup as a Service (BaaS) offers
                            flexibility
                            and convenience
                            by enabling
                            you to access your backups from any location with an internet connection.</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="group relative bg-web-ascent-1 text-center p-3 rounded-tl-xl rounded-tr-xl">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg pb-2 text-white h-[3rem]">Consistent
                            observation and
                            reporting </h3>
                    </div>
                    <div
                        class="bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-bl-xl rounded-br-xl p-3 lg:h-[20rem]">
                        <p class="pb-1 text-[15px]"><b>Continuous Monitoring:</b> BaaS providers proactively detect and
                            address
                            problems by
                            continuously monitoring backup procedures to make sure they function properly. </p>

                        <p class="pb-1 text-[15px]"><b>Detailed Reports:</b> Gain transparency and support for compliance
                            audits by
                            receiving regular
                            reports on the status of backups, storage utilization, and any problems that may have arisen.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="group relative bg-web-ascent-1 text-center p-3 rounded-tl-xl rounded-tr-xl">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-lg pb-2 text-white h-[3rem]">Quick Time to Value
                        </h3>
                    </div>
                    <div
                        class="bg-white shadow-[0px_0px_9px_rgba(0,0,0,0.2)] rounded-bl-xl rounded-br-xl p-3 lg:h-[20rem]">
                        <p class="pb-1 text-[15px]"><b>Fast Deployment:</b> BaaS services don't need complicated setup or
                            lengthy
                            lead times, so you
                            can begin
                            safeguarding your data right away. They may be quickly implemented.</p>

                        <p class="pb-1 text-[15px]"><b>Immediate Protection:</b> Your data is immediately safeguarded and
                            backed up
                            upon
                            implementation of
                            BaaS, giving you peace of mind and instant coverage against data loss. Advantages for the
                            Environment</p>

                        <p class="pb-1 text-[15px]"><b>Diminished Carbon Emission:</b> Businesses can use cloud-based BaaS
                            to cut
                            down on energy use
                            and
                            physical hardware requirements, making their operations more environmentally friendly.</p>
                    </div>
                </div>
            </div>
            <p class="pb-1">Pi Backup as a Service (BaaS)
                provides a thorough, safe, and affordable way to protect the vital data in your
                company, giving you peace of mind and letting you concentrate on </p>

            <div class="pt-3 pb-10">
                <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Get Started Today!</a>
            </div>
        </div>
    </section>
    {{-- benefits conts ends --}}
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
