<!-- header  -->
<section class="gejala align-items-center justify-content-center">
  <div class="container">
    <h3 class="text-center">Data Gejala</h3>
    <form action="">
    <!-- ini pake select options -->
     
    <!-- <label for="sick" class="mb-4">Data penyakit</label>
    <select class=" select form-select" aria-label="Default select example">
        <option selected>Silahkan Pilih</option>
        <option value="1"><?php  ?></option>
        <option value="2"><?php  ?></option>
        <option value="3"><?php  ?></option>
        <option value="4"><?php  ?></option>
        <option value="5"><?php  ?></option>
    </select> -->
    <!-- ini pake check box -->

    <!-- ini bisa tp jadi  -->
    <?php
      $tampil = mysqli_query($koneksi, "SELECT * FROM data_gejala");
      while($hasil = mysqli_fetch_array($tampil)){
    ?>
      <label class="check">
        <input type="checkbox" name="kode_gejala[] " value="<?=$hasil['id_gejala'];  ?>">
        <?= $hasil['kode_gejala']?>
        <?= $hasil['gejala']?>
      </label>
    <?php } ?>  
    </form>

    <button class="btn" type="submit">Submit</button>
    <a href="pil_penyakit.php" class="btn">Isi Pilihan Penyakit</a>
  </div>
</section>
   