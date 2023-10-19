@extends('layouts.app')

@section('content')



<section class="th-hero-wrapper hero-1" id="hero" data-bg-src="{{asset('assets/img/skin1.jpg')}}">
    <div class="hero-slider-1 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1"
         data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-lg-arrows="true">
        <div class="th-hero-slide">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-12 col-xl-12 d-flex justify-content-center">
                        <div class="hero-style1 text-center">
                            <span class="sub-title" data-ani="slideindown" data-ani-delay="0.2s">Bienvenue chez Global Skin </span>
                            <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.3s">Epilation Définitive au Laser à Bruxelles</h1>
                            <div class="btn-group justify-content-center" data-ani="slideindown" data-ani-delay="0.4s">
                                <a href="service.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">En savoir +<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="shape-mockup movingX d-none d-xl-block" data-top="12%" data-left="2%"><img
            src="assets/img/shape/leaves_12.png" alt="shape"></div>
    <div class="shape-mockup shape2 jump" data-bottom="10%" data-left="0%"><img
            src="assets/img/shape/service_shape2.png" alt="shape"></div>


</section>
<section class="service-area2 overflow-hidden space" id="service-sec">
    <div class="about-sec overflow-hidden space" id="about-sec">
        <div class="container align-item-center">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box4">
                        <div class="img4 wow fadeInUp"><img class="tilt-active" src="assets/img/normal/about_3_1.jpg"
                                                            alt="About"></div>
                        <div class="img5 wow fadeInRight"><img class="tilt-active" src="assets/img/normal/about_3_2.jpg"
                                                               alt="About"></div>

                        <div class="about-company-since-wrap">
                            <div class="about-icon"><img src="assets/img/icon/logo-ic.png" alt="img"></div>
                            <div class="about-tag"><span class="about-anime">Global   Skin</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4 wow fadeInUp">
                        <div class="title-area"><span class="sub-title">GLOBAL SKIN <img
                                    src="assets/img/theme-img/title_right.svg" alt=""></span>
                            <h2 class="sec-title">Centre d'épilation définitive à Bruxelles</h2>
                            <p class="about-desc">Global Skin est un centre d'épilation définitive au laser situé à Bruxelles qui vous offre une gamme complète de services de soins de la peau. <br>


                                Notre technologie de pointe pour l'épilation définitive au laser est le laser Eden Skin, qui est connu pour être l'un des lasers les plus performants du marché. <br>Ce laser utilise une technologie de
                                refroidissement avancée pour minimiser l'inconfort et la douleur pendant le traitement.</p>
                        </div>


                        </div>
                        <div class="btn-group mt-45"><a href="about.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">En savoir +<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-left="0%"><img
            src="assets/img/shape/leaves_1.png" alt="shape"></div>
    <div class="shape-mockup jump d-none d-xl-block" data-top="20%" data-right="0%"><img
            src="assets/img/shape/leaves_7.png" alt="shape"></div>
    <div class="sec-shape"><span class="sec-shape_img"><img src="assets/img/icon/logo-ic-30.png" alt=""></span></div>
</section>

