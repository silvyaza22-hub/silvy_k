<div class="container-fluid">

    <!-- BANNER -->
    <div class="card border-0 shadow-lg mb-4"
         style="border-radius:25px;
                background:linear-gradient(135deg,#0f4c81,#42a5f5);">

        <div class="card-body p-4 text-white">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <h2 class="font-weight-bold mb-2">
                        <i class="fas fa-user-injured"></i>
                        Data Pasien
                    </h2>

                    <p class="mb-0">
                        Kelola seluruh data pasien rumah sakit dengan mudah dan cepat.
                    </p>

                </div>

                <div class="col-md-4 text-right">

                    <a href="<?= site_url('pasien/tambah'); ?>"
                       class="btn btn-light btn-lg">

                        <i class="fas fa-plus"></i>
                        Tambah Pasien

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

            <div class="card border-0 shadow"
                 style="border-radius:20px;">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <small class="text-muted">
                                Total Pasien
                            </small>

                            <h2 class="font-weight-bold text-primary">
                                <?= count($pasien); ?>
                            </h2>

                        </div>

                        <i class="fas fa-users fa-3x text-primary"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow"
                 style="border-radius:20px;">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <small class="text-muted">
                                Data Aktif
                            </small>

                            <h2 class="font-weight-bold text-success">
                                <?= count($pasien); ?>
                            </h2>

                        </div>

                        <i class="fas fa-check-circle fa-3x text-success"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow"
                 style="border-radius:20px;">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <small class="text-muted">
                                Tanggal Hari Ini
                            </small>

                            <h5 class="font-weight-bold">
                                <?= date('d-m-Y'); ?>
                            </h5>

                        </div>

                        <i class="fas fa-calendar-alt fa-3x text-warning"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- TABEL PASIEN -->
    <div class="card border-0 shadow"
         style="border-radius:20px;">

        <div class="card-header bg-white py-3">

            <h5 class="font-weight-bold text-primary mb-0">

                <i class="fas fa-list"></i>
                Daftar Pasien

            </h5>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover" id="dataTable">

                    <thead style="background:#0f4c81;color:white;">

                        <tr>

                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th width="140">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php $no=1; foreach($pasien as $p): ?>

                        <tr>

                            <td><?= $no++; ?></td>

                            <td>
                                <strong><?= $p->nama; ?></strong>
                            </td>

                            <td><?= $p->tanggal_lahir; ?></td>

                            <td><?= $p->alamat; ?></td>

                            <td>
                                <span class="badge badge-info p-2">
                                    <?= $p->no_telp; ?>
                                </span>
                            </td>

                            <td>

                                <a href="<?= site_url('pasien/edit/'.$p->id_pasien); ?>"
                                   class="btn btn-primary btn-sm">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <a href="<?= site_url('pasien/hapus/'.$p->id_pasien); ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')">

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