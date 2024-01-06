<?php  
	
	if (isset($_GET['halaman'])) {
		if ($_GET['halaman'] == 'dashboard') {
			require '../halaman/dashboard.php';
		}
		else if ($_GET['halaman'] == 'data_penyakit') {
			require '../halaman/data_penyakit.php';
		} 
		else if ($_GET['halaman'] == 'data_gejala') {
			require '../halaman/data_gejala.php';
		} 
		else if ($_GET['halaman'] == 'pengetahuan') {
			require '../halaman/basis_pengetahuan.php';
		}
		else if ($_GET['halaman'] == 'tambah_basis') {
			require '../halaman/tambah_basis_pengetahuan.php';
		}
	} 
	else {
		require '../halaman/dashboard.php';
	}


?>