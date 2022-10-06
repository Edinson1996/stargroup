<li class="grid-item wow animate__fadeIn" data-wow-delay="{{($loop->index)/20}}s">
    <div class="product-box margin-45px-bottom lg-margin-25px-bottom xs-no-margin-bottom">
        <div class="product-image">
            <a href="#">
                <img src="{{ asset('products/'.$product->image) }}" alt="product-img" />
                <img class="hover-img" src="{{ asset('products/'.$product->image) }}" alt="" />
            </a>
            <div class="product-hover-details">
                <a href="https://api.whatsapp.com/send?phone=51955419261&text=Hola,%20Me%20interesa%20el producto:%20{{$product->name}}" target="_blank" class="alt-font text-white text-small font-weight-500 text-uppercase"><i
                        class="feather icon-feather-shopping-bag margin-10px-right"></i>Me interesa</a>
            </div>
        </div>
        <div class="product-footer text-center padding-2s5px-top xs-padding-10px-top">
            <a href="#"
                class="text-extra-dark-gray text-black-hover font-weight-500 d-inline-block">{{$product->name}}</a>
            <div class="product-price text-medium">S/{{number_format($product->price,2)}}</div>
        </div>
    </div>
</li>