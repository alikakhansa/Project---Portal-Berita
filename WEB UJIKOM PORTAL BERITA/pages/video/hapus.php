<?php 
ob_start();
include '../../inc/koneksi.php';
$id = $_GET['id_video'];

mysqli_query($koneksi, "DELETE FROM video WHERE id_video='$id'")or die(mysqli_error($koneksi));
header('location:../../admin/index.php?page=video');
 ?>