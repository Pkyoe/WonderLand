@extends('user.layout.master')

@section('title', 'Contact Us')

@section('content')

<div class="container-lg mt-5 " id="contactUs">
    <div class="row min-vh-100 align-items-center align-content-center">
        <div class="col-md-12">
            <h4 class="text-center" style="color:blueviolet">Contact Us</h4>
            <p class="mt-3 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi vel saepe
                deserunt quaerat atque id, maxime officiis dolore nulla soluta expedita, et voluptatibus pariatur
                culpa repellat corporis rerum delectus eaque!</p>
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
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Your Feedback</label>
                            <textarea name="feedback" class="form-control" placeholder="Enter Your Feedback" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary text-white navBtn">Send</button>
                    </form>
                </div>
                <div class="col-md-6 mt-5">

                    <p><i class="fa-solid fa-map-location me-2"></i> Address - Taunggyi</p>
                    <p><i class="fa-solid fa-phone me-2"></i>Get In Touch - 09987654321</p>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection


