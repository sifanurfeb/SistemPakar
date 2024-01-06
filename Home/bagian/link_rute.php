<?php 

	if (isset($_GET['halaman'])) {
		if ($_GET['halaman'] == 'beranda') {
			require 'bagian/hal_utama.php';
		}
		else if ($_GET['halaman'] == 'gejala') {
			require 'bagian/pil_gejala.php';
		} 
		else if ($_GET['halaman'] == 'penyakit') {
			require 'bagian/pil_penyakit.php';
		} 
		else if ($_GET['halaman'] == 'diagnosa') {
			require 'bagian/hasil_diagnosis.php';
		} 
	} 
	else {
		require 'bagian/hal_utama.php';
	}
	
?>