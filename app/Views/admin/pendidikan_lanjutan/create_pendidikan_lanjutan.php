<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Form Input Pendidikan Lanjutan</h1>
<div class="container">
    <form action="/pendidikan_lanjutan/store" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="pendidikan_lanjutan">Pendidikan Lanjutan</label>
            <input type="text" class="form-control" id="pendidikan_lanjutan" name="pendidikan_lanjutan" required>
        </div>
        <div class="form-group">
            <label for="alamat_sekolah">Alamat Sekolah</label>
            <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

<?= $this->endSection() ?>
