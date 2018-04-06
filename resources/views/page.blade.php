@php

$slices = $document->data->page_content;

@endphp

@extends('layouts.site-default')

@section('content')




    <section>

        @if($slices !== null)

            @foreach($slices as $slice)

                @switch($slice->slice_type)

                @case('text_section')
                @include('slices.text-section')
                @break

                @case('quote')
                @include('slices.quote')
                @break

                @case('full_width_image')
                @include('slices.full-width-image')
                @break

                @case('image_gallery')
                @include('slices.gallery')
                @break

                @case('image_highlight')
                @include('slices.highlight')
                @break

                @case('image_with_caption')
                @include('slices.image')
                @break

                @case('revolution')
                @include('slices.revolution')
                @break

                @case('cta_blocks')
                @include('slices.cta_blocks')
                @break


                @endswitch


            @endforeach

        @endif


    </section>



    @if(isset($document->data->title))

    @endif


@endsection