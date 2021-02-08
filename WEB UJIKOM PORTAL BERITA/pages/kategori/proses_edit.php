<?php
include ("../../inc/koneksi.php");
	$satu   =	mysqli_real_escape_string($koneksi, $_POST['id_kategori']);	
	$dua  	=	mysqli_real_escape_string($koneksi, $_POST['nama_kategori']);

if ($satu=="" || $dua=="" ){

}

else {

$query = mysqli_query ($koneksi,"UPDATE kategori SET 
	id_kategori = '$satu' ,     	
	nama_kategori = '$dua' 
	WHERE kategori.id_kategori='$satu';")
 or die(mysqli_error($koneksi));

 header('location:../../admin/index.php?page=kategori');

?>		

<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Data Berhasil di Tambahkan</h4>

</div>
<?php 
}
 ?>

