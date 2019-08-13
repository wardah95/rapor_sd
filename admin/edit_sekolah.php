<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_sekolah = $_GET['id_sekolah'];

    $edit    = "SELECT * FROM sekolah WHERE id_sekolah = '$id_sekolah'";
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
                                <h4 class="title"><b>FORM DATA SEKOLAH</b></h4><H5>YANG AKAN DI UBAH</H5>
                            </div>
                            <div class="content">
                                <form action="../config/proses_edit_sekolah.php" method="POST" >
                                    <input type="hidden" name="id_sekolah" value="<?php echo $id_sekolah ?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama Sekolah</label>
                                                <input type="text" class="form-control" placeholder="Nama Sekolah" name="nama" value="<?php echo $data['nama']; ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NPSN/NSS</label>
                                                <input required type="text" class="form-control" placeholder="NPSN/NSS" name="npsn_nss" value="<?php echo $data['npsn_nss']; ?>" required> 
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat</label>
                                                <input required type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $data['alamat']; ?>" required> 
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kode Pos</label>
                                                <input required type="text" class="form-control" placeholder="Kode Pos" name="kode_pos" value="<?php echo $data['kode_pos']; ?>" required>   
                                            </div>
                                        </div>
                                    </div>      

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Telepon</label>
                                                <input required type="text" class="form-control" placeholder="Telepon" name="no_hp" value="<?php echo $data['no_hp']; ?>"required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kelurahan/Desa</label>
                                                <input required type="text" class="form-control" placeholder="Kelurahan/Desa" name="kelurahan_desa" value="<?php echo $data['kelurahan_desa']; ?>"required>   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">kecamatan</label>
                                                <input required type="text" class="form-control" placeholder="kecamatan" name="kecamatan" value="<?php echo $data['kecamatan']; ?>" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kabupaten/Kota</label>
                                                <input required type="text" class="form-control" placeholder="Kabupaten/Kota" name="kabupaten_kota" value="<?php echo $data['kabupaten_kota']; ?>" required>   
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Provinsi</label>
                                                <input required type="text" class="form-control" placeholder="Provinsi" name="provinsi" value="<?php echo $data['provinsi']; ?>" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input required type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $data['email']; ?>" required>   
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Data Sekolah</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>