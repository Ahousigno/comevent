@extends("layouts.master")

@section("contenu")
    <div class="content bg-light">
        <div class="banner">
            <div class="overlay container-fluid mt-2">
                {{--<img typeof="foaf:Image" src="https://rh.uvci.edu.ci/drhuvci/public/bannner_rh1.jpg" width="100%" height="500px" alt="" />--}}
                <h2 class="text">
                    Bienvenue au service Juridique, Partenariat et Communication de
                    L'Université
                    Virtuelle de Côte d'Ivoire
                </h2>
                <h3 class="text2">Vous êtes sur notre plateforme de l'évènementiel</h3>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mt-4 mb-4">
            <div class="col">
                <div class="card mb-3" style="width: 17rem;">
                    <img src="{{asset('service/images/communication.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service Communication</h5>
                        <p class="card-text">En charge de la supervision de l'évènement.</p>
                        <a href="{{route('communication')}}" class="btn btn-primary" id="btn">Communication</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3" style="width: 17rem;">
                    <img src="{{asset('service/images/media.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service Média</h5>
                        <p class="card-text">En charge de la Création des visuels.</p>
                        <a href="{{route('media')}}" class="btn btn-primary" id="btn">Media</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 17rem;">
                    <img src="{{asset('service/images/logistique.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Serivice Logistique</h5>
                        <p class="card-text">En charge de la disponibilité des salles.</p>
                        <a href="{{route('logistique')}}" class="btn btn-primary" id="btn">Logistique</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 17rem;">
                    <img src="{{asset('service/images/secretariat.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service Secrétariat</h5>
                        <p class="card-text">En charge de l'envoie des courriers de l'évènement.</p>
                        <a href="{{route('secretariat')}}" class="btn btn-primary" id="btn">Secretariat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <h6><a target="_blank" href="https://scolarite.uvci.edu.ci/">Scolarité</a> </h6>
                        <br>
                        <h6><a target="_blank" href="https://campus.uvci.edu.ci/">Campus</a>
                        </h6><br>
                        <h6><a target="_blank" href="https://inveniov1.uvci.edu.ci/">Bibliothèque Virtuelle</a> </h6>
                    </div>
                </div>
                <div class="">
                    <div class="col-lg12"><br><br>
                        <h6> <img style="width:17px"
                                src="http://www.uvci.edu.ci/fr/images/EBA/googlemaps.png" alt=""> Adresse Géographique : Abidjan Cocody Deux-Plateaux,
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
                                        src="https://rh.uvci.edu.ci/drhuvci/public/template/facebook.png" alt=""> </a>
                                <a href="https://www.linkedin.com/company/universit%C3%A9-virtuelle-de-c%C3%B4te-d-ivoire/"
                                    title="UVCI Linkedin" target="_blank"><img
                                        src="https://rh.uvci.edu.ci/drhuvci/public/template/linkedin.png" alt=""> </a>
                                <a href="https://twitter.com/uvciv" title="UVCI Twitter"
                                    target="_blank"><img
                                        src="https://rh.uvci.edu.ci/drhuvci/public/template/twitter.png" alt=""> </a>
                                <a href="http://uvci.tv/" title="UVCI TV"
                                    target="_blank"><img
                                        src="https://rh.uvci.edu.ci/drhuvci/public/template/webtvuvci.png" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
