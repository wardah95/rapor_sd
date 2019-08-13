<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_siswa = $_GET['id_siswa'];

    $edit    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);
///die(var_dump($id_siswa));
?>

       <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><b>FORM DATA SISWA</b></h4><H5>YANG AKAN DI UBAH</H5>
                            </div>
                            <div class="content">
                                <form action="../config/proses_edit_siswa.php" method="POST" >
                                    <input type="hidden" name="id_siswa" value="<?php echo $id_siswa ?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $data['nama']; ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">No Induk</label>
                                                <input required type="text" class="form-control" placeholder="No Induk" name="no_induk" value="<?php echo $data['no_induk']; ?>" required> 
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
                                                <label for="exampleInputEmail1">Agama</label>
                                                <input required type="text" class="form-control" placeholder="Agama" name="agama" value="<?php echo $data['agama']; ?>" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat</label>
                                                <input required type="text" class="form-control" placeholder="Alamat" name="alamat" required>   
                                            </div>
                                        </div>
                                    </div>      

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tempat Lahir</label>
                                                <input required type="text" class="form-control" placeholder="Tempat Lahir" name="tmp_lahir" value="<?php echo $data['tmp_lahir']; ?>"required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                                <input required type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>"required>   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Ayah</label>
                                                <input required type="text" class="form-control" placeholder="Nama Ayah" name="ayah" value="<?php echo $data['ayah']; ?>" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Ibu</label>
                                                <input required type="text" class="form-control" placeholder="Nama Ibu" name="ibu" value="<?php echo $data['ibu']; ?>" required>   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Pendidikan Terakhir</label>
                                                <input type="text" class="form-control" placeholder="Pendidikan Terakhir" name="pendidikan" value="<?php echo $data['pendidikan']; ?>"  required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jalan</label>
                                                <input required type="text" class="form-control" placeholder="Jalan" name="jln" value="<?php echo $data['jln']; ?>"  required> 
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Kelurahan</label>
                                                <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan" value="<?php echo $data['kelurahan']; ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kecamatan</label>
                                                <input required type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" value="<?php echo $data['kecamatan']; ?>" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Kabupaten</label>
                                                <input type="text" class="form-control" placeholder="Kabupaten" name="kabupaten" value="<?php echo $data['kabupaten']; ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Provinsi</label>
                                                <input required type="text" class="form-control" placeholder="Provinsi" name="propinsi" value="<?php echo $data['propinsi']; ?>"  required> 
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NO HP</label>
                                                <input required type="text" class="form-control" placeholder="No HP" name="no_hp" value="<?php echo $data['no_hp']; ?>" required>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Status</label>
                                                <select class="form-control" name="status" value="<?php echo $data['status']; ?>"required>
                                        <option><?php echo $data['status']; ?></option>
                                        <option>Aktif</option>
                                        <option>Tidak Aktif</option>
                                        </select>   
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Data siswa</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>