<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pendaftaran Pasien</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:30px;
            color:#333;
        }

        .header{
            text-align:center;
            margin-bottom:25px;
        }

        .header h1{
            color:#0d4d8b;
            margin:0;
        }

        .header h3{
            margin:5px 0;
            font-weight:normal;
        }

        .header hr{
            border:0;
            border-top:3px solid #0d4d8b;
            margin-top:15px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th{
            background:#0d4d8b;
            color:white;
            padding:12px;
            border:1px solid #ddd;
        }

        td{
            padding:10px;
            border:1px solid #ddd;
            text-align:center;
        }

        tr:nth-child(even){
            background:#f8f9fa;
        }

        .status-disetujui{
            color:#28a745;
            font-weight:bold;
        }

        .status-diproses{
            color:#ffc107;
            font-weight:bold;
        }

        .status-ditolak{
            color:#dc3545;
            font-weight:bold;
        }

        .rekap{
            width:40%;
            float:right;
            margin-top:20px;
        }

        .ttd{
            text-align:right;
            margin-top:40px;
        }
    </style>
</head>

<body>

<?php
$total_diterima = 0;
$total_ditolak = 0;
$total_diproses = 0;

foreach($data as $d){
    $status = strtolower(trim($d->status));

    if($status == 'disetujui') $total_diterima++;
    elseif($status == 'ditolak') $total_ditolak++;
    elseif($status == 'diproses') $total_diproses++;
}
?>

<!-- HEADER -->
<div class="header">
    <h1>RS SEHAT SENTOSA</h1>
    <h3>Sistem Informasi Rumah Sakit</h3>
    <p>Jl. Sehat Sentosa No.123 Tangerang</p>
    <hr>
    <h2>LAPORAN PENDAFTARAN PASIEN</h2>
</div>

<!-- TABEL DATA -->
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Dokter</th>
            <th>Tanggal Daftar</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>

    <?php $no=1; foreach($data as $d): ?>

        <?php $status = strtolower(trim($d->status)); ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->nama_pasien; ?></td>
            <td><?= $d->nama_dokter; ?></td>
            <td><?= date('d-m-Y', strtotime($d->tanggal_daftar)); ?></td>

            <td>
                <?php if($status == 'disetujui'): ?>

                    <span class="status-disetujui">Disetujui</span>

                <?php elseif($status == 'diproses'): ?>

                    <span class="status-diproses">Diproses</span>

                <?php elseif($status == 'ditolak'): ?>

                    <span class="status-ditolak">Ditolak</span>

                <?php else: ?>

                    <span><?= $d->status; ?></span>

                <?php endif; ?>
            </td>
        </tr>

    <?php endforeach; ?>

    </tbody>
</table>

<!-- REKAP -->
<table class="rekap">
    <tr>
        <td><strong>Total Pendaftaran</strong></td>
        <td><?= count($data); ?></td>
    </tr>

    <tr>
        <td><strong>Disetujui</strong></td>
        <td><?= $total_diterima; ?></td>
    </tr>

    <tr>
        <td><strong>Diproses</strong></td>
        <td><?= $total_diproses; ?></td>
    </tr>

    <tr>
        <td><strong>Ditolak</strong></td>
        <td><?= $total_ditolak; ?></td>
    </tr>
</table>

<div style="clear:both;"></div>


<div class="ttd">
    Tangerang, <?= date('d-m-Y'); ?>
    <br><br><br><br><br>
</div>

<script>
window.print();
</script>

</body>
</html>