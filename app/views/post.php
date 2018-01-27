<?php

$prismic = $WPGLOBAL['prismic'];
$post = $WPGLOBAL['post'];
$menuContent = $WPGLOBAL['menuContent'];

$title = $post->getText('post.title');
$isBloghome = false;

?>

<?php include 'header.php'; ?>


<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-lg-12">


                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title"><?= $post->getText('post.title') ? $post->getText('post.title') : "Untitled" ?></h1>
                <!-- page-title end -->

                <!-- blogpost start -->
                <!-- ================ -->
                <article class="blogpost full">

                    <div class="blogpost-content">


                        <?php
                        if (NULL !== $post->getImage("post.post_image"))
                        {

                            $mainView = $post->getImage("post.post_image")->getView('main');
                            $tabletView = $post->getImage("post.post_image")->getView('tablet');
                            $mobileView = $post->getImage("post.post_image")->getView('mobile');
                            $thumbView = $post->getImage("post.post_image")->getView('thumb');
                            ?>
                            <div class="overlay-container">

                                <picture>
                                    <source media="(max-width: 400px)" , srcset="<?= $mobileView->getUrl() ?>"/>
                                    <source media="(max-width: 900px)" , srcset="<?= $tabletView->getUrl() ?>"/>
                                    <source srcset="<?= $mainView->getUrl() ?>"/>
                                    <image src="<?= $mainView->getUrl() ?>"/>
                                </picture>
                                <a class="overlay-link popup-img" href="images/blog-1.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <?PHP

                        }

                        echo $post->getText('post.title-2') ? '<h3 class="my-4" data-wio-id=' . $post->getId() . '>' . $post->getText('post.title-2') . '</h3>' : "" ?>



                        <?php

                        if (NULL !== $post->getText('post.lead_text'))
                        {

                            echo '<p class="large">' . $post->getText('post.lead_text') . '</p>';
                        }

                        $sliceZone = $post->getSliceZone('post.body') ? $post->getSliceZone('post.body')->getSlices() : (object)array();

                        //- Render the right markup for a given slice type.
                        foreach ($sliceZone as $slice)
                        {

                            // Render the right markup for a given slice type
                            switch ($slice->getSliceType())
                            {

                                // Text slice
                                case 'text_section':
                                    include("slices/text-section-post.php");
                                    break;

                                // Quote slice
                                case "quote":
                                    include 'slices/quote.php';
                                    break;

                                // Image slice
                                case "image_with_caption":
                                    include 'slices/image.php';
                                    break;

                                // Default slice case does nothing
                                default:
                                    break;
                            }
                        }
                        ?>
                    </div>
                    <footer class="clearfix">
                        <div class="tags pull-left"><i class="icon-tags"></i> <?PHP
                            foreach ($post->getTags() as $tag)
                            {

                                echo '<div class="tag"><a href="#">' . trim($tag) . '</a></div> ';
                            }

                            ?></div>
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

<?php include 'footer.php'; ?>