<div class="overflow-hidden space">
    <div class="container">
        <div class="row">
            <div class="title-area text-center mb-25">
                <h2 class="sec-title">Pourquoi vous devriez passer à<br>
                    l'épilation définitive au laser ?</h2>
            </div>
        </div>
        <div class="row slider-shadow th-carousel" data-slide-show="3" data-lg-slide-show="2" data-sm-slide-show="1"
             data-xs-slide-show="1">
            <div class="col-md-6 col-lg-4">
                <div class="testi-grid wow fadeInUp" class="testi-grid1">
                    <div class="testi-grid_img"><img src="assets/img/testimonial/testi_2_1.jpg" alt=""></div>
                    <h3 class="box-title">Le traitement laser n'est pas douleureux sans être agréable pour autant mais tout est fait pour
                        le confort et le bien-être sur les zones les plus sensibles !</h3>


                    <div class="testi-shape1"><img src="assets/img/shape/leaf_2.svg" alt=""></div>
                    <div class="testi-shape2"><img src="assets/img/shape/flower_1_6.svg" alt=""></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="testi-grid wow fadeInDown">
                    <div class="testi-grid_img"><img src="assets/img/testimonial/testi_2_2.jpg" alt=""></div>
                    <h3 class="box-title">Réalisée dans des conditions d'hygiène irréprochables, cette méthode d'épilation met un terme
                        aux problèmes d'inflammations, d'infections et de démangeaisons !.</h3>

                    <div class="testi-shape1"><img src="assets/img/shape/leaf_2.svg" alt=""></div>
                    <div class="testi-shape2"><img src="assets/img/shape/flower_1_6.svg" alt=""></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="testi-grid wow fadeInUp">
                    <div class="testi-grid_img"><img src="assets/img/testimonial/testi_2_3.jpg" alt=""></div>
                    <h3 class="box-title">Terminées les douleurs régulières liées à l'épilation à la cire !</h3>

                    <div class="testi-shape1"><img src="assets/img/shape/leaf_2.svg" alt=""></div>
                    <div class="testi-shape2"><img src="assets/img/shape/flower_1_6.svg" alt=""></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="testi-grid wow fadeInDown">
                    <div class="testi-grid_img"><img src="assets/img/testimonial/testi_2_4.jpg" alt=""></div>
                    <h3 class="box-title">Gagnez votre sérénité sans avoir à vous soucier de vos poils !

                    </h3>

                    <div class="testi-shape1"><img src="assets/img/shape/leaf_2.svg" alt=""></div>
                    <div class="testi-shape2"><img src="assets/img/shape/flower_1_6.svg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overflow-hidden">
    <div class="container">
        <div class="counter-sec space-top">
        </div>
        <div class="sec-shape"><span class="sec-shape_img"><img src="assets/img/icon/logo-ic-30.png" alt=""></span></div>
    </div>
</div>

<div class="position-relative overflow-hidden space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="testimonial-wrapper wow fadeInUp">
                    <div class="th-carousel number-dots" data-asnavfor="#testiSlide" id="tesitslide-img" data-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true" data-md-dots="true" data-fade="true">
                        <div>
                            <div class="testi-slide-img"><img src="assets/img/testimonial/testi_1_1.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="testi-slide-img"><img src="assets/img/testimonial/testi_1_2.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="testi-slide-img"><img src="assets/img/testimonial/testi_1_3.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="testi-slide-img"><img src="assets/img/testimonial/tes_1_4.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testi-shape"><img src="assets/img/shape/flower_1_5.svg" alt=""></div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="title-area text-center">
                    <h2 class="sec-title">Nos traitements</h2></div>
                <div class="testi-item-slide">
                    <div class="th-carousel" id="testiSlide" data-slide-show="1" data-fade="true" data-asnavfor=" #tesitslide-img">
                        <div>
                            <div class="testi-item">
                                <div class="testi-item_img"><img src="assets/img/testimonial/testi_1_1.jpg" alt=""></div>
                                <h4 class="testi-item_name">Epilation lèvre suprieure</h4>
                                <p>
                                    Les traitements au laser de la lèvre supérieure présentent de nombreux avantages. Contrairement aux autres méthodes d'épilation, l'épilation au laser élimine définitivement les poils indésirables. Ce traitement est également moins douloureux, plus précis et n'abîme pas votre peau, contrairement au rasage et à l'épilation à la cire.
                                </p>
                                <div class="testi-item_profile">
                                    <div class="media-body mb-3">
                                        <a href class="testi-item_desig position-relative">Réserver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testi-item">
                                <div class="testi-item_img"><img src="assets/img/testimonial/testi_1_2.jpg" alt="">
                                </div>
                                <h4 class="testi-item_name">Epilation maillot</h4>
                                <p>
                                    Que vous vous prépariez pour l'été ou que vous souhaitiez une solution à long terme, rapide et économique pour éliminer les poils de la ligne du maillot, un cours d'épilation au laser chez Global Skin pourrait être la réponse.
                                </p>
                                <div class="testi-item_profile">
                                    <div class="media-body"  mb-3>

                                        <a href class="testi-item_desig position-relative">Réserver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testi-item">
                                <div class="testi-item_img"><img src="assets/img/testimonial/testi_1_3.jpg" alt="">
                                </div>
                                <h4 class="testi-item_name">Epilation jambes</h4>
                                <p>
                                    Les traitements au laser de la lèvre supérieure présentent de nombreux avantages. Contrairement aux autres méthodes d'épilation, l'épilation au laser élimine définitivement les poils indésirables. Ce traitement est également moins douloureux, plus précis et n'abîme pas votre peau, contrairement au rasage et à l'épilation à la cire.
                                </p>
                                <div class="testi-item_profile">
                                    <div class="media-body" mb-3>

                                        <a href="" class="testi-item_desig position-relative">Réserver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testi-item">
                                <div class="testi-item_img"><img src="assets/img/testimonial/tes_1_4.png" alt="">
                                </div>
                                <h4 class="testi-item_name">Epilation aisselles</h4>
                                <p>

                                    L'épilation laser des aisselles est une méthode d'épilation de plus en plus populaire pour les personnes cherchant une solution permanente pour se débarrasser des poils indésirables dans cette zone du corps.
                                </p>
                                <div class="testi-item_profile">
                                    <div class="media-body"  mb-3>

                                        <a href="" class="testi-item_desig position-relative">Réserver</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="testi-shape1"><img src="assets/img/shape/leaf.svg" alt=""></div>
                    <div class="testi-shape2"><img src="assets/img/shape/flower_1_4.png" alt=""></div>
                </div>
            </div>
    </div>

    <div class="shape-mockup jump d-none d-xxl-block" data-top="30%" data-right="0%"><img
            src="assets/img/shape/leaves_4.png" alt="shape"></div>
