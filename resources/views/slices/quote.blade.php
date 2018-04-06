<section class="section default-bg clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-md-12">

                            <blockquote>
                                {!! RichText::asHtml($slice->primary->quote_text, $linkResolver) !!}
                                <footer>


                                    @if(isset($slice->primary->urheber)&& strlen(RichText::asText($slice->primary->urheber)) > 1)
                                        {!! RichText::asText($slice->primary->urheber) !!}
                                    @endif
                                    @if(isset($slice->primary->source )&&strlen(RichText::asText($slice->primary->source)) > 1)
                                        <cite title="{!! RichText::asText($slice->primary->source) !!}">{!! RichText::asText($slice->primary->source) !!}</cite>
                                    @endif

                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>