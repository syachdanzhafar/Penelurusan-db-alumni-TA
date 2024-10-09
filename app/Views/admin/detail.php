<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Detail Data Alumni</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="card-title mb-0">Data Alumni</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Id Alumni</strong></div>
                        <div class="col-sm-8"><?= isset($alumni['id']) ? ': ' . $alumni['id'] : 'Data tidak tersedia' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Nama</strong></div>
                        <div class="col-sm-8"><?= isset($alumni['nama']) ? ': ' . $alumni['nama'] : 'Data tidak tersedia' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>NISN</strong></div>
                        <div class="col-sm-8"><?= isset($alumni['nisn']) ? ': ' . $alumni['nisn'] : 'Data tidak tersedia' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Tanggal Lahir</strong></div>
                        <div class="col-sm-8"><?= isset($alumni['tgl_lahir']) ? ': ' . $alumni['tgl_lahir'] : 'Data tidak tersedia' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Jenis Kelamin</strong></div>
                        <div class="col-sm-8"><?= isset($alumni['jenis_kelamin']) ? ': ' . $alumni['jenis_kelamin'] : 'Data tidak tersedia' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Tahun Masuk</strong></div>
                        <div class="col-sm-8"><?= isset($alumni['tahun_masuk']) ? ': ' . $alumni['tahun_masuk'] : 'Data tidak tersedia' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Tahun Lulus</strong></div>
                        <div class="col-sm-8"><?= isset($alumni['tahun_lulus']) ? ': ' . $alumni['tahun_lulus'] : 'Data tidak tersedia' ?></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- data lengkap -->
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="card-title mb-0">Data Lengkap</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Agama</strong></div>
                        <div class="col-sm-8"><?= isset($dataLengkap['agama']) ? ': ' . $dataLengkap['agama'] : 'Data tidak tersedia' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Alamat</strong></div>
                        <div class="col-sm-8"><?= isset($dataLengkap['alamat']) ? ': ' . $dataLengkap['alamat'] : 'Data tidak tersedia' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Email</strong></div>
                        <div class="col-sm-8"><?= isset($dataLengkap['email']) ? ': ' . $dataLengkap['email'] : 'Data tidak tersedia' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Kelas Terakhir</strong></div>
                        <div class="col-sm-8"><?= isset($dataLengkap['nama_kelas']) ? ': ' . $dataLengkap['nama_kelas'] : 'Data tidak tersedia' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Nama Wali Kelas</strong></div>
                        <div class="col-sm-8"><?= isset($dataLengkap['nama_wali_kelas']) ? ': ' . $dataLengkap['nama_wali_kelas'] : 'Data tidak tersedia' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4"><strong>Pendidikan Lanjutan</strong></div>
                        <div class="col-sm-8"><?= isset($dataLengkap['pendidikan_lanjutan']) ? ': ' . $dataLengkap['pendidikan_lanjutan'] : 'Data tidak tersedia' ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col text-center">
            <!-- <a href="
             //kurang php
            //   base_url('detail/edit/' . $alumni['id']) 
            " class="btn btn-warning">Edit Detail</a> -->
            <a href="<?= base_url('detail/edit/' . $dataLengkap['id_data_lengkap']) ?>" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>