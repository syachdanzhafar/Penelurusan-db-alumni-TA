<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Edit Data Kelas</h1>

            <form action="/kelas/update_kelas/<?= $kelas['id_kelas'] ?>" method="post">
                <div class="form-group">
                    <label for="id_kelas">ID Kelas</label>
                    <input type="text" class="form-control" id="id_kelas" name="id_kelas" value="<?= $kelas['id_kelas'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_kelas">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama_wali_kelas">Nama Wali Kelas</label>
                    <input type="text" class="form-control" id="nama_wali_kelas" name="nama_wali_kelas" value="<?= $kelas['nama_wali_kelas'] ?>" required>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>