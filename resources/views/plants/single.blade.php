@extends('home')

@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">{{$plant->title}} в разделе {{$plant->category->title}}</div>
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
            <div class="product-container">
                <div class="product-container__image-wrap"><img src="{{$plant->photo}}" class="image-wrap__image-product"></div>
                <div class="product-container__content-text">
                    <div class="product-container__content-text__title">{{$plant->title}}</div>
                    <div class="product-container__content-text__price">
                        <div class="product-container__content-text__price__value">
                            Цена: <b>{{$plant->price}}</b>
                            руб
                        </div><a href="{{route('plant.buy', ['id' => $plant->id])}}" class="btn btn-blue">Купить</a>
                    </div>
                    <div class="product-container__content-text__description">
                        <p>
                            {{$plant->about}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.content-bottom')
@endsection
