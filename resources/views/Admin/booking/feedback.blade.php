@extends('admin.layout.master')

@section('title','FeedBack list')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">FeedBack List</h1>
        <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color: blueviolet;  "><i
                class="fas fa-download fa-sm text-white-50"></i> Create Category</a>
    </div>

    @if (session('feedbackDeleteSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('feedbackDeleteSuccess') }}
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
                        <th scope="col"> Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">FeedBack</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($feedBack as $f )
                    <tr>
                        <th scope="row">{{ $f->id }}</th>
                        <td class=""> {{ $f->name }}</td>
                        <td>{{ $f->email }}</td>
                        <td>{{ $f->feedback }}</td>

                        <td>
                            {{-- <a href="" class="btn btn-success">Accept</a> --}}
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="">
                {{$feedBack->links('pagination::bootstrap-5')}}

            </div>
        </div>


    </div>

    {{-- <h3 class=" text-center mt-5" style="color:limegreen;">There is no Categories Here! Please Create Your Categories.</h3> --}}

    <!-- Content Row -->
</div>

@endsection
