@extends('web.layouts.app')

@section('web-head')
    <title>Contact us | Pi Cloud</title>
@endsection

@section('web-section')
    <section>
        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
            <figure class="space-y-1 lg:px-20 md:px-16 sm:px-10 lg:pt-6 md:pt-28 sm:pt-6 lg:pb-10 md:pb-10 sm:pb-10">

                <div class="space-y-2">
                    <h1 class="lg:text-4xl md:text-4xl sm:text-3xl font-bold text-black">Send Us A Message</h1>
                    <p>Please use the form below to send us a message. We value your inquiries
                        and feedback and will respond promptly. Thank you for reaching out to us.</p>
                </div>

                <form class="space-y-4" method="POST" action="{{ route('handle.contact.enquiry.create') }}"
                    enctype="multipart/form-data" id="emailForm">
                    @csrf
                    <div class="input-group">
                        <label for="name" class="input-label">Your Name <em>*</em></label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="input-box-md @error('name') input-invalid @enderror" placeholder="Enter name" required>
                        @error('name')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="phone" class="input-label">Mobile <em>*</em></label>
                        <input type="tel" name="phone" value="{{ old('phone') }}"
                            class="input-box-md @error('phone') input-invalid @enderror" placeholder="Enter mobile"
                            required>
                        @error('phone')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="email" class="input-label">Work Email <em>*</em></label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="input-box-md @error('email') input-invalid @enderror" placeholder="Enter email" required>
                        <p id="error-message" class="text-red-600"></p>
                        @error('email')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="subject" class="input-label">Company / Website<em>*</em></label>
                        <input type="text" name="subject" value="{{ old('subject') }}"
                            class="input-box-md @error('subject') input-invalid @enderror"
                            placeholder="Enter Company Website" required>
                        @error('subject')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="message" class="input-label">Message <em>*</em></label>
                        <textarea name="message" class="input-box-md @error('message') input-invalid @enderror" rows="5"
                            placeholder="Write message">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="document" class="input-label">Upload Document <span>(Optional)</span></label>
                        <input type="file" name="document" value="{{ old('document') }}"
                            class="input-box-md @error('document') input-invalid @enderror">
                        @error('document')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" @checked(old('accept_terms')) name="accept_terms" id="accept_terms">
                        <label for="accept_terms" class="text-sm font-medium">I Accept <a
                                href="{{ route('view.policy') }}">Terms & Conditions</a></label>
                    </div>

                    <div>
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_CLIENT_KEY') }}"></div>
                    </div>

                    <div>
                        <button type="submit" class="btn-primary-md">Send Message</button>
                    </div>
                </form>

            </figure>
            <figure
                class="space-y-10 lg:px-20 md:px-16 sm:px-10 lg:pt-6 md:pt-28 sm:pt-8 lg:pb-10 md:pb-10 sm:pb-8 bg-cover bg-center bg-no-repeat sm:mb-9"
                style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('/web/images/contact/contact-cover-bg.webp')">

                <div class="space-y-2">
                    <h1 class="lg:text-4xl md:text-4xl sm:text-3xl font-bold text-white">Contact Us</h1>
                    {{-- <p class="text-gray-200 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur,
                        reprehenderit saepe vel exercitationem maxime numquam quo repellat modi praesentium labore corporis
                        blanditiis aliquam. Repellat, dolore numquam repellendus facilis dicta autem?</p> --}}
                </div>

                <div class="space-y-7">
                    <div class="space-y-1">
                        {{-- <h2 class="font-bold text-2xl text-white">Address</h2> --}}
                        <div class="lg:flex md:block sm:block justify-between">
                            <p class="text-gray-200 font-medium"><b>US (HQ)</b><br>
                                Pi Cloud Technologies Inc. <br>691 S Milpitas Blvd, Ste 217 <br>Milpitas, CA 95035
                            </p><br>
                            {{-- <p class="text-gray-200 font-medium"><br class="lg:block md:hidden sm:hidden">Pi Cloud
                                Technologies Inc. <br> 24 Point of Woods Drive,<br> Monmouth Junction, NJ 08852
                            </p> --}}
                            <p class="text-gray-200 font-medium"><br class="lg:block md:hidden sm:hidden">Eagleview
                                Corporate Center, <br> 600 Eagleview Blvd, Suite 314,<br> Exton, PA 19341, Pennsylvania
                            </p>
                        </div>
                        <br>
                        <p class="text-gray-200 font-medium"><b>India (HQ)</b><br>
                            Pi DataCenters Pvt. Ltd.<br> 12th Floor,
                            Vijaya Krishna Towers,<br>
                            Besides Fairfield by Marriott,<br>
                            Financial District, Gachibowli,<br>
                            Hyderabad, Telangana 500032</p>
                    </div>
                    <div class="space-y-1">
                        <h2 class="font-bold text-2xl text-white">Phone</h2>
                        <p class="text-gray-200 font-medium">+91 8712630334</p>
                    </div>
                    <div class="space-y-1">
                        <h2 class="font-bold text-2xl text-white">Email Address</h2>
                        <p class="text-gray-200 font-medium">reachus@picloud.ai</p>
                    </div>
                    <div>
                        <button class="btn-primary-md flex items-center justify-center space-x-2 ring-4 ring-white">
                            <img src="{{ asset('web/images/icons/whatsapp.png') }}" alt="whatsapp" class="h-6 w-6">
                            <a href="https://api.whatsapp.com/send?phone=+918712630334&text=Hi, I need more information on Pi Cloud services"
                                target="_blank"><span>Chat
                                    With Us</span></a>
                        </button>
                    </div>
                </div>

            </figure>
        </div>
    </section>
@endsection

@section('web-script')
    <script>
        document.getElementById('desktop-header').classList.add('active');
    </script>
    <script>
        document.getElementById('emailForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var email = document.getElementById('email').value;
            var errorMessage = document.getElementById('error-message');

            // List of domains to disallow
            var disallowedDomains = ['gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com'];

            // Extract domain from email
            var domain = email.substring(email.lastIndexOf("@") + 1);

            // Check if domain is in the disallowed list
            if (disallowedDomains.includes(domain)) {

                errorMessage.textContent = 'Email domain not allowed.';
                return false;
            } else {
                document.getElementById("emailForm").submit();
            }


            errorMessage.textContent = '';
            // alert('Email is valid and allowed.');
        });
    </script>
@endsection
