@extends('layouts.welcome')

@section('title' , 'service')

@section('content')




<section id="services" class="services section light-background">
<div class="container-lg mb-5">
    <!-- Section Title -->
<div class="container section-title" data-aos="">
  <h2>Services</h2>
  <p>Our primary service is capturing exceptional photographs tailored to your unique needs</p>
</div><!-- End Section Title -->

<!-- <div class="row min-vh-100">
@foreach ($services as $s )
<div class="col-lg-4">
<div class="card mt-5" style="width: 25rem;" >
<img src="{{ asset('storage/'.$s->image) }}" class="card-img-top" alt="...">
  <div class="card-body" style="border: none;">
  <h5 class="card-title">{{ $s->category_name }}</h5>
    <p class="price">{{ $s->price }}MMK</p>
    {{-- <p class="card-text">{{ $s->description }}</p> --}}
    {{-- <a href="" class="btn btn-secondary navBtn">Booking</a> --}}
    <a href="{{ route('guest#check') }}" class="btn btn-primary detail" style ="background-color:#3498db; border:none;">Details</a>
  </div>
</div>

</div>

@endforeach

</div> -->


<div class="row min-vh-100">
            @foreach ($services as $s)
                <div class="col-lg-4">
                    <div class="card mt-5">
                        {{-- <input type="text" class="serviceId" value="{{ $s->id }}">
                <input type="text" class="userId" value="{{ Auth::user()->id }}"> --}}
                        <img src="{{ asset('storage/' . $s->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                            <h5 class="card-title">{{ $s->category_name }}</h5>
                            <p class="price" style="color:#013a63; border:none;">{{ $s->price }}MMK</p>
                            {{-- <p class="card-text">{{ $s->description }}</p> --}}
                            <!-- {{-- <button href="{{ route('user#bookingForm') }}"  class="btn btn-secondary navBtn" id="bookingBtn">Book Now</button> --}} -->
                            <a href="{{ route('guest#check', $s->id) }}"
                                class="btn btn-secondary detail" style="background-color:#3498db; border:none;">Details</a>
                     </div>
                </div>
         </div>
            @endforeach

    </div>
</section>



    <!-- <div class="row min-vh-100">
        @foreach ($services as $s )
        <div class="col-lg-4">
            <div class="card mt-5">
                <img src="{{ asset('storage/'.$s->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $s->category_name }}</h5>
                    <p class="price">{{ $s->price }}MMK</p>
                    {{-- <p class="card-text">{{ $s->description }}</p> --}}
                    {{-- <a href="" class="btn btn-secondary navBtn">Booking</a> --}}
                    <a href="{{ route('guest#check') }}" class="btn btn-primary detail">Details</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div> -->
@endsection
