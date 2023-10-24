


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
                <div class="container">
             

<div class="container">
    <h1>Ajouter un Nouveau utilisateur</h1>
    @if(session('success'))
<div class="alert alert-success">
        {{session('success')}}
</div>

@endif
</div>
<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block"><img src="assets\img\blog\blog-1.jpg" width="100%" height="100%" alt=""></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">creer un compte user!</h1>
                    </div>
                    <form class="user" action="" method="post">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                   name="name" placeholder="prenom et nom">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                              name="email"  placeholder=" Address email ">
                                <div class="form-group row"> <div class="mt-2"></div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Adressse">
                            </div>
                            </div>


                            <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control form-control-user"
                                name="telephone"    id="exampleInputPassword" placeholder="telephone">
                            </div>


                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user"
                                name="password"    id="exampleInputPassword" placeholder="mot de passe">
                            </div>
                           
                        </div>
                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Enregistrer
                        </a>
                        <hr>
                        
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Mot de passe oublier?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="login.html">Compte existe deja? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>



                <!-- Begin Page Content -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    
@include('admin.script')
</body>

</html>