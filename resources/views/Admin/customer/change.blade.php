@extends('Admin.layout.master')

@section('title','change role page')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color:  #212529;" class="h3 mb-0 ">Change Role</h1>
        <a href="{{ route('customer#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color:#3498db; border:none;">Customer List</a>
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
                    <input name="userName" type="text" disabled value="{{ old('userName',$users->name) }}" class="form-control @error('userName') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter your name...">
                    @error('userName')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" disabled value="{{ old('email',$users->email) }}" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter your email...">
                    @error('email')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone No</label>
                    <input name="phone" type="number" disabled value="{{ old('phone',$users->phone) }}" class="form-control @error('phone') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter your phone no...">
                    @error('phone')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" class="form-control">
                        <option value="admin" @if ( $users->role == 'admin') selected @endif>Admin List</option>
                        <option value="user" @if ( $users->role == 'user') selected @endif>User List</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="background-color:#3498db; border:none;">Confrim</button>
                <a href="{{ route('admin#dashboard') }}" class="btn btn-secondary border" style="background-color: transpent;">Cancel</a>
            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
