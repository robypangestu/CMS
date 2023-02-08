<?php require_once '../layouts/header.php'; ?>

<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(run("SELECT *, layanan.nama AS nama_layanan, pelanggan.nama AS nama_pelanggan, pemesanan.id AS id_pemesanan FROM pemesanan JOIN layanan ON layanan.id = pemesanan.id_layanan JOIN pelanggan ON pelanggan.id = pemesanan.id_pelanggan WHERE pemesanan.id = $id"));

function dateY($tgl) {
  if(!is_null($tgl)) return date('d-m-Y', strtotime($tgl));
  else return '-';
}
?>

<style>
  table tr td {
    padding: 10px;
  }
  table tr td:nth-child(1) {
    width: 20%;
    font-weight: bold;
  }
  table tr td:nth-child(2) {
    width: 40px;
    text-align: center;
  }

  #titlePrint {
    display: none;
  }
  @media print {
    .header, .footer, #titleNotPrint, #btnPrint {
      display: none;
    }
    #areaPrint, #titlePrint {
      display: block;
    }
  }
</style>

<div class="container" style="margin-top: 20px">
  <h3 id="titleNotPrint">Detail Transaksi</h3>
  <h3 id="titlePrint">Transaksi Layanan <?= $data['nama_layanan'] ?></h3>

  <button type="button" id="btnPrint" class="btn btn-primary" style="margin-bottom: 20px">Cetak</button>
  <div id="areaPrint">
    <table>
      <tr>
        <td>Status</td>
        <td>:</td>
        <td><?= $data['status'] ?></td>
      </tr>
      <tr>
        <td>Nama layanan</td>
        <td>:</td>
        <td><?= $data['nama_layanan'] ?></td>
      </tr>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><?= $data['username'] ?></td>
      </tr>
      <tr>
        <td>Nama pelanggan</td>
        <td>:</td>
        <td><?= $data['nama_pelanggan'] ?></td>
      </tr>
      <tr>
        <td>Nama perusahaan</td>
        <td>:</td>
        <td><?= $data['nama_perusahaan'] ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?= $data['alamat'] ?></td>
      </tr>
      <tr>
        <td>Nomor HP</td>
        <td>:</td>
        <td><?= $data['no_hp'] ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><?= $data['email'] ?></td>
      </tr>
      <tr>
        <td>Tanggal pemesanan</td>
        <td>:</td>
        <td><?= dateY($data['tgl_pemesanan']) ?></td>
      </tr>
      <tr>
        <td>Tanggal pengecekan</td>
        <td>:</td>
        <td><?= dateY($data['tgl_pengecekan']) ?></td>
      </tr>
      <tr>
        <td>Tanggal dibatalkan</td>
        <td>:</td>
        <td><?= dateY($data['tgl_dibatalkan']) ?></td>
      </tr>
      <tr>
        <td>Tanggal mulai</td>
        <td>:</td>
        <td><?= dateY($data['tgl_mulai']) ?></td>
      </tr>
      <tr>
        <td>Tanggal selesai</td>
        <td>:</td>
        <td><?= dateY($data['tgl_selesai']) ?></td>
      </tr>
      <tr>
        <td>Total</td>
        <td>:</td>
        <td><?= dateY($data['total']) ?></td>
      </tr>
    </table>
  </div>

  <div class="mb-4"></div>
  <?php if($data['status'] == 'pemesanan') { ?>
    <a href="transaksi_pengecekan.php?id=<?= $data['id_pemesanan'] ?>" class="btn btn-primary">Lanjutkan Pengecekan</a>
    <a href="transaksi_dibatalkan.php?id=<?= $data['id_pemesanan'] ?>" class="btn btn-danger">Batalkan</a>
  <?php } else if($data['status'] == 'pengecekan') { ?>
    <a href="transaksi_diselesaikan.php?id=<?= $data['id_pemesanan'] ?>" class="btn btn-primary">Lanjutkan Finalisasi</a>
  <?php } ?>
  <div class="margin-bottom-50"></div>
</div>

<?php require_once '../layouts/footer.php'; ?>