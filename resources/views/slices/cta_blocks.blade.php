<section class="section {!! $slice->primary->background !!} clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="title">{!! RichText::asHtml($slice->primary->title) !!}</h1>
                            <p>{!! RichText::asHtml($slice->primary->text) !!}</p>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <p><a href="{{ Link::asUrl($slice->primary->target,$linkResolver) }}" class="btn btn-lg btn-gray-transparent btn-animated">{!! RichText::asText($slice->primary->button_text) !!}<i class="fa fa-arrow-right pl-20"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
