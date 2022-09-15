@extends("layouts.master")

@section("contenu")


<style>
.btn {
    margin-left: auto;
    display: block;
    margin-right: auto;
}
</style>

<section class="content" style="background:#f5f3f5; padding-bottom:20px">
    <div class="container-fluid">



        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <h3><span class="badge badge-info" style="text-align:center; color:darkmagenta">Donnez-nous
                            toutes les informations
                            necessaires pour
                            organiser votre évènement
                        </span></h3>
                </div>
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
                <form role="form" action="{{route('infos.store')}}" enctype="multipart/form-data" method="POST">@csrf
                    <div style="border:1px solid #d9ccd5; padding:6px; background:#f8f9fa" class="row">
                        <div class="col-lg-12"></div>
                        <div style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5" class="row">
                            <div class="col-lg-12">
                                <h3 class="text-blue color-uvci" style="text-align:center">
                                    Informations Générales</h3></br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="nom">nom de
                                                l'évènement<span style="color: red;">*</span></label>
                                            <input type="text" id="nom" class="form-control" name="nom_event">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="prenom">thème de
                                                l'évènement <span style="color: red;"></span></label><input type="text"
                                                id="theme" class="form-control" name="theme">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="nom">thème de
                                                référence (TDR)<span style="color: red;">*</span></label><input
                                                type="file" id="tdr" class="form-control" name="tdr"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="prenom">programme
                                                <span style="color: red;">*</span></label><input type="file"
                                                id="programme" class="form-control" name="programme_file">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="prenom">date de début <span
                                                    style="color: red;"></span></label><input type="date"
                                                id="date_debut" class="form-control" name="date_debut"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="prenom">date de fin <span
                                                    style="color: red;"></span></label><input type="date" id="date_fin"
                                                class="form-control" name="date_fin"></div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- <div class="form-group"><label for="nom">catégorie de
                                                                        l'évènement<span
                                                                            style="color: red;">*</span></label><select
                                                                        class="form-control custom-select"
                                                                        name="cathegorie">

                                                                        <option selected value="Scientifique">
                                                                            Scientifique</option>
                                                                        <option selected value="Commercial">Commercial
                                                                        </option>
                                                                        <option selected value="Autres">Autres</option>
                                                                    </select></div>
                                                            </div> -->

                                        <div class="form-group">
                                            <select class="form-select" aria-label="Default select example" type="text"
                                                name="cathegorie">
                                                <option selected>Catégorie de l'évènement
                                                </option>
                                                <option value="Commercial">Commercial</option>
                                                <option value="Scientifique">Scientifique
                                                </option>
                                                <option value="Culturel">Culturel</option>
                                                <option value="Pédagogique">Pédagogique</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-select" aria-label="Default select example" type="text"
                                                name="portee">
                                                <option selected>Portée de l'évènement
                                                </option>
                                                <option value="UVCI">UVCI</option>
                                                <option value="National">National
                                                </option>
                                                <option value="International">International
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="nom">budget<span
                                                    style="color: red;">*</span></label><input type="number" id="budget"
                                                class="form-control" name="budget"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="nom">lieu<span
                                                    style="color: red;">*</span></label><input type="text" id="lieu"
                                                class="form-control" name="lieu"></div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="besoin">besoin <span
                                                    style="color: red;"></span></label><input type="file" id="besoin"
                                                class="form-control" name="besoin"></div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="besoin">Liste invités <span
                                                    style="color: red;"></span></label><input type="file" id="liste"
                                                class="form-control" name="liste"></div>
                                    </div>
                                </div>

                                <br>
                                <a href="#"> <button type="submit" class="btn btn-primary"
                                        style="width:45%; background:#951b81">Envoyer
                                        pour
                                        validation</button></a>

                </form>
            </div>
        </div>
</section>
<br>
<footer>
    <div style="background:#951b81; color:#fff" class="region region-page-bottom" id="region-page-bottom">

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
                    <h6><a href="https://uvci.edu.ci/">Portail UVCI</a></h6><br>
                    <h6><a target="_blank" href="https://scolarite.uvci.edu.ci/">Scolarité</a>
                    </h6><br>
                    <h6><a target="_blank" href="https://campus.uvci.edu.ci/">Campus</a>
                    </h6>
                    <br>
                    <h6><a target="_blank" href="https://inveniov1.uvci.edu.ci/">Bibliothèque
                            Virtuelle</a>
                    </h6>
                </div>
            </div>
            <div class="">
                <div class="col-lg12"><br><br>
                    <h6><img style="width:17px" src="http://www.uvci.edu.ci/fr/images/EBA/googlemaps.png" alt="">Adresse
                        Géographique : Abidjan Cocody
                        Deux-Plateaux,
                        rue K4 (200 mètres après le Tribunal du Commerce),
                        5.357177,
                        -4.001287</h6>
                </div>
            </div>
        </div>
        <div style="background:#520c50" class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div style="text-align:left" class="copyright-content">
                            <p style="font-size:12px; padding-top:25px">
                                Université Virtuelle de Côte
                                d'Ivoire - Tous
                                droits réservés.</p>
                        </div><br>
                    </div>
                    <div class="col-lg-6">
                        <div style="padding-top:15px" align="left" class=""><a href="https://www.facebook.com/uvciv/"
                                title="UVCI Facebook" target="_blank"><img
                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/facebook.png" alt=""></a><a
                                href="https://www.linkedin.com/company/universit%C3%A9-virtuelle-de-c%C3%B4te-d-ivoire/"
                                title="UVCI Linkedin" target="_blank"><img
                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/linkedin.png" alt=""></a><a
                                href="https://twitter.com/uvciv" title="UVCI Twitter" target="_blank"><img
                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/twitter.png" alt=""></a><a
                                href="http://uvci.tv/" title="UVCI TV" target="_blank"><img
                                    src="https://rh.uvci.edu.ci/drhuvci/public/template/webtvuvci.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
</div>

</div>@endsection