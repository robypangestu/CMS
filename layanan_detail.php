<?php 
  include("path.php"); 
  include(ROOT_PATH . "/layouts/header.php");
?>

<?php
  $id = $_GET['id'];
  $data = mysqli_fetch_assoc(run("SELECT * FROM layanan WHERE id = $id"));
  
  $dataPemesanan = null;
  if(isset($_SESSION['pelanggan'])) {
    $id_pel = $_SESSION['pelanggan']['id'];
    $dataPemesanan = mysqli_fetch_assoc(run("SELECT * FROM pemesanan WHERE id_layanan = $id AND id_pelanggan = $id_pel ORDER BY id DESC LIMIT 1"));
  }

  if(isset($_POST['submit'])) {
    $id_pel = $_SESSION['pelanggan']['id'];
    $res = run("INSERT INTO pemesanan(id_layanan, id_pelanggan, id_admin, tgl_pemesanan) VALUES ($id, $id_pel, 1, now())");

    if($res) {
      alert('Pemesanan berhasil dilakukan', 'layanan_detail.php?id=' . $id);
    }else{
      var_dump(mysqli_error($conn));
      die();
    }
  }
?>

<div class="container" style="margin-top: 20px">
  <div class="row">
    <div class="col-sm-4 col-md-4 col-md-push-8">
      <h4 class="">Pesan Layanan</h4>
      <?php if(isset($_SESSION['pelanggan'])) : ?>
        <?php if(is_null($dataPemesanan) || $dataPemesanan['status'] == 'dibatalkan' || $dataPemesanan['status'] == 'diselesaikan') : ?>
          <form action="" method="POST">
            <h6 style="margin-bottom: 20px">Estimasi Harga : <?= $data['harga_awal'] ?> - <?= $data['harga_akhir'] ?></h6>
            <p>Note: Pastikan identitas profil mu sudah benar. Setelah kamu melakukan pemesanan, kami akan memproses dan mengubah status pemesananmu di halaman panel.</p>
            <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Kamu yakin ingin melakukan pemesanan?')">PESAN SEKARANG</button>
            <div class="margin-bottom-50"></div>
          </form>
        <?php else : ?>
          <p>Pemesanan sedang dilakukan</p>
        <?php endif ?>
      <?php else : ?>
        <p>Kamu harus login untuk melakukan pemesanan</p>
      <?php endif ?>
    </div>
    <div class="col-sm-8 col-md-8 col-md-pull-4">
      <div class="single-page">
        <div class="margin-bottom-30"></div>
        <h2 class="section-heading">
          <?= $data['nama'] ?>
        </h2>
        <p><?= $data['deskripsi'] ?></p>
        <div class="margin-bottom-50"></div>
      </div>
    </div>
  </div>
</div>

<?php include(ROOT_PATH . "/layouts/footer.php"); ?>