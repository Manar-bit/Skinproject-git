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

                <form  method="POST" id="contactform" action="{{ route('contact.sendMailcontact') }}" class="contact-form">
                    {!! csrf_field() !!}
                    <h2 class="form-title text-center" style="margin-top: -40px;">Contactez-nous</h2>
                    <div class="row">
                        <div class="form-group col-md-6 ">
                            <i class="fa-sharp fa-light fa-user"></i>
                            <input type="text" class="form-control" name="surname" id="surname" placeholder="@lang('Nom')*" data-required-error="@lang('Ce champs est obligatoire')" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group col-md-6 ">
                            <i class="fa-sharp fa-light fa-user"></i>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="@lang('Prénom')*" data-required-error="@lang('Ce champs est obligatoire')" required>
                            <div class="help-block with-errors"></div>


                        </div>
                        <div class="form-group col-md-6 ">
                            <i class="fa-sharp fa-regular fa-envelope"></i>
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="@lang('Email')*" data-required-error="@lang('Ce champs est obligatoire')" required>
                            <div class="help-block with-errors"></div>
                            </div>
                        <div class="form-group col-md-6 ">
                            <input type="tel" class="form-control" name="number" id="number"  placeholder="@lang('Téléphone')*" data-required-error="@lang('Ce champs est obligatoire')" required>
                            <div class="help-block with-errors"></div>
                        </div>



                        <div class="form-group col-md-6 ">
                            <i class="fal fa-comment"></i>
                          <textarea name="comment" id="comment" cols="30" rows="3" class="form-control" placeholder="@lang('Message')*" data-required-error="@lang('Ce champs est obligatoire')" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                        <fieldset class="form-group col-md-6">
                            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                {!! app('captcha')->display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block text-danger"><strong>{{ $errors->first('g-recaptcha-response') }}</strong></span>
                                @endif
                            </div>
                        </fieldset>
                         <div class="form-group col-md-6">
                            <button class="th-btn fw-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Envoyer</button>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="form-confirm">
                                <div class="success-confirm text-left">@lang('Merci! Votre message a été envoyé. Nous reviendrons vers vous bientôt')!</div>
                                <div class="error-confirm text-left">@lang('Veuillez vous assurer que vous êtes humain').</div>
                            </div>
                        </div>
                    </div>

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
@section('scripts')
    <script src='//www.google.com/recaptcha/api.js'></script>
    <script src="{{asset('assets/form/jquery.form.min.js')}}"></script>
    <script src="{{asset('assets/form/validator.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            var $contactForm = $('#contactform');
            $contactForm.validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()) {
                    e.preventDefault();
                    $('.error-confirm, .success-confirm').fadeOut();
                    $contactForm.ajaxSubmit({
                        type: jQuery($contactForm).attr('method'),
                        data: $contactForm.serialize(),
                        url: jQuery($contactForm).attr('action'),
                        success: function success() {
                            $('.success-confirm', $contactForm).css('display', 'inline-block').fadeIn();
                            $contactForm.get(0).reset();
                        },
                        error: function error(data) {
                            let errors = data.responseJSON,
                                msg = '<ul style="list-style: inside;">';
                            $.each(errors.errors, function (key, value) {
                                msg += '<li style="color:red">' + value[0] + '</li>';
                            });
                            msg += '</ul>';
                            $('.error-confirm').html(msg).fadeIn();
                        }
                    });
                }
            });
        });
    </script>
@endsection
