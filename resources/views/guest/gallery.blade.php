@extends('layouts.welcome')

@section('title' , 'gallery')

@section('content')

<div class="container-lg mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="mt-5 d-flex justify-content-center">
                <i class="fa-brands fa-canadian-maple-leaf fs-2 me-2"></i>
                <h2>ဓာတ်ပုံပြခန်း</h2>
                <i class="fa-brands fa-canadian-maple-leaf fs-2 ms-2"></i>

            </div>
            <hr>
        </div>

    </div>

    <div class="row min-vh-100 mt-4">
        @foreach ($photos as $p )
        <div class="col-lg-4">
            <div class="card mt-5 ">
               <a href=""> <img src="{{ asset('storage/'.$p->image) }}" class="card-img-top " alt="..."></a>
               <small class="text-center">{{ $p->description }}</small>
                <!-- <div class="card-body">
                    <h5 class="card-title">Elite Package Wedding</h5>
                    <p class="price">Price - $1000</p>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="" class="btn btn-secondary navBtn">Book Now</a>
                    <a href="" class="btn btn-secondary detail">View Details</a>
                </div> -->
            </div>
        </div>

        @endforeach
        <div class="">
            {{$photos->links('pagination::bootstrap-5')}}

        </div>

    </div>
</div>

@endsection
