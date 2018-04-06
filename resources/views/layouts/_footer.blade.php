

<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
<!-- ================ -->
<footer id="footer" class="clearfix light">

    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <div class="logo-footer"><img id="logo-footer" src="images/logo_light_blue.png" alt=""></div>
                            <p>Wir sind Experten bei der Erstellung von Websites und Webapps, Front- und Backend Anwendungen von der Konzeption über die Erstellung und Programmierung bis hin
                                zur
                                Wartung und Pflege von Webseiten, Blogs und anderen digitalen Kommunikationskanälen.</p>

                            <div class="separator-2"></div>
                            <nav>
                                <ul class="nav flex-column">
                                    {{--if the navigation is set up in prismic.io--}}
                                    @if (Prismic::getFooterNavigation() != null)

                                        {{--loop through each menu item--}}
                                        @foreach (Prismic::getFooterNavigation()->data->menu_links as $item)



                                            <li class="nav-item"><a href="{{ Link::asUrl($item->link,$linkResolver) }}" class="nav-link">{{ RichText::asText($item->label) }}</a>
                                            </li>
                                        @endforeach

                                    @endif

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <h2 class="title">Latest From Blog</h2>

                            <div class="separator-2"></div>

                            <?PHP


                            foreach (Prismic::getLatestPosts()->results as $key => $result)
                            {

                                $thumb = '';
                                if (isset($result->data->post_image->url))
                                {

                                    $thumbView = $result->data->post_image->Thumb;

                                    $thumb = '<div class="d-flex pr-2">
                        <div class="overlay-container">
                          <img class="media-object" src="' . $thumbView->url . '" alt="blog-thumb">
                          <a href="/artikel/' . $result->uid . '"  class="overlay-link small">
                          <i class="fa fa-link"></i></a>
                        </div>
                      </div>';


                                }

                                echo '<div class="media margin-clear">' . $thumb . '



                                <div class="media-body">
                                    <h6 class="media-heading"><a href="/artikel/' . $result->uid . '">' . RichText::asText($result->data->title) . '</a></h6>
                                    <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>' . Date::asDate($result->data->date)->format('d. M Y') . '</p>
                                </div>
                            </div>


                            <hr>';


                            }


                            ?>


                            <div class="text-right space-top">
                                <a href="/artikel" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="footer-content">
                            <h2 class="title">Find Us</h2>

                            <div class="separator-2"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio voluptatem necessitatibus illo vel dolorum soluta.</p>
                            <ul class="social-links circle animated-effect-1">
                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                <li class="xing"><a target="_blank" href="http://www.xing.com"><i class="fa fa-xing"></i></a></li>
                            </ul>
                            <div class="separator-2"></div>
                            <ul class="list-icons">
                                <li><i class="fa fa-map-marker pr-2 text-default"></i> One infinity loop, 54100</li>
                                <li><i class="fa fa-phone pr-2 text-default"></i> +00 1234567890</li>
                                <li><a href="mailto:info@theproject.com"><i class="fa fa-envelope-o pr-2"></i>info@theproject.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- .footer end -->
