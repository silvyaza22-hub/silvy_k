
<div class="card border-0 shadow-lg mb-4"
     style="border-radius:25px;
            background:linear-gradient(135deg,#0f4c81,#42a5f5);">

    <div class="card-body p-5 text-white">

        <div class="row align-items-center">

            <div class="col-md-8">

                <h2 class="font-weight-bold">
                    🏥 Sistem Informasi Rumah Sakit
                </h2>

                <p class="lead mb-0">
                    Kelola data pasien, dokter dan pendaftaran
                    dengan cepat dan mudah.
                </p>

            </div>

            <div class="col-md-4 text-center">

                <i class="fas fa-hospital-alt"
                   style="font-size:100px;opacity:.2;"></i>

            </div>

        </div>

    </div>

</div>


<div class="row">

    <div class="col-md-4 mb-4">

        <div class="card border-0 shadow"
             style="border-radius:20px;">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <small class="text-muted">
                            Total Pasien
                        </small>

                        <h1 class="font-weight-bold text-primary">
                            <?= $total_pasien ?>
                        </h1>

                    </div>

                    <i class="fas fa-user-injured
                              fa-4x text-primary"></i>

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-4">

        <div class="card border-0 shadow"
             style="border-radius:20px;">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <small class="text-muted">
                            Total Dokter
                        </small>

                        <h1 class="font-weight-bold text-success">
                            <?= $total_dokter ?>
                        </h1>

                    </div>

                    <i class="fas fa-user-md
                              fa-4x text-success"></i>

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-4">

        <div class="card border-0 shadow"
             style="border-radius:20px;">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <small class="text-muted">
                            Total Pendaftaran
                        </small>

                        <h1 class="font-weight-bold text-warning">
                            <?= $total_pendaftaran ?>
                        </h1>

                    </div>

                    <i class="fas fa-notes-medical
                              fa-4x text-warning"></i>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="row">

    <div class="col-lg-8">

        <div class="card border-0 shadow"
             style="border-radius:20px;">

            <div class="card-header bg-white">

                <h5 class="font-weight-bold text-primary mb-0">
                    Menu Cepat
                </h5>

            </div>

            <div class="card-body text-center">

                <a href="<?= site_url('pasien'); ?>"
                   class="btn btn-primary m-2">
                    Data Pasien
                </a>

                <a href="<?= site_url('dokter'); ?>"
                   class="btn btn-success m-2">
                    Data Dokter
                </a>

                <a href="<?= site_url('pendaftaran'); ?>"
                   class="btn btn-warning m-2">
                    Pendaftaran
                </a>

                <a href="<?= site_url('laporan'); ?>"
                   class="btn btn-info m-2">
                    Laporan
                </a>

            </div>

        </div>

    </div>

    <div class="col-lg-4">

        <div class="card border-0 shadow"
             style="border-radius:20px;">

            <div class="card-body text-center">

                <i class="fas fa-calendar-check
                          fa-4x text-primary mb-3"></i>

                <h5>
                    <?= date('d F Y'); ?>
                </h5>

                <span class="badge badge-success">
                    Sistem Aktif
                </span>

            </div>

        </div>

    </div>

</div>
```
