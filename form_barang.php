<html>
<body>
<style >
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }
    </style>


<form name="frm_barang" action="proses_simpan_barang.php" method="POST">
<table width=400 border=1 align=center>

        <tr>
            <td colspan=3 align=center>Form Data Barang </td>
        </tr>
 
        <tr>
            <td><h4>Kode Produk : </h4></td>
            <td><input type="text" name="kode_produk"></td>
        </tr>

        <tr>
            <td><h4>Nama Produk : </h4></td>
            <td><input type="text" name="nama_produk" id="namab"></td>
        </tr>

        <tr>
            <td><h4>Harga Produk : </h4></td>
            <td><input name="harga_produk" type="text" id="harba"></td>
        </tr>

        <tr>
            <td> <h4>Satuan Produk : </h4></td>
                    <td><select name="satuan_produk" id="stn">
                    <option value="null">Pilih satuan</option>
                        <option value="pcs">Pieces</option>
                        <option value="perbox">Perbox</option>
                        <option value="KG">KG</option>
                    </select>
            </td>
        </tr>

        <tr>
            <td><h4>Kategori Produk : </h4></td>
            <td><select name="kategori_produk" id="kate">
                <option value="null">Pilih Kategori</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="lainnya">Lainnya</option>
            </select></td>
        </tr>
        

        <tr>
            <td><h4>Stok Produk : </h4></td>
            <td><input type="number" name="Stok_barang" id="jumlah"></td>
        </tr>

        <tr>
            <td><h4>URL Gambar : </h4></td>
            <td><input type="text" name="url_gambar"></td>
        </tr>

        <tr>
            <td colspan=3><input type="submit" name="btsimpan" id="simpen" value="Simpan"></td>
        </tr>
    </table>
    

<p>

	<?php
	include('lib/koneksi.php');
	$result = $con->query('SELECT * FROM `dt_barang` ');

	// if (isset($_GET['info'])) {
	// 	echo $_GET['info'];
	// }
?>


     <table border="1" width="600px" align="center">
       <tr>
       	   <th>No</th>
           <th>Kode produk</th>
           <th>Nama produk</th>
           <th>Harga produk</th>
           <th>Satuan produk</th>
           <th>Kategori produk</th>
           <th>URL Gambar</th>
           <th>Stok barang</th>
           <th>Modify</th>
       </tr>
<?php foreach ($result as $data){

	?>
	 <tr><td><?php echo $data['No']; ?></td>
	 <td><?php echo $data['Kode_produk']; ?></td>
	 <td><?php echo $data['Nama_produk']; ?></td>
	 <td><?php echo $data['Harga_produk']; ?></td>
	 <td><?php echo $data['Satuan_produk']; ?></td>
	 <td><?php echo $data['Kategori_produk']; ?></td>
	 <td><img src='<?= $data['URL_gambar']; ?>' width=100></td>
     <?php $stock = $data['Stok_barang'];
        echo ($data['Stok_barang'] < 5) ? "<td style='background:red; color:#fff'>$stock</td>" : "<td>$stock</td>"; ?>
	 <td><a href="form_edit_barang.php?key=<?php echo $data['No']; ?>">edit</a> | <p></p> <a href="delete_barang.php?key=<?php echo $data['No'];?>">Delete</a></td>
	</tr>
<?php } ?>
   </table>

   </p>

</form>
</body>
</html>