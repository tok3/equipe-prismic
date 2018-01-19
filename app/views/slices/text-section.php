<?php

// Add the class that defines the number of columns
if ($slice->getLabel())
{
    $sectionClass = "text-section-" . $slice->getLabel();
}
else
{
    $sectionClass = "text-section-1col";
}
?>


<section class="main-container content-section <?= $sectionClass ?>">

    <?PHP
    if (NULL == $slice->getPrimary()->getText('rich_text2'))
    {
        ?>

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-12">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <?PHP
                    if (NULL != $slice->getPrimary()->getText('title'))
                    {
                        ?>
                        <h1 class="page-title"><?= $slice->getPrimary()->getText('title'); ?></h1>

                        <div class="separator-2"></div>
                    <?PHP } ?>
                    <!-- page-title end -->
                    <p>
                        <?= $slice->getPrimary()->getStructuredText('rich_text')->asHtml(); ?>
                    </p>

                </div>
                <!-- main end -->

            </div>
        </div>
    <?PHP }
    else
    { ?>

        <div class="container">

            <?PHP
            if (NULL != $slice->getPrimary()->getText('title'))
            {
                ?>
                <div class="row">


                    <div class="main col-12">

                        <h1 class="page-title"><?= $slice->getPrimary()->getText('title'); ?></h1>
                    </div>
                </div>

                <div class="separator-2"></div>
            <?PHP } ?>
            <div class="row">


                <div class="main col-6">

                    <p>
                        <?= $slice->getPrimary()->getStructuredText('rich_text')->asHtml(); ?>
                    </p>
                </div>
                <div class="main col-6">

                    <p>
                        <?= $slice->getPrimary()->getStructuredText('rich_text2')->asHtml(); ?>
                    </p>
                </div>
                <!-- main end -->

            </div>
        </div>


    <?PHP } ?>
</section>