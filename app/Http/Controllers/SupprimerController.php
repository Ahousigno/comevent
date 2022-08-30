<?php

namespace App\Http\Controllers;

use App\Models\Avant;
use Illuminate\Http\Request;

class SupprimerController extends Controller
{
    public function delete(Avant $avant)
    {
        $avant->delete();
        return back()->with("succesDelete", "évènement supprimé avec succès!");
    }
}