<?php echo $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container">
  <?php $session = session(); ?>
  <?php if ($session->getFlashdata("success")) : ?>
    <div class="alert alert-success" role="alert">

      <?= $session->getFlashdata("success"); ?>
    </div>
  <?php endif; ?>
  <div class="my-3">
    <h1> Update data</h1>
  </div>
  <form action="<?= base_url("/updateMahasiswa/update/" . $mahasiswa["id"]); ?>" method="post">
    <div class="row">
      <div class="col-6">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Inputan Nama.." value="<?= $mahasiswa["nama"]; ?>">
        </div>
        <div class="mb-3">
          <label for="npm" class="form-label">Npm</label>
          <input type="text" class="form-control" id="npm" name="npm" placeholder="Inputan Npm.." value="<?= $mahasiswa["npm"]; ?>">
        </div>
        <div class="mb-3">
          <label for="prodi" class="form-label">Prodi</label>
          <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Inputan Prodi.." value="<?= $mahasiswa["prodi"]; ?>">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="minat" class="form-label">Minat</label>
          <input type="text" class="form-control" id="minat" name="minat" placeholder="Inputan Minat.." value="<?= $mahasiswa["minat"]; ?>">
        </div>
        <div class="mb-3">
          <label for="domisili" class="form-label">Domisili</label>
          <input type="text" class="form-control" id="domisili" name="domisili" placeholder="Inputan Domisili.." value="<?= $mahasiswa["domisili"]; ?>">
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Inputan Jenis Kelamin.." value="<?= $mahasiswa["jenis_kelamin"]; ?>">
        </div>
      </div>
      <div>
        <button class="btn btn-success" type="submit">Update</button>
      </div>
    </div>
  </form>

</div>

<?= $this->endSection(); ?>