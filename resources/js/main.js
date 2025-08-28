import Swiper from 'swiper';
import {Navigation, Pagination, Controller, EffectFade, Autoplay, Thumbs} from 'swiper/modules';

Swiper.use([Navigation, Pagination, Controller, EffectFade, Autoplay, Thumbs]);

import 'jquery-ui';
import "jquery-ui/ui/widgets/mouse";
import "jquery-ui/ui/widgets/slider";
import 'jquery-ui-touch-punch';

import "jquery-ui/themes/base/all.css";

import '@fancyapps/fancybox';
import '@fancyapps/fancybox/dist/jquery.fancybox.css';

$(function () {
    $(document).on('click', '.time-more, .header_top-time__text, .header_top-time__ico', function () {
        $('.header_top-time__content').toggleClass('active')
    })

    $(document).on('click', '.phone-more', function () {
        $('.header_top-phone__additional').toggleClass('active')
    })

    $(document).on('click', '.footer-phone__more', function () {
        $('.footer-phone__content').toggleClass('active')
    })

    const mainSlider = new Swiper('.main-slider__content', {
        speed: 400,
        loop: true,
        navigation: {
            nextEl: '.main-slider__next',
            prevEl: '.main-slider__perv',
        },
        pagination: {
            el: '.main-slider__pagination',
            clickable: true,
        },
    });

    const hitSlider = new Swiper('.hit-swiper', {
        slidesPerView: 4,
        spaceBetween: 26,
        loop: true,
        navigation: {
            nextEl: '.hit-swiper_next',
            prevEl: '.hit-swiper_prev',
        },
        // breakpoints: {
        //     // when window width is >= 320px
        //     320: {
        //         slidesPerView: 2,
        //     },
        //     576: {
        //         slidesPerView: 4,
        //     },
        //     // when window width is >= 480px
        //     1200: {
        //         slidesPerView: 6,
        //     },
        //     // when window width is >= 640px
        //     1400: {
        //         slidesPerView: 7,
        //     }
        // },
    });

    const newsSlider = new Swiper('.news-swiper', {
        slidesPerView: 4,
        spaceBetween: 26,
        loop: true,
        navigation: {
            nextEl: '.news-swiper_next',
            prevEl: '.news-swiper_prev',
        },
        // breakpoints: {
        //     // when window width is >= 320px
        //     320: {
        //         slidesPerView: 2,
        //     },
        //     576: {
        //         slidesPerView: 4,
        //     },
        //     // when window width is >= 480px
        //     1200: {
        //         slidesPerView: 6,
        //     },
        //     // when window width is >= 640px
        //     1400: {
        //         slidesPerView: 7,
        //     }
        // },
    });
    const promotionSlider = new Swiper('.promotion-list', {
        slidesPerView: 2,
        spaceBetween: 40,
        speed: 400,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
            },
            // when window width is >= 480px
            1200: {
                slidesPerView: 1,
            },
            // when window width is >= 640px
            1400: {
                slidesPerView: 2,
            }
        }
    });

    const brandsSlider = new Swiper('.brands-list', {
        slidesPerView: 7,
        spaceBetween: 22,
        grid: {
            rows: 2,
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 4,
            },
            // when window width is >= 480px
            1200: {
                slidesPerView: 6,
            },
            // when window width is >= 640px
            1400: {
                slidesPerView: 7,
            }
        },
    });

    $('.header_middle-login__link').click(function () {
        $('.login-popup').fadeToggle();
    })
})

$(document).ready(function () {
    let page = 1; // текущая страница
    let perPage = 5; // количество блоков на странице
    let totalPages = Math.ceil($('.hit-item').length / perPage); // общее количество страниц
    let totalItems = $('.hit-item').length; // общее количество блоков
    let shownItems = perPage; // количество показанных блоков

    // показать только первые 10 блоков
    $('.hit-item').slice(0, perPage).show();

    // добавить обработчик события click на кнопку "Показать еще"
    $('.hit-list__more').click(function () {
        // проверить, не достигнут ли конец списка блоков
        if (page < totalPages) {
            // скрыть все блоки на текущей странице
            $('.hit-item').slice(page * perPage, (page + 1) * perPage).hide();
            // увеличить номер текущей страницы
            page++;
            // показать следующую страницу блоков
            $('.hit-item').slice(page * perPage - perPage, page * perPage).show();
            // обновить количество показанных блоков
            shownItems += perPage;
            // проверить, не нужно ли спрятать кнопку "Показать еще"
            if (shownItems >= totalItems) {
                $('.hit-list__more').hide();
            }
        }
    });
});

