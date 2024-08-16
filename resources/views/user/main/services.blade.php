@extends('user.layout.master')

@section('title', 'Services')

@section('content')

    <div class="container-lg mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 ">
                <div class="text-start mt-4">
                    <h4 class="text-center" style="color:blueviolet">ဝန်ဆောင်မှုများ</h4>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('user#bookingForm') }}"><button
                                class="btn btn-secondary">ကြိုတင်စရင်းပေးရန်</button></a>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                ရွေးချယ်နိုင်ခြင်းများ
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('user#servicePage') }}">အားလုံး</a></li>
                                @foreach ($categories as $c)
                                    <li><a class="dropdown-item"
                                            href="{{ route('user#filter', $c->id) }}">{{ $c->name }}</a></li>
                                @endforeach
                                {{--
                      <li><a class="dropdown-item" href="#">အခြားသောလုပ်ဆောင်ချက်များ</a></li>
                      <li><a class="dropdown-item" href="#">တခြားသောတစ်ခု</a></li> --}}
                                {{-- <a href="" class="ms-3 btn btn-success">ထောက်ပံ့သည်</a> --}}
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
                            <p class="price">{{ $s->price }}MMK</p>
                            {{-- <p class="card-text">{{ $s->description }}</p> --}}
                            {{-- <button href="{{ route('user#bookingForm') }}"  class="btn btn-secondary navBtn" id="bookingBtn">ယခုစာရင်း‌သွင်းရန်</button> --}}
                            <a href="{{ route('user#detailPage', $s->id) }}"
                                class="btn btn-secondary detail">အသေးစိတ်အချက်အလက်ကြည့်ရန်</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

@section('scriptSource')

@endsection
