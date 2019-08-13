<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$id_guru	= $_POST["id_guru"];
	$id_kelas	= $_POST["id_kelas"];
	$id_siswa	= $_POST["id_siswa"];

	$insert			= "INSERT INTO walikelas VALUES ('','$id_guru','$id_kelas','$id_siswa')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=kelas_walikelas">';  

?>
