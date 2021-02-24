              <?php 
                        $TAMPIL = "SELECT * FROM iklan";
                        $HASIL = mysqli_query($koneksi,$TAMPIL);
                        $NO = 1;
                          while ($row=mysqli_fetch_array($HASIL)) {
                        $NO;
                        $ID               = $row['id_iklan'];
                        $NAMA_IKLAN    = $row['nama_iklan'];                               
                        $GAMBAR    = $row['gambar'];                               
                        ?>
               <div class="aside-widget text-center">
                  <a href="#" style="display: inline-block;margin: auto;">
                     <img class="img-responsive" src="pages/images/iklan/<?php echo $GAMBAR; ?>" alt="">
                  </a>
               </div>
               <?php
           }
           ?>