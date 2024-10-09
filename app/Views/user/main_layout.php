<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <!-- Link ke CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: url('<?= base_url('images/bg.jpg') ?>') repeat;
            background-size: contain;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.7);
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .main-content {
            flex: 1;
        }

        .footer {
            background-color: #f8f9fa;
            font-size: 0.875rem;
        }
    </style>
</head>

<body>
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?= base_url('/user/hal_user') ?>">
                <img src="<?= base_url('images/logo.png') ?>" alt="Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/user/menu_alumni') ?>"><i class="fas fa-users"></i> Data Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/user/menu_agenda') ?>"><i class="fas fa-calendar-alt"></i> Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/user/menu_laporan') ?>"><i class="fas fa-file-alt"></i> Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/user/menu_pendidikan_lanjutan') ?>"><i class="fas fa-graduation-cap"></i> Pendidikan Lanjutan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/user/menu_update_data') ?>"><i class="fas fa-sync-alt"></i> Update Data</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/admin/login') ?>"><i class="fas fa-lock in-alt"></i> Login Admin</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Container untuk konten utama -->
        <div class="container mt-4 main-content">
            <?= $this->renderSection('content') ?>
        </div>

        <!-- Footer -->
        <footer class="footer bg-light text-center text-lg-start">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Tentang Kami</h5>
                        <p>
                            SMP Nurul Anwar adalah sekolah menengah pertama yang berfokus pada pendidikan karakter dan akademik. Kami berlokasi di Jalan Dr. Muhajirin No.Rt. 002/008, RT.005/RW.002, Jatikramat, Kec. Jatiasih, Kota Bks, Jawa Barat 17421.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Informasi Kontak</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <i class="fas fa-map-marker-alt"></i> Jl. Ratna Gg. Masjid AlMuhajirin
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> (021) 123-4567
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i> info@smpnurulanwar.sch.id
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Ikuti Kami</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-dark"><i class="fab fa-facebook"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#" class="text-dark"><i class="fab fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#" class="text-dark"><i class="fab fa-instagram"></i> Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center p-3 bg-dark text-white">
                © 2024 SMP Nurul Anwar
            </div>
        </footer>
    </div>

    <!-- Link ke JavaScript Bootstrap dll -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>