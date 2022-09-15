<?php

namespace App\Http\Controllers;


use App\Mail\Logistiquemail;
use App\Mail\logistiquenotificate;
use App\Models\logistique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class LogistiqueController extends Controller
{
    public function index()
    {
        return view('logistique');
    }

    public function store(Request $request)
    {
        $request->validate([
            "salle" => 'nullable',
            "chaise" => 'nullable',
        ]);

        $logistique = new logistique();
        $logistique->salle = $request->salle;
        $logistique->chaise = $request->chaise;

        $mailinterne = ['signo.aviet@uvci.edu.ci', 'georgette.assemian@uvci.edu.ci'];
        $maildata = [];
        $maildata['logistique'] = $logistique;
        Mail::to($mailinterne)->send(new logistiquenotificate($maildata));

        $logistique->save();
        return redirect()->route("logistique")->with("success",  "réussite de la soumission!");
    }


    public function inde()
    {
        $logistiques = logistique::paginate(5);
        return view('admin.logistique', compact("logistiques"));
    }

    public function delete(logistique $logistique)
    {
        $logistique->delete();

        return back()->with("success", "logistique supprimé avec succès!");
    }


    //partie update
    public function edit(logistique $logistique)

    {
        return view("editlogistique", compact("logistique"));
    }


    public function update(Request $request, logistique $logistique)
    {
        $request->validate([

            "salle" => 'nullable',
            "chaise" => 'nullable',


        ]);
        //      // dd($logistique);
        $logistique->update([
            "salle" => $request->salle,
            "chaise" => $request->chaise,

        ]);


        return back()->with("success", " mise à jour réussie!");
    }

    public function valider(logistique $logistique)
    {
        // dd($logistique);
        $mailinterne = ['logistiques@uvci.edu.ci', 'patrimoine@uvci.edu.ci', 'signo.aviet@uvci.edu.ci'];
        $maildata = [];
        $maildata['logistique'] = $logistique;
        Mail::to($mailinterne)->send(new Logistiquemail($maildata));
        return redirect()->route('admin.logistique')->with("success", "logistique validé avec succès!");
    }
}