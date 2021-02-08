<?php 
   @$page = $_GET['aksi'];
    ?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">Postingan</li>
   </ol>
</div>
</br>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">POSTINGAN</h4>
            <p class="card-title-desc">List Postingan Yang Akan Ditampilkan Sebagai Berita
            </p>
            <a href="index.php?page=kategori&aksi=tambah" class="btn btn-primary waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Tamba Data"><i class="bx bx-plus font-size-16 align-middle mr-2"></i> Kategori</a><br><br>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
               <thead>
                  <tr>
                     <th>
                        <center>NO</center>
                     </th>
                     <th>
                        <center>JUDUL</center>
                     </th>
                      <th>
                        <center>KATEGORI</center>
                     </th>
                      <th>
                        <center>AUTHOR</center>
                     </th>
                      <th>
                        <center>VIEW</center>
                     </th>
                     <th>
                        <center>CREATE</center>
                     </th>
                     <th>
                        <center>ACTION</center>
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <?php 
                        $TAMPIL = "SELECT * FROM post 
                        INNER JOIN kategori ON post.id_kategori=kategori.id_kategori
                        INNER JOIN login ON post.id_login=login.id_login
                        ORDER BY post.id_post ASC";
                        $HASIL = mysqli_query($koneksi,$TAMPIL);
                        $NO = 1;
                          while ($row=mysqli_fetch_array($HASIL)) {
                        $NO;
                        $ID               = $row['id_post'];
                        $JUDUL    = $row['judul'];    
                        $NAMA_KATEGORI    = $row['nama_kategori'];   
                        $ID_KATEGORI    = $row['id_kategori'];
                        $CREATE    = $row['create_at'];
                        $USER    = $row['nama_lengkap'];  
                        $VISIT    = $row['visit'];   
                        ?>
                     <td>
                        <center><?php echo $NO; ?></center>
                     </td>
                     <td>
                        <center><?php echo $JUDUL; ?></center>
                     </td>
                     <td>
                        <center><?php echo $NAMA_KATEGORI; ?></center>
                     </td>
                     <td>
                        <center><?php echo $USER; ?></center>
                     </td>
                     <td>
                        <center><?php echo $VISIT; ?></center>
                     </td>
                     <td>
                        <center><?php echo $CREATE; ?></center>
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