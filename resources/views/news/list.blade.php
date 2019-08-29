@extends('layouts.app')

@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Новости</div>
            </div>
            <div class="content-head__search-block">
                <div class="search-container">
                    <form class="search-container__form">
                        <input type="text" class="search-container__form__input">
                        <button class="search-container__form__btn">search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="content-main__container">
            <div class="news-list__container">
                @foreach($news as $newsItem)
                <div class="news-list__item">
                    <div class="news-list__item__thumbnail"><img src="{{$newsItem->photo}}"></div>
                    <div class="news-list__item__content">
                        <div class="news-list__item__content__news-title">{{$newsItem->title}}</div>
                        <div class="news-list__item__content__news-date">Опубликовано {{ date('d.m.Y', strtotime($newsItem->created_at))}}</div>
                        <div class="news-list__item__content__news-content">{{substr($newsItem->text, 0, 200)}}...</div>
                    </div>
                    <div class="news-list__item__content__news-btn-wrap"><a href="{{route('news.show', ['id' => $newsItem->id])}}" class="btn btn-brown">Подробнее</a></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('layouts.content-bottom')
@endsection
