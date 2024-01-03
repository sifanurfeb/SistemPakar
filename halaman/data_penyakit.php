<?php  
    require 'config/koneksi.php';

    $data = "SELECT * FROM data_penyakit";
    $hasil = mysqli_query($koneksi, $data);

    $sql = "SELECT max(kode_penyakit) as kode FROM data_penyakit";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
    $kode = $data['kode'];

    $urutan = (int) substr($kode, 2, 2);
    $urutan++;

    $huruf = "P";
    $kodepenyakit = $huruf . sprintf("%02s", $urutan);
?>

<div class="container-fluid px-4">
    <h2 class="mt-3">Data Penyakit</h2>
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item active">Data Penyakit</li>
    </ol>
    <div class="opsi-tambah mb-3">
        <button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Penyakit</button>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Penyakit</th>
                        <th>Nama Penyakit</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 0;  
                        while ($penyakit = mysqli_fetch_assoc($hasil)) :
                        $no++;
                    ?>
                        <tr>
                            <th><?= $no; ?></th>
                            <td><?= $penyakit['kode_penyakit']; ?></td>
                            <td><?= $penyakit['nama_penyakit']; ?></td>
                            <td>
                                <button class="btn btn-primary rounded-0 btn-sm" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editModalPenyakit"
                                data-id="<?= $penyakit['id_penyakit']; ?>"
                                data-kode="<?= $penyakit['kode_penyakit']; ?>"
                                data-penyakit="<?= $penyakit['nama_penyakit']; ?>">Edit</button>
                                <a href="fungsi_proses/proses_hapus_penyakit.php?id_penyakit=<?= $penyakit['id_penyakit']; ?>" class="btn btn-primary rounded-0 btn-sm" onclick="return confirm('Ingin menghapusnya?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile;  ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Penyakit</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="fungsi_proses/proses_tambah_penyakit.php">
              <div class="modal-body">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Penyakit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="kode" value="<?= $kodepenyakit; ?>" readonly="readonly">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Penyakit</label>
                    <input type="text=" class="form-control" id="exampleInputPassword1" name="nama_penyakit" required>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
        </div>
      </div>
    </div>

    <!-- Modal edit -->
    <div class="modal fade" id="editModalPenyakit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Penyakit</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="fungsi_proses/proses_edit_penyakit.php">
              <div class="modal-body">
                  <input type="text" class="form-control" id="id" name="id" hidden>
                  <div class="mb-3">
                    <label for="kode" class="form-label">Kode Penyakit</label>
                    <input type="text" class="form-control" id="kode" name="kode" readonly="readonly">
                  </div>
                  <div class="mb-3">
                    <label for="penyakit" class="form-label">Nama Penyakit</label>
                    <input type="text=" class="form-control" id="penyakit" name="nama_penyakit" required>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
        </div>
      </div>
    </div>

</div>