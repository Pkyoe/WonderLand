@extends('Admin.layout.master')

@section('title','customer list')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: #212529;" class="h3 mb-0 ">Customer List</h1>
        <a href="{{ route('admin#dashboard') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color:#3498db; border:none;">Back</a>

    </div>

    @if (session('changeSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('changeSuccess') }}
        </div>
    </div>
    @endif


    @if (session('blockSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('blockSuccess') }}
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
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Role</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer )
                    @if ($customer->role == 'user')

                    <tr>
                        <th scope="row">{{ $customer->id  }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone  }}</td>
                        <td>{{ $customer->role  }}</td>
                        <td><a href="{{ route('customer#changeRolePage',$customer->id) }}" class="btn btn-success">Edit Role</a>
                            <a href="{{ route('customer#block',$customer->id )}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endif

                    @endforeach


                </tbody>
            </table>
        </div>

    </div>

    <!-- Content Row -->
</div>


@endsection
