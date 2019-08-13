
<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$id_surat	   	= $_POST['id_surat'];
	$id_siswa		= $_POST['id_siswa'];
	$nilai 			= $_POST['nilai'];
	$keterangan	   	= $_POST['keterangan'];
///die(var_dump($jenis));


	$insert			= "INSERT INTO nilai_hafalan VALUES ('','$id_surat','$id_siswa','$nilai', '$keterangan')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tahfidz/index.php?content=Daftar_hafalan&&id_siswa='.$_POST['id_siswa'].'">';  

?>