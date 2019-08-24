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
    <div class="content-bottom">
        <div class="line"></div>
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
            </div>
        </div>
        <div class="content-main__container">
            <div class="products-columns">
                @foreach($plants as $plant)
                    <div class="products-columns__item">
                        <div class="products-columns__item__title-product"><a href="{{route('plant.show', ['id' => $plant->id])}}" class="products-columns__item__title-product__link">{{$plant->title}}</a></div>
                        <div class="products-columns__item__thumbnail"><a href="{{route('plant.show', ['id' => $plant->id])}}" class="products-columns__item__thumbnail__link"><img src="{{$plant->photo}}" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                        <div class="products-columns__item__description"><span class="products-price">{{$plant->price}} руб.</span><a href="{{route('plant.buy', ['id' => $plant->id])}}" class="btn btn-blue">Купить</a></div>
                    </div>
                @endforeach
{{--                <div class="products-columns__item">--}}
{{--                    <div class="products-columns__item__title-product"><a href="{{route('plant.show', ['id' => $plant->id])}}" class="products-columns__item__title-product__link">The Witcher 3: Wild Hunt</a></div>--}}
{{--                    <div class="products-columns__item__thumbnail"><a href="{{route('plant.show', ['id' => $plant->id])}}" class="products-columns__item__thumbnail__link"><img src="/img/cover/plant-1.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>--}}
{{--                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>--}}
{{--                </div>--}}
{{--                <div class="products-columns__item">--}}
{{--                    <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Overwatch</a></div>--}}
{{--                    <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="/img/cover/plant-2.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>--}}
{{--                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>--}}
{{--                </div>--}}
{{--                <div class="products-columns__item">--}}
{{--                    <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Deus Ex: Mankind Divided</a></div>--}}
{{--                    <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="/img/cover/plant-3.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>--}}
{{--                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