</div>
<div class="overflow-hidden space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="title-area text-center text-lg-start"><span class="sub-title">GLOBAL SKIN<img
                            src="assets/img/theme-img/title_right.svg" alt=""></span>
                    <h2 class="sec-title">Explorez notre centre d'épilation laser</h2>
                </div>
            </div>

        </div>
        <div class="row gallery-row filter-active">
            <div class="col-xl-auto col-md-6 filter-item cat1 cat3 cat4">
                <div class="gallery-card wow fadeInUp">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image">
                    </div>
                    <div class="gallery-content"><a href="assets/img/gallery/gallery_1_1.jpg"
                                                    class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-xl-auto col-md-6 filter-item cat1 cat2 cat4">
                <div class="gallery-card wow fadeInUp">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_2.jpg" alt="gallery image">
                    </div>
                    <div class="gallery-content"><a href="assets/img/gallery/gallery_1_2.jpg"
                                                    class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-xl-auto col-md-6 filter-item cat1 cat3 cat4">
                <div class="gallery-card wow fadeInUp">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image">
                    </div>
                    <div class="gallery-content"><a href="assets/img/gallery/gallery_1_3.jpg"
                                                    class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-xl-auto col-md-6 filter-item cat3 cat4 cat2">
                <div class="gallery-card wow fadeInUp">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image">
                    </div>
                    <div class="gallery-content"><a href="assets/img/gallery/gallery_1_4.jpg"
                                                    class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="15%" data-left="0%"><img
            src="assets/img/shape/leaves_1.png" alt="shape"></div>
    <div class="shape-mockup jump d-none d-xxl-block" data-top="10%" data-right="0%"><img
            src="assets/img/shape/leaves_7.png" alt="shape"></div>
</div>

