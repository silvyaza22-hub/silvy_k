<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        Status Pendaftaran Saya
    </h1>

    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <a href="<?= site_url('pendaftaran_pasien/tambah'); ?>"
       class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i>
        Daftar Berobat
    </a>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dokter</th>
                        <th>Keluhan</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <?php $no=1; foreach($pendaftaran as $p): ?>

                    <tr>

                        <td><?= $no++; ?></td>
                        <td><?= $p->nama_dokter; ?></td>
                        <td><?= $p->keluhan; ?></td>
                        <td><?= $p->tanggal_daftar; ?></td>
                        <td><?= $p->jam_kunjungan; ?></td>
                        <td><?= $p->status; ?></td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>
    </div>

</div>