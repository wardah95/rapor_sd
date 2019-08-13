<?php

    // error_reporting(0);

    include '../config/koneksi.php';

    $id_siswa       = $_GET['id_siswa'];
    // $id_kelas       = $_GET['id_kelas'];

    $edit    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

    $sql      = "SELECT * FROM sekolah";
    $hasil1   = mysqli_query($konek, $sql)or die(mysql_error());
    $data1    = mysqli_fetch_array($hasil1);

    $sql2   =   "SELECT  a.*, b.*, c.* FROM walikelas a 
                LEFT join kelas b ON a.id_kelas = b.id_kelas 
                left join siswa c on a.id_siswa = c.id_siswa 
                WHERE a.id_siswa='$id_siswa'";
    $hasi2   = mysqli_query($konek, $sql2)or die(mysql_error());
    $data2    = mysqli_fetch_array($hasi2);

    $sql3   = "SELECT  a.*, b.*, c.id_kurikulum, d.nama_pelajaran FROM nilai_rapor1 a 
                LEFT JOIN nilai_rapot2 b ON a.id_siswa = b.id_siswa 
                LEFT JOIN kurikulum c on a.id_kurikulum = c.id_kurikulum
                LEFT JOIN mata_pelajaran d on c.id_pelajaran = d.id_pelajaran
                WHERE a.id_siswa = '$id_siswa'";
    $hasi3   = mysqli_query($konek, $sql3)or die(mysql_error());
    $data3    = mysqli_fetch_array($hasi3);

    $sql4   = "SELECT  a.*, b.*, c.* FROM walikelas a 
                LEFT join guru b ON a.id_guru = b.id_guru 
                left join siswa c on a.id_siswa = c.id_siswa 
                WHERE a.id_siswa='$id_siswa'";
    $hasi4   = mysqli_query($konek, $sql4)or die(mysql_error());
    $data4    = mysqli_fetch_array($hasi4);

    $sql5   ="SELECT  a.* FROM user a WHERE a.level= 'Kepala Sekolah'";
    $hasi5   = mysqli_query($konek, $sql5)or die(mysql_error());
    $data5    = mysqli_fetch_array($hasi5);

    // die(var_dump($id_siswa));
    // $edit    = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
    // $hasil   = mysqli_query($konek, $edit2)or die(mysql_error());
    // $data    = mysqli_fetch_array($hasil2);

?>
<body onload="window.print()">
  <div class="panel-body" >
<div class="row">

<h3><b><CENTER>RAPOR HASIL HAFALAN SURAT AL-QUR'AN</CENTER></b></h3>
<P>Nama Peserta Didik :<?php echo $data['nama'] ?></P>
<br>

<p><b>Berikut hafalan dan nilai </b></p>
 <table class="table table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama surat</th>
        <th>Keterangan</th>
        <!-- <th>Peng.Deskripsi</th> -->
    </tr>
    </thead>
    <tbody>
        <?php
            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT  a.*, b.id_siswa, c.nama FROM nilai_hafalan a 
                LEFT JOIN siswa b ON a.id_siswa = b.id_siswa 
                LEFT JOIN surat c on a.id_surat = c.id_surat
                WHERE a.id_siswa = '$id_siswa'" )or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['keterangan'].'</td>';
                        $no++;  
                      }
                    }
                //die(var_dump($data));
                ?>
    </tbody>
    </table>
</div>


</div>
</div>
</body>