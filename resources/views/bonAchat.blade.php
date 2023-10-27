
@extends('layouts.app')

@section('content')


    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg3.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Bon cadeau 150€</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Acceuil</a></li>
                        <li>Bon cadeau 150€</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="space" id="contact-sec" class="space1">
    <div class="container">
        <div class="row gy-40">
        <div class="col-lg-6 col-xl-7">
           

           <form action="/contact" method="POST"
                 class="contact-form ajax-contact">
                  @csrf
               <h2 class="form-title text-center" style="margin-top: -40px;">Renseignez vos informations</h2>
               <div class="row">
                   <div class="form-group col-md-6 ">
                    
                       <i class="fa-sharp fa-light fa-user"></i> 
                       
                       <input type="text" class="form-control" name="surname" id="surname" placeholder="Nom">
                   </div>

                   <div class="form-group col-md-6 ">
                       <i class="fa-sharp fa-light fa-user"></i> 
                       
                       <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prenom">

                   </div>
                   <div class="form-group col-md-6 ">
                       <i class="fa-sharp fa-regular fa-envelope"></i> 
                      
                       <input type="email" class="form-control" name="email" id="email"
                           placeholder="Adresse e-mail ">
                       </div>
                       
                   <div class="form-group col-md-6 ">
                  
                       <input type="tel" class="form-control" name="number" id="number" placeholder="Numéro de téléphone"> 
                       <i class="fal fa-phone"></i>
                   </div>
                      

                   <h3 class="form-title " style="margin-top: 4px;">Informations concernant 
                   le bénéficiaire de votre cadeau</h3>
                   <div class="form-group col-md-6 ">
                    
                       <i class="fa-sharp fa-light fa-user"></i> 
                       
                       <input type="text" class="form-control" name="surname" id="surname" placeholder="Nom et prénom">
                   </div>

                   <div class="form-group col-md-12 ">
                       <i class="fal fa-comment"></i>
                     <textarea name="comment" id="comment" cols="30" rows="3" class="form-control" placeholder="Votre message"></textarea>
                   </div>
                    <div class="form-group col-md-6">


                   </div>
               </div>
               <p class="form-messages mb-0 mt-3"></p>
           </form>
       </div>
            <div class="col-lg-6 col-xl-5">
                <div class="contact-info-wrap me-xl-4">
                    <div class="title-area mb-20">
                        <h3 class="sec-title" class="sec-title1">Votre Achat</h3>
                  
                    </div>
                    
                    <table data-v-18d3c016="" class="mad-table"><tbody data-v-18d3c016=""><tr data-v-18d3c016="" class="mad-product-item"><td data-v-18d3c016="" data-cell-title="Product"><h6 data-v-18d3c016="" class="mad-product-title">Voucher 150€ x 1</h6></td> <td data-v-18d3c016="" data-cell-title="Subtotal"><span data-v-18d3c016="" class="mad-price">150.00 €</span></td></tr></tbody></table>
                    <table data-v-18d3c016="" class="mad-table mad-table--vertical"><tbody data-v-18d3c016=""><tr data-v-18d3c016="" class="mad-total"><th data-v-18d3c016="">Total</th> <td data-v-18d3c016=""><span data-v-18d3c016="" class="mad-price"><b data-v-18d3c016="">150.00 €</b></span></td></tr> <tr data-v-18d3c016=""><td data-v-18d3c016="" colspan="2" class="payment-option"><div data-v-18d3c016="" class="input-wrapper"><input data-v-18d3c016="" type="radio" checked="checked" name="pm_payment_method" id="pm-cheque-payment" value="pm_cheque_payment"> <label data-v-18d3c016="" for="pm-cheque-payment">Boncontact ou Carte de crédit avec Mollie </label> <span data-v-18d3c016=""><img data-v-18d3c016="" src="https://www.epilationsdefinitives.be/images/payment.jpg" alt=""></span> <p data-v-18d3c016="" class="payment-desc">
                                                Une fois que vous aurez cliqué pour continuer, vous serez redirigé
                                                vers Bancontact ou Carte de crédit avec Mollie.
                                            </p></div></td></tr> <tr data-v-18d3c016=""><td data-v-18d3c016="" colspan="2" class="payment-option"><div data-v-18d3c016="" class="input-wrapper"><input data-v-18d3c016="" type="checkbox" id="checkbox22" name="checkbox22"> <label data-v-18d3c016="" for="checkbox22">J'ai lu et j’accepte les <br data-v-18d3c016=""> <a data-v-18d3c016="" href="https://www.epilationsdefinitives.be/conditions-generales-de-vente" target="_blank" class="mad-link">termes et conditions générales</a><span data-v-18d3c016="" class="req">*</span></label></div></td></tr></tbody></table>
               
               
                                                <button class="th-btn fw-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Payer
                                    </i></button>
                                            </div> 

            </div>
          

        
        </div>
    </div>
</div>

















@endsection
