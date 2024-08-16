@extends('layouts.welcome')

@section('title' , 'service')

@section('content')

<div class="container-lg mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mt-4">
                <h2>ဝန်ဆောင်မှုများ</h2>
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
                    <p class="price">{{ $s->price }}MMK</p>
                    {{-- <p class="card-text">{{ $s->description }}</p> --}}
                    {{-- <a href="" class="btn btn-secondary navBtn">ဘိုကင်ယူရန်</a> --}}
                    <a href="{{ route('guest#check') }}" class="btn btn-secondary detail">အသေးစိတ်အချက်အလက်</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
