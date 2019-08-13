<?php

include "../config/koneksi.php";

// $id_guru = $_POST['id_guru'];
$tahun_ajaran = $_POST['tahunajaran'];

$sql = mysqli_query($konek, "SELECT * FROM kelas WHERE tahun_ajaran='".$tahun_ajaran."' ORDER BY tahun_ajaran");

$html = "<option value=''>Pilih</option>";

while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$html .= "<option>".$data['kelas']."</option>"; // Tambahkan tag option ke variabel $html
    $callback = array('data_kelas'=>$html); // Masukan variabel html tadi ke dalam array $callback dengan index array : data_kota
}


echo json_encode($callback); // konversi varibael $callback menjadi JSON

?>
