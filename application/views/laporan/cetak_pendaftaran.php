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

        .tanggal{
            margin-bottom:15px;
            font-size:15px;
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

        .status-menunggu{
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

        .rekap th{
            background:#0d4d8b;
            color:white;
            text-align:center;
        }

        .rekap td{
            text-align:left;
        }

        .ttd{
        text-align:right;
        margin-top:40px;
        }

        .footer{
            margin-top:150px;
        }
    </style>
</head>
<body>

<?php
$total_diterima = 0;
$total_ditolak = 0;
$total_menunggu = 0;

foreach($data as $d){
    if($d->status == 'Disetujui') $total_diterima++;
    if($d->status == 'Ditolak') $total_ditolak++;
    if($d->status == 'Diproses') $total_menunggu++;
}
?>

<div class="header">
    <h1>RS SEHAT SENTOSA</h1>
    <h3>Sistem Informasi Rumah Sakit</h3>
    <p>Jl. Sehat Sentosa No.123 Tangerang</p>
    <hr>
    <h2>LAPORAN PENDAFTARAN PASIEN</h2>
</div>



<table>
    <thead>
        <tr>
            <th width="5%">No</th>
            <th>Nama Pasien</th>
            <th>Dokter</th>
            <th>Tanggal Daftar</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>

    <?php $no=1; foreach($data as $d): ?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $d->nama_pasien; ?></td>
        <td><?= $d->nama_dokter; ?></td>
        <td><?= date('d-m-Y', strtotime($d->tanggal_daftar)); ?></td>

        <td>
            <?php if($d->status=='Disetujui'): ?>
                <span class="status-disetujui">Disetujui</span>

            <?php elseif($d->status=='Diproses'): ?>
                <span class="status-menunggu">Menunggu</span>

            <?php else: ?>
                <span class="status-ditolak">Ditolak</span>
            <?php endif; ?>
        </td>
    </tr>

    <?php endforeach; ?>

    </tbody>
</table>

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
        <td><strong>Menunggu</strong></td>
        <td><?= $total_menunggu; ?></td>
    </tr>

    <tr>
        <td><strong>Ditolak</strong></td>
        <td><?= $total_ditolak; ?></td>
    </tr>
</table>

<br><br>

<table class="rekap">
 ...
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

