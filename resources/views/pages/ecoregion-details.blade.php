@extends('layouts.layout')

@section('content')
    {{--Main Content--}}
    <section class="section custom-section-padded">
        <div class="body-padding">
            <p class="ecoregions-details-heading"><strong>{{ $references->eco_name }}</strong></p>
            <div style="height: 300px; background-color: aliceblue;"></div>
            <br>
            <div class="card">
                <div class="card-header">
                    Biodiversity
                </div>
                <div style="height: 300px; background-color: aliceblue;"></div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <p class="ecoregions-details-heading">ID</p>
                        <hr>
                        {{ $references->id }}
                        <br><br>
                        @if($references->mht != null)
                            <p class="ecoregions-details-heading">Major Habitat Type</p>
                            <hr>
                            {{ $references->present()->getMajorHabitatType }}
                            <br><br>
                        @endif
                        @if($references->countries != null)
                            <p class="ecoregions-details-heading">Countries</p>
                            <hr>
                            @foreach($references->countries as $country)
                                {!! $country->country !!}
                                <br>
                            @endforeach
                            <br>
                        @endif
                        @if($references->author != null)
                            <p class="ecoregions-details-heading">Author(s)</p>
                            <hr>
                            {!! $references->author !!}
                            <br>
                        @endif
                        @if($references->reviewers != null)
                            <p class="ecoregions-details-heading">Reviewer(s)</p>
                            <hr>
                            {!! $references->reviewers !!}
                            <br>
                        @endif
                        <p class="ecoregions-details-heading">References</p>
                        <hr>
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

                    <div class="col-6 offset-1">
                        <table class="table">
                            <tbody>
                            <p class="ecoregions-details-heading">Description</p>
                            @if($references->boundaries != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Boundaries</th>
                                    <td>{!! $references->boundaries !!}</td>
                                </tr>
                            @endif
                            @if($references->drainages != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Drainages flowing into</th>
                                    <td>{!! $references->drainages !!}</td>
                                </tr>
                            @endif
                            @if($references->main_rivers != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Main rivers to other water bodies
                                    </th>
                                    <td>{!! $references->main_rivers !!}</td>
                                </tr>
                            @endif
                            @if($references->topography != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Topography</th>
                                    <td>{!! $references->topography !!}</td>
                                </tr>
                            @endif
                            @if($references->fw_habitats != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Freshwater habitats</th>
                                    <td>{!! $references->fw_habitats !!}</td>
                                </tr>
                            @endif
                            @if($references->terr_habitats != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Terrestrial habitats</th>
                                    <td>{!! $references->terr_habitats !!}</td>
                                </tr>
                            @endif
                            @if($references->fist_fauna != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Fish Fauna</th>
                                    <td>{!! $references->fist_fauna !!}</td>
                                </tr>
                            @endif
                            @if($references->end_fishes != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Description of endemic fishes</th>
                                    <td>{!! $references->end_fishes !!}</td>
                                </tr>
                            @endif
                            @if($references->note_fishes != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Other noteworthy fishes</th>
                                    <td>{!! $references->note_fishes !!}</td>
                                </tr>
                            @endif
                            @if($references->eco_phenomena != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Ecological phenomena</th>
                                    <td>{!! $references->eco_phenomena !!}</td>
                                </tr>
                            @endif
                            @if($references->justification != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Justification for delineation</th>
                                    <td>{!! $references->justification !!}</td>
                                </tr>
                            @endif
                            @if($references->tax_exp != null)
                                <tr>
                                    <th scope="row" class="ecoregions-details-col-1">Level of taxonomic exploration</th>
                                    <td>{!! $references->tax_exp !!}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
