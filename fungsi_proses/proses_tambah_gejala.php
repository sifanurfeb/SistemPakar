<?php  
	require '../config/koneksi.php';

	$kode = $_POST['kode'];
	$gejala = $_POST['nama_gejala'];
	$probab = $_POST['probabilitas'];

	$sql = "INSERT INTO data_gejala VALUES ('', '$kode', '$gejala', '$probab')";
	mysqli_query($koneksi, $sql);

	header('Location: ../dashboard/index.php?halaman=data_gejala');

?>