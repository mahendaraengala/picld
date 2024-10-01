@extends('web.layouts.auth')

@section('web-section')
    <section class="py-6 border-b shadow-sm relative">
        <div class="container">
            <ul class="flex items-center justify-start space-x-3">
                {{-- <li><a href="{{ route('web.view.home') }}" class="link">Home</a></li> --}}
                <li><a href="{{ route('web.view.pi-ai-coe') }}" class="link">Home</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="{{ route('web.view.register') }}" class="link">Register</a></li>
            </ul>
        </div>
    </section>
    <section class="md:py-20 sm:py-0">
        <div class="container">

            <figure class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto">
                <form action="{{ route('web.handle.register') }}" method="POST"
                    class="md:px-10 sm:px-5 py-16 text-center space-y-5"
                    onsubmit="this.querySelector('button[type=submit]').setAttribute('disabled','disabled')">

                    <div>
                        <h1 class="font-semibold text-3xl mb-2">Register now</h1>
                        <p class="text-xs text-slate-600 mb-6">Please fill the correct information</p>
                        @csrf
                    </div>

                    <div class="flex flex-col">
                        <label for="name" class="input-label">Your Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" id="name"
                            class="input-box-md @error('name') input-invalid @enderror" placeholder="Enter Name" required
                            minlength="3" maxlength="250">
                        @error('name')
                            <span class="input-error" id="name-input-error">{{ $message }}</span>
                        @enderror
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
                        <label for="phone" class="input-label">Phone</label>
                        <input type="tel" pattern="[0-9]{10}" name="phone" value="{{ old('phone') }}" id="phone"
                            class="input-box-md @error('phone') input-invalid @enderror"
                            placeholder="Enter Phone (10 Digits)" required minlength="10" maxlength="10">
                        @error('phone')
                            <span class="input-error" id="phone-input-error">{{ $message }}</span>
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

                    <div class="flex flex-col">
                        <label for="password_confirmation" class="input-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="input-box-md @error('password_confirmation') input-invalid @enderror"
                            placeholder="Repeat Password" required minlength="6" maxlength="20">
                        @error('password_confirmation')
                            <span class="input-error" id="password-input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn-primary-md w-full"><i data-feather="key"
                                class="h-4 w-4 opacity-50 absolute mr-auto"></i>Signup</button>
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
