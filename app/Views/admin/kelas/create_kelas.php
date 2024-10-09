<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Form Tambah Kelas</h1>
<div class="container">
    <form action="/kelas/store_kelas" method="post">
        <div class="form-group">
            <label for="id_kelas">Id Kelas</label>
            <input type="text" class="form-control" id="id_kelas" name="id_kelas" required>
        </div>
        <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
        </div>
        <div class="form-group">
            <label for="nama_wali_kelas">Nama Wali Kelas</label>
            <input type="text" class="form-control" id="nama_wali_kelas" name="nama_wali_kelas" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?= $this->endSection() ?>