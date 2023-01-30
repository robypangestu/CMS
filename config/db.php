<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'cms');

function run($sql)
{
  global $conn;
  return mysqli_query($conn, $sql);
}

function alert ($pesan, $lokasi = null)
{
	echo "
		<script>
			alert('$pesan');
			window.location.href = '$lokasi';
		</script>
	";
}