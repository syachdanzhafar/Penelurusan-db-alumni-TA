<?= $this->extend('user/main_layout') ?>

<?= $this->section('title') ?>
Update Data Alumni
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="content-container">
            <h1>Langkah-langkah Memperbarui Data Alumni</h1>
            <ol>
                <li>Siapkan data-data terbaru yang ingin diperbarui, seperti nama, alamat, pendidikan lanjutan, dll.</li>
                <li>Siapkan data pendukung bahwa Anda alumni SMP Nurul Anwar seperti SKHUN.</li>
                <li>Kirimkan email ke <a href="mailto:admin@smpnurulanwar.sch.id?subject=Update%20Data%20Alumni">admin@smpnurulanwar.sch.id</a> dengan subjek "Update Data Alumni".</li>
                <li>Dalam email, sertakan data-data terbaru yang ingin diperbarui beserta identitas lengkap Anda.</li>
                <li>Tunggu konfirmasi dari admin mengenai pembaruan data Anda.</li>
            </ol>
            <p>Jika Anda memiliki pertanyaan lebih lanjut, silakan hubungi kami melalui email atau nomor telepon yang tersedia.</p>
            <a href="https://mail.google.com" target="_blank">
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-upload"></i> Upload Data
                </button>
            </a>
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

    .btn-primary {
        background-color: #007bff;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
    }

    .btn-primary i {
        margin-right: 8px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
<?= $this->endSection() ?>
