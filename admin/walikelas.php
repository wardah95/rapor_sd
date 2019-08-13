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
  <h4><b>Manajemen Wali Kelas</b></h4>
     <a href="index.php?content=tambah_walikelas">
    <button type="button" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw"></i>walikelas</button></a>
    <br>
    <form class="forms-sample" form action="" method="POST">
                          <div class="form-group">
                                                <label>kelas</label>
                                                <select class="form-control" name="kelas" required>
                                                    <option>Kelas 1</option>
                                                    <option>Kelas 2</option>
                                                    <option>Kelas 3</option>
                                                    <option>Kelas 4</option>
                                                    <option>Kelas 5</option>
                                                    <option>Kelas 6</option>
                                                </select>
                                            </div>
<button type="submit" class="btn btn-primary">Cari Data</button>
    <br>
    <br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><font color="white">NO</font></th>
            <th><font color="white">Nama kelas</font></th>
            <th><font color="white">Walikelas</font></th>
            <th><font color="white">Siswa</font></th>
            <th colspan="2"><font color="white"><center>Action</center></font></th>
          </tr>
        </thead>
        <tbody>
          <?php
          error_reporting(0);

            include '../config/koneksi.php';
            if(isset($_POST['kelas'])){
            $cari = $_POST['kelas'];

            $query = mysqli_query($konek, "SELECT a.id_walikelas, b.namab, c.nama_kelas, d.nama from walikelas a 
              LEFT JOIN guru b ON a.id_guru= b.id_guru
              LEFT JOIN kelas c ON a.id_kelas= c.id_kelas
              LEFT Join siswa d on a.id_siswa= d.id_siswa
              where c.nama_kelas like '%".$kelas."%' ")or die(mysqli_error($konek));
                  }else{
                    $query = mysqli_query($konek, "SELECT a.id_walikelas, b.namab, c.nama_kelas, d.nama from walikelas a 
              LEFT JOIN guru b ON a.id_guru= b.id_guru
              LEFT JOIN kelas c ON a.id_kelas= c.id_kelas
              LEFT Join siswa d on a.id_siswa= d.id_siswa")or die(mysqli_error($konek));
                  }

                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nama_kelas'].'</td>';
                        echo '<td>'.$data['namab'].'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=edit_walikelas&&id_walikelas='.$data['id_walikelas'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                      echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/proses_delete_walikelas.php?id_walikelas='.$data['id_walikelas'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        echo '</tr>';
            
                        $no++;  
                      }
                    }
                    // die(var_dump($query));

                ?>
                    
        </tbody>
      </table>
    </form>
    <br>

</div>