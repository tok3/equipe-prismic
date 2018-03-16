<?php 
$highlightTitle = $slice->getPrimary()->getStructuredText("title");
$highlightHeadline = $slice->getPrimary()->getStructuredText("headline");
?>



<section class="full-width-section">
  <div class="full-image-container default-bg border-bottom-clear">
    <img class="to-right-block" src="<?= $slice->getPrimary()->getImage("featured_image")->getUrl() ?>" alt="">
    <div class="full-image-overlay text-right" style="margin-top: -122px;">

    </div>
  </div>
  <div class="full-text-container default-bg border-bottom-clear">
    <h2 class="mt-4">    <?= $highlightTitle->asHtml($prismic->linkResolver); ?></h2>
    <div class="separator-2 hidden-lg-down"></div>
    <p>
      <?= $highlightHeadline->asHtml($prismic->linkResolver); ?>
    </p>
    <div class="separator-3 hidden-lg-down"></div>
    <a href="mailto:theproject@mail.com" class="btn btn-default">Contact Us <i class="pl-10 fa fa-envelope-o"></i></a>
  </div>
</section>