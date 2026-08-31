  <!-- ======= Header ======= -->
  <header id="header">
    <div class="mx-auto flex max-w-[1200px] items-center px-4">

      <div class="logo">
        <a href="{{ url('/') }}"><img src="{{asset('frontend/assets/img/logo.png')}}" alt="Imageexpert24 logo"></a>
      </div>

      <nav id="navbar" class="navbar ml-auto">
        <ul>
          <li><a href="{{ url('/') }}#hero">Home</a></li>
          <li><a href="{{ URL::to('about-us') }}">About Us</a></li>
          <li><a href="{{ url('/') }}#services">Services</a></li>
          <li class="dropdown"><a href="#"><span>Samples</span> <x-icon.chevron-down class="h-3 w-3" /></a>
            <ul>
              <li><a href="{{URL::to('gallery') }}" target="_blank">Gallery</a></li>
              <li><a href="{{URL::to('clippingpath') }}" target="_blank">Clipping Path</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/') }}#portfolio">Portfolio</a></li>
          <li><a href="{{ url('/') }}#testimonials">Testimonials</a></li>
          <li><a href="{{ url('/') }}#contact">Contact Us</a></li>
          <li><a class="nav-cta" href="{{ url('/') }}#contact">Free Trial</a></li>
        </ul>
        <i class="mobile-nav-toggle">
          <x-icon.menu class="icon-menu-open h-7 w-7" />
          <x-icon.x class="icon-menu-close hidden h-7 w-7" />
        </i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
