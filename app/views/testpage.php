<?php

$prismic = $WPGLOBAL['prismic'];
$pageContent = $WPGLOBAL['pageContent'];
$menuContent = $WPGLOBAL['menuContent'];

$title = SITE_TITLE;
$isHomepage = false;

?>
<?php include 'header.php'; ?>

    <section data-wio-id=<?= $pageContent->getId() ?>>
        <?php
        // If there are any slices
        if ( $pageContent->getSliceZone('testpage.page_content') !== null ) {

            // Display the slices
            foreach ( $pageContent->getSliceZone('testpage.page_content')->getSlices() as $slice ) {

                //- Render the right markup for a given slice type.
                switch($slice->getSliceType()) {
                    case 'text_section':
                        include("slices/text-section.php");
                        break;
                    case 'quote':
                        include("slices/quote.php");
                        break;
                    case 'full_width_image':
                        include("slices/full-width-image.php");
                        break;
                    case 'image_gallery':
                        include("slices/gallery.php");
                        break;
                    case 'image_highlight':
                        include("slices/highlight.php");
                        break;
                }
            }
        }
        ?>

    </section>

<?php include 'footer.php'; ?>