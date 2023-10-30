<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Acceuil -Le spécialiste de l'épilation</title>
    <meta name="author" content="Angfuzsoft">
    <meta name="description" content="Global Skin">
    <meta name="keywords" content="Global Skin centre d-épilation définitive à bruxelle">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&amp;family=DM+Sans:wght@400;500;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer-theme-default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @yield('styles')
</head>

<body>
    <div class="preloader"><button class="th-btn style3 preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner"><img src="{{asset('assets/img/logosk.png')}}" alt="Rasm"> <span class="loader"></span></div>
    </div>
    <div class="th-menu-wrapper">
        <div class="th-menu-area">
            <div class="mobile-logo"><a href="index.html"><img src="{{asset('assets/img/logo.svg')}}" alt="Rasm"></a>
                <div class="close-menu"><button class="th-menu-toggle"><i class="fal fa-times"></i></button></div>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children"><a href="{{route('index')}}">ACCUEIL</a>

                    </li>
                    <li class="menu-item-has-children"><a href="{{route('epilationlazer')}}">EPILATION LASER</a>

                    </li>
                    <li class="menu-item-has-children"><a href="{{route('technologies')}}">TECHNOLOGIES</a>

                    </li>
                    <li class="menu-item-has-children mega-menu-wrap"><a href="{{route('tarifs')}}">TARIFS</a>

                    </li>
                    <li class="menu-item-has-children"><a href="{{route('chequesCad')}}">CHÈQUES CADEAUX</a>

                    </li>
                    <li class="menu-item-has-children"><a href="{{route('galerie')}}">GALERIE</a>

                    </li>
                    <li><a href="{{route('about')}}"> À PROPOS</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sidemenu-wrapper shopping-cart d-none d-lg-block">
        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget">
                        <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img
                                    src="{{asset('assets/img/product/product_thumb_1_1.jpg')}}" alt="Cart Image">OPI Nail Polish</a>
                            <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>94</span>,</span></li>
                        <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img
                                    src="{{asset('assets/img/product/product_thumb_1_2.jpg')}}" alt="Cart Image">Sunscreen Lotion</a>
                            <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>89</span></span></li>
                        <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img
                                    src="{{asset('assets/img/product/product_thumb_1_3.jpg')}}" alt="Cart Image">Wholesale Liquid</a>
                            <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>75</span></span></li>
                        <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img
                                    src="{{asset('assets/img/product/product_thumb_1_4.jpg')}}" alt="Cart Image">Hair Dryers</a>
                            <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>72</span></span></li>
                        <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img
                                    src="{{asset('assets/img/product/product_thumb_1_5.jpg')}}" alt="Cart Image">Argan Hair oil</a>
                            <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>81</span></span></li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span
                            class="woocommerce-Price-amount amount"><span
                                class="woocommerce-Price-currencySymbol">$</span>43</span></p>
                    <p class="woocommerce-mini-cart__buttons buttons"><a href="cart.html" class="th-btn wc-forward">View
                            cart</a> <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidemenu-wrapper d-none d-lg-block">
        <div class="sidemenu-content bg-black2"><button class="closeButton sideMenuCls"><i
                    class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="th-widget-about">
                    <div class="about-logo"><a href="index.html"><img src="{{asset('assets/img/logo-white.svg')}}" alt="Rasm"></a>
                    </div>
                    <p class="about-text">Centric applications productize front end portals visualize front end is
                        results and value added</p>
                    <div class="working-time"><span class="title">We Are Available:</span>
                        <p class="desc">Mon-Sat: 08.00 am to 5.00 pm</p>
                    </div>
                    <div class="th-social footer-social"><a href="https://www.facebook.com/"><i
                                class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                class="fab fa-linkedin-in"></i></a> <a href="https://www.behance.net/"><i
                                class="fa-brands fa-behance"></i></a></div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img"><a href="blog-details.html"><img
                                    src="{{asset('assets/img/blog/recent-post-2-1.jpg')}}" alt="Blog Image"></a></div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Local residents and
                                    a few celebrities, too</a></h4>
                            <div class="recent-post-meta"><a href="blog.html"><i class="fal fa-calendar-days"></i>19
                                    June, 2023</a></div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img"><a href="blog-details.html"><img
                                    src="{{asset('assets/img/blog/recent-post-2-2.jpg')}}" alt="Blog Image"></a></div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Local residents and
                                    a few celebrities, too</a></h4>
                            <div class="recent-post-meta"><a href="blog.html"><i class="fal fa-calendar-days"></i>22
                                    June, 2023</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h4 class="widget_title">Newsletter</h4>
                <div class="newsletter-widget">
                    <p class="md-10">Sign Up to get updates & news about us . Get Latest Deals from Walker's Inbox to
                        our mail address.</p>
                    <div class="footer-search-contact mt-25">
                        <form><input class="form-control" type="email" placeholder="Enter your email"></form>
                        <div class="footer-btn mt-10"><button type="submit" class="th-btn style3 fw-btn">Subscribe Now
                                <i class="fa-regular fa-arrow-right"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <h4>Condition d'utilisation des chèques cadeaux</h4>
        <p>  Vous avez-reçu un chèque cadeau pour venir profiter d'une séance d'épilation laser ?</p>
        <p>Contactez-nous pour fixer ensemble la réservation au .</p>
        <p>Une fois le rdv pris, vous pouvez le déplacer ou l'annuler jusqu'à 48h avant l'heure du rdv prévu, ceci sans frais,
            passé ce délais le chèque cadeau est considéré comme utilisé et donc perdu si vous ne vous présentez pas.</p>
        <p>Nos chèques cadeaux sont valables durant 2 ans, non prolongeable.</p>

    </div>
  



    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/odometer.js')}}"></script>
    <script src="{{asset('assets/js/appear-2.js')}}"></script>
    <script src="{{asset('assets/js/nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.datetimepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/tilt.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    @yield('scripts')

</body>

</html>
