@extends('Admin.layout.master')

@section('title',' categories edit')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">သင့်၏အမျိုးအစားကိုပြုပြင်ရန်</h1>
        <a href="{{ route('category#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>အမျိုးအစားများ</a>
    </div>

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('category#update',$category->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category" class="form-label">အမျိုးအစား</label>
                    <input type="hidden" name="categoryId"  value="{{ $category->id}}">
                    <input name="categoryName" value="{{ old('categoryName',$category->name) }}" type="text" class="form-control @error('categoryName') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter Category Name ...">
                    @error('categoryName')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: blueviolet;">အသစ်ပြောင်းလဲခြင်း</button>
                <a href="{{ route('category#list') }}" class="btn btn-secondary border" style="background-color: limegreen;">ပယ်ဖျက်ရန်</a>
                {{-- <button type="submit"><a href="" class="btn btn-secondary border" style="background-color: blueviolet;">ဖန်တီးရန်</a></button>
                <button type="submit"><a href="" class="btn btn-secondary border" style="background-color: limegreen;">ပယ်ဖျက်ရန်</a></button> --}}

            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
