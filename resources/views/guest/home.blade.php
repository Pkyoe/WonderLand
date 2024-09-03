@extends('layouts.welcome')

@section('title' , 'home')

@section('content')

<main class="main">
<!-- home start  -->
<section id="hero" class="hero section dark-background">
  <img src="{{ asset('image/hero-bcg.jpg') }}" alt="" data-aos="">
  <div class="container text-center" data-aos="" data-aos-delay="">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2>Welcome to Our WonderLand Studio</h2>
        <p>We are team of talented Photographers and Photo Editors</p>
        <a href="{{ route('guest#servicePage') }}" class="btn-get-started">Let's Explore</a>
      </div>
    </div>
  </div>
</section>

<!-- What We Do Section -->
<section id="what-we-do" class="what-we-do section">

<!-- Section Title -->
<div class="container section-title" data-aos="">
  <h2>What We Do</h2>
  <p>At our Studio, we specialize in capturing life's most beautiful moments through the lens of a camera. As skilled photographers, we focus on creating stunning visuals that tell a story, whether it's a wedding, portrait session, or any special event. Our expertise doesn't stop there; we also offer professional photo editing services, ensuring that every image is polished to perfection. We blend creativity with technical skill to deliver photos that our clients can cherish forever.</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-4" data-aos="" data-aos-delay="">
      <div class="why-box">
        <h3>Why Choose Our Studio?</h3>
        <p>
        Choosing our Studio means selecting a team dedicated to turning your moments into lasting memories.
        Choosing our Studio means entrusting your memories to a team that cares as much about your photos as you do.
        </p>
        <div class="text-center">
          <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
        </div>
      </div>
    </div><!-- End Why Box -->

    <div class="col-lg-8 d-flex align-items-stretch">
      <div class="row gy-4" data-aos="" data-aos-delay="">

        <div class="col-xl-4">
          <div class="icon-box d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-clipboard-data"></i>
            <h4>Cooperative</h4>
            <p>We believe in working closely with our clients to bring their vision to life.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="col-xl-4" data-aos="" data-aos-delay="">
          <div class="icon-box d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-gem"></i>
            <h4>Valuable Packages</h4>
            <p>We offer a range of photography packages designed to fit different needs and budgets</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="col-xl-4" data-aos="" data-aos-delay="">
          <div class="icon-box d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-inboxes"></i>
            <h4>Privacy Issue</h4>
            <p>Your privacy is our priority. We take stringent measures to protect your photos.</p>
          </div>
        </div><!-- End Icon Box -->

      </div>
    </div>

  </div>

</div>

</section><!-- /What We Do Section -->

<!-- About Section -->
<section id="about" class="about section">

<!-- Section Title -->
<div class="container section-title" data-aos="">
  <h2>About Us</h2>
  <p>We capture life's most cherished moments with creative precision and transform them into timeless, beautifully edited images.</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-3">

    <div class="col-lg-6" data-aos="" data-aos-delay="">
      <img src="assets/img/ourphoto.jpg" alt="" class="img-fluid">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="" data-aos-delay="">
      <div class="about-content ps-0 ps-lg-3">
        <h3>Our Studio History</h3>
        <p class="fst-italic">
        Founded in 2022, Wonderland Studio is dedicated to capturing the magic and beauty of every moment. With a passion for storytelling through photography, we specialize in creating stunning,
         high-quality images that preserve your most cherished memories. Our team combines creative vision with technical expertise to deliver exceptional results for weddings, portraits, events, and more.
        </p>
        <ul>
          <li>
            <i class="bi bi-diagram-3"></i>
            <div>
              <h4>Growing Network</h4>
              <p>Our customer network has grown significantly since our founding in 2022, thanks to our commitment to delivering exceptional photography experiences</p>
            </div>
          </li>
          <li>
            <i class="bi bi-fullscreen-exit"></i>
            <div>
              <h4>Communicate</h4>
              <p>Effective communication is a cornerstone of our service at Wonderland Studio. We prioritize clear, open, and respectful dialogue with our clients to fully understand their vision and expectations.</p>
            </div>
          </li>
        </ul>
        <p>
        We continue to nurture and grow our network by providing outstanding service, engaging with our community, and staying attuned to the needs of our clients, ensuring that every interaction contributes to our ongoing success.
        </p>
      </div>

    </div>
  </div>

</div>

</section><!-- /About Section -->

<!-- Services Section -->
<section id="services" class="services section light-background">

