<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Menu Kelola Data Agenda</h1>
<div class="d-flex justify-content-end mb-3">
    <a href="/agenda/create_agenda" class="btn btn-primary" title="Tambah Data">Tambah Data
        <i class="fas fa-plus"></i>
    </a>
</div>
<table id="agendaTable" class="table table-bordered table-hover">
    <thead class="text-center">
        <tr>
            <th>Id Agenda</th>
            <th>Agenda</th>
            <th>Tanggal Kegiatan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php foreach ($agenda as $agenda) : ?>
            <tr>
                <td><?= $agenda['id_agenda']; ?></td>
                <td><?= $agenda['agenda']; ?></td>
                <td><?= $agenda['tanggal_kegiatan']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Action Buttons">
                        <a href="/agenda/edit_agenda/<?= $agenda['id_agenda']; ?>" title="Edit Data" class="btn btn-warning btn-sm mr-1">
                            <i class="fas fa-edit" style="color: #ffffff;"></i>
                        </a>
                        <a href="/agenda/delete_agenda/<?= $agenda['id_agenda']; ?>" title="Hapus Data" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">
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
        $('#agendaTable').DataTable();
    });
</script>

<?= $this->endSection() ?>