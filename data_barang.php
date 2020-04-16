<?php
	include('lib/koneksi.php');
	$result = $con->query('SELECT * FROM `dt_barang` ');


?>



 <table border="1" width="600px" align="center">
 	
            <td colspan=9 align=center>Data Barang </td>
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
     <td><?php echo $data['No']; ?></td>
	 <td><?php echo $data['Kode_produk']; ?></td>
	 <td><?php echo $data['Nama_produk']; ?></td>
	 <td><?php echo $data['Harga_produk']; ?></td>
	 <td><?php echo $data['Satuan_produk']; ?></td>
	 <td><?php echo $data['Kategori_produk']; ?></td>
	 <td><?php echo $data['URL_gambar']; ?></td>
	 <?php $stock = $data['Stok_barang'];
        echo ($data['Stok_barang'] < 5) ? "<td style='background:red; color:#fff'>$stock</td>" : "<td>$stock</td>"; ?>
	 <td><a href="form_edit_barang.php?key=<?php echo $data['No']; ?>">edit</a> | <p></p> <a href="delete_barang.php?key=<?php echo $data['No'];?>">Delete</a></td>
	</tr>
	
<?php } ?>

</table>
</body>
</html>
	
	