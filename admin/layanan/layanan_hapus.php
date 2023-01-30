<?php

require_once '../../config/db.php';

if (isset($_GET['id'])) {
	
	$id = $_GET['id'];
	if (run("DELETE FROM layanan WHERE id = $id")) {
		alert("Data berhasil dihapus", 'layanan.php');
	}else{
		var_dump(mysqli_error($link));
		die();
	}

}