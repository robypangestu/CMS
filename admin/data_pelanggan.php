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
        <title>Data Admin Dashboard - Halo Bangun</title>
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
            
            <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

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
                                        <h4 class="page-title">Layanan Kontruksi</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="table-rep-plugin">
                                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                    <table id="tech-companies-1" class="table  table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Layanan</th>
                                                            <th>Kategori</th>
                                                            <th data-priority="1">Alamat</th>
                                                            <th data-priority="2">Luas Bangun</th>
                                                            <th data-priority="3">Harga /m2</th>
                                                            <th data-priority="4">Estimasi Biaya</th>
                                                            <th data-priority="5">Keterangan</th>
                                                            <th data-priority="6">Nama Pelanggan</th>
                                                            <th data-priority="7">Nomor Telepon</th>
                                                            <th data-priority="8">Email</th>
                                                            <th data-priority="9">Pemberi Referensi</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        require("app/database/connect.php");
                                                        $no =1;    
                                                        $query=mysqli_query($conn, "SELECT * FROM kontruksi")or die(mysqli_error());
                                                        while($data=mysqli_fetch_array($query)): 
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $no; ?></td>
                                                                <td><?= $data['sub_layanan']?></td>
                                                                <td><?= $data['kategori']?></td>
                                                                <td><?= $data['alamat']?></td>
                                                                <td><?= $data['luas_bangun']?></td>
                                                                <td><?= $data['harga_m2']?></td>
                                                                <td><?= $data['estimasi_biaya']?></td>
                                                                <td><?= $data['keterangan']?></td>
                                                                <td><?= $data['nama']?></td>
                                                                <td><?= $data['no_telepon']?></td>
                                                                <td><?= $data['email']?></td>
                                                                <td><?= $data['pemberi_referensi']?></td>
                                                            </tr>
                                                        <?php $no++; endwhile; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
            
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            



                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Layanan Renovasi</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="table-rep-plugin">
                                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                    <table id="tech-companies-1" class="table  table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th data-priority="1">Alamat</th>
                                                            <th data-priority="2">Luas Bangun</th>
                                                            <th data-priority="5">Tipe</th>
                                                            <th data-priority="6">Nama Pelanggan</th>
                                                            <th data-priority="7">Nomor Telepon</th>
                                                            <th data-priority="8">Email</th>
                                                            <th data-priority="9">Pemberi Referensi</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        require("app/database/connect.php");
                                                        $no =1;    
                                                        $query=mysqli_query($conn, "SELECT * FROM renovasi")or die(mysqli_error());
                                                        while($data=mysqli_fetch_array($query)): 
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $no; ?></td>
                                                                <td><?= $data['alamat']?></td>
                                                                <td><?= $data['luas_bangun']?></td>
                                                                <td><?= $data['tipe']?></td>
                                                                <td><?= $data['nama']?></td>
                                                                <td><?= $data['no_telepon']?></td>
                                                                <td><?= $data['email']?></td>
                                                                <td><?= $data['pemberi_referensi']?></td>
                                                            </tr>
                                                        <?php $no++; endwhile; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
            
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Layanan Desain Arsitektur</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="table-rep-plugin">
                                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                    <table id="tech-companies-1" class="table  table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th data-priority="1">Alamat</th>
                                                            <th data-priority="2">Luas Tanah</th>
                                                            <th data-priority="2">Kategori</th>
                                                            <th data-priority="2">Luas Bangun</th>
                                                            <th data-priority="5">Harga m/2</th>
                                                            <th data-priority="6">Estimasi Biaya</th>
                                                            <th data-priority="6">Tipe</th>
                                                            <th data-priority="6">Nama Pelanggan</th>
                                                            <th data-priority="7">Nomor Telepon</th>
                                                            <th data-priority="8">Email</th>
                                                            <th data-priority="9">Pemberi Referensi</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        require("app/database/connect.php");
                                                        $no =1;    
                                                        $query=mysqli_query($conn, "SELECT * FROM desain_arsitektur")or die(mysqli_error());
                                                        while($data=mysqli_fetch_array($query)): 
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $no; ?></td>
                                                                <td><?= $data['alamat']?></td>
                                                                <td><?= $data['luas_tanah']?></td>
                                                                <td><?= $data['kategori1']?></td>
                                                                <td><?= $data['luas_bangun1']?></td>
                                                                <td><?= $data['harga_m21']?></td>
                                                                <td><?= $data['estimasi_biaya1']?></td>
                                                                <td><?= $data['tipe']?></td>
                                                                <td><?= $data['nama']?></td>
                                                                <td><?= $data['no_telepon']?></td>
                                                                <td><?= $data['email']?></td>
                                                                <td><?= $data['pemberi_referensi']?></td>
                                                            </tr>
                                                        <?php $no++; endwhile; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
            
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->




                              
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Layanan Pembuatan Pagar</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="table-rep-plugin">
                                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                    <table id="tech-companies-1" class="table  table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th data-priority="1">Alamat</th>
                                                            <th data-priority="2">Luas Bangun</th>
                                                            <th data-priority="5">Harga m/2</th>
                                                            <th data-priority="6">Estimasi Biaya</th>
                                                            <th data-priority="6">Keterangan</th>
                                                            <th data-priority="6">Nama Pelanggan</th>
                                                            <th data-priority="7">Nomor Telepon</th>
                                                            <th data-priority="8">Email</th>
                                                            <th data-priority="9">Pemberi Referensi</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        require("app/database/connect.php");
                                                        $no =1;    
                                                        $query=mysqli_query($conn, "SELECT * FROM pembuatan_pagar")or die(mysqli_error());
                                                        while($data=mysqli_fetch_array($query)): 
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $no; ?></td>
                                                                <td><?= $data['alamat']?></td>
                                                                <td><?= $data['luas_bangun1']?></td>
                                                                <td><?= $data['harga_m21']?></td>
                                                                <td><?= $data['estimasi_biaya1']?></td>
                                                                <td><?= $data['keterangan']?></td>
                                                                <td><?= $data['nama']?></td>
                                                                <td><?= $data['no_telepon']?></td>
                                                                <td><?= $data['email']?></td>
                                                                <td><?= $data['pemberi_referensi']?></td>
                                                            </tr>
                                                        <?php $no++; endwhile; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
            
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                                  
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Layanan Partisi Alumunium</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="table-rep-plugin">
                                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                    <table id="tech-companies-1" class="table  table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th data-priority="1">Alamat</th>
                                                            <th data-priority="2">Luas Bangun</th>
                                                            <th data-priority="5">Harga m/2</th>
                                                            <th data-priority="6">Estimasi Biaya</th>
                                                            <th data-priority="6">Keterangan</th>
                                                            <th data-priority="6">Nama Pelanggan</th>
                                                            <th data-priority="7">Nomor Telepon</th>
                                                            <th data-priority="8">Email</th>
                                                            <th data-priority="9">Pemberi Referensi</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        require("app/database/connect.php");
                                                        $no =1;    
                                                        $query=mysqli_query($conn, "SELECT * FROM partisi_alumunium")or die(mysqli_error());
                                                        while($data=mysqli_fetch_array($query)): 
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $no; ?></td>
                                                                <td><?= $data['alamat']?></td>
                                                                <td><?= $data['luas_bangun1']?></td>
                                                                <td><?= $data['harga_m21']?></td>
                                                                <td><?= $data['estimasi_biaya1']?></td>
                                                                <td><?= $data['keterangan']?></td>
                                                                <td><?= $data['nama']?></td>
                                                                <td><?= $data['no_telepon']?></td>
                                                                <td><?= $data['email']?></td>
                                                                <td><?= $data['pemberi_referensi']?></td>
                                                            </tr>
                                                        <?php $no++; endwhile; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
            
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Layanan Solid Surface</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="table-rep-plugin">
                                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                    <table id="tech-companies-1" class="table  table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th data-priority="1">Alamat</th>
                                                            <th data-priority="2">Luas Bangun</th>
                                                            <th data-priority="5">Harga m/2</th>
                                                            <th data-priority="6">Estimasi Biaya</th>
                                                            <th data-priority="6">Keterangan</th>
                                                            <th data-priority="6">Nama Pelanggan</th>
                                                            <th data-priority="7">Nomor Telepon</th>
                                                            <th data-priority="8">Email</th>
                                                            <th data-priority="9">Pemberi Referensi</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        require("app/database/connect.php");
                                                        $no =1;    
                                                        $query=mysqli_query($conn, "SELECT * FROM solid_surface")or die(mysqli_error());
                                                        while($data=mysqli_fetch_array($query)): 
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $no; ?></td>
                                                                <td><?= $data['alamat']?></td>
                                                                <td><?= $data['luas_bangun1']?></td>
                                                                <td><?= $data['harga_m21']?></td>
                                                                <td><?= $data['estimasi_biaya1']?></td>
                                                                <td><?= $data['keterangan']?></td>
                                                                <td><?= $data['nama']?></td>
                                                                <td><?= $data['no_telepon']?></td>
                                                                <td><?= $data['email']?></td>
                                                                <td><?= $data['pemberi_referensi']?></td>
                                                            </tr>
                                                        <?php $no++; endwhile; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
            
                                            </div>
            
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

        <script src="assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
        <script src="assets/plugins/tiny-editable/numeric-input-example.js"></script>
        <script src="assets/plugins/tabledit/jquery.tabledit.js"></script> 
        <script src="assets/pages/edit-table.js"></script>  

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>