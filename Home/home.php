<?php  require 'config/koneksi.php' ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="home-style.css">

  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Sistem Pakar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pil_penyakit.php">Data Penyakit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pil_gejala.php">Data Gejala</a>
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
    <!-- navbar end -->

    <!-- header  -->
    <section class="first align-items-center justify-content-center">
        <div class="container">
            <h1 class="display-1">Sistem Pakar</h1>
              <h6 class="mb-3">Sistem pakar (expert system) adalah sistem yang berusaha mengapdosi pengetahuan manusia ke komputer, agar komputer dapat menyelesaikan masalah seperti yang biasa dilakukan oleh para ahli. Sistem pakar yang baik dirancang agar dapat menyelesaikan suatu permasalahan tertentu dengan meniru kerja dari para ahli.</h6>
              <h6 class="">
              Infeksi menular seksual atau penyakit menular seksual adalah infeksi yang menular melalui hubungan intim. Penyakit ini umumnya ditandai dengan ruam atau lepuh, keputihan, dan nyeri di area kelamin. Ada banyak jenis penyakit menular seksual, di antaranya Penyakit Menular Seksual Jenis Hepatitis B, Genital Wans, Klamidia, Gonore, Sifilis, Herpes Genital.
              </h6>
            </div>
        </div>
    </section>
    <!-- header  end -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>