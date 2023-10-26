@extends('layouts.app')

@section('content')


    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg3.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Technologies</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Acceuil</a></li>
                        <li>Technologies</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="faq-sec overflow-hidden space"  style="background-image: linear-gradient(to right, #fffdfd 36%, #fde9c7 28%);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <img src="assets/img/normal/tech5.jpg"
                         alt="Avater">
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4">
                        <div class="title-area mb-40">
                            <h2 class="sec-title">Offrez le choix avec nos chèques cadeaux !</h2>



                        </div>

                        <div class="accordion-card active" style="padding-top: 23px;">

                            <div class="accordion-body" class="accordion-body1" >
                                <p class="faq-text">Les chèques cadeaux Global Skin sont valables sur l'ensemble de nos services. Ils sont utilisables en une ou plusieurs fois, sur une durée de 2 ans.

                                    Offrez le cadeau idéal en laissant le choix à vos proches de profiter de nos services d'épilation de qualité.

                                    Achetez dès maintenant votre chèque cadeau Global Skin en ligne ou en venant sur place dans notre centre et faites plaisir à vos proches en leur offrant une expérience unique.</p>


                            </div>
                            <div class="col-auto d-none d-xl-block">
                                <a href="#cheque" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Acheter</a>
                                <a href="" class="th-btn searchBoxToggler" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Condition d'utilisation</a>




                            </div>


                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <section class="space overflow-hidden"  id="cheque">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title style2">GLOBAL SKIN</span>
                <h2 class="sec-title">Nos chèques cadeaux</h2></div>
            <div class="row ">
                <div class="col-md-6 col-xl-3">
                    <div class="blog-card wow fadeInUp">
                        <div class="blog-img"><img src="assets/img/blog/blog_1_1.jpg" alt="blog image"></div>
                        <div class="blog-card_wrapper">

                            <div class="blog-card-content">
                                <div class="blog-meta">
                                    <span>50.00 €</span>
                                    <span><i class="fa-solid fa-user"></i>1</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i>15min</span>
                                </div>
                                <h3 class="box-title">Bon cadeau 50€</h3>
                                <a href="blog-details.html" class="line-btn">Lire la suite</i></a><br>
                                <a href="{{route('bonAchat')}}"  class="line-btn">Acheter</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="blog-card wow fadeInDown">
                        <div class="blog-img"><img src="assets/img/blog/blog_1_2.jpg" alt="blog image"></div>
                        <div class="blog-card_wrapper">

                            <div class="blog-card-content">
                                <div class="blog-meta">
                                    <span>50.00 €</span>
                                    <span><i class="fa-solid fa-user"></i>1</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i>30min</span>
                                </div>
                                <h3 class="box-title">Bon cadeau 75.00€</h3>
                                <a href="blog-details.html" class="line-btn">Lire la suite</i></a><br>
                                <a href="{{route('bonAchat')}}"  class="line-btn">Acheter</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="blog-card wow fadeInUp">
                        <div class="blog-img"><img src="assets/img/blog/blog_1_3.jpg" alt="blog image"></div>
                        <div class="blog-card_wrapper">
                            <div class="blog-card-content">
                                <div class="blog-meta">
                                    <span>50.00 €</span>
                                    <span><i class="fa-solid fa-user"></i>1</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i>1h</span>
                                </div>
                                <h3 class="box-title">Bon cadeau 150.00€</h3>
                                <a href="blog-details.html" class="line-btn">Lire la suite</i></a><br>
                                <a href="{{route('bonAchat')}}"  class="line-btn">Acheter</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="blog-card wow fadeInDown">
                        <div class="blog-img"><img src="assets/img/blog/blog_1_4.jpg" alt="blog image"></div>
                        <div class="blog-card_wrapper">

                            <div class="blog-card-content">
                                <div class="blog-meta">
                                    <span>50.00 €</span>
                                    <span><i class="fa-solid fa-user"></i>1</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i>1h</span>
                                </div>
                                <h3 class="box-title">Bon cadeau 150.00€</h3>
                                <a href="blog-details.html" class="line-btn">Lire la suite</i></a><br>
                                <a href="{{route('bonAchat')}}"  class="line-btn">Acheter</i></a>
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










@endsection
