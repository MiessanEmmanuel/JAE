<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        $titre = "Accueil";
        return view('accueil', [
           'title' => $titre
        ]);
    }
}