<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Edit Data Lengkap Alumni</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <form action="<?= base_url('detail/update/' . $dataLengkap['id_data_lengkap']) ?>" method="post">                <!-- Nama Kelas -->
                <div class="form-group row mb-2">
                    <label for="nama_kelas" class="col-sm-4 col-form-label ">Kelas Terakhir</label>
                    <div class="col-sm-8">
                        <select name="id_kelas" id="nama_kelas" class="form-control">
                            <?php foreach ($kelas as $kelasItem): ?>
                                <option value="<?= $kelasItem['id_kelas'] ?>" <?= isset($dataLengkap['id_kelas']) && $kelasItem['id_kelas'] == $dataLengkap['id_kelas'] ? 'selected' : '' ?>>
                                    <?= $kelasItem['nama_kelas'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- Nama Wali Kelas -->
                <div class="form-group row mb-2">
                    <label for="nama_wali_kelas" class="col-sm-4 col-form-label ">Nama Wali Kelas</label>
                    <div class="col-sm-8">
                        <select name="id_wali_kelas" id="nama_wali_kelas" class="form-control">
                            <?php foreach ($waliKelas as $waliKelasItem): ?>
                                <option value="<?= $waliKelasItem['id_wali_kelas'] ?>"
                                    <?= isset($dataLengkap['id_wali_kelas']) && $waliKelasItem['id_wali_kelas'] == $dataLengkap['id_wali_kelas'] ? 'selected' : '' ?>>
                                    <?= $waliKelasItem['nama_wali_kelas'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- Pendidikan Lanjutan -->
                <div class="form-group row mb-2">
                    <label for="pendidikan_lanjutan" class="col-sm-4 col-form-label">Pendidikan Lanjutan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="pendidikan_lanjutan" name="pendidikan_lanjutan"
                            value="<?= isset($dataLengkap['pendidikan_lanjutan']) ? $dataLengkap['pendidikan_lanjutan'] : '' ?>">
                    </div>
                </div>

                <!-- Agama -->
                <div class="form-group row mb-2">
                    <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="agama" name="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam" <?= isset($dataLengkap['agama']) && $dataLengkap['agama'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                            <option value="Kristen Protestan" <?= isset($dataLengkap['agama']) && $dataLengkap['agama'] == 'Kristen Protestan' ? 'selected' : '' ?>>Kristen Protestan
                            </option>
                            <option value="Katolik" <?= isset($dataLengkap['agama']) && $dataLengkap['agama'] == 'Katolik' ? 'selected' : '' ?>>Katolik</option>
                            <option value="Hindu" <?= isset($dataLengkap['agama']) && $dataLengkap['agama'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                            <option value="Buddha" <?= isset($dataLengkap['agama']) && $dataLengkap['agama'] == 'Buddha' ? 'selected' : '' ?>>Buddha</option>
                            <option value="Konghucu" <?= isset($dataLengkap['agama']) && $dataLengkap['agama'] == 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
                        </select>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="form-group row mb-2">
                    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="alamat"
                            name="alamat"><?= isset($dataLengkap['alamat']) ? $dataLengkap['alamat'] : '' ?></textarea>
                    </div>
                </div>

                <!-- Email -->
                <div class="form-group row mb-2">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email"
                            value="<?= isset($dataLengkap['email']) ? $dataLengkap['email'] : '' ?>">
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <div class="form-group row mt-4">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>