@extends('layouts.page')
@section('content')
<section class="no-padding one-third-screen position-relative">
    <div class="opacity-full bg-gradient-light-orange-light-pink-2 z-index-0"></div>
    <div class="container h-100">
        <div class="row align-items-end justify-content-center h-100">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 page-title-large text-center">
            </div>
        </div>
    </div>
    <video loop="" autoplay="" controls="" muted class="html-video" poster="/assets/images/background-video-bg.jpg">
        <source type="video/mp4" src="{{'/banners/'.$banner->file}}" />
    </video>
</section>

<section class="bg-light-gray pb-md-0 wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center overlap-gap-section overlap-height">
                <img src="{{ asset('sections/'.$aboutSection->image) }}" alt="" />
            </div>
        </div>
    </div>
</section>
@if ($aboutSection->state)
<section class="p-0 overlap-section overflow-visible wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center sm-no-margin-lr">
            <div class="col-12 col-lg-11 box-shadow-medium bg-white align-items-center justify-content-center padding-6-rem-all md-padding-3-rem-all">
                <div class="row align-items-center justify-content-center mx-lg-0">
                    <div class="col-12 col-md-6 fancy-text-box-style-01 text-center text-md-left md-margin-50px-bottom sm-margin-40px-tb">
                        <div class="fancy-text-box padding-3-half-rem-all md-padding-4-rem-all xs-padding-30px-all">
                            <div class="fancy-text-box-border-left border-color-neon-orange"></div>
                            <h1 class="alt-font fancy-text-content font-weight-600 text-extra-dark-gray d-inline-block align-middle letter-spacing-minus-5px xs-padding-30px-tb">{{$aboutSection->header}}</h1>
                            <div class="alt-font text-extra-medium text-extra-dark-gray text-left d-inline-block align-middle w-90px mx-auto line-height-20px position-relative top-minus-4px">Años <br> de exper <br> iencia</div>
                            <div class="fancy-text-box-border-right border-color-neon-orange"></div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5 col-md-6 col-sm-11 text-center text-md-left sm-margin-20px-tb">
                        <!-- <span class="alt-font d-block margin-15px-bottom">Powerful theme for designer</span> -->
                        <h5 class="alt-font text-extra-dark-gray font-weight-500 margin-30px-bottom  sm-margin-20px-bottom"><span class="font-weight-600">{{$aboutSection->title}}</h5>
                        <p class="margin-40px-bottom sm-margin-30px-bottom text-justify">{{$aboutSection->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if ($historySection->state)
<section class="bg-light-white wow animate__fadeIn">
    <div class="col-12 col-md-6 text-center margin-5-rem-bottom">
        <!-- <span class="alt-font margin-10px-bottom d-block text-uppercase text-medium font-weight-500"></span> -->
        <h5 class="alt-font text-extra-dark-gray font-weight-500 letter-spacing-minus-1px">{{$historySection->title}}</h5>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
            @foreach ($history as $item)
                <!-- start fancy text box item -->
            <div class="col col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp">
                <div class="feature-box h-100 feature-box-left-icon-middle padding-4-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-8px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-all md-padding-4-rem-all">
                    <div class="feature-box-icon margin-20px-right">
                        <i class="fas fa-clock icon-medium text-dark-orange"></i>
                    </div>
                    <div class="feature-box-content line-height-22px">
                        <div class="text-extra-dark-gray alt-font font-weight-500 line-height-20px">{{$item->column_1}} Años</div>
                        <!-- <span class="text-small alt-font">Easy installation theme</span> -->
                    </div>
                    <div class="bg-medium-light-gray margin-25px-top w-100 h-1px"></div>
                    <p class="margin-25px-top text-justify">{{$item->column_2}}</p>
                    <h3 class="alt-font opacity-2 font-weight-500 letter-spacing-minus-2px position-absolute bottom-minus-20px sm-bottom-minus-15px right-50px m-0">{{$item->column_1}}</h3>
                </div>
            </div>
            <!-- end fancy text box item -->
            @endforeach
        </div>
    </div>
</section>
@endif

@if ($enterpriseSection->state)
<section class="bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 tab-style-02">
                <!-- start tab navigation -->
                <ul class="nav nav-tabs justify-content-center text-center alt-font margin-6-rem-bottom sm-margin-3-rem-bottom">
                    <li class="nav-item text-dark-orange"><a data-toggle="tab" href="#mision" class="nav-link active"><i class="ti-light-bulb icon-small"></i>Misión</a></li>
                    <li class="nav-item text-dark-orange"><a class="nav-link" data-toggle="tab" href="#vision"><i class="ti-timer icon-small"></i>Visión</a></li>
                    <li class="nav-item text-dark-orange"><a class="nav-link" data-toggle="tab" href="#principios"><i class="ti-pie-chart icon-small"></i>Principios</a></li>
                    <li class="nav-item text-dark-orange"><a class="nav-link" data-toggle="tab" href="#objetivos"><i class="ti-crown icon-small"></i>Objetivos</a></li>
                </ul>
                <!-- end tab navigation -->
                <div class="tab-content">
                    <!-- start tab item -->
                    <div id="mision" class="tab-pane fade in active show">
                        <div class="row align-items-lg-center">
                            <!-- <div class="col-12 col-lg-4 col-md-12 md-margin-6-rem-bottom sm-margin-4-rem-bottom">
                                <img src="images/our-process-teb-img.jpg" alt="" />
                            </div> -->
                            <div class="col-12 col-lg-4 col-md-6 padding-4-rem-left lg-padding-2-rem-left md-padding-15px-left sm-margin-30px-bottom">
                                <h6 class="alt-font font-weight-500 text-extra-dark-gray w-95 md-w-100">Nuestra <br> Misión</h6>
                                {{-- <a href="{{ asset('banners/'.$banner->file) }}" class="popup-youtube video-icon-box video-icon-small position-relative">
                                    <span>
                                        <span class="video-icon bg-gradient-light-purple-light-orange margin-15px-right">
                                            <i class="icon-simple-line-control-play text-white"></i>
                                            <span class="video-icon-sonar">
                                                <span class="video-icon-sonar-bfr bg-gradient-light-purple-light-orange opacity-7"></span>
                                            </span>
                                        </span>
                                        <span class="video-icon-text alt-font text-medium text-extra-dark-gray text-uppercase text-decoration-line-bottom d-inline-block font-weight-500 align-middle">Reproduce aquí </span>
                                    </span>
                                </a> --}}
                            </div>
                            <div class="col-12 col-lg-8 col-md-6 last-paragraph-no-margin">
                                <span class="alt-font text-extra-medium d-block text-extra-dark-gray margin-20px-bottom font-weight-500 text-justify">{{$mision->column_1}}</span>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris.</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                    <!-- start tab item -->
                    <div id="vision" class="tab-pane fade ">
                        <div class="row align-items-lg-center">
                            <!-- <div class="col-12 col-lg-4 col-md-12 md-margin-6-rem-bottom sm-margin-4-rem-bottom">
                                <img src="images/our-process-teb-img.jpg" alt="" />
                            </div> -->
                            <div class="col-12 col-lg-4 col-md-6 padding-4-rem-left lg-padding-2-rem-left md-padding-15px-left sm-margin-30px-bottom">
                                <h6 class="alt-font font-weight-500 text-extra-dark-gray w-95 md-w-100">Nuestra <br> Visión</h6>
                                {{-- <a href="{{ asset('banners/'.$banner->file) }}" class="popup-youtube video-icon-box video-icon-small position-relative">
                                    <span>
                                        <span class="video-icon bg-gradient-light-purple-light-orange margin-15px-right">
                                            <i class="icon-simple-line-control-play text-white"></i>
                                            <span class="video-icon-sonar">
                                                <span class="video-icon-sonar-bfr bg-gradient-light-purple-light-orange opacity-7"></span>
                                            </span>
                                        </span>
                                        <span class="video-icon-text alt-font text-medium text-extra-dark-gray text-uppercase text-decoration-line-bottom d-inline-block font-weight-500 align-middle">Reproduce aquí </span>
                                    </span>
                                </a> --}}
                            </div>
                            <div class="col-12 col-lg-8 col-md-6 last-paragraph-no-margin">
                                <span class="alt-font text-extra-medium d-block text-extra-dark-gray margin-20px-bottom font-weight-500 text-justify">{{$vision->column_1}}
                                </span>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris.</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                    <!-- start tab item -->
                    <div id="principios" class="tab-pane fade">                               
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">
                            @foreach ($principles as $principle)
                                <!-- start progress step item -->
                                <div class="col-10 text-center process-step-style-03 simple md-margin-5-rem-bottom">
                                    <div class="process-step-item">
                                        <div class="process-step-item-box">
                                            <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                            <div class="process-step-icon">
                                                <span class="process-step-number text-white font-weight-500">
                                                    <span class="process-step-number-bfr bg-light-orange"></span>{{$loop->index+1}}<span class="process-step-number-afr bg-gradient-magenta-orange-2"></span>
                                                </span>
                                            </div>
                                            <div class="process-content last-paragraph-no-margin">
                                                <span class="alt-font d-inline-block font-weight-500 text-medium-slate-blue text-uppercase margin-10px-bottom">{{$principle->column_1}}</span>
                                                <p>{{$principle->column_2}}</p>
                                            </div>                        
                                        </div>
                                    </div>
                                </div>
                            <!-- end progress step item -->
                            @endforeach
                        </div>
                    </div>
                    <!-- end tab item -->
                    <!-- start tab item -->                            
                    <div id="objetivos" class="tab-pane fade">                               
                        <div class="row row-cols-1 row-cols-lg-5 row-cols-sm-2 justify-content-center">
                            @foreach ($objetives as $objetive)
                                <!-- start progress step item -->
                            {{-- <div class="col-10 text-center process-step-style-03 simple md-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s"> --}}
                            <div class="col-10 text-center process-step-style-03 simple md-margin-5-rem-bottom">
                                <div class="process-step-item">
                                    <div class="process-step-item-box">
                                        <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                        <div class="process-step-icon">
                                            <span class="process-step-number text-white font-weight-500">
                                                <span class="process-step-number-bfr bg-light-orange"></span>{{$loop->index+1}}<span class="process-step-number-afr bg-gradient-magenta-orange-2"></span>
                                            </span>
                                        </div>
                                        <div class="process-content last-paragraph-no-margin">
                                            <span class="alt-font d-inline-block font-weight-500 text-medium-slate-blue text-uppercase margin-10px-bottom">{{$objetive->column_1}}</span>
                                            <p>{{$objetive->column_2}}</p>
                                        </div>                        
                                    </div>
                                </div>
                            </div>
                            <!-- end progress step item -->
                            @endforeach
                        </div>
                    </div>
                    <!-- end tab item -->
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if ($statisticSection->state)
<section class="bg-light-white wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-5 col-md-8 col-sm-10 md-margin-5-half-rem-bottom">
                @foreach ($statisticsn as $item)
                <div class="padding-3-rem-all bg-white box-shadow-small box-shadow-extra-large-hover border-radius-6px margin-3-rem-bottom text-center">
                    <h4 class="text-dark-orange alt-font font-weight-500 letter-spacing-minus-1px mb-sm-0 d-inline-block align-middle w-110px text-sm-left xs-w-100 counter" data-speed="1000" data-to="{{$item->column_1}}"></h4>
                    <div class="d-inline-block align-middle text-sm-left border-left border-color-medium-gray padding-35px-left xs-no-border-left xs-no-padding-left">
                        <span class="alt-font text-extra-dark-gray font-weight-500 line-height-16px d-block">{{$item->column_2}}</span>                          
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 col-lg-7 col-xl-6 offset-xl-1 text-center text-md-left">
                <div class="row">
                    <div class="col-12 col-md-9 offset-md-3" >
                        <h5 class="alt-font margin-3-rem-bottom font-weight-500 text-extra-dark-gray"><span class="text-decoration-line-bottom-thick font-weight-600" >{{$statisticSection->title}}</span></h5>
                    </div>
                </div>
                <div class="row">
                    @foreach ($statistics as $item)
                        <div class="col-12 col-md-3 alt-font text-extra-dark-gray text-md-right padding-20px-right xs-margin-5px-bottom" style="padding: 0px !important">{{$item->column_1}}</div>
                        <div class="col-12 col-md-9 margin-2-half-rem-bottom">{{$item->column_2}}<div class="w-100 h-1px bg-extra-dark-gray margin-2-half-rem-top opacity-1"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container margin-8-rem-top md-margin-5-half-rem-top">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-sm-auto text-center sm-margin-10px-bottom">
                <span class="alt-font">Nuestras redes sociales</span>
            </div>
            <div class="col-12 col-sm-auto text-center">
                <div class="social-icon-style-06">
                    <ul class="small-icon">
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>                                
                        <li><a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="instagram" href="http://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="linkedin" href="http://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection