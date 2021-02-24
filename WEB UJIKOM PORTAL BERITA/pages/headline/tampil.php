 <?php 
   @$page = $_GET['aksi'];
    ?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">Headline</li>
   </ol>
</div>
</br>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">HEADLINE</h4>
            <p class="card-title-desc">List Headline Yang Akan Ditampilkan Sebagai Berita Utama
            </p>
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
                        $TAMPIL = "SELECT post.*,headline.* FROM headline
                        INNER JOIN post ON headline.id_post=post.id_post
                        ORDER BY headline.id_headline DESC";
                        $HASIL = mysqli_query($koneksi,$TAMPIL);
                        $NO = 1;
                          while ($row=mysqli_fetch_array($HASIL)) {
                        $NO;
                        $ID               = $row['id_headline'];
                        $JUDUL    = $row['judul'];    
                        $CREATE    = $row['created_at'];
                        $USER    = $row['nama_lengkap'];                         
                        $VISIT    = $row['visit'];   
                        ?>
                     <td>
                        <center><?php echo $NO; ?></center>
                     </td>
                     <td>
                        <?php echo $JUDUL; ?>
                     </td>
                     <td>
                        <center><?php echo $CREATE; ?></center>
                     </td>
                     <td>
                        <a href="index.php?page=headline&aksi=edit&id=<?php echo $ID; ?>"class="bx bx-pencil btn btn-success waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Edit"></a>
                         <!-- <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert">Click me</button>
                                            </div> -->
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
<!-- Sweet Alerts js -->
        <script src="../../assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Sweet alert init js-->
        <script src="../../assets/js/pages/sweet-alerts.init.js"></script>