@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/landscape-1024x434.jpeg') }}" class="half-opacity">
                    <figcaption class="flex-caption caption-margin-bottom">
                        <h1 class="main-banner-text">
                            Freshwater Ecoregions of the World
                        </h1>
                        <h1 class="middle-banner-text">
                            A global biogeographical regionalization of the Earth's freshwater biodiversity
                        </h1>
                        <div class="text-center">
                            <div class="btn btn-large btn-primary banner-button">
                                Explore Map
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section section-padded">
        <div class="container-fluid">
            <p class="lead text-left">
                <strong>Freshwater Ecoregions of the World, (FEOW)</strong> provides a new global biogeographic
                regionalization of
                the Earth’s freshwater biodiversity. Covering virtually all freshwater habitats on Earth, this
                first-ever ecoregion map, together with associated species data, is a useful tool for underpinning
                global and regional conservation planning efforts, particularly to identify outstanding and
                imperiled freshwater systems; for serving as a logical framework for large-scale conservation
                strategies; and for providing a global-scale knowledge base for increasing freshwater biogeographic
                literacy.
            </p>
        </div>
    </section>
@stop
