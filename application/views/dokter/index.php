<div class="container-fluid">

    <!-- BANNER -->
    <div class="card border-0 shadow-lg mb-4"
         style="border-radius:25px;
                background:linear-gradient(135deg,#0f4c81,#42a5f5);">

        <div class="card-body p-4 text-white">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <h2 class="font-weight-bold mb-2">
                        <i class="fas fa-user-md"></i>
                        Data Dokter
                    </h2>

                    <p class="mb-0">
                        Kelola seluruh data dokter rumah sakit dengan mudah dan cepat.
                    </p>

                </div>

                <div class="col-md-4 text-right">

                    <a href="<?= site_url('dokter/tambah'); ?>"
                       class="btn btn-light btn-lg">

                        <i class="fas fa-plus"></i>
                        Tambah Dokter

                    </a>

                </div>

            </div>

        </div>

    </div>

    <?php if($this->session->flashdata('success')): ?>

        <div class="alert alert-success shadow-sm">
            <?= $this->session->flashdata('success'); ?>
        </div>

    <?php endif; ?>

    <!-- STATISTIK -->
    <div class="row mb-4">

        <div class="col-md-4">

            <div class="card border-0 shadow" style="border-radius:20px;">

                <div class="card-body d-flex justify-content-between">

                    <div>
                        <small class="text-muted">Total Dokter</small>
                        <h2 class="font-weight-bold text-primary">
                            <?= count($dokter); ?>
                        </h2>
                    </div>

                    <i class="fas fa-user-md fa-3x text-primary"></i>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow" style="border-radius:20px;">

                <div class="card-body d-flex justify-content-between">

                    <div>
                        <small class="text-muted">Dokter Aktif</small>
                        <h2 class="font-weight-bold text-success">
                            <?= count($dokter); ?>
                        </h2>
                    </div>

                    <i class="fas fa-check-circle fa-3x text-success"></i>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow" style="border-radius:20px;">

                <div class="card-body d-flex justify-content-between">

                    <div>
                        <small class="text-muted">Tanggal Hari Ini</small>
                        <h5 class="font-weight-bold">
                            <?= date('d-m-Y'); ?>
                        </h5>
                    </div>

                    <i class="fas fa-calendar-alt fa-3x text-warning"></i>

                </div>

            </div>

        </div>

    </div>

    <!-- TABEL -->
    <div class="card border-0 shadow" style="border-radius:20px;">

        <div class="card-header bg-white py-3">

            <h5 class="font-weight-bold text-primary mb-0">
                <i class="fas fa-list"></i> Daftar Dokter
            </h5>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover" id="dataTable">

                    <thead style="background:#0f4c81;color:white;">
                        <tr>
                            <th>No</th>
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th width="120">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php $no = 1; foreach($dokter as $d): ?>
                        <tr>

                            <td><?= $no++; ?></td>

                            <td>
                                <strong><?= $d->nama_dokter; ?></strong>
                            </td>

                            <td>
                                <span class="badge badge-info p-2">
                                    <?= $d->spesialis; ?>
                                </span>
                            </td>

                            <td>

                                <a href="<?= site_url('dokter/edit/'.$d->id_dokter); ?>"
                                   class="btn btn-primary btn-sm">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <a href="<?= site_url('dokter/hapus/'.$d->id_dokter); ?>"
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