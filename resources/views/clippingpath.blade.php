<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Clipping Path Gallery | Imageexpert24</title>
  <meta name="description" content="Browse Imageexpert24's clipping path service gallery — real samples of precise background removal and clipping path work for products, watches, apparel and more.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="{{ url()->current() }}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Imageexpert24">
  <meta property="og:title" content="Clipping Path Gallery | Imageexpert24">
  <meta property="og:description" content="Browse Imageexpert24's clipping path service gallery — real samples of precise background removal and clipping path work for products, watches, apparel and more.">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('frontend/assets/img/logo.png') }}">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Clipping Path Gallery | Imageexpert24">
  <meta name="twitter:description" content="Browse Imageexpert24's clipping path service gallery — real samples of precise background removal and clipping path work for products, watches, apparel and more.">
  <meta name="twitter:image" content="{{ asset('frontend/assets/img/logo.png') }}">

  <!-- Structured Data -->
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
      { "@type": "ListItem", "position": 2, "name": "Clipping Path", "item": "{{ url()->current() }}" }
    ]
  }
  </script>
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Clipping Path Service",
    "name": "Clipping Path Service",
    "provider": {
      "@type": "Organization",
      "name": "Imageexpert24",
      "url": "{{ url('/') }}"
    },
    "areaServed": "Worldwide",
    "description": "Precise clipping path and background removal service for product, apparel, jewelry and e-commerce photography."
  }
  </script>

  <link href="{{asset('frontend/assets/img/favicon.jpg')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/logo2.jpg')}}" rel="apple-touch-icon">

  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  @vite(['resources/css/app.css'])

</head>

