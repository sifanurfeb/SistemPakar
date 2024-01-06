<?php  
	require '../config/koneksi.php';

	$id = $_POST['id'];
	$kode = $_POST['kode'];
	$gejala = $_POST['nama_gejala'];
	$probab = $_POST['probabilitas'];

	$sql = "UPDATE data_gejala SET kode_gejala = '$kode', gejala = '$gejala', probabilitas = '$probab' WHERE id_gejala = '$id'";
	mysqli_query($koneksi, $sql);

	header('Location: ../dashboard/index.php?halaman=data_gejala');

?>