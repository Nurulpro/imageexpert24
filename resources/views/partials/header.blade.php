  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="{{ url('/') }}"><img src="{{asset('frontend/assets/img/logo.png')}}" alt="Imageexpert24 logo"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="{{ url('/') }}#hero">Home</a></li>
          <li><a class="nav-link" href="{{ url('/') }}#about">About Us</a></li>
          <li><a class="nav-link" href="{{ url('/') }}#services">Services</a></li>
          <li class="dropdown"><a href="#"><span>Samples</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{URL::to('gallery') }}" target="_blank">Gallery</a></li>
              <li><a href="{{URL::to('clippingpath') }}" target="_blank">Clipping Path</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="{{ url('/') }}#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="{{ url('/') }}#testimonials">Testimonials</a></li>
          <li><a class="nav-link" href="{{ url('/') }}#contact">Contact Us</a></li>
          <li><a class="nav-link nav-cta" href="{{ url('/') }}#contact">Free Trial</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
