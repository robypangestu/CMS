<?php require_once 'config/db.php'; ?>
<?php
    if (isset($_SESSION['admin']) ) {
        header("location: admin/layanan/layanan.php");
    }

    if (isset($_SESSION['pelanggan']) ) {
        header("location: admin/layanan/layanan.php");
    }
?>

<?php
    if (isset( $_POST['submit'] )) {
        $username = $_POST['username'];
        $password = base64_encode($_POST['password']);
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $hp = $_POST['hp'];
        $nama_perusahaan = $_POST['nama_perusahaan'];
        $alamat = $_POST['alamat'];

        if (run("INSERT INTO pelanggan(username, password, nama, email, no_hp, nama_perusahaan, alamat) VALUES ('$username', '$password', '$nama', '$email', '$hp', '$nama_perusahaan', '$alamat')")) {
            alert("Selamat akun mu telah dibuat", 'login.php');
        }else{
            var_dump(mysqli_error($conn));
            die();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cipta Manunggal Selaras - Daftar</title>

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="images/CMS.png" />
    <link rel="apple-touch-icon" href="images/CMS.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/CMS.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/CMS.png" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Selamat Bergabung!</h1>
                            </div>
                            <form class="user" action="" method="POST">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" placeholder="Masukan username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" placeholder="Masukan password">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user" placeholder="Masukan nama kamu">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" placeholder="Masukan email kamu">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="hp" class="form-control form-control-user" placeholder="Masukan nomor hp kamu">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nama_perusahaan" class="form-control form-control-user" placeholder="Masukan nama perusahaan">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control form-control-user" placeholder="Masukan alamat kamu">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>