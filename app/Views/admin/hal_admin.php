<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="jumbotron text-center">
        <h4>Selamat Datang di Index Admin</h4>
        <h6>Sistem Penelusuran Data Alumni SMP Nurul Anwar Bekasi</h6>
        <div class="row">
            <!-- Card Kelola Data Alumni -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>Kelola Data Alumni</h4>
                        <p>Kelola dan atur data alumni</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="<?= site_url('admin/alumni/kelola_data_alumni') ?>" class="small-box-footer">
                        Lebih detail <i class="fas fa-arrow-circle-right text-white"></i>
                    </a>
                </div>
            </div>

            <!-- Card Kelola Agenda -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>Kelola Agenda</h4>
                        <p>Kelola dan atur agenda kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <a href="<?= site_url('admin/agenda/kelola_agenda') ?>" class="small-box-footer">
                        Lebih detail <i class="fas fa-arrow-circle-right text-white"></i>
                    </a>
                </div>
            </div>

            <!-- Card Kelola Laporan -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="small-box bg-warning">
                    <div class="inner text-white">
                        <h4>Kelola Laporan</h4>
                        <p>Kelola dan cetak laporan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <a href="<?= site_url('admin/laporan') ?>" class="small-box-footer text-white">
                        Lebih detail <i class="fas fa-arrow-circle-right text-white"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Card Kelola Kelas -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4>Kelola Kelas</h4>
                        <p>Kelola dan atur data kelas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <a href="<?= site_url('admin/kelas/kelola_kelas') ?>" class="small-box-footer">
                        Lebih detail <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card Kelola Wali Kelas -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4>Kelola Wali Kelas</h4>
                        <p>Kelola dan atur data wali kelas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <a href="<?= site_url('admin/wali_kelas/kelola_wali_kelas') ?>" class="small-box-footer">
                        Lebih detail <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card Kelola Pendidikan Lanjutan -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4>Kelola Pendidikan Lanjutan</h4>
                        <p>Kelola dan atur data pendidikan lanjutan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <a href="<?= site_url('admin/pendidikan_lanjutan/kelola_pendidikan_lanjutan') ?>" class="small-box-footer">
                        Lebih detail <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>