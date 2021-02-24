<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
   tinymce.init({
   selector: '#custom',
   height: 400,
   forced_root_block : "",
   force_br_newlines : true,
   force_p_newlines : false,
   plugins: [
     'autolink lists link image charmap print preview hr anchor pagebreak',
     'searchreplace wordcount visualblocks visualchars code fullscreen',
     'insertdatetime media nonbreaking save table contextmenu directionality',
     'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
   ],
   toolbar1: 'undo redo | insert | styleselect table | bold italic | hr alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media ',
   toolbar2: 'print preview | forecolor backcolor emoticons | fontselect | fontsizeselect | codesample code fullscreen',
   templates: [
     { title: 'Test template 1', content: '' },
     { title: 'Test template 2', content: '' }
   ],
   content_css: [
     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
     '//www.tinymce.com/css/codepen.min.css'
   ],
   });
</script>
<link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<?php 
$id     =$_GET['id'];
$EDIT   ="SELECT * FROM post WHERE post.id_post='$id'" or die("Gagal melakukan query !!!".mysqli_error());
$HASILEDIT  =   mysqli_query($koneksi, $EDIT);
while ($row =   mysqli_fetch_array($HASILEDIT)) {
$ID    = $row['id_post'];
$JUDUL    = $row['judul'];
$KATA_KUNCI    = $row['kata_kunci'];
$SHORT_DESKRIPSI    = $row['short_deskripsi'];
$DESKRIPSI = $row['deskripsi'];
$GAMBAR    = $row['gambar'];
$CAPTION    = $row['caption'];
$USER    = $row['nama_lengkap'];
}
?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="index.php?page=post">Postingan</a></li>
      <li class="breadcrumb-item active">Update Postingan</li>
   </ol>
</div>
</br>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">UPDATE POSTINGAN</h4>
            <p class="card-title-desc">Postingan yang akan ditampilkan sebagai berita
            </p>
            <form method="post" action="../pages/post1/proses_edit.php" enctype="multipart/form-data">
              <?php if (@$_POST['proses_tambah']) {
                include "proses_tambah.php";
              }?>
               <div class="form-group">
                  <label for="formrow-firstname-input">Judul</label>
                  <input type="text" class="form-control" id="formrow-firstname-input" name="judul" value="<?php echo $JUDUL; ?>">
                  <input type="hidden" class="form-control" id="formrow-firstname-input" name="id_post" value="<?php echo $ID; ?>">
               </div>
               <div class="form-group">
                  <label for="formrow-firstname-input">Keyword</label>
                  <input type="text" class="form-control" id="formrow-firstname-input" name="kata_kunci" value="<?php echo $KATA_KUNCI; ?>">
               </div>
               <div class="form-group">
                  <label for="formrow-firstname-input">Short Deskripsi</label>
                  <input type="text" class="form-control" id="formrow-firstname-input" name="short_deskripsi" value="<?php echo $SHORT_DESKRIPSI; ?>">
               </div>
               <div class="form-group">
                  <label for="formrow-firstname-input">Author</label>
                  <input type="text" class="form-control" id="formrow-firstname-input" name="nama_lengkap" value="<?php echo $USER; ?>">
               </div>
               <div class="form-group">
                  <label for="formrow-firstname-input">Kategori</label>
                  <select class="form-control show-tick" name="id_kategori" value="<?php echo $ID_KATEGORI; ?>">
                  <option>------ Pilih No Kategori ------</option>
                  <?php 
                  $sql_pen = mysqli_query($koneksi, "SELECT * FROM kategori") or die(mysqli_error($koneksi));
                  while ($data_pen = mysqli_fetch_array($sql_pen)) {
                    echo '<option value="'.$data_pen['id_kategori'].'">'.$data_pen['nama_kategori'].'</option>';
                  }
                   ?>
                 </select>
               </div>
               <div class="form-group">
                  <textarea id="custom" name="deskripsi"><?php echo $DESKRIPSI; ?></textarea>
               </div>
               <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Gambar Sebelumnya</label>
               <div class="col-sm-9">
                  <img src="../pages/images/post/<?php echo $GAMBAR; ?>" alt="logo" width="200px"/>
               </div>
            </div>

               <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Update Gambar</label>
               <div class="col-sm-9">
                  <input type="file" class="form-control" id="formrow-firstname-input" name="file">
                  <input type="text" class="form-control" id="formrow-firstname-input" name="file" value="<?php echo $GAMBAR; ?>">
               </div>
             </div>
                <!-- <div class="form-group">
                  <label for="formrow-firstname-input">Kategori</label>
                  <div class="col-sm-4">
                    <form action="#" class="dropzone" enctype="multipart/form-data">
                  <div class="fallback">
                     <input name="file" type="file" multiple="multiple" name="gambar" >
                  </div>
                  <div class="dz-message needsclick">
                     <div class="mb-5">
                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                     </div>
                        <h4>Drop files here or click to upload.</h4>
                  </div>
                </form>
                  </div>
               </div> -->

               <div class="form-group">
                  <label for="formrow-firstname-input">Caption</label>
                  <input type="text" class="form-control" id="formrow-firstname-input" name="caption" value="<?php echo $CAPTION; ?>">
               </div>
               <!--  <div class="form-group">
                  <label for="formrow-firstname-input">Visit</label>
                  <input type="text" class="form-control" id="formrow-firstname-input" name="visit">
               </div> -->
                 <div>
                     <a href="index.php?page=post" class="btn btn-danger waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Kembali"><i class="bx bx-arrow-back font-size-18 align-middle mr-2"></i> BACK</a>
                    <!--  <button type="submit" class="btn btn-primary waves-effect waves-light" title="simpan"><i class="bx bx-check font-size-18 align-middle mr-2" name="proses_tambah"></i>SAVE</button> -->
                      <input type="submit" name="proses_edit" class="btn btn-primary waves-effect waves-light" value="SAVE">
                    </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- end col -->
</div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<!-- Plugins js -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="assets/js/app.js"></script>