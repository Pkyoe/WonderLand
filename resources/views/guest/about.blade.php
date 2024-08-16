@extends('layouts.welcome')

@section('title' , 'about')

@section('content')

<!-- about us start  -->
<div class="container-lg  min-vh-100 " id="aboutUs">
    <div class="row align-items-center align-content-center">
        <div class="col-md-12">

            <div class="d-flex">

                <div class="mt-5 col-lg-6">
                    <img src="{{ asset('image/couple.svg') }}" class="img-fluid">
                </div>
                <div class=" col align-self-center">
                    <h5 class="text-center" style="color:blueviolet">အကြောင်းအရာ</h5>
                    <p>အိပ်မက်များ အမှန်တကယ်ဖြစ်လာပြီး
လှပသောမင်္ဂလာပွဲပုံရိပ်များထွက်ပေါ်လာမည့်Dream မှကြိုဆိုပါသည်။
ကျွန်ုပ်တို့သည် မမေ့နိုင်သောမင်္ဂလာပွဲပုံရိပ်များကိုဖန်တီးရန်စိတ်အားထက်သန်သော ကျွမ်းကျင်ပညာရှင်များ၏သီးသန့်အဖွဲ့တစ်ဖွဲ့ဖြစ်သည်။
ကျွန်ုပ်တို့၏ရည်ရွယ်ချက်မှာသင်တို့၏အိပ်မက်ကိုလက်တွေ့အဖြစ်သို့ပြောင်းလဲရန်ဖြစ်ပြီးပုံရိပ်တိုင်းသည်သင်၏စိတ်ကိုပျော်ရွှင်စေမှာအသေအချာပင်ဖြစ်ပါသည်။</p>
                    <p>2024ခုနှစ်တွင်စတင်တည်ထောင်ခဲ့သော Dreams သည် လှပသောမင်္ဂလာပွဲပုံရိပ်များကိုဖန်တီးပေးသည့်
                    ကျွန်ုပ်တို့၏Systemသည်သင်တို့၏အထူးနေ့အတွက်လှပသောပုံရိပ်များရရှိစေမည့်ဝန်ဆောင်မှုတစ်ခုကိုမျှော်မှန်းထားသည်။</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- about us end  -->

@endsection
