@extends('layouts.base')

@section('content')

    <!-- slider  -->
    <div class="slider-section">
        <div>
            <div>
                <div class="main-slider" id="homeslider--ds1">
                    <a href="#">
                        <img src="/images/slider/img_1.jpg" class="img-fluid d-block m-auto" alt="" />
                    </a>
                    <a href="#">
                        <img src="/images/slider/img_2.jpg" class="img-fluid d-block m-auto" alt="" />
                    </a>
                    <a href="#">
                        <img src="/images/slider/img_3.jpg" class="img-fluid d-block m-auto" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- slider !ENDS -->

    <!-- popular products  -->
    <div class="popular-products">
        <div class="home-popular-title">
            <h2>
                FIND YOUR BEAUTY MATCH
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-12 col-md-2">
                        <a href="">
                            <div class="single-product mt-3">
                                <div class="single-product--img">
                                    <img src="/images/product/img_{{ $i + 1 }}.jpg" class="img-fluid d-block m-auto"
                                        alt="">
                                </div>
                                <div class="single-product--desc">
                                    <div class="single-product--title">
                                        <a href="/">
                                            Rose Safari
                                        </a>
                                    </div>
                                    <div class="single-product--type">
                                        Lip Gloss
                                    </div>
                                    <div class="single-product--price">
                                        Rs. 2000
                                    </div>
                                </div>
                                <div class="single-product--action">
                                    <button class="btn btn-float btn-sm btn-view">
                                        <i class="material-icons">visibility</i>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-12 col-md-2">
                        <a href="">
                            <div class="single-product mt-3">
                                <div class="single-product--img">
                                    <img src="/images/product/img_{{ $i + 1 }}.jpg" class="img-fluid d-block m-auto"
                                        alt="">
                                </div>
                                <div class="single-product--desc">
                                    <div class="single-product--title">
                                        <a href="/">
                                            Rose Safari
                                        </a>
                                    </div>
                                    <div class="single-product--type">
                                        Lip Gloss
                                    </div>
                                    <div class="single-product--price">
                                        Rs. 2000
                                    </div>
                                </div>
                                <div class="single-product--action">
                                    <button class="btn btn-float btn-sm btn-view">
                                        <i class="material-icons">visibility</i>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-12 col-md-2">
                        <a href="">
                            <div class="single-product mt-3">
                                <div class="single-product--img">
                                    <img src="/images/product/img_{{ $i + 1 }}.jpg" class="img-fluid d-block m-auto"
                                        alt="">
                                </div>
                                <div class="single-product--desc">
                                    <div class="single-product--title">
                                        <a href="/">
                                            Rose Safari
                                        </a>
                                    </div>
                                    <div class="single-product--type">
                                        Lip Gloss
                                    </div>
                                    <div class="single-product--price">
                                        Rs. 2000
                                    </div>
                                </div>
                                <div class="single-product--action">
                                    <button class="btn btn-float btn-sm btn-view">
                                        <i class="material-icons">visibility</i>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- popular products !ENDS -->

    <!-- blog  -->
    <div class="home-blog-section">
        <div class="home-popular-title">
            <h2>
                FROM THE BLOG
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-12 col-md-3">
                        <a href="">

                            <div class="single-blog mt-3">
                                <div class="single-blog--img">

                                    <img src="/images/blog/img_{{ $i + 1 }}.jpg" class="img-fluid d-block m-auto"
                                        alt="">
                                </div>
                                <div class="single-blog--desc">
                                    <a href="/">
                                        <p>
                                            In What Order Do I Apply My Skin Care Products?
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- blog !ENDS -->
@endsection
