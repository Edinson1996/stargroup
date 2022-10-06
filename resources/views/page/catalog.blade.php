@extends('layouts.page')
@push('css')

@endpush
@section('content')
<!-- start section productos -->
<section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5"
    style="background-image:url('/banners/blog.jpg'); background-position: right!important;">
    <div class="container">
        <div class="row align-items-stretch justify-content-center extra-small-screen">
            <div
                class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h1 class="alt-font text-dark margin-15px-bottom d-inline-block">Ventas</h1>
                <h2 class="text-dark alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                    Catálogo </h2>
            </div>
        </div>
    </div>
</section>
<section
    class="padding-8-half-rem-lr border-top border-width-1px border-color-medium-gray xl-padding-3-rem-lr md-no-padding-lr">
    @if (count($sales)>0)
    <div class="container">
        <div class="row justify-content-center">
            <div
                class="col-12 col-md-6 text-center margin-5-half-rem-bottom md-margin-3-rem-bottom wow animate__fadeIn">
                <span
                    class="alt-font font-weight-500 text-dark-orange text-uppercase letter-spacing-1px d-block margin-5px-bottom">Aprovecha
                    que son por Tiempo Limitado</span>
                <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0 letter-spacing-minus-1px">Nuestras Ofertas
                </h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 filter-content">
                <ul
                    class="product-listing shop-wrapper grid grid-loading grid-5col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>

                    @foreach ($sales as $product)
                        @include('page.partials._product')
                    @endforeach
                </ul>
            </div>
            {{-- <div class="col-12 d-flex justify-content-center margin-3-rem-top wow animate__fadeIn" data-wow-delay="0.2s">
                {{$products->links()}}
        </div> --}}
    </div>
    </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div
                class="col-12 col-md-6 text-center margin-5-half-rem-bottom md-margin-3-rem-bottom wow animate__fadeIn">
                {{-- <span
                    class="alt-font font-weight-500 text-dark-orange text-uppercase letter-spacing-1px d-block margin-5px-bottom">Catálogo</span>
                <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0 letter-spacing-minus-1px">Nuestros
                    Productos</h4> --}}
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0 letter-spacing-minus-1px">Catálogo</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 filter-content">
                <ul
                    class="product-listing shop-wrapper grid grid-loading grid-5col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>

                    @foreach ($products as $product)
                        @include('page.partials._product')
                    @endforeach

                </ul>
            </div>
            <div class="col-12 d-flex justify-content-center margin-3-rem-top wow animate__fadeIn"
                data-wow-delay="0.2s">
                {{-- <a href="shop-left-sidebar.html" class="btn btn-medium btn-fancy btn-transparent-black">More collection</a> --}}
                {{$products->links()}}
            </div>
        </div>
    </div>

</section>
@endsection
@push('scripts')

@endpush