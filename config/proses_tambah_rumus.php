<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$kd_rumus	   	= $_POST['kd_rumus'];
	$nm_rumus	  	= $_POST['nm_rumus'];
	$nl_harian 		= $_POST['nl_harian'];
	$nl_uts  		= $_POST['nl_uts'];
	$nl_uas			= $_POST['nl_uas'];
	$date_create	= $_POST['date_create'];
	$aktif			= $_POST['aktif'];
	
	$insert			= "INSERT INTO m_rumus VALUES ('','$kd_rumus','$nm_rumus','$nl_harian', '$nl_uts','$nl_uas','$date_create','$aktif')";


	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	//die(var_dump($insert));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../admin/index.php?content=rumus">';  

?>
