@extends('admin.layout.master')

@section('title','customer list')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">Customer List</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

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
                    @foreach ($customers as $customer )
                    @if ($customer->role == 'admin')
                    <tr>
                        <th scope="row">{{ $customer->id  }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone  }}</td>
                        <td>{{ $customer->role  }}</td>
                        <td><a href="" class="btn btn-success">Change Role</a>
                            {{-- <a href="" class="btn btn-danger">Block</a> --}}
                        </td>
                    </tr>
                    @else
                    <tr>
                        <th scope="row">{{ $customer->id  }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone  }}</td>
                        <td>{{ $customer->role  }}</td>
                        <td><a href="" class="btn btn-success">Change Role</a>
                            <a href="" class="btn btn-danger">Block</a>
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
