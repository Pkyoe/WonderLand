@extends('user.layout.master')

@section('title', 'Services')

@section('content')

<div class="container-lg mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="text-start mt-4">
                <h4 class="text-center" style="color:blueviolet">Our Services</h4>
                <a href="{{ route('user#bookingForm') }}"><button class="btn btn-secondary">Book Now</button></a>
            </div>
        </div>

    </div>

    <div class="row ">
        @foreach ($services as $s )
        <div class="col-lg-4">
            <div class="card mt-5">
                {{-- <input type="text" class="serviceId" value="{{ $s->id }}">
                <input type="text" class="userId" value="{{ Auth::user()->id }}"> --}}
                <img src="{{ asset('storage/'.$s->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $s->category_name }}</h5>
                    <p class="price">MMK{{ $s->price }}</p>
                    {{-- <p class="card-text">{{ $s->description }}</p> --}}
                    {{-- <button href="{{ route('user#bookingForm') }}"  class="btn btn-secondary navBtn" id="bookingBtn">Book Now</button> --}}
                    <a href="{{ route('user#detailPage') }}" class="btn btn-secondary detail">View Details</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection

@section('scriptSource')

@endsection


