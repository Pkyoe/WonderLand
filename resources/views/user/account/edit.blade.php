@extends('user.layout.master')

@section('title','edit page')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex justify-content-center mt-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 text-center">ကိုယ်ရေးအချက်အလက်ပြုပြင်ရန်</h1>
        {{-- <a href="{{ route('customer#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>ဖောက်သည်စာရင်း</a> --}}
    </div>


    @if (session('changeSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('changeSuccess') }}
        </div>
    </div>
    @endif

    <!-- Content Row -->
    <div class="row d-flex justify-content-center mb-5">
        <div class="col-lg-6 card p-3 shadow-lg">
            <form action="{{ route('user#profileUpdate', Auth::user()->id)}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="userName" class="form-label">အမည်</label>
                    <input name="userName" type="text" value="{{ old('userName',Auth::user()->name) }}" class="form-control @error('userName') is-invalid @enderror" id="exampleFormControlInput1" placeholder="သင်၏အမည်ရိုက်ထည့်ပါ။ ...">
                    @error('userName')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">အီးမေးလ်လိပ်စာ</label>
                    <input name="email" type="email" value="{{ old('email',Auth::user()->email) }}" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="သင်၏အီးမေလ်ရိုက်ထည့်ပါ။...">
                    @error('email')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">ဖုန်းနံပါတ်</label>
                    <input name="phone" type="number" value="{{ old('phone',Auth::user()->phone) }}" class="form-control @error('phone') is-invalid @enderror" id="exampleFormControlInput1" placeholder="သင်၏ဖုန်းနံပါတ်ရိုက်ထည့်ပါ။ ...">
                    @error('phone')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">အခန်းကဏ္ဍ</label>
                    <input name="role" type="text" value="{{ old('role',Auth::user()->role) }}" disabled class="form-control @error('role') is-invalid @enderror" id="exampleFormControlInput1" placeholder="အခန်းကဏ္ဍရွေးချယ်ပါ။ ...">
                    @error('role')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: blueviolet;">အသစ်မွမ်းမံရန်</button>
                <a href="{{ route('user#homePage') }}" class="btn btn-secondary border" style="background-color: limegreen;">ပယ်ဖျက်ရန်</a>
            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
