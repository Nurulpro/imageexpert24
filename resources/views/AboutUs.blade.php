<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us | Imageexpert24</title>
    <meta name="description" content="Imageexpert24 is a Bangladesh-based photo editing studio working 24/7 to deliver clipping path, image manipulation, background removal and retouching for e-commerce and creative businesses worldwide.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Imageexpert24">
    <meta property="og:title" content="About Us | Imageexpert24">
    <meta property="og:description" content="Imageexpert24 is a Bangladesh-based photo editing studio working 24/7 to deliver clipping path, image manipulation, background removal and retouching for e-commerce and creative businesses worldwide.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('frontend/assets/img/logo.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="About Us | Imageexpert24">
    <meta name="twitter:description" content="Imageexpert24 is a Bangladesh-based photo editing studio working 24/7 to deliver clipping path, image manipulation, background removal and retouching for e-commerce and creative businesses worldwide.">
    <meta name="twitter:image" content="{{ asset('frontend/assets/img/logo.png') }}">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@type": "ListItem", "position": 2, "name": "About Us", "item": "{{ url()->current() }}" }
      ]
    }
    </script>

    <link href="{{asset('frontend/assets/img/favicon.jpg')}}" rel="icon">
    <link href="{{asset('frontend/assets/img/logo2.jpg')}}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

    <style>
        .about-hero {
            background: linear-gradient(rgba(47, 77, 90, 0.85), rgba(47, 77, 90, 0.85)), url("{{ asset('frontend/assets/img/portfolio/Clipping Path1.jpg') }}") center center;
            background-size: cover;
            padding: 70px 0;
            text-align: center;
        }
        .about-hero h1 {
            color: #fff;
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .about-hero p {
            color: #e6eef1;
            max-width: 640px;
            margin: 0 auto;
            font-size: 16px;
        }
        .story-section p {
            color: #444;
            line-height: 1.9;
            font-size: 16px;
        }
        .fact-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 20px;
        }
        .fact-chips span {
            background: #f4f9fc;
            color: #2f4d5a;
            font-size: 14px;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 30px;
            border: 1px solid #e3edf2;
        }
        .fact-chips span i {
            color: #67b0d1;
            margin-right: 6px;
        }
        .process-steps {
            counter-reset: step;
        }
        .process-steps .step {
            display: flex;
            gap: 18px;
            padding: 18px 0;
            border-bottom: 1px solid #eef2f4;
        }
        .process-steps .step:last-child {
            border-bottom: none;
        }
        .process-steps .step-number {
            flex: 0 0 auto;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #67b0d1;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 16px;
        }
        .process-steps .step-body h4 {
            font-size: 17px;
            font-weight: 700;
            color: #2f4d5a;
            margin-bottom: 4px;
        }
        .process-steps .step-body p {
            color: #444;
            margin-bottom: 0;
            font-size: 15px;
        }
        .about-cta {
            background: linear-gradient(rgba(103, 176, 209, 0.92), rgba(47, 77, 90, 0.92));
            padding: 55px 0;
            text-align: center;
        }
        .about-cta h3 {
            color: #fff;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .about-cta p {
            color: #f0f6f9;
            margin-bottom: 22px;
        }
        .about-cta .btn-cta {
            display: inline-block;
            padding: 12px 34px;
            border-radius: 50px;
            background: #fff;
            color: #2f4d5a;
            font-weight: 700;
            letter-spacing: 0.5px;
            transition: 0.3s ease-in-out;
        }
        .about-cta .btn-cta:hover {
            background: #2f4d5a;
            color: #fff;
            border: 1px solid #fff;
        }
    </style>
