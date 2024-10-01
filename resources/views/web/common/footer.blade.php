<footer class="bg-web-complement">
    <div class="container relative">
        <div class="absolute lg:right-0 md:right-0 sm:right-4 -mt-5">
            <div class="flex items-center space-x-10">
                <a href="{{ route('web.view.contact') }}"
                    class="py-2 px-4 rounded-md bg-web-ascent-1 text-white font-medium ring-[3px] ring-white"
                    target="_blank">Contact
                    Us</a>
                <a href="https://api.whatsapp.com/send?phone=+918712630334&text=Hi, I need more information on Pi Cloud services"
                    class="py-3 px-3 rounded-md bg-[#25D366] text-white font-medium ring-[3px] ring-white"
                    target="_blank">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em"
                        width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="container pt-16 pb-10 lg:space-y-3 md:space-y-3 sm:space-y-10">
        <div class="grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-1 gap-2">

            <figure class="space-y-2">
                <h5 class="font-bold lg:text-left sm:text-lg">Cloud</h5>
                <ul class="space-y-2">
                    <li><a href="{{ route('web.view.home') }}" class="footer-link" target="_blank">Pi Cloud</a></li>
                    <li><a href="{{ route('view.public-cloud') }}" class="footer-link" target="_blank">Public
                            Cloud</a></li>
                    <li><a href="{{ route('view.private-cloud') }}" class="footer-link" target="_blank">Private
                            Cloud</a></li>
                    <li><a href="{{ route('view.sap') }}" class="footer-link" target="_blank">SAP on Cloud</a></li>
                    <li><a href="{{ route('view.professional-services') }}" class="footer-link"
                            target="_blank">Professional Services</a></li>
                    <li><a href="{{ route('view.ai-managed-services') }}" class="footer-link" target="_blank">AI
                            Managed Services</a></li>
                    <li><a href="{{ route('view.firewall-as-a-service') }}" class="footer-link" target="_blank">Firewall
                            as a Service </a></li>
                    <li><a href="{{ route('view.load-balancer-as-a-service') }}" class="footer-link"
                            target="_blank">Load Balancer as a Service </a></li>
                    <li><a href="{{ route('view.industry-solutions') }}" class="footer-link" target="_blank">Industry
                            Solutions</a></li>
                </ul>
            </figure>

            <figure class="space-y-2">
                <h5 class="font-bold lg:text-left sm:text-lg">Pricing</h5>
                <ul class="space-y-2">
                    <li><a href="https://picloud.ai/public/gpucloud" class="footer-link" target="_blank">GPU Cloud</a>
                    </li>
                    <li><a href="{{ route('web.view.pricing') }}#servers" class="footer-link" target="_blank">Cloud
                            Server</a>
                    </li>
                    <li><a href="{{ route('web.view.pricing.cloud.storage') }}#servers" class="footer-link"
                            target="_blank">Cloud Storage</a>
                    </li>
                </ul>
            </figure>

            <figure class="space-y-2">
                <h5 class="font-bold lg:text-left sm:text-lg">Resources</h5>
                <ul class="space-y-2">
                    <li><a href="{{ route('view.ai-resources') }}#blogs" class="footer-link" target="_blank">Blogs</a>
                    </li>
                    <li><a href="{{ route('view.ai-resources') }}#whitepapers" class="footer-link"
                            target="_blank">Whitepapers</a></li>
                    <li><a href="https://pidatacenters.com/ceo-corner.php#bvi" class="footer-link" target="_blank">CEO
                            Blogs</a></li>
                </ul>
            </figure>


            <figure class="space-y-2 w-52">
                <h5 class="font-bold lg:text-left sm:text-lg">About Us</h5>
                <ul class="space-y-2">
                    <li><a href="{{ route('view.about') }}" class="footer-link" target="_blank">About</a></li>
                    <li><a href="{{ route('view.certifications') }}" class="footer-link"
                            target="_blank">Certifications</a></li>
                    <li><a href="{{ route('view.pi-ai-coe') }}" class="footer-link" target="_blank">Pi AI CoE</a></li>
                    <li><a href="https://pidatacenters.com/ceo-corner.php" class="footer-link" target="_blank">CEO
                            Corner</a></li>
                    <li><a href="{{ route('view.policy') }}" class="footer-link" target="_blank">Policies</a></li>
                </ul>
            </figure>

            <figure class="space-y-2">
                <h5 class="font-bold lg:text-left sm:text-lg">Location Addresses</h5>
                <div class="space-y-1">
                    <ul class="space-y-2">
                        <li class="flex items-center gap-1"><img src="{{ asset('web/images/icons/location.svg') }}"
                                alt="phone" class="w-4 h-4"><a href="{{ route('web.view.contact') }}"
                                class="footer-link px-1" target="_blank">USA</a></li>
                        <li class="flex items-center gap-1"><img src="{{ asset('web/images/icons/location.svg') }}"
                                alt="mail" class="w-4 h-4"><a href="{{ route('web.view.contact') }}"
                                class="footer-link px-1" target="_blank">India</a>
                        </li>
                    </ul>
                    {{-- <h6 class="text-md font-semibold">India</h6>
                    <p class="text-sm font-medium">Pi DataCenters Pvt. Ltd. 12th Floor,
                        Vijaya Krishna Towers,
                        Besides Fairfield by Marriott,
                        Financial District, Gachibowli,
                        Hyderabad, Telangana 500032</p> --}}
                    <ul class="space-y-2">
                        <h6 class="text-md font-semibold pt-2">Contact Us</h6>
                        <li class="flex items-center gap-1"><img src="{{ asset('web/images/icons/mail-icon.webp') }}"
                                alt="mail" class="w-4 h-4"><a href="mailto:reachus@picloud.ai"
                                class="footer-link px-1" target="_blank">reachus@picloud.ai</a>
                        </li>
                        <li class="flex items-center gap-1"><img
                                src="{{ asset('web/images/icons/phone-icon.webp') }}" alt="phone"
                                class="w-4 h-4"><a href="tel:+918712630334" class="footer-link px-1"
                                target="_blank">+91
                                8712630334</a></li>
                    </ul>
                </div>
                {{-- <div class="space-y-1">
                    <h6 class="text-md font-semibold">United States</h6>
                    <p class="text-sm font-medium">49 Rutherford St, Newark New Mexico 07105, United States</p>
                </div> --}}
            </figure>

        </div>
        <div class="space-y-6">
            <div class="lg:text-center md:text-center sm:text-left">
                <p class="font-semibold text-sm">© 2024 Pi DATACENTERS Pvt. Ltd.| All rights reserved.</p>
            </div>
            <div>
                <ul class="social-media-icons">
                    <li><a href="https://www.linkedin.com/company/pidatacenters/" class="bg-[#2967b0]"
                            target="_blank"><img src="{{ asset('web/images/icons/linkedin.svg') }}"
                                alt="linkedin"></a>
                    </li>
                    <li><a href="https://twitter.com/Pi_DATACENTERS" class="bg-black" target="_blank"><img
                                src="{{ asset('web/images/icons/logo.svg') }}" alt="twitter" target="_blank"></a>
                    </li>
                    <li><a href="https://www.facebook.com/PiDATACENTERS/" class="bg-[#1777f0]" target="_blank"><img
                                src="{{ asset('web/images/icons/facebook.svg') }}" alt="facebook"></a></li>
                    <li><a href="https://www.youtube.com/@pi_datacenters" class="bg-[#fe0000]" target="_blank"><img
                                src="{{ asset('web/images/icons/youtube.svg') }}" alt="youtube"></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=+918712630334&text=Hi, I need more information on Pi Cloud services"
                            class="bg-[#3adb55]" target="_blank"><img
                                src="{{ asset('web/images/icons/whatsapp.svg') }}" alt="whatsapp"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script>
    (function(w, d) {
        w.CollectId = "66b48f03c7ec3e97bdf8401d";
        var h = d.head || d.getElementsByTagName("head")[0];
        var s = d.createElement("script");
        s.setAttribute("type", "text/javascript");
        s.async = true;
        s.setAttribute("src", "https://collectcdn.com/launcher.js");
        h.appendChild(s);
    })(window, document);
</script>
