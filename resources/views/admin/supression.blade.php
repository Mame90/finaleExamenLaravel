
    <div class="container">
        <h1>Confirmation de Suppression</h1>
        <p>Êtes-vous sûr de vouloir supprimer cet utilisateur ?</p>
        <form method="POST" action="{{ url('admin.supression', $user->id) }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Oui, Supprimer</button>
            <a href="{{ url ('admin.list') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
