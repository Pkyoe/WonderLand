@extends('Admin.layout.master')

@section('title','edit photo')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">Edit Photo</h1>
        <a href="{{ route('gallery#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm " style="background-color: blueviolet" ><i class="fa-solid fa-taxi"></i> Service List</a>
    </div>

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('gallery#update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $photoData->id}}">
                <div class="mb-3">
                    <label for="serviceImage" class="form-label">Image</label><br>
                    <img src="{{ asset('storage/'.$photoData->image) }}" alt="wedding image" class="w-100 rounded mb-2">
                    <input  name="image" type="file" class="form-control  @error('image') is-invalid @enderror" id="exampleFormControlInput1" >
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Service Description ...">{{ old('description',$photoData->description) }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <button type="submit" class="btn btn-secondary border" style="background-color: blueviolet;">Update Photo</button>
                <a href="{{ route('gallery#list') }}" class="btn btn-secondary border" style="background-color: limegreen;">Cancel</a>

            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
