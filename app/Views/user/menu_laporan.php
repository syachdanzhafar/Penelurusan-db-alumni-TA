<?= $this->extend('user/main_layout') ?>

<?= $this->section('title') ?>
Laporan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Grafik Laporan Jumlah Alumni SMP Nurul Anwar</h1>
        </div>
        <div class="card-body">
            <canvas id="laporanChart" width="300" height="100"></canvas>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('laporanChart').getContext('2d');

        // Data untuk chart
        var tahunLulus = <?= json_encode(array_column($laporan, 'tahun_lulus')) ?>;
        var jumlahAlumni = <?= json_encode(array_column($laporan, 'jumlah_alumni')) ?>;

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: tahunLulus,
                datasets: [{
                    label: 'Jumlah Alumni',
                    data: jumlahAlumni,
                    fill: false,
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                animation: {
                    duration: 2000,
                    easing: 'easeInOutQuart'
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 10
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            font: {
                                size: 14,
                                weight: 'bold'
                            }
                        }
                    }
                },
                elements: {
                    line: {
                        tension: 0.4,
                    }
                }
            }
        });
    });
</script>

<?= $this->endSection() ?>