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
  <h3><b>Sekolah</b></h3>
    <br>
   <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">Nama Sekolah</font></th>
            <th><font color="white">NPSN/NSS</font></th>
            <th><font color="white">Alamat</font></th>
            <th><font color="white">Kode Pos</font></th>
            <th><font color="white">Telepon</font></th>
            <th><font color="white">Kelurahan/Desa</font></th>
            <th><font color="white">Kecamatan</font></th>
            <th><font color="white">Kabupaten/Kota</font></th>
            <th><font color="white">Provinsi</font></th>
            <th><font color="white">Email</font></th>
            <th><font color="white"><center>Action</center></font></th>
          </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM sekolah")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['npsn_nss'].'</td>';
                        echo '<td>'.$data['alamat'].'</td>';
                        echo '<td>'.$data['kode_pos'].'</td>';
                        echo '<td>'.$data['no_hp'].'</td>';
                        echo '<td>'.$data['kelurahan_desa'].'</td>';
                        echo '<td>'.$data['kecamatan'].'</td>';
                        echo '<td>'.$data['kabupaten_kota'].'</td>';
                        echo '<td>'.$data['provinsi'].'</td>';
                        echo '<td>'.$data['email'].'</td>';
                        // echo '<td>'.$data['alamat'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=edit_sekolah&&id_sekolah='.$data['id_sekolah'].'><i class="fa fa-edit fa-fw"></i></a></td>';
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
