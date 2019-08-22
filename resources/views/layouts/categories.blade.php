<div class="sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <div class="sidebar-item__content">
        <ul class="sidebar-category">
            @foreach($categories as $category)
                <li class="sidebar-category__item"><a href="#" class="sidebar-category__item__link">{{$category->title}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
