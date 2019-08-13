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
        <h4 class="title">FORM MATAPELAJARAN</h4><br>
        <div>
        <form action="../config/proses_tambah_pelajaran.php" class="form-horizontal" method="POST">
          <table class="table table-bordered table-stripped tbl_pelajaran">
            <thead>
              <tr>
                <th class="text-center"><font color="white">NO</font></th>
                <th class="text-center"><font color="white">Matapelajaran</font></th>
                <th class="text-center"><font color="white">Jenis</font></th>
                <th class="text-center"><font color="white">Aksi</font></th>
              </tr>
            </thead>
            <tbody class="cek" data-num="1">
              <tr>
                <td class="text-center num">1</td>
                <td class="text-center"><input type="text" placeholder="Nama Matapelajaran" name="nama_pelajaran[]"></td>
                <td class="text-center">
                  <select name="jenis[]" required>
                    <option>Muatan Lokal</option>
                    <option>Muatan Pelajaran</option>
                  </select>
                </td class="text-center">
                <td class="text-center"><button type="button" class="btn btn-sm btn-danger btn-delete hidden"><i class="fa fa-minus"></i></button></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="3"></td>
                <td class="text-center"><button type="button" class="btn btn-info btn-sm btn-fill btn-add"><i class="fa fa-plus"></i></button></td>
              </tr>
            </tfoot>
          </table>
          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-md btn-success btn-fill">Simpan <i class="fa fa-floppy-o"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>

<script type="text/javascript">
  $(".btn-add").on("click",function() {
      var number = parseInt($('.tbl_pelajaran tbody').attr('data-num'));
      var add_number = number + 1;
      $('.tbl_pelajaran tbody').attr('data-num', add_number);
      var html = $('.tbl_pelajaran tbody tr:eq(0)').clone();
      $('.btn-delete', html).removeClass('hidden');
      $('.num', html).html(add_number);
      $('.tbl_pelajaran tbody').append(html);
  });

 $(document).on( "click", ".btn-delete", function() {
    var number = parseInt($('.tbl_pelajaran tbody').attr('data-num'));
    var add_number = number - 1;
    $('.tbl_pelajaran tbody').attr('data-num', add_number);
    $(this).parent().parent().remove();
  });
</script>