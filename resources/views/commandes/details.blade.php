<h1>Détails de la Commande</h1>
<p>Numéro de commande : {{ $commande->id }}</p>
<p>Description : {{ $commande->description }}</p>
<p>État : {{ $commande->etat }}</p>
<a href="{{ route('commandes.index') }}" class="btn btn-primary">Retour à la liste des commandes</a>
