<?php 
@session_start();
include('koneksi.php');
$USER      =   addslashes($_POST['username']);
$PASS      =   addslashes($_POST['password']);
$QUERY     =   mysqli_query($koneksi, "SELECT * FROM `login` WHERE `username` = '$USER' AND `password` = md5('$PASS')");

$HASIL     =   mysqli_num_rows($QUERY);
$DATA      =   mysqli_fetch_array($QUERY);

if ($HASIL==1) {
	$_SESSION['username']    =$DATA['username'];
	$_SESSION['tipe_user']   =$DATA['tipe_user'];


	if ($DATA['tipe_user']=="admin") {
		header("location:../admin/index.php");

	}

	elseif ($DATA['tipe_user']=="author") {
		header("location:../author/index.php");
    }
    
	echo("
		<div class='alert alert-danger'>
			<center>
				<strong>LOGIN GAGAL</strong>
				Periksa Kembali Username dan Password Anda!
			<center>
		</div>
		<meta http-equiv='refresh' content=2;'>	");
}
	
	else {
		echo("
		<div class='alert alert-success'>
			<center>
				<strong>LOGIN BERHASIL</strong>
				Anda akan redirect secara otomatis..!
			<center>
		</div>
		<meta http-equiv='refresh' content=2;'> ");
	}

 ?>



