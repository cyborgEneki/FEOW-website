@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background dark-background-max-height">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/fishing-1.jpeg') }}" class="half-opacity banner-max-height">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore">
                            Bibliography
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section custom-section-padded">
        <div class="body-padding">
            <div>
                <a href="{{ url('/bibliography') }}" class="contributors-in-list-links">All</a>
                <a href="{{ route('wild', ['letter' => 'A']) }}" class="contributors-in-list-links">A</a>
                <a href="{{ route('wild', ['letter' => 'B']) }}" class="contributors-in-list-links">B</a>
                <a href="{{ route('wild', ['letter' => 'C']) }}" class="contributors-in-list-links">C</a>
                <a href="{{ route('wild', ['letter' => 'D']) }}" class="contributors-in-list-links">D</a>
                <a href="{{ route('wild', ['letter' => 'E']) }}" class="contributors-in-list-links">E</a>
                <a href="{{ route('wild', ['letter' => 'F']) }}" class="contributors-in-list-links">F</a>
                <a href="{{ route('wild', ['letter' => 'G']) }}" class="contributors-in-list-links">G</a>
                <a href="{{ route('wild', ['letter' => 'H']) }}" class="contributors-in-list-links">H</a>
                <a href="{{ route('wild', ['letter' => 'I']) }}" class="contributors-in-list-links">I</a>
                <a href="{{ route('wild', ['letter' => 'J']) }}" class="contributors-in-list-links">J</a>
                <a href="{{ route('wild', ['letter' => 'K']) }}" class="contributors-in-list-links">K</a>
                <a href="{{ route('wild', ['letter' => 'L']) }}" class="contributors-in-list-links">L</a>
                <a href="{{ route('wild', ['letter' => 'M']) }}" class="contributors-in-list-links">M</a>
                <a href="{{ route('wild', ['letter' => 'N']) }}" class="contributors-in-list-links">N</a>
                <a href="{{ route('wild', ['letter' => 'O']) }}" class="contributors-in-list-links">O</a>
                <a href="{{ route('wild', ['letter' => 'P']) }}" class="contributors-in-list-links">P</a>
                <a href="{{ route('wild', ['letter' => 'Q']) }}" class="contributors-in-list-links">Q</a>
                <a href="{{ route('wild', ['letter' => 'R']) }}" class="contributors-in-list-links">R</a>
                <a href="{{ route('wild', ['letter' => 'S']) }}" class="contributors-in-list-links">S</a>
                <a href="{{ route('wild', ['letter' => 'T']) }}" class="contributors-in-list-links">T</a>
                <a href="{{ route('wild', ['letter' => 'U']) }}" class="contributors-in-list-links">U</a>
                <a href="{{ route('wild', ['letter' => 'V']) }}" class="contributors-in-list-links">V</a>
                <a href="{{ route('wild', ['letter' => 'W']) }}" class="contributors-in-list-links">W</a>
                <a href="{{ route('wild', ['letter' => 'X']) }}" class="contributors-in-list-links">X</a>
                <a href="{{ route('wild', ['letter' => 'Y']) }}" class="contributors-in-list-links">Y</a>
                <a href="{{ route('wild', ['letter' => 'Z']) }}" class="contributors-in-list-links">Z</a>
            </div>
            <ul class="no-list-style">
                @foreach($bibliography as $each)
                    <li>
                        @if($each->Reftype == "Journal Article")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }}).
                            @endif
                            @if($each->Title != null)
                                "{{ $each->Title }}"
                            @endif
                            @if($each->Secondary_Title != null)
                                <u>{{ $each->Secondary_Title }}</u>
                            @endif
                            @if($each->Volume != null)
                                <b>{{ $each->Volume }}</b>
                            @endif
                            @if($each->Number != null)
                                ({{ $each->Number }})
                            @endif
                            @if($each->Pages != null)
                                pp. {{ $each->Pages }}.
                            @endif
                        @endif

                        @if($each->Reftype == "Book")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }}).
                            @endif
                            @if($each->Title != null)
                                "{{ $each->Title }}"
                            @endif
                            @if($each->Edition != null)
                                <u>{{ $each->Edition }}</u>
                            @endif
                            @if($each->Volume != null)
                                <b>{{ $each->Volume }}</b>
                            @endif
                            @if($each->Place_Published != null)
                                {{ $each->Place_Published }}:
                            @endif
                            @if($each->Publisher != null)
                                {{ $each->Publisher }}.
                            @endif
                        @endif

                        @if($each->Reftype == "Book Section")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }}).
                            @endif
                            @if($each->Title != null)
                                "{{ $each->Title }}"
                            @endif
                            @if($each->Secondary_Author != null)
                                {{ $each->Secondary_Author }} (Ed.)
                            @endif
                            @if($each->Secondary_Title != null)
                                <u>{{ $each->Secondary_Title }}</u>
                            @endif
                            @if($each->Volume != null || $each->Pages != null)
                                (
                            @endif
                            @if($each->Volume != null)
                                (Vol. {{ $each->Volume }},
                            @endif
                            @if($each->Pages != null)
                                pp. {{ $each->Pages }}
                            @endif
                            @if($each->Volume != null || $each->Pages != null)
                                )
                            @endif
                            @if($each->Place_Published != null)
                                {{ $each->Place_Published }}:
                            @endif
                            @if($each->Publisher != null)
                                {{ $each->Publisher }}.
                            @endif
                        @endif

                        @if($each->Reftype == "Government Document")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }}).
                            @endif
                            @if($each->Title != null)
                                "{{ $each->Title }}"
                            @endif
                            @if($each->Edition != null)
                                "{{ $each->Edition }}"
                            @endif
                            @if($each->Volume != null)
                                {{ $each->Volume }}
                            @endif
                            @if($each->Place_Published != null)
                                {{ $each->Place_Published }}:
                            @endif
                            @if($each->Publisher != null)
                                {{ $each->Publisher }}.
                            @endif
                        @endif

                        @if($each->Reftype == "Conference Proceedings")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }}).
                            @endif
                            @if($each->Title != null)
                                "{{ $each->Title }}"
                            @endif
                            @if($each->Secondary_Title != null)
                                Paper presented at the {{ $each->Secondary_Title }}
                            @endif
                            @if($each->Place_Published != null)
                                , {{ $each->Place_Published }}.
                            @endif
                        @endif

                        @if($each->Reftype == "Conference Paper")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }}).
                            @endif
                            @if($each->Title != null)
                                "{{ $each->Title }}"
                            @endif
                            @if($each->Secondary_Title != null)
                                Paper presented at the {{ $each->Secondary_Title }}
                            @endif
                            @if($each->Place_Published != null)
                                , {{ $each->Place_Published }}.
                            @endif
                        @endif

                        @if($each->Reftype == "Thesis")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }}).
                            @endif
                            @if($each->Title != null)
                                "{{ $each->Title }}"
                            @endif
                            @if($each->Type_of_Work != null)
                                Unpublished {{ $each->Type_of_Work }}.
                            @else Unpublished Thesis.
                            @endif
                            @if($each->Secondary_Title != null)
                                {{ $each->Secondary_Title }}
                            @endif
                            @if($each->Publisher != null)
                                {{ $each->Publisher }}
                            @endif
                            @if($each->Place_Published != null)
                                : {{ $each->Place_Published }}
                            @else .
                            @endif
                        @endif

                        @if($each->Reftype == "Electronic Source")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }}).
                            @endif
                            @if($each->Title != null)
                                \{{ $each->Title }}\
                            @endif
                            @if($each->Edition != null)
                                ({{ $each->Edition }})
                            @endif
                            @if($each->URL != null)
                                "&lt;"{{ $each->URL }}"&gt;"
                            @endif
                            @if($each->Number != null)
                                ({{ $each->Number }})
                            @endif
                        @endif

                        @if($each->Reftype == "Web Page")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }})
                            @endif
                            @if($each->Title != null)
                                \{{ $each->Title }}\
                            @endif
                            @if($each->Edition != null)
                                ({{ $each->Edition }})
                            @endif
                            @if($each->URL != null)
                                "&lt;"{{ $each->URL }}"&gt;"
                            @endif
                            @if($each->Number != null)
                                ({{ $each->Number }})
                            @endif
                        @endif

                        @if($each->Reftype == "Report")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }})
                            @endif
                            @if($each->Title != null)
                                \{{ $each->Title }}\
                            @endif
                            @if($each->Edition != null)
                                ({{ $each->Edition }})
                            @endif
                            @if($each->URL != null)
                                "&lt;"{{ $each->URL }}"&gt;"
                            @endif
                            @if($each->Number != null)
                                ({{ $each->Number }})
                            @endif
                            @if($each->Place_Published != null)
                                {{ $each->Place_Published }}.
                            @endif
                            @if($each->Publisher != null)
                                {{ $each->Publisher }}.
                            @endif
                        @endif

                        @if($each->Reftype == "Edited Book")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }})
                            @endif
                            @if($each->Title != null)
                                {{ $each->Title }}
                            @endif
                            @if($each->Edition != null)
                                {{ $each->Edition }}.
                            @endif
                            @if($each->Volume != null)
                                <b>{{ $each->Volume }}</b>>
                            @endif
                            @if($each->Publisher != null)
                                {{ $each->Publisher }}
                            @endif
                            @if($each->Place_Published != null)
                                : {{ $each->Place_Published }}
                            @else .
                            @endif
                        @endif

                        @if($each->Reftype == "Audiovisual Material")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }})
                            @endif
                            @if($each->Title != null)
                                {{ $each->Title }}
                            @endif
                            @if($each->Edition != null)
                                {{ $each->Edition }}.
                            @endif
                            @if($each->Volume != null)
                                <b>{{ $each->Volume }}</b>>
                            @endif
                            @if($each->Publisher != null)
                                {{ $each->Publisher }}
                            @endif
                            @if($each->Place_Published != null)
                                : {{ $each->Place_Published }}
                            @else .
                            @endif
                        @endif

                        @if($each->Reftype == "Computer Program")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }})
                            @endif
                            @if($each->Title != null)
                                {{ $each->Title }}
                            @endif
                            @if($each->Volume != null)
                                <b>{{ $each->Volume }}</b>>
                            @endif
                            @if($each->Place_Published != null)
                                {{ $each->Place_Published }}:
                            @endif
                            @if($each->Publisher != null)
                                {{ $each->Publisher }}.
                            @endif
                        @endif

                        @if($each->Reftype == "Generic")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }})
                            @endif
                            @if($each->Title != null)
                                \{{ $each->Title }}\
                            @endif
                            @if($each->Secondary_Author != null)
                                In {{ $each->Secondary_Author }} (Ed.),
                            @endif
                            @if($each->Secondary_Title != null)
                                <u>{{ $each->Secondary_Title }}</u>>
                            @endif
                            @if($each->Volume != null)
                                <b>{{ $each->Volume }}</b>>
                            @endif
                            @if($each->Pages != null)
                                pp. {{ $each->Pages }}.
                            @endif
                            @if($each->Place_Published != null)
                                {{ $each->Place_Published }}:
                            @endif
                            @if($each->Publisher != null)
                                {{ $each->Publisher }}.
                            @endif
                        @endif

                        @if($each->Reftype == "Magazine Article")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }})
                            @endif
                            @if($each->Title != null)
                                \{{ $each->Title }}\
                            @endif
                            @if($each->Secondary_Author != null)
                                In {{ $each->Secondary_Author }} (Ed.),
                            @endif
                            @if($each->Secondary_Title != null)
                                <u>{{ $each->Secondary_Title }}</u>>
                            @endif
                            @if($each->Volume != null)
                                <b>{{ $each->Volume }}</b>>
                            @endif
                            @if($each->Pages != null)
                                pp. {{ $each->Pages }}.
                            @endif
                        @endif

                        @if($each->Reftype == "Map")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }})
                            @endif
                            @if($each->Title != null)
                                \{{ $each->Title }}\
                            @endif
                            @if($each->Secondary_Author != null)
                                In {{ $each->Secondary_Author }} (Ed.),
                            @endif
                            @if($each->Secondary_Title != null)
                                <u>{{ $each->Secondary_Title }}</u>>
                            @endif
                            @if($each->Edition != null)
                                <b>{{ $each->Edition }}</b>>
                            @endif
                            @if($each->Volume != null)
                                <b>{{ $each->Volume }}</b>
                            @endif
                            @if($each->Pages != null)
                                pp. {{ $each->Pages }}.
                            @endif
                            @if($each->Place_Published != null)
                                {{ $each->Place_Published }}:
                            @endif
                            @if($each->Publisher != null)
                                {{ $each->Publisher }}.
                            @endif
                        @endif

                        @if($each->Reftype == "Unpublished Work")
                            @if($each->Author != null)
                                {{ $each->Author }}
                            @else "_____"
                            @endif
                            @if($each->Year != null)
                                ({{ $each->Year }})
                            @endif
                            @if($each->Title != null)
                                \{{ $each->Title }}\
                            @endif
                            @if($each->Secondary_Author != null)
                                In {{ $each->Secondary_Author }} (Ed.),
                            @endif
                            @if($each->Secondary_Title != null)
                                <u>{{ $each->Secondary_Title }}</u>>
                            @endif
                            @if($each->Edition != null)
                                <b>{{ $each->Edition }}</b>>
                            @endif
                            @if($each->Volume != null)
                                <b>{{ $each->Volume }}</b>
                            @endif
                            @if($each->Pages != null)
                                pp. {{ $each->Pages }}.
                            @endif
                            @if($each->Place_Published != null)
                                {{ $each->Place_Published }}:
                            @endif
                            @if($each->Publisher != null)
                                {{ $each->Publisher }}.
                            @endif
                        @endif
                    </li>
                    <br>
                @endforeach
            </ul>
        </div>
    </section>
@stop
