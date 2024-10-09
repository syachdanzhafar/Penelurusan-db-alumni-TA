<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Existing head content -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.12.5/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url("css/style.css") ?>" />

    <!-- <style>
        body {
            background: url('<?= base_url("images/bgadmin.png") ?>') no-repeat center center fixed;
            background-size: cover;
        }
    </style> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="<?= site_url('admin/hal_admin') ?>">
            <i class="fas fa-home"></i> Index Admin
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= (uri_string() == 'admin/alumni/kelola_data_alumni') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= site_url('admin/alumni/kelola_data_alumni') ?>">
                        <i class="fas fa-users"></i> Data Alumni <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item <?= (uri_string() == 'admin/agenda/kelola_agenda') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= site_url('admin/agenda/kelola_agenda') ?>">
                        <i class="fas fa-calendar"></i> Agenda <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item <?= (uri_string() == 'admin/laporan') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= site_url('admin/laporan') ?>">
                        <i class="fas fa-chart-bar"></i> Laporan <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item <?= (uri_string() == 'admin/kelas/kelola_kelas') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= site_url('admin/kelas/kelola_kelas') ?>">
                        <i class="fas fa-school"></i> Kelas <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item <?= (uri_string() == 'admin/wali_kelas/kelola_wali_kelas') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= site_url('admin/wali_kelas/kelola_wali_kelas') ?>">
                        <i class="fas fa-chalkboard-teacher"></i> Wali Kelas <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item <?= (uri_string() == 'admin/pendidikan_lanjutan/kelola_pendidikan_lanjutan') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= site_url('admin/pendidikan_lanjutan/kelola_pendidikan_lanjutan') ?>">
                        <i class="fas fa-graduation-cap"></i> Pendidikan Lanjutan <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" id="logoutButton" title="Logout">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5 pt-4">
        <?= $this->renderSection('content') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.12.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
        document.getElementById('logoutButton').addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apakah anda ingin logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, logout',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "<?= site_url('admin/logout') ?>";
                }
            });
        });
    </script>

</body>

</html>