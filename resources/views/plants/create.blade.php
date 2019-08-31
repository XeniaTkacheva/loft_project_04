@extends('admin')

@section('content')
    <form class="form form--add-lot container @error('form') form--invalid @enderror" action="{{route('plants.add')}}" method="post" enctype="multipart/form-data"> <!-- form--invalid -->
        @csrf
        <h2>Добавление растения</h2>
        <div class="form__container-two">
            <div class="form__item @error('title') form__item--invalid @enderror"> <!-- form__item--invalid -->
                <label for="lot-name">Наименование</label>
                <input id="lot-name" type="text" name="title"  placeholder="Введите наименование растения" value="" >
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form__item @error('category') form__item--invalid @enderror">
                <label for="category">Категория</label>
                <select id="category" name="category_id"  required>
                    <option label="Выберите категорию"></option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
                </select>
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form__item form__item--wide @error('about') form__item--invalid @enderror">
            <label for="message">Описание</label>
            <textarea id="message" name="about" placeholder="Напишите описание" required></textarea>
            @error('about')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form__item form__item--file @error('photo') form__item--invalid @enderror"> <!-- form__item--uploaded -->
            <label>Изображение</label>
            <div class="preview">
                <button class="preview__remove" type="button">x</button>
                <div class="preview__img">
                    <img src="img/avatar.jpg" width="113" height="113" alt="Изображение лота">
                </div>
            </div>
            @error('photo')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form__input-file">
                <input class="visually-hidden" type="file" id="photo2" name="photo" value="">
                <label for="photo2">
                    <span>+ Добавить</span>
                </label>
            </div>
        </div>
        <div class="form__container-three">
            <div class="form__item form__item--small  @error('price') form__item--invalid @enderror">
                <label for="lot-rate">Цена</label>
                <input id="lot-rate" type="number" name="price" value="" placeholder="0" required>
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>
        @error('form')
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        <button type="submit" class="button">Добавить растение</button>
    </form>
@endsection
