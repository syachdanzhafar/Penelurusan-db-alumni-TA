<?= $this->extend('user/main_layout') ?>

<?= $this->section('title') ?>
Pendidikan Lanjutan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Pendidikan Lanjutan Alumni SMP Nurul Anwar</h1>
        <div class="content-container">
            <!-- Search Bar -->
            <div class="mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Cari Pendidikan Lanjutan Alumni SMP Nurul Anwar">
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Pendidikan Lanjutan</th>
                        <th>Pendidikan Lanjutan</th>
                        <th>Alamat Sekolah</th>
                    </tr>
                </thead>
                <tbody id="dataTable">
                    <?php foreach ($pendidikan as $item) : ?>
                        <tr>
                            <td class="text-center"><?= $item['id_pendidikan_lanjutan'] ?></td>
                            <td><?= $item['pendidikan_lanjutan'] ?></td>
                            <td><?= $item['alamat_sekolah'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>

<style>
    .content-container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>

<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchText = this.value.toLowerCase();
        const rows = document.querySelectorAll('#dataTable tr');

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            let found = false;
            cells.forEach(cell => {
                if (cell.textContent.toLowerCase().includes(searchText)) {
                    found = true;
                }
            });
            row.style.display = found ? '' : 'none';
        });
    });
</script>

<?= $this->endSection() ?>