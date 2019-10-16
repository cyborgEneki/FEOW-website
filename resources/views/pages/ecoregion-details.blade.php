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
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css">
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
    <link rel="stylesheet" href="https://js.arcgis.com/4.12/esri/themes/light/main.css">
</head>
<body id="body-formatting">
<div class="wrapper">

    @include('partials.header')
    <div id="content" role="main">
        <section class="section custom-section-padded">
            <div class="body-padding body-text">
                <p class="ecoregions-details-heading"><strong>{{ $references->eco_name }}</strong></p>
                <div id="viewDiv" style="height: 400px"></div>
                <br>
                <div class="card hidden">
                    <div class="card-header">
                        <p class="ecoregions-details-heading"><strong>Biodiversity</strong></p>
                    </div>
                    <div style="height: 300px; background-color: aliceblue;"></div>
                </div>
                <br>
                <div class="container max-width-1180">
                    <div class="row margin-left-0">
                        <div class="col-sm-6">
                            <p class="ecoregions-details-heading"><strong>ID</strong></p>
                            <hr>
                            {{ $references->id }}
                            <br><br>
                            @if($references->author != null)
                                <p class="ecoregions-details-heading"><strong>Author(s)</strong></p>
                                <hr>
                                {!! $references->author !!}
                                <br>
                            @endif
                            @if($references->countries != null)
                                <p class="ecoregions-details-heading"><strong>Countries</strong></p>
                                <hr>
                                @foreach($references->countries as $country)
                                    {!! $country->country !!}
                                    <br>
                                @endforeach
                                <br>
                            @endif
                            @if($references->reviewers != null)
                                <p class="ecoregions-details-heading"><strong>Reviewer(s)</strong></p>
                                <hr>
                                {!! $references->reviewers !!}
                                <br>
                            @endif
                        </div>

                        <div class="col-sm-6">
                            @if($references->mht != null)
                                <p class="ecoregions-details-heading"><strong>Major Habitat Type</strong></p>
                                <hr>
                                {{ $references->present()->getMajorHabitatType }}
                                <br><br>
                            @endif
                            @if($references->drainages != null)
                                <p class="ecoregions-details-heading"><strong>Drainages flowing into</strong></p>
                                <hr>
                                {!! $references->drainages !!}
                                <br>
                            @endif
                            @if($references->main_rivers != null)
                                <p class="ecoregions-details-heading"><strong>Main rivers to other water bodies</strong>
                                </p>
                                <hr>
                                {!! $references->main_rivers !!}
                                <br><br>
                            @endif
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <p class="ecoregions-details-heading"><strong>Description</strong></p>
                        </div>
                        <div style="background-color: aliceblue; padding: 20px">
                            @if($references->boundaries != null)
                                <p><strong>Boundaries</strong></p>
                                {!! $references->boundaries !!}
                            @endif

                            @if($references->topography != null)
                                <p><strong>Topography</strong></p>
                                {!! $references->topography !!}
                            @endif

                            @if($references->fw_habitats != null)
                                <p><strong>Freshwater habitats</strong></p>
                                {!! $references->fw_habitats !!}
                            @endif

                            @if($references->terr_habitats != null)
                                <p><strong>Terrestrial habitats</strong></p>
                                {!! $references->terr_habitats !!}
                            @endif

                            @if($references->fist_fauna != null)
                                <p><strong>Fish Fauna</strong></p>
                                {!! $references->fist_fauna !!}
                            @endif

                            @if($references->end_fishes != null)
                                <p><strong>Description of endemic fishes</strong></p>
                                {!! $references->end_fishes !!}
                            @endif

                            @if($references->note_fishes != null)
                                <p><strong>Other noteworthy fishes</strong></p>
                                {!! $references->note_fishes !!}
                            @endif

                            @if($references->eco_phenomena != null)
                                <p><strong>Ecological phenomena</strong></p>
                                {!! $references->eco_phenomena !!}
                            @endif

                            @if($references->justification != null)
                                <p><strong>Justification for delineation</strong></p>
                                {!! $references->justification !!}
                            @endif

                            @if($references->tax_exp != null)
                                <p><strong>Level of taxonomic exploration</strong></p>
                                {!! $references->tax_exp !!}
                            @endif
                        </div>
                    </div>
                    <br>
                    <div class="card ecoregions-references-card">
                        <div class="card-header">
                            <p class="ecoregions-details-heading"><strong>References</strong></p>
                        </div>
                        <div style="background-color: aliceblue; padding: 20px">
                            <ul class="no-list-style">
                                @foreach($references->references as $reference)
                                    <li>
                                        @if($reference->Reftype == "Journal Article")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }}).
                                            @endif
                                            @if($reference->Title != null)
                                                "{{ $reference->Title }}"
                                            @endif
                                            @if($reference->Secondary_Title != null)
                                                <u>{{ $reference->Secondary_Title }}</u>
                                            @endif
                                            @if($reference->Volume != null)
                                                <b>{{ $reference->Volume }}</b>
                                            @endif
                                            @if($reference->Number != null)
                                                ({{ $reference->Number }})
                                            @endif
                                            @if($reference->Pages != null)
                                                pp. {{ $reference->Pages }}.
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Book")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }}).
                                            @endif
                                            @if($reference->Title != null)
                                                "{{ $reference->Title }}"
                                            @endif
                                            @if($reference->Edition != null)
                                                <u>{{ $reference->Edition }}</u>
                                            @endif
                                            @if($reference->Volume != null)
                                                <b>{{ $reference->Volume }}</b>
                                            @endif
                                            @if($reference->Place_Published != null)
                                                {{ $reference->Place_Published }}:
                                            @endif
                                            @if($reference->Publisher != null)
                                                {{ $reference->Publisher }}.
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Book Section")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }}).
                                            @endif
                                            @if($reference->Title != null)
                                                "{{ $reference->Title }}"
                                            @endif
                                            @if($reference->Secondary_Author != null)
                                                {{ $reference->Secondary_Author }} (Ed.)
                                            @endif
                                            @if($reference->Secondary_Title != null)
                                                <u>{{ $reference->Secondary_Title }}</u>
                                            @endif
                                            @if($reference->Volume != null || $reference->Pages != null)
                                                (
                                            @endif
                                            @if($reference->Volume != null)
                                                (Vol. {{ $reference->Volume }},
                                            @endif
                                            @if($reference->Pages != null)
                                                pp. {{ $reference->Pages }}
                                            @endif
                                            @if($reference->Volume != null || $reference->Pages != null)
                                                )
                                            @endif
                                            @if($reference->Place_Published != null)
                                                {{ $reference->Place_Published }}:
                                            @endif
                                            @if($reference->Publisher != null)
                                                {{ $reference->Publisher }}.
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Government Document")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }}).
                                            @endif
                                            @if($reference->Title != null)
                                                "{{ $reference->Title }}"
                                            @endif
                                            @if($reference->Edition != null)
                                                "{{ $reference->Edition }}"
                                            @endif
                                            @if($reference->Volume != null)
                                                {{ $reference->Volume }}
                                            @endif
                                            @if($reference->Place_Published != null)
                                                {{ $reference->Place_Published }}:
                                            @endif
                                            @if($reference->Publisher != null)
                                                {{ $reference->Publisher }}.
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Conference Proceedings")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }}).
                                            @endif
                                            @if($reference->Title != null)
                                                "{{ $reference->Title }}"
                                            @endif
                                            @if($reference->Secondary_Title != null)
                                                Paper presented at the {{ $reference->Secondary_Title }}
                                            @endif
                                            @if($reference->Place_Published != null)
                                                , {{ $reference->Place_Published }}.
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Conference Paper")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }}).
                                            @endif
                                            @if($reference->Title != null)
                                                "{{ $reference->Title }}"
                                            @endif
                                            @if($reference->Secondary_Title != null)
                                                Paper presented at the {{ $reference->Secondary_Title }}
                                            @endif
                                            @if($reference->Place_Published != null)
                                                , {{ $reference->Place_Published }}.
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Thesis")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }}).
                                            @endif
                                            @if($reference->Title != null)
                                                "{{ $reference->Title }}"
                                            @endif
                                            @if($reference->Type_of_Work != null)
                                                Unpublished {{ $reference->Type_of_Work }}.
                                            @else Unpublished Thesis.
                                            @endif
                                            @if($reference->Secondary_Title != null)
                                                {{ $reference->Secondary_Title }}
                                            @endif
                                            @if($reference->Publisher != null)
                                                {{ $reference->Publisher }}
                                            @endif
                                            @if($reference->Place_Published != null)
                                                : {{ $reference->Place_Published }}
                                            @else .
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Electronic Source")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }}).
                                            @endif
                                            @if($reference->Title != null)
                                                \{{ $reference->Title }}\
                                            @endif
                                            @if($reference->Edition != null)
                                                ({{ $reference->Edition }})
                                            @endif
                                            @if($reference->URL != null)
                                                "&lt;"{{ $reference->URL }}"&gt;"
                                            @endif
                                            @if($reference->Number != null)
                                                ({{ $reference->Number }})
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Web Page")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }})
                                            @endif
                                            @if($reference->Title != null)
                                                \{{ $reference->Title }}\
                                            @endif
                                            @if($reference->Edition != null)
                                                ({{ $reference->Edition }})
                                            @endif
                                            @if($reference->URL != null)
                                                "&lt;"{{ $reference->URL }}"&gt;"
                                            @endif
                                            @if($reference->Number != null)
                                                ({{ $reference->Number }})
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Report")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }})
                                            @endif
                                            @if($reference->Title != null)
                                                \{{ $reference->Title }}\
                                            @endif
                                            @if($reference->Edition != null)
                                                ({{ $reference->Edition }})
                                            @endif
                                            @if($reference->URL != null)
                                                "&lt;"{{ $reference->URL }}"&gt;"
                                            @endif
                                            @if($reference->Number != null)
                                                ({{ $reference->Number }})
                                            @endif
                                            @if($reference->Place_Published != null)
                                                {{ $reference->Place_Published }}.
                                            @endif
                                            @if($reference->Publisher != null)
                                                {{ $reference->Publisher }}.
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Edited Book")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }})
                                            @endif
                                            @if($reference->Title != null)
                                                {{ $reference->Title }}
                                            @endif
                                            @if($reference->Edition != null)
                                                {{ $reference->Edition }}.
                                            @endif
                                            @if($reference->Volume != null)
                                                <b>{{ $reference->Volume }}</b>>
                                            @endif
                                            @if($reference->Publisher != null)
                                                {{ $reference->Publisher }}
                                            @endif
                                            @if($reference->Place_Published != null)
                                                : {{ $reference->Place_Published }}
                                            @else .
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Audiovisual Material")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }})
                                            @endif
                                            @if($reference->Title != null)
                                                {{ $reference->Title }}
                                            @endif
                                            @if($reference->Edition != null)
                                                {{ $reference->Edition }}.
                                            @endif
                                            @if($reference->Volume != null)
                                                <b>{{ $reference->Volume }}</b>>
                                            @endif
                                            @if($reference->Publisher != null)
                                                {{ $reference->Publisher }}
                                            @endif
                                            @if($reference->Place_Published != null)
                                                : {{ $reference->Place_Published }}
                                            @else .
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Computer Program")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }})
                                            @endif
                                            @if($reference->Title != null)
                                                {{ $reference->Title }}
                                            @endif
                                            @if($reference->Volume != null)
                                                <b>{{ $reference->Volume }}</b>>
                                            @endif
                                            @if($reference->Place_Published != null)
                                                {{ $reference->Place_Published }}:
                                            @endif
                                            @if($reference->Publisher != null)
                                                {{ $reference->Publisher }}.
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Generic")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }})
                                            @endif
                                            @if($reference->Title != null)
                                                \{{ $reference->Title }}\
                                            @endif
                                            @if($reference->Secondary_Author != null)
                                                In {{ $reference->Secondary_Author }} (Ed.),
                                            @endif
                                            @if($reference->Secondary_Title != null)
                                                <u>{{ $reference->Secondary_Title }}</u>>
                                            @endif
                                            @if($reference->Volume != null)
                                                <b>{{ $reference->Volume }}</b>>
                                            @endif
                                            @if($reference->Pages != null)
                                                pp. {{ $reference->Pages }}.
                                            @endif
                                            @if($reference->Place_Published != null)
                                                {{ $reference->Place_Published }}:
                                            @endif
                                            @if($reference->Publisher != null)
                                                {{ $reference->Publisher }}.
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Magazine Article")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }})
                                            @endif
                                            @if($reference->Title != null)
                                                \{{ $reference->Title }}\
                                            @endif
                                            @if($reference->Secondary_Author != null)
                                                In {{ $reference->Secondary_Author }} (Ed.),
                                            @endif
                                            @if($reference->Secondary_Title != null)
                                                <u>{{ $reference->Secondary_Title }}</u>>
                                            @endif
                                            @if($reference->Volume != null)
                                                <b>{{ $reference->Volume }}</b>>
                                            @endif
                                            @if($reference->Pages != null)
                                                pp. {{ $reference->Pages }}.
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Map")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }})
                                            @endif
                                            @if($reference->Title != null)
                                                \{{ $reference->Title }}\
                                            @endif
                                            @if($reference->Secondary_Author != null)
                                                In {{ $reference->Secondary_Author }} (Ed.),
                                            @endif
                                            @if($reference->Secondary_Title != null)
                                                <u>{{ $reference->Secondary_Title }}</u>>
                                            @endif
                                            @if($reference->Edition != null)
                                                <b>{{ $reference->Edition }}</b>>
                                            @endif
                                            @if($reference->Volume != null)
                                                <b>{{ $reference->Volume }}</b>
                                            @endif
                                            @if($reference->Pages != null)
                                                pp. {{ $reference->Pages }}.
                                            @endif
                                            @if($reference->Place_Published != null)
                                                {{ $reference->Place_Published }}:
                                            @endif
                                            @if($reference->Publisher != null)
                                                {{ $reference->Publisher }}.
                                            @endif
                                        @endif

                                        @if($reference->Reftype == "Unpublished Work")
                                            @if($reference->Author != null)
                                                {{ $reference->Author }}
                                            @else "_____"
                                            @endif
                                            @if($reference->Year != null)
                                                ({{ $reference->Year }})
                                            @endif
                                            @if($reference->Title != null)
                                                \{{ $reference->Title }}\
                                            @endif
                                            @if($reference->Secondary_Author != null)
                                                In {{ $reference->Secondary_Author }} (Ed.),
                                            @endif
                                            @if($reference->Secondary_Title != null)
                                                <u>{{ $reference->Secondary_Title }}</u>>
                                            @endif
                                            @if($reference->Edition != null)
                                                <b>{{ $reference->Edition }}</b>>
                                            @endif
                                            @if($reference->Volume != null)
                                                <b>{{ $reference->Volume }}</b>
                                            @endif
                                            @if($reference->Pages != null)
                                                pp. {{ $reference->Pages }}.
                                            @endif
                                            @if($reference->Place_Published != null)
                                                {{ $reference->Place_Published }}:
                                            @endif
                                            @if($reference->Publisher != null)
                                                {{ $reference->Publisher }}.
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>

@include('partials.footer')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
<script src="https://js.arcgis.com/4.13/"></script>
<script>
  require([
    "esri/Map",
    "esri/views/MapView",
    "esri/layers/FeatureLayer",
  ], function (Map, MapView, FeatureLayer) {

    var map = new Map({
      basemap: "topo-vector"
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
    var query = {
      outFields: ["*"],
      returnGeometry: true,
      where: "ECO_ID={{ $references->id }}"
    };
    var symbol = {
      type: "simple-fill",
      color: [ 255,0,0,0],
      style: "solid",
      outline: {
        color: "red",
        width: 2
      }
    };
    feowLayer.queryFeatures(query).then(function(result) {
      var poly = result.features[0];
      poly.symbol = symbol;
      //create a view
      var view = new MapView({
        container: "viewDiv",
        map: map
      });
      view.graphics.add(poly);
      view.extent = poly.geometry.extent.expand(2);
    });
  });
</script>
</body>
