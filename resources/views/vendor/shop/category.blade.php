@extends('layouts.other')

@section('content')
    <section class="products hfg">
        <div class="products-container container">
            <div class="products-head">
                <h1>{{ $category->title }}</h1>
                {!! $category->description !!}
                <a href="#" data-src="#filter-mobile" data-auto-focus="false" data-fancybox
                   class="products-filter__btn_mobile" data-options='{"touch" : false}'>Фильтр</a>
            </div>
            <div class="products-content">
                <div class="products-content_left">
                    @if($category->children->count() > 0)
                        <div class="products-menu">
                            <ul>
                                @foreach($categories as $childCategory)
                                    <li>
                                        <a href="{{ $childCategory->createUrl() }}">{{ $childCategory->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="products-filter">
                        <div class="products-filter__head">
                            <div class="products-filter__heading">Фильтр</div>
                        </div>
                        @if($filterableAttributes)
                            <div class="products-filter__body vue_app">
                                <product-filter-component url="{{ url()->current() }}"
                                                          :filterable-attributes="{{ $filterableAttributes?->toJson() }}"
                                                          :data="{{ json_encode($filterData) }}"></product-filter-component>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="products-content_right">
                    <div class="products-filter-tags">
                        <a href="#" class="products-filter-tags__item">Литиевые аккумуляторы</a>
                        <a href="#" class="products-filter-tags__item">Батарейки</a>
                    </div>
                    <div class="vue_app">
                        <product-sorter-component url="{{ url()->current() }}" :data="{{ json_encode($filterData) }}"
                                                  :attributes="{{ json_encode($sortAttributes) }}"></product-sorter-component>
                    </div>
                    <div class="js-filter-products">
                        @include('shop::partial.products')
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
