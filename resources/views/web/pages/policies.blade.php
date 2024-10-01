@extends('web.layouts.app')

@section('web-head')
    <title>Policies | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/home/new-policies-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Policies</h1>
                        <p class="text-gray-300 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]">Read
                            all the essential details regarding our terms
                            and conditions, privacy policy, and other guidelines that regulate your utilization of our
                            services. We strive to provide you with a comprehensive understanding of your rights and
                            responsibilities while using Pi Cloud. We prioritize the security of your personal information
                            and are dedicated to safeguarding your privacy. Please take a moment to carefully review our
                            policies, and feel free to reach out to us if you have any questions or concerns.</p>
                        <div class="pt-4 space-x-3">
                            {{-- <a href="#" class="btn-primary-md">Know more</a> --}}
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                            {{-- <a href="#" class="btn-primary-md">Brochures</a> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- Intro --}}
    <section class="lg:py-12 md:py-12 sm:py-15 select-none">
        <div class="container">
            <div>
                <div>
                    {{-- Privacy Policy Intro --}}
                    <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl py-5">Privacy Policy</h2>
                    <p class="pb-5">Pi Data Centers Private Limited, its subsidiaries, and affiliated companies
                        (hereinafter
                        referred to as "Pi", "us", "we," or "our") are committed to respecting your privacy and complying
                        with
                        applicable data protection and privacy laws. You can visit https://pidatacenters.com without
                        disclosing
                        any personally identifiable information about yourself. We have provided this privacy policy
                        statement
                        ("Privacy Policy") to help you understand how we collect, use, and protect your information when you
                        visit the website or mobile application. Please take a moment to read the sections below and learn
                        how
                        we may use your personal information so that you can make informed decisions.</p>


                    <div class="flex items-center justify-center sm:pb-8">
                        <hr class="w-full border-2 border-gray-400">
                        <button
                            onclick=" $('#privacy-policy-content').slideToggle();  $('.arr-btn1').toggleClass('arr-icon1');"
                            class="font-bold rounded-full bg-blue-900 px-1 py-1 text-xl text-white arr-btn1">
                            <i data-feather="chevron-down" class="h-10 w-10 relative animate-bounce arr-icon1"></i>
                        </button>

                        <hr class="w-full border-2 border-gray-400">
                    </div>
                </div>
                {{-- Privacy Policy Intro Ends --}}

                {{-- Privacy Policy Content --}}
                <section class="lg:py-8 md:py-8 sm:py-12 shadow-[0px_0px_9px_rgba(0,0,0,0.1)] p-5 bg-[#8080801f]"
                    id="privacy-policy-content" style="display: none;">
                    <div class="container">
                        <div>
                            <p>You should read this notice in conjunction with the terms and conditions of use for this
                                website and the mobile application.</p>

                            <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-xl text-gray-700 py-3">Acceptance</h3>
                            <p>By using this website or the mobile application, you signify your agreement to the Pi's
                                Privacy Policy. If you do not agree with this Privacy Policy, please do not use this website
                                or the mobile application. Your continued use of Pi's website or mobile application
                                following the posting of changes to these Privacy Policy terms will mean you accept those
                                changes.</p>

                            <h2 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-1">My Information
                            </h2>
                            <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-xl text-gray-700 py-3">What kind of
                                information is
                                collected?</h3>
                            <h4 class="font-bold lg:text-xl md:text-xl sm:text-lg py-1">Anonymous Information</h4>
                            <p class="pb-6">Anonymous information cannot be tied directly to personally identifiable
                                information. We
                                use this information to improve our website and mobile application. This information helps
                                us focus our
                                resources on the features that are most popular with our customers. We may collect
                                information regarding
                                your IP address, browser type, domain name, and access time. This information is used for
                                our own
                                research purposes and is separate from any personally identifiable information that you may
                                submit via
                                this website or mobile application. We do not link IP addresses to any personal information.
                                In rare
                                instances, IP addresses may be used to assist in deterring and/or preventing abusive or
                                criminal
                                activity on the website and mobile app.</p>
                            <h4 class="font-bold lg:text-xl md:text-xl sm:text-lg py-1">Personally Identifiable Information
                            </h4>
                            <p class="pb-6">The following forms on https://pidatacenters.com collect Personally
                                Identifiable
                                Information:</p>

                            <h5 class="font-bold lg:text-xl md:text-md sm:text-sm">(i) Registration Form For Downloading
                                Knowledge
                                Materials</h5>
                            <p class="pb-6">Information in this form will be used to capture the basics.</p>

                            <h5 class="font-bold lg:text-xl md:text-md sm:text-sm">(ii) Contact Us Form</h5>
                            <p class="pb-6">Information provided through this form will be used solely to respond to
                                customer
                                inquiries and/or service requests.</p>

                            <h5 class="font-bold lg:text-xl md:text-md sm:text-sm">(iii) Site Feedback Form</h5>
                            <p class="pb-6">Information provided through this form will be used solely to provide
                                enhancements to
                                pidatacenters.com.</p>

                            <h5 class="font-bold lg:text-xl md:text-md sm:text-sm">(iv) Registration Form For Online
                                Purchase</h5>
                            <p class="pb-6">Information provided in this form will be used for recording purchase
                                information,
                                excluding any details about the payment.</p>
                        </div>

                        <div>
                            <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-xl text-gray-700 py-3">Who will use this
                                information?</h3>
                            <p>As a general rule, Pi will not disclose any specific personal information that you submit to
                                us about you
                                ("Personal Information") in a manner that connects you with the Personal Information, except
                                when we
                                have your explicit permission or under special circumstances, such as when we believe in
                                good faith that
                                the law requires it or under the circumstances described below.</p>
                        </div>
                        <div>
                            <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-xl text-gray-700 py-3">How can I control my
                                information?</h3>
                            <p>In case you change your mind or some Personal Information changes (such as your mailing
                                address or e-mail
                                address), we will try to provide a way to correct, update, or remove the Personal
                                Information that you
                                have provided us. Additionally, if a customer wishes to update Personal Information, email
                                us at
                                marcom@pidatacenters.com.</p>
                        </div>
                    </div>
                </section>
                {{-- Privacy Policy Content Ends --}}

                {{-- Acceptable Use Policy Intro --}}
                <div>
                    <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl py-5">Acceptable Use Policy</h2>
                    <p class="pb-5">Use of the services (“Cloud Services”) provided and/or made available by or on behalf
                        of
                        Pi Data Centers Private Limited and its affiliates (“Company” or “We” or “our”) is subject to this
                        Acceptable Use Policy (“AUP”) and this AUP describes the prohibited usage of such Cloud Services.
                        This
                        AUP is an integrate part of any applicable customer or service agreement (the “Agreement”). The
                        examples
                        and restrictions described herein are not exhaustive. We may update this AUP from time to time at
                        our
                        discretion by posting the latest version on www.pidatacenters.com (the “website”).</p>

                    <div class="flex items-center justify-center sm:pb-8">
                        <hr class="w-full border-2 border-gray-400">
                        <button
                            onclick="$('#aup-content').slideToggle();
                     $('.arr-btn2').toggleClass('arr-icon2');"
                            class="font-bold rounded-full bg-blue-900 px-1 py-1 text-xl text-white arr-btn2"><i
                                data-feather="chevron-down"
                                class="h-10 w-10 relative animate-bounce arr-icon2"></i></button>

                        <hr class="w-full border-2 border-gray-400">
                    </div>
                </div>
                {{-- Acceptable Use Policy Intro Ends --}}

                {{-- Acceptable use policy content --}}
                <section class="lg:py-8 md:py-8 sm:py-12 shadow-[0px_0px_9px_rgba(0,0,0,0.1)] p-5 bg-[#8080801f]"
                    id="aup-content" style="display: none;">
                    <div class="container">
                        <div>
                            <h3 class="font-bold lg:text-xl md:text-xl sm:text-lg text-web-ascent-1 py-4">By using the
                                Cloud
                                Services,
                                the customer, user, or client (as applicable) agrees not to, and not to allow third
                                parties
                                to access or
                                use
                                the Cloud Services to:</h3>

                            <div>
                                <ul class="list-disc px-4">
                                    <li class="py-2">Violate any applicable local, national or international laws,
                                        regulations and
                                        rules.</li>
                                    <li class="py-2">Violate, or encourage the violation of, the legal rights of
                                        others,
                                        including but
                                        not
                                        limited to privacy
                                        or intellectual property rights.</li>
                                    <li class="py-2">Use the Cloud Services in a manner that violates applicable law
                                        or
                                        regulation,
                                        infringes
                                        on the rights
                                        of any person or entity, or violates any agreement with the Company.</li>
                                    <li class="py-2">License, sublicense, access, use, sell, resell, transfer, assign,
                                        distribute, or
                                        otherwise commercially
                                        exploit or make the Cloud Services available to any third party.</li>
                                    <li class="py-2">Modify, decompile, reverse engineer or copy the Cloud Services,
                                        or
                                        any of their
                                        components.</li>
                                    <li class="py-2">Access or use the Cloud Services to build or support any products
                                        or
                                        services
                                        competitive
                                        with the Cloud
                                        Services.</li>
                                    <li class="py-2">Conduct, promote, facilitate or allow illegal, unlawful,
                                        infringing,
                                        harmful or
                                        fraudulent activities
                                        including but not limited to any activity that promotes child sexual
                                        exploitation or
                                        any abuse
                                        for the
                                        purpose of harming or attempting to harm minors in any way, pornography, illegal
                                        gambling,
                                        network
                                        attack, phishing, or damage, surreptitiously intercept any system, program or
                                        data.
                                    </li>
                                    <li class="py-2">Transmit, publish, offer, upload, download, use or re-use,
                                        disseminate or
                                        distribute any
                                        unlawful,
                                        infringing, offensive, harmful contents or materials which are likely to be
                                        understood as a
                                        direct or
                                        indirect encouragement, threatening, inciting, promoting or other inducement to
                                        the
                                        commission,
                                        preparation or instigation of acts of violence, terrorism or other serious harm.
                                    </li>
                                    <li class="py-2">Transmit any corrupted files, hoaxes, data, send or upload any
                                        material that
                                        contains,without limitation
                                        to, viruses, worms, Trojan horses, keystroke loggers, spyware, or other items of
                                        a
                                        destructive
                                        or
                                        deceptive nature or any other harmful programs or similar computer code designed
                                        to
                                        adversely
                                        affect the
                                        operation or security of any computer software or hardware or sites or networks;
                                    </li>
                                    <li class="py-2">Distribute, publish, transmit, or facilitate the sending of
                                        unsolicited mass
                                        email or
                                        other messages,
                                        promotions, advertising or solicitations (“spam”) or send a massive amount of
                                        email
                                        to a
                                        specific
                                        person, site or a system in order to flood their server or in any way flood
                                        UseNet
                                        newsgroups or
                                        send
                                        junk e-mail or spam anyone who doesn't want to receive it and/or which is not
                                        permitted by
                                        applicable
                                        local, national or international laws, regulations and rules.</li>
                                    <li class="py-2">Access to any portion of the Cloud Services, accounts, or systems
                                        without
                                        authorization,
                                        or attempt to
                                        do so.</li>
                                    <li class="py-2">Violate or adversely impact the security or integrity of the
                                        Cloud
                                        Services,
                                        hardware,
                                        software,
                                        systems, sites, or networks of the Company.</li>
                                    <li class="py-2">Violate the security, integrity, or availability of any user,
                                        network, computer
                                        or
                                        communications
                                        system, software application, or network or computing device.</li>
                                </ul>
                            </div>
                            <p class="pb-6">Any violation or suspected violation of the terms set forth in this AUP
                                will
                                result in an
                                immediate and
                                indefinite suspension of Cloud Services solely at the discretion of the Company, without
                                any
                                liability.
                            </p>
                        </div>
                    </div>
                </section>
                {{-- Acceptable Use Policy Content Ends --}}

                {{-- Terms and Conditions Intro --}}
                <div>
                    <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl py-5">Terms And Conditions</h2>
                    <p class="pb-5">The domain name www.pidatacenters.com, an internet based portal (“Website” or
                        “Platform”),
                        is owned and operated by Pi Data Centers Private Limited and/or its subsidiaries, affiliates and
                        authorized service provider (hereinafter referred to as “Pi” or “We” or “Our” or “Us” or “Company”).
                        Your access or use of this Platform, transaction on the Platform, its content and use/access of
                        services
                        offered by Pi, are governed by the following terms and conditions (hereinafter referred to as the
                        “Terms
                        & Conditions”), including the applicable policies which are incorporated herein by way of reference.
                        These Terms & Conditions constitutes a legal and binding contract between you (hereinafter referred
                        to
                        as “Customer” or “You” or “Your” or the “User”) on one part and Pi on the other part. Pi and
                        Customer
                        are hereinafter individually referred as “Party” and collectively referred to as “Parties”.</p>

                    <p class="pb-5">By accessing, browsing, engaging in any transactions on the Platform, using this
                        Platform
                        or utilizing any services provided by, Pi, and its affiliates, You indicate Your agreement to accept
                        and
                        abide by these Terms & Conditions. Furthermore, by either implicitly or explicitly accepting these
                        Terms
                        & Conditions, You also acknowledge and consent to adhere to Our policies, including the Privacy
                        Policy
                        and the Acceptance Use Policy (collectively referred to as “Policies”) which regulates Your usage of
                        the
                        Platform and the services and helps You understand Our practices. Additionally, You are subject to
                        other
                        rules, guidelines, policies, terms, and conditions as required by applicable laws in India and other
                        jurisdictions for accessing, browsing, transacting on the Platform, or utilizing any services. These
                        rules, guidelines, policies, terms, and conditions are considered to be an integral part of these
                        Terms
                        & Conditions and are automatically incorporated into them.</p>

                    <div class="flex items-center justify-center sm:pb-8">
                        <hr class="w-full border-2 border-gray-400">
                        <button
                            onclick="$('#terms-conditions-content').slideToggle();
                         $('.arr-btn3').toggleClass('arr-icon3');"class="font-bold rounded-full bg-blue-900 px-1 py-1 text-xl text-white arr-btn3"><i
                                data-feather="chevron-down"
                                class="h-10 w-10 relative animate-bounce arr-icon3"></i></button>

                        <hr class="w-full border-2 border-gray-400">
                    </div>
                </div>
                {{-- Terms and Conditions Intro Ends --}}

                {{-- Terms and Conditions content --}}
                <section class="lg:py-8 md:py-8 sm:py-12 shadow-[0px_0px_9px_rgba(0,0,0,0.1)] p-5 bg-[#8080801f]"
                    id="terms-conditions-content" style="display: none;">
                    <div class="container">
                        <div>
                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Copyright
                            </h3>
                            <p class="pb-5">All content included on this Website, its pages and all other screens
                                displaying the
                                content,
                                such as text, graphics, icons, logos, images, language, audio clips, videos, digital
                                downloads or any
                                other
                                data or content, including relevant software, is the property of Pi or its suppliers and
                                is
                                protected by
                                Indian copyright laws, protected by India copyright laws. All
                                hardware / software used on this Website is the property of Pi or its suppliers and
                                protected by India
                                copyright laws.</p>
                            <p class="pb-5">By using this site, You signify Your agreement to Pi’s Terms & Conditions.
                                Your continued
                                use
                                of Pi and/or its affiliates’ sites following the posting of changes to these terms will
                                mean
                                You accept
                                those changes.</p>

                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Trademarks
                            </h3>
                            <p class="pb-5">Pi, the Pi’s logo, and other marks indicated on Our Website are trademarks
                                of
                                Pi or its
                                affiliates. Other Pi’s graphics, logos, page headers, icons, scripts, and service names
                                are
                                trademarks
                                or
                                trade dress of Pi or its affiliates. Pi and its affiliates' trademarks and trade dress
                                may
                                not be used
                                in
                                connection with any product or service that is not Pi or its affiliates' as applicable,
                                in
                                any manner
                                that
                                is likely to cause confusion among users, or in any manner that disparages or discredits
                                Pi
                                or its
                                affiliates. All other trademarks not owned by Pi or its affiliates that appear on this
                                site
                                are the
                                property
                                of their respective owners, who may or may not be affiliated with, connected to, or
                                sponsored by Pi or
                                its
                                subsidiary or affiliates.</p>
                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Use of
                                Information and
                                Materials
                            </h3>
                            <p class="pb-5">Any links to other sites via the Pi’s Platform, over which Pi has no
                                control,
                                are subject
                                to
                                the terms of those links/sites and Pi's Policies. Pi is not responsible for the
                                availability
                                of such
                                external sites or resources, and it does not endorse or accept responsibility for any
                                content,
                                advertising,
                                products, or other materials on or available from such sites or resources. The
                                information
                                and materials
                                contained in these pages ‑ and the terms, conditions, and descriptions that appear ‑ are
                                subject to
                                change.
                                Not all products and services are available in all geographic areas. Your eligibility
                                for
                                particular
                                products and services is subject to Pi’s final determination and acceptance.</p>

                            <p class="pb-5">The use/ access of the Platform are only available to natural persons,
                                other
                                than those
                                who
                                are ‘incompetent to contract’ under the applicable law of the relevant jurisdictions
                                that
                                is, persons
                                including minors, un-discharged insolvents etc. are not eligible to use/ access the
                                Platform. By
                                accessing
                                or using the Platform, You accept the terms of these Terms & Conditions and represent
                                and
                                warrant to Pi
                                that
                                You are ‘competent to contract’ under the contract Act and have the right, authority and
                                capacity to use
                                the
                                Platform and agree to and abide by these Terms & Conditions.</p>

                            <p class="pb-5">The Website uses temporary cookies to store certain data (that is not
                                sensitive personal
                                data
                                or information) that is used by Pi for the technical administration of the Website,
                                research
                                and
                                development
                                and for User administration.</p>

                            <p class="pb-5">The cookies support the integrity of Our registration process, retain
                                Your
                                preferences and
                                account settings, and help evaluate and compile aggregated statistics about User
                                activity.
                                We will begin
                                collecting information about You or from activity on devices You use as soon as You use
                                the
                                Website
                                and/or
                                Our services. By using Our services, You permit Us to collect or receive and use Your
                                information from
                                activity on devices you use in accordance with this Terms & Conditions.</p>

                            <p class="pb-5">Certain cookies We use last only for the duration of Your web or
                                application
                                session and
                                expire when You close Your browser or exit the application. Other cookies are used to
                                remember You when
                                You
                                return to use the services and, as such, will last longer.</p>

                            <h4 class="font-bold lg:text-2xl md:text-2xl sm:text-xl text-web-ascent-1 py-5">We may use
                                cookies to:</h4>

                            <div>
                                <ul class="list-disc px-4">
                                    <li class="py-2">Remember that You have visited us or used the services before.
                                        This
                                        allows Us to
                                        identify
                                        the number of
                                        unique visitors We receive, so that We can provide enough capacity to
                                        accommodate
                                        all of Our
                                        users.</li>
                                    <li class="py-2">Customize elements of the promotional layout and/or content of
                                        Our
                                        services.
                                    </li>
                                    <li class="py-2">Collect data about the way You interact with Our services (e.g.,
                                        when You use
                                        certain
                                        features).</li>
                                    <li class="py-2">Collect data to assess and improve Our advertising campaigns,
                                        including sending
                                        information to Our
                                        business partners.</li>
                                    <li class="py-2">Allow Our business partners (including third parties) to use
                                        these
                                        tracking
                                        technologies
                                        to track Your
                                        behavior on Our behalf on Our website/platform (including when You use multiple
                                        devices) and on
                                        partner
                                        websites.</li>
                                    <li class="py-2">Enable third parties to collect data about the way You interact
                                        across sites
                                        outside of
                                        Our services.
                                    </li>
                                    <li class="py-2">Collect anonymous statistical information about how You use the
                                        services
                                        (including the
                                        length of Your
                                        web or application session) and the location from which You access the services,
                                        so
                                        that We can
                                        improve
                                        the services and learn which elements and functions of the services are most
                                        popular
                                        with Our
                                        users.
                                    </li>
                                </ul>
                            </div>
                            <p class="pb-5">In the course of optimizing services to You, Pi may allow authorized
                                third
                                parties to
                                place or
                                recognize a unique cookie on the Your browser.</p>
                            <p class="pb-5">Below are the list of third parties that may set cookies when You use
                                Pi’s
                                services. You
                                can
                                learn more about how these third parties use information collected through cookies by
                                reviewing the
                                privacy
                                policies on their sites.</p>

                            <div
                                class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 lg:text-center md:text-center sm:text-left py-5">
                                <div class="py-3 font-bold text-xl"><a
                                        class="open-link cursor-pointer underline underline-offset-4">Google
                                        Analytics</a></div>
                                <div class="py-3 font-bold text-xl"><a
                                        class="open-link cursor-pointer underline underline-offset-4">Google Business
                                        Profile</a></div>
                                <div class="py-3 font-bold text-xl"><a
                                        class="open-link cursor-pointer underline underline-offset-4">Google Ads</a>
                                </div>
                                <div class="py-3 font-bold text-xl"><a
                                        class="open-link-2 cursor-pointer underline underline-offset-4">Chatbot</a>
                                </div>
                                <div class="py-3 font-bold text-xl"><a
                                        class="open-link-3 cursor-pointer underline underline-offset-4">Microsoft
                                        Clarity</a></div>
                                <div class="py-3 font-bold text-xl"><a
                                        class="open-link-4 cursor-pointer underline underline-offset-4">CC
                                        Avenue</a>
                                </div>
                            </div>

                            <p class="pb-5">We also embed features from third parties on Our Website(s), and those
                                third
                                parties may
                                set
                                cookies if You engage with those features.</p>
                            <p class="pb-5">Pi does not store personally identifiable information in the cookies.
                                Without
                                prejudice
                                to
                                the
                                foregoing You agree that Pi shall not be held liable or responsible for 'phishing
                                attacks'
                                on You. You
                                may
                                accept or decline the cookies when You access Pi’s Website. It is the User’s
                                responsibility
                                to set
                                his/her
                                browser to alert him/her to accept or to reject cookies.</p>
                            <p class="pb-5">Pi, at its sole discretion, reserves the right to permanently or
                                temporarily
                                suspend
                                Users,
                                to
                                bar their use and access of the Website, at any time while Pi investigates complaints or
                                alleged
                                violations
                                of these Terms & Conditions or any services, or for any other reason.</p>

                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">User
                                Content
                            </h3>
                            <div>
                                <ul class="list-decimal px-4">
                                    <li class="py-2">Any content You upload, transmit, or store using Our services is
                                        Your
                                        responsibility. Pi
                                        does not claim ownership of Your content. Customer shall ensure that it has
                                        taken
                                        all necessary
                                        approvals, licenses from concerned authority(ies) within or outside the
                                        territory
                                        for availing
                                        the
                                        services to be provided by Pi. The Customer shall be liable for any default
                                        committed by it or
                                        by its
                                        authorized person and the Customer shall be solely responsible for any claims or
                                        liabilities
                                        that may
                                        arise on account of any such default.</li>
                                    <li class="py-2">You grant Pi the necessary permissions and consent to access,
                                        collect, use,
                                        host, store,
                                        and transmit Your voluntarily provided content, User details or other
                                        information
                                        through Our
                                        Website,
                                        as required to provide Our services or to complete a transaction on this
                                        Website.
                                    </li>
                                    <li class="py-2">We will exercise no control whatsoever over the content of the
                                        information
                                        passing
                                        through the network or on the Your websites.</li>
                                    <li class="py-2"> We do not provide any warranties or guarantees, whether
                                        expressed
                                        or implied,
                                        for the
                                        services We offer. Furthermore, We disclaim any warranty of merchantability or
                                        fitness for a
                                        particular
                                        purpose. We shall not be held responsible for any damages that may be suffered
                                        by
                                        You, including
                                        data
                                        loss resulting from delays, non-deliveries, service interruptions, gaps caused
                                        by
                                        any reason, or
                                        errors
                                        or omissions made by You.</li>
                                    <li class="py-2">Pi bears no responsibility for any loss, erasure, or corruption
                                        of
                                        Your data or
                                        files,
                                        unless otherwise agreed upon.</li>
                                    <li class="py-2">The use of any information obtained through the Pi’s services is
                                        entirely at
                                        Your own
                                        risk, and We explicitly disclaim any responsibility for the accuracy or quality
                                        of
                                        information
                                        obtained
                                        via Our services.</li>
                                </ul>
                            </div>

                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">
                                Restrictions
                            </h3>
                            <p class="pb-5">You are specifically restricted from publishing any Website content in
                                any
                                form on media,
                                selling sub-licensing and/or otherwise commercializing, publicly performing and/or
                                showing,
                                using in any
                                way
                                that is or may be damaging to this Website in any way that impacts user access to and is
                                contrary to
                                applicable laws and regulations, or in any way may cause harm and to any person or
                                business
                                entity and
                                engage in any data mining, data harvesting, data extracting or any other similar
                                activity to
                                achieve any
                                advertising or marketing results without legal authorization from Pi. Certain areas of
                                this
                                Website are
                                restricted from being accessed by You and Pi may further restrict access by You to any
                                areas, at any
                                time,
                                in its absolute discretion.</p>

                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Payment
                                Terms
                            </h3>
                            <h4 class="font-bold lg:text-2xl md:text-2xl sm:text-xl text-gray-700 py-1">Unless
                                otherwise
                                agreed, the
                                below payment terms would be applicable for all purchases from this Platform:</h4>
                            <div style="overflow-x: auto; py-3">
                                <table id="table" class="table-fixed border-2 border-collapse border-black">
                                    <tr class="text-center bg-slate-200 uppercase">
                                        <th class="border-2 border-black p-3">Payment Model </th>
                                        <th class="border-2 border-black p-3">Payment Terms </th>
                                        <th class="border-2 border-black p-3">Cloud Products </th>
                                        <th class="border-2 border-black p-3">Non-Cloud Products </th>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">Monthly
                                            (Pay per use) </th>
                                        <td class="border-2 border-black p-3">On Demand </td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;<br>
                                            (Applicable only for power billing model 'Power on Actuals') </td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">Monthly
                                            (Fixed)
                                        </th>
                                        <td class="border-2 border-black p-3">Monthly payment in advance </td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">1 year
                                            (Monthly Advance) </th>
                                        <td class="border-2 border-black p-3">One Year Contract; Monthly payment in
                                            advance,
                                            subsequent
                                            invoices will be
                                            generated on
                                            monthly
                                            advance basis thereafter </td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">1 year
                                            (Quarterly Advance) </th>
                                        <td class="border-2 border-black p-3">One Year Contract; Quarterly payment in
                                            advance,
                                            subsequent
                                            invoices will be
                                            generated on
                                            quarterly advance basis thereafter </td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">1 year
                                            (50% Advance) </th>
                                        <td class="border-2 border-black p-3">One Year Contract; Half-yearly payment in
                                            advance,
                                            subsequent
                                            invoices will be
                                            generated on
                                            half
                                            yearly advance basis thereafter </td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">1 year
                                            (100% Advance) </th>
                                        <td class="border-2 border-black p-3">One Year Contract; 100% payment for the
                                            contract
                                            period to
                                            be
                                            paid in advance
                                            and in full
                                        </td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">2 years
                                            (Monthly Advance) </th>
                                        <td class="border-2 border-black p-3">Two Year Contract; Monthly payment in
                                            advance,
                                            subsequent
                                            invoices will be
                                            generated on
                                            monthly
                                            advance basis thereafter </td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">2 years
                                            (Quarterly Advance) </th>
                                        <td class="border-2 border-black p-3">Two Years Contract; Quarterly payment in
                                            advance,
                                            subsequent
                                            invoices will be
                                            generated on
                                            quarterly advance basis thereafte</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">2 years
                                            (Half Yearly Advance) </th>
                                        <td class="border-2 border-black p-3">Two Years Contract; Half-yearly payment
                                            in
                                            advance,
                                            subsequent
                                            invoices will be
                                            generated on
                                            half yearly advance basis thereafter </td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">2 years
                                            (Annual Advance) </th>
                                        <td class="border-2 border-black p-3">Two Years Contract; Annual payment to be
                                            paid
                                            in full
                                            in
                                            advance, subsequent
                                            invoice will be
                                            generated on yearly advance basis </td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">3 years
                                            (Monthly Advance) </th>
                                        <td class="border-2 border-black p-3">Three Years Contract; Monthly payment in
                                            advance,
                                            subsequent
                                            invoices will be
                                            generated on
                                            monthly advance basis thereafter </td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">3 years
                                            (Quarterly Advance) </th>
                                        <td class="border-2 border-black p-3">Three Years Contract; Quarterly payment
                                            in
                                            advance,
                                            subsequent
                                            invoices will be
                                            generated on
                                            quarterly advance basis thereafter</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">3 years
                                            (Half Yearly Advance) </th>
                                        <td class="border-2 border-black p-3">Three Years Contract; Half-yearly payment
                                            in
                                            advance,
                                            subsequent
                                            invoices will
                                            be generated
                                            on
                                            half yearly advance basis thereafter </td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="border-2 border-black p-3">3 years
                                            (Annual Advance) </th>
                                        <td class="border-2 border-black p-3">Three Years Contract; Annual payment to
                                            be
                                            paid
                                            in
                                            full in
                                            advance, subsequent
                                            invoices will
                                            be
                                            generated on yearly advance basis thereafte</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                        <td class="border-2 border-black p-3">&#10004;&#46;</td>
                                    </tr>
                                </table>
                            </div>
                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Taxes</h3>
                            <p class="pb-5">All the products, services and other infrastructure purchased by Customer
                                or
                                any other
                                recipient shall be exclusive of any taxes. All products and/or services shall attract
                                applicable taxes,
                                with
                                respect to Indian Tax regulations.</p>

                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">
                                Cancellation &
                                Refund
                                Policy
                                (Cloud Products)</h3>
                            <p class="pb-5">Customers may cancel the order at any time by emailing on
                                support@pidatacenters.com,
                                along
                                with their order number. This is exclusively applicable for cloud products. The
                                cancellation
                                would be
                                effective in 24 hour working hours from the time of receipt of valid cancellation
                                request.
                                Unless
                                otherwise
                                agreed in written between the Customer and Pi, total amount shall be refunded, if the
                                cancellation
                                request
                                is placed within 24 hours from order placement. 50% of the paid amount shall be
                                refunded, if
                                the
                                cancellation request is placed after 24 hours but within 48 hours from order placement.
                                Cancellation
                                would
                                not warrant any refund if done in more than 48 hours of order placement or post
                                deployment
                                of the
                                in-scope
                                infrastructure, whichever is earlier. Any cancellation of order placement would be
                                eligible
                                for interest
                                free refund within 7 working days from the date of valid cancellation request by the
                                Customer. Pi holds
                                the
                                discretion to cancel the order without any notice, and/or de-provision the in-scope
                                product(s) or
                                services,
                                in the scenario of non-payment by the Customer within a maximum period of 48 hours of
                                new
                                order
                                placement
                                and/or renewal, and/or if the purpose is found to be malicious and/or illegal as per the
                                law
                                of the
                                land.
                                For active orders/services, the Customer is required to make payments for monthly,
                                quarterly, or annual
                                charges as per the opted plan, within five (5) calendar days from the date of the
                                invoice.
                                Failure to do
                                so
                                may result in temporary suspension of the specified product(s) or services. However, if
                                the
                                customer
                                continues to delay payments for any reason beyond ten (10) calendar days from the date
                                of
                                temporary
                                suspension, Pi reserves the right to take the following actions without further notice:
                                (i)
                                Release all
                                resources allocated to the customer; (ii) Delete all content and data owned by the
                                customer
                                and stored
                                on
                                Pi's storage/servers; and (iii) Reallocate these resources to other Pi customers.</p>

                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Contract
                                Cancellation
                                Policy
                                (Non-Cloud Products)</h3>
                            <p class="pb-5">Minimum contract period for any services / products, other than cloud
                                products shall be
                                of 1
                                year, from the date of order placement. In case of enterprise servers, dedicated
                                physical
                                servers,
                                high-end
                                servers, network devices, firewalls, switches and/or any other infrastructure that needs
                                bare-metal
                                machines
                                to be procured & provisioned, any contract being cancelled by the Customer, then the
                                Customer would be
                                liable to remit value equivalent to the total contract period or the remaining contract
                                value, whichever
                                is
                                less, in favour of Pi.</p>
                            <p class="pb-5">Pi holds the discretion to cancel the order without any notice, and/or
                                de-provision the
                                in-scope product(s) or services, in the scenario of non-payment by the Customer within a
                                maximum period
                                of
                                five (5) business days of new order placement and/or renewal, and/or if the purpose is
                                found
                                to be
                                malicious
                                and/or illegal as per the law of the land. For active orders/services, the Customers are
                                required to
                                make
                                payments for monthly, quarterly, or annual charges as per the opted plan, within ten
                                (10)
                                business days
                                from
                                the date of the invoice. Failure to do so may result in temporary suspension of the
                                specified product(s)
                                or
                                services i.e., the power and the bandwidth to the Customer equipment’s shall be
                                disconnected. However,
                                if
                                the Customer continues to delay the payments for any reason beyond ten (10) calendar
                                days
                                from the date
                                of
                                temporary suspension of the in-scope product(s) or services, Pi shall have the right to
                                restrict the
                                access
                                to the Customer allotted rack space and the Customer hosted equipment’s at Pi’s
                                datacenter,
                                and all
                                other
                                resources allotted to the Customer shall be released, and those released resources shall
                                be
                                allocated to
                                other Pi customers, without any further notice. The Customer shall not be permitted to
                                remove any of
                                Customer’s equipment’s from the Customer allotted space at Pi’s datacenter premises at
                                any
                                time when
                                Customer is delinquent in meeting any of its payment obligations, or is otherwise in
                                breach
                                of any other
                                material term mentioned in the Terms & Conditions. Full payment shall be a condition of
                                Customer
                                receiving
                                access to the Customer space and the datacenter premises or removal of Customer’s
                                equipment.
                            </p>
                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Warranties
                            </h3>
                            <p class="pb-5">By using Pi’s services You agree to the following disclaimers. The
                                information and
                                materials
                                contained in this site, including text, graphics, links or other items ‑ are provided
                                “as
                                is,” “as
                                available”. You acknowledge and agree that the services are provided "as is" and "as
                                available," and
                                that
                                Your use of the services is at Your sole risk. To the fullest extent permitted by
                                applicable
                                law, Pi,
                                its
                                affiliates, and their respective officers, directors, employees, agents, affiliates,
                                branches,
                                subsidiaries,
                                and licensors, disclaim all warranties, whether express or implied, in connection with
                                the
                                services, and
                                Your use of them. To the fullest extent permitted by applicable law, Pi make no
                                warranties
                                or
                                representations regarding the services being provided with due skill, care, and
                                diligence or
                                the
                                accuracy
                                and completeness of the services content. Pi does not warrant the accuracy, adequacy or
                                completeness of
                                the
                                information and materials and expressly disclaims liability for errors, mistakes,
                                inaccuracies in
                                content or
                                omissions therein. No warranties of any kind, implied, express or statutory, including
                                but
                                not limited
                                to
                                the warranties of non-infringement of third party rights, title, merchantability,
                                fitness
                                for a
                                particular
                                purpose and freedom from computer virus, are given in conjunction with the information
                                and
                                materials. Pi
                                assumes no responsibility for any of the following: (a) personal injury or property
                                damage
                                resulting
                                from
                                Your access to and use of the services; (b) unauthorized access to or use of Our servers
                                and
                                any
                                personal
                                information stored therein; (c) interruption or cessation of transmission to or from the
                                services; (d)
                                bugs,
                                viruses, Trojan horses, or similar harmful elements transmitted to or through the
                                services
                                by third
                                parties;
                                (e) loss of Your data or content from the services; (f) errors or omissions in any
                                content
                                or any loss
                                or
                                damage incurred from using any content posted, emailed, transmitted, or made available
                                through the
                                services;
                                (g) the disclosure of information pursuant to these Terms & Conditions and Our Privacy
                                Policy; (h) Your
                                failure to keep Your password or account details secure and confidential; (i) loss or
                                damage
                                resulting
                                from
                                causes beyond Pi’s reasonable control.</p>
                            <p class="pb-5">Any material downloaded or obtained through the services is at Your own
                                discretion and
                                risk,
                                and You are solely responsible for any damage to Your computer system, other devices, or
                                data loss
                                resulting
                                from such downloads. Pi will not be involved in or responsible for monitoring
                                transactions
                                between You
                                and
                                third-party providers of products or services. You are solely responsible for Your
                                communications and
                                interactions with other users of the services and individuals You communicate with or
                                interact with as a
                                result of using the services. Pi provides no representations or warranties express or
                                implied, with
                                regard
                                to third party components, and Pi will not be liable for any failure of any Third Party
                                Services or
                                Third
                                Party Products to function as expected or intended. “Third Party Products” or “Third
                                Party
                                Services”
                                means
                                the equipment, software, products or services procured from a third party vendor which
                                Pi,
                                in turn,
                                provides
                                to Customer as part of, or in combination with, Pi own products and services which are
                                part
                                of the Pi’s
                                services. In connection with technical support, Pi makes no representation or warranty
                                that
                                Pi will be
                                able
                                to find the cause of, or resolve, the problem for which Customer contacts for technical
                                support. Pi is
                                not
                                responsible for providing technical support, or any other support (including customer
                                service, billing
                                support, and sales support), to Customer’s resellers, or Customer end users.</p>
                            <p class="pb-5">No advice or information obtained from Pi or through the services,
                                whether
                                oral or
                                written,
                                creates any warranty not expressly stated in these Terms & Conditions. Unless You have
                                received express
                                written authorization from Pi, You agree not to use any trademark, service mark, trade
                                name,
                                or logo of
                                any
                                company or organization in a manner that may cause confusion about the owner or
                                authorized
                                user of such
                                marks, names, or logos.</p>
                            <p class="pb-5">Pi’s sole obligation and Your sole and exclusive remedy in the event of
                                interruption to
                                the
                                services or loss of use and/or access to Pi’s services, shall be to use all reasonable
                                endeavors to
                                restore
                                the services and/or access to services as soon as reasonably possible.</p>
                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Exclusion
                                of
                                Liability
                            </h3>
                            <p class="pb-5">In no event shall Pi be liable to You for any damages, including without
                                limitation
                                direct or
                                indirect, special, incidental, punitive, exemplary, or consequential damages however
                                caused
                                and under
                                any
                                theory of liability, loss of profit (whether incurred directly or indirectly), loss of
                                goodwill or
                                business
                                reputation, loss of data, cost of procuring substitute goods or services, or other
                                intangible losses or
                                expenses arising in connection with this Website, services or use thereof or inability
                                to
                                use by any
                                Customer, or reliance on the contents of this Website, or in connection with any failure
                                of
                                performance,
                                error, omission, interruption, defect, delay or failure in operation or transmission,
                                computer virus or
                                line
                                or system failure, even if Pi, its representatives, are advised of the possibility of
                                such
                                damages,
                                losses
                                or expense, hyperlinks to other internet resources are at Your own risk; the content,
                                accuracy, opinions
                                expressed, and other links provided by these resources are not investigated, verified,
                                monitored, or
                                endorsed by Pi. This limitation of liability applies whether the alleged liability is
                                based
                                on contract,
                                tort, negligence, strict liability, or any other basis, even if Pi has been advised of
                                the
                                possibility
                                of
                                such damage. This limitation of liability will apply to the fullest extent permitted by
                                law.
                            </p>
                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Submission
                            </h3>
                            <p class="pb-5">All information submitted to Pi via this Platform shall be deemed and
                                remain
                                the property
                                of
                                Pi who shall be free to use, for any purpose, any ideas, concepts, know-how or
                                techniques
                                contained in
                                information a visitor to this site provides Pi through this site. Pi shall not be
                                subject to
                                any
                                obligations
                                of confidentiality or privacy regarding submitted information except as agreed by the Pi
                                or
                                as otherwise
                                specifically agreed or required by law. The content on the Website, including
                                information,
                                text,
                                graphics,
                                images, logos, button icons, software code, design, and the collection, arrangement, and
                                assembly of
                                content, solely contains content provided by Pi. This content is the property of Pi and
                                is
                                protected
                                under
                                copyright, trademark, and other applicable laws. You shall not modify the content or
                                reproduce, display,
                                publicly perform, distribute, or otherwise use the content in any way for any public or
                                commercial
                                purpose
                                or for personal gain.</p>
                            <p class="pb-5">These Terms & Conditions constitute an electronic record in terms of the
                                Information
                                Technology Act, 2000, and rules framed thereunder, as applicable and amended from time
                                to
                                time. This
                                electronic record is generated by a computer system and does not require any physical or
                                digital
                                signatures.
                            </p>
                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Variation
                            </h3>
                            <p class="pb-5">Please be aware that Pi reserves the right to update or amend these Terms
                                &
                                Conditions
                                and
                                any referenced policies without prior notice to the User. Therefore, it is advisable to
                                periodically
                                review
                                this page or the provided link to ensure You have the most up-to-date version of the
                                Terms &
                                Conditions
                                (the
                                "Revised Version"). The Revised Version becomes effective when it is posted but does not
                                apply
                                retroactively. Your continued use of the services following the posting of a Revised
                                Version
                                signifies
                                Your
                                acceptance of that Revised Version. Any dispute that arose prior to the changes will be
                                governed by the
                                terms that were in place at the time the dispute arose.</p>
                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Force
                                Majeure
                            </h3>
                            <p class="pb-5">Pi shall not be liable for any failure to perform any of its obligations
                                under this Terms
                                &
                                Conditions or any agreement or order placed by the Customer if the performance is
                                prevented,
                                hindered or
                                delayed by a Force Majeure Event (defined below) and in such case its obligations shall
                                be
                                suspended for
                                so
                                long as the Force Majeure Event continues. “Force Majeure Event” means any event due to
                                any
                                cause beyond
                                the
                                reasonable control of Pi, including, without limitation to natural disasters and other
                                “acts
                                of God”,
                                floods, fire, earthquakes, and other destruction, sabotage, terrorism, war, hostilities,
                                or
                                war like
                                operations (whether a state of war be declared or not), invasion, act of foreign enemy,
                                and
                                civil war,
                                explosion, insurrection, embargo pandemic, quarantine, epidemics and other acts of any
                                governmental
                                body,
                                acts of government, including any changes in law or regulations, government restrictions
                                or
                                strikes and
                                other labour disturbances, industrial dispute, energy crises, shortage restriction of
                                power
                                supply by
                                the
                                government or other actions taken by labour organizations or acts or omissions of third
                                parties or
                                delays in
                                transportation or any other causes beyond the reasonable control of Pi.</p>
                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">Governing
                                Law
                                &
                                Jurisdiction
                            </h3>
                            <p class="pb-5">By accessing and using this Website and obtaining the facilities,
                                products or
                                services
                                offered through this Website, You agree that the laws of India shall govern such access
                                and
                                the
                                provision of
                                such facilities, products and services and You agree that in the event of any disputes,
                                differences,
                                legal
                                action, claims or proceedings related to or arising out of this Terms & Conditions, the
                                services or in
                                any
                                way relating to any term, condition or provision herein mentioned or in the construction
                                or
                                interpretation
                                of any of the clauses, the Parties shall first endeavor to settle such disputes,
                                differences
                                or claims
                                by
                                friendly consultation failing which the same shall be referred to the arbitration before
                                a
                                sole
                                arbitrator
                                appointed jointly by both the Parties. The arbitration will be in India at Hyderabad and
                                the
                                arbitration
                                will be subject to and be governed by the provisions of the Arbitration and Conciliation
                                Act
                                1996 or any
                                statutory amendment or re-enactment thereof, for the time being in force. The decision
                                of
                                such
                                arbitration
                                shall be binding and conclusive upon the Parties and may be enforced in any court of
                                competent
                                jurisdiction.
                                The Parties to the arbitration shall equally share the costs and expenses of any such
                                arbitration. All
                                arbitration proceedings shall be conducted in English. Nothing in this paragraph shall
                                prevent the
                                Parties
                                from seeking injunctive relief from a Court of Law. The Parties herein agree to submit
                                to
                                the exclusive
                                jurisdiction of courts in Hyderabad alone. In the event of the arbitrator so appointed
                                dies
                                or unable to
                                proceed with the arbitration proceeding for any reason whatsoever, then Parties shall
                                appoint another
                                arbitrator in his place, who shall proceed with the arbitration proceeding from the
                                stage at
                                which it
                                was
                                left by his/her predecessor.</p>

                            <h3 class="font-bold lg:text-4xl md:text-4xl sm:text-3xl text-web-ascent-1 py-3">
                                Miscellaneous
                            </h3>
                            <div>
                                <ul class="list-decimal px-4">
                                    <li class="py-2">Without the prior written consent of Pi, the Customer agrees not
                                        to
                                        issue or
                                        release any
                                        articles, advertising, publicity or other material relating to any of Pi’s
                                        infrastructure or
                                        mentioning
                                        or implying the name of Pi, except as may be required by law and then only after
                                        providing Pi
                                        with an
                                        opportunity to review and comment thereon.</li>
                                    <li class="py-2">This Terms & Conditions shall remain in effect until it is
                                        terminated by Pi.
                                        Customer
                                        will use the infrastructure only for the purpose of their businesses in good
                                        faith,
                                        bound by
                                        law.</li>
                                    <li class="py-2"> Pi does not provide any license or conveyance of rights under
                                        any
                                        patent,
                                        copyright,
                                        trade secret, trademark or any other intellectual property rights through these
                                        Terms &
                                        Conditions. The
                                        Terms & Conditions only grants limited rights necessary for accessing and
                                        utilizing
                                        the services
                                        as
                                        specified in the respective service order accepted by Pi, contingent upon the
                                        Customer's payment
                                        to Pi
                                        for accessing or using said services.</li>
                                    <li class="py-2"> If any provision of these Terms & Conditions is deemed invalid,
                                        unlawful, void
                                        or for
                                        any other reason unenforceable, then that provision shall be deemed severable
                                        from
                                        these Terms &
                                        Conditions and shall not affect the validity and enforceability of any of the
                                        remaining
                                        provisions.</li>
                                    <li class="py-2">Pi and Your relationship is that of independent contractors and
                                        not
                                        principal-agent,
                                        subordination, subcontracting, association, partnership or joint venture.
                                        Neither of
                                        the Parties
                                        is the
                                        agent for the other, and the Customer does not have the right to bind Pi on any
                                        agreement with a
                                        third
                                        party.</li>
                                    <li class="py-2">No provision of these Terms & Conditions shall be deemed to be
                                        waived and no
                                        breach
                                        excused, unless such waiver or consent shall be in writing and signed by Pi. Any
                                        consent by Pi
                                        to, or a
                                        waiver by Pi of any breach by User(s), whether expressed or implied, shall not
                                        constitute
                                        consent to,
                                        waiver of, or excuse for any other different or subsequent breach.</li>
                                    <li class="py-2"> The obligations and duties imposed by this Terms & Conditions
                                        with
                                        respect to
                                        any
                                        information related to infrastructure and services provided by Pi, may be
                                        enforced
                                        by Pi of such
                                        information against the Customer or the Customer’s recipients of such
                                        information.
                                        All terms and
                                        provisions of this Terms & Conditions will be binding upon the Customer and
                                        their
                                        respective
                                        affiliates,
                                        and upon their respective successors and assigns.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Terms and Conditions content Ends --}}
            </div>
        </div>
    </section>
    {{-- Intro Ends --}}

    {{-- Popup --}}
    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto hidden popup">
        <div class="container">
            <div
                class="bg-slate-300 py-2 px-5 rounded-lg absolute lg:top-1/4 lg:left-1/3 lg:right-1/3 md:top-1/4 md:left-1/3 md:right-1/3 sm:top-1/4 sm:left-2 sm:right-2">
                <div>
                    <button class="float-right px-2 close"><span class="text-2xl">&times;</span></button>
                    <h3 class="text-center pt-5 pb-2 font-bold text-2xl">Disclaimer</h3>
                </div>
                <div>
                    <p>Clicking the link will redirect you to an external site. Pi Cloud is not responsible for
                        its content or actions. Proceed at your own discretion.</p>
                </div>
                <div class="text-center py-3">
                    <button class="bg-black text-white p-2 rounded-lg" id="link-1">Okay</button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto hidden popup-2">
        <div class="container">
            <div
                class="bg-slate-300 py-2 px-5 rounded-lg absolute lg:top-1/4 lg:left-1/3 lg:right-1/3 md:top-1/4 md:left-1/3 md:right-1/3 sm:top-1/4 sm:left-2 sm:right-2">
                <div>
                    <button class="float-right px-2 close"><span class="text-2xl">&times;</span></button>
                    <h3 class="text-center pt-5 pb-2 font-bold text-2xl">Disclaimer</h3>
                </div>
                <div>
                    <p>Clicking the link will redirect you to an external site. Pi Cloud is not responsible for
                        its content or actions. Proceed at your own discretion.</p>
                </div>
                <div class="text-center py-3">
                    <button class="bg-black text-white p-2 rounded-lg" id="link-2">Okay</button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto hidden popup-3">
        <div class="container">
            <div
                class="bg-slate-300 py-2 px-5 rounded-lg absolute lg:top-1/4 lg:left-1/3 lg:right-1/3 md:top-1/4 md:left-1/3 md:right-1/3 sm:top-1/4 sm:left-2 sm:right-2">
                <div>
                    <button class="float-right px-2 close"><span class="text-2xl">&times;</span></button>
                    <h3 class="text-center pt-5 pb-2 font-bold text-2xl">Disclaimer</h3>
                </div>
                <div>
                    <p>Clicking the link will redirect you to an external site. Pi Cloud is not responsible for
                        its content or actions. Proceed at your own discretion.</p>
                </div>
                <div class="text-center py-3">
                    <button class="bg-black text-white p-2 rounded-lg" id="link-3">Okay</button>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto hidden popup-4">
        <div class="container">
            <div
                class="bg-slate-300 py-2 px-5 rounded-lg absolute lg:top-1/4 lg:left-1/3 lg:right-1/3 md:top-1/4 md:left-1/3 md:right-1/3 sm:top-1/4 sm:left-2 sm:right-2">
                <div>
                    <button class="float-right px-2 close"><span class="text-2xl">&times;</span></button>
                    <h3 class="text-center pt-5 pb-2 font-bold text-2xl">Disclaimer</h3>
                </div>
                <div>
                    <p>Clicking the link will redirect you to an external site. Pi Cloud is not responsible for
                        its content or actions. Proceed at your own discretion.</p>
                </div>
                <div class="text-center py-3">
                    <button class="bg-black text-white p-2 rounded-lg" id="link-4">Okay</button>
                </div>
            </div>
        </div>
    </section>
    {{-- Popup Ends --}}
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
        $(document).ready(function() {
            $('.open-link').on('click', function() {
                $('.popup').show();
            });
            $('.open-link-2').on('click', function() {
                $('.popup-2').show();
            });
            $('.open-link-3').on('click', function() {
                $('.popup-3').show();
            });
            $('.open-link-4').on('click', function() {
                $('.popup-4').show();
            });

            $('.close').on('click', function() {
                $('.popup, .popup-2, .popup-3, .popup-4').hide();
            });

            $('#link-1').on('click', function() {
                window.open('https://policies.google.com/?hl=en', '_blank');
            });
            $('#link-2').on('click', function() {
                window.open('https://micro.company/privacy/', '_blank');
            });
            $('#link-3').on('click', function() {
                window.open('https://privacy.microsoft.com/en-us/privacystatement', '_blank');
            });
            $('#link-4').on('click', function() {
                window.open('https://www.ccavenue.com/privacy.jsp', '_blank');
            });
        });
    </script>
    {{-- <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 2000) {
                    $('#privacy-policy-content').fadeOut();
                    $('.arr-btn1').removeClass('arr-icon1');
                }
            });
            $(window).scroll(function() {
                if ($(window).scrollTop() > 2000) {
                    $('#aup-content').fadeOut();
                    $('.arr-btn2').removeClass('arr-icon2');
                }
            });
            $(window).scroll(function() {
                if ($(window).scrollTop() > 9000) {
                    $('#terms-conditions-content').fadeOut();
                    $('.arr-btn3').removeClass('arr-icon3');
                }
            });
        });
    </script> --}}
@endsection
