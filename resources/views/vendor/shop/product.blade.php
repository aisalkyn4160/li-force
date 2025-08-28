@extends('layouts.other')

@section('content')

    <section class="product">
        <div class="product-container container">
            <h2 class="product-heading">{{ $product->title }}</h2>
            <div class="product-content">
                <div class="product-content__left">
                    <div class="product-slider_main swiper">
                        <div class="product-wrapper swiper-wrapper">
                            @foreach($product->previewImages() as $image)
                                <div class="product-slide swiper-slide">
                                    @if($product->hit)
                                        <div class="product-tag">Новинка</div>
                                    @endif
                                    <img src="{{ $image->getFull() }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if($product->previewImages()->count() > 1)
                        <div thumbsSlider="" class="product-slider__container">
                            <div class="product-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16"
                                     fill="none">
                                    <path
                                        d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM21 7L1 7V9H21V7Z"
                                        fill="#D1D5DB"/>
                                </svg>
                            </div>
                            <div class="product-slider_navigate swiper">
                                <div class="product-wrapper swiper-wrapper">
                                    @foreach($product->previewImages() as $image)
                                        <div class="product-slide swiper-slide">
                                            <img src="{{ $image->getPreview() }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16"
                                     fill="none">
                                    <path
                                        d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.29289L14.3431 0.928932C13.9526 0.538408 13.3195 0.538408 12.9289 0.928932C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM0 9L20 9V7L0 7L0 9Z"
                                        fill="#D1D5DB"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="product-content__right">
                    <div>На складе: <span>271 ед.</span></div>

                    <a href="#" download class="download-btn">
                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.96253 0.71099C8.03021 0.659343 8.15363 0.591806 8.24122 0.560023C8.32881 0.528241 8.4363 0.500432 8.48009 0.500432C8.52389 0.496459 8.63934 0.520296 8.73888 0.556051C8.83841 0.587833 8.9897 0.679207 9.0733 0.762636C9.16089 0.846064 9.25246 0.973194 9.28431 1.04073C9.3281 1.148 9.33607 2.10147 9.33607 6.1259C9.33607 8.85521 9.34801 11.0959 9.36393 11.1157C9.37986 11.1316 10.0487 10.496 10.8489 9.69744C12.1548 8.39834 12.322 8.24737 12.4813 8.20367C12.5808 8.17586 12.7321 8.16394 12.8197 8.17189C12.9073 8.17983 13.0506 8.22354 13.1382 8.26724C13.2258 8.31094 13.3532 8.42615 13.4208 8.52547C13.4885 8.62081 13.5562 8.77178 13.5721 8.85918C13.592 8.96645 13.5841 9.0896 13.5403 9.2366C13.4806 9.45113 13.4208 9.51072 11.1993 11.7275C9.12108 13.7974 8.90211 14.0039 8.73888 14.0437C8.63934 14.0715 8.48407 14.0794 8.38853 14.0675C8.29696 14.0556 8.17354 14.0198 8.10984 13.9881C8.05012 13.9563 6.98712 12.9154 3.49157 9.41537L3.44379 9.19687C3.40796 9.03796 3.40796 8.93466 3.43583 8.81945C3.45972 8.73205 3.53138 8.58903 3.59508 8.50163C3.6548 8.41423 3.77822 8.30696 3.86581 8.26724C3.94941 8.22354 4.09274 8.18381 4.18033 8.17189C4.26792 8.16394 4.4192 8.17586 4.51874 8.20367C4.67799 8.24737 4.8452 8.39834 6.15105 9.69744C6.95129 10.496 7.62014 11.1316 7.63607 11.1157C7.65199 11.0959 7.66393 8.85124 7.66393 1.15197L7.7555 0.977166C7.80328 0.877847 7.89485 0.758663 7.96253 0.71099Z" fill="#44A300"/>
                            <path d="M0.286651 11.7712C0.34637 11.7116 0.461827 11.6362 0.537471 11.6044C0.613115 11.5726 0.752459 11.5448 0.848009 11.5408C0.939578 11.5408 1.0829 11.5686 1.16651 11.6044C1.24614 11.6362 1.36557 11.7116 1.42529 11.7712C1.48899 11.8308 1.5726 11.946 1.61639 12.0255C1.68806 12.1645 1.69204 12.2758 1.69204 13.5669C1.69204 14.5085 1.70796 15.017 1.73981 15.1441C1.77166 15.2792 1.83934 15.3865 1.96674 15.5176C2.09813 15.6447 2.20562 15.7122 2.337 15.744C2.48033 15.7798 4.0171 15.7917 8.5 15.7917C12.9829 15.7917 14.5197 15.7798 14.663 15.744C14.7944 15.7122 14.9019 15.6447 15.0333 15.5176C15.1607 15.3865 15.2283 15.2792 15.2602 15.1441C15.292 15.017 15.308 14.5085 15.308 13.5669C15.308 12.2758 15.3119 12.1645 15.3836 12.0255C15.4274 11.946 15.511 11.8308 15.5747 11.7712C15.6344 11.7116 15.7539 11.6362 15.8375 11.6044C15.9171 11.5686 16.0564 11.5408 16.144 11.5408C16.2316 11.5408 16.371 11.5686 16.4546 11.6044C16.5342 11.6362 16.6536 11.7116 16.7133 11.7712C16.777 11.8308 16.8686 11.95 16.9124 12.0374C16.996 12.1924 17 12.2361 17 13.7258C17 15.2077 16.996 15.2633 16.9084 15.5732C16.8567 15.748 16.7611 15.9903 16.6974 16.1095C16.6337 16.2287 16.5063 16.4194 16.4108 16.5346C16.3192 16.6459 16.156 16.8127 16.0445 16.9001C15.937 16.9915 15.7459 17.1146 15.6265 17.1822C15.507 17.2457 15.2283 17.3451 14.6112 17.5H2.38876L1.99063 17.4007C1.77166 17.3451 1.49297 17.2457 1.37354 17.1822C1.2541 17.1146 1.063 16.9875 0.947541 16.8922C0.836066 16.8008 0.668853 16.6339 0.581265 16.5267C0.489696 16.4154 0.366276 16.2287 0.302576 16.1095C0.238876 15.9903 0.143326 15.748 0.0915691 15.5732C0.00398126 15.2633 0 15.2077 0 13.7258C0 12.2361 0.00398127 12.1924 0.0875878 12.0374C0.131382 11.95 0.222951 11.8308 0.286651 11.7712Z" fill="#44A300"/>
                        </svg>
                        Техническая спецификация
                    </a>
                    <div>
                        {!! $product->description !!}
                    </div>
                    <div class="product-price">
                        <div>Цена без НДС: <span>{{$product->price}} ₽ / шт</span></div>
                        <div>Цена с НДС: 284 ₽</div>
                    </div>

                    <div class="product-characteristic__heading">
                        Характеристики
                    </div>
                    <div class="product-characteristic__list">
                        <div class="product-characteristic__item">
                            @foreach($product->attributes() as $attribute)
                                <div class="product-characteristic__content">
                                    <div class="product-characteristic__left">{{ $attribute['name'] }}</div>
                                    <div class="product-characteristic__dotted"></div>
                                    <div class="product-characteristic__right">{{ $attribute['value'] }}</div>
                                </div>
                            @endforeach
                        </div>
                        <div>
                            Все характеристики
                            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.312827 9.73363C0.126198 9.56523 0.0214744 9.33754 0.0214744 9.10022C0.0214744 8.8629 0.126198 8.63521 0.312827 8.46681L4.53106 5.02287L0.316989 1.54404C0.21913 1.46241 0.140642 1.36395 0.0862002 1.25454C0.0317593 1.14513 0.00250769 1.02701 0.000153542 0.907238C-0.00220013 0.787464 0.0224166 0.668489 0.0725245 0.557426C0.122633 0.446363 0.19717 0.345475 0.291761 0.26081C0.386352 0.176146 0.499026 0.109437 0.623036 0.0646523C0.747046 0.019868 0.879834 -0.00207347 1.01352 0.000154112C1.1472 0.0023817 1.27904 0.0287433 1.40111 0.077628C1.52317 0.126513 1.63296 0.19695 1.72397 0.284707L6.66728 4.36579C6.67981 4.37701 6.69655 4.38074 6.70907 4.39197C6.89545 4.56075 7 4.78856 7 5.02599C7 5.26341 6.89545 5.49123 6.70907 5.66001L1.73094 9.73112C1.63882 9.816 1.52873 9.8835 1.40705 9.92968C1.28538 9.97586 1.15457 9.99977 1.02244 10C0.890297 10.0002 0.759434 9.9768 0.637561 9.93105C0.515688 9.8853 0.405313 9.81819 0.312827 9.73363Z" fill="#333333"/>
                            </svg>
                        </div>
                    </div>

                    <div>
                        <a href="#">
                            OZON
                            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.312827 9.73363C0.126198 9.56523 0.0214744 9.33754 0.0214744 9.10022C0.0214744 8.8629 0.126198 8.63521 0.312827 8.46681L4.53106 5.02287L0.316989 1.54404C0.21913 1.46241 0.140642 1.36395 0.0862002 1.25454C0.0317593 1.14513 0.00250769 1.02701 0.000153542 0.907238C-0.00220013 0.787464 0.0224166 0.668489 0.0725245 0.557426C0.122633 0.446363 0.19717 0.345475 0.291761 0.26081C0.386352 0.176146 0.499026 0.109437 0.623036 0.0646523C0.747046 0.019868 0.879834 -0.00207347 1.01352 0.000154112C1.1472 0.0023817 1.27904 0.0287433 1.40111 0.077628C1.52317 0.126513 1.63296 0.19695 1.72397 0.284707L6.66728 4.36579C6.67981 4.37701 6.69655 4.38074 6.70907 4.39197C6.89545 4.56075 7 4.78856 7 5.02599C7 5.26341 6.89545 5.49123 6.70907 5.66001L1.73094 9.73112C1.63882 9.816 1.52873 9.8835 1.40705 9.92968C1.28538 9.97586 1.15457 9.99977 1.02244 10C0.890297 10.0002 0.759434 9.9768 0.637561 9.93105C0.515688 9.8853 0.405313 9.81819 0.312827 9.73363Z" fill="white"/>
                            </svg>
                        </a>

                        <a href="#">
                            Wildberries
                            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.312827 9.73363C0.126198 9.56523 0.0214744 9.33754 0.0214744 9.10022C0.0214744 8.8629 0.126198 8.63521 0.312827 8.46681L4.53106 5.02287L0.316989 1.54404C0.21913 1.46241 0.140642 1.36395 0.0862002 1.25454C0.0317593 1.14513 0.00250769 1.02701 0.000153542 0.907238C-0.00220013 0.787464 0.0224166 0.668489 0.0725245 0.557426C0.122633 0.446363 0.19717 0.345475 0.291761 0.26081C0.386352 0.176146 0.499026 0.109437 0.623036 0.0646523C0.747046 0.019868 0.879834 -0.00207347 1.01352 0.000154112C1.1472 0.0023817 1.27904 0.0287433 1.40111 0.077628C1.52317 0.126513 1.63296 0.19695 1.72397 0.284707L6.66728 4.36579C6.67981 4.37701 6.69655 4.38074 6.70907 4.39197C6.89545 4.56075 7 4.78856 7 5.02599C7 5.26341 6.89545 5.49123 6.70907 5.66001L1.73094 9.73112C1.63882 9.816 1.52873 9.8835 1.40705 9.92968C1.28538 9.97586 1.15457 9.99977 1.02244 10C0.890297 10.0002 0.759434 9.9768 0.637561 9.93105C0.515688 9.8853 0.405313 9.81819 0.312827 9.73363Z" fill="white"/>
                            </svg>

                        </a>

                    </div>
                    @if($product->price > 0)
                        <div class="product_counter">
                            <div class="counter" id="counter">
                                <button class="counter-btn minus">-</button>
                                <span class="counter-value">1</span>
                                <button class="counter-btn plus">+</button>
                            </div>
                        </div>
                        <x-shop::add-to-cart :product="$product" css="product-btn" type="button" text="В корзину"/>
                    @endif
                    <!--                    <div class="product-offer product-offer_colors">
                                            <div class="product-offer__heading">Цвет</div>
                                            <div class="product-offer__body">
                                                <div class="product-offer__item">
                                                    <input type="radio" id="product-color" name="product-color">
                                                    <label for="product-color" style="background-color: #FFF">
                                                    </label>
                                                </div>
                                                <div class="product-offer__item">
                                                    <input type="radio" id="product-color1" name="product-color">
                                                    <label for="product-color1" style="background-color: #14834E">
                                                    </label>
                                                </div>
                                                <div class="product-offer__item">
                                                    <input type="radio" id="product-color2" name="product-color">
                                                    <label for="product-color2" style="background-color: #FF7676">
                                                    </label>
                                                </div>
                                                <div class="product-offer__item">
                                                    <input type="radio" id="product-color3" name="product-color">
                                                    <label for="product-color3" style="background-color: #144083">
                                                    </label>
                                                </div>
                                                <div class="product-offer__item">
                                                    <input type="radio" id="product-color4" name="product-color">
                                                    <label for="product-color4" style="background-color: #f3db04">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>-->

                    @if($tradeOfferAttributes)
                        @foreach($tradeOfferAttributes as $tradeOfferAttribute)
                            <div class="product-offer product-offer_sizes">
                                <div class="product-offer__heading">{{ $tradeOfferAttribute['name'] }}</div>
                                <div class="product-offer__body">
                                    @foreach($tradeOfferAttribute['attributes'] as $attributeValue)
                                        @if($attributeValue['product'])
                                            <a href="{{ $attributeValue['product']['url'] }}"
                                               title="{{ $attributeValue['product']['title'] }}"
                                               class="product-offer__item {{ $attributeValue['current'] ? 'active':'' }}">
                                                {{ $attributeValue['value'] }}
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
                <div class="product-content__bottom">
                    <div class="product-tabs">
                        <div class="product-tabs__item" data-tab="characteristic">Характеристики</div>
                        <div class="product-tabs__item" data-tab="description">Области применения</div>
                    </div>
                    @if(count($productAttributes = $product->attributes()) > 0)
                        <div class="product-characteristic product-tabs__content" data-tab="characteristic">
                            <div class="product-characteristic__heading">
                                Характеристики
                            </div>
                            <div class="product-characteristic__list">
                                <div class="product-characteristic__item">
                                    @foreach($product->attributes() as $attribute)
                                        <div class="product-characteristic__content">
                                            <div class="product-characteristic__left">{{ $attribute['name'] }}</div>
                                            <div class="product-characteristic__dotted"></div>
                                            <div class="product-characteristic__right">{{ $attribute['value'] }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="product-description product-tabs__content" data-tab="description">
                        <div class="product-description__heading">
                            Описание
                        </div>
                        <div class="product-description__body">
                            {!! $product->description  !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @if($similarProducts->count() > 0)
        <section class="product-similar">
            <div class="product-similar__container container">
                <h2>Похожие товары</h2>
                <div class="product-similar__slider swiper">
                    <div class="product-similar__wrapper swiper-wrapper">
                        @foreach($similarProducts as $similarProduct)
                            @include('shop::partial.product_card', ['product' => $similarProduct, 'cssClass' => 'swiper-slide'])
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if($recentProducts->count() > 0)
        <section class="product-watched">
            <div class="product-watched__container container">
                <h2>Вы недавно смотрели</h2>
                <div class="product-watched__slider swiper">
                    <div class="product-watched__wrapper swiper-wrapper">
                        @foreach($recentProducts as $recentProduct)
                            @include('shop::partial.product_card', ['product' => $recentProduct, 'cssClass' => 'swiper-slide'])
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
