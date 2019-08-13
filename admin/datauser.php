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

<!-- <div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / Tahun Pelajaran</li>
  </ol>
</div> -->
   
<div> 
  <h3><b>Manajemen User</b></h3>
    <hr>
    <a href="index.php?content=tambah_user">
    <button type="button" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw"></i> User </button></a>
    <br>
    <br>
    <br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">NO</font></th>
            <th><font color="white">NIP </font></th>
            <th><font color="white">Nama</font></th>
            <th><font color="white">Alamat</font></th>
            <th><font color="white">No Hp</font></th>
            <th><font color="white">Jenis Kelamin</font></th>
            <th><font color="white">Status</font></th>
            <th><font color="white">Jabatan</font></th>
            <th><font color="white">Tahun Ajaran</font></th>
            <th><font color="white">Kelas</font></th>
            <th colspan="2"><font color="white"><center>Action</center></font></th>
          </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM user")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                         echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nip'].'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['alamat'].'</td>';
                        echo '<td>'.$data['no_hp'].'</td>';
                        echo '<td>'.$data['jk'].'</td>';
                        echo '<td>'.$data['status'].'</td>';
                        echo '<td>'.$data['jabatan'].'</td>';
                        echo '<td>'.$data['tahun_ajaran'].'</td>';
                        echo '<td>'.$data['id_kelas'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=edit_user&&id_user='.$data['id_user'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        // echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=admin.php?content=edit-user&&id_user='.$data['id_user'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                      echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/proses_delete_user.php?id_user='.$data['id_user'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
                // die(var_dump($data));
                ?>
                    
        </tbody>
      </table>
    </form>
  </div>

<!-- Modal -->
