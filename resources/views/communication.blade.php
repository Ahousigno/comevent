@extends("layouts.master")

@section("contenu")


<form role="form" action="{{route('avant.store2')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div style="border:1px solid #d9ccd5; padding:6px; background:#f8f9fa" class="row">
        <div class="col-lg-12">
            <h3 style="text-align:center">RUBRIQUES</h3>

        </div>


        <div style="border:1px solid #d9ccd5; padding:6px; background:#e3c5e5" class="row">
            <div class="col-lg-12">

                <h3 class="text-blue color-uvci">Organisateurs</h3>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">Nom et prénoms<span style="color: red;"></span></label>
                            <input type="text" id="nom" class="form-control" name="nom_organisateur">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prenom">Fonction <span style="color: red;"></span></label>
                            <input type="text" id="fonction" class="form-control" name="fonction_organisateur">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Contact<span style="color: red;"></span></label>
                    <input type="contact" id="contact" class="form-control" name="contact_organisateur">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Mail <span style="color: red;"></span></label>
                    <input type="email" id="email" class="form-control" name="email_organisateur">
                </div>
            </div>
        </div>
        <div style="text-align:right" class="col-lg-6 form-group membre">
            <a href="{{route('organisateur')}}"> <input type="button" class="add-article" value="Ajouter un membre"></a>
            <!-- <button style="font-size:10px; border-radius:2px" type="button"
                                                    class="delete-emploi btn-danger">supprimer un membre</button> -->
        </div>
        </br></br>
        </br></br>

        <div style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5" class="row">
            <div class="col-lg-12">

                <h3 class="text-blue color-uvci">Réunion</h3>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">Nombres de réunion<span style="color: red;"></span></label>
                            <input type="number" id="réunion" class="form-control" name="nombre_réunion">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prenom">compte rendu réunion <span style="color: red;"></span></label>
                            <input type="file" id="cr" class="form-control" name="cr">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </br></br></br></br>


        <div style="border:1px solid #d9ccd5; padding:6px; background:#e3c5e5" class="row">
            <div class="col-lg-12">

                <h3 class="text-blue color-uvci">Mobilisation</h3>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">Nom et prénoms du responsable<span style="color: red;"></span></label>
                            <input type="text" id="nom" class="form-control" name="nom_mobilisateur">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prenom">Fonction <span style="color: red;"></span></label>
                            <input type="text" id="fonction" class="form-control" name="fonction_mobilisateur">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Contact<span style="color: red;"></span></label>
                    <input type="contact" id="contact" class="form-control" name="contact_mobilisateur">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Mail <span style="color: red;"></span></label>
                    <input type="email" id="email" class="form-control" name="email_mobilisateur">
                </div>
            </div>
        </div>

        </br></br></br></br>


        <!-- logistique -->


        <div style="border:1px solid #d9ccd5; padding:6px; background:#e3c5e5" class="row">
            <div class="col-lg-12">

                <h3 class="text-blue color-uvci">Logistique</h3>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">Nom et prénoms du responsable<span style="color: red;"></span></label>
                            <input type="text" id="nom" class="form-control" name="nom_logistique">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prenom">Fonction <span style="color: red;"></span></label>
                            <input type="text" id="fonction" class="form-control" name="fonction_logistique">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Contact<span style="color: red;"></span></label>
                    <input type="contact" id="contact" class="form-control" name="contact_logistique">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Mail <span style="color: red;"></span></label>
                    <input type="email" id="email" class="form-control" name="email_logistique">
                </div>
            </div>
        </div>
        </br></br></br></br>

        <!-- accueil -->


        <div style="border:1px solid #d9ccd5; padding:6px; background:#e3c5e5" class="row">
            <div class="col-lg-12">

                <h3 class="text-blue color-uvci">Accueil</h3>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">Nom et prénoms du Responsable<span style="color: red;"></span></label>
                            <input type="text" id="nom" class="form-control" name="nom_accueil">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prenom">Fonction <span style="color: red;"></span></label>
                            <input type="text" id="fonction" class="form-control" name="fonction_accueil">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Contact<span style="color: red;"></span></label>
                    <input type="contact" id="contact" class="form-control" name="contact_accueil">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Mail <span style="color: red;"></span></label>
                    <input type="email" id="email" class="form-control" name="email_accueil">
                </div>
            </div>
        </div>
        </br></br></br></br>

        <!-- envoie courier -->
        <div style="border:1px solid #d9ccd5; padding:6px; background:#e3c5e5" class="row">
            <div class="col-lg-12">

                <h3 class="text-blue color-uvci">Envoie de courriers</h3>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">Nom et prénoms du responsable<span style="color: red;"></span></label>
                            <input type="text" id="nom" class="form-control" name="nom_courier">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prenom">Fonction <span style="color: red;"></span></label>
                            <input type="text" id="fonction" class="form-control" name="fonction_courier">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Contact<span style="color: red;"></span></label>
                    <input type="contact" id="contact" class="form-control" name="contact_courier">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Mail <span style="color: red;"></span></label>
                    <input type="email" id="email" class="form-control" name="email_courier">
                </div>
            </div>
        </div>

        <div style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5" class="row">
            <div class="col-lg-12">
                <h3 class="text-blue color-uvci">la décoration</h3>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">Nom et prénoms<span style="color: red;"></span></label>
                            <input type="text" id="nom" class="form-control" name="nom_prenom">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="fonction">fonction <span style="color: red;"></span></label>
                            <input type="text" id="fonction" class="form-control" name="fonction_decorateur">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="contact">Téléphone<span style="color: red;"></span></label>
                                <input type="text" id="contact" class="form-control" name="contact_decorateur">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email <span style="color: red;"></span></label>
                                <input type="email" id="email" class="form-control" name="email_decorateur">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="prenom">image de la décoration <span style="color: red;"></span></label>
                                <input type="file" id="photo" class="form-control" name="photo_deco">
                            </div>

                            <!-- <div style=" text-align:right" class="col-lg-6 form-group article">
                                        <input type="button" class="add-article" value="Ajouter une décoratrice">
                                        <button style="font-size:10px; border-radius:2px" type="button"
                                        class="delete-emploi btn-danger">Supprimer une décoratrice</button>
                                    </div> -->
                        </div>
                    </div>
                </div>




                </br> </br>






                <!-- hotesse-->





                <div style="border:1px solid #d9ccd5; padding:5px; background:#f8f9fa" class="row">
                    <div class="col-lg-12">




                        <h3 class="text-blue color-uvci">Les Hotesses</h3>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nom">Nom et prénoms<span style="color: red;"></span></label>
                                    <input type="text" id="nom" class="form-control" name="nom_prenoms">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="prenom">fonction <span style="color: red;"></span></label>
                                    <input type="text" id="prenom" class="form-control" name="fonction_hotesse">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="contact">Téléphone <span style="color: red;"></span></label>
                                    <input type="text" id="contact" class="form-control" name="contact-hotesse">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email <span style="color: red;"></span></label>
                                    <input type="email" id="email" class="form-control" name="email_hotesse">
                                </div>
                            </div></br></br>
                            <div style="text-align:right" class="col-lg-6 form-group article">
                                <input type="button" class="add-article" value="Ajouter une Hotesse">
                                <!-- <button style="font-size:10px; border-radius:2px" type="button"
                        class="delete-emploi btn-danger">Supprimer une hotesse</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </br> </br>

    <!--sécurité-->
    <div style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5" class="row">
        <div class="col-lg-12">
            <h3 class="text-blue color-uvci">La Sécurité</h3>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nom">Nom et prénoms<span style="color: red;"></span></label>
                        <input type="text" id="nom" class="form-control" name="nom_prenomst">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="prenom">fonction <span style="color: red;"></span></label>
                        <input type="text" id="prenom" class="form-control" name="fonction_securite">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="contact">Téléphone <span style="color: red;"></span></label>
                        <input type="text" id="contact" class="form-control" name="contact_securite">
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email <span style="color: red;"></span></label>
                        <input type="email" id="email" class="form-control" name="email_securite">
                    </div>
                </div></br></br>
                <div style="text-align:right" class="col-lg-6 form-group article">
                    <input type="button" class="add-article" value="Ajouter un agent">
                    <!-- <button style="font-size:10px; border-radius:2px" type="button"
                    class="delete-emploi btn-danger">Supprimer un agent</button> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </br> </br>
    <!--pendandant l'évènement-->
    <div style="border:1px solid #d9ccd5; padding:6px; background:#f8f9fa" class="row">
        <div class="col-lg-12">
        </div>
        <div class="col-lg-5">
            <div class="row">
                <h4>invité d'honneur et protocole</h4>

                </br>
                <div class="col-lg-5"><span style="color:red"></span></label>nom et prénom</div>
                <div class="col-lg-7"><input type="text" class="form-control-perso" name="nom-prenompt" value=""></div>
                </br> </br>
                <div class="col-lg-5"><span style="color:red"></span></label>Fonction</div>
                <div class="col-lg-7"><input type="text" class="form-control-perso" name="fonction_protocole" value="">
                </div>
                </br> </br>
                <div class="col-lg-5"><span style="color:red"></span></label>Contact</div>
                <div class="col-lg-7"><input type="text" class="form-control-perso" name="contact_protocole" value="">
                </div>
                </br> </br>
                <div class="col-lg-5"><span style="color:red"></span></label>mail</div>
                <div class="col-lg-7"><input type="email" class="form-control-perso" name="email_protocole" value="">
                </div>
                </br> </br>
                <div class="col-lg-5"><span style="color:red"></span></label>photo</div>
                <div class="col-lg-7"><input type="file" class="form-control-perso" name="photo" value=""></div>
                </br> </br>

                <div class="col-lg-5">brève présentation</div>
                <div class="col-lg-7"><input type="text" class="form-control-perso" name="presentation" value=""></div>
                </br> </br>
                <div style="text-align:right" class="col-lg-6 form-group article">
                    <input type="button" class="add-article" value="Ajouter un invité">
                    <!-- <button style="font-size:10px; border-radius:2px" type="button"
                        class="delete-emploi btn-danger">Supprimer un invité</button> -->
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="row">

            </div>
        </div>

        <div class="col-lg-5">
            <div class="row">
                <h3>les intervenants</h3>
                </br></br>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-5">nom et prénoms </div>
                        <div class="col-lg-7"><input type="text" class="form-control-perso" name="nom_prenomit"
                                value="">
                        </div>
                        </br></br>

                        <div class="col-lg-5">fonction </div>
                        <div class="col-lg-7"><input type="text" class="form-control-perso" name="fonction_intervenant"
                                value="">
                        </div>
                        </br></br>
                        <div class="col-lg-5">contact </div>
                        <div class="col-lg-7"><input type="text" class="form-control-perso" name="contact_intervenant"
                                value="">
                        </div>
                        </br></br>
                        <div class="col-lg-5">mail </div>
                        <div class="col-lg-7"><input type="email" class="form-control-perso" name="email_intervenant"
                                value="">
                        </div>
                        </br></br>
                        <div class="col-lg-5">sujet d'intervention </div>
                        <div class="col-lg-7"><input type="text" class="form-control-perso"
                                name="intervention_intervenant" value="">
                        </div>
                        </br></br>
                        <div class="col-lg-5"><span style="color:red">* </span></label>photo</div>
                        <div class="col-lg-7"><input type="file" class="form-control-perso" name="photo_intervenant"
                                value=""></div>
                        </br> </br>

                        <div class="col-lg-5">brève présentation</div>
                        <div class="col-lg-7"><input type="text" class="form-control-perso"
                                name="presentation_intervenant" value="">
                        </div></br></br>
                        <div style="text-align:right" class="col-lg-6 form-group article">
                            <input type="button" class="add-article" value="Ajouter un intervenant">
                            <!-- <button style="font-size:10px; border-radius:2px" type="button"
                        class="delete-emploi btn-danger">Supprimer un intervenant</button> -->
                        </div>
                        </br> </br>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </br></br></br>

    <!--les communicants-->
    <div style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5" class="row">
        <div class="col-lg-12">
            <h3 class="text-blue color-uvci">les communicants</h3>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Nom et prénoms<span style="color: red;"></span></label>
                    <input type="text" id="nom" class="form-control" name="nom_prenomct">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="prenom">fonction <span style="color: red;"></span></label>
                    <input type="text" id="prenom" class="form-control" name="fonction_communicant">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="contact">Téléphone <span style="color: red;"></span></label>
                    <input type="text" id="contact" class="form-control" name="contact_communicant">
                </div>
            </div>


            <div class="col-sm-6">
                <div class="form-group">
                    <label for="email">Email <span style="color: red;"></span></label>
                    <input type="email" id="email" class="form-control" name="email_communicant">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">thème d'intervention<span style="color: red;"></span></label>
                    <input type="text" id="thème" class="form-control" name="intervention_communicant">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="prenom">brève présentation <span style="color: red;"></span></label>
                    <input type="text" id="intervention" class="form-control" name="presentation_communicant">
                </div>
            </div></br></br>
            <div style="text-align:right" class="col-lg-6 form-group article">
                <input type="button" class="add-article" value="Ajouter un communicant">
                <!-- <button style="font-size:10px; border-radius:2px" type="button"
                    class="delete-emploi btn-danger">Supprimer un communicant</button> -->
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </br> </br>

    <!--la presse-->

    <div style="border:1px solid #d9ccd5; padding:5px; background:#f8f9fa" class="row">
        <div class="col-lg-12">


            <p> <strong>La Presse</strong></p>
            <fieldset>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="entreprise">Nom de la structure <span style="color: red;"></span></label>
                            <input type="text" id="entreprise" class="form-control" name="nom_structure">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="type_structure">Type de structure <span style="color: red;"></span></label>
                            <select class="form-control" name="type" id="type_structure">
                                <option value="">--Selectionner--</option>
                                <option value="Publique">Publique</option>
                                <option value="Privée">Privée</option>
                            </select>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <h3 class="text-blue color-uvci">Personne ressource</h3>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nom">Nom <span style="color: red;"></span></label>
                            <input type="text" id="nom" class="form-control" name="nom_presse">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="prenom">Prénoms <span style="color: red;"></span></label>
                            <input type="text" id="prenom" class="form-control" name="prenom_presse">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="contact">Téléphone <span style="color: red;"></span></label>
                            <input type="text" id="contact" class="form-control" name="contact_presse">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email <span style="color: red;"></span></label>
                            <input type="email" id="email" class="form-control" name="email_presse">
                        </div>
                    </div></br></br>
                    <div style="text-align:right" class="col-lg-6 form-group article">
                        <input type="button" class="add-article" value="Ajouter une prese">
                        <!-- <button style="font-size:10px; border-radius:2px" type="button"
                    class="delete-emploi btn-danger">Supprimer une presse</button> -->
                    </div>
                </div>
        </div>
    </div>
    </div>
    </fieldset>
    </br> </br>
    <!--les participants-->
    <div style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5" class="row">
        <div class="col-lg-12">

            <h3 class="text-blue color-uvci">Les Participants</h3>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nom">Nom et prénoms<span style="color: red;"></span></label>
                        <input type="text" id="nom" class="form-control" name="nom_prenompt">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="prenom">fonction <span style="color: red;"></span></label>
                        <input type="text" id="prenom" class="form-control" name="fonction_participant">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="contact">Téléphone <span style="color: red;"></span></label>
                        <input type="text" id="contact" class="form-control" name="contact_participant">
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email <span style="color: red;"></span></label>
                        <input type="email" id="email" class="form-control" name="email_participant">
                    </div>
                </div></br></br>
                <div style="text-align:right" class="col-lg-6 form-group article">
                    <input type="button" class="add-article" value="Ajouter un participant">
                    <!-- <button style="font-size:10px; border-radius:2px" type="button"
                    class="delete-emploi btn-danger">Supprimer un participant</button> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </br> </br>

    <!--maître de cérémonie-->

    <div style="border:1px solid #d9ccd5; padding:5px; background:#e3c5e5" class="row">
        <div class="col-lg-12">



            <h3 class="text-blue color-uvci">Maître de cérémonie</h3>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nom">Nom et prénoms<span style="color: red;"></span></label>
                        <input type="text" id="nom" class="form-control" name="nom_presentateur">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="prenom">fonction <span style="color: red;"></span></label>
                        <input type="text" id="prenom" class="form-control" name="fonction_presentateur">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="contact">Téléphone <span style="color: red;"></span></label>
                        <input type="text" id="contact" class="form-control" name="contact_presentateur">
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email <span style="color: red;"></span></label>
                        <input type="email" id="email" class="form-control" name="email_presentateur">
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">photo <span style="color: red;"></span></label>
                            <input type="file" id="email" class="form-control" name="photo_presentateur">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="contact">brève présentation <span style="color: red;"></span></label>
                            <input type="text" id="présentation" class="form-control" name="présentation_presentateur">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    </br> </br>


    <div style="border:1px solid #d9ccd5; padding:5px; background:#f8f9fa" class="row">
        <div class="col-lg-12">

            <h3 class="text-blue color-uvci">Les Véhicules</h3>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nom">Nom et prénoms du propriétaire<span style="color: red;"></span></label>
                        <input type="text" id="nom" class="form-control" name="nom_proprietaire">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="prenom">matricule du véhicule <span style="color: red;"></span></label>
                        <input type="text" id="matricule" class="form-control" name="matricule_proprietaire">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="contact">Téléphone <span style="color: red;"></span></label>
                        <input type="text" id="contact" class="form-control" name="contact_proprietaire">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email <span style="color: red;"></span></label>
                        <input type="email" id="email" class="form-control" name="email_proprietaire">
                    </div>
                </div>
                </br></br>
                <div style="text-align:right" class="col-lg-6 form-group article">
                    <input type="button" class="add-article" value="Ajouter un véhicule">
                    <!-- <button style="font-size:10px; border-radius:2px" type="button"
                    class="delete-emploi btn-danger">Supprimer un véhicule</button> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </br> </br>

    </br></br></br></br>





    <button type="submit" class="btn btn-primary" style="width:45%; background:#951b81">Enregister</button>
    <button type="submit" class="btn btn-danger" style="width:45%; background:#951b81">Annuler</button>
</form>

</br> </br>

@endsection