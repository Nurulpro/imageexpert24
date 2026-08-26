<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Imageexpert24</title>
    <meta name="description" content="Read Imageexpert24's privacy policy to learn what information we collect from visitors and how we use it.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <link href="{{asset('frontend/assets/img/favicon.jpg')}}" rel="icon">
    <link href="{{asset('frontend/assets/img/logo2.jpg')}}" rel="apple-touch-icon">

    <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
    <style>
        .legal-content h2 {
            font-size: 22px;
            font-weight: 700;
            color: #2f4d5a;
            margin-top: 40px;
            margin-bottom: 15px;
            padding-top: 20px;
            border-top: 1px solid #eef2f4;
        }
        .legal-content h2:first-child {
            margin-top: 0;
            padding-top: 0;
            border-top: none;
        }
        .legal-content p,
        .legal-content li {
            color: #444;
            line-height: 1.8;
        }
        .legal-content ul {
            padding-left: 20px;
        }
        .legal-content .updated {
            color: #6c757d;
            font-size: 14px;
        }
        .legal-section {
            overflow: visible;
        }
        .toc-nav {
            position: sticky;
            top: 134px;
            padding: 20px 0 20px 20px;
            border-left: 2px solid #eef2f4;
        }
        .toc-nav .toc-title {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #6c757d;
            margin-bottom: 10px;
        }
        .toc-nav .nav-link {
            padding: 6px 0;
            font-size: 14px;
            color: #444;
            border-left: 2px solid transparent;
            margin-left: -22px;
            padding-left: 20px;
        }
        .toc-nav .nav-link:hover {
            color: #67b0d1;
        }
        .toc-nav .nav-link.active {
            color: #67b0d1;
            font-weight: 600;
            border-left-color: #67b0d1;
        }
    </style>
