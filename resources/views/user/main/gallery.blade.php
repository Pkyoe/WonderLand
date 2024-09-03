@extends('user.layout.master')

@section('title', 'Gallery')

@section('content')

<<section id="services" class="gallery section ">
<div class="container-lg mb-5">
    <!-- Section Title -->
   <div class="container section-title" data-aos="">
       <h2>Gallery</h2>
        <p>All photos is copy right to wonderland studio! Copy right serve</p>
    </div><!-- End Section Title -->

    <div class="row mt-4  min-vh-100">
        @foreach ($photos as $p )
        <div class="col-lg-4">
            <div class="card mt-5 ">
               <a href=""> <img src="{{ asset('storage/'.$p->image) }}" class="card-img-top" alt="..."></a>
               

            </div>
        </div>

        @endforeach

        <div class="">
            {{$photos->links('pagination::bootstrap-5')}}

        </div>

    </div>
</div>
</section>
@endsection


