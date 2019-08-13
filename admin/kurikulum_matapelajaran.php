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
    <div class="row">
      <div class="col-md-2">
        <a href="index.php?content=matapelajaran" class="btn btn-primary btn-fill">Mata Pelajaran</a>
      </div>
      <div class="col-md-2">
        <a href="index.php?content=rumus" class="btn btn-primary btn-fill">Penghitungan</a>
      </div>
      <div class="col-md-2">
        <a href="index.php?content=kurikulum" class="btn btn-primary btn-fill">Kurikulum</a>
      </div>
    </div>
    <br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped table-responsive table-bordered table-hovered">
        <thead>
          <tr>
            <th class="text-center"><font color="white">Tingkat Kelas</font></th>
            <th class="text-center"><font color="white"><center>Detil Pelajaran</center></font></th>
          </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT distinct a.tingkatkelas FROM kurikulum a
              LEFT JOIN mata_pelajaran b ON a.id_pelajaran= b.id_pelajaran")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        // echo '<td>'.$no.'</td>';
                        echo '<td class="text-center">'.$data['tingkatkelas'].'</td>';
                        echo '<td class="text-center" width="20"><a data-toggle="tooltip" data-placement="left" title="detil" href=index.php?content=detilpelajaran&&tingkatkelas='.$data['tingkatkelas'].'><i class="fa fa-edit fa-fw"></i></a></td>';
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


<!-- Modal -->
