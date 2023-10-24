
   @include('admin.css')
   <!--  cecci sont des bibliotheque de SweetAlert2 afin de gerer la partie supression avec du js afin de
permettre la page beaucoup plus pro et conviviale -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>

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
                 <div class="container">
    
    @if(session('success'))
<div class="alert alert-success">
        {{session('success')}}
</div>
@endif
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
               
                <h1 class="display-4 text-primary" style="text-align: center;font-weight:100">Liste des utilisateur</h1>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th><i class="fa fa-bars" aria-hidden="true"></i></th>
                <th>Sr</th>
                <th>Prenom et Nom</th>
                <th>Email</th>
                <th>Adressse</th>
                <th>Telephone</th>
                <th>status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                <td><i class="fa fa-bars" aria-hidden="true"></i></td>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->adresse }}</td>
                    <td>{{ $user->telephone }}</td>
                    <td>{{ $user->is_active == 1 ? 'Inactive' : 'Active' }}</td>
                        

                    
                    <td>
                        <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-info mr-2">




                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('produits.edit', ['produit' => $user->id]) }}" class="btn btn-primary mr-2" title="Éditer le produit">
    <i class="fas fa-edit"></i>
</a>

                            <button class="btn btn-danger btn-delete" 
                                data-url="{{ route('produits.destroy', $user->id) }}" 
                                data-id="{{ $user->id }}">
                                <i class="fas fa-trash"></i>
                            </button>

                            <form action="{{ route('produits.destroy', $user->id) }}" method="POST">
                           
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
         
                <!-- /.container-fluid

            </div>
             End of Main Content -->

            <!-- Footer -->
  @include('admin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    
@include('admin.script')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Écoutez les clics sur les boutons de suppression
        const deleteButtons = document.querySelectorAll('.btn-delete');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const url = this.getAttribute('data-url');
                const productId = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Confirmation',
                    text: 'Êtes-vous sûr de vouloir supprimer cet utilisateur ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler',
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(url, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire('Succès', data.message, 'success');

                                // Actualisez la page
                                window.location.reload();
                            } else {
                                Swal.fire('Erreur', data.message, 'error');
                            }
                        })
                        .catch(error => {
                            console.error('Erreur lors de la suppression :', error);
                        });
                    }
                });
            });
        });
    });
</script>


    </body>
   
