<?php 

	if (isset($_GET['halaman'])) {
		if ($_GET['halaman'] == 'beranda') {
			require 'Home/bagian/hal_utama.php';
		}
		else if ($_GET['halaman'] == 'gejala') {
			require 'Home/bagian/pil_gejala.php';
		} 
		else if ($_GET['halaman'] == 'penyakit') {
			require 'Home/bagian/pil_penyakit.php';
		} 
		else if ($_GET['halaman'] == 'diagnosa') {
			require 'Home/bagian/hasil_diagnosis.php';
		} 
	} 
	else {
		require 'Home/bagian/hal_utama.php';
	}
	
?>