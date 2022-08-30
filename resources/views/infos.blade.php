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
        < !-- Info boxes -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="container"></div>
                    < !-- <div class="card ">
                        <div class="card-header"><a target="_blank" href=""><button type="button"
                                    class="btn btn-outline-danger">Imprimer votre fiche évènementielle</button></a>
                        </div><br>-->< !-- <input type="hidden" name="_token" value="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6"><span class="badge badge-danger">Etat de votre évènement:
                                        </span></div>-->< !-- Formulaire -->
                                        <div style="text-align: center">@if(session()->has("success")) <div
                                                class="alert alert-success">
                                                <h3> {
                                                    {
                                                    session()->get("success")
                                                    }
                                                    }

                                                </h3>
                                            </div>@endif @if ($errors->any()) <div class="alert alert-danger">
                                                <ul>@foreach($errors->all() as $error) <li> {
                                                        {
                                                        $error
                                                        }
                                                        }

                                                    </li>@endforeach </ul>
                                            </div>@endif </div>
                                        <form role="form" action="{{route('infos.store')}}"
                                            enctype="multipart/form-data" method="POST">@csrf < !-- <div
                                                style="border:1px solid #d9ccd5; padding:6px; background:#f8f9fa"
                                                class="row">
                                                <div class="col-lg-12"></div>--><div
                                                    style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5"
                                                    class="row">
                                                    <div class="col-lg-12">
                                                        <h3 class="text-blue color-uvci" style="text-align:center">
                                                            Informations Générales</h3></br>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label for="nom">nom de
                                                                        l'évènement<span
                                                                            style="color: red;">*</span></label>
                                                                    <input type="text" id="nom" class="form-control"
                                                                        name="nom_event">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label for="prenom">thème de
                                                                        l'évènement <span
                                                                            style="color: red;"></span></label><input
                                                                        type="text" id="theme" class="form-control"
                                                                        name="theme"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label for="nom">thème de
                                                                        référence (TDR)<span
                                                                            style="color: red;">*</span></label><input
                                                                        type="file" id="tdr" class="form-control"
                                                                        name="tdr"></div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label for="prenom">programme
                                                                        <span style="color: red;">*</span></label><input
                                                                        type="file" id="programme" class="form-control"
                                                                        name="programme_file"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label for="nom">lieu<span
                                                                            style="color: red;">*</span></label><input
                                                                        type="text" id="lieu" class="form-control"
                                                                        name="lieu"></div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label for="prenom">date <span
                                                                            style="color: red;"></span></label><input
                                                                        type="date" id="date" class="form-control"
                                                                        name="date"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label for="nom">catégorie de
                                                                        l'évènement<span
                                                                            style="color: red;">*</span></label><select
                                                                        class="form-control custom-select"
                                                                        name="cathegorie">
                                                                        <option value="">---- Selectionnez ---</option>
                                                                        <option selected value="Scientifique">
                                                                            Scientifique</option>
                                                                        <option selected value="Commercial">Commercial
                                                                        </option>
                                                                        <option selected value="Autres">Autres</option>
                                                                    </select></div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label for="prenom">portée de
                                                                        l'évènement <span
                                                                            style="color: red;"></span></label><select
                                                                        class="form-control custom-select"
                                                                        name="portee">
                                                                        <option selected value="">---- Selectionnez ---
                                                                        </option>
                                                                        <option value="UVCI">UVCI</option>
                                                                        <option selected value="NATIONAL">NATIONAL
                                                                        </option>
                                                                        <option selected value="INTERNATIONAL">
                                                                            INTERNATIONAL</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label for="nom">budget<span
                                                                            style="color: red;">*</span></label><input
                                                                        type="number" id="budget" class="form-control"
                                                                        name="budget"></div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label for="besoin">besoin <span
                                                                            style="color: red;"></span></label><input
                                                                        type="file" id="besoin" class="form-control"
                                                                        name="besoin"></div>
                                                            </div>
                                                        </div></br><button type="submit" class="btn btn-primary"
                                                            style="width:45%; background:#951b81">Envoyer pour
                                                            validation</button>
                                                    </div>
                                                </div>
                                        </form></br></br>
                                        < !-- <div class="col-lg-6">
                                            <div class="row">
                                                <h3>Informations générales</h3></br></br>
                                                <div class="col-lg-5"><span style="color:red">*</span></label>nom de
                                                    l'évènement</div>
                                                <div class="col-lg-7"><input type="text" class="form-control-perso"
                                                        name="nom_event"></div></br></br>
                                                <div class="col-lg-5"><span style="color:red">* </span></label>thème de
                                                    l'évènement</div>
                                                <div class="col-lg-7"><input type="text" class="form-control-perso"
                                                        name="theme"></div></br></br>
                                                <div class="col-lg-5"><span style="color:red">* </span></label>thème de
                                                    réference de l'évènement(TDR)</div>
                                                <div class="col-lg-7"><input type="file" class="form-control-perso"
                                                        name="tdr" value=""></div></br></br>
                                                <div class="col-lg-5"><span style="color:red">* </span></label>Programme
                                                </div>
                                                <div class="col-lg-7"><input type="file" class="form-control-perso"
                                                        name="programme_file"></div></br></br>
                                                <div class="col-lg-5"><span style="color:red">* </span></label>budget
                                                </div>
                                                <div class="col-lg-7"><input type="number" class="form-control-perso"
                                                        name="budget" value=""></div></br></br>
                                                <div class="col-lg-5"><span style="color:red">* </span></label>Date de
                                                    l'évènement</div>
                                                <div class="col-lg-7"><input type="date" class="form-control-perso"
                                                        name="date" value=""></div></br></br>
                                                <div class="col-lg-5"><span style="color:red">* </span></label>Lieu de
                                                    l'évènement</div>
                                                <div class="col-lg-7"><input type="text" class="form-control-perso"
                                                        name="lieu" value=""></div></br></br>
                                                <div class="col-lg-5"><span style="color:red"></span></label>catégorie
                                                    de l'évènement</div>
                                                <div class="col-lg-7"><select
                                                        class="form-control-perso custom-select-perso"
                                                        name="cathegorie">
                                                        <option selected value="">---- Selectionnez ---</option>
                                                        <option value="Scientifique">Scientifique</option>
                                                        <option selected value="Commercial">Commercial</option>
                                                        <option selected value="Autres">Autres</option>
                                                    </select></div></br></br>
                                                <div class="col-lg-5"><span style="color:red"></span></label>portée de
                                                    l'évènement</div>
                                                <div class="col-lg-7"><select
                                                        class="form-control-perso custom-select-perso" name="portee">
                                                        <option selected value="">---- Selectionnez ---</option>
                                                        <option value="UVCI">UVCI</option>
                                                        <option selected value="NATIONAL">NATIONAL</option>
                                                        <option selected value="INTERNATIONAL">INTERNATIONAL</option>
                                                    </select></div></br></br>
                                                <div class="col-lg-5">visuel final</div>
                                                <div class="col-lg-7"><input type="file" class="form-control-perso"
                                                        name="visuel" value=""></div></br></br>
                                                <div class="col-lg-5">fichier psd du visuel</div>
                                                <div class="col-lg-7"><input type="file" class="form-control-perso"
                                                        name="psd" value=""></div></br></br>
                                                <div class="col-lg-5">Banderole</div>
                                                <div class="col-lg-7"><input type="file" class="form-control-perso"
                                                        name="banderole" value=""></div></br></br>
                                                <div class="col-lg-5">fichier PSD </div>
                                                <div class="col-lg-7"><input type="file" class="form-control-perso"
                                                        name="psdo" value=""></div></br></br>
                                                <div class="col-lg-5">Courier</div>
                                                <div class="col-lg-7"><input type="file" class="form-control-perso"
                                                        name="courier" value=""></div></br></br>
                                                <div class="col-lg-5">mail des destinataires </div>
                                                <div class="col-lg-7"><input type="email" class="form-control-perso"
                                                        name="email_courier" value=""></div></br></br>
                                                <div style="text-align:right" class="col-lg-6 form-group article"><input
                                                        type="button" class="add-article"
                                                        value="Ajouter un destinataire"><button
                                                        style="font-size:10px; border-radius:2px" type="button"
                                                        class="delete-emploi btn-danger">Supprimer un
                                                        destinataire</button></div>
                                            </div>
                                </div>-->< !-- <div class="col-lg-2">
                                    <div class="row"></div>
                            </div></br></br>
                            <div class="col-lg-4">
                                <div class="row">
                                    <h3>les organisateurs</h3></br></br></br>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-5">nom </div>
                                            <div class="col-lg-7"><input type="text" class="form-control-perso"
                                                    name="nom_organisateur" value=""></div></br></br>
                                            <div class="col-lg-5">prenoms </div>
                                            <div class="col-lg-7"><input type="text" class="form-control-perso"
                                                    name="prenoms" value=""></div></br></br>
                                            <div class="col-lg-5">fonction </div>
                                            <div class="col-lg-7"><input type="text" class="form-control-perso"
                                                    name="fonction_organisateur" value=""></div></br></br>
                                            <div class="col-lg-5">contact </div>
                                            <div class="col-lg-7"><input type="text" class="form-control-perso"
                                                    name="contact_organisateur" value=""></div></br></br>
                                            <div class="col-lg-5">mail </div>
                                            <div class="col-lg-7"><input type="email" class="form-control-perso"
                                                    name="email_organisateur" value=""></div></br></br>
                                            <div class="col-lg-5">nombre de réunions </div>
                                            <div class="col-lg-7"><input type="number" class="form-control-perso"
                                                    name="reunion" value=""></div></br></br>
                                            <div class="col-lg-5">compte rendu </div>
                                            <div class="col-lg-7"><input type="file" class="form-control-perso"
                                                    name="cr" value=""></div></br></br>
                                        </div>
                                    </div></br></br>
                                    <div style="text-align:right" class="col-lg-6 form-group article"><input
                                            type="button" class="add-article" value="Ajouter un membre"><button
                                            style="font-size:10px; border-radius:2px" type="button"
                                            class="delete-emploi btn-danger">supprimer un membre</button></div>
                                </div>
                            </div>
                </div>
            </div>--></form></br></br>
            <div style="background:#951b81; color:#fff" class="region region-page-bottom" id="region-page-bottom">
                <footer><br>
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
                                <h6><a target="_blank" href="https://scolarite.uvci.edu.ci/">Scolarité</a></h6><br>
                                <h6><a target="_blank" href="https://campus.uvci.edu.ci/">Campus</a></h6><br>
                                <h6><a target="_blank" href="https://inveniov1.uvci.edu.ci/">Bibliothèque Virtuelle</a>
                                </h6>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-lg12"><br><br>
                                <h6><img style="width:17px" src="http://www.uvci.edu.ci/fr/images/EBA/googlemaps.png"
                                        alt="">Adresse Géographique : Abidjan Cocody Deux-Plateaux,
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
                                        <p style="font-size:12px; padding-top:25px">Université Virtuelle de Côte
                                            d'Ivoire - Tous
                                            droits réservés.</p>
                                    </div><br>
                                </div>
                                <div class="col-lg-6">
                                    <div style="padding-top:15px" align="left" class=""><a
                                            href="https://www.facebook.com/uvciv/" title="UVCI Facebook"
                                            target="_blank"><img
                                                src="https://rh.uvci.edu.ci/drhuvci/public/template/facebook.png"
                                                alt=""></a><a
                                            href="https://www.linkedin.com/company/universit%C3%A9-virtuelle-de-c%C3%B4te-d-ivoire/"
                                            title="UVCI Linkedin" target="_blank"><img
                                                src="https://rh.uvci.edu.ci/drhuvci/public/template/linkedin.png"
                                                alt=""></a><a href="https://twitter.com/uvciv" title="UVCI Twitter"
                                            target="_blank"><img
                                                src="https://rh.uvci.edu.ci/drhuvci/public/template/twitter.png"
                                                alt=""></a><a href="http://uvci.tv/" title="UVCI TV"
                                            target="_blank"><img
                                                src="https://rh.uvci.edu.ci/drhuvci/public/template/webtvuvci.png"
                                                alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
    </div>
    </div>@endsection