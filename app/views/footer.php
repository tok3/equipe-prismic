<!-- footer top end -->
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
                            <p>Wir sind Experten bei der Erstellung von Websites und Webapps, Front- und Backend Anwendungen von der Konzeption über die Erstellung und Programmierung bis hin zur
                                Wartung und Pflege von Webseiten, Blogs und anderen digitalen Kommunikationskanälen.</p>

                            <div class="separator-2"></div>
                            <nav>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" target="_blank" href="http://htmlcoder.me/support">Support</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="page-about.html">About</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <h2 class="title">Latest From Blog</h2>

                            <div class="separator-2"></div>

                            <?PHP
                            foreach ($WPGLOBAL['latestPosts'] as $key => $document)
                            {

                                $thumb = '';
                                if (NULL !== $document->getImage("post.post_image"))
                                {

                                    $thumbView = $document->getImage("post.post_image")->getView('thumb');

                                    $thumb = '<div class="d-flex pr-2">
                        <div class="overlay-container">
                          <img class="media-object" src="' . $thumbView->getUrl() . '" alt="blog-thumb">
                          <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                        </div>
                      </div>';


                                }
                                echo '<div class="media margin-clear">' . $thumb . '



                                <div class="media-body">
                                    <h6 class="media-heading"><a href="/artikel/' . $document->getUid() . '">' . $document->getText('post.title') . '</a></h6>
                                    <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>' . $document->getDate('post.date')->formatted('d. M Y') . '</p>
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

    <!-- .subfooter start -->
    <!-- ================ -->
    <div class="subfooter">
        <div class="container">
            <div class="subfooter-inner">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">Copyright © <?= date('Y', time()); ?> Equipe<sup>3<sub>w</sub></sup>. Alle Rechte vorbehalten</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .subfooter end -->

</footer>
<!-- footer end -->
</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="plugins/jquery.min.js"></script>
<script type="text/javascript" src="plugins/tether.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="plugins/modernizr.js"></script>
<!-- jQuery Revolution Slider  -->
<script type="text/javascript" src="plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<!-- Isotope javascript -->
<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="plugins/waypoints/sticky.min.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script src="plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script src="plugins/jquery.validate.js"></script>
<!-- Morphext -->
<script type="text/javascript" src="plugins/morphext/morphext.min.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="plugins/owlcarousel2/owl.carousel.min.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>