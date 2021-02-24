<?php 
ob_start();
include ("../../inc/koneksi.php");
$foto 	= @$_FILES['file']['tmp_name'];
$target = '../../pages/images/iklan/';
$gambar = @$_FILES['file']['name'];

$SATU = $_POST['nama_iklan'];
$DUA = $_POST['link_sosmed'];

if (
	$gambar==""||
	$SATU==""||
	$DUA=="" )
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
		$query = mysqli_query($koneksi,"INSERT INTO `iklan` SET 
			gambar='$gambar',
			nama_iklan='$SATU',
			link_sosmed='$DUA';") or die(mysqli_error());}

		header('location:../../admin/index.php?page=iklan');
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