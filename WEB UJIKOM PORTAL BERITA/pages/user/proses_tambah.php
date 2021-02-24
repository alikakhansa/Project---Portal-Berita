<?php 
ob_start();
include ("../../inc/koneksi.php");
$NO;
$NAMA_LENGKAP       = $_POST['nama_lengkap'];
$USERNAME           = $_POST['username'];
$USERNAME           = $_POST['password'];
$PASSWORD           = md5($PASSWORD);
$JK                 = $_POST['jenis_kelamin'];
$TIPE_USER          = $_POST['tipe_user'];
$NO_TELP            = $_POST['no_telp'];        

if ($NAMA_LENGKAP   == "" || 
    $USERNAME       == "" ||    
    $PASSWORD       == "" ||      
    $JK             == "" ||     
    $TIPE_USER      == "" || 
    $NO_TELP        == "") 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$QUERY = mysqli_query($koneksi, "INSERT INTO `login` SET 
			nama_lengkap='$NAMA_LENGKAP',
			username='$USERNAME',
			password='$PASSWORD',
			jenis_kelamin='$JK',
			tipe_user='$TIPE_USER',
			no_telp='$NO_TELP';") or die(mysqli_error());

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
