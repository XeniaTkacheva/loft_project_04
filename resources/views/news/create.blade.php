@extends('admin')

@section('content')
    <form class="form form--add-lot container" action="{{route('news.add')}}" method="post" enctype="multipart/form-data"> <!-- form--invalid -->
        @csrf
        <h2>Добавление новости</h2>
        <div class="form__container-two">
            <div class="form__item"> <!-- form__item--invalid -->
                <label for="lot-name">Заглавие</label>
                <input id="lot-name" type="text" name="title" placeholder="Введите заголовок" value="" required>
                <span class="form__error">Ошибка</span>
            </div>
        </div>
        <div class="form__item form__item--wide">
            <label for="message">Текст</label>
            <textarea id="message" name="text" placeholder="Напишите текст" required></textarea>
            <span class="form__error">Ошибка</span>
        </div>
        <div class="form__item form__item--file"> <!-- form__item--uploaded -->
            <label>Изображение</label>
            <div class="preview">
                <button class="preview__remove" type="button">x</button>
                <div class="preview__img">
                    <img src="img/avatar.jpg" width="113" height="113" alt="Изображение лота">
                </div>
            </div>
            <span class="form__error">Ошибка</span>
            <div class="form__input-file">
                <input class="visually-hidden" type="file" id="photo2" name="photo" value="">
                <label for="photo2">
                    <span>+ Добавить</span>
                </label>
            </div>
        </div>
        <div class="form__container-three">
            <div class="form__item form__item--small">
                <label for="lot-rate">Автор</label>
                <input id="lot-rate" type="numeric" name="author" value="{{\Auth::id()}}" placeholder="введите ваш ID" required>
                <span class="form__error">Ошибка</span>
            </div>

        </div>
        <span class="form__error form__error--bottom">Ошибка</span>
        <button type="submit" class="button">Добавить новость</button>
    </form>
@endsection
