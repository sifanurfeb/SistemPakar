<?php  require '../config/koneksi.php' ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar Penyakit Seksual</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="home-style.css">

  </head>
  <body>
  <!-- navbar -->
  <div class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#">Sistem Pakar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php?halaman=beranda">Home</a>
            </li>
           <!--  <li class="nav-item">
              <a class="nav-link" href="home.php?halaman=gejala">Data Gejala</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="home.php?halaman=penyakit">Data Penyakit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Diagnosa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kesimpulan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- navbar end -->

  <?php require 'bagian/link_rute.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="../js/jquery-3.6.0.js"></script>

  <script type="text/javascript">
    // $('#tabel_diagnosis').hide();

    // $('#submit').on('click', function(event) {
    //   let select = $('#nama_penyakit').val();
    //   let penyakit = $(event.relatedTarget).data('penyakit');
    //   if (select === penyakit) {
    //     $('#tabel_diagnosis').show();
    //   }    

    // });
  </script>
  
  </body>
</html>