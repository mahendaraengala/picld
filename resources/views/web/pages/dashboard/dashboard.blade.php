@extends('web.layouts.auth')

@section('web-section')
    <section class="py-6 border-b shadow-sm relative bg-white lg:px-0 sm:px-7">
        <div class="lg:container">
            <ul class="flex items-center justify-start space-x-3">
                {{-- <li><a href="{{ route('web.view.home') }}" class="link">Home</a></li> --}}
                <li><a href="{{ route('web.view.pi-ai-coe') }}" class="link">Home</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="{{ route('web.view.dashboard') }}" class="link">Dashboard</a></li>
            </ul>
        </div>
    </section>

    <section class="relative">
        <div class="lg:container lg:py-20">
            <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-10">
                <div class="md:col-span-3 md:block sm:hidden">
                    @include('web.components.dashboard-sidebar')
                </div>
                <div class="md:col-span-9 md:space-y-10 sm:space-y-5">

                    {{-- Dashboard Content (Start) --}}
                    <figure class="bg-white lg:shadow-lg lg:rounded-lg overflow-clip relative lg:border">

                        <div class="lg:p-10 sm:p-7 relative lg:space-y-10 sm:space-y-2">
                            <div class="flex lg:flex-row sm:flex-col lg:items-center justify-start gap-5">
                                <div class="lg:w-[120px] sm:w-full">
                                    <img src="{{ asset('storage/' . auth()->user()->profile_image) }}" alt="profile-img"
                                        class="lg:h-[100px] lg:w-[100px] sm:h-[100px] sm:w-[100px] rounded-full bg-white ring-4 ring-gray-300" />
                                </div>
                                <div
                                    class="flex lg:flex-row sm:flex-col items-start justify-between lg:w-full lg:space-y-0 sm:space-y-5">
                                    <div class="space-y-2">
                                        <h1 class="text-base font-semibold"> {{ auth()->user()->name }}</h1>
                                        <p class="text-gray-500 text-xs flex items-center"><i data-feather="mail"
                                                class="h-4 w-4 mr-1"></i> {{ auth()->user()->email }}</p>
                                        <p class="text-gray-500 text-xs flex items-center"><i data-feather="phone"
                                                class="h-4 w-4 mr-1"></i> {{ auth()->user()->phone }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <a href="{{ route('web.view.dashboard.setting') }}" class="btn-primary-sm">Edit
                                    Information</a>
                            </div>

                            @if (is_null(auth()->user()->email_verified_at))
                                <div>
                                    <a href="{{ route('web.handle.send.email.verification.link') }}"
                                        class="btn-primary-sm">Verify Email</a>
                                </div>
                            @endif

                        </div>
                    </figure>
                    {{-- Dashboard Content (End) --}}

                </div>
            </div>
        </div>
    </section>
@endsection

@section('web-script')
    <script>
        document.getElementById('dashboard-tab').classList.add('active');
    </script>
@endsection
