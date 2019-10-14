@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background dark-background-max-height">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/river-1.jpeg') }}" class="half-opacity banner-max-height">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore">
                            Copyright
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section custom-section-padded">
        <div class="body-padding">
            <p class="body-text">
                <strong>Copyright 2008 by The Nature Conservancy and World Wildlife Fund, Inc. All Rights
                    Reserved.
                </strong>
                <br> <br>
                Freshwater Ecoregions of the World (FEOW) has been jointly developed by the Conservation Science Program
                of World Wildlife Fund and by The Nature Conservancy. Some content on this site may be the property of
                independent authors and contributors, who may be identified in separate copyright notices associated
                with content provided by them. You may not copy, reproduce, modify, display, republish, upload, post,
                transmit, distribute, alter, prepare any derivative works of, or otherwise use any material from this
                web site, including without limitation text, code, software, photographs, and images, without the prior
                express written consent of The Nature Conservancy or World Wildlife Fund, except as described below.
                <br><br>
                You may use the content for non-commercial, educational, or scientific conservation purposes, provided
                that: (1) The above copyright notice or any separate copyright notice that appears with the content must
                appear on all copies, along with a citation (and a link, in the case of online use) to
                http://www.feow.org; (2) you may use only so much of the content as is reasonably necessary to
                accomplish your non-commercial, educational, or scientific purpose; (3) you may not make any material
                modifications to the portion of the content you use; and (4) you may not use graphics or photographs
                separately from the accompanying text.
                <br><br>
                Neither The Nature Conservancy nor World Wildlife Fund warrants or represents that the use of materials
                contained on this web site will not infringe the rights of third parties. Except as expressly granted
                above, all rights are reserved.
            </p>
        </div>
    </section>
@stop
