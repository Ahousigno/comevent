<?php

namespace App\Http\Controllers;

use App\Mail\Confirmationmail;
use App\Mail\ConfirmeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
        Mail::to('signo.aviet@uvci.edu.ci')->send(new ConfirmeMail());
        return view('admin.index');
    }
}