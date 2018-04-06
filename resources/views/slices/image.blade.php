<?php
use Prismic\Dom\Link;
use Prismic\Dom\RichText;

$imageWithCaption = $slice->primary;

$imageUrl = $imageWithCaption->image ? $imageWithCaption->image->url : '';
$caption = RichText::asHTML($imageWithCaption->caption) ? RichText::asHTML($imageWithCaption->caption) : null;
$ImgLead = RichText::asHTML($imageWithCaption->lead) ? RichText::asHTML($imageWithCaption->lead) : null;

// Render the correct style for the different image labels
switch ($slice->slice_label)
{

    // Full width image
    case "image-full-width":

        echo "<div class='blog-header single' style='background-image: url(" . $imageUrl . ");'><div class='wrapper'>";

        if ($caption)
        {
            echo "<h1>" . $caption . "</h1>";
        }
        echo "</div></div>";
        break;

    // Emphasized image
    case "emphasized":
        echo "<div class='post-part single container'><p class='block-img emphasized'>";
        echo "<img src='" . $imageUrl . "'/>";
        if ($caption)
        {
            echo "<p><span class='image-label'>" . $caption . "</span></p>";
        }
        echo "</p></div>";
        break;


    // Emphasized image
    case "image_with_caption":

        echo "<img src='" . $imageUrl . "'/>";
        if ($caption)
        {
            echo "<p><span class='image-label'>" . $caption . "</span></p>";
        }
        echo "</p></div>";
        break;





    // Default image
    default:
        echo '<div class="banner default-translucent-bg" style="background-image:url('. $imageUrl . ');background-position:50% 0;">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 text-center offset-lg-2 pv-20">
              <h1 class="title object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100">'. $caption .'</h1>
              <div class="separator object-non-visible mt-10 animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"></div>
              <p class="text-center object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100">'. $ImgLead .'</p>
            </div>
          </div>
        </div>
      </div>';


        break;
}