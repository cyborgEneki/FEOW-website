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
                             src="{{ asset('/img/assets/feow/bird-1.jpeg') }}" class="half-opacity">
                        <figcaption class="flex-caption">
                            <h1 class="super animated fadeinup delayedmore">
                                Background
                            </h1>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
        {{--Main Content--}}
        <section class="section section-padded">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span3">
                        <div>
                            <img alt="some image" class="img-circle section-image"
                                 src="{{ asset('/img/assets/feow/landscape-1024x434.jpeg') }}">
                        </div>
                    </div>
                    <div class="span9">
                        <blockquote>
                            <p class="lead">
                                {{--Main Content--}}
                                Freshwater species and habitats are, on average around the world, more imperiled than
                                their terrestrial counterparts. Yet, large-scale conservation planning efforts have
                                rarely targeted freshwater biodiversity. This inattention is due in part to the fact
                                that, compared to better-studied terrestrial taxa, there has been a severe lack of
                                comprehensive, synthesized data on the distributions of freshwater species. Existing
                                worldwide species-level data have covered only the largest river basins or select
                                hotspots, rather than all inland waters. Additionally, these data syntheses have made
                                little attempt to describe biogeographic patterns. Freshwater Ecoregions of the World
                                (FEOW) is a collaborative project providing the first global biogeographic
                                regionalization of the Earth’s freshwater biodiversity, and synthesizing biodiversity
                                and threat data for the resulting ecoregions. We define a freshwater ecoregion as a
                                large area encompassing one or more freshwater systems that contains a distinct
                                assemblage of natural freshwater communities and species. The freshwater species,
                                dynamics, and environmental conditions within a given ecoregion are more similar to each
                                other than to those of surrounding ecoregions and together form a conservation unit. The
                                freshwater ecoregion map serves as a complement to the global terrestrial and marine
                                ecoregion maps and differs from them in that freshwater species (primarily fish) and
                                freshwater processes drove the map delineation. A detailed description of the
                                delineation methodology is available in Abell et al. (2008) (click here to download; 6
                                MB).
                            </p>
                        </blockquote>
                    </div>
                </div>
                <div class="section-header">
                    <h1>
                        The
                        <small class="light">Map</small>
                    </h1>
                </div>
                <div class="row-fluid">
                    <div class="span9">
                        <blockquote class="pull-right">
                            <p class="lead">
                                The freshwater ecoregion map encompasses 426 units, whose boundaries generally – though
                                not always – correspond with those of watersheds (also known as drainage basins or
                                catchments). Within individual ecoregions there will be turnover of species, such as
                                when moving up or down a river system, but taken as a whole an ecoregion will typically
                                have a distinct evolutionary history and/or ecological processes. Ecoregions are
                                delineated based on the best available information, but data describing freshwater
                                species and ecological processes are characterized by marked gaps and variation in
                                quality, and improved information in the future may warrant map revisions.
                            </p>
                        </blockquote>
                    </div>
                    <div class="span3">
                        <div>
                            <img alt="some image" class="img-circle section-image"
                                 src="{{ asset('/img/assets/feow/landscape-1024x434.jpeg') }}">
                        </div>
                    </div>
                </div>
                <div class="section-header">
                    <h1>
                        Ecoregional
                        <small class="light">Data</small>
                    </h1>
                </div>
                <div class="row-fluid">
                    <div class="span3">
                        <div>
                            <img alt="some image" class="img-circle section-image"
                                 src="{{ asset('/img/assets/feow/landscape-1024x434.jpeg') }}">
                        </div>
                    </div>
                    <div class="span9">
                        <blockquote>
                            <p class="lead">
                                {{--Main Content--}}
                                The biodiversity data synthesized for ecoregions include richness and endemism numbers
                                for freshwater fish, amphibians, turtles, and crocodiles, derived in nearly all cases
                                from either species lists or digital distribution data. Additional information about
                                species will be found within the individual ecoregion descriptions, which also will
                                include details on ecoregion boundaries, topography, climate, habitats, ecological and
                                evolutionary phenomena, and other features. Threat analyses include examination of land
                                cover conversion, the presence of large cities, urban land cover, area equipped for
                                irrigation, human footprint, and water stress. These analyses are based on global
                                datasets and examine threats through the lens of freshwater systems and species.
                            </p>
                        </blockquote>
                    </div>
                </div>
                <div class="section-header">
                    <h1>
                        Conservation
                        <small class="light">Applications</small>
                    </h1>
                </div>
                <div class="row-fluid">
                    <div class="span9">
                        <blockquote class="pull-right">
                            <p class="lead">
                                The freshwater ecoregion map encompasses 426 units, whose boundaries generally – though
                                not always – correspond with those of watersheds (also known as drainage basins or
                                catchments). Within individual ecoregions there will be turnover of species, such as
                                when moving up or down a river system, but taken as a whole an ecoregion will typically
                                have a distinct evolutionary history and/or ecological processes. Ecoregions are
                                delineated based on the best available information, but data describing freshwater
                                species and ecological processes are characterized by marked gaps and variation in
                                quality, and improved information in the future may warrant map revisions.
                            </p>
                        </blockquote>
                    </div>
                    <div class="span3">
                        <div>
                            <img alt="some image" class="img-circle section-image"
                                 src="{{ asset('/img/assets/feow/landscape-1024x434.jpeg') }}">
                        </div>
                    </div>
                </div>
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
