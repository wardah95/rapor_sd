

<?php

    error_reporting(0);

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
  <div class="row">
  <div class="col-sm-12">
  <table>
    <tr> 
        <td> Nama Peserta Didik </td>
        <td> : </td>
        <td><?php echo $data['nama'] ?></td>
        <td>Kelas</td>
        <td>:</td>
        <td><?php echo $data2['nama_kelas'] ?></td>

    </tr>
    <tr>
        <td>NISN/NIS</td>
        <td>:</td>
        <td><?php echo $data['no_induk'] ?></td>
        <td>Semester</td>
        <td>:</td>
        <td><?php echo $data3['semester'] ?></td>
    </tr>
    <tr>
        <td>Nama Sekolah</td>
        <td>:</td>
        <td><?php echo $data1['nama'] ?></td>
        <td>Tahun Ajaran</td>
        <td> : </td>
        <td> <?php echo $data3['tahun_ajaran'] ?> </td>

    </tr>
    <tr>
        <td>Alamat Sekolah</td>
        <td>:</td>
        <td><?php echo $data1['alamat'] ?></td>
    </tr>
    </table>
      
  </div><br><br>
    
<p><b>A.Komponen Sikap</b></p>
<table class="table table-bordered">
    <thead>
    <tr>
        <th><font color="white">Sikap Spiritual</font></th>
        <th><font color="white">Sikap Sosial</font></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $data3['spiritual'] ?></td>
        <td><?php echo $data3['sosial'] ?></td>
    </tr>
    </tbody>
</table>
</div>
<div>
<p><b>B.Komponen Pengetahuan dan Keterampilan</b></p>
 <table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>Muatan Pelajaran</th>
        <th>Nilai Pengetahuan</th>
        <th>Predikat Pengetahuan</th>
        <th>Deskripsi</th>
        <th>Nilai Ketrampilan</th>
        <th>Predikat Ketrampilan</th>
        <th>Deskripsi</th>
    </tr>
    </thead>
    <tbody>
        <?php
            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT  a.*, b.*, c.id_kurikulum, d.nama_pelajaran FROM nilai_rapor1 a 
                LEFT JOIN nilai_rapot2 b ON a.id_siswa = b.id_siswa 
                LEFT JOIN kurikulum c on a.id_kurikulum = c.id_kurikulum
                LEFT JOIN mata_pelajaran d on c.id_pelajaran = d.id_pelajaran
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
                        echo '<td>'.$data['nama_pelajaran'].'</td>';
                        echo '<td>'.$data['nilai_pengetahuan'].'</td>';
                        echo '<td>'.$data['predikat_pengetahuan'].'</td>';
                        echo '<td>'.$data['des_peng'].'</td>';
                        echo '<td>'.$data['nilai_keterampilan'].'</td>';
                        echo '<td>'.$data['predikat_keterampilan'].'</td>';
                        echo '<td>'.$data['des_ket'].'</td>';
                        // echo '<td>'.$data['nama_pelajaran'].'</td>';
                        // echo '<td>'.$data['alamat'].'</td>';
                        $no++;  
                      }
                    }
                //die(var_dump($data));
                ?>
    </tbody>
    </table>
</div>

<div>
<p><b>C.Ektra Kurikuler</b></p>
 <table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Kegiatan</th>
        <th>Keterangan</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>1</td>
        <td><?php echo $data3['ekskul1'] ?></td>
        <td><?php echo $data3['keterangan1'] ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td><?php echo $data3['ekskul2'] ?></td>
        <td><?php echo $data3['keterangan2'] ?></td>
    </tr>
    </tbody>
</table>

</div>
<div> <p><b>D.Saran-saran</b></p>
    <table class="table table-bordered">
    <tr>
        <td><?php echo $data3['saran2'] ?></td>
    </tr>
</table>
</div>

<div><p><b>E.Tinggi dan Berat Badan</b></p>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>Aspek</th>
        <th>Semester 1</th>
        <th>Semester 2</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>1</td>
        <td>Berat Badan</td>
        <td><?php echo $data3['berat1'] ?></td>
        <td><?php echo $data3['berat2'] ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Tinggi Badan</td>
        <td><?php echo $data3['tinggi1'] ?></td>
        <td><?php echo $data3['tinggi2'] ?></td>
    </tr>
    </tbody>
</table>
</div>

<div><p><b>F.Kondisi Kesahatan</b></p>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>Aspek</th>
        <th>Ketarangan</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>1</td>
        <td>Pendengaran</td>
        <td><?php echo $data3['pendengaran'] ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Pengelihatan</td>
        <td><?php echo $data3['pengelihatan'] ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Gigi</td>
        <td><?php echo $data3['gigi'] ?></td>
    </tr>
    </tbody>
</table>
</div>

<div><p><b>G.Prestasi</b></p>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>Jenis Prestasi</th>
        <th>Ketarangan</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>1</td>
        <td><?php echo $data3['prestasi1'] ?></td>
        <td><?php echo $data3['keterangan_1'] ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td><?php echo $data3['prestasi2'] ?></td>
        <td><?php echo $data3['keterangan_2'] ?></td>
    </tr>
    </tbody>
</table>
</div>

<div><p><b>H.Ketidak Hadiran</b></p>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>Jenis</th>
        <th>Ketarangan</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>1</td>
        <td>Sakit</td>
        <td><?php echo $data3['sakit'] ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Ijin</td>
        <td><?php echo $data3['ijin'] ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Tanpa Keterangan</td>
        <td><?php echo $data3['absen'] ?></td>
    </tr>
    </tbody>
</table>
</div>

<div>
    <table class="table table-striped">
    <thead>
    <tr>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td><center>Mengetahui</center></td>
        <td></td>
        <td><center>Bekasi, 19 januari 2019</center></td>
    </tr>
    <tr>
        <td><center>Orang Tua/Wali</center></td>
        <td></td>
        <td><center>Guru Kelas</center></td>
    </tr>
    <tr>
        <td><center></center></td>
        <td><center></center></td>
        <td><center></center></td>
    </tr>
    <tr>
        <td><center>......................</center></td>
        <td></td>
        <td><center><b><?php echo $data4['namab'] ?></b></center></td>
    </tr>
    <tr>
        <td><center></center></td>
        <td><center></center></td>
        <td><center><?php echo $data4['nip'] ?></center></td>
    </tr>
    <tr>
        <td><center></center></td>
        <td><center></center></td>
        <td><center></center></td>
    </tr>
    <tr>
        <td><center></center></td>
        <td><center>Mengetahui,</center></td>
        <td><center></center></td>
    </tr>
    <tr>
        <td><center></center></td>
        <td><center>Kepala Sekolah</center></td>
        <td><center></center></td>
    </tr>
    <tr>
        <td><center></center></td>
        <td><center></center></td>
        <td><center></center></td>
    </tr>
    <tr>
        <td><center></center></td>
        <td><center><?php echo $data5['nama'] ?></center></td>
        <td><center></center></td>
    </tr>
    <tr>
        <td><center></center></td>
        <td><center>nip</center></td>
        <td><center></center></td>
    </tr>
    </tbody>
</table>
</div>


</div>
</div>
 
</div>

</body>
