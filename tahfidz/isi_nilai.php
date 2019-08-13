<?php

   

    include '../config/koneksi.php';

    $id_siswa = $_GET['id_siswa'];
    $id_surat = $_GET['id_surat'];


    $update  = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil   = mysqli_query($konek, $update)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

    $update1  = "SELECT * FROM surat WHERE id_surat = '$id_surat'";
    $hasil1   = mysqli_query($konek, $update1)or die(mysql_error());
    $data1    = mysqli_fetch_array($hasil1);

    $update2  = "SELECT * FROM nilai_hafalan";
    $hasil2   = mysqli_query($konek, $update2)or die(mysql_error());
    $data2    = mysqli_fetch_array($hasil2);
// // die(var_dump($id_surat));
?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><B>Isi Nilai dan Keterangan dari</B></h4><h5>Nama : <?php echo $data['nama'] ?> <br> Surat : <?php echo $data1['nama'] ?> </h5>
                            </div>
                            <div class="content">
                                <form action="../config/proses_tambah_nilai_hafalan.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_surat" value="<?php echo $id_surat ?>">
                                    <input type="hidden" name="id_siswa" value="<?php echo $id_siswa ?>">
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nilai</label>
                                                <input type="text" class="form-control" name="nilai">
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Keteranagn</label>
                                               <input type="text" class="form-control" name="keterangan" >
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan Nilai</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

