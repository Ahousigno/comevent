<?php

namespace App\Http\Controllers;

use App\Mail\Mediamail;
use App\Mail\Medianotificate;
use App\Models\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MediaController extends Controller

{

    public function indes()
    {

        return view('media');
    }


    public function store1(Request $request)
    {

        $request->validate([
            // media
            "visuel" => 'nullable',
            "psd" => 'nullable',
            "banderole" => 'nullable',
            "psdo" => 'nullable',
            "lien_media" => 'nullable',


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
        $media->lien_media = $request->lien_media;

        $mailinterne = ['signo.aviet@uvci.edu.ci', 'georgette.assemian@uvci.edu.ci'];
        $maildata = [];
        $maildata['media'] = $media;
        Mail::to($mailinterne)->send(new Medianotificate($maildata));

        $media->save();
        return redirect()->route("media")->with("success",  "vos visuels ont été soumis avec succès!");
    }





    public function index()
    {
        $medias = media::paginate(5);
        return view('admin.media', compact("medias"));
    }

    public function delete(media $media)
    {
        $media->delete();

        return back()->with("success", "media supprimé avec succès!");
    }


    //partie update
    public function edit(media $media)

    {
        return view("editMedia", compact("media"));
    }


    public function update(Request $request, media $media)
    {

        //      // dd($media);
        $media = Media::find($media);


        if ($request->hasfile('visuel')) {
            $destination = 'public_path/media' . $media->visuel;
            $media = $request->media('visuel');
            $extention = $media->getlientOriginalExtension();
            $images = time() . '.' . $extention;
            $media->move('public_path/media', $images);
            $media->visuel->$images;
        }
        if ($request->hasfile('psd')) {
            $destination = 'public_path/media' . $media->visuel;
            $media = $request->media('psd');
            $extention = $media->getlientOriginalExtension();
            $images = time() . '.' . $extention;
            $media->move('public_path/media', $images);
            $media->psd->$images;
        }
        if ($request->hasfile('banderole')) {
            $destination = 'public_path/media' . $media->visuel;
            $media = $request->media('banderole');
            $extention = $media->getlientOriginalExtension();
            $images = time() . '.' . $extention;
            $media->move('public_path/media', $images);
            $media->banderole->$images;
        }
        if ($request->hasfile('psdo')) {
            $destination = 'public_path/media' . $media->visuel;
            $media = $request->media('psdo');
            $extention = $media->getlientOriginalExtension();
            $images = time() . '.' . $extention;
            $media->move('public_path/media', $images);
            $media->psdo->$images;
        }
        $media->update();
        return back()->with("success", "Média mis à jour avec succès!");
    }

    public function valider(media $media)
    {
        // dd($courrier);
        $mailinterne = ['medias@uvci.edu.ci', 'patrimoine@uvci.edu.ci', 'signo.aviet@uvci.edu.ci'];
        $maildata = [];
        $maildata['media'] = $media;
        Mail::to($mailinterne)->send(new Mediamail($maildata));
        return redirect()->route('admin.media')->with("success", "media validé avec succès!");
    }
}