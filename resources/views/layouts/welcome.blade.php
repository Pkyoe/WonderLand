<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- Favicons -->
  <link href="{{asset ('assets/img/favicon.png') }}" rel="icon">
  <link href="{{asset ('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

 <!-- Fonts -->
 <link href="https://fonts.googleapis.com" rel="preconnect">
 <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    

<!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body>
 
     <!-- <nav id="navbar" class="navbar navbar-expand-lg mt-5 d-flex justify-content-between">
        <div class="container-lg">
            <a class="navbar-brand" href="{{ route('guest#homePage') }}" style="color:darkviolet;">
                <h4 class="fw-bold">WonderLand Studio</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-dark fs-5" aria-current="page" href="{{ route('guest#homePage') }}">Home</a>
                    <a class="nav-link  fs-5" href="{{ route('guest#aboutPage') }}">About Us</a>
                    <a class="nav-link  fs-5" href="{{ route('guest#galleryPage') }}">Our Gallery</a>
                    <a class="nav-link  fs-5" href="{{ route('guest#servicePage') }}">Service</a>
                    <a class="nav-link  fs-5" href="{{ route('guest#contactPage') }}">Feedback</a>
                </div>

            </div>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a href="{{ route('auth#loginPage') }}" class="navbar-brand btn btn-secondary text-white border-none fs-6 navBtn">Sign In</a>

                    <a href="{{ route('auth#registerPage') }}" class="navbar-brand btn btn-secondary text-white border-none fs-6 navBtn">Sign Up</a>

                </div>

            </div>

        </div>
    </nav>  -->

    <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Wonderland Studio</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('guest#homePage') }}"  aria-current="page" class="active">Home</a></li>
          <li><a href="{{ route('guest#aboutPage') }}">About</a></li>
          <li><a href="{{ route('guest#servicePage') }}">Services</a></li>
         
          <li><a href="{{ route('guest#galleryPage') }}">Gallery</a></li>
          <li><a href="{{ route('guest#contactPage') }}">Contact</a></li>
        </ul>
        
      </nav>

      <div class="header-social-links">
      <a href="{{ route('auth#loginPage') }}" class="navmenu">Sign In</a>

      <a href="{{ route('auth#registerPage') }}" class="navmenu" >Sign Up</a>
      </div>

    </div>
  </header>



    @yield('content')
    

    @include('Components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
   


<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script> 

<!-- Main JS File -->
<script src="{{ asset ('assets/js/main.js') }}"></script>

</body>

</html>
