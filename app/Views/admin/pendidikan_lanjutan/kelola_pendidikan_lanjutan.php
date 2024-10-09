<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Menu Kelola Data Pendidikan Lanjutan</h1>
<div class="d-flex justify-content-end mb-3">
</div>
<table id="pendidikan_lanjutanTable" class="table table-bordered table-hover">
    <thead class="text-center">
        <tr>
            <th>Id Pendidikan Lanjutan</th>
            <th>Pendidikan Lanjutan</th>
            <th>Alamat Sekolah</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php foreach ($pendidikan_lanjutan as $pendidikan_lanjutan) : ?>
            <tr>
                <td><?= $pendidikan_lanjutan['id_pendidikan_lanjutan']; ?></td>
                <td><?= $pendidikan_lanjutan['pendidikan_lanjutan']; ?></td>
                <td><?= $pendidikan_lanjutan['alamat_sekolah']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Action Buttons">
                        <a href="/pendidikan_lanjutan/edit_pendidikan_lanjutan/<?= $pendidikan_lanjutan['id_pendidikan_lanjutan']; ?>" title="Edit Data" class="btn btn-warning btn-sm mr-1">
                            <i class="fas fa-edit" style="color: #ffffff;"></i>
                        </a>
                        <a href="/pendidikan_lanjutan/delete_pendidikan_lanjutan/<?= $pendidikan_lanjutan['id_pendidikan_lanjutan']; ?>" title="Hapus Data" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">
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
        $('#pendidikan_lanjutanTable').DataTable();
    });
</script>

<?= $this->endSection() ?>