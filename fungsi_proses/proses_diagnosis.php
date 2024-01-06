<?php  
  require '../config/koneksi.php';

  // submit diagnosis
  $namaPenyakit = $_POST['jen_penyakit']; // nama penyakit
  $faktaGejala = $_POST['kode_gejala']; // gejala (kode) bentukan array

  // get data nama penyakit
  $hasil = mysqli_query($koneksi, "SELECT nama_penyakit FROM data_penyakit");

  // get data kode gejala
  $kodeGejala = mysqli_query($koneksi, "SELECT data_rule.id_rule, data_penyakit.nama_penyakit, data_gejala.id_gejala, 
  data_gejala.kode_gejala, data_gejala.gejala, data_rule.pertanyaan, data_gejala.probabilitas FROM data_rule INNER JOIN 
  data_penyakit ON data_rule.id_penyakit = data_penyakit.id_penyakit INNER JOIN data_gejala ON 
  data_rule.id_gejala = data_gejala.id_gejala WHERE nama_penyakit = '$namaPenyakit'");

  // cek isi database data hasil
  $sql = "SELECT COUNT(*) AS data FROM data_hasil";
  $result = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_assoc($result);

  if ($row['data'] > 0) {
    $reset = mysqli_query($koneksi, "TRUNCATE TABLE data_hasil");

    // perulangan nama penyakit sesai ada di DB
    for ($i = 0; $penyakit = mysqli_fetch_assoc($hasil); $i++) { 

      if ($penyakit['nama_penyakit'] == $namaPenyakit) {
        $listGejala = [];

        for ($j = 0; $kode = mysqli_fetch_array($kodeGejala); $j++) { 
          $listGejala[] = $kode['id_gejala'];

          if (isset($faktaGejala[$j]) === isset($listGejala[$j])) {
            $kondisi = 'gejala sesuai';
            $namaPenyakit;

            $insert = "INSERT INTO data_hasil VALUES ('', '$namaPenyakit', '$faktaGejala[$j]', '$kondisi')";
            $query = mysqli_query($koneksi, $insert);

            echo "<script>
              window.location.assign('../home.php?halaman=diagnosa');  
            </script>";
          } 
        }
      }
    }
  } 
  else {
    for ($i = 0; $penyakit = mysqli_fetch_assoc($hasil); $i++) { 

      if ($penyakit['nama_penyakit'] == $namaPenyakit) {
        $listGejala = [];

        for ($j = 0; $kode = mysqli_fetch_array($kodeGejala); $j++) { 
          $listGejala[] = $kode['id_gejala'];

          if (isset($faktaGejala[$j]) === isset($listGejala[$j])) {
            $kondisi = 'gejala sesuai';
            $namaPenyakit;

            $insert = "INSERT INTO data_hasil VALUES ('', '$namaPenyakit', '$faktaGejala[$j]', '$kondisi')";
            $query = mysqli_query($koneksi, $insert);

            echo "<script>
              window.location.assign('../home.php?halaman=diagnosa');  
            </script>";
          } 
        }
      }
    }
  }
  

?>