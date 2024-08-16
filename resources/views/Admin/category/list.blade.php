@extends('Admin.layout.master')

@section('title','categories list')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">ဝန်ဆောင်မှုအမျိုးအစားစာရင်း</h1>
        <a href="{{ route('category#createPage') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color: blueviolet;  "><i
                class="fas fa-download fa-sm text-white-50"></i>အမျိုးအစားဖန်တီးရန်</a>
    </div>

    @if (session('categorySuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('categorySuccess') }}
        </div>
    </div>
@endif

@if (session('categoryUpdateSuccess'))
<div class="col-4 offset-8">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa-solid fa-check"></i> {{ session('categoryUpdateSuccess') }}
    </div>
</div>
@endif

@if (session('categoryDeleteSuccess'))
<div class="col-4 offset-8">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa-solid fa-check"></i> {{ session('categoryDeleteSuccess') }}
    </div>
</div>
@endif
    <!-- Content Row -->
    @if (count($categories) != 0)
    <div class="row d-flex justify-content-center">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">နံပါတ်</th>
                        <th scope="col">အမျိုးအစားများ</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category )
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td class="">{{ $category->name }} </td>
                        <td class="">{{ $category->created_at->format('j-F-Y') }} </td>
                        <td><a href="{{ route('category#edit',$category->id) }}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                            <a href="{{ route('category#delete',$category->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            <div class="">
                {{$categories->links('pagination::bootstrap-5')}}

            </div>
        </div>


    </div>
    @else
    <h3 class=" text-center mt-5" style="color:limegreen;">ဒီမှာအမျိုးအစားမရှိပါဘူး! ကျေးဇူးပြု၍ သင့် အမျိုးအစားများကို ဖန်တီးပါ။</h3>
    @endif
    <!-- Content Row -->
</div>

@endsection
