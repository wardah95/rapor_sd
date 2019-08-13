<?php

	include 'koneksi.php';

	$id_walikelas = $_GET ['id_walikelas'];

	$hapus 	 = "DELETE FROM walikelas WHERE id_walikelas='$id_walikelas'";
	$query	 = mysqli_query($konek, $hapus);

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