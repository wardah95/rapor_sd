<?php

	error_reporting(0);
	
	include 'koneksi.php';
	$id_pelajaran 	= $_POST["id_pelajaran"];
	$nama_pelajaran	= $_POST["mata_pelajaran"];
	$jenis		   	= $_POST["jenis"];
	

	$update     	= "UPDATE mata_pelajaran SET id_pelajaran='$id_pelajaran', nama_pelajaran ='$nama_pelajaran', jenis='$jenis' WHERE id_pelajaran='$id_pelajaran'";

	$updateuser	    = mysqli_query($konek, $update)or die(mysqli_error());

	// die(var_dump($update));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=kurikulum">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Tidak Berhasil Di Ubah!\");
    				history.back(-1);
    			</script>";
    	}

?>