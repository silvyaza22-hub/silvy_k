<?php
    function clean($text){
        return strtolower(trim($text));
    }

    $total = count($data);

    $diproses = count(array_filter($data, function($d){
        return strtolower(trim($d->status)) == 'diproses';
    }));

    $disetujui = count(array_filter($data, function($d){
        return strtolower(trim($d->status)) == 'disetujui';
    }));

    $ditolak = count(array_filter($data, function($d){
        return strtolower(trim($d->status)) == 'ditolak';
    }));
?>

<div class="container-fluid">

    
    <div class="card border-0 shadow mb-4">
        <div class="card-body text-white"
             style="background:linear-gradient(90deg,#0d4d8b,#3498db);border-radius:10px;">

            <h2>
                <i class="fas fa-file-medical"></i>
                Laporan Pendaftaran Pasien
            </h2>

            <p class="mb-0">
                Menampilkan data laporan pendaftaran pasien.
            </p>

        </div>
    </div>

    <!-- STATISTIK -->
    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h6>Total</h6>
                    <h2 class="text-primary"><?= $total; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h6>Diproses</h6>
                    <h2 class="text-warning"><?= $diproses; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h6>Disetujui</h6>
                    <h2 class="text-success"><?= $disetujui; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h6>Ditolak</h6>
                    <h2 class="text-danger"><?= $ditolak; ?></h2>
                </div>
            </div>
        </div>

    </div>

    <!-- FILTER -->
    <div class="card shadow border-0 mb-4">
        <div class="card-body">

            <form method="get" class="form-inline">

                <label class="mr-2"><strong>Bulan :</strong></label>

                <input type="month"
                       name="bulan"
                       value="<?= $bulan; ?>"
                       class="form-control mr-2">

                <button type="submit" class="btn btn-primary mr-2">
                    <i class="fas fa-filter"></i> Filter
                </button>

                <a href="<?= site_url('laporan/pendaftaran'); ?>"
                   class="btn btn-secondary mr-2">
                    Reset
                </a>

                <a href="<?= site_url('laporan/cetak_pendaftaran?bulan='.$bulan); ?>"
                   target="_blank"
                   class="btn btn-primary">
                    <i class="fas fa-print"></i> Cetak
                </a>

            </form>

        </div>
    </div>

    <!-- TABEL -->
    <div class="card shadow border-0">

        <div class="card-header text-white"
             style="background:#0d4d8b;">
            <i class="fas fa-list"></i>
            Data Laporan Pendaftaran
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead style="background:#0d6efd;color:white;">
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
                            <td><?= $d->tanggal_daftar; ?></td>

                            <td>

                                <?php if($status == 'diproses'): ?>

                                    <span class="badge badge-warning">Diproses</span>

                                <?php elseif($status == 'disetujui'): ?>

                                    <span class="badge badge-success">Disetujui</span>

                                <?php elseif($status == 'ditolak'): ?>

                                    <span class="badge badge-danger">Ditolak</span>

                                <?php else: ?>

                                    <span class="badge badge-secondary">
                                        <?= $d->status; ?>
                                    </span>

                                <?php endif; ?>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>