@extends('admin.layout.master')

@section('title','Booking list')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">Services Categories List</h1>
        <a href="{{ route('category#createPage') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color: blueviolet;  "><i
                class="fas fa-download fa-sm text-white-50"></i> Create Category</a>
    </div>

    @if (session('categorySuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('categorySuccess') }}
        </div>
    </div>
@endif

@if (session('categoryUpdateSuccess'))
<div class="col-4 offset-8">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa-solid fa-check"></i> {{ session('categoryUpdateSuccess') }}
    </div>
</div>
@endif

@if (session('categoryDeleteSuccess'))
<div class="col-4 offset-8">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa-solid fa-check"></i> {{ session('categoryDeleteSuccess') }}
    </div>
</div>
@endif
    <!-- Content Row -->

    <div class="row d-flex justify-content-center">
        <div class="col-lg-12 card shadow-lg">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Mr Name</th>
                        <th scope="col">Miss Name</th>
                        <th scope="col">Service Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($booking as $b )
                    <tr>
                        <th scope="row">{{ $b->id }}</th>
                        <td class=""> {{ $b->mr_name }}</td>
                        <td class="">{{ $b->miss_name }}</td>
                        <td class="">{{ $b->service_name }} </td>
                        <td>{{ $b->email }}</td>
                        <td>{{ $b->phone }}</td>
                        <td>{{ $b->date }}</td>
                        <td><a href="" class="btn btn-success">Accept</a>
                            <a href="" class="btn btn-danger">Reject</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="">
                {{$booking->links('pagination::bootstrap-5')}}

            </div>
        </div>


    </div>

    {{-- <h3 class=" text-center mt-5" style="color:limegreen;">There is no Categories Here! Please Create Your Categories.</h3> --}}

    <!-- Content Row -->
</div>

@endsection
