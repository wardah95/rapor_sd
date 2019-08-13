<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_guru = $_GET['id_guru'];

    $edit    = "SELECT * FROM guru WHERE id_guru = '$id_guru'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);
///die(var_dump($id_guru));

?> 
       <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><b>FORM DATA GURU</b></h4><H5>YANG AKAN DI UBAH</H5>
                            </div>
                            <div class="content">
                                <form action="../config/proses_edit_guru.php" method="POST" >
                                    <input type="hidden" name="id_guru" value="<?php echo $data['id_guru']; ?>" >
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="namab" value="<?php echo $data['namab']; ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NIP</label>
                                                <input required type="text" class="form-control" placeholder="NIP" name="nip" value="<?php echo $data['nip']; ?>" required>   
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                                <select class="form-control" name="jk" value="<?php echo $data['jk']; ?>" required>
                                        <option><?php echo $data['jk']; ?></option>
                                        <option>Perempuan</option>
                                        <option>Laki-laki</option>
                                        </select> 
                                        </div>  
                                            </div>
                                    </div>        

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                                                <input required type="text" class="form-control" placeholder="pendidikan" name="pendidikan" value="<?php echo $data['pendidikan']; ?>" required>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tempat Lahir</label>
                                                <input required type="text" class="form-control" placeholder="Tempat Lahir" name="tmp_lahir" value="<?php echo $data['tmp_lahir']; ?>" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                                <input required type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" required>   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat</label>
                                                <input required type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $data['alamat']; ?>" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NO HP</label>
                                                <input required type="text" class="form-control" placeholder="No HP" name="no_hp" value="<?php echo $data['no_hp']; ?>" required>   
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Data Guru </button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>