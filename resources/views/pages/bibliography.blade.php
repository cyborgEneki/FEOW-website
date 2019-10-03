@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background dark-background-max-height">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/fishing-1.jpeg') }}" class="half-opacity banner-max-height">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore">
                            Bibliography
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section custom-section-padded">
        <div class="body-padding">

        </div>
    </section>
@stop
