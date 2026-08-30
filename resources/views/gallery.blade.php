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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

</head>

<body style="padding-top: 114px;">

  @include('partials.header')

  <div class="breadcrumbs">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h2>Gallery</h2>
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Gallery</li>
      </ol>
    </div>
  </div>

  <section class="portfolio">
    <div class="container">

      <div class="row portfolio-container" data-aos="fade-up">

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample1.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 1 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample1.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample2.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 2 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample2.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample3.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 3 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample3.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample4.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 4 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample4.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 4"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample5.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 5 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample5.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 5"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample6.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 6 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample6.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 6"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample7.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 7 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample7.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 7"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample8.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 8 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample8.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 8"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample9.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 9 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample9.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 9"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample10.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 10 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample10.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 10"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample11.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 11 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample11.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 11"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample12.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 12 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample12.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 12"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample13.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 13 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample13.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 13"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample14.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 14 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample14.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 14"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample15.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 15 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample15.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 15"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample16.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 16 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample16.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 16"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample17.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 17 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample17.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 17"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample18.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 18 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample18.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 18"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample19.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 19 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample19.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 19"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample20.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 20 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample20.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 20"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample21.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 21 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample21.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 21"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample22.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 22 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample22.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 22"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample23.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 23 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample23.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 23"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample24.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 24 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample24.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 24"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample25.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 25 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample25.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 25"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample26.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 26 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample26.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 26"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample27.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 27 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample27.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 27"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample28.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 28 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample28.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 28"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample29.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 29 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample29.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 29"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample30.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 30 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample30.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 30"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample31.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 31 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample31.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 31"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample32.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 32 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample32.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 32"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample33.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 33 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample33.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 33"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample34.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 34 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample34.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 34"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample35.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 35 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample35.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 35"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample36.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 36 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample36.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 36"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample37.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 37 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample37.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 37"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample38.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 38 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample38.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 38"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample39.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 39 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample39.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 39"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample40.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 40 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample40.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 40"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample41.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 41 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample41.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 41"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample42.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 42 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample42.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 42"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample43.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 43 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample43.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 43"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample44.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 44 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample44.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 44"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample45.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 45 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample45.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 45"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample46.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 46 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample46.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 46"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample47.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 47 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample47.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 47"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample48.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 48 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample48.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 48"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample49.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 49 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample49.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 49"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample50.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 50 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample50.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 50"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample51.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 51 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample51.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 51"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample52.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 52 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample52.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 52"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample53.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 53 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample53.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 53"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample54.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 54 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample54.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 54"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample55.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 55 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample55.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 55"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample56.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 56 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample56.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 56"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample57.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 57 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample57.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 57"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample58.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 58 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample58.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 58"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample59.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 59 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample59.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 59"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/gallery/sample60.jpg')}}" class="img-fluid" loading="lazy" alt="Product photo editing sample 60 - Imageexpert24 gallery">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/gallery/sample60.jpg')}}" data-gallery="galleryGrid" class="portfolio-lightbox" title="Sample 60"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  @include('partials.footer')

  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
