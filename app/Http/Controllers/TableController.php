<?php

namespace App\Http\Controllers;

use App\Mail\Confirmationmail;
use App\Mail\ConfirmeMail;
use App\Models\Avant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TableController extends Controller
{
    public function index()
    {
        $avants = Avant::paginate(5);
        return view('admin.table', compact("avants"));
    }
    //partie valider
    public function valider(Avant $avant)
    {
        // dd($avant);
        $mailinterne = ['medias@uvci.edu.ci', 'patrimoine@uvci.edu.ci', 'signo.aviet@uvci.edu.ci'];
        $maildata = [];
        $maildata['avant'] = $avant;
        Mail::to($mailinterne)->send(new Confirmationmail($maildata));
        return redirect()->route('admin.table')->with("success", "évènement validé avec succès! Les collaborateurs ont été notifiés.");
    }
    //partie update
    public function edit(Avant $avant)

    {
        return view("editInfos", compact("avant"));
    }


    public function update(Request $request, Avant $avant)
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
        // dd($avant);
        $avant->update([
            "nom_event" => $request->nom_event,
            "theme" => $request->theme,
            "tdr" => $request->tdr,
            "programme_file" => $request->programme_file,
            "budget" => $request->budget,
            "date" => $request->date,
            "lieu" => $request->lieu,
            "cathegorie" => $request->cathegorie,
            "portee" => $request->portee,
            "besoin" => $request->besoin,
        ]);

        // $avant = new Avant();
        // $avant->nom_event = $request->nom_event;
        // $avant->theme = $request->theme;
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
        // $avant->budget = $request->budget;
        // $avant->date = $request->date;
        // $avant->lieu = $request->lieu;
        // $avant->cathegorie = $request->cathegorie;
        // $avant->portee = $request->portee;

        if ($request->besoin) {
            $image = $request->besoin;
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path("images"), $imageName);
            $avant->besoin = $imageName;
        }
        // $avant->save();
        // $avant->update($request->all);

        return back()->with("success", "évènement mis à jour avec succès!");
    }




    //partie delete
    public function delete(Avant $avant)
    {
        $avant->delete();

        return back()->with("success", "évènement supprimé avec succès!");
    }
}