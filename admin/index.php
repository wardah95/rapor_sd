<?php
  
  include '../config/koneksi.php';
  session_start();
    $id_guru = $_SESSION['id_guru'];

  if(isset($_GET['content'])) $content = $_GET['content']; 
      else $content = "index";
      $sql = "SELECT * FROM user where id_guru = '$id_guru'";
      $query = mysqli_query($konek, $sql)or die(mysqli_error());
      $data    = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    ADMIN <br>
                    <?php echo $data['nama'] ?>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php?content=dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?content=sekolah_guru_siswa">
                        <i class="pe-7s-users"></i>
                        <p>Manajemen Sekolah</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?content=user">
                        <i class="pe-7s-users"></i>
                        <p>Manajemen User</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?content=guru">
                        <i class="pe-7s-users"></i>
                        <p>Manajemen Guru</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?content=siswa">
                        <i class="pe-7s-users"></i>
                        <p>Manajemen Siswa</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="index.php?content=">
                        <i class="pe-7s-graph"></i>
                        <p>??? g tau apa namanya</p>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="index.php?content=matapelajaran">
                        <i class="pe-7s-graph"></i>
                        <p>Manajemen Matapelajaran</p>
                    </a>
                </li> -->
                <li>
                    <a href="index.php?content=kurikulum_matapelajaran">
                        <i class="pe-7s-graph"></i>
                        <p>Manajemen Kurikulum</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?content=kelas_walikelas">
                        <i class="pe-7s-note2"></i>
                        <p>Manajemen Kelas</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="index.php?content=walikelas">
                        <i class="pe-7s-note2"></i>
                        <p>Manajemen Walikelas</p>
                    </a>
                </li> -->
               <!--  <li>
                    <a href="index.php?content=sekolah_guru_siswa">
                        <i class="pe-7s-users"></i>
                        <p>Manajemen Sekolah, Guru dan Siswa</p>
                    </a>
                </li> -->
                
               <!--  <li>
                    <a href="index.php?content=kurikulum_matapelajaran">
                        <i class="pe-7s-study"></i>
                        <p>Manajeman Kurikulum, Matapelajaran dan Hafalan</p>
                    </a>
                </li> -->
                
            </ul>
    	</div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <p align="center">SISTEM INFORMASI APLIKASI RAPOT KURIKULUM 2013
SD ALAM ISLAMI</p>  
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href=../config/logout.php>
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <?php
                                    if ($content=='dashboard')
                                        include 'dashboard.php';
                                    if ($content=='sekolah_guru_siswa')
                                        include 'sekolah_guru_siswa.php';
                                    if ($content=='edit_sekolah')
                                        include 'edit_sekolah.php'; 
                                    if ($content=='tambah_guru')
                                        include 'tambah_guru.php';
                                    if ($content=='edit_guru')
                                        include 'edit_guru.php';
                                    if ($content=='tambah_siswa')
                                        include 'tambah_siswa.php';
                                    if ($content=='edit_siswa')
                                        include 'edit_siswa.php';

                                    if ($content=='kurikulum_matapelajaran')
                                        include 'kurikulum_matapelajaran.php';
                                    if ($content=='detilpelajaran')
                                        include 'detilpelajaran.php';
                                    if ($content=='matapelajaran')
                                        include 'matapelajaran.php';
                                    if ($content=='cobatambah_matapelajaran')
                                        include 'cobatambah_matapelajaran.php';
                                    if ($content=='edit_matapelajaran') 
                                        include 'edit_matapelajaran.php';
                                    if ($content=='rumus')
                                        include 'rumus.php';
                                    if ($content=='tambah_rumus')
                                        include 'tambah_rumus.php';
                                    if ($content=='edit_rumus')
                                        include 'edit_rumus.php';
                                    if ($content=='kurikulum')
                                        include 'kurikulum.php';
                                    if ($content=='tambah_kurikulum')
                                        include 'tambah_kurikulum.php';

                                    if ($content=='kelas_walikelas')
                                        include 'kelas_walikelas.php';
                                    if ($content=='tambah_kelas')
                                        include 'tambah_kelas.php';


                                    if ($content=='user')
                                        include 'user.php';
                                    if ($content=='tambah_user')
                                        include 'tambah_user.php';
                                    if ($content=='edit_user')
                                        include 'edit_user.php';
                                    if ($content=='tambah_matapelajaran')
                                        include 'tambah_matapelajaran.php';
                                    if ($content=='edit_matapelajaran') 
                                        include 'edit_matapelajaran.php';
                                    if ($content=='edit_kurikulum') 
                                        include 'edit_kurikulum.php';
                                    if ($content=='edit_surat') 
                                        include 'edit_surat.php';
                                    if ($content=='tambah_hafalan')
                                        include 'tambah_hafalan.php';
                                    if ($content=='edit_kelas')
                                        include 'edit_kelas.php';
                                    if ($content=='tambah_walikelas')
                                        include 'tambah_walikelas.php';
                                    if ($content=='edit_walikelas')
                                        include 'edit_walikelas.php';
                                    if ($content=='walikelas')
                                        include 'walikelas.php';
                                    if ($content=='tes_koding')
                                        include 'tes_koding.php';
                                    if ($content=='detil')
                                        include 'detil.php';
                                    if ($content=='guru')
                                        include 'guru.php';
                                    if ($content=='siswa')
                                        include 'siswa.php';
                                    
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>

        <footer class="footer">
            <div class="container-fluid">
                <!--  -->
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a>Wardah</a>, Informatika Universitas Darma Persada
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Aplikasi Rapot Dashboard</b> <br> SD Alam Islamia"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