<section class="team-area bg-top-center overflow-hidden space" data-bg-src="assets/img/bg/team_bg_1.jpg">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12">
                <div class="team-content-wrapper">
                    <div class="title-area text-center"><span class="sub-title style2">Expert Team</span> <img
                            src="assets/img/theme-img/title_shape_1.svg" alt="">
                        <h2 class="sec-title text-white">Our Experience Specialists</h2>
                        <p class="sec-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row slider-shadow th-carousel teamSlide1" id="teamSlide1" data-slide-show="3"
             data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
             data-arrows="true">
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-card wow fadeInUp">
                    <div class="team-img"><img src="assets/img/team/team_1_1.jpg" alt="Team"></div>
                    <div class="team-card_content">
                        <div class="team-content">
                            <h3 class="box-title"><a href="team-details.html">Jenifer Lopez</a></h3><span
                                class="team-desig">Specialist</span>
                        </div>
                        <div class="team-social">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                            <div class="th-social"><a target="_blank" href="https://twitter.com/"><i
                                        class="fab fa-twitter"></i></a> <a target="_blank"
                                                                           href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                                    target="_blank" href="https://facebook.com/"><i
                                        class="fab fa-facebook-f"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-card wow fadeInDown">
                    <div class="team-img"><img src="assets/img/team/team_1_2.jpg" alt="Team"></div>
                    <div class="team-card_content">
                        <div class="team-content">
                            <h3 class="box-title"><a href="team-details.html">Arlene McCoy</a></h3><span
                                class="team-desig">Specialist</span>
                        </div>
                        <div class="team-social">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                            <div class="th-social"><a target="_blank" href="https://twitter.com/"><i
                                        class="fab fa-twitter"></i></a> <a target="_blank"
                                                                           href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                                    target="_blank" href="https://facebook.com/"><i
                                        class="fab fa-facebook-f"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-card wow fadeInUp">
                    <div class="team-img"><img src="assets/img/team/team_1_3.jpg" alt="Team"></div>
                    <div class="team-card_content">
                        <div class="team-content">
                            <h3 class="box-title"><a href="team-details.html">Robert Fox</a></h3><span
                                class="team-desig">Specialist</span>
                        </div>
                        <div class="team-social">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                            <div class="th-social"><a target="_blank" href="https://twitter.com/"><i
                                        class="fab fa-twitter"></i></a> <a target="_blank"
                                                                           href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                                    target="_blank" href="https://facebook.com/"><i
                                        class="fab fa-facebook-f"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-card wow fadeInDown">
                    <div class="team-img"><img src="assets/img/team/team_1_4.jpg" alt="Team"></div>
                    <div class="team-card_content">
                        <div class="team-content">
                            <h3 class="box-title"><a href="team-details.html">Jade Smith</a></h3><span
                                class="team-desig">Specialist</span>
                        </div>
                        <div class="team-social">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                            <div class="th-social"><a target="_blank" href="https://twitter.com/"><i
                                        class="fab fa-twitter"></i></a> <a target="_blank"
                                                                           href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                                    target="_blank" href="https://facebook.com/"><i
                                        class="fab fa-facebook-f"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup" data-top="0%" data-right="0%"><img src="assets/img/shape/flower_1_2.png" alt="shape">
    </div>
</section>
<section class="overflow-hidden space-bottom">
    <div class="container">
        <div class="title-area text-center"><span class="sub-title style2">Pricing Package</span> <img
                src="assets/img/theme-img/title_shape_1.svg" alt="">
            <h2 class="sec-title">Choose Your Perfect Package</h2>
        </div>
        <div class="row gy-4 align-items-center">
            <div class="col-xl-6">
                <div class="price-card wow fadeInLeft">
                    <div class="price-card_img"><img src="assets/img/price/price_1_1.jpg" alt="">
                        <h4 class="price-card_price"><span class="currency">$</span> 46 <span class="duration">Per
                                    Day</span></h4>
                    </div>
                    <div class="price-card_content">
                        <h3 class="box-title">Basic Package</h3>
                        <hr class="style1">
                        <div class="available-list">
                            <ul>
                                <li><img src="assets/img/theme-img/title_left.svg" alt="">Body Treatments</li>
                                <li><img src="assets/img/theme-img/title_left.svg" alt="">Sauna Relax</li>
                                <li><img src="assets/img/theme-img/title_left.svg" alt="">Backbone Therapy</li>
                                <li><img src="assets/img/theme-img/title_left.svg" alt="">Geothermal Spa</li>
                                <li class="unavailable"><img src="assets/img/theme-img/title_left.svg" alt="">Body
                                    Relaxation</li>
                                <li class="unavailable"><img src="assets/img/theme-img/title_left.svg" alt="">Aroma
                                    Therapy</li>
                            </ul>
                            <div class="price-btn"><a href="price.html" class="th-btn">Book Now<i
                                        class="fa-solid fa-arrow-right ms-2"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="price-card wow fadeInRight">
                    <div class="price-card_img"><img src="assets/img/price/price_1_2.jpg" alt="">
                        <h4 class="price-card_price"><span class="currency">$</span> 96 <span class="duration">Per
                                    Day</span></h4>
                    </div>
                    <div class="price-card_content">
                        <h3 class="box-title">Standard Package</h3>
                        <hr class="style1">
                        <div class="available-list">
                            <ul>
                                <li><img src="assets/img/theme-img/title_left.svg" alt="">Body Treatments</li>
                                <li><img src="assets/img/theme-img/title_left.svg" alt="">Sauna Relax</li>
                                <li><img src="assets/img/theme-img/title_left.svg" alt="">Backbone Therapy</li>
                                <li><img src="assets/img/theme-img/title_left.svg" alt="">Geothermal Spa</li>
                                <li><img src="assets/img/theme-img/title_left.svg" alt="">Body Relaxation</li>
                                <li><img src="assets/img/theme-img/title_left.svg" alt="">Aroma Therapy</li>
                            </ul>
                            <div class="price-btn"><a href="price.html" class="th-btn">Book Now<i
                                        class="fa-solid fa-arrow-right ms-2"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-lg-block" data-top="0%" data-left="0%"><img
            src="assets/img/shape/leaves_3.png" alt="shape"></div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="15%" data-right="0%"><img
            src="assets/img/shape/leaves_2.png" alt="shape"></div>
