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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

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

            <div class="dropdown">
                <button class="navBtn btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu " style="background-color: lightyellow;">
                  <li><a class="dropdown-item price"  href="#"><i class="fa-solid fa-id-card me-2"></i>Profile</a></li>
                  <li><a class="dropdown-item price"  href="#"><i class="fa-solid fa-key me-2"></i>Change Password</a></li>
                  <li><a class="dropdown-item price"  href="#"><i class="fa-solid fa-envelope me-2"></i>Message</a></li>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li><button class="dropdown-item price"  href=""><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</button></li>
                  </form>
                </ul>
              </div>
            {{-- <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a href="" class="navbar-brand btn btn-secondary text-white border-none fs-6 navBtn">{{ Auth::user()->name }}</a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-secondary navBtn" type="submit" data-dismiss="modal">Logout</button>
                    </form>


                </div>

            </div> --}}
        </div>
    </nav>
    <!-- nav bar end  -->

    <!-- home start  -->
    <div class="container-lg mt-4">
        <div class="row min-vh-100 align-items-center align-content-center">
            <div class="col-md-6 ">
                <div class="text-center">
                    <img src="{{ asset('image/cover.jpg') }}" class="rounded-5 shadow-lg img-fluid" width="900px"
                        alt="image">
                </div>
            </div>
            <div class="col-md-6 order-md-first">
                <div class="">
                    <p style="color:blueviolet" class="fs-4">Once in a life moments...</p>
                    <h1 class="fi">Unforgetable Wedding, </h1>
                    <h1 class="fi">Tailored For You</h1>
                    <p class="mt-2">Guiding You Towards the Crafting Timeless Moments Curated Wedding Planning
                        Tallored to Your Love Story</p>
                </div>

            </div>
        </div>
    </div>
    <!-- home end  -->

    <!-- about us start  -->
    <div class="container-lg mb-4" id="aboutUs">
        <div class="row  min-vh-100 align-items-center align-content-center">
            <div class="col-md-12">
                <div class="">
                    <h2 class="text-center mb-2" style="color:blueviolet">About Us</h2>
                    <div class="mt-6">
                        <p class="fw-light fs-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eum hic quis, error dolorem, cumque natus voluptas praesentium impedit ducimus maxime fuga
                            molestiae perspiciatis libero asperiores facere porro consectetur eveniet in. At
                            velit, debitis minus quia nisi deleniti quae perferendis numquam assumenda asperiores
                            quibusdam, eligendi ratione ducimus optio, quod iure! Voluptates voluptatibus quas earum
                            quod odit incidunt, repellendus debitis commodi,
                            dicta est aliquid. Mollitia nihil nemo aliquid veritatis quaerat? Fuga harum quasi ad
                            numquam magni sunt omnis accusantium a placeat minus! Deleniti dolores qui praesentium, enim
                            facilis, quibusdam, quisquam minus nihil culpa
                            quidem est. Dolores sequi iste odio eveniet? Nesciunt debitis eius, dicta autem officiis
                            expedita libero voluptatem deserunt itaque nemo odio dolor accusamus ea enim vel praesentium
                            perferendis facere fuga nam suscipit temporibus.
                            Accusantium molestias laboriosam natus sed quia ea sint qui autem modi consequatur, ducimus
                            id et quam, veniam, facere ad. Soluta magnam cum, eaque cupiditate, iusto, sapiente
                            laudantium excepturi adipisci dolor culpa necessitatibus?
                            Quam aliquid magnam necessitatibus unde error similique mollitia corporis facere
                            repudiandae! Optio vel nulla adipisci laborum nostrum quasi consequuntur eligendi quidem
                            provident, odit sed voluptate quia excepturi magni dignissimos
                            officiis, iure molestiae reprehenderit fugit quis omnis modi accusamus ex molestias. Dolore
                            recusandae esse voluptate amet.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- about us end  -->

    <!-- contact us start  -->
    <div class="container-lg " id="contactUs">
        <div class="row align-items-center align-content-center">
            <div class="col-md-12">
                <h2 class="text-center" style="color:blueviolet">Contact Us</h2>
                <p class="mt-3 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi vel saepe
                    deserunt quaerat atque id, maxime officiis dolore nulla soluta expedita, et voluptatibus pariatur
                    culpa repellat corporis rerum delectus eaque!</p>
                <div class="">

                    <div class="col-md-6 mt-5 align-items-center">
                        <form action="" class="">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Your Feedback</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button class="btn btn-secondary text-white navBtn">Send</button>
                        </form>
                    </div>
                    <div class="col-md-6 mt-5">

                        <p><i class="fa-solid fa-map-location me-2"></i> Address - Taunggyi</p>
                        <p><i class="fa-solid fa-phone me-2"></i>Get In Touch - 09987654321</p>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- contact us end  -->

    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
