<?= $this->extend('user/main_layout') ?>

<?= $this->section('title') ?>
Detail Alumni
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <h2 class="text-center mb-4">Detail Alumni</h2>

    <div class="row">
        <!-- Card Data Alumni -->
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-dark text-white text-center">
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

        <!-- Card Data Lengkap -->
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-dark text-white text-center">
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
                        <div class="col-sm-4"><strong>Nama Kelas</strong></div>
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

    <!-- Tombol Kembali -->
    <div class="text-center">
        <a href="<?= base_url('/user/menu_alumni'); ?>" class="btn btn-secondary">Kembali ke Data Alumni</a>
    </div>
</div>

<style>
    .container {
        margin: 20px auto;
        max-width: 800px;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        margin-bottom: 20px;
    }

    .list-group-item {
        border: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }
</style>

<?= $this->endSection() ?>