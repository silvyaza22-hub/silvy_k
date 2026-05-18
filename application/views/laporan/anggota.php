<div class="container">

    <h3>Laporan Anggota</h3>

    <form method="GET">

        <input type="text"
               name="nama"
               value="<?= $nama ?>"
               placeholder="Cari nama anggota">

        <button type="submit" class="btn btn-secondary">
            filter
        </button>

        <a href="<?= base_url('laporan/anggota') ?>"
           class="btn btn-secondary">
           reset
        </a>

    </form>

    <br>

    <a href="<?= base_url('laporan/cetak_anggota') ?>" 
       target="_blank"
       class="btn btn-primary mb-3">
       Cetak PDF
    </a>

    <table class="table table-bordered">

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

</div>