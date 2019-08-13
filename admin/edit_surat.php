<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_surat = $_GET['id_surat'];

    $edit    = "SELECT * FROM surat WHERE id_surat = '$id_surat'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);
// die(var_dump($id_surat));

?> 
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><B>FORM HAFALAN SURAT</B></h4><h5>YANG AKAN DIUBAH</h5>
                            </div>
                            <div class="content">
                                <form action="../config/proses_edit_surat.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_surat" value="<?php echo $id_surat ?>">
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Surat</label>
                                                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" >
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Jus</label>
                                               <select class="form-control" name="juz" required ">
                                                    <option> <?php echo $data['juz']; ?></option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Surat</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>