@extends('layout')
@section('title', __('About'))
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">{{ __('About Us') }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">{{ __('Home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('About Us') }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Us Section Start -->
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

    <!-- About Us Section End -->

    <!-- Our Approach Section Start -->
    <div class="our-approach parallaxie">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- Our Approach Content Start -->
                    <div class="our-approach-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">{{ __('Our Approach') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('Our Approach Title') }}</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Our Approach Box Start -->
                        <div class="our-approach-box">
                            <!-- Our Approach Item Start -->
                            <div class="our-approach-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="assets/images/icon-our-mission.svg" alt="">
                                </div>

                                <div class="approach-item-content">
                                    <h3>{{ __('Our Mission') }}</h3>
                                    <p>{{ __('Our Mission Text') }}</p>
                                </div>
                            </div>
                            <!-- Our Approach Item End -->

                            <!-- Our Approach Item Start -->
                            <div class="our-approach-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="assets/images/icon-our-vision.svg" alt="">
                                </div>

                                <div class="approach-item-content">
                                    <h3>{{ __('Our Vision') }}</h3>
                                    <p>{{ __('Our Vision Text') }}</p>
                                </div>
                            </div>
                            <!-- Our Approach Item End -->

                            <!-- Our Approach Item Start -->
                            <div class="our-approach-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="assets/images/icon-our-value.svg" alt="">
                                </div>

                                <div class="approach-item-content">
                                    <h3>{{ __('Our Value') }}</h3>
                                    <p>{{ __('Our Value Text') }}</p>
                                </div>
                            </div>
                            <!-- Our Approach Item End -->
                        </div>
                        <!-- Our Approach Box End -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Our Approach Image Start -->
                    <div class="our-approach-img">
                        <figure class="image-anime">
                            <img src="assets/images/our-approach-img.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Our Approach Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Our Benefits Section Start -->
    <div class="our-benefits">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Benefits Images Start -->
                    <div class="our-benefits-images">
                        <!-- Our Benefits Image Box Start -->
                        <div class="our-benefits-image-box-1">
                            <!-- Our Benefits Image Start -->
                            <div class="our-benefit-img">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/our-benefit-img-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Our Benefits Image End -->
                        </div>
                        <!-- Our Benefits Image Box End -->

                        <!-- Our Benefits Image Box Start -->
                        <div class="our-benefits-image-box-2">
                            <!-- Our Benefits Image Start -->
                            <div class="our-benefit-img">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/our-benefit-img-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Our Benefits Image End -->

                            <!-- Our Benefits Image Start -->
                            <div class="our-benefit-img">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/our-benefit-img-3.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Our Benefits Image End -->
                        </div>
                        <!-- Our Benefits Image Box End -->

                        <!-- Company Benefits Box Start -->
                        <div class="company-benefit-box">
                            <h2><span class="counter">{{ \App\Models\Project::count() }}</span>+</h2>
                            <h3>{{ __('Total Project') }}</h3>
                        </div>
                        <!-- Company Benefits Box End -->
                    </div>
                    <!-- Our Benefits Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Benefits Content Start -->
                    <div class="our-benefits-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('Key Benefits') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('Key Benefits Title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">{{ __('Key Benefits Description') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Our Benefits List Start -->
                        <div class="our-benefits-list">
                            <!-- Benefits List Item Start -->
                            <div class="benefits-list-item wow fadeInUp">
                                <h3>{{ __('Durability and Longevity') }}</h3>
                                <p>
                                    {{ __('Durability and Longevity Text') }}
                                </p>
                            </div>
                            <!-- Benefits List Item End -->

                            <!-- Benefits List Item Start -->
                            <div class="benefits-list-item wow fadeInUp" data-wow-delay="0.2s">
                                <h3>{{ __('Enhanced Curb Appeal') }}</h3>
                                <p>{{ __('Enhanced Curb Appeal Text') }}</p>
                            </div>
                            <!-- Benefits List Item End -->

                            <!-- Benefits List Item Start -->
                            <div class="benefits-list-item wow fadeInUp" data-wow-delay="0.4s">
                                <h3>{{ __('Safety and Peace of Mind') }}</h3>
                                <p>{{ __('Safety and Peace of Mind Text') }}</p>
                            </div>
                            <!-- Benefits List Item End -->
                        </div>
                        <!-- Our Benefits List End -->
                    </div>
                    <!-- Our Benefits Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Benefits Section End -->

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


    <!-- Our Testimonial Section Start -->
    @include('components.testimonials')
    <!-- Our Testimonial Section End -->
@endsection
