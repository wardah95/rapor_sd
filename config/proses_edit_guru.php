<?php

	error_reporting(0);
	
	include 'koneksi.php';
	$id_guru 		= $_POST["id_guru"];
	$namab		   	= $_POST["namab"];
	$nip	   		= $_POST["nip"];
	$jk  			= $_POST["jk"];
	$tgl_lahir		= $_POST["tgl_lahir"];
	$tmp_lahir		= $_POST["tmp_lahir"];
	$pendidikan 	= $_POST["pendidikan"];
	$alamat	  		= $_POST["alamat"];
	$no_hp	  		= $_POST["no_hp"];

	$update     	= "UPDATE guru SET id_guru='$id_guru', namab='$namab', nip='$nip', jk='$jk', tgl_lahir='$tgl_lahir', tmp_lahir='$tmp_lahir', pendidikan='$pendidikan',alamat='$alamat', no_hp='$no_hp' WHERE id_guru='$id_guru'";

	$updateuser	    = mysqli_query($konek, $update)or die(mysqli_error());

	//die(var_dump($id_guru));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=sekolah_guru_siswa">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Tidak Berhasil Di Ubah!\");
    				history.back(-1);
    			</script>";
    	}

?>