@extends('layouts.page')
@push('css')
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">
@endpush
@section('content')
    <!-- SLIDER EXAMPLE -->
    @include('partials._slider')
    <!-- end revolution slider -->

    <section class="overflow-hidden padding-100px-top">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-md-6 text-center margin-5-half-rem-bottom md-margin-3-rem-bottom wow animate__fadeIn">
                    <span
                        class="alt-font font-weight-500 text-dark-orange text-uppercase letter-spacing-1px d-block margin-5px-bottom">{{ $serviceSection->header }}</span>
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0 letter-spacing-minus-1px">
                        {{ $serviceSection->title }}</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
                @foreach ($services as $service)
                    <!-- start fancy text box item -->
                    <div class="col col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div
                            class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div
                                class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                                <div class="feature-box-icon">
                                    <i
                                        class="fas fa-clipboard-list d-block icon-medium text-dark-orange margin-25px-bottom"></i>

                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">{{ $service->title }}</span>
                                    <a href="{{ route('services') }}" class="alt-font text-decoration-underline">Ver
                                        más&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                                <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                                    <p>{{ $service->description }}</p>
                                </div>
                            </div>
                            <div class="feature-box-overlay"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                @endforeach
            </div>
        </div>
    </section>

    <!-- Productos -->
    @if (count($products) > 0)
        {{-- <section class="pb-0 padding-100px-top  md-padding-75px-tb sm-padding-50px-tb wow animate__fadeIn"
            data-wow-delay="0.2s" style="padding-bottom: 100px !important;">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 align-items-center">
                    <div class="col text-center text-sm-left xs-margin-10px-bottom">
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">Productos en Oferta</h4>
                    </div>
                    <div class="col text-center text-sm-right">
                        <a href="{{ route('catalog') }}"
                            class="btn btn-link btn-extra-large text-extra-dark-gray md-margin-10px-bottom">Explora nuestros
                            productos</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12 margin-8-rem-top portfolio-colorful md-margin-5-half-rem-top">
                        <div class="swiper-container swiper-auto-slide"
                            data-slider-options='{"slidesPerView": "auto",
                        "": { "delay": 3000, "disableOnInteraction": false }, "spaceBetween": 5, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                @foreach ($products as $product)
                                    <!-- start item -->
                                    <div class="swiper-slide">
                                        <a href="{{ route('blog') }}">
                                            <div class="portfolio-box">
                                                <div class="portfolio-image">
                                                    <img src="/products/{{ $product->image }}" alt="">
                                                    <div
                                                        class="portfolio-hover bg-transparent-white justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
                                                        <div class="text-left">
                                                            <h6
                                                                class="font-weight-600 alt-font text-extra-dark-gray text-uppercase mb-0 move-bottom-top-self">
                                                                <span>{{ $product->name }}</span>
                                                            </h6>
                                                            <div
                                                                class="alt-font text-small text-uppercase margin-5px-bottom text-medium-gray move-top-bottom-self">
                                                                <span>S/ {{ number_format($product->price, 2) }}</span>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
                                                                class="ti-arrow-top-right icon-small text-light-brownish-orange"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- end item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}



        <section class="overflow-hidden padding-100px-top">
            <div class="container">
                <div class="container" style="margin-bottom: 50px;">
                    <div class="row row-cols-1 row-cols-sm-2 align-items-center">
                        <div class="col text-center text-sm-left xs-margin-10px-bottom">
                            <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">Productos en Oferta</h4>
                        </div>
                        <div class="col text-center text-sm-right">
                            <a href="{{ route('catalog') }}"
                                class="btn btn-link btn-extra-large text-extra-dark-gray md-margin-10px-bottom">Explora nuestros
                                productos</a>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
                    @foreach ($products as $product)
                        <!-- start item -->
                        <div class="swiper-slide" style="margin-bottom: 30px;">
                            <a href="{{ route('blog') }}">
                                <div class="portfolio-box">
                                    <div class="portfolio-image">
                                        <img src="/products/{{ $product->image }}" alt="">
                                        <div
                                            class="portfolio-hover bg-transparent-white justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
                                            <div class="text-left">
                                                <h6
                                                    class="font-weight-600 alt-font text-extra-dark-gray text-uppercase mb-0 move-bottom-top-self">
                                                    <span>{{ $product->name }}</span>
                                                </h6>
                                                <div
                                                    class="alt-font text-small text-uppercase margin-5px-bottom text-medium-gray move-top-bottom-self">
                                                    <span>S/ {{ number_format($product->price, 2) }}</span>
                                                </div>
                                            </div>
                                            <span
                                                class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
                                                    class="ti-arrow-top-right icon-small text-light-brownish-orange"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- end item -->
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;"
        style="padding-bottom: 2rem; padding-bottom: 2rem;">
        <div class="container" style="margin-bottom: 3rem">
            <div class="col-12 col-xl-7 col-lg-8 col-md-7 col-sm-10 text-center text-md-left sm-margin-30px-bottom">
                <h5 class="alt-font text-extra-dark-gray font-weight-500 mb-0"><strong
                        class="text-fast-orange text-decoration-underline">Nuestros Clientes</strong></h5>
            </div>
        </div>
        <div class="container autoplay">
            @foreach ($clients as $client)
                <div class="col text-center client-logo-style-01 margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn"
                    style="visibility: visible; animation-name: fadeIn;">
                    <div class="client-box padding-15px-all border border-color-dark-gray" style="text-align: center">
                        <a href="#"
                            style="justify-content: space-between;display: flex;flex-direction: column;align-content: space-between;align-items: center;">
                            <img class="client-box-image" src="/images/{{ $client->name }}" style="text-align: center"
                                alt="" data-no-retina="">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Google maps -->
    <section class="padding-8-half-rem-lr xl-padding-3-rem-lr lg-no-padding-lr">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center ">
                    <h6 class="alt-font text-extra-dark-gray font-weight-500">Ubícanos</h6>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <iframe class="w-100 h-500px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843821917424!2d144.956054!3d-37.817127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1427947693651"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <!-- revolution js files -->
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- slider revolution 5.0 extensions (load extensions only on local file systems ! the following part can be removed on server for on demand loading) -->
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}">
    </script>

    <script type="text/javascript">
        var revapi263,
            tpj;
        (function() {
            if (!/loaded|interactive|complete/.test(document.readyState))
                document.addEventListener("DOMContentLoaded", onLoad);
            else
                onLoad();

            function onLoad() {
                if (tpj === undefined) {
                    tpj = jQuery;
                    if ("off" == "on")
                        tpj.noConflict();
                }
                if (tpj("#rev_slider_34_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_34_1");
                } else {
                    var revOffset = tpj(window).width() <= 991 ? '73px' : '';
                    revapi263 = tpj("#rev_slider_34_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "revolution/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                touchOnDesktop: "off",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: false,
                                style: "hermes",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 40,
                                space: 12,
                                tmp: ''
                            },
                            arrows: {

                                enable: true,
                                style: 'uranus',
                                tmp: '',
                                rtl: false,
                                hide_onleave: false,
                                hide_onmobile: true,
                                hide_under: 767,
                                hide_over: 9999,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                left: {
                                    container: 'slider',
                                    h_align: 'left',
                                    v_align: 'center',
                                    h_offset: 64,
                                    v_offset: 0
                                },
                                right: {
                                    container: 'slider',
                                    h_align: 'right',
                                    v_align: 'center',
                                    h_offset: 64,
                                    v_offset: 0
                                }

                            }
                        },
                        responsiveLevels: [1240, 1025, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [868, 768, 960, 720],
                        lazyType: "none",
                        shadow: 0,
                        spinner: "spinner0",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: 1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: revOffset,
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }; /* END OF revapi call */
            }; /* END OF ON LOAD FUNCTION */
        }()); /* END OF WRAPPING FUNCTION */
    </script>
    {{-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/js/slick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script>
        $('.autoplay').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 700,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 700
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 700
                    }
                }
            ]
        });
    </script>
@endpush
