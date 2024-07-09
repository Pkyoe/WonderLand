@extends('Admin.layout.master')

@section('title','admin list')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">Admin List</h1>

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
                        <th scope="col">Phone</th>
                        <th scope="col">Role</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $a )
                    @if (Auth::user()->id == $a->id)
                    <tr>
                        <th scope="row">{{ $a->id  }}</th>
                        <td>{{ $a->name }}</td>
                        <td>{{ $a->email }}</td>
                        <td>{{ $a->phone  }}</td>
                        <td>{{ $a->role  }}</td>
                        {{-- <td><a href="" class="btn btn-success">Change Role</a>
                            <a href="" class="btn btn-danger">Block</a>
                        </td> --}}
                    </tr>
                    @endif
                    @if(Auth::user()->id != $a->id && $a->role == 'admin')
                    <tr>
                        <th scope="row">{{ $a->id  }}</th>
                        <td>{{ $a->name }}</td>
                        <td>{{ $a->email }}</td>
                        <td>{{ $a->phone  }}</td>
                        <td>{{ $a->role  }}</td>
                        <td><a href="{{ route('customer#changeRolePage',$a->id) }}" class="btn btn-success">Change Role</a>
                            <a href="{{ route('customer#block',$a->id )}}" class="btn btn-danger">Delete</a>
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
