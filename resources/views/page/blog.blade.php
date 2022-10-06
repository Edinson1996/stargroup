@extends('layouts.page')
@section('content')
<!-- start page title -->
<section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5"
    style="background-image:url({{'/banners/'.$banner->file}}); background-position: right!important;">
    <div class="container">
        <div class="row align-items-stretch justify-content-center extra-small-screen">
            <div
                class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h1 class="alt-font text-dark margin-15px-bottom d-inline-block">{{$banner->header}}</h1>
                <h2 class="text-dark alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                    {{$banner->title}}</h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="bg-light-gray pt-0 padding-eleven-lr xl-padding-two-lr xs-no-padding-lr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-9 col-lg-8 col-md-5 blog-content">
                <ul wire:loading.class="grid-loading"
                    class="blog-grid blog-wrapper grid grid-3col xl-grid-3col lg-grid-2col md-grid-1col sm-grid-1col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    @forelse ($posts as $post)
                    <!-- start blog item -->
                    <li class="grid-item" data-wow-delay="{{$loop->index/10}}s">
                        <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                            <div class="blog-post-image bg-medium-slate-blue">
                                <a href="{{ route('blog-single', $post) }}" title=""><img
                                        src="{{asset('posts/'.$post->image)}}" alt=""></a>
                                <a class="blog-category alt-font">{{$post->category ? $post->category->name : ''}}</a>
                            </div>
                            <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                <a href="{{ route('blog-single', $post) }}"
                                    class="alt-font text-small d-inline-block margin-10px-bottom">{{$post->created_at->format('d/m/Y')}}</a>
                                <a href="{{ route('blog-single', $post) }}"
                                    class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray margin-15px-bottom d-block">{{$post->title}}</a>
                                <p>{{Str::limit($post->description, 75)}}</p>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    @empty
                            <h6 class="mb-5 text-center">Sin resultados para la búsqueda...</h6>
                    @endforelse
                </ul>
                <!-- start pagination -->
                <div
                    class="col-12 d-flex justify-content-center margin-7-half-rem-top md-margin-5-rem-top wow animate__fadeIn">
                    {{$posts->links()}}
                </div>
                <!-- end pagination -->
            </div>
            <!-- start sidebar -->
            @include('page.partials._aside-blog')
            <!-- end sidebar -->
        </div>
    </div>
</section>    
<!-- end section -->
@endsection