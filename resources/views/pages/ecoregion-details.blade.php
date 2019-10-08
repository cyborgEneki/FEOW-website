@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background dark-background-max-height">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/bird-2.jpeg') }}" class="half-opacity banner-max-height">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore" id="subpage-text">
                            {{ $references->id }}: {{ $references->eco_name }}
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section custom-section-padded">
        <div class="body-padding">
            @if($references->Author != null)
                <p><strong>Author</strong></p>
                {!! $references->Author !!}
            @endif

            <div class="card">
                <div class="card-header">
                    Description
                </div>
                <div class="padding-20">
                    @if($references->mht != null)
                        <p><strong>Major Habitat Type</strong></p>
                        {{ $references->mht }}
                    @endif

                    <p><strong>Countries</strong></p>

                    @if($references->boundaries != null)
                        <p><strong>Boundaries</strong></p>
                        {!! $references->boundaries !!}
                    @endif

                    @if($references->drainages != null)
                        <p><strong>Drainages flowing into</strong></p>
                        {!! $references->drainages !!}
                    @endif

                    @if($references->main_rivers != null)
                        <p><strong>Main rivers to other water bodies</strong></p>
                        {!! $references->main_rivers !!}
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

            <div class="card">
                <div class="card-header">
                    References
                </div>
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
    </section>
@stop
