@extends('web.layouts.auth')

@section('web-section')
    <section class="py-6 border-b shadow-sm relative">
        <div class="container">
            <ul class="flex items-center justify-start space-x-3">
                {{-- <li><a href="{{ route('web.view.home') }}" class="link">Home</a></li> --}}
                <li><a href="{{ route('web.view.pi-ai-coe') }}" class="link">Home</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="javascript:void(0);" class="link">Reset Password</a></li>
            </ul>
        </div>
    </section>
    <section class="md:py-20 sm:py-0">
        <div class="container">

            <figure class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto">
                <form action="{{ route('web.handle.reset.password', ['token' => $token]) }}" method="POST"
                    class="md:px-10 sm:px-5 py-16 text-center space-y-5"
                    onsubmit="this.querySelector('button[type=submit]').setAttribute('disabled','disabled')">

                    <div>
                        <h1 class="font-semibold text-3xl mb-2">Reset Password</h1>
                        <p class="text-xs text-slate-600 mb-6">Enter your emaill address to get password reset link</p>
                        @csrf
                    </div>

                    <div hidden>
                        <label for="email" class="input-label">Email Address <em>*</em></label>
                        <input type="email" readonly name="email" value="{{ old('email', $email) }}"
                            class="input-box-md @error('email') input-invalid @enderror" placeholder="Enter Email Address"
                            required minlength="10" maxlength="100">
                        @error('email')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="password" class="input-label">Password <em>*</em></label>
                        <input type="password" name="password"
                            class="input-box-md @error('password') input-invalid @enderror" placeholder="Enter Password"
                            required minlength="6" maxlength="20">
                        @error('password')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="password" class="input-label">Confirm Password <em>*</em></label>
                        <input type="password" name="password_confirmation"
                            class="input-box-md @error('password_confirmation') input-invalid @enderror"
                            placeholder="Repeat Password" required minlength="6" maxlength="20">
                        @error('password_confirmation')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn-primary-md w-full"><i data-feather="key"
                                class="h-4 w-4 opacity-50 absolute mr-auto"></i>Reset Password</button>
                    </div>

                </form>
            </figure>


        </div>
    </section>
@endsection
