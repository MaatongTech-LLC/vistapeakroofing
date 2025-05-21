<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Vista Peak Roofing">
    <meta name="keywords" content="Vista Peak, Roofing Services, Indiana, Vista Peak Roofing">

    <!-- Page Title -->
    <title>Vista Peak Roofing - @yield('title')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/icon-red-medium.png') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('assets/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('assets/css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" media="screen">
</head>
<body>
<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img height="70px" width="70px" src="{{ asset('assets/images/logo-icon-white.svg') }}" alt=""></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img width="180px" style="display: flex; padding: 0; margin: 0; object-fit: cover;" src="{{ asset('assets/images/logo-1.png') }}" alt="Vista Peak Roofing Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="/">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/about">{{ __('About Us') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="/services">{{ __('Services') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="/projects">{{ __('Projects') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">{{ __('Contact Us') }}</a></li>
                            <li class="menu-item-has-children"><a href="#">
                                @if ( app()->currentLocale() == 'en')
                                    <img height="25" src="{{ asset('assets/images/flag/usa.png') }}" alt="English language icon">
                                @elseif( app()->currentLocale() == 'es')
                                    <img height="25" src="{{ asset('assets/images/flag/spain.png') }}" alt="Spanish language icon">
                                @endif
                            </a>
                            <ul class="sub-menu">
                                @if ( app()->currentLocale() == 'en')

                                    <li data-locale="fr" class="ss-change-locale"><a href="{{ route('change-language', 'es') }}"><img
                                                height="25"
                                                src="{{ asset('assets/images/flag/spain.png') }}" alt="Spanish language icon"> <span
                                                class="ml-2">{{ __('Spanish') }}</span></a></li>
                                @elseif( app()->currentLocale() == 'es')
                                    <li data-locale="en" class="ss-change-locale"><a href="{{ route('change-language', 'en') }}"><img
                                                height="25"
                                                src="{{ asset('assets/images/flag/usa.png') }}" alt="English language icon"> <span
                                                class="ml-2">{{ __('English') }}</span></a></li>
                                @endif
                            </ul>
                        </li>
                        </ul>
                    </div>

                    <!-- Header Btn Start -->
                    <div class="header-btn">
                        <div class="header-contact-btn">
                            <a href="tel:+13179937623" class="btn-phone"><img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">+1 317 993 7623</a>
                        </div>

                        <!-- Toggle Button trigger modal Start -->
                        <button class="btn btn-popup" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img
                                src="{{ asset('assets/images/header-btn-dot.svg') }}" alt=""></button>
                        <!-- Toggle Button trigger modal End -->

                        <!-- Header Sidebar Start -->
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>

                            <div class="offcanvas-body">
                                <!-- Header Contact Box Start -->
                                <div class="header-contact-box">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-white-phone.svg') }}" alt="">
                                    </div>
                                    <div class="header-contact-box-content">
                                        <h3>{{ __('Phone') }}</h3>
                                        <p>+1 317 993 7623</p>
                                    </div>
                                </div>
                                <!-- Header Contact Box End -->

                                <!-- Header Contact Box Start -->
                                <div class="header-contact-box">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-white-mail.svg') }}" alt="">
                                    </div>
                                    <div class="header-contact-box-content">
                                        <h3>{{ __('Email') }}</h3>
                                        <p>info@vistapeakroofing.com</p>
                                    </div>
                                </div>
                                <!-- Header Contact Box End -->

                                <!-- Header Contact Box Start -->
                                <div class="header-contact-box">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-white-location.svg') }}" alt="">
                                    </div>
                                    <div class="header-contact-box-content">
                                        <h3>{{ __('Address') }}</h3>
                                        <p>3204 Wintersong Dr, Indianapolis, IN</p>
                                    </div>
                                </div>
                                <!-- Header Contact Box End -->

                                <!-- Header Social Links Start -->
                                <div class="header-social-links">
                                    <h3>{{ __('Stay connected') }}</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Header Social Links End -->
                            </div>
                        </div>
                        <!-- Header Sidebar End -->
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->

@yield('content')


<!-- Footer Start -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- About Footer Start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <img src="{{ asset('assets/images/logo-1.png') }}" width="170"  alt="">
                    </div>
                    <!-- Footer Logo End -->
                </div>
                <!-- About Footer End -->
            </div>

            <div class="col-md-6">
                <!-- Footer Contact Box Start -->
                <div class="footer-contact-box footer-links">
                    <h3>{{ __('Contact Us') }}</h3>
                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
                        </div>
                        <div class="footer-contact-content">
                            <p>3204 Wintersong Dr, Indianapolis, IN</p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->

                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">
                        </div>
                        <div class="footer-contact-content">
                            <p>+1 317 993 7623</p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->

                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="">
                        </div>
                        <div class="footer-contact-content">
                            <p>info@vistapeakroofing.com</p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->
                </div>
                <!-- Footer Contact Box End -->
            </div>

            <div class="col-md-6 d-flex justify-content-md-end">
                <!-- Footer Social Link Start -->
                <div class="footer-social-links footer-links">
                    <h3>{{ __('Share with us') }}</h3>
                    <p>{{ __('Special offers on social networks') }}</p>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- Footer Social Link End -->
            </div>

        </div>

        <!-- Footer Copyright Section Start -->
        <div class="footer-copyright">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <!-- Footer Menu Start -->
                    <div class="footer-menu">
                        <ul>
                            <li><a href="/">{{ __('Home') }}</a></li>
                            <li><a href="/about">{{ __('About Us') }}</a></li>
                            <li><a href="/services">{{ __('Services') }}</a></li>
                            <li><a href="/contact">{{ __('Contact Us') }}</a></li>
                        </ul>
                    </div>
                    <!-- Footer Menu End -->
                </div>

                <div class="col-md-6">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright-text">
                        <p>{{ __('Copyright :date', ['date' => date('Y')]) }} <a href="https://maatonggroup.com/usa" target="_blank" style="color: var(--accent-color);">MaatongTech USA, LLC</a></p>
                    </div>
                    <!-- Footer Copyright End -->
                </div>
            </div>
        </div>
        <!-- Footer Copyright Section End -->
    </div>
</footer>
<!-- Footer End -->

<!-- Jquery Library File -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<!-- Bootstrap js file -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Validator js file -->
<script src="{{ asset('assets/js/validator.min.js') }}"></script>
<!-- SlickNav js file -->
<script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
<!-- Swiper js file -->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<!-- Counter js file -->
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- Isotop js file -->
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<!-- Magnific js file -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- SmoothScroll -->
<script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<!-- Parallax js -->
<script src="{{ asset('assets/js/parallaxie.js') }}"></script>
<!-- MagicCursor js file -->
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/magiccursor.js') }}"></script>
<!-- Text Effect js file -->
<script src="{{ asset('assets/js/SplitText.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<!-- YTPlayer js File -->
<script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
<!-- Wow js file -->
<script src="{{ asset('assets/js/wow.js') }}"></script>
<!-- Main Custom js file -->
<script src="{{ asset('assets/js/function.js') }}"></script>
</body>
</html>
