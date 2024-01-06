<?php  
	require '../config/koneksi.php';

	$id = $_POST['id'];
	$kode = $_POST['kode'];
	$penyakit = $_POST['penyakit'];
	$gejala = $_POST['gejala'];
	$pertanyaan = $_POST['pertanyaan'];

	$sql = "UPDATE data_rule SET kode_rule = '$kode', id_penyakit = '$penyakit', id_gejala = '$gejala', 
	pertanyaan = '$pertanyaan' WHERE id_rule = '$id'";
	
	mysqli_query($koneksi, $sql);

	header('Location: ../dashboard/index.php?halaman=pengetahuan');

?>