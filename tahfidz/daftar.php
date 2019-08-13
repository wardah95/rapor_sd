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
  <h3><b>Daftar Hafalan Surat</b></h3>
    <br>
    <p>Berikut adalah daftar hafalan surat yang diharapkan dapat diselesaikan oleh siswa SD Alam Islmai</p>
    <br>
    <br>
   <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">NO</font></th>
            <th><font color="white">Nama Surat</font></th>
            <th><font color="white">Jus</font></th>
          </tr>
        </thead>
        <tbody>
          <?php
          error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM surat")or die(mysqli_error());
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
                        echo '<td>'.$data['juz'].'</td>';
                        
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

<!-- Modal -->
