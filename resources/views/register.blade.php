@extends('layouts.welcome')

@section('title', 'register')

@section('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: lightyellow;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image">
                        <img src="https://www.southernliving.com/thmb/_DTHAquZBLEHKLIgPi_C3fFIhNo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-929904308-aeeb687413714dacace50062cece530a.jpg" alt="">
                    </div> -->
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <i class="fa-solid fa-panorama fa-2x mb-2" style="color:blueviolet;"></i>
                                <h1 class="h4 text-gray-900 mb-4">သင်၏အကောင့်ကိုဖန်တီးပါ</h1>
                            </div>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">အမည်</label>
                                    <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="အမည်ရိုက်ထည့်ပါ">
                                        @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">အီးမေးလ်လိပ်စာ</label>
                                    <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="အီးမေးလ်ရိုက်ထည့်ပါ">
                                        @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">ဖုန်းနံပါတ်</label>
                                    <input name="phone" value="{{ old('phone') }}" type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="ဖုန်းနံပါတ်ရိုက်ထည့်ပါ">
                                        @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">စကားဝှက်</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="စကားဝှက်ရိုက်ထည့်ပါ">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">စကားဝှက်အတည်ပြုပါ</label>
                                    <input name="password_confirmation" type="password" class="form-control"
                                        id="exampleInputPassword1" placeholder="အတည်ပြုစကားဝှက်ရိုက်ထည့်ပါ">
                                        @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-primary w-100"
                                    style="background-color: blueviolet;">မှတ်ပုံတင်ရန်</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('auth#loginPage') }}">အကောင့်ရှိပြီးသားလား? ဝင်မည်။</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
