<?php


$prismic = $WPGLOBAL['prismic'];
$bloghome = $WPGLOBAL['pageContent'];
$posts = $WPGLOBAL['posts'];

$menuContent = $WPGLOBAL['menuContent'];

$title = $bloghome->getText("blog_home.headline");
$isBloghome = true;

$imageUrl = $bloghome->getImage('blog_home.image') ? $bloghome->getImage('blog_home.image')->getUrl() : '';


?>

<?php include 'header.php'; ?>
<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-12">


                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Blog Masonry No Sidebars</h1>

                <div class="separator-2"></div>
                <!-- page-title end -->

                <!-- masonry grid start -->
                <!-- ================ -->
                <div class="masonry-grid row">


                    <?php foreach ($posts as $post)
                    {
                        ?>


                        <!-- masonry grid item start -->
                        <div class="masonry-grid-item col-md-6 col-lg-4 blog-post" data-wio-id=<?= $post->getId() ?>>

                            <!-- blogpost start -->
                            <?php
                            if (NULL !== $post->getImage("post.post_image"))
                            {

                                echo '<div class="overlay-container">
                                <img class="img-responsive" src="'.$post->getImage("post.post_image")->getView('mason')->getUrl().'" alt="">
                                <a class="overlay-link" href="'. $prismic->linkResolver->resolve($post) .'"><i class="fa fa-link"></i></a>
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
                                        <a href="<?= $prismic->linkResolver->resolve($post) ?>">
                                            <?= $post->getText('post.title') ?>
                                        </a>
                                    </h2>

                                    <div class="post-info">
                        <span class="post-date">
                          <i class="icon-calendar"></i>
                            <?= $post->getDate("post.date") ? $post->getDate("post.date")->formatted('M d, Y') : "" ?>
                        </span>
                                        <span class="submitted"><i class="icon-user-1"></i> by <a href="#">Karl Ranseyer</a></span>

                                    </div>
                                </header>
                                <div class="blogpost-content">
                                    <p>
                                        <?php include 'slices/firstParagraph.php'; ?>
                                    </p>
                                </div>
                                <footer class="clearfix">
                                    <div class="tags pull-left"><i class="icon-tags"></i>
                                        <?PHP
                                        foreach ($post->getTags() as $tag)
                                        {

                                            echo '<div class="tag">
                      <a href="#">' . trim($tag) . '</a>
                    </div>';
                                        }

                                        ?>
                                    </div>

                                    <div class="link pull-right"><i class="icon-link"></i><a href="<?= $prismic->linkResolver->resolve($post) ?>">Read More</a></div>
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
                            <a class="page-link" href="#" aria-label="Previous">
                                <i aria-hidden="true" class="fa fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <!--<li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>-->
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
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

<?php

echo $WPGLOBAL['faker']->realText($maxNbChars = 1400, $indexSize = rand(1,5));

include 'footer.php'; ?>
