@extends('layouts.app')

@section('content')

    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <a href="{{route('cart.list')}}" class="content-head__title-wrap__title bcg-title">Корзина</a>
            </div>
            <div class="content-head__title-wrap">
                <a href="#" class="content-head__title-wrap__title bcg-title">Мои заказы</a>
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
        <div class="cart-product-list">
            <h3>Ваш заказ принят. Мы свяжемся с Вами по вопросу доставки. Спасибо!</h3>
            <p>
                Совсем скоро на этой странице вы сможете увидеть список всех ваших заказов. В данный момент эта опция находится в разработке.
            </p>


    @include('layouts.content-bottom')
@endsection
