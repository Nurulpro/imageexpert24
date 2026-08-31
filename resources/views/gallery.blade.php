<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Photo Editing Gallery | Imageexpert24</title>
  <meta name="description" content="Browse Imageexpert24's photo editing gallery — real samples of product photo retouching, background removal and image editing work.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="{{ url()->current() }}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Imageexpert24">
  <meta property="og:title" content="Photo Editing Gallery | Imageexpert24">
  <meta property="og:description" content="Browse Imageexpert24's photo editing gallery — real samples of product photo retouching, background removal and image editing work.">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('frontend/assets/img/logo.png') }}">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Photo Editing Gallery | Imageexpert24">
  <meta name="twitter:description" content="Browse Imageexpert24's photo editing gallery — real samples of product photo retouching, background removal and image editing work.">
  <meta name="twitter:image" content="{{ asset('frontend/assets/img/logo.png') }}">

  <!-- Structured Data -->
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
      { "@type": "ListItem", "position": 2, "name": "Gallery", "item": "{{ url()->current() }}" }
    ]
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
      <h2>Gallery</h2>
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Gallery</li>
      </ol>
    </div>
  </div>

  <section class="portfolio">
    <div class="mx-auto max-w-[1200px] px-4">

      <div class="portfolio-container flow-root" data-aos="fade-up">

        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample1.jpg') }}" alt="Product photo editing sample 1 - Imageexpert24 gallery" title="Sample 1" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample2.jpg') }}" alt="Product photo editing sample 2 - Imageexpert24 gallery" title="Sample 2" gallery="galleryGrid" />

        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample3.jpg') }}" alt="Product photo editing sample 3 - Imageexpert24 gallery" title="Sample 3" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample4.jpg') }}" alt="Product photo editing sample 4 - Imageexpert24 gallery" title="Sample 4" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample5.jpg') }}" alt="Product photo editing sample 5 - Imageexpert24 gallery" title="Sample 5" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample6.jpg') }}" alt="Product photo editing sample 6 - Imageexpert24 gallery" title="Sample 6" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample7.jpg') }}" alt="Product photo editing sample 7 - Imageexpert24 gallery" title="Sample 7" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample8.jpg') }}" alt="Product photo editing sample 8 - Imageexpert24 gallery" title="Sample 8" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample9.jpg') }}" alt="Product photo editing sample 9 - Imageexpert24 gallery" title="Sample 9" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample10.jpg') }}" alt="Product photo editing sample 10 - Imageexpert24 gallery" title="Sample 10" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample11.jpg') }}" alt="Product photo editing sample 11 - Imageexpert24 gallery" title="Sample 11" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample12.jpg') }}" alt="Product photo editing sample 12 - Imageexpert24 gallery" title="Sample 12" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample13.jpg') }}" alt="Product photo editing sample 13 - Imageexpert24 gallery" title="Sample 13" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample14.jpg') }}" alt="Product photo editing sample 14 - Imageexpert24 gallery" title="Sample 14" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample15.jpg') }}" alt="Product photo editing sample 15 - Imageexpert24 gallery" title="Sample 15" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample16.jpg') }}" alt="Product photo editing sample 16 - Imageexpert24 gallery" title="Sample 16" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample17.jpg') }}" alt="Product photo editing sample 17 - Imageexpert24 gallery" title="Sample 17" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample18.jpg') }}" alt="Product photo editing sample 18 - Imageexpert24 gallery" title="Sample 18" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample19.jpg') }}" alt="Product photo editing sample 19 - Imageexpert24 gallery" title="Sample 19" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample20.jpg') }}" alt="Product photo editing sample 20 - Imageexpert24 gallery" title="Sample 20" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample21.jpg') }}" alt="Product photo editing sample 21 - Imageexpert24 gallery" title="Sample 21" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample22.jpg') }}" alt="Product photo editing sample 22 - Imageexpert24 gallery" title="Sample 22" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample23.jpg') }}" alt="Product photo editing sample 23 - Imageexpert24 gallery" title="Sample 23" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample24.jpg') }}" alt="Product photo editing sample 24 - Imageexpert24 gallery" title="Sample 24" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample25.jpg') }}" alt="Product photo editing sample 25 - Imageexpert24 gallery" title="Sample 25" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample26.jpg') }}" alt="Product photo editing sample 26 - Imageexpert24 gallery" title="Sample 26" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample27.jpg') }}" alt="Product photo editing sample 27 - Imageexpert24 gallery" title="Sample 27" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample28.jpg') }}" alt="Product photo editing sample 28 - Imageexpert24 gallery" title="Sample 28" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample29.jpg') }}" alt="Product photo editing sample 29 - Imageexpert24 gallery" title="Sample 29" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample30.jpg') }}" alt="Product photo editing sample 30 - Imageexpert24 gallery" title="Sample 30" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample31.jpg') }}" alt="Product photo editing sample 31 - Imageexpert24 gallery" title="Sample 31" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample32.jpg') }}" alt="Product photo editing sample 32 - Imageexpert24 gallery" title="Sample 32" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample33.jpg') }}" alt="Product photo editing sample 33 - Imageexpert24 gallery" title="Sample 33" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample34.jpg') }}" alt="Product photo editing sample 34 - Imageexpert24 gallery" title="Sample 34" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample35.jpg') }}" alt="Product photo editing sample 35 - Imageexpert24 gallery" title="Sample 35" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample36.jpg') }}" alt="Product photo editing sample 36 - Imageexpert24 gallery" title="Sample 36" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample37.jpg') }}" alt="Product photo editing sample 37 - Imageexpert24 gallery" title="Sample 37" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample38.jpg') }}" alt="Product photo editing sample 38 - Imageexpert24 gallery" title="Sample 38" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample39.jpg') }}" alt="Product photo editing sample 39 - Imageexpert24 gallery" title="Sample 39" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample40.jpg') }}" alt="Product photo editing sample 40 - Imageexpert24 gallery" title="Sample 40" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample41.jpg') }}" alt="Product photo editing sample 41 - Imageexpert24 gallery" title="Sample 41" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample42.jpg') }}" alt="Product photo editing sample 42 - Imageexpert24 gallery" title="Sample 42" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample43.jpg') }}" alt="Product photo editing sample 43 - Imageexpert24 gallery" title="Sample 43" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample44.jpg') }}" alt="Product photo editing sample 44 - Imageexpert24 gallery" title="Sample 44" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample45.jpg') }}" alt="Product photo editing sample 45 - Imageexpert24 gallery" title="Sample 45" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample46.jpg') }}" alt="Product photo editing sample 46 - Imageexpert24 gallery" title="Sample 46" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample47.jpg') }}" alt="Product photo editing sample 47 - Imageexpert24 gallery" title="Sample 47" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample48.jpg') }}" alt="Product photo editing sample 48 - Imageexpert24 gallery" title="Sample 48" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample49.jpg') }}" alt="Product photo editing sample 49 - Imageexpert24 gallery" title="Sample 49" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample50.jpg') }}" alt="Product photo editing sample 50 - Imageexpert24 gallery" title="Sample 50" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample51.jpg') }}" alt="Product photo editing sample 51 - Imageexpert24 gallery" title="Sample 51" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample52.jpg') }}" alt="Product photo editing sample 52 - Imageexpert24 gallery" title="Sample 52" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample53.jpg') }}" alt="Product photo editing sample 53 - Imageexpert24 gallery" title="Sample 53" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample54.jpg') }}" alt="Product photo editing sample 54 - Imageexpert24 gallery" title="Sample 54" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample55.jpg') }}" alt="Product photo editing sample 55 - Imageexpert24 gallery" title="Sample 55" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample56.jpg') }}" alt="Product photo editing sample 56 - Imageexpert24 gallery" title="Sample 56" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample57.jpg') }}" alt="Product photo editing sample 57 - Imageexpert24 gallery" title="Sample 57" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample58.jpg') }}" alt="Product photo editing sample 58 - Imageexpert24 gallery" title="Sample 58" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample59.jpg') }}" alt="Product photo editing sample 59 - Imageexpert24 gallery" title="Sample 59" gallery="galleryGrid" />
        <x-gallery-item src="{{ asset('frontend/assets/img/gallery/sample60.jpg') }}" alt="Product photo editing sample 60 - Imageexpert24 gallery" title="Sample 60" gallery="galleryGrid" />
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
