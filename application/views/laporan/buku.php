<div class="container">

    <h3>Laporan Buku</h3>

    <form method="GET">

        <input type="text"
               name="judul"
               value="<?= $judul ?>"
               placeholder="Cari judul">

        <button type="submit" class="btn btn-secondary">
            filter
        </button>

        <a href="<?= base_url('laporan/buku') ?>"
           class="btn btn-secondary">
           reset
        </a>

    </form>

    <br>

    <a href="<?= base_url('laporan/cetak_buku') ?>" 
       target="_blank"
       class="btn btn-primary mb-3">
       Cetak PDF
    </a>

    <table class="table table-bordered">

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

</div>