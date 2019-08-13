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
  <h3 class="text-center"><b>PENGHITUNGAN KURIKULUM</b></h3>
        <a href="index.php?content=kurikulum_matapelajaran" class="btn btn-primary btn-fill">kembali</a>
        <a href="index.php?content=tambah_rumus" class="btn btn-primary btn-fill"><i class="fa fa-plus-circle fa-fw"></i>RUMUS</a>
      
    </div>
    <br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="text-center"><font color="white">NO</font></th>
            <th class="text-center"><font color="white">Kode</font></th>
            <th class="text-center"><font color="white">Keterangan</font></th>
            <th class="text-center"><font color="white">Nilai Harian</font></th>
            <th class="text-center"><font color="white">Nilai UTS</font></th>
            <th class="text-center"><font color="white">Nilai UAS</font></th>
            <th class="text-center"><font color="white">Waktu</font></th>
            <th class="text-center"><font color="white">Aktif</font></th>
            <th class="text-center" colspan="2"><font color="white">Edit/Delete</font></th>
          </tr>
        </thead>
        <tbody>
           <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM m_rumus
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
                        echo '<td>'.$data['kd_rumus'].'</td>';
                        echo '<td>'.$data['nm_rumus'].'</td>';
                        echo '<td>'.$data['nl_harian'].'</td>';
                        echo '<td>'.$data['nl_uts'].'</td>';
                        echo '<td>'.$data['nl_uas'].'</td>';
                        echo '<td>'.$data['date_create'].'</td>';
                        echo '<td>'.$data['aktif'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="edit" href=index.php?content=edit_rumus&&id_rumus='.$data['id_rumus'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/proses_delete_rumus.php?id_rumus='.$data['id_rumus'].'><i class="fa fa-trash fa-fw"></i></a></td>';
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
