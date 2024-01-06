<?php  
	require '../config/koneksi.php';

	$id = $_GET['id_rule'];

	$sql = "DELETE FROM data_rule WHERE id_rule = '$id'";
	$query = mysqli_query($koneksi, $sql);

	header('Location: ../dashboard/index.php?halaman=pengetahuan');

?>