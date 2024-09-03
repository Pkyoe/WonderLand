@extends('Admin.layout.master')

@section('title',' categories create')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: #212529;" class="h3 mb-0 ">Create Packages</h1>
        <a href="{{ route('category#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color:#3498db; border:none;">Packages</a>
    </div>

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('category#create') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category" class="form-label">Package Name</label>
                    <input name="categoryName" value="{{ old('categoryName') }}" type="text" class="form-control @error('categoryName') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Name your package...">
                    @error('categoryName')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="background-color:#3498db; border:none;">Create</button>
                <a href="{{ route('category#list') }}" class="btn btn-secondary border" style="background-color: transpent;">Cancel</a>
                {{-- <button type="submit"><a href="" class="btn btn-secondary border" style="background-color:#3498db; border:none;">Create</a></button>
                <button type="submit"><a href="{{ route('category#list') }}" class="btn btn-secondary border" style="background-color: transpent;">Cancel</a></button> --}}

            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
