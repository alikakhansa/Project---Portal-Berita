<?php
include ('../../inc/koneksi.php');

$empat    = mysqli_real_escape_string($koneksi, $_POST['id_video']);
$lima     = mysqli_real_escape_string($koneksi, $_POST['link_yt']);

if ($empat=="" || $lima=="") 
    {
?>

<div class='alert alert-primary alert-dismissible fade show' role='alert'>
	 <i class='fas fa-check-circle'></i>
 <strong>UPDATE GAGAL !</strong>
				
			
			<span aria-hidden='true'>&times;</span>
	</button>
</div>
<?php
}
else
{
	$UPDATE1 = mysqli_query($koneksi, "UPDATE video SET
		
		id_video          ='$empat',
		link_yt           ='$lima' WHERE video.id_video='$empat';")
	    or die ("GAGAL GAIS".mysqli_error($koneksi));
	 
header('location:../../admin/index.php?page=video');
	  ?>

<div class='alert alert-primary alert-dismissible fade show' role='alert'>
	 <i class='fas fa-check-circle'></i>
 <strong>UPDATE SUCCESS !</strong>
				
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
	</button>
</div>
 
  <?php
}
?>
 