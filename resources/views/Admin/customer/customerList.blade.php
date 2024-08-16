@extends('Admin.layout.master')

@section('title','customer list')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">ဖောက်သည်စာရင်း</h1>

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
                        <th scope="col">နံပါတ်</th>
                        <th scope="col">အမည်</th>
                        <th scope="col">အီးမေးလ်လိပ်စာ</th>
                        <th scope="col">ဖုန်းနံပါတ်</th>
                        <th scope="col">အခန်းကဏ္ဍ</th>
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
                        <td><a href="{{ route('customer#changeRolePage',$customer->id) }}" class="btn btn-success">အခန်းကဏ္ဍပြောင်းလဲရန်</a>
                            <a href="{{ route('customer#block',$customer->id )}}" class="btn btn-danger">ပယ်ဖျက်ရန်</a>
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