<!-- Section Title -->
<div class="container section-title" data-aos="">
  <h2>Services</h2>
  <p>Our primary service is capturing exceptional photographs tailored to your unique needs</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-4 col-md-6" data-aos="" data-aos-delay="">
      <div class="service-item  position-relative">
        <div class="icon">
          <i class="bi bi-calendar-event"></i>
        </div>
        <a href="service-details.html" class="stretched-link">
          <h3>Event Photography</h3>
        </a>
        <p>Event photograph is a dynamic and vibrant field that captures the essence of your various occasions.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="" data-aos-delay="">
      <div class="service-item position-relative">
        <div class="icon">
        <i class="bi bi-camera2"></i>
        </div>
        <a href="service-details.html" class="stretched-link">
          <h3>Lifestyle photography</h3>
        </a>
        <p>Lifestyle photography is a genre that captures your real-life situations, often in a relaxed and natural manner.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="" data-aos-delay="">
      <div class="service-item position-relative">
        <div class="icon">
        <i class="bi bi-cash-coin"></i>
        </div>
        <a href="service-details.html" class="stretched-link">
          <h3>Commercial photography</h3>
        </a>
        <p>Commercial photography is a genre focused on creating images that serve a business purpose.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="" data-aos-delay="">
      <div class="service-item position-relative">
        <div class="icon">
        <i class="bi bi-facebook"></i>
        </div>
        <a href="{{ route('guest#servicePage') }}" class="stretched-link">
          <h3>Social media photography</h3>
        </a>
        <p>Social media photography is a specialized form of photography aimed at engaging content specifically for social media platforms.</p>
        <a href="{{ route('guest#servicePage') }}" class="stretched-link"></a>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="" data-aos-delay="">
      <div class="service-item position-relative">
        <div class="icon">
        <i class="bi bi-cart4"></i>
        </div>
        <a href="{{ route('guest#servicePage') }}" class="stretched-link">
          <h3>Product photography</h3>
        </a>
        <p>Product photography is a specialized genre of photography focused on capturing high-quality images of products for commercial use.</p>
        <a href="{{ route('guest#servicePage') }}" class="stretched-link"></a>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="" data-aos-delay="">
      <div class="service-item position-relative">
        <div class="icon">
        <i class="bi bi-map"></i>
        </div>
        <a href="{{ route('guest#servicePage') }}" class="stretched-link">
          <h3>Location photography</h3>
        </a>
        <p>Location photography is a genre where photographers capture images in natural or man-made settings outside of a studio.</p>
        <a href="{{ route('guest#servicePage') }}" class="stretched-link"></a>
      </div>
    </div><!-- End Service Item -->

  </div>

</div>

</section><!-- /Services Section -->


<!-- Contact Section -->
<section id="contact" class="contact section"> 

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Contact</h2>
        <p>Please write a feedback or you can contact our studio</p>
    </div> 
    <!-- End Section Title -->

    <div class="container position-relative">
        <div class="row gy-4">
            <!-- Left Column: Contact Form -->
            <div class="col-lg-5">
                <div class="info-item d-flex">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Address</h3>
                        <p>Rainbow Street, Nay Pyi Taw, 23/22 A1</p>
                    </div>
                </div> 

                <div class="info-item d-flex">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+95 925003456</p>
                    </div>
                </div>

                <div class="info-item d-flex">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>wonderland@work.com</p>
                    </div>
                </div>
            </div>
            <!-- End Left Column -->

            <!-- Right Column: Address -->
            <div class="col-lg-7">
                @if (session('contactSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-check"></i> {{ session('contactSuccess') }}
                    </div>
                @endif

                <!-- Contact Form -->
                <form action="{{ route('guest#contact') }}" method="POST">
                    @csrf
                    <div class="row gy-4"> 

                        <!-- Name Field -->
                        <div class="col-md-6">
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1"
                                placeholder="Your Name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <!-- Email Field -->
                        <div class="col-md-6">
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1"
                                placeholder="Your email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <!-- Message Field -->
                        <div class="col-12">
                            <textarea name="feedback" class="form-control @error('feedback') is-invalid @enderror" placeholder="Wrtie a message" id="exampleFormControlTextarea1" rows="3">{{ old('feedback') }}</textarea>
                            @error('feedback')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-secondary text-white navBtn" style=" background-color:#3498db; border:none;">Send Message</button>
                        </div>

                    </div>
                </form> 
                <!-- End Contact Form -->
            </div>
            <!-- End Right Column -->
        </div>
    </div>
</section>

</main>
@endsection


