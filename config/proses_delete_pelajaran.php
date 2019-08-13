<?php

	include 'koneksi.php';

	$id_pelajaran = $_GET ['id_pelajaran'];

	$hapus 	 = "DELETE FROM mata_pelajaran WHERE id_pelajaran='$id_pelajaran'";
	$query	 = mysqli_query($konek, $hapus);
	// die(var_dump($hapus));
	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/index.php?content=matapelajaran'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>