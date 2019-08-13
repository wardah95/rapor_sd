<?php

    error_reporting(0);
    
    include 'koneksi.php';
    $id_rumus       = $_POST['id_rumus'];
    $kd_rumus       = $_POST['kd_rumus'];
    $nm_rumus       = $_POST['nm_rumus'];
    $nl_harian      = $_POST['nl_harian'];
    $nl_uts         = $_POST['nl_uts'];
    $nl_uas         = $_POST['nl_uas'];
    $date_create    = $_POST['date_create'];
    $aktif          = $_POST['aktif'];
    

    $update     	= "UPDATE m_rumus SET id_rumus='$id_rumus', kd_rumus='$kd_rumus', nm_rumus='$nm_rumus', nl_harian='$nl_harian',  nl_uts='$nl_uts', nl_uas='$nl_uas', date_create='$date_create',aktif='$aktif' WHERE id_rumus='$id_rumus'";

	$updateuser	    = mysqli_query($konek, $update)or die(mysqli_error());

	// die(var_dump($update));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=rumus">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Tidak Berhasil Di Ubah!\");
    				history.back(-1);
    			</script>";
    	}

?>