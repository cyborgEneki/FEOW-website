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
      var btnHtml = '<div class="esri-component esri-widget">';
      btnHtml += '<div id="btnHome" class="esri-widget--button esri-widget esri-interactive" role="button" title="Back to FEOW home page">';
      btnHtml += '<span aria-hidden="true" role="presentation" class="esri-icon esri-icon-home"></span>';
      btnHtml += '<span class="esri-icon-font-fallback-text">Home</span></div></div>';
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
            var theMap = document.getElementsByClassName ("esri-ui-top-left")[0];
            function htmlToElement(html) {
              var template = document.createElement('template');
              html = html.trim();
              template.innerHTML = html;
              return template.content.firstChild;
            }
            theMap.appendChild(htmlToElement(btnHtml));
            document.getElementById('btnHome').onclick=function(){window.location = '/'}
      });
    </script>
</head>
<body>

<div id="viewDiv"></div>
</body>
