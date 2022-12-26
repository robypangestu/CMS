<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Tambah Admin Dashboard - Halo Bangun</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>  
            

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>  
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Edit Admin</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-md-12 col-xl-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                                            <form action="edit_admin.php" class="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>" >
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" required placeholder="Masukan Username" name="username" value="<?php echo $username; ?>"/>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>E-Mail</label>
                                                    <div>
                                                        <input type="email" class="form-control" required placeholder="Masukan Email" name="email" value="<?php echo $email; ?>"/>
                                                    </div>
                                                </div>
            
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <div>
                                                        <input type="password" class="form-control" required placeholder="Password"  name="password" value="<?php echo $password; ?>"/>
                                                    </div>
                                                    <div class="m-t-10">
                                                        <input type="password" class="form-control" required name="passwordConf" value="<?php echo $passwordConf; ?>" placeholder="Re-Type Password"/>
                                                    </div>
                                                </div>
                                                <div>
                                                    <?php if (isset($admin) && $admin == 1): ?>
                                                        <label>
                                                            <input type="checkbox" name="admin" checked>
                                                            Admin
                                                        </label>
                                                    <?php else: ?>
                                                        <label>
                                                            <input type="checkbox" name="admin">
                                                            Admin
                                                        </label>
                                                    <?php endif; ?> 
                                                </div>
            
                                                <div class="form-group mb-0">
                                                    <div>
                                                        <button type="submit" name="create-admin" class="btn btn-secondary waves-effect waves-light">
                                                            Tambah Admin
                                                        </button>
                                                        <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                            </div> <!-- end row -->


                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2022 Dashboard by Respace.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Parsley js -->
        <script src="assets/plugins/parsleyjs/parsley.min.js"></script>
        <script src="assets/pages/form-validation.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>