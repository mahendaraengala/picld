@extends('web.layouts.app')

@section('web-head')
    <title>SOC | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/managed-services/new-soc-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-right">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">
                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">SOC</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-24 md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Protect your business
                            with Pi Security Operations Center Services. Our 24/7 monitoring
                            and threat detection keep your systems secure from cyber threats. Stay ahead of risks with
                            our expert team, ensuring your data and operations are always protected.
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
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center py-4">Why SOC?</h2>
                <p class="text-justify">In a time
                    characterized by perpetually changing digital environments, the ever-present menace of
                    <a href="https://pidatacenters.com/knowledge-hub/why-cybersecurity-is-a-buzz-word-across-industries"
                        class="hover:underline underline-offset-2 text-blue-600" target="_blank">cybersecurity</a> poses a
                    significant and ever-changing obstacle for organizations of varying scales. Given
                    the severe ramifications that can ensue from security incidents, such as data breaches and
                    ransomware
                    attacks, it is imperative to adopt a proactive and committed approach rather than relying solely on
                    reactive measures. The importance of a Security Operations Center (SOC) becomes apparent in this
                    context. At Pi, we take pride in providing organizations with a comprehensive and resilient solution
                    that safeguards against the constantly evolving landscape of <a
                        href="https://pidatacenters.com/knowledge-hub/cybersecurity-101-protect-your-business-with-these-essential-tips"
                        class="hover:underline underline-offset-2 text-blue-600" target="_blank">cyber threats</a>.
                </p>
            </div>
        </div>
    </section>
    {{-- intro cont ends --}}

    {{-- cybersecurity landscape starts --}}
    <section class="py-3">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-xl md:text-lg sm:text-md text-center text-web-ascent-1">Understanding the
                    Cybersecurity Landscape: A Constant Evolution</h2>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2  sm:grid-cols-1 justify-center items-center gap-8 py-7">
                <div>
                    <img src="{{ asset('web/images/managed-services/soc-2.webp') }}" class="w-96 mx-auto my-0">
                </div>
                <div>
                    <p class="text-justify">The very
                        nature of cybersecurity challenges lies in their ceaseless evolution. Hackers and
                        cybercriminals are adept at developing new tactics and techniques to circumvent detection and
                        compromise systems. This reality necessitates a constant state of vigilance and the implementation
                        of proactive measures to safeguard organizational assets and sensitive data. A SOC serves as the key
                        component in this defense strategy, providing not just a reactive response but a continuous and
                        vigilant shield against potential threats.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- cybersecurity landscape ends --}}

    {{-- proposition starts --}}
    <section class="py-4">
        <div class="container">
            <div>
                <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center py-4">Pi Value Proposition</h2>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-5 py-3">
                <div
                    class="shadow-[0px_0px_5px_rgb(0,0,0,31%)] p-3 hover:bg-white bg-[rgb(34,63,151,12%)] scale-95 hover:scale-100 transition-all duration-700 rounded-lg">
                    <img src="{{ asset('web/images/managed-services/continuous-monitoring-and-analysis.webp') }}"
                        class="w-20 mx-auto my-0">
                    <h3 class="font-bold py-3 text-xl text-center">Continuous Monitoring and Analysis</h3>
                    <p>At Pi, SOC is not merely a reactionary force; it is a proactive guardian. Our highly trained
                        cybersecurity team operates around the clock, engaging in continuous monitoring and analysis of our
                        clients' <a
                            href="https://pidatacenters.com/knowledge-hub/what-is-data-center-security-why-is-it-important"
                            class="hover:underline underline-offset-2 text-blue-600" target="_blank">data center
                            security</a> posture. Equipped with the latest tools and techniques, our team
                        identifies potential threats and vulnerabilities, ensuring a resilient and proactive defense against
                        emerging challenges.</p>
                </div>
                <div
                    class="shadow-[0px_0px_5px_rgb(0,0,0,31%)] p-3 hover:bg-white bg-[rgb(34,63,151,12%)] scale-95 hover:scale-100 transition-all duration-700 rounded-lg">
                    <img src="{{ asset('web/images/managed-services/posture-reports.webp') }}" class="w-20 mx-auto my-0">
                    <h3 class="font-bold py-3 text-xl text-center">Regular Security Posture Reports and Improvement Measures
                    </h3>
                    <p>Our commitment to cybersecurity extends beyond mere incident response. The SOC team generates regular
                        reports on our clients' security posture. This involves not only identifying and addressing
                        vulnerabilities but also implementing measures for constant improvement. This includes adopting new
                        technologies and protocols and ensuring our team stays at the forefront of the cybersecurity
                        industry through regular training.</p>
                </div>
                <div
                    class="shadow-[0px_0px_5px_rgb(0,0,0,31%)] p-3 hover:bg-white bg-[rgb(34,63,151,12%)] scale-95 hover:scale-100 transition-all duration-700 rounded-lg">
                    <img src="{{ asset('web/images/managed-services/peace-of-mind.webp') }}" class="w-20 mx-auto my-0">
                    <h3 class="font-bold py-3 text-xl text-center">The Highest Level of Security and Peace of Mind</h3>
                    <p>Understanding the gravity of evolving cybersecurity threats, Pi is dedicated to providing our clients
                        with the highest level of security and trust in uncertain times. Our SOC offers peace of mind in an
                        ever-changing digital landscape. From small business to a large enterprise, or somewhere in between,
                        entrust us to safeguard your business and sensitive information with the utmost diligence and
                        expertise.</p>
                </div>
                <div
                    class="shadow-[0px_0px_5px_rgb(0,0,0,31%)] p-3 hover:bg-white bg-[rgb(34,63,151,12%)] scale-95 hover:scale-100 transition-all duration-700 rounded-lg">
                    <img src="{{ asset('web/images/managed-services/security-needs.webp') }}" class="w-20 mx-auto my-0">
                    <h3 class="font-bold py-3 text-xl text-center">Customized Solutions for Unique Security Needs</h3>
                    <p>We recognize that the landscape of cybersecurity is diverse and unique to each organization. Our SOC
                        team collaborates closely with you to understand your specific needs, developing customized
                        solutions tailored to unique security requirements. With Pi, you can be confident that your business
                        is in capable hands and that your data is secure, irrespective of its scale or complexity.</p>
                </div>
            </div>
            <p class="text-justify py-6">The SOC team at
                Pi
                is not merely a security checkpoint; it is a proactive partner in fortifying your
                business against the ever-evolving cyber threats that characterize the digital frontier. We are
                committed to continuous improvement, ensuring that our capabilities stay ahead in the cybersecurity
                landscape. Trust Pi to provide not just security but a robust shield for your business, offering peace
                of mind and secure operations in an unpredictable digital world. Your cybersecurity needs, regardless of
                their complexity, find a dedicated ally in the form of Pi.</p>
        </div>
    </section>
    {{-- proposition ends --}}
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
