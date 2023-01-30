<?php require_once '../../config/db.php'; ?>
<?php require_once '../layouts/header.php'; ?>

<?php
function dateY($tgl) {
  if(!is_null($tgl)) return date('d-m-Y', strtotime($tgl));
  else return '-';
}
?>

<div class="card">
  <div class="card-body">
    <h3>Detail Transaksi</h3>

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">Nama Layanan</th>
            <th scope="col">Status</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; $res = run("SELECT pemesanan.id, pelanggan.nama_perusahaan, layanan.nama, pemesanan.status FROM pemesanan JOIN layanan ON layanan.id = pemesanan.id_layanan JOIN pelanggan ON pelanggan.id = pemesanan.id_pelanggan"); ?>
          <?php while($item = mysqli_fetch_assoc($res)) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $item['nama_perusahaan'] ?></td>
              <td><?= $item['nama'] ?></td>
              <td><?= $item['status'] ?></td>
              <td><a href="transaksi_detail.php?id=<?= $item['id'] ?>" class="btn btn-primary">Detail</a></td>
            </tr>
          <?php endwhile ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require_once '../layouts/footer.php'; ?>