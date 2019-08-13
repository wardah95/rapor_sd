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
     <h4><b>Manajemen Guru</b></h4>
     <a href="index.php?content=tambah_guru">
    <button type="button" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw"></i>GURU</button></a>
    <br>
    <br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">NO</font></th>
            <th><font color="white">Nama</font></th>
            <th><font color="white">NIP</font></th>
            <th><font color="white">Jenis Kelamin</font></th>
            <th><font color="white">Tempat Lahir</font></th>
            <th><font color="white">Tanggal Lahir</font></th>
            <th><font color="white">Pendidikan Terakhir</font></th>
            <th><font color="white">alamat</font></th>
            <th><font color="white">No Hp</font></th>
            <th colspan="2"><font color="white"><center>Action</center></font></th>
          </tr>
        </thead>
        <tbody>
          <?php
          error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM guru")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['namab'].'</td>';
                        echo '<td>'.$data['nip'].'</td>';
                        echo '<td>'.$data['jk'].'</td>';
                        echo '<td>'.$data['tmp_lahir'].'</td>';
                        echo '<td>'.$data['tgl_lahir'].'</td>';
                        echo '<td>'.$data['pendidikan'].'</td>';
                        echo '<td>'.$data['alamat'].'</td>';
                        echo '<td>'.$data['no_hp'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=edit_guru&&id_guru='.$data['id_guru'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/proses_delete_guru.php?id_guru='.$data['id_guru'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
                    // die(var_dump($query));
                ?>
        </tbody>
      </table>
    </form>


