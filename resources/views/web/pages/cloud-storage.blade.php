@extends('web.layouts.app')

@section('web-head')
    <title>Pricing | Pi Cloud</title>
@endsection

@section('web-section')
    <form action="{{ route('web.view.checkout') }}" method="GET">

        <section class="fixed top-0 bottom-0 bg-black bg-opacity-30 h-screen w-full z-50" id="pricing-popup"
            style="display: none;">
            <div class="container">

                <div class="h-screen w-full flex items-center justify-center">
                    <div
                        class="lg:w-6/12 md:w-8/12 sm:w-full h-fit rounded-lg border shadow-[0px_0px_20px_rgba(0,0,0,0.3)] bg-white p-10 space-y-4">
                        <div class="flex items-center justify-between">
                            <h1 class="font-semibold text-lg">Billing Summary</h1>
                            <button type="button" onclick="$('#pricing-popup').fadeOut()"><i data-feather="x"></i></button>
                        </div>
                        <table class="w-full">
                            <tr>
                                <td class="py-1">
                                    <p class="font-medium text-lg text-gray-700">Total <span
                                            id="payment-terms-output"></span> Recuring Cost:</p>
                                    <p class="font-medium text-sm text-gray-700" id="contract-period-output"></p>
                                </td>
                                <td class="py-1 text-right">
                                    <p class="font-medium text-lg">{{ config('app.currency.symbol') }}<span
                                            id="mcr-output"></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <p class="font-medium text-lg text-gray-700">One Time Cost (OTC):</p>
                                </td>
                                <td class="py-1 text-right">
                                    <p class="font-medium text-lg">{{ config('app.currency.symbol') }}<span
                                            id="otc-output"></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <p class="font-medium text-lg text-gray-700">Convenience Fees:</p>
                                </td>
                                <td class="py-1 text-right">
                                    <p class="font-medium text-lg">{{ config('app.currency.symbol') }}<span
                                            id="convenience-output"></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <p class="font-medium text-lg text-gray-700">GST:</p>
                                </td>
                                <td class="py-1 text-right">
                                    <p class="font-medium text-lg">{{ config('app.currency.symbol') }}<span
                                            id="gst-output"></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <p class="font-bold text-xl">Grand Total:</p>
                                </td>
                                <td class="py-1 text-right">
                                    <p class="font-bold text-xl">{{ config('app.currency.symbol') }}<span
                                            id="total-output"></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="py-2">
                                    <button name="download_pdf"
                                        class="bg-web-ascent-1 bg-opacity-5 px-2 py-1 rounded flex items-center justify-center space-x-2"
                                        value="download_pdf" type="submit">
                                        <span class="text-sm font-medium">Download Configuration PDF</span>
                                        <i data-feather="download" class="h-3.5 w-3.5"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                        <button name="submit" value="submit" type="submit"
                            class="btn-primary-md w-full flex items-center space-x-3 justify-center">
                            <span>Make Checkout</span>
                            <i data-feather="arrow-right"></i>
                        </button>
                    </div>
                </div>

            </div>
        </section>

        {{-- Page Header Section (Start) --}}
        <section class="bg-cover bg-center bg-no-repeat"
            style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('/web/images/pricing/pricing-banner.webp')">
            <div class="px-10 py-20">

                <div class="pt-32 pb-20 flex flex-col justify-center">

                    <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                        <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                            <h1 class="lg:text-7xl md:text-6xl sm:text-5xl font-bold text-white">Your Plan, Your Choice</h1>
                            <p class="text-gray-300 leading-loose font-medium">Our customizable plans allow you to tailor
                                your
                                cloud solution precisely to your needs, ensuring you only pay for what you use and nothing
                                more.
                                With Pi Cloud, you have the freedom to choose the services and resources that best suit your
                                requirements. Whether you're a small startup or a large enterprise, our scalable pricing
                                model
                                ensures you can scale up or down seamlessly as your business evolves.</p>
                            <div class="pt-4 space-x-3">
                                {{-- <a href="#" class="btn-primary-md">Know more</a> --}}
                                <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach
                                    us</a>
                                {{-- <a href="#" class="btn-primary-md">Brochures</a> --}}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        {{-- Page Header Section (End) --}}

        {{-- Pricing Section (Start) --}}
        <section>
            <div class="container py-20 space-y-20">

                <div class="flex items-center justify-center space-x-5" data-aos="fade-up" data-aos-duration="1500">
                    <hr class="w-full border-2 border-gray-400">
                    <h2 class="whitespace-nowrap font-bold lg:text-4xl md:text-3xl sm:text-3xl">GPU Cloud</h2>
                    <hr class="w-full border-2 border-gray-400">
                </div>

                <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-10 items-center lg:px-0 md:px-0 sm:px-10"
                    data-aos="fade-up" data-aos-duration="1500">

                    @foreach ($top_gpu_servers as $key => $item)
                        @php

                            $total_amount = 0;

                            $gross_amount = $item->pi_monthly_mrc;
                            $total_amount += $gross_amount;

                            $convenience_amount = ($total_amount * 6) / 100;
                            $total_amount += $convenience_amount;

                            $gst_amount = ($total_amount * 18) / 100;
                            $total_amount += $gst_amount;

                        @endphp
                        {{-- <form class="relative group" method="GET" action="https://picloud.ai/public/gpucloud/"> --}}
                        <div class="relative group">
                            {{-- <div hidden>
                            <input type="hidden" name="gpu_card" value="{{ $item->gpu_card }}">
                            <input type="hidden" name="os" value="{{ $item->os }}">
                            <input type="hidden" name="gpu_memory" value="{{ $item->gpu_memory }}">
                            <input type="hidden" name="plan" value="{{ $item->plan }}">
                            <input type="hidden" name="vcpu" value="{{ $item->vcpu }}">
                            <input type="hidden" name="ram" value="{{ $item->ram }}">
                            <input type="hidden" name="ssd_storage" value="{{ $item->ssd_storage }}">
                            <input type="hidden" name="item_type" value="{{ \App\Enums\OrderItemType::CLOUD_SERVER->value }}">
                            <input type="hidden" name="gross_amount" value="{{ $gross_amount }}" id="gross_amount_input">
                            <input type="hidden" name="convenience_amount" value="{{ $convenience_amount }}" id="convenience_amount_input">
                            <input type="hidden" name="gst_amount" value="{{ $gst_amount }}" id="gst_amount_input">
                            <input type="hidden" name="total_amount" value="{{ $total_amount }}" id="total_amount_input">
                        </div> --}}

                            <div class="absolute -top-5 z-10 right-4 w-10/12">
                                <div
                                    class="bg-web-ascent-1 shadow-[0px_0px_25px_rgba(0,0,0,0.3)] py-3 px-8 rounded-xl text-center text-white skew-x-12 group-hover:bg-white group-hover:text-web-ascent-1 transition duration-300 ease-in-out group-hover:ease-in-out">
                                    <h3 class="font-semibold text-xl -skew-x-12 whitespace-nowrap">{{ $item->gpu_card }}
                                    </h3>
                                </div>

                            </div>
                            <div
                                class="bg-white group-hover:bg-web-ascent-1 shadow-[0px_0px_25px_rgba(0,0,0,0.3)] rounded-xl skew-x-12 transition duration-300 ease-in-out group-hover:ease-in-out">
                                <div class="p-10 -skew-x-12 pt-16 text-center space-y-5">
                                    <h4 class="text-2xl font-bold text-web-ascent-1 group-hover:text-white mr-10">
                                        {{ config('app.currency.symbol') . number_format($item->pi_monthly_mrc, 2) }}</h4>
                                    <ul class="font-medium text-sm text-web-ascent-1 group-hover:text-white space-y-2">
                                        <li>OS : {{ $item->os }}</li>
                                        <li>GPU Memory : {{ $item->gpu_memory }}</li>
                                        <li>Plan : {{ $item->plan }}</li>
                                        <li>vCPU : {{ $item->vcpu }}</li>
                                        <li>RAM {{ $item->ram }}</li>
                                        <li>SSD Storage : {{ $item->ssd_storage }}</li>
                                    </ul>
                                    <a href="https://picloud.ai/public/gpucloud" target="_blank"
                                        class="py-3 px-10 skew-x-12 bg-web-ascent-1 group-hover:bg-white group-hover:text-web-ascent-1 rounded-lg text-white hover:bg-web-ascent-1-dark ml-7 transition duration-300 ease-in-out group-hover:ease-in-out w-full flex items-center justify-center">
                                        <p class="px-5 -skew-x-12 font-medium text-base whitespace-nowrap">Buy Now</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- </form> --}}
                    @endforeach

                </div>

            </div>
        </section>
        {{-- Pricing Section (End) --}}

        {{-- High On Demand (Start) --}}
        <section class="pb-20">
            <div class="container">
                <fieldset class="border-4 border-solid border-blue-800 p-3 max-w-6xl mt-0 mx-auto" data-aos="fade-up"
                    data-aos-duration="1500">
                    <legend class="text-3xl text-blue-800 px-4 font-bold mx-5">High On Demand</legend>
                    {{-- <form class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-10 items-center"  method="GET" action="https://picloud.ai/public/gpucloud/"> --}}
                    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-10 items-center">

                        {{-- <div hidden>
                        @php

                        $total_amount = 0;

                        $gross_amount = $high_on_demand->pi_monthly_mrc;
                        $total_amount += $gross_amount;

                        $convenience_amount = ($total_amount * 6) / 100;
                        $total_amount += $convenience_amount;

                        $gst_amount = ($total_amount * 18) / 100;
                        $total_amount += $gst_amount;

                    @endphp
                        <input type="hidden" name="gpu_card" value="{{ $high_on_demand->gpu_card }}">
                        <input type="hidden" name="os" value="{{ $high_on_demand->os }}">
                        <input type="hidden" name="gpu_memory" value="{{ $high_on_demand->gpu_memory }}">
                        <input type="hidden" name="plan" value="{{ $high_on_demand->plan }}">
                        <input type="hidden" name="vcpu" value="{{ $high_on_demand->vcpu }}">
                        <input type="hidden" name="ram" value="{{ $high_on_demand->ram }}">
                        <input type="hidden" name="ssd_storage" value="{{ $high_on_demand->ssd_storage }}">
                        <input type="hidden" name="item_type" value="{{ \App\Enums\OrderItemType::CLOUD_SERVER->value }}">
                        <input type="hidden" name="gross_amount" value="{{ $gross_amount }}" id="gross_amount_input">
                        <input type="hidden" name="convenience_amount" value="{{ $convenience_amount }}" id="convenience_amount_input">
                        <input type="hidden" name="gst_amount" value="{{ $gst_amount }}" id="gst_amount_input">
                        <input type="hidden" name="total_amount" value="{{ $total_amount }}" id="total_amount_input">
                    </div> --}}
                        <figure>
                            <img src="{{ asset('web/images/home/high-on-demand.webp') }}" alt="high-on-demand"
                                class="w-full h-auto shadow-lg max-w-lg p-4">
                        </figure>
                        <figure class="lg:text-left md:text-left sm:text-center space-y-5 px-7">
                            <h2 class="font-bold lg:text-4xl md:text-3xl sm:text-3xl text-center">
                                {{ $high_on_demand->gpu_card }}</h2>
                            {{-- <h3 class="font-bold lg:text-2xl md:text-2xl sm:text-lg text-center">
                            {{ $high_on_demand->os }}
                        </h3> --}}
                            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2">
                                <div class="flex items-center flex-col">
                                    <h4 class="font-bold text-lg">GPU Memory</h4>
                                    <img src="{{ asset('web/images/home/gpu-memory.webp') }}" alt="Gpu-Memory"
                                        class="w-16 py-2">
                                    <p>{{ $high_on_demand->gpu_memory }}</p>
                                </div>
                                <div class="flex items-center flex-col">
                                    <h4 class="font-bold text-lg">vCPU</h4>
                                    <img src="{{ asset('web/images/home/vcpu.webp') }}" alt="vCPU"
                                        class="w-16 py-2">
                                    <p>{{ $high_on_demand->vcpu }}</p>
                                </div>
                                <div class="flex items-center flex-col">
                                    <h4 class="font-bold text-lg">RAM</h4>
                                    <img src="{{ asset('web/images/home/ram.webp') }}" alt="RAM" class="w-16 py-2">
                                    <p>{{ $high_on_demand->ram }}</p>
                                </div>

                                <div class="flex items-center flex-col">
                                    <h4 class="font-bold text-lg">Storage</h4>
                                    <img src="{{ asset('web/images/home/storage.webp') }}" alt="Storage"
                                        class="w-16 py-2">
                                    <p>{{ $high_on_demand->ssd_storage }}</p>
                                </div>
                            </div>

                            {{-- <p class="font-bold text-center text-lg">{{ $high_on_demand->plan }}</p> --}}

                            <p class="font-bold text-center text-3xl">&#8377;11,0000/Month</p>
                            {{-- <p class="font-bold text-center text-3xl">{{ config('app.currency.symbol') . number_format($high_on_demand->pi_monthly_mrc, 2) }}</p> --}}
                            <div class="space-x-12 text-center pb-5">
                                <a href="https://picloud.ai/public/gpucloud" class="btn-primary-md">Buy Now</a>
                            </div>
                        </figure>
                    </div>
                    {{-- </form> --}}
                </fieldset>
            </div>
        </section>
        {{-- High On Demand (End) --}}

        {{-- Pricing Section (Start) --}}
        <section>
            <div class="container">
                <div class="flex items-center justify-center space-x-5" data-aos="fade-up" data-aos-duration="1500">
                    <hr class="w-full border-2 border-gray-400">
                    <h2 class="whitespace-nowrap font-bold lg:text-4xl md:text-3xl sm:text-3xl">Public Cloud</h2>
                    <hr class="w-full border-2 border-gray-400">
                </div>
            </div>
        </section>
        <section class="bg-web-complement mt-10">
            <div class="container py-5">

                <div class="flex lg:flex-row md:flex-row sm:flex-col gap-6 items-center lg:w-10/12 md:w-full sm:w-full mx-auto"
                    data-aos="fade-up" data-aos-duration="1500">
                    <div>
                        <h3 class="font-bold text-web-ascent-1 text-3xl">If you are looking for</h3>
                    </div>
                    <div class="flex gap-5">
                        <img src="{{ asset('web/images/pricing/oracle.webp') }}" alt="oracle" class="h-20 w-auto">
                        <img src="{{ asset('web/images/pricing/azure.webp') }}" alt="azure" class="h-20 w-auto">
                        <img src="{{ asset('web/images/pricing/aws.webp') }}" alt="aws" class="h-20 w-auto">
                        <img src="{{ asset('web/images/pricing/google.webp') }}" alt="google" class="h-20 w-auto">
                    </div>
                </div>

            </div>
        </section>
        <section class="mt-10">
            <div class="container text-center" data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('web.view.contact') }}" class="btn-primary-md">Submit Your Request</a>
            </div>
        </section>
        {{-- Pricing Section (End) --}}

        {{-- Pricing Section (Start) --}}
        <section>

            <div class="container py-20 space-y-20">

                <div class="flex items-center justify-center space-x-5" data-aos="fade-up" data-aos-duration="1500">
                    <hr class="w-full border-2 border-gray-400">
                    <h2 class="whitespace-nowrap font-bold lg:text-4xl md:text-3xl sm:text-3xl">Private Cloud</h2>
                    <hr class="w-full border-2 border-gray-400">
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 gap-5" data-aos="fade-up"
                    data-aos-duration="1500">

                    <figure class="text-center space-y-4">
                        <h3 class="font-bold text-7xl text-web-ascent-1">
                            <span class="counter">14800</span>+
                        </h3>
                        <div class="space-y-2">
                            <p class="font-semibold text-2xl">Mission Critical Workloads</p>
                            <p class="font-normal text-sm">Hosted on Pi Cloud, across three Availability Zones in India</p>
                        </div>
                    </figure>

                    <figure class="text-center space-y-4">
                        <h3 class="font-bold text-7xl text-web-ascent-1">
                            <span class="counter">20</span>+
                        </h3>
                        <div class="space-y-2">
                            <p class="font-semibold text-2xl">Banks & NBFCs</p>
                            <p class="font-normal text-sm">Develop, deploy workloads on Pi Cloud in a complaint environment
                            </p>
                        </div>
                    </figure>

                    <figure class="text-center space-y-4">
                        <h3 class="font-bold text-7xl text-web-ascent-1">
                            <span class="counter">4</span>
                        </h3>
                        <div class="space-y-2">
                            <p class="font-semibold text-2xl">Payment Gateways</p>
                            <p class="font-normal text-sm">Are processing thousands of transactions every second on Pi
                                Cloud</p>
                        </div>
                    </figure>

                    <figure class="text-center space-y-4">
                        <h3 class="font-bold text-7xl text-web-ascent-1">
                            <span class="counter">4</span>
                        </h3>
                        <div class="space-y-2">
                            <p class="font-semibold text-2xl">Smart Cities</p>
                            <p class="font-normal text-sm">With integrated IT, IoT and data on Pi Cloud, delivering
                                operational and service efficiency to citizens</p>
                        </div>
                    </figure>

                    <figure class="text-center space-y-4">
                        <h3 class="font-bold text-7xl text-web-ascent-1">
                            <span class="counter">5</span>
                        </h3>
                        <div class="space-y-2">
                            <p class="font-semibold text-2xl">A-listed Indian Universities</p>
                            <p class="font-normal text-sm">Leveraging Pi Cloud to deliver enhanced digital learning
                                experience</p>
                        </div>
                    </figure>

                    <figure class="text-center space-y-4">
                        <h3 class="font-bold text-7xl text-web-ascent-1">
                            <span class="counter">30</span>%
                        </h3>
                        <div class="space-y-2" id="servers">
                            <p class="font-semibold text-2xl">TCO Optimal</p>
                            <p class="font-normal text-sm">Compared to any major cloud service provider across the globe
                            </p>
                        </div>
                    </figure>

                </div>

            </div>
        </section>
        {{-- Pricing Section (End) --}}

        {{-- Pricing Section (Start) --}}
        <section>

            <div class="container" data-aos="fade-up" data-aos-duration="1500">
                <div class="flex gap-3 items-center justify-center w-fit mx-auto p-2 bg-web-complement rounded-lg">
                    <a href="{{ route('web.view.pricing') }}#servers"
                        class="bg-white px-5 py-3 rounded-lg text-lg font-medium text-web-ascent-1">Cloud Servers</a>
                    <a href="{{ route('web.view.pricing.cloud.storage') }}#servers"
                        class="bg-web-ascent-1 px-5 py-3 rounded-lg text-lg font-medium text-white">Cloud Storage</a>
                </div>
            </div>

            <div class="container pb-10 space-y-10" data-aos="fade-up" data-aos-duration="1500">

                <input type="hidden" name="item_type" value="{{ \App\Enums\OrderItemType::CLOUD_STORAGE->value }}">

                <div class="flex flex-col gap-5 lg:w-8/12 md:w-full mx-auto" data-aos="fade-up" data-aos-duration="1500">

                    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-5" data-aos="fade-up"
                        data-aos-duration="1500">

                        <div class="lg:col-span-2 md:col-span-3 sm:col-span-1"></div>

                        <div class="flex flex-col items-center justify-center">
                            <div id="disk_space" class="dailers"></div>
                            <div class="relative z-10 -mt-10 text-center">
                                <label for="cpu_cors" class="input-label">Disk Space (GB)</label>
                                <p class="text-sm text-gray-600">Move needles to select disk space</p>
                            </div>
                        </div>

                        <div class="flex flex-col items-center justify-center">
                            <div id="data_transfer" class="dailers"></div>
                            <div class="relative z-10 -mt-10 text-center">
                                <label for="cpu_cors" class="input-label">Data Transfer (GB)</label>
                                <p class="text-sm text-gray-600">Move needles to select data transfer</p>
                            </div>
                        </div>

                        <div class="lg:col-span-2 md:col-span-3 sm:col-span-1"></div>

                        {{-- Disk Space --}}
                        {{-- <div class="input-group">
                    <label for="disk_space" class="input-label">Disk Space</label>
                    <select onchange="calculateCloudStorageCost()" name="disk_space" id="disk_space"
                        class="input-box-md @error('disk_space') input-invalid @enderror">
                        @foreach (json_decode($pricing->disk_space) as $item)
                            <option @selected(old('disk_space') == $item->name) value="{{ $item->name }}"
                                data-value="{{ $item->value }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('disk_space')
                        <span class="input-error">{{ $message }}</span>
                    @enderror
                </div> --}}

                        {{-- Data Transfer --}}
                        {{-- <div class="input-group">
                    <label for="data_transfer" class="input-label">Data Transfer</label>
                    <select onchange="calculateCloudStorageCost()" name="data_transfer" id="data_transfer"
                        class="input-box-md @error('data_transfer') input-invalid @enderror">
                        @foreach (json_decode($pricing->data_transfer) as $item)
                            <option @selected(old('data_transfer') == $item->name) value="{{ $item->name }}"
                                data-value="{{ $item->value }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('data_transfer')
                        <span class="input-error">{{ $message }}</span>
                    @enderror
                </div> --}}

                        {{-- Storage Type --}}
                        <div class="input-group">
                            <label for="storage_type" class="input-label">Storage Type</label>
                            <select onchange="calculateCloudServerCost()" name="storage_type" id="storage_type"
                                class="input-box-md @error('storage_type') input-invalid @enderror">
                                <option value="" data-value="0">Select Storage Type</option>
                                @foreach (json_decode($pricing->storage_type) as $item)
                                    <option @selected(old('storage_type') == $item->name) value="{{ $item->name }}"
                                        data-value="{{ $item->value }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('storage_type')
                                <span class="input-error">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Dedicated Bandwidth --}}
                        <div class="input-group">
                            <label for="dedicated_bandwidth" class="input-label">Dedicated Bandwidth</label>
                            <select onchange="calculateCloudStorageCost()" name="dedicated_bandwidth"
                                id="dedicated_bandwidth"
                                class="input-box-md @error('dedicated_bandwidth') input-invalid @enderror">
                                @foreach (json_decode($pricing->dedicated_bandwidth) as $item)
                                    <option @selected(old('dedicated_bandwidth') == $item->name) value="{{ $item->name }}"
                                        data-value="{{ $item->value }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('dedicated_bandwidth')
                                <span class="input-error">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Divider --}}
                        <div class="lg:col-span-2 md:col-span-2 sm:col-span-1 pt-3">
                            <hr>
                        </div>

                        {{-- Payment Terms --}}
                        <div class="input-group">
                            <label for="payment_terms" class="input-label">Payment Terms</label>
                            <select onchange="calculateCloudStorageCost()" name="payment_terms" id="payment_terms"
                                class="input-box-md @error('payment_terms') input-invalid @enderror">
                                @foreach (json_decode($pricing->payment_terms) as $item)
                                    <option @selected(old('payment_terms') == $item->name) value="{{ $item->name }}"
                                        data-value="{{ $item->value }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('payment_terms')
                                <span class="input-error">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Contract Period --}}
                        <div class="input-group">
                            <label for="contract_period" class="input-label">Contract Period</label>
                            <select onchange="calculateCloudStorageCost()" name="contract_period" id="contract_period"
                                class="input-box-md @error('contract_period') input-invalid @enderror">
                                @foreach (json_decode($pricing->contract_period) as $item)
                                    <option @selected(old('contract_period') == $item->name) value="{{ $item->name }}"
                                        data-value="{{ $item->value }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('contract_period')
                                <span class="input-error">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    {{-- Order Summary --}}
                    @auth
                        @if (auth()->user()->email_verified_at)
                            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-5">
                                <div class="w-full flex flex-col space-y-3">
                                    <div>
                                        <button onclick="$('#pricing-popup').fadeIn()" type="button"
                                            class="btn-primary-md w-full flex items-center space-x-3 justify-center">
                                            <span>View Details</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>
                                    <div>
                                        <input type="hidden" name="gross_amount" id="gross_amount_input">
                                        <input type="hidden" name="convenience_amount" id="convenience_amount_input">
                                        <input type="hidden" name="gst_amount" id="gst_amount_input">
                                        <input type="hidden" name="total_amount" id="total_amount_input">
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="space-y-2">
                                <h1 class="font-semibold text-xl">Verify Your Email Address</h1>
                                <p class="text-sm text-gray-600">You need to verify your email address to check the pricing</p>
                                <div class="py-3">
                                    <a href="{{ route('web.handle.send.email.verification.link') }}"
                                        class="btn-primary-md flex items-center justify-center space-x-1 w-fit"><span>Send
                                            Verification Link
                                        </span><i data-feather="arrow-right" class="w-4 h-4"></i></a>
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="space-y-2">
                            <h1 class="font-semibold text-xl">Login to Check Pricing</h1>
                            <p class="text-sm text-gray-600">Please login to your account to check cloud servers pricing</p>
                            <div class="py-3">
                                <a href="{{ route('web.view.login') }}"
                                    class="btn-primary-md flex items-center justify-center space-x-1 w-fit"><span>Login Now
                                    </span><i data-feather="arrow-right" class="w-4 h-4"></i></a>
                            </div>
                        </div>
                    @endguest
        </section>
        {{-- Pricing Section (End) --}}

    </form>
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

        const disk_space_value = {!! $pricing->disk_space !!}

        const data_transfer_value = {!! $pricing->data_transfer !!}

        let disk_space = 0;

        let data_transfer = 0;

        const calculateCloudStorageCost = () => {

            // let disk_space = $('#disk_space').find(':selected').data('value');
            // let data_transfer = $('#data_transfer').find(':selected').data('value');
            let storage_type = $('#storage_type').find(':selected').data('value');
            let dedicated_bandwidth = $('#dedicated_bandwidth').find(':selected').data('value');
            let payment_terms = $('#payment_terms').find(':selected').data('value');
            let contract_period = $('#contract_period').find(':selected').data('value');

            $('#payment-terms-output').html($('#payment_terms').val());
            $('#contract-period-output').html("For " + $('#contract_period').val());

            const gst_percentage = parseInt(
                "{{ \App\Models\Setting::where('key', 'GST_PERCENTAG')->first()->value }}");
            const convenience_fees_percentage = parseInt(
                "{{ \App\Models\Setting::where('key', 'CONVENIENCE_FEES_PERCENTAGE')->first()->value }}");

            let total = 0;

            let otc = 0;

            let configuration1 = parseInt(dedicated_bandwidth) + parseInt(storage_type) + parseInt(disk_space) +
                parseInt(data_transfer);

            console.log(parseInt(storage_type));

            let mcr = configuration1;

            total += parseInt(mcr);

            total = total * parseInt(payment_terms);

            let convenience_fees = (total * convenience_fees_percentage) / 100;

            total += convenience_fees;

            let gst = (total * gst_percentage) / 100;

            total += gst;

            $('#mcr-output').html(mcr.toFixed(2));
            $('#convenience-output').html(convenience_fees.toFixed(2));
            $('#gst-output').html(gst.toFixed(2));
            $('#total-output').html(total.toFixed(2));

            $('#gross_amount_input').val(mcr.toFixed(2));
            $('#convenience_amount_input').val(convenience_fees.toFixed(2));
            $('#gst_amount_input').val(gst.toFixed(2));
            $('#total_amount_input').val(total.toFixed(2));
        }

        calculateCloudStorageCost();
    </script>
    <script>
        $(document).ready(function() {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });

            $("#disk_space").roundSlider({
                sliderType: "min-range",
                editableTooltip: false,
                radius: 105,
                width: 20,
                step: 50,
                min: {{ collect(json_decode($pricing->disk_space))->min('name') }},
                max: {{ collect(json_decode($pricing->disk_space))->max('name') }},
                startValue: {{ collect(json_decode($pricing->disk_space))->min('name') }},
                handleSize: 0,
                handleShape: "square",
                circleShape: "pie",
                startAngle: 315,
                change: function(args) {
                    disk_space_value.map((item) => {
                        if (parseInt(item.name) === args.value) {
                            disk_space = item.value;
                            calculateCloudStorageCost();
                        }
                    });
                }
            });

            $("#data_transfer").roundSlider({
                sliderType: "min-range",
                editableTooltip: false,
                radius: 105,
                width: 20,
                step: 50,
                min: {{ collect(json_decode($pricing->data_transfer))->min('name') }},
                max: {{ collect(json_decode($pricing->data_transfer))->max('name') }},
                startValue: {{ collect(json_decode($pricing->data_transfer))->min('name') }},
                handleSize: 0,
                handleShape: "square",
                circleShape: "pie",
                startAngle: 315,
                change: function(args) {
                    data_transfer_value.map((item) => {
                        if (parseInt(item.name) === args.value) {
                            data_transfer = item.value;
                            calculateCloudStorageCost();
                        }
                    });
                }
            });
        });
    </script>
@endsection
