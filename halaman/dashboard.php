<?php  
    require '../config/koneksi.php';

    $dataPenyakit = mysqli_query($koneksi, "SELECT COUNT(*) AS data FROM data_penyakit");
    $dataGejala = mysqli_query($koneksi, "SELECT COUNT(*) AS data FROM data_gejala");;

    $jumlahPenyakit = mysqli_fetch_assoc($dataPenyakit);
    $jumlahGejala = mysqli_fetch_assoc($dataGejala);
?>

<div class="container-fluid px-4">
    <h2 class="mt-3">Dashboard</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <b>Data Penyakit</b>
                    <p><?= $jumlahPenyakit['data']; ?> Data</p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="index.php?halaman=data_penyakit">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <b>Data Gejala</b>
                    <p><?= $jumlahGejala['data']; ?> Data</p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="index.php?halaman=data_gejala">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>