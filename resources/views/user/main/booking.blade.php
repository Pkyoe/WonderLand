@extends('user.layout.master')

@section('title', 'Booking Form')

@section('content')

    <div class="container-lg mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mt-2">
                    <h4 class="">ကြိုတင်စာရင်း‌ပေးသည့်ပုံစံ</h4>
                </div>
            </div>

            <small class="text-center text-danger">ကြိုတင်စာရင်းမှတ်တမ်းစစ်ဆေးရန် <a
                    href="{{ route('user#message') }}">ကြိုတင်စာရင်းမှတ်တမ်း</a></small>

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
                <div class="">
                    <form action="{{ route('user#bookingCreate') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">သတိုးသားအမည်</label>
                            <input name="mrName" value="{{ old('mrName') }}" type="name" class="form-control"
                                placeholder="သတိုးသားအမည်ရိုက်ထည့်ပါ။">
                            @error('mrName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">သတိုးသမီးအမည်</label>
                            <input name="missName" value="{{ old('missName') }}" type="name" class="form-control"
                                placeholder="သတိုးသမီးအမည်ရိုက်ထည့်ပါ။">
                            @error('missName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">သင်၏ဝန်ဆောင်မှုကိုရွေးချယ်ရန်</label>
                            <select name="serviceName" class="form-control @error('serviceName') is-invalid @enderror">
                                <option value="">သင်၏ဝန်ဆောင်မှုအမည်ကိုရွေးချယ်ပါ</option>
                                @foreach ($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            {{-- <label for="exampleInputEmail1" class="form-label">အီးမေးလ်လိပ်စာ</label> --}}
                            <input name="email" value="{{ Auth::user()->email }}" type="hidden" class="form-control"
                                placeholder="အီးမေးလ်ရိုက်ထည့်ပါ။" >
                            {{-- @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror --}}
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ဖုန်းနံပါတ်</label>
                            <input name="phone" value="{{ old('phone') }}" type="phone" class="form-control"
                                placeholder="ဖုန်းနံပါတ်ရိုက်ထည့်ပါ။">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ရက်စွဲ</label>
                            <input name="date" value="{{ old('date') }}" type="date" class="form-control">
                            @error('date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <h5 class="text-center my-3">ငွေပေးချေမူအချက်အလက်</h5>
                        <div class="p-3 my-2">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img style="width: 40px;height:40px;" src="https://play-lh.googleusercontent.com/cnKJYzzHFAE5ZRepCsGVhv7ZnoDfK8Wu5z6lMefeT-45fTNfUblK_gF3JyW5VZsjFc4" alt="">
                                </div>
                                <div class="col-6">
                                    <span class="fs-5 fw-bold">KBZPay </span>: ဖုန်းနံပါတ်သို့ငွေလွှဲပါ
                                </div>
                                <div class="col-4">
                                    09785456573
                                </div>
                            </div>
                        </div>
                        <div class="p-3 my-2">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img style="width: 40px;height:40px;" src="https://play-lh.googleusercontent.com/rPq4GMCZy12WhwTlanEu7RzxihYCgYevQHVHLNha1VcY5SU1uLKHMd060b4VEV1r-OQ" alt="">
                                </div>
                                <div class="col-6">
                                    <span class="fs-5 fw-bold">KBZPay </span>: ဖုန်းနံပါတ်သို့ငွေလွှဲပါ
                                </div>
                                <div class="col-4">
                                    09785456573
                                </div>
                            </div>
                        </div>
                        <div class="p-3 my-2">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img style="width: 40px;height:40px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQojuoHdIPbWo9RqSttQXgvv0QrXgw1Y0YwxQ&s" alt="">
                                </div>
                                <div class="col-6">
                                    ငွေပေးချေပီးပါက viberမှတဆင့် ငွေလွှဲပြေစာ ကို ပေးပို့ပါ
                                </div>
                                <div class="col-4">
                                    09785456573
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-secondary navBtn">ကြိုတင်စာရင်းပေးရန်</button>
                        <a href="{{ route('user#servicePage') }}" class="btn btn-secondary detail">ပယ်ဖျက်ရန်</a>
                    </form>
                </div>

            </div>


        </div>
    </div>
@endsection
