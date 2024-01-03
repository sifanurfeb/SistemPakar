<?php  
	require '../config/koneksi.php';

	$id = $_GET['id_gejala'];

	$sql = "DELETE FROM data_gejala WHERE id_gejala = '$id'";
	$query = mysqli_query($koneksi, $sql);

	header('Location: ../index.php?halaman=data_gejala');

?>