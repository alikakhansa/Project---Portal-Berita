<?php 
   @$page = $_GET['aksi'];
    ?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">User</li>
   </ol>
</div>
</br>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">USER</h4>
            <p class="card-title-desc">List User Yang Akan di tampilkan di dashboard
            </p>
            <a href="index.php?page=user&aksi=tambah" class="btn btn-primary waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Tamba Data"><i class="bx bx-plus font-size-16 align-middle mr-2"></i> User</a><br><br>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
               <thead>
                  <tr>
                     <th>
                        <center>NO</center>
                     </th>
                     <th>
                        <center>NAMA LENGKAP</center>
                     </th>
                     <th>
                        <center>USERNAME</center>
                     </th>
                     <th>
                        <center>PASSWORD</center>
                     </th>
                     <th>
                        <center>JENIS KELAMIN</center>
                     </th>
                     <th>
                        <center>TIPE USER</center>
                     </th>
                     <th>
                        <center>NO TELP</center>
                     </th>
                     <th>
                        <center>ACTION</center>
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <?php 
                        $TAMPIL = "SELECT * FROM login";
                        $HASIL = mysqli_query($koneksi,$TAMPIL);
                        $NO = 1;
                          while ($row=mysqli_fetch_array($HASIL)) {
                        $NO;
                        $ID                 = $row['id_login'];
                        $NAMA_LENGKAP       = $row['nama_lengkap'];
                        $USERNAME           = $row['username'];
                        $PASSWORD           = $row['password'];
                        $JK                 = $row['jenis_kelamin'];
                        $TIPE_USER          = $row['tipe_user'];
                        $NO_TELP            = $row['no_telp'];
                        ?>
                     <td>
                        <center><?php echo $NO; ?></center>
                     </td>
                     <td>
                        <center><?php echo $NAMA_LENGKAP; ?></center>
                     </td>
                     <td> 
                        <center><?php echo $USERNAME; ?></center>
                     </td>
                     <td>
                        <center><?php echo $PASSWORD; ?></center>
                     </td>
                     <td>
                        <center><?php echo $JK; ?></center>
                     </td>
                     <td>
                        <center><?php echo $TIPE_USER; ?></center>
                     </td>
                     <td>
                        <center><?php echo $NO_TELP; ?></center>
                     </td>
                     <td>
                        <a href="index.php?page=user&aksi=edit&id_login=<?php echo $ID; ?>"class="bx bx-pencil btn btn-success waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Edit"></a>
                        <a href="../pages/user/hapus.php?id_login=<?php echo $row['id_login'];?>"class="btn btn-danger waves-effect waves-light bx bx-trash" data-toogle="tooltip" data-placement="bottom" title="Hapus"></a>
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