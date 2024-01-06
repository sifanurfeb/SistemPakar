<?php  
	require '../config/koneksi.php';

	$kode = $_POST['kode'];
	$penyakit = $_POST['nama_penyakit'];

	$sql = "INSERT INTO data_penyakit VALUES ('', '$kode', '$penyakit')";
	mysqli_query($koneksi, $sql);

	header('Location: ../dashboard/index.php?halaman=data_penyakit');

?>