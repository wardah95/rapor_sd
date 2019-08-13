<?php

	// error_reporting(0);
	
	include 'koneksi.php';

	$tingkatkelas			= $_POST["tingkatkelas"];
	$id_pelajaran			= $_POST["id_pelajaran"];
	$kd_rumus				= $_POST["kd_rumus"];
	$jumlah_dipilih 		= count($id_pelajaran);
	for($x = 0; $x < $jumlah_dipilih; $x++){

	     mysqli_query($konek,"INSERT INTO kurikulum values('','$tingkatkelas[$x]','$id_pelajaran[$x]', '$kd_rumus[$x]')")or die(mysqli_error($konek));
    }

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../admin/index.php?content=kurikulum">';  

?>