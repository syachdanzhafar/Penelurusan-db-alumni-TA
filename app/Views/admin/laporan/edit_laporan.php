<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Edit Laporan</h1>

            <form action="/laporan/update_laporan/<?= $laporan['id_laporan'] ?>" method="post">
                <div class="form-group">
                    <label for="id_laporan">Id Laporan</label>
                    <input type="text" class="form-control" id="id_laporan" name="id_laporan" value="<?= $laporan['id_laporan'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="tahun_kelulusan">Tahun Kelulusan</label>
                    <input type="text" class="form-control" id="tahun_kelulusan" name="tahun_kelulusan" value="<?= $laporan['tahun_kelulusan'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_alumni">Jumlah Alumni</label>
                    <input type="text" class="form-control" id="jumlah_alumni" name="jumlah_alumni" value="<?= $laporan['jumlah_alumni'] ?>" required>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>