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
  <h3><b>USER</b></h3>
    <br>
    <a href="index.php?content=tambah_user">
    <button type="button" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw"></i>USER</button></a>
    <br>
    <br>
   <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Nama </font></th>
            <th><font color="white">Username</font></th>
            <th><font color="white">Level</font></th>
            <th><font color="white">Jabatan</font></th>
            <th><font color="white">Nama guru</font></th>
            <th colspan="2"><font color="white"><center>Action</center></font></th>
          </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "select a.id_user, a.nama, a.username, a.level, a.jabatan, b.namab from user a 
              LEFT JOIN guru b ON a.id_guru = b.id_guru")or die(mysqli_error());
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
                        echo '<td>'.$data['username'].'</td>';
                        echo '<td>'.$data['level'].'</td>';
                        echo '<td>'.$data['jabatan'].'</td>';
                        echo '<td>'.$data['namab'].'</td>';
                        // echo '<td>'.$data['alamat'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=edit_user&&id_user='.$data['id_user'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/proses_delete_user.php?id_user='.$data['id_user'].'><i class="fa fa-trash fa-fw"></i></a></td>';
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
