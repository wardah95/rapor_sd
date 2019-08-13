<?php
  
  //menyambungkan koneksi
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

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    
    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
          -webkit-appearance: none; 
          margin: 0; 
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    Wali Kelas <br>
                    <?php echo $data['nama'] ?>
                </a>
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
                    <a href="index.php?content=daftar_siswa">
                        <i class="pe-7s-study"></i>
                        <p>Daftar Siswa</p>
                    </a>
                </li>
                
                <li>
                    <a href="index.php?content=rapor1">
                        <i class="pe-7s-note2"></i>
                        <p>Rapor Siswa</p>
                    </a>
                </li>

                 <li>
                    <a href="index.php?content=rapor2">
                        <i class="pe-7s-note2"></i>
                        <p>Isi Data Lain</p>
                    </a>
                </li>
                
                <li>
                    <a href="index.php?content=list_cetak">
                        <i class="pe-7s-print"></i>
                        <p>Cetak Rapor</p>
                    </a>
                </li>

                <li>
                    <a href="index.php?content=ie">
                        <i class="pe-7s-print"></i>
                        <p>Import & Eksport</p>
                    </a>
                </li>
                
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
                                    if ($content=='daftar_siswa')
                                    include 'daftar_siswa.php';
                                    if ($content=='pilihan_nilai')
                                    include 'pilihan_nilai.php';
                                    if ($content=='cetak_rapor')
                                    include 'cetak_rapor.php';

                                    if ($content=='rapor1')
                                    include 'rapor1.php';
                                    if ($content=='edit_rapor1')
                                    include 'edit_rapor1.php';
                                    if ($content=='tambah_rapor1')
                                    include 'tambah_rapor1.php';
                                    
                                    if ($content=='rapor2')
                                    include 'rapor2.php';
                                    if ($content=='tambah_rapor2')
                                    include 'tambah_rapor2.php';
                                    if ($content=='edit_rapor2')
                                    include 'edit_rapor2.php';

                                    if ($content=='list_cetak')
                                    include 'list_cetak.php';
                                    if ($content=='pilihan_cetak')
                                    include 'pilihan_cetak.php';
                                    if ($content=='pilihan_cetak1')
                                    include 'pilihan_cetak1.php';

                                    if ($content=='ie')
                                    include 'ie.php';
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
