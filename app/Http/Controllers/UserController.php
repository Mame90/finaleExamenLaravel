<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $produits = Produit::all();

        return view('dashboard', compact('produits'));
    }


    public function listeProduitsAjoutes()
    {
        $produitsAjoutes = Produit::where('ajoute_par_utilisateur', true)->get();
        return view('produits-ajoutes', ['produits' => $produitsAjoutes]);
    }
    
}
