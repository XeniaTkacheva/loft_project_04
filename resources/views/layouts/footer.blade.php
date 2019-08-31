<footer class="footer">
    <div class="footer__footer-content">
        <div class="random-product-container">
            <div class="random-product-container__head">Случайный товар</div>
            <div class="random-product-container__content">
                <div class="item-product">
                    @if (!empty($plantRand))
                    <div class="item-product__title-product"><a href="{{route('plant.show', ['id' => $plantRand->id])}}" class="item-product__title-product__link">{{$plantRand->title}}</a></div>
                    <div class="item-product__thumbnail"><a href="{{route('plant.show', ['id' => $plantRand->id])}}" class="item-product__thumbnail__link"><img src="{{$plantRand->photo}}" alt="Preview-image" class="item-product__thumbnail__link__img"></a></div>
                    <div class="item-product__description">
                        <div class="item-product__description__products-price"><span class="products-price">{{$plantRand->price}} руб</span></div>
                        <div class="item-product__description__btn-block"><a href="{{route('plant.buy', ['id' => 1])}}" class="btn btn-blue">Купить</a></div>
                    </div>
                    @else
                        <div class="item-product__title-product"><a href="{{route('plant.show', ['id' => 1])}}" class="item-product__title-product__link">Роза Aperiam.</a></div>
                        <div class="item-product__thumbnail"><a href="{{route('plant.show', ['id' => 1])}}" class="item-product__thumbnail__link"><img src="/img/cover/plant-6.jpg" alt="Preview-image" class="item-product__thumbnail__link__img"></a></div>
                        <div class="item-product__description">
                            <div class="item-product__description__products-price"><span class="products-price">200 руб</span></div>
                            <div class="item-product__description__btn-block"><a href="{{route('plant.buy', ['id' => 1])}}" class="btn btn-blue">Купить</a></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="footer__footer-content__main-content">
            <h4>Festival des Roses / Фестиваль роз. Швейцария, город Эставейе-ле-Лак</h4>
            <h3>La Roseraie Thérèse Meyer, théâtre de deux cours de taille de rosiers</h3>
            <p>
                Après 2013 et 2015, le comité du Festival des Roses, avec le patronage de La Société Romande des Amis des Roses,
                a organisé les 5e et 6e cours de taille de rosiers. La commune d’Estavayer a aimablement mis à disposition
                la Roseraie Thérèse Meyer pour que les jardiniers amateurs puissent s’initier aux secrets de la taille.
                C’est donc par deux fois, les 4 et 11 mars dernier, par un temps radieux, que 75 personnes venant de la Broye,
                de Lausanne, de Genève, ont pu, après un café croissant bienvenu, apprendre en 4 ateliers les rudiments de la taille.
            </p>
            <p>
                Vous pouvez également consulter la
                vidéo du cours tourné en 2015 par
                Bobo Losey sur notre site internet
                <a href="http://www.festivaldesroses.ch" class="footer__link" target="_blank">www.festivaldesroses.ch</a> , onglet Festival-médias-vidéo.<br>
            </p>
            <p>
                Text: Dr Michel Zadory, Président du Festival des Roses
            </p>
        </div>
    </div>
    <div class="footer__social-block">
        <ul class="social-block__list bcg-social">
            <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-facebook"></i></a></li>
            <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-twitter"></i></a></li>
            <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
</footer>
