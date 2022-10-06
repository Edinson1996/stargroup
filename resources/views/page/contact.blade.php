@extends('layouts.page')
@section('content')
{{-- <section class="bg-gradient-light-orange-light-pink">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-end extra-small-screen align-items-end">
            <div class="w-100 w-md-50 page-title-extra-small">
                <h1 class="alt-font text-extra-dark-gray position-relative padding-90px-left padding-15px-right sm-padding-55px-left mb-md-0 sm-margin-20px-bottom"><span class="page-title-separator-line bg-black w-70px sm-w-40px"></span>{{$banner->header}}</h1>
            </div>
            <div class="w-100 w-md-50">
                <h4 class="alt-font font-weight-500 text-extra-dark-gray mb-0">{{$banner->title}}</h4>
            </div>
        </div>
    </div>
</section> --}}
<!-- start page title -->
<section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5"
    style="background-image:url({{'/banners/'.$banner->file}});">
    <div class="container">
        <div class="row align-items-stretch justify-content-center extra-small-screen">
            <div
                class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h1 class="alt-font text-dark margin-15px-bottom d-inline-block">{{$banner->header}}</h1>
                <h2
                    class="text-dark alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                    {{$banner->title}}</h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<section class=" wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-end justify-content-center">
            <div class="col-12 col-lg-5 col-md-8 md-margin-50px-bottom">
                <div class="feature-box feature-box-left-icon-middle padding-4-rem-all bg-light-gray overflow-hidden background-position-top background-no-repeat lg-padding-3-rem-lr md-padding-5-rem-all xs-padding-3-half-rem-all" style="background-image: url('/assets/images/quotes-01.png');" >
                    <div class="feature-box-icon margin-25px-right xs-margin-15px-right">
                        <img class="border-radius-100 w-80px xs-w-50px" src="/assets/images/user-01.jpg" alt="">
                    </div>
                    <div class="feature-box-content">
                        <div class="text-large text-extra-dark-gray alt-font font-weight-500 w-90">¿Más cómodo hablando con nosotros?</div>
                    </div>
                    <p class="margin-30px-top margin-15px-bottom w-80 lg-w-100" style="display: flex;flex-direction: column;align-content: stretch;justify-content: center;align-items: center !important;flex-wrap: wrap;">Programe una llamada de presentación con nosotros. Nuestro bot responderá a las preguntas más frecuentes.</p>
                    {{-- <a href="tel:+51955419261" class="text-small text-extra-dark-gray font-weight-500 text-decoration-line-bottom text-uppercase">Llámanos</a> --}}
                    <a href="https://api.whatsapp.com/send?phone=51955419261&text=Hola,%20vengo%20desde%20la%20web%20Preventiva" target="_blanck" class="text-small text-extra-dark-gray font-weight-500 text-decoration-line-bottom">Contáctanos por WhatsApp</a>
                    <div class="container margin-3-rem-top md-margin-5-half-rem-top">
                        <div class="row" style="display: flex;flex-direction: column;align-content: stretch;justify-content: center;align-items: center !important;flex-wrap: wrap;">
                            <div class="col-12 col-sm-auto text-center sm-margin-10px-bottom">
                                <span class="alt-font">Nuestras redes sociales</span>
                            </div>
                            <div class="col-12 col-sm-auto text-center">
                                <div class="social-icon-style-06">
                                    <ul class="small-icon">
                                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="instagram" href="http://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a class="instagram" href="http://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 offset-lg-1 col-md-8">
                <h4 class="alt-font text-black font-weight-600">Ponte en contacto con nosotros</h4>
                <!--
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mb-3">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                -->
                <form action="{{route('messages.store')}}" method="post" class="alt-font text-extra-dark-gray">
                    @csrf
                    <input required class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px" type="text" name="name" placeholder="Tu Nombre" />
                    <input required class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px" type="email" name="email" placeholder="Tu Correo Electrónico" />
                    <input required class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px" type="number" name="phone" placeholder="Número de Teléfono" />
                    <textarea required class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-35px-bottom border-radius-0px" name="message" rows="5" placeholder="En qué podemos ayudarte?"></textarea>
                    <button class="btn btn-medium btn-dark-gray mb-0" type="submit">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="half-section">
    <div class="container">
        <div class="row justify-content-center">
            <!-- start feature box item-->
            <div class="col-12 col-sm-auto sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="d-flex justify-content-center align-items-center padding-15px-lr h-100">
                    <i class="fas fa-phone-alt align-middle icon-extra-small text-red margin-10px-right"></i>
                    <span class="text-extra-dark-gray alt-font text-medium">+51 955 419 261 | +51 943 503 387</span>
                </div>
            </div>
            <!-- end feature box item-->
            <!-- start feature box item-->
            <div class="col-12 col-sm-auto sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="d-flex justify-content-center align-items-center padding-15px-lr h-100">
                    <i class="feather icon-feather-mail align-middle icon-extra-small text-red margin-10px-right"></i>
                    <a href="mailto:informes@preventiva.com" class="text-extra-dark-gray alt-font text-medium">informes@preventiva.com</a>
                </div>
            </div>
            <!-- end feature box item-->
            <!-- start feature box item-->
            <div class="col-12 col-sm-auto wow animate__fadeIn" data-wow-delay="0.6s">
                <div class="d-flex justify-content-center align-items-center padding-15px-lr h-100">
                    <i class="feather icon-feather-globe align-middle icon-extra-small text-red margin-10px-right"></i>
                    <a href="http://www.preventiva.com" class="text-extra-dark-gray alt-font text-medium">www.preventiva.com</a>
                </div>
            </div>
            <!-- end feature box item-->
        </div>
    </div>

</section>
<!--
<section class="no-padding-tb wow animate__fadeIn" style="margin-bottom: 100px !important;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="map-style-3 h-500px xs-h-300px">
                    <iframe class="w-100 h-100 filter-grayscale-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843821917424!2d144.956054!3d-37.817127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1427947693651"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
-->
@endsection
