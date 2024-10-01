@extends('web.layouts.auth')

@section('web-section')
    <section class="py-6 border-b shadow-sm relative bg-white lg:px-0 sm:px-7">
        <div class="lg:container">
            <ul class="flex items-center justify-start space-x-3">
                {{-- <li><a href="{{ route('web.view.home') }}" class="link">Home</a></li> --}}
                <li><a href="{{ route('web.view.pi-ai-coe') }}" class="link">Home</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="{{ route('web.view.dashboard') }}" class="link">Dashboard</a></li>
                <li><i data-feather="chevron-right" class="h-4 w-4 text-gray-700"></i></li>
                <li><a href="{{ route('web.view.dashboard.setting') }}" class="link">Setting</a></li>
            </ul>
        </div>
    </section>

    <section class="relative">
        <div class="lg:container lg:py-20">
            <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-10">
                <div class="md:col-span-3 md:block sm:hidden">
                    @include('web.components.dashboard-sidebar')
                </div>
                <div class="md:col-span-9 md:space-y-10">

                    {{-- Dashboard Content (Start) --}}
                    <form class="bg-white lg:shadow-lg lg:rounded-lg overflow-clip relative lg:border sm:border-b"
                        action="{{ route('web.handle.update.account.information') }}" method="POST"
                        enctype="multipart/form-data">
                        <div class="p-5 border-b">
                            <h1 class="font-semibold mb-1">General Information</h1>
                            <p class="text-xs text-gray-500">Manage your account general information</p>
                            @csrf
                        </div>
                        <div class="p-5 lg:border-b">
                            <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-5">

                                {{-- Profile --}}
                                <div class="md:col-span-3 sm:col-span-1">
                                    <div class="flex items-center space-x-5">
                                        <img src="{{ is_null(auth()->user()->profile_image) ? asset('web/images/default-profile.png') : asset('storage/' . auth()->user()->profile_image) }}"
                                            id="profile" alt="profile" class="h-24 w-24 rounded-full border bg-white" />
                                        <div class="input-group">
                                            <label for="profile_image" class="input-label">Profile</label>
                                            <button type="button" onclick="$('input[name=profile_image]').click()"
                                                class="btn-primary-sm">Select Image</button>
                                            <input hidden type="file" accept="image/jpeg, image/jpg, image/png"
                                                class="input-box-sm" name="profile_image"
                                                onchange="handleProfilePreview(event)">
                                            @error('profile_image')
                                                <span class="input-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- Name --}}
                                <div class="flex flex-col">
                                    <label for="name" class="input-label">Name</label>
                                    <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}"
                                        id="name" class="input-box-md @error('name') input-invalid @enderror"
                                        placeholder="Enter Name" required minlength="1" maxlength="250">
                                    @error('name')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="flex flex-col">
                                    <label for="email" class="input-label">Email Address</label>
                                    <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                                        id="email" class="input-box-md @error('email') input-invalid @enderror"
                                        placeholder="Enter Email Address" required minlength="1" maxlength="250">
                                    @error('email')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Phone --}}
                                <div class="flex flex-col">
                                    <label for="phone" class="input-label">Phone</label>
                                    <input type="tel" name="phone" value="{{ old('phone', auth()->user()->phone) }}"
                                        id="phone" class="input-box-md @error('phone') input-invalid @enderror"
                                        placeholder="Enter Phone" required minlength="10" maxlength="10">
                                    @error('phone')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Date of Birth --}}
                                <div class="flex flex-col">
                                    <label for="date_of_birth" class="input-label">Date of Birth</label>
                                    <input type="date" name="date_of_birth"
                                        value="{{ old('date_of_birth', auth()->user()->date_of_birth) }}"
                                        class="input-box-md @error('date_of_birth') input-invalid @enderror"
                                        max="{{ date('Y-m-d') }}">
                                    @error('date_of_birth')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Gender --}}
                                <div class="flex flex-col">
                                    <label for="gender" class="input-label">Gender</label>
                                    <div class="space-x-3 flex mt-2">

                                        @foreach (\App\Enums\Gender::cases() as $gender)
                                            <div class="input-radio">
                                                <input type="radio" value="{{ $gender->value }}"
                                                    @checked(old('gender', auth()->user()->gender) == $gender->value) name="gender"
                                                    id="gender_{{ $gender->value }}" required>
                                                <label for="gender_{{ $gender->value }}">{{ $gender->label() }}</label>
                                            </div>
                                        @endforeach

                                    </div>
                                    @error('gender')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Account Password --}}
                                <div class="flex flex-col">
                                    <label for="account_password" class="input-label">Account password</label>
                                    <input type="password" name="account_password"
                                        class="input-box-md @error('account_password') input-invalid @enderror"
                                        placeholder="Enter password" required>
                                    @error('account_password')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                        </div>
                        <div class="lg:p-7 sm:p-7 sm:pt-0">
                            <button type="submit" class="btn-primary-md lg:w-fit sm:w-full">Save Changes</button>
                        </div>
                    </form>
                    {{-- Dashboard Content (End) --}}

                    {{-- Dashboard Content (Start) --}}
                    <form class="bg-white lg:shadow-lg lg:rounded-lg overflow-clip relative lg:border sm:border-b"
                        action="{{ route('web.handle.update.account.password') }}" method="POST">
                        <div class="p-5 border-b">
                            <h1 class="font-semibold mb-1">Update Passwpord</h1>
                            <p class="text-xs text-gray-500">Update your account password</p>
                            @csrf
                        </div>
                        <div class="p-5 lg:border-b">
                            <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-5">

                                <div class="hidden">
                                    @csrf
                                </div>

                                {{-- Current password --}}
                                <div class="input-group">
                                    <label for="current_password" class="input-label">Current password</label>
                                    <input type="password" name="current_password"
                                        class="input-box-md @error('current_password') input-invalid @enderror"
                                        placeholder="Enter password" required>
                                    @error('current_password')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- New password --}}
                                <div class="input-group">
                                    <label for="password" class="input-label">New password</label>
                                    <input type="password" name="password"
                                        class="input-box-md @error('password') input-invalid @enderror"
                                        placeholder="Enter password" required>
                                    @error('password')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Confirm password --}}
                                <div class="input-group">
                                    <label for="password_confirmation" class="input-label">Confirm password</label>
                                    <input type="password" name="password_confirmation"
                                        class="input-box-md @error('password_confirmation') input-invalid @enderror"
                                        placeholder="Repeat password" required>
                                    @error('password_confirmation')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="lg:p-5 sm:p-5 sm:pt-0">
                            <button type="submit" class="btn-primary-md lg:w-fit sm:w-full">Update Password</button>
                        </div>
                    </form>
                    {{-- Dashboard Content (End) --}}

                </div>
            </div>
        </div>
    </section>
@endsection

@section('web-script')
    <script>
        document.getElementById('setting-tab').classList.add('active');
        const handleProfilePreview = (event) => {
            if (event.target.files.length == 0) {
                document.getElementById('profile').src =
                    "{{ is_null(auth()->user()->profile_image) ? asset('web/images/default-profile.png') : asset('storage/' . auth()->user()->profile_image) }}";
            } else {
                document.getElementById('profile').src = URL.createObjectURL(event.target.files[0])
            }
        }
    </script>
@endsection
