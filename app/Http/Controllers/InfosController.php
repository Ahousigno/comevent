<?php

namespace App\Http\Controllers;

use App\Mail\Infosmail;
use App\Models\Avant;
use App\Notifications\Infosnotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InfosController extends Controller
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

        return view('infos');
    }

    // public function create(){
    //     $infos = infos::all();
    //     return view("infos");
    // }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([

            "nom_event" => 'required',
            "theme" => 'required',
            "tdr" => 'required',
            "programme_file" => 'required',
            "budget" => 'required',
            "date_fin" => 'required',
            "date_debut" => 'required',
            "lieu" => "required",
            "cathegorie" => 'nullable',
            "portee" => 'nullable',
            "besoin" => 'nullable',
            "liste" => 'nullable',
        ]);

        $avant = new Avant();
        $avant->nom_event = $request->nom_event;
        $avant->theme = $request->theme;

        if ($request->tdr) {
            $image = $request->tdr;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $avant->tdr = $imageName;
        }

        if ($request->programme_file) {
            $image = $request->programme_file;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $avant->programme_file = $imageName;
        }
        $avant->budget = $request->budget;
        $avant->date_debut = $request->date_debut;
        $avant->date_fin = $request->date_fin;
        $avant->lieu = $request->lieu;
        $avant->cathegorie = $request->cathegorie;
        $avant->portee = $request->portee;

        if ($request->besoin) {
            $image = $request->besoin;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $avant->besoin = $imageName;
        }

        if ($request->liste) {
            $image = $request->liste;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $avant->liste = $imageName;
        }
        // dd($avant);
        $mailinterne = ['signo.aviet@uvci.edu.ci', 'georgette.assemian@uvci.edu.ci'];
        $maildata = [];
        $maildata['avant'] = $avant;
        Mail::to($mailinterne)->send(new Infosmail($maildata));
        // return redirect()->route('infos');
        $avant->save();
        return redirect()->route("infos")->with("success",  "votre évènement a été créé avec succès!");
    }


    //partie notification
    // public function notifier(Avant $avant)
    // {


    // }
}