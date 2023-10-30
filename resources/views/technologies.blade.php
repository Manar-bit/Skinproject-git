
@extends('layouts.app')

@section('content')


    <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/breadcumb/breadcumb-bg1.jpg')}}">
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
                    <img src="{{asset('assets/img/testimonial/testi1.jpg')}}"
                         alt="Avater">
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4">
                        <div class="title-area mb-40">
                            <h2 class="sec-title">GLOBAL SKIN</h2>
                             <span class="sub-title">LA MACHINE PROFESSIONNELLE POUR L’ÉPILATION DÉFINITIVE</span>


                        </div>

                        <div class="accordion-card active" style="padding-top: 23px;">

                            <div class="accordion-body" class="accordion-body1" >
                                <p class="faq-text"> La machine LASERSKIN est utilisée pour l’épilation définitive sur tous types de peaux, même foncées. Sa technologie à la pointe permet :<br>
                                    <b>Un soin indolore :</b> grâce à la technologie « Permanent Pulse » qui permet un balayage continu et au cristal réfrigéré (-10°C) qui évite une surchauffe de la peau.
                                 <br> <b>Un soin rapide :</b>  Un soin rapide : 10 minutes à 30 minutes pour les zones étendues comme les jambes, le torse, le dos.
                                  <br><b>Un soin efficace</b>   dès la première séance d’épilation
                                 <br><b>Des résultats durables :</b>    résultats définitifs après 4 à 6 séances.</p>


                            </div>
                            <div class="col-auto d-none d-xl-block">
                                <a href="{{route('tarifs')}}" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>

                            </div>
                        </div>




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
                        <div class="title-area  mb-25 wow fadeInLeft"><span class="sub-title">2000 WATTS</span>
                            <h2 class="sec-title">LASERSKIN</h2>
                            <p class="mt-n2 mb-35">Equipé de <b>QUATRE longueurs d’ondes</b>, le LASERSKIN - 2000 Watts - est utilisé pour l’épilation définitive sur tous types de peaux, même foncées. L’appareil est muni d’une tête réfrigérée permettant
                                de ne pas échauffer la peau. Le soin se pratique en mouvement pour le confort du patient.</p>
                            <h3 class="sec-title">BENEFICES</h3>

                            <ul>
                                <li>• Efficace sur les phototypes de peau I à VI</li>
                                <li>• Résultats définitifs après 4 à 6 séances</li>
                                <li>• Rapide (30 minutes pour les zones étendues)</li>
                            </ul>

                        </div>


                    </div>
                </div>
                <div class="col-lg-5">
                    <div>
                        <div class="img1 wow fadeInRight"><img src="{{asset('assets/img/normal/tech1.png')}}" alt="Choose"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="faq-sec overflow-hidden space"  style="background-image: linear-gradient(to right,  #fffdfd  36%, #fde9c7 28%);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <img src="{{asset('assets/img/normal/tech2.jpg')}}"
                         alt="Avater">
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4">
                        <div class="title-area mb-40">
                            <h2 class="sec-title">GLOBAL SKIN</h2>



                        </div>

                        <div class="accordion-card active" style="padding-top: 23px;">

                            <div class="accordion-body" class="accordion-body1" >
                                <p class="faq-text">L’appareil d’épilation définitive (équipé de 4 longueurs d’ondes) convient parfaitement pour les dames et les hommes et ce pour tous types de poils, même les plus clairs (sauf les blancs).

                                    Celui-ci est muni d’une tête réfrigérée permettant de ne pas échauffer la peau. Le soin se pratique en mouvement pour le confort du patient. Grâce à ses roulettes, sa poignée ergonomique et à son large écran mobile, le LASERSKIN est très maniable. Cela permet de réaliser les soins en mouvement pour le confort des clients.

                                    Un embout se clipsant sur la poignée permet de traiter les petites zones du visage (nez, oreilles, sourcils & contour de barbe).

                                    Le programme de soins d’épilation laser est très intuitif. En sélectionnant la zone du corps et la couleur de peau, les paramètres s’affichent automatiquement.</p>


                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>














@endsection
