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
            <h4 class="title">FORM KURIKULUM</h4>
            <div>
            <div class="content">
              <form action="../config/proses_tambah_kurikulum.php" method="POST" >
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                  <label>Tingkat Kelas</label>
                  <select class="form-control" name="tingkatkelas[]" aria-describedby="basic-addon1" required>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label>Kode Kurikulum</label>
                  <select class="form-control" name="kd_rumus[]" aria-describedby="basic-addon1" required>
                    <?php
                    $pel = "SELECT distinct kd_rumus FROM m_rumus";
                    $querypel = mysqli_query($konek,$pel);
                    while ($datapel = mysqli_fetch_array($querypel)) { ?>
                    <option value="<?php echo $datapel['kd_rumus'] ?>"> <?php echo $datapel['kd_rumus'] ?>
                    </option>
                    <?php
                    }
                    ?>
                  </select>
                  </div>
                </div>
                </div>
              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
      <table class="table table-bordered table-stripped tbl_kurikulum">
        <thead>
          <tr>
            <th class="text-center"><font color="white">NO</font></th>
            <th class="text-center"><font color="white">Matapelajaran</font></th>
            <th class="text-center"><font color="white">Aksi</font></th>
          </tr>
        </thead>
        <tbody class="cek" data-num="1">
          <tr>
            <td class="text-center num">1</td>
            <td class="text-center">
              <select class="form-control" name="id_pelajaran[]" aria-describedby="basic-addon1" required>
              <?php
              $pel = "SELECT * FROM mata_pelajaran";
              $querypel = mysqli_query($konek,$pel);
              while ($datapel = mysqli_fetch_array($querypel)) { ?>
              <option value="<?php echo $datapel['id_pelajaran'] ?>"> <?php echo $datapel['nama_pelajaran'] ?>
              </option>
              <?php
                }
                ?>
              </select>
            </td>
          <td class="text-center"><button type="button" class="btn btn-sm btn-danger btn-delete hidden"><i class="fa fa-minus"></i></button></td>
              </tr>
        </tr>
      </tbody>
         <tfoot>
          <tr>
            <td colspan="2"></td>
            <td class="text-center"><button type="button" class="btn btn-info btn-sm btn-fill btn-add"><i class="fa fa-plus"></i></button></td>
          </tr>
        </tfoot>
</table>
<div class="col-md-12 text-center">
            <button type="submit" class="btn btn-md btn-success btn-fill">Simpan <i class="fa fa-floppy-o"></i></button>
</div>
</div>
</div>

              </form>
              </div>
                </div>

<script type="text/javascript">
  $(".btn-add").on("click",function() {
      var number = parseInt($('.tbl_kurikulum tbody').attr('data-num'));
      var add_number = number + 1;
      $('.tbl_kurikulum tbody').attr('data-num', add_number);
      var html = $('.tbl_kurikulum tbody tr:eq(0)').clone();
      $('.btn-delete', html).removeClass('hidden');
      $('.num', html).html(add_number);
      $('.tbl_kurikulum tbody').append(html);
  });

 $(document).on( "click", ".btn-delete", function() {
    var number = parseInt($('.tbl_kurikulum tbody').attr('data-num'));
    var add_number = number - 1;
    $('.tbl_kurikulum tbody').attr('data-num', add_number);
    $(this).parent().parent().remove();
  });
</script>