<div class="container-fluid">

    <!-- HEADER -->
    <div class="card border-0 shadow-lg mb-4"
         style="border-radius:25px;
                background:linear-gradient(135deg,#0f4c81,#42a5f5);">

        <div class="card-body p-4 text-white">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <h2 class="font-weight-bold mb-2">
                        <i class="fas fa-notes-medical"></i>
                        Data Pendaftaran
                    </h2>

                    <p class="mb-0">
                        Kelola seluruh data pendaftaran pasien rumah sakit dengan mudah dan cepat.
                    </p>

                </div>

                <div class="col-md-4 text-right">

                    <a href="<?= site_url('pendaftaran/tambah'); ?>"
                       class="btn btn-light btn-lg">
                        <i class="fas fa-plus"></i>
                        Tambah Pendaftaran
                    </a>

                </div>

            </div>

        </div>
    </div>

    <!-- FLASH MESSAGE -->
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success shadow-sm">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>


    <!-- HITUNG STATUS -->
    <?php
        $total = count($pendaftaran);

        $diproses = count(array_filter($pendaftaran, function($p){
            return strtolower(trim($p->status)) == 'diproses';
        }));

        $disetujui = count(array_filter($pendaftaran, function($p){
            return strtolower(trim($p->status)) == 'disetujui';
        }));

        $ditolak = count(array_filter($pendaftaran, function($p){
            return strtolower(trim($p->status)) == 'ditolak';
        }));
    ?>


    <!-- CARD STATISTIK -->
    <div class="row mb-4">

        <div class="col-md-3">
            <div class="card shadow border-0" style="border-radius:20px;">
                <div class="card-body text-center">
                    <small>Total</small>
                    <h2 class="text-primary"><?= $total; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow border-0" style="border-radius:20px;">
                <div class="card-body text-center">
                    <small>Diproses</small>
                    <h2 class="text-warning"><?= $diproses; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow border-0" style="border-radius:20px;">
                <div class="card-body text-center">
                    <small>Disetujui</small>
                    <h2 class="text-success"><?= $disetujui; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow border-0" style="border-radius:20px;">
                <div class="card-body text-center">
                    <small>Ditolak</small>
                    <h2 class="text-danger"><?= $ditolak; ?></h2>
                </div>
            </div>
        </div>

    </div>


    <!-- TABLE -->
    <div class="card border-0 shadow" style="border-radius:20px;">

        <div class="card-header bg-white py-3">
            <h5 class="font-weight-bold text-primary mb-0">
                <i class="fas fa-list"></i> Daftar Pendaftaran
            </h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover" id="dataTable">

                    <thead style="background:#0f4c81;color:white;">
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>Dokter</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php $no=1; foreach($pendaftaran as $p): ?>
                        <?php $status = strtolower(trim($p->status)); ?>

                        <tr>

                            <td><?= $no++; ?></td>
                            <td><strong><?= $p->nama_pasien; ?></strong></td>
                            <td><?= $p->nama_dokter; ?></td>
                            <td><?= $p->tanggal_daftar; ?></td>

                            <td>

                                <?php if($status == 'diproses'): ?>

                                    <span class="badge badge-warning p-2">Diproses</span>

                                <?php elseif($status == 'disetujui'): ?>

                                    <span class="badge badge-success p-2">Disetujui</span>

                                <?php elseif($status == 'ditolak'): ?>

                                    <span class="badge badge-danger p-2">Ditolak</span>

                                <?php else: ?>

                                    <span class="badge badge-secondary p-2">
                                        <?= $p->status; ?>
                                    </span>

                                <?php endif; ?>

                            </td>

                            <td>

                                <a href="<?= site_url('pendaftaran/edit/'.$p->id_daftar); ?>"
                                   class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="<?= site_url('pendaftaran/hapus/'.$p->id_daftar); ?>"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')"
                                   class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>