@php


$slices = $document->data->page_content;

@endphp


<?php

// Add the class that defines the number of columns
if ($slice->slice_label)
{
    $sectionClass = "text-section-" . $slice->slice_label;
}
else
{
    $sectionClass = "text-section-1col";
}
?>


<section class="main-container content-section <?= $sectionClass ?>">

    <?PHP
    if (isset($slice->primary->rich_text2) || strlen(RichText::asText($slice->primary->rich_text2)) == 1)
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
                    if (RichText::asHtml($slice->primary->title) != '' )
                    {
                        ?>
                    {!! RichText::asHtml($slice->primary->title, $linkResolver) !!}

                        <div class="separator-2"></div>

                        {!! RichText::asHtml($slice->primary->rich_text, $linkResolver) !!}
                 
                    <?PHP }

                    ?>
                    <!-- page-title end -->
                    <p>
                        {!! RichText::asHtml($slice->primary->rich_text, $linkResolver) !!}

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
            if (RichText::asHtml($slice->primary->title) != '' )
            {
                ?>
                <div class="row">


                    <div class="main col-12">

                        {!! RichText::asHtml($slice->primary->title, $linkResolver) !!}
                    </div>
                </div>

                <div class="separator-2"></div>
            <?PHP } ?>
            <div class="row">


                <div class="main col-6">

                    <p>
                        {!! RichText::asHtml($slice->primary->rich_text, $linkResolver) !!}
                    </p>
                </div>
                <div class="main col-6">

                    <p>
                        {!! RichText::asHtml($slice->primary->rich_text2, $linkResolver) !!}
                    </p>
                </div>
                <!-- main end -->

            </div>
        </div>


    <?PHP } ?>
</section>