<?= $this->extend('user/main_layout') ?>

<?= $this->section('title') ?>
Agenda
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Agenda</h1>
        <!-- Carousel -->
        <div id="agendaCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($agenda as $index => $item) : ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <div class="carousel-background">
                            <img src="<?= base_url('/images/agenda2.png') ?>" class="carousel-image" alt="...">
                        </div>
                        <div class="mt-10 carousel-caption d-none d-md-block text-dark">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#agendaCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#agendaCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End Carousel -->

        <div class="content-container mt-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Agenda</th>
                        <th>Tanggal Kegiatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($agenda as $item) : ?>
                        <tr>
                            <td><?= $item['id_agenda'] ?></td>
                            <td><?= $item['agenda'] ?></td>
                            <td><?= $item['tanggal_kegiatan'] ?></td>
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

    .carousel-background {
        position: relative;
        background-color: rgba(0, 0, 0, 0.5);
        height: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .carousel-image {
        max-height: 80%;
        max-width: 80%;
    }
</style>

<?= $this->endSection() ?>

<script>
    $(document).ready(function() {
        $('#agendaCarousel').carousel();
    });
</script>