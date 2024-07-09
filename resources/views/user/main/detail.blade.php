@extends('user.layout.master')

@section('title', 'detail')

@section('content')

<div class="container-lg min-vh-100 ">

    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="d-flex mt-5 justify-content-evenly">
                <img src="{{ asset('storage/'.$detail->image) }}" alt="" class="w-100 rounded-lg">
                <div class="col-lg-7 ms-5">
                    <h5 class="">{{ $detail->category_name }}</h5>
                    <p class="price"><i class="fa-solid fa-money-bill-wave"></i> {{ $detail->price }} MMK</p>
                    <p class="fw-bold"><i class="fa-solid fa-box"></i> Include Package</p>
                    <p class="price">{{ $detail->description }}</p>

                    <p class="fw-bold"><i class="fa-solid fa-map-location-dot"></i> Location </p>
                    <p class="price">{{ $detail->location }}</p>

                    <a href="{{ route('user#bookingForm') }}" class="btn btn-secondary navBtn">Book Now</a>
                    <a href="{{ route('user#servicePage') }}" class="btn btn-secondary detail">Cancel</a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection


