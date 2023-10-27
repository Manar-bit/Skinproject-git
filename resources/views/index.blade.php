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
                                <a href="{{route('about')}}" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">En savoir +<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
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
                        <div class="btn-group mt-45"><a href="{{route('about')}}" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">En savoir +<i
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

<div class="overflow-hidden">
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

</div>
    <div class="appointment-area space" id="contact-sec" data-bg-src="assets/img/bg/appointment_bg_1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-sm-9 bg-trans">
                    <div class="appointment-content">
                        <div class="title-area mb-25 text-center text-lg-start wow fadeInLeft"><span
                                class="sub-title">L'ÉPILATION LASER</span>
                            <h2 class="sec-title text-shadow-white">Une méthode sûre et efficace <br>pour toutes les peaux </h2>
                        </div>



                        <p class="mad-text-medium content-element-6 text-shadow-white">L'épilation au laser est une solution pour éliminer les poils indésirables et peut convenir à tout le monde. Cependant, lors d'une séance d'épilation au laser, certains éléments sont pris en compte tels que le type de peau et la couleur des poils pour adapter le traitement en conséquence. Le choix du laser utilisé et le nombre de séances nécessaires peuvent varier en fonction de ces facteurs. Ainsi, il est important de déterminer le type de peau et la couleur des poils avant de choisir le laser le plus approprié pour obtenir les meilleurs résultats possibles. Nous sommes là pour vous guider tout au long de ce processus afin que vous puissiez obtenir
                            une épilation au laser efficace et sécurisée.</p>
                        <div class="btn-group justify-content-center justify-content-lg-start" ><button href="{{route('contact')}}"
                                class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Contactez-nous </button></div>


                    </div>
                </div>
            </div>
            </div>
        </div>



<div class="choose-area overflow-hidden space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="pe-xl-5 me-xl-3">
                    <div class="title-area mt-60 mb-25 wow fadeInLeft" style="text-align: center;"><span class="sub-title">GLOBAL SKIN</span>
                        <h2 class="sec-title">Laser de dernière génération</h2>
                        <p class="mt-n2 mb-35">Notre laser de dernière génération permet d’épiler en toute sécurité et de façon précise tous
                            les types de peau, notamment les peaux mates, noires, foncées et même bronzées..</p>
                        <button
                            class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Contactez-nous </button>
                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="choose-image">
                    <div class="img1 wow fadeInRight"><img src="assets/img/normal/choose_1.png" alt="Choose"></div>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="faq-sec overflow-hidden space"  style="background-image: linear-gradient( 109.6deg, #eed9b1 25.2%, #ab6a491f 99.1% ); margin-top: -208px">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                   <img src="assets/img/testimonial/testi_3_1.jpg"
                        alt="Avater">
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4">
                        <div class="title-area mb-40">
                            <h2 class="sec-title">Le laser Eden Skin</h2>
                        </div>

                            <div class="accordion-card active" style="padding-top: 23px;">

                                    <div class="accordion-body" class="accordion-body1" >
                                        <p class="faq-text"> La machine LASERSKIN est utilisée pour l’épilation définitive sur tous types de peaux,
                                             même foncées. Sa technologie à la pointe permet :</p>
                                    </div>
                                </div>

                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-2"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false"
                                        aria-controls="collapse-2">Un soin indolore</button></div>
                                <div id="collapse-2" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text"> grâce à la technologie « Permanent Pulse » qui permet un balayage continu et au cristal
                                            réfrigéré (-10°C) qui évite une surchauffe de la peau.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-3"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false"
                                        aria-controls="collapse-3">Un soin rapide</button></div>
                                <div id="collapse-3" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">10 minutes à 30 minutes pour les zones étendues comme les jambes, le torse, le dos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-4"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-4" aria-expanded="false"
                                        aria-controls="collapse-4">Un soin efficace</button></div>
                                <div id="collapse-4" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">dès la première séance d’épilation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-5"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-" aria-expanded="false"
                                        aria-controls="collapse-">Des résultats durables </button></div>
                                <div id="collapse-" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">résultats définitifs après 4 à 6 séances.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<section class="price-area overflow-hidden space">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 wow fadeInLeft">
                    <div class="title-area mb-40 text-center text-xl-start"><span class="sub-title">TARIFS À LA SÉANCE<img
                                src="assets/img/theme-img/title_right.svg" alt=""></span>
                        <h2 class="sec-title">Prix et zones d'épilation laser permanent</h2>
                    </div>
                    <div class="nav nav-tabs pricing-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link price-list active" id="nav-step1-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step1" type="button">Visage</button>
                            <button
                            class="nav-link price-list" id="nav-step2-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step2" type="button">Bras</button> <button
                            class="nav-link price-list" id="nav-step3-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step3" type="button">Jambes</button>
                            <button
                            class="nav-link price-list" id="nav-step4-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step4" type="button">Corps</button>
                        </div>
                    <div class="price-list-area" style="max-width: 789px;">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                                <div class="price-box-wrapper style2">
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Lèvre supérieur - Epilation définitive Bruxelles
                                                </h4>

                                            </div><span >19€</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Menton - Epilation définitive Bruxelles</h4>

                                            </div><span >19€</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Visage - Epilation définitive Bruxelles
                                                </h4>

                                            </div><span >49€</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                                <div class="price-box-wrapper style2">
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Aisselles - Epilation définitive Bruxelles
                                                </h4>

                                            </div><span class="price-box_price">34€</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Demi-bras (mains comprises) - Epilation définitive Bruxelles</h4>

                                            </div><span class="price-box_price">44€</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Bras complet (mains comprises) - Epilation définitive Bruxelles
                                                </h4>


                                            </div><span class="price-box_price">59€</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Mains - Epilation définitive Bruxelles</h4>

                                            </div><span class="price-box_price">19€</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                                <div class="price-box-wrapper style2">
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Demi-jambes (y compris les pieds) - Epilation définitive Bruxelles
                                                </h4>

                                            </div><span class="price-box_price">59€</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Jambes complètes - Epilation définitive Bruxelles</h4>

                                            </div><span class="price-box_price">94€</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-step4" role="tabpanel">
                                <div class="price-box-wrapper style2">
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Pack corps complet - Epilation définitive Bruxelles
                                                </h4>

                                            </div><span class="price-box_price">179€</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Maillot intégral (SIF compris) - Epilation définitive Bruxelles</h4>

                                            </div><span class="price-box_price">49€</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Bas du dos - Epilation définitive Bruxelles
                                                </h4>

                                            </div><span class="price-box_price">24€</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Dos complet - Epilation définitive Bruxelles</h4>

                                            </div><span class="price-box_price">49€</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Ventre complet - Epilation définitive Bruxelles</h4>

                                            </div><span class="price-box_price">29€</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title">Nuque - Epilation définitive Bruxelles</h4>

                                            </div><span class="price-box_price">24€</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="service-area2 overflow-hidden space" id="service-sec">
        <div class="container">

            <div class="row slider-shadow " id="serviceSlide1"  data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-card">

                        <div class="service-card-content">
                            <h3 class="box-title">Prévenez les poils incarnés pour une peau plus douce</h3>
                            <p class="service-card_text">Vous n'aurez pas besoin de vous raser aussi souvent, ce qui minimise les éruptions cutanées ou
                                 les chaumes cassants, et moins d'épilation à la cire entraînera également moins de poils incarnés.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-card">

                        <div class="service-card-content">
                            <h3 class="box-title">Réduit la <br>croissance des poils</h3>
                            <p class="service-card_text">La thérapie au laser offre une solution permanente pour réduire la croissance des poils.
                                Avec une série de séances de traitement régulières, vous pouvez vous débarrasser de vos poils indésirables jusqu'à 90 %.
                                Chaque séance réduit la croissance des poils, les rendant plus fins et moins visibles.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-card">

                        <div class="service-card-content">
                            <h3 class="box-title">Rajeunissement <br>de la peau et de son apparence</h3>
                            <p class="service-card_text">L'épilation au laser peut aider à resserrer la peau en stimulant la production de collagène, une protéine essentielle pour maintenir l'élasticité de la peau.
                                Le résultat est une peau plus ferme et plus jeune.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-card">

                        <div class="service-card-content">
                            <h3 class="box-title">Diminution <br> de la fréquence de l'épilation</h3>
                            <p class="service-card_text">L'épilation au laser est une solution permanente à long terme pour
                                 l'élimination des poils. Cela signifie que vous n'aurez pas à vous soucier de l'épilation régulière,
                                ce qui peut être un soulagement pour ceux qui ont une pilosité excessive.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


            </div>
        </div>
        <div class="shape-mockup jump" data-top="0%" data-right="0%"><img src="assets/img/shape/flower_1_11.png"
                alt="shape"></div>
    </section>







<div class="overflow-hidden space" style="margin-bottom: 55px">
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
                    <div class="gallery-content"><a href="assets/img/gallery/gallery_1_2_2.jpg"
                                                    class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-xl-auto col-md-6 filter-item cat1 cat3 cat4">
                <div class="gallery-card wow fadeInUp">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image">
                    </div>
                    <div class="gallery-content"><a href="assets/img/gallery/gallery_1_3_3.jpg"
                                                    class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-xl-auto col-md-6 filter-item cat3 cat4 cat2">
                <div class="gallery-card wow fadeInUp">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image">
                    </div>
                    <div class="gallery-content"><a href="assets/img/gallery/gallery_1_4_4.jpg"
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

@endsection
