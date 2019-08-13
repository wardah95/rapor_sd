<?php
error_reporting();
	include 'koneksi.php';

	$username  = $_POST['username'];
	$password  = md5($_POST['password']);

	$query     ="SELECT * FROM user WHERE username='$username' AND password='$password'";
	// die(var_dump($query));

	$login     = mysqli_query($konek,$query)or die(mysqli_error($konek));
	$jlhrecord = mysqli_num_rows($login);

	$data      	= mysqli_fetch_array($login,MYSQLI_BOTH);

	$nama	   	= $data['nama'];
	$username  	= $data['username'];
	$password  	= $data['password'];
	$level	   	= $data['level'];
	$jabatan   	= $data['jabatan'];
	$id_guru	= $data['id_guru'];


if($jlhrecord > 0){

	session_start();
	
	
	$_SESSION['nama']		=$nama;
	$_SESSION['username']	=$username;
	$_SESSION['password']	=$password;
	$_SESSION['level']		=$level;
	$_SESSION['jabatan']	=$jabatan;
	$_SESSION['id_guru']	=$id_guru;
	// die(var_dump($id_guru));
	//redirect level
		if($level=='Admin'){
			echo 'Anda berhasil login sebagai admin';
			header('Location:../admin/index.php?content=dashboard');
		}
		elseif($level=='Kepala Sekolah'){
			echo "anda berhasil login sebagai kepalasekolah";
			header('Location:../kepsek/index.php?content=dashboard');
		}
		elseif($level=='Guru'){
			echo "anda berhasil login sebagai Walikelas";
			header('Location:../walikls/index.php?content=dashboard');
		}
			elseif($level=='Guru Tahfidz'){
			header('Location:../tahfidz/index.php?content=dashboard');
		}
}

else{

	echo "<br><br><br><strong><center><i>Maaf anda gagal login. Mungkin Username atau Password yang anda masukkan salah.<br>Silahkan masukkan Username atau Password dengan benar!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../index.php">';  
}

?>