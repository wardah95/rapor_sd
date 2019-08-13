<?php

include "../config/koneksi.php";


$id_guru = $_POST['namab'];


$sql = mysqli_query($konek, "SELECT DISTINCT tahun_ajaran FROM kelas WHERE id_guru='".$id_guru."' ORDER BY tahun_ajaran");


$html = "<option value=''>Pilih</option>";

while($data = mysqli_fetch_array($sql)){ 
	$html .= "<option>".$data['tahun_ajaran']."</option>"; 
}

$callback = array('data_ajaran'=>$html); 

echo json_encode($callback); 
?>