</head>
<body style="padding-top: 114px;">
    @include('partials.header')

    <div class="about-hero">
        <div class="container">
            <h1>About Imageexpert24</h1>
            <p>A dedicated e-commerce and creative photo editing partner, working around the clock so your images are always ready on time.</p>
        </div>
    </div>

    <div class="breadcrumbs">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h2>About Us</h2>
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About Us</li>
            </ol>
        </div>
    </div>

    <section class="story-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h2 class="mb-3" style="font-size: 24px; font-weight: 700; color: #2f4d5a;">Who We Are</h2>
                    <p>Imageexpert24 is an online graphics design studio based in Dhaka, Bangladesh, specializing in clipping path, image manipulation, background removal, image masking and photo retouching. We work with e-commerce sellers, product photographers, web developers, catalog and magazine publishers, printing houses, advertising firms, and clothing and footwear brands who need clean, consistent, market-ready images at scale.</p>
                    <p>Our studio runs three shifts, 24 hours a day, seven days a week, so wherever in the world you're placing an order from, an experienced editor is already on the clock. Every image passes through a structured, multi-level workflow — from initial editing to a dedicated quality-control review — before it's delivered back to you, so quality stays consistent whether you're sending us five photos or five thousand.</p>

                    <div class="fact-chips">
                        <span><i class="bx bx-time-five"></i>24/7 · 365 days a year</span>
                        <span><i class="bx bx-group"></i>Multi-shift production team</span>
                        <span><i class="bx bxs-badge-check"></i>Dedicated quality control</span>
                        <span><i class="bx bx-map"></i>Based in Dhaka, Bangladesh</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counts section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Happy Clients</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Projects Delivered</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Hours Of Support</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Hard Workers</strong></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>What We Do</h2>
                <p>Core photo editing services our clients rely on every day</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon"><i class='bx bxs-crop'></i></div>
                        <h4 class="title"><a href="{{ URL::to('clippingpath') }}">Clipping Path</a></h4>
                        <p class="description">Precise pen-tool cutouts for clean, professional product edges — ideal for catalogs and marketplaces.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class='bx bxs-edit'></i></div>
                        <h4 class="title"><a href="{{ URL::to('gallery') }}">Image Manipulation</a></h4>
                        <p class="description">Background removal, replacement and composite editing that keeps your product the center of attention.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class='bx bxs-magic-wand'></i></div>
                        <h4 class="title"><a href="{{ url('/') }}#services">Image Masking</a></h4>
                        <p class="description">Fine detail work for hair, fur and transparent edges where a simple clipping path isn't enough.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class='bx bxs-photo-album'></i></div>
                        <h4 class="title"><a href="{{ url('/') }}#services">Photo Retouching</a></h4>
                        <p class="description">Color correction, shadow work and polish that make every image look market-ready.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-start" data-aos="fade-in" data-aos-delay="100" style="text-align:left; padding-bottom:20px;">
                        <h2 style="text-align:left;">How We Work</h2>
                        <p>Every image goes through the same five-stage quality process before it reaches you</p>
                    </div>

                    <div class="process-steps">
                        <div class="step" data-aos="fade-up">
                            <div class="step-number">1</div>
                            <div class="step-body">
                                <h4>Junior Designer</h4>
                                <p>Your images enter production and receive their first editing pass following your exact instructions.</p>
                            </div>
                        </div>
                        <div class="step" data-aos="fade-up" data-aos-delay="50">
                            <div class="step-number">2</div>
                            <div class="step-body">
                                <h4>Designer Review</h4>
                                <p>A second editor checks accuracy and consistency across the full batch.</p>
                            </div>
                        </div>
                        <div class="step" data-aos="fade-up" data-aos-delay="100">
                            <div class="step-number">3</div>
                            <div class="step-body">
                                <h4>Senior Designer Finishing</h4>
                                <p>A senior editor handles finer detail work and resolves any edge cases flagged during review.</p>
                            </div>
                        </div>
                        <div class="step" data-aos="fade-up" data-aos-delay="150">
                            <div class="step-number">4</div>
                            <div class="step-body">
                                <h4>Junior Quality Control</h4>
                                <p>Every file is checked against your original brief before moving forward.</p>
                            </div>
                        </div>
                        <div class="step" data-aos="fade-up" data-aos-delay="200">
                            <div class="step-number">5</div>
                            <div class="step-body">
                                <h4>Senior Quality Control &amp; Delivery</h4>
                                <p>A final senior review confirms everything meets our standard, then your files are delivered.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Why Choose Us</h2>
                <p>What our clients count on, order after order</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon"><i class='bx bx-time-five'></i></div>
                        <h4 class="title"><a href="{{ url('/') }}#contact">Fast Turnaround</a></h4>
                        <p class="description">Round-the-clock production means your deadlines don't have to wait for our time zone.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class='bx bxs-badge-check'></i></div>
                        <h4 class="title"><a href="{{ url('/') }}#contact">Consistent Quality</a></h4>
                        <p class="description">A five-stage review process keeps every delivery to the same standard, no matter the volume.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class='bx bxl-paypal'></i></div>
                        <h4 class="title"><a href="{{ url('/') }}#contact">Flexible Payments</a></h4>
                        <p class="description">Pay the way that suits you — PayPal, Payoneer, bank transfer, card, or cash on delivery.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class='bx bx-headphone'></i></div>
                        <h4 class="title"><a href="{{ url('/') }}#contact">Always-On Support</a></h4>
                        <p class="description">A dedicated support team is on every shift, so you always have someone to talk to.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-cta">
        <div class="container">
            <h3>Ready to see the difference?</h3>
            <p>Send us a few sample images and try our editing quality for free.</p>
            <a href="{{ url('/') }}#contact" class="btn-cta">Request a Free Trial</a>
        </div>
    </section>

    @include('partials.footer')

    <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>
