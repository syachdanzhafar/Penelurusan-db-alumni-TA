<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4 text-center">Grafik Laporan Jumlah Alumni SMP Nurul Anwar</h1>

<div class="d-flex justify-content-end mb-3">
    <a href="<?= site_url('laporan/cetakpdf') ?>" class="btn btn-primary" title="Cetak Laporan" target="_blank">
        Cetak Laporan
        <i class="fas fa-file-pdf"></i>
    </a>
</div>

<div style="width: 80%; margin: auto;">
    <canvas id="laporanChart"></canvas>
</div>

<script>
    $(document).ready(function() {
        var labels = <?= json_encode(array_column($data, 'tahun_lulus')); ?>;
        var data = <?= json_encode(array_column($data, 'jumlah')); ?>;

        // Setup chart
        var ctx = document.getElementById('laporanChart').getContext('2d');
        var laporanChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Alumni',
                    data: data,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });
</script>

<?= $this->endSection() ?>