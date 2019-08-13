<?php
include "../config/koneksi.php";

$id_guru    = $_SESSION['id_guru'];
$sql 		= "SELECT * FROM user WHERE id_guru = '".$id_guru."'";
$query 		= mysqli_query($konek, $sql)or die(mysqli_error());
$data    	= mysqli_fetch_array($query);

?>

<div class="alert alert-info">
  <strong>Eksport Nilai Siswa</strong> 
</div>

<div class="row">
<form method="" action="">
  <div class="col-sm-3">
  	<div class="form-group">
  		<label for="usr">Nama Guru:</label>
  		<input type="text" class="form-control" id="namaguru" name="namaguru" value="<?php echo $data['nama']  ?>">
	</div>
  </div>

  <div class="col-sm-3">
  	<div class="form-group">
  		<label for="sel1">Tahun Ajaran:</label>
  			<select class="form-control" id="tahunajaran" name="tahunajaran">

  		<option selected hidden>--Pilih Tahun Ajaran--</option>
  		<?php
  			$tahunajaran = mysqli_query($konek,"SELECT DISTINCT tahun_ajaran FROM kelas WHERE id_guru = '".$id_guru."'");
  			while ($listtahun = mysqli_fetch_array($tahunajaran)){


  		?>
  		<option value="$listtahun['tahun_ajaran']"><?= $listtahun['tahun_ajaran'] ?></option>

  	<?php } ?>
  		</select>
  		<!--  <?php

  		 	//include "../config/koneksi.php";
  		 	//$tahunajaran = "SELECT DISTINCT tahun_ajaran FROM kelas WHERE id_guru = '".$id_guru."'";
  		 	//$query1		 = mysqli_query($konek,$tahunajaran) or die(mysqli_error($konek));
  		 	//$data1  	 = mysqli_fetch_array($query1);
  		 ?>
  		  -->
  		
	</div>		
  </div>

  <div class="col-sm-3">
  	<div class="form-group">
                  <label>Nama Kelas</label>
                  <select class="form-control" name="namakelas[]" id="namakelas" aria-describedby="basic-addon1" required>
                    <option value="">Pilih</option>
                   </select>
                   <div id="loading" style="margin-top: 15px;">
                 <img src="../images/images/loading.gif" width="18"> <small>Loading...</small>
           </div>
      </div>
  </div>

  <div class="col-sm-3">		
    <div class="form-group">
  		<label for="sel1">Pelajaran:</label>
  		<select class="form-control" id="pelajaran" name="pelajaran">
  		</select>
	</div>	
</div>

</form>
</div>

<script type="text/javascript">
	$(document).ready(function(){ 
  $("#loading").hide();
  
  $("#tahunajaran").change(function(){ 
    $("#namakelas").hide(); 
    $("#loading").show(); 
  
    $.ajax({
      type: "POST", 
      url: "optionkelas.php", 
      data: {tahunajaran : $("#tahunajaran").val()}, 
      dataType: "json",
      beforeSend: function(e) {
        if(e && e.overrideMimeType) {
          e.overrideMimeType("application/json;charset=UTF-8");
        }
      },
      success: function(response){ 
        $("#loading").hide(); 

        
        $("#namakelas").html(response.data_kelas).show();
      },
      error: function (xhr, ajaxOptions, thrownError) { 
        alert(xhr.responsetext);
        // alert(xhr.responsetext); 
      }
    });
    });
});
</script>