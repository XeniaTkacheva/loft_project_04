@extends('layouts.app')

@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Roseraie d'Estavayer-le-Lac</div>
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
            <div class="news-block content-text"><img src="/img/cover/plant-11.jpg" alt="Image" class="alignleft img-news">
                <p>
                    En 1992, la Société romande des Amis des Roses a planté, en collaboration avec le Service de la voirie de notre Ville, 79 massifs et une pergola de 31 rosiers grimpants le long de la Route de la Plage.
                </p>
                <p>
                    En 1995, les Amis des Roses cèdent, aux bons soins de la Voirie, la totalité du travail d'entretien que les employés communaux prennent à coeur d'assumer tout au long de l'année, offrant aux passants, qui se rendent à la Plage communale, des fragrances et des coloris variés et spectaculaires.
                </p>
                <p>
                    Deux nouveaux massifs "commémoratifs" ont été plantés, le premier "Rose Thérèse Meyer, Huber 2004". A cette occasion, la Roseraie lui a été dédiée par la pose d'un panneau d'information "En l'honneur de Mme Thérèse Meyer, Présidente du Conseil national, la Commune d'Estavayer-le-Lac lui dédie cette Roseraie. Estavayer-le-Lac, le 1 juillet 2005". Le second massif "Rose ELSA, Huber 2005" a été planté pour fêter le jubilaire de l'entreprise ELSA le 14 septembre 2005.
                </p>
                <p>
                    Copiright: Information from official website of Commune d'Estavayer
                    <a href="https://www.estavayer.ch/loisirs" class="footer__link" target="_blank">https://www.estavayer.ch/loisirs</a>
                </p>
            </div>
        </div>
    </div>
    @include('layouts.content-bottom')
@endsection



