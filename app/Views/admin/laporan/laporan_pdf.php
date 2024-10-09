<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Jumlah Alumni SMP Nurul Anwar Kota Bekasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            background-color: white;
        }

        .container {
            max-width: 21cm;
            margin: 0 auto;
            padding: 15px;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            border-bottom: 2px solid black;
            padding-bottom: 10px;
        }

        .logo-left,
        .logo-right {
            width: 80px;
        }

        .header-text {
            text-align: center;
            flex-grow: 1;
        }

        .header h1 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        .header p {
            margin: 5px 0;
            font-size: 14px;
        }

        .class {
            text-align: center;
        }

        .addr-kop {
            text-align: center;
            font-size: 12px;
            line-height: 1.5;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .signature-section {
            margin-top: 50px;
            text-align: center;
        }

        .signature {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <div class="header-text">
                <h1>YAYASAN PENDIDIKAN</h1>
                <h1>SMP NURUL ANWAR KOTA BEKASI</h1>
                <p class="addr-kop">Jl. Ratna Gg. Masjid AlMuhajirin <br> Telepon: 08192606234 <br> Email: smpnurulanwar@gmail.com</p>
            </div>
        </div>
        <div class="container">
            <div class="class">
                <h2>Laporan Jumlah Alumni SMP Nurul Anwar Kota Bekasi</h2>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Tahun Kelulusan</th>
                    <th>Jumlah Alumni</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) : ?>
                    <tr>
                        <td><?= $row['tahun_lulus']; ?></td>
                        <td><?= $row['jumlah']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Tanda Tangan Section -->
        <div class="signature-section">
            <div class="signature">
                <p>Bekasi, <?= date('d M Y') ?></p>
                <p style="margin-top: 50px;">_______________ <br> Ahmad Fadhullah </br></p>
            </div>
        </div>
    </div>

</body>

</html>