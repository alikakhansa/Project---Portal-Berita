<?php 
ob_start();
include ("../../inc/koneksi.php");
$NO;
 $NAMA_KATEGORI  = $_POST['nama_kategori'];
 $SLUG           = $_POST['nama_kategori'];           

if ($NAMA_KATEGORI 	== "" ||
	$SLUG 		    == "" ) 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$QUERY = mysqli_query($koneksi, "INSERT INTO `kategori` VALUES ('$NAMA_KATEGORI', '$SLUG');")
	or die(mysqli_error($koneksi));
	

header('location:../../admin/index.php?page=kategori');
?>

<div class="alert alert-primary alert-dismissible fade show" role="alert">
    Selamat Data Berhasil Disimpan
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
   </button>
</div>

<?php 
}
 ?>
