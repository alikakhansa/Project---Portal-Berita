<?php 
   @$page = $_GET['aksi'];
    ?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="index.php?page=video">Video</a></li>
      <li class="breadcrumb-item active">Create Video</li>
   </ol>
</div>
</br>
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title mb-4">CREATE Video</h4>
         <form method="post" name="Input" action="../pages/video/proses_tambah.php">
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Link Video</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="link_yt">
               </div>
            </div>
            <div class="form-group row justify-content-end">
               <div class="col-sm-9">
                  <div>
                     <a href="index.php?page=kategori" class="btn btn-danger waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Kembali"><i class="bx bx-arrow-back font-size-18 align-middle mr-2"></i> BACK</a>
                     <button type="submit" class="btn btn-primary waves-effect waves-light" title="simpan"><i class="bx bx-check font-size-18 align-middle mr-2"></i>SAVE</button>
                    </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>