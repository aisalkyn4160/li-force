@extends('layouts.app')
@section('app.content')
    @module('slider')
    <section class="main-slider">
        <x-slider::slider-component code="main"/>
    </section>
    @endmodule
    @module('shop')
    <x-shop::categories-on-index limit="6"/>
    <x-shop::hit-products limit="10"/>
    @endmodule
    <section class="about">
        <div class="container about_container">
           @if(iblock()->getById(2)?->elements[0]->image())
                <div class="about-img">
                    <img src="{{iblock()->getById(2)?->elements[0]->image()->getPreview()}}" alt="">
                </div>
           @endif
           <div class="about_content">
               {!! iblock()->getById(1)?->description !!}
               <div class="about-list">
                   @foreach(iblock()->getById(1)?->elements as $element)
                       <div class="about-list_item">
                          <div class="about-list_item-ttl">
                              {{$element->title}}
                          </div>
                           <span>
                               <img src="{{$element->image()->getPreview()}}" alt="">
                           </span>
                       </div>
                   @endforeach
               </div>
           </div>

            <div class="advantages">
                <h3>{{iblock()->getById(2)?->title}}</h3>

                <div class="advantages_list">
                    @foreach(iblock()->getById(2)?->elements as $element)
                        <div class="advantages_list-item">
                            <span>{{$element->title}}</span>
                            {!! $element->description !!}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="solutions">

        <div class="container solutions_container">
            {!! iblock()->getById(3)?->description !!}
            <div class="solutions_content">
                <div class="solutions_info">
                    <div>{{iblock()->getById(3)?->elements[1]->title}}</div>
                    {!! iblock()->getById(3)?->elements[1]->description !!}
                </div>
                <div class="solutions_list">
                    {!! iblock()->getById(3)?->elements[2]->description !!}
                </div>
            </div>
        </div>
        <div class="solutions_img">
            <img src="{{iblock()->getById(3)?->elements[0]->image()->getFull()}}" alt="">
        </div>
    </section>
    <x-services::services-on-index limit="4"/>
    @module('news')
    <section class="news">
        <x-news::last-news-component/>
    </section>
    @endmodule
    <section class="feedback">
        <div class="container feedback_container">
            <div class="vue_app feedback-form">
                <feedback-form-component
                    privacy-policy-link="{{ route('page.show', settings('policy_page', default: 1)) }}"></feedback-form-component>
            </div>
            <div class="feedback_right">
                <div class="feedback_right-text">Наши специалисты подберут аккумуляторы под Ваши конкретные требования и проконсультируют от этапа проектирования вплоть до истечения срока эксплуатации батареи.</div>

                <div class="feedback_right-img">
                    <img src="{{asset('/images/feedback-img.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

@endsection
