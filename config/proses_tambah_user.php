<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$nama		   	= $_POST["nama"];
	$username	   	= $_POST["username"];
	$password  		= md5($_POST["password"]);
	$level		   	= $_POST["level"];
	$jabatan		= $_POST["jabatan"];
	$id_guru	  	= $_POST["id_guru"];

	$insert			= "INSERT INTO user VALUES ('','$nama','$username','$password','$level','$jabatan','$id_guru')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=user">';  

?>
