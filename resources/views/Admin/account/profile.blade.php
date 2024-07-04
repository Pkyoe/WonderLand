@extends('Admin.layout.master')

@section('title','profile page')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">Profile Information</h1>
        <a href="{{ route('admin#dashboard') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>Back</a>
    </div>


    @if (session('updateSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('updateSuccess') }}
        </div>
    </div>
    @endif

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 card p-3 shadow-sm border" style="background-color: lightyellow">
            <h4 class="" style="color: blueviolet">Profile</h4>
            {{-- <div class="col-4 bg-dark offset-4">hello</div> --}}
            <div class="col-5 offset-4 mt-1">
                <h6><i class="fa-solid fa-user-tie me-1"></i> Name : {{ Auth::user()->name }}   </h6>
                <h6><i class="fa-solid fa-envelope-circle-check me-1"></i> Email : {{ Auth::user()->email }}   </h6>
                <h6><i class="fa-solid fa-mobile me-1"></i> Phone : {{ Auth::user()->phone }}   </h6>
                <h6><i class="fa-solid fa-flag me-1"></i> Role : {{ Auth::user()->role }}   </h6>
                <h6><i class="fa-solid fa-calendar me-1"></i> Account Created Date : {{ Auth::user()->created_at->format('j-F-Y') }}</h6>
                <a href="{{ route('admin#editProfilePage') }}"><button class="btn btn-secondary" style="background-color: limegreen">Edit</button></a>
                <a href="{{ route('admin#dashboard') }}"><button class="btn btn-secondary">Cancel</button></a>
            </div>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
