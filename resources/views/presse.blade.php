@extends("layouts.master")

@section("contenu")


</form method="post" action="organisateur.ajouter">
<div style="border:1px solid #d9ccd5; padding:6px; background:#e3c5e5" class="row">
    <div class="col-lg-12">

        <h3 class="text-blue color-uvci">Presse</h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nom">Nom de la structure<span style="color: red;"></span></label>
                    <input type="text" id="nom" class="form-control" name="nom_structure">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="prenom">nom et prénom du représentant<span style="color: red;"></span></label>
                    <input type="text" id="fonction" class="form-control" name="representant">
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="nom">Contact<span style="color: red;"></span></label>
            <input type="contact" id="contact" class="form-control" name="contact_presse">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="nom">Mail <span style="color: red;"></span></label>
            <input type="email" id="email" class="form-control" name="email_presse">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary" style="width:45%; background:#951b81">Enregister</button>
</form>
</br></br>
</br></br>

@endsection