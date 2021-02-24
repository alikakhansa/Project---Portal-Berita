<?php 
                        $TAMPIL = "SELECT kategori.*,post.* FROM post 
                        INNER JOIN kategori ON post.id_kategori=kategori.id_kategori
                        ORDER BY post.id_post ASC";
                        $HASIL = mysqli_query($koneksi,$TAMPIL);
                        $NO = 1;
                          while ($row=mysqli_fetch_array($HASIL)) {
                       $ID    = $row['id_post'];    
                       $JUDUL    = $row['judul'];    
                        $NAMA_KATEGORI    = $row['nama_kategori'];
                        $SHORT    = $row['short_deskripsi'];   
                        $ID_KATEGORI    = $row['id_kategori'];
                        $CREATE    = $row['created_at'];
                        $USER    = $row['nama_lengkap'];
                        $GAMBAR    = $row['gambar'];    
                        $SLUG    = $row['slug'];    
                        ?>
                        <div class="post post-row">
                     
                        
                     <a class="post-img" href="blog-post.html"><img src="pages/images/post/<?php echo $GAMBAR; ?>" alt="" height="130"></a>
                     <div class="post-body">
                        <h3 class="post-category"><a href="plugin/article.php?id=<?php echo($row['id_post']) ?>/<?php echo $SLUG; ?>"><?php echo $JUDUL; ?></a></h3>
                        <ul class="post-meta">
                           <li><a href="author.html"><?php echo $USER; ?></a></li>
                           <li><?php echo $CREATE; ?></li>
                        </ul>
                        <h5><?php echo $SHORT; ?></h5>
                     </div>
                   </div>
                   <hr>
               <?php 
                  
                  }
                   ?>

                