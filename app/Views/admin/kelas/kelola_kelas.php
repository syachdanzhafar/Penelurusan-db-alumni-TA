<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Menu Kelola Data Kelas</h1>
<div class="d-flex justify-content-end mb-3">
    <a href="/kelas/create_kelas" class="btn btn-primary" title="Tambah Data">Tambah Data
        <i class="fas fa-plus"></i>
    </a>
</div>
<table id="kelasTable" class="table table-bordered table-hover">
    <thead class="text-center">
        <tr>
            <th>Id Kelas</th>
            <th>Nama Kelas</th>
            <th>Nama Wali Kelas</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php foreach ($kelas as $kelas) : ?>
            <tr>
                <td><?= $kelas['id_kelas']; ?></td>
                <td><?= $kelas['nama_kelas']; ?></td>
                <td><?= $kelas['nama_wali_kelas']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Action Buttons">
                        <a href="/kelas/edit_kelas/<?= $kelas['id_kelas']; ?>" title="Edit Data" class="btn btn-warning btn-sm mr-1">
                            <i class="fas fa-edit" style="color: #ffffff;"></i>
                        </a>
                        <a href="/kelas/delete_kelas/<?= $kelas['id_kelas']; ?>" title="Hapus Data" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">
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
        $('#kelasTable').DataTable();
    });
</script>

<?= $this->endSection() ?>