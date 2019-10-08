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
