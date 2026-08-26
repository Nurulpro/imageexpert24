<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Error') | Imageexpert24</title>
    <meta name="robots" content="noindex, nofollow">

    <link href="{{asset('frontend/assets/img/favicon.jpg')}}" rel="icon">
    <link href="{{asset('frontend/assets/img/logo2.jpg')}}" rel="apple-touch-icon">

    <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
    <style>
        .error-page {
            min-height: calc(100vh - 114px - 260px);
            display: flex;
            align-items: center;
        }
        .error-page .error-icon {
            font-size: 56px;
            color: #67b0d1;
            margin-bottom: 10px;
            display: inline-block;
        }
        .error-page .error-code {
            font-family: "Raleway", sans-serif;
            font-size: 110px;
            font-weight: 800;
            line-height: 1;
            color: #2f4d5a;
            margin-bottom: 10px;
        }
        .error-page h1 {
            font-size: 26px;
            font-weight: 700;
            color: #2f4d5a;
            margin-bottom: 15px;
        }
        .error-page p {
            color: #444;
            font-size: 16px;
            max-width: 480px;
            margin: 0 auto 30px;
        }
        .error-page .btn-home {
            display: inline-block;
            padding: 12px 34px;
            border-radius: 50px;
            background: #67b0d1;
            color: #fff;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: 0.3s ease-in-out;
        }
        .error-page .btn-home:hover {
            background: #2f4d5a;
            color: #fff;
        }
        @media (max-width: 575px) {
            .error-page .error-code {
                font-size: 72px;
            }
        }
    </style>
</head>
<body style="padding-top: 114px;">
    @include('partials.header')

    <section class="error-page">
        <div class="container text-center">
            <i class='bx @yield("icon", "bx-error-circle") error-icon'></i>
            <div class="error-code">@yield('code')</div>
            <h1>@yield('title')</h1>
            <p>@yield('message')</p>
            <a href="{{ url('/') }}" class="btn-home">Back to Homepage</a>
        </div>
    </section>

    @include('partials.footer')

    <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>
