@extends('layouts.welcome')

@section('title' , 'home')

@section('content')

<!-- home start  -->
<div class="container-lg mt-4">
    <div class="row min-vh-100 align-items-center align-content-center">
        <div class="col-md-6 ">
            <div class="text-center">
                <img src="{{ asset('image/photo.svg') }}" class="rounded-3 shadow-lg img-fluid" width="500px"  alt="image">
            </div>
        </div>
        <div class="col-md-6 order-md-first">
            <div class="">
                <p style="color:blueviolet" class="fs-4">တစ်သက်မှာတစ်ခါ...</p><br><br>
                <h1 class="fi">မမေ့နိုင်‌သော </h1>
                <h1 class="fi">မင်္ဂလာပွဲပုံရိပ်များ</h1><br><br>
                <p class="mt-2">ခမ်းနားလှပသောမင်္ဂလာပွဲပုံရိပ်များကိုအချိန်မကုန်ဘဲဖန်တီးပေးသောအစီအစဉ်</p>
            </div>

        </div>
    </div>
</div>
<!-- home end  -->

@endsection
