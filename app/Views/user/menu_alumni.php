<?= $this->extend('user/main_layout') ?>

<?= $this->section('title') ?>
Data Alumni
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Data Alumni</h1>
        <div class="table-container">
            <div class="table-header">
                <div class="search-container">
                    <label for="searchInput" class="sr-only">Search</label>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tableAlumni" class="table table-striped" style="width:100%">
                    <thead class="thead-light text-center">
                        <tr>
                            <th>ID Alumni</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Tahun Masuk</th>
                            <th>Tahun Lulus</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php foreach ($alumni as $alumnus) : ?>
                            <tr>
                                <td><?= $alumnus['id']; ?></td>
                                <td><?= $alumnus['nama']; ?></td>
                                <td><?= $alumnus['tgl_lahir']; ?></td>
                                <td><?= $alumnus['jenis_kelamin']; ?></td>
                                <td><?= $alumnus['tahun_masuk']; ?></td>
                                <td><?= $alumnus['tahun_lulus']; ?></td>
                                <td>
                                    <a href="<?= base_url('/user/detail/' . $alumnus['id']); ?>" title="Data Lengkap Alumni" class="btn btn-sm btn-info">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br>
<style>
    .table-container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .search-container {
        position: relative;
        display: flex;
        align-items: center;
        width: 300px;
    }

    .search-container input[type="search"] {
        width: 100%;
        padding-right: 30px;
    }

    .search-container i {
        position: absolute;
        right: 10px;
        color: #6c757d;
    }
</style>

<script>
    $(document).ready(function() {
        $('#tableAlumni').DataTable({
            "paging": true,
            "ordering": true,
            "info": true,
            "searching": true
        });
    });
</script>

<?= $this->endSection() ?>