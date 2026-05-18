<!DOCTYPE html>
<html>
<head>

    <title>Cetak Buku</title>

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

    <h2>Laporan Buku</h2>

    <table>

        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Stok</th>
            <th>Lokasi Rak</th>
        </tr>

        <?php 
        $no = 1;
        foreach($buku as $b){
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $b->kode_buku ?></td>
            <td><?= $b->judul ?></td>
            <td><?= $b->penulis ?></td>
            <td><?= $b->penerbit ?></td>
            <td><?= $b->tahun ?></td>
            <td><?= $b->stok ?></td>
            <td><?= $b->lokasi_rak ?></td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>