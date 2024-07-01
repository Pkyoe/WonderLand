@extends('user.layout.master')

@section('title', 'Gallery')

@section('content')

<div class="container-lg mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="mt-5 d-flex justify-content-center">
                <i class="fa-brands fa-canadian-maple-leaf fs-2 me-2"></i>
                <h4 style="color:blueviolet">Our Gallery</h4>
                <i class="fa-brands fa-canadian-maple-leaf fs-2 ms-2"></i>

            </div>
            <hr>
        </div>

    </div>

    <div class="row mt-4">
        @foreach ($photos as $p )
        <div class="col-lg-4">
            <div class="card mt-5 gallery">
               <a href=""> <img src="{{ asset('storage/'.$p->image) }}" class="card-img-top rounded-5" alt="..."></a>
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

    </div>
</div>
@endsection


