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
                    <p class="price">MMK {{ $detail->price }}</p>
                    <p class="">Include Package</p>
                    <p>{{ $detail->description }}</p>
                    {{-- <ul>
                        <li>Photography Services</li>
                        <li>Videography Services</li>
                        <li>Wedding Planning and Coordination</li>
                        <li>Floral Arrangements</li>
                        <li>Music and Entertainment</li>
                    </ul> --}}

                    <a href="{{ route('user#bookingForm') }}" class="btn btn-secondary navBtn">Book Now</a>
                    <a href="{{ route('user#servicePage') }}" class="btn btn-secondary detail">Cancel</a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection


