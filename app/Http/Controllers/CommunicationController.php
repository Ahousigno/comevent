<?php

namespace App\Http\Controllers;

use App\Mail\Pressenotificate;
use App\Mail\Reunionmail;
use App\Models\Organisateur;
use App\Models\Presse;
use App\Models\Reunion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class CommunicationController extends Controller
{



    public function index()
    {
        return view('communication');
    }


    public function indes()
    {
        return view('admin.presse');
    }

    public function indese()
    {
        return view('admin.reunion');
    }

    public function inde()
    {
        $communications = Http::get('https://rh.uvci.edu.ci/drhuvci/public/api/pat_ens')->collect();

        return view('admin.communication', [
            'communications' => $communications,
        ]);
    }


    public function create(Reunion $reunion)
    {

        return view("createReunion");
    }
    public function creat(Presse $presse)
    {

        return view("createPresse");
    }


    public function store(Request $request)
    {
        $request->validate([
            "ordre" => 'nullable',
            "date_reunion" => 'nullable',
            "heure_debut" => 'nullable',
            "heure_fin" => 'nullable',
            "canal" => 'nullable',
            "lien_reunion" => 'nullable',
        ]);
        $reunion = new Reunion();
        $reunion->ordre = $request->ordre;
        $reunion->date_reunion = $request->date_reunion;
        $reunion->heure_debut = $request->heure_debut;
        $reunion->heure_fin = $request->heure_fin;
        $reunion->canal = $request->canal;
        $reunion->lien_reunion = $request->lien_reunion;

        $mailinterne = ['signo.aviet@uvci.edu.ci', 'georgette.assemian@uvci.edu.ci'];
        $maildata = [];
        $maildata['reunion'] = $reunion;
        Mail::to($mailinterne)->send(new Reunionmail($maildata));
        $reunion->save();
        return redirect()->route("reunion")->with("success",  "Information Difusée!");
    }


    public function stone(Request $request)
    {
        $request->validate([
            "nom_structure" => 'nullable',
            "representant" => 'nullable',
            "contact_presse" => 'nullable',
            "email_presse" => 'nullable',
        ]);
        $presse = new Presse();
        $presse->nom_structure = $request->nom_structure;
        $presse->representant = $request->representant;
        $presse->contact_presse = $request->contact_presse;
        $presse->email_presse = $request->email_presse;

        $mailinterne = ['signo.aviet@uvci.edu.ci', 'georgette.assemian@uvci.edu.ci'];
        $maildata = [];
        $maildata['presse'] = $presse;
        Mail::to($mailinterne)->send(new Pressenotificate($maildata));
        $presse->save();
        return redirect()->route("reunion")->with("success",  "presse ajoutée!");
    }
}