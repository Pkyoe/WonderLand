@extends('user.layout.master')

@section('title', 'detail')

@section('content')

<div class="container-lg">

    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="d-flex mt-5 justify-content-evenly">
                <img src="https://www.joshuadwain.com/wp-content/uploads/2022/04/the-breakers-069-wedding-photographer-joshua-dwain-black-west-palm-beach-900x599.jpg" class="w-100 rounded mb-4" alt="wedding photo">
                <div class="col-lg-7 ms-5">
                    <h5 class="">Diamond Package</h5>
                    <p class="price">MMK 500000</p>
                    <p class="">Include Package</p>
                    <ul>
                        <li>Photography Services</li>
                        <li>Videography Services</li>
                        <li>Wedding Planning and Coordination</li>
                        <li>Floral Arrangements</li>
                        <li>Music and Entertainment</li>
                    </ul>

                    <a href="" class="btn btn-secondary navBtn">Book Now</a>
                    <a href="{{ route('user#servicePage') }}" class="btn btn-secondary detail">Cancel</a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection


