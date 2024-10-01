@extends('web.layouts.app')

@section('web-head')
    <title>Resources | Pi Cloud</title>
@endsection

@section('web-section')
    {{-- Page Header Section (Start) --}}
    {{-- bg-cover bg-center b --}}
    <section class="bg-cover bg-center bg-no-repeat"
        style="background-image: linear-gradient(to right, rgba(4, 9, 30, 0.95) 12%, rgba(4, 9, 30, 0.2) 60%) ,url('/web/images/resources/whitepapers-banner.webp');">
        <div class="px-10 py-0">

            <div class="lg:pt-16 md:pt-28 sm:pt-7 pb-5 flex flex-col justify-center">

                <div class="lg:w-6/12 md:w-8/12 sm:w-full">
                    <div class="space-y-3 lg:text-left md:text-left sm:text-center">
                        <h1 class="lg:text-5xl md:text-4xl sm:text-3xl font-bold text-white py-1 px-2">Download Whitepaper
                        </h1>
                        {{-- <p class="text-gray-300 leading-loose font-medium lg:pr-[4.5rem] md:pr-0 sm:pr-0">Pi Cloud's
                            comprehensive repository of
                            whitepapers is where innovation meets insight. As technology continues to evolve at an
                            unprecedented pace, our platform serves as a beacon for the latest research, analysis, and
                            thought leadership in the realm of artificial intelligence. Stay ahead of the curve and make
                            informed decisions with these valuable resources at your fingertips. Our whitepapers cover a
                            wide range of topics to help you navigate the ever-changing landscape of technology and stay
                            competitive in the digital age. Journey into our virtual library and explore the potential of
                            AI-driven solutions, all at your fingertips.</p> --}}
                        <div class="pt-4 pb-5 px-2 space-x-3">
                            <a href="{{ route('web.view.contact') }}" class="btn-primary-md" target="_blank">Reach Us</a>
                            <a class="btn-primary-md cursor-pointer show_form">Download</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Page Header Section (End) --}}

    {{-- thank you popup starts --}}
    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto thank_popup"
        style="display: none;">
        <div class="container">
            <div
                class="md:rounded-lg md:shadow-lg bg-white lg:w-[400px] md:w-[450px] sm:w-full md:border mx-auto my-28 p-10 relative">
                <div
                    class="bg-web-ascent-1 w-fit mx-auto my-0 p-5 rounded-full shadow-[0px_0px_3px_rgba(0,0,0,0.8)] absolute -top-[12%] left-[40%]">
                    <span class="text-5xl cursor-pointer close_form text-white leading-[0.6]">&check;</span>
                </div>
                <div class="text-center py-12 space-x-4">
                    <h1 class="font-semibold text-3xl pb-4">Thank You!</h1>
                    <p class="font-light text-xl">Your details have been successfully submitted. Thanks!</p>
                </div>
                <div class="text-center">
                    <button type="button" onclick="$('.thank_popup').hide();" class="btn-primary-md w-full">Ok</button>
                </div>
            </div>
        </div>
    </section>
    {{-- thank you popup ends --}}

    {{-- popup starts --}}
    <section class="bg-[#000000c9] fixed top-0 left-0 right-0 w-full h-full z-[99] my-0 mx-auto popup-overlay popup_form"
        style="display: none;">
        <div class="container">
            <div class="md:rounded-lg md:shadow-lg bg-white md:w-[450px] sm:w-full md:border mx-auto my-16">
                <form action="{{ route('handle.brochure.form.enquiry') }}" method="POST"
                    class="md:px-10 sm:px-5 py-3 text-center space-y-3">

                    @csrf
                    <input type="hidden" name="form_subject" id="form_subject" value="Whitepapers From Enquiry" required>
                    <input type="hidden" name="download_file" id="download_file"
                        value="{{ asset('web/pdf/decoding-gpu.pdf') }}" required>

                    <div class="text-right">
                        <span class="text-3xl cursor-pointer close_form">&times;</span>
                    </div>
                    <div>
                        <h1 class="font-semibold text-3xl mb-2">Download Whitepaper</h1>
                    </div>

                    <div class="flex flex-col">
                        <label for="name" class="input-label">Name</label>
                        <input type="text" name="name" id="name" class="input-box-md" placeholder="Enter Name"
                            required minlength="1" maxlength="250">
                    </div>

                    <div class="flex flex-col">
                        <label for="phone" class="input-label">Mobile</label>
                        <input type="tel" pattern="[0-9]{10}" name="phone" id="phone" class="input-box-md"
                            placeholder="Enter Phone" required minlength="10" maxlength="10">
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="input-label">Email</label>
                        <input type="email" name="email" id="email" class="input-box-md" placeholder="Enter Email"
                            required min="1" maxlength="250">
                    </div>

                    <div class="flex flex-col">
                        <label for="company" class="input-label">Company</label>
                        <input type="text" name="message" id="company" class="input-box-md" placeholder="Enter company"
                            required min="1" maxlength="250">
                    </div>

                    {{-- <div class="flex flex-col">
                        <label for="message" class="input-label">Message</label>
                        <textarea name="message" id="message" rows="3" class="input-box-md" placeholder="Message" required
                            minlength="1" maxlength="500"></textarea>
                    </div> --}}

                    <div class="flex items-center">
                        <input type="checkbox" name="checkbox" id="checkbox" class="brochure_check" required>
                        <label>I Agree with The <a href="{{ route('view.policy') }}" target="_blank"
                                class="text-red-600">Terms and Conditions</a></label>
                    </div>

                    {{-- <div>
                        <div class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_CLIENT_KEY')}}"></div>
                    </div> --}}

                    <div>
                        <button type="submit" class="btn-primary-md w-full">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- popup Ends --}}

    {{-- paper-1 starts --}}
    <section class="py-10 scroll-mt-24" id="decoding-gpu-whitepaper">
        <div class="container">
            <div class="text-center bg-[#223f970d] p-5 rounded-2xl w-fit mx-auto">
                <img src="{{ asset('web/images/resources/decoding-gpu.webp') }}" alt="decoding-gpu-global-shortage"
                    class="w-96 mx-auto my-0 border-4 border-[#00000047] rounded-xl">
                <div class="pt-10 pb-5 px-2 space-x-3">
                    <a class="btn-primary-md cursor-pointer show_form">Download Whitepaper</a>
                </div>
            </div>
        </div>
    </section>
    {{-- paper-1 ends --}}
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

            $('.show_form').click(function() {
                $('.popup_form').show()
            });
            $('.close_form').click(function() {
                $('.popup_form').hide()
            });
        });

        const handleFormSubmit = (event) => {
            event.preventDefault();

            const form = new FormData(event.target);

            const formData = {
                _token: "{{ csrf_token() }}",
                name: form.get('name'),
                phone: form.get('phone'),
                email: form.get('email'),
                message: form.get('message'),
                form_subject: form.get('form_subject'),
                download_file: form.get('download_file')
            };

            fetch("{{ route('handle.whitepapers.form.enquiry') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(formData),
                })
                .then(response => {
                    return response.json();
                })
                .then(data => {
                    event.target.reset();
                    $('.popup_form').hide();
                    $('.thank_popup').show();
                    window.open(formData.download_file, '_blank');
                })
                .catch(error => {
                    console.error(error);
                });
        }
    </script>
@endsection
