<?php

	error_reporting(0);
	
	include 'koneksi.php';
	$id_hafalan		= $_POST["id_hafalan"];
	$id_surat		= $_POST["id_surat"];
	$id_siswa		= $_POST["id_siswa"];
	$nilai			= $_POST["nilai"];
	$keterangan		= $_POST["keterangan"];

	$update     	= "UPDATE nilai_hafalan SET id_hafalan='$id_hafalan', id_surat='$id_surat', id_siswa='$id_siswa', nilai='$nilai', keterangan='$keterangan' WHERE id_hafalan='$id_hafalan'";

	$updateuser	    = mysqli_query($konek, $update)or die(mysqli_error());

	// die(var_dump($update));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tahfidz/index.php?content=Daftar_hafalan">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Tidak Berhasil Di Ubah!\");
    				history.back(-1);
    			</script>";
    	}

?>