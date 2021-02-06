<?php 
   @$page = $_GET['aksi'];
    ?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="index.php?page=foto">Foto</a></li>
     
   </ol>
</div>
</br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Foto</h4>
                                        <a href="index.php?page=foto&aksi=tambah" class="btn btn-primary waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Tambah Foto"><i class="bx bx-plus font-size-16 align-middle mr-2"></i>Foto</a><br><br>
                                        <div>
                                        <?php 
                      
                      
                       include '../inc/koneksi.php';
                       $TAMPIL = "SELECT * FROM foto";
                                $HASIL = mysqli_query($koneksi,$TAMPIL);
                                $NO = 1;
									while($row = mysqli_fetch_assoc($HASIL)){
                                        ?>
							 <td>
                        <center><?php echo $NO; ?></center>
                     </td>
                     <td>
                        <center><?php echo "<img src='$row[id_foto]'width='70'/>"; ?></center>
                     </td>
                     
											
											<td>
												
												<a href="../pages/Foto/hapus.php?id_foto=<?php echo $row['id_foto']?>" class="btn btn-danger tom" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fas fa-trash"> Delete</a></i>
											</td>
										</tr>
                                        <?php
										
										
                                    
								}
									
								
								?>
                        </tbody>
                  
                </div>
            </div>
        </div>
  

  