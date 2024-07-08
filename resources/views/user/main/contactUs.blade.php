@extends('user.layout.master')

@section('title', 'Contact Us')

@section('content')

<div class="container-lg mt-5 " id="contactUs">
    <div class="row min-vh-100 align-items-center align-content-center">
        <div class="col-md-12">
            <h4 class="text-center" style="color:blueviolet">Contact Us</h4>
            <p class="mt-3 text-center">We would love to help make your dream wedding a reality. Whether you have questions about
                our services, want to schedule a consultation, or need assistance with planning, our team is here for
                you.</p>
            <div class="">

                @if (session('contactSuccess'))
                <div class="col-4 offset-8">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-check"></i> {{ session('contactSuccess') }}
                    </div>
                </div>
                @endif


                <div class="col-md-6 mt-5 align-items-center">
                    <form action="{{ route('user#contact') }}" method="POST" class="card p-5 bg_color">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Your Feedback</label>
                            <textarea name="feedback"  class="form-control @error('feedback') is-invalid @enderror" placeholder="Enter Your Feedback" id="exampleFormControlTextarea1" rows="3">{{ old('feedback') }}</textarea>
                            @error('feedback')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-secondary text-white navBtn">Send</button>
                    </form>
                </div>
                <div class="col-md-12 mt-5 d-flex justify-content-between">

                    <div class="">
                        <p><i class="fa-solid fa-map-location me-2"></i> Address - Taunggyi</p>
                        <p><i class="fa-solid fa-phone me-2"></i>Get In Touch - 09987654321</p>
                    </div>

                    <div class="">
                        <h5> Office Hours</h5>
                        <ul>
                            <li> Monday - Friday: 9:00 AM - 6:00 PM</li>
                            <li>Saturday: 10:00 AM - 4:00 PM</li>
                            <li> Sunday: By Appointment Only</li>
                        </ul>
                    </div>

                    <div class="">
                        <h5> Follow Us</h5>
                        <div class="d-flex">
                            <p class="w-50 fs-4 mx-3" style="color: blueviolet"><i class="fa-brands fa-facebook"></i></p>
                            <p class="w-50 fs-4 mx-3" style="color: blueviolet"><i class="fa-brands fa-instagram"></i></p>
                            <p class="w-50 fs-4 mx-3" style="color: blueviolet"><i class="fa-brands fa-x-twitter"></i></p>
                            <p class="w-50 fs-4 mx-3" style="color: blueviolet"><i class="fa-brands fa-telegram"></i></p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection


