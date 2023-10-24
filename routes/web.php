<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use function PHPSTORM_META\type;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Master.welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/redirect', [ProfileController::class, 'redirect']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// routes pour les commandes************************

Route::get('/commandes', [ProfileController::class, 'utilisateursAvecCommandes'])->name('commandes.index');
Route::get('/commandes/ajouter', [ProfileController::class, 'create'])->name('commandes.create');
Route::post('/commandes', [ProfileController::class, 'store'])->name('commandes.store');
// route pour voir des details de la commandes
Route::get('/commandes/{id}', [ProfileController::class, 'show'])->name('commandes.show');
// *************************************************************************************
// route pour la gestion des edit et update  & delete pour cote produits
Route::get('/produits/{produit}/edit', [ProfileController::class,'edite'])->name('produits.edit');
Route::put('/produits/{produit}', [ProfileController::class,'updatee'])->name('produit.update');
Route::delete('/produits/{produit}', [ProfileController::class,'destroye'])->name('produits.destroy');
// route pour voir les details du produits
    Route::get('/produits/{produit}/details', [ProfileController::class,'showDetails'])->name('produits.details');
// ***************************************************************************************
// route pour la gestion des edit et update  & delete  cote par l'administrateur
Route::get('/user/{user}/edit', [ProfileController::class,'edition'])->name('user.edit');
Route::put('/user/{user}', [ProfileController::class,'modification'])->name('user.modification');
Route::delete('/user/{user}', [ProfileController::class,'supression'])->name('user.supression');
// route pour voir les details du produits
Route::get('/user/{user}/details', [ProfileController::class,'voirDetails'])->name('user.details');
// ****************************************************************************************
// Route   pour envoyer un message de contact par le User
Route::get('/contact', [ProfileController::class, 'contact'])->name('contact.user');
Route::post('/contact', [ProfileController::class, 'storecontact'])->name('contact.postUser');
//route pour recuperation des messages de contact par les user cote   admin
Route::get('/admin/contacts', [ProfileController::class,'recupContact'])->name('admin.contact');

Route::get('/tableauadmin', [ProfileController::class, 'tableauadmin'])->name('admin.tableau');

});
// ***************************************************
// Route::middleware('auth')->group(function () {
// Routes pour les produits

Route::get('/ajouterProduit', [AdminController::class, 'ajouterProduit']);
Route::post('/ajouterProduit', [AdminController::class, 'store']);


// Route::get('/produits', [ProduitController::class,'index'])->name('produits.ajouterProduit');
// Route::get('/produits/{produit}', [ProduitController::class,'create'])->name('produits.create');
// Route::post('/produits', [ProduitController::class,'store'])->name('produits.store');
// Route::get('/produits/{produit}', [ProduitController::class,'show'])->name('produits.show');
// Route::get('/produits/{produit}/edit', [ProduitController::class,'edit'])->name('produits.edit');
// Route::put('/produits/{produit}', [ProduitController::class,'update'])->name('produits.update');
// Route::delete('/produits/{produit}', [ProduitController::class,'destroy'])->name('produits.destroy');

// // Routes pour les utilisateurs
// Route::get('/utilisateurs', 'UtilisateurController@index')->name('utilisateurs.index');
// Route::get('/utilisateurs/create', 'UtilisateurController@create')->name('utilisateurs.create');
// Route::post('/utilisateurs', 'UtilisateurController@store')->name('utilisateurs.store');
// Route::get('/utilisateurs/{utilisateur}', 'UtilisateurController@show')->name('utilisateurs.show');
// Route::get('/utilisateurs/{utilisateur}/edit', 'UtilisateurController@edit')->name('utilisateurs.edit');
// Route::put('/utilisateurs/{utilisateur}', 'UtilisateurController@update')->name('utilisateurs.update');
// Route::delete('/utilisateurs/{utilisateur}', 'UtilisateurController@destroy')->name('utilisateurs.destroy');

// });

// route pour la gestion d'un utilisateur cote administrateur
 Route::get('/produit', [AdminController::class, 'utilisateur']);

// Route pour afficher le formulaire de modification d'un utilisateur
// Route::get('/admin/{id}/edition', [AdminController::class, 'edition'])->name('admin.edition');
// Route::get('/admin/users/{id}/edition', [AdminController::class, 'edition'])->name('admin.edition');
// Route pour modifier un utilisateur dans la base de donnée
Route::put('/admin/{user}',[AdminController::class,'modifierUser'])->name("admin.modification");

// Route pour afficher la liste des produit
// routes/web.php



Route::get('/adminproduit', [AdminController::class, 'listeusers']);

// // Route pour afficher le formulaire de modification d'un utilisateur
// // Route::put('/admin/{id}', [AdminController::class, 'modification'])->name('admin.modification');
// // Route pour la suppression d'un elements du  formulaire  d'un utilisateur
// Route::delete('/admin/{id}', [AdminController::class, 'supression'])->name('admin.supression');

// ****************************************************

Route::get('/userliste',[AdminController::class, 'userliste']);

// 

// Route::get('/ajouterProduit', [AdminController::class, 'ajouterProduit']);
// Route::post('/ajouterProduit', [AdminController::class, 'store']);

//_______________________________________________________//


Route::get('/dashboard', [UserController::class, 'index']);



// ****************************************************
// Route middleware pour gerer l'authentification admin et user
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/administrator', [AdminController::class, 'index'])->name('admin.dashboard');

    // routes pour la gestion des clients
    // Route::get('/admin/users', [AdminController::class, 'listUsers'])->name('admin.list');
   
    // Ajoutez d'autres routes pour gérer les utilisateurs (modification, suppression, etc.).
   Route::get('administrator/enregistrer', [AdminController::class, 'enregistrer'])->name('enregistrer');
    Route::get('/private', [AdminController::class, 'vieAdmin'])->name('administrateur');
});

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'vieAdmin'])->name('admin.dashboard');
// });


//   Route::get('/private', function (){
//        return view('dashboard');
//     });





// Route::middleware(['auth', 'role:admin'])
//              ->group('/private', [ProfileController::class, 'vieAdmin'])
//              ->name('admin.dashboard');

// ******************************Route commande pour  produit ****************************************************//



// *****************************************************************route cote user************************//

Route::get('/ajouter-au-panier/{id}',[UserController::class, 'ajouterAuPanier']);


// les routes pour validation et annulations de commades par l'administrateur
Route::middleware(['auth'])->group(function () {
    // ... Vos autres routes ...

    // Route pour afficher la liste des commandes*********************************
    Route::get('/commandes', [ProfileController::class, 'utilisateursAvecCommandes'])->name('commandes.index');

    // Route pour afficher les détails d'une commande
    Route::get('/commandes/{id}', [ProfileController::class, 'show'])->name('commandes.show');

    // Route pour valider une commande
    Route::post('/commandes/{id}/valider', [ProfileController::class, 'valider'])->name('commandes.valider');

    // Route pour annuler une commande
    Route::post('/commandes/{id}/annuler', [ProfileController::class, 'annuler'])->name('commandes.annuler');
});

    // *****************************************************************************





// ***********************************************************************************************************

require __DIR__.'/auth.php';