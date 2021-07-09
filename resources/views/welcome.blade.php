<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Imageexpert24.com</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('public/frontend/assets/img/favicon.jpg')}}" rel="icon">
  <link href="{{asset('public/frontend/assets/img/logo2.jpg')}}" rel="apple-touch-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('public/frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- notification allert -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

  <!-- Template Main CSS File -->
  <link href="{{asset('public/frontend/assets/css/style.css')}}" rel="stylesheet">



</head>


<body>


  <!-- @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
    @endif
    @endauth
  </div>
  @endif

  <li><a class="nav-link scrollto" href="{{ route('login') }}">Sign In</a></li>
  <li><a class="nav-link scrollto" href="{{ route('register') }}">Sign Up</a></li>

  @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <a href="{{ url('/welcome') }}" class="text-sm text-gray-700 underline">Logout</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
    @endif
    @endauth
  </div>
  @endif -->



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Imageexpart24</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="https://imageexpert24.com"><img src="{{('public/frontend/assets/img/logo.png')}}" alt=""></a>
        <img src="" alt="">
      </div>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{URL::to('gallery') }}" target="_blank">Gallery</a></li>
              <li><a href="{{URL::to('clippingpath') }}" target="_blank">Clipping Path</a></li>
              <li><a href="#">Multi Clipping Path</a></li>
              <li><a href="#">Image Manipulation</a></li>
              <li><a href="#">Image Retouching</a></li>
              <li><a href="#">Image Editing</a></li>
              <li><a href="#">Image Enhancement</a></li>

            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{URL::to('freetrial') }}">Free Trial</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <!--start home-->




  <!--<main id="main">-->


  <section id="hero" class="hero">



    <!-- start slider -->

    <script src="{{asset('public/frontend/js/jssor.slider-28.1.0.min.js')}}" type="text/javascript"></script>
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
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{('public/frontend/img/spin.svg')}}" />
      </div>
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:800px;overflow:hidden;">
        <div>
          <img data-u="image" style="opacity:0.8;" data-src="{{('public/frontend/img/image-manipulation.jpg')}}" />


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
          <img data-u="image" data-src="{{('public/frontend/img/imag-masking.jpg')}}" />
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
          <img data-u="image" style="opacity:0.8;" data-src="{{('public/frontend/img/shoe-clipping-path1.jpg')}}" />
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
          <img data-u="image" data-src="{{('public/frontend/img/image-manipulation1.jpg')}}" />
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
          <img data-u="image" data-src="{{('public/frontend/img/retouching-sample.jpg')}}" />
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

  </section><!-- End hero Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
          <div class="content">
            <h3>Imageexpert24 is an online based graphics design studio
            </h3>
            <p>
              Image expert 24 is doing image edit Within short time, perfect follow in the instruction, quality full, low cost and all time communication. We are giving best help our customers. All the time we provide instant response for our customers. Image expert 24 quickly handle Customers opportunities.

            </p>

            <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
          </div>

        </div>
        <div class="col-xl-7 d-flex align-items-stretch">

          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class='bx bxs-photo-album'></i>
                <h4>Image expert 24 CSSO</h4>
                <style>
                  #more {
                    display: none;
                  }
                </style>
                <p>Image expert 24 is doing image edit Within short time, perfect follow in the instruction, quality full, low cost and all time communication. We are giving best help our customers. All the time we provide instant response for our customers. Image expert 24 quickly handle Customers opportunities.<span id="dots">...</span><span id="more">Image exprt24’s CSI organized by special team.There is working three shifts in a day, per shift work at three executive customer support service operator. Their one is leader and another two help the leader. Two customer support service operator’s work type is two type. One checked mail inbox and he understood these mail than reply to customers that’s mail accordingly. Another operator is checking file which come from production. He check that have the files been working with instructions? In addition our customer support service operators work very efficiently. If two helper operators work any wrong activities, head leader correct these activities. Customer support head leader is doing everything with smoothly. In order that any client cannot reproach.While one shift’s time is over than another shift’s team come. Head leader easily explained to another head leader. Another head leader takes the task perfectly. Than he distribute the task to his helper operators. In order that cannot service hamper any client.</span></p>
                <button onclick="myFunction()" id="myBtn">Read more</button>

                <script>
                  function myFunction() {
                    var dots = document.getElementById("dots");
                    var moreText = document.getElementById("more");
                    var btnText = document.getElementById("myBtn");

                    if (dots.style.display === "none") {
                      dots.style.display = "inline";
                      btnText.innerHTML = "Read more";
                      moreText.style.display = "none";
                    } else {
                      dots.style.display = "none";
                      btnText.innerHTML = "Read less";
                      moreText.style.display = "inline";
                    }
                  }
                </script>

              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class='bx bx-walk'></i>
                <style>
                  #more2 {
                    display: none;
                  }
                </style>

                <h4>Working team</h4>
                <p>Image expert 24 work 24/7-365 it has 3 shifts, per shift 8 hours’ work. I have 5 years experienced production manage. Per shift 50 expert designers work. Our production sector is consist of 5 levels<span id="dots2">...</span><span id="more2">
                    1. Junior Graphics designer
                    2. Graphics designer
                    3. Senior Graphics designer
                    4. Junior Quality controller
                    5. Senior Quality controller.
                    Every shift is confident for image work. They are able to finish any work without any help.</span></p>
                <button onclick="myFunction2()" id="myBtn2">Read more</button>



                <script>
                  function myFunction2() {
                    var dots2 = document.getElementById("dots2");
                    var moreText = document.getElementById("more2");
                    var btnText = document.getElementById("myBtn2");

                    if (dots2.style.display === "none") {
                      dots2.style.display = "inline";
                      btnText.innerHTML = "Read more";
                      moreText.style.display = "none";
                    } else {
                      dots2.style.display = "none";
                      btnText.innerHTML = "Read less";
                      moreText.style.display = "inline";
                    }
                  }
                </script>

              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bx bxl-paypal"></i></div>


                <style>
                  #more3 {
                    display: none;
                  }
                </style>
                <h4>Payment Method</h4>
                <p>The time is globalization. Payment is very easy in the hole world. Money transfer is not problem in this time. Many way to transferring money such as PayPal, payoneer, <span id="dots3">...</span><span id="more3">skrill. Amazon, Bank account, debit Master card, visa card, cash delivery etc. We are transferring money with PayPal, Payoneer, master card, Bank account, Cash delivery.
                  </span></p>
                <button onclick="myFunction3()" id="myBtn3">Read more</button>

                <script>
                  function myFunction3() {
                    var dots3 = document.getElementById("dots3");
                    var moreText = document.getElementById("more3");
                    var btnText = document.getElementById("myBtn3");

                    if (dots3.style.display === "none") {
                      dots3.style.display = "inline";
                      btnText.innerHTML = "Read more";
                      moreText.style.display = "none";
                    } else {
                      dots3.style.display = "none";
                      btnText.innerHTML = "Read less";
                      moreText.style.display = "inline";
                    }
                  }
                </script>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class='bx bx-user-plus'></i>
                <style>
                  #more4 {
                    display: none;
                  }
                </style>

                <h4>Image exprt24’s CSI organized by special team</h4>

                <p>web site developer, graphics studio, image studio, catalog design house, magazine agency, printing press, advertising firm, graphics design firm, clothing company,<span id="dots4">...</span><span id="more4"> shoes company, product service agency. Admin of Image expert24 is expert enough to understand the expectation of the clients. Time binding is followed very rigidly by the officials of the studio. Imageexpert24 is very adamant to maintain its credintiallity.
                  </span></p>
                <button onclick="myFunction4()" id="myBtn4">Read more</button>

                <script>
                  function myFunction4() {
                    var dots4 = document.getElementById("dots4");
                    var moreText = document.getElementById("more4");
                    var btnText = document.getElementById("myBtn4");

                    if (dots4.style.display === "none") {
                      dots4.style.display = "inline";
                      btnText.innerHTML = "Read more";
                      moreText.style.display = "none";
                    } else {
                      dots4.style.display = "none";
                      btnText.innerHTML = "Read less";
                      moreText.style.display = "inline";
                    }
                  }
                </script>

              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->



  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Services</h2>
        <p>Image expert 24 is doing image edit Within short time,
          perfect follow in the instruction, quality full, low cost and all time communication..</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up">


            <div class="icon"><i class='bx bxs-edit'></i></div>
            <h4 class="title"><a href="">Image Editing</a></h4>
            <p class="description">Image editing is a photoshop work on a photo to enhance or remove the photo's background. </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class='bx bxs-crop'></i></div>
            <h4 class="title"><a href="">Clipping Path</a></h4>
            <p class="description">Clipping path is made by photohsop pen tool on an image's side by side. That's the clipping path.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class='bx bxs-magic-wand'></i></div>
            <h4 class="title"><a href="">Neck join</a></h4>
            <p class="description">Image neck join is a process of photoshop work, It's works for an image to create a full size of product. </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class='bx bx-pen'></i></div>
            <h4 class="title"><a href="">Image Enhancement and Image Manipulating</a></h4>
            <p class="description">Image enhancement and image manipulation is a photoshop working process for a old or low regulation's image. The image will be new and looking nice. </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts  section-bg">
    <div class="container">

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Happy Clients</strong> consequuntur quae</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Cta Section ======= -->


  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">

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


      <style>
        #portimg {
          border: 2px solid rgb(129, 62, 62);
        }
      </style>


      <div class="row portfolio-container" data-aos="fade-up">

        <div class="col-lg-4 col-md-6 portfolio-item filter-path">
          <div class="portfolio-wrap">


            <img src="{{'public/frontend/assets/img/portfolio/Clipping Path1.jpg'}}" class="img-fluid" alt="" id="portimg">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/Clipping Path1.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-multipath">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/multiclippingpath1.jpg')}}" class="img-fluid" alt="" id="portimg">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/multiclippingpath1.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-path">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/Clipping Path2.jpg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/Clipping Path2.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-retouching">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/retouching1.jpg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/retouching1.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-path">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/Clipping Path4.jpg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/Clipping Path4.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-editing">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/image-editing1.jpg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/image-editing1.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-retouching">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/retouching3.jpg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/retouching3.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-multipath">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/multiclippingpath2.jpg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/multiclippingpath2.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-editing">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/image-editing-2.jpg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/image-editing-2.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-retouching">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/retouching1.jpg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/retouching1.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>





        <div class="col-lg-4 col-md-6 portfolio-item filter-masking">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/Making1.jpg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/Making1.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-multipath">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/multiclippingpath3.jpg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/multiclippingpath3.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-editing">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/image-editing.jpg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/image-editing.jpg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-masking">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/Making2.jpeg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/Making2.jpeg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-masking">
          <div class="portfolio-wrap">
            <img src="{{('public/frontend/assets/img/portfolio/Making3.jpeg')}}" id="portimg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{('public/frontend/assets/img/portfolio/Making3.jpeg')}}" id="portimg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
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
        <p>Imageexper24 have been doing image editing for 8 years. Our clients are very happy to work with us. Here are some testimonials for your confirmation that they are so happy and pleased about our jobs are very fine.</p>
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
              <img src="{{('public/frontend/assets/img/testimonials/Keith French.jpg')}}" id="portimg" class="testimonial-img" alt="">
              <h3>Keith Fraench</h3>
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
              <img src="{{('public/frontend/assets/img/testimonials/Sherry Muldoon.jpg')}}" id="portimg" class="testimonial-img" alt="">
              <h3>Sherry Muldoon</h3>
              <h4>Ceo &amp;Dream Focus Studio</h4>
            </div>
          </div><!-- End testimonial item -->






          >




        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  {{-- <!-- ======= Team Section ======= -->
              <section id="team" class="team">
                <div class="container">

                  <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Team</h2>
                    <p>Image edit done here with comfortable price, timely and values.
                      clipping path, multi clipping path,masking,retouching, re sizing, neck join, shadow create, color correction, raster to vector our prime concern.</p>
                  </div>

                  <div class="row">

                    <div class="col-lg-4 col-md-6">
                      <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="{{('frontend/assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
  <div class="member-info">
    <h4>Walter White</h4>
    <span>Chief Executive Officer</span>
    <div class="social">
      <a href=""><i class="bi bi-twitter"></i></a>
      <a href=""><i class="bi bi-facebook"></i></a>
      <a href=""><i class="bi bi-instagram"></i></a>
      <a href=""><i class="bi bi-linkedin"></i></a>
    </div>
  </div>
  </div>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="member" data-aos="fade-up" data-aos-delay="150">
      <div class="pic"><img src="{{('frontend/assets/img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Sarah Jhonson</h4>
        <span>Product Manager</span>
        <div class="social">
          <a href=""><i class="bi bi-twitter"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="member" data-aos="fade-up" data-aos-delay="300">
      <div class="pic"><img src="{{('frontend/assets/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>William Anderson</h4>
        <span>CTO</span>
        <div class="social">
          <a href=""><i class="bi bi-twitter"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>

  </div>

  </div>
  </section><!-- End Team Section --> --}}

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Imageexpert24 is giving best service 24 hours tarn around time. We give service with quickly, in time, quality with affordable price. So contact with us within short time.</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class='bx bx-map'></i>
            <h3>USA address

            </h3><br>
            <p>
              USA address
              3031 fredna place,
              midland, texas 79707
              USA
              Mobile Number: 0015127439457
              Email: Info@imageexpert24.com
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class='bx bxs-map-pin'></i>
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
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class='bx bxs-map-pin'></i>
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

      </div>

      <div class="row">

        <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27064.885872956405!2d-102.14443399999998!3d32.01211399999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86fbd96c4113b0ff%3A0xe0363e7033025842!2s3031%20Fredna%20Pl%2C%20Midland%2C%20TX%2079707!5e0!3m2!1sen!2sus!4v1617864785815!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="col-lg-6" style="height: 300px;">
          <div class="card-header bg-info">
            <h3 class="text-white" class="text-center">Contact Us With imageexpert24.com (24/7)</h3>
          </div>


          <form method="POST" action="{{ url('storecontactus') }}">

            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <strong>Name:</strong>
                  <input type="text" name="name" class="form-control" placeholder="Enter your Name" value="{{ old('name') }}">
                  @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <strong>Email:</strong>
                  <input type="text" name="email" class="form-control" placeholder="Enter your Email" value="{{ old('email') }}">
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <strong>Phone:</strong>
                  <input type="text" name="phone" class="form-control" placeholder="Enter your Phone" value="{{ old('phone') }}">
                  @if ($errors->has('phone'))
                  <span class="text-danger">{{ $errors->first('phone') }}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <strong>Subject:</strong>
                  <input type="text" name="subject" class="form-control" placeholder="Enter your Subject" value="{{ old('subject') }}">
                  @if ($errors->has('subject'))
                  <span class="text-danger">{{ $errors->first('subject') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <strong>Message:</strong>
                  <textarea name="message" rows="9" placeholder="Write your details heare" class="form-control">{{ old('message') }}</textarea>
                  @if ($errors->has('message'))
                  <span class="text-danger">{{ $errors->first('message') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group text-center">
              <button class="btn btn-success btn-submit">Send Message</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">


          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Imageexpert24.com</h3>
              <p class="pb-3"><em>For moving with us please connect our social media.</em></p>
              <p>
                385/7 <br>
                Road,, Bangladesh<br><br>
                <strong>Phone:</strong>+8801921020187<br>
                <strong>Email:</strong> info@imageexpert24.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/Imagesexpert24" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/imageexpert24" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.pinterest.com/nururrahman391/_created/" target="_blank" class="pinterest"><i class="bx bxl-pinterest"></i></a>
                <a href="https://www.instagram.com/imageexpert24/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/c/ImageExpert24" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>

                <a href="https://www.linkedin.com/in/nurur-rahman-72720940/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">Testimonials</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('gallery')}}" target="_blank">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('clippingpath') }}" target="_blank">Clipping Path</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Multi Clipping Path</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Retouching</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Image Masking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Image Editing </a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Subscribe to the Email Newsletter</h4>
            <p>If you subscribe to our newsletter you will receive any updates from us</p>

            <form action="{{url('subscriber')}}" method="post">
              @csrf

              <input type="email" placeholder="Enter your email address" name="email" required><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2010-<?php echo date("Y"); ?> <strong><span>Imageexpert24</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href="https://nurulpro.xyz/">Nurul Islam</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>






  </div>
  </div>
  </div>


  <!-- Vendor JS Files -->
  <script src="{{asset('public/frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/php-email-form/validate.j')}}s"></script>
  <script src="{{asset('public/frontend/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('public/frontend/assets/js/main.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>



  <script>
    @if(Session::has('messege'))
    var type = "{{Session::get('alert-type','info')}}"
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
    @endif
  </script>

  <script>
    $(document).on("click", "#delete", function(e) {
      e.preventDefault();
      var link = $(this).attr("href");
      swal({
          title: "Are you Want to delete?",
          text: "Once Delete, This will be Permanently Delete!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = link;
          } else {
            swal("Safe Data!");
          }
        });
    });
  </script>
</body>

</html>