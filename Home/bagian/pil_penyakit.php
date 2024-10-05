<?php  
  $data = "SELECT * FROM data_penyakit";
  $hasil = mysqli_query($koneksi, $data);

  $row = [];
  while ($penyakit = mysqli_fetch_assoc($hasil)) {
      $row[] = $penyakit;
  }

  if (isset($_POST['penyakit'])) {
    $penyakit = $_POST['penyakit'];

    $sql = "SELECT data_rule.id_rule, data_rule.kode_rule, data_penyakit.id_penyakit, data_penyakit.kode_penyakit, data_penyakit.
    nama_penyakit, data_gejala.id_gejala, data_gejala.kode_gejala, data_gejala.gejala, data_rule.pertanyaan FROM data_rule 
    INNER JOIN data_penyakit ON data_rule.id_penyakit = data_penyakit.id_penyakit 
    INNER JOIN data_gejala ON data_rule.id_gejala = data_gejala.id_gejala 
    WHERE nama_penyakit = '$penyakit'";
    
    $tampil = mysqli_query($koneksi, $sql);
  }
  
?>

<!-- header  -->
<section class="penyakit align-items-center justify-content-center">
  <div class="container">
    <h3 class="text-center">Data Penyakit</h3>

    <!-- select pilih penyakit -->
    <form method="post">
      <label for="sick" class="mb-2 mt-4">Pilih Data Penyakit</label>
      <select class="select form-select" aria-label="Default select example" name="penyakit" id="nama_penyakit" required="required">
        <option value="" selected>-- Silahkan Pilih --</option>
        <?php foreach ($row as $penyakit) : ?>
          <option value="<?= $penyakit['nama_penyakit']; ?>">
            <?= $penyakit['kode_penyakit']; ?> - <?= $penyakit['nama_penyakit']; ?>    
          </option>
        <?php endforeach; ?>
      </select>
      <div class="submit d-flex justify-content-center">
        <button class="btn" type="submit" name="pilih">Submit</button>
      </div>
    </form>

    <!-- tabel pilihan gejala -->
    <?php if (isset($_POST['pilih'])) : ?>
      <form method="post" action="fungsi_proses/proses_diagnosis.php">
        <div class="row justify-content-center" id="tabel_diagnosis">
          <div class="col">
            <table class="table bg-transparent mt-5">
              <thead>
                <tr>
                  <th scope="col">Kode</th>
                  <th scope="col">Gejala</th>
                  <th scope="col">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while($hasil = mysqli_fetch_assoc($tampil)) {
                ?>
                  <tr>
                    <td><?= $hasil['kode_gejala']?></td>
                    <td><?= $hasil['pertanyaan']?></td>
                    <td>
                      <input type="checkbox" name="kode_gejala[]" value="<?= $hasil['id_gejala']; ?>">
                      <input type="text" value="<?= $hasil['nama_penyakit']?>" name="jen_penyakit" hidden="hidden">
                    </td>
                  </tr>
                <?php } ?> 
              </tbody>
            </table>
          </div>
        </div>
        <div class="submit d-flex justify-content-center">
          <button class="btn" type="submit">Diagnosis</button>
        </div>
      </form>
    <?php endif; ?>
  </div>
</section>