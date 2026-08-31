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
    <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="pt-[114px]">
    @include('partials.header')

    <div class="about-hero">
        <div class="mx-auto max-w-[1200px] px-4">
            <h1>About Imageexpert24</h1>
            <p>A dedicated e-commerce and creative photo editing partner, working around the clock so your images are always ready on time.</p>
        </div>
    </div>

    <div class="breadcrumbs">
        <div class="mx-auto max-w-[1200px] px-4 lg:flex lg:items-center lg:justify-between">
            <h2>About Us</h2>
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About Us</li>
            </ol>
        </div>
    </div>

    <section class="story-section">
        <div class="mx-auto max-w-[1200px] px-4">
            <div class="mx-auto lg:w-9/12">
                    <h2 class="mb-3 font-heading text-2xl font-bold text-brand-navy">Who We Are</h2>
                    <p>Imageexpert24 is an online graphics design studio based in Dhaka, Bangladesh, specializing in clipping path, image manipulation, background removal, image masking and photo retouching. We work with e-commerce sellers, product photographers, web developers, catalog and magazine publishers, printing houses, advertising firms, and clothing and footwear brands who need clean, consistent, market-ready images at scale.</p>
                    <p>Our studio runs three shifts, 24 hours a day, seven days a week, so wherever in the world you're placing an order from, an experienced editor is already on the clock. Every image passes through a structured, multi-level workflow — from initial editing to a dedicated quality-control review — before it's delivered back to you, so quality stays consistent whether you're sending us five photos or five thousand.</p>

                    <div class="fact-chips">
                        <span><x-icon.clock class="h-3.5 w-3.5" />24/7 · 365 days a year</span>
                        <span><x-icon.users-round class="h-3.5 w-3.5" />Multi-shift production team</span>
                        <span><x-icon.badge-check class="h-3.5 w-3.5" />Dedicated quality control</span>
                        <span><x-icon.map-pin class="h-3.5 w-3.5" />Based in Dhaka, Bangladesh</span>
                    </div>
            </div>
        </div>
    </section>

    <section class="counts section-bg">
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
                    <p><strong>Projects Delivered</strong></p>
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
    </section>

    <section class="services">
        <div class="mx-auto max-w-[1200px] px-4">
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>What We Do</h2>
                <p>Core photo editing services our clients rely on every day</p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="icon-box" data-aos="fade-up">
                    <div class="icon"><x-icon.crop class="h-12 w-12" /></div>
                    <h4 class="title"><a href="{{ URL::to('clippingpath') }}">Clipping Path</a></h4>
                    <p class="description">Precise pen-tool cutouts for clean, professional product edges — ideal for catalogs and marketplaces.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><x-icon.square-pen class="h-12 w-12" /></div>
                    <h4 class="title"><a href="{{ URL::to('gallery') }}">Image Manipulation</a></h4>
                    <p class="description">Background removal, replacement and composite editing that keeps your product the center of attention.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><x-icon.wand-sparkles class="h-12 w-12" /></div>
                    <h4 class="title"><a href="{{ url('/') }}#services">Image Masking</a></h4>
                    <p class="description">Fine detail work for hair, fur and transparent edges where a simple clipping path isn't enough.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><x-icon.image class="h-12 w-12" /></div>
                    <h4 class="title"><a href="{{ url('/') }}#services">Photo Retouching</a></h4>
                    <p class="description">Color correction, shadow work and polish that make every image look market-ready.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg">
        <div class="mx-auto max-w-[1200px] px-4">
            <div class="mx-auto lg:w-9/12">
                    <div class="section-title pb-5 text-left" data-aos="fade-in" data-aos-delay="100">
                        <h2 class="text-left">How We Work</h2>
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
    </section>

    <section class="services">
        <div class="mx-auto max-w-[1200px] px-4">
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Why Choose Us</h2>
                <p>What our clients count on, order after order</p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="icon-box" data-aos="fade-up">
                    <div class="icon"><x-icon.clock class="h-12 w-12" /></div>
                    <h4 class="title"><a href="{{ url('/') }}#contact">Fast Turnaround</a></h4>
                    <p class="description">Round-the-clock production means your deadlines don't have to wait for our time zone.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><x-icon.badge-check class="h-12 w-12" /></div>
                    <h4 class="title"><a href="{{ url('/') }}#contact">Consistent Quality</a></h4>
                    <p class="description">A five-stage review process keeps every delivery to the same standard, no matter the volume.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><x-icon.paypal class="h-12 w-12" /></div>
                    <h4 class="title"><a href="{{ url('/') }}#contact">Flexible Payments</a></h4>
                    <p class="description">Pay the way that suits you — PayPal, Payoneer, bank transfer, card, or cash on delivery.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><x-icon.headphones class="h-12 w-12" /></div>
                    <h4 class="title"><a href="{{ url('/') }}#contact">Always-On Support</a></h4>
                    <p class="description">A dedicated support team is on every shift, so you always have someone to talk to.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-cta">
        <div class="mx-auto max-w-[1200px] px-4">
            <h3>Ready to see the difference?</h3>
            <p>Send us a few sample images and try our editing quality for free.</p>
            <a href="{{ url('/') }}#contact" class="btn-cta">Request a Free Trial</a>
        </div>
    </section>

    @include('partials.footer')

    <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script><!-- main.js inits GLightbox unconditionally on every page -->
    <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script><!-- main.js inits Swiper unconditionally on every page -->
    <script src="{{asset('frontend/assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>
