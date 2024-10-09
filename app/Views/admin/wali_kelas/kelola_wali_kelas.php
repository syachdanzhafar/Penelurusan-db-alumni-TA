<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Menu Kelola Data Wali Kelas</h1>
<div class="d-flex justify-content-end mb-3">
    <a href="/wali_kelas/create_wali_kelas" class="btn btn-primary" title="Tambah Data">Tambah Data
        <i class="fas fa-plus"></i>
    </a>
</div>
<table id="wali_kelasTable" class="table table-bordered table-hover">
    <thead class="text-center">
        <tr>
            <th>Id Wali Kelas</th>
            <th>Nama Wali Kelas</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php foreach ($wali_kelas as $wali_kelas) : ?>
            <tr>
                <td><?= $wali_kelas['id_wali_kelas']; ?></td>
                <td><?= $wali_kelas['nama_wali_kelas']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Action Buttons">
                        <a href="/wali_kelas/edit_wali_kelas/<?= $wali_kelas['id_wali_kelas']; ?>" title="Edit Data" class="btn btn-warning btn-sm mr-1">
                            <i class="fas fa-edit" style="color: #ffffff;"></i>
                        </a>
                        <a href="/wali_kelas/delete_wali_kelas/<?= $wali_kelas['id_wali_kelas']; ?>" title="Hapus Data" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">
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
        $('#wali_kelasTable').DataTable();
    });
</script>

<?= $this->endSection() ?>