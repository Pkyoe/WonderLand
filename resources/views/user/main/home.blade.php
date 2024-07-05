@extends('user.layout.master')

@section('title', 'HomePage')

@section('content')

 <!-- home start  -->
 <div class="container-lg mt-4">
    <div class="row min-vh-100 align-items-center align-content-center">
        <div class="col-md-6 ">
            <div class="text-center">
                <img src="{{ asset('image/photo.svg') }}" class="rounded-5 shadow-lg img-fluid" width="500px"
                    alt="image">
            </div>
        </div>
        <div class="col-md-6 order-md-first">
            <div class="">
                <p style="color:blueviolet" class="fs-4">Once in a life moments...</p>
                <h1 class="fi">Unforgetable Wedding, </h1>
                <h1 class="fi">Tailored For You</h1>
                <p class="mt-2">Guiding You Towards the Crafting Timeless Moments Curated Wedding Planning
                    Tallored to Your Love Story</p>
                    <a href="{{ route('user#bookingForm')}}"><button class="btn btn-secondary mt-2" style="background-color: blueviolet">Book Now</button></a>
            </div>

        </div>
    </div>
</div>
<!-- home end  -->
@endsection


