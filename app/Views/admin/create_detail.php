<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Form Tambah Data Lengkap Alumni</h1>
<div class="container">
    <form action="/detail/store" method="post">
        <?= csrf_field() ?>
        <div class="row">
            <div class="col-md-6">
                <!-- Kolom kiri -->
                <div class="form-group">
                    <label for="id">ID Alumni</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?= isset($id) ? $id : '' ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_kelas">ID Kelas</label>
                    <select class="form-control" id="id_kelas" name="id_kelas" required>
                        <option value="">Pilih Kelas</option>
                        <?php foreach ($kelas as $k) : ?>
                            <option value="<?= $k['id_kelas'] ?>" data-nama_kelas="<?= $k['nama_kelas'] ?>"><?= $k['id_kelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_kelas">Kelas Terakhir</label>
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" readonly>
                </div>
                <div class="form-group">
                    <label for="id_wali_kelas">ID Wali Kelas</label>
                    <select class="form-control" id="id_wali_kelas" name="id_wali_kelas" required>
                        <option value="">Pilih Wali Kelas</option>
                        <?php foreach ($waliKelas as $w) : ?>
                            <option value="<?= $w['id_wali_kelas'] ?>" data-nama_wali_kelas="<?= $w['nama_wali_kelas'] ?>"><?= $w['id_wali_kelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_wali_kelas">Nama Wali Kelas</label>
                    <input type="text" class="form-control" id="nama_wali_kelas" name="nama_wali_kelas" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Kolom kanan -->
                <div class="form-group">
                    <label for="id_pendidikan_lanjutan">ID Pendidikan Lanjutan</label>
                    <input type="text" class="form-control" id="id_pendidikan_lanjutan" name="id_pendidikan_lanjutan" value="<?= isset($id_pendidikan_lanjutan) ? $id_pendidikan_lanjutan : '' ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="pendidikan_lanjutan">Pendidikan Lanjutan</label>
                    <input type="text" class="form-control" id="pendidikan_lanjutan" name="pendidikan_lanjutan" value="<?= isset($pendidikan_lanjutan) ? $pendidikan_lanjutan : '' ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <select class="form-control" id="agama" name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#id_kelas').change(function() {
            var selectedOption = $(this).find('option:selected');
            $('#nama_kelas').val(selectedOption.data('nama_kelas'));
        });

        $('#id_wali_kelas').change(function() {
            var selectedOption = $(this).find('option:selected');
            $('#nama_wali_kelas').val(selectedOption.data('nama_wali_kelas'));
        });
    });
</script>

<?= $this->endSection() ?>