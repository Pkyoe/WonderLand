@extends('admin.layout.master')

@section('title','create service')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">Create Services & Package</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="serviceName" class="form-label">Service Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Service Name ...">
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Wedding Price ...">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <a href="" class="btn btn-secondary border" style="background-color: blueviolet;">Create Service</a>
                <a href="" class="btn btn-secondary border" style="background-color: limegreen;">Cancel</a>

            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
