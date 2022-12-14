@extends("layouts.master")

@section("contenu")


<section class="content" style="background:#f5f3f5; padding-bottom:20px">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-lg-12">
                <div class="container">
                </div>
                <!-- <div class="card ">
                    <div class="card-header">
                        <a target="_blank" href="">
                            <button type="button" class="btn btn-outline-danger">Imprimer votre fiche
                                évènementielle</button>
                        </a>
                    </div><br> -->

                <!-- <input type="hidden" name="_token" value="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <span class="badge badge-danger">Etat de votre évènement: </span>
                        </div> -->

                <!-- Formulaire -->
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


                <form role="form" action="{{route('apres.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <!--décoration-->

                    

    <!--Après l'évènement-->





    <div style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5" class="row">
        <div class="col-lg-12">


            <fieldset>
                <h3 class="text-blue color-uvci">Après-l'évènement</h3>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">lettre de remerciement<span style="color: red;"></span></label>
                            <input type="file" id="lettre" class="form-control" name="lettre">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prenom">Rapport <span style="color: red;"></span></label>
                            <input type="file" id="matricule" class="form-control" name="rapport">
                        </div>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Article UVCI <span style="color: red;"></span></label>
                            <input type="file" id="article" class="form-control" name="article">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Article médias <span style="color: red;"></span></label>
                            <input type="file" id="media" class="form-control" name="medias">
                            <div style="text-align:right" class="col-lg-6 form-group article">
                                <input type="button" class="add-article" value="Ajouter un article">
                                <!-- <button style="font-size:10px; border-radius:2px" type="button"
                                    class="delete-emploi btn-danger">Supprimer un article</button> -->
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </br></br>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">pressbook<span style="color: red;"></span></label>
                    <input type="file" id="lettre" class="form-control" name="pressbook">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="prenom">album photo <span style="color: red;"></span></label>
                    <input type="file" id="matricule" class="form-control" name="album">
                    <div style="text-align:right" class="col-lg-6 form-group article">
                        <input type="button" class="add-article" value="Ajouter une photo">
                        <!-- <button style="font-size:10px; border-radius:2px" type="button"
                                    class="delete-emploi btn-danger">Supprimer une photo</button> -->
                    </div>
                </div>
            </div>
        </div>
        </br></br>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">liens des vidéos<span style="color: red;"></span></label>
                    <input type="text" id="lettre" class="form-control" name="lien">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="prenom">enquêtte de satisfaction <span style="color: red;"></span></label>
                    <input type="file" id="matricule" class="form-control" name="enquete">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </br>

    <button type="submit" class="btn btn-primary" style="width:45%; background:#951b81">Enregister</button>
    <button type="submit" class="btn btn-danger" style="width:45%; background:#951b81">Annuler</button>
    </form>

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
                        <h6><a target="_blank" href="https://scolarite.uvci.edu.ci/">Scolarité</a> </h6><br>
                        <h6><a target="_blank" href="https://campus.uvci.edu.ci/">Campus</a> </h6><br>
                        <h6><a target="_blank" href="https://inveniov1.uvci.edu.ci/">Bibliothèque Virtuelle</a> </h6>
                    </div>
                </div>

                <div class="">
                    <div class="col-lg12"><br><br>
                        <h6> <img style="width:17px" src="http://www.uvci.edu.ci/fr/images/EBA/googlemaps.png" alt="">
                            Adresse Géographique : Abidjan Cocody Deux-Plateaux, rue K4 (200 mètres après le Tribunal du
                            Commerce), 5.357177, -4.001287</h6>
                    </div>
                </div>

            </div>


            <div style="background:#520c50" class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div style="text-align:left" class="copyright-content">
                                <p style="font-size:12px; padding-top:25px">Université Virtuelle de Côte d'Ivoire - Tous
                                    droits réservés.</p>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div style="padding-top:15px" align="left" class="">
                                <a href="https://www.facebook.com/uvciv/" title="UVCI Facebook" target="_blank"><img
                                        src="https://rh.uvci.edu.ci/drhuvci/public/template/facebook.png" alt=""> </a>
                                <a href="https://www.linkedin.com/company/universit%C3%A9-virtuelle-de-c%C3%B4te-d-ivoire/"
                                    title="UVCI Linkedin" target="_blank"><img
                                        src="https://rh.uvci.edu.ci/drhuvci/public/template/linkedin.png" alt=""> </a>
                                <a href="https://twitter.com/uvciv" title="UVCI Twitter" target="_blank"><img
                                        src="https://rh.uvci.edu.ci/drhuvci/public/template/twitter.png" alt=""> </a>
                                <a href="http://uvci.tv/" title="UVCI TV" target="_blank"><img
                                        src="https://rh.uvci.edu.ci/drhuvci/public/template/webtvuvci.png" alt=""> </a>
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