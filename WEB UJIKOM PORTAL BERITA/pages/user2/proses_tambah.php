<?php 
ob_start();
include ("../../inc/koneksi.php");
$NO;
$ID       = $_POST['id_login'];
$NAMA_LENGKAP       = $_POST['nama_lengkap'];
$USERNAME           = $_POST['username'];
$PASSWORD           = $_POST['password'];
$JK                 = $_POST['jenis_kelamin'];
$TIPE_USER          = $_POST['tipe_user'];
$NO_TELP            = $_POST['no_telp'];        

if ($ID   == "" ||
	$NAMA_LENGKAP   == "" || 
    $USERNAME       == "" ||    
    $PASSWORD       == "" ||      
    $JK             == "" ||     
    $TIPE_USER      == "" || 
    $NO_TELP        == "") 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$QUERY = mysqli_query($koneksi, "INSERT INTO `login` VALUES ('$ID','$NAMA_LENGKAP', '$JK', '$TIPE_USER', '$USERNAME', md5 ('$PASSWORD'), '$NO_TELP');")
	or die(mysqli_error($koneksi));
	

header('location:../../admin/index.php?page=user');
?>

<div class="alert alkert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Data berhasil ditambahkan !</h4>
</div>

<?php 
}
 ?>
