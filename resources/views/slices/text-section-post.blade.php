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



<?PHP

if (isset($slice->primary->rich_text2) || strlen(RichText::asText($slice->primary->rich_text2)) == 1)
{
?>

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
            <h3 class="my-4">{!! RichText::asText($slice->primary->title, $linkResolver) !!}</h3>

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
<?PHP }
else
{ ?>


    <?PHP
    if (RichText::asHtml($slice->primary->title) != '' )
    {
    ?>
    <div class="row">


        <div class="main col-12">

            <h3 class="my-4">{!! RichText::asText($slice->primary->title, $linkResolver) !!}</h3>
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


<?PHP } ?>
