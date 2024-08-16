@extends('Admin.layout.master')

@section('title','change role page')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blueviolet;" class="h3 mb-0 ">အခန်းကဏ္ဍပြောင်းလဲရန်</h1>
        <a href="{{ route('customer#list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>ဖောက်သည်စာရင်း</a>
    </div>


    @if (session('changeSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('changeSuccess') }}
        </div>
    </div>
    @endif

    <!-- Content Row -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 card p-3 shadow-lg">
            <form action="{{ route('customer#changeRole',$users->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="userId" value="{{ $users->id}}">
                    <label for="userName" class="form-label">အမည်</label>
                    <input name="userName" type="text" disabled value="{{ old('userName',$users->name) }}" class="form-control @error('userName') is-invalid @enderror" id="exampleFormControlInput1" placeholder="သင်၏အမည်ရိုက်ထည့်ပါ။ ...">
                    @error('userName')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">အီးမေးလ်လိပ်စာ</label>
                    <input name="email" type="email" disabled value="{{ old('email',$users->email) }}" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="သင်၏အီးမေလ်ရိုက်ထည့်ပါ။ ...">
                    @error('email')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">ဖုန်းနံပါတ်</label>
                    <input name="phone" type="number" disabled value="{{ old('phone',$users->phone) }}" class="form-control @error('phone') is-invalid @enderror" id="exampleFormControlInput1" placeholder="သင်၏ဖုန်းနံပါတ်ရိုက်ထည့်ပါ။...">
                    @error('phone')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">အခန်းကဏ္ဍ</label>
                    <select name="role" class="form-control">
                        <option value="admin" @if ( $users->role == 'admin') selected @endif>အုပ်ချုပ်သူ</option>
                        <option value="user" @if ( $users->role == 'user') selected @endif>အသုံးပြုသူ</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback text-danger">
                        {{$message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: blueviolet;">ပြောင်းလဲရန်</button>
                <a href="{{ route('admin#dashboard') }}" class="btn btn-secondary border" style="background-color: limegreen;">ပယ်ဖျက်ရန်</a>
            </form>

        </div>
    </div>

    <!-- Content Row -->
</div>

@endsection
