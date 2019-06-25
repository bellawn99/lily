<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Lily Florist">
        <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

        <title>Lily Florist</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/bootstrap/css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ url('/') }}/bootstrap/css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ url('/') }}/bootstrap/css/owl.carousel.min.css">
    <!-- Main css -->
    <link href="{{ url('/') }}/bootstrap/css/style.css" rel="stylesheet">



        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Lily Florist
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item"> <a class="nav-link " href="{{ url('/') }}">HOME</a> </li>
                            @else    
                                <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">LOGIN</a> </li>
                                @if (Route::has('register'))
                                <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}">REGISTER</a> </li>
                                @endif
                            @endauth
                            @endif
                    </ul>
                </div>
            </div>
        </nav>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>Lily Florist</h1>
            <p class="tagline"> Untuk melihat data bunga, <a class="link" href="{{ route('login') }}">login</a> atau <a class="link" href="{{ route('register') }}">register</a> terlebih dahulu. </p>
        </div>
        <div class="img-holder mt-3"><img src="{{ url('/') }}/bootstrap/images/fix.png" alt="phone" class="img-fluid"></div>
    </header>

            <!-- jQuery and Bootstrap -->
    <script src="{{ url('/') }}/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="{{ url('/') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="{{ url('/') }}/bootstrap/js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ url('/') }}/bootstrap/js/script.js"></script>

    </body>
</html>
