<?php
include ("../../inc/koneksi.php");
$ID       			= mysqli_real_escape_string($koneksi,$_POST['id_login']);
$NAMA_LENGKAP       = mysqli_real_escape_string($koneksi,$_POST['nama_lengkap']);
$USERNAME           = mysqli_real_escape_string($koneksi,$_POST['username']);
$PASSWORD           = mysqli_real_escape_string($koneksi,$_POST['password']);
$JK                 = mysqli_real_escape_string($koneksi,$_POST['jenis_kelamin']);
$TIPE_USER          = mysqli_real_escape_string($koneksi,$_POST['tipe_user']);
$NO_TELP            = mysqli_real_escape_string($koneksi,$_POST['no_telp']);  

if ($ID   == "" ||
$NAMA_LENGKAP   == "" || 
$USERNAME       == "" ||    
$PASSWORD       == "" ||      
$JK             == "" ||     
$TIPE_USER      == "" || 
$NO_TELP        == "" )
{

}

else {

$query = mysqli_query ($koneksi,"UPDATE login SET 
    username = '$USERNAME' ,
    password = '$PASSWORD' ,
    jenis_kelamin = '$JK' ,
    tipe_user = '$TIPE_USER' , 
    no_telp = '$NO_TELP' ,     	
	nama_lengkap = '$NAMA_LENGKAP' WHERE login.id_login='$ID';")
 or die(mysqli_error($koneksi));

 header('location:../../admin/index.php?page=user');

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