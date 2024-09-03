@extends('user.layout.master')

@section('title', 'Services')

@section('content')

<section id="services" class="services section light-background">
<div class="container-lg mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 ">
                <div class="text-start mt-4">
                    <!-- Section Title -->
<div class="container section-title" data-aos="">
  <h2>Services</h2>
  <p>Our primary service is capturing exceptional photographs tailored to your unique needs</p>
</div><!-- End Section Title -->
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('user#bookingForm') }}"><button
                                class="btn btn-secondary" style="background-color:#3498db; border:none;">Take Booking Service</button></a>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="background-color:#3498db; border:none;">
                                Choose Package
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('user#servicePage') }}">All</a></li>
                                @foreach ($categories as $c)
                                    <li><a class="dropdown-item"
                                            href="{{ route('user#filter', $c->id) }}">{{ $c->name }}</a></li>
                                @endforeach
                                {{--
                      <li><a class="dropdown-item" href="#">Other</a></li>
                      <li><a class="dropdown-item" href="#">Other one</a></li> --}}
                                {{-- <a href="" class="ms-3 btn btn-success">Agree</a> --}}
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>

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
                            <a href="{{ route('user#detailPage', $s->id) }}"
                                class="btn btn-secondary detail" style="background-color:#3498db; border:none;">Details</a>
                     </div>
                </div>
         </div>
            @endforeach

    </div>
</div>

    </section><!-- /Services Section -->
@endsection

@section('scriptSource')

@endsection
