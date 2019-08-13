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
    <h4><b>Daftar Siswa</b></h4>
    <h5>Untuk Mengisi Data Rapor</h5>
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
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="tambah" href=index.php?content=tambah_rapor2&&id_siswa='.$data['id_siswa'].'&&id_kelas='.$data['id_kelas'].'><i class="pe-7s-album"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
                    // die(var_dump($query));?>
                    
        </tbody>
      </table>
    </form>
  </div>
<div> 
  <h3><b>Hasil Data Siswa</b></h3> 
   <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Nama</font></th>
            <th><font color="white">Tahun Ajaran</font></th>
            <th><font color="white">Semester</font></th>
            <th><font color="white">Spritual</font></th>
            <th><font color="white">Sosial</font></th>
            <th><font color="white">Ekstra kulikuler1</font></th>
            <th><font color="white">keterangan </font></th>
            <th><font color="white">Ektra Kulikuler2</font></th>
            <th><font color="white">Keterangan</font></th>
            <th><font color="white">Berat 1</font></th>
            <th><font color="white">Berat 2</font></th>
            <th><font color="white">Tinggi 1</font></th>
            <th><font color="white">Tinggi 2</font></th>
            <th><font color="white">Pendengaran</font></th>
            <th><font color="white">Pengelihatan</font></th>
            <th><font color="white">Gigi</font></th>
            <th><font color="white">Prestasi 1</font></th>
            <th><font color="white">keterangan </font></th>
            <th><font color="white">Prestasi 2</font></th>
            <th><font color="white">Keterangan</font></th>
            <th><font color="white">sakit</font></th>
            <th><font color="white">ijin</font></th>
            <th><font color="white">absen</font></th>
            <th><font color="white">Saran</font></th>
            <th colspan="2"><font color="white"><center>Action</center></font></th>
            </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting(0);

            include '../config/koneksi.php';
              session_start();
            $id_guru=$_SESSION['id_guru'];

            $query = mysqli_query($konek, "SELECT a.*, b.id_kelas, c.* FROM siswa a, walikelas b, nilai_rapot2 c where a.id_siswa=b.id_siswa and a.id_siswa=c.id_siswa and id_guru = '$id_guru'" )or die(mysqli_error());
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
                        echo '<td>'.$data['tahun'].'</td>';
                        echo '<td>'.$data['semester'].'</td>';
                        echo '<td>'.$data['spiritual'].'</td>';
                        echo '<td>'.$data['sosial'].'</td>';
                        echo '<td>'.$data['ekskul1'].'</td>';
                        echo '<td>'.$data['keterangan1'].'</td>';
                        echo '<td>'.$data['ekskul2'].'</td>';
                        echo '<td>'.$data['keterangan2'].'</td>';
                        echo '<td>'.$data['berat1'].'</td>';
                        echo '<td>'.$data['berat2'].'</td>';
                        echo '<td>'.$data['tinggi1'].'</td>';
                        echo '<td>'.$data['tinggi2'].'</td>';
                        echo '<td>'.$data['pendengaran'].'</td>';
                        echo '<td>'.$data['pengelihatan'].'</td>';
                        echo '<td>'.$data['gigi'].'</td>';
                        echo '<td>'.$data['prestasi1'].'</td>';
                        echo '<td>'.$data['keterangan_1'].'</td>';
                        echo '<td>'.$data['prestasi2'].'</td>';
                        echo '<td>'.$data['keterangan_2'].'</td>';
                        echo '<td>'.$data['sakit'].'</td>';
                        echo '<td>'.$data['ijin'].'</td>';
                        echo '<td>'.$data['absen'].'</td>';
                        echo '<td>'.$data['saran2'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=edit_rapor2&&id_nilai2='.$data['id_nilai2'].'&&id_siswa='.$data['id_siswa'].'&&id_kelas='.$data['id_kelas'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/proses_delete_rapor2.php?id_nilai2='.$data['id_nilai2'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
                //die(var_dump($data));
                ?>
        </tbody>
      </table>
    </form>
</div>





  </div>

<!-- Modal -->

