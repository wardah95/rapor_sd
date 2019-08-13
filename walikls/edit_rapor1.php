<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_nilai       = $_GET['id_nilai'];
    $id_siswa       = $_GET['id_siswa'];
    $id_kurikulum   = $_GET['id_kurikulum'];
    $predikat_pengetahuan = $data['predikat_pengetahuan'];
    $predikat_keterampilan = $data['predikat_keterampilan'];

    $edit    = "SELECT * FROM nilai_rapor1 WHERE id_nilai = '$id_nilai'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

    $edit1    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil1   = mysqli_query($konek, $edit1)or die(mysql_error());
    $data1    = mysqli_fetch_array($hasil1);

    // $edit    = "SELECT * FROM kurikulum WHERE id_kurikulum = '$id_kurikulum'";
    // $hasil2   = mysqli_query($konek, $edit2)or die(mysql_error());
    // $data2    = mysqli_fetch_array($hasil2);
// ///die(var_dump($id_siswa));
?>
<script><!--
function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
one = document.autoSumForm.pengetahuan_harian.value;
two = document.autoSumForm.pengetahuan_uts.value;
three = document.autoSumForm.pengetahuan_uas.value;
document.autoSumForm.nilai_pengetahuan.value = (one*0.5) + (two*0.25) + (three*0.25)  ;}
function stopCalc(){
clearInterval(interval);}
</script>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FORM RAPOR SISWA</h4>
                                <h5>nama siswa <?php echo $data1['nama'] ?></h5>
                            </div>
                            <div class="content">
                                <form name='autoSumForm' action="../config/proses_edit_nilai_rapor1.php" method="POST" >
                                   <input type="hidden" name="id_nilai" value="<?php echo $data['id_nilai']; ?>" > 
                                   <input type="hidden" name="id_siswa" value="<?php echo $data1['id_siswa']; ?>" >
                                   <input type="hidden" name="id_kurikulum" value="<?php echo $data['id_kurikulum']; ?>" >
                                   <input type="hidden" name="id_kelas" value="<?php echo $data['id_kelas']; ?>" >
                                   <input type="hidden" name="predikat_pengetahuan" value="<?php echo $data['predikat_pengetahuan']; ?>" >
                                   <input type="hidden" name="predikat_keterampilan" value="<?php echo $data['predikat_keterampilan']; ?>" >
                                   
                                    <div class="row">
                                        <div class="col-md-5">
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
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Semester</label>
                                                <select class="form-control" name="semester" required>
                                        <option><?php echo $data['semester']; ?></option>
                                        <option>Ganjil</option>
                                        <option>Genap</option>
                                        </select> 
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <label for="exampleInputEmail1"><h5><b>PENGETAHUAN</b></h5></label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Harian</label>
                                                <input type="text" class="form-control" placeholder="Nilai Harian" name="pengetahuan_harian"  onFocus="startCalc();" onBlur="stopCalc();" value="<?php echo $data['pengetahuan_harian']; ?>"required> 
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">UTS</label>
                                                <input required type="text" class="form-control" placeholder="Nilai UTS" name="pengetahuan_uts" value="<?php echo $data['pengetahuan_uts']; ?>"  onFocus="startCalc();" onBlur="stopCalc();" required> 
                                            </div>  
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">UAS</label>
                                                <input required type="text" class="form-control" placeholder="Nilai UAS" value="<?php echo $data['pengetahuan_uas']; ?>" name="pengetahuan_uas"  onFocus="startCalc();" onBlur="stopCalc();" required> 
                                            </div>  
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nilai Akhir</label>
                                                <input required type="number" class="form-control" placeholder="Nilai Akhir" name="nilai_pengetahuan" value="<?php echo $data['nilai_pengetahuan']; ?>" readonly >   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Deskripsi</label>
                                                <input required type="text" class="form-control" placeholder="des_peng" name="des_peng" value="<?php echo $data['des_peng']; ?>" >   
                                            </div>
                                        </div>
                                    </div>
                                    <label for="exampleInputEmail1"><h5><b>KETERAMPILAN</b></h5></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nilai</label>
                                                <input required type="text" class="form-control" placeholder="Nilai" name="nilai_keterampilan" value="<?php echo $data['nilai_keterampilan']; ?>">   
                                            </div>
                                        </div>
                                        <div class="col-md
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Deskripsi</label>
                                                <input required type="text" class="form-control" placeholder="des_ket" name="des_ket" value="<?php echo $data['des_ket']; ?>"  >   
                                            </div>
                                        </div>
                                       <div class="col-md-4">
                                        <div class="form-group">     
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Nilai</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>