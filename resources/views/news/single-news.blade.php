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
            <div class="news-block content-text">
                <h3 class="content-text__title">{{$newsSingle->title}}</h3>
                <img src="{{$newsSingle->photo}}" alt="Image" class="img-news">
                <p>{{$newsSingle->text}}</p>
            </div>
            <div class="footer__link">Опубликовано: {{$newsSingle->created_at}}</div>
        </div>
    </div>
    @include('layouts.content-bottom')
@endsection
