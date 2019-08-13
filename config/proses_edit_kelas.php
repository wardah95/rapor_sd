<?php

	error_reporting(0);
	
	include 'koneksi.php';
	$id_kelas 		= $_POST["id_kelas"];
	$tahun_ajaran	= $_POST["tahun_ajaran"];
	$nama_kelas		= $_POST["nama_kelas"];
	$id_kurikulum	= $_POST["id_kurikulum"];
	$id_guru		= $_POST["id_guru"];
	

	$update     	= "UPDATE Kelas SET id_kelas='$id_kelas', tahun_ajaran ='$tahun_ajaran', nama_kelas='$nama_kelas', id_kurikulum='$id_kurikulum', id_guru='$id_guru' WHERE id_kelas='$id_kelas'";

	$updateuser	    = mysqli_query($konek, $update)or die(mysqli_error());

	// die(var_dump($update));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=kelas_walikelas">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Tidak Berhasil Di Ubah!\");
    				history.back(-1);
    			</script>";
    	}

?>