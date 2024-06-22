<!-- nav bar start  -->
<nav id="navbar" class="navbar navbar-expand-lg mt-5 d-flex justify-content-between">
    <div class="container-lg">
        <a class="navbar-brand" href="#" style="color:darkviolet;">
            <h4 class="fw-bold">Dreams</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active text-dark fs-5" aria-current="page" href="">Home</a>
                <a class="nav-link  fs-5" href="#aboutUs">About Us</a>
                <a class="nav-link  fs-5" href="#">Gallery</a>
                <a class="nav-link  fs-5" href="service.html">Services </a>
                <a class="nav-link  fs-5" href="#contactUs">Contact Us</a>
            </div>

        </div>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <a href="{{ route('auth#loginPage') }}" class="navbar-brand btn btn-secondary text-white border-none fs-6 navBtn">Login</a>

                <a href="{{ route('auth#registerPage') }}" class="navbar-brand btn btn-secondary text-white border-none fs-6 navBtn">Register</a>


            </div>

        </div>

    </div>
</nav>
<!-- nav bar end  -->
