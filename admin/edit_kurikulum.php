<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_kurikulum = $_GET['id_kurikulum'];

    $edit    = "SELECT * FROM Kurikulum WHERE id_kurikulum= '$id_kurikulum'";
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
                                <h4 class="title">FORM KURIKULUM EDIT</h4>
                            </div>
                            <div class="content">
                                <form action="../config/proses_edit_kurikulum.php" method="POST" >
                                    <input type="hidden" name="id_kurikulum" value="<?php echo $id_kurikulum ?>">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Tingkat Kelas</label>
                                                <select class="form-control" name="tingkatkelas"  required>
                                                    <option><?php echo $data['tingkatkelas']; ?></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Mata Pelajaran</label>
                                                <select class="form-control" name="id_pelajaran" aria-describedby="basic-addon1" required>
                                               <?php
                                               $pel = "SELECT * FROM mata_pelajaran";
                                               $querypel = mysqli_query($konek,$pel);
                                               while ($datapel = mysqli_fetch_array($querypel)) { ?>
                                            
                                                    <option value="<?php echo $datapel['id_pelajaran'] ?>"> <?php echo $datapel['nama_pelajaran'] ?>
                                                
                                                  </option>
                                                <?php
                                               }
                                               ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Kode Pelajaran</label>
                                                <input type="text" class="form-control" placeholder="Kode Pelajaran" name="kode" value="<?php echo $data['kode']?>">
                                            </div>
                                        </div> -->
                                    </div>
                                     
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Kurikulum</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
