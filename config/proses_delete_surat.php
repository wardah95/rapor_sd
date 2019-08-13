<?php

	include 'koneksi.php';

	$id_surat = $_GET ['id_surat'];
	$hapus 	 = "DELETE FROM surat WHERE id_surat='$id_surat'";
	$query	 = mysqli_query($konek, $hapus);
// die(var_dump($id_query));
	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/index.php?content=kurikulum_matapelajaran'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>