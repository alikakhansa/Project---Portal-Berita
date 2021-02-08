<?php 
ob_start();
include "../../inc/koneksi.php";


mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori = '$_GET[id_kategori]' ")
or die(mysqli_error($koneksi));


header('location:../../admin/index.php?page=kategori');
 ?>
 
<!-- <meta http-equiv="refresh" content="2; url=Daftar.php?page=Petugas"> -->