</section>
<div class="appointment-area space" id="contact-sec" data-bg-src="assets/img/bg/appointment_bg_1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="appointment-content">
                    <div class="title-area mb-25 text-center text-lg-start wow fadeInLeft"><span
                            class="sub-title">Make An Appointment<img src="assets/img/theme-img/title_right.svg"
                                                                      alt=""></span>
                        <h2 class="sec-title">Relax Anytime Any Day At 20% Discount</h2>
                    </div>
                    <div class="appointment-form wow fadeInUp">
                        <div class="row">
                            <div class="form-group col-md-6"><i class="fa-light fa-user"></i> <input type="text"
                                                                                                     placeholder="First Name" class="form-control"></div>
                            <div class="form-group col-md-6"><i class="fa-light fa-user"></i> <input type="text"
                                                                                                     placeholder="Last Name" class="form-control"></div>
                            <div class="form-group col-md-6"><i class="fa-light fa-envelope"></i> <input type="text"
                                                                                                         placeholder="Email" class="form-control"></div>
                            <div class="col-md-6 form-group"><i class="fa-light fa-phone"></i> <input type="text"
                                                                                                      placeholder="phone" class="form-control"></div>
                            <div class="form-group col-12"><i class="fa-regular fa-tag"></i> <select name="subject"
                                                                                                     id="subject" class="form-select nice-select">
                                    <option value="" disabled="disabled" selected="selected" hidden>Select Subject
                                    </option>
                                    <option value="Engine Diagnostics">Spa & Massage</option>
                                    <option value="Facial & Massage">Facial & Massage</option>
                                    <option value="Engine Diagnostics">Head Massage</option>
                                    <option value="Sports Massage">Sports Massage</option>
                                    <option value="Stone Massage">Stone Massage</option>
                                </select></div>
                            <div class="form-group col-12"><input type="text" class="date-pick form-control"
                                                                  name="date" id="date-pick" placeholder="Select Date"> <i
                                    class="fa-light fa-calendar-days"></i></div>
                            <div class="form-group col-12"><input type="text" class="time-pick form-control"
                                                                  name="time" id="time-pick" placeholder="Select Time"> <i
                                    class="fa-light fa-clock"></i></div>
                            <div class="btn-group justify-content-center justify-content-lg-start"><button
                                    class="th-btn">Make An Appointment <i
                                        class="fa-solid fa-arrow-right ms-2"></i></button></div>
                        </div>
                    </div>
                    <div class="appointment-video"><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                      class="video-play-btn play-btn popup-video"><i
                                class="fa-sharp fa-solid fa-play"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="position-relative overflow-hidden space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="testimonial-wrapper wow fadeInUp">
                    <div class="th-carousel number-dots" data-asnavfor="#testiSlide" id="tesitslide-img"
                         data-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true"
                         data-lg-dots="true" data-md-dots="true" data-fade="true">
                        <div>
                            <div class="testi-slide-img"><img src="assets/img/testimonial/testi_1_1.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="testi-slide-img"><img src="assets/img/testimonial/testi_1_2.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="testi-slide-img"><img src="assets/img/testimonial/testi_1_3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testi-shape"><img src="assets/img/shape/flower_1_5.svg" alt=""></div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="title-area text-center"><span class="sub-title style2">Tegh</span> <img
                        src="assets/img/theme-img/title_shape_1.svg" alt="">
                    <h2 class="sec-title">Our Customer Feedback</h2>
                </div>
                <div class="testi-item-slide">
                    <div class="th-carousel" id="testiSlide" data-slide-show="1" data-fade="true"
                         data-asnavfor=" #tesitslide-img">
                        <div>
                            <div class="testi-item">
                                <div class="testi-item_img"><img src="assets/img/testimonial/testi_1_1.jpg" alt="">
                                </div>
                                <h3 class="box-title">Whether youre preparing for a special occasion or simply want
                                    to pamper yourself, our talented stylists will work closely with you to create a
                                    look that complements your individual style.</h3>
                                <div class="testi-item_profile">
                                    <div class="media-body">
                                        <h4 class="testi-item_name">Angelina Margret</h4>
                                        <p class="testi-item_desig">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testi-item">
                                <div class="testi-item_img"><img src="assets/img/testimonial/testi_1_2.jpg" alt="">
                                </div>
                                <h3 class="box-title">Donec sollicitudin molestie malesuada. Curabitur non nulla sit
                                    amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis
                                    porttitor volutpat. Curabitur dui posuere.</h3>
                                <div class="testi-item_profile">
                                    <div class="media-body">
                                        <h4 class="testi-item_name">Senjuti das</h4>
                                        <p class="testi-item_desig">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testi-item">
                                <div class="testi-item_img"><img src="assets/img/testimonial/testi_1_3.jpg" alt="">
                                </div>
                                <h3 class="box-title">Nulla porttitor accumsan tincidunt. Mauris blandit aliquet
                                    elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                    porta. Lorem ipsum dolor adipiscing elit.</h3>
                                <div class="testi-item_profile">
                                    <div class="media-body">
                                        <h4 class="testi-item_name">Jenifer Lopez</h4>
                                        <p class="testi-item_desig">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-quote"><img src="assets/img/shape/quote.png" alt=""></div>
                    <div class="testi-shape1"><img src="assets/img/shape/leaf.svg" alt=""></div>
                    <div class="testi-shape2"><img src="assets/img/shape/flower_1_4.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-xxl-block" data-top="30%" data-right="0%"><img
            src="assets/img/shape/leaves_4.png" alt="shape"></div>
