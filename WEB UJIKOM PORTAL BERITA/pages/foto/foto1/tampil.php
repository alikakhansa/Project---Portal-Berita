<?php 
   @$page = $_GET['aksi'];
    ?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">Picture</li>
   </ol>
</div>
</br>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">PICTURE</h4>
            <p class="card-title-desc">
            </p>
            <a href="index.php?page=foto1&aksi=tambah" class="btn btn-primary waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Tamba Data"><i class="bx bx-plus font-size-16 align-middle mr-2"></i> Picture</a><br><br>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <!--  <thead>
                  <tr>
                     <th>
                        <center>NO</center>
                     </th>
                     <th>
                        <center>NAMA KATEGORI</center>
                     </th>
                     <th>
                        <center>ACTION</center>
                     </th>
                  </tr>
               </thead> -->
               <tbody>
                  <tr>
                     <?php 
                       include '../inc/koneksi.php';
            $TAMPIL = "SELECT * FROM foto";
                     $HASIL = mysqli_query($koneksi,$TAMPIL);
                     $NO = 1;
            while($row = mysqli_fetch_assoc($HASIL)){                               
                        ?>
                        <img style="width: 100px; height: 100px;" src="../pages/images/<?php echo $row ['foto'] ?>">
                     
                    <!--  <td>
                        <a href="index.php?page=kategori&aksi=edit&id=<?php echo $ID; ?>"class="bx bx-pencil btn btn-success waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Edit"></a>
                        <a href="../pages/kategori/hapus.php?id_kategori=<?php echo $row['id_kategori'];?>"class="btn btn-danger waves-effect waves-light bx bx-trash" data-toogle="tooltip" data-placement="bottom" title="Hapus"></a>
                     </td> -->
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