@extends('web.layouts.app')

@section('web-head')
    <title>Security as a Service | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/xaas/new-cyber-security-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">
                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Security as a Service</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-24 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Fortify Your Business
                            with Security as a Service (SECaaS)
                            Protect your organization with cutting-edge, cloud-based security solutions tailored to your
                            needs. Our Security as a Service (SECaaS) offers real-time threat detection, advanced
                            encryption, and 24/7 monitoring, ensuring your data and infrastructure remain secure and
                            compliant. Stay ahead of cyber threats with seamless, scalable security that grows
                            with your business.
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
    <section class="py-4 space-y-5">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">Modern Day Battlefield Is On
                    The Web </h2>
                <p class="text-center py-5">In today's connected world, cyber attacks are occurring once in every
                    14 seconds. With more connected devices In this world than people on earth, there is an
                    increased reliance on the internet, wireless network standards, smart devices and IoT. This has
                    increased the threat vector of enterprises, making them vulnerable to a wide range of risk
                    stemming from cyber threats, disrupting operations and damaging reputation of any enterprise. It
                    won't be an exaggeration to say that <a
                        href="https://pidatacenters.com/knowledge-hub/why-cybersecurity-is-a-buzz-word-across-industries"
                        class="hover:underline underline-offset-2 text-blue-600" target="_blank">multi layered
                        cyber security</a> mechanisms and skilled experts
                    are the last line of defense, for digital data assets of enterprises. It makes the difference
                    between digital harmony and digital chaos.</p>
            </div>
            <div>
                <h2 class="font-bold lg:text-2xl md:text-xl sm:text-lg text-center text-[#545454]">Enterprise-Grade
                    Cyber Security Products</h2>
                <p class="text-center pt-5">Multiple layers of protection spread across the systems, users and
                    operations</p>
            </div>

            <div class="py-5">
                <ul
                    class="lg:flex md:flex sm:block justify-center items-center sm:text-center lg:space-x-5 md:space-x-5 border-b-4 border-black">
                    <li id="cyber-security-tab-1"
                        class="cyber-security-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                        onclick="handleToggleCyberSecurityTab(1)">
                        <button>Infrastructure</button>
                    </li>
                    <li id="cyber-security-tab-2"
                        class="cyber-security-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                        onclick="handleToggleCyberSecurityTab(2)">
                        <button>Application</button>
                    </li>
                    <li id="cyber-security-tab-3"
                        class="cyber-security-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:mt-0 sm:mb-1 sm:w-[90%]"
                        onclick="handleToggleCyberSecurityTab(3)">
                        <button>End-point</button>
                    </li>
                    <li id="cyber-security-tab-4"
                        class="cyber-security-tab lg:m-0 md:w-auto md:m-0 sm:mx-auto sm:my-0 sm:w-[90%]"
                        onclick="handleToggleCyberSecurityTab(4)">
                        <button>Management</button>
                    </li>
                </ul>
            </div>

            {{-- Security sub-tab-1 --}}
            <div class="space-y-5 py-4 cyber-security-subtab-panel hidden" id="cyber-security-subtab-panel-1">
                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <img src="{{ asset('web/images/private-cloud/firewall_img.webp') }}"
                        alt="Security everywhere simplified. Monitor and control network traffic from a central hub."
                        class="w-96 mx-auto my-0">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Firewall As A Service (FWaaS)</h3>
                        <h4 class="text-slate-900 font-bold py-2">Monitor and control network traffic, basis pre-defined
                            rules
                        </h4>
                        <p>FWaaS on Pi Cloud is the first layer of defence for enterprise workloads and eliminates
                            the need for appliance form factor. Network admins can ensure virtual firewall is
                            available at hub office, branch locations and end-points, without the need to install
                            additional hardware.</p>
                        <br>
                        <p>Features: URL filtering | Intrusion Prevention | Intrusion Detection | Global Connect</p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Anti-DDoS</h3>
                        <h4 class="text-slate-900 font-bold py-2">Mitigation from Distributed Denial of Service(DDoS)
                            attacks
                        </h4>
                        <p>Anti-DDoS on Pi Cloud, secures websites, applications, and entire network while ensuring
                            the performance of legitimate traffic is not compromised. It is designed to protect
                            enterprise network, transport and application Layer</p>
                        <p>DDoS Protection for: Network infrastructure, web assets (HTTP/HTTPs), and for any
                            application such as FTP, SSH, VoIP, gaming, or any application running over a TCP/UDP
                            protocol, on enterprise cloud and on-premise networks</p>
                    </div>
                    <img src="{{ asset('web/images/private-cloud/ddos_img.webp') }}"
                        alt="Safeguard websites, apps, and entire networks from DDoS attacks without impacting legitimate traffic."
                        class="w-96 mx-auto my-0">
                </div>
            </div>
            {{-- Security sub-tab-1 Ends --}}

            {{-- Security sub-tab-2 --}}
            <div>
                <div class="space-y-5 py-4 cyber-security-subtab-panel hidden" id="cyber-security-subtab-panel-2">
                    <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                        <img src="{{ asset('web/images/private-cloud/av_img.webp') }}"
                            alt="Protect your systems and data from malware and zero-day threats with Pi-cloud antivirus"
                            class="w-96 mx-auto my-0">
                        <div class="flex flex-col justify-center">
                            <h3 class="font-bold text-xl py-2">Antivirus Software</h3>
                            <h4 class="text-slate-900 font-bold py-2">Prevent, detect, and remove malware</h4>
                            <p>Being connected to internet also opens up avenues for increased threat vector. Pi
                                Cloud
                                antivirus software scans for security and performance issues and ensures enterprise
                                systems, data and end-users are malware-safe and immune to the zero-day
                                vulnerabilities.
                            </p>
                            <br>
                            <p>Protection against: Browser hijackers | Ransomware | Keyloggers | Backdoors |
                                Rootkits |
                                Trojan horses | Worms | Malicious LSPs | Adware and spyware</p>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                        <div class="flex flex-col justify-center">
                            <h3 class="font-bold text-xl py-2">Web Application Firewall (WAF)</h3>
                            <h4 class="text-slate-900 font-bold py-2">Filter , monitor and block unsolicited http traffic
                            </h4>
                            <p>WAF service on Pi Cloud monitors, logs and analyses the HTTP traffic between
                                enterprise
                                application and internet. It aims to protect against vulnerabilities in the
                                application
                                by filtering out malicious traffic. WAF on Pi Cloud protects web applications from
                                cross-site forgery, cross-site-scripting (XSS), file inclusion, and SQL injection,
                                among
                                others that may sabotage important transactions and steal sensitive data.</p>
                        </div>
                        <img src="{{ asset('web/images/private-cloud/waf_img.webp') }}"
                            alt="Monitors, filters, and blocks malicious HTTP traffic to protect web apps from XSS, SQL injection, and other threats."
                            class="w-96 mx-auto my-0">
                    </div>
                </div>
            </div>

            {{-- Security sub-tab-2 Ends --}}

            {{-- Security sub-tab-3 --}}
            <div class="space-y-5 py-4 cyber-security-subtab-panel hidden" id="cyber-security-subtab-panel-3">
                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <img src="{{ asset('web/images/private-cloud/epp_img.webp') }}"
                        alt="For better endpoint security, EPP on Pi cloud integrates antivirus, encryption, intrusion prevention, and data loss prevention."
                        class="w-96 mx-auto my-0">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Endpoint Protection Platform (EPP)</h3>
                        <h4 class="text-slate-900 font-bold py-2">Integrated suite of endpoint protection technologies</h4>
                        <p>EPP on Pi Cloud provides essential security for many types of endpoints, from smartphones
                            to printers. It is an integrated suite of technologies, such as antivirus, data
                            encryption, intrusion prevention, and data loss prevention. EPP framework includes data
                            sharing between endpoint protection technologies, this provides a more effective
                            approach than a collection of siloed security products that lack the ability to
                            communicate.</p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Endpoint Detection and Response (EDR)</h3>
                        <h4 class="text-slate-900 font-bold py-2">Securely access Enterprise network resources</h4>
                        <p>Reduce the time to detect and respond to threats with EDR on Pi-cloud. It provides
                            additional tools to hunt for threats, forensically analyse intrusions and respond
                            swiftly and effectively to attacks.</p>
                        <br>
                        <p>Features: Simplify deployment | Incident response | Gain visibility into emerging threats
                            | AI-guided investigations | Automated processes</p>
                    </div>
                    <img src="{{ asset('web/images/private-cloud/edr_img.webp') }}"
                        alt="Pi-Cloud ensures secure access to enterprise resources with EDR for fast threat detection and response."
                        class="w-96 mx-auto my-0">
                </div>
                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <img src="{{ asset('web/images/private-cloud/iam_img.webp') }}"
                        alt="Grant granular access control - admins manage users, groups, and permissions for a compliant and secure environment."
                        class="w-96 mx-auto my-0">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Identity & Access Management (IAM)</h3>
                        <h4 class="text-slate-900 font-bold py-2">Securely manage access across enterprise IT resources</h4>
                        <p>IAM on Pi Cloud is a periphery security to the cloud. It acts as a foundation to a
                            secured and fully compliant cloud architecture. Admins can create and manage end-users,
                            groups, relative policies and use permissions to allow or deny their access.</p>
                        <br>
                        <p>Use Cases: Multi-factor Authentication(MFA) | Granular access controls | Monitor &
                            analyze access | Privileged-user file & resources access</p>
                    </div>
                </div>

            </div>
            {{-- Security sub-tab-3 Ends --}}

            {{-- Security sub-tab-4 --}}
            <div class="space-y-5 py-4 cyber-security-subtab-panel hidden" id="cyber-security-subtab-panel-4">
                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <img src="{{ asset('web/images/private-cloud/soc_img.webp') }}"
                        alt="Continuously monitors, detects threats, and helps you respond to security incidents – all in one place."
                        class="w-96 mx-auto my-0">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Security Operations Center (SOC)</h3>
                        <h4 class="text-slate-900 font-bold py-2">Detect, analyze, and respond to cybersecurity incidents
                        </h4>
                        <p>Security Information and Event Management (SIEM) enabled SOC on Pi Cloud is a centralized
                            24x7 function to continuously monitor and enhance the enterprise security posture for an
                            organization, while preventing, detecting, analyzing, and responding to cybersecurity
                            incidents.</p>
                        <br>
                        <p>Features: Monitoring & assessment | Advanced intelligence gathering | Forensics |
                            Contingency planning | Malware protection</p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">Vulnerability Assessment(VA) & Penetration Testing(PT)
                        </h3>
                        <h4 class="text-slate-900 font-bold py-2">Comprehensive evaluation of cyber-threat readiness</h4>
                        <p>VA allows enterprises to scan, identify and prioritize vulnerabilities and threats early
                            on, to ensure, most critical vulnerabilities are fixed first. Pen Test or ethical
                            hacking, is an authorized simulated cyberattack on a computer system, performed to
                            evaluate the security of the enterprise infrastructure and end-users.</p>
                    </div>
                    <img src="{{ asset('web/images/private-cloud/vapt_img.webp') }}"
                        alt="VA identifies and prioritizes system weaknesses, while Pen Test evaluates cybersecurity through simulated attacks."
                        class="w-96 mx-auto my-0">
                </div>
                <div class="grid lg:grid-cols-2 md:grid-col-2 sm:grid-cols-1 py-3">
                    <img src="{{ asset('web/images/private-cloud/vault_img.webp') }}"
                        alt="Creates a secure vault for sensitive data & processes. It locks down user access & movement, preventing unauthorized actions."
                        class="w-96 mx-auto my-0">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-xl py-2">MicroVault (MV) & DataVault (DV)</h3>
                        <h4 class="text-slate-900 font-bold py-2">Eliminate exposure of servers, data and processes</h4>
                        <p>Protect data and processes from tampering, unauthorized access and destruction.
                            Movement
                            is restrained by containerizing the user into a secure shell/vault, while zero trust
                            segmentation prevents lateral movement and elevation of user accounts. In contrast
                            to
                            MV, which is built for servers, DV is designed as a secure file repository for the
                            executive teams, vital business functions, IP protection, and critical backups.
                        </p>
                    </div>
                </div>

            </div>
            {{-- Security sub-tab-4 Ends --}}
        </div>
    </section>
    {{-- intro cont ends --}}
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
        const handleToggleCyberSecurityTab = (id) => {
            $(`.cyber-security-tab`).removeClass('active');
            $(`#cyber-security-tab-${id}`).addClass('active');
            $(`.cyber-security-subtab-panel`).addClass('hidden');
            $(`#cyber-security-subtab-panel-${id}`).removeClass('hidden');
        }
        handleToggleCyberSecurityTab(1);
    </script>
@endsection
