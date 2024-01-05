<?php  require '../config/koneksi.php' ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar</title>
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
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pil_gejala.php">Data Gejala</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pil_penyakit.php">Data Penyakit</a>
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
  </div>
</nav>
    <!-- navbar end -->

    <!-- header  -->
   <section class="penyakit align-items-center justify-content-center">
    <div class="container">
        <h3 class="text-center">Data Penyakit</h3>
       <form action="">
       <label for="sick" class="mb-4">Data penyakit</label>
        <select class=" select form-select" aria-label="Default select example">
            <option selected>Silahkan Pilih</option>
            <option value="1"><?php  ?></option>
            <option value="2"><?php  ?></option>
            <option value="3"><?php  ?></option>
            <option value="4"><?php  ?></option>
            <option value="5"><?php  ?></option>
</select>
       </form>
<button class="btn" type="submit">Submit</button>


    </div>
   </section>
    <!-- header  end -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> 