@extends('layouts.layout')

@section('content')
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background dark-background-max-height">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/mountain-1.jpeg') }}" class="half-opacity banner-max-height">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore">
                            Want To Talk?
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <section class="section section-padded-contact">
        <div class="ecoregions-container-fluid">
            <div class="row-fluid">
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success text-center">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form action="{{ url('/contact') }} " method="POST">
                        {{ csrf_field() }}
                        <div class="controls controls-row">
                            <div class="control-group span6">
                                <input class="span12 contact-form-input" name="name" placeholder="Your name"
                                       type="text" value="{{ old('name') }}">
                            </div>
                            <div class="control-group span6">
                                <input class="span12 contact-form-input" name="email" placeholder="Your email"
                                       type="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="controls controls-row">
                            <div class="control-group span12">
                                <input class="span12 contact-form-input" name="subject" placeholder="Subject"
                                       type="text" value="{{ old('subject') }}">
                            </div>
                        </div>
                        <div class="controls controls-row">
                            <div class="control-group span12">
                                <textarea class="span12 contact-form-input" name="message"
                                          placeholder="I want to talk about... " rows="5"
                                          value="{{ old('message') }}"></textarea>
                            </div>
                        </div>
                        <div class="controls controls-row">
                            <div class="control-group span12">
                                <button class="contact-button" name="submitButton" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                    <div id="messages"></div>
                </div>
            </div>
        </div>
    </section>
@stop
