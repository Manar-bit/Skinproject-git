@extends('layouts.app')

@section('content')


    <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
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
                    <img src="{{asset('assets/img/normal/tech4.jpg')}}"
                         alt="Avater">
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4">
                        <div class="title-area mb-40">
                            <h2 class="sec-title">À propos Global Skin</h2>



                        </div>

                        <div class="accordion-card active" style="padding-top: 23px;">

                            <div class="accordion-body" class="accordion-body1" >
                                <p class="faq-text"> Global Skin est un centre d'épilation définitive au laser situé à Bruxelles qui vous offre une gamme complète de services de soins de la peau.

                                    Notre technologie de pointe pour l'épilation définitive au laser est le laser Eden Skin,
                                    qui est connu pour être l'un des lasers les plus performants du marché. Ce laser utilise une
                                    technologie de refroidissement avancée pour minimiser l'inconfort et la douleur pendant le traitement.</p>


                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="faq-sec overflow-hidden space" >
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="ps-xl-4">
                        <div class="title-area mb-40">
                            <h2 class="sec-title">Equipe compétente & accréditée</h2>



                        </div>

                        <div class="accordion-card active" style="padding-top: 23px;">

                            <div class="accordion-body" class="accordion-body1" >
                                <p class="faq-text">Notre personnel est hautement qualifié et certifié pour vous fournir des services de soins de la peau de qualité supérieure. Nous travaillons en étroite collaboration avec nos clients pour
                                    créer des programmes personnalisés en fonction de leurs besoins individuels.

                                    Le centre est également équipé d'une technologie
                                    de pointe pour garantir que tous les traitements sont effectués en toute sécurité et
                                    avec les résultats les plus efficaces possibles. Si vous cherchez un centre d'épilation définitive au laser de qualité à Bruxelles, Global Skin pourrait être un excellent choix.</p>


                            </div>

                        </div>




                    </div>
                </div>
                <div class="col-xl-6">
                    <img src="{{asset('assets/img/normal/tech3.jpg')}}"
                         alt="Avater">
                </div>
            </div>
        </div>
    </div>
    </div>







@endsection
