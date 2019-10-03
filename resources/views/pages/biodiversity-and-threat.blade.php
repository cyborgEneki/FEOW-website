@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background dark-background-max-height">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/pond-1.jpeg') }}" class="half-opacity banner-max-height">
                    <figcaption class="flex-caption">
                        <p class="super animated fadeinup delayedmore">
                            {{ $type }}
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section section-padded">
        <div class="biodiversity-image-container">
            @foreach($maps->chunk(2) as $chunk)
                <div class="row">
                    @foreach($chunk as $map)
                        <div class="col-md-6">
                            <a href="{{ route('biodiversity-threat-subpage', ['type' => $map->maptype, 'ident' => $map->ident]) }}">
                                <img alt="{{ $map->title }}"
                                     src="{{ url('/img/assets/feow/'. $map->source ) }}"
                                     class="flex-image">
                                <p class="text-center neg-margin-top-20">{{ $map->title }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@stop
