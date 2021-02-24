<?php 
$id     =$_GET['id'];
$EDIT   ="SELECT * FROM iklan WHERE iklan.id_iklan='$id'" or die("Gagal melakukan query !!!".mysqli_error());
$HASILEDIT  =   mysqli_query($koneksi, $EDIT);
while ($row =   mysqli_fetch_array($HASILEDIT)) {
$ID    = $row['id_iklan'];
$SATU    = $row['nama_iklan'];
$DUA    = $row['link_sosmed'];
$TIGA    = $row['gambar'];

}
?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="index.php?page=iklan">Iklan</a></li>
      <li class="breadcrumb-item active">Update Iklan</li>
   </ol>
</div>
</br>
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title mb-4">UPDATE IKLAN</h4>
         <form method="post" name="Input" action="../pages/iklan/proses_edit.php" enctype="multipart/form-data">
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Nama Iklan</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="nama_iklan" value="<?php echo $SATU; ?>">
                  <input type="hidden" class="form-control" id="horizontal-firstname-input" name="id_iklan" value="<?php echo $ID; ?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">URL Website/Sosmed</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="link_sosmed" value="<?php echo $DUA; ?>">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Gambar Sebelumnya</label>
               <div class="col-sm-9">
                  <img src="../pages/images/iklan/<?php echo $TIGA; ?>" alt="logo" width="200px"/>
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Gambar</label>
               <div class="col-sm-9">
                  <input type="file" class="form-control" id="horizontal-firstname-input" name="file">
               </div>
            </div>
            <div class="form-group row justify-content-end">
               <div class="col-sm-9">
                  <div>
                     <a href="index.php?page=iklan" class="btn btn-danger waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Kembali"><i class="bx bx-arrow-back font-size-18 align-middle mr-2"></i> BACK</a>
                     <button type="submit" class="btn btn-primary waves-effect waves-light" title="simpan"><i class="bx bx-check font-size-18 align-middle mr-2"></i>SAVE</button>
                    </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>