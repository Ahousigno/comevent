@extends("layouts.master")

@section("contenu")
<style>
.btn {
    margin-left: auto;
    display: block;
    margin-right: auto;
}
</style>
<div class="my-3 bg-body rounded shadow-sm">


    <a href="{{route('secretariat.create')}}">
        <h3 class="border-botton pb-2 mb-4"><button type="button" class="btn btn-primary">créér une nouvelle
                réunion</button>
        </h3>
    </a>
    <div style="text-align: center">
        @if(session()->has("success"))

        <div class="alert alert-success">

            <h3>{{session()->get("success")}}</h3>
        </div>

        @endif

        @if ($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach($errors->all() as $error)

                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <form role="form" action="{{route('reunion.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5" class="row">
            <div class="col-lg-12">

                <h3 class="text-blue color-uvci" style="text-align:center">Réunion</h3>
                </br>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">Ordre du jour<span style="color: red;"></span></label>
                            <input type="text" id="ordre" class="form-control" name="ordre">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prenom">Date<span style="color: red;"></span></label>
                            <input type="date" id="date_reunion" class="form-control" name="date_reunion">
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">Heure de début<span style="color: red;"></span></label>
                            <input type="time" id="heure_debut" class="form-control" name="heure_fin">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prenom">Heure de fin<span style="color: red;"></span></label>
                            <input type="time" id="heure_fin" class="form-control" name="heure_fin">
                        </div>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nom">canal<span style="color: red;"></span></label>
                        <input type="text" id="canal" class="form-control" name="canal">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="prenom">lien de la réunion<span style="color: red;"></span></label>
                        <input type="lien_reunion" id="lien_reunion" class="form-control" name="heure_fin">
                    </div>
                </div>
            </div>
        </div>
</div>

</br></br></br></br>
<button type="submit" class="btn btn-primary" style="width:45%; background:#951b81; ">Envoyer
    pour validation
</button>

</div>
</div>
</form>

</br> </br>
</form>
</div>
</br> </br>
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
                    <h6><a target="_blank" href="https://scolarite.uvci.edu.ci/">Scolarité</a>
                    </h6>
                    <br>
                    <h6><a target="_blank" href="https://campus.uvci.edu.ci/">Campus</a> </h6>
                    <br>
                    <h6><a target="_blank" href="https://inveniov1.uvci.edu.ci/">Bibliothèque
                            Virtuelle</a> </h6>
                </div>
            </div>

            <div class="">
                <div class="col-lg12"><br><br>
                    <h6> <img style="width:17px" src="http://www.uvci.edu.ci/fr/images/EBA/googlemaps.png" alt="">
                        Adresse Géographique : Abidjan Cocody Deux-Plateaux, rue K4 (200 mètres
                        après le Tribunal du
                        Commerce), 5.357177, -4.001287</h6>
                </div>
            </div>

        </div>


        <div style="background:#520c50" class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div style="text-align:left" class="copyright-content">
                            <p style="font-size:12px; padding-top:25px">Université Virtuelle de
                                Côte
                                d'Ivoire - Tous
                                droits réservés.</p>
                        </div><br>
                    </div>
                    <div class="col-lg-6">
                        <div style="padding-top:15px" align="left" class="">
                            <a href="https://www.facebook.com/uvciv/" title="UVCI Facebook" target="_blank"><img
                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/facebook.png" alt="">
                            </a>
                            <a href="https://www.linkedin.com/company/universit%C3%A9-virtuelle-de-c%C3%B4te-d-ivoire/"
                                title="UVCI Linkedin" target="_blank"><img
                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/linkedin.png" alt="">
                            </a>
                            <a href="https://twitter.com/uvciv" title="UVCI Twitter" target="_blank"><img
                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/twitter.png" alt="">
                            </a>
                            <a href="http://uvci.tv/" title="UVCI TV" target="_blank"><img
                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/webtvuvci.png" alt="">
                            </a>
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