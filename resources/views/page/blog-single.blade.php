@extends('layouts.page')
@section('head')
@section('head')
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$post->title}}" />
<meta property="og:description" content="{{$post->description}}" />
<meta property="og:image" content="{{asset('/posts/'.$post->image)}}" />
@endsection
@section('content')
<!-- start blog content section -->
<section class="blog-right-side-bar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                <div class="row">
                    <div class="col-12 blog-details-text last-paragraph-no-margin margin-6-rem-bottom">
                        <ul class="list-unstyled margin-2-rem-bottom">
                            <li class="d-inline-block align-middle margin-25px-right"><i
                                    class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i><a>{{$post->created_at->format('d/m/Y')}}</a>
                            </li>
                            <li class="d-inline-block align-middle margin-25px-right"><i
                                    class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a>{{$post->category->name}}</a></li>
                            {{-- <li class="d-inline-block align-middle"><i class="feather icon-feather-user text-fast-blue margin-10px-right"></i>By <a href="blog-grid.html">Shane doe</a></li> --}}
                        </ul>
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom">
                            {{$post->title}}</h5>
                        @if ($post->video)
                        <!-- start youtube video -->
                        <div class="blog-post-content margin-4-half-rem-bottom">
                            <div class="fit-videos">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/{{$post->video}}?autoplay=1;rel=0&amp;controls=1&amp;showinfo=0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- end youtube video -->
                        @endif
                        {{-- <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                            <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> --}}
                        <!-- dropcaps -->
                        <p class="wow animate__fadeIn">
                            {{-- <span class="alt-font first-letter first-letter-big text-fast-blue">M</span> --}}
                            {{$post->description}}</p>
                        <!-- end dropcaps -->
                        <img src="/posts/{{$post->image}}" alt=""
                            class="w-100 border-radius-6px margin-4-rem-bottom wow animate__fadeIn">

                                <p class="wow animate__fadeIn">
                            {!!$post->body!!}
                        </p>
                        @if ($post->idea)
                        <blockquote
                            class="alt-font border-width-4px border-color-fast-blue margin-60px-left pr-0 margin-5-half-rem-tb md-margin-40px-left sm-no-margin-left wow animate__fadeIn">
                            <p>{{$post->idea}}</p>
                            {{-- <footer class="text-medium text-fast-blue d-inline-block text-uppercase">John Wayne</footer> --}}
                        </blockquote>
                    @endif
                            <embed src="{{ asset('/storage/archivo/' . $post['archivo']) }}" type="application/pdf"width="100%" height="500px"/>




                        <!-- Your share button code -->
                       <!-- <div class="fb-share-button" data-size="large" data-href="{{url()->current()}}"
                            data-layout="button_count">
                        </div>-->
                    </div>
                   <!-- <div class="col-12 text-center elements-social social-icon-style-09 mx-auto">
                        <ul class="medium-icon">
                            <li class="wow animate__fadeIn" data-wow-delay="0.2s"><a class="facebook"
                                    href="https://www.facebook.com/" target="_blank"><i
                                        class="fab fa-facebook-f"></i><span></span></a></li>
                            <li class="wow animate__fadeIn" data-wow-delay="0.3s"><a class="twitter"
                                    href="http://www.twitter.com/" target="_blank"><i
                                        class="fab fa-twitter"></i><span></span></a></li>
                            <li class="wow animate__fadeIn" data-wow-delay="0.4s"><a class="instagram"
                                    href="http://www.instagram.com/" target="_blank"><i
                                        class="fab fa-instagram"></i><span></span></a></li>
                            <li class="wow animate__fadeIn" data-wow-delay="0.5s"><a class="linkedin"
                                    href="http://www.linkedin.com/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i><span></span></a></li>
                            <li class="wow animate__fadeIn" data-wow-delay="0.6s"><a class="behance"
                                    href="http://www.behance.com/" target="_blank"><i
                                        class="fab fa-behance"></i><span></span></a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <!-- start sidebar -->
            @include('page.partials._aside-blog')
            <!-- end sidebar -->
        </div>
    </div>
</section>
<!-- end blog content section -->
<!-- Disqus -->
{{-- <div id="disqus_thread" class="container"></div> --}}
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    var disqus_config = function () {
    //this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = 'blog-single' +{{$post->id}};// Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://preventiva-1.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<!-- end Disqus -->
<!-- start section -->
<section class="bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-md-6 text-center margin-5-rem-bottom wow animate__fadeIn">
                <span class="alt-font font-weight-500 text-uppercase d-inline-block">Te podría interesar:</span>
                <h5 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Post Relacionados
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 blog-content">
                <ul
                    class="blog-clean blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    @foreach ($relatedPosts as $post)
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn" data-wow-delay="{{$loop->index/10}}s">
                        <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                            <div class="blog-post-image bg-gradient-fast-blue-purple">
                                <a href="{{ route('blog-single', $post) }}"><img src="/posts/{{$post->image}}"
                                        alt="post-img">
                                    <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                        <i
                                            class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="post-details padding-30px-all xl-padding-25px-lr">
                                <a
                                    class="post-author text-medium text-uppercase">{{$post->created_at->format('d/m/Y')}}</a>
                                <a href="{{ route('blog-single', $post) }}"
                                    class="text-extra-dark-gray font-weight-500 alt-font d-block">{{$post->title}}</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@endsection
@push('scripts')
    <script id="dsq-count-scr" src="//preventiva-1.disqus.com/count.js" async></script>
@endpush
