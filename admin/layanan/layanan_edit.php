<?php require_once '../layouts/header.php'; ?>

<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(run("SELECT * FROM layanan WHERE id = $id"));

if(isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $harga_awal = $_POST['harga_awal'];
  $harga_akhir = $_POST['harga_akhir'];

  $res = run("UPDATE layanan SET nama = '$nama', deskripsi = '$deskripsi', harga_awal = $harga_awal, harga_akhir = $harga_akhir WHERE id = $id");
  if($res) {
    alert('Data berhasil diedit', 'layanan.php');
  }else{
    var_dump(mysqli_error($conn));
    die();
  }
}

?>

<div class="container" style="margin-top: 20px">
  <h3>Edit Layanan</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="">Nama layanan</label>
      <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" required>
    </div>
    <div class="form-group">
      <label for="">Deskripsi layanan</label>
      <textarea name="deskripsi" class="form-control" cols="5" rows="5" required><?= $data['deskripsi'] ?></textarea>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="">Harga Awal</label>
        <input type="number" class="form-control" name="harga_awal" value="<?= $data['harga_awal'] ?>" required>
      </div>
      <div class="col-md-6">
        <label for="">Harga Akhir</label>
        <input type="number" class="form-control" name="harga_akhir" value="<?= $data['harga_akhir'] ?>" required>
      </div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary" style="margin-top: 20px; margin-bottom: 20px;">Edit</button>
  </form>
</div>

<?php require_once '../layouts/footer.php'; ?>