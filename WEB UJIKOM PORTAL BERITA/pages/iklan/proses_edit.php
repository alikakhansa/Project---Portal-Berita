<?php
include ("../../inc/koneksi.php");
	$foto 	= @$_FILES['file']['tmp_name'];
$target = '../../pages/images/iklan/';
$gambar = @$_FILES['file']['name'];

$TIGA = mysqli_real_escape_string($koneksi,$_POST['id_iklan']);
$SATU = mysqli_real_escape_string($koneksi,$_POST['nama_iklan']);
$DUA = mysqli_real_escape_string($koneksi,$_POST['link_sosmed']);

if ($gambar==""||
	$TIGA==""||
	$SATU==""||
	$DUA=="" ){

}

else {

$update_logo = move_uploaded_file($foto, $target.$gambar);
	if ($update_logo) {
		$query = mysqli_query($koneksi,"UPDATE `iklan` SET 
			gambar='$gambar',
			nama_iklan='$SATU',
			link_sosmed='$DUA' WHERE iklan.id_iklan='$TIGA';") or die(mysqli_error());}

		header('location:../../admin/index.php?page=iklan');
?>		

<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Data Berhasil di Tambahkan</h4>

</div>
<?php 
}
 ?>

