<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Menu Kelola Data Alumni</h1>
<div class="d-flex justify-content-end mb-3">
    <a href="/alumni/create" class="btn btn-primary" title="Tambah Data">Tambah Data
        <i class="fas fa-plus"></i>
    </a>
</div>
<table id="alumniTable" class="table table-bordered table-hover">
    <thead class="text-center">
        <tr>
            <th>Id Alumni</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Tahun Masuk</th>
            <th>Tahun Lulus</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php foreach ($alumni as $alumni) : ?>
            <tr>
                <td><?= $alumni['id']; ?></td>
                <td><?= $alumni['nama']; ?></td>
                <td><?= $alumni['nisn']; ?></td>
                <td><?= $alumni['jenis_kelamin']; ?></td>
                <td><?= $alumni['tgl_lahir']; ?></td>
                <td><?= $alumni['tahun_masuk']; ?></td>
                <td><?= $alumni['tahun_lulus']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Action Buttons">
                        <a href="/alumni/detail/<?= $alumni['id']; ?>" title="Detail" class="btn btn-success btn-sm mr-1">
                            <i class="fas fa-info-circle"></i>
                        </a>

                        <a href="/alumni/edit/<?= $alumni['id']; ?>" title="Edit Data" class="btn btn-warning btn-sm mr-1">
                            <i class="fas fa-edit" style="color: #ffffff;"></i>
                        </a>
                        <a href="/alumni/delete/<?= $alumni['id']; ?>" title="Hapus Data" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot class="text-center">
        <tr>
            <th>Id Alumni</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Tahun Masuk</th>
            <th>Tahun Lulus</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>

<script>
    $(document).ready(function() {
        $('#alumniTable').DataTable();
    });
</script>

<?= $this->endSection() ?>