</div>
<div class="sec-shape"><span class="sec-shape_img"><img src="assets/img/icon/logo-ic-30.png
" alt=""></span></div>
<section class="space overflow-hidden" id="blog-sec">
    <div class="container">
        <div class="title-area text-center"><span class="sub-title style2">Our Blog</span> <img
                src="assets/img/theme-img/title_shape_1.svg" alt="">
            <h2 class="sec-title">Our Latest News & Blog</h2>
        </div>
        <div class="row slider-shadow th-carousel" id="blogSlide1" data-slide-show="3" data-lg-slide-show="2"
             data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
            <div class="col-md-6 col-xl-4">
                <div class="blog-card wow fadeInUp">
                    <div class="blog-img"><img src="assets/img/blog/blog_1_1.jpg" alt="blog image"></div>
                    <div class="blog-card_wrapper">
                        <div class="blog-card_date">10<span class="blog-card_month">May 2023</span></div>
                        <div class="blog-card-content">
                            <div class="blog-meta"><a href="blog.html"><i class="fa-solid fa-user"></i>By Alex
                                    Michel</a> <a href="blog.html"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Maintaining Health and Beauty Through
                                    Spas</a></h3><a href="blog-details.html" class="line-btn">Read More<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="blog-card wow fadeInDown">
                    <div class="blog-img"><img src="assets/img/blog/blog_1_2.jpg" alt="blog image"></div>
                    <div class="blog-card_wrapper">
                        <div class="blog-card_date">14<span class="blog-card_month">Jun 2023</span></div>
                        <div class="blog-card-content">
                            <div class="blog-meta"><a href="blog.html"><i class="fa-solid fa-user"></i>By Alex
                                    Michel</a> <a href="blog.html"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Do Massages Have Real Health
                                    Benefits?</a></h3><a href="blog-details.html" class="line-btn">Read More<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="blog-card wow fadeInUp">
                    <div class="blog-img"><img src="assets/img/blog/blog_1_3.jpg" alt="blog image"></div>
                    <div class="blog-card_wrapper">
                        <div class="blog-card_date">15<span class="blog-card_month">July 2023</span></div>
                        <div class="blog-card-content">
                            <div class="blog-meta"><a href="blog.html"><i class="fa-solid fa-user"></i>By Alex
                                    Michel</a> <a href="blog.html"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Ultra Glam Gold Nail Polishes for
                                    Holiday.</a></h3><a href="blog-details.html" class="line-btn">Read More<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="blog-card wow fadeInDown">
                    <div class="blog-img"><img src="assets/img/blog/blog_1_4.jpg" alt="blog image"></div>
                    <div class="blog-card_wrapper">
                        <div class="blog-card_date">16<span class="blog-card_month">Aug 2023</span></div>
                        <div class="blog-card-content">
                            <div class="blog-meta"><a href="blog.html"><i class="fa-solid fa-user"></i>By Alex
                                    Michel</a> <a href="blog.html"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">A Relaxation of the Senses with Their
                                    Help</a></h3><a href="blog-details.html" class="line-btn">Read More<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-lg-block" data-top="0%" data-left="0%"><img
            src="assets/img/shape/leaves_3.png" alt="shape"></div>
    <div class="shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="0%"><img
            src="assets/img/shape/flower_1_2.png" alt="shape"></div>
