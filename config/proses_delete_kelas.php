<?php

	include 'koneksi.php';

	$id_kelas = $_GET ['id_kelas'];

	$hapus 	 = "DELETE FROM kelas WHERE id_kelas='$id_kelas'";
	$query	 = mysqli_query($konek, $hapus);
	// die(var_dump($id_kelas));
	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/index.php?content=kelas_walikelas'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>