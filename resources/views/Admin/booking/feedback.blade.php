@extends('Admin.layout.master')

@section('title','FeedBack list')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">အကြံပြုစာများ</h1>

    </div>

    @if (session('feedbackDeleteSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('feedbackDeleteSuccess') }}
        </div>
    </div>
@endif

    <!-- Content Row -->

    <div class="row d-flex justify-content-center">
        <div class="col-lg-12 card shadow-lg">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">နံပတ်</th>
                        <th scope="col"> အမည်</th>
                        <th scope="col">အီးမေးလ်လိပ်စာ</th>
                        <th scope="col">အကြံပြုစာများ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($feedBack as $f )
                    <tr>
                        <th scope="row">{{ $f->id }}</th>
                        <td class=""> {{ $f->name }}</td>
                        <td>{{ $f->email }}</td>
                        <td>{{ $f->feedback }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="">
                {{$feedBack->links('pagination::bootstrap-5')}}

            </div>
        </div>


    </div>

    {{-- <h3 class=" text-center mt-5" style="color:limegreen;">ဒီမှာအမျိုးအစားမရှိပါဘူး! ကျေးဇူးပြု၍ သင့် အမျိုးအစားများကို ဖန်တီးပါ။</h3> --}}

    <!-- Content Row -->
</div>

@endsection
