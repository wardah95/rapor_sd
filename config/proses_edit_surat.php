<?php

	error_reporting(0);
	
	include 'koneksi.php';
	$id_surat 		= $_POST["id_surat"];
	$nama		   	= $_POST["nama"];
	$juz			= $_POST["juz"];

	$update     	= "UPDATE surat SET id_surat='$id_surat', nama='$nama', juz='$juz' WHERE id_surat='$id_surat'";

	$updateuser	    = mysqli_query($konek, $update)or die(mysqli_error());

	// die(var_dump($update));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=kurikulum_matapelajaran">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Tidak Berhasil Di Ubah!\");
    				history.back(-1);
    			</script>";
    	}

?>