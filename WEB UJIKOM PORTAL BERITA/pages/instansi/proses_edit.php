<?php
include ("../../inc/koneksi.php");
$NOL      = mysqli_real_escape_string($koneksi,$_POST['id_instansi']);
$SATU     = mysqli_real_escape_string($koneksi,$_POST['nama_instansi']);
$DUA      = mysqli_real_escape_string($koneksi,$_POST['alamat']);
$TIGA     = mysqli_real_escape_string($koneksi,$_POST['kecamatan']);
$EMPAT    = mysqli_real_escape_string($koneksi,$_POST['kab_kota']);
$LIMA     = mysqli_real_escape_string($koneksi,$_POST['deskripsi_1']);
$ENAM     = mysqli_real_escape_string($koneksi,$_POST['deskripsi_2']);
$TUJUH    = mysqli_real_escape_string($koneksi,$_POST['provinsi']);  
$DELAPAN  = mysqli_real_escape_string($koneksi,$_POST['no_telp']);
$SEMBILAN = mysqli_real_escape_string($koneksi,$_POST['kode_pos']);
$SEPULUH  = mysqli_real_escape_string($koneksi,$_POST['email']);  

if ($NOL        == "" ||
    $SATU       == "" ||
    $DUA        == "" || 
    $TIGA       == "" ||    
    $EMPAT      == "" ||      
    $LIMA       == "" ||     
    $ENAM       == "" ||
    $TUJUH      == "" ||      
    $DELAPAN    == "" ||     
    $SEMBILAN   == "" || 
    $SEPULUH    == "" )
{

}

else {

$query = mysqli_query ($koneksi,"UPDATE info_instansi SET 

	nama_instansi = '$SATU' ,
    alamat        = '$DUA' ,
    kecamatan     = '$TIGA' ,
    kab_kota      = '$EMPAT' ,
    deskripsi_1   = '$LIMA' , 
    deskripsi_2   = '$ENAM' , 
    provinsi      = '$TUJUH' ,
    no_telp       = '$DELAPAN' , 
    kode_pos      = '$SEMBILAN' ,    	
	email         = '$SEPULUH' WHERE info_instansi.id_instansi='$NOL';")

 or die(mysqli_error($koneksi));

 header('location:../../admin/index.php?page=instansi');

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