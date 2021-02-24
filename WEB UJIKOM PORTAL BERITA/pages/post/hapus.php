<?php 
ob_start();
include "../../inc/koneksi.php";


mysqli_query($koneksi, "DELETE FROM post WHERE id_post = '$_GET[id_post]' ")
or die(mysqli_error($koneksi));


header('location:../../admin/index.php?page=post');
 ?>
 
<!-- <meta http-equiv="refresh" content="2; url=Daftar.php?page=Petugas"> -->