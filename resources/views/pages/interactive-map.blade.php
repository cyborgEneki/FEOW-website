@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/ground-1.jpeg') }}" class="half-opacity">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore">
                            Interactive Map
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section section-padded">
        <div class="container-fluid">
            <div id="viewDiv"></div>
        </div>
    </section>
@stop

@section('scripts')
    <script src="https://js.arcgis.com/4.12/"></script>
    <script>
        require([
            "esri/Map",
            "esri/views/MapView",
            "esri/layers/FeatureLayer"
        ], function (Map, MapView, FeatureLayer) {

            var map = new Map({
                basemap: "topo-vector"
            });

            var view = new MapView({
                container: "viewDiv",
                map: map,
                center: [14.20004, 13.23047], // longitude, latitude
                zoom: 3
            });
            var popupEcoregion = {
                "title": "Ecoregion: {ECOREGION}",
                "content": "<b>Ecoregion ID:</b> {ECO_ID}<br><br><a href='/ecoregions/details/{ECO_ID}'>More Details</a>"
            }
            var feowLayer = new FeatureLayer({
                url: "https://maps.wwfus.org/server/rest/services/FEOW/feowhs_011313/MapServer",
                outFields: ["ECOREGION", "ECO_ID"],
                popupTemplate: popupEcoregion
            });
            map.add(feowLayer);
        });
    </script>
@stop