</head>
<body style="padding-top: 114px;" data-bs-spy="scroll" data-bs-target="#toc-nav" data-bs-offset="140" tabindex="0">
    @include('partials.header')

    <div class="breadcrumbs">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h2>Privacy Policy</h2>
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Privacy Policy</li>
            </ol>
        </div>
    </div>

    <section class="legal-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 d-none d-lg-block">
                    <nav id="toc-nav" class="toc-nav">
                        <div class="toc-title">On This Page</div>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#consent">Consent</a></li>
                            <li class="nav-item"><a class="nav-link" href="#information-we-collect">Information We Collect</a></li>
                            <li class="nav-item"><a class="nav-link" href="#how-we-use-your-information">How We Use Your Information</a></li>
                            <li class="nav-item"><a class="nav-link" href="#log-files">Log Files</a></li>
                            <li class="nav-item"><a class="nav-link" href="#advertising-partners">Advertising Partners</a></li>
                            <li class="nav-item"><a class="nav-link" href="#third-party-privacy-policies">Third-Party Policies</a></li>
                            <li class="nav-item"><a class="nav-link" href="#ccpa-privacy-rights">CCPA Privacy Rights</a></li>
                            <li class="nav-item"><a class="nav-link" href="#gdpr-data-protection-rights">GDPR Rights</a></li>
                            <li class="nav-item"><a class="nav-link" href="#childrens-information">Children's Information</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact-us">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-9 legal-content">

                    <p class="updated">Last updated: {{ date('F j, Y') }}</p>

                    <p>At imageexpert24.com, accessible from <a href="https://imageexpert24.com/">https://imageexpert24.com/</a>, one of our main priorities is the privacy of our visitors. This Privacy Policy document explains what information is collected and recorded by imageexpert24.com and how we use it.</p>

                    <p>If you have additional questions or require more information about our Privacy Policy, feel free to <a href="{{ url('/') }}#contact">contact us</a>.</p>

                    <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regard to the information they share and/or we collect on imageexpert24.com. This policy does not apply to information collected offline or via channels other than this website.</p>

                    <h2 id="consent">Consent</h2>
                    <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

                    <h2 id="information-we-collect">Information We Collect</h2>
                    <p>The personal information you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide it.</p>
                    <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you send us, and any other information you choose to provide.</p>
                    <p>When you register for an account, we may ask for contact information such as name, company name, address, email address, and telephone number.</p>

                    <h2 id="how-we-use-your-information">How We Use Your Information</h2>
                    <p>We use the information we collect in various ways, including to:</p>
                    <ul>
                        <li>Provide, operate, and maintain our website</li>
                        <li>Improve, personalize, and expand our website</li>
                        <li>Understand and analyze how you use our website</li>
                        <li>Develop new products, services, features, and functionality</li>
                        <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide updates and other information relating to the website, and for marketing and promotional purposes</li>
                        <li>Send you emails</li>
                        <li>Find and prevent fraud</li>
                    </ul>

                    <h2 id="log-files">Log Files</h2>
                    <p>imageexpert24.com follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this as part of their hosting services' analytics. The information collected by log files includes internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. This information is not linked to anything that is personally identifiable. Its purpose is to analyze trends, administer the site, track users' movement on the website, and gather demographic information.</p>

                    <h2 id="advertising-partners">Advertising Partners' Privacy Policies</h2>
                    <p>Third-party ad servers or ad networks may use technologies such as cookies, JavaScript, or web beacons in their advertisements and links that appear on imageexpert24.com, which are sent directly to your browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of advertising campaigns and/or to personalize the advertising content you see on websites you visit.</p>
                    <p>Note that imageexpert24.com has no access to or control over cookies used by third-party advertisers.</p>

                    <h2 id="third-party-privacy-policies">Third-Party Privacy Policies</h2>
                    <p>imageexpert24.com's Privacy Policy does not apply to other advertisers or websites. We advise you to consult the respective Privacy Policies of these third-party ad servers for more detailed information, which may include their practices and instructions for opting out of certain options.</p>
                    <p>You can choose to disable cookies through your individual browser settings. More detailed information about cookie management with specific web browsers can be found on the browsers' respective websites.</p>

                    <h2 id="ccpa-privacy-rights">CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>
                    <p>Under the CCPA, among other rights, California consumers have the right to:</p>
                    <ul>
                        <li>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data it has collected.</li>
                        <li>Request that a business delete any personal data about the consumer that it has collected.</li>
                        <li>Request that a business that sells a consumer's personal data not sell that data.</li>
                    </ul>
                    <p>If you make a request, we have one month to respond. If you would like to exercise any of these rights, please <a href="{{ url('/') }}#contact">contact us</a>.</p>

                    <h2 id="gdpr-data-protection-rights">GDPR Data Protection Rights</h2>
                    <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
                    <ul>
                        <li><strong>The right to access</strong> — You have the right to request copies of your personal data. We may charge you a small fee for this service.</li>
                        <li><strong>The right to rectification</strong> — You have the right to request that we correct any information you believe is inaccurate, and to complete information you believe is incomplete.</li>
                        <li><strong>The right to erasure</strong> — You have the right to request that we erase your personal data, under certain conditions.</li>
                        <li><strong>The right to restrict processing</strong> — You have the right to request that we restrict the processing of your personal data, under certain conditions.</li>
                        <li><strong>The right to object to processing</strong> — You have the right to object to our processing of your personal data, under certain conditions.</li>
                        <li><strong>The right to data portability</strong> — You have the right to request that we transfer the data we have collected to another organization, or directly to you, under certain conditions.</li>
                    </ul>
                    <p>If you make a request, we have one month to respond. If you would like to exercise any of these rights, please <a href="{{ url('/') }}#contact">contact us</a>.</p>

                    <h2 id="childrens-information">Children's Information</h2>
                    <p>Protecting children while they use the internet is another of our priorities. We encourage parents and guardians to observe, participate in, and/or monitor and guide their children's online activity.</p>
                    <p>imageexpert24.com does not knowingly collect any personally identifiable information from children under the age of 13. If you believe your child provided this kind of information on our website, please contact us immediately and we will make every effort to promptly remove such information from our records.</p>

                    <h2 id="contact-us">Contact Us</h2>
                    <p>
                        385/7, Road, Bangladesh<br>
                        <strong>Phone:</strong> +8801921020187<br>
                        <strong>Email:</strong> <a href="mailto:info@imageexpert24.com">info@imageexpert24.com</a>
                    </p>

                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>
