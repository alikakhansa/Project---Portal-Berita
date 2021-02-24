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
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="index.php?page=post">Postingan</a></li>
      <li class="breadcrumb-item active"> Create Postingan</li>
   </ol>
</div>
</br>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">CREATE POSTINGAN</h4>
            <p class="card-title-desc">Postingan yang akan ditampilkan sebagai berita
            </p>
            <form method="post" action="../pages/post/proses_tambah.php" enctype="multipart/form-data">
              <?php if (@$_POST['proses_tambah']) {
                include "proses_tambah.php";
              }?>
               <div class="form-group">
                  <label for="formrow-firstname-input">Judul</label>
                  <input type="text" class="form-control" id="formrow-firstname-input" name="judul">
                  <!-- <input type="text" class="form-control" id="formrow-firstname-input" name="id_post"> -->
               </div>
               <div class="form-group">
                  <label for="formrow-firstname-input">Keyword</label>
                  <input type="text" class="form-control" id="formrow-firstname-input" name="kata_kunci">
               </div>
               <div class="form-group">
                  <label for="formrow-firstname-input">Short Deskripsi</label>
                  <input type="text" class="form-control" id="formrow-firstname-input" name="short_deskripsi">
               </div>
               <div class="form-group">
                
                  <label for="formrow-firstname-input">Author</label>
                  <input type="text" class="form-control" id="formrow-firstname-input" name="nama_lengkap" value="<?php echo $_SESSION['nama_lengkap'] ?>">
               </div>
               <div class="form-group">
                  <label for="formrow-firstname-input">Kategori</label>
                  <select class="form-control show-tick" name="id_kategori" style="width: 30%">
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
                  <textarea id="custom" name="deskripsi"></textarea>
               </div>

                <div class="form-group">
                  <label for="formrow-firstname-input">Images</label>
                  <input type="file" class="form-control" id="formrow-firstname-input" name="file">
               </div>

               <!--  <div class="form-group">
                  <label for="formrow-firstname-input">Search Picture</label>
                 <input type="input" name="file" class="btn btn-warning waves-effect waves-light" value="PICTURE">
               </div> -->

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
                  <input type="text" class="form-control" id="formrow-firstname-input" name="caption">
               </div>
              
               <!--  <div class="form-group">
                  <label for="formrow-firstname-input">Visit</label>
                  <input type="text" class="form-control" id="formrow-firstname-input" name="visit">
               </div> -->
                 <div>
                     <a href="index.php?page=post" class="btn btn-danger waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Kembali"><i class="bx bx-arrow-back font-size-18 align-middle mr-2"></i> BACK</a>
                    <!--  <button type="submit" class="btn btn-primary waves-effect waves-light" title="simpan"><i class="bx bx-check font-size-18 align-middle mr-2" name="proses_tambah"></i>SAVE</button> -->
                      <input type="submit" name="proses_tambah" class="btn btn-primary waves-effect waves-light" value="SAVE">
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