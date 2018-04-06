@extends('layouts.site-default')

@section('content')




    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-lg-12">


                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title">


                        {{RichText::asText($post->title, $linkResolver) ? RichText::asText($post->title, $linkResolver) : 'Untitled'}}
                    </h1>
                    <!-- page-title end -->

                    <!-- blogpost start -->
                    <!-- ================ -->
                    <article class="blogpost full">

                        <div class="blogpost-content">
                            <?PHP
                            if (isset($post->post_image->url))
                            {

                            $mainView = $post->post_image;

                            $tabletView = $post->post_image->Tablet;
                            $mobileView = $post->post_image->Mobile;
                            $thumbView = $post->post_image->Thumb;

                            ?>


                            <div class="overlay-container">

                                <picture>
                                    <source media="(max-width: 400px)" , srcset="<?= $mobileView->url ?>"/>
                                    <source media="(max-width: 900px)" , srcset="<?= $tabletView->url ?>"/>
                                    <source srcset="<?= $mainView->url ?>"/>
                                    <image src="<?= $mainView->url ?>"/>
                                </picture>
                                <a class="overlay-link popup-img" href="{{$mainView->url}}"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <?PHP
                            }
                            ?>
                            {!! RichText::asText($post->{'title-2'}) ? '<h3 class="my-4" data-wio-id=' . $document->id . '>' . RichText::asText($post->{'title-2'}) . '</h3>' : '' !!}



                            @if(RichText::asText($post->lead_text) != '')
                                <p class="large">{{RichText::asText($post->lead_text)}}</p>

                            @endif


                            <?PHP
                            $slices = $post->body ? $post->body : (object)array();
                            ?>

                            @if($slices !== null)

                                @foreach($slices as $slice)

                                    @switch($slice->slice_type)

                                    @case('text_section')
                                    @include('slices.text-section-post')
                                    @break

                                    @case('quote')
                                    @include('slices.quote')
                                    @break


                                    @case('image_with_caption')
                                    @include('slices.image')
                                    @break

                                    @default
                                    @break

                                    @endswitch


                                @endforeach

                            @endif


                        </div>
                        <footer class="clearfix">
                            <div class="tags pull-left"><i class="icon-tags"></i>

                                @foreach($document->tags as $tag)

                                    <div class="tag"><a href="#">{!! trim($tag) !!}</a></div>

                                @endforeach

                            </div>
                            <div class="link pull-right">
                                <ul class="social-links circle small colored clearfix margin-clear text-right animated-effect-1">
                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </footer>
                    </article>
                    <!-- blogpost end -->


                </div>
                <!-- main end -->


            </div>
        </div>
    </section>


@endsection
