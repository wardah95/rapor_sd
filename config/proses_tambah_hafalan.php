<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$nama	   	= $_POST['nama'];
	$juz	   	= $_POST['juz'];
///die(var_dump($jenis));


	$insert			= "INSERT INTO surat VALUES ('','$nama','$juz')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=kurikulum_matapelajaran">';  

?>