<div class="main-slider__content swiper">
    <div class="main-slider__wrapper swiper-wrapper">
        @foreach($slides as $slide)
            <div class="main-slider__item swiper-slide">
                <div class="container">
                    <div class="main-slider__item-content">
                        <div class="main-slider__item-content-text">
                            {!! $slide->description !!}
                        </div>
                        @if($slide->image())
                            <div class="main-slider__item-content-img">
                                <img src="{{ $slide->image()?->getFull() }}" alt="{{ $slide->title }}" loading="lazy">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="main-slider__pagination"></div>
</div>
