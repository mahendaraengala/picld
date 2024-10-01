@extends('web.layouts.auth')

@section('web-section')
    <section class="py-6 border-b shadow-sm relative">
        <div class="container">
            <ul class="flex items-center justify-start space-x-3">
                {{-- <li><a href="{{ route('web.view.home') }}" class="link">Home</a></li> --}}
                <li><a href="{{ route('web.view.pi-ai-coe') }}" class="link">Home</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="{{ route('web.view.forgot.password') }}" class="link">Forgot Password</a></li>
            </ul>
        </div>
    </section>
    <section class="md:py-20 sm:py-0">
        <div class="container">

            <figure class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto">
                <form action="{{ route('web.handle.forgot.password') }}" method="POST"
                    class="md:px-10 sm:px-5 py-16 text-center space-y-5"
                    onsubmit="this.querySelector('button[type=submit]').setAttribute('disabled','disabled')">

                    <div>
                        <h1 class="font-semibold text-3xl mb-2">Forgot Password</h1>
                        <p class="text-xs text-slate-600 mb-6">Enter your emaill address to get password reset link</p>
                        @csrf
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="input-label">Email Address</label>
                        <input type="text" name="email" value="{{ old('email') }}" id="email"
                            class="input-box-md @error('email') input-invalid @enderror" placeholder="Enter Email" required
                            minlength="7" maxlength="250">
                        @error('email')
                            <span class="input-error" id="email-input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn-primary-md w-full"><i data-feather="send"
                                class="h-4 w-4 opacity-50 absolute mr-auto"></i>Send Reset Link</button>
                    </div>

                    <div class="space-y-3">
                        <p class="text-slate-600 text-xs">Already have an account? <a href="{{ route('web.view.login') }}"
                                class="font-medium text-xs text-web-ascent hover:text-web-ascent-dark">Login now</a></p>
                    </div>

                </form>
            </figure>


        </div>
    </section>
@endsection
