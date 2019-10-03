@extends('layouts.layout')

@section('content')
    <div id="content" role="main">
        <!-- Promo Section -->
        <section class="section section-alt">
            <div class="row-fluid">
                <div class="super-hero-unit">
                    <figure>
                        <img alt="some image" src="{{ asset('/img/assets/feow/fishing-1.jpeg') }}">
                        <figcaption class="flex-caption">
                            <h1 class="hyper animated fadeinup delayed">
                                404
                            </h1>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <!-- 404 content -->
        <section class="section section-padded">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>
                        OOPS
                        <small class="light">Page not found</small>
                    </h1>
                </div>
                <p class="lead text-center">
                    The page you requested could not be found.
                </p>
                <div class="text-center">
                    <a class="btn btn-primary btn-large pull-center">
                        <i class="icon-home"></i>
                        Go Back Home
                    </a>
                </div>
            </div>
        </section>
    </div>
@stop
