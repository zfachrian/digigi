@extends('front.templates.main')
@section('title') Lapak Alkes Digital @endsection
@section('isi')
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header header--3 bg__white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{asset('front/images/logo/digigi.jpg')}}" style="
                                    vertical-align: middle;
                                    width: 120px;
                                    height: 120px;
                                    border-radius: 10%;" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                            <nav class="mainmenu__nav hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li class="drop"><a href="index.html">Home</a></li>
                                    <li class="drop"><a href="portfolio-card-box-2.html">portfolio</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-card-box-2.html">portfolio</a></li>
                                            <li><a href="single-portfolio.html">Single portfolio</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="blog.html">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="blog.html">blog 3 column</a></li>
                                            <li><a href="blog-details.html">Blog details</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="shop.html">Shop</a>
                                        <ul class="dropdown mega_dropdown">
                                            <!-- Start Single Mega MEnu -->
                                            <li><a class="mega__title" href="shop.html">shop layout</a>
                                                <ul class="mega__item">
                                                    <li><a href="shop.html">default shop</a></li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                            <!-- Start Single Mega MEnu -->
                                            <li><a class="mega__title" href="shop.html">product details layout</a>
                                                <ul class="mega__item">
                                                    <li><a href="product-details.html">tab style 1</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Single Mega MEnu -->
                                    <!-- Start Single Mega MEnu -->
                                    <li>
                                        <ul class="mega__item">
                                            <li>
                                                <div class="mega-item-img">
                                                    <a href="shop.html">
                                                        <img src="{{asset('front/images/feature-img/3.png')}}" alt="">
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Single Mega MEnu -->
                                </ul>
                                </li>
                                <li class="drop"><a href="#">pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="#">testimonials <span><i
                                                        class="zmdi zmdi-chevron-right"></i></span></a>
                                            <ul class="lavel-dropdown">
                                                <li><a href="customer-review.html">customer review</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">shop</a></li>
                                        <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="team.html">team</a></li>
                                        <li><a href="login-register.html">login & register</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="#">portfolio</a>
                                            <ul>
                                                <li><a href="portfolio-card-box-2.html">portfolio</a></li>
                                                <li><a href="single-portfolio.html">Single portfolio</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">blog</a>
                                            <ul>
                                                <li><a href="blog.html">blog 3 column</a></li>
                                                <li><a href="blog-details.html">Blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="customer-review.html">customer review</a></li>
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="team.html">team</a></li>
                                                <li><a href="login-register.html">login & register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-sm-4 col-xs-3">
                            <ul class="menu-extra">
                                <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                                <li><a href="login-register.html"><span class="ti-user"></span></a></li>
                                <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                                <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->

        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Offset MEnu -->
            <div class="offsetmenu">
                <div class="offsetmenu__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="off__contact">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset('front/images/logo/digigi.jpg')}}" alt="logo">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut
                            labore.</p>
                    </div>
                    <ul class="sidebar__thumd">
                        <li><a href="#"><img src="{{asset('front/images/sidebar-img/1.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{asset('front/images/sidebar-img/2.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{asset('front/images/sidebar-img/3.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{asset('front/images/sidebar-img/4.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{asset('front/images/sidebar-img/5.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{asset('front/images/sidebar-img/6.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{asset('front/images/sidebar-img/7.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{asset('front/images/sidebar-img/8.jpg')}}" alt="sidebar images"></a></li>

                    </ul>
                    <div class="offset__widget">
                        <div class="offset__single">
                            <h4 class="offset__title">Language</h4>
                            <ul>
                                <li><a href="#"> Engish </a></li>
                                <li><a href="#"> French </a></li>
                                <li><a href="#"> German </a></li>
                            </ul>
                        </div>
                        <div class="offset__single">
                            <h4 class="offset__title">Currencies</h4>
                            <ul>
                                <li><a href="#"> USD : Dollar </a></li>
                                <li><a href="#"> EUR : Euro </a></li>
                                <li><a href="#"> POU : Pound </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset__sosial__share">
                        <h4 class="offset__title">Follow Us On Social</h4>
                        <ul class="off__soaial__link">
                            <li><a class="bg--twitter" href="#" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                            </li>

                            <li><a class="bg--instagram" href="#" title="Instagram"><i
                                        class="zmdi zmdi-instagram"></i></a></li>

                            <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                            </li>

                            <li><a class="bg--googleplus" href="#" title="Google Plus"><i
                                        class="zmdi zmdi-google-plus"></i></a></li>

                            <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Offset MEnu -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="{{asset('front/images/product/sm-img/1.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="{{asset('front/images/product/sm-img/2.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.html">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Feature Product -->
        <section class="categories-slider-area bg__white">
            <div class="container">
                <div class="row">
                    <!-- Start Left Feature -->
                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style">
                        <!-- Start Slider Area -->
                        <div class="slider__container slider--one">
                            <div class="slider__activation__wrap owl-carousel owl-theme">
                                <!-- Start Single Slide -->
                                <div class="slide slider__full--screen slider-height-inherit slider-text-right"
                                    style="background: rgba(0, 0, 0, 0) url({{asset('front/images/slider/bg/1.png')}}) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div
                                                class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <h1>New Product <span class="text--theme">Collection</span></h1>
                                                    <div class="slider__btn">
                                                        <a class="htc__btn" href="cart.html">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide -->
                                <!-- Start Single Slide -->
                                <div class="slide slider__full--screen slider-height-inherit  slider-text-left"
                                    style="background: rgba(0, 0, 0, 0) url({{asset('front/images/slider/bg/2.png')}}) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <h1>New Product <span class="text--theme">Collection</span></h1>
                                                    <div class="slider__btn">
                                                        <a class="htc__btn" href="cart.html">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide -->
                            </div>
                        </div>
                        <!-- Start Slider Area -->
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
                        <div class="categories-menu mrg-xs">
                            <div class="category-heading">
                                <h3> Browse Categories</h3>
                            </div>
                            <div class="category-menu-list">
                                <ul>
                                    <li><a href="#"><img alt="" src="{{asset('front/images/icons/thum2.png')}}"> Women’s Clothing <i
                                                class="zmdi zmdi-chevron-right"></i></a>
                                        <div class="category-menu-dropdown">
                                            <div class="category-part-1 category-common mb--30">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common mb--30">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-3 category-common">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-4 category-common">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><img alt="" src="{{asset('front/images/icons/thum3.png')}}"> Man Fashion <i
                                                class="zmdi zmdi-chevron-right"></i></a>
                                        <div class="category-menu-dropdown">
                                            <div class="category-part-1 category-common2 mb--30">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common2 mb--30">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-3 category-common2 mb--30">
                                                <h4 class="categories-subtitle">dress</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-banner-img">
                                                <a href="single-product.html">
                                                    <img src="{{asset('front/images/feature-img/5.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><img alt="" src="{{asset('front/images/icons/thum4.png')}}"> Computer & Office <i
                                                class="zmdi zmdi-chevron-right"></i></a>
                                        <div class="category-menu-dropdown">
                                            <div class="category-menu-dropdown-top">
                                                <div class="category-part-1 category-common2 mb--30">
                                                    <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                    <ul>
                                                        <li><a href="#"> Men’s Clothing</a></li>
                                                        <li><a href="#"> Computer & Office</a></li>
                                                        <li><a href="#"> Jewelry & Watches</a></li>
                                                        <li><a href="#"> Bags & Shoes</a></li>
                                                        <li><a href="#"> Phones & Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="category-part-2 category-common2 mb--30">
                                                    <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                    <ul>
                                                        <li><a href="#"> Men’s Clothing</a></li>
                                                        <li><a href="#"> Computer & Office</a></li>
                                                        <li><a href="#"> Jewelry & Watches</a></li>
                                                        <li><a href="#"> Bags & Shoes</a></li>
                                                        <li><a href="#"> Phones & Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="category-part-3 category-common2 mb--30">
                                                    <h4 class="categories-subtitle">Jewelry & Watches</h4>
                                                    <ul>
                                                        <li><a href="#"> Men’s Clothing</a></li>
                                                        <li><a href="#"> Computer & Office</a></li>
                                                        <li><a href="#"> Jewelry & Watches</a></li>
                                                        <li><a href="#"> Bags & Shoes</a></li>
                                                        <li><a href="#"> Phones & Accessories</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="category-menu-dropdown-bottom">
                                                <div class="single-category-brand">
                                                    <a href="#"><img src="{{asset('front/images/brand/6.png')}}" alt=""></a>
                                                </div>
                                                <div class="single-category-brand">
                                                    <a href="#"><img src="{{asset('front/images/brand/7.png')}}" alt=""></a>
                                                </div>
                                                <div class="single-category-brand">
                                                    <a href="#"><img src="{{asset('front/images/brand/8.png')}}" alt=""></a>
                                                </div>
                                                <div class="single-category-brand">
                                                    <a href="#"><img src="{{asset('front/images/brand/9.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><img alt="" src="{{asset('front/images/icons/thum5.png')}}"> Jewelry & Watches <i
                                                class="zmdi zmdi-chevron-right"></i></a>
                                        <div class="category-menu-dropdown">
                                            <div class="category-menu-dropdown-left">
                                                <div class="category-part-1 category-common mb--30">
                                                    <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                    <ul>
                                                        <li><a href="#"> Men’s Clothing</a></li>
                                                        <li><a href="#"> Computer & Office</a></li>
                                                        <li><a href="#"> Jewelry & Watches</a></li>
                                                        <li><a href="#"> Bags & Shoes</a></li>
                                                        <li><a href="#"> Phones & Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="category-part-2 category-common mb--30">
                                                    <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                    <ul>
                                                        <li><a href="#"> Men’s Clothing</a></li>
                                                        <li><a href="#"> Computer & Office</a></li>
                                                        <li><a href="#"> Jewelry & Watches</a></li>
                                                        <li><a href="#"> Bags & Shoes</a></li>
                                                        <li><a href="#"> Phones & Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="category-part-3 category-common">
                                                    <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                    <ul>
                                                        <li><a href="#"> Men’s Clothing</a></li>
                                                        <li><a href="#"> Computer & Office</a></li>
                                                        <li><a href="#"> Jewelry & Watches</a></li>
                                                        <li><a href="#"> Bags & Shoes</a></li>
                                                        <li><a href="#"> Phones & Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="category-part-4 category-common">
                                                    <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                    <ul>
                                                        <li><a href="#"> Men’s Clothing</a></li>
                                                        <li><a href="#"> Computer & Office</a></li>
                                                        <li><a href="#"> Jewelry & Watches</a></li>
                                                        <li><a href="#"> Bags & Shoes</a></li>
                                                        <li><a href="#"> Phones & Accessories</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="category-menu-dropdown-right">
                                                <div class="menu-right-img">
                                                    <a href="#"><img src="{{asset('front/images/feature-img/2.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><img alt="" src="{{asset('front/images/icons/thum6.png')}}"> Men’s Clothing <i
                                                class="zmdi zmdi-chevron-right"></i></a>
                                        <div class="category-menu-dropdown">
                                            <div class="category-menu-dropdown-left">
                                                <div class="category-part-1 category-common">
                                                    <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                    <ul>
                                                        <li><a href="#"> Men’s Clothing</a></li>
                                                        <li><a href="#"> Computer & Office</a></li>
                                                        <li><a href="#"> Jewelry & Watches</a></li>
                                                        <li><a href="#"> Bags & Shoes</a></li>
                                                        <li><a href="#"> Phones </a></li>
                                                        <li><a href="#"> Computer & Office</a></li>
                                                        <li><a href="#"> Phones & Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="category-part-2 category-common">
                                                    <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                    <ul>
                                                        <li><a href="#"> Men’s Clothing</a></li>
                                                        <li><a href="#"> Computer & Office</a></li>
                                                        <li><a href="#"> Jewelry & Watches</a></li>
                                                        <li><a href="#"> Bags & Shoes</a></li>
                                                        <li><a href="#"> Phones </a></li>
                                                        <li><a href="#"> Computer & Office</a></li>
                                                        <li><a href="#"> Phones & Accessories</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="category-menu-dropdown-right">
                                                <div class="menu-right-img">
                                                    <a href="#"><img src="{{asset('front/images/feature-img/1.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><img alt="" src="{{asset('front/images/icons/thum7.png')}}"> Bags & Shoes</a></li>
                                    <li><a href="#"><img alt="" src="{{asset('front/images/icons/thum8.png')}}"> Toys & Kids & Baby</a>
                                    </li>
                                    <li><a href="#"><img alt="" src="{{asset('front/images/icons/thum9.png')}}"> Automobiles </a></li>
                                    <li><a href="#"><img alt="" src="{{asset('front/images/icons/thum10.png')}}"> Jewelry & Watches</a>
                                    </li>
                                    <li><a href="#"><img alt="" src="{{asset('front/images/icons/thum2.png')}}"> Consumer Electronics</a>
                                    </li>
                                    <li><a href="#"><img alt="" src="{{asset('front/images/icons/thum3.png')}}"> all Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Left Feature -->
                </div>
            </div>
        </section>
        <!-- End Feature Product -->

        <div class="only-banner ptb--100 bg__white">
            <div class="container">
                <div class="only-banner-img">
                    <a href="shop-sidebar.html"><img src="{{asset('front/images/new-product/3.jpg')}}" alt="new product"></a>
                </div>
            </div>
        </div>

        <!-- Start Our Product Area -->
        <section class="htc__product__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-categories-all">
                            <div class="product-categories-title">
                                <h3>Jewelry & watches</h3>
                            </div>
                            <div class="product-categories-menu">
                                <ul>
                                    <li><a href="#">awesome Rings</a></li>
                                    <li><a href="#">Hot Earrings</a></li>
                                    <li><a href="#">Jewelry Sets</a></li>
                                    <li><a href="#">Beads Jewelry</a></li>
                                    <li><a href="#">Men's Watches</a></li>
                                    <li><a href="#">Women’s Watches</a></li>
                                    <li><a href="#">Popular Bracelets</a></li>
                                    <li><a href="#"> Pendant Necklaces</a></li>
                                    <li><a href="#">Children's Watches</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="product-style-tab">
                            <div class="product-tab-list">
                                <!-- Nav tabs -->
                                <ul class="tab-style" role="tablist">
                                    <li class="active">
                                        <a href="#home1" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>latest </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home2" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>best sale </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home3" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>top rated</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home4" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>on sale</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content another-product-style jump">
                                <div class="tab-pane active" id="home1">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/1.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/2.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/3.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/4.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/5.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="home2">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/4.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/5.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/6.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/7.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/8.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="home3">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/2.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/1.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/5.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/4.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/3.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="home4">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/9.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/5.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/3.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/4.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="{{asset('front/images/product/2.png')}}" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal"
                                                                        title="Quick View"
                                                                        class="quick-view modal-view detail-link"
                                                                        href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span
                                                                            class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                                            class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
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
            </div>
        </section>
        <!-- End Our Product Area -->
        <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white pb--130">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title section__title--2 text-center">
                            <h2 class="title__line">Latest News</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incididunt ut
                                labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog__wrap clearfix mt--60 xmt-30">
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('front/images/blog/blog-img/1.jpg')}}" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit
                                                    consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('front/images/blog/blog-img/2.jpg')}}" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit
                                                    consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('front/images/blog/blog-img/3.jpg')}}" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit
                                                    consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal__container" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <!-- Start product images -->
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="big images" src="{{asset('front/images/product/big-img/1.jpg')}}">
                                    </div>
                                </div>
                                <!-- end product images -->
                                <div class="product-info">
                                    <h1>Simple Fabric Bags</h1>
                                    <div class="rating__and__review">
                                        <ul class="rating">
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                        </ul>
                                        <div class="review">
                                            <a href="#">4 customer reviews</a>
                                        </div>
                                    </div>
                                    <div class="price-box-3">
                                        <div class="s-price-box">
                                            <span class="new-price">$17.20</span>
                                            <span class="old-price">$45.00</span>
                                        </div>
                                    </div>
                                    <div class="quick-desc">
                                        Designed for simplicity and made from high quality materials. Its sleek geometry
                                        and
                                        material combinations creates a modern look.
                                    </div>
                                    <div class="select__color">
                                        <h2>Select color</h2>
                                        <ul class="color__list">
                                            <li class="red"><a title="Red" href="#">Red</a></li>
                                            <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                            <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                            <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        </ul>
                                    </div>
                                    <div class="select__size">
                                        <h2>Select size</h2>
                                        <ul class="color__list">
                                            <li class="l__size"><a title="L" href="#">L</a></li>
                                            <li class="m__size"><a title="M" href="#">M</a></li>
                                            <li class="s__size"><a title="S" href="#">S</a></li>
                                            <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                            <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i
                                                            class="zmdi zmdi-rss"></i></a></li>
                                                <li><a target="_blank" title="Linkedin" href="#"
                                                        class="linkedin social-icon"><i
                                                            class="zmdi zmdi-linkedin"></i></a>
                                                </li>
                                                <li><a target="_blank" title="Pinterest" href="#"
                                                        class="pinterest social-icon"><i
                                                            class="zmdi zmdi-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Tumblr" href="#"
                                                        class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a>
                                                </li>
                                                <li><a target="_blank" title="Pinterest" href="#"
                                                        class="pinterest social-icon"><i
                                                            class="zmdi zmdi-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="addtocart-btn">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
@endsection
