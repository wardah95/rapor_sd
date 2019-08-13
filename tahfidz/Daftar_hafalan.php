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
   <?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_siswa = $_GET['id_siswa'];

    $edit    = "SELECT a.*, b.* FROM siswa a, nilai_hafalan b WHERE a.id_siswa='$id_siswa'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

    $edit1    = "SELECT * FROM surat";
    $hasil1   = mysqli_query($konek, $edit1)or die(mysql_error());
    $data1    = mysqli_fetch_array($hasil1);

    
// die(var_dump($id_surat));

?>
<div> 
  <h3><b>Daftar Surat</b></h3>
  <h5>berikut surat yang harus dihafal oleh <?php echo $data['nama'] ?></h5>  
    <br>
    <br>
  <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Nama Surat</font></th>
            <th><font color="white"><center>Isi</center></font></th>
            </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $id_siswa = $_GET['id_siswa'];
            $query = mysqli_query($konek, "select * from surat" )or die(mysqli_error());
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
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=isi_nilai&&id_siswa='.$_GET['id_siswa'].'&&id_surat='.$data['id_surat'].'><i class="pe-7s-note"></i></a></td>';
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
    <br>
  <h4>Nilai yang sudah masuk</h4>
   <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Nama Surat</font></th>
            <th><font color="white">Nilai</font></th>
            <th><font color="white">Keterangan</font></th>
            <th><font color="white"><center>Edit</center></font></th>
            </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $id_siswa = $_GET['id_siswa'];
            $query = mysqli_query($konek, "select a.*, b.*, c.*  from surat a   
              LEFT JOIN nilai_hafalan b ON a.id_surat = b.id_surat
              LEFT JOIN siswa c ON b.id_siswa = c.id_siswa WHERE c.id_siswa = '$id_siswa'" )or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data1['nama'].'</td>';
                        echo '<td>'.$data['nilai'].'</td>';
                        echo '<td>'.$data['keterangan'].'</td>';
                        // echo '<td>'.$data['alamat'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=edit_nilai&&id_siswa='.$_GET['id_siswa'].'&&id_hafalan='.$data['id_hafalan'].'&&id_surat='.$data['id_surat'].' ><i class="pe-7s-config"></i></a></td>';
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

