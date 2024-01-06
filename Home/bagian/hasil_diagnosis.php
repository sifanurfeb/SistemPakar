<?php  
  // get data hasil
  $data = "SELECT data_hasil.id_hasil, data_hasil.penyakit, data_gejala.id_gejala, data_gejala.kode_gejala, 
  data_gejala.gejala, data_hasil.kondisi, data_gejala.probabilitas FROM data_hasil INNER JOIN data_gejala ON 
  data_hasil.id_gejala = data_gejala.id_gejala";
  $hasil = mysqli_query($koneksi, $data);

  // get jumlah probabilitas
  $data2 = "SELECT data_hasil.id_hasil, data_hasil.penyakit, data_gejala.id_gejala, data_gejala.kode_gejala, data_gejala.gejala,
  data_hasil.kondisi, data_gejala.probabilitas, SUM(probabilitas) AS total FROM data_hasil INNER JOIN data_gejala ON data_hasil.
  id_gejala = data_gejala.id_gejala";
  $total = mysqli_query($koneksi, $data2);

  $probab = [];
  while ($resTotal = mysqli_fetch_assoc($total)) {
      $probab[] = $resTotal;
  }

  // mengulang kembali
  if (isset($_POST['mulai_lagi'])) {
    $sqlReset = "TRUNCATE TABLE data_hasil";
    $reset = mysqli_query($koneksi, $sqlReset);

    echo "<script>
      window.location.assign('home.php?halaman=beranda');  
    </script>";
  }

  // cek isi database data hasil
  $sql = "SELECT COUNT(*) AS data FROM data_hasil";
  $result = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_assoc($result);

?>

<section class="penyakit align-items-center justify-content-center">
  <div class="container">

    <?php  
      if ($row['data'] > 0) {
    ?>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hasil Diagnosis</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Berdasarkan penyakit atau goal yang anda pilih terdapat beberapa gejala yang ada pada penyakit tersebut, yaitu sebagai berikut :</h6>
              <table class="table mb-4">
                <thead>
                  <tr>
                    <th scope="col">Gejala</th>
                    <th scope="col">Kode Gejala</th>
                    <th scope="col">Status Gejala</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($diag = mysqli_fetch_assoc($hasil)) : 
                  ?>
                    <tr>
                      <td><?= $diag['gejala']; ?></td>
                      <td><?= $diag['kode_gejala']; ?></td>
                      <td><?= $diag['kondisi']; ?></td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>

              <p class="text-body-secondary">Dari hasil beberapa gejala yang ada, kemungkinan atau kesesuaian pada penyakit tersebut adalah sekitar <b><?= $probab[0]['total']; ?>%</b></p>

              <form method="post">
                <div class="d-flex justify-content-center mt-4 mb-3">
                  <button type="submit" class="btn mt-3" name="mulai_lagi">Mulai Kembali</button>  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    <?php 
      } 
      else {
    ?>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Belum ada data hasil diagnosa</h6>
            </div>
          </div>
        </div>
      </div>
    
    <?php } ?>

</section>  