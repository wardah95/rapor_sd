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

    $id_guru         = $_GET['id_guru'];

    $edit    = "SELECT a.*, b.* FROM walikelas a 
              LEFT JOIN siswa b ON a.id_siswa= b.id_siswa";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);
    // die(var_dump($id_siswa));
    // $edit2    = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
    // $hasil2   = mysqli_query($konek, $edit2)or die(mysql_error());
    // $data2   = mysqli_fetch_array($hasil2);

?>

<form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">NO</font></th>
            <th><font color="white">Siswa</font></th>
          </tr>
        </thead>
        <tbody>
           <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT a.*, b.* FROM walikelas a 
              LEFT JOIN siswa b ON a.id_siswa= b.id_siswa 
              WHERE id_guru = $id_guru")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nama'].'</td>';
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
<br>
<br>
<form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">NO</font></th>
            <th><font color="white">Matapelajaran</font></th>
          </tr>
        </thead>
        <tbody>
           <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT distinct a.nama_pelajaran, b.id_pelajaran, b.id_kurikulum, c.id_guru FROM mata_pelajaran a 
                LEFT JOIN kurikulum b ON a.id_pelajaran = b.id_pelajaran
                LEFT JOIN kelas c ON b.id_kurikulum = c.id_kurikulum
                WHERE id_guru = $id_guru")or die(mysqli_error());
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
