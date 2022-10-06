@extends('layouts.page')
@section('content')
<section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url({{'/banners/'.$banner->file}});">
    <div class="bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                <h1 class="alt-font text-dark opacity-6 margin-20px-bottom">{{$banner->header}}</h1>
                <h2 class="text-dark alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">{{$banner->title}}</h2>
            </div>
            <div class="down-section text-center"><a href="#servicios" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
        </div>
    </div>
</section>
<section id="servicios" class="big-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center" style="margin-bottom: 30px;">
            <!-- start rotate box item -->
            @foreach ($services as $service)
            <div class="col col-sm-8 margin-30px-bottom">
                <div class="rm-rotate-box text-center">
                    <div class="flipper to-left">
                        <div class="thumb-wrap">
                            <div class="front overflow-hidden h-480px border-radius-4px overflow-hidden lg-h-450px" style="background-image:url('{{'/services/'.$service->image}}')">
                                <div class="opacity-medium-2 bg-gradient-extra-dark-gray-transparent"></div>
                                <div class="content-wrap padding-15px-lr">
                                    <span class="text-white text-large letter-spacing-1px margin-10px-bottom text-uppercase alt-font d-inline-block font-weight-500">{{$service->title}}</span>
                                    <!-- <span class="text-white opacity-6 text-medium text-uppercase letter-spacing-1-half alt-font d-block">Starting from $50</span>                                           -->
                                </div>
                            </div>
                            <div class="back border-radius-4px overflow-hidden">
                                <div class="overlay-bg bg-gradient-tan-geraldine"></div>
                                <div class="content-wrap padding-60px-all lg-padding-30px-lr md-padding-40px-lr xs-padding-30px-all">
                                    <i class="line-icon-Daylight icon-large text-white margin-35px-bottom"></i>
                                    <!-- <span class="text-white text-extra-medium letter-spacing-1px font-weight-500 text-uppercase alt-font d-block margin-10px-bottom">Ayurvedic</span> -->
                                    <p class="text-white opacity-7 text-center">{{$service->description}}</p>
                                    <!-- <a href="#" class="btn btn-link thin btn-extra-large text-extra-dark-gray">Discover more</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end rotate box item -->
        </div>
    </div>
</section>
@endsection
