<?php 

	if (isset($_GET['halaman'])) {
		if ($_GET['halaman'] == 'beranda') {
			require 'home/bagian/hal_utama.php';
		}
		else if ($_GET['halaman'] == 'penyakit') {
			require 'home/bagian/pil_penyakit.php';
		} 
		else if ($_GET['halaman'] == 'diagnosa') {
			require 'home/bagian/hasil_diagnosis.php';
		} 
	} 
	else {
		require 'home/bagian/hal_utama.php';
	}
	
?>