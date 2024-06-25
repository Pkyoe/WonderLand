@extends('admin.layout.master')

@section('title','service list')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">Services List</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Service Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="col-2">Elite Package </td>
                        <td class="col-2 "><img class="w-25 rounded-circle" src="https://www.brides.com/thmb/CBj-54Hhc8fFcRmKWSax4Z7VsHE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/recirc-7f09c548b0b3451d9479d2e85afb9702.jpg"></td>
                        <td class="col-1">$1000</td>
                        <td class="col-3">This package include Hair and Make up Photographer</td>
                        <td><a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td class="col-2">Elite Package </td>
                        <td class="col-2 "><img class="w-25 rounded-circle" src="https://static.wixstatic.com/media/e66266_dd0a27cc91c64ffea8e153c937985aee~mv2.jpg/v1/fill/w_640,h_482,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e66266_dd0a27cc91c64ffea8e153c937985aee~mv2.jpg"></td>
                        <td class="col-1">$1000</td>
                        <td class="col-3">This package include Hair and Make up Photographer</td>
                        <td><a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td class="col-2">Elite Package </td>
                        <td class="col-2 "><img class="w-25 rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4cwOkuYPFBKjRMykCDfmZzNFiFTzxqPgbzKoouNsHM_hccewxhokQK-3fbtGShaCQMRg&usqp=CAU"></td>
                        <td class="col-1">$1000</td>
                        <td class="col-3">This package include Hair and Make up Photographer</td>
                        <td><a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Content Row -->
</div>

@endsection
