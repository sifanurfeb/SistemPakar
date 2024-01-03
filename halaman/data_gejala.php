<?php  
    require 'config/koneksi.php';

    $data = "SELECT * FROM data_gejala";
    $hasil = mysqli_query($koneksi, $data);

    $sql = "SELECT max(kode_gejala) as kode FROM data_gejala";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
    $kode = $data['kode'];

    $urutan = (int) substr($kode, 3, 3);
    $urutan++;

    $huruf = "G";
    $kodepenyakit = $huruf . sprintf("%03s", $urutan);
?>

<div class="container-fluid px-4">
    <h2 class="mt-3">Data Gejala</h2>
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item active">Data Gejala</li>
    </ol>
    <div class="opsi-tambah mb-3">
        <button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Gejala</button>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Gejala</th>
                        <th>Gejala</th>
                        <th>Probabilitas</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 0;  
                        while ($gejala = mysqli_fetch_assoc($hasil)) :
                        $no++;
                    ?>
                        <tr>
                            <th><?= $no; ?></th>
                            <td><?= $gejala['kode_gejala']; ?></td>
                            <td><?= $gejala['gejala']; ?></td>
                            <td><?= $gejala['probabilitas']; ?></td>
                            <td>
                                <button class="btn btn-primary rounded-0 btn-sm" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editModalGejala"
                                data-id="<?= $gejala['id_gejala']; ?>"
                                data-kode="<?= $gejala['kode_gejala']; ?>"
                                data-gejala="<?= $gejala['gejala']; ?>"
                                data-probab="<?= $gejala['probabilitas']; ?>"
                                >Edit</button>
                                <a href="fungsi_proses/proses_hapus_gejala.php?id_gejala=<?= $gejala['id_gejala']; ?>" class="btn btn-primary rounded-0 btn-sm" onclick="return confirm('Ingin menghapusnya?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile;  ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal tambah -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Gejala</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="fungsi_proses/proses_tambah_gejala.php">
              <div class="modal-body">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Gejala</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $kodepenyakit; ?>" readonly="readonly" name="kode">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gejala</label>
                    <input type="text=" class="form-control" id="exampleInputPassword1" name="nama_gejala" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nilai Probabilitas</label>
                    <input type="text=" class="form-control" id="exampleInputPassword1" name="probabilitas" required>
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
    <div class="modal fade" id="editModalGejala" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Gejala</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="fungsi_proses/proses_edit_gejala.php">
              <div class="modal-body">
                  <input type="text" class="form-control" id="id" name="id" hidden>
                  <div class="mb-3">
                    <label for="kode" class="form-label">Kode Gejala</label>
                    <input type="text" class="form-control" id="kode" readonly="readonly" name="kode">
                  </div>
                  <div class="mb-3">
                    <label for="gejala" class="form-label">Gejala</label>
                    <input type="text=" class="form-control" id="gejala" name="nama_gejala" required>
                  </div>
                  <div class="mb-3">
                    <label for="probab" class="form-label">Nilai Probabilitas</label>
                    <input type="text=" class="form-control" id="probab" name="probabilitas" required>
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