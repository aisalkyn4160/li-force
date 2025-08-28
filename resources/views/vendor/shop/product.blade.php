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
                                        <div class="product-slide_btns">
                                            <div class="select-btn">
                                                <svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.50994 2.23297C6.65827 2.1978 6.9819 2.13187 7.22912 2.08791C7.47634 2.04396 7.84942 2.00879 8.06068 2.0044C8.27194 2 8.67198 2.03956 8.95965 2.08791C9.24283 2.14066 9.65187 2.23736 9.86762 2.31209C10.0879 2.38242 10.389 2.5011 10.5419 2.57582C10.6992 2.65055 10.9958 2.82637 11.2071 2.96264C11.4184 3.0989 11.7914 3.40659 12.0386 3.64835C12.2904 3.89011 12.605 4.23736 12.7443 4.41758C12.8792 4.5978 13.0994 4.91429 13.2253 5.12088C13.3512 5.32747 13.468 5.51648 13.477 5.53846C13.492 5.56777 13.507 5.56777 13.522 5.53846C13.531 5.51648 13.6478 5.32747 13.7737 5.12088C13.8995 4.91429 14.1108 4.60659 14.2411 4.43956C14.3715 4.27253 14.6277 3.97363 14.8075 3.78462C14.9918 3.5956 15.3334 3.2967 15.5671 3.12527C15.8009 2.95385 16.156 2.72967 16.3537 2.62857C16.5515 2.53187 16.8662 2.3956 17.0504 2.33407C17.2347 2.26813 17.6348 2.16703 17.9404 2.10549C18.2551 2.04396 18.6461 2 18.8619 2C19.0642 2 19.4822 2.04396 19.7923 2.09231C20.1025 2.14505 20.5385 2.24615 20.7587 2.31648C20.979 2.39121 21.3565 2.54505 21.5903 2.66374C21.824 2.77802 22.1791 2.99341 22.3769 3.13407C22.5747 3.27473 22.8848 3.53846 23.0691 3.71868C23.2534 3.8989 23.4961 4.16264 23.6085 4.30769C23.7209 4.45275 23.9051 4.72088 24.0175 4.9011C24.1299 5.08132 24.3052 5.41978 24.4086 5.64835C24.512 5.87692 24.6513 6.24615 24.7142 6.46154C24.7772 6.67692 24.8715 7.09451 24.921 7.38462C24.9974 7.81538 25.0109 8.03956 24.9929 8.61538C24.9839 9.0022 24.939 9.4989 24.8985 9.71429C24.8581 9.92967 24.7457 10.3385 24.6513 10.6154C24.5569 10.8923 24.3726 11.3275 24.2423 11.5824C24.1119 11.8374 23.8917 12.2242 23.7523 12.4396C23.6175 12.6549 23.3298 13.0637 23.114 13.3407C22.9028 13.6176 22.4982 14.1055 22.2151 14.4176C21.9364 14.7297 21.3296 15.3538 20.8711 15.8022C20.4126 16.2506 19.7159 16.9055 19.3204 17.2571C18.9248 17.6088 18.3585 18.1011 18.0618 18.356C17.7651 18.6066 17.1089 19.1516 16.601 19.5648C16.093 19.978 15.1986 20.6945 14.6097 21.156C14.0254 21.622 13.531 22 13.5085 22C13.4905 22 12.9916 21.622 12.3982 21.1604C11.8049 20.6945 10.8565 19.9385 10.2856 19.4725C9.71479 19.011 8.97763 18.4 8.64501 18.1143C8.31239 17.8286 7.71457 17.3011 7.31902 16.9451C6.92347 16.589 6.24474 15.9429 5.81324 15.5121C5.38173 15.0769 4.80638 14.4659 4.53669 14.1538C4.27149 13.8374 3.9119 13.3934 3.74559 13.1648C3.57478 12.9363 3.33206 12.5802 3.20171 12.3736C3.07136 12.167 2.8601 11.7846 2.72974 11.5165C2.59939 11.2484 2.43308 10.8527 2.35667 10.6374C2.28475 10.422 2.18137 10.044 2.12743 9.8022C2.0645 9.51648 2.01955 9.12967 2.00607 8.7033C1.99258 8.3033 2.00157 7.88571 2.03304 7.64835C2.0645 7.43297 2.13642 7.05494 2.19485 6.81319C2.25329 6.57143 2.36116 6.20659 2.44207 6C2.51848 5.79341 2.6803 5.43736 2.80616 5.20879C2.93201 4.98022 3.14777 4.63736 3.28711 4.44396C3.42645 4.25495 3.70513 3.94286 3.90291 3.74506C4.10068 3.55165 4.41533 3.28352 4.59962 3.14725C4.78391 3.01538 5.09855 2.82198 5.29632 2.71648C5.4941 2.61538 5.78627 2.47912 5.94808 2.41758C6.1099 2.35604 6.36161 2.27253 6.50994 2.23297Z" stroke="#535353" stroke-width="2.5"/>
                                                </svg>

                                            </div>
                                            <div class="compare-btn">
                                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.14258 6.77637H1.25098C1.38321 6.79837 1.50603 6.8581 1.60059 6.95117C1.72021 7.06898 1.78613 7.22754 1.78613 7.39062V18.875C1.78613 19.0381 1.72026 19.1966 1.60059 19.3145C1.48062 19.4325 1.31561 19.5 1.14258 19.5C0.969727 19.4999 0.805438 19.4324 0.685547 19.3145C0.565846 19.1966 0.5 19.0381 0.5 18.875V7.40137C0.500056 7.23837 0.565986 7.08064 0.685547 6.96289C0.805454 6.84487 0.969646 6.77644 1.14258 6.77637ZM8 0.5C8.17288 0.5 8.33709 0.567655 8.45703 0.685547C8.57673 0.803364 8.64258 0.961861 8.64258 1.125V18.875C8.64258 19.0381 8.57673 19.1966 8.45703 19.3145C8.33709 19.4323 8.17289 19.5 8 19.5C7.82712 19.5 7.66291 19.4323 7.54297 19.3145C7.42327 19.1966 7.35742 19.0381 7.35742 18.875V1.125C7.35742 0.961861 7.42327 0.803364 7.54297 0.685547C7.66291 0.567654 7.82712 0.5 8 0.5ZM14.6846 12.2754C14.8131 12.2406 14.9498 12.2451 15.0752 12.2891C15.2005 12.333 15.3073 12.4141 15.3828 12.5186C15.4581 12.6228 15.4989 12.746 15.5 12.8721V18.8643C15.4999 19.0272 15.434 19.185 15.3145 19.3027C15.1945 19.4208 15.0304 19.4882 14.8574 19.4883C14.6844 19.4883 14.5194 19.4208 14.3994 19.3027C14.28 19.185 14.214 19.0271 14.2139 18.8643V12.8711C14.2145 12.7306 14.2653 12.5932 14.3584 12.4834L14.3594 12.4814C14.4427 12.3825 14.5561 12.3102 14.6846 12.2754Z" fill="#4F4F4F" stroke="#535353"/>
                                                </svg>

                                            </div>
                                        </div>
                                    <img src="{{ $image->getFull() }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if($product->previewImages()->count() > 1)
                        <div class="product-slider__container">
                            <button class="product-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none">
                                    <path d="M1.79883 9.00031L8.15031 2.42175C8.55027 2.0075 8.75031 1.80031 8.99883 1.80031C9.24735 1.80031 9.44739 2.0075 9.84735 2.42175L16.1988 9.00031" stroke="#44A300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div  thumbsSlider="" class="product-slider_navigate swiper">
                                <div class="product-wrapper swiper-wrapper">
                                    @foreach($product->previewImages() as $image)
                                        <div class="product-slide swiper-slide">
                                            <img src="{{ $image->getPreview() }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <button class="product-next">
                                <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.1992 1.80029L9.84774 8.37884C9.44778 8.7931 9.24774 9.00029 8.99922 9.00029C8.7507 9.00029 8.55066 8.7931 8.1507 8.37884L1.79922 1.80029" stroke="#44A300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
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
