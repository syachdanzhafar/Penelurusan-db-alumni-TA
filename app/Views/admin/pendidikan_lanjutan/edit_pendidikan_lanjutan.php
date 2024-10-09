<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4 text-center">Edit Data Pendidikan Lanjutan</h1>

            <form action="/pendidikan_lanjutan/update_pendidikan_lanjutan/<?= $pendidikan_lanjutan['id_pendidikan_lanjutan']; ?>" method="post">
                <div class="form-group">
                    <label for="id_pendidikan_lanjutan">ID Pendidikan Lanjutan</label>
                    <input type="text" class="form-control" id="id_pendidikan_lanjutan" name="id_pendidikan_lanjutan" value="<?= $pendidikan_lanjutan['id_pendidikan_lanjutan']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="pendidikan_lanjutan">Pendidikan Lanjutan</label>
                    <input type="text" class="form-control" id="pendidikan_lanjutan" name="pendidikan_lanjutan" value="<?= $pendidikan_lanjutan['pendidikan_lanjutan']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat_sekolah">Alamat Sekolah</label>
                    <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" value="<?= $pendidikan_lanjutan['alamat_sekolah']; ?>" required>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>