@extends('web.layouts.auth')

@section('web-section')
    <section class="py-6 border-b shadow-sm relative bg-white lg:px-0 sm:px-7">
        <div class="lg:container">
            <ul class="flex items-center justify-start space-x-3">
                <li><a href="{{ route('web.view.home') }}" class="link">Home</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="{{ route('web.view.pricing') }}" class="link">Pricing</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="{{ route('web.view.checkout') }}" class="link">Checkout</a></li>
            </ul>
        </div>
    </section>

    <section class="relative">
        <div class="container lg:py-20 sm:py-10">
            <form action="{{route('web.handle.checkout')}}" method="POST" class="grid lg:grid-cols-8 md:grid-cols-6 sm:grid-cols-1 lg:gap-20 sm:gap-10">
                @csrf
                <div class="lg:col-span-5 md:col-span-4 sm:col-span-1 space-y-10">
                    <div>
                        <div class="text-left">
                            <h1 class="text-xl font-semibold">General Information</h1>
                        </div>
                        <hr class="my-3">
                        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-5">

                            {{-- Name --}}
                            <div class="input-group">
                                <label for="name" class="input-label">Name</label>
                                <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}"
                                    id="name" class="input-box-md @error('name') input-invalid @enderror"
                                    placeholder="Enter Name" required minlength="1" maxlength="250">
                                @error('name')
                                    <span class="input-error">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="input-group">
                                <label for="email" class="input-label">Email Address</label>
                                <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                                    id="email" class="input-box-md @error('email') input-invalid @enderror"
                                    placeholder="Enter Email Address" required minlength="1" maxlength="250">
                                @error('email')
                                    <span class="input-error">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Phone --}}
                            <div class="input-group">
                                <label for="phone" class="input-label">Phone</label>
                                <input type="tel" name="phone" pattern="[0-9]{10}" value="{{ old('phone', auth()->user()->phone) }}"
                                    id="phone" class="input-box-md @error('phone') input-invalid @enderror"
                                    placeholder="Enter Phone" required minlength="10" maxlength="10">
                                @error('phone')
                                    <span class="input-error">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Company Name --}}
                            <div class="input-group">
                                <label for="company_name" class="input-label">Company Name</label>
                                <input type="text" name="company_name" value="{{ old('company_name') }}"
                                    id="company_name" class="input-box-md @error('company_name') input-invalid @enderror"
                                    placeholder="Enter Company Name" required minlength="1" maxlength="250">
                                @error('company_name')
                                    <span class="input-error">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Company Website --}}
                            <div class="input-group">
                                <label for="company_website" class="input-label">Company Website</label>
                                <input type="url" name="company_website" value="{{ old('company_website') }}"
                                    id="company_website" class="input-box-md @error('company_website') input-invalid @enderror"
                                    placeholder="Enter Company Website" required minlength="1" maxlength="250">
                                @error('company_website')
                                    <span class="input-error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <table>
                        <tr>
                            <td colspan="2" class="pb-3">
                                <div class="text-left">
                                    <h1 class="text-xl font-semibold">Server Configuration</h1>
                                </div>
                                <hr class="mt-3">
                            </td>
                        </tr>
                        @foreach ($configuration as $key => $item)
                        @php
                            $array = ['gross_amount','otc_amount','download_pdf', 'submit', 'convenience_amount','gst_amount','total_amount','item_type']
                        @endphp
                        @if (!in_array($key, $array))
                        <tr>
                            <td class="py-0.5 pr-3">
                                <p class="font-medium text-sm text-gray-600">{{ucwords(str_replace('_',' ',strtolower($key)))}}</p>
                            </td>
                            <td class="py-0.5 px-3">
                                <p class="font-medium text-sm">{{$item}}</p>
                            </td>
                        </tr>
                        @endif
                        
                        @endforeach
                    </table>
                </div>

                <div class="lg:col-span-3 md:col-span-2 sm:col-span-1">
                    <table class="w-full">
                        <tr>
                            <td colspan="2" class="pb-3">
                                <div class="text-left">
                                    <h1 class="text-xl font-semibold">Billing Summary</h1>
                                </div>
                                <hr class="mt-3">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left align-top pb-1">
                                <div class="space-y-0.5">
                                    <h1 class="text-base font-medium">{{request('payment_terms')}} Recuring Cost</h1>
                                    <p class="text-xs text-gray-500">For {{request('contract_period')}}</p>
                                </div>
                            </td>
                            <td class="text-right align-top pb-1">
                                <h1 class="text-lg font-semibold">{{config('app.currency.symbol') . number_format(request('gross_amount'),2)}}</h1>
                            </td>
                        </tr>
                        @if (request('otc_amount'))
                        <tr>
                            <td class="text-left align-top pb-1">
                                <div class="space-y-0.5">
                                    <h1 class="text-base font-medium">One Time Cost (OTC)</h1>
                                </div>
                            </td>
                            <td class="text-right align-top pb-1">
                                <h1 class="text-lg font-semibold">{{config('app.currency.symbol') . number_format(request('otc_amount'),2)}}</h1>
                            </td>
                        </tr>
                        @endif
                        
                        <tr>
                            <td class="text-left align-top py-1">
                                <div class="space-y-0.5">
                                    <h1 class="text-base font-medium">Convenience Fees</h1>
                                    <p class="text-xs text-gray-500">6% convenience will applicable</p>
                                </div>
                            </td>
                            <td class="text-right align-top py-1">
                                <h1 class="text-lg font-semibold">{{config('app.currency.symbol') . number_format(request('convenience_amount'),2)}}</h1>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left align-top py-1">
                                <div class="space-y-0.5">
                                    <h1 class="text-base font-medium">GST</h1>
                                    <p class="text-xs text-gray-500">18% GST will applicable</p>
                                </div>
                            </td>
                            <td class="text-right align-top py-1">
                                <h1 class="text-lg font-semibold">{{config('app.currency.symbol') . number_format(request('gst_amount'),2)}}</h1>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left align-top py-1">
                                <div class="space-y-0.5">
                                    <h1 class="text-lg font-bold">Total Amount</h1>
                                </div>
                            </td>
                            <td class="text-right align-top py-1">
                                <h1 class="text-lg font-bold">{{config('app.currency.symbol') . number_format(request('total_amount'),2)}}</h1>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="py-3">
                                <hr class="mb-5">
                                <div class="text-center space-y-5">
                                    <button type="submit" class="btn-primary-md w-full flex items-center justify-center space-x-2">
                                        <span>Checkout</span>
                                        <i data-feather="arrow-right" class="h-4 w-4"></i>
                                    </button>
                                    <p class="text-gray-500 text-xs">Note : You will redirect to payment gateway</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                    
                    <div>
                        <input type="hidden" name="item_type" value="{{request('item_type')}}" id="item_type_input" required>
                        <input type="hidden" name="configuration" value="{{json_encode($configuration)}}" required>
                        <input type="hidden" name="gross_amount" value="{{request('gross_amount')}}" id="gross_amount_input" required>
                        <input type="hidden" name="otc_amount" value="{{request('otc_amount')}}" id="otc_amount_input" required>
                        <input type="hidden" name="convenience_amount" value="{{request('convenience_amount')}}" id="convenience_amount_input" required>
                        <input type="hidden" name="gst_amount" value="{{request('gst_amount')}}" id="gst_amount_input" required>
                        <input type="hidden" name="total_amount" value="{{request('total_amount')}}" id="total_amount_input" required>
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection

@section('web-script')
    <script>
        
    </script>
@endsection