@extends('layouts.app')

@section('content')



<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Contact</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Acceuil</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="space" id="contact-sec" class="space1">
    <div class="container">
        <div class="row gy-40">
            <div class="col-lg-6 col-xl-5">
                <div class="contact-info-wrap me-xl-4">
                    <div class="title-area mb-20">
                        <h3 class="sec-title" class="sec-title1">Horaires d'ouverture</h3>
                        <p>Du Lundi au Samedi de 10h00 à 19h00 sur rendez-vous</p>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fa-light fa-location-dot"></i></div>
                        <div class="media-body">
                            <span class="contact-info_text">Rue de la Pépinière 2A, 1000 Bruxelles</span>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fa-light fa-phone"></i></div>
                        <div class="media-body">
                            <span class="contact-info_text"><a href="tel:+256214203215">+32 470 37 90 18 </a></span>

                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fa-light fa-location-dot"></i></div>
                        <div class="media-body">
                            <span mailto:class="contact-info_text">info@globalskin.be</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-7">

                <form action="https://themeholy.com/html/rasm/demo/mail.php" method="POST"
                      class="contact-form ajax-contact">
                    <h2 class="form-title text-center" style="margin-top: -40px;">Contactez-nous</h2>
                    <div class="row">
                        <div class="form-group col-md-6"><i class="fa-sharp fa-light fa-user"></i> <input
                                type="text" class="form-control" name="name" id="name" placeholder="Nom">
                        </div>

                        <div class="form-group col-md-6"><i class="fa-sharp fa-light fa-user"></i> <input
                                type="text" class="form-control" name="name" id="name" placeholder="Prenom">

                        </div>
                        <div class="form-group col-md-6"><i class="fa-sharp fa-regular fa-envelope"></i> <input
                                type="email" class="form-control" name="email" id="email"
                                placeholder="Email"></div>
                        <div class="form-group col-md-6"><input type="tel" class="form-control" name="number"
                                                                id="number" placeholder="Téléphone"> <i class="fal fa-phone"></i></div>



                        <div class="form-group col-md-6"><i class="fal fa-comment"></i> <textarea name="message"
                                                                                                  id="message" cols="30" rows="3" class="form-control"
                                                                                                  placeholder="Message"></textarea></div>
                        <div class="form-group col-md-6">


                            <button class="th-btn fw-btn">Contact<i
                                    class="fa-solid fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>

            <div class="contact-form-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-xl-12">
                        <div class="map-sec">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.551699663208!2d4.361404900000001!3d50.839467199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c486597f23e7%3A0xcac7f04493c6d0d3!2sRue%20de%20la%20P%C3%A9pini%C3%A8re%202A%2C%201000%20Bruxelles%2C%20Belgique!5e0!3m2!1sfr!2stn!4v1698145438563!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
