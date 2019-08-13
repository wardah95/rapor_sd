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

    // error_reporting(0);

    include '../config/koneksi.php';

    $id_siswa       = $_GET['id_siswa'];
    $id_kelas       = $_GET['id_kelas'];

    $edit    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

    $edit2    = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
    $hasil2   = mysqli_query($konek, $edit2)or die(mysql_error());
    $data2   = mysqli_fetch_array($hasil2);
?>
<div> 
  <h3><b>Pilih Matapelajaran</b></h3>
  <h5>berikut Matapelajaran dan nilai yang dimiliki oleh  <?php echo $data['nama'] ?></h5>   
    <br>
    <br>
    <br>
   <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Nama Pelajaran</font></th>
            <th><font color="white"><center>Isi</center></font></th>
            </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $id_siswa = $_GET['id_siswa'];
            $id_kelas = $_GET['id_kelas'];
            $query = mysqli_query($konek, "SELECT  a.nama_pelajaran, a.id_pelajaran, b.id_kurikulum, c.id_kelas FROM mata_pelajaran a LEFT join kurikulum b ON a.id_pelajaran = b.id_pelajaran left join kelas c on b.id_kurikulum = c.id_kurikulum WHERE c.nama_kelas='Kelas 1' ORDER by a.id_pelajaran" )or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nama_pelajaran'].'</td>';
                        // echo '<td>'.$data['alamat'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=tambah_rapor1&&id_siswa='.$_GET['id_siswa'].'&&id_kelas='.$data['id_kelas'].'&&id_kurikulum='.$data['id_kurikulum'].'><i class="pe-7s-album"></i></a></td>';
                        $no++;  
                      }
                    }
                //die(var_dump($data));
                ?>
        </tbody>
      </table>
    </form>
</div>

<div> 
  <h3><b>Hasil Nilai Matapelajaran</b></h3> 
    <br>
   <div style="overflow-x:auto;">
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Nama Pelajaran</font></th>
            <th><font color="white">Tahun Ajaran</font></th>
            <th><font color="white">Semester</font></th>
            <th><font color="white">Pengetahuan harian</font></th>
            <th><font color="white">Pengetahuan UTS</font></th>
            <th><font color="white">Pengetahaun UAS</font></th>
            <th><font color="white">Nilai</font></th>
            <th><font color="white">Predikat</font></th>
            <th><font color="white">Keterampilan</font></th>
            <th><font color="white">Predikat</font></th>
            <th colspan="2"><font color="white"><center>Action</center></font></th>
            </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting(0);

            include '../config/koneksi.php';

            $id_siswa = $_GET['id_siswa'];

            // die(var_dump($id_siswa));
            $query = mysqli_query($konek, "SELECT  a.*,b.*, c.id_kurikulum, d.id_pelajaran, d.nama_pelajaran FROM nilai_rapor1 a
LEFT join siswa b ON a.id_siswa = b.id_siswa 
left join kurikulum c on a.id_kurikulum = c.id_kurikulum
LEFT JOIN mata_pelajaran d on c.id_pelajaran =d.id_pelajaran
WHERE a.id_siswa='$id_siswa' 
ORDER by a.id_siswa" )or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nama_pelajaran'].'</td>';
                        echo '<td>'.$data['tahun_ajaran'].'</td>';
                        echo '<td>'.$data['semester'].'</td>';
                        echo '<td>'.$data['pengetahuan_harian'].'</td>';
                        echo '<td>'.$data['pengetahuan_uts'].'</td>';
                        echo '<td>'.$data['pengetahuan_uas'].'</td>';
                        echo '<td>'.$data['nilai_pengetahuan'].'</td>';
                        echo '<td>'.$data['predikat_pengetahuan'].'</td>';
                        echo '<td>'.$data['nilai_keterampilan'].'</td>';
                        echo '<td>'.$data['predikat_keterampilan'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=edit_rapor1&&id_siswa='.$_GET['id_siswa'].'&&id_kurikulum='.$data['id_kurikulum'].'&&id_nilai='.$data['id_nilai'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/proses_delete_rapor1.php?id_nilai='.$data['id_nilai'].'><i class="fa fa-trash fa-fw"></i></a></td>';
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

</div>



</div>

<!-- Modal -->

