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

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h3 class="border-botton pb-2 mb-4"><button type="button" class="btn btn-primary"
                        style="background-color:#951b81;">Ajouter un
                        nouveau comité</button>
                </h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('admin.reunion')}}">
                            <h3 class="border-botton pb-2 mb-4"><button type="button" class="btn btn-primary"
                                    style="background-color:#951b81;">Organiser
                                    une réunion</button>
                            </h3>
                        </a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link disabled">
                            <h3 class="border-botton pb-2 mb-4"><button type="button" class="btn btn-primary"
                                    style="background-color:#951b81;">Ajouter
                                    la Presse</button>
                            </h3>
                        </a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>





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

    <form role="form" action="{{route('secretariat.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5" class="row">
            <div class="col-lg-12">

                <h3 class="text-blue color-uvci" style="text-align:center">création des différents comités
                    d'organisation</h3>
                </br>

                <!-- <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">Nom et prénom de l'invité<span style="color: red;"></span></label>
                            <input type="text" id="nom_invite" class="form-control" name="nom_invite">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prenom">fonction de l'invité<span style="color: red;"></span></label>
                            <input type="text" id="fonction_invite" class="form-control" name="fonction_invite">
                        </div>
                    </div>
                </div>
                </br></br> -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example" type="text" name="role">
                                <option selected>choisir un comité</option>
                                <option value="Accueil">Accueil</option>
                                <option value="Décoration">Décoration</option>
                                <option value="Mobilisation">Mobilisation</option>
                                <option value="Sécurité">Sécurité</option>
                                <option value="Sécurité">Maîtrise de cérémonie</option>
                                <option value="Comité Scientifique">Comité Scientifique</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example" type="text" name="etat">
                                <option selected>Responsable</option>
                                <option value="Confirmé">Confimé</option>
                                <option value="non-confirmé">non-confimé</option>
                                <option value="non-accepté">non-accepté</option>
                            </select><span style="color: red;"></span></label>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example" type="text" name="etat">
                                <option selected>Membre</option>
                                <option value="Confirmé">Confimé</option>
                                <option value="non-confirmé">non-confimé</option>
                                <option value="non-accepté">non-accepté</option>
                            </select><span style="color: red;"></span></label>

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