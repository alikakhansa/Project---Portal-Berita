<?php 
   @$page = $_GET['aksi'];
    ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Profile</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
<!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>ANDA HANYA DAPAT MENGUBAH FOTO PROFILE, JIKA INGIN MENGUBAH IDENTITAS LAINNYA HUBUNGI ADMIN</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>ANDA HANYA DAPAT MENGUBAH FOTO PROFILE, JIKA INGIN MENGUBAH IDENTITAS LAINNYA MASUK KE-HALAMAN USER</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div> -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="bg-soft-primary">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Your Profile!</h5>
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="assets/images/profile-img.png
                                                " alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="avatar-md profile-user-wid mb-4">
                                                    <img src="../pages/images/profile/<?php echo $_SESSION['gambar'] ?>" alt="" class="img-thumbnail rounded-circle">
                                                </div>
                                                <h5 class="font-size-15">Admin</h5>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="pt-4">

                                                    <div class="row">
                                                        <div class="col-12">
                                                             <h5 class="font-size-15"><?php echo $_SESSION['nama_lengkap'] ?></h5>
                                                              <h5 class="font-size-15"><?php echo $_SESSION['username'] ?></h5>
                                                        </div>                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-10">UPDATE PROFILE</h4>

                                        <form method="post" action="../pages/profil1/proses_edit.php" enctype="multipart/form-data">
                                            <div class="form-group row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Picture</label>
                                                <div class="col-sm-9">
                                                    <input type="file" id="horizontal-email-input" name="file">
                                                    <input type="hidden" id="horizontal-email-input" name="id_login" value="<?php echo $_SESSION['id_login'] ?>">
                                                </div>
                                            </div>
                                           

                                            <div class="form-group row justify-content-end">
                                                <div class="col-sm-9">                       
                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">UPDATE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                  