   <?php

    include '../config/koneksi.php';

    $id_siswa   = $_GET['id_siswa'];
    $id_hafalan = $_GET['id_hafalan'];
    $id_surat   = $_GET['id_surat'];

    $update     = "select a.*, b.*, c.*  from surat a   
              LEFT JOIN nilai_hafalan b ON a.id_surat = b.id_surat
              LEFT JOIN siswa c ON b.id_siswa = c.id_siswa";
    $hasil      = mysqli_query($konek, $update)or die(mysql_error());
    $data       = mysqli_fetch_array($hasil);

    $update1    = "select * from surat";
    $hasil1     = mysqli_query($konek, $update1)or die(mysql_error());
    $data1      = mysqli_fetch_array($hasil1);
?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Isi Nilai dan Keterangan dari</h4><h5>Nama : <?php echo $data['nama'] ?> <br> Surat : <?php echo $data1['nama'] ?> </h5>
                            </div>
                            <div class="content">
                                <form action="../config/proses_edit_nilai_hafalan.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_hafalan" value="<?php echo $id_hafalan ?>">
                                    <input type="hidden" name="id_surat" value="<?php echo $id_surat ?>">
                                    <input type="hidden" name="id_siswa" value="<?php echo $id_siswa ?>">
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nilai</label>
                                                <input type="text" class="form-control" name="nilai" value="<?php echo $data['nilai']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                               <input type="text" class="form-control" name="keterangan" value="<?php echo $data['keterangan']; ?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan Nilai</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>



