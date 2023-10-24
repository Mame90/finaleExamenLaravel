<form action="{{ route('commandes.store') }}" method="post">
    @csrf
    <label for="produit_id">Produit :</label>
    <select name="produit_id" id="produit_id">
        @foreach ($produits as $produit)
            <option value="{{ $produit->id }}">{{ $produit->nom }}</option>
        @endforeach
    </select>

    <label for="quantite">Quantité :</label>
    <input type="number" name="quantite" id="quantite" required>

    <!-- Ajoutez d'autres champs si nécessaire -->

    <button type="submit">Ajouter la commande</button>
</form>
