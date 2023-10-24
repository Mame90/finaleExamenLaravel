<!-- resources/views/admin/users/list.blade.php -->

@extends('dashboard') <!-- Utilisez le layout approprié pour votre interface d'administration -->

@section('content')
    <h1>Liste des Utilisateurs</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <!-- Ajoutez des liens/actions pour gérer les utilisateurs (modifier, supprimer, etc.) -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
