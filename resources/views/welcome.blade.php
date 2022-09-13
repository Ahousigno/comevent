@extends("layouts.master")


@section("contenu")





<div id="zone-header-wrapper" class="zone-wrapper zone-header-wrapper clearfix">
    <div id="zone-header" class="zone zone-header clearfix container-24">
        <div class="grid-24 region region-header-first" id="region-header-first">
            <div class="region-inner region-header-first-inner">
                <div class="block block-views block-page-accueil-main-slider-block block-views-page-accueil-main-slider-block odd block-without-title"
                    id="block-views-page-accueil-main-slider-block">
                    <div class="block-inner clearfix">
                        <div class="content clearfix">
                            <div
                                class="view view-page-accueil-main-slider view-id-page_accueil_main_slider view-display-id-block carousel view-dom-id-5e46d511edbd00dc104f4db81405250d">
                                <a href="{{route('register')}}"> <button type="button" class="btn btn-primary" disabled
                                        style="background-color:green">commencer un nouvel évènement</button></a>

                                <div class="view-content" style="background:#f7edf6">
                                    <div>
                                        <div class="item-0">
                                            <!-- id="owl-carousel-block1" -->
                                            <div class="views-field views-field-field-image">
                                                <div class="field-content"><img typeof="foaf:Image"
                                                        src="https://rh.uvci.edu.ci/drhuvci/public/bannner_rh1.jpg"
                                                        width="90%" alt="" /></div>
                                            </div>
                                            <div class="views-field views-field-title"> <span
                                                    class="field-content">Plateforme évènementielle</span> </div>
                                            <div class="views-field views-field-field-sous-titre">
                                                <div class="field-content">Université Virtuelle de Côte d'Ivoire</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container text-center">
                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                        <div class="col">
                                            <div class="card" style="width: 18rem;">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Service Communication</h5>
                                                    <p class="card-text">En charge de la supervision de l'évènement.</p>
                                                    <a href="{{route('communication')}}"
                                                        class="btn btn-primary">Communication</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card" style="width: 18rem;">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Service Média</h5>
                                                    <p class="card-text">En charge de la Création des visuels.</p>
                                                    <a href="{{route('media')}}" class="btn btn-primary">Media</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card" style="width: 18rem;">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Serivice Logistique</h5>
                                                    <p class="card-text">En charge de la disponibilité des salles.</p>
                                                    <a href="{{route('logistique')}}"
                                                        class="btn btn-primary">Logistique</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card" style="width: 18rem;">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Service Secrétariat</h5>
                                                    <p class="card-text">En charge de l'envoie des courriers de
                                                        l'évènement.</p>
                                                    <a href="{{route('secretariat')}}"
                                                        class="btn btn-primary">Secretariat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="card" style="width: 18rem;">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title and make
                                                        up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card" style="width: 18rem;">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title and make
                                                        up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card" style="width: 18rem;">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title and make
                                                        up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card" style="width: 18rem;">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title and make
                                                        up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->




                                <br><br>


                                <br>
                                <div style="background:#951b81; color:#fff" class="region region-page-bottom"
                                    id="region-page-bottom">
                                    <footer>

                                        <br>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <h6 align="left">| ADMINISTRATION UVCI</h6>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 align="left">| SCOLARITÉ UVCI</h6>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 align="left">| LIENS UTILES</h6>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4"><br>
                                                    <h6>(+225)0142222211 / 2722515147</h6><br>
                                                    <h6>courrier@uvci.edu.ci</h6><br>
                                                    <h6>28 BP 536 ABIDJAN 28</h6>
                                                </div>
                                                <div class="col-lg-4"><br>
                                                    <h6>(+225)0153666606 / 0172513032 / 0172513031</h6><br>
                                                    <h6>scolarite@uvci.edu.ci</h6><br>
                                                    <h6 align="left">| RESSOURCES HUMAINES ET QUALITES</h6><br>
                                                    <p>drh@uvci.edu.ci</p>
                                                </div>
                                                <div class="col-lg-4"><br>
                                                    <h6><a href="https://uvci.edu.ci/">Portail UVCI</a> </h6><br>
                                                    <h6><a target="_blank"
                                                            href="https://scolarite.uvci.edu.ci/">Scolarité</a> </h6>
                                                    <br>
                                                    <h6><a target="_blank" href="https://campus.uvci.edu.ci/">Campus</a>
                                                    </h6><br>
                                                    <h6><a target="_blank"
                                                            href="https://inveniov1.uvci.edu.ci/">Bibliothèque
                                                            Virtuelle</a> </h6>
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="col-lg12"><br><br>
                                                    <h6> <img style="width:17px"
                                                            src="http://www.uvci.edu.ci/fr/images/EBA/googlemaps.png"
                                                            alt=""> Adresse Géographique : Abidjan Cocody Deux-Plateaux,
                                                        rue K4 (200 mètres après le Tribunal du Commerce), 5.357177,
                                                        -4.001287</h6>
                                                </div>
                                            </div>

                                        </div>


                                        <div style="background:#520c50" class="copyright">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div style="text-align:left" class="copyright-content">
                                                            <p style="font-size:12px; padding-top:25px">Université
                                                                Virtuelle de Côte d'Ivoire - Tous droits réservés.</p>
                                                        </div><br>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div style="padding-top:15px" align="left" class="">
                                                            <a href="https://www.facebook.com/uvciv/"
                                                                title="UVCI Facebook" target="_blank"><img
                                                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/facebook.png"
                                                                    alt=""> </a>
                                                            <a href="https://www.linkedin.com/company/universit%C3%A9-virtuelle-de-c%C3%B4te-d-ivoire/"
                                                                title="UVCI Linkedin" target="_blank"><img
                                                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/linkedin.png"
                                                                    alt=""> </a>
                                                            <a href="https://twitter.com/uvciv" title="UVCI Twitter"
                                                                target="_blank"><img
                                                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/twitter.png"
                                                                    alt=""> </a>
                                                            <a href="http://uvci.tv/" title="UVCI TV"
                                                                target="_blank"><img
                                                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/webtvuvci.png"
                                                                    alt=""> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>
                        @endsection






                        <!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>UVCIEVENT</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/offcanvas-navbar/"> -->



                        <!-- Bootstrap core CSS -->
                        <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

                        <!-- Favicons -->
                        <!-- <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> -->


                        <!-- Custom styles for this template -->
                        <!-- <link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">UvciEvent</span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Connexion</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->

                        <!-- <div class="nav-scroller bg-body shadow-sm">
  <nav class="nav nav-underline" aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
    <a class="nav-link" href="#">
      Friends
      <span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="#">Explore</a>
    <a class="nav-link" href="#">Suggestions</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
  </nav>
