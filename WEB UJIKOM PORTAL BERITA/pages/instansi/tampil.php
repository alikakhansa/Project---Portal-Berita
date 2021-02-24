<?php 
$query_informasi = mysqli_query($koneksi, "SELECT * FROM info_instansi WHERE id_instansi = '1' ");
$informasi = @mysqli_fetch_array($query_informasi);

 ?>
<!-- general form elements -->
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">Instansi</li>
   </ol>
</div>
</br>
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title mb-4">INSTANSI</h4>
         <form method="post" name="Input" action="../pages/instansi/proses_edit.php">
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Nama Instansi</label>
               <div class="col-sm-9">
                  <input type="hidden" class="form-control" id="horizontal-firstname-input" name="id_instansi" value="<?php echo $informasi ['id_instansi']?>">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="nama_instansi" value="<?php echo $informasi ['nama_instansi']?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Deskripsi Awal</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="deskripsi_1" value="<?php echo $informasi ['deskripsi_1']?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Deskripsi Akhir</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="deskripsi_2" value="<?php echo $informasi ['deskripsi_2']?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Alamat Instansi</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="alamat" value="<?php echo $informasi ['alamat']?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Kecamatan</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="kecamatan" value="<?php echo $informasi ['kecamatan']?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Kab/Kota</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="kab_kota" value="<?php echo $informasi ['kab_kota']?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Provinsi</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="provinsi" value="<?php echo $informasi ['provinsi']?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Kode Pos</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="kode_pos" value="<?php echo $informasi ['kode_pos']?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Email</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="email" value="<?php echo $informasi ['email']?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">No Telp</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="no_telp" value="<?php echo $informasi ['no_telp']?>">
               </div>
            </div>
            <div class="form-group row justify-content-end">
               <div class="col-sm-9">
                  <div>
                     <button type="submit" class="btn btn-primary waves-effect waves-light" title="simpan"><i class="bx bx-check font-size-18 align-middle mr-2"></i>Perbarui Informasi</button>
                    </div>
               </div>
            </div>
            </form>
            <form method="post" name="Input" enctype="multipart/form-data" action="../pages/instansi/proses_edit_logo.php">
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Logo Sebelumnya</label>
               <div class="col-sm-9">
                  <img src="../pages/images/<?php echo $informasi ['logo'] ?>" alt="logo" width="200px"/>
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Perbarui Logo</label>
               <div class="col-sm-9">
                  <input type="file" class="form-control" id="horizontal-firstname-input" name="foto">
               </div>
            </div>
            <div class="form-group row justify-content-end">
               <div class="col-sm-9">
                  <div>
                     <button type="submit" name="edit_logo" value="Perbarui Logo" class="btn btn-primary waves-effect waves-light" title="simpan"><i class="bx bx-check font-size-18 align-middle mr-2"></i>Perbarui Logo</button>
                    </div>
               </div>
            </div>
            </form>
      </div>
   </div>
</div>