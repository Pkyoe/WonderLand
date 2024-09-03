@extends('Admin.layout.master')

@section('title','uplode gallery')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: #212529;" class="h3 mb-0 ">Upload Photos</h1>
        <a href="{{ route('gallery#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm " style="background-color:#3498db; border:none;" ><i class="fa-solid fa-images m-2"></i>Gallery</a>
    </div>

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('gallery#create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="serviceImage" class="form-label">Choose Image file </label>
                    <input name="image" type="file" class="form-control  @error('image') is-invalid @enderror" id="exampleFormControlInput1" >
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Leave Notes</label>
                    <textarea name="description"  class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" placeholder="leave a note to describe your photos ...">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <button type="submit" class="btn btn-secondary border" style="background-color:#3498db; border:none;">Upload</button>
                <a href="{{ route('gallery#list') }}" class="btn btn-secondary border" style="background-color: transpent;">Cancel</a>

            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
