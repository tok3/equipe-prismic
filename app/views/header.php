<?php

if (!isset($title))
{
    $title = SITE_TITLE;
}
if (!isset($description))
{
    $description = SITE_DESCRIPTION;
}
if (!isset($isHomepage))
{
    $isHomepage = false;
}

?>


<!--neue -->

<!DOCTYPE html>
<!--[if IE 9]>
<html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]>
<html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="htmlcoder.me">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="fonts/fontello/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
    <link href="plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
    <link href="plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
    <link href="plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="plugins/hover/hover-min.css" rel="stylesheet">
    <link href="plugins/morphext/morphext.css" rel="stylesheet">

    <!-- The Project's core CSS file -->
    <!-- Use css/rtl_style.css for RTL version -->
    <link href="css/style.css" rel="stylesheet">
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="css/typography-default.css" rel="stylesheet">
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="css/skins/light_blue.css" rel="stylesheet">


    <!-- Custom css -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <? /* Required for previews and experiments */ ?>
    <script>
        window.prismic = {
            endpoint: '<?= PRISMIC_URL ?>'
        };
    </script>
    <script src="//static.cdn.prismic.io/prismic.js"></script>
</head>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class="front-page ">

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">
    <!-- header-container start -->
    <div class="header-container">
        <!-- header-top start -->
        <!-- classes:  -->
        <!-- "dark": dark version of header top e.g. class="header-top dark" -->
        <!-- "colored": colored version of header top e.g. class="header-top colored" -->
        <!-- ================ -->
        <div class="header-top dark">
            <div class="container">
                <div class="row">
                    <div class="col-2 col-md-5">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-sm-down">
                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                            <div class="social-links hidden-md-up circle small">
                                <div class="btn-group dropdown">
                                    <button id="header-top-drop-1" type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fa fa-share-alt"></i></button>
                                    <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
                                        <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                        <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                        <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                                        <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                                        <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                        <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- header-top-first end -->
                    </div>
                    <div class="col-10 col-md-7">

                        <!-- header-top-second start -->
                        <!-- ================ -->
                        <div id="header-top-second" class="clearfix text-right">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-10"></i>+12 123 123 123</li>
                                <li class="list-inline-item"><i class="fa fa-envelope-o pr-1 pl-10"></i> theproject@mail.com</li>
                            </ul>
                        </div>
                        <!-- header-top-second end -->

                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->

        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "fixed-desktop": enables fixed navigation only for desktop devices e.g. class="header fixed fixed-desktop clearfix" -->
        <!-- "fixed-all": enables fixed navigation only for all devices desktop and mobile e.g. class="header fixed fixed-desktop clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ -->
        <header class="header fixed fixed-desktop clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-auto hidden-md-down pl-3">
                        <!-- header-first start -->
                        <!-- ================ -->
                        <div class="header-first clearfix">

                            <!-- logo -->
                            <div id="logo" class="logo">
                                <a href="index.html"><img id="logo_img" src="images/logo_light_blue.png" alt="The Project"></a>
                            </div>

                            <!-- name-and-slogan -->
                            <div class="site-slogan">
                                Multipurpose HTML5 Template
                            </div>

                        </div>
                        <!-- header-first end -->

                    </div>
                    <div class="col-lg-8 col-xl-9">

                        <!-- header-second start -->
                        <!-- ================ -->
                        <div class="header-second clearfix">

                            <!-- main-navigation start -->
                            <!-- classes: -->
                            <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                            <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                            <!-- ================ -->
                            <div class="main-navigation  animated">
                                <nav class="navbar navbar-toggleable-md navbar-light p-0">

                                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="navbar-brand clearfix hidden-lg-up">

                                        <!-- logo -->
                                        <div id="logo-mobile" class="logo">
                                            <a href="index.html"><img id="logo-img-mobile" src="images/logo_light_blue.png" alt="The Project"></a>
                                        </div>

                                        <!-- name-and-slogan -->
                                        <div class="site-slogan">
                                            Multipurpose HTML5 Template
                                        </div>

                                    </div>

                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                        <!-- main-menu -->
                                        <ul class="navbar-nav ml-xl-auto">

                                            <!-- menu start -->

                                            <?php
                                            // if the navigation is set up in prismic.io
                                            if ($menuContent != null)
                                            {
                                            // loop through each menu item
                                            foreach ($menuContent->getGroup('menu.menu_links')->getArray() as $link)
                                            {



                                            ?>
                                            <li class="nav-item"><a href="<?= $link->getLink("link")->getUrl($prismic->linkResolver) ?>"  class="nav-link"><?= $link->getText("label") ?></a></li>
                                            <?php }
                                            } ?>


                                        </ul>
                                        <!-- main-menu end -->
                                    </div>
                                </nav>
                            </div>
                            <!-- main-navigation end -->
                        </div>
                        <!-- header-second end -->

                    </div>
                    <div class="col-auto ml-auto pr-3 hidden-md-down">
                        <!-- header dropdown buttons -->
                        <div class="header-dropdown-buttons">
                            <a href="page-contact.html" class="btn btn-sm radius-50 btn-default">Store <i class="fa fa-shopping-cart pl-1"></i></a>
                        </div>
                        <!-- header dropdown buttons end-->
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->