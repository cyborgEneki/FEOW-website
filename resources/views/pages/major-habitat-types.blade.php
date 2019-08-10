<!DOCTYPE html>
<!--[if IE 8 ]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if (gt IE 8)]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title></title>
    <meta content="Bootsrap based theme" name="description">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="javascripts/PIE.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('/img/favicon.ico') }}" rel="shortcut icon">
    <link href="{{ asset('/img/apple-touch-icon-144x144-precomposed.png') }}" rel="apple-touch-icon-precomposed"
          sizes="144x144">
    <link href="{{ asset('/img/apple-touch-icon-114x114-precomposed.png') }}" rel="apple-touch-icon-precomposed"
          sizes="114x114">
    <link href="{{ asset('/img/apple-touch-icon-72x72-precomposed.png') }}" rel="apple-touch-icon-precomposed"
          sizes="72x72">
    <link href="{{ asset('/img/apple-touch-icon-57x57-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('/css/bootstrap.css') }}" media="screen" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/responsive.css') }}" media="screen" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/font-awesome-all.css') }}" media="screen" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/fancybox.css') }}" media="screen" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/theme.css') }}" media="screen" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/fonts.css') }}" media="screen" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="wrapper">

    @include('partials.header')

    @yield('content')

    <div id="content" role="main">
        {{--Banner--}}
        <section class="section section-alt">
            <div class="row-fluid">
                <div class="super-hero-unit">
                    <figure class="dark-background">
                        <img alt="river meandering through a shallow valley"
                             src="{{ asset('/img/assets/feow/river-1.jpeg') }}" class="half-opacity">
                        <figcaption class="flex-caption">
                            <h1 class="super animated fadeinup delayedmore">
                                Major Habitat Types
                            </h1>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
        {{--Main Content--}}
        <section class="section section-padded">
            <div class="container-fluid">
                <p class="lead text-left">
                    The freshwater Major Habitat Types (MHTs) reflect groupings of ecoregions with similar biological,
                    chemical, and physical characteristics and are roughly equivalent to biomes for terrestrial systems.
                    The MHTs refer to the dynamics of ecological systems and the broad habitat structures that define
                    them, and these groupings can provide a structured framework for examining and comparing the
                    diversity of life in freshwater systems. Because of the large scale of ecoregions, all contain
                    patches of multiple habitat types. For instance, ecoregions in the large lakes habitat type can
                    contain swamps, floodplains, and grassy savannas in addition to the dominant lake habitat. Smaller
                    habitats cannot be mapped at the scale of the ecoregion map, but such habitat diversity contributes
                    to species and ecosysem process diversity within ecoregions. For instance, globally 99% of lakes and
                    ponds are less than 10 hectares in area.
                    <br>
                    <br>
                    <em></em> Large Lakes</em> are freshwater ecoregions that are dominated and defined by large lentic systems.
                    Freshwater ecosystems in these ecoregions may include in-flowing and out-flowing rivers and various
                    peripheral wetlands in addition to the lakes themselves. This MHT includes large tropical,
                    temperate, and polar lakes, as well as Inland Seas included in this analysis (Aral and Caspian).
                    Examples include Lake Baikal in Siberia, Lake Malawi in Africa, or Michigan-Huron in North America.
                    <br>
                    <br>
                    <em>Large River Deltas</em> are freshwater ecoregions that are dominated and defined by deltaic features
                    (e.g., tidal influences) and their associated fish faunas, which are distinctive from those
                    occurring upstream. Examples include the Niger River Delta ecoregion and the Mekong River Delta
                    ecoregion. Ecoregions containing deltas but not defined by specific deltaic fauna, such as the Lower
                    Mississippi ecoregion, are not considered Large River Delta ecoregions.
                    <br>
                    <br>
                    <em>Montane Freshwaters</em> are freshwater ecoregions comprised of small streams, rivers, lakes or wetlands
                    at higher elevations, regardless of latitude. These ecoregions include either high gradient,
                    relatively shallow, fast-flowing streams, with rapids or complexes of high-altitude wetlands and
                    lakes, and montane climatic conditions. Examples include Mount Nimba and Western Equatorial Crater
                    Lakes in Africa and Orinoco Piedmont and Andes Mountains in South America.
                    <br>
                    <br>
                    <em>Xeric Freshwaters and Endorheic (Closed) Basins</em> are freshwater ecoregions dominated by endorheic
                    aquatic systems or freshwaters that are found in arid, semi-arid, or dry sub-humid environments.
                    These ecosystems tend to have specific fauna adapted to ephemeral and intermittent flooding regimes
                    or lower waters levels during certain times of the year. Examples include the lower Nile River, or
                    the Death Valley ecoregion in the US.
                    <br>
                    <br>
                    <em>Temperate Coastal Rivers</em> are freshwater ecoregions dominated by several small to medium coastal
                    basins in mid-latitudes (temperate). These ecoregions are characterized by riverine ecosystems, but
                    may also contain small lakes, coastal lagoons, and other wetlands. Migratory species that spend part
                    of their life cycles within marine environments may inhabit these ecoregions. Although floodplains
                    may occur along rivers within this MHT, the dominant features are numerous, small to medium-sized
                    basins that drain to the ocean,, instead of one large river predominating with an extensive fringing
                    floodplain.. This MHT also encompasses island ecoregions with these characteristics. Examples
                    include the North Pacific Coastal and South Atlantic ecoregions in North America.
                    <br>
                    <br>
                    <em>Temperate Upland Rivers</em> are freshwater ecoregions that are dominated and defined by mid-latitude
                    non-floodplain rivers, including headwater drainages and tributaries of large river systems. These
                    rivers are characterized by moderate gradients and the absence of a cyclically flooded, fringing
                    floodplain. Examples include the Ozark Highlands and Ouachita Highlands in North America.
                    <br>
                    <br>
                    <em>Temperate Floodplain Rivers and Wetland Complexes</em> are freshwater ecoregions that are dominated by a
                    single mid-latitude large river system, including the main stem river drainage and associated
                    sub-basins, which are either currently or were historically characterized by a cyclically flooded,
                    fringing floodplain. These ecoregions may also contain wetland complexes composed of internal
                    deltas, marshes, and/or swamps, associated with the main river system. Examples include the
                    Mississippi and Middle Missouri Rivers.
                    <br>
                    <br>
                    <em>Tropical and Subtropical Coastal Rivers</em> are freshwater ecoregions dominated by several small to
                    medium coastal basins at low-latitudes (tropics). These ecoregions are characterized by riverine
                    ecosystems but may also contain small lakes, coastal lagoons, and other wetlands. Although
                    floodplains may occur along rivers within this MHT, the dominant features are numerous, small to
                    medium-sized basins that drain to the ocean, instead of one large river predominating with an
                    extensive fringing floodplain. This MHT also encompasses island ecoregions with these
                    characteristics. Examples include Kenyan Coastal Rivers and Mata Atlantica.
                    <br>
                    <br>
                    <em>Tropical and Subtropical Upland Rivers</em> are freshwater ecoregions that are dominated and defined by
                    low-latitude non-floodplain rivers, including headwater drainages and tributaries of large river
                    systems. These rivers are characterized by moderate gradients and absence of a cyclically flooded,
                    fringing floodplain. Examples include the Zambezian Headwaters, Upper Niger, and the Brazilian
                    Shield.
                    <br>
                    <br>
                    <em>Tropical and Subtropical Floodplain Rivers and Wetland Complexes</em> are freshwater ecoregions that are
                    dominated by a single low-latitude large river system, including the main stem river drainage and
                    associated sub-basins, which are either currently or were historically characterized by a cyclically
                    flooded, fringing floodplain. These ecoregions may also contain wetland complexes composed of
                    internal deltas, marshes, and/or swamps, associated with the main river system. Examples include the
                    Lower Congo, Cuvette Central, Lower Niger-Benue, Amazonas Lowland, and Orinoco-Llanos.
                    <br>
                    <br>
                    <em>Polar Freshwaters</em> are freshwater ecoregions comprising entire drainages; from the headwaters to
                    mouth, and found in high latitudes. Examples include the Lena River in Siberia and the Yukon in
                    Alaska.
                    <br>
                    <br>
                    <em>Oceanic Islands</em> are freshwater ecoregions comprised of one or more islands completely surrounded by
                    water, above high tide, and isolated from other significant landmasses. These ecoregions are
                    characterized by freshwater biotas derived from marine ancestors. Examples include Fiji and the
                    Hawaiian Islands.
                </p>
            </div>
        </section>
    </div>

</div>

@include('partials.footer')

<script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.tweet.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.fancybox-media.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/script.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    if (typeof gaJsHost == 'undefined') {
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    }
</script>
<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("#########");
        pageTracker._trackPageview();
    } catch (err) {
    }</script>
</body>
