<?php

	include '../config/koneksi.php';

	$nilai_harian 	= $_POST['nilai_harian'];
	$nilai_uts 		= $_POST['nilai_uts'];
	$nilai_uas 		= $_POST['nilai_uas'];
	$kode 			= $_POST['kd_rumus'];

	$get_rumus 	 	= "Select * FROM m_rumus WHERE aktif = 1 and kd_rumus ='".$kode."' limit 1";
	$query	 		= mysqli_query($konek, $get_rumus)or die(mysqli_error($konek));
	$dt_rumus   	= mysqli_fetch_array($query);
	
	$hasil 			= ($nilai_harian*$dt_rumus['nl_harian']) + ($nilai_uts*$dt_rumus['nl_uts']) + ($nilai_uas*$dt_rumus['nl_uas']);

	echo $hasil;

?>