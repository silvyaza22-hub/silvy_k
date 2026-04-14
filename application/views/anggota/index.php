<div class="container-fluid">
    <h2 class="h3 mb-4 text-gray-800">Data Anggota</h2>

    <a href="<?= site_url('anggota/tambah'); ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah
    </a>

    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <div class="card shadow">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nomor Anggota</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($anggota as $a): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a->nomor_anggota ?></td>
                            <td><?= $a->nama ?></td>
                            <td><?= $a->telepon ?></td>
                            <td><?= $a->email ?></td>

                            <td>
                                <?php if($a->status == 1): ?>
                                    <span class="badge badge-success">Aktif</span>
                                <?php else: ?>
                                    <span class="badge badge-danger">Tidak Aktif</span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <a href="<?= site_url('anggota/edit/'.$a->nomor_anggota); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= site_url('anggota/hapus/'.$a->nomor_anggota); ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin hapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>