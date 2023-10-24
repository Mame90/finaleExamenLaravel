<!-- resources/views/index.blade.php -->


   <section class="listproduit">
     <div class="container">
        <h1>Liste des Produits</h1>

        <div class="row">
            @foreach ($produits as $produit)
                <div class="col-md-4">
                    <div class="card mb-4">
                        @if ($produit->image)
                            <img class="card-img-top" src="{{ asset('produitimage/' . $produit->image) }}" alt="{{ $produit->nom }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $produit->nom }}</h5>
                            <p class="card-text">{{ $produit->description }}</p>
                            <p class="card-text"><strong>Catégorie:</strong> {{ $produit->categorieProduit }}</p>
                            <p class="card-text"><strong>Prix:</strong> {{ $produit->prix }}</p>
                            <p class="card-text"><strong>Quantité en stock:</strong> {{ $produit->quantite_en_stock }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



   </section>