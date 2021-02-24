<?php 
include ("../../inc/koneksi.php");
$foto 	= @$_FILES['file']['tmp_name'];
$target = '../../pages/images1/';
$gambar = @$_FILES['file']['name'];


	$update_logo = move_uploaded_file($foto, $target.$gambar);
	if ($update_logo) {
		$query = mysqli_query($koneksi,"INSERT INTO `foto` SET foto='$gambar' ") or die(mysqli_error());
}
header('location:../../author/index.php?page=foto1');
 ?>