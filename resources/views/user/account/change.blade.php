@extends('user.layout.master')

@section('title','change password')

@section('content')

<div class="container-fluid min-vh-100">

    <!-- Page Heading -->
    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">စကားဝှက်ပြောင်းရန်</h1>
        <a href="{{ route('category#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>အမျိုးအစားများ</a>
    </div> --}}


    @if (session('changeSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('changeSuccess') }}
        </div>
    </div>
    @endif

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">

        <div class="col-lg-6 card  mb-5 mt-5 p-5 bg_color">
            <h5>စကားဝှက်ပြောင်းရန်</h5>
            <form action="{{ route('user#changePassword') }}" method="POST" class="mt-5">
                @csrf
                <div class="mb-3">
                    <label for="category" class="form-label">စကားဝှက်အဟောင်း</label>
                    <input name="oldPassword" type="password" class="form-control @error('oldPassword') is-invalid @enderror" id="exampleFormControlInput1" placeholder="စကားဝှက်အဟောင်းထည့်ပါ ...">
                    @error('oldPassword')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">စကားဝှက်အသစ်</label>
                    <input name="newPassword" type="password" class="form-control @error('newPassword') is-invalid @enderror" id="exampleFormControlInput1" placeholder="စကားဝှက်အသစ်ထည့်ပါ ...">
                    @error('newPassword')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">စကားဝှက်အသစ်အတည်ပြုရန်</label>
                    <input name="confirmPassword" type="password" class="form-control @error('confirmPassword') is-invalid @enderror" id="exampleFormControlInput1" placeholder="စကားဝှက်အသစ်ထည့်ပါ ...">
                    @error('confirmPassword')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: blueviolet;">စကားဝှက်ပြောင်းရန်</button>
                <a href="{{ route('admin#dashboard') }}" class="btn btn-secondary border" style="background-color: limegreen;">ပယ်ဖျက်ရန်</a>
            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
