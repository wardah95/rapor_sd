<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$nama		   	= $_POST['nama'];
	$no_induk 		= $_POST['no_induk'];
	$jk  			= $_POST['jk'];
	$agama			= $_POST['agama'];
	$tgl_lahir		= $_POST['tgl_lahir'];
	$tmp_lahir		= $_POST['tmp_lahir'];
	$alamat		  	= $_POST['alamat'];
	$ayah			= $_POST['ayah'];
	$ibu			= $_POST['ibu'];
	$pendidikan		= $_POST['pendidikan'];
	$jln			= $_POST['jalan'];
	$kelurahan		= $_POST['kelurahan'];
	$kecamatan 		= $_POST['kecamatan'];
	$kabupaten		= $_POST['kabupaten'];
	$propinsi		= $_POST['propinsi'];
	$no_hp		  	= $_POST['no_hp'];
	$status			= $_POST['status'];

	$target_dir = "../foto/";
   	$target_file = $target_dir.basename($_FILES["foto"]["name"]);
   	$uploadOk=1;
   	$documentfiletype=pathinfo($target_file,PATHINFO_EXTENSION);

  	 if(isset($_POST["submit"])){

    $check=getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false) {
            echo "File is an File - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an Document.";
            $uploadOk = 0;
        }
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($documentfiletype != "docx" && $documentfiletype != "pdf" && $documentfiletype != "jpg"  && $documentfiletype != "png" && $documentfiletype != "gif" && $documentfiletype != "JPG" && $documentfiletype != "PNG" && $documentfiletype != "GIF") {
        echo "Sorry, only Doc and pdf files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an errors
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

 $input="INSERT INTO siswa(id_siswa,nama,foto,no_induk,jk,agama,tmp_lahir,tgl_lahir,alamat,ayah,ibu,pendidikan,jln,kelurahan,kecamatan,kabupaten,propinsi,no_hp,status)values('','$nama','$target_file','$no_induk','$jk','$agama','$tmp_lahir','$tgl_lahir','$alamat', '$ayah', '$ibu','$pendidikan','$jln', '$kelurahan', '$kecamatan', '$kabupaten', '$propinsi', '$no_hp', '$status')";
    $updaterespon   = mysqli_query($konek, $input)or die(mysqli_error($konek));

    if ($updaterespon)
        {
            echo "<strong><center>Data Berhasil Ditambah..!!</center></strong>";
            echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../admin/index.php?content=sekolah_guru_siswa">';
        }
    else {
            //echo "<strong><center>Data Gagal Diubah";
            //echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
            print"
                <script>
                    alert(\"Data Gagal Diubah!\");
                    history.back(-1);
                </script>";
        }





	
	// $insert			= "INSERT INTO siswa VALUES ('','$nama','$no_induk','$jk', '$agama','$tmp_lahir','$tgl_lahir','$alamat','$ayah','$ibu','$pendidikan','$jln', '$kelurahan','$kecamatan','$kabupaten','$propinsi','$no_hp','$status')";


	// $simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	// //die(var_dump($insert));

	// echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	// echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../admin/index.php?content=sekolah_guru_siswa">';  

?>
