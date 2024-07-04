@extends('user.layout.master')

@section('title', 'Booking Form')

@section('content')

<div class="container-lg mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mt-2">
                <h4 class="">Booking Form</h4>
            </div>
        </div>

        <small class="text-center text-danger">Before you fill booking form , Please check booking date in <a href="{{ route('user#message') }}">booking history</a></small>

    </div>


    @if (session('successBooking'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('successBooking') }}
        </div>
    </div>
    @endif


    <div class="row d-flex justify-content-center mt-2">
        <div class="col-lg-6 card p-4 d-flex justify-content-center" style="background-color: lightyellow">
            {{-- <small class="mb-2 text-danger">Please fill up the form</small> --}}
            <div class="" >
                <form action="{{ route('user#bookingCreate') }}" method="post" >
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Mr Name</label>
                      <input name="mrName" type="name" class="form-control" placeholder="Your Mr Name">
                      @error('mrName')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Miss Name</label>
                        <input name="missName" type="name" class="form-control" placeholder="Your Miss Name">
                        @error('missName')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Choose Your Service</label>
                        <select name="serviceName"
                            class="form-control @error('serviceName') is-invalid @enderror">
                            <option value="">Choose Your Service Name</option>
                            @foreach ($categories as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="Your email">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                        <input name="phone" type="phone" class="form-control" placeholder="Your phone">
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Date</label>
                        <input name="date" type="date" class="form-control" >
                        @error('date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>


                    <button type="submit" class="btn btn-secondary navBtn">Book</button>
                    <a href="{{ route('user#servicePage') }}" class="btn btn-secondary detail" >Cancel</a>
                  </form>
            </div>

        </div>


    </div>
</div>
@endsection



