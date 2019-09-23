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
    <script src="{{ asset('/js/PIE.js') }}"></script>
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
<body id="body-formatting">
<div class="wrapper">

    @include('partials.header')

    <div id="content" role="main">
        @yield('content')
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
<script src="{{ asset('/js/jquery.form.js') }}" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script>
    // Create an array of styles.
    var styles = [
            {
                stylers: [
                    {saturation: -85}
                ]
            }, {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [
                    {hue: "#002bff"},
                    {visibility: 'simplified'}
                ]
            }, {
                featureType: 'road',
                elementType: 'labels',
                stylers: [
                    {visibility: 'off'}
                ]
            }
        ],
        // put your locations lat and long here
        lat = 51.607,
        lng = -0.12248,

        // Create a new StyledMapType object, passing it the array of styles,
        // as well as the name to be displayed on the map type control.
        styledMap = new google.maps.StyledMapType(styles,
            {name: 'Styled Map'}),

        // Create a map object, and include the MapTypeId to add
        // to the map type control.
        mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: new google.maps.LatLng(lat, lng),
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP]
            }
        },
        map = new google.maps.Map(document.getElementById('map'), mapOptions),
        charlotte = new google.maps.LatLng(lat, lng),

        marker = new google.maps.Marker({
            position: charlotte,
            map: map,
            title: "Hello World!"
        });

    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
</script>
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
