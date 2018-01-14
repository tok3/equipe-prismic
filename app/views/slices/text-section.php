<?php

// Add the class that defines the number of columns
if ( $slice->getLabel() ) {
  $sectionClass = "text-section-" . $slice->getLabel();
} else { 
  $sectionClass = "text-section-1col";
}
?>

<section class="content-section <?= $sectionClass ?>">
  <p class="lead">

  </p>
</section>


<section class="main-container content-section <?= $sectionClass ?>">

  <div class="container">
    <div class="row">

      <!-- main start -->
      <!-- ================ -->
      <div class="main col-12">

        <!-- page-title start -->
        <!-- ================ -->
        <h1 class="page-title">Page No Sidebars</h1>
        <div class="separator-2"></div>
        <!-- page-title end -->
        <p>
          <?= $slice->getPrimary()->getStructuredText('rich_text')->asHtml(); ?>
        </p>

      </div>
      <!-- main end -->

    </div>
  </div>
</section>