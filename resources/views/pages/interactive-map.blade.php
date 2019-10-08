<head>
    <style>
        html, body, #viewDiv {
            padding: 0;
            margin: 0;
            height: 100%;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="https://js.arcgis.com/4.12/esri/themes/light/main.css">
    <script src="https://js.arcgis.com/4.12/"></script>
    <script>
        require([
            "esri/Map",
            "esri/views/MapView",
            "esri/layers/FeatureLayer"
        ], function (Map, MapView, FeatureLayer) {

            var map = new Map({
                basemap: "topo-vector"
            });

            var view = new MapView({
                container: "viewDiv",
                map: map,
                center: [14.20004, 13.23047], // longitude, latitude
                zoom: 3
            });
            var popupEcoregion = {
                "title": "Ecoregion: {ECOREGION}",
                "content": "<b>Ecoregion ID:</b> {ECO_ID}<br><br><a href='/ecoregions/details/{ECO_ID}'>More Details</a>"
            }
            var feowLayer = new FeatureLayer({
                url: "https://maps.wwfus.org/server/rest/services/FEOW/feowhs_011313/MapServer",
                outFields: ["ECOREGION", "ECO_ID"],
                popupTemplate: popupEcoregion
            });
            map.add(feowLayer);
        });
    </script>
</head>
<body>
<div id="viewDiv"></div>
</body>
