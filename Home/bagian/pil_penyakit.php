<?php  
  $data = "SELECT * FROM data_penyakit";
  $hasil = mysqli_query($koneksi, $data);

  $row = [];
  while ($penyakit = mysqli_fetch_assoc($hasil)) {
      $row[] = $penyakit;
  }

  $penyakit = $_POST['penyakit'];
  $sql = "SELECT data_rule.id_rule, data_rule.kode_rule, data_penyakit.id_penyakit, data_penyakit.kode_penyakit, data_penyakit.
  nama_penyakit, data_gejala.id_gejala, data_gejala.kode_gejala, data_gejala.gejala, data_rule.pertanyaan FROM data_rule 
  INNER JOIN data_penyakit ON data_rule.id_penyakit = data_penyakit.id_penyakit 
  INNER JOIN data_gejala ON data_rule.id_gejala = data_gejala.id_gejala 
  WHERE nama_penyakit = '$penyakit'";

  $tampil = mysqli_query($koneksi, $sql);

  // $gejala = $_POST['kode_gejala'];
  if (isset($_POST['diagnosis'])) {
    $penyakit = $_POST['jen_penyakit'];
    $gejala = $_POST['kode_gejala'];

    var_dump($gejala[0]);
    var_dump($penyakit);
    die();
  }

?>

<!-- header  -->
<section class="penyakit align-items-center justify-content-center">
  <div class="container">
    <form method="post">
      <h3 class="text-center">Data Penyakit</h3>
        <label for="sick" class="mb-2 mt-3">Data penyakit</label>
        <select class=" select form-select" aria-label="Default select example" name="penyakit" id="nama_penyakit">
          <option selected>Silahkan Pilih</option>
          <?php foreach ($row as $penyakit) : ?>
            <option value="<?= $penyakit['nama_penyakit']; ?>" data-penyakit="<?= $penyakit['nama_penyakit']; ?>"><?= $penyakit['kode_penyakit']; ?> - <?= $penyakit['nama_penyakit']; ?></option>
          <?php endforeach; ?>
        </select>
        <div class="submit d-flex justify-content-center">
          <button class="btn" type="submit" name="pilih">Submit</button>
        </div>
    </form>

    <?php if (isset($_POST['pilih'])) : ?>
      <form method="post">
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
                  while($hasil = mysqli_fetch_array($tampil)) {
                ?>
                  <tr>
                    <td><?= $hasil['kode_gejala']?></td>
                    <td><?= $hasil['gejala']?></td>
                    <td>
                      <input type="checkbox" name="kode_gejala[]" value="<?= $hasil['kode_gejala']; ?>">
                      <input type="text" value="<?= $hasil['nama_penyakit']?>" name="jen_penyakit" hidden="hidden">
                    </td>
                  </tr>
                <?php } ?> 
              </tbody>
            </table>
          </div>
        </div>
        <div class="submit d-flex justify-content-center">
          <button class="btn" type="submit" name="diagnosis">Diagnosis</button>
        </div>
      </form>
    <?php endif; ?>
    
  </div>
</section>