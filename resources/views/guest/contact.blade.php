@extends('layouts.welcome')

@section('title', 'contact')

@section('content')

<!-- Contact Section -->
<section id="contact" class="contact section"> 

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Contact</h2>
        <p>Please write a feedback or you can contact our studio</p>
    </div> 
    <!-- End Section Title -->

    <div class="container position-relative">
        <div class="row gy-4">
            <!-- Left Column: Contact Form -->
            <div class="col-lg-5">
                <div class="info-item d-flex">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Address</h3>
                        <p>Rainbow Street, Nay Pyi Taw, 23/22 A1</p>
                    </div>
                </div> 

                <div class="info-item d-flex">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+95 925003456</p>
                    </div>
                </div>

                <div class="info-item d-flex">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>wonderland@work.com</p>
                    </div>
                </div>
            </div>
            <!-- End Left Column -->

            <!-- Right Column: Address -->
            <div class="col-lg-7">
                @if (session('contactSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-check"></i> {{ session('contactSuccess') }}
                    </div>
                @endif

                <!-- Contact Form -->
                <form action="{{ route('guest#contact') }}" method="POST">
                    @csrf
                    <div class="row gy-4"> 

                        <!-- Name Field -->
                        <div class="col-md-6">
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1"
                                placeholder="Your Name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <!-- Email Field -->
                        <div class="col-md-6">
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1"
                                placeholder="Your email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <!-- Message Field -->
                        <div class="col-12">
                            <textarea name="feedback" class="form-control @error('feedback') is-invalid @enderror" placeholder="Wrtie a message" id="exampleFormControlTextarea1" rows="3">{{ old('feedback') }}</textarea>
                            @error('feedback')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-secondary text-white navBtn" style=" background-color:#3498db; border:none;">Send Message</button>
                        </div>

                    </div>
                </form> 
                <!-- End Contact Form -->
            </div>
            <!-- End Right Column -->
        </div>
    </div>
</section>
@endsection
