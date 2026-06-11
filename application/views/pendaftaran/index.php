<div class="container-fluid">

    <!-- BANNER -->
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
                        <small class="text-muted">Total Pendaftaran</small>
                        <h2 class="font-weight-bold text-primary">
                            <?= count($pendaftaran); ?>
                        </h2>
                    </div>

                    <i class="fas fa-clipboard-list fa-3x text-primary"></i>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow" style="border-radius:20px;">

                <div class="card-body d-flex justify-content-between">

                    <div>
                        <small class="text-muted">Status Aktif</small>
                        <h2 class="font-weight-bold text-success">
                            <?= count($pendaftaran); ?>
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
                            <th width="120">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php $no = 1; foreach($pendaftaran as $p): ?>
                        <tr>

                            <td><?= $no++; ?></td>

                            <td>
                                <strong><?= $p->nama_pasien; ?></strong>
                            </td>

                            <td><?= $p->nama_dokter; ?></td>

                            <td><?= $p->tanggal_daftar; ?></td>

                            <td>
                                <span class="badge badge-info p-2">
                                    <?= $p->status; ?>
                                </span>
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