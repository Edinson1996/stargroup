<section class="padding-8-half-rem-lr xl-padding-3-rem-lr lg-no-padding-lr" style="padding-bottom: 100px !important;"> 
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 text-center margin-5-half-rem-bottom md-margin-3-rem-bottom wow animate__fadeIn">
            <span
                class="alt-font font-weight-500 text-dark-orange text-uppercase letter-spacing-1px d-block margin-5px-bottom">{{ mb_strtoupper($section->header) }}</span>
            <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0 letter-spacing-minus-1px">
                {{ $section->title ?: '---' }}</h4>
            <p>{{$section->description ?: '---'}}</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 justify-content-center margin-3-rem-tb md-no-margin-tb">
            @foreach($strategies as $index => $strategy)
            <!-- start category item -->
            <div class="col col-md-6 col-sm-10 shop-category-style-02 lg-margin-4-rem-bottom sm-margin-6-rem-bottom">
                <div class="shop-product align-items-center d-flex padding-30px-lr xs-no-padding-lr">
                    <div
                        class="shop-product-image text-center d-flex justify-content-center align-items-center wow animate__zoomIn">
                        <img src="{{asset('strategies/'.$strategy->image)}}" alt="" />
                    </div>
                    <div class="shop-product-overlay position-relative wow animate__fadeIn" data-wow-delay="0.2s">
                        <span
                            class="alt-font font-weight-500 margin-10px-bottom d-inline-block text-uppercase letter-spacing-1px text-dark-orange text-dark-orange-hover xs-margin-5px-bottom">
                            {{mb_strtoupper($strategy->header ?: '---')}}
                        </span>
                        <h4
                            class="alt-font text-extra-dark-gray mb-0 letter-spacing-minus-1px line-height-40px sm-line-height-30px">
                            {{ $strategy->title ? mb_strtoupper($strategy->title) : '---' }}</h4>
                    </div>
                </div>
            </div>
            <!-- end category item -->
            @endforeach
        </div>
    </div>
</section>