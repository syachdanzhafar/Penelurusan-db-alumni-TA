<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Form Tambah Laporan</h1>
<div class="container">
    <form action="/laporan/store_laporan" method="post">
        <div class="form-group">
            <label for="id_laporan">Id Laporan</label>
            <input type="text" class="form-control" id="id_laporan" name="id_laporan" required>
        </div>
        <div class="form-group">
            <label for="tahun_kelulusan">Tahun Kelulusan</label>
            <input type="text" class="form-control" id="tahun_kelulusan" name="tahun_kelulusan" required>
        </div>
        <div class="form-group">
            <label for="jumlah_alumni">Jumlah Alumni</label>
            <input type="text" class="form-control" id="jumlah_alumni" name="jumlah_alumni" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?= $this->endSection() ?>