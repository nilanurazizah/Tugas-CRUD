<?php
    include('lib/koneksi.php');
    $pk = $_POST['No'];
    $Kodee_produkk = $_POST['kode_produk'];
    $Namaa_produkk = $_POST['nama_produk'];
    $Hargaa_produkk = $_POST['harga_produk'];
    $Satuann_produkk = $_POST['satuan_produk'];
    $Kategorii_produkk = $_POST['kategori_produk'];
    $URLL_gambarr = $_POST['url_gambar'];
    $stokk_barangg = $_POST['stok_barang'];

    $result = $con->query("UPDATE `dt_barang` SET `Kode_produk` = '$Kodee_produkk', `Nama_produk` = '$Namaa_produkk', 
    `Harga_produk` = '$Hargaa_produkk', `Satuan_produk` = '$Satuann_produkk', `Kategori_produk` = '$Kategorii_produkk', 
    `URL_gambar` = '$URLL_gambarr', `Stok_barang` = '$stokk_barangg' WHERE `dt_barang`.`No` = $pk ");

// $Noo = $_POST['No'];
  

// $result = $con->query("UPDATE `dt_barang` SET `Kode_produk` = '$Kodee_produkk', `Nama_produk` = '$Namaa_produkk', `Harga_produk` = '$Hargaa_produkk', `Satuan_produk` = '$Satuann_produkk', `Kategori_produk` = '$Kategorii_produkk', `URL_gambar` = '$URLL_gambarr', `Stok_barang` = '$stokk_barangg' WHERE `dt_barang`.`No` = '$Noo'");

    if($result == TRUE){
        echo "Data Berhasil Di update";
        // header("location: form_barang.php");
        // echo "yeay";
    }else{
        echo "Data Gagal Diupdate";
    }
    // print_r($result);
?>
