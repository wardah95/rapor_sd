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
</style><div> 
  <h3><b>KELAS 5</b></h3>
  <h4>Berikut adalah daftar data Kelas 5</h4>
    
    <br>
    <br>
   <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">NO</font></th>
            <th><font color="white">Nama</font></th>
            <th><font color="white">No Induk</font></th>
            <th><font color="white">Jenis Kelamin</font></th>
            <th><font color="white">Agama</font></th>
            <th><font color="white">Tanggal Lahir</font></th>
            <th><font color="white">Tempat Lahir</font></th>
            <th><font color="white">Alamat</font></th>
            <th><font color="white">Ayah</font></th>
            <th><font color="white">Ibu</font></th>
            <th><font color="white">Pendidikan Terakhir</font></th>
            <th><font color="white">jalan</font></th>
            <th><font color="white">kelurahan</font></th>
            <th><font color="white">kecamatab</font></th>
            <th><font color="white">kabupaten</font></th>
            <th><font color="white">provinsi</font></th>
            <th><font color="white">NO HP</font></th>
            
          </tr>
        </thead>
        <tbody>
          <?php
          error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT a.nama, a.no_induk, a.jk, a.agama, a.tmp_lahir, a.tgl_lahir, a.alamat, a.pendidikan, a.ayah, a.ibu, a.kelurahan, a.kecamatan, a.kabupaten, a.no_hp, a.jln, a.propinsi from siswa a 
                                          LEFT JOIN walikelas b ON a.id_siswa = b.id_siswa
                                          LEFT JOIN kelas c ON b.id_kelas = c.id_kelas
                                          WHERE c.nama_kelas = 'Kelas 5'")or die(mysqli_error());
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
                        echo '<td>'.$data['jk'].'</td>';
                        echo '<td>'.$data['agama'].'</td>';
                        echo '<td>'.$data['tmp_lahir'].'</td>';
                        echo '<td>'.$data['tgl_lahir'].'</td>';
                        echo '<td>'.$data['alamat'].'</td>';
                        echo '<td>'.$data['ayah'].'</td>';
                        echo '<td>'.$data['ibu'].'</td>';
                        echo '<td>'.$data['pendidikan'].'</td>';
                        echo '<td>'.$data['jln'].'</td>';
                        echo '<td>'.$data['kelurahan'].'</td>';
                        echo '<td>'.$data['kecamatan'].'</td>';
                        echo '<td>'.$data['kabupaten'].'</td>';
                        echo '<td>'.$data['propinsi'].'</td>';
                        echo '<td>'.$data['no_hp'].'</td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
                    // die(var_dump($query));

                ?>
                    
        </tbody>
      </table>
    </form>
</div>
</div>