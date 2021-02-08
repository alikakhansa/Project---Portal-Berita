<?php 
$ID=$_GET['id_login'];
?>
            <?php
             $EDIT = "SELECT * FROM login WHERE id_login='$ID'" or die("Gagal melakukan query !!!".mysqli_error());
                  $HASILEDIT = mysqli_query($koneksi,$EDIT);
                 while ($ROW=mysqli_fetch_array($HASILEDIT)) {
                     
                      $NAMA_LENGKAP         =$ROW['nama_lengkap'];
                      $USERNAME             =$ROW['username'];
                      $PASSWORD             =$ROW['password'];
                      $JK                   =$ROW['jenis_kelamin'];
                      $TIPE_USER            =$ROW['tipe_user'];
                      $NO_TELP              =$ROW['no_telp'];
              }
          ?>
      
          <!-- general form elements -->
           <div class="box box-primary">

            <div class="box-header with-border">
              <h5>Edit User</h5>
              <hr>
              </div>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="../pages/user/proses_edit.php">
             <div class="box-body">
                <div class="form-group">
                  <label for="nama_lengkap">Nama Lengkap </label>
                  <input type="#" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $NAMA_LENGKAP; ?>">
                  <input type="hidden" class="form-control" id="nama_lengkap" name="id_login" value="<?php echo $ID; ?>">
                </div>


                <div class="form-group">
                  <label for="username">USERNAME </label>
                  <input type="text" class="form-control" name="username" value="<?php echo $USERNAME; ?>" required>
                </div>
            
                <div class="form-group">
                  <label for="password">PASSWORD</label>
                  <textarea type="text" class="form-control" name="password" required><?php echo $PASSWORD; ?></textarea>
                </div>

                <div class="form-group">
                  <label for="no_telp">No Telephone </label>
                  <input type="text" class="form-control" name="no_telp" value="<?php echo $NO_TELP; ?>" required>
                </div>

                <div class="form-group">
                  <label for="tipe_user">Type User </label>
                  <input type="text" class="form-control" name="tipe_user" value="<?php echo $TIPE_USER; ?>" required>
                </div>

                <div class="form-group row ">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">JENIS KELAMIN</label>
               <div class="col-sm-12">
                  <select class="form-control select2" name="jenis_kelamin">
                    <option>Silahkan Pilih Jenis Kelamin Anda</option>
                        <option value="pria" <?php if($JK=="pria") {echo "selected=\"selected\"";} ?>>Pria</option>
                        <option value="wanita" <?php if($JK=="wanita") {echo "selected=\"selected\"";} ?>>Wanita</option>
                  </select>
               </div>
            </div>

               
                
              
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="edit" value="Edit" id="edit" class="btn btn-primary">
              </div>

  

            </form>
          </div>
          <!-- /.box -->


