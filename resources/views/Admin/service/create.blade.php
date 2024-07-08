@extends('Admin.layout.master')

@section('title','create service')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">Create Services & Package</h1>
        <a href="{{ route('service#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm " style="background-color: blueviolet" ><i class="fa-solid fa-taxi"></i> Service List</a>
    </div>

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('service#create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="serviceName" class="form-label">Service Name</label>
                    <select name="serviceName"
                        class="form-control @error('serviceName') is-invalid @enderror">
                        <option value="">Choose Your Service Name</option>
                        @foreach ($categories as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                    @error('serviceName')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="serviceImage" class="form-label">Image</label>
                    <input name="serviceImage" type="file" class="form-control  @error('serviceImage') is-invalid @enderror" id="exampleFormControlInput1" >
                    @error('serviceImage')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input name="servicePrice" value="{{ old('servicePrice') }}" type="number" class="form-control @error('servicePrice') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter Service Price ...">
                    @error('servicePrice')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="serviceDescription"  class="form-control @error('serviceDescription') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Service Description ...">{{ old('serviceDescription') }}</textarea>
                    @error('serviceDescription')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Location</label>
                    <input name="location" value="{{ old('location') }}" type="text" class="form-control @error('location') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter Yuor  Location ...">
                    @error('location')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <button type="submit" class="btn btn-secondary border" style="background-color: blueviolet;">Create Service</button>
                <a href="{{ route('service#list') }}" class="btn btn-secondary border" style="background-color: limegreen;">Cancel</a>

            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
