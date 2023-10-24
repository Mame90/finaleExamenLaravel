<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Contact;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

public function redirect(){
    $role=Auth::user()->role;
}

    // public function adiministrateur(){
    //     return view('profile.admin_master');
    // }
    public function vieAdmin()
    {
        return view('admin.dashboard'); // Afficher le tableau de bord de l'administrateur
    }
    // methode pour la partie contact **************
    public function contact()
    {
        return view('contact'); // Afficher le tableau de bord de l'administrateur
    }
    public function storeContact(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    Contact::create($data);

    return redirect()->route('contact.user')->with('success', 'Votre message a été envoyé avec succès.');
}
    // methhode pour recuperation des messages de contact par le user
    // ContactController.php
public function recupContact()
{
    $contacts = Contact::all(); // Récupérez toutes les données de contact depuis la base de données
    return view('admin.navbar', compact('contacts'));
}


    public function utilisateursAvecCommandes()
{
    $utilisateursAvecCommandes = User::has('commandes')->get();
    return view('commandes.index', ['utilisateursAvecCommandes' => $utilisateursAvecCommandes]);
}


// Afficher les détails d'une commande
public function show($id)
{
    $commande = Commande::find($id);
    return view('commandes.details', compact('commande'));
}

// Valider une commande
public function valider($id)
{
    $commande = Commande::find($id);
    // Mettez à jour l'état de la commande
    $commande->etat = 'Validée';
    $commande->save();
    return redirect()->route('commandes.index')->with('success', 'Commande validée avec succès.');
}


   /* 
//fonction pour afficher les commandes d'un utilisateur
function commandeUtilisateur($id)
{
    $commandeUser = Commande::where('user_id',$id)->get();
    $utilisateur = User::find($id);
    $total=$this->calculTotal($commandeUser,$utilisateur);//pour calculer la somme des prix total des produits command
    return view ('commande',['commandeUser'=>$commandeUser,'utilisateur'=>$utilisateur]);
    }
    *
    * Show a list of all users formatted for Datatables.
    
    public function getUsersData()
    {
        $users = User::select([
            'id as id',
            'name as name','email as email']);
            return DataTables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a> <a href="
                javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                })
                ->make(true);
                }
                /*
                * Store a new user in the database.
                */
                /**
                 *  
                 *  
                 **/
//8*********************************************************************************** 
public function create()
{
    // Vous pouvez lister les produits disponibles pour l'utilisateur
    $produits = Produit::all(); // Remplacez 'Produit' par le nom de votre modèle de produits
    return view('commandes.create', ['produits' => $produits]);
}

public function store(Request $request)
{
    // Validez les données de la requête (par exemple, vérifiez la quantité)
    $request->validate([
        'produit_id' => 'required',
        'quantite' => 'required|integer|min:1',
        // Ajoutez d'autres règles de validation si nécessaire
    ]);

    // Créez un nouvel objet Commande avec les données validées
    $commande = new Commande([
        'produit_id' => $request->input('produit_id'),
        'quantite' => $request->input('quantite'),
        // Ajoutez d'autres champs si nécessaire
    ]);

    // Enregistrez la commande dans la base de données
    $commande->save();

    return redirect()->route('commandes.index')->with('success', 'La commande a été ajoutée avec succès.');
}
// **********************methode modification pour modifier un produit deja ajouter ***********************
public function edite($id)
{
    $user = User::find($id); // Changez $users en $user pour correspondre à la vue

    if (!$user) {
        return redirect('listeProduit')->with('error', "L'utilisateur avec l'ID $id n'existe pas.");
    }

    return view('admin.edit', compact('user')); // Changez 'users' en 'user'

}
 // **************************fonction pour la mise a jour d'un produit 
 public function updatee(Request $request, $id)
 {
     $request->validate([
         'name' => 'required|string|max:255',
         'email' => 'required|string',
         'adresse' => 'required|string|max:255',
         'telephone' => 'required|numeric',
     ]);
 
     $user = User::find($id);
 
     if (!$user) {
         return redirect('admin.ajouterProduit')->with('error', 'Utilisateur non trouvé.');
     }
 
     // Mise à jour des autres champs du produit
     $user->name = $request->input('name');
     $user->email = $request->input('email');
     $user->telephone = $request->input('telephone');
     $user->adresse = $request->input('adresse');
    
     $user->save();
 
     return redirect('adminproduit')->with('success', 'Produit mis à jour avec succès.');
 }
 
// ------************************function supression d'un produit******************------------------//
public function destroye(User $users)
{
    // Supprimez l'image du produit si elle existe
    // if (file_exists(public_path('produitimage/' . $produit->image))) {
    //     unlink(public_path('produitimage/' . $produit->image));
    // }

    $users->delete();

    return redirect()->route('adminproduit')->with('success', 'utilisateurs supprimé avec succès.');
}

//    -------------function pour voir les details du produits
public function showDetails(User $produit)
{
    return view('admin.produits.details', compact('produit'));
}

// methode pour validation de commande par l'admin

public function annuler($id)
{
    $commande = Commande::find($id);
    // Mettez à jour l'état de la commande
    $commande->etat = 'Annulée';
    $commande->save();
    return redirect()->route('commandes.index')->with('success', 'Commande annulée avec succès.');
}

public function tableauadmin()
    {
        // Votre logique pour la page d'administration ici
        return view('admin.tableau');

    }
}





