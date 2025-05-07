<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VitrineController extends Controller
{
    public function accueil() {
        return view('vitrine.accueil');
    }

    public function contact() {
        return view('vitrine.contact');
    }

    public function aPropos() {
        return view('vitrine.a-propos');
    }
}
