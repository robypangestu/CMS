<?php require_once '../layouts/header.php'; ?>

<?php
function dateY($tgl) {
  if(!is_null($tgl)) return date('d-m-Y', strtotime($tgl));
  else return '-';
}
?>

<style>
  table tr th:nth-child(1) {
    width: 5%;
    text-align: center;
  }
  table tr td:nth-child(1) {
    text-align: center;
  }
  @media print {
    .header, .footer, #btnPrint {
      display: none;
    }
    #areaPrint {
      display: block;
    }
  }
</style>

<div class="container" style="margin-top: 20px">
    <h3>Daftar Transaksi</h3>

    <button type="button" id="btnPrint" class="btn btn-primary" style="margin-bottom: 20px">Cetak</button>
    
    <div id="areaPrint">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Layanan</th>
            <th scope="col">Status</th>
            <th scope="col">Tgl Pemesanan</th>
            <th scope="col">Tgl Pengecekan</th>
            <th scope="col">Tgl Dibatalkan</th>
            <th scope="col">Tgl Mulai</th>
            <th scope="col">Tgl Selesai</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; $res = run("SELECT * FROM pemesanan JOIN layanan ON layanan.id = pemesanan.id_layanan"); ?>
          <?php while($item = mysqli_fetch_assoc($res)) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $item['nama'] ?></td>
              <td><?= $item['status'] ?></td>
              <td><?= dateY($item['tgl_pemesanan']) ?? '-' ?></td>
              <td><?= dateY($item['tgl_pengecekan']) ?? '-' ?></td>
              <td><?= dateY($item['tgl_dibatalkan']) ?? '-' ?></td>
              <td><?= dateY($item['tgl_mulai']) ?? '-' ?></td>
              <td><?= dateY($item['tgl_selesai']) ?? '-' ?></td>
              <td><?= $item['total'] ?? '-' ?></td>
            </tr>
          <?php endwhile ?>
        </tbody>
      </table>
    </div>
</div>

<?php require_once '../layouts/footer.php'; ?>