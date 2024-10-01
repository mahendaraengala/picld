@extends('web.layouts.auth')

@section('web-section')
    <section class="py-6 border-b shadow-sm relative">
        <div class="container">
            <ul class="flex items-center justify-start space-x-3">
                {{-- <li><a href="{{ route('web.view.home') }}" class="link">Home</a></li> --}}
                <li><a href="{{ route('web.view.pi-ai-coe') }}" class="link">Home</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="{{ route('web.view.login') }}" class="link">Login</a></li>
            </ul>
        </div>
    </section>
    <section class="md:py-20 sm:py-0">
        <div class="container">

            <figure class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto">
                <form action="{{ route('web.handle.login') }}" method="POST"
                    class="md:px-10 sm:px-5 py-16 text-center space-y-5"
                    onsubmit="this.querySelector('button[type=submit]').setAttribute('disabled','disabled')">

                    <div>
                        <h1 class="font-semibold text-3xl mb-2">Welcome Back</h1>
                        <p class="text-xs text-slate-600 mb-6">Please fill the credentials to login</p>
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

                    <div class="flex flex-col">
                        <label for="password" class="input-label">Password</label>
                        <input type="password" name="password" id="password"
                            class="input-box-md @error('password') input-invalid @enderror"
                            placeholder="Enter Password (Bewteen 6 - 20 Letters)" required minlength="6" maxlength="20">
                        @error('password')
                            <span class="input-error" id="password-input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn-primary-md w-full"><i data-feather="key"
                                class="h-4 w-4 opacity-50 absolute mr-auto"></i>Signin</button>
                    </div>

                    <div class="space-y-3">
                        <p class="text-slate-600 text-xs">Dosen't have an account? <a
                                href="{{ route('web.view.register') }}"
                                class="font-medium text-xs text-web-ascent hover:text-web-ascent-dark">Register now</a></p>
                    </div>


                    <div>
                        <a href="{{ route('web.view.forgot.password') }}"
                            class="font-medium text-xs text-web-ascent hover:text-web-ascent-dark">Forgot password?</a>
                    </div>


                </form>
            </figure>


        </div>
    </section>
@endsection
