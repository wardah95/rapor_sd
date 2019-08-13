<?php

	error_reporting(0);
	
	include 'koneksi.php';
	$id_kurikulum 	= $_POST["id_kurikulum"];
	$tingkatkelas	= $_POST["tingkatkelas"];
	$id_pelajaran	= $_POST["id_pelajaran"];
	// $kode			= $_POST["kode"];
	

	$update     	= "UPDATE kurikulum SET id_kurikulum='$id_kurikulum', tingkatkelas ='$tingkatkelas', id_pelajaran='$id_pelajaran' WHERE id_kurikulum='$id_kurikulum'";

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