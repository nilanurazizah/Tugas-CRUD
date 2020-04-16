<?php
	include('lib/koneksi.php');
	$key = $_GET['key'];
	$result = $con->query("DELETE FROM `dt_barang` WHERE `No` =$key");
	if ($result==TRUE) {
		echo "Data Berhasil Di Hapus";
	}else{
		echo "Data Gagal Di Hapus";
	}
?>