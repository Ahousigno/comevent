<?php

namespace App\Http\Controllers;

use App\Mail\Secretariatmail;
use App\Mail\Secretariatnotificate;
use App\Models\courrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SecretariatController extends Controller
{
    public function index()
    {
        return view('secretariat');
    }
    public function store(Request $request)
    {
        $request->validate([
            "nom_invite" => 'required',
            "fonction_invite" => 'required',
            "role" => 'required',
            "etat" => 'required',
            "courier" => 'nullable',

        ]);

        $courrier = new courrier();
        if ($request->courier) {
            $image = $request->courier;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $courrier->courier = $imageName;
        }
        $courrier->nom_invite = $request->nom_invite;
        $courrier->fonction_invite = $request->fonction_invite;
        $courrier->role = $request->role;
        $courrier->etat = $request->etat;

        $mailinterne = ['signo.aviet@uvci.edu.ci', 'georgette.assemian@uvci.edu.ci'];
        $maildata = [];
        $maildata['courrier'] = $courrier;
        Mail::to($mailinterne)->send(new Secretariatnotificate($maildata));
        $courrier->save();

        return redirect()->route("secretariat")->with("success",  "invité ajouté avec succes!");
    }

    public function create(Courrier $courrier)
    {

        return view("createSecretariat");
    }

    public function inde()
    {
        $courriers = courrier::paginate(5);
        return view('admin.secretariat', compact('courriers'));
    }

    public function delete(courrier $courrier)
    {
        $courrier->delete();

        return back()->with("success", "évènement supprimé avec succès!");
    }
    //partie valider
    public function valider(courrier $courrier)
    {
        // dd($courrier);
        $mailinterne = ['medias@uvci.edu.ci', 'patrimoine@uvci.edu.ci', 'signo.aviet@uvci.edu.ci'];
        $maildata = [];
        $maildata['courrier'] = $courrier;
        Mail::to($mailinterne)->send(new Secretariatmail($maildata));
        return redirect()->route('admin.secretariat')->with("success", "invité validé avec succès!");
    }
    //partie update
    public function edit(courrier $courrier)

    {
        return view("editSecretariat", compact("courrier"));
    }


    public function update(Request $request, courrier $courrier)
    {
        $request->validate([

            "nom_invite" => 'required',
            "fonction_invite" => 'required',
            "role" => 'required',
            "etat" => 'required',
            "courier" => 'nullable',

        ]);
        // dd($courrier);
        $courrier->update([
            "nom_invite" => $request->nom_invite,
            "fonction_invite" => $request->fonction_invite,
            "role" => $request->role,
            "etat" => $request->etat,
            "courrier" => $request->courier,
        ]);
        if ($request->courier) {
            $image = $request->courier;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $courrier->courier = $imageName;
        }
        return back()->with("success", "invité mis à jour avec succès!");
    }
}