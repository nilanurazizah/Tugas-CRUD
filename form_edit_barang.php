<html>
<body>
<form name="frm_barang" action="proses_edit_barang.php" method="POST">
<?php
    
    include('lib/koneksi.php');
    $pk = $_GET['key'];
    $result = $con->query("SELECT * FROM `dt_barang` WHERE `No`= $pk ");
    foreach($result as $data){

?>

<table width=400 border=1 align=center>

        <tr>
            <td colspan=3 align=center>Form Edit Barang </td>
        </tr>
 
        <tr>
            <td><h4><input type="hidden" name="No" value="<?php echo $data['No']; ?>">Kode Produk : </h4></td>
            <td><input type="text" name="kode_produk" value="<?php echo $data['Kode_produk']; ?>"></td>
        </tr>

        <tr>
            <td><h4>Nama Produk : </h4></td>
            <td><input type="text" name="nama_produk" id="namab" value="<?php echo $data['Nama_produk']; ?>"></td>
        </tr>

        <tr>
            <td><h4>Harga Produk : </h4></td>
            <td><input name="harga_produk" type="text" id="harba" value="<?php echo $data['Harga_produk']; ?>"></td>
        </tr>

        <tr>
            <td> <h4>Satuan Produk : </h4></td>
                    <td><select name="satuan_produk" id="stn">
                    <option <?php if($data['Satuan_produk']=="null"){ echo "selected=selected";}?> value="null">Pilih satuan</option>
                        <option <?php if($data['Satuan_produk']=="pieces"){ echo "selected=selected";}?> value="pcs">Pieces</option>
                        <option <?php if($data['Satuan_produk']=="perbox"){ echo "selected=selected";}?> value="Perbox">Perbox</option>
                        <option <?php if($data['Kategori_produk']=="kg"){ echo "selected=selected";}?> value="KG">KG</option>
                    </select>
            </td>
        </tr>

        <tr>
            <td><h4>Kategori Produk : </h4></td>
            <td><select name="kategori_produk" id="kate">
                <option <?php if($data['Kategori_produk']=="null"){ echo "selected=selected";}?> value="null">Pilih Kategori</option>
                <option <?php if($data['Kategori_produk']=="makanan"){ echo "selected=selected";}?> value="Makanan">Makanan</option>
                <option <?php if($data['Kategori_produk']=="minuman"){ echo "selected=selected";}?> value="Minuman">Minuman</option>
                <option <?php if($data['Kategori_produk']=="lainnya"){ echo "selected=selected";}?> value="Lainnya">Lainnya</option>
            </select></td>
        </tr>
        

        <tr>
            <td><h4>Stok Produk : </h4></td>
            <td><input type="number" name="stok_barang" id="jumlah" value="<?php echo $data['Stok_barang']; ?>"></td>
        </tr>

        <tr>
            <td><h4>URL Gambar : </h4></td>
            <td><input type="text" name="url_gambar" value="<?php echo $data['URL_gambar']; ?>"></td>
        </tr>

        <tr>
            <td colspan=3><input type="submit" name="btsimpan" id="simpen" value="Simpan"></td>
        </tr>

             
    </table>

    </form>
    <?php } ?>
</body>
</html>