       <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FORM DATA USER</h4>
                            </div>
                            <div class="content">
                                <form action="../config/proses_tambah_user.php" method="POST" >
                                    <input type="hidden" name="id_user">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Username</label>
                                                <input required type="text" class="form-control" placeholder="username" name="username" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input required type="text" class="form-control" placeholder="password" name="password" required>   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jabatan</label>
                                                <select class="form-control" name="jabatan" required>
                                        <option></option>
                                        <option>Admin</option>
                                        <option>Kepala Sekolah</option>
                                        <option>Guru</option>

                                        </select> 
                                        </div>  
                                            </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">level</label>
                                                <select class="form-control" name="level" required>
                                        <option></option>
                                        <option>Admin</option>
                                        <option>Kepala Sekolah</option>
                                        <option>Guru</option>
                                        <option>Guru Tahfidz</option>
                                        </select> 
                                        </div>     
                                            </div>
                                        </div>


                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Nama Guru</label>
                                            <select class="form-control" name="id_guru" aria-describedby="basic-addon1">
                                           <?php
                                               $guru = "SELECT * FROM guru";
                                               $queryguru = mysqli_query($konek,$guru);
                                               while ($dataguru = mysqli_fetch_array($queryguru)) { ?>
                                            
                                                    <option value="<?php echo $dataguru['id_guru'] ?>"> <?php echo $dataguru['namab'] ?>
                                                
                                                  </option>
                                                <?php
                                               }
                                               ?>
                                                    
                                            </select>
                                        </div>
                                        </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Data User</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         