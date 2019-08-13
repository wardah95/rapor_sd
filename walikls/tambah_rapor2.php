<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_siswa       = $_GET['id_siswa'];
    $id_kelas       = $_GET['id_kelas'];

    $edit    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

    $edit2    = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
    $hasil2   = mysqli_query($konek, $edit2)or die(mysql_error());
    $data2   = mysqli_fetch_array($hasil2);
// die(var_dump($id_siswa));
?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FORM RAPOR SISWA</h4>
                                <h5>nama siswa <?php echo $data['nama'] ?></h5>
                            </div>
                            <div class="content">
                                <form action="../config/proses_tambah_nilai_rapor2.php" method="POST" >
                                    <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa']; ?>" >
                                    <input type="hidden" name="id_kelas" value="<?php echo $data2['id_kelas']; ?>" > 
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Tahun Ajaran</label>
                                                <select class="form-control" name="tahun" required>
                                        <option>2018/2019</option>
                                        <option>2019/2020</option>
                                        <option>2020/2021</option>
                                        <option>2021/2022</option>
                                        <option>2022/2023</option>
                                        <option>2023/2024</option>
                                        </select> 
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Semester</label>
                                                <select class="form-control" name="semester" required>
                                        <option>Ganjil</option>
                                        <option>Genap</option>
                                        </select> 
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <label for="exampleInputEmail1"><h5><b>KOMPONEN SIKAP</b></h5></label>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sikap Spiritual</label>
                                                <input required type="text" class="form-control" placeholder="Sikap Spiritual" name="spiritual" required> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sikap Sosial</label>
                                                <input required type="text" class="form-control" placeholder="Sikap Sosial" name="sosial" required> 
                                            </div>  
                                        </div>
                                    </div>

                                    <label for="exampleInputEmail1"><h5><b>BERAT DAN TINGGI BADAN</b></h5></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Berat semester 1</label>
                                                <input type="text" class="form-control" placeholder="Berat Semester 1" name="berat1" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Berat semester 2</label>
                                                <input type="text" class="form-control" placeholder="Berat Semester 2" name="berat2">   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tinggi semester 1</label>
                                                <input required type="text" class="form-control" placeholder="Tinggi Semester 1" name="tinggi1" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tinggi semester 2</label>
                                                <input type="text" class="form-control" placeholder="Berat Semester 2" name="tinggi2">   
                                            </div>
                                        </div>
                                    </div>

                                    <label for="exampleInputEmail1"><h5><b>KONDISI FISIK</b></h5></label>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Pendengaran</label>
                                                <input  type="text" class="form-control" placeholder="Pendengaran" name="pendengaran" required>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Pengelihatan</label>
                                                <input  type="text" class="form-control" placeholder="Pengelihatan" name="pengelihatan" required>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">GIGI</label>
                                                <input type="text" class="form-control" placeholder="Gigi" name="gigi" required>   
                                            </div>
                                        </div>
                                    </div>

                                    <label for="exampleInputEmail1"><h5><b>Ektra Kurikuler</b></h5></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jenis Kurikuler</label>
                                                <input  type="text" class="form-control" placeholder="Jenis Predikat" name="ekskul1" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">keterangan</label>
                                                <input  type="text" class="form-control" placeholder="keterangan" name="keterangan1" >   
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jenis Kurikuler</label>
                                                <input  type="text" class="form-control" placeholder="Jenis Predikat" name="ekskul2" >   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">keterangan</label>
                                                <input type="text" class="form-control" placeholder="keterangan" name="keterangan2" >   
                                            </div>
                                        </div>
                                    </div>

                                    <label for="exampleInputEmail1"><h5><b>PRESTASI</b></h5></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">jenis prestasi</label>
                                                <input  type="text" class="form-control" placeholder="Jenis Predikat" name="prestasi1" >   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">keterangan</label>
                                                <input  type="text" class="form-control" placeholder="keterangan" name="keterangan_1" >   
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">jenis prestasi</label>
                                                <input  type="text" class="form-control" placeholder="Jenis Predikat" name="prestasi2" >   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">keterangan</label>
                                                <input type="text" class="form-control" placeholder="keterangan" name="keterangan_2" >   
                                            </div>
                                        </div>
                                    </div>
                                    <label for="exampleInputEmail1"><h5><b>KEHADIRAN</b></h5></label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sakit</label>
                                                <input  type="text" class="form-control" placeholder="Sakit" name="sakit" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Ijin</label>
                                                <input  type="text" class="form-control" placeholder="Ijin" name="ijin" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanpa Keterangan</label>
                                                <input type="text" class="form-control" placeholder="Tanpa Keterangan" name="absen" required>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><b>SARAN-SARAN</b></label>
                                                <input required type="text" class="form-control" placeholder="Saran-saran" name="saran2" required>   
                                            </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Data</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>