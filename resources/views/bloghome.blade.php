@extends('layouts.site-default')

@section('content')




    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-12">


                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title">{{RichText::asText($document->data->title)}}</h1>
                    <h2>{{RichText::asText($document->data->title2)}}</h2>
                    <p class="lead">{{RichText::asText($document->data->lead_text)}}</p>
                    <div class="separator-2"></div>
                    <!-- page-title end -->

                    <!-- masonry grid start -->
                    <!-- ================ -->
                    <div class="masonry-grid row">


                        <?php foreach ($posts->results as $post)
                        {


                        ?>


                                <!-- masonry grid item start -->
                        <div class="masonry-grid-item col-md-6 col-lg-4 blog-post" data-wio-id=<?= $post->id ?>>

                            <!-- blogpost start -->
                            <?php

                            if (isset($post->data->post_image->url))
                            {

                                echo '<div class="overlay-container">
                                <img class="img-responsive" src="' . $post->data->post_image->url . '" alt="{{$post->uid}}">
                                <a class="overlay-link" href="/artikel/' . $post->uid . '"><i class="fa fa-link"></i></a>
                            </div>
                           ';
                            }


                            ?>
                            <article class="blogpost shadow-2 light-gray-bg bordered">
                                <div class="overlay-container">
                                    <img src="images/blog-1.jpg" alt="">
                                    <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                                </div>
                                <header>
                                    <h2>
                                        <a href="/artikel/<?= $post->uid ?>">

                                            {{RichText::asText($post->data->title, $linkResolver)}}
                                        </a>
                                    </h2>

                                    <div class="post-info">
                        <span class="post-date">
                          <i class="icon-calendar"></i>
                            <?= $post->data->date ? Date::asDate($post->data->date)->format('d. M Y') : "" ?>
                        </span>
                                        <span class="submitted"><i class="icon-user-1"></i> von <a href="#">Karl Ranseyer</a></span>

                                    </div>
                                </header>
                                <div class="blogpost-content">
                                    <p>
                                        @include('slices/firstParagraph')
                                    </p>
                                </div>
                                <footer class="clearfix">
                                    <div class="tags pull-left"><i class="icon-tags"></i>
                                        <?PHP
                                        foreach ($post->tags as $tag)
                                        {

                                            echo '<div class="tag">
                      <a href="#">' . trim($tag) . '</a>
                    </div>';
                                        }

                                        ?>
                                    </div>

                                    <div class="link pull-right"><i class="icon-link"></i><a href="/artikel/<?= $post->uid ?>">Read More</a></div>
                                </footer>
                            </article>
                            <!-- blogpost end -->
                        </div>
                        <!-- masonry grid item end -->


                        <?php } ?>


                    </div>
                    <!-- masonry grid end -->

                    <!-- pagination start -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="/artikel/{{$posts->page - 1}}" aria-label="Previous">
                                    <i aria-hidden="true" class="fa fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                           @for($i = 1; $i <= $posts->total_pages; ++$i)

                                <li class="page-item @if(($posts->page == $i) ||($posts->page == 0 && $i == 1)) active @endif"><a class="page-link" href="/artikel/{{$i}}">{{$i}}</a></li>

                            @endfor
                            <li class="page-item">
                                <a class="page-link" href="{{$posts->page + 1}}" aria-label="Next">
                                    <i aria-hidden="true" class="fa fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- pagination end -->
                </div>
                <!-- main end -->

            </div>
        </div>
    </section>



    @if(isset($document->data->title))

    @endif


@endsection