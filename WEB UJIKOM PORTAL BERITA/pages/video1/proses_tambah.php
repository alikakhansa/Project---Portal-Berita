<?php
ob_start();
include ("../../inc/koneksi.php");
  
     $LINK     = $_POST['link_yt'];
    

if ($LINK=="") 
{
?>

<?php
	

}
else{
		$QUERY1=mysqli_query($koneksi, "INSERT INTO video SET
	
	
		link_yt           ='$LINK' ;")
		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi) );

		header('location:../../author/index.php?page=video1');
	}
		?>


