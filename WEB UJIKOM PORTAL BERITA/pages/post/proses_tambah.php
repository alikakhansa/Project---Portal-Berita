<?php 
ob_start();
include ("../../inc/koneksi.php");
include ("seo.php");
$foto 	= @$_FILES['file']['tmp_name'];
$target = '../../pages/images/post/';
$gambar = @$_FILES['file']['name'];

$SATU = $_POST['judul'];
$DUA = $_POST['kata_kunci'];
$TIGA = $_POST['short_deskripsi'];
$EMPAT = $_POST['id_kategori'];
$LIMA = $_POST['deskripsi'];
$ENAM = $_POST['caption'];
$TUJUH = $_POST['nama_lengkap'];
$SLUG = slug($SATU);


if ($SLUG==""||
	$gambar==""||
	$SATU==""||
	$DUA==""||
	$TIGA==""||
	$EMPAT==""||
	$LIMA==""||
	$ENAM==""||
	$TUJUH=="" )
 {
 	?>
 	<div class='alert alert-danger alert-dismissible fade show' role='alert'>
		<div class='alert-icon'>
			<i class="fas fa-check-circle"></i>
		</div>
		<strong>GAGAL!</strong> pastikan semua data terisi
		<button type='button' class="close" data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>
					<i class='fas fa-frown'></i>
				</span>
		</button>
	</div>	
<?php
}
else {

	$update_logo = move_uploaded_file($foto, $target.$gambar);
	if ($update_logo) {
		$query = mysqli_query($koneksi,"INSERT INTO `post` SET 
			gambar='$gambar',
			judul='$SATU',
			kata_kunci='$DUA',
			short_deskripsi='$TIGA',
			id_kategori='$EMPAT',
			deskripsi='$LIMA',
			caption='$ENAM',
			slug='$SLUG ',
			nama_lengkap='$TUJUH';") or die(mysqli_error());}

		header('location:../../admin/index.php?page=post');
?>
	<div class='alert alert-danger alert-dismissible fade show' role='alert'>
		<div class='alert-icon'>
			<i class='fas fa-check-circle'></i>
		</div>
		<strong>SUKSES!</strong> Dalam waktu 3 detik halaman akan dialihkan
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>
					&times;
				</span>
		</button>
	</div>
		
<?php
}
 ?>