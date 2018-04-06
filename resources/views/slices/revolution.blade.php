@php

$slices = $document->data->page_content;


@endphp


        <!-- banner start -->
<!-- ================ -->
<div class="banner clearfix">

    <!-- slideshow start -->
    <!-- ================ -->
    <div class="slideshow">

        <!-- slider revolution start -->
        <!-- ================ -->
        <div class="slider-revolution-5-container">
            <div id="slider-banner-fullwidth" class="slider-banner-fullwidth rev_slider" data-version="5.0">
                <ul class="slides">


                    @foreach($slice->items as $item)


                            <!-- slide 1 start -->
                    <!-- ================ -->
                    <li data-transition="random" data-slotamount="default" data-masterspeed="default" data-title="Next Generation Template">


                        <!-- main image -->
                        <img src="<?=$item->{'slider-img'}->url ?>" alt="slidebg1" data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                        <!-- Transparent Background -->
                        <div class="tp-caption dark-translucent-bg"
                             data-x="center"
                             data-y="center"
                             data-start="0"
                             data-transform_idle="o:1;"
                             data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                             data-transform_out="o:0;s:600;"
                             data-width="5000"
                             data-height="5000">
                        </div>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_white"
                             data-x="left"
                             data-y="110"
                             data-start="500"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">{{RichText::asText($item->slide_title)}}
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption large_white tp-resizeme"
                             data-x="left"
                             data-y="170"
                             data-start="650"
                             data-transform_idle="o:1;"
                             data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                            <div class="separator-2 light"></div>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption medium_white"
                             data-x="left"
                             data-y="180"
                             data-start="650"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];sX:1;sY:1;s:900;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">{{RichText::asText($item->slide_text)}}
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption small_white"
                             data-x="left"
                             data-y="260"
                             data-start="900"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">@if(RichText::asText($item->text_more) != '')<a href="{{$item->more->slug}}"
                                                                                                                                      class="btn radius-50 btn-dark btn-animated">{{RichText::asText($item->text_more)}}
                                <i class="fa fa-arrow-right"></i></a> <span
                                    class="pl-1 pr-1">oder</span>@endif <a href="{{$slice->primary->contact_us->url}}" class="btn radius-50 btn-default btn-animated margin-clear">Kontakt <i
                                        class="fa fa-envelope"></i></a>
                        </div>

                    </li>
                    <!-- slide 1 end -->


                    @endforeach

                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!-- slider revolution end -->

    </div>
    <!-- slideshow end -->

</div>
<!-- banner end -->
