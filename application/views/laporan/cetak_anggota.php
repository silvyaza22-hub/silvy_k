<!DOCTYPE html>
<html>
<head>

    <title>Cetak Anggota</title>

    <style>

        table{
            width:100%;
            border-collapse: collapse;
        }

        table, th, td{
            border:1px solid black;
            padding:8px;
        }

    </style>

</head>

<body onload="window.print()">

    <h2>Laporan Anggota</h2>

    <table>

        <tr>
            <th>No</th>
            <th>Nomor Anggota</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Status</th>
        </tr>

        <?php 
        $no = 1;
        foreach($anggota as $a){
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $a->nomor_anggota ?></td>
            <td><?= $a->nama ?></td>
            <td><?= $a->telepon ?></td>
            <td><?= $a->email ?></td>
            <td><?= $a->status ?></td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>