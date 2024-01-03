<?php  
	
	if (isset($_GET['halaman'])) {
		if ($_GET['halaman'] == 'dashboard') {
			require 'halaman/dashboard.php';
		}
		else if ($_GET['halaman'] == 'data_penyakit') {
			require 'halaman/data_penyakit.php';
		} 
		else if ($_GET['halaman'] == 'data_gejala') {
			require 'halaman/data_gejala.php';
		}
	} 
	else {
		require 'halaman/dashboard.php';
	}


?>