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
<hr>
    <h4><b>Daftar Siswa</b></h4>
    <h5>Pilih siswa untuk mencetak rapor hafalan</h5>
    <br>
    <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">NO</font></th>
            <th><font color="white">Nama</font></th>
            <th><font color="white">No Induk</font></th>
            <th><font color="white"><center>Action</center></font></th>
            </tr>
        </thead>
        <tbody>
          <?php
          error_reporting(0);

            include '../config/koneksi.php';
            // session_start();
            // $id_guru=$_SESSION['id_guru'];
            
            // $id_kelas = $_GET['id_kelas'];


            // $edit    = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
            // $hasil1   = mysqli_query($konek, $edit1)or die(mysql_error());
            // $data1    = mysqli_fetch_array($hasil1);

            $sql = "SELECT * FROM siswa";
            
            $query = mysqli_query($konek, $sql)or die(mysqli_error());
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
                        echo '<td>'.$data['no_induk'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="tambah" href=index.php?content=cetak_nilai_hafalan&&id_siswa='.$data['id_siswa'].'><i class="pe-7s-print"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
                    // die(var_dump($query));?>
                    
        </tbody>
      </table>
    <!-- </form>
    <hr>
    <h4><b>Daftar Siswa</b></h4>
    <h5>Pilih siswa untuk mencetak Rapor</h5>
    <br>
    <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">NO</font></th>
            <th><font color="white">Nama</font></th>
            <th><font color="white">No Induk</font></th>
            <th><font color="white"><center>Action</center></font></th>
            </tr>
        </thead>
        <tbody>
          <?php
          error_reporting(0);

            include '../config/koneksi.php';
            session_start();
            $id_guru=$_SESSION['id_guru'];
            
            // $id_kelas = $_GET['id_kelas'];


            // $edit    = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
            // $hasil1   = mysqli_query($konek, $edit1)or die(mysql_error());
            // $data1    = mysqli_fetch_array($hasil1);

            $sql = "SELECT a.*, b.id_kelas FROM siswa a, walikelas b where a.id_siswa=b.id_siswa and id_guru = '$id_guru'";
            
            $query = mysqli_query($konek, $sql)or die(mysqli_error());
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
                        echo '<td>'.$data['no_induk'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="tambah" href=index.php?content=pilihan_cetak1&&id_siswa='.$data['id_siswa'].'&&id_kelas='.$data['id_kelas'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
                    // die(var_dump($query));?>
                    
        </tbody>
      </table>
    </form>
 -->  </div>