<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$tahun			= $_POST["tahun"];
	$semester		= $_POST["semester"];
	$id_siswa		= $_POST["id_siswa"];
	$spiritual		= $_POST["spiritual"];
	$sosial			= $_POST["sosial"];
	$ekskul1		= $_POST["ekskul1"];
	$keterangan1	= $_POST["keterangan1"];
	$ekskul2		= $_POST["ekskul2"];
	$keterangan2	= $_POST["keterangan2"];
	$saran2			= $_POST["saran2"];
	$berat1			= $_POST["berat1"];
	$berat2			= $_POST["berat2"];
	$tinggi1		= $_POST["tinggi1"];
	$tinggi2		= $_POST["tinggi2"];
	$pendengaran	= $_POST["pendengaran"];
	$pengelihatan	= $_POST["pengelihatan"];
	$gigi			= $_POST["gigi"];
	$prestasi1		= $_POST["prestasi1"];
	$keterangan_1	= $_POST["keterangan_1"];
	$prestasi2		= $_POST["prestasi2"];
	$keterangan_2	= $_POST["keterangan_2"];
	$sakit			= $_POST["sakit"];
	$ijin			= $_POST["ijin"];
	$absen			= $_POST["absen"];
	$id_kelas		= $_POST["id_kelas"];
	



	$insert			= "INSERT INTO nilai_rapot2 VALUES ('','$tahun','$semester','$id_siswa','$spiritual','$sosial','$ekskul1','$keterangan1','$ekskul2','$keterangan2','$saran2','$berat1','$berat2','$tinggi1','$tinggi2','$pendengaran','$pengelihatan','$gigi','$prestasi1','$keterangan_1','$prestasi2','$keterangan2','$sakit','$ijin','$absen','$id_kelas')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));
	// die(var_dump($insert));
	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../walikls/index.php?content=rapor2">';  

?>