$(document).ready(function () {
    $('.mobile-menu__item').click(function (event) {
        if ($(this).hasClass('fake-current')) {
            $(".mobile-menu__item").removeClass('hide-current');
            $(".mobile-menu__item").removeClass('fake-current');
        } else {
            $(".mobile-menu__item").removeClass('fake-current');
            $(".mobile-menu__item").addClass('hide-current');
            $(this).addClass('fake-current');
            $(this).removeClass('hide-current');
        }
    });

    $('.catalog-menu__close, .modal-menu__close').click(function (event) {
        $(".mobile-menu__item").removeClass('hide-current');
        $(".mobile-menu__item").removeClass('fake-current');
    });
});

$(document).ready(function () {
    $('.menu-catalog, .catalog-menu__close').click(function (event) {
        $('.catalog-menu').toggleClass('show');
        $('.modal-menu').removeClass('show');
        if ($('.catalog-menu').hasClass('show')) {
            $('html').addClass('lock')
        } else {
            $('html').removeClass('lock')
        }
    });
    $('.menu-list, .modal-menu__close').click(function (event) {
        $('.modal-menu').toggleClass('show');
        $('.catalog-menu').removeClass('show');
        if ($('.modal-menu').hasClass('show')) {
            $('html').addClass('lock')
        } else {
            $('html').removeClass('lock')
        }
    });
});

$(function () {
    $('.header-burger, .burger-menu__close').click(function (event) {
        $('.header-burger, .burger-menu').toggleClass('active');
        $('html').toggleClass('lock')
    });
    $('.burger-menu__shadow').click(function (event) {
        $('.burger-menu').removeClass('active');
        $('html').removeClass('lock');
        $('.header-burger').removeClass('active');
    });
})

$(function () {
    $('.sub-menu__arrow').click(function () {
        $(this).toggleClass('active')
        $(this).siblings('.sub-menu').slideToggle();
    })
})

$(function () {
    $('.header-search__item').click(function () {
        $('.header-search__popup').fadeToggle();
    })
})

$(function () {


    const productSliderNav = new Swiper('.product-slider_navigate', {
        slidesPerView: 5,
        spaceBetween: 19,
        // freeMode: true,
        // watchSlidesProgress: true,
        direction: "vertical",
        // loop: true,

        // breakpoints: {
        //     // when window width is >= 320px
        //     320: {
        //         slidesPerView: 3,
        //     },
        //     576: {
        //         slidesPerView: 4,
        //     }
        // }
    });
    const productSliderMain = new Swiper('.product-slider_main', {
        spaceBetween: 15,
        // loop: true,
        thumbs: {
            swiper: productSliderNav,
        },
        navigation: {
            nextEl: '.product-next',
            prevEl: '.product-prev',
        },
        // navigation: {
        //     nextEl: '.main-slider__next',
        //     prevEl: '.main-slider__perv',
        // },
    });

    // productSliderMain.controller.control = productSliderNav;
    // productSliderNav.controller.control = productSliderMain;
})

$(function () {
    const similarSlider = new Swiper('.product-similar__slider', {
        slidesPerView: 5,
        spaceBetween: 14,
        speed: 400,
        loop: true,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            // when window width is >= 480px
            1200: {
                slidesPerView: 4,
            },
            // when window width is >= 640px
            1400: {
                slidesPerView: 5,
            }
        }
    });

    const watchedSlider = new Swiper('.product-watched__slider', {
        slidesPerView: 5,
        spaceBetween: 14,
        speed: 400,
        loop: true,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            // when window width is >= 480px
            1200: {
                slidesPerView: 4,
            },
            // when window width is >= 640px
            1400: {
                slidesPerView: 5,
            }
        }
    });
})

$(function () {
    $('.product-tabs__item:first-child').addClass('active')
    $('.product-description').addClass('active')
    $('.product-tabs__item').click(function () {
        $('.product-tabs__item').removeClass('active');
        $('.product-tabs__content').removeClass('active');
        $(this).addClass('active');
        $(`.product-tabs__content[data-tab="${this.dataset.tab}"]`).addClass('active');
    });
})


$(function () {
    $('.select-btn, .compare-btn').click(function () {
        $(this).toggleClass('active')
    })
})

