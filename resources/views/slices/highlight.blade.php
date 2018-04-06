<?php

$highlightTitle =  RichText::asHTML($slice->primary->title,$linkResolver);
$highlightHeadline = RichText::asText($slice->primary->headline,$linkResolver);
?>



<section class="full-width-section">
  <div class="full-image-container default-bg border-bottom-clear">
    <img class="to-right-block" src="{{$slice->primary->featured_image->url}}" alt=" {!! $highlightTitle !!}">
    <div class="full-image-overlay text-right" style="margin-top: -122px;">

    </div>
  </div>
  <div class="full-text-container default-bg border-bottom-clear">
    <h2 class="mt-4">    {!! $highlightTitle !!}</h2>
    <div class="separator-2 hidden-lg-down"></div>
    <p>
      {!! $highlightHeadline !!}
    </p>
    <div class="separator-3 hidden-lg-down"></div>
    <a href="{{ Link::asUrl($slice->primary->target,$linkResolver) }}" class="btn btn-default">{!! RichText::asText($slice->primary->link_label) !!}<i class="fa fa-arrow-right pl-20"></i></a>
  </div>
</section>

{{--

<section class="full-width-section">
  <div class="full-image-container dark-bg border-bottom-clear">
    <img class="to-right-block" src="{{$slice->primary->featured_image->url}}" alt=" {!! $highlightTitle !!}">
    <div class="full-image-overlay text-right" style="margin-top: -122.4px;">
      <h3>Services</h3>
      <ul class="list-icons">
        <li>We are here to support you <i class="icon-check-1"></i></li>
        <li>Free updates <i class="icon-check-1"></i></li>
        <li>ipsam asperiores fugiat quo <i class="icon-check-1"></i></li>
        <li>Animi veniam veritatis sint <i class="icon-check-1"></i></li>
        <li>Voluptatum officia suscipit <i class="icon-check-1"></i></li>
        <li>Unlimited options and variations <i class="icon-check-1"></i></li>
      </ul>
    </div>
  </div>
  <div class="full-text-container dark-bg border-bottom-clear">
    <h2 class="mt-4">Let's Work Together</h2>
    <div class="separator-2 hidden-lg-down"></div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>
    <div class="separator-3 hidden-lg-down"></div>
    <a href="mailto:theproject@mail.com" class="btn btn-gray-transparent btn-animated">Contact Us <i class="fa fa-envelope-o"></i></a>
  </div>
</section>--}}
