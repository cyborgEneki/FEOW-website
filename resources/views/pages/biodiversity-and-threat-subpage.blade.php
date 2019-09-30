@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background dark-background-max-height">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/mountain-1.jpeg') }}" class="half-opacity banner-max-height">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore" id="subpage-text">
                            {{ $subpage->title }}
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section custom-section-padded">
        <div class="body-padding">
            <div class="main-page-image">
                <img src="{{ asset('/img/assets/feow/'.$subpage->source ) }}" alt="{{ $subpage->title }}" class="flex-image">
            </div>
            <p class="body-text">
                {{ $subpage->subpage }}
            </p>
        </div>
    </section>
@stop
