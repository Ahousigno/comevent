<?php

namespace App\Http\Controllers;

use App\Models\Organisateur;
use Illuminate\Http\Request;

class OrganisateurController extends Controller
{
    public function create()
    {
        return view('organisateur');
    }

    public function store(Request $request)
    {
        $request->validate([

            // <!--organisateur-->

            "nom_organisateur" => 'nullable',
            "prenoms" => "nullable",
            "fonction_organisateur" => "nullable",
            "contact_organisateur" => "nullable",
            "email_organisateur" => "nullable",
        ]);
    }



    public function create(Request $request)
    {
        Organisateur::create([

            // <!--organisateur-->

            "nom_organisateur" => 'nullable',
            "prenoms" => "nullable",
            "fonction_organisateur" => "nullable",
            "contact_organisateur" => "nullable",
            "email_organisateur" => "nullable",
        ]);
    }
}