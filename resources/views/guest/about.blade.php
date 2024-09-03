@extends('layouts.welcome')

@section('title' , 'about')

@section('content')

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

@endsection
