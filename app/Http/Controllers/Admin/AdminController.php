<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\CategorieProduit;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
 public function index()
    {
        // Votre logique pour la page d'administration ici
        return view('admin.dashboard');
    }

    // **********************************************************************
    public function tableauadmin()
    {
        // Votre logique pour la page d'administration ici
        return view('admin.tableau');
    }
// ***********************Ajout-supresion-modification-pour un utilisateur(CRUD)
    public function utilisateur()
    { $users = User::all(); // Récupère tous les utilisateurs
        return view('admin.utilisateur', ['users' => $users]);
        
    }     

    

    public function userliste()
    { $users = User::all(); // Récupère tous les utilisateurs
        return view('admin.body', ['users' => $users]);
        
    }     

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }
    
    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',


        ]);
    
        // Mise à jour de l'utilisateur
        User::find($id)->update($request->all());
    
        return redirect('/ajouterProduit')
            ->with('success', 'Utilisateur mis à jour avec succès');
    }
    
    public function destroy($id)
    {
        // Suppression de l'utilisateur
        User::find($id)->delete();
    
        return redirect('/ajouterProduit')
            ->with('success', 'Utilisateur supprimé avec succès');
    }
// ***********************Ajout-supresion-modification-pour un utilisateur(CRUD)
   
// ***********************Ajout-supresion-modification-d'un  (CRUD)
public  function  ajouterProduit(){
    return view('admin.ajouterProduit');
}

public  function  show(string $id){
$user =User::findOrFail($id);
return view('admin.show',compact($user));
}
// ************************************************************************************
    //function pour les categories de produits

    public function store(Request $request)
    {
        // Validez les données du formulaire ici...
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'categorieProduit' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'quantite_en_stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
        ]);
    
        // Gérez l'upload de l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('produitimage'), $imageName);
        } else {
            // Gérez le cas où l'image n'est pas présente
            return redirect()->route('admin.ajouterProduit')->with('error', 'L\'image du produit est requise.');
        }
        // **************************Fonction pour mettre a jour un produit ***************************************************
    
        

        // *****************************************************************************************************
        // Enregistrez le produit dans la base de données
        Produit::create([
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'categorieProduit' => $request->input('categorieProduit'),
            'prix' => $request->input('prix'),
            'quantite_en_stock' => $request->input('quantite_en_stock'),
            'image' => $imageName, // Stockez le nom de l'image dans la base de données
        ]);
    
       // Rediriger l'utilisateur vers une page de confirmation ou de liste des produits en utilisant des URLs
return redirect('/adminproduit')->with('success', 'Le produit a été ajouté avec succès.');

    }

    // fonction pour afficher la liste des produits
    public function listeusers()
    {
        $users = User::all();
        return view('admin.listeProduit', compact('users'));
    }







    
      
}