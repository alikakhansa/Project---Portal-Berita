<?php 
   @$page = $_GET['aksi'];
    ?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="index.php?page=headline">Headline</a></li>
      <li class="breadcrumb-item active"> Update Headline</li>
   </ol>
</div>
</br>
<?php 
$id     =$_GET['id'];
$EDIT   ="SELECT * FROM headline WHERE headline.id_headline='$id'" or die("Gagal melakukan query !!!".mysqli_error());
$HASILEDIT  =   mysqli_query($koneksi, $EDIT);
while ($row =   mysqli_fetch_array($HASILEDIT)) {
$ID_POST    = $row['id_post'];
$ID_HEADLINE    = $row['id_headline'];
}
?>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">GANTI HEADLINE</h4>
            <p class="card-title-desc">List Postingan Yang Akan Ditampilkan Sebagai Berita Utama
            </p>
            <form method="post" action="../pages/headline/proses_edit.php">
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
               <thead>
                  <tr>
                    <th>
                        <center>PILIH</center>
                     </th>
                     <th>
                        <center>JUDUL</center>
                     </th>
                     <th>
                        <center>CREATE</center>
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <?php 
                        $TAMPIL = "SELECT kategori.*,post.* FROM post 
                        INNER JOIN kategori ON post.id_kategori=kategori.id_kategori
                        ORDER BY post.id_post ASC";
                        $HASIL = mysqli_query($koneksi,$TAMPIL);
                        $NO = 1;
                          while ($row=mysqli_fetch_array($HASIL)) {
                        $NO;
                        $ID               = $row['id_post'];
                        $JUDUL    = $row['judul'];    
                        $NAMA_KATEGORI    = $row['nama_kategori'];   
                        $ID_KATEGORI    = $row['id_kategori'];
                        $CREATE    = $row['created_at'];
                        $USER    = $row['nama_lengkap'];                         
                        $VISIT    = $row['visit'];   
                        ?>
                     <td>
                     	<input type="hidden" name="id_headline" value="<?php echo $ID_HEADLINE; ?>">
                        <center><input type="radio" name="id_post" value="<?php echo $ID; ?>"></center>
                     </td>
                     <td>
                        <?php echo $JUDUL; ?>
                     </td>
                     <td>
                        <center><?php echo $CREATE; ?></center>
                     </td>
                  </tr>
               </tbody>
               <?php 
                  $NO++;
                  }
                   ?>
            </table>
                     <a href="index.php?page=headline" class="btn btn-danger waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Kembali"><i class="bx bx-arrow-back font-size-18 align-middle mr-2"></i> BACK</a>
                     <button type="submit" class="btn btn-primary waves-effect waves-light" title="simpan"><i class="bx bx-check font-size-18 align-middle mr-2"></i>SAVE</button>
                    </div>
                    </form>
               
      </div>
   </div>
   <!-- end col -->
</div>
<!-- end row -->