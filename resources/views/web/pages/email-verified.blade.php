@extends('web.layouts.app')

@section('web-head')
    <title>About us | Pi Cloud</title>
@endsection

@section('web-section')
    
    {{-- Section (Start) --}}
    <section>
        <div class="container pt-40 pb-32">
            
            <div class="mt-16 text-center space-y-2">
                <h1 class="font-semibold text-3xl flex items-center justify-center space-x-2"><span>Email Verified</span> <i data-feather="check-circle" class="stroke-[4px] stroke-green-500"></i></h1>
                <p>Your Email Address is successfullly verified now you can check the pricing.</p>
                <br>
                <a class="btn-primary-sm" href="{{route('web.view.pricing')}}">Back to Pricing</a>
            </div>

        </div>
    </section>
    {{-- Section (End) --}}

@endsection
