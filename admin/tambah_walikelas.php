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
            <h4 class="title">FORM WALIKELAS</h4>
            <div>
            <div class="content">
              <form action="../config/proses_tambah_wali.php" method="POST" >
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                  <label>WALIKELAS</label>
                  <select class="form-control" name="namab" id="namab" aria-describedby="basic-addon1" required>   
                    <option>-- Pilih Option --</option>
                    <?php
                    $sql = mysqli_query($konek, "SELECT DISTINCT a.id_guru , b.id_guru, b.namab FROM kelas a LEFT JOIN guru b ON a.id_guru= b.id_guru ORDER BY namab");
                     while($data = mysqli_fetch_array($sql))
                     { 
                         echo "<option value='".$data['id_guru']."'>".$data['namab']."</option>";
                      }
                      ?>
                  </option>
                  </select> 
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                  <label>Tahun Ajaran</label>
                  <select class="form-control" name="tahun_ajaran[]" id="tahun_ajaran" aria-describedby="basic-addon1" required>
                    <option value=""> -- Pilih Option --</option>
                   </select>
                   <div id="loading" style="margin-top: 15px;">
                    <img src="../images/images/loading.gif" width="18"> <small>Loading...</small>
                  </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                  <label>NAMA KELAS</label>
                  <select class="form-control" name="nama_kelas" id="nama_kelas" aria-describedby="basic-addon1" required>
                    <option value="">Pilih</option>
                  </select>
<!--                   <div id="loading" style="margin-top: 15px;">
                    <img src="../images/images/loading.gif" width="18"> <small>Loading...</small>
                  </div> -->
                </div>
                   

                </div>
              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
      <table class="table table-bordered table-stripped tbl_kurikulum">
        <thead>
          <tr>
            <th class="text-center"><font color="white">NO</font></th>
            <th class="text-center"><font color="white">Nama Siswa</font></th>
            <th class="text-center"><font color="white">Aksi</font></th>
          </tr>
        </thead>
        <tbody class="cek" data-num="1">
          <tr>
            <td class="text-center num">1</td>
            <td class="text-center">
              <select class="form-control" name="id_siswa[]" aria-describedby="basic-addon1" required>
              <?php
              $pel = "SELECT * FROM siswa";
              $querypel = mysqli_query($konek,$pel);
              while ($datapel = mysqli_fetch_array($querypel)) { ?>
              <option value="<?php echo $datapel['id_siswa'] ?>"> <?php echo $datapel['nama'] ?>
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


<script>
  $(document).ready(function(){ 
  // $("#loading").hide();
  
  $("#namab").change(function(){ 
    $("#tahun_ajaran").hide(); 
    // $("#loading").show(); 
  
    $.ajax({
      type: "POST", 
      url: "optiontahunajaran.php", 
      data: {namab : $("#namab").val()}, 
      dataType: "json",
      beforeSend: function(e) {
        if(e && e.overrideMimeType) {
          e.overrideMimeType("application/json;charset=UTF-8");
        }
      },
      success: function(response){ 
        // $("#loading").hide(); 

        
        $("#tahun_ajaran").html(response.data_ajaran).show();
      },
      error: function (xhr, ajaxOptions, thrownError) { 
        alert(thrownError.responsetext);
        // alert(xhr.responsetext); 
      }
    });
    });
});

</script>

<script>
  $(document).ready(function(){ 
  $("#loading").hide();
  
  $("#namab").change(function(){ 
    $("#nama_kelas").hide(); 
    $("#loading").show(); 
  
    $.ajax({
      type: "POST", 
      url: "optionkelas.php", 
      data: {namab : $("#namab").val()}, 
      dataType: "json",
      beforeSend: function(e) {
        if(e && e.overrideMimeType) {
          e.overrideMimeType("application/json;charset=UTF-8");
        }
      },
      success: function(response){ 
        $("#loading").hide(); 

        
        $("#nama_kelas").html(response.data_kelas).show();
      },
      error: function (xhr, ajaxOptions, thrownError) { 
        alert(thrownError.responsetext);
        // alert(xhr.responsetext); 
      }
    });
    });
});
</script>