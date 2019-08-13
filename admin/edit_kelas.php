<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_kelas = $_GET['id_kelas'];

    $edit    = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
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
                                <h4 class="title">FORM KELAS Edit</h4>
                            </div>
                            <div class="content">
                                <form action="../config/proses_edit_kelas.php" method="POST" >
                                  <input type="hidden" name="id_kelas" value="<?php echo $data['id_kelas']; ?>" >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun Ajaran</label>
                                                <select class="form-control" name="tahun_ajaran" required>
                                                    <option><?php echo $data['tahun_ajaran']; ?></option>
                                                    <option>2018/2019</option>
                                                    <option>2019/2020</option>
                                                    <option>2020/2021</option>
                                                    <option>2021/2022</option>
                                                    <option>2022/2023</option>
                                                    <option>2023/2024</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Kelas</label>
                                               <select class="form-control" name="nama_kelas" required>
                                                  <option><?php echo $data['nama_kelas']; ?></option>
                                                    <option>Kelas 1</option>
                                                    <option>Kelas 2</option>
                                                    <option>Kelas 3</option>
                                                    <option>Kelas 4</option>
                                                    <option>Kelas 5</option>
                                                    <option>Kelas 6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Kode Pelajaran</label>
                                               <select class="form-control" name="id_kurikulum" aria-describedby="basic-addon1">
                                           <?php
                                               $kur = "SELECT * FROM kurikulum";
                                               $querykur = mysqli_query($konek,$kur);
                                               while ($datakur = mysqli_fetch_array($querykur)) { ?>
                                            
                                                    <option value="<?php echo $datakur['id_kurikulum'] ?>"> <?php echo $datakur['kode'] ?>
                                                
                                                  </option>
                                                <?php
                                               }
                                               ?>
                                                    
                                            </select>
                                            </div>
                                        </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Kode Pelajaran</label>
                                                <select class="form-control" name="id_guru" aria-describedby="basic-addon1">
                                           <?php
                                               $gur = "SELECT * FROM guru";
                                               $querygur = mysqli_query($konek,$gur);
                                               while ($datagur = mysqli_fetch_array($querygur)) { ?>
                                            
                                                    <option value="<?php echo $datagur['id_guru'] ?>"> <?php echo $datagur['namab'] ?>
                                                
                                                  </option>
                                                <?php
                                               }
                                               ?>
                                                    
                                            </select>
                                    </div>
                                    
                                     
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Kelas</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>