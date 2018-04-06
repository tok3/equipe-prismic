<?php

// Get all the slices of the post
$sliceZone = $post->data->body;

$firstParagraph = "";

// Loop through each slice to find the first text slice
foreach ($sliceZone as $slice) {




  if ($slice->slice_type == "text_section") {

    $firstParagraph = RichText::asText($slice->primary->rich_text, $linkResolver);


    break;
  }
  if ($slice->slice_type == "text") {

    $firstParagraph = RichText::asText($slice->primary->text, $linkResolver);

    break;
  }
}

// If a first paragraph was found display the paragraph with text limit
if ($firstParagraph !== "") {
  $firstParagraphInPost = $firstParagraph;
  $textLimit = 300;
  $limitedText = substr($firstParagraphInPost, 0, $textLimit);

  // If the first paragraph is longer than the limit, cut it down, respecting the end of the last word
  if (strlen($firstParagraphInPost)> $textLimit) {
    $lastSpaceIndex = strrpos($limitedText, ' ', -1);
    $limitedText = substr($limitedText, 0, $lastSpaceIndex);
    echo "<p>" . $limitedText . "...</p>";
  } else {
    echo "<p>" . $firstParagraphInPost . "</p>";
  }
}
