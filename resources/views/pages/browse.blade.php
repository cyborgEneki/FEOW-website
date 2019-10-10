@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/bird-2.jpeg') }}" class="half-opacity">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore">
                            Browse
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section custom-section-padded">
        <div class="body-padding">
            @if (session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Ecoregions
                    @if($searchResults == 'true')<a href="{{ route('ecoregions-list') }}">
                        <button class="float-right btn btn-outline-success my-2 my-sm-0" type="button">Back</button>
                    </a>@endif
                    <form action="{{ route('ecoregions-search') }}" method="POST" class="form-inline float-right">
                        {{ csrf_field() }}
                        <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search"
                               aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table" data-toggle="table">
                        <thead>
                        <tr>
                            <th scope="col" data-field="id" data-sortable="true" data-sort-name="id"
                                data-sort-order="desc">ID
                            </th>
                            <th scope="col" data-field="realmd" data-sortable="true" data-sort-name="realmd"
                                data-sort-order="desc">Realm
                            </th>
                            <th scope="col" data-field="realm" data-sortable="true" data-sort-name="realm"
                                data-sort-order="desc">Major Habitat Type
                            </th>
                            <th scope="col" data-field="eco_name" data-sortable="true" data-sort-name="eco_name"
                                data-sort-order="desc">Ecoregion
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ecoregions as $ecoregion)
                            <tr>
                                <td>{{ $ecoregion->id }}</td>
                                <td>{{ $ecoregion->realmd }}</td>
                                <td>{{ $ecoregion->present()->getMajorHabitatType }}</td>
                                <td>
                                    <a href="{{ route('ecoregion-details', ['id' => $ecoregion->id]) }}">
                                        {{ $ecoregion->eco_name }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="center-block-content">{{ $ecoregions->links() }}</div>
                </div>
            </div>
        </div>
    </section>
@stop
