@extends('user.layout.master')

@section('title', 'Booking list')

@section('content')
    <div class="container-fluid mt-3">

        <!-- Page Heading -->
        {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">စာတို</h1>
        <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color: blueviolet;  "><i
                class="fas fa-download fa-sm text-white-50"></i>အမျိုးအစားဖန်တီးရန်</a>
    </div> --}}



        @if (session('successBooking'))
            <div class="col-4 offset-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-check"></i> {{ session('successBooking') }}
                </div>
            </div>
        @endif

        <!-- Content Row -->
        @if (count($booking) != 0)
            <div class="row min-vh-100 d-flex justify-content-center mt-2 mb-3">
                <div class=" col-lg-6  shadow-lg w-75 bg_color" >
                    <a href="{{ route('user#bookingForm') }}"><button class="mb-4 mt-4 btn btn-secondary">နောက်သို့</button></a>
                    <table class="table table-warning" >
                        <thead>
                            <tr>

                                <th scope="col">ရက်စွဲ</th>
                                <th scope="col">ဝန်ဆောင်မှုအမည်</th>

                                <th scope="col">ဖော်ပြချက်</th>
                                {{-- <th></th> --}}

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($booking as $b)
                            @if($b->email == Auth::user()->email)
                                <tr>

                                    <td class="">{{ $b->date }}</td>
                                    <td class="">{{ $b->service_name }}</td>

                                    <td class="text-warning">{{ $b->status }}</td>
                                    {{-- <td><a href="" class="btn btn-success">လက်ခံသည်</a>
                        <a href="" class="btn btn-danger">ငြင်းပယ်သည်</a>
                    </td> --}}
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="">
            {{$booking->links('pagination::bootstrap-5')}}

        </div> --}}
                </div>


            </div>
        @else
            <h3 class=" text-center mt-5" style="color:limegreen;">ဤနေရာတွင်ကြိုတင်စာရင်းပေးထားခြင်းမရှိပါ။
                </h3>
        @endif



        <!-- Content Row -->


    @endsection
