<?php

	//error_reporting(0);
	
	include 'koneksi.php';
	$id_sekolah		= $_POST['id_sekolah'];
	$nama		   	= $_POST['nama'];
	$npsn_nss	   	= $_POST['npsn_nss'];
	$alamat	  		= $_POST['alamat'];
	$kode_pos  		= $_POST['kode_pos'];
	$no_hp			= $_POST['no_hp'];
	$kelurahan_desa = $_POST['kelurahan_desa'];
	$kecamatan		= $_POST['kecamatan'];
	$kabupaten_kota	= $_POST['kabupaten_kota'];
	$provinsi		= $_POST['provinsi'];
	$email	  		= $_POST['email'];

	$update     	= "UPDATE sekolah SET id_sekolah='$id_sekolah', nama='$nama', npsn_nss='$npsn_nss', alamat='$alamat', kode_pos='$kode_pos',no_hp='$no_hp', kelurahan_desa='$kelurahan_desa', kecamatan='$kecamatan', kabupaten_kota='$kabupaten_kota', provinsi='$provinsi', email='$email' WHERE id_sekolah='$id_sekolah'";

	$updateuser	    = mysqli_query($konek, $update)or die(mysqli_error($konek));

	//die(var_dump($update));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=sekolah_guru_siswa">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Tidak Berhasil Di Ubah!\");
    				history.back(-1);
    			</script>";
    	}

?>