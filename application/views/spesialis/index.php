<div class="container-fluid">

    <h2 class="h3 mb-4 text-gray-900">Data Spesialis</h2>

    <!-- Tombol Tambah -->
    <a href="<?= site_url('spesialis/tambah'); ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Spesialis
    </a>

    <!-- Notifikasi -->
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">

                <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">

                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Spesialis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if(!empty($spesialis)): ?>
                            <?php $no = 1; foreach($spesialis as $s): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $s->nama_spesialis; ?></td>
                                    <td>
                                        <a href="<?= site_url('spesialis/edit/'.$s->id); ?>"
                                           class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <a href="<?= site_url('spesialis/hapus/'.$s->id); ?>"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Yakin ingin hapus?')">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" class="text-center">Data kosong</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>

</div>