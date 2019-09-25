<!-- Page Header -->
<header id="masthead">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h1 class="logo-styling">
            <a href="/">
                FE<span class="light">OW</span></a>
        </h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse capital-letters" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto mr-zero mt-2 mt-lg-0 nav-font">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/background') }}">Background</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Global Maps
                    </a>
                    <div class="dropdown-menu font-size-1em" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/global-maps/major-habitat-types') }}">Major Habitat
                            Types</a>
                        <a class="dropdown-item" href="{{ url('/global-maps/biodiversity') }}">Biodiversity</a>
                        <a class="dropdown-item" href="{{ url('/global-maps/threat') }}">Threat</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Ecoregions
                    </a>
                    <div class="dropdown-menu font-size-1em" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/ecoregions/interactive-map') }}">Interactive Map</a>
                        <a class="dropdown-item" href="{{ url('/ecoregions/browse') }}">Browse</a>
                        <a class="dropdown-item" href="{{ url('/ecoregions/search') }}">Search</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/downloads') }}">Downloads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contributors') }}">Contributors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/bibliography') }}">Bibliography</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

