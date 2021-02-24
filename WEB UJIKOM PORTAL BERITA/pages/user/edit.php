<?php 
$ID=$_GET['id_login'];
?>
            <?php
             $EDIT = "SELECT * FROM login WHERE id_login='$ID'" or die("Gagal melakukan query !!!".mysqli_error());
                  $HASILEDIT = mysqli_query($koneksi,$EDIT);
                 while ($ROW=mysqli_fetch_array($HASILEDIT)) {
                     
                      $ID         =$ROW['id_login'];
                      $NAMA_LENGKAP         =$ROW['nama_lengkap'];
                      $USERNAME             =$ROW['username'];
                      $PASSWORD             =$ROW['password'];
                      $JK                   =$ROW['jenis_kelamin'];
                      $TIPE_USER            =$ROW['tipe_user'];
                      $NO_TELP              =$ROW['no_telp'];
              }
          ?>
      
          <div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title mb-4">UPDARE USER</h4>
         <form method="post" name="Input" action="../pages/user/proses_edit.php">
         <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">ID</label>
               <div class="col-sm-9">
                  <input type="hidden" class="form-control" id="horizontal-firstname-input" name="id_login" value="<?php echo $ID; ?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">NAMA LENGKAP</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="nama_lengkap" value="<?php echo $NAMA_LENGKAP; ?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">E-MAIL</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="username" value="<?php echo $USERNAME; ?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">PASSWORD</label>
               <div class="col-sm-9">
                  <input type="password" class="form-control" id="horizontal-firstname-input" name="password" value="<?php echo $PASSWORD; ?>">
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
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="no_telp" value="<?php echo $NO_TELP; ?>">
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


