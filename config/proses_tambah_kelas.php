<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$tahun_ajaran			= $_POST["tahun_ajaran"];
	$nama_kelas	   			= $_POST["nama_kelas"];
	$tingkatkelas			= $_POST["tingkatkelas"];
	$id_guru	  			= $_POST["id_guru"];
	// $jumlah_dipilih 		= count($id_kurikulum);
	// for($x = 0; $x < $jumlah_dipilih; $x++){

	// 	mysqli_query($konek,"INSERT INTO kurikulum values('','$tingkatkelas[$x]','$id_pelajaran[$x]', '$kd_rumus[$x]')")or die(mysqli_error($konek));
 //    }

 //   $kelas = "SELECT id_kurikulum FROM kurikulum where tingkatkelas = '$tingkatkelas'";

	// $insert			= "INSERT INTO siswa VALUES ('','$tahun_ajaran','$nama_kelas','$jk', '$agama','$tmp_lahir')";
	$insert ="Insert into kelas(id_kelas, tahun_ajaran, nama_kelas, id_kurikulum, id_guru)
Select '', '$tahun_ajaran', '$nama_kelas', id_kurikulum, '$id_guru' from kurikulum where tingkatkelas = '$tingkatkelas'";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));
	//die (var_dump($insert));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=kelas_walikelas">';  

?>
