<?php

    // error_reporting(0);

    include '../config/koneksi.php';

    $id_siswa       = $_GET['id_siswa'];
    // $id_kelas       = $_GET['id_kelas'];

    $edit    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);
    // die(var_dump($id_siswa));
    // $edit2    = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
    // $hasil2   = mysqli_query($konek, $edit2)or die(mysql_error());
    // $data2   = mysqli_fetch_array($hasil2);

?>
<body onload="window.print()">
  <div class="panel-body" >
<div class="row">

<h3><b><CENTER>IDENTITAS PESERTA DIDIK</CENTER></b></h3>

<P>Nama Peserta Didik       :<?php echo $data['nama'] ?></P>
<p>NISN/NISN                :<?php echo $data['no_induk'] ?></p>
<p>Tempat, tanggal lahir    :<?php echo $data['tmp_lahir'] ?>,<?php echo $data['tgl_lahir'] ?></p>
<p>Jenis kelamin            :<?php echo $data['jk'] ?></p>
<p>Agama                    :<?php echo $data['agama'] ?></p>
<p>Pendidikan sebelumnya    :<?php echo $data['pendidikan'] ?></p>
<p>Alamat Pendidikan        :<?php echo $data['alamat'] ?></p>
<p>Nama Orang tua</p>
<p>Ayah                     :<?php echo $data['ayah'] ?></p>
<p>Ibu                      :<?php echo $data['ibu'] ?></p>
<p>Alamat Orang tua</p>
<p>Jalan</p>
<p>Keluarahan/Desa          :<?php echo $data['kelurahan'] ?></p>
<p>Kecamatan/Kota           :<?php echo $data['kecamatan'] ?></p>
<p>Kabupaten/Kota           :<?php echo $data['kabupaten'] ?></p>
<p>Propinsi                 :<?php echo $data['propinsi'] ?></p>
<p>No telpon                :<?php echo $data['no_hp'] ?></p>


</div>
</div>
</body>
