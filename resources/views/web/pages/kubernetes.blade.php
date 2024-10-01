@extends('web.layouts.app')

@section('web-head')
    <title>Kubernetes | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/xaas/kubernetes.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Kubernetes</h1>
                        <p class="text-gray-300 leading-loose font-medium lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Orchestrate Your Cloud with Precision.
                            Empower your applications to scale seamlessly and resiliently.
                            Kubernetes brings unmatched flexibility, automation, and control.
                            Unleash the true potential of containerized workloads today.
                        </p>
                        <div class="pt-4 space-x-3">
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                            <a href="#pikube-table" class="btn-primary-md">Get a Quote</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- PiKube Intro cont starts --}}
    <section class="py-4">
        <div class="container">
            <div class="space-y-2">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center pb-3">PiKube–Powerful Kubernetes
                    Cluster
                    Servers </h2>

                <p class="text-center">PiKube is a
                    Kubernetes Cluster Servers offering from Pi Datacenters. We provide the
                    infrastructure
                    necessary for you to deploy and manage your own Kubernetes clusters.We specialize in
                    providing robust, scalable, and flexible Kubernetes clusters tailored to
                    your needs. Our
                    service is designed for customers who prefer to manage their own Kubernetes environments without the
                    overhead of managed services. </p>

            </div>
            <div class="space-y-2 pt-5">
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center pb-3">What is Kubernetes? </h2>
                <p class="text-center">Kubernetes (K8s) is
                    an open-source platform that automates the deployment, scaling, and
                    management of
                    containerized applications. It consists of a control plane and a set of worker nodes, ensuring high
                    availability and efficient resource utilization for your applications. </p>
            </div>
            {{-- Key Features --}}
            <div class="py-5">
                <div class="container">
                    <div>
                        <h2 class="lg:text-3xl md:text-2xl sm:text-2xl font-bold text-center"> Features</h2>
                    </div>

                    <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-7 pb-1">
                        <div
                            class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                            <div class="py-3">
                                <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                    Dedicated Kubernetes Clusters</h3>
                            </div>
                            <p class="text-center"> Provision your own Kubernetes clusters on dedicated servers, ensuring
                                optimal performance and resource allocation.
                            </p>
                        </div>
                        <div
                            class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                            <div class="py-3">
                                <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                    Scalability
                                </h3>
                            </div>
                            <p class="text-center">Easily scale your cluster by adding or removing worker nodes based on
                                your application requirements. </p>

                        </div>
                        <div
                            class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                            <div class="py-3">
                                <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                    High Availability
                                </h3>
                            </div>
                            <p class="text-center">Our infrastructure is designed to support high availability, ensuring
                                your applications remain online and responsive.</p>

                        </div>
                        <div
                            class="shadow-[0px_0px_8px_rgba(0,0,0,0.3)] p-5 border-t-4 border-[gray] hover:border-web-ascent-1  hover:-translate-y-2 transition duration-500 cursor-pointer">
                            <div class="py-3">
                                <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl text-center mx-auto my-0">
                                    Flexibility in Configuration
                                </h3>
                            </div>
                            <p class="text-center">Choose from a variety of server configurations to best suit your workload
                                demands.</p>

                        </div>
                    </div>
                </div>
            </div>
            {{-- Key Features Ends --}}
        </div>
    </section>
    {{-- PiKube Intro cont ends --}}

    {{-- how it works starts --}}
    <section class="py-4">
        <div class="container">
            <div>
                <h2 class="lg:text-3xl md:text-2xl sm:text-2xl font-bold text-center"> How It Works </h2>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-5 pt-7 pb-3">
                <div class="shadow-[0px_0px_9px_rgba(0,0,0,0.3)] bg-[#000000ab] pb-3 rounded-tr-[12rem] rounded-tl-[2rem]">
                    <img src="{{ asset('web/images/xaas/choose-config.webp') }}"
                        class="w-20 h-20 p-3 bg-white rounded-br-[2rem] rounded-tl-[2rem]">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl mx-auto my-0 pt-3 pb-2 px-3 text-white">
                        Choose Your
                        Configuration</h3>
                    <p class="px-3 text-white">Select the dedicated server configurations and the number of
                        worker
                        nodes
                        required for
                        your cluster.
                    </p>
                </div>
                <div class="shadow-[0px_0px_9px_rgba(0,0,0,0.3)] bg-[#000000ab] pb-3 rounded-tr-[12rem] rounded-tl-[2rem]">
                    <img src="{{ asset('web/images/xaas/cluster-creation.webp') }}"
                        class="w-20 h-20 p-3 bg-white rounded-br-[2rem] rounded-tl-[2rem]">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl mx-auto my-0 pt-3 pb-2 px-3 text-white">
                        Cluster Creation
                    </h3>
                    <p class="px-3 text-white"> We handle the provisioning of the master nodes, ensuring a
                        robust
                        control
                        plane.</p>
                </div>
                <div class="shadow-[0px_0px_9px_rgba(0,0,0,0.3)] bg-[#000000ab] pb-3 rounded-tr-[12rem] rounded-tl-[2rem]">
                    <img src="{{ asset('web/images/xaas/accessing-your-cluster.webp') }}"
                        class="w-20 h-20 p-3 bg-white rounded-br-[2rem] rounded-tl-[2rem]">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl mx-auto my-0 pt-3 pb-2 px-3 text-white">
                        Accessing Your
                        Cluster
                    </h3>
                    <p class="px-3 text-white"> Your credentials will be generated and sent to you. Use the
                        kubectl
                        command-line tool
                        to interact
                        with your cluster. A kubeconfig file will be provided to facilitate access.</p>
                </div>
                <div class="shadow-[0px_0px_9px_rgba(0,0,0,0.3)] bg-[#000000ab] pb-3 rounded-tr-[12rem] rounded-tl-[2rem]">
                    <img src="{{ asset('web/images/xaas/workloads.webp') }}"
                        class="w-20 h-20 p-3 bg-white rounded-br-[2rem] rounded-tl-[2rem]">
                    <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl mx-auto my-0 pt-3 pb-2 px-3 text-white">
                        Manage Your
                        Workloads
                    </h3>
                    <p class="px-3 text-white">Deploy, scale, and manage your applications using Kubernetes'
                        powerful
                        orchestration
                        features.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- how it works ends --}}

    {{-- pricing cont starts --}}
    <section class="py-4 scroll-mt-40" id="pikube-table">
        <div class="container">
            <div>
                <h2 class="lg:text-3xl md:text-2xl sm:text-2xl font-bold"> Pricing </h2>
                <p class="leading-relaxed lg:text-lg sm:text-base font-medium pt-2">Our pricing
                    model is transparent and straightforward: </p>
            </div>
            <div class="py-5 lg:overflow-x-hidden md:overflow-x-hidden sm:overflow-x-scroll">

                <table
                    class="w-full border border-[#cccccc36] border-collapse rounded-xl shadow-[0px_0px_3px_rgba(0,0,0,0.5)]">
                    <tr>
                        <th class="border border-[#cccccc36] p-3 text-center text-white bg-web-ascent-1 rounded-tl-xl">Plan
                        </th>
                        <th class="border border-[#cccccc36] p-3 text-center text-white bg-web-ascent-1">vCPUs</th>
                        <th class="border border-[#cccccc36] p-3 text-center text-white bg-web-ascent-1">Dedicated RAM
                        </th>
                        <th class="border border-[#cccccc36] p-3 text-center text-white bg-web-ascent-1">Disk Space</th>
                        <th class="border border-[#cccccc36] p-3 text-center text-white bg-web-ascent-1">
                            Price Starts From
                            (Billed Monthly)</th>
                        <th class="border border-[#cccccc36] p-3 text-center text-white bg-web-ascent-1 rounded-tr-xl"></th>
                    </tr>

                    @foreach ($top_kubernetes_servers as $kuber)
                        <tr>
                            <td class="border border-[#cccccc36] p-3 text-center">{{ $kuber->plan }}</td>
                            <td class="border border-[#cccccc36] p-3 text-center">{{ $kuber->vcpu }}</td>
                            <td class="border border-[#cccccc36] p-3 text-center">{{ $kuber->ram }}</td>
                            <td class="border border-[#cccccc36] p-3 text-center">{{ $kuber->ssd_storage }}</td>
                            <td class="border border-[#cccccc36] p-3 text-center">{{ $kuber->pi_monthly_mrc }}
                            </td>
                            <td class="border border-[#cccccc36] p-3 text-center">
                                <?php if ($kuber->type == "ON_REQUEST") {
                                                    ?>
                                <button class="openPopupBtn bg-[grey] text-white p-2 rounded-lg hover:bg-web-ascent-1"
                                    data-product-id='{{ $kuber->id }}'>Request To
                                    Buy</button>
                                <!-- <a class="plan-button tabcontent3 monthinr monthusd" id="req-btn" >Request To Buy</a> -->
                                <?php
                                                    } else {
                                                    ?>
                                <a class="plan-button">Buy Now</a>
                                <?php
                                                    }
                                                    ?>
                                <div id="popup<?php echo $kuber->id; ?>"
                                    class="example popup w-full h-full fixed top-0 left-0 bg-[#000000c9] popup-overlay"
                                    style="display:none;z-index: 111;">
                                    <div class="popup-content">
                                        <!-- <span class="close" data-product-id="{{ $kuber->id }}">&times;</span> -->
                                        <!-- <h2>{{ $kuber->plan }}</h2> -->
                                    </div>
                                    <div
                                        class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16">
                                        <form action="{{ route('handle.kubernet.form.enquiry') }}" method="POST"
                                            class="md:px-10 sm:px-5 py-3 text-center space-y-3">

                                            @csrf
                                            <input type="hidden" name="form_subject" id="form_subject"
                                                value="Kubernetes" required>
                                            <input type="hidden" name="download_file" id="download_file"
                                                value="{{ asset('web/pdf/pi-ai-coe.pdf') }}" required>
                                            <div class="text-right">
                                                <span class="close cursor-pointer text-3xl"
                                                    data-product-id="{{ $kuber->id }}">&times;</span>
                                            </div>
                                            <p class="text-black text-left"><strong>GPU Plan:</strong>
                                                <span><?php echo $kuber->plan; ?></span>
                                            </p>
                                            <p class="text-black text-left"><strong>vCPU:</strong>
                                                <span><?php echo $kuber->vcpu; ?></span>
                                            </p>
                                            <p class="text-black text-left"><strong>RAM:</strong>
                                                <span><?php echo $kuber->ram; ?></span>
                                            </p>
                                            <p class="text-black text-left"><strong>Storage:</strong>
                                                <span><?php echo $kuber->ssd_storage; ?></span>
                                            </p>
                                            <div>
                                                <h1 class="font-semibold text-lg mb-2 text-left">kindly fill the below
                                                    details</h1>
                                            </div>

                                            <div class="flex flex-col">
                                                <label for="name" class="input-label">Name<span
                                                        style="color: red; !important">*</span></label>
                                                <input type="text" name="name" id="name" class="input-box-md"
                                                    placeholder="Enter Name" required minlength="1" maxlength="250">
                                            </div>

                                            <div class="flex flex-col">
                                                <label for="phone" class="input-label">Mobile<span
                                                        style="color: red; !important">*</span></label>
                                                <input type="tel" pattern="[0-9]{10}" name="phone" id="phone"
                                                    class="input-box-md" placeholder="Enter Phone" required
                                                    minlength="10" maxlength="10">
                                            </div>

                                            <div class="flex flex-col">
                                                <label for="email" class="input-label">Work Email<span
                                                        style="color: red; !important">*</span></label>
                                                <input type="email" name="email" id="email" class="input-box-md"
                                                    placeholder="Enter Email" required min="1" maxlength="250">
                                            </div>

                                            <div class="flex flex-col">
                                                <label for="company" class="input-label">Company<span
                                                        style="color: red; !important">*</span></label>
                                                <input type="text" name="message" id="company" class="input-box-md"
                                                    placeholder="Enter company" required min="1" maxlength="250">
                                            </div>



                                            <div>
                                                <div class="g-recaptcha"
                                                    data-sitekey="6LfupGspAAAAAB2ueJTiGBEl0XXi5xXyBi-njnLn">
                                                    <div style="width: 304px; height: 78px;">
                                                        <div><iframe title="reCAPTCHA" width="304" height="78"
                                                                role="presentation" name="a-h5cszhjiwz0b" frameborder="0"
                                                                scrolling="no"
                                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                                src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfupGspAAAAAB2ueJTiGBEl0XXi5xXyBi-njnLn&amp;co=aHR0cHM6Ly9waWNsb3VkLmFpOjQ0Mw..&amp;hl=en&amp;v=xds0rzGrktR88uEZ2JUvdgOY&amp;size=normal&amp;cb=1nwihxhaupkg"
                                                                data-lf-form-tracking-inspected-3p1w24dvx2j8my5n="true"
                                                                data-lf-yt-playback-inspected-3p1w24dvx2j8my5n="true"
                                                                data-lf-vimeo-playback-inspected-3p1w24dvx2j8my5n="true"></iframe>
                                                        </div>
                                                        <textarea id="g-recaptcha-response-15" name="g-recaptcha-response" class="g-recaptcha-response"
                                                            style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                    </div><iframe data-lf-form-tracking-inspected-3p1w24dvx2j8my5n="true"
                                                        data-lf-yt-playback-inspected-3p1w24dvx2j8my5n="true"
                                                        data-lf-vimeo-playback-inspected-3p1w24dvx2j8my5n="true"
                                                        style="display: none;"></iframe>
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit" class="btn-primary-md w-full">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="text-[12px] pt-3 flex gap-1">
                <p><b>Note: </b></p>
                <p> The above pricing doesn't include Public IP's, Site 2 Site VPN and
                    Dedicated Bandwidth.<br>
                    Master and Worker Nodes: based on the dedicated server configurations you
                    choose.<br>
                    Traffic Charges: Ingress and egress traffic on each worker node is not
                    chargerd</p>
            </div>

            <div class="py-5 bg-[#223f971f] p-4 mt-5 rounded-lg">
                <form method="POST" action="{{ route('handle.kubernet.form.enquiry') }}">
                    @csrf
                    <div>
                        <h3 class="font-bold pb-5 text-center text-xl">For other specifications pricing information, kindly
                            fill
                            the below
                            details
                        </h3>
                    </div>
                    <input type="hidden" name="form_subject" id="form_subject" value="Kubernetes" required>
                    <input type="hidden" name="download_file" id="download_file"
                        value="{{ asset('web/pdf/pi-ai-coe.pdf') }}" required>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-5 md:gap-5 sm:gap-0 items-center">
                        <div class="pb-3 text-left space-y-2">
                            <label for="name" class="">Your Name <span style="color:red">*</span></label><br>
                            <input type="text" name="name" id="name"
                                class="border rounded p-1 w-full shadow-[0px_0px_3px_rgba(0,0,0,0.3)] outline-none"
                                placeholder="Enter Name" required="">
                        </div>

                        <div class="pb-3 text-left space-y-2">
                            <label for="email" class="">Work Email <span style="color:red">*</span></label><br>
                            <input type="email" name="email" id="email"
                                class="border rounded p-1 w-full shadow-[0px_0px_3px_rgba(0,0,0,0.3)] outline-none"
                                placeholder="Enter Email Address" required="">
                        </div>

                        <div class="pb-3 text-left space-y-2">
                            <label for="phone" class="">Phone <span style="color:red">*</span></label><br>
                            <input type="tel" name="phone" id="phone" pattern="[0-9]{10}"
                                class="border rounded p-1 w-full shadow-[0px_0px_3px_rgba(0,0,0,0.3)] outline-none"
                                placeholder="Enter Phone" required="">
                        </div>
                        <div class="lg:pb-0 md:pb-0 sm:pb-3 text-left space-y-2">

                            <label for="message">Message <span style="color:red">*</span></label><br>
                            <textarea id="message"
                                class="border rounded p-1 shadow-[0px_0px_3px_rgba(0,0,0,0.3)] outline-none w-full lg:h-[43px] md:h-[30px] sm:h-[40px]"
                                name="message" required=""></textarea>
                        </div>

                        <div class="flex lg:flex md:flex sm:block items-end gap-3">
                            <div class="g-recaptcha lg:mb-0 md:mb-0 sm:mb-3"
                                data-sitekey="6LfupGspAAAAAB2ueJTiGBEl0XXi5xXyBi-njnLn">
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation"
                                            name="a-h5cszhjiwz0b" frameborder="0" scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfupGspAAAAAB2ueJTiGBEl0XXi5xXyBi-njnLn&amp;co=aHR0cHM6Ly9waWNsb3VkLmFpOjQ0Mw..&amp;hl=en&amp;v=xds0rzGrktR88uEZ2JUvdgOY&amp;size=normal&amp;cb=1nwihxhaupkg"
                                            data-lf-form-tracking-inspected-3p1w24dvx2j8my5n="true"
                                            data-lf-yt-playback-inspected-3p1w24dvx2j8my5n="true"
                                            data-lf-vimeo-playback-inspected-3p1w24dvx2j8my5n="true"></iframe>
                                    </div>
                                    <textarea id="g-recaptcha-response-15" name="g-recaptcha-response" class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div><iframe data-lf-form-tracking-inspected-3p1w24dvx2j8my5n="true"
                                    data-lf-yt-playback-inspected-3p1w24dvx2j8my5n="true"
                                    data-lf-vimeo-playback-inspected-3p1w24dvx2j8my5n="true"
                                    style="display: none;"></iframe>
                            </div>
                            <div class="mb-0.5">
                                <input type="submit" name="submit" value="Get Started with Pikube"
                                    class="btn-primary-md">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- pricing cont ends --}}

    {{-- get started cont starts --}}
    <section class="py-4">
        <div class="container">
            <div>
                <h2 class="lg:text-3xl md:text-2xl sm:text-2xl font-bold text-center"> Example Use Cases </h2>
                <p class="text-center pt-2">
                    Kubernetes
                    is versatile and can be applied across various scenarios. Here are some common use cases:
                </p>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-8 lg:py-8 md:py-8 sm:py-5">
                <div
                    class="flex lg:flex md:flex sm:block justify-center items-start gap-5 w-full lg:bg-white md:bg-white sm:bg-[#0000001c] lg:p-0 md:p-0 sm:p-3 lg:shadow-none md:shadow-none sm:shadow-[0px_0px_7px_rgba(0,0,0,0.5)]">
                    <div class="lg:w-[25%] md:w-[25%] sm:w-[50%] sm:mx-auto sm:my-0 bg-web-ascent-1 rounded-lg">
                        <img src="{{ asset('web/images/xaas/web-mobile-applications.webp') }}"
                            class="w-20 h-20 p-3 mx-auto my-0 lg:mb-0 md:mb-0 sm:mb-3">
                    </div>
                    <div class="lg:w-[75%] md:w-[75%] sm:w-[100%]">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl mx-auto my-0">Web and Mobile
                            Applications</h3>
                        <p>Kubernetes serves as an excellent platform for deploying web and mobile applications,
                            ensuring high availability and scalability to handle varying user loads effectively.</p>
                    </div>
                </div>
                <div
                    class="flex lg:flex md:flex sm:block justify-center items-start gap-5 w-full lg:bg-white md:bg-white sm:bg-[#0000001c] lg:p-0 md:p-0 sm:p-3 lg:shadow-none md:shadow-none sm:shadow-[0px_0px_7px_rgba(0,0,0,0.5)]">
                    <div class="lg:w-[25%] md:w-[25%] sm:w-[50%] sm:mx-auto sm:my-0 bg-web-ascent-1 rounded-lg">
                        <img src="{{ asset('web/images/xaas/microservices-architecture.webp') }}"
                            class="w-20 h-20 p-3 mx-auto my-0 lg:mb-0 md:mb-0 sm:mb-3">
                    </div>
                    <div class="lg:w-[75%] md:w-[75%] sm:w-[100%]">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl mx-auto my-0">Microservices
                            Architecture</h3>
                        <p>Kubernetes excels in managing microservices, allowing developers to deploy, scale, and manage
                            multiple independent services efficiently. It facilitates rolling updates and provides
                            robust logging and monitoring capabilities, enhancing application resilience.</p>
                    </div>
                </div>
                <div
                    class="flex lg:flex md:flex sm:block justify-center items-start gap-5 w-full lg:bg-white md:bg-white sm:bg-[#0000001c] lg:p-0 md:p-0 sm:p-3 lg:shadow-none md:shadow-none sm:shadow-[0px_0px_7px_rgba(0,0,0,0.5)]">
                    <div class="lg:w-[25%] md:w-[25%] sm:w-[50%] sm:mx-auto sm:my-0 bg-web-ascent-1 rounded-lg">
                        <img src="{{ asset('web/images/xaas/ci-cd.webp') }}"
                            class="w-20 h-20 p-3 mx-auto my-0 lg:mb-0 md:mb-0 sm:mb-3">
                    </div>
                    <div class="lg:w-[75%] md:w-[75%] sm:w-[100%]">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl mx-auto my-0">Continuous
                            Integration and Deployment (CI/CD)</h3>
                        <p>Kubernetes integrates seamlessly with CI/CD tools like Jenkins and GitLab, automating the
                            deployment pipeline. This integration improves the speed and reliability of application
                            updates, making it easier to deliver new features to users.</p>
                    </div>
                </div>
                <div
                    class="flex lg:flex md:flex sm:block justify-center items-start gap-5 w-full lg:bg-white md:bg-white sm:bg-[#0000001c] lg:p-0 md:p-0 sm:p-3 lg:shadow-none md:shadow-none sm:shadow-[0px_0px_7px_rgba(0,0,0,0.5)]">
                    <div class="lg:w-[25%] md:w-[25%] sm:w-[50%] sm:mx-auto sm:my-0 bg-web-ascent-1 rounded-lg">
                        <img src="{{ asset('web/images/xaas/multi-tenant-applications.webp') }}"
                            class="w-20 h-20 p-3 mx-auto my-0 lg:mb-0 md:mb-0 sm:mb-3">
                    </div>
                    <div class="lg:w-[75%] md:w-[75%] sm:w-[100%]">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl mx-auto my-0">Multi-Tenant
                            Applications</h3>
                        <p>For applications serving multiple clients from a single instance, Kubernetes offers secure
                            isolation for each tenant. This capability is particularly beneficial for SaaS applications,
                            ensuring that customer data remains secure and performance is optimized.</p>
                    </div>
                </div>
                <div
                    class="flex lg:flex md:flex sm:block justify-center items-start gap-5 w-full lg:bg-white md:bg-white sm:bg-[#0000001c] lg:p-0 md:p-0 sm:p-3 lg:shadow-none md:shadow-none sm:shadow-[0px_0px_7px_rgba(0,0,0,0.5)]">
                    <div class="lg:w-[25%] md:w-[25%] sm:w-[50%] sm:mx-auto sm:my-0 bg-web-ascent-1 rounded-lg">
                        <img src="{{ asset('web/images/xaas/analytics-and-big-data.webp') }}"
                            class="w-20 h-20 p-3 mx-auto my-0 lg:mb-0 md:mb-0 sm:mb-3">
                    </div>
                    <div class="lg:w-[75%] md:w-[75%] sm:w-[100%]">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl mx-auto my-0">Analytics and
                            Big Data</h3>
                        <p>Kubernetes can manage data processing workloads and pipelines, making it suitable for big
                            data applications. It provides the scalability needed to handle large datasets and complex
                            processing tasks efficiently.</p>
                    </div>
                </div>
                <div
                    class="flex lg:flex md:flex sm:block justify-center items-start gap-5 w-full lg:bg-white md:bg-white sm:bg-[#0000001c] lg:p-0 md:p-0 sm:p-3 lg:shadow-none md:shadow-none sm:shadow-[0px_0px_7px_rgba(0,0,0,0.5)]">
                    <div class="lg:w-[25%] md:w-[25%] sm:w-[50%] sm:mx-auto sm:my-0 bg-web-ascent-1 rounded-lg">
                        <img src="{{ asset('web/images/xaas/hpc.webp') }}"
                            class="w-20 h-20 p-3 mx-auto my-0 lg:mb-0 md:mb-0 sm:mb-3">
                    </div>
                    <div class="lg:w-[75%] md:w-[75%] sm:w-[100%]">
                        <h3 class="font-bold lg:text-xl md:text-lg sm:text-xl mx-auto my-0">High-Performance
                            Computing (HPC)</h3>
                        <p>Kubernetes is increasingly used in HPC environments to manage data clusters and support
                            resource-intensive workloads, enabling efficient resource sharing and management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- get started cont ends --}}

    {{-- popup starts --}}
    {{-- <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto popup_form popup-overlay">
        <div class="container">
            <div class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16">
                <form action="{{ route('handle.kubernet.form.enquiry') }}" method="POST"
                    class="md:px-10 sm:px-5 py-3 text-center space-y-3">

                    @csrf
                    <input type="hidden" name="form_subject" id="form_subject" value="Kubernetes" required>
                    <input type="hidden" name="download_file" id="download_file"
                        value="{{ asset('web/pdf/pi-ai-coe.pdf') }}" required>
                    <div class="text-right">
                        <span class="text-3xl cursor-pointer close_form">&times;</span>
                    </div>
                    <div>
                        <h1 class="font-semibold text-3xl mb-2 text-center">kindly fill the below details</h1>
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

                    <div class="flex items-center">
                        <input type="checkbox" name="checkbox" id="checkbox" class="brochure_check" required>
                        <label>I Agree with The <a href="{{ route('view.policy') }}" target="_blank"
                                class="text-red-600">Terms and Conditions</a></label>
                    </div>
                    <div>
                        <button type="submit" class="btn-primary-md w-full">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section> --}}
    {{-- popup Ends --}}
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
    <!-- <script>
        $(document).ready(function() {
            $('.popup_form').hide()
            $('.show_form').click(function() {
                $('.popup_form').show()
            });
            $('.close_form').click(function() {
                $('.popup_form').hide()
            });
        });
    </script> -->
@endsection
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const openPopupBtns = document.querySelectorAll('.openPopupBtn');
        const closeBtns = document.querySelectorAll('.popup .close');
        openPopupBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                const productId = e.target.getAttribute('data-product-id');
                //alert(productId);
                const popup = document.getElementById('popup' + productId);
                popup.style.display = 'block';
            });
        });

        closeBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                const productId = e.target.getAttribute('data-product-id');
                const popup = document.getElementById('popup' + productId);
                popup.style.display = 'none';
            });
        });

        window.addEventListener('click', (event) => {
            if (event.target.classList.contains('popup')) {
                event.target.style.display = 'none';
            }
        });
    });
    window.addEventListener('hashchange', _ => {
        history.replaceState(null, "", location.href.replace('#pikube-table', ''));
    });
</script>
