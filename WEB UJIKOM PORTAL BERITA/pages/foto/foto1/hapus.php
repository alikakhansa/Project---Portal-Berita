<?php 
ob_start();
include '../../inc/koneksi.php';
$id = $_GET['id_foto'];

mysqli_query($koneksi, "DELETE FROM foto WHERE id_foto='$id'")or die(mysqli_error($koneksi));
header('location:../../author/index.php?page=foto1');
 ?>