<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'panierProduit')->withPivot('nombre', 'montant');
    }
}
