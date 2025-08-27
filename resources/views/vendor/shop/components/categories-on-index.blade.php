@if($categories->count() > 0)
    <section class="categories">
        <div class="categories__container container">
{{--            <h2 class="categories-heading">--}}
{{--                <a href="{{ route('shop.index') }}">Категории</a>--}}
{{--            </h2>--}}
            <div class="categories-list">
                @foreach($categories as $category)
                    <div class="categories-item">
                        <div class="categories-item__content">
                            <div class="categories-item__title">
                                {{ $category->title }}
                            </div>
                            <div class="categories-item__img">
                                @if($category->image()?->getPreview())
                                    <img src="{{ $category->image()?->getPreview() }} " alt="">
                                @else
                                    <img src="{{ asset('img/new.png') }}" alt="">
                                @endif
                            </div>
                        </div>
                        <a href="{{ $category->createUrl() }}" class="categories-item__btn">
                            <svg width="62" height="66" viewBox="0 0 62 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="33.5" cy="34.5" r="26.5" fill="#44A300"/>
                                <path d="M33.8447 19V50" stroke="white" stroke-width="4" stroke-linecap="round"/>
                                <path d="M49 34.1556H18" stroke="white" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
