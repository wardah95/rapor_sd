<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_walikelas = $_GET['id_walikelas'];

    $edit    = "SELECT * FROM walikelas WHERE id_walikelas = '$id_walikelas'";
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
                                <h4 class="title">FORM WALIKELAS</h4>
                            </div>
                            <div class="content">
                                <form action="../config/proses_edit_wali.php" method="POST" >                                       
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Guru</label>
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
                                          </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Nama Kelas</label>
                                                <select class="form-control" name="id_kelas" aria-describedby="basic-addon1">
                                           <?php
                                               $kel = "SELECT * FROM kelas";
                                               $querykel = mysqli_query($konek,$kel);
                                               while ($datakel = mysqli_fetch_array($querykel)) { ?>
                                            
                                                    <option value="<?php echo $datakel['id_kelas'] ?>"> <?php echo $datakel['nama_kelas'] ?>
                                                
                                                  </option>
                                                <?php
                                               }
                                               ?>
                                                    
                                            </select>
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Siswa</label>
                                                <select class="form-control" name="id_siswa" aria-describedby="basic-addon1">
                                           <?php
                                               $sis = "SELECT * FROM siswa";
                                               $querysis = mysqli_query($konek,$sis);
                                               while ($datasis = mysqli_fetch_array($querysis)) { ?>
                                            
                                                    <option value="<?php echo $datasis['id_siswa'] ?>"> <?php echo $datasis['nama'] ?>
                                                
                                                  </option>
                                                <?php
                                               }
                                               ?>
                                                    
                                            </select>
                                        </div>
                                     
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Walikelas</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>