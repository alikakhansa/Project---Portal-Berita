<?php 
   @$page = $_GET['aksi'];
 
    ?>


<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="index.php?page=foto">Foto</a></li>
      <li class="breadcrumb-item active">Create Foto</li>
   </ol>
</div>
</br>
<link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Upload Foto</h4>
            <br>
            <div>
               <form name="post" enctype="multipart/form-data" action="../pages/foto1/proses_tambah.php" class="dropzone">
                  <div class="fallback">
                     <input name="file" type="file" multiple="multiple">
                  </div>
                  <div class="dz-message needsclick">
                     <div class="mb-3">
                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                     </div>
                     <h4>Drop files here or click to upload.</h4>
                  </div>
            </div>
            <div>
            <br>
            <a href="index.php?page=foto" class="btn btn-danger waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Kembali"><i class="bx bx-arrow-back font-size-18 align-middle mr-2"></i> BACK</a>
            <button type="submit" class="btn btn-primary waves-effect waves-light" title="simpan"><i class="bx bx-check font-size-18 align-middle mr-2"></i>SAVE</button>
            </div>
            </form>            
         </div>
      </div>
   </div>
   <!-- end col -->
</div>
<!-- end row -->
</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
</div>
<!-- end main content-->
</div>

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<!-- Plugins js -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
<!-- Mirrored from themesbrand.com/skote/layouts/form-uploads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jan 2021 03:08:49 GMT -->
</html>
