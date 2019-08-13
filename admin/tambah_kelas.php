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
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="card">
          <div class="header">
            <h4 class="title"><b>TAMBAH KELAS</b></h4>
            <div>
            <div class="content">
              <form action="../config/proses_tambah_kelas.php" method="POST" >
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <label>Nama Kelas</label>
                  <input type="text" class="form-control" placeholder="Nama Kelas" name="nama_kelas" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label>Wali Kelas</label>
                  <select class="form-control" name="id_guru" aria-describedby="basic-addon1" required>
                    <?php
                    $pel = "SELECT * FROM guru";
                    $querypel = mysqli_query($konek,$pel);
                    while ($datapel = mysqli_fetch_array($querypel)) { ?>
                    <option value="<?php echo $datapel['id_guru'] ?>"> <?php echo $datapel['namab'] ?>
                    </option>
                    <?php
                    }
                    ?>
                  </select>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <label>Tingkat Kelas</label>
                  <select class="form-control" name="tingkatkelas" aria-describedby="basic-addon1" required>
                    <?php
                    $pel = "SELECT distinct tingkatkelas FROM kurikulum";
                    $querypel = mysqli_query($konek,$pel);
                    while ($datapel = mysqli_fetch_array($querypel)) { ?>
                    <option value="<?php echo $datapel['tingkatkelas'] ?>"> <?php echo $datapel['tingkatkelas'] ?>
                    </option>
                    <?php
                    }
                    ?>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                  <label>Tahun Ajaran</label>
                  <input type="text" class="form-control" placeholder="Tahun Ajaran" name="tahun_ajaran" required>
                  </div>
                </div>
      </tbody>
         
</table>
<div class="col-md-12 text-center">
            <button type="submit" class="btn btn-md btn-success btn-fill">Simpan <i class="fa fa-floppy-o"></i></button>
</div>
</div>
</div>

              </form>
              </div>
                </div>
