<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Image Editing, Clipping Path &amp; Photo Retouching Services | Imageexpert24</title>
  <meta name="description" content="Imageexpert24 offers professional photo editing services — clipping path, image manipulation, background removal, image masking and photo retouching — with fast turnaround and affordable pricing.">
  <meta name="keywords" content="photo editing service, clipping path service, image manipulation, photo retouching, background removal, image masking, product photo editing, ecommerce photo editing">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="{{ url()->current() }}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Imageexpert24">
  <meta property="og:title" content="Image Editing, Clipping Path &amp; Photo Retouching Services | Imageexpert24">
  <meta property="og:description" content="Professional photo editing services — clipping path, image manipulation, background removal, image masking and photo retouching — with fast turnaround and affordable pricing.">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('frontend/assets/img/logo.png') }}">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Image Editing, Clipping Path &amp; Photo Retouching Services | Imageexpert24">
  <meta name="twitter:description" content="Professional photo editing services — clipping path, image manipulation, background removal, image masking and photo retouching — with fast turnaround and affordable pricing.">
  <meta name="twitter:image" content="{{ asset('frontend/assets/img/logo.png') }}">

  <!-- Structured Data -->
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@type": "Organization",
    "name": "Imageexpert24",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('frontend/assets/img/logo.png') }}",
    "email": "info@imageexpert24.com",
    "telephone": "+8801921020187",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Dhaka",
      "postalCode": "1219",
      "addressCountry": "BD"
    },
    "sameAs": [
      "https://www.facebook.com/imageexpert24",
      "https://twitter.com/Imagesexpert24",
      "https://www.instagram.com/imageexpert24/",
      "https://www.youtube.com/c/ImageExpert24"
    ]
  }
  </script>

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon.jpg')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/logo2.jpg')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- notification allert -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/toastr/toastr.min.css') }}">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  {{-- Styles the shared header/footer partials (partials/header.blade.php, partials/footer.blade.php)
       now written in Tailwind. No Preflight/base reset here on purpose — this page's own
       hero/about/services/portfolio/testimonials sections are still Bootstrap-driven
       and untouched; Preflight would reset their heading/spacing styles. Compiled from
       resources/css/marketing-legacy.css via the Tailwind CLI, not @vite (see that
       file's header comment for why). --}}
  <link href="{{ asset('frontend/assets/css/marketing-legacy.css') }}" rel="stylesheet">

</head>


<body>


  <!-- ======= Header ======= -->
  <header id="header">
    <div class="mx-auto flex max-w-[1200px] items-center px-4">

      <div class="logo">
        <a href="{{ url('/') }}"><img src="{{asset('frontend/assets/img/logo.png')}}" alt="Imageexpert24 logo"></a>
      </div>

      <nav id="navbar" class="navbar ml-auto">
        <ul>
          <li><a class="scrollto" href="#hero">Home</a></li>
          <li><a href="{{ URL::to('about-us') }}">About Us</a></li>
          <li><a class="scrollto" href="#services">Services</a></li>
          <li class="dropdown"><a href="#"><span>Samples</span> <x-icon.chevron-down class="h-3 w-3" /></a>
            <ul>
              <li><a href="{{URL::to('gallery') }}" target="_blank">Gallery</a></li>
              <li><a href="{{URL::to('clippingpath') }}" target="_blank">Clipping Path</a></li>
            </ul>
          </li>
          <li><a class="scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="scrollto" href="#testimonials">Testimonials</a></li>
          <li><a class="scrollto" href="#contact">Contact Us</a></li>
          <li><a class="scrollto nav-cta" href="#contact">Free Trial</a></li>
        </ul>
        <i class="mobile-nav-toggle">
          <x-icon.menu class="icon-menu-open h-7 w-7" />
          <x-icon.x class="icon-menu-close hidden h-7 w-7" />
        </i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <!--start home-->




  <!--<main id="main">-->


  <section id="hero" class="hero">



    <!-- start slider -->

    <script src="{{asset('frontend/js/jssor.slider-28.1.0.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      window.jssor_1_slider_init = function() {

        var jssor_1_SlideoTransitions = [
          [{
            b: -1,
            d: 1,
            ls: 0.5
          }, {
            b: 0,
            d: 1000,
            y: 5,
            e: {
              y: 6
            }
          }],
          [{
            b: -1,
            d: 1,
            ls: 0.5
          }, {
            b: 200,
            d: 1000,
            y: 25,
            e: {
              y: 6
            }
          }],
          [{
            b: -1,
            d: 1,
            ls: 0.5
          }, {
            b: 400,
            d: 1000,
            y: 45,
            e: {
              y: 6
            }
          }],
          [{
            b: -1,
            d: 1,
            ls: 0.5
          }, {
            b: 600,
            d: 1000,
            y: 65,
            e: {
              y: 6
            }
          }],
          [{
            b: -1,
            d: 1,
            ls: 0.5
          }, {
            b: 800,
            d: 1000,
            y: 85,
            e: {
              y: 6
            }
          }],
          [{
            b: -1,
            d: 1,
            ls: 0.5
          }, {
            b: 500,
            d: 1000,
            y: 195,
            e: {
              y: 6
            }
          }],
          [{
            b: 0,
            d: 2000,
            y: 30,
            e: {
              y: 3
            }
          }],
          [{
            b: -1,
            d: 1,
            rY: -15,
            tZ: 100
          }, {
            b: 0,
            d: 1500,
            y: 30,
            o: 1,
            e: {
              y: 3
            }
          }],
          [{
            b: -1,
            d: 1,
            rY: -15,
            tZ: -100
          }, {
            b: 0,
            d: 1500,
            y: 100,
            o: 0.8,
            e: {
              y: 3
            }
          }],
          [{
            b: 500,
            d: 1500,
            o: 1
          }],
          [{
            b: 0,
            d: 1000,
            y: 380,
            e: {
              y: 6
            }
          }],
          [{
            b: 300,
            d: 1000,
            x: 80,
            e: {
              x: 6
            }
          }],
          [{
            b: 300,
            d: 1000,
            x: 330,
            e: {
              x: 6
            }
          }],
          [{
            b: -1,
            d: 1,
            r: -110,
            sX: 5,
            sY: 5
          }, {
            b: 0,
            d: 2000,
            o: 1,
            r: -20,
            sX: 1,
            sY: 1,
            e: {
              o: 6,
              r: 6,
              sX: 6,
              sY: 6
            }
          }],
          [{
            b: 0,
            d: 600,
            x: 150,
            o: 0.5,
            e: {
              x: 6
            }
          }],
          [{
            b: 0,
            d: 600,
            x: 1140,
            o: 0.6,
            e: {
              x: 6
            }
          }],
          [{
            b: -1,
            d: 1,
            sX: 5,
            sY: 5
          }, {
            b: 600,
            d: 600,
            o: 1,
            sX: 1,
            sY: 1,
            e: {
              sX: 3,
              sY: 3
            }
          }]
        ];

        var jssor_1_options = {
          $AutoPlay: 1,
          $LazyLoading: 1,
          $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$,
            $SpacingX: 20,
            $SpacingY: 20
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 3000;
        var MAX_HEIGHT = 2600;

        function ScaleSlider() {
          var containerElement = jssor_1_slider.$Elmt.parentNode;
          var containerWidth = containerElement.clientWidth;

          if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
          } else {
            window.setTimeout(ScaleSlider, 30);
          }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
      };
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
      /*jssor slider bullet skin 132 css*/
      .jssorb132 {
        position: absolute;
      }

      .jssorb132 .i {
        position: absolute;
        cursor: pointer;
      }

      .jssorb132 .i .b {
        fill: #fff;
        fill-opacity: 0.8;
        stroke: #000;
        stroke-width: 1600;
        stroke-miterlimit: 10;
        stroke-opacity: 0.7;
      }

      .jssorb132 .i:hover .b {
        fill: #000;
        fill-opacity: .7;
        stroke: #fff;
        stroke-width: 2000;
        stroke-opacity: 0.8;
      }

      .jssorb132 .iav .b {
        fill: #000;
        stroke: #fff;
        stroke-width: 2400;
        fill-opacity: 0.8;
        stroke-opacity: 1;
      }

      .jssorb132 .i.idn {
        opacity: 0.3;
      }

      .jssora051 {
        display: block;
        position: absolute;
        cursor: pointer;
      }

      .jssora051 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 360;
        stroke-miterlimit: 10;
      }

      .jssora051:hover {
        opacity: .8;
      }

      .jssora051.jssora051dn {
        opacity: .5;
      }

      .jssora051.jssora051ds {
        opacity: .3;
        pointer-events: none;
      }
    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
      <defs>
        <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
          <feGaussianBlur stddeviation="4"></feGaussianBlur>
        </filter>
        <radialGradient id="jssor_1_grd_2">
          <stop offset="0" stop-color="#fff"></stop>
          <stop offset="1" stop-color="#000"></stop>
        </radialGradient>
        <mask id="jssor_1_msk_3">
          <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
        </mask>
      </defs>
    </svg>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:800px;overflow:hidden;visibility:hidden;">
      <!-- Loading Screen -->
      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('frontend/img/spin.svg')}}" />
      </div>
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:800px;overflow:hidden;">
        <div>
          <img data-u="image" style="opacity:0.8;" data-src="{{asset('frontend/img/image-manipulation.jpg')}}" alt="Image manipulation service by Imageexpert24" />


          <g mask="url(#jssor_1_msk_3)">
            <path data-to="300px -180px" fill="#fafbfc" stroke="rgba(250,251,252,0.5)" stroke-width="20" d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10" style="position:left;overflow:visible;"></path>
          </g>
          </svg>

          <svg viewbox="0 0 800 72" data-to="50% 50%" width="1500" height="72" data-t="11" style="left:-1200px;top:50px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:75px;font-weight:900;overflow:visible;">
            <text fill="#fafbfc" stroke="rgba(0,0,0)" text-anchor="left" x="400" y="72">Image
            </text>
          </svg>

          <svg viewbox="0 0 800 72" data-to="50% 50%" width="1000" height="72" data-t="12" style="left:1600px;top:110px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
            <text fill="#fafbfc" stroke="rgba(0,0,0)" text-anchor="left" x="400" y="72">Manipulation
            </text>
          </svg>
        </div>
        <div>
          <img data-u="image" data-src="{{asset('frontend/img/imag-masking.jpg')}}" alt="Image masking service by Imageexpert24" />
          <div data-ts="flat" data-p="540" data-po="40% 50%" style="left:0px;top:0px;width:1600px;height:800px;position:absolute;">
            <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:120px;top:260px;width:300px;height:200px;position:absolute;">
              <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:black;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;"><br /></div>

              <g mask="url(#jssor_1_msk_3)">
                <path data-to="300px -180px" fill="#fafbfc" stroke="rgba(250,251,252,0.5)" stroke-width="20" d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10" style="position:left;overflow:visible;"></path>
              </g>
              </svg>

              <svg viewbox="0 0 800 72" data-to="50% 50%" width="1700" height="72" data-t="11" style="left:-1200px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:75px;font-weight:900;overflow:visible;">
                <text fill="#fafbfc" stroke="rgba(0,0,0)" text-anchor="left" x="400" y="72">Image
                </text>
              </svg>

              <svg viewbox="0 0 800 72" data-to="50% 50%" width="1300" height="72" data-t="12" style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
                <text fill="#fafbfc" stroke="rgba(0,0,0)" text-anchor="left" x="400" y="72">Masking
                </text>
              </svg>

              </text>
              </svg>
              <div data-to="50% 50%" data-t="8" style="filter:url('#jssor_1_flt_1');left:200px;top:0px;width:500px;height:50px;position:absolute;opacity:0;color:#C49D8F;font-family:Roboto Condensed, sans-serif;font-size:48px;line-height:1.2;letter-spacing:0.1em;text-align:center;"></div>
              <svg viewbox="0 0 800 100" width="800" height="100" data-t="9" style="left:40px;top:250px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:100px;font-weight:900;letter-spacing:0.5em;overflow:visible;">
                <text fill="rgba(255,255,255,0.7)" stroke="#ff9500" text-anchor="middle" x="400" y="100">

                </text>
              </svg>
            </div>
          </div>
        </div>
        <div style="background-color:#000000;">
          <img data-u="image" style="opacity:0.8;" data-src="{{asset('frontend/img/shoe-clipping-path1.jpg')}}" alt="Clipping path service for shoe product photo by Imageexpert24" />
          <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">



            <g mask="url(#jssor_1_msk_3)">
              <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20" d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10" style="position:left;overflow:visible;"></path>
            </g>
            </svg>

            <svg viewbox="0 0 800 72" data-to="50% 50%" width="1500" height="72" data-t="11" style="left:-1600px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:75px;font-weight:900;overflow:visible;">
              <text fill="#fafbfc" stroke="rgba(0,0,0)" text-anchor="middle" x="400" y="72">Clipping
              </text>
            </svg>

            <svg viewbox="0 0 800 72" data-to="50% 50%" width="1200" height="72" data-t="12" style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
              <text fill="#fafbfc" stroke="rgba(0,0,0)" text-anchor="middle" x="400" y="72">Path
              </text>
            </svg>

          </div>

        </div>
        <div>
          <img data-u="image" data-src="{{asset('frontend/img/image-manipulation1.jpg')}}" alt="Image manipulation sample by Imageexpert24" />
          <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:800px;position:absolute;">
            <div data-to="50% 50%" data-t="13" style="left:100px;top:-20px;width:800px;height:200px;position:absolute;opacity:0;">
              <g mask="url(#jssor_1_msk_3)">
                <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20" d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10" style="position:left;overflow:visible;"></path>
              </g>
              </svg>

              <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11" style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:75px;font-weight:900;overflow:visible;">
                <text fill="#fafbfc" stroke="rgba(0,0,0)" text-anchor="middle" x="400" y="72">Image
                </text>
              </svg>

              <svg viewbox="0 0 800 72" data-to="50% 50%" width="700" height="75" data-t="12" style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
                <text fill="#fafbfc" stroke="rgba(0,0,0)" text-anchor="middle" x="400" y="72">Manipulation
                </text>
              </svg>
            </div>
          </div>
        </div>
        <div>
          <img data-u="image" data-src="{{asset('frontend/img/retouching-sample.jpg')}}" alt="Photo retouching sample by Imageexpert24" />
          <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:800px;position:absolute;">
            <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:black;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;"><br /></div>
            <g mask="url(#jssor_1_msk_3)">
              <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20" d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10" style="position:left;overflow:visible;"></path>
            </g>
            </svg>

            <svg viewbox="0 0 800 72" data-to="50% 50%" width="2600" height="72" data-t="11" style="left:-1600px;top:120px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:75px;font-weight:900;overflow:visible;">
              <text fill="#fafbfc" stroke="rgba(0,0,0)" stroke="rgba(0,0,0)" text-anchor="middle" x="400" y="72">Image
              </text>
            </svg>

            <svg viewbox="0 0 800 72" data-to="50% 50%" width="2200" height="72" data-t="12" style="left:1600px;top:183px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
              <text fill="#fafbfc" stroke="rgba(0,0,0)" stroke="rgba(0,0,0)" text-anchor="middle" x="400" y="72">Retouching
              </text>
            </svg>
          </div>
        </div>
      </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
      <!-- Bullet Navigator -->
      <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:12px;height:12px;">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
          </svg>
        </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
          <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
      </div>
      <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
          <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
      </div>
    </div>
    <script type="text/javascript">
      jssor_1_slider_init();
    </script>

    <div class="hero-container">
      <h1>Professional Photo Editing &amp; Clipping Path Services</h1>
      <h2>Clipping Path, Image Manipulation, Retouching &amp; Background Removal — Fast Turnaround, Affordable Price</h2>
    </div>

  </section><!-- End hero Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="mx-auto max-w-[1200px] px-4">

      <div class="flex flex-col items-stretch gap-10 lg:flex-row">
        <div class="content lg:w-5/12" data-aos="fade-up">
          <h3>Imageexpert24 is an online graphics design studio</h3>
          <p>
            We deliver clipping path, image manipulation, background removal, masking and retouching for e-commerce sellers, product photographers and creative businesses worldwide — with fast turnaround, consistent quality and clear communication at every step.
          </p>

          <a href="{{ URL::to('about-us') }}" class="about-btn">About us <x-icon.chevron-right class="h-4 w-4" /></a>
        </div>
        <div class="lg:w-7/12">

          <div class="icon-boxes flex flex-col justify-center">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <x-icon.footprints class="h-9 w-9" />
                <h4>Round-the-Clock Production</h4>
                <p>Our studio runs three shifts, 24 hours a day, seven days a week, across five production levels — from junior designer to senior quality control — so your deadline is never waiting on our time zone.</p>
              </div>
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <x-icon.image class="h-9 w-9" />
                <h4>Dedicated Support Team</h4>
                <p>A customer support operator is on every shift to answer questions, track your files through production, and keep you updated from order to delivery.</p>
              </div>
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><x-icon.paypal class="h-9 w-9" /></div>
                <h4>Flexible Payment Options</h4>
                <p>Pay the way that works for you — PayPal, Payoneer, bank transfer, debit or credit card, or cash on delivery.</p>
              </div>
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <x-icon.user-plus class="h-9 w-9" />
                <h4>Trusted Across Industries</h4>
                <p>We work with web developers, graphic and photo studios, catalog and magazine publishers, printing houses, advertising firms, and clothing and footwear brands worldwide.</p>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->



  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="mx-auto max-w-[1200px] px-4">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Services</h2>
        <p>Professional photo editing services, delivered fast and priced to fit your budget.</p>
      </div>

      <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
        <div class="icon-box" data-aos="fade-up">
          <div class="icon"><x-icon.square-pen class="h-12 w-12" /></div>
          <h4 class="title"><a href="{{ URL::to('gallery') }}">Image Editing</a></h4>
          <p class="description">Background removal, color correction and general photo cleanup to make your images sales-ready.</p>
        </div>

        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><x-icon.crop class="h-12 w-12" /></div>
          <h4 class="title"><a href="{{ URL::to('clippingpath') }}">Clipping Path</a></h4>
          <p class="description">Precise pen-tool cutouts for clean, professional product edges on any background.</p>
        </div>

        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><x-icon.wand-sparkles class="h-12 w-12" /></div>
          <h4 class="title"><a href="{{ URL::to('gallery') }}">Neck Joint</a></h4>
          <p class="description">Seamless neck-to-body joins for ghost mannequin and flat-lay clothing photography.</p>
        </div>

        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><x-icon.pen-line class="h-12 w-12" /></div>
          <h4 class="title"><a href="{{ URL::to('gallery') }}">Image Enhancement</a></h4>
          <p class="description">Restoration and manipulation that brings old or low-quality images up to a modern standard.</p>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts section-bg">
    <div class="mx-auto max-w-[1200px] px-4">

      <div class="grid grid-cols-2 gap-8 lg:grid-cols-4">

        <div class="count-box">
          <x-icon.smile class="h-11 w-11" />
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Happy Clients</strong></p>
        </div>

        <div class="count-box">
          <x-icon.book-text class="h-11 w-11" />
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Projects</strong></p>
        </div>

        <div class="count-box">
          <x-icon.headset class="h-11 w-11" />
          <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Hours Of Support</strong></p>
        </div>

        <div class="count-box">
          <x-icon.users class="h-11 w-11" />
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Hard Workers</strong></p>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Cta Section ======= -->


  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">

    <style>
      .portimg {
        border: 2px solid rgb(129, 62, 62);
      }
    </style>

    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Portfolio</h2>
        <p>Here is our Portfolio for our services which are done by us. It's just for your satisfaction that we are here to edit your images correctly and values with comfortable price.</p>
      </div>

      <div class="row" data-aos="fade-in">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-path">Clipping Path</li>
            <li data-filter=".filter-multipath">Multi Clipping Path</li>
            <li data-filter=".filter-retouching">Retouching</li>
            <li data-filter=".filter-masking">Masking</li>
            <li data-filter=".filter-editing">Image Editing</li>
          </ul>
        </div>
      </div>



      <div class="row portfolio-container" data-aos="fade-up">

        <div class="col-lg-4 col-md-6 portfolio-item filter-path">
          <div class="portfolio-wrap">


            <img src="{{'frontend/assets/img/portfolio/Clipping Path1.jpg'}}" class="img-fluid portimg" alt="Clipping path portfolio sample 1 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/Clipping Path1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-multipath">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/multiclippingpath1.jpg')}}" class="img-fluid portimg" alt="Multi clipping path portfolio sample 1 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/multiclippingpath1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-path">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/Clipping Path2.jpg')}}" class="img-fluid portimg" alt="Clipping path portfolio sample 2 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/Clipping Path2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-retouching">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/retouching1.jpg')}}" class="img-fluid portimg" alt="Photo retouching portfolio sample by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/retouching1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-path">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/Clipping Path4.jpg')}}" class="img-fluid portimg" alt="Clipping path portfolio sample 4 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/Clipping Path4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-editing">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/image-editing1.jpg')}}" class="img-fluid portimg" alt="Image editing portfolio sample 1 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/image-editing1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-retouching">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/retouching3.jpg')}}" class="img-fluid portimg" alt="Photo retouching portfolio sample 3 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/retouching3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-multipath">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/multiclippingpath2.jpg')}}" class="img-fluid portimg" alt="Multi clipping path portfolio sample 2 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/multiclippingpath2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-editing">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/image-editing-2.jpg')}}" class="img-fluid portimg" alt="Image editing portfolio sample 2 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/image-editing-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-retouching">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/retouching1.jpg')}}" class="img-fluid portimg" alt="Photo retouching portfolio sample by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/retouching1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>





        <div class="col-lg-4 col-md-6 portfolio-item filter-masking">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/Making1.jpg')}}" class="img-fluid portimg" alt="Image masking portfolio sample 1 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/Making1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-multipath">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/multiclippingpath3.jpg')}}" class="img-fluid portimg" alt="Multi clipping path portfolio sample 3 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/multiclippingpath3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-editing">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/image-editing.jpg')}}" class="img-fluid portimg" alt="Image editing portfolio sample by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/image-editing.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-masking">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/Making2.jpeg')}}" class="img-fluid portimg" alt="Image masking portfolio sample 2 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/Making2.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-masking">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/Making3.jpeg')}}" class="img-fluid portimg" alt="Image masking portfolio sample 3 by Imageexpert24">
            <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/Making3.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Testimonials</h2>
        <p>Hear what our clients have to say about working with us.</p>
      </div>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I have been working exclusively with Image Expert24 for over 2 years now.
                I have been very satisfied with the quality of work and for the turn around time.
                Most of the work I send in needs the background replaced with transparent or white and in many cases,
                I need shadows added. The work is outstanding and the price is very fair. I would recommend the team at Image Experts24 as a quality editing service.

                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{asset('frontend/assets/img/testimonials/Keith French.jpg')}}" class="testimonial-img" alt="Keith French - Imageexpert24 client testimonial">
              <h3>Keith French</h3>
              <h4>Owner &amp; Keith French Photograpy owner</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                “I’ve been working with Imageexpert24 for several years. My business depends on their fast and reliable services.
                They have a positive and willing attitude and always go the extra mile. They have helped me tremendously to streamline my editing and get images back fast to my clients.
                Their editing services help me to look like a hero to my clients. Beyond satisfied!!!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{asset('frontend/assets/img/testimonials/Sherry Muldoon.jpg')}}" class="testimonial-img" alt="Sherry Muldoon - Imageexpert24 client testimonial">
              <h3>Sherry Muldoon</h3>
              <h4>Ceo &amp;Dream Focus Studio</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- start Team Section -->


  <!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="mx-auto max-w-[1200px] px-4" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Imageexpert24 is giving best service 24 hours tarn around time. We give service with quickly, in time, quality with affordable price. So contact with us within short time.</p>
      </div>

      <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">

        <div class="contact-card">
          <div class="contact-card-header bg-brand-navy">
            <x-icon.mail class="h-5 w-5" />
            <h3>Contact Us</h3>
          </div>

          <form method="POST" action="{{route('contact-form.store') }}" class="contact-card-body">

            {{ csrf_field() }}
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
              <div>
                <label class="form-label">Name:</label>
                <input type="text" name="name" class="form-input" value="{{ old('name') }}">
                @if ($errors->has('name'))
                <span class="form-error">{{ $errors->first('name') }}</span>
                @endif
              </div>
              <div>
                <label class="form-label">Email:</label>
                <input type="text" name="email" class="form-input" value="{{ old('email') }}">
                @if ($errors->has('email'))
                <span class="form-error">{{ $errors->first('email') }}</span>
                @endif
              </div>
            </div>
            <div class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-2">
              <div>
                <label class="form-label">Phone:</label>
                <input type="text" name="phone" class="form-input" value="{{ old('phone') }}">
                @if ($errors->has('phone'))
                <span class="form-error">{{ $errors->first('phone') }}</span>
                @endif
              </div>
              <div>
                <label class="form-label">Subject:</label>
                <input type="text" name="subject" class="form-input" value="{{ old('subject') }}">
                @if ($errors->has('subject'))
                <span class="form-error">{{ $errors->first('subject') }}</span>
                @endif
              </div>
            </div>

            <div class="mt-4">
              <label class="form-label">Message:</label>
              <textarea name="message" rows="9" placeholder="Write your details heare" class="form-input">{{ old('message') }}</textarea>
              @if ($errors->has('message'))
              <span class="form-error">{{ $errors->first('message') }}</span>
              @endif
            </div>

            <div class="mt-6 text-center">
              <button class="btn-submit">Send <x-icon.send class="h-4 w-4" /></button>
            </div>
          </form>

        </div>

        <div class="contact-card">
          <div class="contact-card-header bg-brand-accent">
            <x-icon.gift class="h-5 w-5" />
            <h3>Free Trial</h3>
          </div>

          <form method="post" action="{{route('FreeTrial.store') }}" enctype="multipart/form-data" class="contact-card-body">
            {{ csrf_field() }}
            <div class="mb-4">
              <label class="form-label">Name:</label>
              <input type="text" name="name" class="form-input" required="">
            </div>
            <div class="mb-4">
              <label class="form-label">Email:</label>
              <input type="email" name="email" class="form-input" required="">
            </div>
            <div class="mb-4">
              <label class="form-label">Subject:</label>
              <input type="text" name="subject" class="form-input" required="">
            </div>
            <div class="mb-4">
              <label class="form-label">Message:</label>
              <textarea name="message" class="form-input" required=""></textarea>
            </div>
            <div class="mb-4">
              <label class="form-label">Chose Your File:</label>
              <input type="file" name="attachment" class="form-input">
            </div>
            <div class="text-center">
              <button class="btn-submit">Submit <x-icon.send class="h-4 w-4" /></button>
            </div>

          </form>

        </div>

      </div>

      <div class="mt-8 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-12">
        <div class="info-box lg:col-span-6">
          <x-icon.map-pin class="h-8 w-8" />
          <h3>USA address</h3>
          <p>
            USA address
            3031 fredna place,
            midland, texas 79707
            USA
            Mobile Number: 0015127439457
            Email: Info@imageexpert24.com
          </p>
        </div>

        <div class="info-box lg:col-span-3">
          <x-icon.map-pin class="h-8 w-8" />
          <h3>Europe Address</h3>
          <p>
            14 rue Gabriel peri
            1er etage
            st-Denis-93200
            Paris, France
            Mob:0033652101391
            Email:info@imageexpert24.com
          </p>
        </div>

        <div class="info-box lg:col-span-3">
          <x-icon.map-pin class="h-8 w-8" />
          <h3>Bangladesh address</h3>
          <p>
            385/7,N.S. Road,
            East Rampura,Banasree
            Dhaka-1219, Bangladesh
            Mobile: 01921020187
            Email: info@imageexpert24.com
          </p>
        </div>

      </div>

      <div class="mt-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27064.885872956405!2d-102.14443399999998!3d32.01211399999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86fbd96c4113b0ff%3A0xe0363e7033025842!2s3031%20Fredna%20Pl%2C%20Midland%2C%20TX%2079707!5e0!3m2!1sen!2sus!4v1617864785815!5m2!1sen!2sus" style="width: 100%; height: 450px; border: 0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

    </div>
  </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @include('partials.footer')

  </div>
  </div>
  </div>




  <!-- jQuery (must load before toastr, which depends on it) -->
  <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

  <script type="text/javascript" src="{{ asset('frontend/assets/vendor/toastr/toastr.min.js') }}"></script>

  <!-- for sweet alert  -->
  <script src="{{ asset('frontend/assets/vendor/sweetalert2/sweetalert2.min.js') }}"></script>


  <style>
    #toast-container.toast-bottom-right {
      bottom: 70px;
    }
  </style>

  @if(Session::has('messege'))
  <script>
    toastr.options.positionClass = 'toast-bottom-right';
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch (type) {
      case 'info':
        toastr.info("{{ Session::get('messege') }}");
        break;
      case 'success':
        toastr.success("{{ Session::get('messege') }}");
        break;
      case 'warning':
        toastr.warning("{{ Session::get('messege') }}");
        break;
      case 'error':
        toastr.error("{{ Session::get('messege') }}");
        break;
    }
  </script>
  @endif