</section>
<div class="brand-sec bg-smoke">
    <div class="container-fluid">
        <div class="row th-carousel" id="brandSlide1" data-slide-show="7" data-xl-slide-show="4"
             data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="1">
            <div class="col-auto">
                <div class="brand-box wow fadeInLeft"><a href="#"><img class="original"
                                                                       src="assets/img/brand/brand_1_1.png" alt="Brand Logo"> <img class="gray"
                                                                                                                                   src="assets/img/brand/brand_1_1.png" alt="Brand Logo"></a></div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInLeft"><a href="#"><img class="original"
                                                                       src="assets/img/brand/brand_1_2.png" alt="Brand Logo"> <img class="gray"
                                                                                                                                   src="assets/img/brand/brand_1_2.png" alt="Brand Logo"></a></div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInLeft"><a href="#"><img class="original"
                                                                       src="assets/img/brand/brand_1_3.png" alt="Brand Logo"> <img class="gray"
                                                                                                                                   src="assets/img/brand/brand_1_3.png" alt="Brand Logo"></a></div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInLeft"><a href="#"><img class="original"
                                                                       src="assets/img/brand/brand_1_4.png" alt="Brand Logo"> <img class="gray"
                                                                                                                                   src="assets/img/brand/brand_1_4.png" alt="Brand Logo"></a></div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInLeft"><a href="#"><img class="original"
                                                                       src="assets/img/brand/brand_1_5.png" alt="Brand Logo"> <img class="gray"
                                                                                                                                   src="assets/img/brand/brand_1_5.png" alt="Brand Logo"></a></div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInLeft"><a href="#"><img class="original"
                                                                       src="assets/img/brand/brand_1_6.png" alt="Brand Logo"> <img class="gray"
                                                                                                                                   src="assets/img/brand/brand_1_6.png" alt="Brand Logo"></a></div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInLeft"><a href="#"><img class="original"
                                                                       src="assets/img/brand/brand_1_7.png" alt="Brand Logo"> <img class="gray"
                                                                                                                                   src="assets/img/brand/brand_1_7.png" alt="Brand Logo"></a></div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInLeft"><a href="#"><img class="original"
                                                                       src="assets/img/brand/brand_1_8.png" alt="Brand Logo"> <img class="gray"
                                                                                                                                   src="assets/img/brand/brand_1_8.png" alt="Brand Logo"></a></div>
            </div>
        </div>
    </div>
</div>
@endsection
