<?php  
	require '../config/koneksi.php';

	$id = $_GET['id_penyakit'];

	$sql = "DELETE FROM data_penyakit WHERE id_penyakit = '$id'";
	$query = mysqli_query($koneksi, $sql);

	header('Location: ../dashboard/index.php?halaman=data_penyakit');

?>