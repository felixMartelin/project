<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modeles\JoueurDAO;

class JoueurController extends Controller
{
    //
    public function getJoueurs()
    {
        $joueur = new JoueurDAO();
        $lesjoueurs = $joueur->getLesJoueur();
        return view('ladder', compact('lesjoueurs'));
    }
}
