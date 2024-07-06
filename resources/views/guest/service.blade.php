@extends('layouts.welcome')

@section('title' , 'service')

@section('content')

<div class="container-lg mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mt-4">
                <h2>Our Services</h2>
            </div>
        </div>

    </div>

    <div class="row min-vh-100">
        @foreach ($services as $s )
        <div class="col-lg-4">
            <div class="card mt-5">
                <img src="{{ asset('storage/'.$s->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $s->category_name }}</h5>
                    <p class="price">MMK{{ $s->price }}</p>
                    {{-- <p class="card-text">{{ $s->description }}</p> --}}
                    {{-- <a href="" class="btn btn-secondary navBtn">Book Now</a> --}}
                    <a href="{{ route('guest#check') }}" class="btn btn-secondary detail">View Details</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
