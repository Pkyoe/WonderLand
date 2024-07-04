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

    <div class="row mt-4  min-vh-100">
        @foreach ($photos as $p )
        <div class="col-lg-4">
            <div class="card mt-5 ">
               <a href=""> <img src="{{ asset('storage/'.$p->image) }}" class="card-img-top" alt="..."></a>
               <small class="text-center">{{ $p->description }}</small>

            </div>
        </div>

        @endforeach

    </div>
</div>
@endsection


