<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mb-4">Edit Data Alumni</h1>

            <form action="/alumni/update/<?= $alumni['id'] ?>" method="post">
                <div class="form-group row">
                    <label for="id" class="col-sm-4 col-form-label">Id Alumni</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $alumni['id'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $alumni['nama'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $alumni['nisn'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $alumni['tgl_lahir'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="Laki-laki" <?= $alumni['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                            <option value="Perempuan" <?= $alumni['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tahun_masuk" class="col-sm-4 col-form-label">Tahun Masuk</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" value="<?= $alumni['tahun_masuk'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tahun_lulus" class="col-sm-4 col-form-label">Tahun Lulus</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="<?= $alumni['tahun_lulus'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8 offset-sm-4">
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
