<!DOCTYPE html>
<html lang="en">

<head>

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

                <!-- Topbar    le navbar-->
                
                 @include('admin.navbar')   
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
             

    <div class="container">
        <h1>Modifier un Produit</h1>
        <form method="POST" action="{{ url('produits.update', $produit->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom du Produit</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $produit->nom }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $produit->description }}</textarea>
            </div>
            <div class="form-group">
                <!-- Ajoutez d'autres champs de modification ici -->
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour le Produit</button>
        </form>
    </div>

      
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    
@include('admin.script')
</body>

</html>