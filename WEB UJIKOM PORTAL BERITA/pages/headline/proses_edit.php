<?php
include ("../../inc/koneksi.php");
	$satu   =	mysqli_real_escape_string($koneksi, $_POST['id_post']);	
	$dua   =	mysqli_real_escape_string($koneksi, $_POST['id_headline']);	

$query = mysqli_query ($koneksi,"UPDATE headline SET 
	id_post = '$satu'
	WHERE headline.id_headline='$dua';")
 or die(mysqli_error($koneksi));

 header('location:../../admin/index.php?page=headline');

 ?>

