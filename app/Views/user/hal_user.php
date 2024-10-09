<?= $this->extend('user/main_layout') ?>

<?= $this->section('title') ?>
Sistem Penelusuran Data Alumni SMP Nurul Anwar
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h1 class="card-title">Selamat Datang di Sistem Penelusuran Data Alumni SMP Nurul Anwar</h1>
                </div>
                <div class="card-body text-center">
                    <img src="<?= base_url('images/logo.png') ?>" class="img-fluid mb-3" style="max-width: 100px;" alt="Logo SMP Nurul Anwar">
                    <p class="lead">Sistem ini digunakan untuk menelusuri dan mengelola informasi mengenai alumni SMP Nurul Anwar.</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>