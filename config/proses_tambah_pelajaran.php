<?php

	// error_reporting(0);
	
	include 'koneksi.php';

	$nama_pelajaran		   	= $_POST['nama_pelajaran'];
	$jenis					= $_POST['jenis'];
	$jumlah_dipilih 		= count($nama_pelajaran);
	for($x = 0; $x < $jumlah_dipilih; $x++){

	     mysqli_query($konek,"INSERT INTO mata_pelajaran values('','$nama_pelajaran[$x]','$jenis[$x]')")or die(mysqli_error($konek));
    }
	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=matapelajaran">';  

?>