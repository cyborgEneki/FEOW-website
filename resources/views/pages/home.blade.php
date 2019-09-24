@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <div
                    style="
                        background-image: url('{{ asset('/img/assets/feow/landscape-v1.jpg')}}');
                        padding-top: 100px;
                        padding-bottom: 100px;
                        ">
                    <p class="main-banner-text">
                        Freshwater Ecoregions of the World
                    </p>
                    <p class="middle-banner-text">
                        A global biogeographical regionalization of the Earth's freshwater biodiversity
                    </p>
                    <div class="text-center">
                        <button class="btn btn-large btn-primary banner-button">
                            Explore Map
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section section-padded">
        <div class="home-padding">
            <p class="body-text text-left">
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
