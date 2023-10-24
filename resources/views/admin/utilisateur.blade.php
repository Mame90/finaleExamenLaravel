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
    <h1>Liste des Utilisateurs</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
           
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->adresse }}</td>
                    <td>{{ $user->telephone }}</td>
                    
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="#" class="btn btn-warning"><i class="fas fa-eye"></i> </a>&ensp;
                    <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>&ensp;
                    <button class="btn btn-danger" onclick="suppression()"><i class="fas fa-trash"></i></button>

   
    </div>
</td>

</td>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

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

    <!-- Scroll to Top Button-->
    
@include('admin.script')



    // js pour la gestions  de ces elements suivant CRUD.  
   

</body>

</html>
