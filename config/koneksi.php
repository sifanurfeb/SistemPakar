<?php 

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'sistempakar_seksual_bc';

	$koneksi = mysqli_connect($host, $username, $password, $database);

	if (!$koneksi) {
		die('koneksi gagal ' . mysqli_connect_error());
	}

?>