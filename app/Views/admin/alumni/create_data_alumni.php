<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Form Tambah Data Alumni</h1>
<div class="container">
    <form action="/alumni/store" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn" required>
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tahun_masuk">Tahun Masuk</label>
            <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" required>
        </div>
        <div class="form-group">
            <label for="tahun_lulus">Tahun Lulus</label>
            <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

<?= $this->endSection() ?>