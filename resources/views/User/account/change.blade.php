@extends('admin.layout.master')

@section('title','change password')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">Change Password</h1>
        <a href="{{ route('category#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>Categories List</a>
    </div>


    @if (session('changeSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('changeSuccess') }}
        </div>
    </div>
    @endif

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('admin#changePassword') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category" class="form-label">Old Password</label>
                    <input name="oldPassword" type="password" class="form-control @error('oldPassword') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter Old Password ...">
                    @error('oldPassword')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">New Password</label>
                    <input name="newPassword" type="password" class="form-control @error('newPassword') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter Category Name ...">
                    @error('newPassword')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Confirm New Password</label>
                    <input name="confirmPassword" type="password" class="form-control @error('confirmPassword') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter Category Name ...">
                    @error('confirmPassword')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: blueviolet;">Change Password</button>
                <a href="{{ route('admin#dashboard') }}" class="btn btn-secondary border" style="background-color: limegreen;">Cancel</a>
            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
