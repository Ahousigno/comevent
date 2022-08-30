@extends("layouts.master")

@section("contenu")

<style>
.btn {
    margin-left: auto;
    display: block;
    margin-right: auto;
}
</style>

< <form role="form" action="{{route('media.store1')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5" class="row">
        <div class="col-lg-12">

            <h3 class="text-blue color-uvci" style="text-align:center">Logistique</h3>
            </br>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Salle disponible</option>
                            <option value="1">AULA</option>
                            <option value="2">UREN</option>
                            <option value="3">VISIO</option>
                            <option value="2">Salle de Conference</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="prenom"><select class="form-select" aria-label="Default select example">
                                <option selected>Etat du courier</option>
                                <option value="1">Confimé</option>
                                <option value="2">non-confimé</option>
                                <option value="3">non accepté</option>
                            </select><span style="color: red;"></span></label>
                        <input type="file" id="psdo" class="form-control" name="psdo">
                    </div>
                </div>
            </div>

            </br>
            <button type="submit" class="btn btn-primary" style="width:45%; background:#951b81">Envoyer
                pour validation</button>

        </div>
    </div>
    </form>

    </br> </br>
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