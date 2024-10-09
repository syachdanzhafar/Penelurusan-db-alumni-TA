<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Form Tambah Wali Kelas</h1>
<div class="container">
    <form action="/wali_kelas/store_wali_kelas" method="post">
        <div class="form-group">
            <label for="id_wali_kelas">Id Wali Kelas</label>
            <input type="text" class="form-control" id="id_wali_kelas" name="id_wali_kelas" required>
        </div>
        <div class="form-group">
            <label for="nama_wali_kelas">Nama Wali Kelas</label>
            <input type="text" class="form-control" id="nama_wali_kelas" name="nama_wali_kelas" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?= $this->endSection() ?>