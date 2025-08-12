@extends('layout')
@section('title', __('Services'))
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            {{ $service->name }}
                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
                                <li class="breadcrumb-item"><a href="/services">{{ __('Services') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $service->name }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Project Single Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Project Sidebar Start -->
                    <div class="project-sidebar">
                        <!-- Project Category List Start -->
                        <div class="project-catagery wow fadeInUp"
                             style="visibility: visible; animation-name: fadeInUp;">
                            <div class="project-catagery-list">
                                <ul>
                                    <li><span>Category: </span>{{ ucwords($service->category) }}</li>
                                    <li><span>starting price: </span>${{ $service->starting_price }}</li>
                                    <li><span>Price Unit: </span>{{ ucwords($service->price_unit) }}</li>
                                    <li><span>estimated duration (days): </span>{{ $service->estimated_duration }}</li>
                                </ul>
                            </div>

                            <!-- Category Social Link Start -->
                            <div class="category-social-link">
                                <span>share:</span>
                                <ul>
                                    <li><a target="_blank" href="https://pinterest.com/pin/create/button/?url={{ route('services.show', $service) }}"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/intent/tweet?url={{ route('services.show', $service) }}"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('services.show', $service) }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                            <!-- Category Social Link End -->
                        </div>
                        <!-- Project Category List End -->
                    </div>
                    <!-- Project Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Project Single Content Start -->
                    <div class="project-single-content">
                        <!-- Project Single Sidebar Start -->
                        <div class="project-single-slider">
                            <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                <div class="swiper-wrapper" aria-live="off"
                                     style="transition-duration: 0ms; transform: translate3d(-1734px, 0px, 0px); transition-delay: 0ms;">

                                    @if($service->images && count($service->images) > 0)
                                        @for($i = 0; $i < count($service->images); $i++)
                                            <div class="swiper-slide swiper-slide-prev" role="group"
                                                 aria-label="{{ $i+1 }} / {{ count($service->images) }}"
                                                 data-swiper-slide-index="{{ $i+1 }}" style="width: 837px; margin-right: 30px;">
                                                <figure class="image-anime">
                                                    <img src="{{ Storage::url($service->images[$i]) }}" alt="">
                                                </figure>
                                            </div>
                                        @endfor
                                    @endif

                                </div>
                                <div
                                    class="project-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                          aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet"
                                                                                  tabindex="0" role="button"
                                                                                  aria-label="Go to slide 2"></span><span
                                        class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                        role="button" aria-label="Go to slide 3" aria-current="true"></span><span
                                        class="swiper-pagination-bullet" tabindex="0" role="button"
                                        aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet"
                                                                                tabindex="0" role="button"
                                                                                aria-label="Go to slide 5"></span></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                        <!-- Project Single Sidebar End -->

                        <!-- Project Entry Start -->
                        <div class="project-entry">
                            <!-- Project Overview Section Start -->
                            <div class="project-overview">
                                <h2 class="text-anime-style-3" style="perspective: 400px;">
                                    {{ $service->name }}
                                </h2>
                                <p class="wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                    {{ $service->short_description }}
                                </p>
                                <p class="wow fadeInUp" data-wow-delay="0.2s"
                                   style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                                    {{ $service->description }}
                                </p>
                            </div>
                            <!-- Project Overview Section End -->

                            <!-- Project Goal Section Start -->
                            <div class="project-goals">
                                <h2 class="text-anime-style-3" style="perspective: 400px;">
                                    {{ __('Features') }}
                                </h2>

                                <!-- Project Entry Box Start -->
                                <div class="project-goals-item-list">
                                    <!-- Project Entry Item Start -->

                                    @foreach($service->features as $feature)
                                        <div class="project-goal-item wow fadeInUp" data-wow-delay="0.4s"
                                             style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                            <div class="icon-box">
                                                <img src="{{ asset('assets/images/icon-project-goal-1.svg') }}" alt="">
                                            </div>
                                            <div class="project-goal-item-content">
                                                <h3>{{ $feature }}</h3>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!-- Project Entry Item End -->

                                </div>
                                <!-- Project Entry Box End -->
                            </div>
                            <!-- Project Goal Section End -->

                        </div>
                        <!-- Project Entry End -->

                    </div>
                    <!-- Project Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Project Single End -->

@endsection
