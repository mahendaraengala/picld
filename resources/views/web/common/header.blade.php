<header class="fixed top-0 w-full pb-2 lg:block md:block sm:hidden z-50" id="desktop-header">
    <div class="flex justify-between items-center gap-2 bg-[#808080] py-0 px-10" id="main-menu">
        <div>
            <ul class="flex justify-center items-center gap-5">
                <li class="flex items-center gap-1"><lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop"
                        colors="primary:#fff" style="width:35px;height:35px">
                    </lord-icon><a href="mailto:reachus@picloud.ai" class="footer-link px-1 text-white"
                        target="_blank">reachus@picloud.ai</a>
                </li>
                <li class="flex items-center gap-1"><lord-icon src="https://cdn.lordicon.com/tftaqjwp.json"
                        trigger="loop" colors="primary:#fff" style="width:25px;height:20px"></lord-icon><a
                        href="tel:+918712630334" class="footer-link px-1 text-white" target="_blank">+91
                        8712630334</a></li>
                </li>
            </ul>
        </div>
        <div class="pt-[0.09rem]">
            <a href="{{ route('web.view.login') }}"
                class="nav-item font-medium bg-web-ascent-1 px-3 py-1 text-white rounded-lg mx-2">My
                Account
            </a>
            <a href="{{ route('web.view.contact') }}"
                class="bg-web-ascent-1 px-3 py-1 text-white rounded-lg font-medium">Contact
                Us</a>
        </div>
    </div>
    <nav class="px-10">
        <div class="flex items-center justify-between">
            <div>
                <a href="{{ route('web.view.pi-ai-coe') }}">
                    <img src="{{ asset('web\images\logo\logo.webp') }}" alt="pi-cloud" class="header-logo">
                </a>
            </div>
            <div>
                <ul class="header-nav-list">
                    <li class="dropdown">
                        <a href="{{ route('view.pi-ai-coe') }}" class="nav-item">
                            <span>Pi AI CoE</span>
                        </a>
                    </li>
                    <li class="divider">|</li>
                    <li class="dropdown">
                        <a href="{{ route('view.cloud') }}" class="nav-item">
                            <span>Cloud</span>
                            <i data-feather="chevron-down"></i>
                        </a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('web.view.home') }}" class="dropdown-item">Pi Cloud</a></li>
                            <li><a href="{{ route('view.public-cloud') }}" class="dropdown-item">Public
                                    Cloud</a></li>
                            <li><a href="{{ route('view.private-cloud') }}" class="dropdown-item">Private Cloud</a></li>
                            <li><a href="{{ route('view.sap') }}" class="dropdown-item">SAP on Cloud</a></li>
                            <li><a href="https://picloud.ai/public/gpucloud" class="dropdown-item">GPU Cloud</a></li>
                            <li><a href="{{ route('view.industry-solutions') }}" class="dropdown-item">Industry
                                    Solutions</a></li>
                            <li><a href="{{ route('web.view.kubernetes') }}" class="dropdown-item">Kubernetes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider">|</li>


                    <li class="dropdown">
                        <a href="{{ route('view.index') }}" class="nav-item">
                            <span>Managed Services</span>
                            <i data-feather="chevron-down"></i>
                        </a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('view.multicloud-managed-services') }}" class="dropdown-item">Multi
                                    Cloud</a></li>
                            <li><a href="{{ route('view.remote-infrastructure-management') }}"
                                    class="dropdown-item">RIMS</a></li>
                            <li><a href="{{ route('view.network-operating-center') }}" class="dropdown-item">NOC</a>
                            </li>
                            <li><a href="{{ route('view.security-operations-center') }}" class="dropdown-item">SOC</a>
                            </li>
                            <li><a href="{{ route('view.devops-as-a-services') }}" class="dropdown-item">DevOps</a>
                            </li>
                            <li><a href="{{ route('view.ai-managed-services') }}" class="dropdown-item">AI Managed
                                    Services</a></li>
                            <li><a href="{{ route('view.professional-services') }}" class="dropdown-item">Professional
                                    Services</a></li>
                        </ul>
                    </li>
                    <li class="divider">|</li>
                    <li class="dropdown">
                        <a href="#" class="nav-item">
                            <span>As a Service</span>
                            <i data-feather="chevron-down"></i>
                        </a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('view.backup-as-a-service') }}" class="dropdown-item">Backup as a
                                    Service</a></li>
                            <li><a href="{{ route('view.disaster-recovery-as-a-service') }}"
                                    class="dropdown-item">Disaster
                                    Recovery as a Service</a></li>
                            <li><a href="{{ route('view.container-as-a-service') }}" class="dropdown-item">Container as
                                    a Service
                                </a>
                            </li>
                            <li><a href="{{ route('view.network-as-a-service') }}" class="dropdown-item">Network as a
                                    Service</a>
                            </li>
                            <li><a href="{{ route('view.storage-as-a-service') }}" class="dropdown-item">Storage as a
                                    Service</a>
                            </li>
                            <li><a href="{{ route('view.security-as-a-service') }}" class="dropdown-item">Security as a
                                    Service</a>
                            </li>
                            <li><a href="{{ route('view.firewall-as-a-service') }}" class="dropdown-item">Firewall as a
                                    Service</a></li>
                            <li><a href="{{ route('view.load-balancer-as-a-service') }}" class="dropdown-item">Load
                                    Balancer as a Service</a></li>
                        </ul>
                    </li>
                    <li class="divider">|</li>
                    <li class="dropdown">
                        <a href="{{ route('view.ai-resources') }}" class="nav-item">
                            <span>Resources</span><i data-feather="chevron-down"></i>
                        </a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('view.ai-resources') }}#blogs"
                                    class="dropdown-item blog-link">Blogs</a></li>
                            <li><a href="{{ route('view.ai-resources') }}#whitepapers"
                                    class="dropdown-item">Whitepapers</a>
                            </li>
                            <li><a href="https://pidatacenters.com/ceo-corner.php#bvi" class="dropdown-item">CEO
                                    Blogs</a></li>
                        </ul>
                    </li>
                    <li class="divider">|</li>
                    <li class="dropdown">
                        <a href="{{ route('web.view.pricing') }}" class="nav-item">
                            <span>Pricing</span>
                            <i data-feather="chevron-down"></i>
                        </a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('web.view.pricing') }}#servers" class="dropdown-item">Cloud
                                    Servers</a></li>
                            <li><a href="{{ route('web.view.pricing.cloud.storage') }}#servers"
                                    class="dropdown-item">Cloud Storage</a></li>
                            <li><a href="https://picloud.ai/public/gpucloud" class="dropdown-item">GPU Cloud</a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider">|</li>
                    <li class="dropdown">
                        <a href="#" class="nav-item">
                            <span>About Us</span>
                            <i data-feather="chevron-down"></i>
                        </a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('view.about') }}" class="dropdown-item">About</a></li>
                            <li><a href="{{ route('view.certifications') }}" class="dropdown-item">Certifications</a>
                            </li>
                            <li><a href="https://pidatacenters.com/ceo-corner.php" class="dropdown-item">CEO
                                    Corner</a>
                            </li>
                            <li><a href="{{ route('view.policy') }}" class="dropdown-item">Policies</a></li>
                        </ul>
                    </li>
                    {{-- <li class="divider">|</li>
                    <li>
                        <a href="{{ route('web.view.login') }}" class="nav-item">My
                            Account
                        </a>
                    </li>
                    <li><a href="{{ route('web.view.contact') }}" class="btn-primary-md">Contact us</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>

<header class="fixed bg-white top-0 w-full lg:hidden md:hidden sm:block z-50 shadow-lg">
    <nav class="container">
        <div class="flex items-center justify-between lg:py-3 md:py-3 sm:py-1">
            <div>
                {{-- <a href="{{ route('web.view.home') }}" class="flex items-center"> --}}
                <a href="{{ route('web.view.pi-ai-coe') }}" class="flex items-center">
                    <img src="{{ asset('web\images\logo\logo.webp') }}" alt="pi-cloud" class="header-logo">
                    <span class="text-white font-medium text-lg">Pi Cloud</span>
                </a>
            </div>
            <div>
                <button onclick="handleToggleMenu()" class="text-black" id="mobile-menu-toggler">
                    <i data-feather="menu" class="h-10 w-10" id="menu" style="display: block;"></i>
                    <i data-feather="x" class="h-10 w-10" id="close" style="display: none;"></i>
                </button>
                <script>
                    const handleToggleMenu = () => {
                        $('#mobile-nav-list').slideToggle(200);
                        $('#mobile-menu-toggler #menu').toggle();
                        $('#mobile-menu-toggler #close').toggle();
                    }
                </script>
            </div>
        </div>
        <div id="mobile-nav-list" style="display: none;" class="py-5 border-t">
            <ul class="mobile-header-nav-list">
                <li><a href="{{ route('view.cloud') }}" class="mobile-nav-item">Cloud</a><span class="arrow"
                        onclick="$('.mobile-dropdown-content-1').slideToggle();"></span>
                    <ul class="mobile-dropdown-content-1 mob-drop" style="display: none">
                        <li><a href="{{ route('web.view.home') }}" class="mobile-dropdown-item">Pi
                                Cloud</a></li>
                        <li><a href="{{ route('view.public-cloud') }}" class="mobile-dropdown-item">Public
                                Cloud</a></li>
                        <li><a href="{{ route('view.private-cloud') }}" class="mobile-dropdown-item">Private
                                Cloud</a>
                        </li>
                        <li><a href="{{ route('view.sap') }}" class="mobile-dropdown-item">SAP on Cloud</a></li>
                        <li><a href="https://picloud.ai/public/gpucloud" class="mobile-dropdown-item">GPU Cloud</a>
                        </li>
                        <li><a href="{{ route('view.industry-solutions') }}" class="mobile-dropdown-item">Industry
                                Solutions</a></li>
                        <li><a href="{{ route('web.view.kubernetes') }}" class="mobile-dropdown-item">Kubernetes</a>
                        </li>
                    </ul>
                </li>

                <li><a href="{{ route('view.index') }}" class="mobile-nav-item">Managed Services</a><span
                        class="arrow" onclick="$('.mobile-dropdown-content-5').slideToggle();"></span>
                    <ul class="mobile-dropdown-content-5 mob-drop" style="display: none">
                        <li><a href="{{ route('view.multicloud-managed-services') }}"
                                class="mobile-dropdown-item">Multi
                                Cloud</a></li>
                        <li><a href="{{ route('view.remote-infrastructure-management') }}"
                                class="mobile-dropdown-item">RIMS</a></li>
                        <li><a href="{{ route('view.network-operating-center') }}"
                                class="mobile-dropdown-item">NOC</a>
                        </li>
                        <li><a href="{{ route('view.security-operations-center') }}"
                                class="mobile-dropdown-item">SOC</a>
                        </li>
                        <li><a href="{{ route('view.devops-as-a-services') }}"
                                class="mobile-dropdown-item">DevOps</a>
                        </li>
                        <li><a href="{{ route('view.ai-managed-services') }}" class="mobile-dropdown-item">AI
                                Managed Services</a></li>
                        <li><a href="{{ route('view.professional-services') }}"
                                class="mobile-dropdown-item">Professional Services</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="mobile-nav-item">As a Service</a>
                    <span class="arrow" onclick="$('.mobile-dropdown-content-6').slideToggle();"></span>
                    <ul class="mobile-dropdown-content-6 mob-drop" style="display: none">
                        <li><a href="{{ route('view.backup-as-a-service') }}" class="mobile-dropdown-item">Backup as
                                a
                                Service</a></li>
                        <li><a href="{{ route('view.disaster-recovery-as-a-service') }}"
                                class="mobile-dropdown-item">Disaster Recovery as a Service</a></li>
                        <li><a href="{{ route('view.container-as-a-service') }}"
                                class="mobile-dropdown-item">Container as a Service
                            </a>
                        </li>
                        <li><a href="{{ route('view.network-as-a-service') }}" class="mobile-dropdown-item">Network
                                as a
                                Service</a>
                        </li>
                        <li><a href="{{ route('view.storage-as-a-service') }}" class="mobile-dropdown-item">Storage
                                as a
                                Service</a>
                        </li>
                        <li><a href="{{ route('view.security-as-a-service') }}" class="mobile-dropdown-item">Security
                                as a
                                Service</a>
                        </li>
                        <li><a href="{{ route('view.firewall-as-a-service') }}" class="mobile-dropdown-item">Firewall
                                as a
                                Service</a></li>
                        <li><a href="{{ route('view.load-balancer-as-a-service') }}"
                                class="mobile-dropdown-item">Load Balancer
                                as a Service</a></li>
                    </ul>
                </li>


                <li><a href="{{ route('view.ai-resources') }}" class="mobile-nav-item">Resources</a><span
                        class="arrow" onclick="$('.mobile-dropdown-content-2').slideToggle();"></span>
                    <ul class="mobile-dropdown-content-2 mob-drop" style="display: none">
                        <li><a href="{{ route('view.ai-resources') }}#blogs" class="dropdown-item">Blogs</a>
                        </li>
                        <li><a href="{{ route('view.ai-resources') }}#whitepapers"
                                class="dropdown-item">Whitepapers</a>
                        </li>
                        <li><a href="https://pidatacenters.com/ceo-corner.php#bvi" class="dropdown-item">CEO Blogs</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('view.pi-ai-coe') }}" class="mobile-nav-item">Pi AI CoE</a></li>
                <li><a href="{{ route('web.view.pricing') }}" class="mobile-nav-item">Pricing</a><span
                        class="arrow" onclick="$('.mobile-dropdown-content-3').slideToggle();"></span>
                    <ul class="mobile-dropdown-content-3 mob-drop" style="display: none">
                        <li><a href="{{ route('web.view.pricing') }}#servers" class="dropdown-item">Cloud
                                Servers</a></li>
                        <li><a href="{{ route('web.view.pricing.cloud.storage') }}#servers"
                                class="dropdown-item">Cloud Storage</a>
                        </li>
                        <li><a href="https://picloud.ai/public/gpucloud" class="dropdown-item">GPU Cloud</a></li>
                    </ul>
                </li>
                <li><a href="#" class="mobile-nav-item">About us</a><span class="arrow"
                        onclick="$('.mobile-dropdown-content-4').slideToggle();"></span>
                    <ul class="mobile-dropdown-content-4 mob-drop" style="display: none">
                        <li><a href="{{ route('view.about') }}" class="dropdown-item">About</a></li>
                        <li><a href="{{ route('view.certifications') }}" class="dropdown-item">Certifications</a>
                        </li>
                        <li><a href="https://pidatacenters.com/ceo-corner.php" class="dropdown-item">CEO Corner</a>
                        </li>
                        <li><a href="{{ route('view.policy') }}" class="dropdown-item">Policies</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('web.view.login') }}" class="mobile-nav-item">
                        My Account
                    </a>
                </li>
                <li><a href="{{ route('web.view.contact') }}" class="mobile-nav-item">Contact us</a></li>
            </ul>
        </div>
    </nav>
</header>
