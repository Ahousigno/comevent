<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Apres;
use App\Models\Communicant;
use App\Models\Decoration;
use App\Models\Hotesse;
use App\Models\Intervenant;
use App\Models\Participant;
use App\Models\Presentateur;
use App\Models\Presse;
use App\Models\Protocole;
use App\Models\Securite;
use App\Models\Vehicule;


class ApresController extends Controller

{

    // public function _construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // if (Gate::allows('access-admin')) {
        //     abort('403');
        // }

        return view('apres');
    }

    // public function create(){
    //     $infos = infos::all();
    //     return view("infos");
    // }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([

            // decoration

            "nom_prenom" => 'nullable',
            "fonction_decorateur" => "nullable",
            "contact_decorateur" => "nullable",
            "email_decorateur" => 'nullable',
            "deco" => 'nullable',

            // Hotesse
            "nom_prenoms" => 'nullable',
            "fonction_hotesse" => "nullable",
            "contact_hotesse" => "nullable",
            "email_hotesse" => 'nullable',

            // securité

            "nom_prenomst" => 'nullable',
            "fonction_securite" => "nullable",
            "contact_securite" => "nullable",
            "email_securite" => 'nullable',

            //protocole
            "nom_prenompt" => 'nullable',
            "fonction_protocole" => "nullable",
            "contact_protocole" => "nullable",
            "email_protocole" => 'nullable',
            "photo" => "nullable",
            "presentation" => "nullable",

            // intervenants

            "nom_prenomit" => "nullable",
            "fonction_intervenant" => "nullable",
            "contact_intervenant" => "nullable",
            "email_intervenant" => 'nullable',
            "intervention_intervenant" => "nullable",
            "photo_intervenant" => "nullable",
            "presentation_intervenant" => "nullable",

            // communicants
            "nom_prenomct" => "nullable",
            "fonction_communicant" => "nullable",
            "contact_communicant" => "nullable",
            "email_communicant" => 'nullable',
            "intervention_communicant" => "nullable",
            "presentation_communicant" => "nullable",

            // Presse
            "nom-structure" => "nullable",
            "type" => "nullable",
            "nom_presse" => 'nullable',
            "prenom_presse" => "nullable",
            "contact_presse" => "nullable",
            "email_presse" => "nullable",

            // participants

            "nom_prenompt" => "nullable",
            "fonction_participant" => "nullable",
            "contact_participant" => "nullable",
            "email_participant" => 'nullable',

            // présentateur, maître de cérémonie
            "nom_presentateur" => "nullable",
            "fonction_presentateur" => "nullable",
            "contact_presentateur" => "nullable",
            "email_presentateur" => 'nullable',
            "photo_presentateur" => "nullable",
            "presentation_presentateur" => "nullable",

            // vehicule

            "nom_proprietaire" => "nullable",
            "matricule_proprietaire" => "nullable",
            "contact_proprietaire" => "nullable",
            "email_proprietaire" => 'nullable',

            // Après l'évènement

            "lettre" => "nullable",
            "rapport" => "nullable",
            "article" => "nullable",
            "medias" => "nullable",
            "pressbook" => "nullable",
            "album" => "nullable",
            "lien" => "nullable",
            "enquete" => "nullable",


        ]);

        //enregistrment de la partie decoration

        $decoration = new Decoration();

        $decoration->nom_prenom = $request->nom_prenom;
        $decoration->fonction_decorateur = $request->fonction_decorateur;
        $decoration->contact_decorateur = $request->contact_decorateur;
        $decoration->email_decorateur = $request->email_decorateur;
        if ($request->deco) {
            $image = $request->deco;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $decoration->deco = $imageName;
        }
        $decoration->save();

        //enregistrement de la partie hotasse
        $hotesse = new Hotesse();

        $hotesse->nom_prenoms = $request->nom_prenoms;
        $hotesse->fonction_hotesse = $request->fonction_hotesse;
        $hotesse->contact_hotesse = $request->contact_hotesse;
        $hotesse->email_hotesse = $request->email_hotesse;

        $hotesse->save();

        //enregistrement de la partie securité

        $securite = new Securite();

        $securite->nom_prenomst = $request->nom_prenomst;
        $securite->fonction_securite = $request->fonction_securite;
        $securite->contact_securite = $request->contact_securite;
        $securite->email_securite = $request->email_securite;

        $securite->save();

        // enregistrement de la partie protocole

        $protocole = new Protocole();

        $protocole->nom_prenompt = $request->nom_prenompt;
        $protocole->fonction_protocole = $request->fonction_protocole;
        $protocole->contact_protocole = $request->contact_protocole;
        $protocole->email_protocole = $request->email_protocole;

        if ($request->photo) {
            $image = $request->photo;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $protocole->photo = $imageName;
        }
        $protocole->presentation = $request->presentation;

        $protocole->save();

        //enregistrement de la partie intervenant


        $intervenant = new Intervenant();

        $intervenant->nom_prenomit = $request->nom_prenomit;
        $intervenant->fonction_intervenant = $request->fonction_intervenant;
        $intervenant->contact_intervenant = $request->contact_intervenant;
        $intervenant->email_intervenant = $request->email_intervenant;
        $intervenant->intervention_intervenant = $request->intervention_intervenant;

        if ($request->photo_intervenant) {
            $image = $request->photo_intervenant;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $intervenant->photo_intervenant = $imageName;
        }
        $intervenant->presentation_intervenant = $request->presentation_intervenant;
        $intervenant->save();

        //enregistrement de la partie communicant

        $communicant = new Communicant();

        $communicant->nom_prenomct = $request->nom_prenomct;
        $communicant->fonction_communicant = $request->fonction_communicant;
        $communicant->contact_communicant = $request->contact_communicant;
        $communicant->email_communicant = $request->email_communicant;
        $communicant->intervention_communicant = $request->intervention_communicant;
        $communicant->presentation_communicant = $request->presentation_communicant;
        $communicant->save();

        //enregistrement de la partie presse

        $presse = new Presse();

        $presse->nom_structure = $request->nom_structure;
        $presse->type = $request->type;
        $presse->nom_presse = $request->nom_presse;
        $presse->prenom_presse = $request->prenom_presse;
        $presse->contact_presse = $request->contact_presse;
        $presse->email_presse = $request->email_presse;
        $presse->save();
        //enregistrement de la partie participant

        $participant = new Participant();

        $participant->nom_prenompt = $request->nom_prenompt;
        $participant->fonction_participant = $request->fonction_participant;
        $participant->contact_participant = $request->contact_participant;
        $participant->email_participant = $request->email_participant;
        $participant->save();

        //enregistrement de la partie presentateur

        $presentateur = new Presentateur();

        $presentateur->nom_presentateur = $request->nom_presentateur;
        $presentateur->fonction_presentateur = $request->fonction_presentateur;
        $presentateur->contact_presentateur = $request->contact_presentateur;
        $presentateur->email_presentateur = $request->email_presentateur;

        if ($request->photo_presentateur) {
            $image = $request->photo_presentateur;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $presentateur->photo_presentateur = $imageName;
        }
        $presentateur->presentation_presentateur = $request->presentation_presentateur;
        $presentateur->save();

        // enregistrement de la partie vehicule

        $vehicule = new Vehicule();

        $vehicule->nom_proprietaire = $request->nom_proprietaire;
        $vehicule->matricule_proprietaire = $request->matricule_proprietaire;
        $vehicule->contact_proprietaire = $request->contact_proprietaire;
        $vehicule->email_proprietaire = $request->email_proprietaire;
        $vehicule->save();

        //enregistrement de la partie après

        $apres = new Apres();

        if ($request->lettre) {
            $image = $request->lettre;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $apres->lettre = $imageName;
        }

        if ($request->rapport) {
            $image = $request->rapport;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $apres->rapport = $imageName;
        }

        if ($request->article) {
            $image = $request->article;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $apres->article = $imageName;
        }

        if ($request->medias) {
            $image = $request->medias;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $apres->medias = $imageName;
        }

        if ($request->pressbook) {
            $image = $request->pressbook;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $apres->pressbook = $imageName;
        }

        if ($request->album) {
            $image = $request->album;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $apres->album = $imageName;
        }

        $apres->lien = $request->lien;

        if ($request->enquete) {
            $image = $request->enquete;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $apres->enquete = $imageName;
        }
        $apres->save();

        return redirect()->route("apres")->with("success",  "évènement enregistré avec succès!");
    }
}