<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_pelajaran = $_GET['id_pelajaran'];

    $edit    = "SELECT * FROM mata_pelajaran WHERE id_pelajaran = '$id_pelajaran'";
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
                                <h4 class="title"><b>FORM MATAPELAJARAN</b></h4><h5>DATA YANG AKAN DIUBAH </h5>
                            </div>
                            <div class="content">
                                <form action="../config/proses_edit_pelajaran.php" method="POST" enctype="multipart/form-data">
                                    
                                    <input type="hidden" name="id_pelajaran" value="<?php echo $id_pelajaran ?>">
                                     <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama Pelajaran</label>
                                                <input type="text" class="form-control" placeholder="Nama Pelajaran" name="mata_pelajaran" value="<?php echo $data['nama_pelajaran']; ?>" >
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">jenis</label>
                                        <select class="form-control"  name="jenis" value="<?php echo $data['jenis']; ?>" >
                                        <option value="<?php echo $data['jenis']; ?>" ></option>
                                        <option>Muatan Pelajaran</option>
                                        <option>Muatan Lokal</option>
                                        </select> 
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Matapelajaran</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- die(var_dump())
 