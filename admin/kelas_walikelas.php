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
   
<div> 
  <h3 class="text-center"><b>Manajemen Kelas</b></h3>
    <div class="row">
      <div class="col-md-2">
        <a href="index.php?content=tambah_kelas" class="btn btn-primary btn-fill"><i class="fa fa-plus-circle fa-fw"></i>Kelas</a>
      </div>
      <div class="col-md-2">
        <a href="index.php?content=tambah_walikelas" class="btn btn-primary btn-fill"><i class="fa fa-plus-circle fa-fw"></i>Siswa</a>
      </div>
    </div>
    <br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">NO</font></th>
            <th><font color="white">Tahun</font></th>
            <th><font color="white">kelas</font></th>
            <th><font color="white">WaliKelas</font></th>
            <th><font color="white">Detil</font></th>
          </tr>
        </thead>
        <tbody>
           <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT distinct a.tahun_ajaran, a.nama_kelas, b.namab, b.id_guru FROM kelas a 
              LEFT JOIN guru b ON a.id_guru= b.id_guru
              ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['tahun_ajaran'].'</td>';
                        echo '<td>'.$data['nama_kelas'].'</td>';
                        echo '<td>'.$data['namab'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="detil" href=index.php?content=detil&&id_guru='.$data['id_guru'].'><i class="fa fa-edit fa-fw"></i></a></td>';
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
    <br>
    
  </div>

<!-- Modal -->
