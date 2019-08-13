<?php

	include 'koneksi.php';

	$id_kurikulum = $_GET ['id_kurikulum'];

	$hapus 	 = "DELETE FROM kurikulum WHERE id_kurikulum='$id_kurikulum'";
	$query	 = mysqli_query($konek, $hapus);

	// die(var_dump($id_kurikulum));

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/index.php?content=kurikulum'>";;
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>