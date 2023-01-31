<?php require_once '../layouts/header.php'; ?>

<?php

if(isset($_POST['submit'])) {
  $tgl_mulai = $_POST['tgl_mulai'];
  $tgl_selesai = $_POST['tgl_selesai'];
  $total = $_POST['total'];

  $id = $_GET['id'];
	if (run("UPDATE pemesanan SET tgl_mulai = '$tgl_mulai', tgl_selesai = '$tgl_selesai', total = $total, status = 'diselesaikan' WHERE id = $id")) {
		alert("Proses diubah", 'transaksi_detail.php?id=' . $id);
	}else{
		var_dump(mysqli_error($link));
		die();
	}
}

?>

<div class="container" style="margin-top: 20px">
    <h3>Penyelesaian Transaksi</h3>
    <form action="" method="POST">
      <div class="form-group">
        <label for="">Tanggal mulai</label>
        <input type="date" class="form-control" name="tgl_mulai" required>
      </div>
      <div class="form-group">
        <label for="">Tanggal selesai</label>
        <input type="date" class="form-control" name="tgl_selesai" required>
      </div>
      <div class="form-group">
        <label for="">Total</label>
        <input type="number" class="form-control" name="total" required>
      </div>
      

      <button type="submit" name="submit" class="btn btn-primary mt-3">Selesaikan</button>
    </form>
</div>
<div class="margin-bottom-50"></div>
<?php require_once '../layouts/footer.php'; ?>