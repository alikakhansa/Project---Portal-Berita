<?php 
   @$page = $_GET['aksi'];
    ?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="index.php?page=user">User</a></li>
      <li class="breadcrumb-item active">Create User</li>
   </ol>
</div>
</br>
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title mb-4">CREATE USER</h4>
         <form method="post" name="Input" action="../pages/user/proses_tambah.php">
         <!-- <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">ID</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="id_login">
               </div>
            </div> -->
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">NAMA LENGKAP</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="nama_lengkap">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">E-MAIL</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="username">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">PASSWORD</label>
               <div class="col-sm-9">
                  <input type="password" class="form-control" id="horizontal-firstname-input" name="password">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">JENIS KELAMIN</label>
               <div class="col-sm-9">
               <select class="form-control select2" name="jenis_kelamin">
                    <option>Silahkan Pilih Jenis Kelamin Anda</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
               </select>
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">TIPE USER</label>
               <div class="col-sm-9">
               <select class="form-control select2" name="tipe_user" >
                    <option>Silahkan Pilih Jenis User</option>
                        <option value="admin">Admin</option>
                        <option value="author">Author</option>
               </select>
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">NO TELP</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="no_telp">
               </div>
            </div>
            <div class="form-group row justify-content-end">
               <div class="col-sm-9">
                  <div>
                     <a href="index.php?page=user" class="btn btn-danger waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Kembali"><i class="bx bx-arrow-back font-size-18 align-middle mr-2"></i> BACK</a>
                     <button type="submit" class="btn btn-primary waves-effect waves-light" title="simpan"><i class="bx bx-check font-size-18 align-middle mr-2"></i>SAVE</button>
                    </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>