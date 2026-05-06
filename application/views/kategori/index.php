<div class="container-fluid">

    <h2 class="h3 mb-4 text-gray-900">Data Kategori</h2>

    <!-- Tombol Tambah -->
    <a href="<?= site_url('kategori/tambah'); ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Kategori
    </a>

    <!-- Notifikasi -->
    <?php if($this->session->flashdata('succes')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('succes'); ?>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">

                <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
                    
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if(!empty($kategori)): ?>
                            <?php $no = 1; foreach($kategori as $k): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $k->nama_kategori; ?></td>
                                    <td>
                                        <a href="<?= site_url('kategori/edit/'.$k->id); ?>" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <a href="<?= site_url('kategori/hapus/'.$k->id); ?>" 
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