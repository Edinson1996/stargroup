    <aside class="col-12 col-xl-3 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">
    <div
        class="border-all border-color-medium-gray border-radius-4px padding-40px-all text-center margin-5-rem-bottom xs-margin-35px-bottom">
        <a href="about-me.html"><img src="images/avtar29.jpg" alt=""
                class="rounded-circle margin-5px-bottom w-100px d-block mx-auto" /></a>
        <a href="blog-grid.html"
            class="text-extra-dark-gray alt-font font-weight-500 margin-20px-top d-inline-block text-medium">Preventiva</a>
        {{-- <span class="text-medium d-block line-height-18px margin-20px-bottom">Co-founder</span> --}}
        <p>Encuéntranos en Nuestras Redes Sociales</p>
        <div class="social-icon-style-02 text-center">
            <ul class="extra-small-icon">
                <li class="mx-0"><a class="facebook" href="http://facebook.com/" target="_blank"><i
                            class="fab fa-facebook-f"></i><span></span></a></li>
                <li class="mx-0"><a class="twitter" href="http://twitter.com/" target="_blank"><i
                            class="fab fa-twitter"></i><span></span></a></li>
                <li class="mx-0"><a class="instagram" href="http://instagram.com/" target="_blank"><i
                            class="fab fa-instagram"></i><span></span></a></li>
                <li class="mx-0"><a class="instagram" href="http://linkedin.com/" target="_blank"><i
                                class="fab fa-linkedin"></i><span></span></a></li>

            </ul>
        </div>
    </div>
    <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
        <span
            class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Categorías</span>
        <ul class="list-style-07 list-unstyled">
                @foreach ($categories as $cat)
                <li>
                    <a class="{{request()->get('category')==$cat->id ? 'text-primary' : ''}}" href="/blog?category={{$cat->id}}">{{$cat->name}}
                    </a>
                    <span class="item-qty">{{count($cat->posts)}}</span>
                </li>
                @endforeach
        </ul>
    </div>
    {{-- <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Recent posts</span>
                <ul class="latest-post-sidebar position-relative">
                    <!-- start blog item -->
                    <li class="media wow animate__fadeIn" data-wow-delay="0.2s">
                        <figure>
                            <a href="blog-post-layout-01.html"><img class="border-radius-3px" src="images/blog-img68.jpg" alt=""></a>
                        </figure>
                        <div class="media-body">
                            <a href="blog-post-layout-01.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Fashion is anything</a>
                            <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="media wow animate__fadeIn" data-wow-delay="0.4s">
                        <figure>
                            <a href="blog-post-layout-02.html"><img class="border-radius-3px" src="images/blog-img110.jpg" alt=""></a>
                        </figure>
                        <div class="media-body">
                            <a href="blog-post-layout-02.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Design transcends </a>
                            <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="media wow animate__fadeIn" data-wow-delay="0.6s">
                        <figure>
                            <a href="blog-post-layout-03.html"><img class="border-radius-3px" src="images/blog-img126.jpg" alt=""></a>
                        </figure>
                        <div class="media-body">
                            <a href="blog-post-layout-03.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Never give in except</a>
                            <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                        </div>
                    </li>
                    <!-- end blog item -->
                </ul>
            </div> --}}
    <div class="wow animate__fadeIn">
        {{-- <span
            class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Instagram</span>
        <ul class="instafeed-grid instafeed-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-3col sm-grid-3col xs-grid-3col gutter-small"
            data-total="6">
            <li class="grid-item">
                <figure><a href="#" data-href="" target="_blank"><img src="#" data-src="" class="insta-image"
                            alt="" /><span class="insta-counts"><i class="fab fa-instagram"></i></span></a>
                </figure>
            </li>
        </ul> --}}
    </div>
</aside>
