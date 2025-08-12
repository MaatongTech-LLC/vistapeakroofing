@extends('layout')
@section('title', __('Projects'))
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            {{ __('Projects') }}
                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Projects') }}</li>
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
                    <!-- Choose Our Project Nav start -->
                    <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.25s"
                         style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">{{ __('All') }}</a></li>
                            {{--<li><a href="#" data-filter=".shingle">Shingle Roofing</a></li>
                            <li><a href="#" data-filter=".flat">Flat Roofing</a></li>
                            <li><a href="#" data-filter=".metal">Metal Roofing</a></li>--}}
                        </ul>
                    </div>
                    <!-- Choose Our Project Nav End -->
                </div>

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center"
                         style="position: relative; height: 1057.97px;">


                        @forelse($projects as $project)
                            <div class="col-lg-4 col-md-6 project-item-box shingle flat"
                                 style="position: absolute; left: 0px; top: 0px;">
                                <!-- Project Item Start -->
                                <div class="project-item wow fadeInUp"
                                     style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="project-image">
                                        <figure class="image-anime">
                                            @if($project->images && count($project->images) > 0)
                                                <img src="{{ Storage::url($project->images[0]) }}" alt="{{ $project->title }}" class="w-full h-64 object-cover">
                                            @endif
                                        </figure>
                                    </div>

                                    <div class="project-tag">
                                        <a href="javascript:void(0);">{{ $project->location }}</a>
                                    </div>

                                    <div class="project-content">
                                        <h3><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></h3>
                                    </div>
                                </div>
                                <!-- Project Item End -->
                            </div>
                        @empty
                            <h2 class="text-center">{{ __('No Data') }}</h2>
                        @endforelse
                    </div>
                    <!-- Project Item Boxes End -->
                    <div class="mt-2 mx-auto">{{ $projects->links('vendor.pagination.bootstrap-5') }}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Projects End -->

@endsection
