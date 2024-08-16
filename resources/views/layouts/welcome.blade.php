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
{{--
    <x-nav-bar></x-nav-bar> --}}
    <nav id="navbar" class="navbar navbar-expand-lg mt-5 d-flex justify-content-between">
        <div class="container-lg">
            <a class="navbar-brand" href="{{ route('guest#homePage') }}" style="color:darkviolet;">
                <h4 class="fw-bold">Dreams</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-dark fs-5" aria-current="page" href="{{ route('guest#homePage') }}">ပင်မစာမျက်နှာ</a>
                    <a class="nav-link  fs-5" href="{{ route('guest#aboutPage') }}">အကြောင်းအရာ</a>
                    <a class="nav-link  fs-5" href="{{ route('guest#galleryPage') }}">ဓာတ်ပုံပြခန်း</a>
                    <a class="nav-link  fs-5" href="{{ route('guest#servicePage') }}">၀န်ဆောင်မှု့ </a>
                    <a class="nav-link  fs-5" href="{{ route('guest#contactPage') }}">ဆက်သွယ်ရေး</a>
                </div>

            </div>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a href="{{ route('auth#loginPage') }}" class="navbar-brand btn btn-secondary text-white border-none fs-6 navBtn">အကောင့်၀င်ရန်</a>

                    <a href="{{ route('auth#registerPage') }}" class="navbar-brand btn btn-secondary text-white border-none fs-6 navBtn">မှတ်ပုံတင်ရန်</a>

                </div>

            </div>

        </div>
    </nav>

    @yield('content')

    @include('Components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
