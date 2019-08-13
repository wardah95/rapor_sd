<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$id_nilai2		= $_POST["id_nilai2"];
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
	
	$update     	= "UPDATE nilai_rapot2 SET id_nilai2='$id_nilai2', tahun ='$tahun', semester='$semester', id_siswa='$id_siswa', spiritual='$spiritual', sosial='$sosial', ekskul1='$ekskul1', keterangan1='$keterangan1', ekskul2='$keterangan2', saran2='$saran2', berat1='$berat1', berat2='$berat2', tinggi1='$tinggi1', tinggi2='$tinggi2', pendengaran='$pendengaran', pengelihatan='$pengelihatan', gigi='$gigi', prestasi1='$prestasi1', keterangan_1='$keterangan_1', prestasi2='$prestasi2', keterangan_2='$keterangan_2', sakit='$sakit', ijin='$ijin', absen='$absen', id_kelas='$id_kelas' WHERE id_nilai2='$id_nilai2'";

	$updateuser	    = mysqli_query($konek, $update)or die(mysqli_error());

	//  

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../walikls/index.php?content=rapor2">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Tidak Berhasil Di Ubah!\");
    				history.back(-1);
    			</script>";
    	}
 

?>