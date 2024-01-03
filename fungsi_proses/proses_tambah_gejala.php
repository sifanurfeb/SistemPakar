<?php  
	require '../config/koneksi.php';

	$kode = $_POST['kode'];
	$penyakit = $_POST['nama_gejala'];

	$sql = "INSERT INTO data_gejala VALUES ('', '$kode', '$penyakit')";
	mysqli_query($koneksi, $sql);

	header('Location: ../index.php?halaman=data_gejala');

?>