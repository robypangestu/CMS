<?php require_once '../../config/db.php'; ?>
<?php require_once '../layouts/header.php'; ?>

<div class="card">
  <div class="card-body">
    <h3>Daftar Layanan</h3>

    <a href="layanan_tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Harga</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; $res = run("SELECT * FROM layanan"); ?>
        <?php while($item = mysqli_fetch_assoc($res)) : ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $item['nama'] ?></td>
            <td><?= $item['deskripsi'] ?></td>
            <td><?= $item['harga_awal'] ?> - <?= $item['harga_akhir'] ?></td>
            <td>
              <a href="layanan_hapus.php?id=<?= $item['id'] ?>" class="btn btn-danger" onclick="return confirm('Kamu yakin?')">Hapus</a>
              <span class="mx-1"></span>
              <a href="layanan_edit.php?id=<?= $item['id'] ?>" class="btn btn-warning">Edit</a>
            </td>
          </tr>
        <?php endwhile ?>
      </tbody>
    </table>
  </div>
</div>

<?php require_once '../layouts/footer.php'; ?>