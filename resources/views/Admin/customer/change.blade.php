@extends('admin.layout.master')

@section('title','change role page')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">Change Role</h1>
        <a href="{{ route('customer#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>Customer List</a>
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
        <div class="col-lg-6 card p-3 shadow-lg">
            <form action="{{ route('customer#changeRole',$users->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="userId" value="{{ $users->id}}">
                    <label for="userName" class="form-label">Name</label>
                    <input name="userName" type="text" disabled value="{{ old('userName',$users->name) }}" class="form-control @error('userName') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter Old Password ...">
                    @error('userName')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" disabled value="{{ old('email',$users->email) }}" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter Category Name ...">
                    @error('email')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input name="phone" type="number" disabled value="{{ old('phone',$users->phone) }}" class="form-control @error('phone') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter Category Name ...">
                    @error('phone')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input name="role" type="text" value="{{ old('role',$users->role) }}"  class="form-control @error('role') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter Old Password ...">
                    @error('role')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: blueviolet;">Change</button>
                <a href="{{ route('admin#dashboard') }}" class="btn btn-secondary border" style="background-color: limegreen;">Cancel</a>
            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
