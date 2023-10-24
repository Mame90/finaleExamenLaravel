<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            font-size: 36px;
            color: #4031C2;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 15px;
        }

        table th,
        table td {
            padding: 8px 12px;
            text-align: left;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #4031C2;
            color: #fff;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ul li {
            margin-bottom: 4px;
        }
    </style>

    @include('admin.css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.sidebare')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar le navbar -->
                @include('admin.navbar')

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
             <!-- ... (votre code HTML précédent) -->

<!-- Begin Page Content -->
<h1>Liste des Commandes</h1>
<table>
    <thead>
        <tr>
            <th>ID Client</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>Date de commande</th>
            <th>État</th>
            <th>Produits</th> <!-- Nouvelle colonne pour afficher les produits -->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($utilisateursAvecCommandes as $client)
            @foreach ($client->commandes as $commande)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->adresse }}</td>
                    <td>{{ $client->telephone }}</td>
                    <td>{{ $commande->date_commande }}</td>
                    <td>
    @if ($commande->etat === 'En attente de validation')
        <span class="badge badge-warning">En attente de validation</span>
    @elseif ($commande->etat === 'Validée')
        <span class="badge badge-success">Validée</span>
    @else
        <span class="badge badge-secondary">{{ $commande->etat }}</span>
    @endif
</td>

                    <td>
                        <ul>
                            @foreach ($commande->produits as $produit)
                                <li>
                                    {{ $produit->nom }} (Quantité: {{ $produit->pivot->quantite }}) sachet <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="{{ asset('produitimage/' . $produit->image) }}" alt="{{ $produit->nom }}" width="70">
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <!-- Vos autres colonnes et liens ici -->

                    <td>
    <a href="{{ route('commandes.show', $commande->id) }}" class="btn btn-info btn-sm">Voir les détails</a>
    @if ($commande->etat === 'En attente de validation')
        <a href="{{ route('commandes.validers', $commande->id) }}" class="btn btn-success btn-sm">Valider</a>
        <a href="{{ route('commandes.annuler', $commande->id) }}" class="btn btn-danger btn-sm">Annuler</a>
    @endif
</td>


                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>

<!-- ... (votre code HTML suivant) -->

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button -->
    @include('admin.script')

    <!-- js pour la gestion de ces éléments suivant CRUD. -->

</body>

</html>
