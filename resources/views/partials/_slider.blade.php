<section class="p-0 home-furniture-shop">
    <article class="content">
        <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper fullscreen-container"
             data-alias="mask-showcase" data-source="gallery"
             style="background:#ffffff;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="rev_slider_34_1" class="rev_slider fullscreenbanner tiny_bullet_slider"
                 style="display:none;" data-version="5.4.1">
                <ul>    <!-- SLIDE  -->
                    @foreach($sliders as $index => $slider)
                        <li data-index="rs-{{($loop->index+73).''}}" data-transition="fade" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off"
                            data-easein="default" data-easeout="default" data-masterspeed="300"
                            data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"
                            data-rotate="0" data-saveperformance="off" data-title="Slide"
                            data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('slider/'.$slider->image)}}" alt=""
                                 data-bgposition="center center" data-bgfit="cover"
                                 data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                                 data-no-retina>
                            <!-- LAYERS -->
                            {{-- <div
                                class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-10"
                                data-x="['center','center','center','center']"
                                data-hoffset="['980','800','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['200','220','900','850']"
                                data-width="1500"
                                data-height="1500"
                                data-whitespace="nowrap"
                                data-type="shape"
                                data-responsive_offset="on"
                                data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;background:linear-gradient(180deg, #FF591F 100%, #0078bf 0%);border-radius:100%;">
                                <div class="rs-looped rs-wave" data-speed="10" data-angle="0"
                                     data-radius="10px" data-origin="50% 50%"></div>
                            </div> --}}

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption alt-font text-extra-dark"
                                 data-x="['left','left','center','center']"
                                 data-hoffset="['0','100','0','0']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['-40','-10','-290','-220']"
                                 data-fontsize="['70','70','70','50']"
                                 data-lineheight="['73','70','70','50']"
                                 data-width="auto"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive="on"
                                 data-responsive_offset="on"
                                 data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['left','left','center','center']"
                                 data-paddingtop="[20,20,20,20]"
                                 data-paddingright="[20,20,20,20]"
                                 data-paddingbottom="[30,30,30,30]"
                                 data-paddingleft="[20,20,20,20]"
                                 style="z-index: 8;letter-spacing: -3px; margin-top: 15px; color: #000000 !important;">
                            @php($title=explode ( " " , $slider->title))
                                <strong>
                                </strong>
                                <strong class="d-none d-lg-block">
                                    @foreach ($title as $t)
                                        {{$t}}
                                        @if ($loop->index==3 || $loop->index==7)
                                            <br>
                                        @endif
                                    @endforeach
                                </strong>
                                <strong class="d-lg-none">
                                    @foreach ($title as $t)
                                        {{$t}}
                                        @if ($loop->index==1 || $loop->index==3)
                                            <br>
                                        @endif
                                    @endforeach
                                </strong>
                            </div>

                            <!-- LAYER NR. 1 -->
                            <a class="tp-caption tp-resizeme btn btn-medium btn-orange btn-box-shadow lg-margin-15px-bottom md-no-margin-bottom md-margin-auto-lr"
                               href="{{$slider->button_url}}"
                               data-x="['left','left','center','center']"
                               data-hoffset="['24','122','0','0']"
                               data-y="['middle','middle','middle','middle']"
                               data-voffset="['115','120','-160','-110']"
                               data-width="none"
                               data-height="none"
                               data-fontsize="['14','14','14','13']"
                               data-whitespace="nowrap"
                               data-type="button"
                               data-responsive_offset="on"
                               data-responsive="on"
                               data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               data-textAlign="['inherit','inherit','inherit','inherit']"
                               data-paddingtop="[11,10,10,10]"
                               data-paddingright="[27,25,25,22]"
                               data-paddingbottom="[11,10,10,10]"
                               data-paddingleft="[27,25,25,22]"
                               style="z-index: 6;box-shadow: 0 0 15px rgba(0,0,0,.1);">{{$slider->button_title}}</a>

                            {{-- <div
                                class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-10"
                                data-x="['center','center','center','center']"
                                data-hoffset="['300','190','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','20','150','150']"
                                data-width="['670','600','540','430']"
                                data-height="['670','600','540','430']"
                                data-whitespace="nowrap"
                                data-type="shape"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;background: rgba(173,157,148,0.1);border-radius:100%;">
                                <div class="rs-looped rs-wave" data-speed="10" data-angle="0"
                                     data-radius="10px" data-origin="50% 50%"></div>
                            </div> --}}

                            <!-- LAYER NR. 2 -->
                            {{-- <div class="tp-caption tp-resizeme rs-parallaxlevel-2"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['300','200','0','0']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['40','20','180','150']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="image"
                                 data-responsive_offset="on"
                                 data-frames='[{"delay":1800,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 6;"><img
                                    src="/slider/seguridad.png" alt=""
                                    data-ww="['529px','420px','420px','290px']"
                                    data-hh="['auto','auto','auto','auto']" width="529" height="594"
                                    data-no-retina></div> --}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </article>
</section>
