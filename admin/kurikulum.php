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
  <h3 class="text-center"><b>Manajemen Kurikulum</b></h3>
    <a href="index.php?content=kurikulum_matapelajaran" class="btn btn-primary btn-fill">kembali</a>
    <a href="index.php?content=tambah_kurikulum" class="btn btn-primary btn-fill">
    <i class="fa fa-plus-circle fa-fw"></i> Kurikulum</a></a>
    <br>
    <br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped table-responsive table-bordered table-hovered">
        <thead>
          <tr>
            <th class="text-center"><font color="white">NO</font></th>
            <th class="text-center"><font color="white">Kelas</font></th>
            <th class="text-center"><font color="white">Matapelajaran</font></th>
            <th class="text-center" colspan="2"><font color="white">Action</font></th>
          </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT a.*, b.id_pelajaran, b.nama_pelajaran 
              FROM kurikulum a LEFT JOIN mata_pelajaran b ON a.id_pelajaran = b.id_pelajaran")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td class="text-center">'.$no.'</td>';
                        echo '<td class="text-center">'.$data['tingkatkelas'].'</td>';
                        echo '<td>'.$data['nama_pelajaran'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=edit_kurikulum&&id_pelajaran='.$data['id_kurikulum'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                      echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/proses_delete_kurikulum.php?id_kurikulum='.$data['id_kurikulum'].'><i class="fa fa-trash fa-fw"></i></a></td>';
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

