<?php

namespace App\Http\Controllers;

use App\Models\Accueil;
use App\Models\Avant;
use App\Models\courrier;
use App\Models\logistique;
use App\Models\media;
use App\Models\Mobilisation;
use App\Models\Organisateur;
use App\Models\Reunion;
use Illuminate\Http\Request;

class AvantController extends Controller
{

    public function indes()
    {

        return view('avant');
    }


    public function store1(Request $request)
    {

        $request->validate([
            // media
            "visuel" => 'nullable',
            "psd" => 'nullable',
            "banderole" => 'nullable',
            "psdo" => 'nullable',


        ]);

        $media = new media();

        if ($request->visuel) {
            $image = $request->visuel;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $media->visuel = $imageName;
        }

        if ($request->psd) {
            $image = $request->psd;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $media->psd = $imageName;
        }
        if ($request->banderole) {
            $image = $request->banderole;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $media->banderole = $imageName;
        }
        if ($request->psdo) {
            $image = $request->psdo;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $media->psdo = $imageName;
        }



        // if ($request->courier) {
        //     $image = $request->courier;
        //     $imageName = time() . '.' . $image->extension();
        //     $image->move(public_path("images"), $imageName);
        //     $avant->courier = $imageName;
        // }
        // $avant->email_courier = $request->email_courier;

        $media->save();
        return redirect()->route("avant")->with("success",  "vos visuels ont été soumis avec succès!");
    }



    public function inde()
    {
        return view('avant');
    }
    public function store2(Request $request)
    {

        $request->validate([

            // <!--organisateur-->

            "nom_organisateur" => 'nullable',
            "prenoms" => "nullable",
            "fonction_organisateur" => "nullable",
            "contact_organisateur" => "nullable",
            "email_organisateur" => "nullable",



            // mobilisation

            "nom_mobilisateur" => 'nullable',
            "fonction_mobilisateur" => "nullable",
            "contact_mobilisateur" => "nullable",
            "email_mobilisateur" => "nullable",

            //reunion

            "reunion" => "nullable",
            "cr" => "nullable",

            //accueil
            "nom_accueil" => 'nullable',
            "fonction_accueil" => "nullable",
            "contact_accueil" => "nullable",
            "email_accueil" => "nullable",
            // courier
            "nom_courier" => 'nullable',
            "fonction_courier" => "nullable",
            "contact_courier" => "nullable",
            "email_courier" => "nullable",
            //logistique
            "nom_logistique" => 'nullable',
            "fonction_logistique" => "nullable",
            "contact_logistique" => "nullable",
            "email_logistique" => "nullable",

        ]);

        //enregistrement de la partie organisateur

        $organisateur = new Organisateur();

        $organisateur->nom_organisateur = $request->nom_organisateur;
        $organisateur->fonction_organisateur = $request->fonction_organisateur;
        $organisateur->contact_organisateur = $request->contact_organisateur;
        $organisateur->email_organisateur = $request->email_organisateur;

        $organisateur->save();
        //enregistrement de la partie reunion
        $reunion = new Reunion();
        $reunion->reunion = $request->reunion;
        if ($request->cr) {
            $image = $request->cr;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $reunion->cr = $imageName;
        }
        $reunion->save();



        //enregistrement de la partie mobilisation


        $mobilisation = new Mobilisation();

        $mobilisation->nom_mobilisateur = $request->nom_mobilisateur;
        $mobilisation->fonction_mobilisateur = $request->fonction_mobilisateur;
        $mobilisation->contact_mobilisateur = $request->contact_mobilisateur;
        $mobilisation->email_mobilisateur = $request->email_mobilisateur;

        $mobilisation->save();

        //enregistrement de la partie accueil
        $accueil = new Accueil();
        $accueil->nom_accueil = $request->nom_accueil;
        $accueil->fonction_accueil = $request->fonction_accueil;
        $accueil->contact_accueil = $request->contact_accueil;
        $accueil->email_accueil = $request->email_accueil;
        $accueil->save();

        //enregistrement de la partie courier
        $courrier = new courrier();
        $courrier->nom_courier = $request->nom_courier;
        $courrier->fonction_courier = $request->fonction_courier;
        $courrier->contact_courier = $request->contact_courier;
        $courrier->email_courier = $request->email_courier;
        $courrier->save();


        //enregistrement de la partie logistique

        $logistique = new logistique();
        $logistique->nom_logistique = $request->nom_logistique;
        $logistique->fonction_logistique = $request->fonction_logistique;
        $logistique->contact_logistique = $request->contact_logistique;
        $logistique->email_logistique = $request->email_logistique;
        $logistique->save();

        return redirect()->route("infos")->with("success",  "Enrégistré!");
    }
}