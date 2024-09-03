@extends('Admin.layout.master')

@section('title','edit service')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color:#212529 ;"  class="h3 mb-0 ">Edit Service</h1>
        <a href="{{ route('service#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm "style="background-color:#3498db; border:none;" >Service list</a>
    </div>

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('service#update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="serviceId" value="{{ $services->id}}">
                    <label for="serviceName" class="form-label">Package</label>
                    <select name="serviceName"
                        class="form-control @error('serviceName') is-invalid @enderror">
                        <option value="">Choose Package</option>
                        @foreach ($categories as $c)
                            <option value="{{ $c->id }}" @if ($services->category_id == $c->id) selected @endif>{{ $c->name }}</option>
                        @endforeach
                    </select>
                    @error('serviceName')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="serviceImage" class="form-label">Choose image</label><br>
                    <img src="{{ asset('storage/'.$services->image) }}" alt="wedding image" class="w-100 rounded mb-2">
                    <input  name="serviceImage" type="file" class="form-control  @error('serviceImage') is-invalid @enderror" id="exampleFormControlInput1" >
                    @error('serviceImage')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price(MMK)</label>
                    <input value="{{ old('servicePrice',$services->price) }}" name="servicePrice" type="number" class="form-control @error('servicePrice') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter price ...">
                    @error('servicePrice')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="serviceDescription" class="form-control @error('serviceDescription') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" placeholder="Describe package...">{{ old('serviceDescription',$services->description) }}</textarea>
                    @error('serviceDescription')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Location</label>
                    <input value="{{ old('location',$services->location) }}" name="location" type="text" class="form-control @error('location') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Enter location ...">
                    @error('location')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <button type="submit" class="btn btn-secondary border" style="background-color:#3498db; border:nonel">Confrim</button>
                <a href="{{ route('service#list') }}" class="btn btn-secondary border" style="background-color: transpent;">Back</a>

            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>
<br>
@endsection
