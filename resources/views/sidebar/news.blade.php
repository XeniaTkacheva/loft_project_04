<div class="sidebar-item">
    <div class="sidebar-item__title">Последние новости</div>
    <div class="sidebar-item__content">
        <div class="sidebar-news">
            @foreach($lastNews as $new)
                <div class="sidebar-news__item">
                    <div class="sidebar-news__item__preview-news"><a href="{{route('news.show', ['id' => $new->id])}}"><img src="{{$new->photo}}" alt="Фото {{$new->title}}" class="sidebar-new__item__preview-new__image"></a></div>
                    <div class="sidebar-news__item__title-news"><a href="{{route('news.show', ['id' => $new->id])}}" class="sidebar-news__item__title-news__link">{{$new->title}}</a></div>
                </div>
            @endforeach
        </div>
    </div>
</div>
