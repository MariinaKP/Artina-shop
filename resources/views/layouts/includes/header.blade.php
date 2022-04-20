<header class="header">
    <div class="container-wide header__top">
        <div class="header__top__language">EN
            <box-icon name='chevron-down'></box-icon>
        </div>
        <h1 class="header__top__title"><a href="{{ route('home') }}">Artina</a></h1>
        <div class="header__top__auth">
            @if(!Auth::check())
                <a href="javascript:">
                    <box-icon class="header__top__auth__icon" name='user'></box-icon>Login
                </a>
                <div class="auth--dropdown">
                    <button class="btn btn-primary btn btn-primary-login">Log in</button>
                    <a class="btn btn-primary-register" href="javascript:">Not a member yet?</a>
                </div>
            @else
                <a href="{{ route('login') }}">
                    <box-icon class="header__top__auth__icon" name='user'></box-icon>
                    {{Auth::user()->name}}
                </a>
                <div class="auth--dropdown">
                    @if(Auth::user()->admin)
                        <a href="{{route('admin.dashboard')}}" class="">Dashboard</a>
                    @endif
                    <button class="btn btn-primary btn btn-primary-logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @endif
        </div>
    </div>
    <div class="line"></div>
    <div class="container-wide header__bottom">
        <div class="header__bottom__search-bar">
            <box-icon name='search'></box-icon>
        </div>
        @include('layouts.includes.nav')
        <div class="header__bottom__right-section">
            <div class="header__bottom__right-section__favorites">
                <a href="">
                    <box-icon name='heart'></box-icon>
                </a>
            </div>
            <div class="header__bottom__right-section__cart">
                <a href="">Cart (<span id="cart-count">0</span>)
                    <box-icon name='cart'></box-icon>
                </a>
                <div class="cart--dropdown">
                    <div class="cart--dropdown__products">
                        <div class="cart--dropdown__products__item">
                            <img class="cart--dropdown__products__item__image" src="{{asset('img/ARTINA.jpg')}}">
                            <div class="cart--dropdown__products__item__info">
                                <h5 class="cart--dropdown__products__item__info__title">Lorem ipsum dolor sit amet</h5>
                                <div class="cart--dropdown__products__item__info__price">$59.90</div>
                            </div>
                        </div>
                        <div class="cart--dropdown__products__item">
                            <img class="cart--dropdown__products__item__image" src="{{asset('img/ARTINA.jpg')}}">
                            <div class="cart--dropdown__products__item__info">
                                <h5 class="cart--dropdown__products__item__info__title">Lorem ipsum</h5>
                                <div class="price">$121.99</div>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="cart--dropdown__total">
                        <div>Total:</div>
                        <div class="price">$181.89</div>
                    </div>
                    <div class="line"></div>
                    <button class="btn btn-primary">View cart</button>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
</header>
