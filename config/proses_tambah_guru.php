<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$nama		   	= $_POST["nama"];
	$nip	   		= $_POST["nip"];
	$jk  			= $_POST["jk"];
	$tgl_lahir		= $_POST["tgl_lahir"];
	$tmp_lahir		= $_POST["tmp_lahir"];
	$pendidikan 	= $_POST["pendidikan"];
	$alamat		  	= $_POST["alamat"];
	$no_hp		  	= $_POST["no_hp"];

	$insert			= "INSERT INTO guru VALUES ('','$nama','$nip','$jk','$tgl_lahir','$tmp_lahir','$pendidikan','$alamat','$no_hp')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../admin/index.php?content=sekolah_guru_siswa">';  

?>