<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Menu Kelola Laporan</h1>
<div class="d-flex justify-content-end mb-3">
    <a href="/laporan/create_laporan" class="btn btn-primary mr-2" title="Tambah Data">Tambah Data
        <i class="fas fa-plus"></i>
    </a>
    <a href="/laporan/cetak_laporan" class="btn btn-secondary" title="Cetak Laporan">Cetak Laporan
        <i class="fas fa-print"></i>
    </a>
</div>

<table id="laporanTable" class="table table-bordered table-hover">
    <thead class="text-center">
        <tr>
            <th>Id Laporan</th>
            <th>Tahun Kelulusan</th>
            <th>Jumlah Alumni</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php foreach ($laporan as $laporan) : ?>
            <tr>
                <td><?= $laporan['id_laporan']; ?></td>
                <td><?= $laporan['tahun_kelulusan']; ?></td>
                <td><?= $laporan['jumlah_alumni']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Action Buttons">
                        <a href="/laporan/edit_laporan/<?= $laporan['id_laporan']; ?>" title="Edit Data" class="btn btn-warning btn-sm mr-1">
                            <i class="fas fa-edit" style="color: #ffffff;"></i>
                        </a>
                        <a href="/laporan/delete_laporan/<?= $laporan['id_laporan']; ?>" title="Hapus Data" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#laporanTable').DataTable();
    });
</script>


<?= $this->endSection() ?>