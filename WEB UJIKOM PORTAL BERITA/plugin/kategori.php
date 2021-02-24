
<div id="nav-bottom">
               <div class="container">
                  <!-- nav -->
                  <ul class="nav-menu post-category">
                     <?php 
                        $TAMPIL = "SELECT * FROM kategori";
                        $HASIL = mysqli_query($koneksi,$TAMPIL);
                        
                          while ($row=mysqli_fetch_array($HASIL)) {
                        
                        $ID               = $row['id_kategori'];
                        $NAMA_KATEGORI    = $row['nama_kategori'];                               
                        ?>
                     <li>
                        <a href="plugin/list_kategori.php?kategori=<?php echo $row['nama_kategori']; ?>"><?php echo $row['nama_kategori']; ?></a>
                     </li>
                     <?php } ?>
                  </ul>
         			
                  <!-- /nav -->
               </div>
            </div>