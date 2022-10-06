<!doctype html>
<html class="no-js" lang="es">
<head>
        <title>Star Group</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="TatoJet">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="">
        @yield('head')
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{asset('assets/images/faviconStarGroup.png')}}">
        <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/apple-touch-icon-114x114.png')}}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-icons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme-vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.scss')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}" />        
        
        
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.convform.css')}}" />
        <script type="text/javascript" src="{{ asset('assets/js/jquery-3.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.convform.js') }}"></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script> --}}
        
        @stack('css')
    </head>
    <body data-mobile-nav-style="classic">
        <!-- ChatBot -->
        
        <!-- ChatBot end -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg navbar-boxed navbar-light bg-white header-light fixed-top">
                <div class="container-fluid nav-header-container">
                    <div class="col-auto col-sm-6 col-lg-2 mr-auto pl-lg-0">
                        <a class="navbar-brand" href="{{ route('index')}}">
                            <img src="{{ asset('assets/images/logo-preventiva.png') }}" width="150px" alt="" class="default-logo">
                            <img src="{{ asset('assets/images/logo-preventiva.png') }}"  alt="" class="alt-logo">
                            <img src="{{ asset('assets/images/logo-preventiva.png') }}"  class="mobile-logo" alt="">
                        </a>
                    </div>
                    <div class="col-auto menu-order px-lg-0">
                        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{ route('index')}}" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{ route('about')}}" class="nav-link">Nosotros</a>                                    
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{route('services')}}" class="nav-link">Servicios</a>                                    
                                </li>
                                <!--
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{ route('catalog')}}" class="nav-link">Catálogo</a>                                    
                                </li>
                                 -->
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>                                    
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{ route('contact') }}" class="nav-link">Contáctanos</a>                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-right pr-0 font-size-0">
                        
                    </div>
                </div>
            </nav>
        </header>

        <div class="chat_icon" style="z-index: 1001 !important;">
            {{-- <i class="fa fa-comments" aria-hidden="true"></i> --}}
            <a href="https://api.whatsapp.com/send?phone=51955419261&text=Hola,%20vengo%20desde%20la%20web%20Preventiva" target="_blanck">
                <img src="{{ asset('assets/images/whatsapp.png') }}" alt="pepe" style="max-width: 7rem !important;">
            </a>
            
        </div>

        <div class="chat_box">
            <div class="my-conv-form-wrapper">
                <form action="#" method="GET" class="hidden" id="botForm">

            <select data-conv-question="Hola me llamo Pepe, En qué puedo ayudarte?" id="category" name="category">
                <option value="Security">Seguridad</option>
                <option value="Capacitations">Capacitaciones</option>
            </select>

            <div data-conv-fork="category">
                <div data-conv-case="Security">
                    <select data-conv-question="En cuál de estas opciones puedo ayudarte?" id="category2" name="category2">
                        <option value="security1">Seguridad 1</option>
                        <option value="security2">Seguridad 2</option>
                    </select>
                </div>
                <div data-conv-case="Capacitations" data-conv-fork="first-question2">                
                <input type="text" id="capacitation" name="capacitation" data-conv-question="Porfavor escríbenos por cual capacitación estás interesado"> 
                </div>
            </div>
            <div data-conv-fork="category2">
                <div data-conv-case="security1">
                <input type="text" id="companyName" name="companyName" data-conv-question="Porfavor ingresa el nombre de tu empresa"> 
                </div>
                <div data-conv-case="security2" data-conv-fork="first-question2">                
                <input type="text" id="domainName" name="domainName" data-conv-question="Porfavor ingresa el nombre de tu dominio"> 
                </div>
            </div>

            <input type="text" id="name" name="name" data-conv-question="Porfavor ingresa tu nombre">

            <input type="text" data-conv-question="Mucho gusto {name}, <br> Es un placer para mí conocerte" data-no-answer="true">

            <input data-conv-question="Ingresa tu email" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" id="email" name="email" required placeholder="Cuál es tu email?">

            <select onchange="sendBot()" data-conv-question="Porfavor confirma que los datos fueros correctos" name="confirm">
                <option value="Security1">Confirmar</option>
            </select>

            </form>
            </div>
        </div>
        
        @yield('content')

        <footer class="footer-furniture-shop footer-dark bg-dark-footer line-height-26px padding-70px-tb xs-padding-50px-tb">
            <div class="container"> 
                <div class="row align-items-center">
                    <div class="col-12 col-xl-3 col-md-4 text-center text-md-left sm-margin-20px-bottom">
                        <a href="{{ route('index') }}" class="footer-logo"><img src="/assets/images/logo-preventiva-blanco.png" data-at2x="/assets/images/logo-preventiva-blanco.png" alt=""></a>
                    </div>
                    <div class="col-12 col-xl-6 col-md-4 text-center last-paragraph-no-margin sm-margin-20px-bottom">
                        <p class="alt-font text-uppercase text-medium" style="color: white !important">&copy; 2021 Todos los derechos reservados. </p>
                    </div>
                    <div class="col-12 col-xl-3 col-md-4 text-center text-md-right">
                        <div class="social-icon-style-12">
                            <ul class="extra-small-icon light">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="dribbble" href="https://api.whatsapp.com/send?phone=51955419261&text=Hola,%20vengo%20referido%20desde%20su%20P%C3%A1gina%20Web" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="instagram" href="http://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="facebook" href="http://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a></li>                                
                            </ul>
                        </div>
                        
                        
                    </div>
                    @if ($book)
                        <div class="col-12 col-xl-12 col-md-12 text-center text-md-right text-sm-center margin-10px-top">
                            <a class="light" href="{{ asset('/book/book.pdf') }}" target="_blank" style="color: white !important;"><i class="fas fa-book-open"></i>&nbsp;Libro de Reclamaciones</a>
                        </div>
                    @endif
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        
        <script type="text/javascript" src="{{ asset('assets/js/theme-vendors.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
        @stack('scripts')
    </body>
</html>
