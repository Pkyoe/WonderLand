@extends('Admin.layout.master')

@section('title','service list')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: #212529;" class="h3 mb-0 ">Service List</h1>
        <a href="{{ route('service#createPage') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color:#3498db; border:none;">Create Service</a>
    </div>


    @if (session('serviceCreateSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('serviceCreateSuccess') }}
        </div>
    </div>
    @endif


    @if (session('serviceUpdateSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('serviceUpdateSuccess') }}
        </div>
    </div>
    @endif


    @if (session('serviceDeleteSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('serviceDeleteSuccess') }}
        </div>
    </div>
    @endif


    @if (count($services) == 0)
        <h5 class="text-center ">You don't have any service here!</h5>
    @else
    <div class="row d-flex justify-content-center">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Package</th>
                        <th scope="col">Photos</th>
                        <th scope="col">Price</th>
                        <th scope="col">Note</th>
                        <th scope="col">Location</th>

                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $s )
                    <tr>
                        <th scope="row">{{ $s->id }}</th>
                        <td class="col-2">{{ $s->category_name }} </td>
                        <td class="col-2 "><img class="w-75 rounded" src="{{ asset('storage/' . $s->image) }}"></td>
                        <td class="col-1">{{ $s->price }}MMK</td>
                        <td class="col-3">{{ $s->description }}</td>
                        <td class="col-2">{{ $s->location }}</td>
                        <td><a href="{{ route('service#edit' , $s->id) }}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                            <a href="{{ route('service#delete' , $s->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            <div class="">
                {{$services->links('pagination::bootstrap-5')}}

            </div>
        </div>

    </div>
    @endif
    <!-- Content Row -->


    <!-- Content Row -->
</div>

@endsection
