<?php 
   @$page = $_GET['aksi'];
    ?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">Info Instansi</li>
   </ol>
</div>
</br>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Instansi</h4>
            <p class="card-title-desc">List Instansi yang akan di tampilkan sebagai info perusahaan
            </p>
            <a href="index.php?page=kategori&aksi=tambah" class="btn btn-primary waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Tamba Data"><i class="bx bx-plus font-size-16 align-middle mr-2"></i> Kategori</a><br><br>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
               <thead>
                  <tr>
                     <th>
                        <center>NO</center>
                     </th>
                     <th>
                        <center>NAMA INSTANSI</center>
                     </th>
                     <th>
                        <center>DESKRIPSI 1</center>
                     </th>
                     <th>
                        <center>DESKRIPSI 2</center>
                     </th>
                     <th>
                        <center>ALAMAT</center>
                     </th>
                     <th>
                        <center>KECAMATAN</center>
                     </th>
                     <th>
                        <center>KAB/KOTA</center>
                     </th>
                     <th>
                        <center>PROVINSI</center>
                     </th>
                     <th>
                        <center>KODE POS</center>
                     </th>
                     <th>
                        <center>NO TELP</center>
                     </th>
                     <th>
                        <center>EMAIL</center>
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <?php 
                        $TAMPIL = "SELECT * FROM info_instansi";
                        $HASIL = mysqli_query($koneksi,$TAMPIL);
                        $NO = 1;
                          while ($row=mysqli_fetch_array($HASIL)) {
                        $NO;
                        $ID               = $row['id_instansi'];
                        $NAMA_INSTANSI    = $row['nama_instansi'];
                        $DESKRIPSI_1      = $row['deskripsi_1'];
                        $DESKRIPSI_2      = $row['deskripsi_2'];
                        $ALAMAT           = $row['alamat'];
                        $KECAMATAN        = $row['kecamatan'];
                        $KAB              = $row['kab/kota'];
                        $PROVINSI         = $row['provinsi'];
                        $KODE_POS         = $row['kode_pos'];
                        $NO_TELP          = $row['no_telp'];
                        $EMAIL            = $row['email'];                              
                        ?>
                     <td>
                        <center><?php echo $NO; ?></center>
                     </td>
                     <td>
                        <center><?php echo $NAMA_INSTANSI; ?></center>
                     </td>
                     <td>
                        <center><?php echo $DESKRIPSI_1; ?></center>
                     </td>
                     <td>
                        <center><?php echo $DESKRIPSI_2; ?></center>
                     </td>
                     <td>
                        <center><?php echo $ALAMAT; ?></center>
                     </td>
                     <td>
                        <center><?php echo $KECAMATAN; ?></center>
                     </td>
                     <td>
                        <center><?php echo $KAB; ?></center>
                     </td>
                     <td>
                        <center><?php echo $PROVINSI; ?></center>
                     </td>
                     <td>
                        <center><?php echo $KODE_POS; ?></center>
                     </td>
                     <td>
                        <center><?php echo $NO_TELP; ?></center>
                     </td>
                     <td>
                        <center><?php echo $EMAIL; ?></center>
                     </td>

                     <td>
                        <a href="index.php?page=kategori&aksi=edit&id=<?php echo $ID; ?>"class="bx bx-pencil btn btn-success waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Edit"></a>
                        <a href="../pages/kategori/hapus.php?id_kategori=<?php echo $row['id_kategori'];?>"class="btn btn-danger waves-effect waves-light bx bx-trash" data-toogle="tooltip" data-placement="bottom" title="Hapus"></a>
                     </td>
                  </tr>
               </tbody>
               <?php 
                  $NO++;
                  }
                   ?>
            </table>
         </div>
      </div>
   </div>
   <!-- end col -->
</div>
<!-- end row -->