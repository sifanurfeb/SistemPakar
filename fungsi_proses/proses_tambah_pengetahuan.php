<?php  
	require '../config/koneksi.php';

	$penyakit = $_POST['penyakit'];
	$kode = $_POST['kode'];
	$gejala = $_POST['gejala'];
	$pertanyaan = $_POST['pertanyaan'];
	
	$sql = "INSERT INTO data_rule VALUES ('', '$kode', '$penyakit', '$gejala', '$pertanyaan')";
	mysqli_query($koneksi, $sql);

	header('Location: ../index.php?halaman=pengetahuan');

?>