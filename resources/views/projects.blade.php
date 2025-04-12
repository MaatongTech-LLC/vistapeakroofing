@extends('layout')
@section('title', 'Project')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: start; position: relative;">
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        O
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        u
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        r
                                    </div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        p
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        r
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        o
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        j
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        e
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        c
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        t
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        s
                                    </div>
                                </div>
                            </div>
                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">projects</li>
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
                            <li><a href="#" class="active-btn" data-filter="*">all</a></li>
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


                        @foreach($images as $image)
                            <div class="col-lg-4 col-md-6 project-item-box shingle flat"
                                 style="position: absolute; left: 0px; top: 0px;">
                                <!-- Project Item Start -->
                                <div class="project-item wow fadeInUp"
                                     style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="project-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/project-images/' . $image) }}" alt="">
                                        </figure>
                                    </div>

                                    <div class="project-tag">
                                        <a href="#">Roofing Service</a>
                                    </div>

                                    <div class="project-content">
                                        <h3><a href="#">Project by Vista Peak Roofing</a></h3>
                                    </div>
                                </div>
                                <!-- Project Item End -->
                            </div>
                        @endforeach

                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Projects End -->

@endsection
