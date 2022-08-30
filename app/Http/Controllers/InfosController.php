<?php

namespace App\Http\Controllers;

use App\Models\Avant;
use Illuminate\Http\Request;

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
        $request->validate([

            "nom_event" => 'required',
            "theme" => 'required',
            "tdr" => 'required',
            "programme_file" => 'required',
            "budget" => 'required',
            "date" => 'required',
            "lieu" => "required",
            "cathegorie" => 'nullable',
            "portee" => 'nullable',
            "besoin" => 'nullable',



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
        $avant->date = $request->date;
        $avant->lieu = $request->lieu;
        $avant->cathegorie = $request->cathegorie;
        $avant->portee = $request->portee;

        if ($request->besoin) {
            $image = $request->besoin;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $avant->besoin = $imageName;
        }

        $avant->save();

        return redirect()->route("infos")->with("success",  "votre évènement a été créé avec succès!");
    }
}