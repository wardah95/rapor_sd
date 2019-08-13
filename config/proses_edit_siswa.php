<?php

	error_reporting(0);
	
	include 'koneksi.php';
	$id_siswa		= $_POST["id_siswa"];
	$nama		   	= $_POST["nama"];
	$no_induk	   	= $_POST["no_induk"];
	$jk  			= $_POST["jk"];
	$agama			= $_POST["agama"];
	$tmp_lahir		= $_POST["tmp_lahir"];
	$tgl_lahir		= $_POST["tgl_lahir"];
	$alamat	  		= $_POST["alamat"];
	$ayah			= $_POST["ayah"];
	$ibu			= $_POST["ibu"];
	$pendidikan 	= $_POST["pendidikan"];
	$jln	  		= $_POST["jln"];
	$kelurahan		= $_POST["kelurahan"];
	$kecamatan		= $_POST["kecamatan"];
	$kabupaten		= $_POST["kabupaten"];
	$propinsi		= $_POST["propinsi"];
	$no_hp	  		= $_POST["no_hp"];
	$status			= $_POST["status"];

	$update     	= "UPDATE siswa SET id_siswa='$id_siswa', nama='$nama', no_induk='$no_induk', jk='$jk', agama='$agama',tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', ayah='$ayah', ibu='$ibu', no_hp='no_hp', status='$status' WHERE id_siswa='$id_siswa'";

	$updateuser	    = mysqli_query($konek, $update)or die(mysqli_error());

	// die(var_dump($update));

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