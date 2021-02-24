<?php 
include ("../../inc/koneksi.php");
$foto 	= @$_FILES['file']['tmp_name'];
$target = '../../pages/images/profile/';
$gambar = @$_FILES['file']['name'];


	$update_logo = move_uploaded_file($foto, $target.$gambar);
	if ($update_logo) {
		$query = mysqli_query($koneksi,"UPDATE `login` SET logo='$gambar' WHERE `id_instansi`='1' ") or die(mysqli_error());}

		header('location:../../admin/index.php?page=profil');
	
 ?>