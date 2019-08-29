<header class="main-header">
    <div class="logotype-container"><a href="/" class="logotype-link"><img src="/img/logo.png" alt="Логотип"></a></div>
    <nav class="main-navigation">
        <ul class="nav-list">
            <li class="nav-list__item"><a href="/" class="nav-list__item__link">Главная</a></li>
            <li class="nav-list__item"><a href="{{route('cart.list')}}" class="nav-list__item__link">Мои заказы</a></li>
            <li class="nav-list__item"><a href="{{route('news.list')}}" class="nav-list__item__link">Новости</a></li>
            <li class="nav-list__item"><a href="{{route('about')}}" class="nav-list__item__link">О розарии</a></li>
        </ul>
    </nav>
    <div class="header-contact">
        <div class="header-contact__phone"><a href="#" class="header-contact__phone-link">Телефон: 33-333-33</a></div>
    </div>
    <div class="header-container">
        <div class="payment-container">
            <div class="payment-basket__status">
                <div class="payment-basket__status__icon-block"><a href="{{route('cart.list')}}" class="payment-basket__status__icon-block__link"><i class="fa fa-shopping-basket"></i></a></div>
                <div class="payment-basket__status__basket"><span class="payment-basket__status__basket-value">{{$cartCount}}</span><span class="payment-basket__status__basket-value-descr">товаров</span></div>
            </div>
        </div>
        <div class="authorization-block">
            @if(\Auth::id())
                Рады видеть Вас: {{Auth::user()->name}}
                <div  aria-labelledby="navbarDropdown">
                    <a class="authorization-block__link " href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Выйти') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
{{--                <a href="{{ route('logout') }}" class="authorization-block__link">Выйти</a>--}}
            @else
                <a href="{{route('register')}}" class="authorization-block__link">Регистрация</a>
                <a href="{{route('login')}}" class="authorization-block__link">Войти</a>
            @endif

        </div>
    </div>
</header>
