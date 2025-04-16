@extends('client.layouts.main')

@section('content')
    <div class="xc-page-wrapper">
        <div class="xc-scrollbar_progress"></div>
        @include('client.layouts.partials.header')
        <div class="xc-body-overlay xc-close-toggler"></div>
        <div class="xc-search-popup">
            <div class="xc-search-popup__wrap">
                <a href="#" class="xc-search-popup__close xc-close-toggler"></a>
                <div class="xc-search-popup__form">
                    <form role="search" method="get" action="#">
                        <input type="search" placeholder="Search Here..." value="" name="s">
                        <button type="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="xc-mobile-nav__wrapper">
            <div class="xc-mobile-nav__overlay xc-close-toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="xc-mobile-nav__content">
                <a href="#" class="xc-mobile-nav__close xc-search-popup__close xc-close-toggler"></a>
                <div class="logo-box">
                    <a href="index.html"><img src="{{ asset('assets/client/img/logo/white-logo.png') }}" width="150"
                            alt="" /></a>
                </div>
                <!-- /.logo-box -->
                <div class="xc-mobile-nav__menu"></div>
                <!-- /.mobile-nav__container -->

                <ul class="xc-mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:needhelp@swiftcart.com">needhelp@corpai.com</a>
                    </li>
                    <li>
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:666-888-0000">666 888 0000</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="xc-mobile-nav__top">
                    <div class="xc-mobile-nav__social">
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div><!-- /.mobile-nav__social -->
                </div><!-- /.mobile-nav__top -->
            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->
        <div class="xc-back-to-top-wrapper">
            <button id="xc_back-to-top" type="button" class="xc-back-to-top-btn">
                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
                <span class="xc-back-to-top-progress"></span>
            </button>
        </div>

        <!-- xc slider three start -->
        <div class="xc-slider-three p-relative">
            <div class="xc-slider-three__carousel swiftcart-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
            "items": 1,
            "animateOut": "fadeOut",
		    "animateIn": "fadeIn",
            "margin": 0,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": true,
            "nav":false,
            "URLhashListener":true,
            "dots":false,
            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"]
            }'>
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="xc-slider-three__img">
                                    <img src="{{ asset('assets/client/img/slider/slider-lg-3-1.png') }}" alt="slider image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xc-slider-three__content">
                                    <h4 class="xc-slider-three__bigtitle">Women’s</h4>
                                    <span class="xc-slider-three__subtitle"><i>women</i> Fashion</span>
                                    <h3 class="xc-slider-three__title"><span>Exclusive </span>Summer <br>
                                        Collection</h3>
                                    <a href="#" class="xc-slider-three__btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="xc-slider-three__img">
                                    <img src="{{ asset('assets/client/img/slider/slider-lg-3-2.png') }}" alt="slider image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xc-slider-three__content">
                                    <h4 class="xc-slider-three__bigtitle">Women’s</h4>
                                    <span class="xc-slider-three__subtitle"><i>women</i> Fashion</span>
                                    <h3 class="xc-slider-three__title"><span>Exclusive </span>Summer <br>
                                        Collection</h3>
                                    <a href="#" class="xc-slider-three__btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="xc-slider-three__img">
                                    <img src="{{ asset('assets/client/img/slider/slider-lg-3-3.png') }}" alt="slider image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xc-slider-three__content">
                                    <h4 class="xc-slider-three__bigtitle">Women’s</h4>
                                    <span class="xc-slider-three__subtitle"><i>women</i> Fashion</span>
                                    <h3 class="xc-slider-three__title"><span>Exclusive </span>Summer <br>
                                        Collection</h3>
                                    <a href="#" class="xc-slider-three__btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="xc-slider-three__img">
                                    <img src="{{ asset('assets/client/img/slider/slider-lg-3-4.png') }}"
                                        alt="slider image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xc-slider-three__content">
                                    <h4 class="xc-slider-three__bigtitle">Women’s</h4>
                                    <span class="xc-slider-three__subtitle"><i>women</i> Fashion</span>
                                    <h3 class="xc-slider-three__title"><span>Exclusive </span>Summer <br>
                                        Collection</h3>
                                    <a href="#" class="xc-slider-three__btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xc-slider-three__carousel-thumb swiftcart-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
        "items":4,
        "margin": 40,
        "smartSpeed": 700,
        "loop":true,
        "autoplay": true,
        "URLhashListener":true,
        "dots":false,
        "responsive": {
            "0": {
                "items": 3
            },
            "1200": {
                "items": 4
            }
        }
        }'>

                <a href="#item1" class="item">
                    <span class="xc-slider-three__thumb"><img src="{{ asset('assets/client/img/slider/slider-3-1.png') }}"
                            alt="solox"></span>
                </a><!-- testimonial-author -->
                <a href="#item2" class="item">
                    <span class="xc-slider-three__thumb"><img src="{{ asset('assets/client/img/slider/slider-3-2.png') }}"
                            alt="solox"></span>
                </a><!-- testimonial-author -->
                <a href="#item3" class="item">
                    <span class="xc-slider-three__thumb"><img src="{{ asset('assets/client/img/slider/slider-3-3.png') }}"
                            alt="solox"></span>
                </a><!-- testimonial-author -->
                <a href="#item4" class="item">
                    <span class="xc-slider-three__thumb"><img src="{{ asset('assets/client/img/slider/slider-3-4.png') }}"
                            alt="solox"></span>
                </a><!-- testimonial-author -->
            </div>
        </div>
        <!-- xc slider three end -->

        <!-- banner eight start  -->
        <div class="xc-banner-eight pt-80 pb-80">
            <div class="container">
                <div class="row gutter-y-20">
                    <div class="col-md-6 col-xl-3">
                        <div class="xc-banner-eight__item">
                            <div class="xc-banner-eight__img w-img">
                                <img src="{{ asset('assets/client/img/banner/banner-8-1.jpg') }}" alt="banner">
                            </div>
                            <div class="xc-banner-eight__content">
                                <h3 class="xc-banner-eight__title"><a href="#">NEW ARRIVALS</a></h3>
                                <span class=".xc-banner-eight__subtitle">Hot Collection</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="xc-banner-eight__item">
                            <div class="xc-banner-eight__img w-img">
                                <img src="{{ asset('assets/client/img/banner/banner-8-2.jpg') }}" alt="banner">
                            </div>
                            <div class="xc-banner-eight__content">
                                <h3 class="xc-banner-eight__title"><a href="#">Women</a></h3>
                                <span class=".xc-banner-eight__subtitle">Hot Collection</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="xc-banner-eight-lg">
                            <div class="xc-banner-eight-lg__content">
                                <span class="xc-banner-eight-lg__subtitle">UP TO 40% OFF</span>
                                <h3 class="xc-banner-eight-lg__title">The Top Collections <br>
                                    of fall 2021</h3>
                                <div class="xc-banner-eight-lg__btn">
                                    <a class="swiftcart-btn" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                            <div class="xc-banner-eight-lg__img">
                                <img src="{{ asset('assets/client/img/banner/banner-8-3.png') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner eight end  -->

        <!-- product eight start  -->
        <div class="xc-product-eight pb-80">
            <div class="container">
                <div class="xc-sec-heading xc-sec-heading-three text-center">
                    <h3 class="xc-sec-heading__title xc-style-3">Trending Outfits</h3>
                    <div class="xc-sec-heading__shape">
                        <img src="{{ asset('assets/client/img/shapes/sec-title-border.png') }}" alt="border">
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6">
                        <div class="xc-product-eight__item">
                            <div class="xc-product-eight__img">
                                <img src="{{ asset('assets/client/img/products/product-fas-5.png') }}" alt="fas">
                                <span class="xc-product-eight__offer">30% off</span>
                                <div class="xc-product-eight__icons">
                                    <button class="xc-product-eight__action">
                                        <i class="icon-love"></i>
                                        <span class="xc-product-eight__tooltip">Add To Wishlist</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-magnifying-glass"></i>
                                        <span class="xc-product-eight__tooltip">Quick view</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="xc-product-eight__tooltip">Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                            <div class="xc-product-eight__content">
                                <div class="xc-product-eight__ratting">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    (25 Reviews)
                                </div>
                                <h3 class="xc-product-eight__title"><a href="product-details.html">women Billie
                                        Eilish
                                        n21</a>
                                </h3>
                                <h5 class="xc-product-eight__price"><del>$489</del> $289</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="xc-product-eight__item">
                            <div class="xc-product-eight__img">
                                <img src="{{ asset('assets/client/img/products/product-fas-6.png') }}" alt="fas">
                                <span class="xc-product-eight__offer">30% off</span>
                                <div class="xc-product-eight__icons">
                                    <button class="xc-product-eight__action">
                                        <i class="icon-love"></i>
                                        <span class="xc-product-eight__tooltip">Add To Wishlist</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-magnifying-glass"></i>
                                        <span class="xc-product-eight__tooltip">Quick view</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="xc-product-eight__tooltip">Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                            <div class="xc-product-eight__content">
                                <div class="xc-product-eight__ratting">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    (25 Reviews)
                                </div>
                                <h3 class="xc-product-eight__title"><a href="product-details.html">women Billie
                                        Eilish
                                        n21</a>
                                </h3>
                                <h5 class="xc-product-eight__price"><del>$489</del> $289</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="xc-product-eight__item">
                            <div class="xc-product-eight__img">
                                <img src="{{ asset('assets/client/img/products/product-fas-7.png') }}" alt="fas">
                                <span class="xc-product-eight__offer">30% off</span>
                                <div class="xc-product-eight__icons">
                                    <button class="xc-product-eight__action">
                                        <i class="icon-love"></i>
                                        <span class="xc-product-eight__tooltip">Add To Wishlist</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-magnifying-glass"></i>
                                        <span class="xc-product-eight__tooltip">Quick view</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="xc-product-eight__tooltip">Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                            <div class="xc-product-eight__content">
                                <div class="xc-product-eight__ratting">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    (25 Reviews)
                                </div>
                                <h3 class="xc-product-eight__title"><a href="product-details.html">women Billie
                                        Eilish
                                        n21</a>
                                </h3>
                                <h5 class="xc-product-eight__price"><del>$489</del> $289</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="xc-product-eight__item">
                            <div class="xc-product-eight__img">
                                <img src="{{ asset('assets/client/img/products/product-fas-8.png') }}" alt="fas">
                                <span class="xc-product-eight__offer">30% off</span>
                                <div class="xc-product-eight__icons">
                                    <button class="xc-product-eight__action">
                                        <i class="icon-love"></i>
                                        <span class="xc-product-eight__tooltip">Add To Wishlist</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-magnifying-glass"></i>
                                        <span class="xc-product-eight__tooltip">Quick view</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="xc-product-eight__tooltip">Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                            <div class="xc-product-eight__content">
                                <div class="xc-product-eight__ratting">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    (25 Reviews)
                                </div>
                                <h3 class="xc-product-eight__title"><a href="product-details.html">women Billie
                                        Eilish
                                        n21</a>
                                </h3>
                                <h5 class="xc-product-eight__price"><del>$489</del> $289</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product eight end  -->

        <!-- countdown start -->
        <div class="xc-ads-countdown grey-bg-2">
            <div class="xc-ads-countdown__shape-2">
                <img src="{{ asset('assets/client/img/shapes/count-down-border-2.png') }}" alt="border">
            </div>
            <div class="container">
                <div class="row align-items-center gutter-y-30">
                    <div class="col-lg-6">
                        <div class="xc-ads-countdown__img w-img">
                            <img src="{{ asset('assets/client/img/ads/count-down.png') }}" alt="count">
                            <div class="xc-ads-countdown__shape">
                                <img src="{{ asset('assets/client/img/shapes/count-down-border.png') }}" alt="border">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="xc-ads-countdown__content">
                            <span class="xc-ads-countdown__subtitle">sumer collection</span>
                            <h3 class="xc-ads-countdown__title">Buy one <u>get one</u></h3>
                            <p class="xc-ads-countdown__info">Worttitor ut magna a hendrerit. Ut consequat lacinia
                                magna <br>
                                sed faucibus. Sed non odio justo. Nulla lao convallis orci <br> placerat purus
                                elementum
                                molestie</p>
                            <div class="xc-ads-countdown__count" data-countdown data-date="Nov 31 2024 20:20:22">
                                <div class="xc-ads-countdown__count-inner">
                                    <!-- <p>Deals ends in</p> -->
                                    <ul>
                                        <li><span data-days>0</span> Days</li>
                                        <li><span data-hours>0</span> Hrs</li>
                                        <li><span data-minutes>0</span> min</li>
                                        <li><span data-seconds>0</span> sec</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="xc-ads-countdown__btn">
                                <a class="swiftcart-btn-black swiftcart-btn-black-large" href="shop.html">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- countdown end -->

        <!-- product eight start  -->
        <div class="xc-product-eight pt-80 pb-80">
            <div class="container">
                <div class="xc-sec-heading xc-sec-heading-three text-center">
                    <h3 class="xc-sec-heading__title xc-style-3">Trending Outfits</h3>
                    <div class="xc-sec-heading__shape">
                        <img src="{{ asset('assets/client/img/shapes/sec-title-border.png') }}" alt="border">
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6">
                        <div class="xc-product-eight__item">
                            <div class="xc-product-eight__img">
                                <img src="{{ asset('assets/client/img/products/product-fas-1.png') }}" alt="fas">
                                <span class="xc-product-eight__offer">30% off</span>
                                <div class="xc-product-eight__icons">
                                    <button class="xc-product-eight__action">
                                        <i class="icon-love"></i>
                                        <span class="xc-product-eight__tooltip">Add To Wishlist</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-magnifying-glass"></i>
                                        <span class="xc-product-eight__tooltip">Quick view</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="xc-product-eight__tooltip">Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                            <div class="xc-product-eight__content">
                                <div class="xc-product-eight__ratting">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    (25 Reviews)
                                </div>
                                <h3 class="xc-product-eight__title"><a href="product-details.html">women Billie
                                        Eilish
                                        n21</a>
                                </h3>
                                <h5 class="xc-product-eight__price"><del>$489</del> $289</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="xc-product-eight__item">
                            <div class="xc-product-eight__img">
                                <img src="{{ asset('assets/client/img/products/product-fas-2.png') }}" alt="fas">
                                <span class="xc-product-eight__offer">30% off</span>
                                <div class="xc-product-eight__icons">
                                    <button class="xc-product-eight__action">
                                        <i class="icon-love"></i>
                                        <span class="xc-product-eight__tooltip">Add To Wishlist</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-magnifying-glass"></i>
                                        <span class="xc-product-eight__tooltip">Quick view</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="xc-product-eight__tooltip">Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                            <div class="xc-product-eight__content">
                                <div class="xc-product-eight__ratting">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    (25 Reviews)
                                </div>
                                <h3 class="xc-product-eight__title"><a href="product-details.html">women Billie
                                        Eilish
                                        n21</a>
                                </h3>
                                <h5 class="xc-product-eight__price"><del>$489</del> $289</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="xc-product-eight__item">
                            <div class="xc-product-eight__img">
                                <img src="{{ asset('assets/client/img/products/product-fas-3.png') }}" alt="fas">
                                <span class="xc-product-eight__offer">30% off</span>
                                <div class="xc-product-eight__icons">
                                    <button class="xc-product-eight__action">
                                        <i class="icon-love"></i>
                                        <span class="xc-product-eight__tooltip">Add To Wishlist</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-magnifying-glass"></i>
                                        <span class="xc-product-eight__tooltip">Quick view</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="xc-product-eight__tooltip">Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                            <div class="xc-product-eight__content">
                                <div class="xc-product-eight__ratting">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    (25 Reviews)
                                </div>
                                <h3 class="xc-product-eight__title"><a href="product-details.html">women Billie
                                        Eilish
                                        n21</a>
                                </h3>
                                <h5 class="xc-product-eight__price"><del>$489</del> $289</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="xc-product-eight__item">
                            <div class="xc-product-eight__img">
                                <img src="{{ asset('assets/client/img/products/product-fas-4.png') }}" alt="fas">
                                <span class="xc-product-eight__offer">30% off</span>
                                <div class="xc-product-eight__icons">
                                    <button class="xc-product-eight__action">
                                        <i class="icon-love"></i>
                                        <span class="xc-product-eight__tooltip">Add To Wishlist</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-magnifying-glass"></i>
                                        <span class="xc-product-eight__tooltip">Quick view</span>
                                    </button>
                                    <button class="xc-product-eight__action">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="xc-product-eight__tooltip">Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                            <div class="xc-product-eight__content">
                                <div class="xc-product-eight__ratting">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    (25 Reviews)
                                </div>
                                <h3 class="xc-product-eight__title"><a href="product-details.html">women Billie
                                        Eilish
                                        n21</a>
                                </h3>
                                <h5 class="xc-product-eight__price"><del>$489</del> $289</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product eight end  -->

        <!-- banner nine start  -->
        <div class="xc-banner-nine pb-80">
            <div class="container">
                <div class="row gutter-y-20">
                    <div class="col-lg-6">
                        <div class="xc-banner-nine__box">
                            <div class="xc-banner-nine__bg w-img">
                                <img src="{{ asset('assets/client/img/banner/banne-9-1.jpg') }}" alt="banner nine">
                            </div>
                            <div class="xc-banner-nine__content">
                                <span class="xc-banner-nine__subtitle">New arrival collection</span>
                                <h3 class="xc-banner-nine__title">off60%</h3>
                                <div class="xc-banner-nine__btn">
                                    <a href="shop.html" class="swiftcart-btn-black">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="xc-banner-nine__box xc-banner-nine__box-2">
                            <div class="xc-banner-nine__bg w-img">
                                <img src="{{ asset('assets/client/img/banner/banne-9-2.jpg') }}" alt="banner nine">
                            </div>
                            <div class="xc-banner-nine__content">
                                <span class="xc-banner-nine__subtitle">Check featured items</span>
                                <h3 class="xc-banner-nine__title">SALE<span>50%</span></h3>
                                <div class="xc-banner-nine__btn">
                                    <a href="shop.html" class="swiftcart-btn-black">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner nine end  -->

        <!--  best deal start -->
        <div class="xc-best-deal pb-80">
            <div class="container">
                <div class="xc-best-deal__filter-box has-border tabs-box">
                    <div class="xc-best-deal__filter-box-wrap mb-20">
                        <ul class="xc-best-deal__filter-btn tab-buttons">
                            <li data-tab="#all" class="tab-btn active-btn"><span>All</span>
                            </li>
                            <li data-tab="#new" class="tab-btn"><span>New Arrivals</span>
                            </li>
                            <li data-tab="#trending" class="tab-btn"><span>Trending</span></li>
                            <li data-tab="#top" class="tab-btn"><span>Top Seller</span></li>
                            <li data-tab="#best" class="tab-btn"><span>Best offer</span></li>
                        </ul>
                    </div>
                    <div class="xc-product-man-woman__wrapper tabs-content">
                        <div class="tab active-tab" id="all">
                            <div class="row gutter-y-30">
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-1.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-2.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-3.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="new">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-2.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-1.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-3.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="trending">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-3.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-1.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-2.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="top">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-1.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-2.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-3.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="best">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-1.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-3.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xc-product-ten__item">
                                        <div class="xc-product-ten__img w-img">
                                            <img src="{{ asset('assets/client/img/products/product-tending-2.png') }}"
                                                alt="product">
                                        </div>
                                        <div class="xc-product-ten__content">
                                            <h3 class="xc-product-ten__title"><a href="product-details.html">women
                                                    Billie Eilish</a></h3>
                                            <h4 class="xc-product-ten__price"><del>$489</del> $289</h4>
                                            <div class="xc-product-ten__btn">
                                                <a href="#"><i class="icon-magnifying-glass"></i></a>
                                                <a href="product-details.html"><i class="icon-eye"></i></a>
                                                <a href="cart.html"><i class="icon-grocery-store"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  best deal end -->

        <!-- blog post start  -->
        <div class="xc-blog-one pb-50 pt-80">
            <div class="container">
                <div class="xc-sec-heading xc-sec-heading-three text-center">
                    <h3 class="xc-sec-heading__title xc-style-3">Our latest blog post</h3>
                    <div class="xc-sec-heading__shape">
                        <img src="{{ asset('assets/client/img/shapes/sec-title-border.png') }}" alt="border">
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-xl-4">
                        <div class="xc-blog-one__item wow xcfadeUp" data-wow-delay='100ms'>
                            <div class="xc-blog-one__thumb w-img">
                                <img src="{{ asset('assets/client/img/blog/blog-1-1.jpg') }}"
                                    alt="assets/img/blog/blog-1-1.jpg">
                                <div class="xc-blog-one__meta-2">
                                    <a href="#">by - Swiftcart </a>
                                    <span>28 september</span>
                                </div>
                            </div>
                            <div class="xc-blog-one__content">
                                <h3 class="xc-blog-one__title"><a href="blog-details.html">How WooCommerce Can
                                        Transform Your Business</a></h3>
                                <ul class="xc-blog-one__meta list-unstyled">
                                    <li class="xc-post-cat">
                                        <a href="#">Fashion</a>
                                    </li>
                                    <li class="xc-post-comment">
                                        <a href="#">2 Comments</a>
                                    </li>
                                    <li class="xc-post-view">
                                        <span class="xc-post-view">147 View</span>
                                    </li>
                                </ul>
                                <p class="xc-blog-one__except">Amet minim mollit non deserunt ullaest sit aliqua
                                    dolor
                                    do amet sint. Velit officia consequat duis enim lit Exercitation veniam
                                    consequat
                                    sunt nostrud amet.</p>
                                <a href="blog-details.html" class="swiftcart-btn swiftcart-border-btn">read
                                    more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="xc-blog-one__item wow xcfadeUp" data-wow-delay='200ms'>
                            <div class="xc-blog-one__thumb w-img">
                                <img src="{{ asset('assets/client/img/blog/blog-1-2.jpg') }}"
                                    alt="assets/img/blog/blog-1-2.jpg">
                                <div class="xc-blog-one__meta-2">
                                    <a href="#">by - Swiftcart </a>
                                    <span>28 september</span>
                                </div>
                            </div>
                            <div class="xc-blog-one__content">
                                <h3 class="xc-blog-one__title"><a href="blog-details.html">Transforming Businesses
                                        in the Digital Age</a></h3>
                                <ul class="xc-blog-one__meta list-unstyled">
                                    <li class="xc-post-cat">
                                        <a href="#">Digital</a>
                                    </li>
                                    <li class="xc-post-comment">
                                        <a href="#">2 Comments</a>
                                    </li>
                                    <li class="xc-post-view">
                                        <span class="xc-post-view">147 View</span>
                                    </li>
                                </ul>
                                <p class="xc-blog-one__except">Amet minim mollit non deserunt ullaest sit aliqua
                                    dolor
                                    do amet sint. Velit officia consequat duis enim lit Exercitation veniam
                                    consequat
                                    sunt nostrud amet.</p>
                                <a href="blog-details.html" class="swiftcart-btn swiftcart-border-btn">read
                                    more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="xc-blog-one__item wow xcfadeUp" data-wow-delay='300ms'>
                            <div class="xc-blog-one__thumb w-img">
                                <img src="{{ asset('assets/client/img/blog/blog-1-3.jpg') }}"
                                    alt="assets/img/blog/blog-1-3.jpg">
                                <div class="xc-blog-one__meta-2">
                                    <a href="#">by - Swiftcart </a>
                                    <span>28 september</span>
                                </div>
                            </div>
                            <div class="xc-blog-one__content">
                                <h3 class="xc-blog-one__title"><a href="blog-details.html">Digital Fashion Trends
                                        with WooCommerce Shop</a></h3>
                                <ul class="xc-blog-one__meta list-unstyled">
                                    <li class="xc-post-cat">
                                        <a href="#">Shop</a>
                                    </li>
                                    <li class="xc-post-comment">
                                        <a href="#">2 Comments</a>
                                    </li>
                                    <li class="xc-post-view">
                                        <span class="xc-post-view">147 View</span>
                                    </li>
                                </ul>
                                <p class="xc-blog-one__except">Amet minim mollit non deserunt ullaest sit aliqua
                                    dolor
                                    do amet sint. Velit officia consequat duis enim lit Exercitation veniam
                                    consequat
                                    sunt nostrud amet.</p>
                                <a href="blog-details.html" class="swiftcart-btn swiftcart-border-btn">read
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog post end  -->
    </div>
@endsection
