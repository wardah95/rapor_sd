 <?php

    // error_reporting(0);

    include '../config/koneksi.php';

    $id_siswa       = $_GET['id_siswa'];
    $id_kelas       = $_GET['id_kelas'];

    $edit    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

    $edit2    = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
    $hasil2   = mysqli_query($konek, $edit2)or die(mysql_error());
    $data2   = mysqli_fetch_array($hasil2);
    die(var_dump($id_siswa));
?>


<body onload="window.print()">
hahahahhahah
</body>