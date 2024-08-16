@extends('Admin.layout.master')

@section('title','dashboard')

@section('content')


<div class="container-fluid">

        <!-- Content Row -->
        <div class="row">

            <!-- Total Customer Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                အကောင့်အရေအတွက်</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($customer) }}</div>
                            </div>
                            <div class="col-auto">
                                <i style="color: blueviolet;" class="fa-solid fa-users fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Customer Card -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                စုစုပေါင်းကြိုတင်စာရင်း</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($booking)  }}</div>
                            </div>
                            <div class="col-auto">
                                <i style="color: blueviolet;" class="fa-solid fa-book-bookmark fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photo Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">ဓါတ်ပုံများ
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ count($photo) }}</div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i style="color: blueviolet;" class="fa-solid fa-photo-film fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Blogs Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                ဝန်ဆောင်မှု့အသေးစိတ်</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($services) }}</div>
                            </div>
                            <div class="col-auto">
                                <i style="color: blueviolet;" class="fa-solid fa-file-lines fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                ဝန်ဆောင်မှုအမျိုးအစားများ</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($categories) }}</div>
                            </div>
                            <div class="col-auto">
                                <i style="color: blueviolet;" class="fa-solid fa-file-lines fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

            </div>
        </div>

    </div>


@endsection
