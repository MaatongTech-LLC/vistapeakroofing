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
                            {{ __('Services') }}
                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Services') }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Projects Start -->
    <div class="page-projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center"
                         style="position: relative; height: 1057.97px;">


                        @forelse($services as $service)
                            <div class="col-lg-4 col-md-6 project-item-box shingle flat"
                                 style="position: absolute; left: 0px; top: 0px;">
                                <!-- Project Item Start -->
                                <div class="project-item wow fadeInUp"
                                     style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="project-image">
                                        <figure class="image-anime">
                                            @if($service->images && count($service->images) > 0)
                                                <img src="{{ Storage::url($service->images[0]) }}" alt="{{ $service->name }}" class="w-full h-64 object-cover">
                                            @endif
                                        </figure>
                                    </div>

                                    <div class="project-tag">
                                        <a href="{{ route('services.show', $service) }}">{{ ucwords($service->category) }}</a>
                                    </div>

                                    <div class="project-content">
                                        <h3><a href="{{ route('services.show', $service) }}">{{ $service->name }}</a></h3>
                                    </div>
                                </div>
                                <!-- Project Item End -->
                            </div>
                        @empty
                            <h2 class="text-center">{{ __('No Data') }}</h2>
                        @endforelse
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Projects End -->

@endsection
