<?php 
$id     =$_GET['id'];
$EDIT   ="SELECT * FROM kategori WHERE kategori.id_kategori='$id'" or die("Gagal melakukan query !!!".mysqli_error());
$HASILEDIT  =   mysqli_query($koneksi, $EDIT);
while ($row =   mysqli_fetch_array($HASILEDIT)) {
$NAMA_KATEGORI    = $row['nama_kategori'];
$ID_KATEGORI    = $row['id_kategori'];
}
?>
 <div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="index.php?page=kategori">Kategori</a></li>
      <li class="breadcrumb-item active">Update Kategori</li>
   </ol>
</div>
</br>
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title mb-4">UPDATE KATEGORI</h4>
         <form method="post" name="Input" action="../pages/kategori/proses_edit.php">
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Nama Kategori</label>
               <div class="col-sm-9">
                  <input type="hidden" class="form-control" id="horizontal-firstname-input" name="id_kategori" value="<?php echo $ID_KATEGORI; ?>">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="nama_kategori" value="<?php echo $NAMA_KATEGORI; ?>">
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