


@extends("layouts.master")


@section("contenu")

<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="/docs/5.0/asset/brand/bootstrap-logo-white.svg" alt="" width="48" height="38">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Bienvenue au service Juridique, Partenariat et Communication de L'Université Virtuelle de Côte d'Ivoire</h1>
    </br>
      <small>Vous êtes sur notre plateforme de l'évènementiel</small>
</div>
</div>


</br>
      
<style media="screen">
    .bg-body {
      background-image: url();
      background-repeat: no-repeat;
      /* background-color: #3d2e80!important; */
      background-size: cover;
    }
    </style>


  </head>
  <body class="hold-transition login-page-uvci bg-body">
    <div class="login-box">
      <div class="login-logo">
        <a href=""
          ><img
            src="https://rh.uvci.edu.ci/drhuvci/public/template/admin/dist/img/logo.png"

            width="100"
            height="100"
        /></a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">
          Plateforme des évènementiels de l'Université Virtuelle de Côte d'Ivoire
          </p>
          </br>

          <form method="POST" action="http://127.0.0.1:8000/infos">
              <input type="hidden" name="_token" value="Y68jlM6R8RZTBJnjzIrT31AEeJiwWyNXs7aapWa4">            <div class="input-group mb-3">
              <input id="email" type="email" placeholder="E-Mail institutionnel" class="form-control " name="email" value="" required autocomplete="email" autofocus>

                            <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fa fa-envelope"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input id="password" type="password" placeholder="mot de passe" class="form-control " name="password" required autocomplete="current-password">

                            <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fa fa-lock"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember" />
                  <label for="remember">
                    Se souvenir de moi
                  </label>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <a href=""><button type="submit" class="btn btn-uvci-connexion btn-block">
                  Connexion
                </button></a>
              </div>
            </div>
          </form>

          <p class="mt-4">
            <a href="" class="link-uvci"
              >Mot de passe oublié</a
            >
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->



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
    </div>
  </div>

@endsection