@extends('layouts.app')

@section('content')
           @include('layouts.banner')
    <div class="wrap__news">
        <div class="headline">
            <div class="headline__color">
                <div class="headline__color__text">
                    <p class="bold"><?php
                    $quotes[] = trans('main.title');
                    $quotes[] = trans('main.title2');
                    $quotes[] = trans('main.title3');
                    $quotes[] = trans('main.title4');
                    $quotes[] = trans('main.title5');
                    $quotes[] = trans('main.title6');
                    $quotes[] = trans('main.title7');
                    $quotes[] = trans('main.title8');
                    $quotes[] = trans('main.title9');
                    $quotes[] = trans('main.title10');
                    $quotes[] = trans('main.title11');
                    $quotes[] = trans('main.title12');
                    $quotes[] = trans('main.title13');
                    $quotes[] = trans('main.title14');
                    srand ((double) microtime() * 1000000);
                    $random_number = rand(0,count($quotes)-1);
                    echo
                    ($quotes[$random_number]);
                    ?></p>
                    <p>Мухтар Ауэзов</p>
                </div>
            </div>
        </div>
        <div class="nwes">
            <div class="nwes__state">
                <a href="{{ URL::to('/news') }}"><p><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;{{ trans('main.news') }}</p></a>
{{--                <div class="line">--}}

{{--                </div>--}}
            </div>
            <div class="nwes__blog">
                <div class="nwes__blog__mini">
                    @if ($news)
                        @foreach ($news as $newsValue)
                            <a href="{{ route('news.show', [ 'id' => $newsValue->id ]) }}" class="new__mini-wrap">
                                <div class="new__mini">
                                    <div class="new__mini__img">
                                        <img src="{{ $newsValue ? asset('uploads/' . $newsValue->image_show) : ""}}">
                                    </div>
                                    <div class="new__mini-blog">
                                        <div class="new__state">
    {{--                                        <div class="new__state__text">--}}
    {{--                                            <p>{{ $newsValue->title }}</p>--}}
    {{--                                        </div>--}}
                                            <div class="new__state__text">
                                                <h4>{{$newsValue->title}}</h4>
                                                <p>{!! $newsValue->description_short !!}</p>
    {{--                                            <a href="{{ route('news.show', [ 'id' => $newsValue->id ]) }}">Читать дальше</a>--}}
                                            </div>
                                        </div>
                                        <div class="new__state__date">
                                            <div class="new__state__date__wrap"><i class="far fa-calendar-check"></i><p>&nbsp;&nbsp;{{ Date::parse($newsValue->created_at)->format('j F Y г.') }}&nbsp;&nbsp;</p></div>
{{--                                            <div class="new__state__date__wrap"><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p></div>--}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif

                </div>
            </div>
            <div class="news__archive">
                <a href="{{ URL::to('/news') }}" class="news__archive__state">{{ trans('main.archive') }}</a>
            </div>
        </div>
    </div>

    <div class="wrap-education">
        <div class="education">
            <div class="education__haed">
                <a href="{{ URL::to('/main/education') }}"><i class="fas fa-university"></i><p>&nbsp;&nbsp;{{ trans('main.education') }}</p></a>
{{--                <div class="line">--}}

{{--                </div>--}}
            </div>
            <div class="education__text">
                <p>Мы предлагаем вам уникальную возможность получить академическую степень, сочетающую в себе научные традиции и современные стандарты образования, по специальностям Маоистратуры и Докторантуры PhD:</p>
            </div>
            <div class="education__icons">
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group1.png">
                    </div>
                    <div class="etext">
                        <p>Современная литература Казахстана</p>
                        <p>6M021401</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group5.png">
                    </div>
                    <div class="etext">
                        <p>Теория и литературная критика</p>
                        <p>6D021401</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group3.png">
                    </div>
                    <div class="etext">
                        <p>Текстология</p>
                        <p>6M021402</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group4.png">
                    </div>
                    <div class="etext">
                        <p>Казахский фольклор и древняя литература</p>
                        <p>6D021402</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group5.png">
                    </div>
                    <div class="etext">
                        <p>Фольклористика</p>
                        <p>6M021403</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group6.png">
                    </div>
                    <div class="etext">
                        <p>Литературоведение</p>
                        <p>6D021403</p>
                    </div>
                </div>
            </div>
            <div class="education__button">
                <a href="{{ URL::to('/main/education') }}" class="education__button__link">{{ trans('main.read_more') }}</a>
            </div>
        </div>
    </div>
    <div class="wrap__books">
        <div class="books">
            <div class="books__haed">
                <a href="{{ URL::to('/books') }}"> <i class="fas fa-book"></i><p>&nbsp;&nbsp;{{ trans('main.books_institute') }}</p></a>
                {{--            <div class="line">--}}

                {{--            </div>--}}
            </div>
            @include('main.partials.bookSlider')
            <div class="books__button">
                <a href="{{ URL::to('/books') }}" class="books__button__link">{{ trans('main.all_books') }}</a>
            </div>
        </div>
    </div>
    @include('main.partials.map')
    <style>
        .logo__footer-mod {
            margin-top: -52px;
        }
    </style>

@endsection

