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

    <form role="form" action="{{route('presse.stone')}}" enctype="multipart/form-data" method="POST">
        @csrf
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
        <br>
        <button type="submit" class="btn btn-primary" style="width:45%; background:#951b81">Enregister</button>
    </form>
    </br></br>
    </br></br>

    @endsection