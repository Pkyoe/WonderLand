@extends('layouts.welcome')

@section('title' , 'about')

@section('content')

<!-- about us start  -->
<div class="container-lg  min-vh-100 " id="aboutUs">
    <div class="row align-items-center align-content-center">
        <div class="col-md-12">

            <div class="d-flex">

                <div class="mt-5 col-lg-6">
                    <img src="{{ asset('image/couple.svg') }}" class="img-fluid">
                </div>
                <div class=" col align-self-center">
                    <h5 class="text-center" style="color:blueviolet">About Us</h5>
                    <p>Welcome to Dream, where dreams come true and love stories unfold. We are a dedicated team of passionate professionals committed to crafting unforgettable wedding experiences. Our mission is to transform your vision into reality, ensuring every detail reflects your unique love story.</p>
                    <p>Founded in 2024, Dreams was born out of a love for love. Our founder, Swagger, envisioned a service where couples could find everything they needed for their special day under one roof. With a background in [relevant field, e.g., event planning, design], Swagger brought together a team of experts in planning, design, catering, and more to create a seamless and enchanting wedding experience.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- about us end  -->

@endsection
