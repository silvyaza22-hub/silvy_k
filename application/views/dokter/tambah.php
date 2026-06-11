<div class="container-fluid">

    <div class="card shadow mb-4">

        <div class="card-header">
            <h4>
                <i class="fas fa-user-md mr-2"></i>
                Tambah Data Dokter
            </h4>
        </div>

        <div class="card-body">

            <form method="post" action="<?= site_url('dokter/simpan'); ?>">

                <div class="form-group">
                    <label>
                        <i class="fas fa-user-md mr-1"></i>
                        Nama Dokter
                    </label>
                    <input type="text"
                           name="nama_dokter"
                           class="form-control"
                           placeholder="Masukkan nama dokter"
                           required>
                </div>

                <div class="form-group">
                    <label>
                        <i class="fas fa-stethoscope mr-1"></i>
                        Spesialis
                    </label>
                    <input type="text"
                           name="spesialis"
                           class="form-control"
                           placeholder="Contoh: Umum, Anak, Jantung, Gigi"
                           required>
                </div>

                <hr>

                <div class="text-right">

                    <a href="<?= site_url('dokter'); ?>"
                       class="btn btn-light border">
                        <i class="fas fa-arrow-left mr-1"></i>
                        Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        <i class="fas fa-save mr-1"></i>
                        Simpan Data
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>