<?php

namespace App\Http\Controllers;

use App\Models\media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $medias = media::paginate(5);
        return view('admin.media', compact("medias"));
    }
}