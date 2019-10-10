@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background dark-background-max-height">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/pond-2.jpeg') }}" class="half-opacity banner-max-height">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore">
                            Downloads
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section custom-section-padded">
        <div class="body-padding body-text">
            @foreach ($downloads as $download)
                <p><strong>{{ $download->title }}<a href="{{ asset('/img/assets/feow/'.$download->link) }}" download><i class="fas fa-cloud-download-alt"></i></a></strong></p>
                <p>{!! $download->description !!}</p>
                <br>
            @endforeach
        </div>
    </section>
@stop
