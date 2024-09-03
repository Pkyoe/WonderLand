@extends('user.layout.master')

@section('title', 'detail')

@section('content')

<div class="container-lg min-vh-100 ">

    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="d-flex mt-5 justify-content-evenly">
                <img src="{{ asset('storage/'.$detail->image) }}" alt="" class="w-100 rounded-lg">
                <div class="col-lg-7 ms-5">
                    <h3 class="" >{{ $detail->category_name }}</h3>
                    <br>
                    
                    <p class="fw-bold"><i class="fa-solid fa-box"></i> Package</p>
                    <p class="price" style = "color: #212529;">{{ $detail->description }}</p>
                    <p class="fw-bold"><i class="fa-solid fa-map-location-dot"></i>Location</p>
                    <p class="price" style = "color: #212529;">{{ $detail->location }}</p>

                    <p class="price"><i class="fa-solid fa-money-bill-wave"></i> {{ $detail->price }} MMK</p>

                    <a href="{{ route('user#bookingForm') }}" class="btn btn-secondary navBtn" style="background-color: #3498db; border:none;">Booking Now</a>
                    <a href="{{ route('user#servicePage') }}" class="btn btn-secondary detail" style="background-color transpent;">Cancel</a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection


