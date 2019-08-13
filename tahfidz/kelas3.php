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
  <h3><b>Daftar Murid Kelas 3</b></h3>
    <br>
    <br>
    <br>
   <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Nama </font></th>
            <th><font color="white"><center>Isi Nilai</center></font></th>
          </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT a.nama, a.id_siswa from siswa a 
                                          LEFT JOIN walikelas b ON a.id_siswa = b.id_siswa
                                          LEFT JOIN kelas c ON b.id_kelas = c.id_kelas
                                          WHERE c.nama_kelas = 'Kelas 3'")or die(mysqli_error());
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
                        // echo '<td>'.$data['alamat'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=Daftar_hafalan&&id_siswa='.$data['id_siswa'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        // echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/proses_delete_user.php?id_user='.$data['id_siswa'].'><i class="fa fa-trash fa-fw"></i></a></td>';
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
