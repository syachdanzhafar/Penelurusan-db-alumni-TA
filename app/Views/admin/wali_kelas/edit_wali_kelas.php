<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Edit Data Wali Kelas</h1>

            <form action="/wali_kelas/update_wali_kelas/<?= $wali_kelas['id_wali_kelas'] ?>" method="post">
                <div class="form-group">
                    <label for="id_wali_kelas">ID Wali Kelas</label>
                    <input type="text" class="form-control" id="id_wali_kelas" name="id_wali_kelas" value="<?= $wali_kelas['id_wali_kelas'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_wali_kelas">Nama Wali Kelas</label>
                    <input type="text" class="form-control" id="nama_wali_kelas" name="nama_wali_kelas" value="<?= $wali_kelas['nama_wali_kelas'] ?>" required>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>