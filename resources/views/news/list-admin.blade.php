@extends('admin')

@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <a href="#" class="content-head__title-wrap__title bcg-title">Новости</a>
            </div>
            <div>
                <a href="{{route('news.create')}}" class="content-head__title-wrap__title bcg-title">&equiv; Добавить</a>
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
            <div class="news-list__container admin">
                @foreach($news as $newsItem)
                <div class="news-list__item">
                    <div class="news-list__item__thumbnail admin"><img src="{{$newsItem->photo}}"></div>
                    <div class="news-list__item__content admin">
                        <div class="news-list__item__content__news-title admin">{{$newsItem->title}}</div>
                        <div class="news-list__item__content__news-date admin">Опубликовано {{ date('d.m.Y', strtotime($newsItem->created_at))}}</div>
                        <div class="news-list__item__content__news-content admin">{{substr($newsItem->text, 0, 200)}}...</div>
                        <div class="news-list__item__content__news-btn-wrap admin">
                            <a href="{{route('news.show', ['id' => $newsItem->id])}}" class="btn btn-brown">Читать полностью</a>
                            <a class="btn btn-brownad" title="Опция находится в разработке">Изменить</a>
                            <a href="{{route('news.delete', ['id' => $newsItem->id])}}" class="btn btn-redad">Удалить</a>
                        </div>
                    </div>


                </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('layouts.content-bottom')
@endsection
