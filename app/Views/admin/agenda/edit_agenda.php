<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Edit Data Agenda</h1>

            <form action="/agenda/update_agenda/<?= $agenda['id_agenda'] ?>" method="post">
                <div class="form-group">
                    <label for="id_agenda">Id Agenda</label>
                    <input type="text" class="form-control" id="id_agenda" name="id_agenda" value="<?= $agenda['id_agenda'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="agenda">Agenda</label>
                    <input type="text" class="form-control" id="agenda" name="agenda" value="<?= $agenda['agenda'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_kegiatan">Tanggal Kegiatan</label>
                    <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" value="<?= $agenda['tanggal_kegiatan'] ?>" required>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>