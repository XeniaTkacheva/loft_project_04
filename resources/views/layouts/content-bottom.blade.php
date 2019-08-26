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
        </div>
    </div>
</div>
