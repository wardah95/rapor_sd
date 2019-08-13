 <style>

  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even){background-color: #bbdfed;}

  th {
      background-color: #3bacd6;
      color: white; 
  }

  td {
    font-size: 14px;
  }
</style>
<?php

    // error_reporting(0);

    include '../config/koneksi.php';

    $tingkatkelas         = $_GET['tingkatkelas'];

    $edit    = "SELECT a.tingkatkelas, b.nama_pelajaran FROM kurikulum a 
              LEFT JOIN mata_pelajaran b ON a.id_pelajaran = b.id_pelajaran";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);
    // die(var_dump($id_siswa));
    // $edit2    = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
    // $hasil2   = mysqli_query($konek, $edit2)or die(mysql_error());
    // $data2   = mysqli_fetch_array($hasil2);

?>

<form class="form-horizontal" method="POST">
  <h3 class="text-center"><b>Daftar pelajaran Kelas  <?php echo $_GET['tingkatkelas'] ?></b></h3>
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">NO</font></th>
            <th><font color="white">Nama Pelajaran</font></th>
          </tr>
        </thead>
        <tbody>
           <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT a.tingkatkelas, b.nama_pelajaran FROM kurikulum a 
              LEFT JOIN mata_pelajaran b ON a.id_pelajaran = b.id_pelajaran WHERE tingkatkelas = $tingkatkelas")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nama_pelajaran'].'</td>';
                        // echo '<td>'.$data['nama_kelas'].'</td>';
                        // echo '<td>'.$data['namab'].'</td>';
                        
                        $no++;  
                      }
                    }
                //die(var_dump($data));
                ?>
                  
        </tbody>
      </table>
    </form>
<br>