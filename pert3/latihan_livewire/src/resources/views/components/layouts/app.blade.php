<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>{{ $title ?? 'Pemweb' }}</title> 

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset ('front/assets/images/favicon.png') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset ('front/assets/css/bootstrap.min.css') }}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset ('front/assets/css/LineIcons.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset ('front/assets/css/magnific-popup.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset ('front/assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset ('front/assets/css/style.css') }}">

    @livewireStyles
</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <!-- <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="{{ asset ('front/assets/images/logo.png') }}" alt="Logo">
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item "><a wire:navigate class="page-scroll" href="{{ route('home') }}">Home</a></li>
                                    <!-- <li class="nav-item"><a class="page-scroll" href="#about">About</a></li> -->
                                    <li class="nav-item"><a wire:navigate class="page-scroll" href="{{ route('services') }}">Services</a></li>
                                    <li class="nav-item"><a wire:navigate class="page-scroll" href="{{ route('portofolio') }}">Portfolio</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#blog">Blog</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->

        <div id="parallax" class="header-content d-flex align-items-center">
            <div class="header-shape shape-one layer" data-depth="0.10">
                <img src="{{ asset ('front/assets/images/banner/shape/shape-1.png') }}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-tow layer" data-depth="0.30">
                <img src="{{ asset ('front/assets/images/banner/shape/shape-2.png') }}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-three layer" data-depth="0.40">
                <img src="{{ asset ('front/assets/images/banner/shape/shape-3.png') }}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-fore layer" data-depth="0.60">
                <img src="{{ asset ('front/assets/images/banner/shape/shape-2.png') }}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-five layer" data-depth="0.20">
                <img src="{{ asset ('front/assets/images/banner/shape/shape-1.png') }}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-six layer" data-depth="0.15">
                <img src="{{ asset ('front/assets/images/banner/shape/shape-4.png') }}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-seven layer" data-depth="0.50">
                <img src="{{ asset ('front/assets/images/banner/shape/shape-5.png') }}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-eight layer" data-depth="0.40">
                <img src="{{ asset ('front/assets/images/banner/shape/shape-3.png') }}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-nine layer" data-depth="0.20">
                <img src="{{ asset ('front/assets/images/banner/shape/shape-6.png') }}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-ten layer" data-depth="0.30">
                <img src="{{ asset ('front/assets/images/banner/shape/shape-3.png') }}" alt="Shape">
            </div> <!-- header shape -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="header-content-right">
                            <h4 class="sub-title">Hello, I’m</h4>
                            <h1 class="title">Rohisul Iman</h1>
                            <p>A Freelance UI Designer & Web Developer</p>
                            <a class="main-btn" href="#work">View my Work</a>
                        </div> <!-- header content right -->
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="header-image d-none d-lg-block">
                            <img src="{{ asset ('front/assets/images/banner/hero.png') }}" alt="hero">
                        </div> <!-- header image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-social">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-social-icon">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-behance-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div> <!-- header social -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header social -->
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->


    {{ $slot }}


    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-130 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-content text-center">
                            <a href="index.html">
                                <img src="{{ asset ('front/assets/images/logo-2.png') }}" alt="Logo">
                            </a>
                            <p class="mt-">Please, purchase full version of Unfold to get all pages and features. Including credits removal, permission to use in commercial projects, working contact from, docs and support</p>
                            <ul>
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="footer-copyright pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text text-center pt-20">
                            <p>Template by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                        </div> <!-- copyright text -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->
    



    <!--====== jquery js ======-->
    <script src="{{ asset ('front/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset ('front/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset ('front/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('front/assets/js/popper.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset ('front/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Parallax js ======-->
    <script src="{{ asset ('front/assets/js/parallax.min.js') }}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{ asset ('front/assets/js/waypoints.min.js') }}"></script>
    <script src="assets/js/jquery.counterup.min.js') }}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ asset ('front/assets/js/ajax-contact.js') }}"></script>

    <!--====== Appear js ======-->
    <script src="{{ asset ('front/assets/js/jquery.appear.min.js') }}"></script>

    <!--====== Scrolling js ======-->
    <script src="{{ asset ('front/assets/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset ('front/assets/js/jquery.easing.min.js') }}"></script>

    <!--====== Validator js ======-->
    <script src="{{ asset ('front/assets/js/validator.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset ('front/assets/js/main.js') }}"></script>
    @livewireScripts
</body>

</html>
