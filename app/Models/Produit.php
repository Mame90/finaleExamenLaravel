<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
     // Relation : Un produit appartient à une catégorie
  
     // Relation : Un produit peut être inclus dans plusieurs commandes
    public function paniers()
    {
        return $this->belongsToMany(Panier::class, 'panierProduit')->withPivot('nombre', 'montant');
    }


     public function commandes()
     {
         return $this->belongsToMany(Commande::class, 'commande_produit', 'produit_id', 'commande_id')
             ->withPivot('quantite');
     }

    protected $fillable = ['nom', 'description','categorieProduit','image' ,'prix', 'quantite_en_stock'];
 

        // 'password',
    
}
