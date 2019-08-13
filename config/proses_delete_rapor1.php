<?php

	include 'koneksi.php';

	$id_nilai = $_GET ['id_nilai'];

	$hapus 	 = "DELETE FROM nilai_rapor1 WHERE id_nilai='$id_nilai'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../walikls/index.php?content=rapor1'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>