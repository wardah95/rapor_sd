
   <?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_siswa       = $_GET['id_siswa'];
    $id_kurikulum   = $_GET['id_kurikulum'];
    $id_kelas       = $_GET['id_kelas'];

    $edit    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

    $edit1    = "SELECT * FROM kurikulum WHERE id_kurikulum = '$id_kurikulum'";
    $hasil1   = mysqli_query($konek, $edit1)or die(mysql_error());
    $data1   = mysqli_fetch_array($hasil1);

    $edit2    = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
    $hasil2   = mysqli_query($konek, $edit2)or die(mysql_error());
    $data2   = mysqli_fetch_array($hasil2);
// die(var_dump($id_siswa));
?>   

<!-- <script>
function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
one = document.autoSumForm.pengetahuan_harian.value;
two = document.autoSumForm.pengetahuan_uts.value;
three = document.autoSumForm.pengetahuan_uas.value;
document.autoSumForm.nilai_pengetahuan.value = (one*0.5) + (two*0.25) + (three*0.25)  ;}
function stopCalc(){
clearInterval(interval);}
</script> -->

       <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FORM RAPOR SISWA</h4>
                                <h5>siswa <?php echo $data['nama'] ?></h5>
                            </div>
                            <div class="content">
                                <form name='autoSumForm' action="../config/proses_tambah_nilai_rapor1.php" method="POST" >
                                   <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa']; ?>" >
                                   <input type="hidden" name="nama" value="<?php echo $data['nama']; ?>" >
                                   <input type="hidden" name="id_kurikulum" value="<?php echo $data1['id_kurikulum']; ?>" >
                                   <input type="hidden" name="id_kelas" value="<?php echo $data2['id_kelas']; ?>" >
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">

                                                <label>Tahun Ajaran</label>
                                                <select class="form-control" name="tahun_ajaran" required>
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
                                    <br>
                                    <label for="exampleInputEmail1"><h5><b>PENGETAHUAN</b></h5></label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Harian <span class="warn"></span></label>
                                                <input required type="number" class="form-control nh" placeholder="Nilai Harian" name="pengetahuan_harian" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">UTS <span class="warn"></span></label>
                                                <input required type="number" class="form-control nuts" placeholder="Nilai UTS" name="pengetahuan_uts" required> 
                                            </div>  
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">UAS <span class="warn"></span></label>
                                                <input required type="number" class="form-control nuas"  placeholder="Nilai UAS" name="pengetahuan_uas" required> 
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nilai Akhir <span class="label label-info label-sm hidden hitung" style="padding: 3px"><i class="fa fa-spin fa-refresh" style="font-size:10px"></i> Meghitung</span></label>
                                                <input required type="number" class="form-control nilai_akhir" data-kode="<?php echo $data1['kd_rumus']; ?>" placeholder="Nilai Akhir" name="nilai_pengetahuan" value='0' readonly >   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Deskripsi</label>
                                                <input required type="text" class="form-control" placeholder="Deskripsi" name="des_peng" required>   
                                            </div>
                                        </div>
                                    </div>
                                    <label for="exampleInputEmail1"><h5><b>KETERAMPILAN</b></h5></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nilai</label>
                                                <input required type="text" class="form-control" placeholder="Nilai" name="nilai_keterampilan" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Deskripsi</label>
                                                <input required type="text" class="form-control" placeholder="Deskripsi" name="des_ket" required>   
                                            </div>
                                        </div>
                                       <div class="col-md-4">
                                        <div class="form-group">     
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Nilai</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script type="text/javascript">
    $( document ).ready(function() {
        var typingTimer;                //timer identifier
        var doneTypingInterval = 1000;  //time in ms, 5 second for example
        var $input = $('.nuas, .nuts, .nh');

        //on keyup, start the countdown
        $input.on('keyup', function () {
            var nh              = $('.nh').val();
            var nuts            = $('.nuts').val();
            var nuas            = $('.nuas').val();
            if (nh != '' && nuts != '' && nuas != '' ) {
              clearTimeout(typingTimer);
            $('.hitung').removeClass('hidden');
              typingTimer = setTimeout(doneTyping, doneTypingInterval);
            }       
        });

        //on keydown, clear the countdown 
        $input.on('keydown', function () {
            var nh              = $('.nh').val();
            var nuts            = $('.nuts').val();
            var nuas            = $('.nuas').val();
            if (nh != '' && nuts != '' && nuas != '' ) {
              clearTimeout(typingTimer);
            }
        });

        //user is "finished typing," do something
        function doneTyping () {
            var nh              = $('.nh').val();
            var nuts            = $('.nuts').val();
            var nuas            = $('.nuas').val();
            var kode            = $('.nilai_akhir').attr('data-kode');
            if (nh != '' && nuts != '' && nuas != '' ) {
                $('.hitung').addClass('hidden');
                var nilai_harian    = parseInt(nh);
                var nilai_uts       = parseInt(nuts);
                var nilai_uas       = parseInt(nuas);
                // var hasil = ((nilai_harian*50)/100)+((nilai_uts*25)/100)+((nilai_uas*25)/100);
                // $('.nilai_akhir').val(hasil);

                var data            = {"nilai_harian": nilai_harian, "nilai_uts": nilai_uts, "nilai_uas": nilai_uas, "kd_rumus": kode};
                $.ajax({
                    url : "cek_rumus.php",
                    dataType: "html",
                    data: data,
                    type: "POST",
                    success:function(data){
                        $('.nilai_akhir').val(data);
                    }
                })

            }

        }
    });
</script>