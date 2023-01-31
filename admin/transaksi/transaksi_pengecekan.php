<?php

require_once '../../config/db.php';

if (isset($_GET['id'])) {
	
	$id = $_GET['id'];
	if (run("UPDATE pemesanan SET tgl_pengecekan = now(), status = 'pengecekan' WHERE id = $id")) {
		alert("Proses diubah", 'transaksi_detail.php?id=' . $id);
	}else{
		var_dump(mysqli_error($conn));
		die();
	}

}