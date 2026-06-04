<div class="container-fluid">

    <h2 class="h3 mb-4 text-gray-800">
        <i class="fas fa-calendar-check"></i> Data Pendaftaran Pasien
    </h2>

    <a href="<?= site_url('pendaftaran/tambah'); ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Pendaftaran
    </a>

    <?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <?= $this->session->flashdata('success'); ?>
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <?php if($this->session->flashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <?= $this->session->flashdata('error'); ?>
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead style="background:#800020; color:white;">
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>Dokter</th>
                            <th>Keluhan</th>
                            <th>Tanggal Daftar</th>
                            <th>Jam Kunjungan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no=1; foreach($data as $d): ?>
                        <tr>

                            <td><?= $no++; ?></td>
                            <td><?= $d->nama_pasien; ?></td>
                            <td><?= $d->nama_dokter; ?></td>
                            <td><?= $d->keluhan; ?></td>
                            <td><?= $d->tanggal_daftar; ?></td>
                            <td><?= $d->jam_kunjungan; ?></td>

                            <td>
                                <?php if($d->status == 'Diproses'): ?>
                                    <span class="badge badge-warning">Menunggu</span>

                                <?php elseif($d->status == 'Disetujui'): ?>
    <span class="badge badge-maroon">Disetujui</span>
                                <?php else: ?>
                                    <span class="badge badge-danger">Ditolak</span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <a href="<?= site_url('pendaftaran/edit/'.$d->id_daftar); ?>"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="<?= site_url('pendaftaran/hapus/'.$d->id_daftar); ?>"
                                   onclick="return confirm('Yakin hapus data ini?')"
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