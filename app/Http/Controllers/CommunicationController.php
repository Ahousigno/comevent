<?php

namespace App\Http\Controllers;

use App\Models\Organisateur;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{



    public function index()
    {
        return view('communication');
    }


    public function indes()
    {
        return view('comment');
    }

    public function indese()
    {
        return view('admin.reunion');
    }
    public function inde()
    {
        return view('admin.communication');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ordre'->'nullable'
        ]);
    }
}