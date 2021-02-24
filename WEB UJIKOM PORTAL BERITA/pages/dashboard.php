<?php
$query_statistik1   = mysqli_query($koneksi,"SELECT count(*) AS total_user FROM login");
$data_statistik1    = mysqli_fetch_array($query_statistik1);

$query_statistik2   = mysqli_query($koneksi,"SELECT count(*) AS total_kategori FROM kategori");
$data_statistik2    = mysqli_fetch_array($query_statistik2);

$query_statistik3   = mysqli_query($koneksi,"SELECT count(*) AS total_postingan FROM post");
$data_statistik3   = mysqli_fetch_array($query_statistik3);

$query_statistik4   = mysqli_query($koneksi,"SELECT count(*) AS total_iklan FROM iklan");
$data_statistik4   = mysqli_fetch_array($query_statistik4);
?>
  <div class="row">
   <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
         <h4 class="mb-0 font-size-18">Dashboard</h4>
         <div class="page-title-right">
            <ol class="breadcrumb m-0">
               <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
               <li class="breadcrumb-item active">Dashboard</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<?php
   include'../inc/koneksi.php';
   
   $QUERY = mysqli_query($koneksi, "SELECT * FROM login WHERE username='".$_SESSION['username']."'");
   while ($DATA=mysqli_fetch_array($QUERY))
   $NIP = $DATA['tipe_user']; 
   {
       if ($_SESSION['username']) 
       {
         if ($_SESSION['tipe_user']== "admin") 
         {
           echo "
                  <div class='col-xl-12'>
                                <div class='row'>
                              
                                    <div class='col-md-3'>
                                        <div class='card mini-stats-wid'>
                                            <div class='card-body'>
                                                <div class='media'>
                                                    <div class='media-body'>
                                                        <p class='text-muted font-weight-medium'>User</p>
                                                        <h4 class='mb-0'>".$data_statistik1['total_user']."</h4>
                                                    </div>

                                                    <div class='mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center'>
                                                        <span class='avatar-title'>
                                                            <i class='bx bx-user font-size-24'></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-3'>
                                        <div class='card mini-stats-wid'>
                                            <div class='card-body'>
                                                <div class='media'>
                                                    <div class='media-body'>
                                                        <p class='text-muted font-weight-medium'>Kategori</p>
                                                        <h4 class='mb-0'>".$data_statistik2['total_kategori']."</h4>
                                                    </div>

                                                    <div class='avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon'>
                                                        <span class='avatar-title rounded-circle bg-primary'>
                                                            <i class='bx bx-archive-in font-size-24'></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-3'>
                                        <div class='card mini-stats-wid'>
                                            <div class='card-body'>
                                                <div class='media'>
                                                    <div class='media-body'>
                                                        <p class='text-muted font-weight-medium'>Postingan</p>
                                                        <h4 class='mb-0'>".$data_statistik3['total_postingan']."</h4>
                                                    </div>

                                                    <div class='avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon'>
                                                        <span class='avatar-title rounded-circle bg-primary'>
                                                            <i class='bx bx-edit font-size-24'></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-3'>
                                        <div class='card mini-stats-wid'>
                                            <div class='card-body'>
                                                <div class='media'>
                                                    <div class='media-body'>
                                                        <p class='text-muted font-weight-medium'>Iklan</p>
                                                        <h4 class='mb-0'>".$data_statistik4['total_iklan']."</h4>
                                                    </div>

                                                    <div class='avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon'>
                                                        <span class='avatar-title rounded-circle bg-primary'>
                                                            <i class='bx bx-purchase-tag-alt font-size-24'></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>

               ";
         
         }elseif ($_SESSION['tipe_user']== "author") {
             echo "
                  <div class='col-xl-12'>
                                <div class='row'>
                              
                                    <div class='col-md-3'>
                                        <div class='card mini-stats-wid'>
                                            <div class='card-body'>
                                                <div class='media'>
                                                    <div class='media-body'>
                                                        <p class='text-muted font-weight-medium'>User</p>
                                                        <h4 class='mb-0'>".$data_statistik1['total_user']."</h4>
                                                    </div>

                                                    <div class='mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center'>
                                                        <span class='avatar-title'>
                                                            <i class='bx bx-user font-size-24'></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-3'>
                                        <div class='card mini-stats-wid'>
                                            <div class='card-body'>
                                                <div class='media'>
                                                    <div class='media-body'>
                                                        <p class='text-muted font-weight-medium'>Kategori</p>
                                                        <h4 class='mb-0'>".$data_statistik2['total_kategori']."</h4>
                                                    </div>

                                                    <div class='avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon'>
                                                        <span class='avatar-title rounded-circle bg-primary'>
                                                            <i class='bx bx-archive-in font-size-24'></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-3'>
                                        <div class='card mini-stats-wid'>
                                            <div class='card-body'>
                                                <div class='media'>
                                                    <div class='media-body'>
                                                        <p class='text-muted font-weight-medium'>Postingan</p>
                                                        <h4 class='mb-0'>".$data_statistik3['total_postingan']."</h4>
                                                    </div>

                                                    <div class='avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon'>
                                                        <span class='avatar-title rounded-circle bg-primary'>
                                                            <i class='bx bx-edit font-size-24'></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-3'>
                                        <div class='card mini-stats-wid'>
                                            <div class='card-body'>
                                                <div class='media'>
                                                    <div class='media-body'>
                                                        <p class='text-muted font-weight-medium'>Iklan</p>
                                                        <h4 class='mb-0'>".$data_statistik4['total_iklan']."</h4>
                                                    </div>

                                                    <div class='avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon'>
                                                        <span class='avatar-title rounded-circle bg-primary'>
                                                            <i class='bx bx-purchase-tag-alt font-size-24'></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            ";
         }
       }
   };
   
   ?>