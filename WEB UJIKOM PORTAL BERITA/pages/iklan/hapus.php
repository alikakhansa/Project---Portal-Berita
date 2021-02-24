<?php 
ob_start();
include "../../inc/koneksi.php";


mysqli_query($koneksi, "DELETE FROM iklan WHERE id_iklan = '$_GET[id_iklan]' ")
or die(mysqli_error($koneksi));


header('location:../../admin/index.php?page=iklan');
 ?>
 
<!-- <meta http-equiv="refresh" content="2; url=Daftar.php?page=Petugas"> -->