<div class="container-fluid">

    <!-- WELCOME CARD -->
    <div class="card border-0 shadow-lg mb-4"
         style="border-radius:25px;
         background:linear-gradient(135deg,#667eea,#764ba2);">

        <div class="card-body p-5 text-white">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <h2 class="font-weight-bold">
                        👋 Selamat Datang,
                        <?= $this->session->userdata('nama_pasien'); ?>
                    </h2>

                    <p class="lead mb-0">
                        Pantau status pendaftaran dan jadwal kunjungan Anda.
                    </p>

                </div>

                <div class="col-md-4 text-center">

                    <i class="fas fa-user-circle"
                       style="font-size:100px;opacity:.25;"></i>

                </div>

            </div>

        </div>

    </div>

    <!-- STATISTIK -->
    <div class="row">

        <div class="col-md-3 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body text-center">
                    <i class="fas fa-notes-medical fa-2x text-primary mb-2"></i>
                    <h2><?= $total_daftar ?></h2>
                    <small>Total Pendaftaran</small>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body text-center">
                    <i class="fas fa-check-circle fa-2x text-success mb-2"></i>
                    <h2><?= $total_disetujui ?></h2>
                    <small>Disetujui</small>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body text-center">
                    <i class="fas fa-clock fa-2x text-warning mb-2"></i>
                    <h2><?= $total_proses ?></h2>
                    <small>Diproses</small>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body text-center">
                    <i class="fas fa-times-circle fa-2x text-danger mb-2"></i>
                    <h2><?= $total_ditolak ?></h2>
                    <small>Ditolak</small>
                </div>
            </div>
        </div>

    </div>

    <!-- PROFIL PASIEN -->
    <div class="card shadow border-0 mb-4"
         style="border-radius:20px;">

        <div class="card-header bg-white">
            <h5 class="font-weight-bold text-primary mb-0">
                👤 Informasi Pasien
            </h5>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6">
                    <strong>Nama</strong><br>
                    <?= $this->session->userdata('nama_pasien'); ?>
                </div>

                <div class="col-md-6">
                    <strong>Email</strong><br>
                    <?= $this->session->userdata('email_pasien'); ?>
                </div>

            </div>

        </div>

    </div>

    <!-- TOMBOL -->
    <div class="mb-4">

        <a href="<?= site_url('pendaftaran_pasien/tambah'); ?>"
           class="btn btn-primary btn-lg shadow">

            <i class="fas fa-plus-circle"></i>
            Daftar Berobat

        </a>

    </div>

    <!-- RIWAYAT -->
    <div class="card border-0 shadow-lg"
         style="border-radius:20px;">

        <div class="card-header bg-white">

            <h5 class="font-weight-bold text-primary mb-0">
                📋 Riwayat Pendaftaran
            </h5>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover">

                    <thead class="thead-light">

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

                    <?php $no=1; foreach($pendaftaran as $p){ ?>

                    <tr>

                        <td><?= $no++; ?></td>
                        <td>👨‍⚕️ <?= $p->nama_dokter; ?></td>
                        <td><?= $p->keluhan; ?></td>
                        <td><?= $p->tanggal_daftar; ?></td>
                        <td><?= $p->jam_kunjungan; ?></td>

                        <td>

                            <?php if($p->status=='Disetujui'){ ?>

                                <span class="badge badge-success p-2">
                                    ✓ Disetujui
                                </span>

                            <?php } elseif($p->status=='Ditolak'){ ?>

                                <span class="badge badge-danger p-2">
                                    ✕ Ditolak
                                </span>

                            <?php } else { ?>

                                <span class="badge badge-warning p-2">
                                    ⏳ Diproses
                                </span>

                            <?php } ?>

                        </td>

                    </tr>

                    <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>