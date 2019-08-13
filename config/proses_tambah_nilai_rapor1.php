<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$id_kurikulum			= $_POST["id_kurikulum"];
	$tahun_ajaran			= $_POST["tahun_ajaran"];
	$semester				= $_POST["semester"];
	$id_siswa				= $_POST["id_siswa"];
	$id_kelas				= $_POST["id_kelas"];
	$pengetahuan_harian		= $_POST["pengetahuan_harian"];
	$pengetahuan_uts		= $_POST["pengetahuan_uts"];
	$pengetahuan_uas		= $_POST["pengetahuan_uas"];
	$des_peng				= $_POST["des_peng"];
	$nilai_pengetahuan		= $_POST["nilai_pengetahuan"];
	$nilai_keterampilan		= $_POST["nilai_keterampilan"];
	$des_ket				= $_POST["des_ket"];


	if 		($nilai_keterampilan<"70") 
			{$predikat_keterampilan ='D';}
	elseif 	($nilai_keterampilan>"70" AND $nilai_keterampilan<"80") 
			{$predikat_keterampilan ='C';}
	elseif 	($nilai_keterampilan>"80" AND $nilai_keterampilan<"90") 
			{$predikat_keterampilan ='B';}
	elseif  ($nilai_keterampilan>"90" AND $nilai_keterampilan<"100") 
			{$predikat_keterampilan ='A';}
	// die(var_dump($predikat_keterampilan));

	if 		($nilai_pengetahuan<"70") 
			{$predikat_pengetahuan = 'D' ;}
	elseif 	($nilai_pengetahuan>"70" AND $nilai_pengetahuan<"80") 
			{$predikat_pengetahuan = 'C' ;}
	elseif 	($nilai_pengetahuan>"80" AND $nilai_pengetahuan<"90") 	
			{$predikat_pengetahuan = 'B' ;}
	elseif	($nilai_pengetahuan>"90" AND $nilai_pengetahuan<"100") 
			{$predikat_pengetahuan = 'A' ;}
	// die(var_dump($predikat_pengetahuan));


	$insert	= "INSERT INTO nilai_rapor1 VALUES ('','$id_kurikulum','$tahun_ajaran','$semester','$id_siswa','$id_kelas','$pengetahuan_harian','$pengetahuan_uts','$pengetahuan_uas','$nilai_pengetahuan','$predikat_pengetahuan', '$des_peng', '$nilai_keterampilan','$predikat_keterampilan','des_ket')";

	// die(var_dump($insert));
	$simpan	= mysqli_query($konek, $insert)or die(mysqli_error($konek));
	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../walikls/index.php?content=pilihan_nilai&&id_siswa='.$_POST['id_siswa'].'&&id_kelas='.$_POST['id_kelas'].'">';  
	// echo "<tr><td>Grade Anda </td><td>= $predikat_pengetahuan"; 
?>