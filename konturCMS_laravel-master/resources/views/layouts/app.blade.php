<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/' . settings('favicon', default: 'default-favicon.ico')) }}">
    @if(seo()->metaData()->getDescription())
        <meta name="description" content="{{ seo()->metaData()->getDescription() }}">
    @endif
    @if(seo()->metaData()->getKeywords())
        <meta name="keywords" content="{{ seo()->metaData()->getKeywords() }}">
    @endif
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>{{ seo()->metaData()->getTitle() ?? config('app.name') }}</title>
    {!! settings('counters') !!}
</head>
<body>
<div class="wrapper{{ !Route::is('index') ? ' page-content':'' }}" id="wrapper">
    <header class="header-fixed">
        <div class="header_top">
            <div class="header-container container">
                <div class="header_top-content">
                    <div class="header_top-address">
                        <div class="header_top-address__ico">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="&#208;&#152;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                                    <path id="Vector"
                                          d="M14.7129 13.8806L11.177 17.4164C11.0224 17.5712 10.8388 17.694 10.6367 17.7778C10.4346 17.8616 10.2179 17.9047 9.99912 17.9047C9.78033 17.9047 9.56368 17.8616 9.36157 17.7778C9.15945 17.694 8.97583 17.5712 8.8212 17.4164L5.28453 13.8806C4.35222 12.9482 3.71731 11.7603 3.46011 10.4671C3.2029 9.17394 3.33494 7.83352 3.83954 6.61536C4.34413 5.39721 5.19861 4.35604 6.29494 3.62351C7.39126 2.89098 8.68017 2.5 9.9987 2.5C11.3172 2.5 12.6061 2.89098 13.7025 3.62351C14.7988 4.35604 15.6533 5.39721 16.1579 6.61536C16.6625 7.83352 16.7945 9.17394 16.5373 10.4671C16.2801 11.7603 15.6452 12.9482 14.7129 13.8806V13.8806Z"
                                          stroke="#3F3F46" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path id="Vector_2"
                                          d="M11.7678 10.9357C12.2366 10.4669 12.5 9.83101 12.5 9.16797C12.5 8.50493 12.2366 7.86904 11.7678 7.4002C11.2989 6.93136 10.663 6.66797 10 6.66797C9.33696 6.66797 8.70107 6.93136 8.23223 7.4002C7.76339 7.86904 7.5 8.50493 7.5 9.16797C7.5 9.83101 7.76339 10.4669 8.23223 10.9357C8.70107 11.4046 9.33696 11.668 10 11.668C10.663 11.668 11.2989 11.4046 11.7678 10.9357Z"
                                          stroke="#3F3F46" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </g>
                            </svg>
                        </div>
                        <div class="header_top-address__text">
                            {{ settings('address') }}
                        </div>
                    </div>
                    <div class="header_top-time">
                        <div class="header_top-time__ico">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="&#208;&#152;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                                    <path id="Vector"
                                          d="M10 6.66667V10L12.5 12.5M17.5 10C17.5 10.9849 17.306 11.9602 16.9291 12.8701C16.5522 13.7801 15.9997 14.6069 15.3033 15.3033C14.6069 15.9997 13.7801 16.5522 12.8701 16.9291C11.9602 17.306 10.9849 17.5 10 17.5C9.01509 17.5 8.03982 17.306 7.12987 16.9291C6.21993 16.5522 5.39314 15.9997 4.6967 15.3033C4.00026 14.6069 3.44781 13.7801 3.0709 12.8701C2.69399 11.9602 2.5 10.9849 2.5 10C2.5 8.01088 3.29018 6.10322 4.6967 4.6967C6.10322 3.29018 8.01088 2.5 10 2.5C11.9891 2.5 13.8968 3.29018 15.3033 4.6967C16.7098 6.10322 17.5 8.01088 17.5 10Z"
                                          stroke="#3F3F46" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </g>
                            </svg>
                        </div>
                        <div class="header_top-time__text">
                            Время работы
                        </div>
                        <div class="time-more">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.5 4.5L6 8L2.5 4.5" stroke="#5065CE" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="header_top-time__content">
                            <div class="time-item">
                                Пн–Сб: {{ settings('monday', default:'10:00–19:00') }}
                            </div>
                            <div class="time-item">
                                Вск: {{ settings('sunday', default:'11:00–15:30') }}
                            </div>

                        </div>
                    </div>
                    <nav class="header_top-menu">
                        <x-menu::base-menu-component code="main" parent-css="menu"/>
                    </nav>
                    <div class="header_top-phones">
                        <div class="header_top-phone__main">
                            <div class="phone-content">
                                <a href="tel:{{ settings('phone') }}">{{ settings('phone2') }}</a>
                            </div>
                            <div class="phone-more">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.5 4.5L6 8L2.5 4.5" stroke="#5065CE" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="header_top-phone__additional">
                            <div class="phone-item">
                                <a href="tel:{{ settings('phone2') }}">{{ settings('phone2') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_middle">
            <div class="header-container container">
                <div class="header_middle__content">
                    <div class="header-burger">
                        <span class="header-burger__line"></span>
                    </div>
                    <div class="header_middle-logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('/images/logo.svg') }}" alt="logo">
                        </a>
                    </div>
                    <div class="header_middle-search">
                        <form action="{{ route('shop.search') }}">
                            <input type="text" name="search" placeholder="Поиск по каталогу">
                            <button type="submit">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="&#208;&#152;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                                        <path id="Vector"
                                              d="M26.25 26.25L18.75 18.75M21.25 12.5C21.25 13.6491 21.0237 14.7869 20.5839 15.8485C20.1442 16.9101 19.4997 17.8747 18.6872 18.6872C17.8747 19.4997 16.9101 20.1442 15.8485 20.5839C14.7869 21.0237 13.6491 21.25 12.5 21.25C11.3509 21.25 10.2131 21.0237 9.15152 20.5839C8.08992 20.1442 7.12533 19.4997 6.31282 18.6872C5.5003 17.8747 4.85578 16.9101 4.41605 15.8485C3.97633 14.7869 3.75 13.6491 3.75 12.5C3.75 10.1794 4.67187 7.95376 6.31282 6.31282C7.95376 4.67187 10.1794 3.75 12.5 3.75C14.8206 3.75 17.0462 4.67187 18.6872 6.31282C20.3281 7.95376 21.25 10.1794 21.25 12.5Z"
                                              stroke="#5065CE" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="header-search_mobile">
                        <div class="header-search__item">
                            <div class="header_middle-login__ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                     fill="none">
                                    <path
                                            d="M26.25 26.25L18.75 18.75M21.25 12.5C21.25 13.6491 21.0237 14.7869 20.5839 15.8485C20.1442 16.9101 19.4997 17.8747 18.6872 18.6872C17.8747 19.4997 16.9101 20.1442 15.8485 20.5839C14.7869 21.0237 13.6491 21.25 12.5 21.25C11.3509 21.25 10.2131 21.0237 9.15152 20.5839C8.08992 20.1442 7.12533 19.4997 6.31282 18.6872C5.5003 17.8747 4.85578 16.9101 4.41605 15.8485C3.97633 14.7869 3.75 13.6491 3.75 12.5C3.75 10.1794 4.67187 7.95376 6.31282 6.31282C7.95376 4.67187 10.1794 3.75 12.5 3.75C14.8206 3.75 17.0462 4.67187 18.6872 6.31282C20.3281 7.95376 21.25 10.1794 21.25 12.5Z"
                                            stroke="#374151" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="header_middle-login__text">Поиск</div>
                        </div>
                        <div class="header-search__popup">
                            <form action="{{ route('shop.search') }}">
                                <input type="text" name="search" placeholder="Поиск">
                                <button type="submit">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g id="&#208;&#152;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                                            <path id="Vector"
                                                  d="M26.25 26.25L18.75 18.75M21.25 12.5C21.25 13.6491 21.0237 14.7869 20.5839 15.8485C20.1442 16.9101 19.4997 17.8747 18.6872 18.6872C17.8747 19.4997 16.9101 20.1442 15.8485 20.5839C14.7869 21.0237 13.6491 21.25 12.5 21.25C11.3509 21.25 10.2131 21.0237 9.15152 20.5839C8.08992 20.1442 7.12533 19.4997 6.31282 18.6872C5.5003 17.8747 4.85578 16.9101 4.41605 15.8485C3.97633 14.7869 3.75 13.6491 3.75 12.5C3.75 10.1794 4.67187 7.95376 6.31282 6.31282C7.95376 4.67187 10.1794 3.75 12.5 3.75C14.8206 3.75 17.0462 4.67187 18.6872 6.31282C20.3281 7.95376 21.25 10.1794 21.25 12.5Z"
                                                  stroke="#5065CE" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="header_middle-login">
                        <div class="header_middle-login__link">
                            <div class="header_middle-login__ico">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="&#208;&#152;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                                        <path id="Vector"
                                              d="M6.40125 22.255C9.02427 20.7724 11.987 19.9954 15 20C18.125 20 21.0587 20.8188 23.5987 22.255M18.75 12.5C18.75 13.4946 18.3549 14.4484 17.6517 15.1517C16.9484 15.8549 15.9946 16.25 15 16.25C14.0054 16.25 13.0516 15.8549 12.3483 15.1517C11.6451 14.4484 11.25 13.4946 11.25 12.5C11.25 11.5054 11.6451 10.5516 12.3483 9.84835C13.0516 9.14509 14.0054 8.75 15 8.75C15.9946 8.75 16.9484 9.14509 17.6517 9.84835C18.3549 10.5516 18.75 11.5054 18.75 12.5ZM26.25 15C26.25 16.4774 25.959 17.9403 25.3936 19.3052C24.8283 20.6701 23.9996 21.9103 22.955 22.955C21.9103 23.9996 20.6701 24.8283 19.3052 25.3936C17.9403 25.959 16.4774 26.25 15 26.25C13.5226 26.25 12.0597 25.959 10.6948 25.3936C9.3299 24.8283 8.08971 23.9996 7.04505 22.955C6.00039 21.9103 5.17172 20.6701 4.60636 19.3052C4.04099 17.9403 3.75 16.4774 3.75 15C3.75 12.0163 4.93526 9.15483 7.04505 7.04505C9.15483 4.93526 12.0163 3.75 15 3.75C17.9837 3.75 20.8452 4.93526 22.955 7.04505C25.0647 9.15483 26.25 12.0163 26.25 15Z"
                                              stroke="#374151" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="header_middle-login__text">{{ auth()->check() ? 'Кабинет':'Войти'}}</div>
                        </div>
                        <div class="login-popup">
                            @if(auth()->check())
                                <div class="login-content__registered active">
                                    <a href="#" class="login-popup__link">Мои заказы</a>
                                    <a href="#" class="login-popup__link">Персональные данные</a>
                                    <a href="#" class="login-popup__btn_add">Выйти</a>
                                </div>
                            @else
                                <div class="login-content__unregistered active">
                                    <div class="login-popup__title">Войдите чтобы совершать покупки и отслеживать свои
                                        заказы
                                    </div>
                                    <a href="#" class="login-popup__btn_main" data-src="#login-popup"
                                       data-auto-focus="false" data-fancybox>Войти</a>
                                    <a href="#" class="login-popup__btn_add" data-src="#register-popup"
                                       data-auto-focus="false" data-fancybox>Зарегистрироваться</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('cart.index') }}" class="header_middle-cart">
                        <x-shop::cart-count/>
                        <div class="header_middle-cart__ico">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="&#208;&#152;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                                    <path id="Vector"
                                          d="M3.75 3.75H6.25L6.75 6.25M6.75 6.25H26.25L21.25 16.25H8.75M6.75 6.25L8.75 16.25M8.75 16.25L5.88375 19.1163C5.09625 19.9038 5.65375 21.25 6.7675 21.25H21.25M21.25 21.25C20.587 21.25 19.9511 21.5134 19.4822 21.9822C19.0134 22.4511 18.75 23.087 18.75 23.75C18.75 24.413 19.0134 25.0489 19.4822 25.5178C19.9511 25.9866 20.587 26.25 21.25 26.25C21.913 26.25 22.5489 25.9866 23.0178 25.5178C23.4866 25.0489 23.75 24.413 23.75 23.75C23.75 23.087 23.4866 22.4511 23.0178 21.9822C22.5489 21.5134 21.913 21.25 21.25 21.25ZM11.25 23.75C11.25 24.413 10.9866 25.0489 10.5178 25.5178C10.0489 25.9866 9.41304 26.25 8.75 26.25C8.08696 26.25 7.45107 25.9866 6.98223 25.5178C6.51339 25.0489 6.25 24.413 6.25 23.75C6.25 23.087 6.51339 22.4511 6.98223 21.9822C7.45107 21.5134 8.08696 21.25 8.75 21.25C9.41304 21.25 10.0489 21.5134 10.5178 21.9822C10.9866 22.4511 11.25 23.087 11.25 23.75Z"
                                          stroke="#6B7280" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </g>
                            </svg>
                        </div>
                        <div class="header_middle-cart__text">Корзина</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="header-container container">
                <nav class="header_bottom-menu">
                    <x-menu::base-menu-component code="catalog" parent-css="menu"/>
                </nav>
            </div>
        </div>
    </header>
    <div class="burger-menu">
        <div class="burger-menu__top">
            <a href="" class="burger-menu__link">
                <img src="{{ asset('/images/logo.svg') }}" alt="" class="burger-menu__logo">
            </a>
            <div class="burger-menu__close">
                <img src="{{ asset('/images/catalog-menu__close.svg') }}" alt="">
            </div>
        </div>
        <div class="burger-menu__content">
            <div class="burger-menu__heading">Меню</div>
            <nav class="burger-menu__list">
                <x-menu::base-menu-component code="catalog" parent-css="menu"/>
            </nav>
        </div>
        <div class="burger-menu__shadow"></div>
    </div>
    <div class="catalog-menu">
        <div class="catalog-menu__top">
            <a href="{{ route('index') }}" class="catalog-menu__link">
                <img src="{{ asset('/images/logo.svg') }}" alt="" class="catalog-menu__logo">
            </a>
            <div class="catalog-menu__close">
                <img src="{{ asset('/images/catalog-menu__close.svg') }}" alt="">
            </div>
            <div class="catalog-menu__search">
                <form action="{{ route('shop.search') }}">
                    <input type="text" name="search" placeholder="Поиск по каталогу">
                    <button type="submit">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="&#208;&#152;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                                <path id="Vector"
                                      d="M26.25 26.25L18.75 18.75M21.25 12.5C21.25 13.6491 21.0237 14.7869 20.5839 15.8485C20.1442 16.9101 19.4997 17.8747 18.6872 18.6872C17.8747 19.4997 16.9101 20.1442 15.8485 20.5839C14.7869 21.0237 13.6491 21.25 12.5 21.25C11.3509 21.25 10.2131 21.0237 9.15152 20.5839C8.08992 20.1442 7.12533 19.4997 6.31282 18.6872C5.5003 17.8747 4.85578 16.9101 4.41605 15.8485C3.97633 14.7869 3.75 13.6491 3.75 12.5C3.75 10.1794 4.67187 7.95376 6.31282 6.31282C7.95376 4.67187 10.1794 3.75 12.5 3.75C14.8206 3.75 17.0462 4.67187 18.6872 6.31282C20.3281 7.95376 21.25 10.1794 21.25 12.5Z"
                                      stroke="#5065CE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="catalog-menu__content">
            <div class="catalog-menu__heading">Каталог</div>
            <nav class="mobile-catalog__menu">
                <x-menu::base-menu-component code="catalog" parent-css="menu"/>
            </nav>
        </div>
    </div>
    <div class="modal-menu">
        <div class="modal-menu__top">
            <a href="" class="modal-menu__link">
                <img src="{{ asset('/images/logo.svg') }}" alt="" class="modal-menu__logo">
            </a>
            <div class="modal-menu__close">
                <img src="{{ asset('/images/catalog-menu__close.svg') }}" alt="">
            </div>
        </div>
        <div class="modal-menu__content">
            <div class="modal-menu__heading">Меню</div>
            <nav class="mobile-modal__menu">
                <x-menu::base-menu-component code="main" parent-css="menu"/>
            </nav>
        </div>
    </div>

    <div class="mobile-menu">
        <div class="mobile-menu__container container">
            <a href="/" class="mobile-menu__item menu-home current">
                <div class="main-img">
                    <img src="{{ asset('/images/mobile-menu__home.svg') }}" alt="">
                </div>
                <p>Главная</p>
            </a>
            <div class="mobile-menu__item menu-catalog">
                <div class="catalog-img">
                    <img src="{{ asset('/images/mobile-menu__catalog.svg') }}" alt="">
                </div>
                <p>Каталог</p>
            </div>
            <div class="menu-cart mobile-menu__item">
                <a href="{{ route('cart.index') }}" class="cart-link">
                    <x-shop::cart-count/>
                    <img src="{{ asset('/images/mobile-menu__basket.svg') }}" alt="">
                    <p>Корзина</p>
                </a>
            </div>
            <div class="mobile-menu__item menu-list">
                <div class="list-img">
                    <img src="{{ asset('/images/mobile-menu__menu.svg') }}" alt="">
                </div>
                <p>Меню</p>
            </div>
        </div>
    </div>
    <main class="content">
        @yield('app.content')
    </main>
    <footer class="footer">
        <div class="footer__container container">
            <div class="footer-content">
                <div class="footer-content_top">
                    <div class="footer-logo">
                        <a href="/">
                            <img src="{{ asset('/images/logo2.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="footer-contacts">
                        <h5>Контакты</h5>
                        <div class="footer-phones">
                            <div class="footer-phone">
                                <div class="footer-phone__ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g id="&#208;&#152;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                                            <path id="Vector"
                                                  d="M2.98816 2.98816C2.67559 3.30072 2.5 3.72464 2.5 4.16667V5C2.5 11.9033 8.09667 17.5 15 17.5H15.8333C16.2754 17.5 16.6993 17.3244 17.0118 17.0118C17.3244 16.6993 17.5 16.2754 17.5 15.8333V13.1008C17.5 12.9259 17.445 12.7553 17.3427 12.6134C17.2404 12.4714 17.096 12.3653 16.93 12.31L13.1858 11.0617C12.9956 10.9984 12.7888 11.0059 12.6036 11.0827C12.4184 11.1596 12.2671 11.3006 12.1775 11.48L11.2358 13.3608C9.19538 12.4389 7.5611 10.8046 6.63917 8.76417L8.52 7.8225C8.69938 7.73288 8.84042 7.58158 8.91726 7.39637C8.9941 7.21116 9.00158 7.00445 8.93833 6.81417L7.69 3.07C7.63475 2.90413 7.52874 2.75984 7.38696 2.65754C7.24519 2.55525 7.07483 2.50013 6.9 2.5H4.16667C3.72464 2.5 3.30072 2.67559 2.98816 2.98816Z"
                                                  stroke="#374FC7" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                </div>
                                <a href="tel:{{ settings('phone') }}" class="footer-phone__text">
                                    {{ settings('phone') }}
                                </a>
                                <div class="footer-phone__more">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.5 4.5L6 8L2.5 4.5" stroke="#F3F4F6" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="footer-phone__content">
                                <div class="footer-phone__item">
                                    <a href="{{ settings('phone2') }}">{{ settings('phone2') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-callback">
                            <a href="#" data-src="#feedback-popup" data-auto-focus="false" data-fancybox>Заказать
                                звонок</a>
                        </div>
                        <div class="footer-email">
                            <div class="footer-email__ico">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="&#208;&#152;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                                        <path id="Vector"
                                              d="M2.5 6.66797L9.075 11.0513C9.34888 11.234 9.67075 11.3316 10 11.3316C10.3292 11.3316 10.6511 11.234 10.925 11.0513L17.5 6.66797M4.16667 15.8346H15.8333C16.2754 15.8346 16.6993 15.659 17.0118 15.3465C17.3244 15.0339 17.5 14.61 17.5 14.168V5.83464C17.5 5.39261 17.3244 4.96868 17.0118 4.65612C16.6993 4.34356 16.2754 4.16797 15.8333 4.16797H4.16667C3.72464 4.16797 3.30072 4.34356 2.98816 4.65612C2.67559 4.96868 2.5 5.39261 2.5 5.83464V14.168C2.5 14.61 2.67559 15.0339 2.98816 15.3465C3.30072 15.659 3.72464 15.8346 4.16667 15.8346Z"
                                              stroke="#374FC7" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </div>
                            <a href="mailto:{{ settings('emailPublic') }}" class="footer-email__text">
                                {{ settings('emailPublic') }}
                            </a>
                        </div>
                        <div class="footer-addresss">
                            <div class="footer-addresss__ico">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="&#208;&#152;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                                        <path id="Vector"
                                              d="M14.7129 13.8806L11.177 17.4164C11.0224 17.5712 10.8388 17.694 10.6367 17.7778C10.4346 17.8616 10.2179 17.9047 9.99912 17.9047C9.78033 17.9047 9.56368 17.8616 9.36157 17.7778C9.15945 17.694 8.97583 17.5712 8.8212 17.4164L5.28453 13.8806C4.35222 12.9482 3.71731 11.7603 3.46011 10.4671C3.2029 9.17394 3.33494 7.83352 3.83954 6.61536C4.34413 5.39721 5.19861 4.35604 6.29494 3.62351C7.39126 2.89098 8.68017 2.5 9.9987 2.5C11.3172 2.5 12.6061 2.89098 13.7025 3.62351C14.7988 4.35604 15.6533 5.39721 16.1579 6.61536C16.6625 7.83352 16.7945 9.17394 16.5373 10.4671C16.2801 11.7603 15.6452 12.9482 14.7129 13.8806V13.8806Z"
                                              stroke="#374FC7" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path id="Vector_2"
                                              d="M11.7678 10.9357C12.2366 10.4669 12.5 9.83101 12.5 9.16797C12.5 8.50493 12.2366 7.86904 11.7678 7.4002C11.2989 6.93136 10.663 6.66797 10 6.66797C9.33696 6.66797 8.70107 6.93136 8.23223 7.4002C7.76339 7.86904 7.5 8.50493 7.5 9.16797C7.5 9.83101 7.76339 10.4669 8.23223 10.9357C8.70107 11.4046 9.33696 11.668 10 11.668C10.663 11.668 11.2989 11.4046 11.7678 10.9357Z"
                                              stroke="#374FC7" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="footer-addresss__text">
                                {{ settings('address') }}
                            </div>
                        </div>
                    </div>
                    <div class="footer-catalog">
                        <h5>Каталог</h5>
                        <x-menu::base-menu-component code="main" parent-css="menu"/>
                    </div>
                    <nav class="footer-menu">
                        <h5>Покупателям</h5>
                        <x-menu::base-menu-component code="main" parent-css="menu"/>
                    </nav>
                    <div class="footer-media">
                        <div class="footer-socials">
                            <h5>Мы в социальных сетях</h5>
                            <div class="footer-socials__list">
                                @if(settings('vk'))
                                    <a href="{{ settings('vk') }}" class="footer-socials__item">
                                        <svg width="37" height="36" viewBox="0 0 37 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g id="vk">
                                                <path id="Rectangle"
                                                      d="M0.5 18C0.5 8.33502 8.33502 0.5 18 0.5H19C28.665 0.5 36.5 8.33502 36.5 18C36.5 27.665 28.665 35.5 19 35.5H18C8.33502 35.5 0.5 27.665 0.5 18Z"
                                                      stroke="#616161"/>
                                                <path id="Vector" fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M17.3181 23.9593H18.3344C18.3344 23.9593 18.6413 23.923 18.7972 23.7492C18.9406 23.5884 18.9381 23.2901 18.9381 23.2901C18.9381 23.2901 18.918 21.8843 19.5494 21.6768C20.1732 21.4719 20.9757 23.0359 21.8234 23.6351C22.4649 24.0916 22.9529 23.9905 22.9529 23.9905L25.2244 23.9593C25.2244 23.9593 26.4117 23.8841 25.8483 22.9192C25.803 22.8414 25.5212 22.2085 24.1603 20.9064C22.7366 19.5447 22.9277 19.7651 24.6433 17.4074C25.6873 15.973 26.1049 15.0963 25.974 14.7202C25.8483 14.3648 25.081 14.4582 25.081 14.4582L22.5252 14.4738C22.5252 14.4738 22.3341 14.4478 22.1957 14.5334C22.0574 14.619 21.9693 14.8161 21.9693 14.8161C21.9693 14.8161 21.5643 15.9289 21.026 16.873C19.8865 18.8651 19.4311 18.9714 19.245 18.8469C18.8123 18.559 18.9205 17.6875 18.9205 17.0702C18.9205 15.1378 19.2047 14.3337 18.3671 14.1236C18.0904 14.0562 17.8841 14.0095 17.1747 14.0017C16.2616 13.9939 15.4918 14.0043 15.0541 14.2273C14.7623 14.3726 14.5384 14.6994 14.6743 14.7202C14.8428 14.7409 15.2277 14.8265 15.4289 15.1092C15.6905 15.4776 15.683 16.3024 15.683 16.3024C15.683 16.3024 15.8339 18.5772 15.3308 18.8599C14.9862 19.0518 14.5133 18.6576 13.4995 16.8497C12.9788 15.9237 12.5864 14.8991 12.5864 14.8991C12.5864 14.8991 12.5109 14.7072 12.3751 14.606C12.2116 14.4815 11.9827 14.4426 11.9827 14.4426L9.55265 14.4582C9.55265 14.4582 9.19042 14.4686 9.05458 14.632C8.93635 14.7772 9.04703 15.0781 9.04703 15.0781C9.04703 15.0781 10.9463 19.6666 13.0996 21.9777C15.0768 24.0968 17.3181 23.9593 17.3181 23.9593Z"
                                                      fill="#E8EAF6"/>
                                            </g>
                                        </svg>
                                    </a>
                                @endif
                                @if(settings('ok'))
                                    <a href="{{ settings('ok') }}" class="footer-socials__item">
                                        <svg width="37" height="36" viewBox="0 0 37 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g id="ok">
                                                <path id="Rectangle"
                                                      d="M0.5 18C0.5 8.33502 8.33502 0.5 18 0.5H19C28.665 0.5 36.5 8.33502 36.5 18C36.5 27.665 28.665 35.5 19 35.5H18C8.33502 35.5 0.5 27.665 0.5 18Z"
                                                      stroke="#616161"/>
                                                <g id="760940256">
                                                    <path id="Vector"
                                                          d="M17.9187 17.772C20.338 17.772 22.3062 15.8067 22.3062 13.3875C22.3062 10.9682 20.338 9 17.9187 9C15.4995 9 13.5312 10.9682 13.5312 13.3875C13.5312 15.8067 15.4995 17.772 17.9187 17.772ZM17.9187 11.5716C18.9204 11.5716 19.7346 12.3858 19.7346 13.3875C19.7346 14.3892 18.9204 15.2034 17.9187 15.2034C16.917 15.2034 16.1028 14.3892 16.1028 13.3875C16.1028 12.3858 16.917 11.5716 17.9187 11.5716Z"
                                                          fill="#E8EAF6"/>
                                                    <path id="Vector_2"
                                                          d="M19.6993 21.3516C20.5926 21.1495 21.4537 20.7951 22.2474 20.2972C22.8479 19.9193 23.0295 19.1256 22.6516 18.5252C22.2709 17.9248 21.4801 17.7432 20.8767 18.121C19.0813 19.2516 16.7675 19.2516 14.9692 18.121C14.3687 17.7432 13.575 17.9248 13.1972 18.5252C12.8194 19.1256 13.0009 19.9193 13.6014 20.2972C14.3951 20.7951 15.2562 21.1495 16.1495 21.3516L13.6951 23.806C13.1942 24.3068 13.1942 25.1211 13.6951 25.6248C13.947 25.8738 14.275 25.9997 14.606 25.9997C14.934 25.9997 15.262 25.8738 15.5139 25.6248L17.9244 23.2143L20.3349 25.6248C20.8357 26.1257 21.65 26.1257 22.1537 25.6248C22.6546 25.1211 22.6546 24.3068 22.1537 23.806L19.6993 21.3516Z"
                                                          fill="#E8EAF6"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                @endif
                                @if(settings('facebook'))
                                    <a href="{{ settings('facebook') }}" class="footer-socials__item">
                                        <svg width="37" height="36" viewBox="0 0 37 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g id="fb">
                                                <path id="Rectangle"
                                                      d="M0.5 18C0.5 8.33502 8.33502 0.5 18 0.5H19C28.665 0.5 36.5 8.33502 36.5 18C36.5 27.665 28.665 35.5 19 35.5H18C8.33502 35.5 0.5 27.665 0.5 18Z"
                                                      stroke="#616161"/>
                                                <path id="Vector"
                                                      d="M19.8412 26V17.7896H22.4941L22.8929 14.5894H19.8412V12.5459C19.8412 11.62 20.0901 10.9889 21.367 10.9889H23V8.12512C22.7189 8.08619 21.7499 8 20.6228 8C18.2698 8 16.6609 9.49027 16.6609 12.2289V14.5894H14V17.7896H16.6609V26H19.8412Z"
                                                      fill="#E8EAF6"/>
                                            </g>
                                        </svg>
                                    </a>
                                @endif
                                @if(settings('instagram'))
                                    <a href="{{ settings('instagram') }}" class="footer-socials__item">
                                        <svg width="38" height="36" viewBox="0 0 38 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g id="inst">
                                                <path id="Rectangle"
                                                      d="M0.5 17.802C0.5 8.24637 8.24637 0.5 17.802 0.5H19.4897C29.0453 0.5 36.7917 8.24637 36.7917 17.802C36.7917 27.3576 29.0453 35.104 19.4897 35.104H17.802C8.24637 35.104 0.5 27.3576 0.5 17.802Z"
                                                      stroke="#616161"/>
                                                <g id="760949056">
                                                    <path id="Vector"
                                                          d="M18.5 11.3504C20.5042 11.3504 20.7411 11.359 21.532 11.3932C22.2628 11.4275 22.6597 11.5502 22.9252 11.653C23.2735 11.7872 23.5247 11.9499 23.7874 12.2126C24.0501 12.4753 24.2128 12.7265 24.347 13.0748C24.4498 13.3403 24.5725 13.7372 24.6068 14.468C24.641 15.2589 24.6496 15.4958 24.6496 17.5C24.6496 19.5013 24.641 19.7383 24.6068 20.532C24.5725 21.2628 24.4498 21.6597 24.347 21.9223C24.2128 22.2735 24.0501 22.5247 23.7874 22.7845C23.5247 23.0472 23.2735 23.2099 22.9252 23.347C22.6597 23.4498 22.2628 23.5725 21.532 23.6039C20.7411 23.641 20.5042 23.6496 18.5 23.6496C16.4987 23.6496 16.2589 23.641 15.468 23.6039C14.7372 23.5725 14.3403 23.4498 14.0777 23.347C13.7265 23.2099 13.4753 23.0472 13.2155 22.7845C12.9528 22.5247 12.7901 22.2735 12.653 21.9223C12.5502 21.6597 12.4275 21.2628 12.3961 20.532C12.359 19.7383 12.3504 19.5013 12.3504 17.5C12.3504 15.4958 12.359 15.2589 12.3961 14.468C12.4275 13.7372 12.5502 13.3403 12.653 13.0748C12.7901 12.7265 12.9528 12.4753 13.2126 12.2126C13.4753 11.9499 13.7265 11.7872 14.0777 11.653C14.3403 11.5502 14.7372 11.4275 15.468 11.3932C16.2589 11.359 16.4987 11.3504 18.5 11.3504ZM18.5 10C16.4644 10 16.2075 10.0086 15.4081 10.0428C14.6087 10.0799 14.0634 10.2084 13.5866 10.394C13.0927 10.5853 12.6759 10.8394 12.259 11.259C11.8422 11.6759 11.5853 12.0927 11.394 12.5866C11.2084 13.0634 11.0799 13.6087 11.0457 14.4081C11.0086 15.2075 11 15.4616 11 17.5C11 19.5356 11.0086 19.7925 11.0457 20.5919C11.0799 21.3913 11.2084 21.9366 11.394 22.4134C11.5853 22.9073 11.8422 23.3241 12.259 23.741C12.6759 24.1578 13.0927 24.4147 13.5866 24.606C14.0634 24.7916 14.6087 24.9201 15.4081 24.9543C16.2075 24.9914 16.4644 25 18.5 25C20.5384 25 20.7925 24.9914 21.5919 24.9543C22.3913 24.9201 22.9366 24.7916 23.4134 24.606C23.9073 24.4147 24.3241 24.1578 24.741 23.741C25.1578 23.3241 25.4147 22.9073 25.606 22.4134C25.7916 21.9366 25.9201 21.3913 25.9572 20.5919C25.9914 19.7925 26 19.5356 26 17.5C26 15.4616 25.9914 15.2075 25.9572 14.4081C25.9201 13.6087 25.7916 13.0634 25.606 12.5866C25.4147 12.0927 25.1578 11.6759 24.741 11.259C24.3241 10.8394 23.9073 10.5853 23.4134 10.394C22.9366 10.2084 22.3913 10.0799 21.5919 10.0428C20.7925 10.0086 20.5384 10 18.5 10Z"
                                                          fill="#E8EAF6"/>
                                                    <path id="Vector_2"
                                                          d="M18.4998 13.6484C16.3728 13.6484 14.6484 15.3728 14.6484 17.4998C14.6484 19.6267 16.3728 21.3511 18.4998 21.3511C20.6267 21.3511 22.3511 19.6267 22.3511 17.4998C22.3511 15.3728 20.6267 13.6484 18.4998 13.6484ZM18.4998 20.0007C17.118 20.0007 15.9988 18.8816 15.9988 17.4998C15.9988 16.118 17.118 14.9988 18.4998 14.9988C19.8816 14.9988 21.0007 16.118 21.0007 17.4998C21.0007 18.8816 19.8816 20.0007 18.4998 20.0007Z"
                                                          fill="#E8EAF6"/>
                                                    <path id="Vector_3"
                                                          d="M23.403 13.4931C23.403 13.9927 23.0005 14.3952 22.5037 14.3952C22.0041 14.3952 21.6016 13.9927 21.6016 13.4931C21.6016 12.9963 22.0041 12.5938 22.5037 12.5938C23.0005 12.5938 23.403 12.9963 23.403 13.4931Z"
                                                          fill="#E8EAF6"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="footer-messengers">
                            <h5>Напишите нам в мессенджеры</h5>
                            <div class="footer-messengers__list">
                                @if(settings('whatsapp'))
                                    <a href="{{ settings('whatsapp') }}" class="footer-messengers__item whatsApp">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g id="messenger__icon-wp">
                                                <path id="Vector"
                                                      d="M4.99036 16.1693L5.67816 16.5711C6.83805 17.2476 8.15727 17.6027 9.50001 17.6C11.0031 17.6 12.4725 17.1543 13.7223 16.3192C14.9721 15.4841 15.9463 14.2971 16.5215 12.9084C17.0967 11.5197 17.2472 9.99156 16.954 8.51731C16.6607 7.04305 15.9369 5.68886 14.874 4.62599C13.8111 3.56311 12.4569 2.83928 10.9827 2.54603C9.50844 2.25278 7.98033 2.40329 6.59161 2.97851C5.2029 3.55374 4.01594 4.52785 3.18084 5.77766C2.34574 7.02748 1.90001 8.49686 1.90001 9.99999C1.90001 11.3642 2.25816 12.6723 2.92981 13.8228L3.33071 14.5106L2.71036 16.7915L4.99036 16.1693ZM0.00381271 19.5L1.28821 14.7804C0.441893 13.3296 -0.0027461 11.6796 1.27606e-05 9.99999C1.27606e-05 4.75315 4.25316 0.5 9.50001 0.5C14.7469 0.5 19 4.75315 19 9.99999C19 15.2468 14.7469 19.5 9.50001 19.5C7.82115 19.5027 6.17183 19.0584 4.72151 18.2127L0.00381271 19.5ZM6.07146 5.5426C6.19876 5.5331 6.32701 5.5331 6.45431 5.5388C6.50561 5.5426 6.55691 5.5483 6.60821 5.554C6.75926 5.5711 6.92551 5.66325 6.98156 5.79055C7.26466 6.43275 7.54016 7.0797 7.80616 7.72855C7.86506 7.87295 7.82991 8.0582 7.71781 8.2387C7.64071 8.36075 7.55732 8.47871 7.46796 8.59209C7.36061 8.72984 7.12976 8.98254 7.12976 8.98254C7.12976 8.98254 7.03571 9.09464 7.07181 9.23429C7.08511 9.28749 7.12881 9.36444 7.16871 9.42904L7.22476 9.51929C7.46796 9.92494 7.79476 10.3363 8.19376 10.7239C8.30776 10.8341 8.41891 10.9471 8.53861 11.0526C8.98321 11.4449 9.48671 11.7651 10.0301 12.0026L10.0349 12.0045C10.1156 12.0396 10.1565 12.0586 10.2743 12.109C10.3332 12.1337 10.394 12.1555 10.4557 12.1717C10.5195 12.1879 10.5867 12.1849 10.6488 12.1629C10.7109 12.1409 10.765 12.101 10.8044 12.0482C11.4922 11.215 11.5549 11.1609 11.5606 11.1609V11.1628C11.6083 11.1182 11.6651 11.0844 11.727 11.0636C11.789 11.0428 11.8547 11.0355 11.9197 11.0421C11.9767 11.0459 12.0346 11.0564 12.0878 11.0801C12.5923 11.311 13.4178 11.671 13.4178 11.671L13.9707 11.919C14.0638 11.9636 14.1484 12.0691 14.1512 12.1707C14.155 12.2344 14.1607 12.337 14.1389 12.5251C14.1085 12.7711 14.0344 13.0666 13.9603 13.2214C13.9095 13.3271 13.8422 13.424 13.7608 13.5083C13.6649 13.609 13.5599 13.7006 13.4473 13.7819C13.4083 13.8113 13.3687 13.8398 13.3285 13.8674C13.2103 13.9424 13.0889 14.0121 12.9647 14.0764C12.7201 14.2064 12.4499 14.281 12.1733 14.2949C11.9976 14.3044 11.8218 14.3177 11.6451 14.3082C11.6375 14.3082 11.1055 14.2256 11.1055 14.2256C9.75485 13.8703 8.50573 13.2048 7.45751 12.2819C7.24281 12.0928 7.04426 11.8895 6.84096 11.6872C5.99546 10.8464 5.35706 9.93919 4.96946 9.08229C4.77107 8.66172 4.66391 8.20393 4.65501 7.739C4.65109 7.1622 4.83964 6.60058 5.19081 6.143C5.26016 6.0537 5.32571 5.9606 5.43876 5.85325C5.55941 5.73925 5.63541 5.67845 5.71806 5.63665C5.82795 5.58158 5.94783 5.54926 6.07051 5.54165L6.07146 5.5426Z"
                                                      fill="white"/>
                                            </g>
                                        </svg>
                                    </a>
                                @endif
                                @if(settings('telegram'))
                                    <a href="{{ settings('telegram') }}" class="footer-messengers__item telegram">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="18" cy="18" r="18" fill="#2CA0D2"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M22.9451 11.1373C22.3388 11.3951 15.5047 14.3853 9.9382 16.8085C9.49737 17.0146 9.2234 17.4233 9.22567 17.8305C9.22793 18.2377 9.5611 18.5412 9.9481 18.5899C10.2799 18.639 13.5971 19.0787 13.5971 19.0787L14.5646 24.1633L15.0494 21.921L14.3125 18.5657L21.027 13.9474L15.5336 19.5769L17.4785 21.6021C17.5895 21.7033 19.9792 24.235 20.1458 24.3868C20.4235 24.6397 20.8683 25.1463 21.0892 25.145C21.476 25.1429 21.8598 24.6318 22.0213 23.8674C22.1831 23.1539 23.2606 18.2106 24.6053 11.637C24.767 10.9235 24.0471 10.6221 22.9451 11.1373Z"
                                                  fill="white"/>
                                        </svg>
                                    </a>
                                @endif
                                @if(settings('viber'))
                                    <a href="{{ settings('viber') }}" class="footer-messengers__item viber">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2133_21710)">
                                                <path
                                                        d="M19.318 11.4992C19.8978 6.73195 19.0395 3.72226 17.4914 2.36097C14.9928 0.036266 6.55535 -0.308604 3.56607 2.46459C2.22366 3.82113 1.75081 5.81204 1.69899 8.27675C1.64718 10.7422 1.58564 15.3608 5.99101 16.6137H5.99506L5.99101 18.5271C5.99101 18.5271 5.96105 19.3023 6.4679 19.4581C7.04762 19.6416 7.30995 19.2817 9.11307 17.1777C12.1282 17.4332 14.4439 16.8479 14.707 16.7624C15.3159 16.5631 18.761 16.1178 19.318 11.4992ZM9.41021 15.8314C9.41021 15.8314 7.50184 18.1562 6.90836 18.7597C6.71404 18.9558 6.5011 18.9376 6.50434 18.5485C6.50434 18.293 6.51891 15.3719 6.51891 15.3719C2.78394 14.3262 3.00417 10.3934 3.04465 8.33607C3.08514 6.27793 3.47053 4.59234 4.6073 3.45728C7.22979 1.05505 14.6277 1.59213 16.5126 3.32281C18.8169 5.31846 17.9967 10.9566 18.0015 11.1488C17.5279 15.0041 14.7362 15.2485 14.2228 15.4154C14.0034 15.4866 11.9671 15.9983 9.41021 15.8314Z"
                                                        fill="white"/>
                                                <path
                                                        d="M10.466 3.90891C10.1543 3.90891 10.1543 4.3835 10.466 4.38746C12.8845 4.40565 14.8763 6.05248 14.8981 9.07325C14.8981 9.39202 15.3758 9.38806 15.3718 9.06929C15.3459 5.81439 13.1703 3.9271 10.466 3.90891Z"
                                                        fill="white"/>
                                                <path
                                                        d="M13.6473 8.57253C13.64 8.88734 14.1169 8.90237 14.1209 8.5836C14.1606 6.78886 13.0279 5.31051 10.8993 5.15469C10.5876 5.13254 10.5552 5.61108 10.8661 5.63323C12.7121 5.77007 13.6845 7.00084 13.6473 8.57253Z"
                                                        fill="white"/>
                                                <path
                                                        d="M13.137 10.6141C12.737 10.3879 12.3297 10.5287 12.1613 10.751L11.8091 11.1963C11.6302 11.4225 11.2958 11.3924 11.2958 11.3924C8.85547 10.762 8.20288 8.26726 8.20288 8.26726C8.20288 8.26726 8.17293 7.92951 8.39639 7.74837L8.83685 7.39243C9.05708 7.22158 9.19634 6.81026 8.97206 6.40607C8.37291 5.34852 7.97051 4.98388 7.76567 4.70387C7.5503 4.44047 7.22643 4.38115 6.88961 4.55912H6.88233C6.18197 4.95936 5.41522 5.70842 5.66055 6.47963C6.07914 7.29276 6.84832 9.88482 9.29997 11.8433C10.4521 12.7695 12.2755 13.7187 13.0495 13.9378L13.0568 13.9489C13.8195 14.1973 14.5612 13.4189 14.9571 12.7142V12.7086C15.1328 12.3677 15.0745 12.045 14.8178 11.8338C14.3628 11.4004 13.6762 10.9218 13.137 10.6141Z"
                                                        fill="white"/>
                                                <path
                                                        d="M11.2327 6.92021C12.0108 6.9645 12.3881 7.36158 12.4285 8.17708C12.4431 8.49585 12.9168 8.4737 12.9022 8.15494C12.8504 7.09027 12.282 6.49703 11.2586 6.44166C10.9469 6.42347 10.9177 6.90201 11.2327 6.92021Z"
                                                        fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2133_21710">
                                                    <rect width="19" height="19" fill="white"
                                                          transform="translate(0.5 0.5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-content_bottom">
                    <div class="footer-left">
                        <div class="footer-copyright">
                            © {{ settings('copyright', default: 'site.com') }}
                        </div>
                        @if(settings('policy_page'))
                            <div class="footer-privacy">
                                <a href="{{ route('page.show', settings('policy_page', default: 1)) }}">
                                    Политика конфиденциальности
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="footer-middle">
                        <h5>Мы принимаем к оплате</h5>
                        <div class="footer-payment__list">
                            <div class="footer-payment__item">
                                <svg width="32" height="12" viewBox="0 0 32 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="visa">
                                        <path id="Vector" fill-rule="evenodd" clip-rule="evenodd"
                                              d="M29.1446 11.0012C29.1446 11.0012 28.9146 9.60115 28.8376 9.24915H25.5196C25.4276 9.52415 24.9686 11.0012 24.9686 11.0012H22.2616L26.1006 1.84516C26.196 1.57316 26.3813 1.34118 26.626 1.18818C26.8707 1.03618 27.1602 0.971166 27.4466 1.00517H29.4466L31.5466 11.0052H29.1466L29.1446 11.0012ZM27.8136 4.56016L27.6296 3.70615C27.5076 4.08715 27.2776 4.68315 27.2936 4.66715C27.2936 4.66715 26.4676 6.87918 26.2686 7.45918H28.4096C28.3026 6.95618 27.8136 4.56016 27.8136 4.56016ZM22.2456 3.31016C21.6409 3.03716 20.9817 2.90617 20.3186 2.92817C19.2936 2.92817 18.8346 3.35517 18.8186 3.78217C18.8186 4.25617 19.3696 4.56017 20.2866 5.01817C21.7706 5.71817 22.4586 6.59017 22.4436 7.73417C22.4286 9.79317 20.6696 11.1342 17.9436 11.1342C16.9604 11.1372 15.9854 10.9562 15.0686 10.6012L15.4196 8.35816L15.7716 8.52616C16.5227 8.89516 17.3517 9.07916 18.1886 9.06016C18.524 9.12516 18.8718 9.06117 19.1615 8.88017C19.4512 8.69817 19.661 8.41317 19.7486 8.08317C19.7486 7.64117 19.4126 7.32016 18.4026 6.83216C17.4236 6.36016 16.1236 5.56718 16.1386 4.13218C16.1546 2.19518 17.9436 0.832161 20.4986 0.832161C21.2921 0.827161 22.0798 0.966172 22.8236 1.24317L22.4716 3.41016L22.2456 3.31016ZM10.8656 11.0012L12.4876 1.00117H15.0726L13.4516 11.0012H10.8656ZM4.64056 11.0012L2.63356 3.47315L2.47656 2.86216C2.83026 3.03916 3.16526 3.25116 3.47656 3.49516C4.41796 4.26316 5.22286 5.18517 5.85756 6.22117L5.84956 6.17817L5.89956 6.43717L6.17556 7.81016L8.70956 1.00117H11.4476L7.37856 11.0012H4.63656H4.64056Z"
                                              fill="white"/>
                                        <path id="Vector_2" opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.47 3.49426C3.1587 3.25026 2.8237 3.03827 2.47 2.86127L2.323 2.30728C1.5929 1.87728 0.8127 1.53828 0 1.29828V0.988281H3.971C4.2091 0.989281 4.4397 1.07128 4.6244 1.22128C4.8092 1.37128 4.9368 1.58026 4.986 1.81326L5.846 6.22028C5.2128 5.18428 4.4096 4.26326 3.47 3.49426Z"
                                              fill="white"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="footer-payment__item">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M14.5469 19.002H1.54688C1.28168 19.002 1.02728 18.897 0.839775 18.709C0.652275 18.522 0.546875 18.267 0.546875 18.002V8.97601C0.546975 8.66901 0.665177 8.37302 0.876877 8.15002L1.32388 7.75L10.7719 0L11.5469 0.00201416V7.00201L11.5359 12.238L2.04987 18.25L13.5399 14.493L13.5469 8.00201H15.5469V19.002H14.5469ZM7.47388 7.48502C7.59788 7.37702 7.74348 7.297 7.90098 7.25C8.05848 7.203 8.22418 7.19001 8.38698 7.21301C8.54988 7.23501 8.70587 7.292 8.84487 7.38C8.98387 7.467 9.10288 7.58401 9.19288 7.72101C9.31188 8.05501 9.30788 8.41901 9.18388 8.75101C9.05888 9.08201 8.82188 9.35901 8.51288 9.53201C8.38878 9.64001 8.24307 9.72003 8.08547 9.76703C7.92797 9.81403 7.76217 9.82602 7.59937 9.80402C7.43647 9.78202 7.28027 9.72502 7.14127 9.63702C7.00217 9.55002 6.88338 9.43302 6.79288 9.29602C6.67438 8.96202 6.67768 8.59702 6.80238 8.26602C6.92698 7.93502 7.16488 7.65802 7.47388 7.48502Z"
                                          fill="white"/>
                                </svg>
                            </div>
                            <div class="footer-payment__item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M17.5409 9.20496C17.5449 9.30396 17.5469 9.40295 17.5469 9.50195C17.5469 13.644 14.1889 17.002 10.0469 17.002C5.90487 17.002 2.54688 13.644 2.54688 9.50195C2.54688 5.35995 5.90487 2.00195 10.0469 2.00195C11.5709 2.00195 12.9879 2.45594 14.1709 3.23694L15.8039 1.94394C14.2069 0.725939 12.2109 0.00195312 10.0469 0.00195312C4.79987 0.00195312 0.546875 4.25495 0.546875 9.50195C0.546875 14.749 4.79987 19.002 10.0469 19.002C15.2939 19.002 19.5469 14.749 19.5469 9.50195C19.5469 8.89695 19.4899 8.30496 19.3819 7.73096L17.5409 9.20496Z"
                                            fill="white"/>
                                    <path
                                            d="M9.85547 12.1377L18.4045 5.48871C18.1125 4.88971 17.7605 4.32569 17.3545 3.80469L9.85547 9.6377L6.35547 7.45068V9.94269L9.85547 12.1377Z"
                                            fill="white"/>
                                </svg>
                            </div>
                            <div class="footer-payment__item">
                                <svg width="25" height="17" viewBox="0 0 25 17" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M16.5547 16.0018C15.1497 16.0018 13.7697 15.6298 12.5547 14.9228C13.7707 14.2218 14.7807 13.2138 15.4827 11.9988C16.1847 10.7838 16.5547 9.40481 16.5547 8.00181C16.5547 6.59881 16.1847 5.21981 15.4827 4.00481C14.7807 2.78981 13.7707 1.78182 12.5547 1.08082C13.6177 0.464824 14.8077 0.10182 16.0327 0.0198198C17.2587 -0.0621802 18.4867 0.138802 19.6217 0.607802C20.7567 1.0768 21.7687 1.8008 22.5787 2.7238C23.3897 3.6468 23.9767 4.7438 24.2947 5.9308C24.6127 7.1168 24.6527 8.3608 24.4127 9.5648C24.1727 10.7698 23.6587 11.9028 22.9107 12.8768C22.1617 13.8508 21.1997 14.6388 20.0977 15.1808C18.9947 15.7228 17.7827 16.0038 16.5547 16.0018Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M8.55887 8.00196C8.55887 9.40496 8.92886 10.784 9.63086 11.999C10.3339 13.214 11.3429 14.222 12.5589 14.923C11.3429 15.628 9.96285 16 8.55685 16.002C7.15185 16.004 5.77086 15.635 4.55286 14.934C3.33486 14.232 2.32287 13.222 1.61987 12.005C0.916873 10.788 0.546875 9.40796 0.546875 8.00196C0.546875 6.59596 0.916873 5.21597 1.61987 3.99897C2.32287 2.78197 3.33486 1.77195 4.55286 1.06995C5.77086 0.368954 7.15185 -3.87879e-05 8.55685 0.00196121C9.96285 0.00396121 11.3429 0.375971 12.5589 1.08097C11.3429 1.78197 10.3339 2.78995 9.63086 4.00495C8.92886 5.21995 8.55887 6.59896 8.55887 8.00196Z"
                                          fill="white"/>
                                    <path opacity="0.75" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M12.5547 14.924C11.3387 14.223 10.3287 13.215 9.62668 12C8.92468 10.785 8.55469 9.40602 8.55469 8.00302C8.55469 6.60002 8.92468 5.22101 9.62668 4.00601C10.3287 2.79101 11.3387 1.78303 12.5547 1.08203C13.7707 1.78303 14.7807 2.79101 15.4827 4.00601C16.1847 5.22101 16.5547 6.60002 16.5547 8.00302C16.5547 9.40602 16.1847 10.785 15.4827 12C14.7807 13.215 13.7707 14.223 12.5547 14.924Z"
                                          fill="white"/>
                                </svg>
                            </div>
                            <div class="footer-payment__item">
                                <svg width="36" height="10" viewBox="0 0 36 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M9.58032 9.00218V3.65718H9.3363L7.59631 9.00218H5.5303H5.52432L3.7883 3.65718H3.54633V9.00218H0.570312V0.00218413H3.54633C3.91333 -0.00281587 4.27231 0.110199 4.57031 0.323199C4.86931 0.536198 5.0923 0.839189 5.2063 1.18819L6.42932 5.34819H6.68631L7.91132 1.18819C8.02632 0.838189 8.2503 0.534184 8.5513 0.321184C8.8513 0.107184 9.21232 -0.00381587 9.58032 0.00218413H12.5563V9.00218H9.58032Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M20.5509 9.00195V3.65695H20.3239L18.4429 8.14197C18.3269 8.39797 18.1399 8.61595 17.9039 8.76895C17.6679 8.92095 17.3919 9.00195 17.1109 9.00195H14.5859V0.00195312H17.5859V5.34695H17.8239L19.7289 0.856964L19.7439 0.822968C19.8639 0.577968 20.0509 0.370959 20.2829 0.226959C20.5149 0.0819592 20.7829 0.00595093 21.0559 0.00595093H23.5809V9.00595H20.5529L20.5509 9.00195Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M32.1139 6.01709H28.5859V9.00308H25.5859V3.99609H35.5389C35.2299 4.63209 34.7399 5.16309 34.1309 5.52209C33.5219 5.88209 32.8199 6.05409 32.1139 6.01709Z"
                                          fill="white"/>
                                    <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M35.4902 3.00797H30.0782C27.6062 3.00797 25.5502 1.70795 25.1172 0.00195312H32.1402C34.0302 0.00195312 35.5622 1.11894 35.5622 2.49594C35.5622 2.66894 35.5382 2.84097 35.4902 3.00797Z"
                                          fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="footer-right">
                        <div class="footer-contur">
                            <div class="footer-contur__left">
                                <a href="#" class="contur-link">
                                    Создание сайтов
                                </a>
                                <a href="#" class="contur-link">
                                    Продвижение сайтов
                                </a>
                            </div>
                            <div class="footer-contur__right">
                                <svg width="69" height="47" viewBox="0 0 69 47" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="&#208;&#155;&#208;&#158;&#208;&#147;&#208;&#158; &#208;&#154;&#208;&#158;&#208;&#157;&#208;&#162;&#208;&#163;&#208;&#160;">
                                        <path id="Vector"
                                              d="M45.6202 46.9034H0V0H45.6202V16.0478H43.5054V2.17434H2.11264V44.7291H43.5054V30.7508H45.6202V46.9034Z"
                                              fill="white"/>
                                        <path id="Vector_2"
                                              d="M9.32031 18.6348H11.4396V22.7874L14.4723 18.6348H17.015L13.5323 23.0336L17.2921 28.1663H14.6053L11.4396 23.6307V28.1663H9.32031V18.6348Z"
                                              fill="white"/>
                                        <path id="Vector_3"
                                              d="M22.8187 26.2021C24.5279 26.2021 25.4146 24.9599 25.4146 23.4009C25.4146 21.7098 24.2707 20.5998 22.8187 20.5998C21.3289 20.5998 20.2249 21.7098 20.2249 23.4009C20.2249 24.985 21.3799 26.2021 22.8187 26.2021ZM22.8187 18.6191C25.5565 18.6191 27.6005 20.4539 27.6005 23.4009C27.6005 26.2021 25.5565 28.1827 22.8187 28.1827C20.083 28.1827 18.0391 26.3457 18.0391 23.4009C18.0391 20.7183 19.9544 18.6191 22.8187 18.6191Z"
                                              fill="white"/>
                                        <path id="Vector_4"
                                              d="M36.5096 28.1661L32.1135 22.4476V28.1661H30.125V18.6367H31.8209L36.2192 24.3803L36.2147 18.6367H38.201L38.2054 28.1661H36.5096Z"
                                              fill="white"/>
                                        <path id="Vector_5"
                                              d="M40.7578 18.6348H48.4392V20.6769H45.6571V28.1663H43.5378V20.6769H40.7578V18.6348Z"
                                              fill="white"/>
                                        <path id="Vector_6"
                                              d="M58.7161 24.0653C58.7161 26.9781 56.916 28.1633 54.9297 28.1633C52.5466 28.1633 50.8906 26.7616 50.8906 23.9696V18.6387H53.0099V23.507C53.0099 24.9907 53.4466 26.1211 54.9297 26.1211C56.2132 26.1211 56.5968 25.1548 56.5968 23.63V18.6387H58.7161V24.0653V24.0653Z"
                                              fill="white"/>
                                        <path id="Vector_7"
                                              d="M63.3849 20.7081V22.8186H64.152C64.9611 22.8186 65.5951 22.5178 65.5951 21.7155C65.5951 21.1845 65.3335 20.7059 64.3138 20.7059C63.9946 20.7059 63.8216 20.6945 63.3849 20.7081ZM61.2656 28.1633V18.6387C61.7821 18.6387 64.152 18.6387 64.418 18.6387C66.9474 18.6387 67.8474 19.931 67.8474 21.6882C67.8474 23.4568 66.7878 24.1793 66.2846 24.4391L68.9647 28.1633H66.3954L64.1653 24.8608H63.3849V28.1633H61.2656V28.1633Z"
                                              fill="white"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="feedback-popup" style="display: none;" class="vue_app">
        <feedback-form-component
                privacy-policy-link="{{ route('page.show', settings('policy_page', default: 1)) }}"></feedback-form-component>
    </div>
</div>
</body>
</html>
