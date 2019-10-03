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
            <div>
                <a href="{{ url('/bibliography') }}" class="contributors-in-list-links">All</a>
                <a href="{{ route('wild', ['letter' => 'A']) }}" class="contributors-in-list-links">A</a>
                <a href="{{ route('wild', ['letter' => 'B']) }}" class="contributors-in-list-links">B</a>
                <a href="{{ route('wild', ['letter' => 'C']) }}" class="contributors-in-list-links">C</a>
                <a href="{{ route('wild', ['letter' => 'D']) }}" class="contributors-in-list-links">D</a>
                <a href="{{ route('wild', ['letter' => 'E']) }}" class="contributors-in-list-links">E</a>
                <a href="{{ route('wild', ['letter' => 'F']) }}" class="contributors-in-list-links">F</a>
                <a href="{{ route('wild', ['letter' => 'G']) }}" class="contributors-in-list-links">G</a>
                <a href="{{ route('wild', ['letter' => 'H']) }}" class="contributors-in-list-links">H</a>
                <a href="{{ route('wild', ['letter' => 'I']) }}" class="contributors-in-list-links">I</a>
                <a href="{{ route('wild', ['letter' => 'J']) }}" class="contributors-in-list-links">J</a>
                <a href="{{ route('wild', ['letter' => 'K']) }}" class="contributors-in-list-links">K</a>
                <a href="{{ route('wild', ['letter' => 'L']) }}" class="contributors-in-list-links">L</a>
                <a href="{{ route('wild', ['letter' => 'M']) }}" class="contributors-in-list-links">M</a>
                <a href="{{ route('wild', ['letter' => 'N']) }}" class="contributors-in-list-links">N</a>
                <a href="{{ route('wild', ['letter' => 'O']) }}" class="contributors-in-list-links">O</a>
                <a href="{{ route('wild', ['letter' => 'P']) }}" class="contributors-in-list-links">P</a>
                <a href="{{ route('wild', ['letter' => 'Q']) }}" class="contributors-in-list-links">Q</a>
                <a href="{{ route('wild', ['letter' => 'R']) }}" class="contributors-in-list-links">R</a>
                <a href="{{ route('wild', ['letter' => 'S']) }}" class="contributors-in-list-links">S</a>
                <a href="{{ route('wild', ['letter' => 'T']) }}" class="contributors-in-list-links">T</a>
                <a href="{{ route('wild', ['letter' => 'U']) }}" class="contributors-in-list-links">U</a>
                <a href="{{ route('wild', ['letter' => 'V']) }}" class="contributors-in-list-links">V</a>
                <a href="{{ route('wild', ['letter' => 'W']) }}" class="contributors-in-list-links">W</a>
                <a href="{{ route('wild', ['letter' => 'X']) }}" class="contributors-in-list-links">X</a>
                <a href="{{ route('wild', ['letter' => 'Y']) }}" class="contributors-in-list-links">Y</a>
                <a href="{{ route('wild', ['letter' => 'Z']) }}" class="contributors-in-list-links">Z</a>
            </div>
            <ul class="no-list-style">
                @foreach($bibliography as $each)
                    <li>{{ $each->Author }}</li>
                @endforeach
            </ul>
        </div>
    </section>
@stop
