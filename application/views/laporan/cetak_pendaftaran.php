<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Pendaftaran Pasien</title>

    <style>
        body{
            font-family: Arial, sans-serif;
        }

        h3{
            text-align: center;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td{
            border: 1px solid #000;
        }

        th, td{
            padding: 8px;
            text-align: center;
        }

        @media print{
            .no-print{
                display: none;
            }
        }
    </style>
</head>
<body>

    <h3>LAPORAN PENDAFTARAN PASIEN</h3>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Dokter</th>
            <th>Tanggal Daftar</th>
            <th>Status</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach($data as $d) : ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->nama_pasien; ?></td>
            <td><?= $d->nama_dokter; ?></td>
            <td><?= $d->tanggal_daftar; ?></td>
            <td><?= $d->status; ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

    <br><br>

    <p style="text-align:right;">
        Tangerang, <?= date('d-m-Y'); ?>
    </p>

    <script>
        window.print();
    </script>

</body>
</html>