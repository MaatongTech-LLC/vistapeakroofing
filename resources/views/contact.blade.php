@extends('layout')
@section('title', 'Contact Us')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            {{ __('Contact Us') }}
                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Contact Us') }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Conatct Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="assets/images/icon-white-phone.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Contact Info Content Start -->
                        <div class="contact-info-content">
                            <p>{{ __('Contact Us') }}</p>
                            <h3>+1 317 993 7623</h3>
                        </div>
                        <!-- Contact Info Content End -->
                    </div>
                    <!-- Conatct Info Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Conatct Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s"
                         style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="assets/images/icon-white-mail.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Contact Info Content Start -->
                        <div class="contact-info-content">
                            <p>{{ __('Email Address') }}</p>
                            <h3>info@vistapeakroofing.com</h3>
                        </div>
                        <!-- Contact Info Content End -->
                    </div>
                    <!-- Conatct Info Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Conatct Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s"
                         style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="assets/images/icon-white-location.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Contact Info Content Start -->
                        <div class="contact-info-content">
                            <p>{{ __('Location') }}</p>
                            <h3>Plainfield, Indiana, USA</h3>
                        </div>
                        <!-- Contact Info Content End -->
                    </div>
                    <!-- Conatct Info Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Contact Form Start -->
    <div class="contact-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Form Image Start -->
                    <div class="contact-form-img">
                        <figure class="image-anime reveal"
                                style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                            <img src="{{ asset('assets/images/company-skill-image.jpg') }}" alt=""
                                 style="transform: translate(0px, 0px);">
                        </figure>
                    </div>
                    <!-- Contact Form Image End -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">{{ __('Quotation Form') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                {{ __('Get a free quote') }}
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Us Form Start -->
                        <form id="" action="{{ route('contact.post') }}" method="POST"  class="wow fadeInUp"
                              data-wow-delay="0.25s"
                              style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="firstname" class="form-control" id="fname"
                                           placeholder="{{ __('First Name') }}" required="">
                                    @error('firstname')
                                        <div class="help-block with-errors">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lastname" class="form-control" id="lname"
                                           placeholder="{{ __('Last Name') }}" required="">
                                    @error('lastname')
                                    <div class="help-block with-errors">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" name="email" class="form-control" id="email"
                                           placeholder="{{ __('Email Address') }}" required="">
                                    @error('email')
                                        <div class="help-block with-errors">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                           placeholder="{{ __('Phone Number') }}" required="">
                                    @error('phone')
                                    <div class="help-block with-errors">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="4"
                                              placeholder="{{ __('Message') }}"></textarea>
                                    @error('message')
                                    <div class="help-block with-errors">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default">{{ __('Submit') }}</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Contact Us Form End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container-flude">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98240.3721838553!2d-86.38687!3d39.69444245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca48c841038a1%3A0x70cfba96bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2scm!4v1744461410939!5m2!1sen!2scm"
                            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map Iframe End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->
@endsection
