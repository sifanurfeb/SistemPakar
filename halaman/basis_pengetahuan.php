<?php  
    require '../config/koneksi.php';

    $data = "SELECT * FROM data_penyakit";
    $hasil = mysqli_query($koneksi, $data);

    $row = [];
    while ($penyakit = mysqli_fetch_assoc($hasil)) {
        $row[] = $penyakit;
    }
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Basis Pengetahuan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Basis Pengetahuan</li>
    </ol>
    
    <?php foreach ($row as $data) : ?>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?= $data['kode_penyakit']; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                <?= $data['kode_penyakit']; ?> - <?= $data['nama_penyakit']; ?>
              </button>
            </h2>
            <div id="flush-collapseOne<?= $data['kode_penyakit']; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="index.php?halaman=tambah_basis&penyakit=<?= $data['nama_penyakit']; ?>
                &id_penyakit=<?= $data['id_penyakit']; ?>" class="btn btn-primary rounded-0">Tambah Rule Pertanyaan</a>
              </div>
            </div>
          </div>
        </div>   
    <?php endforeach; ?>

</div>