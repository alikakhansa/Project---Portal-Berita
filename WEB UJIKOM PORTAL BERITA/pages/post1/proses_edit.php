<?php 
include ("../../inc/koneksi.php");
include ("seo.php");

$foto 	= @$_FILES['file']['tmp_name'];
$target = '../../pages/images1/post/';
$gambar = @$_FILES['file']['name'];

$SATU = $_POST['judul'];
$DUA = $_POST['kata_kunci'];
$TIGA = $_POST['short_deskripsi'];
$EMPAT = $_POST['id_kategori'];
$LIMA = $_POST['deskripsi'];
$ENAM = $_POST['caption'];
$TUJUH = $_POST['nama_lengkap'];
$DELAPAN = $_POST['id_post'];
$SLUG = slug($SATU); 

// $update_data = $_POST['judul','kata_kunci','short_deskripsi','id_kategori','deskripsi','caption','nama_lengkap','id_post','slug'];

if (empty($gambar)) {
	$query = mysqli_query($koneksi,"UPDATE `post` SET  
			judul='$SATU',
			kata_kunci='$DUA',
			short_deskripsi='$TIGA',
			id_kategori='$EMPAT',
			deskripsi='$LIMA',
			caption='$ENAM',
			slug='$SLUG',
			nama_lengkap='$TUJUH' WHERE post.id_post='$DELAPAN';") or die(mysqli_error($koneksi));
}else {
	$update_logo = move_uploaded_file($foto, $target.$gambar);
	$query = mysqli_query($koneksi,"UPDATE `post` SET  
			judul='$SATU',
			kata_kunci='$DUA',
			short_deskripsi='$TIGA',
			id_kategori='$EMPAT',
			deskripsi='$LIMA',
			caption='$ENAM',
			slug='$SLUG',
			gambar='$gambar',
			nama_lengkap='$TUJUH' WHERE post.id_post='$DELAPAN';") or die(mysqli_error($koneksi));
}

header('location:../../author/index.php?page=post1');

?>