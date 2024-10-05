<?php  
  if (@$_GET['halaman'] == 'dashboard') {
    $activ1 = 'active';
    $activ2 = '';
    $activ3 = '';
    $activ4 = '';
  } else if (@$_GET['halaman'] == 'data_penyakit') {
    $activ1 = '';
    $activ2 = 'active';
    $activ3 = '';
    $activ4 = '';
  } else if (@$_GET['halaman'] == 'data_gejala') {
    $activ1 = '';
    $activ2 = '';
    $activ3 = 'active';
    $activ4 = '';
  } else if (@$_GET['halaman'] == 'pengetahuan') {
    $activ1 = '';
    $activ2 = '';
    $activ3 = '';
    $activ4 = 'active';
  } else {
    $activ1 = 'active';
    $activ2 = '';
    $activ3 = '';
    $activ4 = '';
  }
?>

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link <?= $activ1; ?>" href="index.php?halaman=dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link <?= $activ2; ?>" href="index.php?halaman=data_penyakit">
                    <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                    Data Penyakit
                </a>
                <a class="nav-link <?= $activ3; ?>" href="index.php?halaman=data_gejala">
                    <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                    Data Gejala
                </a>
                <a class="nav-link <?= $activ4; ?>" href="index.php?halaman=pengetahuan">
                    <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                    Basis Pengetahuan
                </a>
            </div>
        </div>
    </nav>
</div>