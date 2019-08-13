<?php

	error_reporting(0);
	
	include 'koneksi.php';
	$id_nilai				= $_POST["id_nilai"];
	$id_kurikulum			= $_POST["id_kurikulum"];
	$tahun_ajaran			= $_POST["tahun_ajaran"];
	$semester				= $_POST["semester"];
	$id_siswa				= $_POST["id_siswa"];
	$id_kelas				= $_POST["id_kelas"];
	$pengetahuan_harian		= $_POST["pengetahuan_harian"];
	$pengetahuan_uts		= $_POST["pengetahuan_uts"];
	$pengetahuan_uas		= $_POST["pengetahuan_uas"];
	$nilai_pengetahuan		= $_POST["nilai_pengetahuan"];
	$predikat_pengetahuan	= $_POST["predikat_pengetahuan"];
	$des_peng				= $_POST["des_peng"];
	$nilai_keterampilan		= $_POST["nilai_keterampilan"];
	$predikat_keterampilan	= $_POST["predikat_keterampilan"];
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

	$update     	= "UPDATE nilai_rapor1 SET id_nilai='$id_nilai', id_kurikulum ='$id_kurikulum', tahun_ajaran='$tahun_ajaran', semester='$semester', id_siswa='$id_siswa', id_kelas='$id_kelas', pengetahuan_harian='$pengetahuan_harian', pengetahuan_uts='$pengetahuan_uts', pengetahuan_uas='$pengetahuan_uas', nilai_pengetahuan='$nilai_pengetahuan', predikat_pengetahuan='$predikat_pengetahuan', des_peng='$des_peng', nilai_keterampilan='$nilai_keterampilan', predikat_keterampilan='$predikat_keterampilan', des_ket='$des_ket' WHERE id_nilai='$id_nilai'";

	$updateuser	    = mysqli_query($konek, $update)or die(mysqli_error());

	// die(var_dump($update));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../walikls/index.php?content=rapor1">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Tidak Berhasil Di Ubah!\");
    				history.back(-1);
    			</script>";
    	}

?>