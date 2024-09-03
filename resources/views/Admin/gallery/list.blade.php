@extends('Admin.layout.master')

@section('title','gallery list')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: #212529;" class="h3 mb-0 ">Photos List</h1>
        <a href="{{ route('gallery#createPage') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color: #3498db; border:none;"><i class="fa-solid fa-circle-plus"></i> Upload Photos</a>
    </div>


    @if (session('galleryCreateSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('galleryCreateSuccess') }}
        </div>
    </div>
    @endif


    @if (session('galleryUpdateSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('galleryUpdateSuccess') }}
        </div>
    </div>
    @endif


    @if (session('galleryDeleteSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('galleryDeleteSuccess') }}
        </div>
    </div>
    @endif


    @if (count($photos) != 0)
     <!-- Content Row -->
     <div class="row d-flex justify-content-center">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Photos</th>
                        <th scope="col">Notes</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($photos as $p )
                    <tr>
                        <th scope="row">{{ $p->id }}</th>
                        <td class="col-2 "><img class="w-75 rounded" src="{{ asset('storage/' . $p->image) }}"></td>
                        <td class="col-3">{{ $p->description }}</td>
                        <td><a href="{{ route('gallery#edit',$p->id) }}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                            <a href="{{ route('gallery#delete',$p->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach



                </tbody>
            </table>
            <div class="">
                {{$photos->links('pagination::bootstrap-5')}}

            </div>
        </div>

    </div>
    <!-- Content Row -->
    @else
    <h3 class=" text-center mt-5" style="color:limegreen;">You don't have any photos here! Please Upload</h3>

    @endif


</div>

@endsection