</div> -->

                        <!-- <main class="container">
  
    </main> -->


                        <!-- 
<div id="zone-header-wrapper" class="zone-wrapper zone-header-wrapper clearfix">
  <div id="zone-header" class="zone zone-header clearfix container-24">
    <div class="grid-24 region region-header-first" id="region-header-first">
  <div class="region-inner region-header-first-inner">
    <div class="block block-views block-page-accueil-main-slider-block block-views-page-accueil-main-slider-block odd block-without-title" id="block-views-page-accueil-main-slider-block">
  <div class="block-inner clearfix">
    <div class="content clearfix">
      <div class="view view-page-accueil-main-slider view-id-page_accueil_main_slider view-display-id-block carousel view-dom-id-5e46d511edbd00dc104f4db81405250d">
      <button type="button" class="btn btn-primary" disabled>commencer un nouvel évènement</button>

        <div class="view-content" style="background:#f7edf6">
          <div><div class="item-0"> -->
                        <!-- id="owl-carousel-block1" -->
                        <!-- <div class="views-field views-field-field-image">        <div class="field-content"><img typeof="foaf:Image" src="https://rh.uvci.edu.ci/drhuvci/public/bannner_rh1.jpg" width="90%" alt="" /></div>  </div>
              <div class="views-field views-field-title">        <span class="field-content">Plateforme évènementielle</span>  </div>
              <div class="views-field views-field-field-sous-titre">        <div class="field-content">Université Virtuelle de Côte d'Ivoire</div>  </div></div>
            </div>


          </div>


<br><br>


<br>
<div style="background:#951b81; color:#fff" class="region region-page-bottom" id="region-page-bottom">
  <footer>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
              <h6 align="left">| ADMINISTRATION UVCI</h6>
            </div>
            <div class="col-lg-4">
              <h6 align="left">| SCOLARITÉ UVCI</h6>
            </div>
            <div class="col-lg-4">
              <h6 align="left">| LIENS UTILES</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4"><br>
              <h6>(+225)0142222211 / 2722515147</h6><br>
              <h6>courrier@uvci.edu.ci</h6><br>
              <h6>28 BP 536 ABIDJAN 28</h6>
            </div>
            <div class="col-lg-4"><br>
              <h6>(+225)0153666606 / 0172513032 / 0172513031</h6><br>
              <h6>scolarite@uvci.edu.ci</h6><br>
              <h6 align="left">| RESSOURCES HUMAINES ET QUALITES</h6><br>
              <p>drh@uvci.edu.ci</p>
            </div>
            <div class="col-lg-4"><br>
              <h6><a href="https://uvci.edu.ci/">Portail UVCI</a> </h6><br>
              <h6><a target="_blank" href="https://scolarite.uvci.edu.ci/">Scolarité</a> </h6><br>
              <h6><a target="_blank" href="https://campus.uvci.edu.ci/">Campus</a> </h6><br>
              <h6><a target="_blank" href="https://inveniov1.uvci.edu.ci/">Bibliothèque Virtuelle</a> </h6>
            </div>
        </div>

        <div class="">
          <div class="col-lg12"><br><br>
            <h6> <img style="width:17px" src="http://www.uvci.edu.ci/fr/images/EBA/googlemaps.png" alt=""> Adresse Géographique : Abidjan Cocody Deux-Plateaux, rue K4 (200 mètres après le Tribunal du Commerce), 5.357177, -4.001287</h6>
          </div>
        </div>

    </div>


      <div style="background:#520c50" class="copyright">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <div style="text-align:left" class="copyright-content">
                          <p style="font-size:12px; padding-top:25px">Université Virtuelle de Côte d'Ivoire - Tous droits réservés.</p>
                      </div><br>
                  </div>
                  <div class="col-lg-6">
                    <div style="padding-top:15px" align="left" class="">
                      <a href="https://www.facebook.com/uvciv/" title="UVCI Facebook" target="_blank"><img src="https://rh.uvci.edu.ci/drhuvci/public/template/facebook.png" alt=""> </a>
                      <a href="https://www.linkedin.com/company/universit%C3%A9-virtuelle-de-c%C3%B4te-d-ivoire/" title="UVCI Linkedin" target="_blank"><img src="https://rh.uvci.edu.ci/drhuvci/public/template/linkedin.png" alt=""> </a>
                      <a href="https://twitter.com/uvciv" title="UVCI Twitter" target="_blank"><img src="https://rh.uvci.edu.ci/drhuvci/public/template/twitter.png" alt=""> </a>
                      <a href="http://uvci.tv/" title="UVCI TV" target="_blank"><img src="https://rh.uvci.edu.ci/drhuvci/public/template/webtvuvci.png" alt=""> </a>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
</div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="{{asset('js/offcanvas.js')}}"></script>
  </body>
</html> -->