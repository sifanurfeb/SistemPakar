<?php  
    require 'config/koneksi.php';

    $jenispenyakit = $_GET['penyakit'];
    $idpenyakit = $_GET['id_penyakit'];

    $data = "SELECT * FROM data_gejala";
    $hasil = mysqli_query($koneksi, $data);
    $row = [];
    while ($gejala = mysqli_fetch_assoc($hasil)) {
        $row[] = $gejala;
    }

    $data2 = "SELECT data_rule.id_rule, data_rule.kode_rule, data_penyakit.id_penyakit, data_penyakit.kode_penyakit, 
    data_penyakit.nama_penyakit, data_gejala.id_gejala, data_gejala.kode_gejala, data_gejala.gejala, data_rule.pertanyaan FROM 
    data_rule INNER JOIN data_penyakit ON data_rule.id_penyakit = data_penyakit.id_penyakit INNER JOIN data_gejala ON data_rule.
    id_gejala = data_gejala.id_gejala WHERE data_rule.id_penyakit = '$idpenyakit'";
    $hasil2 = mysqli_query($koneksi, $data2);

    $row2 = [];
    while ($penyakit = mysqli_fetch_assoc($hasil2)) {
        $row2[] = $penyakit;
    }

    $sql = "SELECT max(kode_rule) as kode FROM data_rule";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
    $kode = $data['kode'];

    $urutan = (int) substr($kode, 3, 3);
    $urutan++;

    $huruf = "R";
    $koderule = $huruf . sprintf("%03s", $urutan);
?>

<div class="container-fluid px-4">
    <h3 class="mt-3">Tambah Basis Pengetahuan <?= $jenispenyakit; ?></h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Tambah Basis Pengetahuan <?= $jenispenyakit; ?></li>
    </ol>
    <div class="opsi mb-3">
        <a href="index.php?halaman=pengetahuan" class="btn btn-primary rounded-0">Kembali</a>
        <button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#tambahBasis">Tambah Basis</button>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th nowrap="nowrap">No</th>
                        <th nowrap="nowrap">Kode Gejala</th>
                        <th nowrap="nowrap">Gejala</th>
                        <th nowrap="nowrap">Pertanyaan</th>
                        <th nowrap="nowrap">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 0;
                        foreach ($row2 as $data) :
                        $no++; 
                    ?>
                        <tr>
                            <th><?= $no; ?></th>
                            <th><?= $data['kode_gejala']; ?></th>
                            <td><?= $data['gejala']; ?></td>
                            <td><?= $data['pertanyaan']; ?></td>
                            <td nowrap="nowrap">
                                <button type="button" class="btn btn-primary btn-sm rounded-0" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editBasis"
                                data-id="<?= $data['id_rule']; ?>"
                                data-kode="<?= $data['kode_rule']; ?>"
                                data-penyakit="<?= $data['id_penyakit']; ?>"
                                data-gejala="<?= $data['id_gejala']; ?>"
                                data-pertanyaan="<?= $data['pertanyaan']; ?>"
                                >Edit</button>
                                <a href="fungsi_proses/proses_hapus_pengetahuan.php?id_rule=<?= $data['id_rule']; ?>" class="btn btn-primary rounded-0 btn-sm" onclick="return confirm('Ingin menghapusnya?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal tambah -->
    <div class="modal fade" id="tambahBasis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Basis Pengetahuan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="fungsi_proses/proses_tambah_pengetahuan.php">
              <div class="modal-body">
                  <input type="text" class="form-control" name="penyakit" value="<?= $idpenyakit; ?>" hidden>
                  <div class="mb-3" hidden="hidden">
                    <label for="exampleInputEmail1" class="form-label">Kode Rule</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" readonly="readonly" name="kode" value="<?= $koderule; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gejala</label>
                    <select class="form-select" aria-label="Default select example" name="gejala" required>
                      <option selected value="">-- Pilih Gejala --</option>
                      <?php foreach ($row as $data) : ?>
                        <option value="<?= $data['id_gejala']; ?>"><?= $data['kode_gejala']; ?> - <?= $data['gejala']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Pertanyaan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pertanyaan" required></textarea>
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
    <div class="modal fade" id="editBasis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Basis Pengetahuan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="fungsi_proses/proses_edit_pengetahuan.php">
              <div class="modal-body">
                  <input type="text" class="form-control" name="id" id="id" hidden>
                  <input type="text" class="form-control" name="penyakit" id="penyakit" hidden>
                  <div class="mb-3" hidden="hidden">
                    <label for="kode" class="form-label">Kode Rule</label>
                    <input type="text" class="form-control" id="kode" readonly="readonly" name="kode">
                  </div>
                  <div class="mb-3">
                    <label for="gejala" class="form-label">Gejala</label>
                    <select class="form-select" aria-label="Default select example" name="gejala" id="gejala" required>
                      <?php foreach ($row as $data) : ?>
                        <option value="<?= $data['id_gejala']; ?>"><?= $data['kode_gejala']; ?> - <?= $data['gejala']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                    <textarea class="form-control" id="pertanyaan" rows="3" name="pertanyaan" required></textarea>
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