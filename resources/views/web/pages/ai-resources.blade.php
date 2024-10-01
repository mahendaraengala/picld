@extends('web.layouts.app')

@section('web-head')
    <title>Resources | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    <section class="relative sec-l-bg">
        <div class="relative">
            <img src="{{ asset('web/images/resources/new-whitepapers-lg-banner.webp') }}"
                class="w-full lg:h-auto md:h-[30rem] sm:h-[85vh] lg:object-cover lg:object-center md:object-cover md:object-right sm:object-cover sm:object-center">
        </div>
        <div class="absolute top-0 conts">
            <div class="px-10 lg:py-[3.5rem] md:pt-32 sm:py-9 flex flex-col justify-center">
                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white py-1 px-2">Resources</h1>
                        <p
                            class="text-gray-300 leading-loose font-medium lg:pr-[4.5rem] md:pr-0 sm:pr-0 lg:text-[14px] md:text-[12px] sm:text-[13px]">
                            Pi Cloud is your gateway to insightful white papers and engaging blogs on Artificial
                            Intelligence (AI). Here, we curate a collection of the
                            latest resources to deepen your understanding of AI trends, technologies, and applications.
                            Whether you're seeking the latest research insights or are curious to explore the possibilities
                            of AI, our diverse selection of topics for white papers and blogs caters to all levels of
                            expertise. Stay informed, inspired, and empowered as you navigate the dynamic landscape of AI
                            with Pi Cloud's comprehensive resource hub.</p>
                        <div class="pt-4 pb-5 px-2 space-x-3">
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- whitepapers content starts --}}
    <section class="lg:pt-8 lg:pb-3 md:py-8 sm:py-7 scroll-mt-32" id="whitepapers">
        <div>
            <h2 class="text-center font-bold lg:text-4xl md:text-3xl sm:text-3xl">Whitepapers</h2>
        </div>
        <div class="container">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 pt-7">
                <div class="p-5 relative whitepapers text-center hover:bg-[#223f975e] group">
                    <img src="{{ asset('web/images/resources/decoding-gpu.webp') }}" alt="decoding-gpu-global-shortage"
                        class="border-2 border-[#0000006e] group-hover:border-white">
                    <h3 class="font-bold py-6 text-xl">Decoding GPU Global Shortage</h3>
                    <div class="pb-3 px-2 space-x-3">
                        <a href="{{ route('view.decoding-gpu-global-shortage') }}"
                            class="btn-primary-md hover:bg-white hover:text-black">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- whitepapers content ends --}}

    {{-- blogs content starts --}}
    <section class="pt-4 pb-10 scroll-mt-32" id="blogs">
        <div class="py-5">
            <h2 class="text-center font-bold lg:text-4xl md:text-3xl sm:text-3xl">Blogs</h2>
        </div>
        <div class="container bg-[#00000014]">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-12">
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/automation-to-transformation.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">From Automation to Transformation: How
                        AI-Managed Services Impact Business Success</h3>
                    <p class="h-40">AI Managed Services refer to outsourced services where a third-party provider manages,
                        monitors, and optimizes...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.from-automation-to-transformation-how-ai-managed-services-impact-business-success') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read
                            More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/vision-to-reality.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">From Vision to Reality: How Pi AI CoE Guides Your Generative AI
                        Journey</h3>
                    <p class="h-40">An AI Center of Excellence (AI CoE) is an organization's centralized team or hub
                        dedicated to driving artificial intelligence...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.from-vision-to-reality-how-pi-ai-coe-guides-your-generative-ai-journey') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read
                            More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/public-vs-private-clouds.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">Public Cloud vs. Private Cloud: Evaluating the Best Fit for Your
                        Business</h3>
                    <p class="h-40">According to a Gartner' report, global spending on cloud computing is predicted to
                        reach $679 billion by the end of 2024...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.public-cloud-vs-private-cloud-evaluating-the-best-fit-for-your-business') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read
                            More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/revolutionize-computing.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">How GPUs Revolutionize Computing </h3>
                    <p class="h-40">The Graphics Processing Unit (GPU) Market is projected to grow from USD 65.27 billion
                        in 2024 to USD 274.21 billion by 2029, at a CAGR of 33.20%...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.how-gpus-revolutionize-computing') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read
                            More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/secure-solutions.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">Private Cloud: A Secure Solution for Businesses </h3>
                    <p class="h-40">A private cloud is a cloud computing environment exclusively used by a single
                        organization. Unlike public clouds, which provide...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.private-cloud-a-secure-solution-for-businesses') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/rise-of-ai.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">Rise of AI: Transforming Customer Journeys in Manufacturing </h3>
                    <p class="h-40">The customer experience (CX) has been a critical differentiator for businesses
                        worldwide. When we say irrespective of industries...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.rise-of-ai-transforming-customer-journeys-in-manufacturing') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/multi-cloud.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">Multi-Cloud Services: A Modern
                        Business Need</h3>
                    <p class="h-40">Multi-cloud services utilize cloud computing resources from multiple cloud providers,
                        allowing organizations to distribute their computing workloads, applications...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.what-is-multi-cloud-services') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/cloud-computing.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">What is Cloud Computing? A
                        Comprehensive Exploration </h3>
                    <p class="h-40">In a world where data is the new currency and innovation is the heartbeat of
                        progress,
                        the world of cloud computing emerges not just as a technological evolution but as a primordial
                        force...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.what-is-cloud-computing-a-comprehensive-exploration') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/cloud-service-provider.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">Cloud Service Providers in India: Driving Growth in the Digital
                        Landscape </h3>
                    <p class="h-40">The exponential expansion of the Indian cloud market signifies a fundamental shift
                        for
                        businesses operating in diverse industries ... </p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.cloud-service-providers-in-india-driving-growth-in-the-digital-landscape') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/what-is-ai.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">What Is AI (Artificial Intelligence) And Why Is It a Buzzword? </h3>
                    <p class="h-40">AI, which emulates the processes of human intelligence, has emerged as a
                        revolutionary
                        technology capable of teaching, adapting, and carrying out ... </p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.what-is-ai-and-why-is-it-a-buzzword') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/big-things-in-ai.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">The Next Big Things in Artificial Intelligence in 2024 and What They
                        Mean for Businesses </h3>
                    <p class="h-40">AI represents a paradigm-shifting entity that is fundamentally altering the way in
                        which businesses function and formulate strategies in a wide range of sectors...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.the-next-big-things-in-artificial-intelligence-in-2024-and-what-they-mean-for-businesses') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/the-role-of-ai-in-business.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">The Role of Artificial Intelligence in Business </h3>
                    <p class="h-40">Artificial Intelligence (AI) has emerged as a pivotal component of contemporary
                        business operations, presenting numerous opportunities...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.the-role-of-artificial-intelligence-in-business') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/evolution-of-ai.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">The Evolution of Artificial Intelligence: From Inception to the
                        Present Day </h3>
                    <p class="h-40">Artificial Intelligence (AI) has come a long way since its inception
                        in the 1950s. Over the years, it has evolved from simple rule-based programs... </p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.the-evolution-of-artificial-intelligence-from-inception-to-the-present-day') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/ai-workload.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">Does All AI Workload Requires GPUs? An Exploration of Cost-effective
                        Alternatives</h3>
                    <p class="h-40">In recent years, the field of artificial intelligence (AI) has witnessed
                        exponential growth and innovation...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.does-all-ai-workload-requires-gpus-an-exploration-of-cost-effective-alternatives') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read
                            More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/what-is-gpu-on-cloud.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">What Is GPU On Cloud? How Are They Shaping the Future of Computing?
                    </h3>
                    <p class="h-40">During the 1970s, the acronym "GPU" first denoted a graphics processor
                        unit, a programmable processing unit that operated autonomously from the CPU...</p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.what-is-gpu-on-cloud-how-are-they-shaping-the-future-of-computing') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read More</a>
                    </div>
                </div>
                <div class="p-5 relative">
                    <img src="{{ asset('web/images/resources/what-is-gpu.webp') }}" alt=""
                        class="rounded-lg border-4 border-white">
                    <h3 class="font-bold py-4 text-xl">What is a GPU? Why Does It Matter in the Present Day?</h3>
                    <p class="h-40">An electronic circuit designed to improve computer graphics and image
                        processing is called a graphics processing unit (GPU)... </p>
                    <div class="pb-5 px-2 space-x-3 absolute bottom-2 right-5">
                        <a href="{{ route('view.what-is-a-gpu-why-does-it-matter-in-the-present-day') }}"
                            class="btn-primary-md hover:shadow-[-4px_6px_5px_rgba(0,0,0,1)]">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- blogs content ends --}}

    {{-- popup starts --}}
    {{-- <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto popup_form">
        <div class="container">
            <div class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16">
                <form class="md:px-10 sm:px-5 py-3 text-center space-y-3">

                    <div class="text-right">
                        <span class="text-3xl cursor-pointer close_form">&times;</span>
                    </div>
                    <div>
                        <h1 class="font-semibold text-3xl mb-2">Download Brochure</h1>
                    </div>

                    <div class="flex flex-col">
                        <label for="name" class="input-label">Name</label>
                        <input type="text" name="name" id="name" class="input-box-md" placeholder="Enter Name"
                            required>
                    </div>

                    <div class="flex flex-col">
                        <label for="mobile" class="input-label">Mobile</label>
                        <input type="text" name="mobile" id="mobile" class="input-box-md" placeholder="Enter Mobile"
                            required>
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="input-label">Email</label>
                        <input type="text" name="email" id="email" class="input-box-md" placeholder="Enter Email"
                            required>
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="input-label">Message</label>
                        <textarea name="message" id="message" rows="3" class="input-box-md" placeholder="Message" required></textarea>
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
        // const blog = document.querySelector('.blog-link');
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 100) {
                    $('#desktop-header').addClass('active');
                } else {
                    $('#desktop-header').removeClass('active');
                }
            });
        });
        window.addEventListener('hashchange', _ => {
            history.replaceState(null, "", location.href.replace('#blogs', ''));
        });
        window.addEventListener('hashchange', _ => {
            history.replaceState(null, "", location.href.replace('#whitepapers', ''));
        });
    </script>
@endsection
