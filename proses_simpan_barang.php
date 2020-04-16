<?php
	include('lib/koneksi.php');


$Kodee_produk = $_POST['kode_produk'];
$Namaa_produk = $_POST['nama_produk'];
$Hargaa_produk = $_POST['harga_produk'];
$Satuann_produk = $_POST['satuan_produk'];
$Kategorii_produk = $_POST['kategori_produk'];
$URL_gambarr = $_POST['url_gambar'];
$stokk_barang = $_POST['Stok_barang'];
	// print_r($_POST);

$result = $con->exec("INSERT INTO `dt_barang` (`No`, `Kode_produk`, `Nama_produk`, `Harga_produk`, `Satuan_produk`, `Kategori_produk`, `URL_gambar`, `Stok_barang`) VALUES (NULL, '$Kodee_produk', '$Namaa_produk', '$Hargaa_produk', '$Satuann_produk', '$Kategorii_produk', '$URL_gambarr', '$stokk_barang')");
echo $result;


if ($result==TRUE) {
	echo "Data Tersimpan Ke Database";
	header("location: form_barang.php");
}else{
	echo "Data Gagal Disimpan";
}
?>