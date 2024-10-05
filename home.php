<?php 
  require 'config/koneksi.php';

  if (@$_GET['halaman'] == 'beranda') {
    $activ1 = 'active';
    $activ2 = '';
    $activ3 = '';
    $activ4 = '';
  } else if (@$_GET['halaman'] == 'penyakit') {
    $activ1 = '';
    $activ2 = 'active';
    $activ3 = '';
    $activ4 = '';
  } else if (@$_GET['halaman'] == 'diagnosa') {
    $activ1 = '';
    $activ2 = '';
    $activ3 = 'active';
    $activ4 = '';
  } else {
    $activ1 = 'active';
    $activ2 = '';
    $activ3 = '';
    $activ4 = '';
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar Penyakit Seksual</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="home/home-style.css">

  </head>
  <body class="background">
    <!-- navbar -->
    <div class="fixed-top">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand text-uppercase" href="home.php?halaman=beranda">SP Penyakit Seksual</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link <?= $activ1; ?>" aria-current="page" href="home.php?halaman=beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $activ2; ?>" href="home.php?halaman=penyakit">Data Penyakit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $activ3; ?>" href="home.php?halaman=diagnosa">Diagnosa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $activ4; ?>" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- navbar end -->

    <?php require 'home/bagian/link_rute.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.6.0.js"></script>
  
  </body>
</html>