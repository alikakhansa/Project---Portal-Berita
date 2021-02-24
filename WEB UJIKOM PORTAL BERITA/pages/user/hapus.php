<?php 
ob_start();
include '../../inc/koneksi.php';
$id = $_GET['id_login'];

mysqli_query($koneksi, "DELETE FROM login WHERE id_login='$id'")or die(mysqli_error($koneksi));
header('location:../../admin/index.php?page=user');
 ?>