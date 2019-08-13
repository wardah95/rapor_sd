<?php

	include 'koneksi.php';

	$id_nilai2 = $_GET ['id_nilai2'];

	$hapus 	 = "DELETE FROM nilai_rapot2 WHERE id_nilai2='$id_nilai2'";
	$query	 = mysqli_query($konek, $hapus);
	// die(var_dump($hapus));
	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../walikls/index.php?content=rapor2'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>