<body class="pt-[114px]">

  @include('partials.header')

  <div class="breadcrumbs">
    <div class="mx-auto max-w-[1200px] px-4 lg:flex lg:items-center lg:justify-between">
      <h2>Clipping Path Gallery</h2>
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Clipping Path</li>
      </ol>
    </div>
  </div>

  <section class="portfolio">
    <div class="mx-auto max-w-[1200px] px-4">

      <div class="portfolio-container flow-root" data-aos="fade-up">

        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path1.jpg') }}" alt="Clipping path service sample 1 - Imageexpert24" title="Sample 1" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path2.jpg') }}" alt="Clipping path service sample 2 - Imageexpert24" title="Sample 2" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path3.jpg') }}" alt="Clipping path service sample 3 - Imageexpert24" title="Sample 3" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path4.jpg') }}" alt="Clipping path service sample 4 - Imageexpert24" title="Sample 4" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path5.jpg') }}" alt="Clipping path service sample 5 - Imageexpert24" title="Sample 5" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path6.jpg') }}" alt="Clipping path service sample 6 - Imageexpert24" title="Sample 6" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path7.jpg') }}" alt="Clipping path service sample 7 - Imageexpert24" title="Sample 7" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path8.jpg') }}" alt="Clipping path service sample 8 - Imageexpert24" title="Sample 8" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path9.jpg') }}" alt="Clipping path service sample 9 - Imageexpert24" title="Sample 9" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path10.jpg') }}" alt="Clipping path service sample 10 - Imageexpert24" title="Sample 10" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path11.jpg') }}" alt="Clipping path service sample 11 - Imageexpert24" title="Sample 11" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path12.jpg') }}" alt="Clipping path service sample 12 - Imageexpert24" title="Sample 12" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path13.jpg') }}" alt="Clipping path service sample 13 - Imageexpert24" title="Sample 13" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path14.jpg') }}" alt="Clipping path service sample 14 - Imageexpert24" title="Sample 14" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path15.jpg') }}" alt="Clipping path service sample 15 - Imageexpert24" title="Sample 15" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path16.jpg') }}" alt="Clipping path service sample 16 - Imageexpert24" title="Sample 16" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path17.jpg') }}" alt="Clipping path service sample 17 - Imageexpert24" title="Sample 17" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path18.jpg') }}" alt="Clipping path service sample 18 - Imageexpert24" title="Sample 18" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path19.jpg') }}" alt="Clipping path service sample 19 - Imageexpert24" title="Sample 19" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path20.jpg') }}" alt="Clipping path service sample 20 - Imageexpert24" title="Sample 20" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path21.jpg') }}" alt="Clipping path service sample 21 - Imageexpert24" title="Sample 21" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path22.jpg') }}" alt="Clipping path service sample 22 - Imageexpert24" title="Sample 22" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path23.jpg') }}" alt="Clipping path service sample 23 - Imageexpert24" title="Sample 23" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path24.jpg') }}" alt="Clipping path service sample 24 - Imageexpert24" title="Sample 24" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path25.jpg') }}" alt="Clipping path service sample 25 - Imageexpert24" title="Sample 25" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path26.jpg') }}" alt="Clipping path service sample 26 - Imageexpert24" title="Sample 26" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path27.jpg') }}" alt="Clipping path service sample 27 - Imageexpert24" title="Sample 27" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path28.jpg') }}" alt="Clipping path service sample 28 - Imageexpert24" title="Sample 28" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path29.jpg') }}" alt="Clipping path service sample 29 - Imageexpert24" title="Sample 29" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path30.jpg') }}" alt="Clipping path service sample 30 - Imageexpert24" title="Sample 30" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path31.jpg') }}" alt="Clipping path service sample 31 - Imageexpert24" title="Sample 31" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path32.jpg') }}" alt="Clipping path service sample 32 - Imageexpert24" title="Sample 32" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path33.jpg') }}" alt="Clipping path service sample 33 - Imageexpert24" title="Sample 33" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path34.jpg') }}" alt="Clipping path service sample 34 - Imageexpert24" title="Sample 34" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path35.jpg') }}" alt="Clipping path service sample 35 - Imageexpert24" title="Sample 35" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path36.jpg') }}" alt="Clipping path service sample 36 - Imageexpert24" title="Sample 36" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path37.jpg') }}" alt="Clipping path service sample 37 - Imageexpert24" title="Sample 37" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path38.jpg') }}" alt="Clipping path service sample 38 - Imageexpert24" title="Sample 38" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path39.jpg') }}" alt="Clipping path service sample 39 - Imageexpert24" title="Sample 39" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path40.jpg') }}" alt="Clipping path service sample 40 - Imageexpert24" title="Sample 40" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path41.jpg') }}" alt="Clipping path service sample 41 - Imageexpert24" title="Sample 41" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path42.jpg') }}" alt="Clipping path service sample 42 - Imageexpert24" title="Sample 42" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path43.jpg') }}" alt="Clipping path service sample 43 - Imageexpert24" title="Sample 43" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path44.jpg') }}" alt="Clipping path service sample 44 - Imageexpert24" title="Sample 44" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path45.jpg') }}" alt="Clipping path service sample 45 - Imageexpert24" title="Sample 45" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path46.jpg') }}" alt="Clipping path service sample 46 - Imageexpert24" title="Sample 46" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path47.jpg') }}" alt="Clipping path service sample 47 - Imageexpert24" title="Sample 47" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path48.jpg') }}" alt="Clipping path service sample 48 - Imageexpert24" title="Sample 48" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path49.jpg') }}" alt="Clipping path service sample 49 - Imageexpert24" title="Sample 49" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path50.jpg') }}" alt="Clipping path service sample 50 - Imageexpert24" title="Sample 50" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path51.jpg') }}" alt="Clipping path service sample 51 - Imageexpert24" title="Sample 51" gallery="clippingGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/clippingpath/clipping-path52.jpg') }}" alt="Clipping path service sample 52 - Imageexpert24" title="Sample 52" gallery="clippingGrid" />
      </div>

    </div>
  </section>

  @include('partials.footer')

  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
