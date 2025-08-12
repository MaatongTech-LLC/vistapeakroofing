@extends('layout')
@section('title', __('Home'))
@section('content')
    <!-- Hero Section Start -->
    <div class="hero hero-slider-layout">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="assets/images/hero-bg.jpg" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title dark-section">
                                            <h3 class="wow fadeInUp">{{ __('Welcome to Vista Peak Roofing') }}</h3>
                                            <h1 class="text-anime-style-3" data-cursor="-opaque">{{ __('Hero Title') }}</h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('Hero Text') }}</p>
                                        </div>
                                        <!-- Section Title End -->

                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="{{ route('quotes.create') }}" class="btn-default">{{ __('Get free quote') }}</a>
                                        </div>
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->

                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="assets/images/hero-bg-2.jpg" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title dark-section">
                                            <h3 class="wow fadeInUp">{{ __('Welcome to Vista Peak Roofing') }}</h3>
                                            <h1 class="text-anime-style-3" data-cursor="-opaque">{{ __('Hero Title') }}</h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('Hero Text') }}</p>
                                        </div>
                                        <!-- Section Title End -->

                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="{{ route('quotes.create') }}" class="btn-default">{{ __('Get free quote') }}</a>
                                        </div>
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->
            </div>
            <div class="hero-pagination"></div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Lasting Protection') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Transparent Pricing') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('24/7 Emergency Repairs') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Customer Satisfaction') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Lasting Protection') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Transparent Pricing') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('24/7 Emergency Repairs') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Customer Satisfaction') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Lasting Protection') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Transparent Pricing') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('24/7 Emergency Repairs') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Customer Satisfaction') }}</span>
            </div>

            <div class="scrolling-content">
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Lasting Protection') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Transparent Pricing') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('24/7 Emergency Repairs') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Customer Satisfaction') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Lasting Protection') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Transparent Pricing') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('24/7 Emergency Repairs') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Customer Satisfaction') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Lasting Protection') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Transparent Pricing') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('24/7 Emergency Repairs') }}</span>
                <span><img src="assets/images/asterisk-icon.svg" alt="">{{ __('Customer Satisfaction') }}</span>
            </div>
        </div>
        <!-- Scrolling Ticker End -->
    </div>
    <!-- Scrolling Ticker Section End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image Box Start -->
                        <div class="about-image-box-1">
                            <!-- About Image 1 Start -->
                            <div class="about-img-1">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/about-img-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Image 1 End -->

                            <!-- About Image 2 Start -->
                            <div class="about-img-2">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/about-img-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Image 2 End -->
                        </div>
                        <!-- About Image Box End -->

                        <!-- About Image Box Start -->
                        <div class="about-image-box-2">
                            <!-- About Image 3 Start -->
                            <div class="about-img-3">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/about-img-3.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Image 3 End -->

                            <!-- About Image 4 Start -->
                            <div class="about-img-4">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/about-img-4.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Image 4 End -->
                        </div>
                        <!-- About Image Box End -->
                    </div>
                    <!-- About Us Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('About Us') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('About Title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('About Text') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Content Body Start -->
                        <div class="about-us-content-body">
                            <!-- About Us Item Start -->
                            <div class="about-us-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="assets/images/icon-about-us-1.svg" alt="">
                                </div>
                                <div class="about-item-content">
                                    <h3>{{ __('Expert Home Remodeling Services to Your Living Spaces') }}</h3>
                                </div>
                            </div>
                            <!-- About Us Item End -->

                            <!-- About Us Item Start -->
                            <div class="about-us-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="assets/images/icon-about-us-2.svg" alt="">
                                </div>
                                <div class="about-item-content">
                                    <h3>{{ __('Interior and Exterior Painting Services for a Fresh, Vibrant Look') }}</h3>
                                </div>
                            </div>
                            <!-- About Us Item End -->
                        </div>
                        <!-- About Us Content Body End -->

                        <!-- About Us Content List Start -->
                        <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.8s">
                            <ul>
                                <li>{{ __('Free Project Consultations') }}</li>
                                <li>{{ __('Customer-Centered Approach') }}</li>
                            </ul>
                        </div>
                        <!-- About Us Content List End -->

                        <!-- About Us Content Button Start -->
                        <div class="about-us-content-btn wow fadeInUp" data-wow-delay="1s">
                            <a href="/about" class="btn-default">{{ __('Read more') }}</a>
                        </div>
                        <!-- About Us Content Button End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services parallaxie">
        <div class="container">
            <div class="row section-row">
                <!-- Section Title Start -->
                <div class="section-title dark-section">
                    <h3 class="wow fadeInUp">{{ __('Services') }}</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('Service Title') }}</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">{{ __('Service Text') }}</p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Our Services Box Start -->
                <div class="our-service-box tab-content" id="myTabContent">
                    <!-- Sidebar Our Services Nav start -->
                    <div class="our-service-nav wow fadeInUp" data-wow-delay="0.25s">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="remodeling-tab" data-bs-toggle="tab"
                                        data-bs-target="#remodeling" type="button" role="tab" aria-selected="true"><img
                                        src="assets/images/icon-service-nav-1.svg" alt=""> {{ __('Home Remodeling') }}
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="installation-tab" data-bs-toggle="tab"
                                        data-bs-target="#installation" type="button" role="tab" aria-selected="false"><img
                                        src="assets/images/icon-service-nav-2.svg" alt=""> {{ __('Roofing Installation') }}
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="waterproofing-tab" data-bs-toggle="tab"
                                        data-bs-target="#waterproofing" type="button" role="tab" aria-selected="false"><img
                                        src="assets/images/icon-service-nav-3.svg" alt=""> {{ __('Roof Waterproofing') }}
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="painting-tab" data-bs-toggle="tab" data-bs-target="#painting"
                                        type="button" role="tab" aria-selected="false"><img
                                        src="assets/images/icon-service-nav-4.svg" alt=""> {{ __('Drywall & Painting') }}
                                </button>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar Our Services Nav End -->

                    <!-- Our Services Item Start -->
                    <div class="service-tab-item tab-pane fade show active" id="remodeling" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Service Tab Content Start -->
                                <div class="service-tab-content">
                                    <div class="service-tab-content-header">
                                        <p>{{ __('Service Description') }}</p>
                                    </div>

                                    <div class="service-tab-content-list">
                                        <ul>
                                            <li>{{ __('Custom Design Solutions Tailored to Your Unique Style and Needs') }}</li>
                                            <li>{{ __('Utilizing High-Quality Materials for Lasting Durability') }}</li>
                                            <li>{{ __('Experienced Professionals Committed to Craftsmanship') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Service Tab Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Service Tab Image Start -->
                                <div class="service-tab-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/service-tab-image-1.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Service Tab Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Our Services Item End -->

                    <!-- Our Services Item Start -->
                    <div class="service-tab-item tab-pane fade" id="installation" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Service Tab Content Start -->
                                <div class="service-tab-content">
                                    <div class="service-tab-content-header">
                                        <p>{{ __('Service Description') }}</p>
                                    </div>

                                    <div class="service-tab-content-list">
                                        <ul>
                                            <li>{{ __('Custom Design Solutions Tailored to Your Unique Style and Needs') }}</li>
                                            <li>{{ __('Utilizing High-Quality Materials for Lasting Durability') }}</li>
                                            <li>{{ __('Experienced Professionals Committed to Craftsmanship') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Service Tab Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Service Tab Image Start -->
                                <div class="service-tab-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/service-tab-image-1.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Service Tab Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Our Services Item End -->

                    <!-- Our Services Item Start -->
                    <div class="service-tab-item tab-pane fade" id="waterproofing" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Service Tab Content Start -->
                                <div class="service-tab-content">
                                    <div class="service-tab-content-header">
                                        <p>{{ __('Service Description') }}</p>
                                    </div>

                                    <div class="service-tab-content-list">
                                        <ul>
                                            <li>{{ __('Custom Design Solutions Tailored to Your Unique Style and Needs') }}</li>
                                            <li>{{ __('Utilizing High-Quality Materials for Lasting Durability') }}</li>
                                            <li>{{ __('Experienced Professionals Committed to Craftsmanship') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Service Tab Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Service Tab Image Start -->
                                <div class="service-tab-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/service-tab-image-1.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Service Tab Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Our Services Item End -->

                    <!-- Our Services Item Start -->
                    <div class="service-tab-item tab-pane fade" id="painting" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Service Tab Content Start -->
                                <div class="service-tab-content">
                                    <div class="service-tab-content-header">
                                        <p>{{ __('Service Description') }}</p>
                                    </div>

                                    <div class="service-tab-content-list">
                                        <ul>
                                            <li>{{ __('Custom Design Solutions Tailored to Your Unique Style and Needs') }}</li>
                                            <li>{{ __('Utilizing High-Quality Materials for Lasting Durability') }}</li>
                                            <li>{{ __('Experienced Professionals Committed to Craftsmanship') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Service Tab Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Service Tab Image Start -->
                                <div class="service-tab-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/service-tab-image-1.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Service Tab Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Our Services Item End -->
                </div>
                <!-- Our Services Box End -->
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Our Project Section Start -->
    <div class="our-project">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('Our Project') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('Our Project Title') }}</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('Our Project Text') }}</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Choose Our Project Nav start -->
                    <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">{{ __('All') }}</a></li>
                            <li><a href="#" data-filter=".shingle">{{ __('Shingle Roofing') }}</a></li>
                            <li><a href="#" data-filter=".flat">{{ __('Flat Roofing') }}</a></li>
                            <li><a href="#" data-filter=".metal">{{ __('Metal Roofing') }}</a></li>
                        </ul>
                    </div>
                    <!-- Choose Our Project Nav End -->
                </div>

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">
                        <div class="col-lg-4 col-md-6 project-item-box shingle flat">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/project-1.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="project-tag">
                                    <a href="#">{{ __('Shingle Roofing') }}</a>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">{{ __('Modern Shingle Roof Installation in Suburban Home') }}</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box flat metal">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/project-2.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="project-tag">
                                    <a href="#">{{ __('Flat Roofing') }}</a>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">{{ __('Flat Roof Replacement for Commercial Building') }}</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box metal">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/project-3.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="project-tag">
                                    <a href="#">{{ __('Metal Roofing') }}</a>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">{{ __('Metal Roof Upgrade on Historic Property') }}</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box shingle">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/project-4.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="project-tag">
                                    <a href="#">{{ __('Shingle Roofing') }}</a>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">{{ __('Modern Shingle Roof Installation in Suburban Home') }}</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box flat shingle">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.8s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/project-5.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="project-tag">
                                    <a href="#">{{ __('Flat Roofing') }}</a>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">{{ __('Flat Roof Replacement for Commercial Building') }}</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box metal">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="1s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/project-6.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="project-tag">
                                    <a href="#">{{ __('Metal Roofing') }}</a>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#"{{ __('>Metal Roof Upgrade on Historic Property') }}</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>

                <div class="col-lg-12">
                    <!-- Project Quote Text Start -->
                    <div class="project-quote-text wow fadeInUp" data-wow-delay="1s">
                        <p><span>{{ __('Free') }}</span> {{ __("Let's make something great work together") }} <a href="{{ route('quotes.create') }}">{{ __('Get free quote') }}</a></p>
                    </div>
                    <!-- Project Quote Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Project Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">{{ __('Why Choose Us') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('Why Choose Us Title') }}</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Body Start -->
                        <div class="why-choose-body">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="assets/images/icon-why-choose-1.svg" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>{{ __('Expert Craftsmanship') }}</h3>
                                    <p>{{ __('Our roofing specialists combine years of experience with attention to detail, delivering superior craftsmanship') }}</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="assets/images/icon-why-choose-2.svg" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>{{ __('Comprehensive Roofing Solutions') }}</h3>
                                    <p>{{ __('We offer a full range of services, from roof installation and repairs to maintenance,
                                        ensuring your roofing needs') }}</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Body End -->

                        <!-- Why Choose List Start -->
                        <div class="why-choose-list wow fadeInUp" data-wow-delay="0.6s">
                            <ul>
                                <li><img src="assets/images/icon-why-choose-list-1.svg" alt="">{{ __('Emergency Repair Services') }}</li>
                                <li><img src="assets/images/icon-why-choose-list-2.svg" alt="">{{ __('Excellent Customer Service') }}</li>
                            </ul>
                        </div>
                        <!-- Why Choose List End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>

                <div class="col-lg-6">
                    <div class="why-choose-images">
                        <figure>
                            <img src="assets/images/why-choose-images.png" alt="">
                        </figure>
                        <!-- <div class="why-choose-img-1">
                            <figure>
                                <img src="assets/images/why-choose-img-1.jpg" alt="">
                            </figure>
                        </div>

                        <div class="why-choose-img-2">
                            <figure>
                                <img src="assets/images/why-choose-img-2.jpg" alt="">
                            </figure>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- How It Work Section Start -->
    <div class="how-it-work">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- How Work Content Image Start -->
                    <div class="how-work-content-image">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('How It Works') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('How It Works Title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">{{ __('How It Works Text') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- How Work Images Start -->
                        <div class="how-work-images">
                            <!-- How Work Img Start -->
                            <div class="how-work-img">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/how-work-img-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- How Work Img End -->

                            <!-- How Work Img Start -->
                            <div class="how-work-img">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/how-work-img-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- How Work Img End -->

                            <!-- How Work Icon Box Start -->
                            <div class="how-work-icon-box">
                                <figure>
                                    <img src="{{ asset('assets/images/logo-icon-white.svg') }}" alt="">
                                </figure>
                            </div>
                            <!-- How Work Icon Box End -->
                        </div>
                        <!-- How Work Images End -->
                    </div>
                    <!-- How Work Content Image End -->
                </div>

                <div class="col-lg-6">
                    <div class="how-work-step-box">
                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp">
                            <div class="how-work-step-no">
                                <h3>01</h3>
                            </div>
                            <div class="how-work-step-content">
                                <h3>{{ __('Initial Consultation and Assessment') }}</h3>
                                <p>{{ __('Initial Consultation and Assessment Text') }}</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->

                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="how-work-step-no">
                                <h3>02</h3>
                            </div>
                            <div class="how-work-step-content">
                                <h3>{{ __('Detailed Estimate and Planning') }}</h3>
                                <p>{{ __('Detailed Estimate and Planning Text') }}</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->

                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="how-work-step-no">
                                <h3>03</h3>
                            </div>
                            <div class="how-work-step-content">
                                <h3>{{ __('Material Selection and Preparation') }}</h3>
                                <p>{{ __('Material Selection and Preparation Text') }}</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- How Work Benefit Box Start -->
                    <div class="how-work-benefit-box">
                        <!-- Work Benefit Item Start -->
                        <div class="work-benefit-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="assets/images/icon-work-benefit-1.svg" alt="">
                            </div>
                            <div class="work-benefits-item-content">
                                <h3>{{ __('Storm & Hail Damage Repair') }}</h3>
                            </div>
                        </div>
                        <!-- Work Benefit Item End -->

                        <!-- Work Benefit Item Start -->
                        <div class="work-benefit-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="assets/images/icon-work-benefit-2.svg" alt="">
                            </div>
                            <div class="work-benefits-item-content">
                                <h3>{{ __('Free Roof Inspections') }}</h3>
                            </div>
                        </div>
                        <!-- Work Benefit Item End -->

                        <!-- Work Benefit Item Start -->
                        <div class="work-benefit-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="assets/images/icon-work-benefit-3.svg" alt="">
                            </div>
                            <div class="work-benefits-item-content">
                                <h3>{{ __('Insurance Claims') }}</h3>
                            </div>
                        </div>
                        <!-- Work Benefit Item End -->

                        <!-- Work Benefit Item Start -->
                        <div class="work-benefit-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="assets/images/icon-work-benefit-4.svg" alt="">
                            </div>
                            <div class="work-benefits-item-content">
                                <h3>{{ __('24/7 Emergency Roof Leak Repair') }}</h3>
                            </div>
                        </div>
                        <!-- Work Benefit Item End -->
                    </div>
                    <!-- How Work Benefit Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How It Work Section End -->


    <!-- Our Testimonial Section Start -->
    @include('components.testimonials')
    <!-- Our Testimonial Section End -->


{{--    <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Latest Post</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Latest updates on roofing trends</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Stay informed with the latest roofing trends,
                            including innovative materials, energy-efficient solutions, and cutting-edge technologies that
                            enhance durability.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure>
                                <a href="#" class="image-anime" data-cursor-text="View">
                                    <img src="assets/images/post-1.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Tag Start -->
                            <div class="post-item-meta">
                                <ul>
                                    <li><a href="#">Home Roof</a></li>
                                    <li>jun 5, 2024</li>
                                </ul>
                            </div>
                            <!-- Post Item Tag End -->

                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="#">Top Signs It's Time for a Roof Replacement</a></h2>
                            </div>
                            <!-- Post Item Content End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure>
                                <a href="#" class="image-anime" data-cursor-text="View">
                                    <img src="assets/images/post-2.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Tag Start -->
                            <div class="post-item-meta">
                                <ul>
                                    <li><a href="#">Home Roof</a></li>
                                    <li>jun 12, 2024</li>
                                </ul>
                            </div>
                            <!-- Post Item Tag End -->

                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="#">How to Choose the Best Roofing Material for Your Home</a>
                                </h2>
                            </div>
                            <!-- Post Item Content End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure>
                                <a href="#" class="image-anime" data-cursor-text="View">
                                    <img src="assets/images/post-3.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Tag Start -->
                            <div class="post-item-meta">
                                <ul>
                                    <li><a href="#">Home Roof</a></li>
                                    <li>jun 26, 2024</li>
                                </ul>
                            </div>
                            <!-- Post Item Tag End -->

                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="#">The Importance of Proper Roof Ventilation for Home Health</a>
                                </h2>
                            </div>
                            <!-- Post Item Content End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->--}}

@endsection
