<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Digigi | @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('front/css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('front/css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">


    <!-- Modernizr JS -->
    <script src="{{asset('front/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

@yield('isi')

<!-- Start Footer Area -->
<footer class="htc__foooter__area gray-bg">
    <div class="container">
        <div class="row">
            <div class="footer__container clearfix">
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="ft__widget">
                        <div class="ft__logo">
                            <a href="index.html">
                                <img src="images/logo/digigi.jpg" style="
                                    vertical-align: middle;
                                    width: 200px;
                                    height: 200px;
                                    border-radius: 10%;" alt="logo">
                            </a>
                        </div>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-pin"></i>
                                    </div>
                                    <div class="address-text">
                                        <p>194 Main Rd T, FS Rayed <br> VIC 3057, USA</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="address-text">
                                        <a href="#"> info@example.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-phone-in-talk"></i>
                                    </div>
                                    <div class="address-text">
                                        <p>+012 345 678 102 </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="social__icon">
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                    <div class="ft__widget">
                        <h2 class="ft__title">Categories</h2>
                        <ul class="footer-categories">
                            <li><a href="shop-sidebar.html">Men</a></li>
                            <li><a href="shop-sidebar.html">Women</a></li>
                            <li><a href="shop-sidebar.html">Accessories</a></li>
                            <li><a href="shop-sidebar.html">Shoes</a></li>
                            <li><a href="shop-sidebar.html">Dress</a></li>
                            <li><a href="shop-sidebar.html">Denim</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                    <div class="ft__widget">
                        <h2 class="ft__title">Infomation</h2>
                        <ul class="footer-categories">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Returns & Exchanges</a></li>
                            <li><a href="#">Shipping & Delivery</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-lg-3 col-lg-offset-1 col-sm-6 smt-30 xmt-30">
                    <div class="ft__widget">
                        <h2 class="ft__title">Newsletter</h2>
                        <div class="newsletter__form">
                            <p>Subscribe to our newsletter and get 10% off your first purchase .</p>
                            <div class="input__box">
                                <div id="mc_embed_signup">
                                    <form action="#" method="post" id="mc-embedded-subscribe-form"
                                        name="mc-embedded-subscribe-form" class="validate" target="_blank"
                                        novalidate>
                                        <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                            <div class="news__input">
                                                <input type="email" value="" name="EMAIL" class="email"
                                                    id="mce-EMAIL" placeholder="Email Address" required>
                                            </div>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef"
                                                    tabindex="-1" value=""></div>
                                            <div class="clearfix subscribe__btn"><input type="submit"
                                                    value="Send" name="subscribe" id="mc-embedded-subscribe"
                                                    class="bst__btn btn--white__color">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
            </div>
        </div>
        <!-- Start Copyright Area -->
        <div class="htc__copyright__area">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="copyright__inner">
                        <div class="copyright">
                            <p>© 2017 <a href="https://freethemescloud.com/">Free themes Cloud</a>
                                All Right Reserved.</p>
                        </div>
                        <ul class="footer__menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Product</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->
    </div>
</footer>
<!-- End Footer Area -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{asset('front/js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap framework js -->
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<!-- All js plugins included in this file. -->
<script src="{{asset('front/js/plugins.js')}}"></script>
<script src="{{asset('front/js/slick.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<!-- Waypoints.min.js. -->
<script src="{{asset('front/js/waypoints.min.js')}}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{asset('front/js/main.js')}}"></script>

@yield('script')

</body>

</html>
