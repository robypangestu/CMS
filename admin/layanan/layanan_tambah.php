<?php require_once '../../config/db.php'; ?>
<?php require_once '../layouts/header.php'; ?>

<?php

if(isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $harga_awal = $_POST['harga_awal'];
  $harga_akhir = $_POST['harga_akhir'];

  $res = run("INSERT INTO layanan(nama, deskripsi, harga_awal, harga_akhir) VALUES ('$nama', '$deskripsi', $harga_awal, $harga_akhir)");
  if($res) {
    alert('Data berhasil ditambahkan', 'layanan.php');
  }else{
    var_dump(mysqli_error($conn));
    die();
  }
}

?>

<div class="card">
  <div class="card-body">
    <h3>Tambah Layanan</h3>
    <form action="" method="POST">
      <div class="form-group">
        <label for="">Nama layanan</label>
        <input type="text" class="form-control" name="nama" required>
      </div>
      <div class="form-group">
        <label for="">Deskripsi layanan</label>
        <textarea name="deskripsi" class="form-control" cols="5" rows="3" required></textarea>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="">Harga Awal</label>
          <input type="number" class="form-control" name="harga_awal" required>
        </div>
        <div class="col-md-6">
          <label for="">Harga Akhir</label>
          <input type="number" class="form-control" name="harga_akhir" required>
        </div>
      </div>

      <button type="submit" name="submit" class="btn btn-primary mt-3">Tambah</button>
    </form>
  </div>
</div>

<?php require_once '../layouts/footer.php'; ?>