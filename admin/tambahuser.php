 <?php

    error_reporting(0);

    include '../config/koneksi.php';

    // $id_user = $_GET['id_kelas'];

    $edit    = "SELECT kelas FROM kelas";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?> 
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
                                    <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NIP</label>
                                                <input required type="text" class="form-control" placeholder="NIP" name="nip">   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kelas</label>
                                                <input type="text" class="form-control" placeholder="Kelas" name="Id_kelas">
                                            </div>
                                        </div>
                                            
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Kelas</label>
                                        <select class="form-control" name="kelas" value="?php while($data = mysqli_fetch_array($query)){ echo $data['kelas']; } ?>" >

                                        <option><?php while($data = mysqli_fetch_array($query)){ echo $data['kelas']; } ?></option>
                                        <!-- <option>Admin</option>
                                        <option>Kepala Sekolah</option>
                                        <option>Wali kelas</option>
                                        <option>GuruTahfidz</option> -->
                                        </select> 
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tahun Ajaran</label>
                                                <input type="text" class="form-control" placeholder="Tahun Ajaran" name="tahun_ajaran">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">User Name</label>
                                                <input type="text" class="form-control" placeholder="User Name" name="username">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Pasword</label>
                                                <input type="password" class="form-control" placeholder="Password" name="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">jabatan</label>
                                        <select class="form-control" id="jenis_kelamin" name="jabatan">
                                        <option></option>
                                        <option>Admin</option>
                                        <option>Kepala Sekolah</option>
                                        <option>Wali kelas</option>
                                        <option>GuruTahfidz</option>
                                        </select> 
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Jenis kelamin</label>
                                        <select class="form-control" id="jenis_kelamin" name="jk">
                                        <option></option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                        </select> 
                                        </div>
                                    <div class="col-sm-3">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select class="form-control" id="jenis_kelamin" name="status">
                                        <option></option>
                                        <option>Sudah Menikah</option>
                                        <option>Belum Menikah</option>
                                        </select> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea rows="5" class="form-control" placeholder="Alamat" name="alamat"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nomer HP</label>
                                                <input type="text" class="form-control" placeholder="nomer hp" name="no_hp">
                                            </div>
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
