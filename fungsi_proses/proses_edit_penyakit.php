<?php  
	require '../config/koneksi.php';

	$id = $_POST['id'];
	$kode = $_POST['kode'];
	$penyakit = $_POST['nama_penyakit'];

	$sql = "UPDATE data_penyakit SET kode_penyakit = '$kode', nama_penyakit = '$penyakit' WHERE id_penyakit = '$id'";
	mysqli_query($koneksi, $sql);

	header('Location: ../dashboard/index.php?halaman=data_penyakit');

?>