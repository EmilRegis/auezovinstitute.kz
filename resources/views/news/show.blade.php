@extends('layouts.app')

@section('content')
    <div class="news_page__way">
        <a href="{{ URL::to('/') }}">Главная</a>&nbsp;/
        <a href="{{ URL::to('/news') }}">Новости</a>&nbsp;/
        <a href="#">{{ $news->title }}</a>
    </div>
    <div>
        <div class="news">
            <div class="news__state">
                <div class="news__state__headline">
                    <h1>{{ $news->title }}</h1>
                </div>
                <div class="news__state__img">
                    <img src="{{ $news->image }}" alt="">
                </div>
                <div class="news__state__text">
                    <?php
                        echo nl2br( $news->description );
                    ?>
                </div>
                <div class="news__state__date">
                    <div class="pnew__state__date">
                        <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $news->created_at }}&nbsp;&nbsp;</p><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection