<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_user = $_GET['id_user'];

    $edit    = "SELECT * FROM user WHERE id_user = '$id_user'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);
// die(var_dump($id_user));

?> 
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><B>FORM DATA USER</B></h4> <H5>YANG AKAN DI UBAH</H5>
                            </div>
                            <div class="content">
                                <form action="../config/proses_edit_user.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                 <input class="form-control" name="nama" type="text" value="<?php echo $data['nama']; ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">User name</label>
                                                <input class="form-control" name="username" type="text" value="<?php echo $data['username']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="text" value="<?php echo $data['password']; ?>" class="form-control" placeholder="Password" name="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Level</label>
                                                <select class="form-control" name="level" required>
                                        <option><?php echo $data['level']; ?></option>
                                        <option>Admin</option>
                                        <option>Kepala Sekolah</option>
                                        <option>Guru</option>
                                        <option>Guru Tahfidz</option>
                                        </select> 
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>jabatan</label>
                                                <select class="form-control" name="jabatan" required>
                                        <option><?php echo $data['jabatan']; ?></option>
                                        <option>Admin</option>
                                        <option>Kepala Sekolah</option>
                                        <option>Guru</option>
                                        </select>   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">id_guru</label>
                                            <select class="form-control" id="id_guru" name="id_guru" aria-describedby="basic-addon1">
                                            <?php
                                            include '../config/koneksi.php';
                                            $id_guru="SELECT id_guru FROM guru";
                                            $queryguru = mysqli_query($konek,$id_guru);
                                            while ($tmpguru= mysqli_fetch_array($queryguru)){?>>
                                            
                                            <option value="<?= $tmpguru['id_guru']; ?>" <?php if ($data['id_guru']=='$data["id_guru"]'){echo "select";} ?>><?= $tmpguru["id_guru"];?> </option>
                                            <?php  
                                            } 
                                            ?>
                                            <option></option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Data User</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
