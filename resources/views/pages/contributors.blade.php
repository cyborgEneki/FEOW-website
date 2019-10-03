@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background dark-background-max-height">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/bird-2.jpeg') }}" class="half-opacity banner-max-height">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore">
                            Contributors
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section custom-section-padded">
        <div class="body-padding">
            <p id="top">Contributors to Freshwater Ecoregions of the World Includes individuals who have either
                delineated
                ecoregions, reviewed ecoregion delineations, contributed or reviewed species lists, or authored or
                reviewed ecoregion descriptions. Major contributors are highlighted with short biographies.</p>

            <p>Jump to section:
                <select onchange="handleSelect(this)">
                    <option value="" selected disabled hidden>Choose here</option>
                    <option value="#africa">Africa</option>
                    <option value="#latin">Latin America & the Caribbean</option>
                    <option value="#eurasia">Eurasia</option>
                    <option value="#australasia">Australasia and Oceania</option>
                    <option value="#n-america">North America</option>
                    <option value="#g-datasets">Global Datasets</option>
                    <option value="#wwf-tnc">WWF and TNC staff</option>
                    <option value="#interns">Interns</option>
                </select>
            </p>
            <h1 class="contributors-text" id="africa">Africa (Contributors to the volume, Freshwater Ecoregions of
                Africa and Madagascar)</h1>
            <ol>
                @foreach($contributors as $contributor)
                    @if ($contributor->category == 1)
                        <li @if($contributor->body != null)class="contributors-in-list-links"@endif data-toggle="popover"
                            title="@if($contributor->header != null && $contributor->header != '.'){{ $contributor->header }}@endif"
                            data-content="@if($contributor->body != null){{ $contributor->image }}{{ $contributor->body }}@endif">{{ $contributor->contributor }}</li>
                    @endif
                @endforeach
            </ol>
            <div class="contributors-back-to-top-link">
                <a href="#top">Back to top</a>
            </div>

            <h1 class="contributors-text" id="latin">Latin America & the Caribbean</h1>
            <ol>
                @foreach($contributors as $contributor)
                    @if ($contributor->category == 2)
                        <li>{{ $contributor->contributor }}</li>
                    @endif
                @endforeach
            </ol>
            <div class="contributors-back-to-top-link">
                <a href="#top">Back to top</a>
            </div>

            <h1 class="contributors-text" id="eurasia">Eurasia</h1>
            <ol>
                @foreach($contributors as $contributor)
                    @if ($contributor->category == 3)
                        <li>{{ $contributor->contributor }}</li>
                    @endif
                @endforeach
            </ol>
            <div class="contributors-back-to-top-link">
                <a href="#top">Back to top</a>
            </div>

            <h1 class="contributors-text" id="australasia">Australasia and Oceania</h1>
            <ol>
                @foreach($contributors as $contributor)
                    @if ($contributor->category == 4)
                        <li>{{ $contributor->contributor }}</li>
                    @endif
                @endforeach
            </ol>
            <div class="contributors-back-to-top-link">
                <a href="#top">Back to top</a>
            </div>

            <h1 class="contributors-text" id="n-america">North America</h1>
            <ol>
                @foreach($contributors as $contributor)
                    @if ($contributor->category == 5)
                        <li>{{ $contributor->contributor }}</li>
                    @endif
                @endforeach
            </ol>
            <div class="contributors-back-to-top-link">
                <a href="#top">Back to top</a>
            </div>

            <h1 class="contributors-text" id="g-datasets">Global Datasets</h1>
            <ol>
                @foreach($contributors as $contributor)
                    @if ($contributor->category == 6)
                        <li>{{ $contributor->contributor }}</li>
                    @endif
                @endforeach
            </ol>
            <div class="contributors-back-to-top-link">
                <a href="#top">Back to top</a>
            </div>

            <h1 class="contributors-text" id="wwf-tnc">WWF and TNC staff</h1>
            <ol>
                @foreach($contributors as $contributor)
                    @if ($contributor->category == 7)
                        <li>{{ $contributor->contributor }}</li>
                    @endif
                @endforeach
            </ol>
            <div class="contributors-back-to-top-link">
                <a href="#top">Back to top</a>
            </div>

            <h1 class="contributors-text" id="interns">Interns</h1>
            <ol>
                @foreach($contributors as $contributor)
                    @if ($contributor->category == 8)
                        <li>{{ $contributor->contributor }}</li>
                    @endif
                @endforeach
            </ol>
            <div class="contributors-back-to-top-link">
                <a href="#top">Back to top</a>
            </div>
        </div>
    </section>
@stop
