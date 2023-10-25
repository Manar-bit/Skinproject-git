@extends('layouts.app')

@section('content')

<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Tarifs</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Acceuil</a></li>
                    <li>Tarifs</li>
                </ul>
            </div>
        </div>
    </div>
</div>





 <section class="th-blog-wrapper space-top space-extra-bottom"  style="padding-top: 80px;">
        <div class="container th-container">
        <div class="filter-menu style2 indicator-active filter-menu-active">
                <button data-filter="*" class="tab-btn active" type="button">Tous</button>
                <button data-filter=".visage" class="tab-btn" type="button">Visage</button>
                <button data-filter=".bras" class="tab-btn" type="button">Bras</button>
                <button data-filter=".jambes" class="tab-btn" type="button">Jambes</button>
                <button data-filter=".corps" class="tab-btn" type="button">Corps</button>
            </div>
            <div class="row gallery-row filter-active-1">
                <div class="col-lg-6 col-xl-4 filter-item visage">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-1.jpg" alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">100€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">49€</span></div>
                            <h2 class="blog-title" style="font-size: 32px;"><a href="blog-details.html">Visage - Epilation définitive Bruxelles</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 filter-item bras">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-2.jpg"
                                                                               alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">85€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">34€</span></div>
                            <h2 class="blog-title"><a href="blog-details.html">Aisselles - Epilation définitive Bruxelles
                                    Spas</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 filter-item bras">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.jpg"
                                                                               alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">70€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">44€</span></div>
                            <h2 class="blog-title"><a href="blog-details.html">Demi-bras (mains comprises) - Epilation définitive Bruxelles
                                    Spas</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 filter-item bras">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-4.jpg"
                                                                               alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">120€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">59€</span></div>
                            <h2 class="blog-title"><a href="blog-details.html">Bras complet (mains comprises) - Epilation définitive Bruxelles
                                    Spas</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 filter-item bras">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-5.jpg"
                                                                               alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">35€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">19€</span></div>
                            <h2 class="blog-title"><a href="blog-details.html">Mains - Epilation définitive Bruxelles
                                    Spas</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 filter-item jambes">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-6.jpg"
                                                                               alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">120€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">59€</span></div>
                            <h2 class="blog-title"><a href="blog-details.html">Demi-jambes (y compris les pieds) - Epilation définitive Bruxelles
                                    Spas</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 filter-item corps">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-7.png"
                                                                               alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">350€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">179€</span></div>
                            <h2 class="blog-title"><a href="blog-details.html">Pack corps complet - Epilation définitive Bruxelles
                                    Spas</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 filter-item visage">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-8.jpg"
                                                                               alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">48€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">19€</span></div>
                            <h2 class="blog-title"><a href="blog-details.html">Lèvre supérieur - Epilation définitive Bruxelles
                                    Spas</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 filter-item visage">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-9.jpg"
                                                                               alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">30€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">19€</span></div>
                            <h2 class="blog-title"><a href="blog-details.html">Menton - Epilation définitive Bruxelles
                                    Spas</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 filter-item jambes">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-10.jpg"
                                                                               alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">195€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">94€</span></div>
                            <h2 class="blog-title"><a href="blog-details.html">Jambes complètes - Epilation définitive Bruxelles
                                    Spas</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 filter-item corps">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-11.png"
                                                                               alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">90€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">49€</span></div>
                            <h2 class="blog-title"><a href="blog-details.html">Maillot intégral (SIF compris) - Epilation définitive Bruxelles
                                    Spas</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 filter-item corps">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-s-1-11.jpg"
                                                                               alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p> A partir de</p>
                                <span class="sub-title"  style="text-decoration: line-through;">50€</span>
                                <span class="sub-title"  style="font-size: 25px ; color:#d09223 ">24€</span></div>
                            <h2 class="blog-title"><a href="blog-details.html">Bas du dos - Epilation définitive Bruxelles
                                    Spas</a></h2>
                            <a href="blog-details.html" class="th-btn" style="border-radius: 15px 0 15px ; box-shadow: 5px 5px 5px rgba(41,59,95,.25);">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>



























@endsection
