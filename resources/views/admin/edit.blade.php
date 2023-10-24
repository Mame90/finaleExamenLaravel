<style>
/* Ajoutez ce CSS à votre fichier de styles (par exemple, resources/css/app.css) */

/* Styles pour le formulaire */
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
}

/* Styles pour les champs de formulaire */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Styles pour les boutons */
.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
}

.btn-primary:hover {
    background-color: #0056b3;
}

/* Styles pour l'image actuelle */
.img-fluid {
    max-width: 100%;
    height: auto;
}

/* Autres styles de personnalisation */
/* Vous pouvez ajouter des styles supplémentaires pour les alertes, les messages d'erreur, etc. selon vos besoins. */

</style>
<div class="container">

    <h1 class="mb-4" style="text-align: center;font-weight:700;color:#007bff">Modifier le user</h1>
    <form method="POST" action="{{ route('produit.update', $user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom complet</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="categorieProduit">Adresse email</label>
            <input type="text" class="form-control" id="categorieProduit" name="categorieProduit" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="description">Adresse</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $user->adresse }}</textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="prix">Telephone</label>
                <input type="number" class="form-control" id="prix" name="prix" value="{{ $user->telephone }}" required>
            </div>

           
        <div class="form-group">
            
        <!-- Ajoutez d'autres champs du produit ici si nécessaire -->
        <button type="submit" class="btn btn-primary">Mettre à jour le Produit</button>
    </form>
</div>
