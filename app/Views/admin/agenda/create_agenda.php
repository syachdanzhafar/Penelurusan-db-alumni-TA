<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Form Tambah agenda</h1>
<div class="container">
    <form action="/agenda/store_agenda" method="post">
        <div class="form-group">
            <label for="id_agenda">Id Agenda</label>
            <input type="text" class="form-control" id="id_agenda" name="id_agenda" required>
        </div>
        <div class="form-group">
            <label for="agenda">Agenda</label>
            <input type="text" class="form-control" id="agenda" name="agenda" required>
        </div>
        <div class="form-group">
            <label for="tanggal_kegiatan">Tanggal Kegiatan</label>
            <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?= $this->endSection() ?>