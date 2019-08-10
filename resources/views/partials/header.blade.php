<!-- Page Header -->

<header id="masthead">
    <nav class="navbar navbar-static-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <h1 class="brand">
                    <a href="/">
                        FE<span class="light">OW</span></a>
                </h1>
                {{--                    <div class="nav-collapse collapse">--}}
                <div>
                    <ul class="nav pull-right">
                        <li class=""><a href="{{ url('/') }}">Home</a></li>
                        <li class=""><a href="{{ url('/background') }}">Background</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Global Maps</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/global-maps/major-habitat-types') }}">Major Habitat Types</a>
                                </li>
                                <li>
                                    <a href="{{ url('/global-maps/biodiversity') }}">Biodiversity</a>
                                </li>
                                <li>
                                    <a href="{{ url('/global-maps/threat') }}">Threat</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ecoregions</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/ecoregions/interactive-map') }}">Interactive Map</a>
                                </li>
                                <li>
                                    <a href="{{ url('/ecoregions/browse') }}">Browse</a>
                                </li>
                                <li>
                                    <a href="{{ url('/ecoregions/search') }}">Search</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""><a href="{{ url('/downloads') }}">Downloads</a></li>
                        <li class=""><a href="{{ url('/contributors') }}">Contributors</a></li>
                        <li class=""><a href="{{ url('/bibliography') }}">Bibliography</a></li>
                        <li class=""><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>


