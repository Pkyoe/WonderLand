@extends('user.layout.master')

@section('title', 'Contact Us')

@section('content')

<div class="container-lg " id="contactUs">
    <div class="row align-items-center align-content-center">
        <div class="col-md-12">
            <h2 class="text-center" style="color:blueviolet">Contact Us</h2>
            <p class="mt-3 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi vel saepe
                deserunt quaerat atque id, maxime officiis dolore nulla soluta expedita, et voluptatibus pariatur
                culpa repellat corporis rerum delectus eaque!</p>
            <div class="">

                <div class="col-md-6 mt-5 align-items-center">
                    <form action="" class="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Your Feedback</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button class="btn btn-secondary text-white navBtn">Send</button>
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


