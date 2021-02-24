   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <style>
         /* Make the image fully responsive */
         .carousel-inner img {
         width: 100%;
         height: 370px;
         }
      </style>
      
            <div id="hot-post" class="row hot-post">
               <div class="col-md-6 hot-post-left">
                  <!-- post --> 
                  <div id="demo" class="carousel slide post post-thumb" data-ride="carousel">
                     <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2" class="active"></li>
                     </ul>
                     <div class="carousel-inner">
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
                        $GAMBAR    = $row['gambar'];   
                        ?>
                        <div class="carousel-item active">
                           <img src="pages/images/post/<?php echo $GAMBAR; ?>" alt="Los Angeles" width="1100" height="500">
                           <div class="carousel-caption">
                              <h3 class="post-title"><a href="blog-post.html"><?php echo $JUDUL; ?></a></h3>
                              <ul class="post-meta">
                                 <li><a href="author.html">John Doe</a></li>
                                 <li>20 April 2018</li>
                              </ul>
                           </div>
                        </div>
                          <?php
              }
              ?>
                     </div>
                     <a class="carousel-control-prev" href="#demo" data-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                     </a>
                     <a class="carousel-control-next" href="#demo" data-slide="next">
                     <span class="carousel-control-next-icon"></span>
                     </a>
                  </div>
                  <!-- /post -->
               
               </div>
               <div class="col-lg-3 hot-post-right">
                  <!-- post --><?php 
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
                        $GAMBAR    = $row['gambar'];   
                        ?>
                  <div class="post post-thumb">
                     <a class="post-img" href="blog-post.html"><img src="./img/hot-post-3.jpg" alt=""></a>
                     <div class="post-body">
                        <h3 class="post-title"><a href="blog-post.html"><?php echo $JUDUL; ?></a></h3>
                        <ul class="post-meta">
                           <li><a href="author.html">John Doe</a></li>
                           <li>20 April 2018</li>
                        </ul>
                     </div>
                  </div>
                  <!-- /post -->
                  <!-- post -->
                 <?php } ?>
                  

                  <!-- /post -->
               </div>
              
            </div>
            <!-- /row -->
