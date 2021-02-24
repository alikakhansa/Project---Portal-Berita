<!DOCTYPE html>
<html>
<head>
  <title>Data baru</title>
</head>
<body>
<?php 
  $ID = $_GET['id'];
  $EDIT ="SELECT * FROM video WHERE video.id_video='$ID' ";
  $HASILEDIT=mysqli_query($koneksi,$EDIT);
  while ($ROW=mysqli_fetch_array($HASILEDIT)) {
   
      $ID     = $ROW['id_video'];
      $LINK   = $ROW['link_yt'];
     

   }
  ?>

  <form  action="../pages/video1/proses_edit.php" role="form" method="POST" >

             <div class="box-body">
 

 

 <div class="box box-primary">

            <div class="box-header with-border">
              <h5>Edit Link Video</h5>
              <hr>
              </div>
            </div>
             
              <?php
if (@$_POST['edit']){ 
  include "proses_edit.php";
}
  ?>
            
            
                <div class="form-group">
                  <label>LINK YT</label>
                <input type="text" class="form-control" name="link_yt" value="<?php echo $LINK; ?>" placeholder="" required>
                <input type="hidden" class="form-control" name="id_video" value="<?php echo $ID; ?>" placeholder="" required>
                </div>

              <div class="box-footer">
                <button type="submit" name="edit" class="btn btn-primary" value="edit">Edit</button>
              </div>


</form>
</div>
</div>
